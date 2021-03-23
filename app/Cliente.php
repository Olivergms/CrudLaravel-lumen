<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class Cliente extends Model{
    public $timestamps = false;
    protected $fillable = ['nome', 'idade', 'rg', 'cpf'];
    protected $perPage = 5;



}
