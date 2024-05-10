<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TableProducto
 *
 * @property $id
 * @property $nombre
 * @property $imagen
 * @property $precio
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TableProducto extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'imagen', 'precio', 'descripcion'];


}
