<?php
 
$servername = "localhost"; // identificando o servidor
$username = "root"; // usuário
$password = ""; // senha
$database = "bakbank";
 
// Create connection
$nyx = mysqli_connect($servername, $username, $password,$database);
 
// Check connection
if (!$nyx) {
  die("Connection failed: " . mysqli_connect_error());
}


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


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:wght@200&family=Rowdies:wght@700&display=swap" rel="stylesheet">

  <style>
    .ponto {
      font-size: 1.55rem;
      font-weight: bold;
      font-family: 'Rowdies', cursive;
      color: rgb(0, 0, 0);

    }

    .butao {
      font-family: 'Bebas Neue', cursive;
      font-size: 1.95rem;
    }

    .texto {
      font-family: 'Raleway', sans-serif;
      font-weight: bold;
    }

    .container {
    font-family: 'Raleway', sans-serif;
    font-weight: bold;
    min-height: 10em;
    display: table-cell;
    align: center;
  }
    #produtos {
      max-width: 400px;
      margin: 0 auto;
      padding: 0 2%;
      display: flex;
    }

    .produto-single {
      width: 32%
    }

    .container {
      display: flex;
      flex-wrap: wrap;
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="./css/carousel.css" rel="stylesheet">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mb-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="../"><img src="../img/jesonelputobranco.png" alt="Image" height="18" width="18">
          <font color="#e92187">Tia Cleide Store</font>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <font color="#e92187">Início</font>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled"></a>
            </li>
          </ul>


          <form class="d-flex">
            <a class="btn btn-outline-success  me-2" href="./loja/logintcc.php">
              <font color="#e92187" type="submit">Login</font>
            </a>
          </form>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <div class="container" style="margin-top: 4rem!important;">
    <div class="row gy-1">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="bibliotecaproduto.php">Biblioteca</a></li>
          <li class="breadcrumb-item active" aria-current="page">Atual</li>
        </ol>
      </nav>
      <div class="col-lg-5">
      <img src="../img/banana2.jpg" class="img-fluid ">
      </div>
      <div class="col-lg-7  text-justify">
        <p class="ponto mt-3">R$47,90</p>
        <button type="button" style="background-color:Black;" class="butao btn btn-primary w-100">Buy Now</button>
        <div class="row">
          <h2 class=" texto mt-2">Anime Banana Fish T-shirt</h2>
          <p class="texto">P/M/G/XG</p>
          <div class="col-lg-9  text-center mt-2">
            <p class=" descricao sc-jrsJWt styles__DescriptionContainer-sc-__sc-1fk4zep-12 dfXtnW boccQk">
              Donec vitae nibh eu quam maximus commodo. Mauris bibendum, erat non venenatis eleifend, odio neque pellentesque libero, vitae eleifend est leo ut urna. Aliquam eget facilisis ex. Praesent at lacinia ipsum. Vivamus nec est pulvinar, sollicitudin arcu eu, ultricies sem. Donec dictum ipsum eu luctus venenatis.
              Aliquam fermentum urna lobortis vehicula placerat. Sed aliquet non neque tempus facilisis.
              Curabitur ut elit ut metus imperdiet laoreet nec sit amet dui. Praesent enim nibh, fringilla a sapien non, condimentum tempus nisl.
              Maecenas aliquet porta nulla nec venenatis. Praesent finibus et ligula sit amet rutrum. Sed urna urna, aliquet a purus vel, accumsan cursus libero. Nam luctus vitae sem a ullamcorper.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container" style="display:block;">
    <div class="row">
      <hr class="featurette-divider mt-4">
      <div class="container text-center" style="flex-direction: column;">
        <section class="new-arrivals">
          <h2 class="heading-center">Produtos em Alta</h2>
          <div class="items">
            <div class="row">
              <div class="col-lg-4 item">
                <div class="item-image"><img src="../img/fairytail.jpg" alt="shirt">
                </div>
                <div class="item-info">
                  <h5>fairy tail unissex t-shirt</h5>
                  <ul class="price list-inline">
                    <li class="list-inline-item current">R$39,90</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 item">
                <div class="item-image"><img src="../img/casaco2.jpg" alt="shirt">

                </div>
                <div class="item-info">
                <a><h5>Brand New Black + Pink Hoodie.</h5>
                  <ul class="price list-inline">
                    <li class="old list-inline-item">R$135,90</li>
                  </ul></a>
                </div>
              </div>
              <div class="col-lg-4 item">
                <div class="item-image"><img src="../img/iguanaalana2.jpg" alt="shirt">
                </div>
                  <div class="item-info">
                    <a><h5>iguana alana grapic tshirt merch</h5>
                    <ul class="price list-inline">
                      <li class="old list-inline-item">R$56,90</li>
                    </ul></a>
                  </div>
                </div>
              </div>
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