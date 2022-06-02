<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tab_parroquias".
 *
 * @property int $ID_PARROQUIA
 * @property string $NOMBRE_PARROQUIA
 *
 * @property TabCantones[] $tabCantones
 * @property TabIncidentes[] $tabIncidentes
 */
class TabParroquias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tab_parroquias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NOMBRE_PARROQUIA'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_PARROQUIA' => 'Id  Parroquia',
            'NOMBRE_PARROQUIA' => 'Nombre  Parroquia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTabCantones()
    {
        return $this->hasMany(TabCantones::className(), ['ID_PARROQUIA' => 'ID_PARROQUIA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTabIncidentes()
    {
        return $this->hasMany(TabIncidentes::className(), ['ID_PARROQUIA' => 'ID_PARROQUIA']);
    }
}
