<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TabIncidentesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Incidentes generados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tab-incidentes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <!--
    <p>
        <?= Html::a('Actualización de incidentes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    -->
    <!--<p>
        <?= Html::a('Generar Incidente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'ID_PROVINCIA',
            [
                'label' => 'Provincia',
                'attribute' => 'pROVINCIA.NOMBRE_PROVINCIA',
            ],
            //'ID_CAUSA',
            [
                'label' => 'Causal',
                'attribute' => 'cAUSA.DESCRIPCION_CAUSA',
            ],
            //'ID_SINIESTRO',
            [
                'label' => 'Tipo Siniestro',
                'attribute' => 'sINIESTRO.DESCRIPCION_SINIESTRO',
            ],
            //'ID_PARROQUIA',
            //'ID_CANTON',
            [
                'label' => 'Cantón registrado',
                'attribute' => 'cANTON.NOMBRE_CANTON',
            ],
            //'FECHA_INCIDENTE',
            //'HORA_INCIDENTE',
            //'DANOS_MATERIALES',
            //'ZONA',
            //'COORDENADA_X',
            //'COORDENADA_Y',
            //'DIRECCION',
            //'OBSERVACIONES',
            //'DESCRIPCION',
            //'ID_AGENTE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
