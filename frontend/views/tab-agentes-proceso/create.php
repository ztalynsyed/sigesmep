<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TabAgentesProceso */

$this->title = 'Create Tab Agentes Proceso';
$this->params['breadcrumbs'][] = ['label' => 'Tab Agentes Procesos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tab-agentes-proceso-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
