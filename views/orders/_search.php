<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrdersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'mkdate') ?>

    <?= $form->field($model, 'order_number') ?>

    <?= $form->field($model, 'client_name') ?>

    <?= $form->field($model, 'client_id') ?>

    <?= $form->field($model, 'client_number') ?>

    <?php // echo $form->field($model, 'work_name') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'date_zabrali') ?>

    <?php // echo $form->field($model, 'remont_type') ?>

    <?php // echo $form->field($model, 'Errors') ?>

    <?php // echo $form->field($model, 'worker_name') ?>

    <?php // echo $form->field($model, 'worker_id') ?>

    <?php // echo $form->field($model, 'works_list') ?>

    <?php // echo $form->field($model, 'part1') ?>

    <?php // echo $form->field($model, 'part1_price') ?>

    <?php // echo $form->field($model, 'part2') ?>

    <?php // echo $form->field($model, 'part2_price') ?>

    <?php // echo $form->field($model, 'part3') ?>

    <?php // echo $form->field($model, 'part3_price') ?>

    <?php // echo $form->field($model, 'pars_price') ?>

    <?php // echo $form->field($model, 'works_price') ?>

    <?php // echo $form->field($model, 'cost') ?>

    <?php // echo $form->field($model, 'selfcoast') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
