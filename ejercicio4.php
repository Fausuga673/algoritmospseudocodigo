<?php include("cabecera.php") ?>
<br>
<br>
<div class="container  bg-light">
  <div class="p-5">
    <div class="container align-items-center">
        <h1 class="display-7">Enunciado</h1>
        <p class="lead">Hacer un programa para una tienda de zapatos que tiene una
                        promoción de descuento para vender al mayor, esta dependerá del
                        número de zapatos que se compren. Si son más de diez, se les dará
                        un 10% de descuento sobre el total de la compra; si el número de
                        zapatos es mayor de veinte pero menor de treinta, se le otorga un 20%
                        de descuento; y si son más treinta zapatos se otorgará un 40% de
                        descuento. El precio de cada zapato es de $80.
        </p>
        <hr class="my-2">
    </div>
  </div>
  <div class="row">

  <div class="col"></div>
  <div class="col">

    <div class="card" style="width:400px">
    
    <div class="card-header bg-dark text-white">Ejercicio 4</div>

    <div class="card-body"> 
        <form action="ejercicio4.php" method="post">
          
          <div class="form-group">
            <label for="email">Cantidad</label>
            <input type="number" class="form-control" value="1" id="cantidad" name="cantidad">
          </div>
          <button type="submit" class="btn btn-info" value="division" name="accion">Enviar</button>
        </form>
      </div>

      <div class="card-footer bg-dark text-white">Total a pagar: <?php include("code/codejercicio4.php") ?> </div>

    </div>
  </div>

  <div class="col"></div>
  </div>
  <br><br>
</div>


<?php include("pie.php") ?>