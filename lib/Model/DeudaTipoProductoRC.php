<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class DeudaTipoProductoRC implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'DeudaTipoProductoRC';
    
    protected static $rc_peTypes = [
        'clave_concepto' => 'string',
        'monto_dia' => 'float',
        'monto_morosa' => 'float',
        'monto_total' => 'float',
        'porcentaje_dia' => 'float',
        'porcentaje_morosa' => 'float',
        'porcentaje_total' => 'float'
    ];
    
    protected static $rc_peFormats = [
        'clave_concepto' => null,
        'monto_dia' => 'float',
        'monto_morosa' => 'float',
        'monto_total' => 'float',
        'porcentaje_dia' => 'float',
        'porcentaje_morosa' => 'float',
        'porcentaje_total' => 'float'
    ];
    
    public static function rc_peTypes()
    {
        return self::$rc_peTypes;
    }
    
    public static function rc_peFormats()
    {
        return self::$rc_peFormats;
    }
    
    protected static $attributeMap = [
        'clave_concepto' => 'claveConcepto',
        'monto_dia' => 'montoDia',
        'monto_morosa' => 'montoMorosa',
        'monto_total' => 'montoTotal',
        'porcentaje_dia' => 'porcentajeDia',
        'porcentaje_morosa' => 'porcentajeMorosa',
        'porcentaje_total' => 'porcentajeTotal'
    ];
    
    protected static $setters = [
        'clave_concepto' => 'setClaveConcepto',
        'monto_dia' => 'setMontoDia',
        'monto_morosa' => 'setMontoMorosa',
        'monto_total' => 'setMontoTotal',
        'porcentaje_dia' => 'setPorcentajeDia',
        'porcentaje_morosa' => 'setPorcentajeMorosa',
        'porcentaje_total' => 'setPorcentajeTotal'
    ];
    
    protected static $getters = [
        'clave_concepto' => 'getClaveConcepto',
        'monto_dia' => 'getMontoDia',
        'monto_morosa' => 'getMontoMorosa',
        'monto_total' => 'getMontoTotal',
        'porcentaje_dia' => 'getPorcentajeDia',
        'porcentaje_morosa' => 'getPorcentajeMorosa',
        'porcentaje_total' => 'getPorcentajeTotal'
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
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['clave_concepto'] = isset($data['clave_concepto']) ? $data['clave_concepto'] : null;
        $this->container['monto_dia'] = isset($data['monto_dia']) ? $data['monto_dia'] : null;
        $this->container['monto_morosa'] = isset($data['monto_morosa']) ? $data['monto_morosa'] : null;
        $this->container['monto_total'] = isset($data['monto_total']) ? $data['monto_total'] : null;
        $this->container['porcentaje_dia'] = isset($data['porcentaje_dia']) ? $data['porcentaje_dia'] : null;
        $this->container['porcentaje_morosa'] = isset($data['porcentaje_morosa']) ? $data['porcentaje_morosa'] : null;
        $this->container['porcentaje_total'] = isset($data['porcentaje_total']) ? $data['porcentaje_total'] : null;
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
    
    public function getClaveConcepto()
    {
        return $this->container['clave_concepto'];
    }
    
    public function setClaveConcepto($clave_concepto)
    {
        $this->container['clave_concepto'] = $clave_concepto;
        return $this;
    }
    
    public function getMontoDia()
    {
        return $this->container['monto_dia'];
    }
    
    public function setMontoDia($monto_dia)
    {
        $this->container['monto_dia'] = $monto_dia;
        return $this;
    }
    
    public function getMontoMorosa()
    {
        return $this->container['monto_morosa'];
    }
    
    public function setMontoMorosa($monto_morosa)
    {
        $this->container['monto_morosa'] = $monto_morosa;
        return $this;
    }
    
    public function getMontoTotal()
    {
        return $this->container['monto_total'];
    }
    
    public function setMontoTotal($monto_total)
    {
        $this->container['monto_total'] = $monto_total;
        return $this;
    }
    
    public function getPorcentajeDia()
    {
        return $this->container['porcentaje_dia'];
    }
    
    public function setPorcentajeDia($porcentaje_dia)
    {
        $this->container['porcentaje_dia'] = $porcentaje_dia;
        return $this;
    }
    
    public function getPorcentajeMorosa()
    {
        return $this->container['porcentaje_morosa'];
    }
    
    public function setPorcentajeMorosa($porcentaje_morosa)
    {
        $this->container['porcentaje_morosa'] = $porcentaje_morosa;
        return $this;
    }
    
    public function getPorcentajeTotal()
    {
        return $this->container['porcentaje_total'];
    }
    
    public function setPorcentajeTotal($porcentaje_total)
    {
        $this->container['porcentaje_total'] = $porcentaje_total;
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
