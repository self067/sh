<?php use yii\helpers\Url;
$this->title = ' Товары категории ' . $products[0]['category'];

?>

<div id="breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="/">Home</a></li>
            <li>Product results</li>
        </ul>
    </div>
    <!-- / container -->
</div>
<!-- / body -->

<div id="body">
    <div class="container">

<!--        <div class="pagination">-->
<!--            <ul>-->
<!--                <li><a href="#"><span class="ico-prev"></span></a></li>-->
<!--                <li><a href="#">1</a></li>-->
<!--                <li class="active"><a href="#">2</a></li>-->
<!--                <li><a href="#">3</a></li>-->
<!--                <li><a href="#">4</a></li>-->
<!--                <li><a href="#">5</a></li>-->
<!--                <li><a href="#"><span class="ico-next"></span></a></li>-->
<!--            </ul>-->
<!--        </div>-->

        <div class="products-wrap">
            <aside id="sidebar">
                <div class="widget">
                    <h3>Products per page:</h3>
                    <fieldset>
                        <input checked type="checkbox">
                        <label>8</label>
                        <input type="checkbox">
                        <label>16</label>
                        <input type="checkbox">
                        <label>32</label>
                    </fieldset>
                </div>
                <div class="widget">
                    <h3>Sort by:</h3>
                    <fieldset>
                        <input checked type="checkbox">
                        <label>Popularity</label>
                        <input type="checkbox">
                        <label>Date</label>
                        <input type="checkbox">
                        <label>Price</label>
                    </fieldset>
                </div>
                <div class="widget">
                    <h3>Condition:</h3>
                    <fieldset>
                        <input checked type="checkbox">
                        <label>New</label>
                        <input type="checkbox">
                        <label>Used</label>
                    </fieldset>
                </div>
                <div class="widget">
                    <h3>Price range:</h3>
                    <fieldset>
                        <div id="price-range"></div>
                    </fieldset>
                </div>
            </aside>
            <div id="content">
                <section class="products">

                    <?php foreach( $products as $product) { ?>

                    <article>
                        <a href="<?=Url::to(['product/index', 'name'=> $product['link_name']] )?>"><img height=210 src="/img/<?=$product['img']?>" alt="<?=$product['name']?>" ></a>
                        <h3><a href="<?=Url::to(['product/index', 'name'=> $product['link_name']] )?>"><?=$product['name']?></a></h3>
                        <h4><a href="<?=Url::to(['product/index', 'name'=> $product['link_name']] )?>">$ <?=number_format($product['price'], 0, ".",",")?></a></h4>

                        <a href="#" data-name="<?=$product['link_name']?>" class="btn-add product-button__add">Add to cart</a>

                    </article>

                    <?php } ?>

                </section>
            </div>
            <!-- / content -->
        </div>
<!--        <div class="pagination">-->
<!--            <ul>-->
<!--                <li><a href="#"><span class="ico-prev"></span></a></li>-->
<!--                <li><a href="#">1</a></li>-->
<!--                <li class="active"><a href="#">2</a></li>-->
<!--                <li><a href="#">3</a></li>-->
<!--                <li><a href="#">4</a></li>-->
<!--                <li><a href="#">5</a></li>-->
<!--                <li><a href="#"><span class="ico-next"></span></a></li>-->
<!--            </ul>-->
<!--        </div>-->
    </div>
    <!-- / container -->
</div>
<!-- / body -->

