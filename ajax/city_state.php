<?php
$con = mysqli_connect("localhost", "root", "", "online11");
$query = "SELECT * FROM states";
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#state_dd").change(function(){
				var a = $(this).val();
				$.ajax({
					url : "get_city.php",
					type : "post",
					data : { sid : a },
					success : function(res){
						// alert(res);
						$("#city_dd").html(res);
					}
				})

				
			});
		});
	</script>
</head>
<body>

<br />
<br />
Select State <select id="state_dd">
				<option>Select State</option>
				<?php
				while($data=mysqli_fetch_assoc($result))
				{ ?>
					<option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
				<?php 
				}
				?>
			</select>

<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
Select City <select id="city_dd">
				<option>Select State First</option>
			</select>

</body>
</html>