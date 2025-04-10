<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Contato</title>
  <!-- CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Bootstrap Toggle -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap5-toggle/css/bootstrap5-toggle.min.css" rel="stylesheet">
  <!-- SweetAlert2 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

  <style>
    .form-control:disabled,
    .form-control[readonly] {
      background-color: #f8f9fa;
    }
  </style>
</head>

<body>

  <div class="container mt-5">
    <h2>Formulário de Contato - Editar</h2>
    <form action="/editar-produto/{{ $produto->id }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ $produto->nome }}" required>
      </div>
      <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $produto->telefone }}" required>
      </div>
      <div class="mb-3">
        <label for="origem" class="form-label">Origem</label>
        <select class="form-select" id="origem" name="origem" required>
          <option value="fixo" {{ $produto->origem == 'fixo' ? 'selected' : '' }}>Telefone Fixo</option>
          <option value="celular" {{ $produto->origem == 'celular' ? 'selected' : '' }}>Celular</option>
          <option value="whatsapp" {{ $produto->origem == 'whatsapp' ? 'selected' : '' }}>WhatsApp</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="observacao" class="form-label">Observações</label>
        <textarea class="form-control" id="observacao" name="observacao" rows="3" required>{{ $produto->observacao }}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Editar</button>
    </form>
  </div>

  <!-- Scripts do Bootstrap e Toggle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap5-toggle/js/bootstrap5-toggle.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    // Máscara para o campo de telefone
    document.getElementById('telefone').addEventListener('input', function (e) {
      let value = e.target.value.replace(/\D/g, '');
      if (value.length <= 10) {
        e.target.value = value.replace(/(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
      } else {
        e.target.value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
      }
    });
  </script>

  @if (session('mensagem'))
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Sucesso!',
        text: "{{ session('mensagem') }}",
        confirmButtonColor: '#3085d6'
      });
    </script>
  @endif

</body>

</html>
