<!--<h2 style="padding: 10px; text-align: center">Корзина</h2>-->
<?php use yii\helpers\Url;
$this->title = 'Cart ';
?>

      <div id="breadcrumbs">
          <div class="container">
              <ul>
                  <li><a href="#">Home</a></li>
                  <li>Cart</li>
              </ul>
          </div>
          <!-- / container -->
      </div>
      <!-- / body -->

    <?php
        if(is_array($session['cart'])) {
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
<!--                                  <td class="delete" data-id="--><?//=$id?><!--" style="text-align: center; cursor: pointer; vertical-align: middle; color: red"><span>&#10006;</span></td>-->

                          <?php } ?>

                      </table>
                  </div>

                  <div class="total-count">
<!--                      <h4>Subtotal: $4 500.00</h4>-->
<!--                      <p>+shippment: $30.00</p>-->
                      <h4>Total items in cart: <strong><?=$_SESSION['cart.totalQuantity']?></strong></h4>
                      <h3>Total to pay: <strong><?=$_SESSION['cart.totalSum']?></strong></h3>
                      <a href="<?=Url::to(['cart/order', 'name'=> $product['link_name']] )?>" class="btn-grey">Finalize and pay</a>

                  </div>

              </div>
              <!-- / content -->
          </div>
          <!-- / container -->
      </div>
      <!-- / body -->

<!--    <td class="total-quantity text-align-right">--><?//=$session['cart.totalQuantity']?><!--</td>-->


<?php } else{ ?>
<h3>Ваша корзина пуста </h3>
<!--<button type="button" class="btn btn-secondary btn-close" style="width: 200px;">Начать покупки</button>-->
<?php
}
?>