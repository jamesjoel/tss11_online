<?php
// SELECT * FROM cities LIMIT 200, 100
include("db.php");

$record_per_page = 50;
$result_total = mysqli_query($con, "SELECT * FROM cities");
$total_rec = mysqli_num_rows($result_total);

$total_pages = ceil($total_rec/$record_per_page);

if(isset($_GET['pageno']))
{
	$a = $_GET['pageno']; // 3
	$b = $a-1; // 2
	$c = $b*$record_per_page; // 200

	$n = $c+1;
	$query = "SELECT * FROM cities LIMIT $c, $record_per_page";

}
else
{
	$a=1;
	$n=1;
	$query = "SELECT * FROM cities LIMIT $record_per_page";
}



$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<h2 class="text-center mt-3">Pagination</h2>
			<ul class="pagination">
				<li class="page-item  <?php if($a==1) echo 'disabled' ?>">
					<a class="page-link" href="pagination.php?pageno=<?= $a-1 ?>">Pre</a>
				</li>
				<?php
				for($i=1; $i<=$total_pages; $i++)
				{ ?>
					<li class="page-item <?php if($a==$i) echo 'active' ?>">
						<a class="page-link" href="pagination.php?pageno=<?= $i ?>"><?= $i; ?></a>
					</li>
				<?php 
				}
				?>
				<li class="page-item   <?php if($a==$total_pages) echo 'disabled' ?>">
					<a class="page-link" href="pagination.php?pageno=<?= $a+1 ?>">Next</a>
				</li>
			</ul>

			<table class="table table-dark table-hover table-sipted table-bordered">
				<tr>
					<th>S.No.</th>
					<th>City Name</th>
				</tr>
				<?php
				
				while($data=mysqli_fetch_assoc($result))
				{ ?> 
					<tr>
						<td><?= $n++; ?></td>
						<td><?= $data['city']; ?></td>
					</tr>	
				<?php
				}
				?>
				
			</table>
		</div>
	</div>
</div>
</body>
</html>