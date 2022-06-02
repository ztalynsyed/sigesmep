<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TabNovedadesOperativas */

$this->title = 'Registro de novedades';
$this->params['breadcrumbs'][] = ['label' => 'Tab Novedades Operativas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tab-novedades-operativas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
