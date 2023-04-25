<?php

namespace App\Imports;
use App\Models\DatosPersonal;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Ramsey\Uuid\Exception\UnableToBuildUuidException;

class DatosPersonalImport implements ToModel,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new DatosPersonal([
            'nombre' => $row['nombre'],
            'cedula' => $row['cedula'],
            'celular' => $row['celular'],
            'uen' => $row['uen'],
            'region' => $row['region'],
            'cargo' => $row['cargo'],
            'usuario_libra' => $row['usuario_libra'],
        ]);
    }
}
