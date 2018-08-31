<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WorkersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'worker_id') ?>

    <?= $form->field($model, 'worker_email') ?>

    <?= $form->field($model, 'worker_phone') ?>

    <?= $form->field($model, 'worker_name') ?>

    <?= $form->field($model, 'workers_login') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сброс', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
