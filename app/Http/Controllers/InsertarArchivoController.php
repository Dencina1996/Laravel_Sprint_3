<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InsertarArchivoController extends Controller {
	
   public function insertFile(Request $request) {
   	$idArchivo = null;
   	$idCliente = $request->input('idCliente');
   	$idVenta = null;
   	$ruta = $request->archivo->getClientOriginalName();
   	$request->archivo->storeAs('files', $request->archivo->getClientOriginalName());
   	DB::table('Archivos')->insert([
		'ID_Archivo'=>$idArchivo,
		'ID_Cliente'=>$idCliente,
		'ID_Venta'=>$idVenta,
		'Ruta_Archivo'=>$ruta
		]);
	return back();
	}
}