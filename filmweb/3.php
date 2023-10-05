<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3; url='zad.php'" />
    <title>Document</title>
</head>
<body>
<?php
$severname = "localhost";
$username = "root";
$password = "";
$database='filmweb';

$polaczenia=mysqli_connect($severname, $username, $password, $database);
if(!$polaczenia){
echo("Błąd połączenia: ".mysqli_connect_error());
}

else{
$nazwa=$_POST['nazwa'];
$ocena=$_POST['liczba'];
$wynik2 = mysqli_query($polaczenia, "INSERT INTO uzytkownicy (nazwa, ocena) values ('$nazwa', '$ocena');");
}
?>
<h1>Ocena dodana, dzękujemy</H1>
</body>
</html>

