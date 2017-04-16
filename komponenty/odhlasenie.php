<?php
session_start();
$_SESSION['prihlasenyUser']="";
header('Location:../index.php');
?>