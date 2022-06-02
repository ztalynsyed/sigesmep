<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TabIncidentes */

$this->title = 'Creaar incidentes';
$this->params['breadcrumbs'][] = ['label' => 'Incidentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tab-incidentes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
