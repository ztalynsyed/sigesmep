<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tab_tipo_servicio".
 *
 * @property int $ID_SERVICIO
 * @property string $DESCRIPCION_SERVICIO
 *
 * @property TabVehiculosInvolucrados[] $tabVehiculosInvolucrados
 */
class TabTipoServicio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tab_tipo_servicio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_SERVICIO'], 'required'],
            [['ID_SERVICIO'], 'integer'],
            [['DESCRIPCION_SERVICIO'], 'string', 'max' => 250],
            [['ID_SERVICIO'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_SERVICIO' => 'Id  Servicio',
            'DESCRIPCION_SERVICIO' => 'Descripcion  Servicio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTabVehiculosInvolucrados()
    {
        return $this->hasMany(TabVehiculosInvolucrados::className(), ['ID_SERVICIO' => 'ID_SERVICIO']);
    }
}
