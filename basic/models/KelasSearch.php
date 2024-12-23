<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kelas;

/**
 * KelasSearch represents the model behind the search form of `app\models\Kelas`.
 */
class KelasSearch extends Kelas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_kelas', 'ID_guru', 'ID_siswa'], 'integer'],
            [['Nama_kelas'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Kelas::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID_kelas' => $this->ID_kelas,
            'ID_guru' => $this->ID_guru,
            'ID_siswa' => $this->ID_siswa,
        ]);

        $query->andFilterWhere(['like', 'Nama_kelas', $this->Nama_kelas]);

        return $dataProvider;
    }
}
