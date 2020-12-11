<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$.ajax({
					url : "ajax3.php",
					type : "get",
					success : function(rec){
						//alert(rec);
						$("div").html(rec);
					}
				})
			});
		});


	</script>
</head>
<body>
<h1>AJAX ----- calling and receving</h1>

<Br />


<button>Show</button>


<br />
<Br />
<div></div>




</body>
</html>