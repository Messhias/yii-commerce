<?php

namespace app\models;


class Product extends \yii\db\ActiveRecord{

	public static function getDb(){
		return \Yii::$app->db;
	}

	public static function tableName(){
		return 'tb_product';
	}

	public static function all(){
		$params = array(
			'limit'=>3
		);
		return Product::find($params)->all();
	}

	public static function view($id = ''){
		$params = array(
			'limit'=>1
		);

		return Product::find($params)->where(['cd_product'=>$id])->all();
	}

	public static function productsPage(){
		return Product::find()->all();
	}


}