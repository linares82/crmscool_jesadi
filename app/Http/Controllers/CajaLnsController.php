<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CajaLn;
use App\Caja;
use App\Cliente;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\updateCajaLn;
use App\Http\Requests\createCajaLn;

class CajaLnsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$cajaLns = CajaLn::getAllData($request);

		return view('cajaLns.index', compact('cajaLns'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('cajaLns.create')
			->with( 'list', CajaLn::getListFromAllRelationApps() );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(createCajaLn $request)
	{

		$input = $request->all();
		$input['usu_alta_id']=Auth::user()->id;
		$input['usu_mod_id']=Auth::user()->id;

		//create data
		CajaLn::create( $input );

		return redirect()->route('cajaLns.index')->with('message', 'Registro Creado.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id, CajaLn $cajaLn)
	{
		$cajaLn=$cajaLn->find($id);
		return view('cajaLns.show', compact('cajaLn'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id, CajaLn $cajaLn)
	{
		$cajaLn=$cajaLn->find($id);
		return view('cajaLns.edit', compact('cajaLn'))
			->with( 'list', CajaLn::getListFromAllRelationApps() );
	}

	/**
	 * Show the form for duplicatting the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function duplicate($id, CajaLn $cajaLn)
	{
		$cajaLn=$cajaLn->find($id);
		return view('cajaLns.duplicate', compact('cajaLn'))
			->with( 'list', CajaLn::getListFromAllRelationApps() );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update($id, CajaLn $cajaLn, updateCajaLn $request)
	{
		$input = $request->all();
		$input['usu_mod_id']=Auth::user()->id;
		//update data
		$cajaLn=$cajaLn->find($id);
		$cajaLn->update( $input );

		return redirect()->route('cajaLns.index')->with('message', 'Registro Actualizado.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id,CajaLn $cajaLn)
	{
                
		$cajaLn=$cajaLn->find($id);
                $caja=Caja::find($cajaLn->caja_id);
                $caja->subtotal=$caja->subtotal-$cajaLn->subtotal;
                $caja->recargo=$caja->recargo-$cajaLn->recargo;
                $caja->descuento=$caja->descuento-$cajaLn->descuento;
                $caja->total=$caja->total-$cajaLn->total;
                $caja->save();
                $cliente=Cliente::find($caja->cliente_id);
		$cajaLn->delete();

		return view('cajas.caja', compact('cliente', 'caja'))
                        ->with( 'list', Caja::getListFromAllRelationApps() )
                        ->with( 'list1', CajaLn::getListFromAllRelationApps() );
	}

}
