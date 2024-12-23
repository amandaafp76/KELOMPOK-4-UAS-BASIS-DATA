<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nilai;

/**
 * NilaiSearch represents the model behind the search form of `app\models\Nilai`.
 */
class NilaiSearch extends Nilai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_nilai', 'ID_siswa', 'ID_guru', 'Nilai_mata_pelajaran'], 'integer'],
            [['Mata_pelajaran'], 'safe'],
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
        $query = Nilai::find();

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
            'ID_nilai' => $this->ID_nilai,
            'ID_siswa' => $this->ID_siswa,
            'ID_guru' => $this->ID_guru,
            'Nilai_mata_pelajaran' => $this->Nilai_mata_pelajaran,
        ]);

        $query->andFilterWhere(['like', 'Mata_pelajaran', $this->Mata_pelajaran]);

        return $dataProvider;
    }
}
