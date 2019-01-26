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
    $products = new Product();
    $products = $products->getProductsCategory($cat);
    return $this->render('view', compact('products'));
  }

  public function actionSearch() {
    $search = htmlspecialchars(Yii::$app->request->get('search'));
    $product = new Product();
    $product = $product->getSearchResults($search);
    return $this->render('search', compact('product', 'search'));
  }
}
