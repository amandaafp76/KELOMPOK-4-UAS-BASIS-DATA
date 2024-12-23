<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nilai".
 *
 * @property int $ID_nilai
 * @property int|null $ID_siswa
 * @property int|null $ID_guru
 * @property string|null $Mata_pelajaran
 * @property int|null $Nilai_mata_pelajaran
 *
 * @property Guru $guru
 * @property Siswa $siswa
 */
class Nilai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nilai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_nilai'], 'required'],
            [['ID_nilai', 'ID_siswa', 'ID_guru', 'Nilai_mata_pelajaran'], 'integer'],
            [['Mata_pelajaran'], 'string', 'max' => 45],
            [['ID_nilai'], 'unique'],
            [['ID_siswa'], 'exist', 'skipOnError' => true, 'targetClass' => Siswa::class, 'targetAttribute' => ['ID_siswa' => 'ID_siswa']],
            [['ID_guru'], 'exist', 'skipOnError' => true, 'targetClass' => Guru::class, 'targetAttribute' => ['ID_guru' => 'ID_guru']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_nilai' => 'Id Nilai',
            'ID_siswa' => 'Id Siswa',
            'ID_guru' => 'Id Guru',
            'Mata_pelajaran' => 'Mata Pelajaran',
            'Nilai_mata_pelajaran' => 'Nilai Mata Pelajaran',
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
