<div class="container" style="min-height: 650px">
	<div class="row mt-4">
		<div class="col-md-6 offset-md-3 mt-4">
		<h2 class="text-center">My Profile</h2>

			<table class="table table-bordered table-dark table-hover">
				<tr>
					<td>Full Name</td>
					<td><?= $data['full_name'];?></td>
				</tr>
				<tr>
					<td>Username/Email</td>
					<td><?= $data['username'];?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?= $data['address'];?></td>
				</tr>

				<tr>
					<td>Contact</td>
					<td><?= $data['contact'];?></td>
				</tr>
				<tr>
					<td>City</td>
					<td><?= $data['city'];?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><?= $data['gender'];?></td>
				</tr>
				
			</table>
			<br />
			<a href="<?= site_url('user/edit') ?>" class="btn btn-info">Edit Profile</a>
			<a href="<?= site_url('user/change_pass') ?>" class="btn btn-info">Change Password</a>
		</div>
	</div>
</div>