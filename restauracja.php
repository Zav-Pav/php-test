  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">

      <title>Restauracja Wszystkie Smaki</title>
      <link rel="stylesheet" href="styl1.css" type="text/css" />



  </head>
  <body>


      <div id="contener">

      <div id="baner">
          <h1>Witamy w restauracji "Wszystkie Smaki"</h1>
      </div>

      <div id="panel_lewy">
          <img src="images/menu.jpg" alt="Nasze danie">
      </div>

      <div id="panel_prawy">

      <h4> U nas dobrze zjesz! </h4>
      <ul>
          <li>Obiady od 40 zł</li>
          <li>Przekąski od 10 zł</li>
          <li>Kolacje od 20 zł</li>
      </ul>
      </div>

      <div id="panel_dolny">
          <h2> Zarezerwuj stolik on-line</h2>

          <form action="rezerwacja.php" method="POST">
              Data (format rrrr-mm-dd):
              <br><input type="text" name="data"><br>

              Ile osób?
              <br><input type="number" name="ile_osob"><br>

              Twój numer telefonu:
              <br><input type="text" name="telefon"><br>

              <input type="checkbox"> Zgadzam się na przetwarzanie moich danych osobowych
              <br>

              <input type="reset" value="WYCZYŚĆ">

              <input type="submit" value="REZERWUJ">

          </form>
          <form action="polaczenie.php" method="POST">
          <input type="submit" name="" value="Pokaz tabele">
          </form>

          <form action="test.php" method="POST">
          <input type="submit" name="" value="Odczyt 2 sposob">  
          </form>


      </div>

      <div id="stopka">
          <p> Stronę internetową opracował: <i>00000000 </i></p>
      </div>












      </div>
  </body>
  </html>
