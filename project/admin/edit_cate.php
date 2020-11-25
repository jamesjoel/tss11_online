<?php
/*
	1. text
	2. passwrod
	3. file
	4. textarea
	5. radio
	6. select
	7. checkbox
	8. submit
	9. button
	10. reset
	11. hidden



*/

include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../index.php");
}
include("header.php");

$id = $_GET['id'];
$query = "SELECT * FROM category_tbl WHERE id= $id";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);

// print_r($data);


?>
<div class="container mt-4" style="min-height: 700px">
	<!-- <h2>Welcome Admin</h2> -->
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="update_category.php" method="post">
			<div class="card">
				<div class="card-header">
					<h3>Update Category</h3>
				</div>
				<input type="hidden" name="id" value="<?= $data['id'] ?>" >
				<div class="card-body">
					<div class="form-group">
						<label>Category Name</label>
						<input value="<?= $data['category_name'] ?>" name="category_name" type="text" class="form-control">
					</div>
					
				</div>
				<div class="card-footer">
					<input type="submit" value="Update" class="btn btn-primary">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid bg-dark">
	<p class="m-0 text-center text-light p-3">Copyrite by TSS</p>
</div>

</body>
</html>