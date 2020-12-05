<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			var a = document.getElementById("msg").value;
			var b = a.length; // getting string length
			// alert(b);
			document.getElementById("total").innerHTML=b;
		}
	</script>
</head>
<body>
Message : 
<br />
<textarea onkeyup="demo()" id="msg" cols="35" rows="8"></textarea>

<h3>Total : <span id="total">0</span></h3>




</body>
</html>