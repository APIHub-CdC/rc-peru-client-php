<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class Condicion24Meses implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'Condicion24Meses';
    
    protected static $rc_peTypes = [
        'fecha_periodo' => 'string',
        'deuda_morosa' => 'float',
        'deuda_al_dia' => 'float',
        'peor_calificacion' => 'float'
    ];
    
    protected static $rc_peFormats = [
        'fecha_periodo' => null,
        'deuda_morosa' => 'float',
        'deuda_al_dia' => 'float',
        'peor_calificacion' => null
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
        'deuda_morosa' => 'deudaMorosa',
        'deuda_al_dia' => 'deudaAlDia',
        'peor_calificacion' => 'peorCalificacion'
    ];
    
    protected static $setters = [
        'fecha_periodo' => 'setFechaPeriodo',
        'deuda_morosa' => 'setDeudaMorosa',
        'deuda_al_dia' => 'setDeudaAlDia',
        'peor_calificacion' => 'setPeorCalificacion'
    ];
    
    protected static $getters = [
        'fecha_periodo' => 'getFechaPeriodo',
        'deuda_morosa' => 'getDeudaMorosa',
        'deuda_al_dia' => 'getDeudaAlDia',
        'peor_calificacion' => 'getPeorCalificacion'
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
        $this->container['deuda_morosa'] = isset($data['deuda_morosa']) ? $data['deuda_morosa'] : null;
        $this->container['deuda_al_dia'] = isset($data['deuda_al_dia']) ? $data['deuda_al_dia'] : null;
        $this->container['peor_calificacion'] = isset($data['peor_calificacion']) ? $data['peor_calificacion'] : null;
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
    
    public function getDeudaMorosa()
    {
        return $this->container['deuda_morosa'];
    }
    
    public function setDeudaMorosa($deuda_morosa)
    {
        $this->container['deuda_morosa'] = $deuda_morosa;
        return $this;
    }
    
    public function getDeudaAlDia()
    {
        return $this->container['deuda_al_dia'];
    }
    
    public function setDeudaAlDia($deuda_al_dia)
    {
        $this->container['deuda_al_dia'] = $deuda_al_dia;
        return $this;
    }
    
    public function getPeorCalificacion()
    {
        return $this->container['peor_calificacion'];
    }
    
    public function setPeorCalificacion($peor_calificacion)
    {
        $this->container['peor_calificacion'] = $peor_calificacion;
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
