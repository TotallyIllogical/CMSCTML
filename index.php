<?php


include_once "inc/includes.inc.php";

$path = mapRequest();

routeDefault($path);
$written = getDataFromPath($path);
$menu = dressTemplate('menu', array('menu' => $written['menu']));
$content ="";
foreach($written['words'] as $word){
	$content .= dressTemplate('word', $word);
}

$page = dressTemplate('page', array(
									'title' => SITE_TITLE, 
									'baseHref'=> SITE_ROOT, 
									'menu' => $menu, 
									'content' => $content, 
									'footer' => '<small><em>Skapad av: Emma "Eia" Andersson</em></small>'));
respond($page);

