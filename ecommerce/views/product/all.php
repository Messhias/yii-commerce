<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;


$this->title = 'Todos os produtos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php foreach ($product as $key => $value): ?>

    	   <p>
    	   	<img src="<?=$value->ds_imagem ?>" class='img-responsive' width='200'>
    	   </p>

	    <p>
	    	<?=$value->ds_product; ?>
	    </p>
	    <p>
	    	
    		<code>R$ <?=$value->vl_product;?></code>
	    </p>

	    <p>
	    	<a href="<?=Url::toRoute(['product/','id'=>$value->cd_product]) ?>">Mais detalhes</a>
	    </p>

    <?php endforeach ?>

</div>
