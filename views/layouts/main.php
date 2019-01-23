<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
<!--    <title>Diana’s jewelry</title>-->
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>


<header id="header">
    <div class="container">
        <a href="/" id="logo" title="Diana’s jewelry">Diana’s jewelry</a>
        <div class="right-links">
            <ul>
                <li><a href="cart.html"><span class="ico-products"></span>3 products, $4 500.00</a></li>
                <li><a href="#"><span class="ico-account"></span>Account</a></li>
                <li><a href="#"><span class="ico-signout"></span>Sign out</a></li>
            </ul>
        </div>
    </div>
    <!-- / container -->
</header>

<!--<nav id="menu">-->
<!--    <div class="container">-->
<!--        <div class="trigger"></div>-->
<!--        <ul>-->
<!--            <li><a href="products.html">New collection</a></li>-->
<!--            <li><a href="products.html">necklaces</a></li>-->
<!--            <li><a href="products.html">earrings</a></li>-->
<!--            <li><a href="products.html">Rings</a></li>-->
<!--            <li><a href="products.html">Gift cards</a></li>-->
<!--            <li><a href="products.html">Promotions</a></li>-->
<!--        </ul>-->
<!--    </div>-->
    <!-- / container -->
<!--</nav>-->
<!-- / navigation -->
<div class="container">

    <?=  $content?>

</div>




<div id="slider">
    <ul>
        <li style="background-image: url(images/0.jpg)">
            <h3>Make your life better</h3>
            <h2>Genuine diamonds</h2>
            <a href="#" class="btn-more">Read more</a>
        </li>
        <li class="purple" style="background-image: url(images/01.jpg)">
            <h3>She will say “yes”</h3>
            <h2>engagement ring</h2>
            <a href="#" class="btn-more">Read more</a>
        </li>
        <li class="yellow" style="background-image: url(images/02.jpg)">
            <h3>You deserve to be beauty</h3>
            <h2>golden bracelets</h2>
            <a href="#" class="btn-more">Read more</a>
        </li>
    </ul>
</div>
<!-- / body -->

<div id="body">
    <div class="container">
        <div class="last-products">
            <h2>Last added products</h2>
            <section class="products">
                <article>
                    <img src="images/1.jpg" alt="">
                    <h3>Excepteur sint occaecat</h3>
                    <h4>$1 850.00</h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <img src="images/11.jpg" alt="">
                    <h3>Lorem ipsum dolor</h3>
                    <h4>$990.00</h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <img src="images/12.jpg" alt="">
                    <h3>cupidatat non proident</h3>
                    <h4>$1 200.00</h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <img src="images/13.jpg" alt="">
                    <h3>Duis aute irure</h3>
                    <h4>$2 650.00</h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <img src="images/14.jpg" alt="">
                    <h3>magna aliqua</h3>
                    <h4>$3 500.00</h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
            </section>
        </div>

        <section class="quick-links">
            <article style="background-image: url(images/2.jpg)">
                <a href="#" class="table">
                    <div class="cell">
                        <div class="text">
                            <h4>Lorem ipsum</h4>
                            <hr>
                            <h3>Dolor sit amet</h3>
                        </div>
                    </div>
                </a>
            </article>
            <article class="red" style="background-image: url(images/3.jpg)">
                <a href="#" class="table">
                    <div class="cell">
                        <div class="text">
                            <h4>consequatur</h4>
                            <hr>
                            <h3>voluptatem</h3>
                            <hr>
                            <p>Accusantium</p>
                        </div>
                    </div>
                </a>
            </article>
            <article style="background-image: url(images/4.jpg)">
                <a href="#" class="table">
                    <div class="cell">
                        <div class="text">
                            <h4>culpa qui officia</h4>
                            <hr>
                            <h3>magnam aliquam</h3>
                        </div>
                    </div>
                </a>
            </article>
        </section>
    </div>
    <!-- / container -->
</div>
<!-- / body -->


<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
<footer id="footer">
    <div class="container">
        <div class="cols">
            <div class="col">
                <h3>Frequently Asked Questions</h3>
                <ul>
                    <li><a href="#">Fusce eget dolor adipiscing </a></li>
                    <li><a href="#">Posuere nisl eu venenatis gravida</a></li>
                    <li><a href="#">Morbi dictum ligula mattis</a></li>
                    <li><a href="#">Etiam diam vel dolor luctus dapibus</a></li>
                    <li><a href="#">Vestibulum ultrices magna </a></li>
                </ul>
            </div>
            <div class="col media">
                <h3>Social media</h3>
                <ul class="social">
                    <li><a href="#"><span class="ico ico-fb"></span>Facebook</a></li>
                    <li><a href="#"><span class="ico ico-tw"></span>Twitter</a></li>
                    <li><a href="#"><span class="ico ico-gp"></span>Google+</a></li>
                    <li><a href="#"><span class="ico ico-pi"></span>Pinterest</a></li>
                </ul>
            </div>
            <div class="col contact">
                <h3>Contact us</h3>
                <p>Diana’s Jewelry INC.<br>54233 Avenue Street<br>New York</p>
                <p><span class="ico ico-em"></span><a href="#">contact@dianasjewelry.com</a></p>
                <p><span class="ico ico-ph"></span>(590) 423 446 924</p>
            </div>
            <div class="col newsletter">
                <h3>Join our newsletter</h3>
                <p>Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium.</p>
                <form action="#">
                    <input type="text" placeholder="Your email address...">
                    <button type="submit"></button>
                </form>
            </div>
        </div>
        <p class="copy">Copyright 2019 Jewelry. All rights reserved.</p>
    </div>
    <!-- / container -->
</footer>
<!-- / footer -->




<div id="cart" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div style="padding: 15px;" class="modal-content">
            <h2>Корзина пуста</h2>
        </div>
    </div>
</div>

<div id="order" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div style="padding: 15px;" class="modal-content">

        </div>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
