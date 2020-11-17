<?php
include("../db.php");
if(! isset($_SESSION['is_admin_logged_in']))
{
	header("location:../index.php");
}
include("header.php");

$query = "SELECT * FROM product_tbl";

$result = mysqli_query($con, $query);



// print_r($data);

?>
<div class="container mt-4" style="min-height: 700px">
	<!-- <h2>Welcome Admin</h2> -->
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<h4 class="text-center">View All Products</h4>
			<table class="table table-dark table-hover table-bordered table-striped">
				<tr>
					<th>S.No.</th>
					<th>Product Name</th>
					<th>Product Price</th>
					<th>Category</th>
					<th>Discount</th>
					<th>Status</th>
				</tr>
				<?php
				while($data = mysqli_fetch_assoc($result))
				{ 
					if($data['status']==1){
						$a ="Active";
						$b = "btn-success";
					}
					else{
						$a = "Deative";
						$b = "btn-danger";
					}


					?>
					<tr>
						<td><?= $data['id'] ?></td>
						<td><?= $data['product_name'] ?></td>
						<td><?= $data['product_price'] ?></td>
						<td><?= $data['product_category'] ?></td>
						<td><?= $data['discount'] ?>%</td>
						<td><a href="#" class="btn <?= $b ?> btn-sm"><?= $a ?></a></td>
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