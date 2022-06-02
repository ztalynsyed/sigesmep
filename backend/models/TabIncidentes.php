<?php

namespace backend\models;

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
 * @property string $FECHA_INCIDENTE
 * @property string $HORA_INCIDENTE
 * @property string $DANOS_MATERIALES
 * @property string $ZONA
 * @property string $COORDENADA_X
 * @property string $COORDENADA_Y
 * @property string $DIRECCION
 * @property string $OBSERVACIONES
 * @property string $DESCRIPCION
 * @property int $ID_AGENTE CODIGO DE AGENTE CIVIL QUE TOMÓ EL PROCEDIMIENTO
 *
 * @property TabAgentesProceso $aGENTE
 * @property TabCantones $cANTON
 * @property TabParroquias $pARROQUIA
 * @property TabProvincias $pROVINCIA
 * @property TabCausales $cAUSA
 * @property TabTipoSiniestro $sINIESTRO
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
            [['ID_PROVINCIA', 'ID_CAUSA', 'ID_SINIESTRO', 'ID_PARROQUIA', 'ID_CANTON', 'ID_AGENTE'], 'integer'],
            [['FECHA_INCIDENTE', 'HORA_INCIDENTE'], 'safe'],
            [['COORDENADA_X', 'COORDENADA_Y'], 'number'],
            [['ID_AGENTE'], 'required'],
            [['DANOS_MATERIALES'], 'string', 'max' => 2],
            [['ZONA'], 'string', 'max' => 100],
            [['DIRECCION'], 'string', 'max' => 500],
            [['OBSERVACIONES','usuario_actualizacion','observacion_actualizacion', 'usuario_ingreso'], 'string', 'max' => 250],
            [['DESCRIPCION'], 'string'],
            [['ID_AGENTE'], 'exist', 'skipOnError' => true, 'targetClass' => TabAgentesProceso::className(), 'targetAttribute' => ['ID_AGENTE' => 'ID_AGENTE']],
            [['ID_CANTON'], 'exist', 'skipOnError' => true, 'targetClass' => TabCantones::className(), 'targetAttribute' => ['ID_CANTON' => 'ID_CANTON']],
            [['ID_PARROQUIA'], 'exist', 'skipOnError' => true, 'targetClass' => TabParroquias::className(), 'targetAttribute' => ['ID_PARROQUIA' => 'ID_PARROQUIA']],
            [['ID_PROVINCIA'], 'exist', 'skipOnError' => true, 'targetClass' => TabProvincias::className(), 'targetAttribute' => ['ID_PROVINCIA' => 'ID_PROVINCIA']],
            [['ID_CAUSA'], 'exist', 'skipOnError' => true, 'targetClass' => TabCausales::className(), 'targetAttribute' => ['ID_CAUSA' => 'ID_CAUSA']],
            [['ID_SINIESTRO'], 'exist', 'skipOnError' => true, 'targetClass' => TabTipoSiniestro::className(), 'targetAttribute' => ['ID_SINIESTRO' => 'ID_SINIESTRO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ID_PROVINCIA' => 'Provincia Ingresada',
            'ID_CAUSA' => 'Causal',
            'ID_SINIESTRO' => 'Tipo de siniestro',
            'ID_PARROQUIA' => 'Parroquia',
            'ID_CANTON' => 'Canton',
            'FECHA_INCIDENTE' => 'Fecha del incidente ingresada',
            'HORA_INCIDENTE' => 'Hora del incidente ingresada',
            'DANOS_MATERIALES' => 'Daños materiales',
            'ZONA' => 'Zona',
            'COORDENADA_X' => 'Latitud',
            'COORDENADA_Y' => 'Longitud',
            'DIRECCION' => 'Direccion',
            'OBSERVACIONES' => 'Observaciones',
            'DESCRIPCION' => 'Descripcion',
            'ID_AGENTE' => 'Agente responsable',
            'usuario_ingreso' => 'Usuario que realizó el ingreso',
            'usuario_actualizacion' => 'Usuario que actualiza',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAGENTE()
    {
        return $this->hasOne(TabAgentesProceso::className(), ['ID_AGENTE' => 'ID_AGENTE']);
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
