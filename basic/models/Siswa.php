<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "siswa".
 *
 * @property int $ID_siswa
 * @property int|null $NIS
 * @property string|null $Jenis_kelamin
 * @property string|null $Nama_siswa
 *
 * @property KehadiranSiswa[] $kehadiranSiswas
 * @property Kelas[] $kelas
 * @property Nilai[] $nilais
 */
class Siswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'siswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_siswa'], 'required'],
            [['ID_siswa', 'NIS'], 'integer'],
            [['Jenis_kelamin', 'Nama_siswa'], 'string', 'max' => 45],
            [['ID_siswa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_siswa' => 'Id Siswa',
            'NIS' => 'Nis',
            'Jenis_kelamin' => 'Jenis Kelamin',
            'Nama_siswa' => 'Nama Siswa',
        ];
    }

    /**
     * Gets query for [[KehadiranSiswas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKehadiranSiswas()
    {
        return $this->hasMany(KehadiranSiswa::class, ['ID_siswa' => 'ID_siswa']);
    }

    /**
     * Gets query for [[Kelas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasMany(Kelas::class, ['ID_siswa' => 'ID_siswa']);
    }

    /**
     * Gets query for [[Nilais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNilais()
    {
        return $this->hasMany(Nilai::class, ['ID_siswa' => 'ID_siswa']);
    }
}
