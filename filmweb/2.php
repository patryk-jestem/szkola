<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    $select = $_POST['select'];
$wynik = mysqli_query($polaczenia, "SELECT `ocena`, `film` from `filmweb` where film='$select'");
    while ($row = mysqli_fetch_array($wynik)){
        echo "<br>";
        echo $row['film']." ".$row['ocena'];
        echo "<br>";
    }
};

?>
</body>
</html>