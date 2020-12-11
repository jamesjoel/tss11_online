<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				var a = $("#name").val();
				var b = $("#age").val();
				
				$.ajax({
					url : "ajax2.php",
					data : { x : a, y : b },
					type : "post"
				});

			});
		});


	</script>
</head>
<body>
<h1>AJAX ----- calling and sending</h1>

Name : <input type="text" id="name"/>
<br />
<br />
Age : <input type="text" id="age">
<br />
<Br />


<button>OK</button>

<br />
<Br />




</body>
</html>