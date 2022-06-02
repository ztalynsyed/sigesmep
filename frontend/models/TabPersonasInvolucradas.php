<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tab_personas_involucradas".
 *
 * @property string $TIPO_IDENTIFICACION
 * @property int $NUMERO_IDENTIFICACION
 * @property int $EDAD
 * @property string $GENERO
 * @property string $CONDICION
 * @property string $PARTICIPANTE
 * @property string $CASCO
 * @property string $CINTURON
 * @property int $id
 * @property int $inci_id REFERENCIA UNO A VARIOS DE LA TABLA DE INCIDENTES
 *
 * @property TabIncidentes $inci
 */
class TabPersonasInvolucradas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tab_personas_involucradas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NUMERO_IDENTIFICACION', 'EDAD'], 'integer'],
            [['inci_id'], 'integer'],
            [['TIPO_IDENTIFICACION'], 'string', 'max' => 100],
            [['GENERO'], 'string', 'max' => 1],
            [['CONDICION', 'PARTICIPANTE'], 'string', 'max' => 30],
            [['CASCO', 'CINTURON'], 'string', 'max' => 2],
            [['TIPO_VEHICULO', 'TIPO_SERVICIO'], 'string', 'max' => 150], 
           [['PLACA'], 'string', 'max' => 8], 
            [['inci_id'], 'exist', 'skipOnError' => true, 'targetClass' => TabIncidentes::className(), 'targetAttribute' => ['inci_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TIPO_IDENTIFICACION' => 'Tipo  Identificacion',
            'NUMERO_IDENTIFICACION' => 'Numero  Identificacion',
            'EDAD' => 'Edad',
            'GENERO' => 'Genero',
            'CONDICION' => 'Condicion',
            'PARTICIPANTE' => 'Participante',
            'CASCO' => 'Casco',
            'CINTURON' => 'Cinturon',
            'TIPO_VEHICULO' => 'Tipo de vehiculo', 
            'TIPO_SERVICIO' => 'Tipo de servicio', 
            'PLACA' => 'Placa', 
            'id' => 'ID',
            'inci_id' => 'REFERENCIA UNO A VARIOS DE LA TABLA DE INCIDENTES',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInci()
    {
        return $this->hasOne(TabIncidentes::className(), ['id' => 'inci_id']);
    }
}
