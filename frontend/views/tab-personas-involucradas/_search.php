<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TabPersonasInvolucradasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tab-personas-involucradas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'TIPO_IDENTIFICACION') ?>

    <?= $form->field($model, 'NUMERO_IDENTIFICACION') ?>

    <?= $form->field($model, 'EDAD') ?>

    <?= $form->field($model, 'GENERO') ?>

    <?= $form->field($model, 'CONDICION') ?>

    <?php // echo $form->field($model, 'PARTICIPANTE') ?>

    <?php // echo $form->field($model, 'CASCO') ?>

    <?php // echo $form->field($model, 'CINTURON') ?>

    <?php // echo $form->field($model, 'id') ?>

    <?php // echo $form->field($model, 'inci_id') ?>
        
    <?php // echo $form->field($model, 'TIPO_VEHICULO') ?> 
 
    <?php // echo $form->field($model, 'TIPO_SERVICIO') ?> 
 
    <?php // echo $form->field($model, 'PLACA') ?> 

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
