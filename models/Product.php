<?php
/**
 * Created by PhpStorm.
 * User: ok
 * Date: 15.01.2019
 * Time: 12:48
 */

namespace app\models;
use yii\db\ActiveRecord;
use yii;

class Product extends ActiveRecord
{
  public static function tableName()
  {
    return 'product';
  }
  public function getAllProducts() {
    $products = Yii::$app->cache->get('products');
    if(!$products) {
      $products = Product::find()->asArray()->orderBy(['id'=>SORT_DESC])->limit(10)->all();
      Yii::$app->cache->set('products', $products, 120);
    }
    return $products;
  }

  public function getProductsCategory($id) {
    $catProducts = Product::find()->where(['category' => $id])->asArray()->all();
    return $catProducts;
  }

  public function getSearchResults($search) {
    $searchResults = Product::find()->where(['like', 'name', $search])->asArray()->all();
    return $searchResults;
  }

  public function getOneProduct($name) {
    return Product::find()->where(['link_name' => $name])->one();
  }



}