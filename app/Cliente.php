<?php

namespace App;

use illuminate\Database\Eloquent\Model;

Class Cliente extends Model{
    public $timestamps = false;
    protected $fillable = ['nome', 'idade', 'rg', 'cpf'];
    protected $perPage = 5;



}
