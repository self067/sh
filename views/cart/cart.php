<!--<div id="cart-content">-->
<?php
use yii\helpers\Url;
//use yii\widgets\Breadcrumbs;
$this->title = 'Cart ';
$this->params['breadcrumbs'][] = [
//  'template' => "<li><b>{link}</b></li>\n", //  шаблон для этой ссылки
  'label' => 'Cart', // название ссылки
  'url' => ['/cart/open'] // сама ссылка
];

?>

    <?php
        if(isset($session['cart']) && $session['cart.totalQuantity']>0) {
    ?>

      <div id="body">
          <div class="container">
              <div id="content" class="full">
                  <div class="cart-table">
                      <table>
                          <tr>
                              <th class="items">Items</th>
                              <th class="price">Price</th>
                              <th class="qnt">Quantity</th>
                              <th class="total">Total</th>
                              <th class="delete"></th>
                          </tr>

                          <?php
                          foreach( $session['cart'] as $id => $product) {
//                            foreach( $session['cart'] as $id => $product) {
                          ?>

                          <tr>
                              <td class="items">
                                  <div class="image">
                                      <img width=150 src="/img/<?=$product['img']?>" alt="<?=$product['name']?>">
                                  </div>
                                  <h3><a href="#"><?=$product['name']?></a></h3>
                                  <p><?=$product['brief']?></p>
                              </td>
                              <td class="price">$<?=number_format($product['price'])?></td>
                              <td class="qnt"><?=$product['productQuantity']?>
<!--                                  <select><option>1</option><option>1</option></select>-->
                              </td>
                              <td class="total">$<?=number_format($product['price']*$product['productQuantity'])?></td>
                              <td class="delete" data-id="<?=$id?>" style="cursor: pointer;"><span class="ico-del"></span></td>
                          </tr>


                          <?php } ?>

                      </table>
                  </div>

                  <div class="total-count">
<!--                      <h4>Subtotal: $4 500.00</h4>-->
<!--                      <p>+shippment: $30.00</p>-->
                      <h4>Total items in cart: <strong class="total-quantity"><?=$_SESSION['cart.totalQuantity']?></strong></h4>
                      <h3>Total to pay: $<strong class="total-sum"><?=$_SESSION['cart.totalSum']?></strong></h3>
<!--                  //=Url::to(['cart/order', 'name'=> $product['link_name']]-->
                      <a href="<?=Url::to(['cart/order'] )?>" class="btn-grey">Finalize and pay</a>

                  </div>

              </div>
              <!-- / content -->
          </div>
          <!-- / container -->
      </div>
      <!-- / body -->
          <!--//???-->
          <!--//???-->

<?php } else{ ?>
<div class="container">
  <div class="order-status">
    <h2>Ваша корзина пуста </h2>
  </div>
</div>

<?php
}
?>
<span id="total-q"><?=isset($_SESSION['cart.totalQuantity'])?$_SESSION['cart.totalQuantity']:0?></span>
<span id="total-s"><?=isset($_SESSION['cart.totalSum'])?$_SESSION['cart.totalSum']:0?></span>

<!--</div>-->
