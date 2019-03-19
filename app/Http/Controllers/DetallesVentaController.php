<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use DB;
	use App\Http\Requests;
	use App\Http\Controllers\Controller;
	use Illuminate\Support\Facades\Storage;
	
	class DetallesVentaController extends Controller {
		public function detalles(Request $request){
		$id = $request->input('idVenta');
		$ventas = DB::select('select * from Ventas where ID_Venta='.$id.'');
		$archivos = DB::select('select * from Archivos where ID_Venta='.$id.'');
		return view('detalles_venta',['archivos'=>$archivos,'ventas'=>$ventas]);
	}
}