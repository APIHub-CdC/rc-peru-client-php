<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class Calificacion24Meses implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'Calificacion24Meses';
    
    public static $rc_peTypes = [
        'fecha_periodo' => 'string',
        'deuda_normal' => 'float',
        'deuda_cpp' => 'float',
        'deuda_deficiente' => 'float',
        'deuda_dudoso' => 'float',
        'deuda_perdida' => 'float',
        'numero_entidades' => 'float'
    ];
    
    public static $rc_peFormats = [
        'fecha_periodo' => null,
        'deuda_normal' => 'float',
        'deuda_cpp' => 'float',
        'deuda_deficiente' => 'float',
        'deuda_dudoso' => 'float',
        'deuda_perdida' => 'float',
        'numero_entidades' => null
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
        'fecha_periodo' => 'fechaPeriodo',
        'deuda_normal' => 'deudaNormal',
        'deuda_cpp' => 'deudaCPP',
        'deuda_deficiente' => 'deudaDeficiente',
        'deuda_dudoso' => 'deudaDudoso',
        'deuda_perdida' => 'deudaPerdida',
        'numero_entidades' => 'numeroEntidades'
    ];
    
    public static $setters = [
        'fecha_periodo' => 'setFechaPeriodo',
        'deuda_normal' => 'setDeudaNormal',
        'deuda_cpp' => 'setDeudaCpp',
        'deuda_deficiente' => 'setDeudaDeficiente',
        'deuda_dudoso' => 'setDeudaDudoso',
        'deuda_perdida' => 'setDeudaPerdida',
        'numero_entidades' => 'setNumeroEntidades'
    ];
    
    public static $getters = [
        'fecha_periodo' => 'getFechaPeriodo',
        'deuda_normal' => 'getDeudaNormal',
        'deuda_cpp' => 'getDeudaCpp',
        'deuda_deficiente' => 'getDeudaDeficiente',
        'deuda_dudoso' => 'getDeudaDudoso',
        'deuda_perdida' => 'getDeudaPerdida',
        'numero_entidades' => 'getNumeroEntidades'
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
        $this->container['fecha_periodo'] = isset($data['fecha_periodo']) ? $data['fecha_periodo'] : null;
        $this->container['deuda_normal'] = isset($data['deuda_normal']) ? $data['deuda_normal'] : null;
        $this->container['deuda_cpp'] = isset($data['deuda_cpp']) ? $data['deuda_cpp'] : null;
        $this->container['deuda_deficiente'] = isset($data['deuda_deficiente']) ? $data['deuda_deficiente'] : null;
        $this->container['deuda_dudoso'] = isset($data['deuda_dudoso']) ? $data['deuda_dudoso'] : null;
        $this->container['deuda_perdida'] = isset($data['deuda_perdida']) ? $data['deuda_perdida'] : null;
        $this->container['numero_entidades'] = isset($data['numero_entidades']) ? $data['numero_entidades'] : null;
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
    
    public function getFechaPeriodo()
    {
        return $this->container['fecha_periodo'];
    }
    
    public function setFechaPeriodo($fecha_periodo)
    {
        $this->container['fecha_periodo'] = $fecha_periodo;
        return $this;
    }
    
    public function getDeudaNormal()
    {
        return $this->container['deuda_normal'];
    }
    
    public function setDeudaNormal($deuda_normal)
    {
        $this->container['deuda_normal'] = $deuda_normal;
        return $this;
    }
    
    public function getDeudaCpp()
    {
        return $this->container['deuda_cpp'];
    }
    
    public function setDeudaCpp($deuda_cpp)
    {
        $this->container['deuda_cpp'] = $deuda_cpp;
        return $this;
    }
    
    public function getDeudaDeficiente()
    {
        return $this->container['deuda_deficiente'];
    }
    
    public function setDeudaDeficiente($deuda_deficiente)
    {
        $this->container['deuda_deficiente'] = $deuda_deficiente;
        return $this;
    }
    
    public function getDeudaDudoso()
    {
        return $this->container['deuda_dudoso'];
    }
    
    public function setDeudaDudoso($deuda_dudoso)
    {
        $this->container['deuda_dudoso'] = $deuda_dudoso;
        return $this;
    }
    
    public function getDeudaPerdida()
    {
        return $this->container['deuda_perdida'];
    }
    
    public function setDeudaPerdida($deuda_perdida)
    {
        $this->container['deuda_perdida'] = $deuda_perdida;
        return $this;
    }
    
    public function getNumeroEntidades()
    {
        return $this->container['numero_entidades'];
    }
    
    public function setNumeroEntidades($numero_entidades)
    {
        $this->container['numero_entidades'] = $numero_entidades;
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
