<?php include("cabecera.php") ?>
<br>
<br>
<div class="container bg-light">
  <div class="p-5">
    <div class="container align-items-center">
        <h1 class="display-7">Enunciado</h1>
        <p class="lead">Diseñar un algoritmo que me permita calcular el costo final de la venta
                        cuando se conoce que si se compran 3 camisas o más se obtendrá un
                        descuento de un 20%, si se compran menos se obtendrá un
                        descuentos de 10%.</p>
        <hr class="my-2">
    </div>
  </div>
  <div class="row">

  <div class="col"></div>
  <div class="col">

    <div class="card" style="width:400px">
    
    <div class="card-header bg-dark text-white">Ejercicio 2</div>

    <div class="card-body"> 
        <form action="ejercicio2.php" method="post">
          
          <div class="form-group">
            <label for="email">Cantidad</label>
            <input type="number" class="form-control" placeholder="Número de camisas" name="cantidad" value="1">
          </div>
          
          <button type="submit" class="btn btn-primary">Comprar</button>
        
        </form>
      </div>

      <div class="card-footer bg-dark text-white">Total a pagar: <?php include("code/codejercicio2.php") ?> </div>

    </div>
  </div>

  <div class="col"></div>
  </div>
  <br><br>
</div>


<?php include("pie.php") ?>