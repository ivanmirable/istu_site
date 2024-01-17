<?php foreach ($posts as $post): ?>
            <form method = "post" enctype="multipart/form-data" class="col-md-6"  action = "index.php">
              <input type="hidden" name="id" value="<?=$post['id']?>">
                  <div class="card md-4" data-id="1" id="1">
                    <!-- Верхняя часть -->
                    <div class="card__top">
                      <!-- Изображение-ссылка товара -->
                      <a href="#" class="card__image">
                        <img
                          src="<?=BASE_URL . 'img/' . $post['img'];?>"
                          alt="<?=$post['tittle'];?>"
                        />
                      </a>
                      <!-- Скидка на товар -->
                      <div class="card__label">-10%</div>
                    </div>
                    <!-- Нижняя часть -->
                    <div class="card__bottom">
                      <!-- Цены на товар (с учетом скидки и без)-->
                      <div class="card__prices">
                        <div class="card__price card__price--discount">135000</div>
                        <div class="card__price card__price--common"><?=$post['price']?></div>
                      </div>
                      <!-- Ссылка-название товара -->
                      <a href="" class="card__title">
                        <?=$post['tittle']?>
                      </a>
                      <!-- Кнопка добавить в корзину -->
                    <button name ="add_cart_button" type="submit" data-cart class="card__add"> В корзину</button>         
                      </div>
                  </div>
              </form>
              <?php endforeach;?>
  