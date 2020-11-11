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
			<form action="save_product.php" method="post">
			<div class="card">
				<div class="card-header">
					<h3>Add Product</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Product Name</label>
						<input name="product_name" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Product Price</label>
						<input name="product_price" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Product Category</label>
						<select name="category" class="form-control">
							<option>Select</option>
							<option value="1">Home Appliance</option>
							<option value="2">Electronics</option>
							<option value="3">Fashion Men</option>
							<option value="4">Fashion Women</option>
							
						</select>
					</div>
					<div class="form-group">
						<label>Product Detail</label>
						<textarea name="product_detail" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>Discount</label>
						<div class="input-group">
							<input name="discount" type="text" class="form-control">
							<div class="input-group-append">
								<div class="input-group-text">%</div>
							</div>
						</div>
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