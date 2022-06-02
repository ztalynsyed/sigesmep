<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title='Personas Involucradas';
$this->params['breadcrums'][] = $this->title;
?>
<div class="tab-personas-involucradas-index">
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'NUMERO_IDENTIFICACION',
			'CONDICION',



		],


	]); ?>
	
</div>