<?php
namespace app\widgets;
use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\models\Email;

class Emailmakt extends Widget
{
    public function run()
    {
        $model = new Email();

            if($model->load(Yii::$app->request->post()) && $model->validate()){
                Yii::$app->session->setFlash('success', 'Email cadastrado com sucesso');
            }else{
           //Falhou
        return $this->render('emailmkt', ['model' => $model]);  
        }
    }
}
