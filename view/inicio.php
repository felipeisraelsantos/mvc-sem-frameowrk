<?php include __DIR__ . '/header.php'; ?>

<div class="px-4 py-5 my-5 text-center">
    
    <h1 class="display-5 fw-bold"> <?= $titulo ?> </h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Teste PHPSF - Cadastro NIS (Número de Identificação Social)</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="/cadastro-cidadao" class="btn btn-primary btn-lg px-4 gap-3">Cadastro</a>
        <a href="/listar-nis" class="btn btn-outline-secondary btn-lg px-4">Listar Nis</a>
      </div>
    </div>
  </div>

<?php include __DIR__ . '/footer.php'; ?>