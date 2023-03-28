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
        'ejercicio','fecha_pedido','numero_serie','numero','numero_pedido_cliente','cantidad_perdida',
        'importe_neto_lin','unidades_servidas','valor_servido','un_pendiente','valor_pendiente',
        'status','gestor','tipo_bacorder','ped_atendido','fecha'];
    public $timestamps = false;
    protected $hidden = ['updatedAt', 'deletedAt'];

}
