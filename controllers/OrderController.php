<?php

namespace app\controllers;

use Yii;
use app\models\Order;

class OrderController extends AppController{

    public function actionView(){
      
      $order = new Order();
      $order->user_id = Yii::$app->user->identity->getId();

      if( $order->load( Yii::$app->request->post() ) ){
          if( $order->save() ){
            Yii::$app->session->setFlash('success', 'Ваш заказ был успешно отправлен на рассмотрение нашей команде!');
            return $this->refresh();
          }else{
            Yii::$app->session->setFlash('error', 'Возникла ошибка при отправке Вашего заказа, попробуйте позже или свяжитесь с нашей поддержкой.');
          }
      }
      return $this->render('view', compact('order'));
    }

}
