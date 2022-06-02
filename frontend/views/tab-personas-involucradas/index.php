<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TabPersonasInvolucradasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tab Personas Involucradas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tab-personas-involucradas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tab Personas Involucradas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'TIPO_IDENTIFICACION',
            'NUMERO_IDENTIFICACION',
            'EDAD',
            'GENERO',
            'CONDICION',
            //'TIPO_VEHICULO', 
            //'TIPO_SERVICIO', 
            //'PLACA', 
            //'PARTICIPANTE',
            //'CASCO',
            //'CINTURON',
            //'id',
            //'inci_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
