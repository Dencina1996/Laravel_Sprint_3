<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InsertarClienteController extends Controller {
   public function insertform() {
      return view('nuevo_cliente');
   }
	
   public function insert(Request $request) {
	$id = null;
	$name = $request->input('name');
	$mail = $request->input('mail');
	$phone = $request->input('phone');
	$dni = $request->input('dni');
	$address = $request->input('address');
	$country = $request->input('country');
	$city = $request->input('city');
	$cp = $request->input('cp');
	$mytime = date('Y-m-d H:i:s');
	DB::table('Clientes')->insert([
		'ID_Cliente'=>$id,
		'Nombre'=>$name,
		'Email'=>$mail,
		'Telefono'=>$phone,
		'CIF_NIF'=>$dni,
		'Direccion'=>$address,
		'Provincia'=>$country,
		'Localidad'=>$city,
		'CP'=>$cp,
		'Fecha_Modificacion'=>$mytime
		]);
	return back();
	}
}