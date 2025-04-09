<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produtos</h1>

    <label for="lblNome">Nome:</label>
    <input type="text" name="nome" value="{{ $produto->nome }}">

    <label for="lblTelefone">Telefone:</label>
    <input type="text" name="telefone" value="{{ $produto->telefone }}">

    <label for="lblOrigem">Origem:</label>
    <input type="text" name="origem" value="{{ $produto->origem }}">

    <label for="lblObservacao">Observacao:</label>
    <input type="text" name="observacao" value="{{ $produto->observacao }}">
</body>
</html>