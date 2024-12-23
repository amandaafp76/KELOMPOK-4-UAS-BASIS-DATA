<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guru".
 *
 * @property int $ID_guru
 * @property int|null $NIP
 * @property string|null $Nama_guru
 * @property string|null $Jenis_kelamin
 * @property string|null $Alamat
 *
 * @property Kelas[] $kelas
 * @property MataPelajaran[] $mataPelajarans
 * @property Nilai[] $nilais
 */
class Guru extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guru';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_guru'], 'required'],
            [['ID_guru', 'NIP'], 'integer'],
            [['Nama_guru', 'Jenis_kelamin', 'Alamat'], 'string', 'max' => 45],
            [['ID_guru'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_guru' => 'Id Guru',
            'NIP' => 'Nip',
            'Nama_guru' => 'Nama Guru',
            'Jenis_kelamin' => 'Jenis Kelamin',
            'Alamat' => 'Alamat',
        ];
    }

    /**
     * Gets query for [[Kelas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasMany(Kelas::class, ['ID_guru' => 'ID_guru']);
    }

    /**
     * Gets query for [[MataPelajarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMataPelajarans()
    {
        return $this->hasMany(MataPelajaran::class, ['ID_guru' => 'ID_guru']);
    }

    /**
     * Gets query for [[Nilais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNilais()
    {
        return $this->hasMany(Nilai::class, ['ID_guru' => 'ID_guru']);
    }
}
