

	<div class="container mt-4" style="min-height: 600px">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<!-- when we use Codeigniter validation in form then we have to set action empty -->
				<form method="post" action="">
				<div class="card mb-4">
					<div class="card-header">
						<h4>Registration</h4>
					</div>
					<?php //echo validation_errors(); ?>


					<div class="card-body">
						<div class="form-group">
							<label>Full Name</label>
							<input value="<?= set_value('full_name'); ?>" type="text" name="full_name" class="form-control">
							<small class="text-danger">
								<?= form_error('full_name'); ?>
							</small>
						</div>
						<div class="form-group">
							<label>Username</label>
							<input value="<?= set_value('username'); ?>" type="text" name="username" class="form-control">
							<small class="text-danger">
								<?= form_error('username'); ?>
							</small>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input value="<?= set_value('password'); ?>" type="password" name="password" class="form-control">
							<small class="text-danger">
								<?= form_error('password'); ?>
							</small>
						</div>
						<div class="form-group">
							<label>Re-Password</label>
							<input value="<?= set_value('re_pass'); ?>" type="password" name="re_pass" class="form-control">
							<small class="text-danger">
								<?= form_error('re_pass'); ?>
							</small>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea name="address" class="form-control"><?= set_value('address'); ?></textarea>
							<small class="text-danger">
								<?= form_error('address'); ?>
							</small>
						</div>
						<div class="form-group">
							<label>Gender</label>
							<br />
							Male <input <?= set_radio('gender', 'male'); ?> type="radio" name="gender" value="male">
							Female <input <?= set_radio('gender', 'female'); ?>  type="radio" name="gender" value="female">
							<small class="text-danger">
								<?= form_error('gender'); ?>
							</small>
						</div>
						<div class="form-group">
							<label>City</label>
							<select class="form-control" name="city">
								<option value="">Select</option>
								<option <?= set_select('city', 'indore') ?> value="indore">Indore</option>
								<option <?= set_select('city', 'mumbai') ?> value="mumbai">Mumbai</option>
								<option <?= set_select('city', 'pune') ?> value="pune">Pune</option>
								<option <?= set_select('city', 'delhi') ?> value="delhi">Delhi</option>
							</select>
							<small class="text-danger">
								<?= form_error('city'); ?>
							</small>
						</div>
						<div class="form-group">
							<label>Contact</label>
							<input value="<?= set_value('contact'); ?>" type="text" class="form-control" name="contact">
							<small class="text-danger">
								<?= form_error('contact'); ?>
							</small>
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" value="Signup" class="btn btn-primary">
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>

