<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../index.php");
}
include("header.php");
?>
<div class="container mt-4" style="min-height: 700px">
	<!-- <h2>Welcome Admin</h2> -->
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="save_category.php" method="post">
			<div class="card">
				<div class="card-header">
					<h3>Add Category</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Category Name</label>
						<input name="category_name" type="text" class="form-control">
					</div>
					
				</div>
				<div class="card-footer">
					<input type="submit" value="Add" class="btn btn-primary">
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