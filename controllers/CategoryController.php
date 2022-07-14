<?php

namespace app\controllers;

use Yii;
use app\models\Category;
use app\models\Project;
use app\models\Review;

class CategoryController extends AppController{

    public function actionIndex(){

        $status = Yii::$app->request->get('status');

        if($status){
            $statusfilter['status_id'] = $status; 
        }

        $projects = Project::find()->where($statusfilter)->limit(9)->all();
        $reviews = Review::find()->all();

        $this->setMeta('iDesign');

        return $this->render('index', compact('projects', 'reviews'));
        
    }

    public function actionView($id, $status = null){

        $id = Yii::$app->request->get('id');

        $category = Category::findOne($id);
        if(empty($category)){
            throw new \yii\web\HttpException(404, 'Извините, этой категории не существует.');
        }

        if($status){
            $statusfilter['status_id'] = $status; 
        }

        $statusfilter['category_id'] = $id;

        $projecttype = Project::find()->where($statusfilter)->all();

        $this->setMeta('iDesign | ' . $category->type, $category->keywords, $category->description);

        return $this->render('view', compact('projecttype', 'category'));

        // $status = Project::find()->where(['status_id' => $id])->all();
        
    }

    public function actionService(){
        $reviewsview = Review::find()->all();

        return $this->render('service', compact('reviewsview'));
    }

}