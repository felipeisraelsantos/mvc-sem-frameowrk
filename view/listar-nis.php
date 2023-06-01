<?php include __DIR__ . '/header.php'; ?>
<h1>NIS (Número de Identificação Social)</h1>

<a href="/cadastro-cidadao" class="btn btn-primary mb-3">Cadastros</a>

<ul class="list-group">
    <?php foreach ($cadastros as $cadastro) : ?>
        <li class="list-group-item">
            <?= "{$cadastro->getNomeCidadao()} - {$cadastro->getNis()} " ?>
        </li>
    <?php endforeach; ?>
</ul>

<div class="">

</div>

<div class="container text-center mt-3">
    <div class="row row-cols-4">
        <a href="/" class="btn btn-primary col-1 offset-11">Início</a>
    </div>
</div>
<?php include __DIR__ . '/footer.php'; ?>