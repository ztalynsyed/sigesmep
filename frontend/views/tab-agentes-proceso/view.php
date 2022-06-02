<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\TabAgentesProceso */

$this->title = $model->ID_AGENTE;
$this->params['breadcrumbs'][] = ['label' => 'Tab Agentes Procesos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tab-agentes-proceso-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_AGENTE], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_AGENTE], [
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
            'ID_AGENTE',
            'NOMBRES_APÉLLIDOS',
            'DISTRITO',
        ],
    ]) ?>

</div>
