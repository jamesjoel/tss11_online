<?php
include("db.php");
// Backdoor protaction code
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");
$id = $_SESSION['id'];
$query = "SELECT * FROM user_tbl WHERE id=$id";

$result = mysqli_query($con, $query);

$data = mysqli_fetch_assoc($result);
// print_r($data);
?>
<div class="latest-products">
      <div class="container" style="min-height: 400px">
        <div class="row">
        	<div class="col-md-8 offset-md-2">
        	<h3>Welcome : <?= $_SESSION['name'] ?></h3>
        		<table class="table table-dark table-hover table-bordered">
        			<tr>
        				<td>Full Name</td>
        				<td><?= $data['fullname'] ?></td>
        			</tr>
        			<tr>
        				<td>Username/Email</td>
        				<td><?= $data['email'] ?></td>
        			</tr>
        			<tr>
        				<td>Address</td>
        				<td><?= $data['address'] ?></td>
        			</tr>
        			<tr>
        				<td>City</td>
        				<td><?= $data['city'] ?></td>
        			</tr>
        			<tr>
        				<td>Gender</td>
        				<td><?= $data['gender'] ?></td>
        			</tr>
        			<tr>
        				<td>Contact</td>
        				<td><?= $data['contact'] ?></td>
        			</tr>
        		</table>
        	</div>
        </div>
    </div>
</div>
<?php

include("footer.php");
?>