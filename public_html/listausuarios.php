<?php require_once '../private/listausuarios.php';require_once 'src/header.php' ?>
<script type="text/javascript" src="src/js/listausuarios.js"></script>
<div class="container mt-5 pt-5" >
    <a href="/admininicio.php" class="btn btn-outline-secondary">Voltar</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($all_users as $key => $usuario){ ?>
            <tr>
                <th><?= $usuario['id'] ?></th>
                <td id="nome_<?= $usuario['id'] ?>"><?= $usuario['nome'] ?></td>
                <td id="email_<?= $usuario['id'] ?>"><?= $usuario['email'] ?></td>
                <td>
                    <i class="far fa-trash-alt fa-lg text-danger" role="button" onclick="remover(<?= $usuario['id'] ?>)"></i>
                    <i class="far fa-edit fa-lg text-warning" role="button" onclick="editar(<?= $usuario['id'] ?>, '<?= $usuario['nome'] ?>', '<?= $usuario['email'] ?>')"></i>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php require_once 'src/footer.php' ?>