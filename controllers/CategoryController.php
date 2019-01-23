<?php

namespace app\controllers;
use app\models\Product;
use yii\web\Controller;
use Yii;

class CategoryController extends Controller
{
  public function actionIndex() {
    $products = new Product();
    $products = $products->getAllProducts();
    return $this->render('index', compact('products'));
  }

  public function actionView($cat) {
    $product = new Product();
    $product = $product->getProductsCategory($cat);
    return $this->render('view', compact('product'));
  }

  public function actionSearch() {
    $search = htmlspecialchars(Yii::$app->request->get('search'));
    $product = new Product();
    $product = $product->getSearchResults($search);
    return $this->render('search', compact('product', 'search'));
  }

}