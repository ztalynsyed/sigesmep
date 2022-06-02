<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TabPersonasInvolucradas;

/**
 * TabPersonasInvolucradasSearch represents the model behind the search form of `frontend\models\TabPersonasInvolucradas`.
 */
class TabPersonasInvolucradasSearch extends TabPersonasInvolucradas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TIPO_IDENTIFICACION', 'GENERO', 'CONDICION', 'PARTICIPANTE', 'CASCO', 'CINTURON', 'TIPO_VEHICULO', 'TIPO_SERVICIO', 'PLACA'], 'safe'],
            [['NUMERO_IDENTIFICACION', 'EDAD', 'id', 'inci_id'], 'integer'],
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
        $query = TabPersonasInvolucradas::find();

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
            'NUMERO_IDENTIFICACION' => $this->NUMERO_IDENTIFICACION,
            'EDAD' => $this->EDAD,
            'id' => $this->id,
            'inci_id' => $this->inci_id,
        ]);

        $query->andFilterWhere(['like', 'TIPO_IDENTIFICACION', $this->TIPO_IDENTIFICACION])
            ->andFilterWhere(['like', 'GENERO', $this->GENERO])
            ->andFilterWhere(['like', 'CONDICION', $this->CONDICION])
            ->andFilterWhere(['like', 'PARTICIPANTE', $this->PARTICIPANTE])
            ->andFilterWhere(['like', 'CASCO', $this->CASCO])
            ->andFilterWhere(['like', 'CINTURON', $this->CINTURON])
            ->andFilterWhere(['like', 'TIPO_SERVICIO', $this->CINTURON])
            ->andFilterWhere(['like', 'TIPO_VEHICULO', $this->CINTURON])
            ->andFilterWhere(['like', 'PLACA', $this->CINTURON]);


        return $dataProvider;
    }
}
