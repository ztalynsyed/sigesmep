<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TabNovedadesOperativasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tab-novedades-operativas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_NOVEDADES') ?>

    <?= $form->field($model, 'DISTRITO') ?>

    <?= $form->field($model, 'CANTON') ?>

    <?= $form->field($model, 'CONTRAFLUJOS') ?>

    <?= $form->field($model, 'EVENTOS_CUBIERTOS') ?>

    <?php // echo $form->field($model, 'ORDENES_SERVICIO') ?>

    <?php // echo $form->field($model, 'OPERATIVOS_INFORMALIDAD') ?>

    <?php // echo $form->field($model, 'OPERATIVOS_TERMINAL') ?>

    <?php // echo $form->field($model, 'UNIDADES_REVISADAS') ?>

    <?php // echo $form->field($model, 'VEHICULOS_RETENIDOS') ?>

    <?php // echo $form->field($model, 'VEHICULOS_LIBERADOS') ?>

    <?php // echo $form->field($model, 'PERSONAS_APRENDIDAS') ?>

    <?php // echo $form->field($model, 'SINIESTROS') ?>

    <?php // echo $form->field($model, 'INCIDENTES') ?>

    <?php // echo $form->field($model, 'ART_385') ?>

    <?php // echo $form->field($model, 'ART_386') ?>

    <?php // echo $form->field($model, 'ART_389_11') ?>

    <?php // echo $form->field($model, 'ART_391_5') ?>

    <?php // echo $form->field($model, 'ART_392_6') ?>

    <?php // echo $form->field($model, 'OTROS_ARTICULOS') ?>

    <?php // echo $form->field($model, 'JEFES_CONTROL') ?>

    <?php // echo $form->field($model, 'AGENTES_CIVILES') ?>

    <?php // echo $form->field($model, 'TANGOS') ?>

    <?php // echo $form->field($model, 'MOTOCICLETAS') ?>

    <?php // echo $form->field($model, 'MOTONETAS') ?>

    <?php // echo $form->field($model, 'CONOS') ?>

    <?php // echo $form->field($model, 'VALLAS') ?>

    <?php // echo $form->field($model, 'SEPARADORES') ?>

    <?php // echo $form->field($model, 'RADIOS_COMUNICACION') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
