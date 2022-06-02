<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tab_agentes_proceso".
 *
 * @property int $ID_AGENTE CODIGO DE AGENTE CIVIL QUE TOMÓ EL PROCEDIMIENTO
 * @property string $NOMBRES_APÉLLIDOS NOMBRES Y APELLIDOS DEL AGENTE QUE TOMÓ EL PROCEDIMIENTO
 * @property string $DISTRITO DISTRITO AL CUAL PERTENECE EL AGENTE CIVIL
 *
 * @property TabIncidentes[] $tabIncidentes
 */
class TabAgentesProceso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tab_agentes_proceso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NOMBRES_APÉLLIDOS', 'DISTRITO'], 'required'],
            [['NOMBRES_APÉLLIDOS', 'DISTRITO'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_AGENTE' => 'Id  Agente',
            'NOMBRES_APÉLLIDOS' => 'Nombres  Ap� Llidos',
            'DISTRITO' => 'Distrito',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTabIncidentes()
    {
        return $this->hasMany(TabIncidentes::className(), ['ID_AGENTE' => 'ID_AGENTE']);
    }
}
