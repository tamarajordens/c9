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
  <form action = "BMIcalculator.php" method = "post">
    <div data-role="main" class="ui-content">
      <label for="gewicht">gewicht(kg)</label>
      <input type="range" name="gewicht" id="gewicht" value="1" min="1" max="200">
  </div>
  <div data-role="main" class="ui-content">
      <label for="lengte">lengte(cm)</label>
      <input type="range" name="lengte" id="lengte" value="1" min="1" max="250">
  </div>
    <input type = "submit" name = "bereken" value = "bereken">
  </form>
  
  
  <?php
  
  //we halen de ingevulde gegevens op en zetten het in een variabele
    $gewicht = $_POST["gewicht"];
    $lengte = $_POST["lengte"];
   // echo "$gewicht hoi";
   // echo "$lengte hoi";
   // lengte wordt om gezet in meters
   $lengte_in_m = $lengte/100;
  //echo "$lengte_in_m";
  // het bmi wordt  berekend
  $BMI = round($gewicht / ($lengte_in_m*2),1);
  //het bmi de lengte en het gewicht laten we zien
  echo " Met een gewicht van $gewicht kg en een lengte van $lengte_in_m meter heeft u een BMI van $BMI <br>";
  //als wat tussen de (else)if voorwaarden geldt, laat het een plaatje zien en of je over of ondergewicht hebt
  if ($BMI < 18.5) {
    echo "u heeft ondergewicht";
    echo '<p><img src="ondergewicht.jpeg"/></p>';
    
  }
  elseif ($BMI > 18.5 && $BMI <25){
    echo"u heeft een normaal gewicht";
    echo '<p><img src="normaalgewicht.jpeg"/></p>';
  }
  elseif ($BMI > 25 && $BMI <27){
    echo"u heeft licht overgewicht";
    echo '<p><img src="lichtovergewicht.jpeg"/></p>';
  }
  elseif ($BMI > 27 && $BMI <30){
    echo"u heeft matig overgewicht";
    echo '<p><img src="matigovergewicht.jpeg"/></p>';
  }
  
  elseif ($BMI > 30 && $BMI <40){
    echo"u heeft ernstig overgewicht";
    echo '<p><img src="ernstigovergewicht.jpeg"/></p>';
  }
  elseif ($BMI > 40){
    echo"u heeft ziekelijkt overgewicht";
    echo '<p><img src="ziekelijkovergewicht.jpeg"/></p>';
  }
  
  ?>
  


</body>

</html>