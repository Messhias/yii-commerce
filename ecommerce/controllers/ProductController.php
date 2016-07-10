<?php 

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\helpers\Html;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Product;

class ProductController extends Controller
{
	public function actionIndex($id = ''){

		$allProducts = array('product'=>Product::productsPage());


		switch ($id) {
			case !is_null($id):
				return $this->actionViewProduct($id);
			break;
			
			default:
				return $this->render('all',$allProducts);
			break;
		}
	}

	private function actionViewProduct($id = ''){
		$product = array('product'=>Product::view($id));
		return $this->render('productDetail',$product);
	}

	public function AddToCart(){
		return 'oi';
	}
}
 ?>