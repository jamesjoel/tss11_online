
	<div class="container mt-4" style="min-height: 600px">
		<h2>Contact Page</h2>
		<?php
		$x = rand(1000, 9999);
		$vals = array(
        'word'          => $x,
        'img_path'      => './assets/captcha/',
        'img_url'       =>  base_url().'assets/captcha/',
        
        'img_width'     => 150,
        'img_height'    => 50,
        'expiration'    => 7200,
        'word_length'   => 8,
        'font_size'     => 25,
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
echo $cap['image'];
	?>
	<br />
	Insert Chaptch <input type="text">

	</div>
