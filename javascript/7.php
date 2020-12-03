<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 200px;
			width: 200px;
			background-color: #258741;
		}
	</style>
	<script type="text/javascript">
		function demo()
		{
			document.getElementById("box").style.backgroundColor = "red";
			document.getElementById("box").style.height = "300px";
			document.getElementById("box").style.width = "300px";
			
			// fontSize
			// marginTop
		}
	</script>
</head>
<body>
<button onclick="demo()">OK</button>
<br/>
<br/>
<div id="box"></div>
</body>
</html>