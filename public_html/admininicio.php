<?php require_once '../private/control/protecao.php';require_once 'src/header.php' ?>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <div class="mb-2 mt-4">
            <img src="src/img/usericon.png" id="icon" alt="User Icon">
        </div>
        <br>
        <p class="w-100 d-block h6">Seja bem-vindo</p><br>
        <a href="/cadastro.php" class="w-100 d-block pb-2 text-decoration-none text-secondary h6">Cadastro</a>
        <a href="/listausuarios.php" class="w-100 d-block pb-2 text-decoration-none text-secondary h6">Lista de Usuários</a>
        <a href="/appcontrol/logoff.php" class="w-100 d-block pb-2 text-danger text-decoration-none h6">Sair</a>
    </div>
</div>
<?php require_once 'src/footer.php' ?>
