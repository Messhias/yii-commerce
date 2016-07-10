<?php
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Loja virtual';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Loja virtual!</h1>

        <p class="lead">Veja os destaques abaixo:</p>
    </div>

    <div class="body-content">

        <div class="row">
            <?php foreach ($products as $key => $value): ?>
            <div class="col-lg-4">
                <h2><?=$value->nm_product ?></h2>
                <p><?=$value->ds_product ?></p>
                <p>
                    <img src="<?=$value->ds_imagem ?>" class='img-responsive'>
                </p>
                <p><a class="btn btn-default" href="<?=Url::toRoute(['product/','id'=>$value->cd_product]) ?>">Mais detalhes</a></p>
            </div>
            <?php endforeach ?>

        </div>

    </div>
</div>
