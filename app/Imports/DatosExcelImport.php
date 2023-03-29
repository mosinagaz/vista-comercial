<?php

namespace App\Imports;

use App\Models\DatosExcel;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatosExcelImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {

        return new DatosExcel([
            'cod_wen' => $row['cod_uen'],
            'd_wen' => $row['d_uen'],
            'lab' => $row['lab'],
            'd_reg' => $row['d_reg'],
            'canal_venta' => $row['canal_venta'],
            'cadena_nombre' => $row['cadena_nombre'],
            'cliente' => $row['cliente'],
            'd_cliente' => $row['d_cliente'],
            'articulo' => $row['articulo'],
            'descripcion_articulo' => $row['descripcion_articulo'],
            'area' => $row['area'],
            'causa' => $row['causa'],
            'observacion' => $row['observacion'],
            'ejercicio' => $row['ejercicio'],
            'fecha_pedido' => Carbon::parse($row['fecha_pedido']),//Carbon::createFromFormat($row['fecha_pedido'])->format('Y-m-d'),
            'numero_serie' => $row['numero_serie'],
            'numero_pedido' => $row['numero_pedido'],
            'numero_pedido_cliente' => $row['numero_pedido_cliente'],
            'cantidad_perdida' => $row['cantidad_pedida'],
            'importe_neto_lin' => $row['importe_neto_lin'],
            'unidades_servidas' => $row['unidades_servidas'],
            'valor_servido' => $row['valor_servido'],
            'un_pendiente' => $row['un_pendiente'],
            'valor_pendiente' => $row['valor_pendiente'],
            'status' => $row['status'],
            'gestor' => $row['gestor'],
            'tipo_bacorder' => $row['tipo_backorder'],
            'ped_atendido' => $row['ped_atendido'],
            'fecha' => Carbon::now('America/La_Paz'),
        ]);


        /*return new DatosExcel([
            'cod_wen' => $row['COD_UEN'],
            'd_wen' => $row['D_UEN'],
            'lab' => $row['LAB'],
            'd_reg' => $row['D_REG'],
            'canal_venta' => $row['CANAL_VENTA'],
            'cadena_nombre' => $row['CADENA_NOMBRE'],
            'cliente' => $row['CLIENTE'],
            'd_cliente' => $row['D_CLIENTE'],
            'articulo' => $row['ARTICULO'],
            'descripcion_articulo' => $row['DESCRIPCION_ARTICULO'],
            'area' => $row['AREA'],
            'causa' => $row['CAUSA'],
            'observacion' => $row['OBSERVACION'],
            'ejercicio' => $row['EJERCICIO'],
            'fecha_pedido' => $row['FECHA_PEDIDO'],
            'numero_serie' => $row['NUMERO_SERIE'],
            'numero' => $row['NUMERO_PEDIDO'],
            'numero_pedido_cliente' => $row['NUMERO_PEDIDO_CLIENTE'],
            'cantidad_perdida' => $row['CANTIDAD_PEDIDA'],
            'importe_neto_lin' => $row['IMPORTE_NETO_LIN'],
            'unidades_servidas' => $row['UNIDADES_SERVIDAS'],
            'valor_servido' => $row['VALOR_SERVIDO'],
            'un_pendiente' => $row['UN_PENDIENTE'],
            'valor_pendiente' => $row['VALOR_PENDIENTE'],
            'status' => $row['STATUS'],
            'gestor' => $row['GESTOR'],
            'tipo_bacorder' => $row['TIPO_BACKORDER'],
            'ped_atendido' => $row['PED_ATENDIDO'],
            'fecha' => Carbon::now('America/La_Paz'),
        ]);*/
    }
}
