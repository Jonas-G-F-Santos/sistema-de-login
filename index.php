<?php
require 'config.php';
require_once 'models/Auth.php';


$auth = new Auth($pdo, $base);

$userInfo = $auth->checkToken();

$firstName = current(explode(' ', ucfirst($userInfo->name)));
require 'head.php';
?>

<body>
    <section class="container">
        <h1>Bem vindo(a), <?=$firstName;?></h1>

            <a href="logout.php" class="sair">Sair</a>
    </section>
</body>
