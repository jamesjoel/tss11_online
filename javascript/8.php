<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var x = 100;
		function demo()
		{
			// alert();
			// setTimeout("demo()", 1000);
			//  1000 = 1sec
			x++;
			document.getElementById("box").style.height =x+"px";
			setTimeout("demo()", 10);
		}
	</script>
	<style type="text/css">
		#box{
			height: 100px;
			width: 100px;
			background-color: #231450;
		}
	</style>
</head>
<body>
<button onclick="demo()">OK</button>
<br />
<br />
<div id='box'></div>
</body>
</html>