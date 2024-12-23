<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GuruPengajar;

/**
 * GuruPengajarSearch represents the model behind the search form of `app\models\GuruPengajar`.
 */
class GuruPengajarSearch extends GuruPengajar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_guru', 'NIP'], 'integer'],
            [['Nama_guru', 'Jenis_kelamin', 'Alamat'], 'safe'],
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
        $query = GuruPengajar::find();

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
            'ID_guru' => $this->ID_guru,
            'NIP' => $this->NIP,
        ]);

        $query->andFilterWhere(['like', 'Nama_guru', $this->Nama_guru])
            ->andFilterWhere(['like', 'Jenis_kelamin', $this->Jenis_kelamin])
            ->andFilterWhere(['like', 'Alamat', $this->Alamat]);

        return $dataProvider;
    }
}
