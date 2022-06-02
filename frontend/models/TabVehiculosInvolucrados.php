<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tab_vehiculos_involucrados".
 *
 * @property int $ID_VEHICULOS
 * @property int $ID_SERVICIO
 * @property int $ID_TIPO
 * @property string $PLACA
 * @property string $SERVICIO
 *
 * @property TabIncidentes[] $tabIncidentes
 * @property TabTipoServicio $sERVICIO
 * @property TabTipoVehiculo $tIPO
 */
class TabVehiculosInvolucrados extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tab_vehiculos_involucrados';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_SERVICIO', 'ID_TIPO'], 'integer'],
            [['PLACA'], 'string', 'max' => 7],
            [['SERVICIO'], 'string', 'max' => 150],
            [['ID_SERVICIO'], 'exist', 'skipOnError' => true, 'targetClass' => TabTipoServicio::className(), 'targetAttribute' => ['ID_SERVICIO' => 'ID_SERVICIO']],
            [['ID_TIPO'], 'exist', 'skipOnError' => true, 'targetClass' => TabTipoVehiculo::className(), 'targetAttribute' => ['ID_TIPO' => 'ID_TIPO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_VEHICULOS' => 'Id  Vehiculos',
            'ID_SERVICIO' => 'Id  Servicio',
            'ID_TIPO' => 'Id  Tipo',
            'PLACA' => 'Placa',
            'SERVICIO' => 'Servicio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTabIncidentes()
    {
        return $this->hasMany(TabIncidentes::className(), ['ID_VEHICULOS' => 'ID_VEHICULOS']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSERVICIO()
    {
        return $this->hasOne(TabTipoServicio::className(), ['ID_SERVICIO' => 'ID_SERVICIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTIPO()
    {
        return $this->hasOne(TabTipoVehiculo::className(), ['ID_TIPO' => 'ID_TIPO']);
    }
}
