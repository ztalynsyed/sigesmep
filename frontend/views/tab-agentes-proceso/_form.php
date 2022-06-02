<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TabAgentesProceso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tab-agentes-proceso-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NOMBRES_APÉLLIDOS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DISTRITO')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
