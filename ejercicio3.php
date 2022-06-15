<?php include("cabecera.php") ?>
<br>
<br>
<div class="container  bg-light">
  <div class="p-5">
    <div class="container align-items-center">
        <h1 class="display-7">Enunciado</h1>
        <p class="lead">Diseñar un algoritmo que me permita solicitar un número y este
                        indique cuantos dígitos tiene, el algoritmo indica hasta 4 dígitos y de
                        ahí en adelante que arroje un mensaje que diga demasiados dígitos.
        </p>
        <hr class="my-2">
    </div>
  </div>
  <div class="row">

  <div class="col"></div>
  <div class="col">

    <div class="card" style="width:400px">
    
    <div class="card-header bg-dark text-white">Ejercicio 3</div>

    <div class="card-body"> 
        <form action="ejercicio3.php" method="post">
          
          <div class="form-group">
            <label for="email">Tu primer número</label>
            <input type="text" class="form-control" placeholder="Ingresa un número" id="email" name="num1">
          </div>
          <button type="submit" class="btn btn-info" value="division" name="accion">Enviar</button>
        </form>
      </div>

      <div class="card-footer bg-dark text-white">Resultado: <?php include("code/codejercicio3.php") ?> </div>

    </div>
  </div>

  <div class="col"></div>
  </div>
  <br><br>
</div>


<?php include("pie.php") ?>