<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PartsordersapplicationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="partsordersapplication-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'application_id') ?>

    <?= $form->field($model, 'quickly') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'sum') ?>

    <?= $form->field($model, 'one_part') ?>

    <?php // echo $form->field($model, 'two_part') ?>

    <?php // echo $form->field($model, 'three_part') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
