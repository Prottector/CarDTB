 <?php
function dodaj() {
	
require('config.php');
$conn = connect();

$Marka = $_POST['Marka'];
$Model = $_POST['Model'];
$Typ_Paliwa = $_POST['Typ_Paliwa'];
$Rocznik = $_POST['Rocznik'];
$Kolor = $_POST['Kolor'];


$sql = "INSERT INTO samochody (Marka, Model, Typ_Paliwa, Rocznik, Kolor)
VALUES ('$Marka','$Model','$Typ_Paliwa','$Rocznik','$Kolor')";

if ($conn->query($sql) === TRUE) {
    echo "Dodano nowy rekord";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: index.php');
}

if(isset($_POST['submit']))
{
   dodaj();
} 

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
  <div class='wrap' style='top: 50%; transform: translate(-50%, -50%);'>
  <h1 class='title'>Dodaj nowy samochód!</h1>
	<form action="dodaj.php" method="post" class="samochodForm">
	Marka: <input type="text" name="Marka"><br>
	Model: <input type="text" name="Model"><br>
	Typ Paliwa: <input type="text" name="Typ_Paliwa"><br>
	Rocznik: <input type="text" name="Rocznik"><br>
	Kolor: <input type="text" name="Kolor"><br>
	<input type="submit" name="submit" value="Dodaj samochód">
	</form>
  </div>
  </div>
  <script src="js/scripts.js"></script>
</body>
</html>