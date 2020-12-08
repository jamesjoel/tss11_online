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
				$("button").click(function(){
					$("#box").css({ 
							"height" : "400px", 
							"width" : "500px", 
							"background-color" : "red" 
						});
				});
			});
		</script>
		<style type="text/css">
			#box{
				height: 300px;
				width: 300px;
				background-color: #85AC00;
				/*display: none;*/
			}
		</style>
</head>
<body>
<button>OK</button>
<div id="box"></div>
</body>
</html>