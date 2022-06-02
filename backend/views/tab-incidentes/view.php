<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TabIncidentes */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Registros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tab-incidentes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
            [
                'label' => 'Parroquia registrada',
                'attribute' => 'pARROQUIA.NOMBRE_PARROQUIA',
            ],
            [
                'label' => 'Cantón registrado',
                'attribute' => 'cANTON.NOMBRE_CANTON',
            ],
            //'ID_CANTON',
            'FECHA_INCIDENTE',
            'HORA_INCIDENTE',
            'DANOS_MATERIALES',
            'ZONA',
            'COORDENADA_X',
            'COORDENADA_Y',
            'DIRECCION',
            'OBSERVACIONES',
            'DESCRIPCION',
            //'ID_AGENTE',
            [
                'label' => 'Agente responsable',
                'attribute' => 'aGENTE.NOMBRES_APÉLLIDOS',
            ],
        ],
    ]) ?>
    <div class="form-group">
        <p><a class="btn btn-primary" href="/sigesmep/backend/web/index.php?r=tab-incidentes">Regresar a la página inicial</a></p>
    </div>

</div>
