<!-- 

	submethos


	.value 							.val()

	.innerHTML 						.html()

	.setArribute 					.attr()

	.style 							.css()

	.createElement


	.appendChild 					.append()





 -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){

				$("#btn1").click(function(){
					// var a = document.getElementById("").value;

					var a = $("#f_name").val();

					// document.getElementById("").value="rohit";
					$("#s_name").val(a);

				});

				$("#btn2").click(function(){
					$("h2").html("rohit");
				});
			});
		</script>
</head>
<body>
<button id="btn1">OK</button>
<br />
<br />
<input type="text" id="f_name">
<br />
<br />
<input type="text" id="s_name">

<br />
<br />
<button id="btn2">OK</button>
<h2>Hello</h2>
</body>
</html>