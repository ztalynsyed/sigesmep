<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tab_incidentes".
 *
 * @property int $id
 * @property int $ID_PROVINCIA
 * @property int $ID_CAUSA
 * @property int $ID_SINIESTRO
 * @property int $ID_PARROQUIA
 * @property int $ID_CANTON
 * @property int $ID_VEHICULOS
 * @property string $FECHA_INCIDENTE
 * @property string $HORA_INCIDENTE
 * @property string $DANOS_MATERIALES
 * @property string $ZONA
 * @property string $COORDENADA_X
 * @property string $COORDENADA_Y
 * @property string $DIRECCION
 * @property string $OBSERVACIONES
 * @property string $DESCRIPCION
 *
 * @property TabCantones $cANTON
 * @property TabParroquias $pARROQUIA
 * @property TabProvincias $pROVINCIA
 * @property TabCausales $cAUSA
 * @property TabTipoSiniestro $sINIESTRO
 * @property TabVehiculosInvolucrados $vEHICULOS
 * @property TabPersonasInvolucradas[] $tabPersonasInvolucradas
 */
class TabIncidentes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tab_incidentes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_PROVINCIA', 'ID_CAUSA', 'ID_SINIESTRO', 'ID_PARROQUIA', 'ID_CANTON'], 'integer'],
            [['FECHA_INCIDENTE', 'HORA_INCIDENTE'], 'safe'],
            [['COORDENADA_X', 'COORDENADA_Y'], 'number'],
            [['DANOS_MATERIALES'], 'string', 'max' => 2],
            [['ZONA'], 'string', 'max' => 100],
            [['DIRECCION'], 'string', 'max' => 500],
            [['OBSERVACIONES','usuario_ingreso','usuario_actualizacion'], 'string', 'max' => 250],
            [['DESCRIPCION'], 'string'],
            [['ID_CANTON'], 'exist', 'skipOnError' => true, 'targetClass' => TabCantones::className(), 'targetAttribute' => ['ID_CANTON' => 'ID_CANTON']],
            [['ID_PARROQUIA'], 'exist', 'skipOnError' => true, 'targetClass' => TabParroquias::className(), 'targetAttribute' => ['ID_PARROQUIA' => 'ID_PARROQUIA']],
            [['ID_PROVINCIA'], 'exist', 'skipOnError' => true, 'targetClass' => TabProvincias::className(), 'targetAttribute' => ['ID_PROVINCIA' => 'ID_PROVINCIA']],
            [['ID_CAUSA'], 'exist', 'skipOnError' => true, 'targetClass' => TabCausales::className(), 'targetAttribute' => ['ID_CAUSA' => 'ID_CAUSA']],
            [['ID_SINIESTRO'], 'exist', 'skipOnError' => true, 'targetClass' => TabTipoSiniestro::className(), 'targetAttribute' => ['ID_SINIESTRO' => 'ID_SINIESTRO']],
            [['ID_AGENTE'], 'exist', 'skipOnError' => true, 'targetClass' => TabAgentesProceso::className(), 'targetAttribute' => ['ID_AGENTE' => 'ID_AGENTE']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ID_PROVINCIA' => 'Seleccione la provincia',
            'ID_CAUSA' => 'Seleccione la causal',
            'ID_SINIESTRO' => 'Seleccione el tipo de incidente',
            'ID_PARROQUIA' => 'Seleccione la parroquia',
            'ID_CANTON' => 'Seleccione el cantón',
            'ID_AGENTE' => 'Seleccione el ACT',
            'FECHA_INCIDENTE' => 'Fecha  Incidente',
            'HORA_INCIDENTE' => 'Hora  Incidente',
            'DANOS_MATERIALES' => 'Daños  Materiales',
            'ZONA' => 'Zona',
            'COORDENADA_X' => 'Coordenada  X',
            'COORDENADA_Y' => 'Coordenada  Y',
            'DIRECCION' => 'Direccion',
            'OBSERVACIONES' => 'Observaciones',
            'DESCRIPCION' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCANTON()
    {
        return $this->hasOne(TabCantones::className(), ['ID_CANTON' => 'ID_CANTON']);
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
    public function getPROVINCIA()
    {
        return $this->hasOne(TabProvincias::className(), ['ID_PROVINCIA' => 'ID_PROVINCIA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCAUSA()
    {
        return $this->hasOne(TabCausales::className(), ['ID_CAUSA' => 'ID_CAUSA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSINIESTRO()
    {
        return $this->hasOne(TabTipoSiniestro::className(), ['ID_SINIESTRO' => 'ID_SINIESTRO']);
    }

   /**
     * @return \yii\db\ActiveQuery
     */
    public function getTabPersonasInvolucradas()
    {
        return $this->hasMany(TabPersonasInvolucradas::className(), ['inci_id' => 'id']);
    }
}
