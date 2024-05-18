<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TableOrganizadore
 *
 * @property $id
 * @property $Nombre
 * @property $url
 * @property $Lider
 * @property $Equipo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TableOrganizadore extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Nombre', 'url', 'Lider', 'Equipo'];


}
