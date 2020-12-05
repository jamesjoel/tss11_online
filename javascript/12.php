<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 300px;
			width: 300px;
			background-color: #CCC;
		}
	</style>
	<script type="text/javascript">
		function demo()
		{
			var a = document.createElement("h2");
			// <h2></h2>
			// <hr />
			a.innerHTML="indore";
			document.getElementById("box").appendChild(a);
		}
	</script>
</head>
<body>
<button onclick="demo()">OK</button>
<br />
<br />
<div id="box">
	
</div>

</body>
</html>