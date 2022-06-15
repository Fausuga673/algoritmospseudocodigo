<?php include("cabecera.php") ?>
<br>
<br>
<div class="container  bg-light">
  <div class="p-5">
    <div class="container align-items-center">
        <h1 class="display-7">Enunciado</h1>
        <p class="lead">Mostrar La tabla de multiplicar de cualquier número ingresado por
                        teclado 
        </p>
        <hr class="my-2">
    </div>
  </div>
  <div class="row">

  <div class="col"></div>
  <div class="col">

    <div class="card" style="width:400px">
    
    <div class="card-header bg-dark text-white">Ejercicio 6</div>

    <div class="card-body"> 
        <form action="ejercicio6.php" method="post">
          
          <div class="form-group">
            <label for="email">Ingresa un número:</label>
            <input type="number" class="form-control" id="num1" name="num1">
          </div>
          <button type="submit" class="btn btn-info" value="division" name="accion">Mostrar tabla</button>
        </form>
      </div>

      <div class="card-footer bg-dark text-white">Tabla <br> <?php include("code/codejercicio6.php") ?> </div>

    </div>
  </div>

  <div class="col"></div>
  </div>
  <br><br>
</div>


<?php include("pie.php") ?>