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
        ->json(Cliente::create($request->all()), 201);

    }   //fim store

    // metodo get com filtro
    public function show(int $id){
        //busca o id no banco de dados
        $recurso = Cliente::find($id);

        //verifica se foi encontrado
        if(is_null($recurso)){

            //caso não encontre, retorna como http 204(sem conteudo)
            return response()->json('', 204);
        }
        //se encontrar, retorna um json com os dados do cliente e o http status 200 (OK)
        return response()->json($recurso,200);
    }   //fim show

    public function update(int $id, Request $request){
        //busca o id no banco de dados
        $recurso = Cliente::find($id);

        //verifica se foi encontrado
        if(is_null($recurso)){

            return response()->json(['erro' => 'Recurso não encontrado'], 404);
        }
        //preenche com as informações do request
        $recurso->fill($request->all());
        //salva os dados do cliente
        $recurso->save();

        return $recurso;
    } // fim update

    public function destroy(int $id){
        //retorna a quantidade de itens removidos
        $removidos = Cliente::destroy($id);

        //verifica se algo foi removido
        if($removidos === 0 ){

            return response()->json(['erro' => 'Recurso não encontrado'], 404);
        }
        //se não, retorna um array vazio com status http no content
        return response()->json('',204);

    }// fim destroy

}
