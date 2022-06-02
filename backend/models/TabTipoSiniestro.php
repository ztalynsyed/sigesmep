<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tab_tipo_siniestro".
 *
 * @property int $ID_SINIESTRO
 * @property string $DESCRIPCION_SINIESTRO
 *
 * @property TabIncidentes[] $tabIncidentes
 */
class TabTipoSiniestro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tab_tipo_siniestro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DESCRIPCION_SINIESTRO'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_SINIESTRO' => 'Id  Siniestro',
            'DESCRIPCION_SINIESTRO' => 'Descripcion  Siniestro',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTabIncidentes()
    {
        return $this->hasMany(TabIncidentes::className(), ['ID_SINIESTRO' => 'ID_SINIESTRO']);
    }
}
