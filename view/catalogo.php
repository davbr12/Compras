<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="../libs/fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="../libs/css/magnific-popup.css">
    <link rel="stylesheet" href="../libs/css/jquery-ui.css">
    <link rel="stylesheet" href="../libs/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../libs/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../libs/css/aos.css">
    <link rel="stylesheet" href="../libs/css/style.css">
  </head>
  <body>
  
  <div class="site-wrap">
    <?php include("header.php"); ?> 

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Categorias
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="../index.php">RAP</a>
                      <a class="dropdown-item" href="#">OTROS</a>
                      <a class="dropdown-item" href="#">CHILL</a>
                    </div>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Artistas</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">R&B</a>
                      <a class="dropdown-item" href="#">Skinny</a>
                      <a class="dropdown-item" href="#">Pump</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Ghuetto</a>
                      <a class="dropdown-item" href="#">Soul</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-5">
            <?php
              
              include('../php/conexion.php');
              $Query ="SELECT*FROM productos";
              $resutlado = mysqli_query($conexion,$Query) or die ($conexion->error);
              while($fila=mysqli_fetch_array($resutlado)){
            ?>
            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image" height="800px">
                    <a href="shop-single.php?id=<?php echo $fila['Id']; ?>">
                    <img src="<?php echo $fila['Imagen']; ?>" alt="<?php echo $fila['Nombre']; ?>" class="img-fluid" height="800px"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.php?id=<?php echo $fila['Id']; ?>"><?php echo $fila['Nombre']; ?></a></h3>
                    <p class="mb-0"><?php echo $fila['Descripcion']; ?></p>
                    <p class="text-asd font-weight-bold">$<?php echo $fila['Precio']; ?></p>
                  </div>
                </div>
              </div>
            <?php } ?>
              
            


            </div>
           
          </div>

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block"><strong>Bienvenido<strong></h3>
              
              
             <?php if (isset($_SESSION['usuario'])) { ?>
             <a href="iniciarsesion.php" class="btn btn-outline-warning fa fa-qq" ></a><span class="text-black"> <?php echo $_SESSION['usuario'];?></span>
             <br><br>
             <a href="../php/cerrarSesion.php" class="btn btn-outline-warning fa fa-lock"></a><span class="text-black"> Cerrar Sesion</span>
              <?php }?>
              
              
            </div>

            <div class="border p-4 rounded mb-4">
              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block"><strong>Comentarios<strong></h3>
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Señor Stark</h3>
                <p>Muy buen trabajo, llego sin tanto tiempo</p>
                
              </div>

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Señora Acero</h3>
                <p>100% recomendado y el servicio es muy sencillo de utilizar</p>
              </div>

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Tu crush .jpg</h3>
                <p>No los cambiaria por nada, y la manera organizada y facil de encontrar articulos me encanta</p>
              </div>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <center>
            <h3>Musica aesthetic</h3>
            </center>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="site-section site-blocks-2">
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                        <img src="../images/i3.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Music</span>
                        <h3>Jazz</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                        <img src="../images/i1.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Chill</span>
                        <h3>out</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                        <img src="../images/i2.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">End</span>
                        <h3>Lie</h3>
                      </div>
                    </a>
                  </div>
                </div>
              
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <?php include("footer.php"); ?> 

    
  </div>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>

  <script src="../js/main.js"></script>
    
  </body>
</html>