<?php
    //antes precisa iniciar a sessão
    session_start();
    //deslogando usuário
    session_destroy();
    //voltando para a home
    header('Location:index.php'); //o php redireciona pra página index
?>