<?php
require 'config.php';
require 'head.php';
?>
<body>
    <header>
        <div class="container">
            <h1>Login</h1>
        </div>
    </header>
    <section class="container">
        <form method="POST" action="<?=$base;?>/login_action.php">
            <?php if(!empty($_SESSION['flash'])): ?>
                <?=$_SESSION['flash'];?>
                <?=$_SESSION['flash'] = '';?>
            <?php endif; ?>
            <input placeholder="Digite seu e-mail" class="input" type="email" name="email" />
            <input placeholder="Digite sua senha" class="input" type="password" name="password" />
            <input class="input" type="submit" value="Acessar" />

            <a style="margin: auto;"href="<?=$base;?>/signup.php">Ainda não tem conta? Cadastre-se</a>
        </form>
    </section>
</body>
</html>