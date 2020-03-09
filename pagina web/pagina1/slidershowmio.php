<html>
<head>
<script src="bootstrap-3.3.7-dist/js/jquery.js"></script>
<script type="text/javascript">
contador=1;
function inicio(){
var x=$("img");

x.animate({'left':'0'},700)
x.animate({'left':'-2700px'},700)
x.animate({'left':'-4050px'},700)
x.animate({'left':'-5400px'},700)

	


}
setInterval("inicio()",2000);
</script>
<style type="text/css">
.mover{
	left:-350px;
	
	
}

	
#container .slider{
	
	width:6750px;
	height:400px;
		

	
	
}
.slider {
	display:flex;

	
	
	
	
}
img{
	position: relative;
	-webkit-transition:left 200ms linear;

	
	
	
	
	
	
}
#container{

		width:100%;
	overflow:hidden;

	
	
	
}




</style>
</head>
<body onLoad="inicio();">
<div id="container">
<div class="slider">
<img src="images/slide01.jpg" height="400" width="1350">
<img src="images/slide02.jpg" height="400" width="1350">
<img src="images/slide03.jpg" height="400" width="1350">
<img src="images/slide04.jpg" height="400" width="1350">
<img src="images/slide05.jpg" height="400" width="1350">



</div>




</div>
<input type="button" value="probar" onClick="inicio();">
</body>
</html>