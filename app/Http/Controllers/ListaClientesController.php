<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use DB;
	use App\Http\Requests;
	use App\Http\Controllers\Controller;
	
	class ListaClientesController extends Controller {
		public function index(){
		$clientes = DB::select('select * from Clientes');
		return view('lista_clientes',['clientes'=>$clientes]);
	}
}