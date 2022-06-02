<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tab_cantones".
 *
 * @property int $ID_CANTON
 * @property int $ID_PROVINCIA
 * @property string $NOMBRE_CANTON
 *
 * @property TabProvincias $pROVINCIA
 * @property TabIncidentes[] $tabIncidentes
 * @property TabParroquias[] $tabParroquias
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
            [['ID_PROVINCIA'], 'integer'],
            [['NOMBRE_CANTON'], 'string', 'max' => 250],
            [['ID_PROVINCIA'], 'exist', 'skipOnError' => true, 'targetClass' => TabProvincias::className(), 'targetAttribute' => ['ID_PROVINCIA' => 'ID_PROVINCIA']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_CANTON' => 'Id  Canton',
            'ID_PROVINCIA' => 'Id  Provincia',
            'NOMBRE_CANTON' => 'Nombre  Canton',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPROVINCIA()
    {
        return $this->hasOne(TabProvincias::className(), ['ID_PROVINCIA' => 'ID_PROVINCIA']);
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
    public function getTabParroquias()
    {
        return $this->hasMany(TabParroquias::className(), ['ID_CANTON' => 'ID_CANTON']);
    }
}
