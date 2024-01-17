
<?php session_start();
include("../../path.php");
include("../../controllers/user.php");
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
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Мой блог</title>
  </head>
  <body>
  <?php include("../../include/header-admin.php");?>
    <div class="conatiner">
        <div class="row">
        <?php include ("../../include/sidebar-admin.php");?>
            <div class="posts col-9">
            <div class="button row">
                    <a href="<?php echo BASE_URL .  "admin/users/created.php";?>" class = "col-2 btn btn-success">Создать</a>
                    <span class="col-1"></span>
                </div>
                <div class="row tittle-table">
                    <h2>Управление пользователями</h2>
                    <div class="col-1">ID</div>
                    <div class="col-5">логин пользователя</div>
                    <div class="col-2">Роль</div>
                    <div class="col-4">Управление</div>
                </div>
                <?php foreach($users as $key=> $user):?>
                <div class="row post">
                    <div class="id col-1"><?=$user['id'];?></div>
                    <div class="tittle col-5"><?=$user['username'];?></div>
                    <?php if (($user['admin'])==1):?>
                    <div class="price col-2">Admin</div>
                    <?php else: ?>
                      <div class="price col-2">User</div>
                      <?php endif;?>
                    <div class="del col-2"><a href="">delete</a></div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>

  <?php include("../../include/footer.php");?>
  </div>
 
    <script src="./js/renderProducts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="./js/cart.js"></script>
    <script src="./js/filter.js"></script>
  </body>
</html>