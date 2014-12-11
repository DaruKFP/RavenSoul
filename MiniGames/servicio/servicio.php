<?php
    require_once "../lib/nusoap.php";
      
     function getDatos($parametro1) {
          $datos =  array();
          $conexion = mysqli_connect("mysql.hostinger.mx", "u578924799_root", "123456", "u578924799_minig");
          $result = mysqli_query($conexion, "select nombre, descripcion, dir_imagen from juegos");
          while($row = mysqli_fetch_array($result)){
               array_push($datos, $row["nombre"]);
               array_push($datos, $row["descripcion"]);
               array_push($datos, $row["dir_imagen"]);
          }
          return $datos;
          mysqli_free_result($result);
          mysqli_close($conexión);
     }
        
    
      
    $server = new soap_server();
    $server->configureWSDL("Servicio web para juegos", "urn:datos");
      
    $server->register("getDatos",
        array("parametro1" => "xsd:string"),
        array("return" => "xsd:Array"),
        "urn:datos",
        "urn:datos#getDatos",
        "rpc",
        "encoded",
        "Servicio web para datos de juegos!");

if (isset($HTTP_RAW_POST_DATA)) { 
  $input = $HTTP_RAW_POST_DATA; 
}else{ 
  $input = implode("\r\n", file('php://input')); 
}
 
$server->service($input);
?>