<?php 
session_start();
include("path.php");
include("controllers/topics.php");
$posts = selectAll('posts', ['status'=>1]); 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/e923b74977.js" crossorigin="anonymous"></script>
      <!--Custom style-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Мой блог</title>
  </head>
  <body>
  <?php include("include/header.php");?>
    <!--блок карусели-->
    <div class= "container">
      <div class="row">
        <h2 class="slider-tittle">Интернет-магазин</h2>
      </div>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/iphone-14.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5><a href="">slide label</a></h5>       
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/1019814557.jpg" class="d-block w-100 h-200" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5><a href="">slide label</a></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/image_3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5><a href="">slide label</a></h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div> 
    <!--блок карусели-->
          
    <!--Блок main-->
    <div class="container mb-5">
        <div class="row">
          <div class="main-content col-md-9">
            <div class="row">
                <h2>Продукция</h2>
               <!-- Карточка товара -->
                <?php include("include/main.php");?>
              </div>
            </div>
               <!--sidebar col-md-3-->
          <div class="sidebar col-md-3 col-12">
            <div class="section search">
              <h3>Поиск</h3>
              <form action="search.php" method="post">
                <input type="text" name="search-term" class="text-input" placeholder="Search...">
              </form>
            </div>

          <div class="section topics">
            <h3>Категории</h3>
            <ul class="forfilter" >
              <?php foreach ($topics as $key => $topic):?>
              <li data-id="1" id="1">
                <a  href ="<?= BASE_URL . 'category.php?id=' . $topic['id'];?>" id="1"><?=$topic['name'];?></a>
              </li>
              <?php endforeach;?>
            </ul>
          </div>
          </div>
        </div>
      </div>
            <!--sidebar col-md-3-->
    </div>
  </div>

  <?php include("include/footer.php");?>
  </div>
    <script src="./js/renderProducts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="./js/cart.js"></script>
    <script src="./js/filter.js"></script>
  </body>
</html>