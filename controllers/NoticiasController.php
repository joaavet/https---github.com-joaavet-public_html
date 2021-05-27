<?php

namespace app\controllers;
use app\models\Noticias;

class NoticiasController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $noticias = Noticias::find()->all();
             return $this->render('index',[
            'noticias' => $noticias,
        ]);
    }

    public function actionView()
    {
        return $this->render('view');
    }

}
