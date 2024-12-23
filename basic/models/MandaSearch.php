<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Manda;

/**
 * MandaSearch represents the model behind the search form of `app\models\Manda`.
 */
class MandaSearch extends Manda
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_manda'], 'integer'],
            [['nama_manda', 'umur_manda'], 'safe'],
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
        $query = Manda::find();

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
            'id_manda' => $this->id_manda,
        ]);

        $query->andFilterWhere(['like', 'nama_manda', $this->nama_manda])
            ->andFilterWhere(['like', 'umur_manda', $this->umur_manda]);

        return $dataProvider;
    }
}
