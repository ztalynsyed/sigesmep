<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TabNovedadesOperativasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Novedades operativas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tab-novedades-operativas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Ingresar nueva novedad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_NOVEDADES',
            'DISTRITO',
            'CANTON',
            'CONTRAFLUJOS',
            'EVENTOS_CUBIERTOS',
            //'ORDENES_SERVICIO',
            //'OPERATIVOS_INFORMALIDAD',
            //'OPERATIVOS_TERMINAL',
            //'UNIDADES_REVISADAS',
            //'VEHICULOS_RETENIDOS',
            //'VEHICULOS_LIBERADOS',
            //'PERSONAS_APRENDIDAS',
            //'SINIESTROS',
            //'INCIDENTES',
            //'ART_385',
            //'ART_386',
            //'ART_389_11',
            //'ART_391_5',
            //'ART_392_6',
            //'OTROS_ARTICULOS',
            //'JEFES_CONTROL',
            //'AGENTES_CIVILES',
            //'TANGOS',
            //'MOTOCICLETAS',
            //'MOTONETAS',
            //'CONOS',
            //'VALLAS',
            //'SEPARADORES',
            //'RADIOS_COMUNICACION',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
