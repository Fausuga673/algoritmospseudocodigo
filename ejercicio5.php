<?php include("cabecera.php") ?>
<?php include("code/codejercicio5.php") ?>

<br>
<br>
<div class="container  bg-light">
  <div class="p-5">
    <div class="container align-items-center">
        <h1 class="display-7">Enunciado</h1>
        <p class="lead">Determinar si un alumno aprueba a reprueba un curso, sabiendo que
                        aprobara si su promedio de tres calificaciones es mayor o igual a 70;
                        reprueba en caso contrario.
        </p>
        <hr class="my-2">
    </div>
  </div>
  <div class="row">

  <div class="col"></div>
  
  <div class="col">
    <div class="card" style="width:400px">
    <div class="card-header bg-dark text-white">Ejercicio 5</div>
    <div class="card-body"> 
        <form action="ejercicio5.php" method="post">
          <div class="form-group">
            <label for="email">Nota 1</label>
            <input type="number" class="form-control" value="1" id="nota1" name="nota1">
            <label for="email">Nota 2</label>
            <input type="number" class="form-control" value="1" id="nota2" name="nota2">
            <label for="email">Nota 3</label>
            <input type="number" class="form-control" value="1" id="nota3" name="nota3">
          </div>
          <button type="submit" class="btn btn-info" value="division" name="accion">Calcular</button>
        </form>
    </div>
    <div class="card-footer bg-dark text-white">El promedio del estudiante es: <?php if($_POST) { echo $promedio; } ?> </div>

    <?php if ($_POST) { if ($promedio >= 70) {?>
    
        <div class="card-footer bg-success text-white">Aprobado</div>

    <?php } else {?>

        <div class="card-footer bg-danger text-white">Reprobado</div>

    <?php } }?>  

    </div>
  </div>

  <div class="col"></div>
  </div>
  
  <br><br>
</div>


<?php include("pie.php") ?>