<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aviso;
use App\Lectivo;
use App\AvisoGral;
use App\PivotAvisoGralEmpleado;
use App\Seguimiento;
use App\StSeguimiento;
use App\Empleado;
use App\Plantel;
use App\Menu;
use DB;
use Auth;
use Activity;
use Log;

class HomeController extends Controller
{
    public $menuArmado="";
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $f=date("Y-m-d");
        $l=Lectivo::find(0)->first();

        /*Avisos del usuario
         * 
         */
        $e=Empleado::where('user_id', '=', Auth::user()->id)->first();
        $avisos=Aviso::select('avisos.id','a.name','avisos.detalle', 'avisos.fecha', 's.cliente_id')
       		->join('asuntos as a', 'a.id', '=', 'avisos.asunto_id')
                    ->join('seguimientos as s', 's.id', '=', 'avisos.seguimiento_id')
                    ->join('clientes as c', 'c.id', '=', 's.cliente_id')
		->where('avisos.activo', '=', '1')
                    ->where('avisos.fecha', '<=', Db::Raw('CURDATE()'))
                    ->where('c.empleado_id', '=', $e->id)
					->get();
        //dd($avisos);
        /* Fin avisos del usuario
         * 
         */
        $mes=(int)date('m');
        //dd($mes);
        /*
         * Cuadros con numeros
         */
        $a_1=Seguimiento::select(Db::raw('count(c.nombre) as total'))
                    ->where('st_seguimiento_id', '=', 1)
                    ->join('clientes as c', 'c.id', '=', 'seguimientos.cliente_id')
                    //->where('mes', '=', $mes)
                    ->where('c.plantel_id', '=', $e->plantel_id)
                    ->where('c.empleado_id', '=', $e->id)
                    ->value('total');
        //dd($a_1);
        $a_2=Seguimiento::where('st_seguimiento_id', '=', 2)
                    ->join('clientes as c', 'c.id', '=', 'seguimientos.cliente_id')
                    //->where('mes', '=', $mes)
                    ->where('seguimientos.created_at', '>=', $l->inicio)
                    ->where('seguimientos.created_at', '<=', $l->fin)
                    ->where('c.empleado_id', '=', $e->id)
                    ->where('c.plantel_id', '=', $e->plantel_id)
                    ->count();
        //dd($e->plantel->meta_venta);
        $avance=0;
        if($a_2>0){
            $avance=(($a_2*100)/$e->plantel->meta_total);
        }
        
        //dd($a_3."*100 / ".$e->plantel->meta_venta);
        $a_3=Seguimiento::where('st_seguimiento_id', '=', 3)
                    ->join('clientes as c', 'c.id', '=', 'seguimientos.cliente_id')
                    //->where('mes', '=', $mes)
                    ->where('c.empleado_id', '=', $e->id)
                    ->where('c.plantel_id', '=', $e->plantel_id)
                    ->count();
        
        $a_4=Seguimiento::where('st_seguimiento_id', '=', 4)
                    ->join('clientes as c', 'c.id', '=', 'seguimientos.cliente_id')
                    //->where('mes', '=', $mes)
                    ->where('c.empleado_id', '=', $e->id)
                    ->where('c.plantel_id', '=', $e->plantel_id)
                    ->count();
        
        /*
         * Fin cuadros con numeros
         */
        
