<!-- 
color code comes with A-F alfa and 0-9 num

 -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 200px;
			width: 200px;
			background-color: #000;
			border-radius: 100px;
		}
	</style>
	<script type="text/javascript">
		function demo()
		{
			var color="";

			for(var i=1; i<=6; i++)
			{
				// Math.random()=== 0.224114411
				var a = Math.random()*15; // 7.2352227824
				var b = Math.floor(a);// 7
				var x;
				switch(b){
					case 10 : x = "A";
							break;
					case 11 : x = "B";
							break;
					case 12 : x = "C";
							break;
					case 13 : x = "D";
							break;
					case 14 : x = "E";
							break;
					case 15 : x = "F";
							break;
					default : x = b;
				}
				color += x;	
			}
			// alert(color);
			document.getElementById("body").style.backgroundColor="#"+color;

			setTimeout("demo()", 300);
			

						
		}
	</script>
</head>
<body id="body">
<button onclick="demo()">OK</button>

</body>
</html>