<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Partsordersapplication */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="partsordersapplication-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'quickly')->dropDownList([ 'Срочно' => 'Срочно', 'Не срочно' => 'Не срочно', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Заявка Создана' => 'Заявка Создана', 'Заявка закрыта' => 'Заявка закрыта', '' => '', ], ['prompt' => 'Статус заявки']) ?>

    <?= $form->field($model, 'sum')->textInput() ?>

      <?= $form->field($model, 'one_part')->dropDownList(ArrayHelper::map(app\models\Parts::find()->asArray()->all(),'part_art','part_art'),
            [
                'prompt' => 'Выберите запчасть'
     
            ]) ?>

      <?= $form->field($model, 'two_part')->dropDownList(ArrayHelper::map(app\models\Parts::find()->asArray()->all(),'part_art','part_art'),
            [
                'prompt' => 'Выберите запчасть'
     
            ]) ?>

      <?= $form->field($model, 'three_part')->dropDownList(ArrayHelper::map(app\models\Parts::find()->asArray()->all(),'part_art','part_art'),
            [
                'prompt' => 'Выберите запчасть'
     
            ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Далее', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
