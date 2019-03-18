<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UpdateClienteController extends Controller {
	
   public function update(Request $request) {
	$id = null;
	$name = $request->input('user_name');
	$mail = $request->input('user_mail');
	$phone = $request->input('user_phone');
	$dni = $request->input('user_dni');
	$address = $request->input('user_address');
	$country = $request->input('user_country');
	$city = $request->input('user_city');
	$cp = $request->input('user_cp');
	$mytime = date('Y-m-d H:i:s');
	DB::table('Clientes')->update([
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
	}
}