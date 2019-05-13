<?php

namespace app\controllers;

use yii\base\Controller;

class DemoController extends Controller
{
    // ...现存的代码...
    public function actions()
    {
        return [
            'hello'=>  \app\actions\HelloAction::className(),
        ];
    }
    public function actionSay($message = 'Hello')
    {
        return $this->render('say', ['message' => $message]);
    }
}