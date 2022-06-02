<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tab_tipo_vehiculo".
 *
 * @property int $ID_TIPO
 * @property string $DESCRIPCION_TIPO
 *
 * @property TabVehiculosInvolucrados[] $tabVehiculosInvolucrados
 */
class TabTipoVehiculo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tab_tipo_vehiculo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_TIPO'], 'required'],
            [['ID_TIPO'], 'integer'],
            [['DESCRIPCION_TIPO'], 'string', 'max' => 100],
            [['ID_TIPO'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_TIPO' => 'Id  Tipo',
            'DESCRIPCION_TIPO' => 'Descripcion  Tipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTabVehiculosInvolucrados()
    {
        return $this->hasMany(TabVehiculosInvolucrados::className(), ['ID_TIPO' => 'ID_TIPO']);
    }
}
