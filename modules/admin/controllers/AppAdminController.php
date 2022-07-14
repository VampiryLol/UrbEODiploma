<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;

class AppAdminController extends Controller{

    public function beforeAction( $action )
    {
        if( !Yii::$app->session->isActive ){
            Yii::$app->session->open();
        }

        if(Yii::$app->user->identity->role != 'admin'){
            return $this->goHome();
        }

        if( !parent::beforeAction( $action ) )
        {
            return false;
        }
        return true;
    }

}