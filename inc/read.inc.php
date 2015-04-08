<?php


function getDataFromPath($path) {
	$menu = getMenu($path);
	$data = array('menu' => $menu['items'], 'words' => getWords($menu['selectedId']));
	return $data;
}

function getMenu($path) {
	global $db;
	$menu = array();
	$sql = "SELECT * FROM menu";
	$result = $db->query($sql);
	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		  $menu['items'][] = $row;
}
    foreach($menu['items'] as $key => $item) {
    	if ($item['name'] == $path) {
 		   	$menu['items'][$key]['selected'] = TRUE;
    		$menu['selectedId'] = $item['id'];
        }
    	else {
    		$menu['items'][$key]['selected'] = FALSE;
    	}  
    }    
    return $menu;
}

function getWords($menuid) {
		global $db;
		$sql = "SELECT words.* 
		   		FROM menuxtext
        		JOIN words ON words.id = menuxtext.w_id
        		WHERE menuxtext.m_id = $menuid";
        $result = $db->query($sql);
		while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		$text[] = $row;
		}
	return $text;
}

function getSidemenu() {
	global $db;
	$sidemenu = array();
	$sql = "SELECT * FROM sidemenu1";
	$result = $db->query($sql);
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $sidemenu[] = '<li><a href="' . $row['link'] . '">' . $row['text'] . '</a></li>';
    }
    return $sidemenu;
}

