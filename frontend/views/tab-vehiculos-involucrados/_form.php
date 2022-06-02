<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TabVehiculosInvolucrados */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tab-vehiculos-involucrados-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_SERVICIO')->textInput() ?>

    <?= $form->field($model, 'ID_TIPO')->textInput() ?>

    <?= $form->field($model, 'PLACA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SERVICIO')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
