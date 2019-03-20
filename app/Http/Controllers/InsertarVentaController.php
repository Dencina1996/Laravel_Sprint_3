<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InsertarVentaController extends Controller {
	
   public function insert(Request $request) {
	$idVenta = null;
	$descripcion = $request->input('descripcion');
	$estado = $request->input('estado');
	$idCliente = $request->input('id_Cliente');
	DB::table('Ventas')->insert([
		'ID_Venta'=>$idVenta,
		'Descripcion'=>$descripcion,
		'Estado'=>$estado,
		'ID_Cliente'=>$idCliente,
		]);
	
		$clientes = DB::select('select * from Clientes where ID_Cliente='.$idCliente.'');
		$ventas = DB::select('select * from Ventas where ID_Cliente='.$idCliente.'');
		return view('detalles_cliente',['clientes'=>$clientes,'ventas'=>$ventas]);
	}
}