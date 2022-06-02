<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TabNovedadesOperativas */

$this->title = 'Actualizar Novedades Operativas';
$this->params['breadcrumbs'][] = ['label' => 'Novedades Operativas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_NOVEDADES, 'url' => ['view', 'id' => $model->ID_NOVEDADES]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tab-novedades-operativas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
