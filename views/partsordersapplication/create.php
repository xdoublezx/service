<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Partsordersapplication */

$this->title = 'Добавить заказ на закуп запчастей';
$this->params['breadcrumbs'][] = ['label' => 'Закуп запчастей', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partsordersapplication-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
