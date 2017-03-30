function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
function mostrar(capa){
	
	divResultado = document.getElementById(capa);
	divResultado.style.visibility='visible';
		
	
}
function inicializaCampos(caja){ 

var divResultado = opener.document.getElementById(caja);

		ajax=objetoAjax();
		ajax.open("GET","../vista/s_"+caja+".php");
			ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				//mostrar resultados en esta capa
				divResultado.innerHTML = ajax.responseText
			}
		}
		//como hacemos uso del metodo GET
		//colocamos null
		ajax.send(null)

//window.close();
}
// We'll run the AJAX query when the page loads.

function nuevo(pag,tab){
	
	divResultado = document.getElementById('registro');
	
		ajax=objetoAjax();
		ajax.open("GET","../vista/"+pag+".php?ids="+tab);
			ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				//mostrar resultados en esta capa
				divResultado.innerHTML = ajax.responseText
			}
		}
		//como hacemos uso del metodo GET
		//colocamos null
		ajax.send(null)
	
}
function nuevodetalle(pag,id){
	
	divResultado = document.getElementById('registro');
	
		ajax=objetoAjax();
		ajax.open("GET","../vista/"+pag+".php?id="+id);
			ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				//mostrar resultados en esta capa
				divResultado.innerHTML = ajax.responseText
			}
		}
		//como hacemos uso del metodo GET
		//colocamos null
		ajax.send(null)
	
}
function detalle(pag, id){
	
	divResultado = document.getElementById('registro');
	
		ajax=objetoAjax();
		ajax.open("GET","../vista/"+pag+".php?id="+id);
			ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				//mostrar resultados en esta capa
				divResultado.innerHTML = ajax.responseText
			}
		}
		//como hacemos uso del metodo GET
		//colocamos null
		ajax.send(null)
	
}
function registrar(pag,table,ids){
	var x=(document.forms[0].elements.length)-2;
			texto=new Array();
		for(y=0;y<=x;y++){
		texto[y]=document.forms[0].elements[y].value;
	}
	divResultado = document.getElementById('registro');
	id=document.forms[0].elements[0].value;
	
		ajax=objetoAjax();
			ajax.open("POST","../modelo/"+pag+".php",true);
			ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				divResultado.innerHTML = ajax.responseText
			}
		}

		 ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send("texto="+texto+"&num="+x+"&pag="+pag+"&id="+id+"&table="+table+"&ids="+ids);


}
function del_up(tabla,id,pag,accion,col,ids){
	if(accion==1){
		var msj="Modificar";
		var carpeta="vista";
		var pagina='r_'+pag;
	} else {
		var msj="Eliminar";
		var carpeta="modelo";
		var pagina="delete"
	}

	divResultado = document.getElementById('registro');
	
	var editar = confirm("¿Desea "+msj+" Este Registro?")
	if ( editar ) {
	
		ajax=objetoAjax();
			ajax.open("POST","../"+carpeta+"/"+pagina+".php",true);
			ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				divResultado.innerHTML = ajax.responseText
			}
		}

		 ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send("id="+id+"&tabla="+tabla+"&col="+col+"&var="+pag+"&ids="+ids);
	}

}

function eliminard(tabla,id,idd,pag,accion,col){
	if (accion==2) {
		var msj="Eliminar";
		var carpeta="modelo";
		var pagina="deliminar"
	} 

	divResultado = document.getElementById('registro');
	
	var editar = confirm("¿Desea "+msj+" Este Registro?")
	if ( editar ) {
	
		ajax=objetoAjax();
			ajax.open("POST","../"+carpeta+"/"+pagina+".php",true);
			ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				divResultado.innerHTML = ajax.responseText
			}
		}

		 ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send("id="+id+"&idd="+idd+"&tabla="+tabla+"&col="+col+"&var="+pag);
	}

}

function ver(id,pag){
	
	divResultado = document.getElementById('registro');

		ajax=objetoAjax();
			ajax.open("POST",pag+".php",true);
			ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				divResultado.innerHTML = ajax.responseText
			}
		}

		 ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send("id="+id);


}
function loadc(str1)
{
var xmlhttp;
var position;

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {

    document.getElementById("ciudad").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","ciudad.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("c="+str1);
}

function loadm(str)
{
var xmlhttp;
var position;

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {

    document.getElementById("municipio").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","municipio.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+str);
}
