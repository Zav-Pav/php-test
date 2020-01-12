<?php
$servername="localhost";
$username="adm@localhost";
$password="toor";
$dbname="baza";

// skrypt połączenia z bazą
$connect=mysqli_connect($servername, $username, $password, $dbname)
or die("błąd połączenia z bazą".mysqli_error($connect));



if (!isset($_POST['data'])|| !isset($_POST['telefon'])) exit;//walidacja w php
$data=trim($_POST['data']);
$telefon=trim($_POST['telefon']);

if(empty($data) || empty($telefon))
{
    echo "Wypełnij pole data lub telefon";
    exit;
}
else {
  echo "Wypelniles poprawnie";
}


$a="INSERT INTO rezerwacje (id, data_rez, liczba_osob, telefon) /* tworzenie zmiennej $ a zamiast polaczenia */
VALUES (null, \"{$_POST['data']}\", \"{$_POST['ile_osob']}\" , \"{$_POST['telefon']}\")";

if (mysqli_query($connect, $a)) {
  echo "Zapytanie dobre <br>";
}
else {
  echo "Zapytanie do kitu";
}
print "Dodano rezerwację do bazy";


mysqli_close($connect);



?>
