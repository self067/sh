<?php

namespace app\controllers;
use app\models\Product;
use app\models\Cart;
use Yii;
//use app\models\OrderGood;
use app\models\Order;
use yii\web\Controller;

class CartController extends Controller
{
  public function actionOrder() {
    $session = Yii::$app->session;
    $session->open();
    $order = new Order();
    if( isset( $session['cart.totalQuantity'])){
    if( $order->load(Yii::$app->request->post())){
      $order->date = date('Y-m-d H:i:s');
      $order->sum = $session['cart.totalSum'];

      if($order->save()) {
        Yii::$app->mailer->compose()
          ->setFrom(['diana@jktu.ru'=> 'Dianas Jewelry'])
          ->setTo($order['email'])
          ->setSubject('Ваш заказ принят')
          ->send();
//        $session['order'] = $session['cart'];
//        $session->remove('cart');
//        $session->remove('cart.totalSum');
//        $session->remove('cart.totalQuantity');
        return $this->render('success', compact('session', 'order'));
      }
    }
    }else return $this->goHome();
//    $this->layout = 'empty-layout';
    return $this->render('order', compact('session', 'order'));
  }

  public function actionDelete($id) {
    $session = Yii::$app->session;
    $session->open();
    $cart = new Cart();
    $cart->removeFromCart($id);
    return $this->renderPartial('cart', compact('id', 'session'));
  }

  public function actionClear() {
    $session = Yii::$app->session;
    $session->open();
    $session->remove('cart');
    $session->remove('cart.totalSum');
    $session->remove('cart.totalQuantity');
    return $this->renderPartial('cart', compact('session'));
  }

  public function actionOpen() {
    $session = Yii::$app->session;
    $session->open();

    return $this->render('cart', compact('product', 'session'));
//    return $this->renderPartial('cart', compact('session'));
  }
  public function actionAdd($name) {
    $product = new Product();
    $product = $product->getOneProduct($name);
    $session = Yii::$app->session;
    $session->open();
    $cart = new Cart();
    $cart->addToCart($product);
    return $this->renderPartial('cart', compact('product', 'session'));
  }
}