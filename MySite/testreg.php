<?php
session_start();
if(isset($_POST['login'])) {
    $login = $_POST['login'];
    if ($login == '') {
        unset($login);
        }
}
if (isset($_POST['password'])){
    $password=$_POST['password'];
    if ($password =='') { unset($password);}
}
if (empty($login) or empty($password)){
	exit ("You haven't entered all required information. Return and repeat");
}
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);
$db = mysql_connect ('localhost','root','')or die ("<p>Trobles with SQL connection</p>");
		mysql_select_db ('Pindus',$db) or die ("<p>Getting database is impossible</p>");

$result= mysql_query("SELECT * FROM users WHERE login='$login'",$db);
$myrow = mysql_fetch_array($result);
if(empty($myrow['password'])){
    exit ("You've entered wrong login or password");
}
else {
    if($myrow['password']==$password){
        //запускаем сессию
        $_SESSION['login']=$myrow['login'];
        $_SESSION['id']=$myrow['id'];
        header("Location:index_after_reg.php");
    }
    else {
        exit ("You've entered wrong login or password");
    }
}
?>