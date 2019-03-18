<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use DB;
	use App\Http\Requests;
	use App\Http\Controllers\Controller;
	
	class DetallesClienteController extends Controller {
		public function detalles(Request $request){
		$id = $request->input('id');
		$clientes = DB::select('select * from Clientes where ID_Cliente='.$id.'');
		$ventas = DB::select('select * from Ventas where ID_Cliente='.$id.'');
		return view('detalles_cliente',['clientes'=>$clientes,'ventas'=>$ventas]);
	}
}