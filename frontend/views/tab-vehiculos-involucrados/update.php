<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TabVehiculosInvolucrados */

$this->title = 'Update Tab Vehiculos Involucrados: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tab Vehiculos Involucrados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_VEHICULOS, 'url' => ['view', 'id' => $model->ID_VEHICULOS]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tab-vehiculos-involucrados-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
