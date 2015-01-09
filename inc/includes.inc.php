<?php 

$files = array(	"config.inc.php",
				"db.inc.php",
				"read.inc.php",
				"request.inc.php",
				"sidebar.inc.php",
				"templating.inc.php");


foreach ($files as $file){
	include_once $file;
}