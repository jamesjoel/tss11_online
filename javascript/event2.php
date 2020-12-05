<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo1(a)
		{
			document.getElementById(a).style.backgroundColor="yellow";
		}
		function demo2(b)
		{
			document.getElementById(b).style.backgroundColor="green";
		}
	</script>
</head>
<body>
<h2>onfouse and onblur</h2>
First <input type="text" id="first" onblur="demo2('first')" onfocus="demo1('first')">
<br />
<br />
Second <input type="text" id="second" onblur="demo2('second')" onfocus="demo1('second')">
<br />
<br />
Third <input type="text" id="third" onblur="demo2('third')" onfocus="demo1('third')">


</body>
</html>