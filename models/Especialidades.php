<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Especialidades".
 *
 * @property int $Especialidades_id
 * @property string $Titulo
 * @property string|null $SubTitulo
 * @property string|null $texto
 * @property string|null $Imagem
 * @property string $criado_em
 * @property string|null $atualizado_em
 * @property int $status
 */
class Especialidades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Especialidades';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Titulo'], 'required'],
            [['texto'], 'string'],
            [['status'], 'integer'],
            [['Titulo'], 'string', 'max' => 60],
            [['SubTitulo'], 'string', 'max' => 255],
            [['Imagem'], 'string', 'max' => 145],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Especialidades_id' => Yii::t('app', 'Especialidades ID'),
            'Titulo' => Yii::t('app', 'Titulo'),
            'SubTitulo' => Yii::t('app', 'Sub Titulo'),
            'texto' => Yii::t('app', 'Texto'),
            'Imagem' => Yii::t('app', 'Imagem'),
            'criado_em' => Yii::t('app', 'Criado Em'),
            'atualizado_em' => Yii::t('app', 'Atualizado Em'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}