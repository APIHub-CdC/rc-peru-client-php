<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class DatosGenerales implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'DatosGenerales';
    
    public static $rc_peTypes = [
        'datos_personales' => '\rc\pe\Client\Model\DatosPersonales',
        'datos_generales_sunat' => '\rc\pe\Client\Model\DatasGeneralesSunat',
        'representantes' => '\rc\pe\Client\Model\Representantes[]',
        'direcciones' => '\rc\pe\Client\Model\Direcciones[]',
        'telefonos' => '\rc\pe\Client\Model\Telefono[]'
    ];
    
    public static $rc_peFormats = [
        'datos_personales' => null,
        'datos_generales_sunat' => null,
        'representantes' => null,
        'direcciones' => null,
        'telefonos' => null
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
        'datos_personales' => 'datosPersonales',
        'datos_generales_sunat' => 'datosGeneralesSunat',
        'representantes' => 'representantes',
        'direcciones' => 'direcciones',
        'telefonos' => 'telefonos'
    ];
    
    public static $setters = [
        'datos_personales' => 'setDatosPersonales',
        'datos_generales_sunat' => 'setDatosGeneralesSunat',
        'representantes' => 'setRepresentantes',
        'direcciones' => 'setDirecciones',
        'telefonos' => 'setTelefonos'
    ];
    
    public static $getters = [
        'datos_personales' => 'getDatosPersonales',
        'datos_generales_sunat' => 'getDatosGeneralesSunat',
        'representantes' => 'getRepresentantes',
        'direcciones' => 'getDirecciones',
        'telefonos' => 'getTelefonos'
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
        $this->container['datos_personales'] = isset($data['datos_personales']) ? $data['datos_personales'] : null;
        $this->container['datos_generales_sunat'] = isset($data['datos_generales_sunat']) ? $data['datos_generales_sunat'] : null;
        $this->container['representantes'] = isset($data['representantes']) ? $data['representantes'] : null;
        $this->container['direcciones'] = isset($data['direcciones']) ? $data['direcciones'] : null;
        $this->container['telefonos'] = isset($data['telefonos']) ? $data['telefonos'] : null;
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
    
    public function getDatosPersonales()
    {
        return $this->container['datos_personales'];
    }
    
    public function setDatosPersonales($datos_personales)
    {
        $this->container['datos_personales'] = $datos_personales;
        return $this;
    }
    
    public function getDatosGeneralesSunat()
    {
        return $this->container['datos_generales_sunat'];
    }
    
    public function setDatosGeneralesSunat($datos_generales_sunat)
    {
        $this->container['datos_generales_sunat'] = $datos_generales_sunat;
        return $this;
    }
    
    public function getRepresentantes()
    {
        return $this->container['representantes'];
    }
    
    public function setRepresentantes($representantes)
    {
        $this->container['representantes'] = $representantes;
        return $this;
    }
    
    public function getDirecciones()
    {
        return $this->container['direcciones'];
    }
    
    public function setDirecciones($direcciones)
    {
        $this->container['direcciones'] = $direcciones;
        return $this;
    }
    
    public function getTelefonos()
    {
        return $this->container['telefonos'];
    }
    
    public function setTelefonos($telefonos)
    {
        $this->container['telefonos'] = $telefonos;
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
