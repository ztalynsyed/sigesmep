<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use frontend\models\TabPersonasInvolucradasSearch;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TabIncidentesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Incidentes de Tránsito';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tab-incidentes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Generar Incidente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'kartik\grid\ExpandRowColumn',
                'value' => function ($model, $key, $index, $column){
                    return GridView::ROW_COLLAPSED;
                },
                'detail' => function ($model, $key, $index, $column){
                    $searchModel = new TabPersonasInvolucradasSearch();
                    $searchModel->inci_id = $model->id;
                    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                    return Yii::$app->controller->renderPartial('_tabpersonasinvolucradas', [
                        'searchModel' => $searchModel,
                        'dataProvider' => $dataProvider,

                    ]);

                },

            ],

            'id',
            [
                'label' => 'Provincia registrada',
                'attribute' => 'pROVINCIA.NOMBRE_PROVINCIA',
            ],
            [
                'label' => 'Causal',
                'attribute' => 'cAUSA.DESCRIPCION_CAUSA',
            ],
            [
                'label' => 'Tipo de siniestro',
                'attribute' => 'sINIESTRO.DESCRIPCION_SINIESTRO',
            ],
            [
                'label' => 'Parroquia registrada',
                'attribute' => 'pARROQUIA.NOMBRE_PARROQUIA',
            ],
            [
                'label' => 'Cantón registrado',
                'attribute' => 'cANTON.NOMBRE_CANTON',
            ],
            //'COORDENADA_X',
            //'COORDENADA_Y',
            //'DIRECCION',
            //'OBSERVACIONES',
            //'DESCRIPCION',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
