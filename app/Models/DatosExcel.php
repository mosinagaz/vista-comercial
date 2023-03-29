<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosExcel extends Model
{
    use HasFactory;
    protected $table = 'datos_excel';
    protected $fillable =
        ['cod_wen', 'd_wen', 'lab', 'd_reg', 'canal_venta', 'cadena_nombre',
        'cliente', 'd_cliente', 'articulo','descripcion_articulo','area','causa','observacion',
        'ejercicio','fecha_pedido','numero_serie','numero_pedido','numero_pedido_cliente','cantidad_perdida',
        'importe_neto_lin','unidades_servidas','valor_servido','un_pendiente','valor_pendiente',
        'status','gestor','tipo_bacorder','ped_atendido','fecha'];
    public $timestamps = false;

/*return new DatosExcel([
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
'numero' => $row['numero_pedido'],
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
]);*/
}
