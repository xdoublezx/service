<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить заказ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'rowOptions'=>function($model){
            if($model->status == "Выполнено"){
                return ['class' => 'success'];
            }
            if($model->status == "Забрали"){
                return ['class'=>'info'];
            }
           if($model->remont_type == "Срочный"){
                return ['class'=>'danger'];
            }
    },
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'mkdate',
            'order_number',
            'client_name',
//            'client_id',
//            'client_number',
            'work_name',
            'status',
//            'date_zabrali',
            'remont_type',
//            'Errors',
            'worker_name',
//            'worker_id',
//            'works_list',
//            'part1',
//            'part1_price',
//            'part2',
//            'part2_price',
//            'part3',
//            'part3_price',
            'pars_price',
//            'works_price',
            'cost',
            'selfcoast',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
