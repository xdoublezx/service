<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Workers;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WorkersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сотрудники (Мастера)';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить работника (Мастера)', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'worker_id',
            'worker_name',
            'worker_email:email',
            'worker_phone',

            //'workers_login',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    
    <script>
        Document.onload(Alert"Jhe");
    </script>
</div>
