<?php

namespace app\controllers;
use app\models\Medicos;

class MedicosController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $medicos = Medicos::find()->orderBy('Nome')->all();

        return $this->render('index',[
            'medicos' => $medicos,
        ]);
    }

    public function actionView()
    {
        return $this->render('view');
    }

}