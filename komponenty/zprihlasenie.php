<?php
session_start();
if($_SESSION['prihlasenyUser']=="" and $_POST['loginf']!=""){
    $loginf = trim(htmlspecialchars(strip_tags($_POST['loginf'])));
    $pass = trim(htmlspecialchars(strip_tags($_POST['password'])));
    $passwd = hash("sha1",$pass."sol4991");

    require "stranky/dbPripoj.php";
    $dotaz = 'SELECT * FROM regusers WHERE login="'.$loginf.'" AND heslo="'.$passwd.'"';
    $result = mysqli_query($db,$dotaz);
    $row = mysqli_fetch_array($result);
    if($row['login']!=""){
        $_SESSION['prihlasenyUser'] = $row['login'];
    }else{
        $zlyLogin = "Špatné prihlašovací údaje";
    };
}
?>


<?php
if($_SESSION['prihlasenyUser']==""){
    echo '<h2>Přihlášení</h2>'.'<br />';
    echo '<form action="" method="post" style="margin: 0px 450px 0px 0px; text-align:right; line-height:38px"  >
          <label for="loginf">Prihlašovací jméno:  </label><input type="text" name="loginf" id="loginf"> <br />
          <label for="password">Heslo:  </label><input type="password" name="password" id="password"> <br />
          <label for="prihlasit"></label><input type="submit" value="PŘIHLÁSIT" id="prihlasit">
          </form>';
    echo '<div style="color: red; font-weight: bold; font-size: 85%; line-height: 18px; padding-left: 140px;">'.$zlyLogin.'</div>';
    echo '<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>';
}else{
    echo "<br>";
    echo '<h3>Prihlášený uživatel :"'.$_SESSION['prihlasenyUser'].'"</h3>';
    echo '<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'<br>';
}

?>



