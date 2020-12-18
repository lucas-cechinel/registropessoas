<?php require_once 'src/header.php' ?>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <div class="mb-2 mt-4">
            <img src="src/img/usericon.png" id="icon" alt="User Icon">
        </div>
        <br>
        <form class="form-group" method="post" action="appcontrol/controlelogin.php">
            <label>
                <input type="email" class="w-100" name="email" placeholder="E-mail">
            </label><br>
            <label>
                <input type="password" class="w-100" name="senha" placeholder="Senha">
            </label><br>
            <button type="submit" class="btn btn-success w-100 mt-4">
                <span id="botao-entrar">Entrar</span>
            </button>
        </form>
    </div>
</div>
<?php require_once 'src/footer.php' ?>