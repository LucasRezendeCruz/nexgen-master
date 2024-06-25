
<div class="container mt-3">
    <h1>Produtos</h1>
    <h4 class="mt-1">Venha conecer todos os nossos produtos e serviços!</h4>
</div>

<div class="container">
        <div class="row div-produtos">
            <?php foreach ($aDados as $value) : ?>.

                <div class="col-3 card-produto">
                    <div class="">
                        <h5><?= htmlspecialchars($value['descricao']) ?></h5>
                    </div>
                    <div class="">
                        
                        <img class="comida" src="<?= baseUrl() ?>uploads/produto/<?= htmlspecialchars($value['imagem']) ?>" width="340" height="300">
                        
                    </div>
                    <div class="caracteristica">
                        <?= $value['caracteristicas'] ?>
                        <p><b>Status do produto:</b><?=($value['statusRegistro'] == 1) ? 'Disponível' : 'Indisponível'; ?></p>
                        
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
</div>

