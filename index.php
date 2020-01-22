<?php
if(isset($_GET['biezacastrona'])){//?biezacastrona w linku
	$strony=array("json","ajax","html5");
	$biezacastrona=filter_var($_GET['biezacastrona'], FILTER_SANITIZE_STRING);
	if(!empty($biezacastrona)){
		if(!in_array($biezacastrona,$strony) || !is_file($biezacastrona.".php"))
			echo "Nie można wyswietlic zawartosci.";
		else include($biezacastrona.".php");
	}
}
else include("poczatek.php");
?>