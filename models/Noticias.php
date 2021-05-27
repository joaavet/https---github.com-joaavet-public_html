<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticias".
 *
 * @property int $id
 * @property string $titulo
 * @property string $subtitulo
 * @property string $texto
 * @property string $imagem
 * @property string $publicado_em
 * @property string $criado_em
 * @property string $status
 */
class Noticias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'noticias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'subtitulo', 'texto', 'imagem', 'publicado_em', 'criado_em'], 'required'],
            [['texto', 'status'], 'string'],
            [['publicado_em', 'criado_em'], 'safe'],
            [['titulo'], 'string', 'max' => 140],
            [['subtitulo'], 'string', 'max' => 250],
            [['imagem'], 'string', 'max' => 145],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'titulo' => Yii::t('app', 'Titulo'),
            'subtitulo' => Yii::t('app', 'Subtitulo'),
            'texto' => Yii::t('app', 'Texto'),
            'imagem' => Yii::t('app', 'Imagem'),
            'publicado_em' => Yii::t('app', 'Publicado Em'),
            'criado_em' => Yii::t('app', 'Criado Em'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
