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

  <style>
    #produtos {
      max-width: 900px;
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
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Biblioteca</a></li>
            <li class="breadcrumb-item active" aria-current="page">Atual</li>
          </ol>
        </nav>
      <div class="col-lg-5">
        <img src="../img/biquini1.png" class="img-fluid max w-150">
        <img src="../img/biquini2.png" width="90" height="90">
        <img src="../img/biquini3.jpg" width="90" height="90">
      </div>
      <div class="col-lg-7  text-justify">
        <h2 class="text-justify">Biquini Vaquinha Asa Delta Larga</h2>
      <div class="row">
          <div class="col-lg-9">
            <p>
              Cor: Preto e Branco
              Estilo: Fofo
              Tipo de Desenho: Gráfico
              Detalhes: Criss Cross, Embrulhar
              Tipo: Biquinis
              Tipo de bottoms: Natural
              Tipo de sutiã: Sem fio
              Decote: Alcinha
              Tecido: Alongamento médio
              Material: Poliéster
              Tecido/material: 82% Poliéster, 18% Elastano
              Instruções de cuidados: Lavar à máquina, não lavar a seco
              Revestimento: Forrado
              Almofada de peito: Preenchimento removível
            </p>
          </div>
          <div class="col-lg-3">
            <p class="fw-bold fst-italic">R$57,90</p>
            <button type="button" class="btn btn-primary w-100 mt-3">Primary</button>
            <button type="button" class="btn btn-primary w-100 mt-3">Secondary</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <hr class="featurette-divider mt-4">
    <section class="new-arrivals">
      <div class="container text-center" style="flex-direction: column;">
        <h2 class="heading-center">Produtos em Alta</h2>
        <div class="items">
          <div class="row">
            <div class="col-lg-4 item">
              <div class="item-image"><img src="../img/camisa1.jpg" alt="shirt">
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
              <div class="item-image"><img src="../img/camisa2.jpg" alt="shirt">
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
              <div class="item-image"><img src="../img/camisa3.jpg" alt="shirt">
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
      </div>

      <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->



  </main>
  <hr class="featurette-divider">
  <!-- FOOTER -->
  <footer class="container" style="justify-content:space-between;">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>