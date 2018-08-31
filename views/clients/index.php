<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Clients;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClientsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Клиенты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clients-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить клиента', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           //'client_id',
            'full_name',
            'phone_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php $modelka = new Clients();
    echo $modelka->modelka();
    ?>
</div>
