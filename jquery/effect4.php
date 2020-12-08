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
					$("#box").animate({"height" : "200px","width" : "200px","margin-left" : "800px"}, 500);
					$("#box").animate({"margin-top" : "350px"}, 500);
					$("#box").animate({"margin-left" : "0px"}, 500);
					$("#box").animate({"height":"100px", "width":"100px", "margin-top":"0px"}, 500);
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