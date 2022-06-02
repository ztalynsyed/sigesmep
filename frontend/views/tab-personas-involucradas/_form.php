<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TabPersonasInvolucradas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tab-personas-involucradas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TIPO_IDENTIFICACION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NUMERO_IDENTIFICACION')->textInput() ?>

    <?= $form->field($model, 'EDAD')->textInput() ?>

    <?= $form->field($model, 'GENERO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CONDICION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PARTICIPANTE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CASCO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CINTURON')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inci_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
