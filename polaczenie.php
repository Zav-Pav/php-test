<?php
$servername="localhost";
$username="adm@localhost";
$password="toor";
$dbname="baza";

// skrypt połączenia z bazą..
$connect=mysqli_connect($servername, $username, $password, $dbname)
or die("błąd połączenia z bazą".mysqli_error($connect));



$zapytanie="SELECT * FROM rezerwacje";
$wynik=mysqli_query($connect,$zapytanie)or die (mysqli_error());
$rekord=mysqli_fetch_assoc($wynik);
echo "wypisuje rekordy z tabeli";
print_r($rekord);
echo "<br />";
while ($rekord=mysqli_fetch_assoc($wynik))
{
  print_r($rekord);
}
 ?>
