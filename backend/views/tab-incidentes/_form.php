<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;
use dosamigos\datepicker\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use backend\models\TabProvincias;
use backend\models\TabTipoSiniestro;
use backend\models\TabCantones;
use backend\models\TabParroquias;
use backend\models\TabCausales;
use backend\models\TabAgentesProceso;
use kartik\time\TimePicker;


/* @var $this yii\web\View */
/* @var $model backend\models\TabIncidentes */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="tab-incidentes-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
        <?= $form->field($model, 'DESCRIPCION')->textInput(['readonly' => true, 'default', 'value' => 'SINIESTRO']) ?>

    <div class="col-sm-12">
         <?= $form->field($model, 'usuario_ingreso')->textInput(['readonly'=> true])?>
    </div>

    <div class="col-sm-4">
        <?= $form->field($model, 'ID_AGENTE')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(TabAgentesProceso::find()->all(),'ID_AGENTE','NOMBRES_APÉLLIDOS'), 
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccionar agente', 'disabled'=>'true'],
            'pluginOptions' => [
                'allowClear' => false
            ],
        ]);?>
    </div>


    
    <div class="col-sm-4">
        <?= $form->field($model, 'ID_PROVINCIA')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(TabProvincias::find()->all(),'ID_PROVINCIA','NOMBRE_PROVINCIA'), 
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccionar provincia','disabled'=>'true'],
            'pluginOptions' => [
                'allowClear' => false
            ],
        ]);?>
    </div>

    <div class="col-sm-4">
        <?= $form->field($model, 'ID_CANTON')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(TabCantones::find()->all(),'ID_CANTON','NOMBRE_CANTON'), 
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccionar cantón','disabled'=>'true'],
            'pluginOptions' => [
                'allowClear' => false
            ],
        ]);?>
    </div>

    <div class="col-sm-6">
        <?= $form->field($model, 'ID_PARROQUIA')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(TabParroquias::find()->all(),'ID_PARROQUIA','NOMBRE_PARROQUIA'), 
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccionar parroquia'],
            'pluginOptions' => [
                'allowClear' => false
            ],
        ]);?>
    </div>
    

    <div class="col-sm-6">
        <?= $form->field($model, 'ID_SINIESTRO')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(TabTipoSiniestro::find()->all(),'ID_SINIESTRO','DESCRIPCION_SINIESTRO'), 
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccionar tipo siniestro','disabled'=>'true'],
            'pluginOptions' => [
                'allowClear' => false
            ],
        ]);?>
    </div>
   


    <?= $form->field($model, 'ID_CAUSA')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(TabCausales::find()->all(),'ID_CAUSA','DESCRIPCION_CAUSA'), 
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccionar causa','disabled'=>'true'],
            'pluginOptions' => [
                'allowClear' => false
            ],
        ]);?>

    <div class="col-sm-3">
            <?= $form->field($model, 'FECHA_INCIDENTE')->textInput(['maxlength' => true, 'readonly' => true]) ?>
                
    </div>

    <div class="col-sm-3">
            <?= $form->field($model, 'HORA_INCIDENTE')->textInput(['maxlength' => true, 'readonly' => true]) ?>
    </div>

    <div class="col-sm-3">
            <?= $form->field($model, 'DANOS_MATERIALES')->textInput(['maxlength' => true, 'readonly' => true]) ?>
    </div>

        <div class="col-sm-3">
        <?= $form->field($model, 'ZONA')->textInput(['maxlength' => true, 'readonly' => true]) ?>
    </div>

    <div class="col-sm-4">
        <?= $form->field($model, 'COORDENADA_X')->textInput(['required' => true,'maxlength' => true]) ?>
    </div>
    <div class="col-sm-4">
        <?= $form->field($model, 'COORDENADA_Y')->textInput(['required' => true,'maxlength' => true, 'step=0.01' =>true]) ?>
    </div>
    <div class="col-sm-4">
        <?= $form->field($model, 'DIRECCION')->textInput(['required' => true,'maxlength' => true,'style'=>"text-transform:uppercase"]) ?>
    </div>

    <div class="col-sm-12">
        <?= $form->field($model, 'OBSERVACIONES')->textInput(['maxlength' => true,'readonly' => true,'style'=>"text-transform:uppercase"]) ?>
    </div>

    <div class="col-sm-12">
         <?= $form->field($model, 'observacion_actualizacion')->textInput(['required' => true,'maxlength' => true,'style'=>"text-transform:uppercase"])?>
    </div>

    <div class="col-sm-12">
         <?= $form->field($model, 'usuario_actualizacion')->textInput(['readonly'=> true, 'value' => ''.Yii::$app->user->identity->username])?>
    </div>



    <div class="form-group">
        <?= Html::submitButton('Actualizar y guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
