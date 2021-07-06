<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Medico".
 *
 * @property int $Medico_id
 * @property string $CRM
 * @property string $Nome
 * @property string $Endereco
 * @property string $Bairro
 * @property int|null $ibge
 * @property string $Email
 * @property string|null $Telefone
 * @property int $tem_clinica
 * @property string|null $site
 * @property string|null $Imagem
 * @property string $criado_em
 * @property string $atualizado_em
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
    @return \yii\db\ActiveQuary
        public function getMedico(Especialidades){
        return this->PassMany(MedicosHasEspecialidades:::classNome(),
            ('Medico_id' =>'Medico_id")
        }
                              }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CRM', 'Nome', 'Endereco', 'Bairro', 'Email'], 'required'],
            [['ibge', 'tem_clinica', 'status'], 'integer'],
            [['criado_em', 'atualizado_em'], 'safe'],
            [['CRM'], 'string', 'max' => 18],
            [['Nome', 'Endereco', 'site', 'Imagem'], 'string', 'max' => 145],
            [['Bairro'], 'string', 'max' => 60],
            [['Email', 'Telefone'], 'string', 'max' => 255],
            [['CRM'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Medico_id' => Yii::t('app', 'Medico ID'),
            'CRM' => Yii::t('app', 'Crm'),
            'Nome' => Yii::t('app', 'Nome'),
            'Endereco' => Yii::t('app', 'Endereco'),
            'Bairro' => Yii::t('app', 'Bairro'),
            'ibge' => Yii::t('app', 'Ibge'),
            'Email' => Yii::t('app', 'Email'),
            'Telefone' => Yii::t('app', 'Telefone'),
            'tem_clinica' => Yii::t('app', 'Tem Clinica'),
            'site' => Yii::t('app', 'Site'),
            'Imagem' => Yii::t('app', 'Imagem'),
            'criado_em' => Yii::t('app', 'Criado Em'),
            'atualizado_em' => Yii::t('app', 'Atualizado Em'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
