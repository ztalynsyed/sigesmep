<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TabAgentesProcesoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tab Agentes Procesos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tab-agentes-proceso-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tab Agentes Proceso', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_AGENTE',
            'NOMBRES_APÉLLIDOS',
            'DISTRITO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
