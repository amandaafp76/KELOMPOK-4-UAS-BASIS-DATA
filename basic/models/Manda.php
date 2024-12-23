<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "manda".
 *
 * @property int $id_manda
 * @property string|null $nama_manda
 * @property string|null $umur_manda
 */
class Manda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'manda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_manda'], 'required'],
            [['id_manda'], 'integer'],
            [['nama_manda'], 'string', 'max' => 45],
            [['umur_manda'], 'string', 'max' => 40],
            [['id_manda'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_manda' => 'Id Manda',
            'nama_manda' => 'Nama Manda',
            'umur_manda' => 'Umur Manda',
        ];
    }
}
