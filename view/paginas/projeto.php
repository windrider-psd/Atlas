<?php

if(!SessionController::TemSessao())
{
    header("location: login");
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php Carregador::CarregarViewHeadMeta(); ?>
    </head>
    <body>
        <a href ="controller/usuario/logoutController.php">Logout</a><br />
        <?php Carregador::CarregarViewFooter(); ?>
    </body>
</html>
