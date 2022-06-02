<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TabVehiculosInvolucrados */

$this->title = 'Create Tab Vehiculos Involucrados';
$this->params['breadcrumbs'][] = ['label' => 'Tab Vehiculos Involucrados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tab-vehiculos-involucrados-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
