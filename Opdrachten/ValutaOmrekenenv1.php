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
  <form action = "ValutaOmrekenenv1.php" method = "post">
    <div data-role="main" class="ui-content">
      <label for="bedrag">bedrag</label>
      <input type="range" name="bedrag" id="bedrag" value="0" min="1" max="1000">
  </div>
  <br>
  <fieldset data-role = "controlgroup" data-type="horizontal">
    <legend>Valuta </legend>
    <input type = "radio" name = "valuta" id = "yen" value = "yen" checked = "checked">
    <label for = "yen"> Yen</label>
    <input type = "radio" name = "valuta" id = "dollar" value = "dollar">
    <label for = "dollar"> Dollar</label>
    <input type = "radio" name = "valuta" id = "pond" value = "pond">
    <label for = "pond"> Pond</label>
  </fieldset>
    <br>
    <input type = "submit" name = "bereken" value = "bereken">
  </form>
  
  
  <?php
  //de ingevulde gegeven worden opgehaald en in variabelen gezet
    $bedrag = $_POST["bedrag"];
    $yen = $_POST["yen"];
    $dollar = $_POST["dollar"];
    $pond = $_POST["pond"];
    
    //$euro_yen = $bedrag * 132.77903;
    //$euro_dollar = $bedrag * 1.17775;
    //$euro_pond = $bedrag * 0.8828;
    //checken of er op de knop is geklikt
    if(isset($_POST["bereken"])) {
      
      //als de valuta yen is gekozen wordt het omgezet naar euro
      if($_POST["valuta"] == "yen") {
        
        $euroyen = $bedrag * 132.77903;
        echo "$bedrag yen is: $euroyen euro <br>";
      }
      //als de valuta dollar is gekozen wordt het omgezet naar euro
      if($_POST["valuta"] == "dollar"){
        $eurodollar = $bedrag * 1.17775;
       echo "$bedrag dollar is: $eurodollar euro <br>";
      }
      //als de valuta pond is gekozen wordt het omgezet naar pond
      if($_POST["valuta"] == "pond"){
        $europond = $bedrag * 0.8828;
        echo " $bedrag pond is: $europond euro <br>";
      }
      
      
      
      
    }
    
    
  
  ?>
  
  
  
  
  


</body>

</html>