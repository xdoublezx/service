<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PartsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Parts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function ($model, $key, $index, $grid) {
    if($model->quantity<5){return ['class' => 'danger'];}
    if($model->quantity>10 && $model->quantity<20){return ['class' => 'warning'];}
    if($model->quantity>20 && $model->quantity<40){return ['class' => 'info'];}
    if($model->quantity>40 && $model->quantity<100){return ['class' => 'success'];}
    
},
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'part_id',
            //'brand_id',
            'brand_name',
            'part_name',
            'part_art',
            'quantity',
           'purchase_price',
            'realization_price',
            'text:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
