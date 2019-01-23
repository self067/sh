<?php
use yii\helpers\Url;
?>

<nav id="menu">
    <div class="container">
        <div class="trigger"></div>
        <ul>
            <li><a href="products.html">New collection</a></li>

	    <?php foreach( $data as $cat) {?>

            <li><a href="<?=Url::to(['category/view', 'cat'=>$cat['cat_name']])?>"><?=$cat['browser_name']?></a></li>

	    <?php } ?>

        </ul>
    </div>
    <!-- / container -->
</nav>
<!-- / navigation -->
