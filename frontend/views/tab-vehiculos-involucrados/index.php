<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TabVehiculosInvolucradosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tab Vehiculos Involucrados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tab-vehiculos-involucrados-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tab Vehiculos Involucrados', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_VEHICULOS',
            'ID_SERVICIO',
            'ID_TIPO',
            'PLACA',
            'SERVICIO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
