<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo(n)
		{
			document.getElementById("image").setAttribute("src", n+".jpg");
			document.getElementById("image").setAttribute("width", "200");
		}
	</script>
</head>
<body>
<button onclick="demo(1)">Img1</button>
<button onclick="demo(2)">Img2</button>
<button onclick="demo(3)">Img3</button>
<button onclick="demo(4)">Img4</button>
<br />
<br />
<img id="image" src="1.jpg" height="400" width="300">
</body>
</html>