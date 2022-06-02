<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TabNovedadesOperativas */

$this->title = 'Actualización de novedades';
$this->params['breadcrumbs'][] = ['label' => 'Regresar al inicio', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_NOVEDADES, 'url' => ['view', 'id' => $model->ID_NOVEDADES]];
$this->params['breadcrumbs'][] = 'Guardar y actualizar';
?>
<div class="tab-novedades-operativas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
