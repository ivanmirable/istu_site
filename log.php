<?php

 include("controllers/user.php");
 require("path.php");
 ?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/e923b74977.js" crossorigin="anonymous"></script>
      <!--Custom style-->
    <link rel="stylesheet" href="css(reg)/style3(reg).css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Мой блог</title>
  </head>
  <body>
  <?php include("include/header.php");?>

    <!--Forma-->
  <div class="container">
    <form class="row justify-content-center" method="post" action="log.php" enctype = "multipart/form-data">
      <h2 id="h2">Авторизация</h2>
      <div class="mb-3 col-12 col-md-4 err">
          <p><?=$errMsg?></p>
      </div>
  
      <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
          <label for="exampleInputEmail1" class="form-label">Ваш Email</label>
          <input type="email" name="email" value = "<?=$email?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Введите email</div>
        </div>  
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
          <label for="exampleInputPassword1" class="form-label">Пароль</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          <div id="emailHelp" class="form-text">Введите пароль</div>
        </div>
        <div class="w-100"></div>

        <div class="mb-3 col-12 col-md-4">
        <button name = "button-log" type="submit" class="btn btn-success">Авторизоваться</button>
        <a class="autorization" href="<?php echo BASE_URL ."reg.php";?>">Зарегистрироваться</a>
      </div>
      </form>
    </div>
    <!--Forma-->
    <?php include("include/footer.php");?>
      </div>
     <!--footer-->
