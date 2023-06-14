<?php 
require_once('enlace.php'); 
$menu='reservado';
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
        <h3 class="text-center text-md-left ">Productos reservados</h3>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  Reservados 
              </div>
              <div class="card-block">
                <div class="row mb-3">
                  <div class="col-2  d-flex justify-content-start">
                    <button class="btn btn-primary btn-block">buscar</button>
                  </div>
                  <div class="col-2 d-flex justify-content-start">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <table class="table table-bordered table-striped  table-hover table-responsive">
                    <!-- Tambien podemos cambiar el <thead> a oscuro con .thead-inverse -->
                    <!-- Otra alternariva es .thead-default -->
                    <thead class="thead-default">
                      <th>Cod-producto</th>
                      <th>Cantidad</th>
                      <th>Cod-clie</th>
                      <th>Nombre</th>
                      <th >Opciones</th>
                    </thead>
                    <tr class="d-none" id="eliminar1">
                      <td id="op1"></td>
                      <td id="op2"></td>
                      <td id="op3"></td>
                     
                      <td>
                        <button class="btn btn-danger btn-sm" id="eliminar" onclick="eliminar(eliminar1);">Eliminar</button>
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#fm-modal-modificar" >Modificar</button>
                        
                      </td>
                    </tr>

                    <tr class="" id="eliminar2">
                      <td id="p1">p-102</td>
                      <td id="p2">5</td>
                      <td id="p3">clie-551</td>
                      <td id="p4">Hugo moreno </td>
                      
                      
                      <td>
                        <button class="btn btn-sm btn-outline-primary">ver detalle</button>
                        <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar2);">Eliminar</button>
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#fm-modal-modificar">Modificar</button>
                        
                      </td>
                    </tr>
                    
                    <tr class="" id="eliminar3">
                      <td id="p1">p-101</td>
                      <td id="p2">1</td>
                      <td id="p3">clie-553</td>
                      <td id="p4">Jazmin Massiel </td>
                      
                      <td>
                        <button class="btn btn-sm btn-outline-primary">ver detalle</button>
                        <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar3);">Eliminar</button>
                        <button class="btn btn-primary btn-sm">Modificar</button>
                        
                      </td>
                    </tr>

                    <tr id="eliminar4">
                      <td id="p1">p-110</td>
                      <td id="p2">2</td>
                      <td id="p3">clie-570</td>
                      <td id="p4">Alberto Contreras </td>
                      
                      <td>
                        <button class="btn btn-sm btn-outline-primary">ver detalle</button>
                        <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar4);">Eliminar</button>
                        <button class="btn btn-primary btn-sm">Modificar</button>
                        
                      </td>
                    </tr>
                    <tr id="eliminar17">
                      <td id="p1">p-105</td>
                      <td id="p2">10</td>
                      <td id="p3">clie-600</td>
                      <td id="p4">Leyla Esmeralda </td>
                      <td>
                        <button class="btn btn-sm btn-outline-primary">ver detalle</button>
                        <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar17);">Eliminar</button>
                        <button class="btn btn-primary btn-sm">Modificar</button>
                        
                      </td>
                    </tr>
                </table>
              </div>
              <div class="card-footer">
                foter
              </div>


             </div>
          </div>
        </div>
      </div>
      
    </div>
    <!-- Modales -->
    <div class="row">
      <div class="col">
        <div class="modal fade" id="fm-modal-modificar" tabindex="-1" role="dialog" aria-labelledby="fm-modal-modificar" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="">Modificar</h5>
                <button class="close" data-dismiss="modal" aria-label="Cerrar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12 col-md-6">
                        <form action="">
                          <div class="form-group row">
                              <div class="col-12 mb-3">
                                  <label for="nombres">Nombre</label>
                                  <input type="text" class="form-control" placeholder="Nombre" name="nombres" id="nombres" value="Carlos">
                              </div>
                              <div class="col-12 mb-3">
                                  <label for="precios">Paterno</label>
                                  <input type="text" class="form-control" placeholder="Precio unitario" name="precios" id="precios" value="Beltran">
                              </div>
                              <div class="col-12 mb-3">
                                  <label for="tallas">Materno</label>
                                  <input type="text" class="form-control" placeholder="Talla" name="tallas" id="tallas" value="Salazar">
                              </div>
                          </div>

                          <div class="form-group row">
                              <div class="col-12 mb-3">
                                  <label for="stocks">DNI</label>
                                  <input type="text" class="form-control" placeholder="Cargo" name="stocks" id="stocks" value="4545540">
                              </div>
                              <div class="col-12 mb-3">
                                  <label for="correo">Correo</label>
                                  <input type="text" class="form-control" placeholder="correo" name="correo" id="correo" value="carlos@gmail.com">
                              </div>

                          </div>

                          <div class="form-group row">
                              
                          </div>

                        </form>
                    </div>
                    
                  </div>
                </div>
              </div>


              <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal" id="btn-modificar">Aceptar</button>
                <button class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="js/jquery.min.js"></script>
  <script>
    
    $("#btn-modificar").click(function(){
      var nombre=document.getElementById('nombres').value;
      var precio=document.getElementById('precios').value;
      var talla=document.getElementById('tallas').value;
      var stock=document.getElementById('stocks').value;
      var correo=document.getElementById('correo').value;

      $('#p1').html(nombre);
      $('#p2').html(precio);
      $('#p3').html(talla);
      $('#p4').html(stock);
      $('#p5').html(correo);

        });
    function eliminar(id) {
      $(id).addClass('d-none');
    }
  </script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>


