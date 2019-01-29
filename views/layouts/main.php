<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

$this->registerLinkTag([
    'rel' => 'shortcut icon',
    'type' => 'image/x-icon',
    'href' => '/web/favicon.ico',
]);

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;


//$controller = Yii::$app->controller;
//$default_controller = Yii::$app->defaultRoute;
//$isHome = (($controller->id === $default_controller) && ($controller->action->id === $controller->defaultAction)) ? true : false;

$isHome = false;
//if(Yii::$app->controller->id==Yii::$app->defaultController
//   && Yii::$app->controller->action->id==Yii::$app->controller->defaultAction)


if( Yii::$app->controller->id=='cart' &&  Yii::$app->controller->action->id=='index')    $isHome = true;

AppAsset::register($this);
$this->beginPage();
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody();?>

<header id="header">
    <div class="container">
        <a href="/" id="logo" title="Diana’s jewelry">Diana’s jewelry</a>
        <div class="right-links">
            <ul>
                <li><a href="<?=Url::to(['cart/open'] )?>" id="cart" class="cart menu-quantity"><span class="ico-products"></span><?=isset($_SESSION['cart.totalQuantity']) ? $_SESSION['cart.totalQuantity'] : 0?> products, $<?=isset($_SESSION['cart.totalSum']) ? $_SESSION['cart.totalSum'] : 0?></a></li>

                <li><a href="#"><span class="ico-account"></span>Account</a></li>
                <li><a href="#"><span class="ico-signout"></span>Sign out</a></li>
            </ul>
        </div>
    </div>
    <!-- / container -->
</header>
<!-- / header -->

<!--    <div id="cont">-->


<!--<div class="container">-->
<?php if( $isHome){?>
    <div id="breadcrumbs">
        <div class="container">
            <ul>
<!--                <li><a href="/">Home</a></li>-->
                <li>
                  <?= Breadcrumbs::widget([
                    'homeLink' => ['label' => 'HOME', 'url' => '/'],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                  ]) ?>

                </li>
            </ul>
        </div>
        <!-- / container -->
    </div>
<?php }?>
<!-- / body -->

  <?= $content ?>

<!--    </div>-->

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
<!--      <h2>Корзина пуста</h2>-->
    </div>
  </div>
</div>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage() ?>
