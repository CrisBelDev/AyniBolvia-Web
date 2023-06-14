<?php 
require_once('enlace.php'); 
$menu='ventas';
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

    <link href="vendor/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="vendor/vendor/morrisjs/morris.css" rel="stylesheet">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <?php require 'inc/menuDashboard.php'; ?>
      <div class="col mt-3">
        <div class="row">
          <div class="col-12">
            <h3 class="text-center text-md-left ">Productos</h3>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                      Ventas 
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
                          <th>Nombre</th>
                          <th>Paterno</th>
                          <th>Materno</th>
                          <th>Dni</th>
                          <th>Correo</th>
                          <th >Opciones</th>
                        </thead>
                        <tr class="d-none" id="eliminar1">
                          <td id="op1"></td>
                          <td id="op2"></td>
                          <td id="op3"></td>
                          <td id="op4"></td>
                          <td>
                            <button class="btn btn-danger btn-sm" id="eliminar" onclick="eliminar(eliminar1);">Eliminar</button>
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#fm-modal-modificar" >Modificar</button>
                            
                          </td>
                        </tr>

                        <tr class="" id="eliminar2">
                          <td id="p1">Carlos</td>
                          <td id="p2">Beltran</td>
                          <td id="p3">Salazar</td>
                          <td id="p4">4545540</td>
                          <td id="p5">carlos@gmail.com</td>
                          
                          <td>
                            <button class="btn btn-sm btn-outline-primary">ver detalle</button>
                            <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar2);">Eliminar</button>
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#fm-modal-modificar">Modificar</button>
                            
                          </td>
                        </tr>
                        
                        <tr class="" id="eliminar3">
                          <td id="">esteban</td>
                          <td id="">Baltazar</td>
                          <td id="">Muñoz</td>
                          <td id="">123456</td>
                          <td id="">DjMasters@gmail.com</td>
                          <td>
                            <button class="btn btn-sm btn-outline-primary">ver detalle</button>
                            <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar3);">Eliminar</button>
                            <button class="btn btn-primary btn-sm">Modificar</button>
                            
                          </td>
                        </tr>

                        <tr id="eliminar4">
                          <td id="">Maria</td>
                          <td id="">Piñeda</td>
                          <td id="">Cruz</td>
                          <td id="">75278452</td>
                          <td id="">Mary15@gmail.com</td>
                          <td>
                            <button class="btn btn-sm btn-outline-primary">ver detalle</button>
                            <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar4);">Eliminar</button>
                            <button class="btn btn-primary btn-sm">Modificar</button>
                            
                          </td>
                        </tr>
                        <tr id="eliminar17">
                          <td id="">Alonzo</td>
                          <td id="">Ruiz</td>
                          <td id="">Palacios</td>
                          <td id="">4545540</td>
                          <td id="">palaciosRuiz@gmail.com</td>
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
          <div class="col-12">
            <div class="row">
                <div class="col-12 col-md-6">
                  <h4 class="text-center">Estadisticas de venta</h4>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    
                    
                </div>
                <div class="col-12 col-md-6">
                  
                    <img src="img/grafica.jpg" alt="">
                    
                </div>


                
                <!-- /.col-lg-4 -->
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
  <script src="vendor/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendor/vendor/raphael/raphael.min.js"></script>
    <script src="vendor/vendor/morrisjs/morris.min.js"></script>
    <script src="vendor/data/morris-data.js"></script>
</body>
</html>


