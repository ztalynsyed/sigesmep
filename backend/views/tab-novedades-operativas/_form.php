<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TabNovedadesOperativas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tab-novedades-operativas-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="panel panel-default">
        <div class="panel-heading"><h4 style="text-align: center;">Datos Generales</h4></div>
        <div class="panel-body">

    <div class="col-sm-2">
        <?= $form->field($model, 'DISTRITO')->textInput( ['readonly' => true]) ?>
    </div>

    <div class="col-sm-2">
        <?= $form->field($model, 'CANTON')->textInput( ['readonly' => true]) ?>
    </div>

    <div class="col-sm-2">
        <?= $form->field($model, 'CONTRAFLUJOS')->textInput(['readonly' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-3">
        <?= $form->field($model, 'EVENTOS_CUBIERTOS')->textInput(['readonly' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-3">
        <?= $form->field($model, 'ORDENES_SERVICIO')->textInput(['readonly' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-3">
        <?= $form->field($model, 'OPERATIVOS_INFORMALIDAD')->textInput(['required' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-3">
        <?= $form->field($model, 'VEHICULOS_RETENIDOS')->textInput(['required' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-3">
        <?= $form->field($model, 'VEHICULOS_LIBERADOS')->textInput(['required' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-3">
        <?= $form->field($model, 'PERSONAS_APRENDIDAS')->textInput(['required' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>
           
    </div>
    </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-default">
        <div class="panel-heading"><h4 style="text-align: center;"></i>OPERATIVOS TERMINAL TERRESTRE</h4></div>
        <div class="panel-body">
            
    <div class="col-sm-5">
        <?= $form->field($model, 'OPERATIVOS_TERMINAL')->textInput(['required' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-5">
        <?= $form->field($model, 'UNIDADES_REVISADAS')->textInput(['required' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>        
    </div>
    </div>
    </div>

    <div class="col-sm-3">
        <div class="panel panel-default">
        <div class="panel-heading"><h4 style="text-align: center;">SINIESTROS E INCIDENTES</h4></div>
        <div class="panel-body">
            
    <div class="col-sm-5">
        <?= $form->field($model, 'SINIESTROS')->textInput(['required' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-5">
        <?= $form->field($model, 'INCIDENTES')->textInput(['required' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>        
    </div>
    </div>
    </div>

    <div class="col-sm-5">
        <div class="panel panel-default">
        <div class="panel-heading"><h4 style="text-align: center;">CITACIONES POR ARTICULOS</h4></div>
        <div class="panel-body">
            
    <div class="col-sm-4">
        <?= $form->field($model, 'ART_385')->textInput(['readonly' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-4">
        <?= $form->field($model, 'ART_386')->textInput(['readonly' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>    

    <div class="col-sm-4">
        <?= $form->field($model, 'ART_389_11')->textInput(['readonly' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div> 

    <div class="col-sm-4">
        <?= $form->field($model, 'ART_391_5')->textInput(['readonly' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-4">
        <?= $form->field($model, 'ART_392_6')->textInput(['readonly' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-4">
        <?= $form->field($model, 'OTROS_ARTICULOS')->textInput(['readonly' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div> 


    </div>
    </div>
    </div>


    <div class="col-sm-12">
        <div class="panel panel-default">
        <div class="panel-heading"><h4 style="text-align: center;">RECURSOS Y MEDIOS LOGÍSTICOS</h4></div>
        <div class="panel-body">
            
    <div class="col-sm-2">
        <?= $form->field($model, 'JEFES_CONTROL')->textInput(['readonly' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-2">
        <?= $form->field($model, 'AGENTES_CIVILES')->textInput(['readonly' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-1">
        <?= $form->field($model, 'TANGOS')->textInput(['readonly' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-2">
        <?= $form->field($model, 'MOTOCICLETAS')->textInput(['readonly' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-2">
        <?= $form->field($model, 'MOTONETAS')->textInput(['readonly' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-1">
        <?= $form->field($model, 'CONOS')->textInput(['readonly' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-1">
        <?= $form->field($model, 'VALLAS')->textInput(['readonly' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-1">
        <?= $form->field($model, 'SEPARADORES')->textInput(['readonly' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-3">
        <?= $form->field($model, 'RADIOS_COMUNICACION')->textInput(['readonly' => true,'integerOnly' => true, 'maxlength = 1' =>true]) ?>
    </div>

    <div class="col-sm-12">
         <?= $form->field($model, 'usuario_actualizacion')->textInput(['readonly'=> true, 'value' => ''.Yii::$app->user->identity->username])?>
    </div>

    </div>
    </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
