<?php

namespace app\controllers;
use Yii;
use app\models\Especialidades;

class EspecialidadesController extends \yii\web\Controller
{
    public function actionView($id){
        $model = Especialidades::findOne($id);
        return $this->render('view',[
            'Vmodel' => $model
        ]);
    }

    public function actionIndex()
    {
        $model = Especialidades::find()->orderby('Titulo')->all();
        return $this->render('index',[
            'Vmodel' => $model
        ]);
    }

    public function actionStore(){
        $model = new Especialidades();
        
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $model->save();
            Yii::$app->session->setFlash('success','Gravado com successo!!');
            $model = new Especialidades();
        }else{
            Yii::$app->session->setFlash('errors',$model->errors);
        }

        return $this->render('store',[
            'Vmodel' => $model,
        ]);
    }

    public function actionUpdate(){

    }
    public function actionDelete(){
        
    }

}