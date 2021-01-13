<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class InformacionEntidad24 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'InformacionEntidad24';
    
    public static $rc_peTypes = [
        'descripcion_entidad' => 'string',
        'clave_situacion' => 'string',
        'id_calificacion' => 'string',
        'dias_atraso' => 'float',
        'maximo_atraso' => 'float',
        'deuda_maximo_atraso' => 'float',
        'inicio_periodo' => 'string',
        'fin_periodo' => 'string',
        'atrasos24' => 'string'
    ];
    
    public static $rc_peFormats = [
        'descripcion_entidad' => null,
        'clave_situacion' => null,
        'id_calificacion' => null,
        'dias_atraso' => null,
        'maximo_atraso' => null,
        'deuda_maximo_atraso' => 'float',
        'inicio_periodo' => null,
        'fin_periodo' => null,
        'atrasos24' => null
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
        'descripcion_entidad' => 'descripcionEntidad',
        'clave_situacion' => 'claveSituacion',
        'id_calificacion' => 'idCalificacion',
        'dias_atraso' => 'diasAtraso',
        'maximo_atraso' => 'maximoAtraso',
        'deuda_maximo_atraso' => 'deudaMaximoAtraso',
        'inicio_periodo' => 'inicioPeriodo',
        'fin_periodo' => 'finPeriodo',
        'atrasos24' => 'atrasos24'
    ];
    
    public static $setters = [
        'descripcion_entidad' => 'setDescripcionEntidad',
        'clave_situacion' => 'setClaveSituacion',
        'id_calificacion' => 'setIdCalificacion',
        'dias_atraso' => 'setDiasAtraso',
        'maximo_atraso' => 'setMaximoAtraso',
        'deuda_maximo_atraso' => 'setDeudaMaximoAtraso',
        'inicio_periodo' => 'setInicioPeriodo',
        'fin_periodo' => 'setFinPeriodo',
        'atrasos24' => 'setAtrasos24'
    ];
    
    public static $getters = [
        'descripcion_entidad' => 'getDescripcionEntidad',
        'clave_situacion' => 'getClaveSituacion',
        'id_calificacion' => 'getIdCalificacion',
        'dias_atraso' => 'getDiasAtraso',
        'maximo_atraso' => 'getMaximoAtraso',
        'deuda_maximo_atraso' => 'getDeudaMaximoAtraso',
        'inicio_periodo' => 'getInicioPeriodo',
        'fin_periodo' => 'getFinPeriodo',
        'atrasos24' => 'getAtrasos24'
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
        $this->container['descripcion_entidad'] = isset($data['descripcion_entidad']) ? $data['descripcion_entidad'] : null;
        $this->container['clave_situacion'] = isset($data['clave_situacion']) ? $data['clave_situacion'] : null;
        $this->container['id_calificacion'] = isset($data['id_calificacion']) ? $data['id_calificacion'] : null;
        $this->container['dias_atraso'] = isset($data['dias_atraso']) ? $data['dias_atraso'] : null;
        $this->container['maximo_atraso'] = isset($data['maximo_atraso']) ? $data['maximo_atraso'] : null;
        $this->container['deuda_maximo_atraso'] = isset($data['deuda_maximo_atraso']) ? $data['deuda_maximo_atraso'] : null;
        $this->container['inicio_periodo'] = isset($data['inicio_periodo']) ? $data['inicio_periodo'] : null;
        $this->container['fin_periodo'] = isset($data['fin_periodo']) ? $data['fin_periodo'] : null;
        $this->container['atrasos24'] = isset($data['atrasos24']) ? $data['atrasos24'] : null;
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
    
    public function getIdCalificacion()
    {
        return $this->container['id_calificacion'];
    }
    
    public function setIdCalificacion($id_calificacion)
    {
        $this->container['id_calificacion'] = $id_calificacion;
        return $this;
    }
    
    public function getDiasAtraso()
    {
        return $this->container['dias_atraso'];
    }
    
    public function setDiasAtraso($dias_atraso)
    {
        $this->container['dias_atraso'] = $dias_atraso;
        return $this;
    }
    
    public function getMaximoAtraso()
    {
        return $this->container['maximo_atraso'];
    }
    
    public function setMaximoAtraso($maximo_atraso)
    {
        $this->container['maximo_atraso'] = $maximo_atraso;
        return $this;
    }
    
    public function getDeudaMaximoAtraso()
    {
        return $this->container['deuda_maximo_atraso'];
    }
    
    public function setDeudaMaximoAtraso($deuda_maximo_atraso)
    {
        $this->container['deuda_maximo_atraso'] = $deuda_maximo_atraso;
        return $this;
    }
    
    public function getInicioPeriodo()
    {
        return $this->container['inicio_periodo'];
    }
    
    public function setInicioPeriodo($inicio_periodo)
    {
        $this->container['inicio_periodo'] = $inicio_periodo;
        return $this;
    }
    
    public function getFinPeriodo()
    {
        return $this->container['fin_periodo'];
    }
    
    public function setFinPeriodo($fin_periodo)
    {
        $this->container['fin_periodo'] = $fin_periodo;
        return $this;
    }
    
    public function getAtrasos24()
    {
        return $this->container['atrasos24'];
    }
    
    public function setAtrasos24($atrasos24)
    {
        $this->container['atrasos24'] = $atrasos24;
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
