<?php

    $conexion = mysqli_connect("localhost","root") or die
        (mysqli_connect_error($conexion));
        if($conexion){
            mysqli_select_db($conexion, 'bdp');
        }

?>