<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tab_provincias".
 *
 * @property int $ID_PROVINCIA
 * @property string $NOMBRE_PROVINCIA
 *
 * @property TabCantones[] $tabCantones
 * @property TabIncidentes[] $tabIncidentes
 */
class TabProvincias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tab_provincias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NOMBRE_PROVINCIA'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_PROVINCIA' => 'Id  Provincia',
            'NOMBRE_PROVINCIA' => 'Nombre  Provincia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTabCantones()
    {
        return $this->hasMany(TabCantones::className(), ['ID_PROVINCIA' => 'ID_PROVINCIA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTabIncidentes()
    {
        return $this->hasMany(TabIncidentes::className(), ['ID_PROVINCIA' => 'ID_PROVINCIA']);
    }
}
