<?php include __DIR__ . '/header.php'; ?>
<h1><?= $titulo ?></h1>

<form action="/salvar-cadastro<?= isset($cidadao) ? '?id='.$cidadao->getId() : '' ?>"
  method="POST">

  <div class="mb-3 cad">
    <label for="nomeCidadao" class="form-label">Nome Completo</label>
    <input type="text" class="form-control mb-3" id="nomeCidadao" name="nomeCidadao"
    value="<?= isset($cidadao) ? $cidadao->getNomeCidadao() : '' ?>" 
    minlength="3"
    autofocus >
    <span>No minimo 3 caracteres</span>
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