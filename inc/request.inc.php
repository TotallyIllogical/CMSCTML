<?php

function mapRequest(){
	$path = $_SERVER['REQUEST_URI'];
	$path = str_replace(SITE_ROOT, '', $path);
	return $path;
}
function getTokensFromPath($path){
	$path = explode("/", $path);
	return $path;
}
function routeDefault($path){
	if ($path == false){
		header('Location: ' . DEFAULT_PAGE);
	}
}

function respond($str){
	print $str;
}