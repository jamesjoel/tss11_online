<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		function demo()
		{
			// var a = "rohit";

			var a = document.getElementById("fname").value;


			/*
				document ----------- current html page
				get --------- pickup
				Element ---- tag
				byId ---- by id


			*/

			alert(a);
		}
	</script>
</head>
<body>
<br />
<Br />
Your Name : <input type="text" id="fname"/>
<br />
<Br />
<button onclick="demo()">OK</button>

<!-- <h2 onclick="alert('hello')">Indore</h2> -->
</body>
</html>