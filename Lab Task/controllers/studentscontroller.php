<?php
	require_once 'models/db_config.php';
	
	$err_db="";
	if(isset($_POST["add_student"])){
		
		$rs = insertStudent($_POST["name"]);
		if($rs === true){
			header("Location: allstudents.php");
		}
		$err_db = $rs;
	}
	elseif(isset($_POST["edit_students"])){
		//do the validations
		//if not error
		$rs = editStudents($_POST["name"],$_POST["id"]);
		if($rs === true){
			header("Location: allstudents.php");
		}
		$err_db = $rs;
	}
	
	function insertStudent($name){
		$query = "insert the students values (NULL, '$name')";
		return execute($query);
		
	}
	function getAllStudents(){
		$query = "select * from students";
		$rs = get($query);
		return $rs;
	}
	function getStudents($id){
		$query = "select * from students where id=$id";
		$rs = get($query);
		return $rs[0];
	}
	function editStudents($name, $id){
		$query = "update students set name='$name' where id=$id";
		return execute($query);
		
	}
?>