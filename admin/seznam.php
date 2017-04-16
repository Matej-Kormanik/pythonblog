<?php
if ($volej!="ano") {
    echo "musite sa prihlasit";
    die();
}
require "../stranky/dbPripoj.php";

$dotaz = 'SELECT * FROM texty';
$vysledok = mysqli_query($db,$dotaz);
while($row = mysqli_fetch_array($vysledok)){
    echo '<a href="index.php?page=texty&id='.$row['idtextu'].'">'.$row['nazev'].'</a><br />';
}

echo '<a href="index.php?page=texty&id=new">přidat nový text</a>';

?>