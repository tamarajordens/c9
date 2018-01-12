<?php
// Hier wordt de sessie gestart
session_start();
// als er op de knop opnieuw is geklikt, wordt de sessier desroyet en opniuew gestart
if(isset($_POST["opnieuw"]))
{
	session_destroy();
	session_start();
}
// Hier krijgen de sessievariabelen worp1, worp2 en worp3 een startwaarde aangezien er wordt begonnen met standaard plaatjes
if(!isset($_SESSION["worp1"]))
{
	$_SESSION["worp1"] = 3;
	$_SESSION["worp2"] = 1;
	$_SESSION["worp3"] = 6;
	
	//hier worden de standaard aantal ogen op de dobbelstenen in een sessievariabelen gezet, aangezien er begonnen wordt met standaard plaatjes vand de dobbelstenen
	$_SESSION["aantal1"]= 3;
	$_SESSION["aantal2"]= 1;
	$_SESSION["aantal3"]= 6;
}
// Hier krijgt de sessievariabele aantal een startwaarde
if(!isset($_SESSION["aantal"]))
{
	//als er nog niet op een dobbelsteen is geklikt is het aantal 0
	$_SESSION["aantal"] = 0;
	
	
}
// Hier wordt gecontroleerd of er op een dobbelsteen is geklikt
if(isset($_POST["verzend"]))
{
	// de sessievariabele wordt in een variabele gezet
	$aantal = $_SESSION["aantal"];
	//elke keer als er op een dobbelsteen wordt geklikt komt er 1 bij de aantal kliks
	$aantal++;
	$_SESSION["aantal"] = $aantal;
	// Hier wordt gekeken op welk plaatje er is geklikt
	$verzend = $_POST["verzend"];
	// Hier wordt een willekeurig getal tussen 1 en 6 bewaard in de variabele $worp
	$worp = rand(1,6);
	// Afhankelijk van de verzendknop wordt hier de bijbehorende sessievariabele aangepast
	//ook wordt er bij iedere dobbelsteen het random getal bij het totaal aantal ogen geteld.
	  if($verzend == 1){
	  	$_SESSION["worp1"] = $worp;
	  	$_SESSION["aantal1"] = $_SESSION["aantal1"] + $worp;
	  }
	  
	  if($verzend == 2){
	  	$_SESSION["worp2"] = $worp;
	  	$_SESSION["aantal2"] = $_SESSION["aantal2"] + $worp;
	  }
	  
	  if($verzend == 3){
	  	$_SESSION["worp3"] = $worp;
	  	$_SESSION["aantal3"] = $_SESSION["aantal3"] + $worp;
	  }
}
// Hier worden de waarden van de sessievariabelen uit de sessie gehaald en bewaard in $worp1 $worp2 $worp3 en $aantal
$worp1 = $_SESSION["worp1"];
$worp2 = $_SESSION["worp2"];
$worp3 = $_SESSION["worp3"];
$aantal = $_SESSION["aantal"];
//de aantal ogen per dobbelstenen worden opgeslagen in een variabele zodat het onder de plaatjes kan worden ge-echoot --> (is dit een woord?)
$aantal1 = $_SESSION["aantal1"];
$aantal2 = $_SESSION["aantal2"];
$aantal3 = $_SESSION["aantal3"];




?>
<!DOCTYPE html>
<html>
  <head>
	  <title>Dobbelstenen</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/themes/aquaman.css" />
  <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="css/themes/jquery.mobile.structure-1.4.5.min.css" /> 
  <script src="src/jquery-1.11.1.min.js"></script> 
  <script src="src/jquery.mobile-1.4.5.min.js"></script> 
  </head>
  <body>
		<div id="pag1" data-role="page" data-theme="b">
			<div data-role="header">
				<h1>3_DOB</h1>
			</div>
			<div role="main" class="ui-content" style="padding:0px;">
				<fieldset class="ui-grid-b">
					<div class="ui-block-a">
					<form action="Dobbelstenen.php" method="post">
						<input type="hidden" name="verzend" value="1" />
						<input type="image" src="dobbel<?php echo"$worp1"; ?>.gif" style="max-width:100%" />
						<?php //het aantal ogen van dobbelsteen 3 wordt ge-echoot
						echo "Aantal van dobbelsteen 1 is $aantal1 <br>"; 
						?>
					</form>
					</div>
					<div class="ui-block-b">
					<form action="Dobbelstenen.php" method="post">
						<input type="hidden" name="verzend" value="2" />
						<input type="image" src="dobbel<?php echo"$worp2"; ?>.gif" style="max-width:100%" />
						<?php //het aantal ogen van dobbelsteen 2 wordt ge-echoot
						echo "Aantal van dobbelsteen 2 is $aantal2 <br>"; 
						?>
					</form>
					</div>
					<div class="ui-block-c">
					<form action="Dobbelstenen.php" method="post">
						<input type="hidden" name="verzend" value="3" />
						<input type="image" src="dobbel<?php echo"$worp3"; ?>.gif" style="max-width:100%" />
						<?php //het aantal ogen van dobbelsteen 3 wordt ge-echoot
						echo "Aantal van dobbelsteen 3 is $aantal3 <br>";
						?>
					</form>					
					</div>
				</fieldset>
				<div class="ui-body ui-body-b ui-corner-all">
				<?php
				// het aantal worpen wordt geechoot
				echo"Het aantal worpen is: $aantal <br>";
				?>
				</div>
				<form action="Dobbelstenen.php" method="post">
					<button class="ui-shadow ui-btn ui-corner-all ui-mini" id="opnieuw" type="submit" name="opnieuw">Begin opnieuw</button>
				</form>				
			</div>
			<div data-role="footer" data-position="fixed">
				<h3>&copy; INF-actief</h3>
			</div>
		</div>
  </body>
</html>