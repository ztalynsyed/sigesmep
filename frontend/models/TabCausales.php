<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tab_causales".
 *
 * @property int $ID_CAUSA
 * @property string $DESCRIPCION_CAUSA
 *
 * @property TabIncidentes[] $tabIncidentes
 */
class TabCausales extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tab_causales';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DESCRIPCION_CAUSA'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_CAUSA' => 'Id  Causa',
            'DESCRIPCION_CAUSA' => 'Descripcion  Causa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTabIncidentes()
    {
        return $this->hasMany(TabIncidentes::className(), ['ID_CAUSA' => 'ID_CAUSA']);
    }
}
