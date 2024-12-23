<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kehadiran".
 *
 * @property int $ID_kehadiran
 * @property int|null $ID_siswa
 * @property string|null $Tanggal
 * @property string|null $Status_kehadiran
 *
 * @property Siswa $siswa
 */
class Kehadiran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kehadiran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_kehadiran'], 'required'],
            [['ID_kehadiran', 'ID_siswa'], 'integer'],
            [['Tanggal'], 'safe'],
            [['Status_kehadiran'], 'string', 'max' => 45],
            [['ID_kehadiran'], 'unique'],
            [['ID_siswa'], 'exist', 'skipOnError' => true, 'targetClass' => Siswa::class, 'targetAttribute' => ['ID_siswa' => 'ID_siswa']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_kehadiran' => 'Id Kehadiran',
            'ID_siswa' => 'Id Siswa',
            'Tanggal' => 'Tanggal',
            'Status_kehadiran' => 'Status Kehadiran',
        ];
    }

    /**
     * Gets query for [[Siswa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSiswa()
    {
        return $this->hasOne(Siswa::class, ['ID_siswa' => 'ID_siswa']);
    }
}
