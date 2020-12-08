<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.min.js"></script>

	<script type="text/javascript">
		

		$(document).ready(function(){

			$("button").click(function(){
				alert();
			});

			$("[height='200']").click(function(){
				alert();
			});

			$("h1, h5").click(function(){
				alert('sdfgssdfg');
			})

			$("p b").click(function(){
				alert("hello world");
			});

			/*
				$(selector).event(function(){
	
				})

			*/

		});
	</script>
</head>
<body>
<br />
<button>Hello</button>

<img src="1.jpg" height="200" width="200">
<img src="1.jpg" height="300" width="300">


<h1>hello</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<h4>james</h4>

<h5>hello world</h5>

<br />
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis <b>indore</b> nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat <b>indore</b> nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<b>indore</b>


</body>
</html>