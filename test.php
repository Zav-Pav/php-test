<?php

//1. SPOSOB
$servername="localhost";
$username="adm@localhost";
$password="toor";
$dbname="baza";

// skrypt połączenia z bazą
$connect=mysqli_connect($servername, $username, $password, $dbname)
or die("błąd połączenia z bazą".mysqli_error($connect));

$sel="SELECT * FROM rezerwacje";
$result=mysqli_query($connect,$sel);//w nawiasie najpierw musi byc connection, potem drugi warunek
while ($aRow=mysqli_fetch_array ($result))

{
  $aFName=$aRow["typ"];
  $aPos1=$aRow["data_rez"];
  $aPos2=$aRow["telefon"];
  print("$aFName"."");
  print("$aPos1");
  print("$aPos2");
  print("<br>");
  mysqli_close($connect);
}
//2. SPOSOB

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

//3. SPOSOBY Z FORUM

$zapytanie = mysql_query("SELECT * FROM `tabela`") or die(mysql_error()); //pobieramy wszystkie rekordy z tabeli, w przypadku bledu pobierania pokaze sie stosowny komunikat

while($wynik = mysql_fetch_assoc($zapytanie)) { //tworzymy tablice z rekordami po czym "przelatujemy" przez wszystkie po kolei
  echo $wynik["id"]." / ".$wynik["nick"]." / ".$wynik["mail"]; //wyswietlamy
}

$wynik = mysql_fetch_assoc($zapytanie); // pobierze tylko jeden rekord z bazy


// mozna tez inaczej

while($wynik = mysql_fetch_row($zapytanie)) { //tu mamy nieco inna funkcje
  echo $wynik[0]." / ".$wynik[1]." / ".$wynik[2];  //da ten sam efekt
}


//sprawdzanie czy jest taki nick
$nick = "Mateusz";
$zapytanie = mysql_query("SELECT * FROM `tabela` WHERE `nick`='".$nick."'") or die(mysql_error()); //podobnie mozemy postapic z ID -> WHERE `id`=20
if(mysql_num_rows($zapytanie) != 0) {
echo "jest taki nick w bazie";
} else {
echo "nie ma takiego nicku w bazie;
}








 ?>
