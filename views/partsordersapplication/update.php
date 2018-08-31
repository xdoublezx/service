<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Partsordersapplication */

$this->title = 'Update Partsordersapplication: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Partsordersapplications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->application_id, 'url' => ['view', 'id' => $model->application_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="partsordersapplication-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
