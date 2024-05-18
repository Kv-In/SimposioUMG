<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TableExpositore
 *
 * @property $id
 * @property $Nombre
 * @property $Apellidos
 * @property $foto
 * @property $Correo
 * @property $Telefono
 * @property $Facebook
 * @property $GitHub
 * @property $Instagram
 * @property $X
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TableExpositore extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Nombre', 'Apellidos', 'foto', 'Correo', 'Telefono', 'Facebook', 'GitHub', 'Instagram', 'X'];


}
