<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contribution
 *
 * @property $id
 * @property $cliente
 * @property $deleted_mail
 * @property $free_mb
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contribution extends Model
{
    
    static $rules = [
		'cliente' => 'required',
		'deleted_mail' => 'required',
		'free_mb' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente','deleted_mail','free_mb'];



}
