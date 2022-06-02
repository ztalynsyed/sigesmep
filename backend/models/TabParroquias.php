<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tab_parroquias".
 *
 * @property int $ID_PARROQUIA
 * @property int $ID_CANTON
 * @property string $NOMBRE_PARROQUIA
 *
 * @property TabIncidentes[] $tabIncidentes
 * @property TabCantones $cANTON
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
            [['ID_CANTON'], 'integer'],
            [['NOMBRE_PARROQUIA'], 'string', 'max' => 250],
            [['ID_CANTON'], 'exist', 'skipOnError' => true, 'targetClass' => TabCantones::className(), 'targetAttribute' => ['ID_CANTON' => 'ID_CANTON']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_PARROQUIA' => 'Id  Parroquia',
            'ID_CANTON' => 'Id  Canton',
            'NOMBRE_PARROQUIA' => 'Nombre  Parroquia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTabIncidentes()
    {
        return $this->hasMany(TabIncidentes::className(), ['ID_PARROQUIA' => 'ID_PARROQUIA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCANTON()
    {
        return $this->hasOne(TabCantones::className(), ['ID_CANTON' => 'ID_CANTON']);
    }
}
