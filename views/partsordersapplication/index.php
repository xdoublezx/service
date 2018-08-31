<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PartsordersapplicationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заказ на закуп запчастей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partsordersapplication-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить заказ на закуп', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options'=>['tag'=>'div', 'class'=>'col-lg-12'],
        'rowOptions'=>function($model){
            if($model->status == "Заявка Создана" && $model->quickly=="Срочно"){
                return ['class' => 'danger'];
            }
            if($model->status == "Заявка Создана" && $model->quickly=="Не Срочно"){
                return ['class' => 'info'];
            }
             if($model->status == "Заявка закрыта"){
                return ['class' => 'success'];
            
        }},
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

                        [
                'attribute' => 'application_id',
                'contentOptions' => ['class' => 'text-1center','name'=>'ODInN','onclick'=>"alert('helo')"]
            ],
            'quickly',
            'status',
            'sum',
            'one_part',
            'two_part',
            'three_part',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
