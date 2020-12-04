<!-- 
	1. ini
	2. float
	3. string
	4. array
	5. boolean
	6. object

	7. null
	8. empty
	9. undefined

	
			null
	
	var a = null;
	var a = NULL;
	var a = "";

			empty
	var a;


			undefined
	alert(x);
	






 -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 100px;
			width: 100px;
			background-color: #12695A;
		}
	</style>
	<script type="text/javascript">
		var h = 100;
		var w = 100;

		var a;

		function start()
		{
			h++;
			w++;
			document.getElementById("box").style.height = h+"px";
			document.getElementById("box").style.width = w+"px";
			a = setTimeout("start()", 20);
		}

		function pause()
		{
			clearTimeout(a);
		}
		function reset()
		{
			h=100;
			w=100;
			document.getElementById('box').style.height = "100px";
			document.getElementById('box').style.width = "100px";
		}

	</script>
</head>
<body>
<button onclick="start()">Start</button>
<button onclick="pause()">Pause</button>
<button onclick="reset()">Reset</button>
<br />
<br />
<div id="box"></div>
</body>
</html>