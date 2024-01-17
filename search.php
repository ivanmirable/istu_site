<?php 
session_start();
include("path.php");
include SITE_ROOT . "/context/db.php";
if ($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['search-term'])) {
    $posts = search($_POST['search-term'],'posts');
}
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
  <!--Блок main-->
<div class="container mb-5">
        <div class="row">
          <div class="main-content col-md-9">
            <div class="row">
             <h2>Найдено по запросу: <?=$_POST['search-term'];?></h2>
              <!-- Карточка товара -->
              <?php include("include/main.php");?>
        </div>
        </div>
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