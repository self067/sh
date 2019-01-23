<?php

namespace app\controllers;
use app\models\Product;
use yii\web\Controller;

class ProductController extends Controller
{
  public function actionIndex($name) {
    $product = new Product();
    $product = $product->getOneProduct($name);
    return $this->render('index', compact('product'));
  }

}