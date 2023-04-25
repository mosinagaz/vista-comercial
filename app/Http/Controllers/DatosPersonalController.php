<?php

namespace App\Http\Controllers;

use App\Imports\DatosExcelImport;
use App\Imports\DatosPersonalImport;
use App\Models\DatosExcel;
use App\Models\DatosPersonal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class DatosPersonalController extends Controller
{
    public function personal()
    {
        //$usuarios1 = DatosExcel::select(['gestor'])->groupBy('gestor')->get()->toArray();
        /*$usuarios = DatosExcel::select(['gestor'])
            ->groupBy('gestor')
            ->leftJoin('datos_personal', 'datos_excel.gestor', '=', 'datos_personal.usuario_libra')
            ->get(['datos_personal.*']);*/


        $usuarios = DB::table('datos_excel')
            ->leftJoin('datos_personal', 'datos_excel.gestor', '=', 'datos_personal.usuario_libra')
            ->select('datos_excel.gestor','datos_personal.nombre','datos_personal.celular')
            ->groupBy('datos_excel.gestor','datos_personal.nombre','datos_personal.celular')
            ->get();
        //dd($usuarios);

        return view('personal.lista-envio-whatsapp',compact('usuarios'));
    }
    public function index()
    {
        return view('personal.cargar');
    }
    public function importar(Request $request)
    {
        try {
            Excel::import(new DatosPersonalImport, $request->file('archivo'));
            return Redirect()->back()->with('success', "Datos cargados satisfactoriamente.");
        } catch (\Exception $e) {
            return Redirect()->back()->with('error', $e->getMessage());
        }
    }
}
