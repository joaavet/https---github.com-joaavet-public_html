<?php

namespace app\controllers;

use app\models\Clinica;

class ClinicasController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $clinicas = Clinica::find()->orderBy("Nome")->all();
        return $this->render('index',[
            'clinicas' => $clinicas
        ]);
    }

    public function actionView()
    {
        return $this->render('view');
    }

}