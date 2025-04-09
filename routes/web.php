<?php

use Illuminate\Support\Facades\Route;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

Route::get('/', function () {
    return view('inicio');
});

Route::post('/cadastrar-produto', function(Request $request){
    //dd($request->all());
    
    Produto::create([
       'nome' => $request->nome,
       'telefone' => $request->telefone,
       'origem' => $request->origem,
       'observacao' => $request->observacao
    ]);

    echo "Cadastro feito com sucesso:";
});

Route::get('/listar-produto/(id)', function($id){
  $produto = Produto::find($id);
  return view('listar', ['produto' => $produto]);
});

Route::get('/editar-produto/{id}', function($id){
 $produto = Produto::find($id);
 return view('editar',['produto'=>$produto]);
});

Route::post('/editar-produto/{id}',function (Request $request, $id){
   $produto = Produto::find($id);

   $produto->update([
     'nome' => $request->nome,
     'telefone' =>$request->telefone,
     'origem' =>$request->origem,
     'observacao' =>$request->observacao
   ]);

   echo "Produto editado com sucesso";
});
