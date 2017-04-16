<?php
session_start();
if($volej!="ano"){
	echo 'Musíte se přihlásit.';
	die();
}?>
<?php
$server = 'localhost';
$login = 'root';
$heslo = 'root';
$databaza = 'blog';
$port = '8889';
$db = mysqli_connect($server,$login,$heslo,$databaza,$port) or die ('Neda se pripojit k serveru.');
/*
$server = 'hz-mysql4';
$login = 'mysql69022';
$heslo = 'kormanik11';
$databaza = 'mysql74982';
$db = mysqli_connect($server,$login,$heslo,$databaza) or die ('Neda se pripojit k serveru.');
*/
mysqli_query($db,'SET NAMES UTF8');
mysqli_query($db,'SET COLLATION_CONNECTION=utf8_czech_ci');

if(is_numeric($_GET['id'])){
	if(trim($_POST['jmeno'])!="" && trim($_POST['prispevek'])!=""){
		$jmeno=trim(htmlspecialchars(strip_tags($_POST['jmeno'])));
		$prispevek=trim(htmlspecialchars(strip_tags($_POST['prispevek'])));
		$dotaz="UPDATE prkomenty SET meno='".$jmeno."', sprava='".$prispevek."' where id='".$_GET['id']."'";
		$vysledky=mysql_query($dotaz);
		if($vysledky) {
			echo '<div id="ok">Příspěvek byl upravený.</div>';
		} else {
			echo '<div id="err">Příspěvek se nepodařilo upravit.</div>';
		}
	}
	$dotaz='SELECT * FROM prkomenty WHERE id="'.$_GET['id'].'" ORDER BY datum DESC';
	$vysledek=mysql_query($dotaz);
	$zaznam=mysql_fetch_assoc($vysledek);
	?>

	<form action="" method="post" class="knihanavstev">
		<label for="jmeno">Jméno:</label><br /><input type="text" name="jmeno" id="jmeno"  class="vstup" value="<?php echo $zaznam['meno']; ?>" /><br />
		<label for="prispevek">Příspěvek:</label><br /><textarea name="prispevek" id="prispevek"  class="vstup"><?php echo $zaznam['sprava']; ?></textarea><br />
		<input type="submit" value="Uložit změny" />
	</form>

<?php
} else { 
	echo 'Nejnovější a ještě nezkontrolované příspěvky:<br /><br /><form action="" method="post">';
	$dotaz='SELECT * FROM prkomenty WHERE pokontrole="0" ORDER BY datum DESC';
	$vysledek = mysqli_query($db,$dotaz);
	while($zaznam=mysqli_fetch_array($vysledek)) {
		if($_POST['ok'.$zaznam['id']]=="on"){
			$dotaz="UPDATE prkomenty SET pokontrole='1' where id='".$zaznam['id']."'";
			mysql_query($dotaz);
		} elseif($_POST['del'.$zaznam['id']]=="on"){
			$dotaz="DELETE FROM prkomenty where id='".$zaznam['id']."'";
			mysql_query($dotaz);
		} else {
			echo 'Přidal: '.$zaznam['meno'].' ('.date('d.m.Y',$zaznam['datum']).') <input type="checkbox" name="ok'.$zaznam['id'].'" /> příspěvek je v pořádku,
			<input type="checkbox" name="del'.$zaznam['id'].'" /> smazat příspěvek, <a href="index.php?id='.$zaznam['id'].'">upravit</a>
			<br />
			'.$zaznam['text'].'<br /><br />';
		}
	};
	echo '<input type="submit" value="Aktualizovat" /></form>';
}

?>
