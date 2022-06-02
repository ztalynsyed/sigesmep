<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;
use dosamigos\datepicker\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use frontend\models\TabProvincias;
use frontend\models\TabTipoSiniestro;
use frontend\models\TabCantones;
use frontend\models\TabParroquias;
use frontend\models\TabCausales;
use frontend\models\TabAgentesProceso;
use kartik\time\TimePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\TabIncidentes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tab-incidentes-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
        <?= $form->field($model, 'DESCRIPCION')->textInput(['readonly' => true,'default', 'value' => 'INCIDENTE DE TRÁNSITO']) ?>

    <div class="col-sm-4">
        <?= $form->field($model, 'ID_AGENTE')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(TabAgentesProceso::find()->all(),'ID_AGENTE','NOMBRES_APÉLLIDOS'), 
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccionar agente'],
            'pluginOptions' => [
                'allowClear' => false,
            ],
        ]);?>
    </div>


    
    <div class="col-sm-4">
        <?= $form->field($model, 'ID_PROVINCIA')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(TabProvincias::find()->all(),'ID_PROVINCIA','NOMBRE_PROVINCIA'), 
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccionar provincia'],
            'pluginOptions' => [
                'allowClear' => false,
            ],
        ]);?>
    </div>

    <div class="col-sm-4">
        <?= $form->field($model, 'ID_CANTON')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(TabCantones::find()->all(),'ID_CANTON','NOMBRE_CANTON'), 
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccionar cantón'],
            'pluginOptions' => [
                'allowClear' => false,
            ],
        ]);?>
    </div>

    <div class="col-sm-6">
        <?= $form->field($model, 'ID_PARROQUIA')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(TabParroquias::find()->all(),'ID_PARROQUIA','NOMBRE_PARROQUIA'), 
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccionar parroquia'],
            'pluginOptions' => [
                'allowClear' => false,
                'required' => true,
            ],
        ]);?>
    </div>
    

    <div class="col-sm-6">
        <?= $form->field($model, 'ID_SINIESTRO')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(TabTipoSiniestro::find()->all(),'ID_SINIESTRO','DESCRIPCION_SINIESTRO'), 
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccionar tipo incidente'],
            'pluginOptions' => [
                'allowClear' => false,
            ],
        ]);?>
    </div>
   


    <?= $form->field($model, 'ID_CAUSA')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(TabCausales::find()->all(),'ID_CAUSA','DESCRIPCION_CAUSA'), 
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccionar causa'],
            'pluginOptions' => [
                'allowClear' => false
            ],
        ]);?>

    <div class="row">
        <div class="panel panel-default">
        <div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i> VEHÍCULOS Y PERSONAS INVOLUCRADAS</h4></div>
        <div class="panel-body">
             <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 6, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $modelsTabPersonasInvolucradas[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'NUMERO_IDENTIFICACION',
                    'TIPO_IDENTIFICACION',
                    'GENERO',
                    'CONDICION',
                    'CASCO',
                    'EDAD',
                    'PARTICIPANTE',
                    'CINTURON',
                    'TIPO_VEHICULO', 
                    'TIPO_SERVICIO', 
                    'PLACA', 
                ],
            ]); ?>

            <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($modelsTabPersonasInvolucradas as $i => $modelTabPersonasInvolucradas): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left">Personas</h3>
                        <div class="pull-right">
                            <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            if (! $modelTabPersonasInvolucradas->isNewRecord) {
                                echo Html::activeHiddenInput($modelTabPersonasInvolucradas, "[{$i}]id");
                            }
                        ?>
                        
                        <div class="row">
                            <div class="col-sm-2">
                                <?= $form->field($modelTabPersonasInvolucradas, "[{$i}]NUMERO_IDENTIFICACION")->textInput(['required' => true,'maxlength=10' => true,'integerOnly' => true]) ?>
                            </div>
                            <div class="col-sm-3">
                                <?= $form->field($modelTabPersonasInvolucradas, "[{$i}]TIPO_IDENTIFICACION")->dropDownList( ['CÉDULA' => 'CEDULA', 'LICENCIA' => 'LICENCIA', 'PASAPORTE' => 'PASAPORTE', 'NO IDENTIFICADO' => 'NO IDENTIFICADO']) ?>
                            </div>

                            <div class="col-sm-1">
                                <?= $form->field($modelTabPersonasInvolucradas, "[{$i}]GENERO")->dropDownList( ['M' => 'M', 'F' => 'F', 'required' => true]) ?>
                            </div>

                            <div class="col-sm-2">
                                <?= $form->field($modelTabPersonasInvolucradas, "[{$i}]CONDICION")->dropDownList( ['LESIONADO' => 'LESIONADO', 'ILESO' => 'ILESO']) ?>
                            </div>
                            <div class="col-sm-2">
                                <?= $form->field($modelTabPersonasInvolucradas, "[{$i}]CASCO")->dropDownList( ['SI' => 'SI', 'NO' => 'NO'])?>
                            </div>
                            <div class="col-sm-2">
                                <?= $form->field($modelTabPersonasInvolucradas, "[{$i}]EDAD")->textInput(['required' => true,'integerOnly' => true, 'maxlength = 2' =>true]) ?>
                            </div>
                        </div><!-- .row -->
                        <div class="row">
                            <div class="col-sm-2">
                                <?= $form->field($modelTabPersonasInvolucradas, "[{$i}]PARTICIPANTE")->dropDownList( ['CONDUCTOR' => 'CONDUCTOR', 'PASAJERO' => 'PASAJERO', 'PEATON' => 'PEATON']) ?>
                            </div>
                            <div class="col-sm-2">
                                <?= $form->field($modelTabPersonasInvolucradas, "[{$i}]CINTURON")->dropDownList( ['SI' => 'SI', 'NO' => 'NO']) ?>
                            </div>
                            <!-- Desde aqui inicia la parte de los vehículos--> 
                             <div class="col-sm-3">
                                <?= $form->field($modelTabPersonasInvolucradas, "[{$i}]TIPO_VEHICULO")->dropDownList( ['AUTOMÓVIL' => 'AUTOMÓVIL', 'CAMIÓN' => 'CAMIÓN', 'CAMIONETA' => 'CAMIONETA', 'ESPECIAL' => 'ESPECIAL', 'FURGÓN' => 'FURGÓN', 'FURGONETA' => 'FURGONETA', 'JEEP' => 'JEEP', 'MOTOCICLETA' => 'MOTOCICLETA', 'MULTIUSO' => 'MULTIUSO', 'OMNIBUS' => 'OMNIBUS', 'TANQUERO' => 'TANQUERO', 'TRAILER' => 'TRAILER', 'VEHICULO ORTOPÉDICO' => 'VEHICULO ORTOPÉDICO', 'VOLQUETA' => 'VOLQUETA', 'TROLE' => 'TROLE', 'BICICLETA' => 'BICICLETA', 'NO IDENTIFICADO' => 'NO IDENTIFICADO']) ?>
                            </div>

                             <div class="col-sm-3">
                                <?= $form->field($modelTabPersonasInvolucradas, "[{$i}]TIPO_SERVICIO")->dropDownList( ['PÚBLICO' => 'PÚBLICO', 'COMERCIAL' => 'COMERCIAL', 'PARTICULAR' => 'PARTICULAR', 'CUENTA PROPIA' => 'CUENTA PROPIA', 'NO IDENTIFICADO' => 'NO IDENTIFICADO']) ?>
                            </div> 

                             <div class="col-sm-2">
                                <?= $form->field($modelTabPersonasInvolucradas, "[{$i}]PLACA")->textInput(['required' => true,'maxlength' => true]) ?>
                            </div> 

                        </div><!-- .row -->
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
        </div>
    </div>
    </div>

    <div class="col-sm-3">
        <?= $form->field($model, 'FECHA_INCIDENTE')->widget(
            DatePicker::className(), [
            // inline too, not bad
                'inline' => false,
                'language' => 'es',
                // modify template for custom rendering
                //'template' => '<div class="well well-sm" style="background-color: #fff; widt$
                'clientOptions' => [
                    'autoclose' => true,
                    'todayHighlight' => true,
                    'startDate' => date('2022-03-01'),
                    'endDate' => date('2022-06-30'),
                    'format' => 'yyyy-mm-dd'
                ]
            ]);?>
                
    </div>

    <div class="col-sm-3">
        <?= $form->field($model, 'HORA_INCIDENTE')->widget(TimePicker::className(),
            [
            //'readonly' => true,                     
                'pluginOptions' => [
                'minuteStep' => 5,
                'showMeridian' => false,
                'defaultTime' => date('H:i', strtotime('-6 hour')),
            ],
            'options'=>[
                'class'=>'form-control',
            ],
        ]); ?>
    </div>

    <div class="col-sm-3">
        <?= $form->field($model, 'DANOS_MATERIALES')->dropDownList( ['SI' => 'SI', 'NO' => 'NO']) ?>
    </div>

        <div class="col-sm-3">
        <?= $form->field($model, 'ZONA')->dropDownList( ['URBANO' => 'URBANO', 'RURAL' => 'RURAL']) ?>
    </div>

    <div class="col-sm-4">
        <?= $form->field($model, 'COORDENADA_X')->textInput(['required' => true,'maxlength' => true]) ?>
    </div>
    <div class="col-sm-4">
        <?= $form->field($model, 'COORDENADA_Y')->textInput(['required' => true,'maxlength' => true]) ?>
    </div>
    <div class="col-sm-4">
        <?= $form->field($model, 'DIRECCION')->textInput(['required' => true,'maxlength' => true,'style'=>"text-transform:uppercase"]) ?>
    </div>

    <div class="col-sm-12">
        <?= $form->field($model, 'OBSERVACIONES')->textInput(['required' => true,'maxlength' => true, 'placeholder' => "Describa la observación",'style'=>"text-transform:uppercase"]) ?>
    </div>

    <div class="col-sm-12">
         <?= $form->field($model, 'usuario_ingreso')->textInput(['readonly'=> true, 'value' => ''.Yii::$app->user->identity->username])?>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
