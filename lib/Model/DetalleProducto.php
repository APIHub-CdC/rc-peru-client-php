<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class DetalleProducto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'DetalleProducto';
    
    public static $rc_peTypes = [
        'clave_producto' => 'string',
        'clave_tipo_producto' => 'string',
        'id_calificacion' => 'string',
        'fecha_reporte_sbs' => 'string',
        'total_deuda_directa' => 'float',
        'maxima_morosidad24meses' => 'float',
        'maxima_morosidad_actual' => 'float',
        'antiguedad' => 'float',
        'entidades_registradas' => 'float',
        'entidades_atrasos' => 'float',
        'deuda_vigente' => 'float',
        'deuda_reestructurada' => 'float',
        'deuda_refinanciada' => 'float',
        'deuda_vencida' => 'float',
        'deuda_vencida_menor30' => 'float',
        'deuda_vencida_mayor30' => 'float',
        'deuda_judicial' => 'float',
        'porcentaje_deuda_morosa' => 'float',
        'porcentaje_deuda_moneda_extranjera' => 'float',
        'deuda_indirecta' => 'float',
        'linea_credito' => 'float'
    ];
    
    public static $rc_peFormats = [
        'clave_producto' => null,
        'clave_tipo_producto' => null,
        'id_calificacion' => null,
        'fecha_reporte_sbs' => null,
        'total_deuda_directa' => 'float',
        'maxima_morosidad24meses' => null,
        'maxima_morosidad_actual' => null,
        'antiguedad' => null,
        'entidades_registradas' => null,
        'entidades_atrasos' => null,
        'deuda_vigente' => 'float',
        'deuda_reestructurada' => 'float',
        'deuda_refinanciada' => 'float',
        'deuda_vencida' => 'float',
        'deuda_vencida_menor30' => 'float',
        'deuda_vencida_mayor30' => 'float',
        'deuda_judicial' => 'float',
        'porcentaje_deuda_morosa' => 'float',
        'porcentaje_deuda_moneda_extranjera' => 'float',
        'deuda_indirecta' => 'float',
        'linea_credito' => 'float'
    ];
    
    public static function rc_peTypes()
    {
        return self::$rc_peTypes;
    }
    
    public static function rc_peFormats()
    {
        return self::$rc_peFormats;
    }
    
    public static $attributeMap = [
        'clave_producto' => 'claveProducto',
        'clave_tipo_producto' => 'claveTipoProducto',
        'id_calificacion' => 'idCalificacion',
        'fecha_reporte_sbs' => 'fechaReporteSBS',
        'total_deuda_directa' => 'totalDeudaDirecta',
        'maxima_morosidad24meses' => 'maximaMorosidad24meses',
        'maxima_morosidad_actual' => 'maximaMorosidadActual',
        'antiguedad' => 'antiguedad',
        'entidades_registradas' => 'entidadesRegistradas',
        'entidades_atrasos' => 'entidadesAtrasos',
        'deuda_vigente' => 'deudaVigente',
        'deuda_reestructurada' => 'deudaReestructurada',
        'deuda_refinanciada' => 'deudaRefinanciada',
        'deuda_vencida' => 'deudaVencida',
        'deuda_vencida_menor30' => 'deudaVencidaMenor30',
        'deuda_vencida_mayor30' => 'deudaVencidaMayor30',
        'deuda_judicial' => 'deudaJudicial',
        'porcentaje_deuda_morosa' => 'porcentajeDeudaMorosa',
        'porcentaje_deuda_moneda_extranjera' => 'porcentajeDeudaMonedaExtranjera',
        'deuda_indirecta' => 'deudaIndirecta',
        'linea_credito' => 'lineaCredito'
    ];
    
    public static $setters = [
        'clave_producto' => 'setClaveProducto',
        'clave_tipo_producto' => 'setClaveTipoProducto',
        'id_calificacion' => 'setIdCalificacion',
        'fecha_reporte_sbs' => 'setFechaReporteSbs',
        'total_deuda_directa' => 'setTotalDeudaDirecta',
        'maxima_morosidad24meses' => 'setMaximaMorosidad24meses',
        'maxima_morosidad_actual' => 'setMaximaMorosidadActual',
        'antiguedad' => 'setAntiguedad',
        'entidades_registradas' => 'setEntidadesRegistradas',
        'entidades_atrasos' => 'setEntidadesAtrasos',
        'deuda_vigente' => 'setDeudaVigente',
        'deuda_reestructurada' => 'setDeudaReestructurada',
        'deuda_refinanciada' => 'setDeudaRefinanciada',
        'deuda_vencida' => 'setDeudaVencida',
        'deuda_vencida_menor30' => 'setDeudaVencidaMenor30',
        'deuda_vencida_mayor30' => 'setDeudaVencidaMayor30',
        'deuda_judicial' => 'setDeudaJudicial',
        'porcentaje_deuda_morosa' => 'setPorcentajeDeudaMorosa',
        'porcentaje_deuda_moneda_extranjera' => 'setPorcentajeDeudaMonedaExtranjera',
        'deuda_indirecta' => 'setDeudaIndirecta',
        'linea_credito' => 'setLineaCredito'
    ];
    
    public static $getters = [
        'clave_producto' => 'getClaveProducto',
        'clave_tipo_producto' => 'getClaveTipoProducto',
        'id_calificacion' => 'getIdCalificacion',
        'fecha_reporte_sbs' => 'getFechaReporteSbs',
        'total_deuda_directa' => 'getTotalDeudaDirecta',
        'maxima_morosidad24meses' => 'getMaximaMorosidad24meses',
        'maxima_morosidad_actual' => 'getMaximaMorosidadActual',
        'antiguedad' => 'getAntiguedad',
        'entidades_registradas' => 'getEntidadesRegistradas',
        'entidades_atrasos' => 'getEntidadesAtrasos',
        'deuda_vigente' => 'getDeudaVigente',
        'deuda_reestructurada' => 'getDeudaReestructurada',
        'deuda_refinanciada' => 'getDeudaRefinanciada',
        'deuda_vencida' => 'getDeudaVencida',
        'deuda_vencida_menor30' => 'getDeudaVencidaMenor30',
        'deuda_vencida_mayor30' => 'getDeudaVencidaMayor30',
        'deuda_judicial' => 'getDeudaJudicial',
        'porcentaje_deuda_morosa' => 'getPorcentajeDeudaMorosa',
        'porcentaje_deuda_moneda_extranjera' => 'getPorcentajeDeudaMonedaExtranjera',
        'deuda_indirecta' => 'getDeudaIndirecta',
        'linea_credito' => 'getLineaCredito'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$rc_peModelName;
    }
    
    
    
    public $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['clave_producto'] = isset($data['clave_producto']) ? $data['clave_producto'] : null;
        $this->container['clave_tipo_producto'] = isset($data['clave_tipo_producto']) ? $data['clave_tipo_producto'] : null;
        $this->container['id_calificacion'] = isset($data['id_calificacion']) ? $data['id_calificacion'] : null;
        $this->container['fecha_reporte_sbs'] = isset($data['fecha_reporte_sbs']) ? $data['fecha_reporte_sbs'] : null;
        $this->container['total_deuda_directa'] = isset($data['total_deuda_directa']) ? $data['total_deuda_directa'] : null;
        $this->container['maxima_morosidad24meses'] = isset($data['maxima_morosidad24meses']) ? $data['maxima_morosidad24meses'] : null;
        $this->container['maxima_morosidad_actual'] = isset($data['maxima_morosidad_actual']) ? $data['maxima_morosidad_actual'] : null;
        $this->container['antiguedad'] = isset($data['antiguedad']) ? $data['antiguedad'] : null;
        $this->container['entidades_registradas'] = isset($data['entidades_registradas']) ? $data['entidades_registradas'] : null;
        $this->container['entidades_atrasos'] = isset($data['entidades_atrasos']) ? $data['entidades_atrasos'] : null;
        $this->container['deuda_vigente'] = isset($data['deuda_vigente']) ? $data['deuda_vigente'] : null;
        $this->container['deuda_reestructurada'] = isset($data['deuda_reestructurada']) ? $data['deuda_reestructurada'] : null;
        $this->container['deuda_refinanciada'] = isset($data['deuda_refinanciada']) ? $data['deuda_refinanciada'] : null;
        $this->container['deuda_vencida'] = isset($data['deuda_vencida']) ? $data['deuda_vencida'] : null;
        $this->container['deuda_vencida_menor30'] = isset($data['deuda_vencida_menor30']) ? $data['deuda_vencida_menor30'] : null;
        $this->container['deuda_vencida_mayor30'] = isset($data['deuda_vencida_mayor30']) ? $data['deuda_vencida_mayor30'] : null;
        $this->container['deuda_judicial'] = isset($data['deuda_judicial']) ? $data['deuda_judicial'] : null;
        $this->container['porcentaje_deuda_morosa'] = isset($data['porcentaje_deuda_morosa']) ? $data['porcentaje_deuda_morosa'] : null;
        $this->container['porcentaje_deuda_moneda_extranjera'] = isset($data['porcentaje_deuda_moneda_extranjera']) ? $data['porcentaje_deuda_moneda_extranjera'] : null;
        $this->container['deuda_indirecta'] = isset($data['deuda_indirecta']) ? $data['deuda_indirecta'] : null;
        $this->container['linea_credito'] = isset($data['linea_credito']) ? $data['linea_credito'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getClaveProducto()
    {
        return $this->container['clave_producto'];
    }
    
    public function setClaveProducto($clave_producto)
    {
        $this->container['clave_producto'] = $clave_producto;
        return $this;
    }
    
    public function getClaveTipoProducto()
    {
        return $this->container['clave_tipo_producto'];
    }
    
    public function setClaveTipoProducto($clave_tipo_producto)
    {
        $this->container['clave_tipo_producto'] = $clave_tipo_producto;
        return $this;
    }
    
    public function getIdCalificacion()
    {
        return $this->container['id_calificacion'];
    }
    
    public function setIdCalificacion($id_calificacion)
    {
        $this->container['id_calificacion'] = $id_calificacion;
        return $this;
    }
    
    public function getFechaReporteSbs()
    {
        return $this->container['fecha_reporte_sbs'];
    }
    
    public function setFechaReporteSbs($fecha_reporte_sbs)
    {
        $this->container['fecha_reporte_sbs'] = $fecha_reporte_sbs;
        return $this;
    }
    
    public function getTotalDeudaDirecta()
    {
        return $this->container['total_deuda_directa'];
    }
    
    public function setTotalDeudaDirecta($total_deuda_directa)
    {
        $this->container['total_deuda_directa'] = $total_deuda_directa;
        return $this;
    }
    
    public function getMaximaMorosidad24meses()
    {
        return $this->container['maxima_morosidad24meses'];
    }
    
    public function setMaximaMorosidad24meses($maxima_morosidad24meses)
    {
        $this->container['maxima_morosidad24meses'] = $maxima_morosidad24meses;
        return $this;
    }
    
    public function getMaximaMorosidadActual()
    {
        return $this->container['maxima_morosidad_actual'];
    }
    
    public function setMaximaMorosidadActual($maxima_morosidad_actual)
    {
        $this->container['maxima_morosidad_actual'] = $maxima_morosidad_actual;
        return $this;
    }
    
    public function getAntiguedad()
    {
        return $this->container['antiguedad'];
    }
    
    public function setAntiguedad($antiguedad)
    {
        $this->container['antiguedad'] = $antiguedad;
        return $this;
    }
    
    public function getEntidadesRegistradas()
    {
        return $this->container['entidades_registradas'];
    }
    
    public function setEntidadesRegistradas($entidades_registradas)
    {
        $this->container['entidades_registradas'] = $entidades_registradas;
        return $this;
    }
    
    public function getEntidadesAtrasos()
    {
        return $this->container['entidades_atrasos'];
    }
    
    public function setEntidadesAtrasos($entidades_atrasos)
    {
        $this->container['entidades_atrasos'] = $entidades_atrasos;
        return $this;
    }
    
    public function getDeudaVigente()
    {
        return $this->container['deuda_vigente'];
    }
    
    public function setDeudaVigente($deuda_vigente)
    {
        $this->container['deuda_vigente'] = $deuda_vigente;
        return $this;
    }
    
    public function getDeudaReestructurada()
    {
        return $this->container['deuda_reestructurada'];
    }
    
    public function setDeudaReestructurada($deuda_reestructurada)
    {
        $this->container['deuda_reestructurada'] = $deuda_reestructurada;
        return $this;
    }
    
    public function getDeudaRefinanciada()
    {
        return $this->container['deuda_refinanciada'];
    }
    
    public function setDeudaRefinanciada($deuda_refinanciada)
    {
        $this->container['deuda_refinanciada'] = $deuda_refinanciada;
        return $this;
    }
    
    public function getDeudaVencida()
    {
        return $this->container['deuda_vencida'];
    }
    
    public function setDeudaVencida($deuda_vencida)
    {
        $this->container['deuda_vencida'] = $deuda_vencida;
        return $this;
    }
    
    public function getDeudaVencidaMenor30()
    {
        return $this->container['deuda_vencida_menor30'];
    }
    
    public function setDeudaVencidaMenor30($deuda_vencida_menor30)
    {
        $this->container['deuda_vencida_menor30'] = $deuda_vencida_menor30;
        return $this;
    }
    
    public function getDeudaVencidaMayor30()
    {
        return $this->container['deuda_vencida_mayor30'];
    }
    
    public function setDeudaVencidaMayor30($deuda_vencida_mayor30)
    {
        $this->container['deuda_vencida_mayor30'] = $deuda_vencida_mayor30;
        return $this;
    }
    
    public function getDeudaJudicial()
    {
        return $this->container['deuda_judicial'];
    }
    
    public function setDeudaJudicial($deuda_judicial)
    {
        $this->container['deuda_judicial'] = $deuda_judicial;
        return $this;
    }
    
    public function getPorcentajeDeudaMorosa()
    {
        return $this->container['porcentaje_deuda_morosa'];
    }
    
    public function setPorcentajeDeudaMorosa($porcentaje_deuda_morosa)
    {
        $this->container['porcentaje_deuda_morosa'] = $porcentaje_deuda_morosa;
        return $this;
    }
    
    public function getPorcentajeDeudaMonedaExtranjera()
    {
        return $this->container['porcentaje_deuda_moneda_extranjera'];
    }
    
    public function setPorcentajeDeudaMonedaExtranjera($porcentaje_deuda_moneda_extranjera)
    {
        $this->container['porcentaje_deuda_moneda_extranjera'] = $porcentaje_deuda_moneda_extranjera;
        return $this;
    }
    
    public function getDeudaIndirecta()
    {
        return $this->container['deuda_indirecta'];
    }
    
    public function setDeudaIndirecta($deuda_indirecta)
    {
        $this->container['deuda_indirecta'] = $deuda_indirecta;
        return $this;
    }
    
    public function getLineaCredito()
    {
        return $this->container['linea_credito'];
    }
    
    public function setLineaCredito($linea_credito)
    {
        $this->container['linea_credito'] = $linea_credito;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
