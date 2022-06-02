<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TabVehiculosInvolucrados;

/**
 * TabVehiculosInvolucradosSearch represents the model behind the search form of `frontend\models\TabVehiculosInvolucrados`.
 */
class TabVehiculosInvolucradosSearch extends TabVehiculosInvolucrados
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_VEHICULOS', 'ID_SERVICIO', 'ID_TIPO'], 'integer'],
            [['PLACA', 'SERVICIO'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = TabVehiculosInvolucrados::find();

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
            'ID_VEHICULOS' => $this->ID_VEHICULOS,
            'ID_SERVICIO' => $this->ID_SERVICIO,
            'ID_TIPO' => $this->ID_TIPO,
        ]);

        $query->andFilterWhere(['like', 'PLACA', $this->PLACA])
            ->andFilterWhere(['like', 'SERVICIO', $this->SERVICIO]);

        return $dataProvider;
    }
}
