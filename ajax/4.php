<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				var name = $("#name").val();
				var age = $("#age").val();
				$.ajax({
					url : "ajax4.php",
					data : { name : name, age : age},
					type :"post",
					success : function(rec){
						// alert(rec);
						$("div").html(rec);
						$("#name").val("");
						$("#age").val("");
					}
				})
			});
		});


	</script>
</head>
<body>
<h1>AJAX ----- calling, sending and receving</h1>

<Br />

Name : <input type="text" id="name"/>
<br />
<br />
Age : <input type="text" id="age">
<br />
<Br />


<button>Add</button>


<br />
<Br />
<div></div>




</body>
</html>