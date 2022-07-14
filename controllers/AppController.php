<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class AppController extends Controller{

  public function beforeAction( $action )
    {
        if( !Yii::$app->session->isActive ){
            Yii::$app->session->open();
        }

        if( !parent::beforeAction( $action ) )
        {
            return false;
        }
        return true;
    }

  protected function setMeta($title = null, $keywords = null, $description = null){
  $this->view->title = $title;
  $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
  $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
  
  }

}
