<?php foreach ($posts as $post): ?>
      <section class="product" id="product">
    <div class="product__img col-12 col-md-4">
        <img src="<?=BASE_URL . '../img/' . $post['img'];?>" alt="" class="product__img">
    </div>
    <div class="product__tittle"><?=$post['tittle'];?></div>
    <div class="product__count">
        <div class="count">
            <div class="count__box">
                <input type="number" class="count_input" min="1" max="100" value="<?=$post['count']?>" id="inp2" data-counter>
            </div>
            <div class="count__controls">
                <button class="count__up" type="button" data-action="up">
                <a href="index.php?upcount_id=<?=$post['id'];?>"> <img src="./img/image_4.png" alt="Increase" id="up__img"></a></button>
                <button class="count__down" type="button" data-action="down">
                  <a href="index.php?downcount_id=<?=$post['id'];?>"><img src="./img/image_5.jpg" alt="Decrease" id = "down__img" ></a> 
                </button>
            </div>
        </div>
    </div>
    <div class="product__price"><?=$post['price'];?></div>
    <div class="product__controls">
        <button name = "del_cart" type="button" id="delete_button" >
          <a href="index.php?deleted_id=<?=$post['id'];?>"><img src="./img/delete_button.png"></a> 
        </button>
    </div>
    </section>
    <?php endforeach;?>