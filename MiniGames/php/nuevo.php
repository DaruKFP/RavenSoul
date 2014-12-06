<?php
echo"<form name='comentar1' id='comentar1' class='comentar1' method='POST' action='php/prueba.php'>";
    echo"<img class='manitas' src='../../minigames/botones/like.png' hspace='0'>";
    echo"<img class='manitas' src='../../minigames/botones/no like.png'>";
    echo"<h3>Comenta</h3>";
    echo "<input type='text' id='comentar' name='comentar' class='comentar' placeholder='Tema' cols='90' rows='5' style='font-size:12px;font-family:Comic Sans MS;color: #484c4c;'/>";
    echo"<button type='submit' id='btncomentar' name='btncomentar' class='btncomentar'></button>";
    echo "</form>";
?>