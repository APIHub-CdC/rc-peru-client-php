<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class ResumenOtrasObligacionesInfoFuenteInformacion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'ResumenOtrasObligaciones_infoFuenteInformacion';
    
    public static $rc_peTypes = [
        'clave_situacion' => 'string',
        'obligaciones' => 'float',
        'monto' => 'float',
        'primer_vencimiento' => 'string',
        'ultimo_vencimiento' => 'string',
        'obligaciones24_meses' => 'float',
        'monto24_meses' => 'float'
    ];
    
    public static $rc_peFormats = [
        'clave_situacion' => null,
        'obligaciones' => null,
        'monto' => 'float',
        'primer_vencimiento' => null,
        'ultimo_vencimiento' => null,
        'obligaciones24_meses' => null,
        'monto24_meses' => 'float'
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
        'clave_situacion' => 'claveSituacion',
        'obligaciones' => 'obligaciones',
        'monto' => 'monto',
        'primer_vencimiento' => 'primerVencimiento',
        'ultimo_vencimiento' => 'ultimoVencimiento',
        'obligaciones24_meses' => 'obligaciones24Meses',
        'monto24_meses' => 'monto24Meses'
    ];
    
    public static $setters = [
        'clave_situacion' => 'setClaveSituacion',
        'obligaciones' => 'setObligaciones',
        'monto' => 'setMonto',
        'primer_vencimiento' => 'setPrimerVencimiento',
        'ultimo_vencimiento' => 'setUltimoVencimiento',
        'obligaciones24_meses' => 'setObligaciones24Meses',
        'monto24_meses' => 'setMonto24Meses'
    ];
    
    public static $getters = [
        'clave_situacion' => 'getClaveSituacion',
        'obligaciones' => 'getObligaciones',
        'monto' => 'getMonto',
        'primer_vencimiento' => 'getPrimerVencimiento',
        'ultimo_vencimiento' => 'getUltimoVencimiento',
        'obligaciones24_meses' => 'getObligaciones24Meses',
        'monto24_meses' => 'getMonto24Meses'
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
        $this->container['clave_situacion'] = isset($data['clave_situacion']) ? $data['clave_situacion'] : null;
        $this->container['obligaciones'] = isset($data['obligaciones']) ? $data['obligaciones'] : null;
        $this->container['monto'] = isset($data['monto']) ? $data['monto'] : null;
        $this->container['primer_vencimiento'] = isset($data['primer_vencimiento']) ? $data['primer_vencimiento'] : null;
        $this->container['ultimo_vencimiento'] = isset($data['ultimo_vencimiento']) ? $data['ultimo_vencimiento'] : null;
        $this->container['obligaciones24_meses'] = isset($data['obligaciones24_meses']) ? $data['obligaciones24_meses'] : null;
        $this->container['monto24_meses'] = isset($data['monto24_meses']) ? $data['monto24_meses'] : null;
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
    
    public function getClaveSituacion()
    {
        return $this->container['clave_situacion'];
    }
    
    public function setClaveSituacion($clave_situacion)
    {
        $this->container['clave_situacion'] = $clave_situacion;
        return $this;
    }
    
    public function getObligaciones()
    {
        return $this->container['obligaciones'];
    }
    
    public function setObligaciones($obligaciones)
    {
        $this->container['obligaciones'] = $obligaciones;
        return $this;
    }
    
    public function getMonto()
    {
        return $this->container['monto'];
    }
    
    public function setMonto($monto)
    {
        $this->container['monto'] = $monto;
        return $this;
    }
    
    public function getPrimerVencimiento()
    {
        return $this->container['primer_vencimiento'];
    }
    
    public function setPrimerVencimiento($primer_vencimiento)
    {
        $this->container['primer_vencimiento'] = $primer_vencimiento;
        return $this;
    }
    
    public function getUltimoVencimiento()
    {
        return $this->container['ultimo_vencimiento'];
    }
    
    public function setUltimoVencimiento($ultimo_vencimiento)
    {
        $this->container['ultimo_vencimiento'] = $ultimo_vencimiento;
        return $this;
    }
    
    public function getObligaciones24Meses()
    {
        return $this->container['obligaciones24_meses'];
    }
    
    public function setObligaciones24Meses($obligaciones24_meses)
    {
        $this->container['obligaciones24_meses'] = $obligaciones24_meses;
        return $this;
    }
    
    public function getMonto24Meses()
    {
        return $this->container['monto24_meses'];
    }
    
    public function setMonto24Meses($monto24_meses)
    {
        $this->container['monto24_meses'] = $monto24_meses;
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
