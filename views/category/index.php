<?=\app\widgets\MenuWidget::widget()?>
<?php use yii\helpers\Url;
$this->title = Yii::$app->name . ' Магазин '; // . $model->name;

?>


<!--<div class="container">-->
    <div class="last-products">
        <h2>Last added products</h2>
        <section class="products">
            <?php foreach( $products as $product) { ?>
            <article>
                <img height=210  src="img/<?=$product['img']?>" alt="<?=$product['name']?>">
                <h3><?=$product['name']?></h3>
                <h4>$<?=$product['price']?></h4>
                <a href="<?=Url::to(['product/index', 'name'=> $product['link_name']] )?>" data-name="<?=$product['link_name']?>" class="btn-add">Add to cart</a>
            </article>
            <?php } ?>

        </section>
    </div>
