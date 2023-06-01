<?php include __DIR__ . '/header.php'; ?>
<h1>NIS (Número de Identificação Social)</h1>

<a href="/cadastro-cidadao" class="btn btn-primary mb-3">Cadastros</a>

<ul class="list-group">
    <?php foreach ($cadastros as $cadastro) : ?>
        <li class="list-group-item d-flex justify-content-between">
            <?= "{$cadastro->getNomeCidadao()} - {$cadastro->getNis()} " ?>

            <span>
                <a href="/alterar-cadastro?id=<?= $cadastro->getId(); ?>" class="btn btn-warning btn-sm">Atualizar</a>
                <a href="/excluir-cadastro?id=<?= $cadastro->getId(); ?>" class="btn btn-danger btn-sm">excluir</a>
            </span>
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