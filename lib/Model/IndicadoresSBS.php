<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class IndicadoresSBS implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'IndicadoresSBS';
    
    public static $rc_peTypes = [
        'deuda_directa' => 'float',
        'deuda_directa_morosa' => 'float',
        'deuda_indirecta' => 'float',
        'deuda_castigada' => 'float',
        'numero_entidades' => 'float',
        'entidades_deuda_directa' => 'float',
        'maximo_atraso' => 'float',
        'antiguedad_maxima' => 'float',
        'entidad_mayor_deuda' => 'string'
    ];
    
    public static $rc_peFormats = [
        'deuda_directa' => 'float',
        'deuda_directa_morosa' => 'float',
        'deuda_indirecta' => 'float',
        'deuda_castigada' => 'float',
        'numero_entidades' => null,
        'entidades_deuda_directa' => null,
        'maximo_atraso' => null,
        'antiguedad_maxima' => null,
        'entidad_mayor_deuda' => null
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
        'deuda_directa' => 'deudaDirecta',
        'deuda_directa_morosa' => 'deudaDirectaMorosa',
        'deuda_indirecta' => 'deudaIndirecta',
        'deuda_castigada' => 'deudaCastigada',
        'numero_entidades' => 'numeroEntidades',
        'entidades_deuda_directa' => 'entidadesDeudaDirecta',
        'maximo_atraso' => 'maximoAtraso',
        'antiguedad_maxima' => 'antiguedadMaxima',
        'entidad_mayor_deuda' => 'entidadMayorDeuda'
    ];
    
    public static $setters = [
        'deuda_directa' => 'setDeudaDirecta',
        'deuda_directa_morosa' => 'setDeudaDirectaMorosa',
        'deuda_indirecta' => 'setDeudaIndirecta',
        'deuda_castigada' => 'setDeudaCastigada',
        'numero_entidades' => 'setNumeroEntidades',
        'entidades_deuda_directa' => 'setEntidadesDeudaDirecta',
        'maximo_atraso' => 'setMaximoAtraso',
        'antiguedad_maxima' => 'setAntiguedadMaxima',
        'entidad_mayor_deuda' => 'setEntidadMayorDeuda'
    ];
    
    public static $getters = [
        'deuda_directa' => 'getDeudaDirecta',
        'deuda_directa_morosa' => 'getDeudaDirectaMorosa',
        'deuda_indirecta' => 'getDeudaIndirecta',
        'deuda_castigada' => 'getDeudaCastigada',
        'numero_entidades' => 'getNumeroEntidades',
        'entidades_deuda_directa' => 'getEntidadesDeudaDirecta',
        'maximo_atraso' => 'getMaximoAtraso',
        'antiguedad_maxima' => 'getAntiguedadMaxima',
        'entidad_mayor_deuda' => 'getEntidadMayorDeuda'
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
        $this->container['deuda_directa'] = isset($data['deuda_directa']) ? $data['deuda_directa'] : null;
        $this->container['deuda_directa_morosa'] = isset($data['deuda_directa_morosa']) ? $data['deuda_directa_morosa'] : null;
        $this->container['deuda_indirecta'] = isset($data['deuda_indirecta']) ? $data['deuda_indirecta'] : null;
        $this->container['deuda_castigada'] = isset($data['deuda_castigada']) ? $data['deuda_castigada'] : null;
        $this->container['numero_entidades'] = isset($data['numero_entidades']) ? $data['numero_entidades'] : null;
        $this->container['entidades_deuda_directa'] = isset($data['entidades_deuda_directa']) ? $data['entidades_deuda_directa'] : null;
        $this->container['maximo_atraso'] = isset($data['maximo_atraso']) ? $data['maximo_atraso'] : null;
        $this->container['antiguedad_maxima'] = isset($data['antiguedad_maxima']) ? $data['antiguedad_maxima'] : null;
        $this->container['entidad_mayor_deuda'] = isset($data['entidad_mayor_deuda']) ? $data['entidad_mayor_deuda'] : null;
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
    
    public function getDeudaDirecta()
    {
        return $this->container['deuda_directa'];
    }
    
    public function setDeudaDirecta($deuda_directa)
    {
        $this->container['deuda_directa'] = $deuda_directa;
        return $this;
    }
    
    public function getDeudaDirectaMorosa()
    {
        return $this->container['deuda_directa_morosa'];
    }
    
    public function setDeudaDirectaMorosa($deuda_directa_morosa)
    {
        $this->container['deuda_directa_morosa'] = $deuda_directa_morosa;
        return $this;
    }
    
    public function getDeudaIndirecta()
    {
        return $this->container['deuda_indirecta'];
    }
    
    public function setDeudaIndirecta($deuda_indirecta)
    {
        $this->container['deuda_indirecta'] = $deuda_indirecta;
        return $this;
    }
    
    public function getDeudaCastigada()
    {
        return $this->container['deuda_castigada'];
    }
    
    public function setDeudaCastigada($deuda_castigada)
    {
        $this->container['deuda_castigada'] = $deuda_castigada;
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
    
    public function getEntidadesDeudaDirecta()
    {
        return $this->container['entidades_deuda_directa'];
    }
    
    public function setEntidadesDeudaDirecta($entidades_deuda_directa)
    {
        $this->container['entidades_deuda_directa'] = $entidades_deuda_directa;
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
    
    public function getAntiguedadMaxima()
    {
        return $this->container['antiguedad_maxima'];
    }
    
    public function setAntiguedadMaxima($antiguedad_maxima)
    {
        $this->container['antiguedad_maxima'] = $antiguedad_maxima;
        return $this;
    }
    
    public function getEntidadMayorDeuda()
    {
        return $this->container['entidad_mayor_deuda'];
    }
    
    public function setEntidadMayorDeuda($entidad_mayor_deuda)
    {
        $this->container['entidad_mayor_deuda'] = $entidad_mayor_deuda;
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
