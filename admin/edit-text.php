<?php
session_start();
if($volej!="ano"){
    echo 'Musíte se přihlásit.';
    die();
}
require "../stranky/dbPripoj.php";

if(isset($_POST["nazev"])){
    $nazev=$_POST["nazev"];
    $urlnazev=$_POST['urlnazev'];
    $text=$_POST['text'];
    $slova=$_POST['slova'];
    $metapopis=$_POST['metapopis'];}

if(isset($_POST["nazev"]) && $_GET['id']!="new") {
    $dotaz="UPDATE texty SET nazev='".$nazev."', urlnazev='".$urlnazev."', text='".$text."',  klicovaslova='".$slova."',   metapopis='".$metapopis."' where idtextu='".$_GET['id']."' ";
    if(mysql_query($dotaz)) {
        echo '<div id="ok">Změny byli úspešne uloženy do databáze.</div>';
    } else {
        echo '<div id="err">Nepodařilo se uložit změny do databáze!</div>';
    }
}

if(isset($_POST["nazev"]) && $_GET['id']=="new") {
    $dotaz = 'INSERT INTO texty (nazev, text, urlnazev, klicovaslova, metapopis) VALUES  ("'. $nazev. '", "'. $text. '",  "'. $urlnazev. '", "'. $slova. '", "'. $metapopis. '")';
    $vysledky = mysql_query($dotaz,$db) or die(mysql_error($db));
    if($vysledky) {
        echo '<div id="ok">Text byl úspěšně přidán do databáze.</div>';
    } else {
        echo '<div id="err">Text sa nepodařilo přidat do databáze.</div>';
    }
    echo '<html><meta http-equiv="REFRESH" content="2;index.php?page=texty"></html>'; die();
}
if($_GET['id']!="new"){
    $dotaz='SELECT * FROM texty WHERE idtextu="'.$_GET['id'].'"';
    $vysledek=mysql_query($dotaz);
    $zaznam=mysql_fetch_array($vysledek);
};
?>
<form id="clanok" name="clanok" method="post" action="">
    <label for="nazev">Název textu:</label><input type="text" class="vstup" name="nazev" id="nazev" value="<?php echo $zaznam['nazev']; ?>" /> <input type="submit" value="Uložit změny"><br />
    <label for="urlnazev">URLnázev:</label><input type="text" class="vstup" name="urlnazev" id="urlnazev" value="<?php echo $zaznam['urlnazev']; ?>" /><br />
    <label for="text">Text:</label><textarea name="text" class="vstup" id="text" rows="10" ><?php echo $zaznam['text']; ?></textarea><br />
    <label for="slova">Klíčová slova:</label><input type="text" class="vstup" name="slova" id="slova" value="<?php echo $zaznam['klicovaslova']; ?>" /><br />
    <label for="metapopis">Metapopis:</label><textarea name="metapopis" class="vstup" rows="3" id="metapopis" ><?php echo $zaznam['metapopis']; ?></textarea>
</form>
