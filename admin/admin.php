<?php
if($volej != 'ano'){
    echo 'musite sa prihlasit';
    die();
}
?>

<div id="menu">
    <a href="odhlas.php">Odhlásit se</a> | <a href="index.php?page=texty">Seznam textů</a> | <a href="index.php">komentáre</a>
</div>


<div id="obsah">
    <?php
    if($_GET['page']=="texty") {
        if($_GET['id']==""){
            require "seznam.php";
        } else {
            require "edit-text.php";
        };
    };
    if($_GET['page']=="") {
        require "kniha-navstev.php";
    };
    ?>
</div>
