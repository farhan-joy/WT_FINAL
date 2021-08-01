<?php

function searchCategory($key){
	$query ="select id,name from category where name like '%$key%'";
	
	$rs = get ($query);
	return $rs;
	
}