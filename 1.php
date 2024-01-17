<?php 
session_start();
include("path.php");
include("controllers/topics.php");
$cart = selectAll('cart');
$buy_date = (string)$_SESSION['buy_date'];
$email = selectOne('user',['id'=>$_SESSION['id']]);
$posts = selectAllFromPostsWithCart('posts','cart',$buy_date,$email['email']);
$sum = 0;
foreach($posts as $post){
  $sum = $sum + $post['price']*$post['count'];
}
$count = 0;
foreach($posts as $post){
  $count = $count + $post['count'];
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous" />
    <!--Font awesome-->
    <script
      src="https://kit.fontawesome.com/e923b74977.js"
      crossorigin="anonymous"></script>
    <!--Custom style-->
    <link rel="stylesheet" href="css2/style1.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet" />
    <title>Мой блог</title>
  </head>
  <body>
  <div class="wrapper">
  <?php include("include/header.php");?>
    <!--Корзина-->
    <div class="container2">
      <div class="cart-header">
        <div class="cart-header__tittle">Наименование</div>
        <div class="cart-header__count">Количество</div>
        <div class="cart-header__cost">Стоимость</div>
      </div>
      <div class="products" id="id_products">
      <?php include("include/cart.php");?>
    <p><?=$errMsg?></p>
    <?php if(!empty($posts)):?>
    <div class = "order">
      <button type="button" class="btn btn-primary"><a href="order.php">Оформить заказ</a></button>
    </div>
    <?php else: ?>
      <div></div>
      <?php endif;?>
      </div>
      <div class="cart-footer">
        <div class="cart-footer__count"><?=$count?></div>
        <div class="cart-footer__price"><?=$sum?></div>
      </div>
    </div>

    <?php include("include/footer.php");?>
    <!--Корзина-->
    <script src="./js/renderProducts.js"></script>
  
    <script src="./js/calcCartPrice.js"></script>
  </body>
</html>
