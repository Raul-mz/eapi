
function load(str, ve)
{
var xmlhttp;
var position;

  position = ve.replace(/\D/g,'');
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
	ve = ve.replace(/\D/g,'');

    document.getElementById("cambiar"+ve).innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","proc.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+str+"&ve="+ve+"&pos="+position);
}

