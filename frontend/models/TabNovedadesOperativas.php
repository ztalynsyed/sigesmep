<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tab_novedades_operativas".
 *
 * @property int $ID_NOVEDADES
 * @property string $DISTRITO
 * @property string $CANTON
 * @property int $CONTRAFLUJOS
 * @property int $EVENTOS_CUBIERTOS
 * @property int $ORDENES_SERVICIO
 * @property int $OPERATIVOS_INFORMALIDAD
 * @property int $OPERATIVOS_TERMINAL
 * @property int $UNIDADES_REVISADAS
 * @property int $VEHICULOS_RETENIDOS
 * @property int $VEHICULOS_LIBERADOS
 * @property int $PERSONAS_APRENDIDAS
 * @property int $SINIESTROS
 * @property int $INCIDENTES
 * @property int $ART_385
 * @property int $ART_386
 * @property int $ART_389_11
 * @property int $ART_391_5
 * @property int $ART_392_6
 * @property int $OTROS_ARTICULOS
 * @property int $JEFES_CONTROL
 * @property int $AGENTES_CIVILES
 * @property int $TANGOS
 * @property int $MOTOCICLETAS
 * @property int $MOTONETAS
 * @property int $CONOS
 * @property int $VALLAS
 * @property int $SEPARADORES
 * @property int $RADIOS_COMUNICACION
 */
class TabNovedadesOperativas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tab_novedades_operativas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CONTRAFLUJOS', 'EVENTOS_CUBIERTOS', 'ORDENES_SERVICIO', 'OPERATIVOS_INFORMALIDAD', 'OPERATIVOS_TERMINAL', 'UNIDADES_REVISADAS', 'VEHICULOS_RETENIDOS', 'VEHICULOS_LIBERADOS', 'PERSONAS_APRENDIDAS', 'SINIESTROS', 'INCIDENTES', 'ART_385', 'ART_386', 'ART_389_11', 'ART_391_5', 'ART_392_6', 'OTROS_ARTICULOS', 'JEFES_CONTROL', 'AGENTES_CIVILES', 'TANGOS', 'MOTOCICLETAS', 'MOTONETAS', 'CONOS', 'VALLAS', 'SEPARADORES', 'RADIOS_COMUNICACION', 'OPERATIVOS_ORDINARIOS', 'AUDIENCIAS_GANADAS','AUDIENCIAS_PERDIDAS','AUDIENCIAS_ABANDONADAS'], 'integer'],
            [['DISTRITO', 'CANTON','usuario_ingreso'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_NOVEDADES' => 'ID ÚNICO DE NOVEDAD',
            'DISTRITO' => 'Distrito',
            'CANTON' => 'Canton',
            'CONTRAFLUJOS' => 'Contraflujos',
            'EVENTOS_CUBIERTOS' => 'Eventos  Cubiertos',
            'ORDENES_SERVICIO' => 'Ordenes de Servicio',
            'OPERATIVOS_INFORMALIDAD' => 'Operativos de Informalidad',
            'OPERATIVOS_TERMINAL' => 'Operativos  Terminal',
            'UNIDADES_REVISADAS' => 'Unidades  Revisadas',
            'VEHICULOS_RETENIDOS' => 'Vehiculos  Retenidos',
            'VEHICULOS_LIBERADOS' => 'Vehiculos  Liberados',
            'PERSONAS_APRENDIDAS' => 'Personas  Aprendidas',
            'SINIESTROS' => 'Siniestros',
            'INCIDENTES' => 'Incidentes',
            'ART_385' => 'Art 385',
            'ART_386' => 'Art 386',
            'ART_389_11' => 'Art 389 11',
            'ART_391_5' => 'Art 391 5',
            'ART_392_6' => 'Art 392 6',
            'OTROS_ARTICULOS' => 'Otros  Articulos',
            'JEFES_CONTROL' => 'Jefes  Control',
            'AGENTES_CIVILES' => 'Agentes  Civiles',
            'TANGOS' => 'Tangos',
            'MOTOCICLETAS' => 'Motocicletas',
            'MOTONETAS' => 'Motonetas',
            'CONOS' => 'Conos',
            'VALLAS' => 'Vallas',
            'SEPARADORES' => 'Separadores',
            'RADIOS_COMUNICACION' => 'Radios  Comunicacion',
            'OPERATIVOS_ORDINARIOS' => 'Operativos Ordinarios',
            'AUDIENCIAS_GANADAS' => 'Audiencias Ganadas',
            'AUDIENCIAS_PERDIDAS' => 'Audiencias Perdidas',
            'AUDIENCIAS_ABANDONADAS' => 'Audiencias Abandonadas',
        ];
    }
}
