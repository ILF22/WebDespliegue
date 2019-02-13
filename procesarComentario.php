<?php
    $conexion=new mysqli("localhost","root","","paginaweb");

    if($conexion->connect_error){
                die("Error de conexion (".$this->connect_erno.")".$this->con->connect_error);
    }
        $nombre=$_POST["nombre"];
        $comentario=$_POST["comentario"];
        $pagina=$_POST["pagina"];

        $resultado=subirComentario($conexion,$nombre,$comentario,$pagina);
        if($resultado->affected_rows == 1){
            header('Location:ventana.php?mensaje=correcto');
        }else{
            header('Location:ventana.php?mensaje=incorrecto');
        }

    function subirComentario($conexion,$nombre,$comentario,$pagina){
        $sql="INSERT INTO comentarios VALUES(?,?,?)";
        $resultado=$conexion->prepare($sql);
        $resultado->bind_param("sss",$nombre,$comentario,$pagina);
        $resultado->execute();
        return $resultado;
    }
?>