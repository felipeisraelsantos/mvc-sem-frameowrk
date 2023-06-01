<?php include __DIR__ . '/header.php'; ?>
<h1>Cadastrar Cidadão</h1>

<form action="/salvar-cadastro" method="POST">

  <div class="mb-3">
    <label for="nomeCidadao" class="form-label">Nome Completo</label>
    <input type="text" class="form-control" id="nomeCidadao" name="nomeCidadao" autofocus>
  </div>

  <div class="mb-3">
    <button type="submit" class="btn btn-primary" id="btnSalvar">Salvar</button>
  </div>

</form>

<div class="container text-center mt-3">
    <div class="row row-cols-4">
        <a href="/" class="btn btn-primary col-1 offset-11">Início</a>
    </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>