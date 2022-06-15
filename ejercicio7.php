<?php include("cabecera.php") ?>
<br>
<br>
<div class="container  bg-light">
  <div class="p-5">
    <div class="container align-items-center">
        <h1 class="display-7">Enunciado</h1>
        <p class="lead">Leer tres números que denoten una fecha (día, mes, año). Comprobar
                        que es una fecha válida. Si no es válida escribir un mensaje de error.
                        Si es válida escribir la fecha cambiando el número del mes por su
                        nombre. Ej. Si se introduce 1 2 2022, se deberá imprimir “1 de febrero
                        de 2022”.
        </p>
        <hr class="my-2">
    </div>
  </div>
  <div class="row">

  <div class="col"></div>
  <div class="col">

    <div class="card" style="width:400px">
    
    <div class="card-header bg-dark text-white">Ejercicio 7</div>

    <div class="card-body"> 
        <form action="ejercicio7.php" method="post">
          
          <div class="form-group">
            <label for="email">Día</label>
            <input type="number" class="form-control" id="dia" name="dia">
            <label for="email">Mes</label>
            <input type="number" class="form-control" id="mes" name="mes">
            <label for="email">Año</label>
            <input type="number" class="form-control" id="año" name="año">
          </div>
          <button type="submit" class="btn btn-info" value="division" name="accion">Enviar</button>
        </form>
      </div>

      <div class="card-footer bg-dark text-white">Fecha: <?php include("code/codejercicio7.php") ?> </div>

    </div>
  </div>

  <div class="col"></div>
  </div>
  <br><br>
</div>


<?php include("pie.php") ?>