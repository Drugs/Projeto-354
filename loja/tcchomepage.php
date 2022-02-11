<?php
session_start();
$_SESSION['usuario_master'] = 'Careca';
echo $_SESSION['usuario_master'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>LOJA</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"  rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="./css/carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="./"><img src= "./img/jesonelputobranco.png"alt="Image" height="18" width="18"><font color="#e92187">Tia Cleide Store</font></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><font color="#e92187">Início</font></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled"></a>
          </li>
        </ul>
		
		<form class="d-flex">
		<a  class="btn btn-outline-success  me-2" href="./loja/logintcc.php"><font color="#e92187" type="submit">Login</font></a>
		</form>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>
<main>
  <div id="myCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
	
	<div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
   
	<div class="carousel-inner">
		<div class="carousel-item active">
			<div class="carousel-caption text-start">
				<div class="container">
					<div class="row align-items-end">
						<div class="col-sm-6">
							<h1>Roupas pra todos os estilos</h1>
							<p>Navegue pelo nosso site e descubra.</p>
							<p><a class="btn btn-lg btn-primary" href="#">Saiba mais</a></p>
						</div>
						<div class="col-sm-6">
							<a href="loja/logintcc.php">
								<img class='w-75 h-75' src="./img/camisaindio.jpg" alt="" />
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div class="carousel-item ">
			<div class="carousel-caption text-start">
				<div class="container">
					<div class="row align-items-end">
						<div class="col-sm-6">
							<h1>Casacos,Pijamas,Camisas e muito mais...</h1>
							<p>Temos variados tipos de roupas personalizadas para o seu gosto.</p>
						</div>
						<div class="col-sm-6">
								<img class='w-75 h-75' src="./img/camisa400.jpg" alt="EH O PALMEIRAAAAAAAAS" />
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="carousel-item ">
			<div class="carousel-caption text-start">
				<div class="container">
					<div class="row align-items-end">
						<div class="col-sm-6">
							<h1>Para todos os gostos e gêneros.</h1>
							<p>Temos variados tipos de roupas personalizadas para o seu gosto.</p>
						</div>
						<div class="col-sm-6">
								<img class='w-75 h-75' src="./img/pijama1.png" alt="EH O PALMEIRAAAAAAAAS" />
						</div>
					</div>
				</div>
			</div>
		</div>
 
		<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
		</div>
	</div>
    
	<div class="container marketing">

    <div class="row">
      <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" src="./img/camisa355.jpg"  width="140" height="140"/>
        <h2>Vintage Quiksilver T Shirt</h2>
        <p>Uma camisa confortável e retrô, trazendo o glamour perfeito em todos  os estilos indie.</p>
        <p><a class="btn btn-secondary" href="./loja/tccproduto.php">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Heading</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Heading</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
      <img class='w-100 h-500' src="./img/rickmorty1.jpg" alt="EH O PALMEIRAAAAAAAAS" />

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-sm-5 order-md-1">
      <img class='w-100 h-500' src="./img/egirlshopee.jpg" alt="EH O PALMEIRAAAAAAAAS" />
      </div>
    </div>
    <hr class="featurette-divider">

   <div class="row featurette">
      <div class="col-md-6">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-sm-6">
      <img class='w-500 h-500' src="./img/manmandrake.jpg" alt="EH O PALMEIRAAAAAAAAS" />
      </div>
    </div>

    <hr class="featurette-divider"> 
    <section class="big-product">
      <div class="container">
        <div class="row">
          <div class="col-md-4 product"><img src="./img/rosa.jpg" alt="t-shirt" class="img-fluid"></div>
          <div class="col-md-8 info">
            <div class="info-wrapper">
              <h2>Rosa Deslumbrante</h2>
              <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore
              </p>
            </div><a href="#" class="add-to-cart btn btn-primary">adicione ao carrinho <i class="icon-cart-1"></i></a><br><br><br><br>
          </div>
        </div>
      </div>
    </section>

    <hr class="featurette-divider">
    <section class="new-arrivals">
      <div class="container text-center">
        <h2 class="heading-center">Produtos em Alta</h2>
        <div class="items">
          <div class="row">
            <div class="col-lg-4 item">
              <div class="item-image"><img src="./img/camisa1.jpg" alt="shirt">
                <div class="hover-overlay">
                  <ul class="list-inline">
                    <li class="list-inline-item"><a href="javascript: return void();" class="cart"><i class="icon-cart-1"></i></a></li>
                    <li class="list-inline-item"><a href="javascript: return void();" class="wishlist"><i class="icon-like"></i></a></li>
                    <li class="list-inline-item"><a href="#" data-target="#cart-popup-1" class="expand"><i class="icon-expand"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="item-info">
                <h5>Camisa de anime básica branca</h5>
                <ul class="price list-inline">
                  <li class="list-inline-item current">R$40,00</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 item">
              <div class="item-image"><img src="./img/camisa2.jpg" alt="shirt">
                <div class="hover-overlay">
                  <ul class="list-inline">
                    <li class="list-inline-item"><a href="javascript: return void();" class="cart"><i class="icon-cart-1"></i></a></li>
                    <li class="list-inline-item"><a href="javascript: return void();" class="wishlist"><i class="icon-like"></i></a></li>
                    <li class="list-inline-item"><a href="#" data-target="#cart-popup-1" class="expand"><i class="icon-expand"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="item-info">
                <h5>Camisa do Naruto</h5>
                <ul class="price list-inline">
                  <li class="old list-inline-item">R$70,00</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 item">
              <div class="item-image"><img src="./img/camisa3.jpg" alt="shirt">
               <div class="item-info"><br><br>
                <h5>Camisa de Anime básica rosa</h5>
                <ul class="price list-inline">
                  <li class="old list-inline-item">R$50,00</li>
                <div class="hover-overlay">
                 <ul class="list-inline">
                    <li class="list-inline-item"><a href="javascript: return void();" class="cart"><i class="icon-cart-1"></i></a></li>
                    <li class="list-inline-item"><a href="javascript: return void();" class="wishlist"><i class="icon-like"></i></a></li>
                    <li class="list-inline-item"><a href="#" data-target="#cart-popup-1" class="expand"><i class="icon-expand"></i></a></li>
                  </ul>
                </div>
              </div>
          </div>
        </div>
      </div>
  </div>


    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


 
</main>
    <hr class="featurette-divider">
 <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
