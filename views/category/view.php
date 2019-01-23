<?=\app\widgets\MenuWidget::widget()?>
<?php use yii\helpers\Url;
$this->title = ' Товары категории ' . $products[0]['category'];

?>

<div class="container">
  <div class="row justify-content-center">

    <?php foreach( $products as $product) { ?>
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
            <a href="<?=Url::to(['product/index', 'name'=> $product['link_name']] )?>" type="button" class="product-button__more btn btn-primary">Подробнее</a>
          </div>
        </div>
      </div>

    <?php } ?>
  </div>
</div>