        /*graficas de velocimetro
         * 
         */
        $gauge=array();
        if(!Auth::user()->can('WgaugesXplantelIndividual')){
            $plantels=DB::table('plantels as p')->where('id', '>', 0)
                       ->select('razon', 'id', 'meta_total')->get();
            foreach($plantels as $p){
                $c=Seguimiento::select('p.id','p.razon', 'p.meta_total', 
                        DB::raw('count(c.nombre) as avance'), DB::raw('((count(c.nombre)*100)/p.meta_total) as p_avance'))
                        ->join('clientes as c', 'c.id', '=', 'seguimientos.cliente_id')
                        ->join('plantels as p', 'p.id', '=', 'c.plantel_id')
                        ->join('hactividades as h', 'h.cliente_id', '=', 'c.id')
                        ->where('h.tarea', '=', 'Seguimiento')
                        ->where('h.detalle', '=', 'Concretado')
                        ->where('h.created_at', '>=', $l->inicio)
                        ->where('h.created_at', '<=', $l->fin)
                        ->where('c.st_cliente_id', '=', '4')
                        ->where('p.id', '=', $p->id)
                        ->groupBy('p.id')
                        ->groupBy('p.razon')
                        ->groupBy('p.meta_total')
                        ->first();
                if(is_null($c)){
                    array_push($gauge, array('id'=>$p->id,'razon'=>$p->razon,'meta_total'=>$p->meta_total,'avance'=>0, 'p_avance'=>0));
                }else {
                    array_push($gauge, $c->toArray());
                }
            }
        }else{
            $plantels=DB::table('plantels as p')->where('id', '>', 0)->where('id', '=', $e->plantel_id)
                       ->select('razon', 'id', 'meta_total')->get();
            foreach($plantels as $p){
                $c=Seguimiento::select('p.id','p.razon', 'p.meta_total', 
                        DB::raw('count(c.nombre) as avance'), DB::raw('((count(c.nombre)*100)/p.meta_total) as p_avance'))
                        ->join('clientes as c', 'c.id', '=', 'seguimientos.cliente_id')
                        ->join('plantels as p', 'p.id', '=', 'c.plantel_id')
                        ->join('hactividades as h', 'h.cliente_id', '=', 'c.id')
                        ->where('h.tarea', '=', 'Seguimiento')
                        ->where('h.detalle', '=', 'Concretado')
                        ->where('h.created_at', '>=', $l->inicio)
                        ->where('h.created_at', '<=', $l->fin)
                        ->where('c.st_cliente_id', '=', '4')
                        ->where('p.id', '=', $p->id)
                        ->groupBy('p.id')
                        ->groupBy('p.razon')
                        ->groupBy('p.meta_total')
                        ->first();
                if(is_null($c)){
                    array_push($gauge, array('id'=>$p->id,'razon'=>$p->razon,'meta_total'=>$p->meta_total,'avance'=>0, 'p_avance'=>0));
                }else {
                    array_push($gauge, $c->toArray());
                }
            }
        }
        /*
         * Fin graficas e velocimetro
         */
        
        //dd($a_2);
        //dd($gauges);
        
        $fecha=date('Y-m-d');
        $avisos_generales=PivotAvisoGralEmpleado::where('leido','=', 0)
                                    ->where('enviado','=', 1)
                                    ->where('empleado_id', '=', $e->id)
                                    ->get();
        //dd($avisos_generales);
        $encabezado = ['Estatus', 'Cantidad Total', 'Meta'];
        $datos=array();
        array_push($datos,$encabezado);
        $encabezado = ['Estatus', 'Cantidad Total'];
        $datos2=array();
        array_push($datos2,$encabezado);
        $mes=(int)date('m');
        $grafica=Seguimiento::select('sts.name as estatus', DB::raw('count(sts.name) as valor'))
                    ->join('clientes as c', 'c.id', '=', 'seguimientos.cliente_id')
                    ->join('st_seguimientos as sts', 'sts.id','=','seguimientos.st_seguimiento_id')
                    //->where('mes', '=', $mes)
                    ->where('seguimientos.created_at', '>=', $l->inicio)
                    ->where('seguimientos.created_at', '<=', $l->fin)
                    ->where('c.empleado_id', '=', $e->id)
                    ->where('c.plantel_id', '=', $e->plantel_id)
                    ->where('sts.id', '=', 2)
                    ->groupBy('sts.name')
                    ->get();
        
        foreach($grafica as $g){
            if($g->estatus=="Concretado"){
                array_push($datos, array($g->estatus, $g->valor, $e->plantel->meta_venta));
            }else{
                array_push($datos, array($g->estatus, $g->valor, 0));
            }
            
        }
        
