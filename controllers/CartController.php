<?php

namespace app\controllers;
use app\models\Product;
use app\models\Cart;
use Yii;
use yii\helpers\Url;
//use app\models\OrderGood;
use app\models\Order;
use yii\web\Controller;

class CartController extends Controller
{
  public function actionOrder() {
    $session = Yii::$app->session;
    $session->open();
    if(!$session['cart.totalSum']){
      return Yii::$app->response->redirect(Url::to('/'));
//      return $this->goHome();
    }

    $order = new Order();

    if( $order->load(Yii::$app->request->post())){
      $order->date = date('Y-m-d H:i:s');
      $order->sum = $session['cart.totalSum'];

      if($order->save()) {
        Yii::$app->mailer->compose('order-mail', ['session'=>$session, 'order'=>$order])
          ->setFrom(['self67@list.ru'=> 'Dianas Jewelry'])
          ->setTo($order['email'])
          ->setSubject('Ваш заказ №'.$order->id.' принят')
          ->send();
        return $this->render('success', compact('session', 'order'));
      }
    }

//    $this->layout = 'empty-layout';
    return $this->render('order', compact('session', 'order'));
  }

  protected function saveOrderInfo() {

  }

  public function actionDelete($id) {
    $session = Yii::$app->session;
    $session->open();
    $cart = new Cart();
    $cart->removeFromCart($id);
//    $this->layout = 'empty-layout';
    return $this->renderPartial('cart', compact('session', 'id'));
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

    return $this->render('cart', compact('session'));
//    return $this->renderPartial('cart', compact('session'));
  }
  public function actionAdd($name) {
    $product = new Product();
    $product = $product->getOneProduct($name);
    $session = Yii::$app->session;
    $session->open();
    $cart = new Cart();
    $cart->addToCart($product);
//    $this->layout = 'empty-layout';
    return $this->renderPartial('cart', compact('product', 'session'));
  }
}