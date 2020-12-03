<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		/*
			Event -> onlclick
			Function

			how to pick value for 
				textbox, password, radio, checkbox, select, textarea
					document.getElementById("").value





			sub-method

					.value
					.innerHTML
					.style

		*/
		function demo(i)
		{

			var a = document.getElementById("f_num").value;
			var b = document.getElementById("s_num").value;

			var x = parseInt(a);
			var y = parseInt(b);
			switch(i)
			{
				case 1 : var c = x+y;
						break;
				case 2 : var c = x-y;
						break;
				case 3 : var c = x*y;
						break;
				case 4 : var c = x/y;
						break;

			}


			document.getElementById("ans").innerHTML="Your ans is :"+c;

		}
	</script>
</head>
<body>

<br />
<br />
<br />
First Num : <input type="text" id="f_num">
<br/>
<br/>
Second Num : <input type="text" id="s_num">
<br />
<Br />
<button onclick="demo(1)">+</button>
<button onclick="demo(2)">-</button>
<button onclick="demo(3)">x</button>
<button onclick="demo(4)">/</button>

<br />
<h1 id="ans"></h1>

</body>
</html>