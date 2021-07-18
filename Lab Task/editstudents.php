<?php include 'admin_header.php';
include 'controllers/StudentsController.php';
$id =$_GET["id"];
$c=getStudents($id);
echo "<h1>$id</h1>";
?>

<div class="center">
<form class="form-horizontal form-material">
<div class="form-group">
<h4 class="text"> Stdent Name:</h4>
<input type="text" value="<?php echo $c["name"];?>" class="form-control">
</div>


<div class="form-group text-center">

<input type="submit" class="btn btn-success" value="Edit Student" class="form-control">
</div>
</form>
</div>

<?php include'admin_footer.php';?>
