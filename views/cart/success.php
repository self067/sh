<div class="order-status">

  <h2>Thanks for your order!</h2>
  <?php
  if(isset($session['cart']) && isset($_SESSION['cart.totalQuantity'])) {
//  if(isset($session['order']) ) {
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
                  </td>
                  <td class="total">$<?=number_format($product['price']*$product['productQuantity'])?></td>
                </tr>
              <?php } ?>

            </table>
          </div>

<!--          <div class="total-count">-->
            <h4>Total items in cart: <strong class="total-quantity"><?=$_SESSION['cart.totalQuantity']?></strong></h4>
            <h3>Total to pay: <strong class="total-sum"><?=$_SESSION['cart.totalSum']?></strong></h3>
            <a href="/" class="btn-grey">Return to Main Page</a>
<!--          </div>-->

        </div>
        <!-- / content -->
      </div>
      <!-- / container -->
    </div>
    <!-- / body -->

  <?php }
  $session->remove('cart');
  $session->remove('cart.totalSum');
  $session->remove('cart.totalQuantity');
  ?>
</div>
