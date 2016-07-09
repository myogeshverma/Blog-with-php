<?php

// Create connection
$conn = mysql_connect('localhost','root','');


// Check connection
if (!$conn) {
    die("Connection failed".mysql_error());
}


$db_selected = mysql_select_db('blog',$conn);
if (!$db_selected) {
	die('can not use db'.mysql_error());
}
?>
