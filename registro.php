<?php 
require_once('enlace.php'); 
$menu='registro';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="css/fontello.css"> -->
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="css/listado.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <?php require 'inc/menuDashboard.php'; ?>
      <div class="col mt-3">
        <h3 class="text-center text-md-left ">Registrar cliente</h3>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  Realizar Compra 
              </div>
              <div class="card-block">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <form action="" id="cliente">
                      <div class="form-group row">
                          <div class="col-12 mb-3">
                              <!-- <label for="nom">Nombre</label> -->
                              <input type="text" class="form-control" placeholder="Nombre" name="nom" id="nom">
                          </div>
                          <div class="col-12 mb-3">
                              <!-- <label for="paterno">Paterno</label> -->
                              <input type="text" class="form-control" placeholder="Paterno" name="paterno" id="paterno">
                          </div>
                          <div class="col-12 mb-3">
                              <!-- <label for="materno">Materno</label> -->
                              <input type="text" class="form-control" placeholder="materno" name="materno" id="materno">
                          </div>
                          <div class="col-12 mb-3">
                              <!-- <label for="dni">DNI</label> -->
                              <input type="text" class="form-control" placeholder="dni" name="dni" id="dni">
                          </div>
                          <div class="col-12-mb-3">
                            <div class="input-group ml-3">
                              <input type="text" name="" id="" class="form-control" placeholder="Correo electronico">
                              <span class="input-group-addon">@gmail.com</span>
                             </div>
                          </div>

                      </div>

                      <div class="form-group row">
                        <div class="col-4 mb-3">
                            
                              <input type="text" class="form-control" placeholder="cod-producto">
                          </div>
                          
                          <div class="col-4 mb-3">
                              <select name="producto" id="producto" class="form-control">
                                <option value="0">Opcion</option>
                                <option value="110">Chompa</option>
                                <option value="150">Poncho</option>
                                <option value="350">Sacon</option>
                                <option value="100">Bufanda</option>
                                <option value="70">Gorro</option>
                              </select>
                          </div>
                          
                          <div class="col-4 mb-3">
                                 <input type="text" class="form-control"  id="cantidad" placeholder="Cantidad..">
                            
                          </div>
                                                
                      </div>
              
                      <div class="form-group row d-flex justify-content-center">
                        <div class="col-12 col-md-6 " >
                          <button class="btn btn-success btn-block" id="btn-compra" type="button">Comprar</button>
                        </div>              
                      </div>
                    </form>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="card card-outline-success">
                      <div class="card-block">
                        <h3 class="card-title">Monto a cancelar.</h3>
                        <p class="card-text" id="mensaje"></p>
                        <hr>
                        <h6 id="total"></h6>
                        <a href="#" class="btn btn-primary">imprimir</a>
                      </div>  
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="card-footer">
                Lorem ipsum dolor sit amet.
              </div>


             </div>
          </div>
        </div>
      </div>
      
    </div>
    
  </div>
  
  <script src="js/jquery.min.js"></script>
  <script>
    var total=0;
    $("#btn-compra").click(function(){

      // var producto=$('#cliente').find('#producto');
      var producto=$('select[name="producto"] option:selected');
      var cantidad=$('#cliente').find('#cantidad');
      cantidad=cantidad.val()*producto.val();
      total=cantidad+total;
      var a=$('<p>',{
        html:producto.text() +": "+ producto.val()+"  "+ "  .Total: "+cantidad
      })
      $('#mensaje').append(a);
      $('#total').html("Total a pagar: "+total);
      
    });
  </script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>


