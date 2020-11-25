<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../index.php");
}
include("header.php");

$query = "SELECT * FROM category_tbl";

$result = mysqli_query($con, $query);



// print_r($data);

?>
<div class="container mt-4" style="min-height: 700px">
	<!-- <h2>Welcome Admin</h2> -->
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h4 class="text-center">View All Category</h4>
			<table class="table table-dark table-hover table-bordered table-striped">
				<tr>
					<th>S.No.</th>
					<th>Category Name</th>
					<th>Edit</th>
					<th>Delete</th>
					
				</tr>
				<?php
				$n=1;
				while($data = mysqli_fetch_assoc($result))
				{ 
					

					?>
					<tr>
						<td><?= $n ?></td>
						<td><?= $data['category_name'] ?></td>
						<td><a href="edit_cate.php?id=<?= $data['id'] ?>" class="btn btn-info btn-sm">Edit</a></td>
						<td><a href="delete_cate.php?id=<?= $data['id'] ?>" class="btn btn-danger btn-sm">Delete</a></td>
					</tr>
				<?php 
				$n++;
				}
				?>


			</table>
		</div>
	</div>
</div>

<div class="container-fluid bg-dark">
	<p class="m-0 text-center text-light p-3">Copyrite by TSS</p>
</div>

</body>
</html>