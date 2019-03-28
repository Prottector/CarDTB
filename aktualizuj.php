<?php
require('config.php');
$conn = connect();

$id = $_GET['id'];

function aktualizujSamochod() {
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "samochody";

	

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	
$Marka = $_POST['Marka']??'';
$Model = $_POST['Model']??'';
$Typ_Paliwa = $_POST['Typ_Paliwa']??'';
$Rocznik = $_POST['Rocznik']??'';
$Kolor = $_POST['Kolor']??'';
$id = $_POST['id']??'';

if (!empty($id)) {
$sql = "UPDATE samochody SET Marka='$Marka', Model='$Model', Typ_Paliwa='$Typ_Paliwa',Rocznik='$Rocznik', Kolor='$Kolor' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
} else {
	echo "ID error";
}

header('Location: index.php');
}

$sql = "SELECT * FROM samochody WHERE id=$id";
$result = $conn->query($sql);


if ($result->num_rows === 1) {
	$samochod = $result->fetch_assoc();
}

if(isset($_POST['submit']))
{
   aktualizujSamochod();
} 

$conn->close();
?> 

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Projekt Aplikacji</title>
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
  <h1 class='title' style="margin-bottom: 0px;">Modyfikuj dane samochodu</h1>
	<form action="" method="post" class="samochodForm">
	<input type="hidden" name="id" value="<?=$samochod["id"] ?>">
	Marka: <input type="text" name="Marka" value="<?=$samochod["Marka"] ?>"><br>
	Model: <input type="text" name="Model" value="<?=$samochod["Model"] ?>"><br>
	Typ Paliwa: <input type="text" name="Typ_Paliwa"  value="<?=$samochod["Typ_Paliwa"] ?>"><br>
	Rocznik: <input type="text" name="Rocznik" value="<?=$samochod["Rocznik"] ?>"><br>
	Kolor: <input type="text" name="Kolor"  value="<?=$samochod["Kolor"] ?>"><br>
	<input type="submit" name="submit" value="AKTUALIZUJ">
	</form>
  </div>
  </div>
  <script src="js/scripts.js"></script>
</body>
</html>