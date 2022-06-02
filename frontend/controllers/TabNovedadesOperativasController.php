<?php

namespace frontend\controllers;

use Yii;
use backend\models\TabNovedadesOperativas;
use backend\models\TabNovedadesOperativasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHttpException;
use yii\filters\AccessControl;


/**
 * TabNovedadesOperativasController implements the CRUD actions for TabNovedadesOperativas model.
 */
class TabNovedadesOperativasController extends Controller
{
    /**
     * @inheritdoc
     */
public function behaviors()
{
    return [
       'access'=>[
            'class' => AccessControl::className(), 
            'only' => ['view', 'index', 'update'],
            'rules' => [
                [    
                    'allow' => true,
                    'actions' => ['view', 'index'],
                    'roles' => ['@'],
                ]
            ],
        ],
    ];
}

    /**
     * Lists all TabNovedadesOperativas models.
     * @return mixed
     */




        public function actionIndex()
    {
        if(Yii::$app->user->can('ver-novedades'))
        {
        $searchModel = new TabNovedadesOperativasSearch();
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
     * Displays a single TabNovedadesOperativas model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */


    public function actionView($id)
    {
        if(Yii::$app->user->can('ver-novedades'))
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
     * Creates a new TabNovedadesOperativas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
    if(Yii::$app->user->can( 'crear-novedades' ))
        {
        $model = new TabNovedadesOperativas();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID_NOVEDADES]);
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
     * Updates an existing TabNovedadesOperativas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
         if(Yii::$app->user->can( 'actualizar-novedades' ))
        {


        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID_NOVEDADES]);
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
     * Deletes an existing TabNovedadesOperativas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */

    public function actionDelete($id)
    {
    if(Yii::$app->user->can( 'borrar-novedades' ))
        {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }else
        {
        throw new ForbiddenHttpException;
        }
    }

     /**
     * Finds the TabNovedadesOperativas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TabNovedadesOperativas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TabNovedadesOperativas::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
