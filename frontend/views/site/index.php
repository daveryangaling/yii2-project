<?php

use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = Yii::$app->name . ' - My Portfolio';
?>
<div class="site-index">
   
    <div class="p-5 mb-4 bg-transparent rounded-3">
        <div class="container-fluid py-5 text-center">
        <?= Html::img('@web/images/avatar-r.png', [
            'alt' => Yii::t('app', 'My profile photo'),
            'class' => 'side-index__photo',
            ]) ?>
            <h1 class="site-index__h1"><?= Yii::t('app', 'Hi my name is Dave Ryan') ?></h1>
            <p class="lead"> <?= Yii::t('app', 'Passionate to learn Yii 2 Framework and Projects') ?></p>
            <p>
                <?= Html::a(Yii::t('app', 'See my work'), ['/project'],['class' => 'btn btn-primary']) ?>
            </p>
        </div>
    </div>

</div>
