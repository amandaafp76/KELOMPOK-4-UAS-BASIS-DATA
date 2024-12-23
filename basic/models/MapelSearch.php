<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mapel;

/**
 * MapelSearch represents the model behind the search form of `app\models\Mapel`.
 */
class MapelSearch extends Mapel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_mata_pelajaran', 'ID_guru'], 'integer'],
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
        $query = Mapel::find();

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
            'ID_mata_pelajaran' => $this->ID_mata_pelajaran,
            'ID_guru' => $this->ID_guru,
        ]);

        $query->andFilterWhere(['like', 'Mata_pelajaran', $this->Mata_pelajaran]);

        return $dataProvider;
    }
}
