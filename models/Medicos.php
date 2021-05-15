<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Medico".
 *
 * @property int $Medico_id
 * @property string $Crm
 * @property string|null $Nome
 * @property string|null $Endereco
 * @property string|null $Bairro
 * @property int|null $ibge
 * @property string|null $email
 * @property string|null $tem_clinica
 * @property string|null $site
 * @property string|null $imagem
 * @property string $criado_em
 * @property string $atualizado_em
 * @property int|null $destaque
 * @property int $status
 */
class Medicos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Medico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Crm'], 'required'],
            [['ibge', 'destaque', 'status'], 'integer'],
            [['criado_em', 'atualizado_em'], 'safe'],
            [['Crm', 'Nome', 'Endereco', 'Bairro', 'email', 'tem_clinica', 'site', 'imagem'], 'string', 'max' => 45],
            [['Crm'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Medico_id' => Yii::t('app', 'Medico ID'),
            'Crm' => Yii::t('app', 'Crm'),
            'Nome' => Yii::t('app', 'Nome'),
            'Endereco' => Yii::t('app', 'Endereco'),
            'Bairro' => Yii::t('app', 'Bairro'),
            'ibge' => Yii::t('app', 'Ibge'),
            'email' => Yii::t('app', 'Email'),
            'tem_clinica' => Yii::t('app', 'Tem Clinica'),
            'site' => Yii::t('app', 'Site'),
            'imagem' => Yii::t('app', 'Imagem'),
            'criado_em' => Yii::t('app', 'Criado Em'),
            'atualizado_em' => Yii::t('app', 'Atualizado Em'),
            'destaque' => Yii::t('app', 'Destaque'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
   
}
