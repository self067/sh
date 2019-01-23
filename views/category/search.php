<?php
use yii\helpers\Url;
$this->title = Yii::$app->name . ' Поиск ' . $model->name;
?>

<div class="container">

<h2 style="text-align: center">Результаты поиска по запросу <?=$search?></h2>
  <div class="row justify-content-center">
    <?php if( $products){
        foreach( $products as $product) { ?>
      <div class="col-4">
        <div class="product">
          <div class="product-img">
            <img src="/img/<?=$product['img']?>" alt="<?=$product['name']?>">
          </div>
          <div class="product-name"><?=$product['name']?></div>
          <div class="product-descr">Состав: <?=$product['composition']?></div>
          <div class="product-price">Цена: <?=$product['price']?> рублей</div>
          <div class="product-buttons">
            <a href="#" data-name="<?=$product['link_name']?>"  class="product-button__add btn btn-success">Заказать</a>

<!--            <button type="button" class="product-button__add btn btn-success">Заказать</button>-->
            <a href="<?=Url::to(['product/index', 'name'=> $product['link_name']] )?>" type="button" class="product-button__more btn btn-primary">Подробнее</a>
          </div>
        </div>
      </div>

    <?php } } else { ?>
    <h4>Ничего не найдено</h4>
    <?php } ?>
  </div>
</div>
