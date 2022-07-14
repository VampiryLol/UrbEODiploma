<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\SignupForm;
use app\models\Contact;
use app\models\User;
use app\models\Review;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post', 'get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }


    public function actionSignup()
    {

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new SignupForm();

        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            $user = new User();
            $user->username = $model->username;
            $user->password = \Yii::$app->security->generatePasswordHash($model->password);

            if ($user->save()) {
                Yii::$app->user->login($user);
                return $this->goHome();
            }
        }
        return $this->render('signup', compact('model'));
    }

    public function actionFaq()
    {
        return $this->render('faq');
    }

    public function actionContact()
    {
        $model = new Contact();
        
        if (!Yii::$app->user->isGuest){
            $model->user_id = Yii::$app->user->identity->getId();
        }

        // && $model->contact()
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Ваше обращение было успешно отправлено нашей команде!');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Возникла ошибка при отправке Вашего обращения, попробуйте позже или свяжитесь с нашей поддержкой.');
            }
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionReview()
    {
        $model = new Review();
        $model->user_id = Yii::$app->user->identity->getId();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Ваш отзыв было успешно получен!');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Возникла ошибка при отправке Вашего отзыва, попробуйте позже или свяжитесь с нашей поддержкой.');
            }
        }

        return $this->render('review', [
            'model' => $model,
        ]);
    }

    public function actionNews()
    {

        Yii::$app->mailer->compose()
            ->setFrom('terminatorslava38@mail.ru')
            ->setTo($this->request->post('email'))
            ->setSubject('iDesign подписка на новостную рассылку')
            ->setHtmlBody("<h2>" . $this->request->post('name') . ', благодарим Вас за подписку на новостную рассылку нашего сайта! </h2>')
            ->send();

        return $this->redirect(['send-news']);
    }

    public function actionSendNews(){
        return $this->render('news');
    }

}
