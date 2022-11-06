<?php
require 'config.php';
require 'head.php';
?>
<body>
    <header>
        <div class="container">
            <h1>Cadastre-se</h1>
        </div>
    </header>
    <section class="container">
        <form method="POST" action="<?=$base;?>/signup_action.php">
            <?php if(!empty($_SESSION['flash'])): ?>
                <?=$_SESSION['flash'];?>
                <?=$_SESSION['flash'] = '';?>
            <?php endif; ?>
            <input placeholder="Digite seu Nome" class="input" type="text" name="name" />
            <input placeholder="Digite seu E-mail" class="input" type="email" name="email" />
            <input placeholder="Digite sua Senha" class="input" type="password" name="password" />
            <input placeholder="Confirme sua Senha" class="input" type="password" name="password_confirm" />

            <input class="input" type="submit" value="Cadastrar" />

            <a style="margin: auto; "href="<?=$base;?>/login.php">Já tem conta? Faça o login</a>
        </form>
    </section>
</body>
</html>