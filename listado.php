<?php 
require_once('enlace.php'); 
$menu='listado';
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
        <h3 class="text-center text-md-left ">Productos</h3>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  Productos en almacen
              </div>
              <div class="card-block">
                <div class="row mb-3">
                  <div class="col d-flex justify-content-end">
                    <button class="btn btn-success mr-3" data-toggle="modal" data-target="#fm-modal-grid">Nuevo</button>
                    <button class="btn btn-primary">buscar</button>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <table class="table table-bordered table-striped  table-hover table-reponsive">
                    <!-- Tambien podemos cambiar el <thead> a oscuro con .thead-inverse -->
                    <!-- Otra alternariva es .thead-default -->
                    <thead class="thead-default">
                      <th>Nombre</th>
                      <th>P.U</th>
                      <th>Talla</th>
                      <th>Stock</th>
                      <th>Opciones</th>
                    </thead>
                    <tr class="d-none" id="eliminar1">
                      <td id="op1"></td>
                      <td id="op2"></td>
                      <td id="op3"></td>
                      <td id="op4"></td>
                      <td>
                        <button class="btn btn-danger btn-sm" id="eliminar" onclick="eliminar(eliminar1);">Eliminar</button>
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#fm-modal-modificar">Modificar</button>
                        
                      </td>
                    </tr>

                    <tr class="" id="eliminar2">
                      <td id="p1">Poncho</td>
                      <td id="p2">70</td>
                      <td id="p3">M</td>
                      <td id="p4">150</td>
                      <td>
                        <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar2);">Eliminar</button>
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#fm-modal-modificar">Modificar</button>
                        
                      </td>
                    </tr>
                    
                    <tr class="" id="eliminar3">
                      <td>Chompa</td>
                      <td>150</td>
                      <td>M</td>
                      <td>200</td>
                      <td>
                        <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar3);">Eliminar</button>
                        <button class="btn btn-primary btn-sm">Modificar</button>
                        
                      </td>
                    </tr>

                    <tr id="eliminar4">
                      <td>Gorra</td>
                      <td>37</td>
                      <td></td>
                      <td>20</td>
                      <td>
                        <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar4);">Eliminar</button>
                        <button class="btn btn-primary btn-sm">Modificar</button>
                        
                      </td>
                    </tr>
                    <tr id="eliminar5">
                      <td>Mochila</td>
                      <td>200</td>
                      <td></td>
                      <td>150</td>
                      <td>
                        <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar5);">Eliminar</button>
                        <button class="btn btn-primary btn-sm">Modificar</button>
                        
                      </td>
                    </tr>
                    <tr id="eliminar6">
                      <td>morral</td>
                      <td>180</td>
                      <td></td>
                      <td>70</td>
                      <td>
                        <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar6);">Eliminar</button>
                        <button class="btn btn-primary btn-sm">Modificar</button>
                        
                      </td>
                    </tr>
                    <tr id="eliminar7">
                      <td>frazada</td>
                      <td>300</td>
                      <td>1 PIEZA</td>
                      <td>100</td>
                      <td>
                        <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar7);">Eliminar</button>
                        <button class="btn btn-primary btn-sm">Modificar</button>
                        
                      </td>
                    </tr>
                    <tr id="eliminar8">
                      <td>Calza</td>
                      <td>70</td>
                      <td>L</td>
                      <td>100</td>
                      <td>
                        <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar8);">Eliminar</button>
                        <button class="btn btn-primary btn-sm">Modificar</button>
                        
                      </td>
                    </tr>
                    <tr id="eliminar9">
                      <td>Calza</td>
                      <td>70</td>
                      <td>M</td>
                      <td>100</td>
                      <td>
                        <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar9);">Eliminar</button>
                        <button class="btn btn-primary btn-sm">Modificar</button>
                        
                      </td>
                    </tr>
                    <tr class="" id="eliminar10">
                      <td>Poncho</td>
                      <td>70</td>
                      <td>L</td>
                      <td>150</td>
                      <td>
                        <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar10);">Eliminar</button>
                        <button class="btn btn-primary btn-sm">Modificar</button>
                        
                      </td>
                    </tr>
                    
                    <!-- .bg-primary -->
                    <!-- .bg-success -->
                    <!-- .bg-warning -->
                    <!-- .bg-danger -->
                    <!-- .bg-info -->
                    <tr class="" id="eliminar11">
                      <td>Chompa</td>
                      <td>150</td>
                      <td>L</td>
                      <td>200</td>
                      <td>
                        <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar11);">Eliminar</button>
                        <button class="btn btn-primary btn-sm">Modificar</button>
                        
                      </td>
                    </tr>

                    <tr id="eliminar12">
                      <td>Gorra</td>
                      <td>37</td>
                      <td></td>
                      <td>20</td>
                      <td>
                        <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar12);">Eliminar</button>
                        <button class="btn btn-primary btn-sm">Modificar</button>
                        
                      </td>
                    </tr>
                    <tr id="eliminar13">
                      <td>Mochila</td>
                      <td>200</td>
                      <td></td>
                      <td>150</td>
                      <td>
                        <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar13);">Eliminar</button>
                        <button class="btn btn-primary btn-sm">Modificar</button>
                        
                      </td>
                    </tr>
                    <tr id="eliminar14">
                      <td>morral</td>
                      <td>180</td>
                      <td></td>
                      <td>70</td>
                      <td>
                        <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar14);">Eliminar</button>
                        <button class="btn btn-primary btn-sm">Modificar</button>
                        
                      </td>
                    </tr>
                    <tr id="eliminar15">
                      <td>frazada</td>
                      <td>300</td>
                      <td>2 PIEZA</td>
                      <td>100</td>
                      <td>
                        <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar15);">Eliminar</button>
                        <button class="btn btn-primary btn-sm">Modificar</button>
                        
                      </td>
                    </tr>
                    <tr id="eliminar16">
                      <td>Calza</td>
                      <td>70</td>
                      <td>L</td>
                      <td>100</td>
                      <td>
                        <button class="btn btn-danger btn-sm" onclick="eliminar(eliminar16);">Eliminar</button>
                        <button class="btn btn-primary btn-sm">Modificar</button>
                        
                      </td>
                    </tr>
                    <tr id="eliminar17">
                      <td>Calza</td>
                      <td>70</td>
                      <td>L</td>
                      <td>100</td>
                      <td>
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
        <div class="modal fade" id="fm-modal-grid" tabindex="-1" role="dialog" aria-labelledby="fm-modal-grid" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="">Registro</h5>
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
                                  <label for="nom">Nombre</label>
                                  <input type="text" class="form-control" placeholder="Nombre" name="nom" id="nom">
                              </div>
                              <div class="col-12 mb-3">
                                  <label for="precio">Precio Unitario</label>
                                  <input type="text" class="form-control" placeholder="Precio unitario" name="precio" id="precio">
                              </div>
                              <div class="col-12 mb-3">
                                  <label for="talla">Talla</label>
                                  <input type="text" class="form-control" placeholder="Talla" name="talla" id="talla">
                              </div>
                          </div>

                          <div class="form-group row">
                              <div class="col-12 mb-3">
                                  <label for="stock">Stock</label>
                                  <input type="text" class="form-control" placeholder="Cargo" name="stock" id="stock">
                              </div>                      
                          </div>
                          <div class="form-group row">              
                          </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-6 justify-content-center">
                        <img src="img/Crazytut0s (19).jpg" style="width: 100%;" alt="">
                        <button class="btn btn-primary btn-block">Agregar foto</button>
                    </div>
                  </div>
                </div>
              </div>


              <div class="modal-footer">
                <button class="btn btn-success" type="submit" data-dismiss="modal" id="btn-registro">Aceptar</button>
                <button class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
                                  <input type="text" class="form-control" placeholder="Nombre" name="nombres" id="nombres" value="Poncho">
                              </div>
                              <div class="col-12 mb-3">
                                  <label for="precios">Precio Unitario</label>
                                  <input type="text" class="form-control" placeholder="Precio unitario" name="precios" id="precios" value="70">
                              </div>
                              <div class="col-12 mb-3">
                                  <label for="tallas">Talla</label>
                                  <input type="text" class="form-control" placeholder="Talla" name="tallas" id="tallas" value="M">
                              </div>
                          </div>

                          <div class="form-group row">
                              <div class="col-12 mb-3">
                                  <label for="stocks">Stock</label>
                                  <input type="text" class="form-control" placeholder="Cargo" name="stocks" id="stocks" value="150">
                              </div>

                              

                             
                          </div>

                          <div class="form-group row">
                              
                          </div>

                        </form>
                    </div>
                    <div class="col-12 col-md-6 justify-content-center">
                        <img src="img/10.jpg" style="width: 100%;" alt="">
                        <button class="btn btn-primary btn-block">Cambiar foto</button>
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
    $("#btn-registro").click(function(){
      var nombre=document.getElementById('nom').value;
      var precio=document.getElementById('precio').value;
      var talla=document.getElementById('talla').value;
      var stock=document.getElementById('stock').value;

      $('#op1').html(nombre);
      $('#op2').html(precio);
      $('#op3').html(talla);
      $('#op4').html(stock);
      $('#eliminar1').removeClass('d-none');
      $('#nom').val(null);
      $('#precio').val(null);
      $('#talla').val(null);
      $('#stock').val(null);
        });
    $("#btn-modificar").click(function(){
      var nombre=document.getElementById('nombres').value;
      var precio=document.getElementById('precios').value;
      var talla=document.getElementById('tallas').value;
      var stock=document.getElementById('stocks').value;

      $('#p1').html(nombre);
      $('#p2').html(precio);
      $('#p3').html(talla);
      $('#p4').html(stock);

        });
    function eliminar(id) {
      $(id).addClass('d-none');
    }
  </script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>


