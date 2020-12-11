<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				// only calling

				$.ajax({
					url : "ajax1.php",
					type : "get"
				});

			});
		});


	</script>
</head>
<body>
<h1>AJAX ----- calling a page</h1>

<button>OK</button>

<br />
<Br />




</body>
</html>