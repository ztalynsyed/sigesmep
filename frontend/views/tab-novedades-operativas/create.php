<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TabNovedadesOperativas */

$this->title = 'Novedades Operativas';
$this->params['breadcrumbs'][] = ['label' => 'Inicio', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tab-novedades-operativas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
