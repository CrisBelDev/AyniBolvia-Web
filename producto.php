<?php 
require_once('enlace.php'); 
$menu='producto';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Universal - All In 1 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="css/bootstrap-select.min.css">

    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/productos.css" id="theme-stylesheet">
    
  </head>
  <body>
    <?php include('inc/menu.php'); ?>
    <div id="all">
      <div id="content">
        <div class="container mt-5 pt-5">
          <div class="row bar">
            <div class="col-md-9">
              <p class="text-muted lead">In our Ladies department we offer wide selection of the best products we have found and carefully selected worldwide. Pellentesque habitant morbi tristique senectus et netuss.</p>
              <div class="row products products-big">
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/art1.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="#">Poncho de alpaca</a></h3>
                      <p class="price">$143.00</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/art2.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="#">Poncho Armani</a></h3>
                      <p class="price">
                        <del>$280</del> $143.00
                      </p>
                    </div>
                    <div class="ribbon-holder">
                      <div class="ribbon sale">SALE</div>
                      <div class="ribbon new">NEW</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/art3.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="#">Black Blouse Versace</a></h3>
                      <p class="price">$143.00</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/art4.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="#">Black Blouse Versace</a></h3>
                      <p class="price">$143.00</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/art11.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="#">White Blouse Armani</a></h3>
                      <p class="price">
                        <del>$280</del> $143.00
                      </p>
                    </div>
                    <div class="ribbon-holder">
                      <div class="ribbon sale">SALE</div>
                      <div class="ribbon new">NEW</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="#"><img src="img/art6.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="#">White Blouse Versace</a></h3>
                      <p class="price">$143.00</p>
                    </div>
                    <div class="ribbon-holder">
                      <div class="ribbon new">NEW</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 banner mb-small"><a href="#"><img src="img/publicidad3.jpg" alt="" class="img-fluid"></a></div>
              </div>
              <div class="pages">
                <p class="loadMore text-center"><a href="#" class="btn btn-template-outlined"><i class="fa fa-chevron-down"></i> Load more</a></p>
                <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                  <ul class="pagination">
                    <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-md-3">
              <!-- MENUS AND FILTERS-->
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Categories</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm category-menu">
                    <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Men </span><span class="badge badge-secondary">42</span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">T-shirts</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Shirts</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Pants</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Accessories</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="shop-category.html" class="nav-link active d-flex align-items-center justify-content-between"><span>Ladies  </span><span class="badge badge-light">123</span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">T-shirts</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Skirts</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Pants</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Accessories</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Kids  </span><span class="badge badge-secondary">11</span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">T-shirts</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Skirts</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Pants</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Accessories</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading d-flex align-items-center justify-content-between">
                  <h3 class="h4 panel-title">Tipo</h3><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times-circle"></i><span class="d-none d-md-inline-block">Clear</span></a>
                </div>
                <div class="panel-body">
                  <form>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Alpaca  (10)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Hilo  (12)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Lana  (15)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Unixex  (14)
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-sm btn-template-outlined mb-5"><i class="fa fa-pencil"></i> Apply</button>
                  </form>
                </div>
              </div>
              
              <div class="banner"><a href="#"><img src="img/publicidad2.jpg"  class="img-fluid"></a></div>
              <div class="banner mt-1"><img src="img/publicidad4.jpg"  class="img-fluid"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- GET IT-->
      <div class="get-it">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 text-center p-3">
              <h3>Do you want cool website like this one?</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum pariatur illo cumque eius maxime nostrum?</p>
            </div>
            
          </div>
        </div>
      </div>
      
    </div>
    <?php  include('inc/footer.php');?>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/jquery.parallax-1.1.3.js"></script> -->
    
    
    
  </body>
</html>