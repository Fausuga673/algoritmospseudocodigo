<?php include("cabecera.php") ?>

<br>
<br>

<div class="container bg-light">
  <div class="p-5">
    <div class="container align-items-center">
        <h1 class="display-7">Enunciado</h1>
        <p class="lead">Realizar un procedimiento que realice las operaciones de suma, resta, multiplicación y división dado dos números introducidos por el usuario</p>
        <hr class="my-2">
    </div>
  </div>
  <div class="row">
  <div class="col"></div>
  <div class="col">
    <div class="card" style="width:400px"> 
    <div class="card-header bg-dark text-white">Ejercicio 1</div>
    <div class="card-body"> 
        <form action="ejercicio1.php" method="post">
          
          <div class="form-group">
            <label for="email">Tu primer número</label>
            <input type="text" class="form-control" placeholder="Ingresa un número" id="email" name="num1">
          </div>
          
          <div class="form-group">
            <label for="pwd">Tu segundo número:</label>
            <input type="text" class="form-control" placeholder="Ingresa un número" id="pwd" name="num2">
          </div> 
          <button type="submit" class="btn btn-primary" value="suma" name="accion">Sumar</button>
          <button type="submit" class="btn btn-warning" value="resta" name="accion">Restar</button>
          <button type="submit" class="btn btn-danger" value="multiplicacion" name="accion">Multiplicar</button>
          <button type="submit" class="btn btn-info" value="division" name="accion">Dividir</button>
        </form>
      </div>

      <div class="card-footer bg-dark text-white">Resultado: <?php include("code/codejercicio1.php") ?> </div>

    </div>
  </div>
  <div class="col"></div>
  </div>
  <br><br>
</div>


<?php include("pie.php") ?>