<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Workers */

$this->title = 'Изменить сотрудника: '.$model->worker_name;
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->worker_name, 'url' => ['view', 'id' => $model->worker_id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="workers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
