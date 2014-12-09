<script src="../jquery.js"></script>
		    <script type="text/javascript" src="../slick.min.js"></script>
				<link rel="stylesheet" type="text/css" href="../slick.css"/>
<div class="c" style="heigth:100%; width:100%;">
<?php

require_once "../lib/nusoap.php";
    
    $cliente = new nusoap_client("servicio.wsdl",true);
    
    $error = $cliente->getError();
    if ($error) {
        echo "<h2>Error:</h2>" . $error;
    }
    $result = $cliente->call("getDatos");
    for ($i=0; $i < count($result) ; $i+=3) { 
    	$nombre = $result[$i];
        $desc = $result[$i+1];
    	$dir = $result[$i+2];
    echo "<div><a href='../juego.php?nombre=$nombre'>";
	echo "<img class='img' style='heigth: 60%; width:100%; float: left; margin:0%;' src='../$dir'><p style='float: left; heigth: 40%; width:100%; margin: 0%;'>$desc</p>";
	echo "</a></div>";	
    }
?>
</div>
<script>
$('.c').slick({
autoplay:true,
autoplaySpeed: 1500
});
arrows: true;
</script>