<?php

function dressTemplate($templateName, array $data = array()){
  	extract($data);

  	ob_start();
  
  	require('templates/' . $templateName . '.tpl.php');
  
  	$htmlString = ob_get_clean();
  
  	return $htmlString;
}
