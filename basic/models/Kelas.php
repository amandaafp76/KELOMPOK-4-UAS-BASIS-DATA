<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kelas".
 *
 * @property int $ID_kelas
 * @property int|null $ID_guru
 * @property int|null $ID_siswa
 * @property string|null $Nama_kelas
 *
 * @property Guru $guru
 * @property Siswa $siswa
 */
class Kelas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_kelas'], 'required'],
            [['ID_kelas', 'ID_guru', 'ID_siswa'], 'integer'],
            [['Nama_kelas'], 'string', 'max' => 45],
            [['ID_kelas'], 'unique'],
            [['ID_guru'], 'exist', 'skipOnError' => true, 'targetClass' => Guru::class, 'targetAttribute' => ['ID_guru' => 'ID_guru']],
            [['ID_siswa'], 'exist', 'skipOnError' => true, 'targetClass' => Siswa::class, 'targetAttribute' => ['ID_siswa' => 'ID_siswa']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_kelas' => 'Id Kelas',
            'ID_guru' => 'Id Guru',
            'ID_siswa' => 'Id Siswa',
            'Nama_kelas' => 'Nama Kelas',
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
