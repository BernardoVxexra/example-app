<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contatos</h1>
    <form action="/listar-produto" method="POST">
     @csrf 
    <label for="lblNome">Nome:</label>
    <input type="text" name="nome" value="{{ $produto->nome }}">
     <br><br>
    <label for="lblTelefone">Telefone:</label>
    <input type="text" name="telefone" value="{{ $produto->telefone }}">
      <br><br>
    <label for="lblOrigem">Origem:</label>
    <input type="text" name="origem" value="{{ $produto->origem }}">
      <br><br>
    <label for="lblObservacao">Observacao:</label>
    <input type="text" name="observacao" value="{{ $produto->observacao }}">
      <br><br>
    </form>
</body>
</html>