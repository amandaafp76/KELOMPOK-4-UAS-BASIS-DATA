<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kehadiran;

/**
 * KehadiranSearch represents the model behind the search form of `app\models\Kehadiran`.
 */
class KehadiranSearch extends Kehadiran
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_kehadiran', 'ID_siswa'], 'integer'],
            [['Tanggal', 'Status_kehadiran'], 'safe'],
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
        $query = Kehadiran::find();

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
            'ID_kehadiran' => $this->ID_kehadiran,
            'ID_siswa' => $this->ID_siswa,
            'Tanggal' => $this->Tanggal,
        ]);

        $query->andFilterWhere(['like', 'Status_kehadiran', $this->Status_kehadiran]);

        return $dataProvider;
    }
}
