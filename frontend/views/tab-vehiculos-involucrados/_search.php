<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TabVehiculosInvolucradosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tab-vehiculos-involucrados-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_VEHICULOS') ?>

    <?= $form->field($model, 'ID_SERVICIO') ?>

    <?= $form->field($model, 'ID_TIPO') ?>

    <?= $form->field($model, 'PLACA') ?>

    <?= $form->field($model, 'SERVICIO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
