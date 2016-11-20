<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>



<?php 
session_start();


 ?>

	<form action="algo.php" method="get" id="myform">
<label for="">Ingresa tu nombre:</label><input type="text" id="bloquear" name="nombre" value=<?php if(isset($_SESSION['nombre'])){ echo $_SESSION['nombre']; }else{ echo ''; }?> >
<input type="text" name="texto">
<input type="button" value="enviar" onclick='document.forms["myform"].submit();'>


	<script>




var xm;

function populatelist(){
	var url= "hola.txt";
	xm.open("GET", url, true);
	xm.onreadystatechange= procesarespuesta;
	xm.send(null)
}

function procesarespuesta(){
	if(xm.readyState==4 && xm.status== 200){
		/*var li= document.createElement("li");
		var txt= document.createTextNode(xm.responseText);
		li.appendChild(txt);*/
		document.getElementById("update").innerHTML= xm.responseText;

		setTimeout(populatelist, 300);


	}else if(xm.readyState==4 && xm.status== 200){
		console.log(xm.responseText);
	}

}

window.onload= function(){
	xm= new XMLHttpRequest();
	populatelist();

}
	</script>

	<ul id="update">
		

	</ul>
</body>
</html>