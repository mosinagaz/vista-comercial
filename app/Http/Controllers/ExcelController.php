<?php

namespace App\Http\Controllers;

use App\Imports\DatosExcelImport;
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
        $usuarios = DatosExcel::select(['gestor'])->groupBy('gestor')->get();
        $categoria = DatosExcel::select(['categoria'])->groupBy('categoria')->get();
        return view('informacion.info', compact('usuarios', 'categoria'));
    }

    public function importar(Request $request)
    {
        try {
            Excel::import(new DatosExcelImport, $request->file('archivo'));
            return Redirect()->back()->with('success', "Datos cargados satisfactoriamente.");
        } catch (\Exception $e) {
            return Redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function filtrar(Request $request)
    {
        try {
            $usuarios = DatosExcel::select(['gestor'])->groupBy('gestor')->get();
            $categoria = DatosExcel::select(['categoria'])->groupBy('categoria')->get();
            $datos = DatosExcel::where('ejercicio', '2023')
                ->when($request->gestor != null, function ($query) use ($request) {
                    $query->where('gestor', $request->gestor);
                })
                ->when($request->d_reg != null, function ($query) use ($request) {
                    $query->where('d_reg', $request->d_reg);
                })
                ->when($request->categoria != null, function ($query) use ($request) {
                    $query->where('categoria', $request->categoria);
                })
                ->get()->toArray();

            $lista = array_reduce($datos, function ($result, $item) {
                if (!isset($result[$item['numero_pedido']])) {
                    $result[$item['numero_pedido']] = [];
                }
                $result[$item['numero_pedido']][] = $item;
                return $result;
            }, []);

            //dd($lista);
            return View('informacion.info', compact('lista', 'usuarios', 'categoria'))->with('success', "Filtro aplicado correctamente.");
        } catch (\Exception $e) {
            return Redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function filtrarget(Request $request)
    {
        try {
            $gestor = $request->gestor;
            $categoria = DatosExcel::select(['categoria'])->groupBy('categoria')->get();
            $datos = DatosExcel::where('ejercicio', '2023')
                ->when($request->gestor != null, function ($query) use ($request) {
                    $query->where('gestor', $request->gestor);
                })
                ->when($request->d_reg != null, function ($query) use ($request) {
                    $query->where('d_reg', $request->d_reg);
                })
                ->when($request->categoria != null, function ($query) use ($request) {
                    $query->where('categoria', $request->categoria);
                })
                ->get()->toArray();
            $lista = array_reduce($datos, function ($result, $item) {
                if (!isset($result[$item['numero_pedido']])) {
                    $result[$item['numero_pedido']] = [];
                }
                $result[$item['numero_pedido']][] = $item;
                return $result;
            }, []);
            return View('informacion.info-get', compact('lista', 'categoria', 'gestor'))->with('success', "Filtro aplicado correctamente.");
        } catch (\Exception $e) {
            return Redirect()->back()->with('error', $e->getMessage());
        }
    }
}
