<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $id_maquina
 * @property string $maquina
 * @property string $marca
 * @property string $modelo
 * @property string $ano
 * @property string $chasis
 * @property string $titular
 * @property string $created_at
 * @property string $updated_at
 */
class Maquina extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['id_maquina', 'maquina', 'marca', 'modelo', 'ano', 'chasis', 'titular', 'created_at', 'updated_at'];
}
