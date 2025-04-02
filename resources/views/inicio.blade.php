<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
<form action="/cadastrar-produto" method="POST">
        @csrf
        <label for="lblNome">Nome:</label>
        <input type="text" name="nome">
        <br><br>
        <label for="lblTelefone">Telefone:</label>
        <input type="text" name="telefone">
        <br><br>

        <label for="lblOrigem">Origem:</label>
        <select name="origem" required>
        <option value="Celular">Celular</option>
        <option value="Telefone Fixo">Telefone Fixo</option>
        <option value="WhatsApp">WhatsApp</option>
        <option value="Redes Sociais">Redes Sociais</option>
        <option value="Indicação">Indicação</option>
        <option value="Outros">Outros</option>
        </select>

        <br><br>
        <label for="lblObservacao">Observação:</label>
        <textarea name="observacao"></textarea>
        <br><br>
        <button>Cadastrar</button>
    </form>
</body>
</html>