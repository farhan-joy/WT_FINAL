<?php include 'admin_header.php';
	include 'controllers/StudentController.php';
?>
<!--addproduct starts -->
	<div class="center">
		<h5 class="text-danger"><?php echo $err_db;?></h5>
		<form action="" method="post" class="form-horizontal form-material">
			<div class="form-group">
				<h4 class="text"> Stdent Name:</h4> 
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text"> Stdent cgpa:</h4> 
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text"> Stdent credit:</h4> 
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text"> Stdent dept:</h4> 
				<input type="text" name="name" class="form-control">
			</div>
			
			<div class="form-group text-center">
				
				<input type="submit" name="add_category" class="btn btn-success" value="Add Students" class="form-control">
			</div>
		</form>
	</div>

<!--addproduct ends -->
<?php include 'admin_footer.php';?>