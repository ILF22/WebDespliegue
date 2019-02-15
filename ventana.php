<!DOCTYPE html>
<html lang="en">
<?php 
  include("includes/header.inc");
?>
<br>
<br>
<div class="container-fluid text-center">    
<?php
  $mensaje=$_GET["mensaje"];
  if($mensaje=="correcto"){
    echo '<div class="alert alert-primary" role="alert">
                <h1>Subido el comentario</h1> 
          </div>';
  }elseif($mensaje=="fallo"){
    echo '<div class="alert alert-danger" role="alert">
            <h1>Fallo en la subida del comentario</h1>
          </div>';
  }
  unset($_SESSION);
?>
</body>
</html>
