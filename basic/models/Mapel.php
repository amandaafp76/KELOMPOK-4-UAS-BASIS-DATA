<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mapel".
 *
 * @property int $ID_mata_pelajaran
 * @property int|null $ID_guru
 * @property string|null $Mata_pelajaran
 *
 * @property Guru $guru
 */
class Mapel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mapel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_mata_pelajaran'], 'required'],
            [['ID_mata_pelajaran', 'ID_guru'], 'integer'],
            [['Mata_pelajaran'], 'string', 'max' => 45],
            [['ID_mata_pelajaran'], 'unique'],
            [['ID_guru'], 'exist', 'skipOnError' => true, 'targetClass' => Guru::class, 'targetAttribute' => ['ID_guru' => 'ID_guru']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_mata_pelajaran' => 'Id Mata Pelajaran',
            'ID_guru' => 'Id Guru',
            'Mata_pelajaran' => 'Mata Pelajaran',
        ];
    }

    /**
     * Gets query for [[Guru]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGuru()
    {
        return $this->hasOne(Guru::class, ['ID_guru' => 'ID_guru']);
    }
}
