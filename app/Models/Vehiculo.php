<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $id_vehiculo
 * @property string $placa
 * @property string $marca
 * @property string $modelo
 * @property string $ano
 * @property string $chasis
 * @property string $aseguradora
 * @property string $num_seguro
 * @property string $seguro_vencimiento
 * @property string $rev_tecnica
 * @property string $rev_vencimiento
 * @property string $created_at
 * @property string $updated_at
 */
class Vehiculo extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['id_vehiculo', 'placa', 'marca', 'modelo', 'ano', 'chasis', 'aseguradora', 'num_seguro', 'seguro_vencimiento', 'rev_tecnica', 'rev_vencimiento', 'created_at', 'updated_at'];
}
