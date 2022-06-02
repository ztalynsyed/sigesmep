<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TabNovedadesOperativas;

/**
 * TabNovedadesOperativasSearch represents the model behind the search form of `frontend\models\TabNovedadesOperativas`.
 */
class TabNovedadesOperativasSearch extends TabNovedadesOperativas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_NOVEDADES', 'CONTRAFLUJOS', 'EVENTOS_CUBIERTOS', 'ORDENES_SERVICIO', 'OPERATIVOS_INFORMALIDAD', 'OPERATIVOS_TERMINAL', 'UNIDADES_REVISADAS', 'VEHICULOS_RETENIDOS', 'VEHICULOS_LIBERADOS', 'PERSONAS_APRENDIDAS', 'SINIESTROS', 'INCIDENTES', 'ART_385', 'ART_386', 'ART_389_11', 'ART_391_5', 'ART_392_6', 'OTROS_ARTICULOS', 'JEFES_CONTROL', 'AGENTES_CIVILES', 'TANGOS', 'MOTOCICLETAS', 'MOTONETAS', 'CONOS', 'VALLAS', 'SEPARADORES', 'RADIOS_COMUNICACION'], 'integer'],
            [['DISTRITO', 'CANTON'], 'safe'],
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
        $query = TabNovedadesOperativas::find();

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
            'ID_NOVEDADES' => $this->ID_NOVEDADES,
            'CONTRAFLUJOS' => $this->CONTRAFLUJOS,
            'EVENTOS_CUBIERTOS' => $this->EVENTOS_CUBIERTOS,
            'ORDENES_SERVICIO' => $this->ORDENES_SERVICIO,
            'OPERATIVOS_INFORMALIDAD' => $this->OPERATIVOS_INFORMALIDAD,
            'OPERATIVOS_TERMINAL' => $this->OPERATIVOS_TERMINAL,
            'UNIDADES_REVISADAS' => $this->UNIDADES_REVISADAS,
            'VEHICULOS_RETENIDOS' => $this->VEHICULOS_RETENIDOS,
            'VEHICULOS_LIBERADOS' => $this->VEHICULOS_LIBERADOS,
            'PERSONAS_APRENDIDAS' => $this->PERSONAS_APRENDIDAS,
            'SINIESTROS' => $this->SINIESTROS,
            'INCIDENTES' => $this->INCIDENTES,
            'ART_385' => $this->ART_385,
            'ART_386' => $this->ART_386,
            'ART_389_11' => $this->ART_389_11,
            'ART_391_5' => $this->ART_391_5,
            'ART_392_6' => $this->ART_392_6,
            'OTROS_ARTICULOS' => $this->OTROS_ARTICULOS,
            'JEFES_CONTROL' => $this->JEFES_CONTROL,
            'AGENTES_CIVILES' => $this->AGENTES_CIVILES,
            'TANGOS' => $this->TANGOS,
            'MOTOCICLETAS' => $this->MOTOCICLETAS,
            'MOTONETAS' => $this->MOTONETAS,
            'CONOS' => $this->CONOS,
            'VALLAS' => $this->VALLAS,
            'SEPARADORES' => $this->SEPARADORES,
            'RADIOS_COMUNICACION' => $this->RADIOS_COMUNICACION,
        ]);

        $query->andFilterWhere(['like', 'DISTRITO', $this->DISTRITO])
            ->andFilterWhere(['like', 'CANTON', $this->CANTON]);

        return $dataProvider;
    }
}
