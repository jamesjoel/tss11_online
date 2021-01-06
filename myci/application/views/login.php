<?php

$x = rand(10000, 99999);

$this->session->set_userdata("captcha", $x);

$vals = array(
        'word'          => $x,
        'img_path'      => './assets/captcha/',
        'img_url'       => base_url().'assets/captcha/',
        'img_width'     => '200',
        'img_height'    => 50,
        'expiration'    => 7200,
        'word_length'   => 8,
        'font_size'     => 20,
        'img_id'        => 'Imageid',
        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

        // White background and border, black text and red grid
        'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
        )
);

$cap = create_captcha($vals);

?>

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
						<div class="form-group">
							<label><?php echo $cap['image']; ?></label>
							<input type="text" name="captcha" class="form-control" placeholder="Insert captcha word">
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

