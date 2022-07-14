<?php

namespace app\controllers;

use app\models\Project;
use app\models\Cart;
use app\models\Order;
use app\models\OrderItems;

use Yii;

class CartController extends AppController
{

    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
        $project = Project::findOne($id);

        if (empty($project)) return false;

        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($project);

        return $this->renderPartial('cart-modal', compact('session'));
    }

    public function actionClear()
    {
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.sum');
        $this->layout = false;

        return $this->render('cart-modal', compact('session'));
    }

    public function actionDelItem()
    {
        $id = Yii::$app->request->get('id');
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->recalc($id);
        $this->layout = false;

        return $this->render('cart-modal', compact('session'));
    }

    public function actionShow()
    {

        $session = Yii::$app->session;
        $session->open();
        $this->layout = false;

        return $this->render('cart-modal', compact('session'));
    }

    public function actionView()
    {
        $session = Yii::$app->session;
        $session->open();
        $this->setMeta('Корзина');
        $order = new Order();
        $order->user_id = Yii::$app->user->identity->getId();

        if ($order->load(Yii::$app->request->post())) {

            $order->sum = $session['cart.sum'];

            if ($order->save()) {

                $this->saveOrderItems($session['cart'], $order->id);
                Yii::$app->session->setFlash('success', 'Ваш заказ был успешно отправлен на рассмотрение нашей команде!');
                $session->remove('cart');

                return $this->refresh();
            } else {

                Yii::$app->session->setFlash('error', 'Возникла ошибка при отправке Вашего заказа, попробуйте позже или свяжитесь с нашей поддержкой.');
            }
        }
        return $this->render('view', compact('session', 'order'));
    }

    protected function saveOrderItems($items, $order_id)
    {
        foreach ($items as $item) {

            $order_items = new OrderItems();
            $order_items->order_id = $order_id;
            $order_items->project_id = $item['project_id'];
            $order_items->name = $item['name'];
            $order_items->price = $item['price'];
            $order_items->image = Project::findOne(['id' => $item['project_id']])->images[0]->id;
            $order_items->save();
        }
    }
}
