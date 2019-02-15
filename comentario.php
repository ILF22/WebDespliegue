<!DOCTYPE html>
<html lang="en">
<?php 
  include("includes/header.inc");
?>
<br>
<br>
<div class="container-fluid text-center">  
    <form action="procesarComentario.php" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Introduce tu nombre" required>
        </div>
        <label for="comentario">Comentario</label>
        <div class="form-group">
            <textarea rows="3" cols="215" name="comentario" id="comentario" placeholder="Introduzca tu comentario aqui" required>
            </textarea>
        </div>
        <div class="form-group">
            <label for="pagina">Pagina</label>
            <input type="text" class="form-control" name="pagina" id="pagina"  placeholder="Pagina que quieres poner un comentario" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Comentario</button>
    </form>
</div>
<?php 
  include("includes/footer.inc");
?>
</body>
</html>
