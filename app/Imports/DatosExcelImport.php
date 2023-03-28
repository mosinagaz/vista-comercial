<?php

namespace App\Imports;

use App\Models\DatosExcel;
use Maatwebsite\Excel\Concerns\ToModel;

class DatosExcelImport implements ToModel
{
    public function model(array $row)
    {
        return new DatosExcel([
            'cod_wen' => $row[0],
            'd_wen' => $row[1],
            'lab' => $row[2],
            'd_reg' => $row[3],
            'canal_venta' => $row[4],
            'cadena_nombre' => $row[5],
            'cliente' => $row[6],
            'd_cliente' => $row[7],
            'articulo' => $row[8],
            'descripcion_articulo' => $row[9],
            'area' => $row[10],
            'causa' => $row[11],
            'observacion' => $row[12],
            'ejercicio' => $row[13],
            'fecha_pedido' => $row[14],
            'numero_serie' => $row[14],
            'numero' => $row[16],
            'numero_pedido_cliente' => $row[17],
            'cantidad_perdida' => $row[18],
            'importe_neto_lin' => $row[19],
            'unidades_servidas' => $row[20],
            'valor_servido' => $row[22],
            'un_pendiente' => $row[23],
            'valor_pendiente' => $row[24],
            'status' => $row[25],
            'gestor' => $row[26],
            'tipo_bacorder' => $row[27],
            'ped_atendido' => $row[28],
            'fecha' => $row[19],
        ]);
    }
}
