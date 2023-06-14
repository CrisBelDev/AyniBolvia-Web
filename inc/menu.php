
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#fm-menu" aria-controls="fm-menu" aria-expanded="false" aria-label="Menu">
        <span class="navbar-toggler-icon"></span>
        </button>

        <a href="http://localhost/EmpresaTextilera/" class="navbar-brand">Creative</a>

            <div class="collapse navbar-collapse" id="fm-menu">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item" >
                  <a href="http://localhost/AyniBolivia/" <?php if($menu=='index') echo 'class="nav-link active"'; ?> class="nav-link" >Inicio</a>
                </li>


                <li class="nav-item">
                  <a href="producto" <?php if($menu=='productos'){echo 'class="nav-link active"';}; ?> class="nav-link " >Productos</a>
                </li>


                <li class="nav-item">
                  <a href="#" class="nav-link">Contacto</a>
                </li>


              </ul>

              <form action="" class="form-inline">
                <input type="text" class="form-control mr-2 " placeholder="Buscar">
                <button type="submit" class="btn btn-primary mt-2 mt-lg-0">Buscar</button>
              </form>
              <form action="" class="form-inline ml-lg-5 mt-2 mt-lg-0">
                <a href="login" class="btn btn-success ">Login<span class="icon-user ml-2"></span></a>
              </form>
            </div>
    </div>
</nav>