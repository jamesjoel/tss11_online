<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 200px;
			width: 200px;
			background-color: #451245;
		}
	</style>
	<script type="text/javascript">
		var h = 200;
		var w = 200;
		function demo1()
		{
			// alert();
			document.getElementById("box").style.backgroundColor="green";
		}
		function demo2()
		{
			h++;
			w++;
			document.getElementById("box").style.height = h+"px";
			document.getElementById("box").style.width = w+"px";
		}
		function demo3()
		{
			h = 200;
			w = 200;
			document.getElementById("box").style.backgroundColor="#451245";
			document.getElementById("box").style.height = "200px";
			document.getElementById("box").style.width = "200px";
		}
	</script>
</head>
<body>
<div id="box" onmouseover="demo1()" onmousemove="demo2()" onmouseout="demo3()"></div>
</body>
</html>