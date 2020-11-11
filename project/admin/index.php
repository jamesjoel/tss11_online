<?php
include("../db.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
	<a class="navbar-brand" href="#">Admin Panel</a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="mymenu">
		
	</div>
</nav>
<div class="container mt-4" style="min-height: 700px">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="auth.php" method="post">
			<div class="card">
				<div class="card-header">
					<h4>Admin Login</h4>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pass" class="form-control">
					</div>
					<p class="text-danger text-center">
						<?php
						if(isset($_SESSION['msg']))
						{
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
						?>
					</p>
				</div>
				<div class="card-footer">
					<input type="submit" class="btn btn-primary" value="Login">
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