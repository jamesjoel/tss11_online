<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			var a = document.getElementById("name").value;
			document.getElementById("fname").value = a;
		}
	</script>
</head>
<body>
<br />
<br />
<button onclick="demo()">OK</button>
<br />
<br />
Your Name <input type="text" id="name">
<br />
<Br />
<input type="text" id="fname">
</body>
</html>