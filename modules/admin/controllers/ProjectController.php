<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Project;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\VarDumper;

/**
 * ProjectController implements the CRUD actions for Project model.
 */
class ProjectController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Project models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Project::find(),
            'pagination' => [
                'pageSize' => 10
            ],
            'sort' => [
                'defaultOrder' => [
                    'category_id' => SORT_DESC,
                    'status_id' => SORT_DESC,
                ]
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Project model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Project model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Project();

        if ($this->request->isPost) {

            if ($model->load($this->request->post())) {

                $model->image = UploadedFile::getInstance($model, 'image');
                if($model->upload()){
                    
                    

                    Yii::$app->session->setFlash('success', 
                    "Новый дизайн {$model->name} был успешно добавлен!");
                    return $this->redirect(['view', 'id' => $model->id]);
                }

            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Project model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $file_name = $model->image;

        if ($this->request->isPost){
            if($model->load($this->request->post())){
                
                $model->image = UploadedFile::getInstance($model, 'image');        


                if(!$model->upload()){
                    Yii::$app->session->setFlash('error', 
                    "Ошибка при обновлении дизайна {$model->name}!");
                    return $this->redirect('update');
                } else {
                    Yii::$app->session->setFlash('success', 
                    "Дизайн {$model->name} был успешно обновлен!");
                }

                if(file_exists('upload/store/' . $file_name)) 
                    @unlink($file_name);
                
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Project model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {

        $model = $this->findModel($id);

        if(is_file('upload/store/' . $model->getImage()->filePath)){
            unlink('upload/store/' . $model->getImage()->filePath);
            rmdir('upload/store/Projects/Project' . $id);
        }

        if($this->findModel($id)->delete()){
            Yii::$app->session->setFlash('success', 
            "Дизайн {$model->name} был успешно удален!");
            return $this->redirect(['index']);
        };     
    }

    /**
     * Finds the Project model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Project the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Project::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Извините, данной страницы не существует.');
    }
}
