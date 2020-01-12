<?php

$conn=mysqli_connect('localhost','pawel','toor','sobota');

if (!$conn)
{
  exit("Blad polaczenia z serwerem");
}

else {
  $result=mysqli_query($conn,"SELECT*FROM dane") or DIE ("Bledne zapytanie");


while ($row = mysqli_fetch_array($result)) {
  echo $row['miasto']." ".$row['ulica']." ".$row['kod_pocztowy']."<br>";
}
mysqli_close($conn);
}
 ?>
