<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.css">
	<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.bundle.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <!-- Brand -->
	  <a class="navbar-brand" href="<?= site_url('home') ?>">TSS</a>

	  <!-- Toggler/collapsibe Button -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <!-- Navbar links -->
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="<?= site_url('home') ?>">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= site_url('home/about');?>">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= site_url('home/contact'); ?>">Contact</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= site_url('home/help'); ?>">Help</a>
	      </li>

	      <?php if($this->session->userdata("is_user_logged_in"))
	      { ?>
	      	<li class="nav-item">
	      	  <a class="nav-link" href="<?= site_url('user'); ?>">Dashboard</a>
	      	</li>
	      	<li class="nav-item">
	      	  <a class="nav-link" href="<?= site_url('user/profile'); ?>">My Profile</a>
	      	</li>
	      	<li class="nav-item">
	      	  <a class="nav-link" href="<?= site_url('photos'); ?>">My Photos</a>
	      	</li>
	      	<li class="nav-item">
	      	  <a class="nav-link" href="<?= site_url('user/logout'); ?>">Logout</a>
	      	</li>
	      <?php }
	      else
	      { ?>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= site_url('home/login'); ?>">Login</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= site_url('home/signup'); ?>">Signup</a>
	      </li>

	      <?php } ?>

	    </ul>
	  </div>
	</nav>

	
	<?php $this->load->view($pagename); ?>



	<div class="container-fluid bg-dark">
		<h5 class="text-center text-light m-0 p-3">This Footer</h5>
	</div>
</body>
</html>

<!-- 

	base_url()    -------- css, js, images


	site_url()    ---------- <a href, form action





 -->