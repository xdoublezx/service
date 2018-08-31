<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */

$this->title = $model->order_number;
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->order_number], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->order_number], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'mkdate',
            'order_number',
            'client_name',
            'client_id',
            'client_number',
            'work_name',
            'status',
            'date_zabrali',
            'remont_type',
            'Errors',
            'worker_name',
            'worker_id',
            'works_list',
            'part1',
            'part1_price',
            'part2',
            'part2_price',
            'part3',
            'part3_price',
            'pars_price',
            'works_price',
            'cost',
            'selfcoast',
        ],
    ]) ?>

</div>
