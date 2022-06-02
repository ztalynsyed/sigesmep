<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\TabVehiculosInvolucrados */

$this->title = $model->ID_VEHICULOS;
$this->params['breadcrumbs'][] = ['label' => 'Tab Vehiculos Involucrados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tab-vehiculos-involucrados-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_VEHICULOS], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_VEHICULOS], [
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
            'ID_VEHICULOS',
            'ID_SERVICIO',
            'ID_TIPO',
            'PLACA',
            'SERVICIO',
        ],
    ]) ?>

</div>
