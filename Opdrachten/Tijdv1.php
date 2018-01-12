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
  

  
  <form action ="Tijdv1.php" method = "post" >
  <div data-role="main" class="ui-content">
      <label for="uren">uren</label>
      <input type="range" name="uren" id="uren" value="0" min="0" max="23">
  </div>
  <div data-role="main" class="ui-content">
      <label for="minuten">minuten</label>
      <input type="range" name="minuten" id="minuten" value="0" min="0" max="59">
  </div>
  <div data-role="main" class="ui-content">
      <label for="seconden">seconden</label>
      <input type="range" name="seconden" id="seconden" value="0" min="0" max="59">
  </div>
  <input type = "submit" name = "bereken" value = "bereken">
  
  
 </form>
 
    <?php
    //de ingevulde waarden worden opgehaald en in variabelen gezet
     $uren = $_POST["uren"];
     $minuten = $_POST["minuten"];
     $seconden =$_POST["seconden"];
    
    //als er op de knop is geklikt word het berekend
     if(isset($_POST["bereken"])) {
       //de uren en minuten worden naar seconden omgezet en alles wordt bij elkaar opgeteld
        $som = ($uren*3600) + ($minuten*60) + $seconden;
        //we laten het uiteindelijke aantal seconden zien
        echo "Dit is : $som  seconden";
     }
     
  ?>
  
 
</body>




</html>