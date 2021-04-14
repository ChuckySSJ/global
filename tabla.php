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
	function cargarCatalogo(){
const xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function(){ 
	if(this.readyState == 4 && this.status == 200){
cargarXML(this);
}
};
xhttp.open('GET','alumnos.xml',true);
xhttp.send();
 }

    function cargarXML(xml){ 
	const mio = xhttp.responseXML; 
	var tabla = "<th>Nombre</th><th>Carrera</th><th>Cuatri</th><th>suma</th>";
	var alumnos = mio.getElementsByTagName("alumno");
	
for (var i = 0; i<mio.length; i++){
	tabla+="<tr><td>"; 
	tabla+= alumnos[i].getElementsByTagName("nombre")[0].textContent;
	tabla+="<td><td>"; 
	tabla+= alumnos[i].getElementsByTagName("carrera")[0].textContent;
	tabla+="<td><td>"; 
	tabla+= alumnos[i].getElementsByTagName("cuatri")[0].textContent;
	tabla+="</td></tr>"; 
}
document.getElementById("contenedor").innerHTML = tabla;
}
</script>
</body>
</html>