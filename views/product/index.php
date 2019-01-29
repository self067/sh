
<?php use yii\helpers\Url;

$this->title = $product['name'];
?>

<div id="breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="/">Home</a></li>
            <li>Product page</li>
        </ul>
    </div>
    <!-- / container -->
</div>
<!-- / body -->

<div id="body">
    <div class="container">
        <div id="content" class="full">
            <div class="product">
                <div class="image">
                    <img src="/img/<?=$product['img']?>" alt="<?=$product['name']?>" >
                </div>
                <div class="details">
                    <h1><?=$product['name']?></h1>
                    <h4>$<?=$product['price']?></h4>
                    <div class="entry">
                        <p><?=$product['brief']?></p>
                        <div class="tabs">
                            <div class="nav">
                                <ul>
                                    <li class="active"><a href="#desc">Description</a></li>
                                    <li><a href="#spec">Specification</a></li>
                                    <li><a href="#ret">Returns</a></li>
                                </ul>
                            </div>
                            <div class="tab-content active" id="desc">
                                <p><?=$product['description']?></p>
                            </div>
                            <div class="tab-content" id="spec">
                                <p><?=$product['specification']?></p>
                            </div>
                            <div class="tab-content" id="ret">
                                <p><?=$product['returns']?></p>
                            </div>
                        </div>
                    </div>
                    <div class="actions">
                        <label>Quantity:</label>
                        <select><option>1</option></select>

                        <a href="#" data-name="<?=$product['link_name']?>" class="btn-grey product-button__add">Add to cart</a>

                    </div>
                </div>
            </div>
        </div>
        <!-- / content -->
    </div>
    <!-- / container -->
</div>
<!-- / body -->

