<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClientesController{

    //exibindo todos os registros de clientes
    public function index(){
        return Cliente::all();

    }   //im index

    //metodo post
    public function store(Request $request){

        //o request all só pode ser usado quando possui o atributo fillable localizado na classe serie
        // o fillable filtra somente as informações que estão no atributo
        return response()
        ->json(Cliente::create($request->all(),201));

    }   //fim store

    // metodo get com filtro
    public function show(int $id){
        //busca o id no banco de dados
        $cliente = Cliente::find($id);

        //verifica se foi encontrado
        if(is_null($cliente)){

            //caso não encontre, retorna como http 204(sem conteudo)
            return response()->json('', 204);
        }
        //se encontrar, retorna um json com os dados do cliente e o http status 200 (OK)
        return response()-json($cliente,200);
    }   //fim show

}
