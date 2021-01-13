<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class DetalleCreditos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'DetalleCreditos';
    
    public static $rc_peTypes = [
        'detalle_creditos_rcc' => '\rc\pe\Client\Model\DetalleCreditosRCC[]',
        'detalle_creditos_mfnz' => '\rc\pe\Client\Model\DetalleCreditosMFNZ[]',
        'avalistas_avalados' => '\rc\pe\Client\Model\DetalleCreditosAvalistasAvalados'
    ];
    
    public static $rc_peFormats = [
        'detalle_creditos_rcc' => null,
        'detalle_creditos_mfnz' => null,
        'avalistas_avalados' => null
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
        'detalle_creditos_rcc' => 'detalleCreditosRCC',
        'detalle_creditos_mfnz' => 'detalleCreditosMFNZ',
        'avalistas_avalados' => 'avalistasAvalados'
    ];
    
    public static $setters = [
        'detalle_creditos_rcc' => 'setDetalleCreditosRcc',
        'detalle_creditos_mfnz' => 'setDetalleCreditosMfnz',
        'avalistas_avalados' => 'setAvalistasAvalados'
    ];
    
    public static $getters = [
        'detalle_creditos_rcc' => 'getDetalleCreditosRcc',
        'detalle_creditos_mfnz' => 'getDetalleCreditosMfnz',
        'avalistas_avalados' => 'getAvalistasAvalados'
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
        $this->container['detalle_creditos_rcc'] = isset($data['detalle_creditos_rcc']) ? $data['detalle_creditos_rcc'] : null;
        $this->container['detalle_creditos_mfnz'] = isset($data['detalle_creditos_mfnz']) ? $data['detalle_creditos_mfnz'] : null;
        $this->container['avalistas_avalados'] = isset($data['avalistas_avalados']) ? $data['avalistas_avalados'] : null;
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
    
    public function getDetalleCreditosRcc()
    {
        return $this->container['detalle_creditos_rcc'];
    }
    
    public function setDetalleCreditosRcc($detalle_creditos_rcc)
    {
        $this->container['detalle_creditos_rcc'] = $detalle_creditos_rcc;
        return $this;
    }
    
    public function getDetalleCreditosMfnz()
    {
        return $this->container['detalle_creditos_mfnz'];
    }
    
    public function setDetalleCreditosMfnz($detalle_creditos_mfnz)
    {
        $this->container['detalle_creditos_mfnz'] = $detalle_creditos_mfnz;
        return $this;
    }
    
    public function getAvalistasAvalados()
    {
        return $this->container['avalistas_avalados'];
    }
    
    public function setAvalistasAvalados($avalistas_avalados)
    {
        $this->container['avalistas_avalados'] = $avalistas_avalados;
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
