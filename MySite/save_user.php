<?php
if (isset($_POST['login'])){
	$login = $_POST['login'];
	if ($login == ''){
		unset($login);
	}
}
if (isset($_POST['password'])){
	$password = $_POST['password'];
	if ($password == ''){
		unset($password);
	}
}
if (empty($login) or empty($password)){
	exit ("You haven't entered all required information. Return and repeat");
}

$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);

$login = trim($login);
$password = trim($password);

$db = mysql_connect ('localhost','root','')or die ("<p>Trobles with SQL connection</p>");
		mysql_select_db ('Pindus',$db) or die ("<p>Getting database is impossible</p>");
$result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])){
	exit("Entered login already exists");
}
$result2 = mysql_query("insert into users (login, password) values ('$login', '$password')");
if ($result2 == 'TRUE')
		{
		header("Location:index.html"); 
		}
else 
	{
		echo "<p>Errors with registration</p>";
	}

?>