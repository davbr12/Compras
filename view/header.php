

   

    <header class="site-navbar" role="banner">
      
      <nav class="site-navigation text-right text-md-center" role="navigation">
        
        <div class="row">
        <div class="col-3">
          <img src="../images/i1.png" alt="" width="80px" height="80px">
        </div>
        <div class="col-9">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            
            <li >
              <a href="../index.php">Home</a>
             
            </li>
            
            <li><a href="catalogo.php">Shop</a></li>
            <li><a href="catalogo.php">Catalogo</a></li>
            <li><a href="#">Otros</a></li>
            <li><a href="#">Contacto</a></li>
            <li>
            <div class="site-top-icons">
                <ul>
                  <li><a href="#"><span class="icon icon-person"></span></a></li>
                  
                  <li>
                    <a href="cart.php" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count"><?php
                      echo (empty($_SESSION['carrito']))?0:count($_SESSION['carrito']);
                      ?></span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
              </li>
          </ul>
          </div>
          </div>
        
      </nav>
    </header>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php" class="colorTexto">Home</a> <span class="mx-2 mb-0">/</span>
           <strong class="text-black">Shop</strong></div>
        </div>
      </div>
    </div>