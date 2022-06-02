<?php

namespace frontend\controllers;

use Yii;
use frontend\models\TabIncidentes;
use frontend\models\TabIncidentesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\TabPersonasInvolucradas;
use frontend\models\Model;
use yii\helpers\ArrayHelper;
use yii\web\ForbiddenHttpException;
use yii\filters\AccessControl;

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
        if(Yii::$app->user->can('ver-incidentes'))
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
        if(Yii::$app->user->can('crear-incidentes'))
        {
          $model = new TabIncidentes();
        $modelsTabPersonasInvolucradas = [new TabPersonasInvolucradas];

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $modelsTabPersonasInvolucradas = Model::createMultiple(TabPersonasInvolucradas::classname());
            Model::loadMultiple($modelsTabPersonasInvolucradas, Yii::$app->request->post());
            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelsTabPersonasInvolucradas) && $valid;
            
            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        foreach ($modelsTabPersonasInvolucradas as $modelTabPersonasInvolucradas) {
                            $modelTabPersonasInvolucradas->inci_id = $model->id;
                            if (! ($flag = $modelTabPersonasInvolucradas->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }

        return $this->render('create', [
            'model' => $model,
            'modelsTabPersonasInvolucradas' => (empty($modelsTabPersonasInvolucradas)) ? [new TabPersonasInvolucradas] : $modelsTabPersonasInvolucradas
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
        $modelsTabPersonasInvolucradas = [new TabPersonasInvolucradas];

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $oldIDs = ArrayHelper::map($modelsTabPersonasInvolucradas, 'id', 'id');
            $modelsTabPersonasInvolucradas = Model::createMultiple(TabPersonasInvolucradas::classname(), $modelsTabPersonasInvolucradas);
            Model::loadMultiple($modelsTabPersonasInvolucradas, Yii::$app->request->post());
            $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($modelsTabPersonasInvolucradas, 'id', 'id')));
            // ajax validation
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($modelsTabPersonasInvolucradas),
                    ActiveForm::validate($model)
                );
            }
            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelsTabPersonasInvolucradas) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        if (! empty($deletedIDs)) {
                            TabPersonasInvolucradas::deleteAll(['id' => $deletedIDs]);
                        }
                        foreach ($modelsTabPersonasInvolucradas as $modelTabPersonasInvolucradas) {
                            $modelTabPersonasInvolucradas->inci_id = $model->id;
                            if (! ($flag = $modelTabPersonasInvolucradas->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }

        return $this->render('update', [
            'model' => $model,
            'modelsTabPersonasInvolucradas' => (empty($modelsTabPersonasInvolucradas)) ? [new TabPersonasInvolucradas] : $modelsTabPersonasInvolucradas
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
        if(Yii::$app->user->can('borrar-incidnetes'))
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

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
