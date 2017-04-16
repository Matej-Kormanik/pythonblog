<?php
$loginf = trim(htmlspecialchars(strip_tags($_POST['login'])));
$heslo1 = trim(htmlspecialchars(strip_tags($_POST['password'])));
$heslo2 = trim(htmlspecialchars(strip_tags($_POST['password2'])));
$meno = trim(htmlspecialchars(strip_tags($_POST['meno'])));
$priez = trim(htmlspecialchars(strip_tags($_POST['priez'])));
$email = trim(htmlspecialchars(strip_tags($_POST['email'])));
$vek = trim(htmlspecialchars(strip_tags($_POST['vek'])));
$submit = trim(htmlspecialchars(strip_tags($_POST['posli'])));
//  echo $login." : ".$heslo1." : ".$heslo2." : ".$meno." : ".$priez." : ".$email." : ".$vek." : ".$submit ;
if($submit != "") {
    $chybyArray = array();
    if (empty($loginf)) {
        $chybyArray[] = 'Vyplnte prihlašovací jméno.';
    };
    if (strlen($loginf) < 3) {
        $chybyArray[] = 'Prihlašovací jméno je príliš krátke.';
    };

    if (strlen($heslo1) < 6 or strlen($heslo2) < 6) {
        $chybyArray[] = 'Heslo je príliš krátke.';
    };
    if ($heslo1 != $heslo2) {
        $chybyArray[] = 'Heslá se neshodují.';
    };

    if (empty($meno)) {
        $chybyArray[] = 'Uvedte jméno.';
    };
    if (is_numeric($meno)) {
        $chybyArray[] = 'Jmeno nemuze mit ciselnu hodnotu';
    };
    if (empty($priez)) {
        $chybyArray[] = 'Uvedte Prijmení.';
    };
    if (is_numeric($priez)) {
        $chybyArray[] = 'Jmeno nemuze mit ciselnu hodnotu';
    };

    if (empty($email)) {
        $chybyArray[] = 'Vyplnte email';
    };
    if (!preg_match('/^[^@]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}+$/', $email)) {
        $chybyArray[] = 'Uvedená emailová adresa nemá správní tvar.';
    }; // emailová adresa nemá správní tvar

    if (is_numeric($vek) and strlen($vek) > 1) {
        if($vek > 100 or $vek < 1) {
            $chybyArray[] = 'vek v nespravnom tvare.';};
    };

    $chybovaHlaska = join("<br />", $chybyArray);
    if(empty($chybovaHlaska)){
        $spravne = "ano";
    }else{
        $spravne = "";
    }
}
?>


<?php
if($spravne == ""){
    echo '<h2>Registrace nového uživatele</h2>';
    echo "<br />";
    echo '<form action="" method="post" style="margin: 0px 450px 0px 0px; text-align:right; line-height:38px"  >
    <label for="login">Prihlašovací jméno:  </label><input type="text" name="login" id="login" value="'.$loginf.'"> *<br />
    <label for="password">Heslo:  </label><input type="password" name="password" id="password"> *<br />
    <label for="password2">Potvrď heslo:  </label><input type="password" name="password2" id="password2"> *<br />
    <label for="meno">Jméno:  </label><input type="text" name="meno" id="meno" value="'.$meno.'"> *<br />
    <label for="priez">Prijmení:  </label><input type="text" name="priez" id="priez" value="'.$priez.'"> *<br/>
    <label for="email">Email:  </label><input type="email" name="email" id="email" placeholder = "@" value="'.$email.'"> *<br />
    <label for="vek">Věk:  </label><input type="text" name="vek" id="vek" value="'.$vek.'">&nbsp;&nbsp;&nbsp;<br />
    <label for="registrovat"></label><input type="submit" name="posli" value="REGISTROVAŤ" id="registrovat">&nbsp;&nbsp;
    </form>';
    echo '<div style="color: red; font-weight: bold; font-size: 85%; line-height: 18px; padding-left: 135px;">'.$chybovaHlaska.'</div>';
}else{
    require "stranky/dbPripoj.php";
    $osoleneHeslo = hash("sha1",$heslo1."sol4991");
    $dotaz = 'INSERT INTO regusers (login,heslo,meno,priezvisko,email,vek) VALUES ("'.$loginf.'","'.$osoleneHeslo.'","'.$meno.'","'.$priez.'","'.$email.'","'.$vek.'")';
    $vysledok = mysqli_query($db,$dotaz);
    if($vysledok){
        echo "<h2>registrácia prebehla uspešne.</h2>";
        echo "<br />"."<br />"."<br />"."<br />"."<br />"."<br />"."<br />"."<br />"."<br />"."<br />"."<br />"."<br />"."<br />"."<br />"."<br />"."<br />"."<br />"."<br />";
    }else {
        echo "nepodarilo sa vlozit do DB".mysqli_error($db);
        echo '<form action="" method="post" style="margin: 0px 450px 0px 0px; text-align:right; line-height:38px"  >
        <label for="login">Prihlašovací jméno:  </label><input type="text" name="login" id="login" value="'.$loginf.'"> *<br />
        <label for="password">Heslo:  </label><input type="password" name="password" id="password"> *<br />
        <label for="password2">Potvrď heslo:  </label><input type="password" name="password2" id="password2"> *<br />
        <label for="meno">Jméno:  </label><input type="text" name="meno" id="meno" value="'.$meno.'"> *<br />
        <label for="priez">Prijmení:  </label><input type="text" name="priez" id="priez" value="'.$priez.'"> *<br/>
        <label for="email">Email:  </label><input type="email" name="email" id="email" placeholder = "@" value="'.$email.'"> *<br />
        <label for="vek">Věk:  </label><input type="text" name="vek" id="vek" value="'.$vek.'">&nbsp;&nbsp;<br />
        <label for="registrovat"></label><input type="submit" name="posli" value="REGISTROVAŤ" id="registrovat">&nbsp;&nbsp;
        </form>';
    }
}




?>





