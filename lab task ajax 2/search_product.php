<?php
include 'controllers/CategoryController.php'
$key = $_Get["key"];
$products = searchCategory($key);


if( count ($category)>0){
	foreach($category as $ c){
		echo "<c>".$c["name"]."</p>";
		
	}
	
	
}
?>