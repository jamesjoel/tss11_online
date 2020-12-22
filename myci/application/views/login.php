

	<div class="container mt-4" style="min-height: 600px">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form method="post" action="<?= site_url('home/auth') ?>">
				<div class="card">
					<div class="card-header">
						<h4>Login</h4>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label>Username</label>
							<input value="" type="text" name="username" class="form-control">
							
						</div>
						<div class="form-group">
							<label>Password</label>
							<input value="" type="password" name="password" class="form-control">
							
						</div>
						<p class="text-danger text-center">
							<?= $this->session->flashdata("msg"); ?>
						</p>
					</div>
					<div class="card-footer">
						<input type="submit" value="Login" class="btn btn-primary">
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>

