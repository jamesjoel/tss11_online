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
					$("#box").animate({ 
							"height" : "300px", 
							"width" : "300px",
							"margin-left" : "200px",
							"margin-top" : "200px"
						}, 2000);
				});
			});
		</script>
		<style type="text/css">
			#box{
				height: 100px;
				width: 100px;
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