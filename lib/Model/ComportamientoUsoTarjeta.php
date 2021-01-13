<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class ComportamientoUsoTarjeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'ComportamientoUsoTarjeta';
    
    public static $rc_peTypes = [
        'clave_producto' => 'string',
        'descripcion_entidad' => 'string',
        'clave_situacion' => 'string',
        'ultima_linea_credito' => 'float',
        'utilizacion24' => 'string',
        'inicio_periodo_util' => 'string',
        'fin_periodo_util' => 'string',
        'maxima_deuda' => 'float',
        'porcentaje_maxima_deuda' => 'float',
        'disposicion24' => 'string',
        'inicio_periodo_disposicion' => 'string',
        'fin_periodo_disposicion' => 'string',
        'maxima_deuda_efectivo' => 'float',
        'porcentaje_maxima_deuda_efectivo' => 'float',
        'maximo_linea_credito' => 'float',
        'maximo_fecha_linea_credito' => 'string'
    ];
    
    public static $rc_peFormats = [
        'clave_producto' => null,
        'descripcion_entidad' => null,
        'clave_situacion' => null,
        'ultima_linea_credito' => 'float',
        'utilizacion24' => null,
        'inicio_periodo_util' => null,
        'fin_periodo_util' => null,
        'maxima_deuda' => 'float',
        'porcentaje_maxima_deuda' => 'float',
        'disposicion24' => null,
        'inicio_periodo_disposicion' => null,
        'fin_periodo_disposicion' => null,
        'maxima_deuda_efectivo' => 'float',
        'porcentaje_maxima_deuda_efectivo' => 'float',
        'maximo_linea_credito' => 'float',
        'maximo_fecha_linea_credito' => null
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
        'descripcion_entidad' => 'descripcionEntidad',
        'clave_situacion' => 'claveSituacion',
        'ultima_linea_credito' => 'ultimaLineaCredito',
        'utilizacion24' => 'utilizacion24',
        'inicio_periodo_util' => 'inicioPeriodoUtil',
        'fin_periodo_util' => 'finPeriodoUtil',
        'maxima_deuda' => 'maximaDeuda',
        'porcentaje_maxima_deuda' => 'porcentajeMaximaDeuda',
        'disposicion24' => 'disposicion24',
        'inicio_periodo_disposicion' => 'inicioPeriodoDisposicion',
        'fin_periodo_disposicion' => 'finPeriodoDisposicion',
        'maxima_deuda_efectivo' => 'maximaDeudaEfectivo',
        'porcentaje_maxima_deuda_efectivo' => 'porcentajeMaximaDeudaEfectivo',
        'maximo_linea_credito' => 'maximoLineaCredito',
        'maximo_fecha_linea_credito' => 'maximoFechaLineaCredito'
    ];
    
    public static $setters = [
        'clave_producto' => 'setClaveProducto',
        'descripcion_entidad' => 'setDescripcionEntidad',
        'clave_situacion' => 'setClaveSituacion',
        'ultima_linea_credito' => 'setUltimaLineaCredito',
        'utilizacion24' => 'setUtilizacion24',
        'inicio_periodo_util' => 'setInicioPeriodoUtil',
        'fin_periodo_util' => 'setFinPeriodoUtil',
        'maxima_deuda' => 'setMaximaDeuda',
        'porcentaje_maxima_deuda' => 'setPorcentajeMaximaDeuda',
        'disposicion24' => 'setDisposicion24',
        'inicio_periodo_disposicion' => 'setInicioPeriodoDisposicion',
        'fin_periodo_disposicion' => 'setFinPeriodoDisposicion',
        'maxima_deuda_efectivo' => 'setMaximaDeudaEfectivo',
        'porcentaje_maxima_deuda_efectivo' => 'setPorcentajeMaximaDeudaEfectivo',
        'maximo_linea_credito' => 'setMaximoLineaCredito',
        'maximo_fecha_linea_credito' => 'setMaximoFechaLineaCredito'
    ];
    
    public static $getters = [
        'clave_producto' => 'getClaveProducto',
        'descripcion_entidad' => 'getDescripcionEntidad',
        'clave_situacion' => 'getClaveSituacion',
        'ultima_linea_credito' => 'getUltimaLineaCredito',
        'utilizacion24' => 'getUtilizacion24',
        'inicio_periodo_util' => 'getInicioPeriodoUtil',
        'fin_periodo_util' => 'getFinPeriodoUtil',
        'maxima_deuda' => 'getMaximaDeuda',
        'porcentaje_maxima_deuda' => 'getPorcentajeMaximaDeuda',
        'disposicion24' => 'getDisposicion24',
        'inicio_periodo_disposicion' => 'getInicioPeriodoDisposicion',
        'fin_periodo_disposicion' => 'getFinPeriodoDisposicion',
        'maxima_deuda_efectivo' => 'getMaximaDeudaEfectivo',
        'porcentaje_maxima_deuda_efectivo' => 'getPorcentajeMaximaDeudaEfectivo',
        'maximo_linea_credito' => 'getMaximoLineaCredito',
        'maximo_fecha_linea_credito' => 'getMaximoFechaLineaCredito'
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
        $this->container['descripcion_entidad'] = isset($data['descripcion_entidad']) ? $data['descripcion_entidad'] : null;
        $this->container['clave_situacion'] = isset($data['clave_situacion']) ? $data['clave_situacion'] : null;
        $this->container['ultima_linea_credito'] = isset($data['ultima_linea_credito']) ? $data['ultima_linea_credito'] : null;
        $this->container['utilizacion24'] = isset($data['utilizacion24']) ? $data['utilizacion24'] : null;
        $this->container['inicio_periodo_util'] = isset($data['inicio_periodo_util']) ? $data['inicio_periodo_util'] : null;
        $this->container['fin_periodo_util'] = isset($data['fin_periodo_util']) ? $data['fin_periodo_util'] : null;
        $this->container['maxima_deuda'] = isset($data['maxima_deuda']) ? $data['maxima_deuda'] : null;
        $this->container['porcentaje_maxima_deuda'] = isset($data['porcentaje_maxima_deuda']) ? $data['porcentaje_maxima_deuda'] : null;
        $this->container['disposicion24'] = isset($data['disposicion24']) ? $data['disposicion24'] : null;
        $this->container['inicio_periodo_disposicion'] = isset($data['inicio_periodo_disposicion']) ? $data['inicio_periodo_disposicion'] : null;
        $this->container['fin_periodo_disposicion'] = isset($data['fin_periodo_disposicion']) ? $data['fin_periodo_disposicion'] : null;
        $this->container['maxima_deuda_efectivo'] = isset($data['maxima_deuda_efectivo']) ? $data['maxima_deuda_efectivo'] : null;
        $this->container['porcentaje_maxima_deuda_efectivo'] = isset($data['porcentaje_maxima_deuda_efectivo']) ? $data['porcentaje_maxima_deuda_efectivo'] : null;
        $this->container['maximo_linea_credito'] = isset($data['maximo_linea_credito']) ? $data['maximo_linea_credito'] : null;
        $this->container['maximo_fecha_linea_credito'] = isset($data['maximo_fecha_linea_credito']) ? $data['maximo_fecha_linea_credito'] : null;
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
    
    public function getDescripcionEntidad()
    {
        return $this->container['descripcion_entidad'];
    }
    
    public function setDescripcionEntidad($descripcion_entidad)
    {
        $this->container['descripcion_entidad'] = $descripcion_entidad;
        return $this;
    }
    
    public function getClaveSituacion()
    {
        return $this->container['clave_situacion'];
    }
    
    public function setClaveSituacion($clave_situacion)
    {
        $this->container['clave_situacion'] = $clave_situacion;
        return $this;
    }
    
    public function getUltimaLineaCredito()
    {
        return $this->container['ultima_linea_credito'];
    }
    
    public function setUltimaLineaCredito($ultima_linea_credito)
    {
        $this->container['ultima_linea_credito'] = $ultima_linea_credito;
        return $this;
    }
    
    public function getUtilizacion24()
    {
        return $this->container['utilizacion24'];
    }
    
    public function setUtilizacion24($utilizacion24)
    {
        $this->container['utilizacion24'] = $utilizacion24;
        return $this;
    }
    
    public function getInicioPeriodoUtil()
    {
        return $this->container['inicio_periodo_util'];
    }
    
    public function setInicioPeriodoUtil($inicio_periodo_util)
    {
        $this->container['inicio_periodo_util'] = $inicio_periodo_util;
        return $this;
    }
    
    public function getFinPeriodoUtil()
    {
        return $this->container['fin_periodo_util'];
    }
    
    public function setFinPeriodoUtil($fin_periodo_util)
    {
        $this->container['fin_periodo_util'] = $fin_periodo_util;
        return $this;
    }
    
    public function getMaximaDeuda()
    {
        return $this->container['maxima_deuda'];
    }
    
    public function setMaximaDeuda($maxima_deuda)
    {
        $this->container['maxima_deuda'] = $maxima_deuda;
        return $this;
    }
    
    public function getPorcentajeMaximaDeuda()
    {
        return $this->container['porcentaje_maxima_deuda'];
    }
    
    public function setPorcentajeMaximaDeuda($porcentaje_maxima_deuda)
    {
        $this->container['porcentaje_maxima_deuda'] = $porcentaje_maxima_deuda;
        return $this;
    }
    
    public function getDisposicion24()
    {
        return $this->container['disposicion24'];
    }
    
    public function setDisposicion24($disposicion24)
    {
        $this->container['disposicion24'] = $disposicion24;
        return $this;
    }
    
    public function getInicioPeriodoDisposicion()
    {
        return $this->container['inicio_periodo_disposicion'];
    }
    
    public function setInicioPeriodoDisposicion($inicio_periodo_disposicion)
    {
        $this->container['inicio_periodo_disposicion'] = $inicio_periodo_disposicion;
        return $this;
    }
    
    public function getFinPeriodoDisposicion()
    {
        return $this->container['fin_periodo_disposicion'];
    }
    
    public function setFinPeriodoDisposicion($fin_periodo_disposicion)
    {
        $this->container['fin_periodo_disposicion'] = $fin_periodo_disposicion;
        return $this;
    }
    
    public function getMaximaDeudaEfectivo()
    {
        return $this->container['maxima_deuda_efectivo'];
    }
    
    public function setMaximaDeudaEfectivo($maxima_deuda_efectivo)
    {
        $this->container['maxima_deuda_efectivo'] = $maxima_deuda_efectivo;
        return $this;
    }
    
    public function getPorcentajeMaximaDeudaEfectivo()
    {
        return $this->container['porcentaje_maxima_deuda_efectivo'];
    }
    
    public function setPorcentajeMaximaDeudaEfectivo($porcentaje_maxima_deuda_efectivo)
    {
        $this->container['porcentaje_maxima_deuda_efectivo'] = $porcentaje_maxima_deuda_efectivo;
        return $this;
    }
    
    public function getMaximoLineaCredito()
    {
        return $this->container['maximo_linea_credito'];
    }
    
    public function setMaximoLineaCredito($maximo_linea_credito)
    {
        $this->container['maximo_linea_credito'] = $maximo_linea_credito;
        return $this;
    }
    
    public function getMaximoFechaLineaCredito()
    {
        return $this->container['maximo_fecha_linea_credito'];
    }
    
    public function setMaximoFechaLineaCredito($maximo_fecha_linea_credito)
    {
        $this->container['maximo_fecha_linea_credito'] = $maximo_fecha_linea_credito;
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
