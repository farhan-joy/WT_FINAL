<?php include 'admin header.php'
include 'controllers/StudentsControllers.php'

$categories=getAllstudents();
echo "<pre>";
print r($students);
echo"</pre>";

?>
<!-------all students start----->


<div class="center">
<h3 class="text">All students</h3>
<table class="table table-striped">

<thead>
<th>S1#</th>
<th> Students Name</th>
<th>Students Count</th>
<th></th>
<th></th>
</thead>

<tbody>
<?php 
$i=1;
foreach ($students as $s){
	echo"<tr>";
	echo"<td>".$c["name"]."</td>";
	echo'<td><a href="editstudents.php?id='.$s["id"].'"class="btn btn -success">Edit</a></td>';
	echo '<td><a class="btn btn-danger">Delete</td>';
	echo"</tr>"
	$i++;
	
	
}
?>
</tbody>
</table>
</div>

<!-----All categories End---->
<?php include 'admin_footer.php';?>
