<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TabAgentesProcesoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tab-agentes-proceso-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_AGENTE') ?>

    <?= $form->field($model, 'NOMBRES_APÉLLIDOS') ?>

    <?= $form->field($model, 'DISTRITO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
