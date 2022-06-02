<?php

namespace backend\controllers;

use Yii;
use backend\models\TabIncidentes;
use backend\models\TabIncidentesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHttpException;

/**
 * TabIncidentesController implements the CRUD actions for TabIncidentes model.
 */
class TabIncidentesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all TabIncidentes models.
     * @return mixed
     */



    public function actionIndex()
    {
    if(Yii::$app->user->can('ver-incidentes'))
        {
        $searchModel = new TabIncidentesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }else
        {
        throw new ForbiddenHttpException;
        }
    }

    /**
     * Displays a single TabIncidentes model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */

    public function actionView($id)
    {
    if(Yii::$app->user->can( 'ver-incidentes' ))
        {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }else
        {
        throw new ForbiddenHttpException;
        }
    }


    /**
     * Creates a new TabIncidentes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
    if(Yii::$app->user->can( 'crear-incidentes' ))
        {
        $model = new TabIncidentes();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }else
        {
        throw new ForbiddenHttpException;
        }
    }

    /**
     * Updates an existing TabIncidentes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if(Yii::$app->user->can('actualizar-incidentes'))
        {

             $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);

        }else
        {
        throw new ForbiddenHttpException;
        }
    }
       
    

    /**
     * Deletes an existing TabIncidentes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if(Yii::$app->user->can('borrar-incidentes'))
        {
            $this->findModel($id)->delete();

            return $this->redirect(['index']);
        }else
        {
        throw new ForbiddenHttpException;
        }
        
    }

    /**
     * Finds the TabIncidentes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TabIncidentes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TabIncidentes::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('La página solicitada no existe');
    }
}
