<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TabIncidentes;

/**
 * TabIncidentesSearch represents the model behind the search form of `backend\models\TabIncidentes`.
 */
class TabIncidentesSearch extends TabIncidentes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ID_PROVINCIA', 'ID_CAUSA', 'ID_SINIESTRO', 'ID_PARROQUIA', 'ID_CANTON', 'ID_AGENTE'], 'integer'],
            [['FECHA_INCIDENTE', 'HORA_INCIDENTE', 'DANOS_MATERIALES', 'ZONA', 'DIRECCION', 'OBSERVACIONES', 'DESCRIPCION'], 'safe'],
            [['COORDENADA_X', 'COORDENADA_Y'], 'number'],
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
        $query = TabIncidentes::find();

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
            'id' => $this->id,
            'ID_PROVINCIA' => $this->ID_PROVINCIA,
            'ID_CAUSA' => $this->ID_CAUSA,
            'ID_SINIESTRO' => $this->ID_SINIESTRO,
            'ID_PARROQUIA' => $this->ID_PARROQUIA,
            'ID_CANTON' => $this->ID_CANTON,
            'FECHA_INCIDENTE' => $this->FECHA_INCIDENTE,
            'HORA_INCIDENTE' => $this->HORA_INCIDENTE,
            'COORDENADA_X' => $this->COORDENADA_X,
            'COORDENADA_Y' => $this->COORDENADA_Y,
            'ID_AGENTE' => $this->ID_AGENTE,
        ]);

        $query->andFilterWhere(['like', 'DANOS_MATERIALES', $this->DANOS_MATERIALES])
            ->andFilterWhere(['like', 'ZONA', $this->ZONA])
            ->andFilterWhere(['like', 'DIRECCION', $this->DIRECCION])
            ->andFilterWhere(['like', 'OBSERVACIONES', $this->OBSERVACIONES])
            ->andFilterWhere(['like', 'DESCRIPCION', $this->DESCRIPCION]);

        return $dataProvider;
    }
}
