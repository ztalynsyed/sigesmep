<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tab_provincias".
 *
 * @property int $ID_PROVINCIA
 * @property int $ID_CANTON
 * @property string $NOMBRE_PROVINCIA
 *
 * @property TabIncidentes[] $tabIncidentes
 * @property TabCantones $cANTON
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
            [['ID_CANTON'], 'integer'],
            [['NOMBRE_PROVINCIA'], 'string', 'max' => 250],
            [['ID_CANTON'], 'exist', 'skipOnError' => true, 'targetClass' => TabCantones::className(), 'targetAttribute' => ['ID_CANTON' => 'ID_CANTON']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_PROVINCIA' => 'Id  Provincia',
            'ID_CANTON' => 'Id  Canton',
            'NOMBRE_PROVINCIA' => 'Nombre  Provincia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTabIncidentes()
    {
        return $this->hasMany(TabIncidentes::className(), ['ID_PROVINCIA' => 'ID_PROVINCIA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCANTON()
    {
        return $this->hasOne(TabCantones::className(), ['ID_CANTON' => 'ID_CANTON']);
    }
}
