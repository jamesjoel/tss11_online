<div class="container" style="min-height: 650px">
	<div class="row mt-4">
		<div class="col-md-6 offset-md-3 mt-4">
		
		<form method="post" action="<?= site_url('user/update_pass') ?>">
			<div class="card">
				<div class="card-header">
					<h3>Change Your Password</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Current Password</label>
						<input type="password" name="current_pass" class="form-control">

					</div>
					<div class="form-group">
						<label>New Password</label>
						<input type="password" name="new_pass" class="form-control">

					</div>
					<div class="form-group">
						<label>Confirm New Password</label>
						<input type="password" name="conf_new_pass" class="form-control">

					</div>


					<p class="text-danger text-center">
						<?= $this->session->flashdata("msg"); ?>
					</p>
					

				</div>
				<div class="card-footer">
					<input type="submit" value="Update" class="btn btn-primary">
				</div>
			</div>
		</div>
		</form>
	</div>
</div>