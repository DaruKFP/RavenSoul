<script language="javascript" type="text/javascript">
  var RequestObject = false;
  var Archivo = 'php/cargar.php';
  window.setInterval("actualizacion_reloj()", 180000);

  if (window.XMLHttpRequest) RequestObject = new XMLHttpRequest();
  if (window.ActiveXObject) RequestObject = new ActiveXObject("Microsoft.XMLHTTP");

  function ReqChange() { 
    if (RequestObject.readyState==4) {
     if (RequestObject.responseText.indexOf('invalid') == -1) {
       document.getElementById("nada").innerHTML = RequestObject.responseText;
     } else { 
     }
    } 
  }

  function llamadaAjax() {
    document.getElementById("nada").innerHTML = ""; 
    RequestObject.open("POST", Archivo+"?"+Math.random() , true);
    RequestObject.onreadystatechange = ReqChange; 
    RequestObject.send(null);
  }

  function actualizacion_reloj() {
   llamadaAjax();
 }
</script>