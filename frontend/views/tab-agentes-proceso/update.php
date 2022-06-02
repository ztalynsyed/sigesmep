<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TabAgentesProceso */

$this->title = 'Update Tab Agentes Proceso: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tab Agentes Procesos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_AGENTE, 'url' => ['view', 'id' => $model->ID_AGENTE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tab-agentes-proceso-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
