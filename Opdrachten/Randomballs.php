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
  <form action = "Randomballs.php" method = "post">
    <div data-role="main" class="ui-content">
      <label for="rood">Rode Bollwn</label>
      <input type="range" name="rood" id="rood" value="1" min="1" max="9">
  </div>
  <div data-role="main" class="ui-content">
      <label for="blauw">Blauwe Ballen</label>
      <input type="range" name="blauw" id="blauw" value="1" min="1" max="9">
  </div>
  <div data-role="main" class="ui-content">
    <label for="aantal">Aantal keer pakken</label>
    <input type="range" name="aantal" id="aantal" value="1" min="1" max="100">
  </div>
    <input type = "submit" name = "simuleer" value = "simuleer">
  </form>
  
  <?php
  
  //checken of er op de knop is gedrukt
  if (isset($_POST["simuleer"]))
	{
	    //we halen de ingevulde waarden op
	$rood = $_POST["rood"];
	$blauw = $_POST["blauw"];
	$aantal = $_POST["aantal"];
	//het tellen de totale ballen in de zak/pot
	$totaal_ballen = $rood + $blauw;
    //er zijn nog geen ballen gepakt dus het aantal is 0
	$rood_gepakt = 0;
	$blauw_gepakt = 0;
	//als 
	if (!empty($rood) && !empty($aantal) && !empty($blauw))
		{
		    //er zijn nog geen ballen gepakt 
		$ballengepakt = 0;
		//zolang er minder ballen zijn gepakt dan dat de gebruiker heeft ingevuld gaat het pakken door
		while ($ballengepakt < $aantal)
			{
			    //iedere keer als er een bal wordt gepakt tellen we er 1 bij op
			$ballengepakt++;
			// we pakken een random bal van de ballen in de zak
			$pakbal = rand(1, $totaal_ballen);
			// er wordt een bal gepakt en als deze kleiner is dan het aantal rode ballen in de zak is het een rode bal
			if ($pakbal < $rood)
				{
				    // we laten zien dat er een rode bal is gepakt en tellen +1 bij de rode gepakte ballen
				echo "R<br />";
				$rood_gepakt++;
				}
				//anders is het een blauwe bal
			  else
				{
				    //we laten zien als er een blauwe bal is gepakt en tellen +1 bij de blauwe gepakte ballen
				echo "B <br /> ";
				$blauw_gepakt++;
				}
			}
            //we laten zien hoeveel rode en blauwe ballen er zijn gepakt
		echo "<br /> aantal rood is $rood_gepakt en aantal blauw is $blauw_gepakt";
		}
	}
  
  ?>