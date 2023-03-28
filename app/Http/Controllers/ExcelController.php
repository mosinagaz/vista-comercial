<?php

namespace App\Http\Controllers;

use App\Models\DatosExcel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function index()
    {
        return view('excel.cargar');
    }

    public function info()
    {
        return view('informacion.info');
    }

    public function importar(Request $request)
    {
        //dd($request->file('archivo')->getPathName());
        Excel::import(new DatosExcel, $request->file('archivo'));
        return Redirect()->back()->with('succes',"Datos cargados con exito");
    }
}
