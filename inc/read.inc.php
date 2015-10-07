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
	$sql = "SELECT content.* 
	   		FROM menuxtext
    		JOIN content ON content.id = menuxtext.w_id
    		WHERE menuxtext.m_id = $menuid";
    $result = $db->query($sql);
	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		$text[] = $row;
	}
	return $text;
}

function getQuicklinks($path) {
	global $db;
	$quicklinks = array();
	$links = array();
	$sql = "SELECT * FROM quicklinks
			WHERE placement = '$path'";
	$result = $db->query($sql);
	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		$links[] = $row;
	}
	return $links;

}

function getSociallinks() {
	global $db;
	$sidemenu = array();
	$sql = "SELECT * FROM sociallinks";
	$result = $db->query($sql);
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $sidemenu[] = '<a href="' . $row['link'] . '"><i class="' . $row['img'] . '"></i></a>';
    }
    return $sidemenu;
}

