<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tab_cantones".
 *
 * @property int $ID_CANTON
 * @property int $ID_PARROQUIA
 * @property string $NOMBRE_CANTON
 *
 * @property TabParroquias $pARROQUIA
 * @property TabIncidentes[] $tabIncidentes
 * @property TabProvincias[] $tabProvincias
 */
class TabCantones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tab_cantones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_PARROQUIA'], 'integer'],
            [['NOMBRE_CANTON'], 'string', 'max' => 250],
            [['ID_PARROQUIA'], 'exist', 'skipOnError' => true, 'targetClass' => TabParroquias::className(), 'targetAttribute' => ['ID_PARROQUIA' => 'ID_PARROQUIA']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_CANTON' => 'Id  Canton',
            'ID_PARROQUIA' => 'Id  Parroquia',
            'NOMBRE_CANTON' => 'Nombre  Canton',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPARROQUIA()
    {
        return $this->hasOne(TabParroquias::className(), ['ID_PARROQUIA' => 'ID_PARROQUIA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTabIncidentes()
    {
        return $this->hasMany(TabIncidentes::className(), ['ID_CANTON' => 'ID_CANTON']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTabProvincias()
    {
        return $this->hasMany(TabProvincias::className(), ['ID_CANTON' => 'ID_CANTON']);
    }
}
