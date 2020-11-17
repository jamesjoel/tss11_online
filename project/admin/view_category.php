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
					
				</tr>
				<?php
				while($data = mysqli_fetch_assoc($result))
				{ 
					

					?>
					<tr>
						<td><?= $data['id'] ?></td>
						<td><?= $data['category_name'] ?></td>
						
					</tr>
				<?php 
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