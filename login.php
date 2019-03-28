<?php
if (isset($_POST['login']) && (isset($_POST['haslo'])))
	{
      if($_POST['login']=='admin' && $_POST['haslo']=='admin')
	  {
	 session_start();
	 $_SESSION['login']= $_POST['login'];
	  header('Location: index.php');
	  exit();
	  }	 else
echo 'Niepoprawne dane logowania';	  
	}
?>

<!doctype html>
<html lang="pl-PL">
<head>
  <meta charset="UTF-8">
  <title>Projekt Aplikacji</title>
  <link rel="stylesheet" href="styless.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet"> 
</head>
<body>
<h1 class='title'>Zaloguj się!</h1>
	<div class='wrap'>
		<form action=login.php method='post' class="samochodForm">
		Login: <input name='login' type="text" placeholder="admin"><br>
		Haslo: <input name='haslo' type="text" placeholder="admin">
		<input type='submit' value="ZALOGUJ" >
		</form>
	</div>
</body>
</html>