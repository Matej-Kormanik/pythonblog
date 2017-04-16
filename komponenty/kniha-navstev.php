<?php
session_start();
//-----------------------	ZAPIS FORMULARA DO DATABAZE	------------------------------------------
if(trim($_POST['jmeno'])!="" && trim($_POST['prispevek'])!=""){
    $jmeno=trim(htmlspecialchars(strip_tags($_POST['jmeno'])));
    $prispevek=trim(htmlspecialchars(strip_tags($_POST['prispevek'])));
    $dotaz = 'INSERT INTO knihanavstev (jmeno, text,cas,zobrazovat) VALUES  ("'.$jmeno.'", "'.$prispevek.'", "'.time().'", "1")';
    $vysledky = mysql_query($dotaz,$db) or die(mysql_error($db));
    if($vysledky) {
        echo '<div class="okHlaska">Příspěvek byl úspěšně vložený.</div>';
    } else {
        echo '<div class="chybovaHlaska">Příspěvek se nezdařilo vložit.</div>';
    }
}//----------------------	VYPIS PRISPEVKOV	--------------------------------------------------
$pocet=3; // hodnota prispevkov na stranke
if($_GET['strana']>0 && is_numeric($_GET['strana'])){		// pouzijeme novy(dalsi) parameter: $_GET['strana']
    $od=$_GET['strana']*$pocet;								// OD  (ktere pozice sa maju zobrazovat prispevky) (pokud je $_GET['strana'] vetsi nez 0)
} else {$od=0;}

$dotaz='SELECT * FROM knihanavstev WHERE zobrazovat="1" ORDER BY cas DESC limit '.$od.','.$pocet;
$vysledek=mysql_query($dotaz);
while($zaznam=mysql_fetch_assoc($vysledek)) {
    echo '<div class="prispevek"><div class="horniRadek"><div class="pridal">Přidal(a): <strong>'.$zaznam['jmeno'].'</strong></div><div class="datum">'.date('d.m.Y',$zaznam['cas']).'</div></div>
		<div class="textPrispevku">'.$zaznam['text'].'</div></div>';
};
//----------------- VYPIS S ODKAZMI NA DALSIE PODSTRANKY, KTORE OBSAHUJU PRISPEVKY  ---------------
echo '<div class="strankovani">';
$dotaz='SELECT * FROM knihanavstev WHERE zobrazovat="1"';
$vysledek=mysql_query($dotaz);
$prispevku = mysql_num_rows($vysledek);
$i=0;
while($prispevku>0){
    $str=$i+1;
    if($i==$od/$pocet){
        echo ' <strong>'.$str.'</strong> ';
    } else {
        echo ' <a href="index.php?page=priklad1&strana='.$i.'">'.$str.'</a> ';
    };
    $prispevku=$prispevku-$pocet;
    $i++;
}
echo '</div>';
?>
    <!-------------------------- FORMULAR html  ----------------------------------------------------------->
<?php
$prihlasenyy = "ano";
if($prihlasenyy=="ano"){
    echo '<form action="" method="post" class="knihanavstev">
	Přidejte také Vaši zkušenost!<br /><br />
		<label for="jmeno">Jméno:</label><br /><input type="text" name="jmeno" id="jmeno"  class="kontaktInput" /><br />
		<label for="prispevek">Příspěvek:</label><br /><textarea name="prispevek" id="prispevek"  class="kontaktInput"></textarea><br />
		<input type="submit" value="Přidat příspěvek" />
	</form>';
}else{
    echo "fdf";
}

?>