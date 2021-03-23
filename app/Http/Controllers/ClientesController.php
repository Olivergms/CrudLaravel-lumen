<?php

namespace App\Http\Controllers;

use App\Cliente;
use illuminate\Http\Request;

class ClientesController{

    //exibindo todos os registros de clientes
    public function index(){
        return Cliente::all();
        //return ["adriano"];
    }

}
