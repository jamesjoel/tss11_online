<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			var a = document.getElementById("name").value;

			document.getElementById("para").innerHTML=a;
		}
	</script>
</head>
<body>
	<br/>
<button onclick="demo()">OK</button>
<br />
<br />
<input type="text" id="name">
<br />

<h1 id="para"></h1>
</body>
</html>