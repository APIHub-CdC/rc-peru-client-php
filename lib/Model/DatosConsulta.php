<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class DatosConsulta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'DatosConsulta';
    
    public static $rc_peTypes = [
        'fecha_consulta' => 'string',
        'numero_consulta' => 'float',
        'otorgante' => 'string',
        'usuario' => 'string',
        'tipo_cambio' => 'float'
    ];
    
    public static $rc_peFormats = [
        'fecha_consulta' => null,
        'numero_consulta' => null,
        'otorgante' => null,
        'usuario' => null,
        'tipo_cambio' => 'float'
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
        'fecha_consulta' => 'fechaConsulta',
        'numero_consulta' => 'numeroConsulta',
        'otorgante' => 'otorgante',
        'usuario' => 'usuario',
        'tipo_cambio' => 'tipoCambio'
    ];
    
    public static $setters = [
        'fecha_consulta' => 'setFechaConsulta',
        'numero_consulta' => 'setNumeroConsulta',
        'otorgante' => 'setOtorgante',
        'usuario' => 'setUsuario',
        'tipo_cambio' => 'setTipoCambio'
    ];
    
    public static $getters = [
        'fecha_consulta' => 'getFechaConsulta',
        'numero_consulta' => 'getNumeroConsulta',
        'otorgante' => 'getOtorgante',
        'usuario' => 'getUsuario',
        'tipo_cambio' => 'getTipoCambio'
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
        $this->container['fecha_consulta'] = isset($data['fecha_consulta']) ? $data['fecha_consulta'] : null;
        $this->container['numero_consulta'] = isset($data['numero_consulta']) ? $data['numero_consulta'] : null;
        $this->container['otorgante'] = isset($data['otorgante']) ? $data['otorgante'] : null;
        $this->container['usuario'] = isset($data['usuario']) ? $data['usuario'] : null;
        $this->container['tipo_cambio'] = isset($data['tipo_cambio']) ? $data['tipo_cambio'] : null;
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
    
    public function getFechaConsulta()
    {
        return $this->container['fecha_consulta'];
    }
    
    public function setFechaConsulta($fecha_consulta)
    {
        $this->container['fecha_consulta'] = $fecha_consulta;
        return $this;
    }
    
    public function getNumeroConsulta()
    {
        return $this->container['numero_consulta'];
    }
    
    public function setNumeroConsulta($numero_consulta)
    {
        $this->container['numero_consulta'] = $numero_consulta;
        return $this;
    }
    
    public function getOtorgante()
    {
        return $this->container['otorgante'];
    }
    
    public function setOtorgante($otorgante)
    {
        $this->container['otorgante'] = $otorgante;
        return $this;
    }
    
    public function getUsuario()
    {
        return $this->container['usuario'];
    }
    
    public function setUsuario($usuario)
    {
        $this->container['usuario'] = $usuario;
        return $this;
    }
    
    public function getTipoCambio()
    {
        return $this->container['tipo_cambio'];
    }
    
    public function setTipoCambio($tipo_cambio)
    {
        $this->container['tipo_cambio'] = $tipo_cambio;
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
