<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ImpresionComprobanteE;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\updateImpresionComprobanteE;
use App\Http\Requests\createImpresionComprobanteE;

class ImpresionComprobanteEsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$impresionComprobanteEs = ImpresionComprobanteE::getAllData($request);

		return view('impresionComprobanteEs.index', compact('impresionComprobanteEs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('impresionComprobanteEs.create')
			->with( 'list', ImpresionComprobanteE::getListFromAllRelationApps() );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(createImpresionComprobanteE $request)
	{

		$input = $request->all();
		$input['usu_alta_id']=Auth::user()->id;
		$input['usu_mod_id']=Auth::user()->id;

		//create data
		ImpresionComprobanteE::create( $input );

		return redirect()->route('impresionComprobanteEs.index')->with('message', 'Registro Creado.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id, ImpresionComprobanteE $impresionComprobanteE)
	{
		$impresionComprobanteE=$impresionComprobanteE->find($id);
		return view('impresionComprobanteEs.show', compact('impresionComprobanteE'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id, ImpresionComprobanteE $impresionComprobanteE)
	{
		$impresionComprobanteE=$impresionComprobanteE->find($id);
		return view('impresionComprobanteEs.edit', compact('impresionComprobanteE'))
			->with( 'list', ImpresionComprobanteE::getListFromAllRelationApps() );
	}

	/**
	 * Show the form for duplicatting the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function duplicate($id, ImpresionComprobanteE $impresionComprobanteE)
	{
		$impresionComprobanteE=$impresionComprobanteE->find($id);
		return view('impresionComprobanteEs.duplicate', compact('impresionComprobanteE'))
			->with( 'list', ImpresionComprobanteE::getListFromAllRelationApps() );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update($id, ImpresionComprobanteE $impresionComprobanteE, updateImpresionComprobanteE $request)
	{
		$input = $request->all();
		$input['usu_mod_id']=Auth::user()->id;
		//update data
		$impresionComprobanteE=$impresionComprobanteE->find($id);
		$impresionComprobanteE->update( $input );

		return redirect()->route('impresionComprobanteEs.index')->with('message', 'Registro Actualizado.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id,ImpresionComprobanteE $impresionComprobanteE)
	{
		$impresionComprobanteE=$impresionComprobanteE->find($id);
		$impresionComprobanteE->delete();

		return redirect()->route('impresionComprobanteEs.index')->with('message', 'Registro Borrado.');
	}

}
