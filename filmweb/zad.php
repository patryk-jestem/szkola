<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="zad.php" method="post">
    <?php
     $severname = "localhost";
     $username = "root";
     $password = "";
     $database = "filmweb";
$polaczenia = mysqli_connect($severname, $username, $password, $database);

 if(!$polaczenia) {
     echo("Błąd połączenia: " . mysqli_connect_error());

 }
 else{

         $query = "SELECT film,ocena FROM filmweb";
         $result = mysqli_query($polaczenia, $query );
         echo "<select name='select'>";
         while ($row = mysqli_fetch_array($result)){
             echo "<option name='opcja' value=".$row['film'].">".$row['film']."</option>";
         }
         echo "</select>";}
    ?>
        <input type="submit">
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

    </form>
</body>
</html>