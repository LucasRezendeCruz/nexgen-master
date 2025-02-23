<div class="container mb-5">
    <?php

    use App\Library\Formulario;

    echo Formulario::titulo('Cliente');

    ?>

    <table id="listaCliente" class="table table-bordered table-striped table-hover table-sm">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Status</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aDados as $value) : ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['nome'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= $value['telefone'] ?></td>
                    <td><?= getStatus($value['statusRegistro']) ?></td>
                    <td>
                        <?= Formulario::botao("view", $value['id']) ?>
                        <?= Formulario::botao("update", $value['id']) ?>
                        <?= Formulario::botao("delete", $value['id']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?= Formulario::getDataTables("listaCliente"); ?>
</div>