<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 150px;
			width: 150px;
			background-color: #93CE00;
			border-radius: 100px;
		}
	</style>
	<script type="text/javascript">
		function demo()
		{
			var a = Math.random()*500;
			var b = Math.floor(a);

			var x = Math.random()*800;
			var y = Math.floor(x);

			document.getElementById("box").style.marginTop=b+"px";
			document.getElementById("box").style.marginLeft=y+"px";

		}
	</script>
</head>
<body>
<div id="box" onmousemove="demo()"></div>
</body>
</html>