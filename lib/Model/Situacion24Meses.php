<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class Situacion24Meses implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'Situacion24Meses';
    
    protected static $rc_peTypes = [
        'fecha_periodo' => 'string',
        'deuda_vencida' => 'float',
        'deuda_vigente' => 'float',
        'deuda_rr' => 'float',
        'deuda_judicial' => 'float',
        'deuda_castigo' => 'float'
    ];
    
    protected static $rc_peFormats = [
        'fecha_periodo' => null,
        'deuda_vencida' => 'float',
        'deuda_vigente' => 'float',
        'deuda_rr' => 'float',
        'deuda_judicial' => 'float',
        'deuda_castigo' => 'float'
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
        'fecha_periodo' => 'fechaPeriodo',
        'deuda_vencida' => 'deudaVencida',
        'deuda_vigente' => 'deudaVigente',
        'deuda_rr' => 'deudaRR',
        'deuda_judicial' => 'deudaJudicial',
        'deuda_castigo' => 'deudaCastigo'
    ];
    
    protected static $setters = [
        'fecha_periodo' => 'setFechaPeriodo',
        'deuda_vencida' => 'setDeudaVencida',
        'deuda_vigente' => 'setDeudaVigente',
        'deuda_rr' => 'setDeudaRr',
        'deuda_judicial' => 'setDeudaJudicial',
        'deuda_castigo' => 'setDeudaCastigo'
    ];
    
    protected static $getters = [
        'fecha_periodo' => 'getFechaPeriodo',
        'deuda_vencida' => 'getDeudaVencida',
        'deuda_vigente' => 'getDeudaVigente',
        'deuda_rr' => 'getDeudaRr',
        'deuda_judicial' => 'getDeudaJudicial',
        'deuda_castigo' => 'getDeudaCastigo'
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
        $this->container['fecha_periodo'] = isset($data['fecha_periodo']) ? $data['fecha_periodo'] : null;
        $this->container['deuda_vencida'] = isset($data['deuda_vencida']) ? $data['deuda_vencida'] : null;
        $this->container['deuda_vigente'] = isset($data['deuda_vigente']) ? $data['deuda_vigente'] : null;
        $this->container['deuda_rr'] = isset($data['deuda_rr']) ? $data['deuda_rr'] : null;
        $this->container['deuda_judicial'] = isset($data['deuda_judicial']) ? $data['deuda_judicial'] : null;
        $this->container['deuda_castigo'] = isset($data['deuda_castigo']) ? $data['deuda_castigo'] : null;
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
    
    public function getDeudaVencida()
    {
        return $this->container['deuda_vencida'];
    }
    
    public function setDeudaVencida($deuda_vencida)
    {
        $this->container['deuda_vencida'] = $deuda_vencida;
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
    
    public function getDeudaRr()
    {
        return $this->container['deuda_rr'];
    }
    
    public function setDeudaRr($deuda_rr)
    {
        $this->container['deuda_rr'] = $deuda_rr;
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
    
    public function getDeudaCastigo()
    {
        return $this->container['deuda_castigo'];
    }
    
    public function setDeudaCastigo($deuda_castigo)
    {
        $this->container['deuda_castigo'] = $deuda_castigo;
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
