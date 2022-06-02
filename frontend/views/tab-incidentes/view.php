<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\TabIncidentes */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Incidentes de Tránsito', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tab-incidentes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'id',
            [
                'label' => 'Provincia registrada',
                'attribute' => 'pROVINCIA.NOMBRE_PROVINCIA',
            ],
            [
                'label' => 'Causal',
                'attribute' => 'cAUSA.DESCRIPCION_CAUSA',
            ],
            [
                'label' => 'Tipo de siniestro',
                'attribute' => 'sINIESTRO.DESCRIPCION_SINIESTRO',
            ],
            [
                'label' => 'Parroquia registrada',
                'attribute' => 'pARROQUIA.NOMBRE_PARROQUIA',
            ],
            [
                'label' => 'CantóN registrado',
                'attribute' => 'cANTON.NOMBRE_CANTON',
            ],
           
            'FECHA_INCIDENTE',
            'HORA_INCIDENTE',
            'DANOS_MATERIALES',
            'ZONA',
            'COORDENADA_X',
            'COORDENADA_Y',
            'DIRECCION',
            'OBSERVACIONES',
            'DESCRIPCION',
            
        ],
    ]) ?>

</div>
