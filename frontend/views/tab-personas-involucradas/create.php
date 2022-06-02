<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TabPersonasInvolucradas */

$this->title = 'Create Tab Personas Involucradas';
$this->params['breadcrumbs'][] = ['label' => 'Tab Personas Involucradas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tab-personas-involucradas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
