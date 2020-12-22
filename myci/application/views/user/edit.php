<!-- 
<?php
/*
	$a = "hello"
	$b = "indore";
*/
?>	

 -->


<div class="container" style="min-height: 650px">
	<div class="row mt-4">
		<div class="col-md-6 offset-md-3 mt-4">
		<h2 class="text-center">Edit Profile</h2>
		<form method="post" action="<?= site_url('user/update') ?>">
			<div class="card">
				<div class="card-header">
					<h3>Update Your Profile Info</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="full_name" class="form-control" value="<?= $data['full_name'] ?>">

					</div>
					<div class="form-group">
						<label>Username</label>
						<input disabled type="text" class="form-control" value="<?= $data['username'] ?>">
					</div>
					<div class="form-group">
						<label>Contact</label>
						<input type="text" name="contact" class="form-control" value="<?= $data['contact'] ?>">
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" name="address"><?= $data['address'] ?>"</textarea>
					</div>

					<div class="form-group">
						<label>Gender</label>
						<br />
						Male <input <?php if($data['gender']=="male") echo "checked"; ?> type="radio" name="gender" value="male">
						Female <input <?php if($data['gender']=="female") echo "checked"; ?> type="radio" name="gender" value="male">
					</div>
					<div class="form-group">
						<label>City</label>
						<select name="city" class="form-control">
							<option value="">Select</option>
							<option <?php if($data['city']=="indore") echo "selected" ?> value="indore">Indore</option>
							<option <?php if($data['city']=="mumbai") echo "selected" ?> value="mumbai">Mumbai</option>
							<option <?php if($data['city']=="pune") echo "selected" ?> value="pune">Pune</option>
							<option <?php if($data['city']=="delhi") echo "selected" ?> value="delhi">Delhi</option>
						</select>
					</div>

				</div>
				<div class="card-footer">
					<input type="submit" value="Update" class="btn btn-primary">
				</div>
			</div>
		</div>
		</form>
	</div>
</div>