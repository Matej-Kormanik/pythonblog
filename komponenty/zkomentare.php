<?php
session_start();
$komentar = trim(htmlspecialchars(strip_tags($_POST['komentar'])));
$odoslane = $_POST['odeslat'];
$meno = $_SESSION['prihlasenyUser'];
if($odoslane !="" and strlen($komentar)>3){
    require "stranky/dbPripoj.php";
    $dotaz = 'INSERT INTO prkomenty (meno,sprava,datum,zobrazovat) VALUES ("'.$meno.'","'.$komentar.'","'.time().'","1") ';
    $result = mysqli_query($db,$dotaz);
    if($result) {
        echo '<div class="okHlaska">Příspěvek byl úspěšně vložený.</div>';
    } else {
        echo '<div class="chybovaHlaska">Příspěvek se nezdařilo vložit.</div>';
    }
}
?>
<?php
$dotazVypis = 'SELECT * FROM prkomenty ORDER BY datum DESC limit 5';
$result = mysqli_query($db,$dotazVypis);
while($zaznam=mysqli_fetch_array($result)){
    echo '<div class="prispevek"><div class="horniRadek"><div class="pridal">Přidal(a): <strong>'.$zaznam['meno'].'</strong></div><div class="datum">'.date('d.m.Y : H.i',$zaznam['datum']).'</div></div>
		  <div class="textPrispevku">'.$zaznam['sprava'].'</div></div>';
};


if($meno !=""){
    echo '<form action="" method="post" class="knihanavstev">
          <label for="text"><strong>napište komentár</strong></label> <br> <textarea name="komentar" id="text" class="kontaktInput"></textarea><br>
          <input type="submit" value="Přidat komentář" name="odeslat">
          </form>';
}

?>



