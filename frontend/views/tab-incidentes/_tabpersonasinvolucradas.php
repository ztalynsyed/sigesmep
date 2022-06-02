<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TabPersonasInvolucradasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detalle de siniestros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tab-personas-involucradas-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'TIPO_IDENTIFICACION',
            'NUMERO_IDENTIFICACION',
            //'EDAD',
            //'GENERO',
            'CONDICION',
            //'PARTICIPANTE',
            //'CASCO',
            //'CINTURON',
            //'TIPO_VEHICULO', 
            //'TIPO_SERVICIO', 
            //'PLACA', 
            //'id',
            //'inci_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
