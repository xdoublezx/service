<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Workers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'worker_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'workers_login')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton("Сохранить", ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