        $grafica2=Seguimiento::select('sts.name as estatus', DB::raw('count(sts.name) as valor'))
                    ->join('clientes as c', 'c.id', '=', 'seguimientos.cliente_id')
                    ->join('st_seguimientos as sts', 'sts.id','=','seguimientos.st_seguimiento_id')
                    //->where('mes', '=', $mes)
                    ->where('c.empleado_id', '=', $e->id)
                    ->where('c.plantel_id', '=', $e->plantel_id)
                    ->whereIn('sts.id', [1,3,4])
                    ->groupBy('sts.name')
                    ->get();
        foreach($grafica2 as $g){
            array_push($datos2, array($g->estatus, $g->valor));
        }
        //dd($datos2);
        
        /*
         * Graficas de valores para directores
         */
        $filtros['plantel_f']=$e->plantel_id;
        //dd($e);
        $f = date("Y-m-d");
        $l = Lectivo::find(0)->first();
        $tabla=array();
        $encabezado=array();
        $encabezado[0]='Empleado';
        $estatus = StSeguimiento::where('id','>',0)->get();
        $empleados = Empleado::where('plantel_id','=', $filtros['plantel_f'])
                             ->where('puesto_id', '=', 2)
                             ->where('id', '>', 0)
                             ->get();
        //dd($empleados->toArray());
        $i=1;
        foreach($estatus as $st){
            if($st->id>0){
                $encabezado[$i]=$st->name;
                $i++;
            }
        }
        array_push($tabla, $encabezado);
        //dd($encabezado);
        foreach($empleados as $em){
            $linea=array();
            $i=0;
            $linea[$i]=$em->nombre." ".$em->ape_paterno." ".$em->ape_materno;
            foreach($estatus as $st){
               $i++;
                if($st->id==2){
                   $valor=Seguimiento::select(DB::raw('count(st.name) as total'))
                            ->join('st_seguimientos as st', 'st.id', '=', 'seguimientos.st_seguimiento_id')
                            ->join('clientes as c', 'c.id', '=', 'seguimientos.cliente_id')
                            ->join('empleados as e', 'e.id', '=', 'c.empleado_id')
                            ->where('st_seguimiento_id', '=', $st->id)
                            ->where('e.id', '=', $em->id)
                            ->where('c.plantel_id', '=', $filtros['plantel_f'])
                            ->where('seguimientos.created_at', '>=', $l->inicio)
                            ->where('seguimientos.created_at', '<=', $l->fin)
                            ->value('total');
                   
               }elseif($st->id>0){
                   $valor=Seguimiento::select(DB::raw('count(st.name) as total'))
                            ->join('st_seguimientos as st', 'st.id', '=', 'seguimientos.st_seguimiento_id')
                            ->join('clientes as c', 'c.id', '=', 'seguimientos.cliente_id')
                            ->join('empleados as e', 'e.id', '=', 'c.empleado_id')
                            ->where('st_seguimiento_id', '=', $st->id)
                            ->where('e.id', '=', $em->id)
                            ->where('c.plantel_id', '=', $filtros['plantel_f'])
                            ->value('total');
                   //dd('stop fil');
               } 
               $linea[$i]=$valor;
            }
            array_push($tabla, $linea);
        }
        //dd($tabla);
        $p=Plantel::find($filtros['plantel_f']);
        $plantel=$p->razon;
        //dd($plantel);
        
        /*
         * Fin Graficas de valores para directores
         */
        
