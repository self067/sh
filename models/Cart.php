<?php
/**
 * Created by PhpStorm.
 * User: sel
 * Date: 16.01.2019
 * Time: 19:24
 */

namespace app\models;
use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
  public function addToCart($product) {

    if(isset($_SESSION['cart'][$product->id])){
      $_SESSION['cart'][$product->id]['productQuantity'] += 1;
    } else{
      $_SESSION['cart'][$product->id] = [
        'productQuantity' => 1,
        'name' => $product['name'],
        'price' => $product['price'],
        'img' => $product['img'],
         'brief' => $product['brief'],
    ];
    }
    $_SESSION['cart.totalQuantity'] = isset($_SESSION['cart.totalQuantity'])?
      $_SESSION['cart.totalQuantity']+1:1;
    $_SESSION['cart.totalSum'] = isset($_SESSION['cart.totalSum'])?
      $_SESSION['cart.totalSum']+$product->price:$product->price;
  }

  public function removeFromCart($id) {
    $quantity = isset($_SESSION['cart'][$id]['productQuantity'])?$_SESSION['cart'][$id]['productQuantity']:0;
    $price = isset($_SESSION['cart'][$id]['price'])?$_SESSION['cart'][$id]['price'] * $quantity:0;
    $_SESSION['cart.totalQuantity']  -= $quantity;
    $_SESSION['cart.totalSum'] -= $price;

    unset($_SESSION['cart'][$id]);
  }
}