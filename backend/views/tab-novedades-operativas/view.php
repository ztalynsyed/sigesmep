<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TabNovedadesOperativas */

$this->title = $model->ID_NOVEDADES;
$this->params['breadcrumbs'][] = ['label' => 'Regresar a novedades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tab-novedades-operativas-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_NOVEDADES',
            'DISTRITO',
            'CANTON',
            'CONTRAFLUJOS',
            'EVENTOS_CUBIERTOS',
            'ORDENES_SERVICIO',
            'OPERATIVOS_INFORMALIDAD',
            'OPERATIVOS_TERMINAL',
            'UNIDADES_REVISADAS',
            'VEHICULOS_RETENIDOS',
            'VEHICULOS_LIBERADOS',
            'PERSONAS_APRENDIDAS',
            'SINIESTROS',
            'INCIDENTES',
            'ART_385',
            'ART_386',
            'ART_389_11',
            'ART_391_5',
            'ART_392_6',
            'OTROS_ARTICULOS',
            'JEFES_CONTROL',
            'AGENTES_CIVILES',
            'TANGOS',
            'MOTOCICLETAS',
            'MOTONETAS',
            'CONOS',
            'VALLAS',
            'SEPARADORES',
            'RADIOS_COMUNICACION',
        ],
    ]) ?>

</div>
