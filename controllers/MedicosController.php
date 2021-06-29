<?php

namespace app\controllers;
use app\models\Medicos;
use Da\QrCode\Qrcode;
use Da\QrCode\Format\MeCardFormat; 
use yii; 

class MedicosController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $medicos = Medicos::find()->orderBy('Nome')->all();

        return $this->render('index',[
            'medicos' => $medicos,
        ]);
    }

    public function actionView($id)
    {

        $medico =  Medicos::findOne($id);
        $format = new MeCardFormat();
        $format-
$format->firstName = $medico->Nome;
$format->email =  $medico->Email;
$format->note =  $medico->CRM;
$format->address =  $medico->Endereco . ', '. $medico->Bairro;
$format->url = 'https://'.medico->site;


        $qrCode=(new Qrcode($format))
        ->setSize(250)
        ->setMargin(5)
        useForegroundColor(0 , 0 , 0);

        // new wp can display the qrcode in many ways
        // saving the result ip a file

    $qrCode->writeFile(Yii::detAlias('@web') . 'img/{$medico->$Medico_id}-{$medico->Nome}.png'); // writer defauts to PNG when none is specifed
        return $this->render('view',['medico' => $medico]);
        'medico' ->$medico,
        'qrcode' ->$qrcode
    }

}
