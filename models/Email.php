<?php 

namespace app\models;

use yii;
use yii\base\Model;

class Email extends Model
{
    public $nome;
    public $e_mail;

    public function rules()
    {
        return[
        [[  'nome', 'e_mail' ], 'required'],
        [['e_mail' ], 'email'],
        

        ];
    }
}