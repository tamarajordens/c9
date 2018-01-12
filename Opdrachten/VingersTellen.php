<!DOCTYPE html>
<html>
<head>

  <title>jQuery Mobile page</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/themes/aquaman.css" />
  <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="css/themes/jquery.mobile.structure-1.4.5.min.css" /> 
  <script src="src/jquery-1.11.1.min.js"></script> 
  <script src="src/jquery.mobile-1.4.5.min.js"></script> 
  <style > img {max-width: 100%; max-height: 100%;}</style>

</head>

<body>
  <form action="VingersTellen.php" method="post">
<input type="submit" name="volgende" value="Volgende">
</form>
  
  <?php
  //start de sessie
  session_start();
  //als er op de knop is geklikt wordt er 1 bij opgeteld
  if (isset($_POST['volgende'])) {
    $_SESSION['volgende'] += 1 ;
} //als er niet is geklikt blijft de sessievariabele 1 
else {
    $_SESSION['volgende'] = 1;
}

// als het gelijk is aan het cijfer in de voorwaarde van de (else)ifstatement laat hij een bepaald plaatje zien
if ($_SESSION['volgende'] == 1){
        echo '<p><img src="vinger1.png"/></p>';
    }
      elseif ($_SESSION['volgende']== 2) {
      echo '<p><img src="tweevingers.png"/></p>';
    }
    elseif ($_SESSION['volgende'] == 3) {
      echo '<p><img src="3vingers.png"</p>';
    }
    elseif ($_SESSION['volgende'] == 4){
      echo '<p> <img src="viervingers.png"</p>';
    }
    elseif ($_SESSION['volgende'] == 5) {
      echo '<p> <img src="vijfvingers.jpg"</p>';
      //als de variable gelijk is aan 5 en er wordt nog een keer op de knop gedrukt wordt de sessier destroyet en is de variabele weer gelijk aan 1
      session_destroy();
      $_SESSION['volgende'] == 1;
    }
   
  ?>
  
  
</body>
</html>





