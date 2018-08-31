<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Clients;
use app\models\Workers;
use app\models\Parts;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">
    <?php $form = ActiveForm::begin(); ?>
    <?php
    //Get Client ID AND Phone
    $this->registerJs("$('#orders-client_name').on('change',function(){
    $.ajax({
        url: '".yii\helpers\Url::toRoute("orders/returnclientid")."',
        dataType: 'json',
        method: 'GET',
        data: {clientname: $(this).val()},
        success: function (data, textStatus, jqXHR) {
            $('#orders-client_id').val(data.id);
            $('#orders-client_number').val(data.phone);
        },
        beforeSend: function (xhr) {
            ;
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log('An error occured!');
            alert('Error in ajax request');
        }
    });
});"); 
    //Get Master ID
    $this->registerJs("$('#orders-worker_name').on('change',function(){
    $.ajax({
        url: '".yii\helpers\Url::toRoute("orders/returnworkerid")."',
        dataType: 'json',
        method: 'GET',
        data: {name: $(this).val()},
        success: function (data, textStatus, jqXHR) {
            $('#orders-worker_id').val(data.worker_id);
        },
        beforeSend: function (xhr) {
            ;
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log('An error occured!');
            alert('Error in ajax request');
        }
    });
});"); 
    
    
    $model->mkdate=date("d:m:Y h:m:s"); ?>
    

    <?= $form->field($model, 'mkdate',['options'=>['class'=>'hidden']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'client_name')->dropDownList(ArrayHelper::map(Clients::find()->asArray()->all(),'full_name','full_name'),
            [
                'prompt' => 'Выберите клиента'
     
            ]) ?>

    <?= $form->field($model, 'client_id',['options'=>['class'=>'hidden']])->textInput()?>

    <?= $form->field($model, 'client_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'В Работе' => 'В Работе', 'Выполнено' => 'Выполнено', 'Частично забрали' => 'Частично забрали', 'Забрали полностью' => 'Забрали полностью', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'date_zabrali',['options'=>['class'=>'hidden']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remont_type')->dropDownList([ 'Гарантия' => 'Гарантия', 'Платный Ремонт' => 'Платный Ремонт', 'Срочный' => 'Срочный', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Errors')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'worker_name')->dropDownList(ArrayHelper::map(Workers::find()->asArray()->all(),'worker_name','worker_name'),
            [
                'prompt' => 'Выберите Мастера'
     
            ]);?>

    <?= $form->field($model, 'worker_id',['options'=>['class'=>'hidden']])->textInput() ?>

    <?= $form->field($model, 'works_list')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'part1')->dropDownList(ArrayHelper::map(Parts::find()->asArray()->all(),'part_art','part_art'),
            [
                'prompt' => 'Выберите запчасть'
     
            ]);?>

    <?= $form->field($model, 'part1_price')->textInput() ?>

    <?= $form->field($model, 'part2',['options'=>['class'=>'hidden']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'part2_price',['options'=>['class'=>'hidden']])->textInput(['class'=>'hidden']) ?>

    <?= $form->field($model, 'part3',['options'=>['class'=>'hidden']])->textInput(['maxlength' => true,'class'=>'hidden']) ?>

    <?= $form->field($model, 'part3_price',['options'=>['class'=>'hidden']])->textInput(['class'=>'hidden']) ?>

    <?= $form->field($model, 'pars_price')->textInput() ?>

    <?= $form->field($model, 'works_price')->textInput() ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'selfcoast',['options'=>['class'=>'hidden']])->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Далее', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    
</div>
