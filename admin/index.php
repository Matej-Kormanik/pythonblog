<?php
session_start();
if($_SESSION['prihlasen']=='' and $_POST['login']!="") {            // ak este pouzivatel neni prihlaseny AND z prihlasovacieho formulara bolo odoslane prihlasovacie meno. ....
    if($_POST['login']=='admin' and $_POST['heslo']=='heslo'){      // a su prihlasovacie meno a heslo z formulara spravne
        $_SESSION['prihlasen']="admin";                             // nastavime premennu $_SESSION['prihlasen'] na prihlasenu 'admin'
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Administracni zona</title>
        <link rel="stylesheet" type="text/css" href="adminStyl.css">
        <meta name="robots" content="noindex,nofollow" />
    </head>
    <body>
    <?php

    if($_SESSION['prihlasen']!= "admin"){
        require "login.php";
    }else {
        $volej = "ano";
        require "admin.php";
    };

    ?>
    </body>
</html>
