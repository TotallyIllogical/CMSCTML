<?php

function getSidemenu1() {
	global $db;
	$sidemenu1 = array();
	$sql = "SELECT * FROM sidemenu1";
	$result = $db->query($sql);
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<li><a href="' . $row['link'] . '">' . $row['text'] . '</a></li>';
    }
}
