 <?php
require('config.php');
$conn = connect();

$idGET = $_GET['id'];


$sql = "DELETE FROM samochody WHERE id=$idGET";

if ($conn->query($sql) === TRUE) {
    echo "<div class='wrap' style='top: 50%; transform: translate(-50%, -50%);'>
	<h1 class='title'>Usunięto rekord!</h1>
	<a href='index.php' class='przycisk' style='margin-top: 30px;'>Wróć</a>
	</div>";
} else {
    echo "<div class='wrap'>
	<h1 class='title'>Błąd usuwania rekordu</h1>
	<a href='index.php' class='przycisk2' style='margin-top: 30px;'>Wróc</a>
	</div>";
}

$conn->close();
?> 


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Projekt Programowanie Aplikacji Internetowych</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>
	 <div id ='stars'>
        </div>
        <div id ='stars2'>
        </div>
        <div id ='stars3'>
        </div>
</body>
</html> 

