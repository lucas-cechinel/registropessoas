<?php require_once '../private/control/protecao.php';require_once 'src/header.php' ?>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="mb-2 mt-4">
                <img src="src/img/usericon.png" id="icon" alt="User Icon">
            </div>
            <br>
            <form class="form-group" method="post" action="appcontrol/controlecadastro.php">
                <label>
                    <input type="text" class="w-100" name="nome" placeholder="Nome">
                </label><br>
                <label>
                    <input type="email" class="w-100" name="email" placeholder="E-mail">
                </label><br>
                <button type="submit" class="btn btn-success w-100 mt-4">
                    <span id="botao-entrar">Cadastrar</span>
                </button>
                <a href='/admininicio.php' class="btn btn-secondary w-100">
                    <span id="botao-entrar">Voltar</span>
                </a>
            </form>
        </div>
    </div>
<?php require_once 'src/footer.php' ?>