<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TabIncidentesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tab-incidentes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ID_PROVINCIA') ?>

    <?= $form->field($model, 'ID_CAUSA') ?>

    <?= $form->field($model, 'ID_SINIESTRO') ?>

    <?= $form->field($model, 'ID_PARROQUIA') ?>

    <?php // echo $form->field($model, 'ID_CANTON') ?>

    <?php // echo $form->field($model, 'FECHA_INCIDENTE') ?>

    <?php // echo $form->field($model, 'HORA_INCIDENTE') ?>

    <?php // echo $form->field($model, 'DANOS_MATERIALES') ?>

    <?php // echo $form->field($model, 'ZONA') ?>

    <?php // echo $form->field($model, 'COORDENADA_X') ?>

    <?php // echo $form->field($model, 'COORDENADA_Y') ?>

    <?php // echo $form->field($model, 'DIRECCION') ?>

    <?php // echo $form->field($model, 'OBSERVACIONES') ?>

    <?php // echo $form->field($model, 'DESCRIPCION') ?>

    <?php // echo $form->field($model, 'ID_AGENTE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
