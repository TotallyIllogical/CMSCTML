<?php 

$files = array(	"config.inc.php",
				"db.inc.php",
				"read.inc.php",
				"request.inc.php",
				"templating.inc.php");

//loop för att inludera alla filerna ovan
foreach ($files as $file){
	include_once $file;
}