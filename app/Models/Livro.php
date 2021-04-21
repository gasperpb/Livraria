<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Livro
 *
 * @property $id
 * @property $nome
 * @property $preco
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Livro extends Model
{
    
    static $rules = [
		'nome' => 'required',
		'preco' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome','preco'];



}
