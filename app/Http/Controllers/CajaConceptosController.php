<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CajaConcepto;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\updateCajaConcepto;
use App\Http\Requests\createCajaConcepto;

class CajaConceptosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$cajaConceptos = CajaConcepto::getAllData($request);

		return view('cajaConceptos.index', compact('cajaConceptos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('cajaConceptos.create')
			->with( 'list', CajaConcepto::getListFromAllRelationApps() );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(createCajaConcepto $request)
	{

		$input = $request->all();
		$input['usu_alta_id']=Auth::user()->id;
		$input['usu_mod_id']=Auth::user()->id;
                if(!isset($input['activo'])){
			$input['activo']=0;
		}else{
			$input['activo']=1;
		}
                
		//create data
		CajaConcepto::create( $input );

		return redirect()->route('cajaConceptos.index')->with('message', 'Registro Creado.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id, CajaConcepto $cajaConcepto)
	{
		$cajaConcepto=$cajaConcepto->find($id);
		return view('cajaConceptos.show', compact('cajaConcepto'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id, CajaConcepto $cajaConcepto)
	{
		$cajaConcepto=$cajaConcepto->find($id);
		return view('cajaConceptos.edit', compact('cajaConcepto'))
			->with( 'list', CajaConcepto::getListFromAllRelationApps() );
	}

	/**
	 * Show the form for duplicatting the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function duplicate($id, CajaConcepto $cajaConcepto)
	{
		$cajaConcepto=$cajaConcepto->find($id);
		return view('cajaConceptos.duplicate', compact('cajaConcepto'))
			->with( 'list', CajaConcepto::getListFromAllRelationApps() );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update($id, CajaConcepto $cajaConcepto, updateCajaConcepto $request)
	{
		$input = $request->all();
		$input['usu_mod_id']=Auth::user()->id;
		if(!isset($input['activo'])){
			$input['activo']=0;
		}else{
			$input['activo']=1;
		}
                //update data
		$cajaConcepto=$cajaConcepto->find($id);
		$cajaConcepto->update( $input );

		return redirect()->route('cajaConceptos.index')->with('message', 'Registro Actualizado.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id,CajaConcepto $cajaConcepto)
	{
		$cajaConcepto=$cajaConcepto->find($id);
		$cajaConcepto->delete();

		return redirect()->route('cajaConceptos.index')->with('message', 'Registro Borrado.');
	}

        public function getCostoConcepto(Request $request){
            $input=$request->all();
            $data= CajaConcepto::find($input['concepto']);
            echo json_encode($data->monto);
        }
}