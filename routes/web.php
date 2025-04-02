<?php

use Illuminate\Support\Facades\Route;

use App\Models\Produto;
use Illuminate\Http\Request;

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
