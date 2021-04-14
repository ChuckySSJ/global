<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mio</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<h1 id="consultar">Jose Manuel Lopez Renteria</h1>
	<div>
		<table id="contenedor">
	 	</table>
	 </div>
<script> 
const xhttp = new XMLHttpRequest();
xhttp.open('GET','alumnos.xml',true); 
xhttp.send(); 
xhttp.onreadystatechange = function(){
	const mio = xhttp.responseXML; 
	console.log(mio);
	let resultado = "<th>Nombre</th><th>Carrera</th><th>Cuatri</th><th>suma</th>";
if(this.readyState == 4 && this.status == 200){
	
for (var i = 0; i<mio.length; i++){
	resultado+="<tr><td>"+mio[i].nombre+ "</td>";
	resultado+="<td>"+mio[i].carrera+ "</td>";
	resultado+="<td>"+mio[i].cuatri+ "</td></tr>";
}
}

document.getElementById("contenedor").innerText=this.responseText;
}
</script>
</body>
</html>