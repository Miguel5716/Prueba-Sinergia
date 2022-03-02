<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
 *
 * @property $id
 * @property $tipo_documento_id
 * @property $numero_documento
 * @property $nombre1
 * @property $nombre2
 * @property $apellido1
 * @property $apellido2
 * @property $genero_id
 * @property $departamento_id
 * @property $municipio_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    
  protected $table = "pacientes";

  protected $fillable = [
      ' tipo_documento_id', 'numero_documento', 'nombre1','nombre2','apellido1','apellido2',' genero_id','departamento_id','municipio_id'
  ];
    



}
