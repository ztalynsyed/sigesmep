<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TabIncidentes */

$this->title = 'Actualizar incidente: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Incidnetes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actaulizar';
?>
<div class="tab-incidentes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelsTabPersonasInvolucradas' =>$modelsTabPersonasInvolucradas,
    ]) ?>

</div>