        /* tabla de estatus por plantel
         * 
         */
        $estatusPlantel=Seguimiento::select('st.name as estatus', DB::raw('count(st.name) as total'))
                            ->join('st_seguimientos as st', 'st.id', '=', 'seguimientos.st_seguimiento_id')
                            ->join('clientes as c', 'c.id', '=', 'seguimientos.cliente_id')
                            ->join('empleados as e', 'e.id', '=', 'c.empleado_id')
                            ->where('c.plantel_id', '=', $filtros['plantel_f'])
                            ->where('e.id', '>', 0)
                            ->where('e.puesto_id', '=', 2)
                            ->where('st.id', '>', 0)
                            ->groupBy('st.name')
                            ->get();
        //dd($estatusPlantel->toArray());
        $tsuma=0;
        foreach($estatusPlantel as $ep){
            $tsuma=$tsuma+$ep->total;
        }
        /* Fin tabla de estatus por plantel
         * 
         */
        //dd($estatusPlantel->toArray());
        return view('home', compact('avisos', 'a_1', 'a_2', 'a_3', 'a_4', 'grafica2','grafica', 
                                    'avisos_generales', 'avance', 'gauge', 'tabla', 'plantel','estatusPlantel', 'tsuma'))
                    ->with('datos_grafica', json_encode($tabla))
                    ->with('datos', json_encode($datos))
                    ->with('datos2', json_encode($datos2));
    }

    public function grfEstatusXEmpleado(){
        $e=Empleado::where('user_id', '=', Auth::user()->id)->first();
        $mes=(int)date('m');
        return $grafica=Seguimiento::select('sts.name as Estatus', DB::raw('count(sts.name) as Valor'))
                    ->join('clientes as c', 'c.id', '=', 'seguimientos.cliente_id')
                    ->join('st_seguimientos as sts', 'sts.id','=','seguimientos.st_seguimiento_id')
                    //->where('mes', '=', $mes)
                    ->where('c.empleado_id', '=', $e->id)
                    ->where('c.plantel_id', '=', $e->plantel_id)
                    ->groupBy('sts.name')
                    ->get()->toJson();
    }

    public function armaMenuPrimario($padre=1){
    	//$menu=$this->menuRepository->search(array('padre'=>$padre));
    	//$usuario_actual=User::find(Auth::user()->id)->is('admin');
    	$menu=Menu::where('padre', $padre)
                ->where('activo', true)
                ->orderBy('prioridad', 'asc')->get();

        //dd($menu);
    	
    	if(!empty($menu)){
    		//dd($menu);
    		foreach($menu as $item){
    			//$permiso=User::find(Auth::user()->id)->can($item->permiso);

    			if ($item->permiso<>"home"){
    				$permiso=Auth::user()->can($item->permiso);
    			}else{
    				$permiso=true;
    			}
    			$link=route($item->link);
    			//dd($permiso);
    			if($permiso and $item->activo==1 and $item->parametros=="_blank"){
    				$this->menuArmado=$this->menuArmado."<li class='active'><a href='".$link."' target='".$item->parametros."'><i class='".$item->imagen."'></i><span>".$item->item."</span></a></li>";
    			}
    		}
    	}
    	
    	//dd($this->menuArmado);
    	return $this->menuArmado;
    }

	public function armaMenu($padre=1){
		if (session()->has('menu')) {
		    return session('menu');
		}
		else{
			$m=$this->armaMenuPrincipal();	
	    	session(['menu' => $m]);

	    	//dd($this->menuArmado);
	    	return session('menu');
	    	//return $this->menuArmado;
    	}
    	
    }	
	public function armaMenu2($padre=43){
		if (session()->has('menu2')) {
		    //Log::info(session('menu2'));
			return session('menu2');
			
		}
		else{
			$m=$this->armaMenuPrincipal($padre);	
	    	session(['menu2' => $m]);

	    	//dd($this->menuArmado);
	    	return session('menu2');
	    	//return $this->menuArmado;
    	}
    	
    }	

    public function armaMenuPrincipal($padre=1){
    				
    	//$menu=$this->menuRepository->search(array('padre'=>$padre));
    	//$usuario_actual=User::find(Auth::user()->id)->is('admin');
    	$menu=Menu::where('padre', $padre)
                ->where('activo', true)
                ->orderBy('prioridad', 'asc')->get();

        //dd($menu);
    	
    	if(!empty($menu)){
    		//dd($menu);
    		foreach($menu as $item){
    			//$permiso=User::find(Auth::user()->id)->can($item->permiso);

    			if ($item->permiso<>"home" and $item->permiso<>"logout"){
    				
					$permiso=Auth::user()->can($item->permiso);
					
    			}else{
					//dd($item->permiso);
    				$permiso=true;
    			}
    			$link=route($item->link);
    			//dd($permiso);
    			if($permiso and $item->activo==1){
    				//dd($item->id);
	    			$r=intval($this->tieneItems($item->id));
	    			//dd(action($item->link));
	    			
	    			if($r==1){
	    				$this->menuArmado=$this->menuArmado."<li class='treeview'>
									                <a href=' ".$link." '>
														<i class='".$item->imagen."'></i><span>".$item->item."</span> <i class='fa fa-angle-left pull-right'></i>
													</a>
									                <ul class='treeview-menu'>";
						$this->menuArmado=$this->armaMenuPrincipal($item->id);
						$this->menuArmado=$this->menuArmado."</ul></li>";

	    			}else{
	    				//dd($this->menuArmado);
	    				$this->menuArmado=$this->menuArmado."<li class='active'><a href='".$link."'><i class='".$item->imagen."'></i><span>".$item->item."</span></a></li>";
	    			}
	    			//Log::info($this->menuArmado);
    			}
    		}
    		return $this->menuArmado;
    	}
    	
    	
    	//dd($this->menuArmado);
    	
    	//return $this->menuArmado;
    	
    }

    public function tieneItems($padre){
    	$menu=Menu::where('padre', $padre)->where('activo', true)->count();

		//dd($menu);
    	if($menu==0){
    		return -1;
    	}
    	else{
    		return 1;
    	}
    }
    
    public function WidgetsMetaEspecialidad(){
        $e=Empleado::where('user_id', '=', Auth::user()->id)->first();
        if(!Auth::user()->can('WgaugesXplantelIndividual')){
            $planteles=DB::table('plantels')->where('id', '>', 0)->get();
        }else{
            $planteles=DB::table('plantels')->where('id', '>', 0)->where('id','=',$e->plantel_id)->get();
        }
        
        //dd($planteles);
        $gauge=array();
        foreach($planteles as $plantel){
            //Log::info("plantel:".$plantel->id);
            $especialidades=DB::table('especialidads')
                    ->where('id', '>', 0)
                    ->where('especialidads.plantel_id', '=', $plantel->id)
                    ->get();
            //dd($especialidades);
            
            $empleados=DB::table('empleados')
                ->where('plantel_id', '=', $plantel->id)
                ->where('puesto_id', '=', 2)
                ->get();
            
            //dd($empleados);
            
            
            $fecha=date('Y-m-d');
            foreach($especialidades as $especialidad){
                //Log::info("especialidad:".$especialidad->id);
                $lectivo=array();
                if($especialidad->bnd_usar_lectivo==1){
                    $lectivo=DB::table('lectivos')
                                ->where('inicio', '<=', $fecha)
                                ->where('fin', '>=', $fecha)
                                ->where('id', '>', 0)
                                ->where('carrera_bnd', '=', 1)
                                ->first();
                }
                //dd($lectivo);
                //Log::info($lectivo);
                $i=0;
                foreach($empleados as $empleado){
                    $cs=Seguimiento::select(DB::raw('concat(p.id,e.id,emp.id) as id'),
                            'p.razon', 'e.name as especialidad', 'l.fin',
                        DB::raw('concat(emp.nombre, " ", emp.ape_paterno, " ", emp.ape_materno) as empleado'),
                        'e.meta', 'p.id as plantel_id', 'e.id as especialidad_id', 'emp.id as empleado_id',
                        DB::raw('count(c.nombre) as avance'), DB::raw('((count(c.nombre)*100)/e.meta) as p_avance'))
                        ->join('clientes as c', 'c.id', '=', 'seguimientos.cliente_id')
                        ->join('combinacion_clientes as cc', 'cc.cliente_id', '=', 'c.id')
                        ->join('plantels as p', 'p.id', '=', 'cc.plantel_id')
                        ->join('especialidads as e', 'e.id', '=', 'cc.especialidad_id')
                        ->join('lectivos as l', 'l.id', '=', 'e.lectivo_id')
                        ->join('empleados as emp', 'emp.id', '=', 'c.empleado_id')
                        ->join('hactividades as h', 'h.cliente_id', '=', 'c.id')
                        ->where('h.tarea', '=', 'Seguimiento')
                        ->where('h.detalle', '=', 'Concretado')
                        ->where('cc.bnd_inscrito', '=', 1)
                        ->whereColumn('h.created_at', '>=', 'l.inicio')
                        ->whereColumn('h.created_at', '<=', 'l.fin')
                        ->where('e.id', '=', $especialidad->id)
                        ->where('emp.id', '=', $empleado->id)
                        ->where('c.st_cliente_id', '=', '4')
                        ->groupBy('p.id')
                        ->groupBy('e.id')
                        ->groupBy('emp.id')
                        ->groupBy('p.razon')
                        ->groupBy('e.name')
                        ->groupBy('e.meta')
                        ->groupBy('l.fin')
                        ->groupBy('emp.nombre')
                        ->groupBy('emp.ape_paterno')
                        ->groupBy('emp.ape_materno')
                        ->first();
                    
                    
                    /*$cs=Seguimiento::select(DB::raw('concat(p.id,e.id,emp.id) as id'),
                                'p.razon', 'e.name as especialidad', 'l.fin',
                            DB::raw('concat(emp.nombre, " ", emp.ape_paterno, " ", emp.ape_materno) as empleado'),
                            'e.meta', 'p.id as plantel_id', 'e.id as especialidad_id', 'emp.id as empleado_id',
                            DB::raw('count(c.nombre) as avance'), DB::raw('((count(c.nombre)*100)/e.meta) as p_avance'))
                            ->join('clientes as c', 'c.id', '=', 'seguimientos.cliente_id')
                            ->join('plantels as p', 'p.id', '=', 'c.plantel_id')
                            ->join('especialidads as e', 'e.id', '=', 'c.especialidad_id')
                            ->join('lectivos as l', 'l.id', '=', 'e.lectivo_id')
                            ->join('empleados as emp', 'emp.id', '=', 'c.empleado_id')
                            ->join('hactividades as h', 'h.cliente_id', '=', 'c.id')
                            ->where('h.tarea', '=', 'Seguimiento')
                            ->where('h.detalle', '=', 'Concretado')
                            ->whereColumn('h.created_at', '>=', 'l.inicio')
                            ->whereColumn('h.created_at', '<=', 'l.fin')
                            ->where('e.id', '=', $especialidad->id)
                            ->where('emp.id', '=', $empleado->id)
                            ->where('c.st_cliente_id', '=', '4')
                            ->groupBy('p.id')
                            ->groupBy('e.id')
                            ->groupBy('emp.id')
                            ->groupBy('p.razon')
                            ->groupBy('e.name')
                            ->groupBy('e.meta')
                            ->groupBy('l.fin')
                            ->groupBy('emp.nombre')
                            ->groupBy('emp.ape_paterno')
                            ->groupBy('emp.ape_materno')
                            ->first();
                    */
                    //dd($cs->toArray());
                    if(!is_null($cs)){
                        array_push($gauge, $cs->toArray());
                    }
                    
                }
            }
        }
        //dd($gauge);
        return view('gauges_especialidad', compact('gauge'));
    }
    
    public function tieneAvisos(){
        $e=Empleado::where('user_id', '=', Auth::user()->id)->first();
        $avisos_generales=PivotAvisoGralEmpleado::where('leido','=', 0)
                                    ->where('enviado','=', 1)
                                    ->where('empleado_id', '=', $e->id)
                                    ->get();
        $total_msj=0;
        foreach($avisos_generales as $ag){
            $total_msj++;
        }
        return $total_msj;
    }
        
}
