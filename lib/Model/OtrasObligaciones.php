<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class OtrasObligaciones implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'OtrasObligaciones';
    
    public static $rc_peTypes = [
        'resumen_otras_obligaciones' => '\rc\pe\Client\Model\ResumenOtrasObligaciones[]',
        'deudores_omisos' => '\rc\pe\Client\Model\DeudoresOmisos[]',
        'deudas_afp' => '\rc\pe\Client\Model\DeudasAFP[]',
        'morosidad' => '\rc\pe\Client\Model\Morosidad[]',
        'protestos_aceptante' => '\rc\pe\Client\Model\ProtestosAceptante[]',
        'protestos_girador' => '\rc\pe\Client\Model\ProtestosGirador[]'
    ];
    
    public static $rc_peFormats = [
        'resumen_otras_obligaciones' => null,
        'deudores_omisos' => null,
        'deudas_afp' => null,
        'morosidad' => null,
        'protestos_aceptante' => null,
        'protestos_girador' => null
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
        'resumen_otras_obligaciones' => 'resumenOtrasObligaciones',
        'deudores_omisos' => 'deudoresOmisos',
        'deudas_afp' => 'deudasAFP',
        'morosidad' => 'morosidad',
        'protestos_aceptante' => 'protestosAceptante',
        'protestos_girador' => 'protestosGirador'
    ];
    
    public static $setters = [
        'resumen_otras_obligaciones' => 'setResumenOtrasObligaciones',
        'deudores_omisos' => 'setDeudoresOmisos',
        'deudas_afp' => 'setDeudasAfp',
        'morosidad' => 'setMorosidad',
        'protestos_aceptante' => 'setProtestosAceptante',
        'protestos_girador' => 'setProtestosGirador'
    ];
    
    public static $getters = [
        'resumen_otras_obligaciones' => 'getResumenOtrasObligaciones',
        'deudores_omisos' => 'getDeudoresOmisos',
        'deudas_afp' => 'getDeudasAfp',
        'morosidad' => 'getMorosidad',
        'protestos_aceptante' => 'getProtestosAceptante',
        'protestos_girador' => 'getProtestosGirador'
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
        $this->container['resumen_otras_obligaciones'] = isset($data['resumen_otras_obligaciones']) ? $data['resumen_otras_obligaciones'] : null;
        $this->container['deudores_omisos'] = isset($data['deudores_omisos']) ? $data['deudores_omisos'] : null;
        $this->container['deudas_afp'] = isset($data['deudas_afp']) ? $data['deudas_afp'] : null;
        $this->container['morosidad'] = isset($data['morosidad']) ? $data['morosidad'] : null;
        $this->container['protestos_aceptante'] = isset($data['protestos_aceptante']) ? $data['protestos_aceptante'] : null;
        $this->container['protestos_girador'] = isset($data['protestos_girador']) ? $data['protestos_girador'] : null;
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
    
    public function getResumenOtrasObligaciones()
    {
        return $this->container['resumen_otras_obligaciones'];
    }
    
    public function setResumenOtrasObligaciones($resumen_otras_obligaciones)
    {
        $this->container['resumen_otras_obligaciones'] = $resumen_otras_obligaciones;
        return $this;
    }
    
    public function getDeudoresOmisos()
    {
        return $this->container['deudores_omisos'];
    }
    
    public function setDeudoresOmisos($deudores_omisos)
    {
        $this->container['deudores_omisos'] = $deudores_omisos;
        return $this;
    }
    
    public function getDeudasAfp()
    {
        return $this->container['deudas_afp'];
    }
    
    public function setDeudasAfp($deudas_afp)
    {
        $this->container['deudas_afp'] = $deudas_afp;
        return $this;
    }
    
    public function getMorosidad()
    {
        return $this->container['morosidad'];
    }
    
    public function setMorosidad($morosidad)
    {
        $this->container['morosidad'] = $morosidad;
        return $this;
    }
    
    public function getProtestosAceptante()
    {
        return $this->container['protestos_aceptante'];
    }
    
    public function setProtestosAceptante($protestos_aceptante)
    {
        $this->container['protestos_aceptante'] = $protestos_aceptante;
        return $this;
    }
    
    public function getProtestosGirador()
    {
        return $this->container['protestos_girador'];
    }
    
    public function setProtestosGirador($protestos_girador)
    {
        $this->container['protestos_girador'] = $protestos_girador;
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
