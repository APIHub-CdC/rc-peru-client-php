<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class Direcciones implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'Direcciones';
    
    protected static $rc_peTypes = [
        'fuente' => 'string',
        'ubigeo' => 'string',
        'departamento' => 'string',
        'provincia' => 'string',
        'distrito' => 'string',
        'nombre_via' => 'string',
        'numero_exterior' => 'string',
        'numero_interior' => 'string',
        'nombre_zona' => 'string',
        'referencia' => 'string',
        'fecha' => 'string',
        'fecha_actualizaciont_sunat' => 'string'
    ];
    
    protected static $rc_peFormats = [
        'fuente' => null,
        'ubigeo' => null,
        'departamento' => null,
        'provincia' => null,
        'distrito' => null,
        'nombre_via' => null,
        'numero_exterior' => null,
        'numero_interior' => null,
        'nombre_zona' => null,
        'referencia' => null,
        'fecha' => null,
        'fecha_actualizaciont_sunat' => null
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
        'fuente' => 'fuente',
        'ubigeo' => 'ubigeo',
        'departamento' => 'departamento',
        'provincia' => 'provincia',
        'distrito' => 'distrito',
        'nombre_via' => 'nombreVia',
        'numero_exterior' => 'numeroExterior',
        'numero_interior' => 'numeroInterior',
        'nombre_zona' => 'nombreZona',
        'referencia' => 'referencia',
        'fecha' => 'fecha',
        'fecha_actualizaciont_sunat' => 'fechaActualizaciontSunat'
    ];
    
    protected static $setters = [
        'fuente' => 'setFuente',
        'ubigeo' => 'setUbigeo',
        'departamento' => 'setDepartamento',
        'provincia' => 'setProvincia',
        'distrito' => 'setDistrito',
        'nombre_via' => 'setNombreVia',
        'numero_exterior' => 'setNumeroExterior',
        'numero_interior' => 'setNumeroInterior',
        'nombre_zona' => 'setNombreZona',
        'referencia' => 'setReferencia',
        'fecha' => 'setFecha',
        'fecha_actualizaciont_sunat' => 'setFechaActualizaciontSunat'
    ];
    
    protected static $getters = [
        'fuente' => 'getFuente',
        'ubigeo' => 'getUbigeo',
        'departamento' => 'getDepartamento',
        'provincia' => 'getProvincia',
        'distrito' => 'getDistrito',
        'nombre_via' => 'getNombreVia',
        'numero_exterior' => 'getNumeroExterior',
        'numero_interior' => 'getNumeroInterior',
        'nombre_zona' => 'getNombreZona',
        'referencia' => 'getReferencia',
        'fecha' => 'getFecha',
        'fecha_actualizaciont_sunat' => 'getFechaActualizaciontSunat'
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
        $this->container['fuente'] = isset($data['fuente']) ? $data['fuente'] : null;
        $this->container['ubigeo'] = isset($data['ubigeo']) ? $data['ubigeo'] : null;
        $this->container['departamento'] = isset($data['departamento']) ? $data['departamento'] : null;
        $this->container['provincia'] = isset($data['provincia']) ? $data['provincia'] : null;
        $this->container['distrito'] = isset($data['distrito']) ? $data['distrito'] : null;
        $this->container['nombre_via'] = isset($data['nombre_via']) ? $data['nombre_via'] : null;
        $this->container['numero_exterior'] = isset($data['numero_exterior']) ? $data['numero_exterior'] : null;
        $this->container['numero_interior'] = isset($data['numero_interior']) ? $data['numero_interior'] : null;
        $this->container['nombre_zona'] = isset($data['nombre_zona']) ? $data['nombre_zona'] : null;
        $this->container['referencia'] = isset($data['referencia']) ? $data['referencia'] : null;
        $this->container['fecha'] = isset($data['fecha']) ? $data['fecha'] : null;
        $this->container['fecha_actualizaciont_sunat'] = isset($data['fecha_actualizaciont_sunat']) ? $data['fecha_actualizaciont_sunat'] : null;
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
    
    public function getFuente()
    {
        return $this->container['fuente'];
    }
    
    public function setFuente($fuente)
    {
        $this->container['fuente'] = $fuente;
        return $this;
    }
    
    public function getUbigeo()
    {
        return $this->container['ubigeo'];
    }
    
    public function setUbigeo($ubigeo)
    {
        $this->container['ubigeo'] = $ubigeo;
        return $this;
    }
    
    public function getDepartamento()
    {
        return $this->container['departamento'];
    }
    
    public function setDepartamento($departamento)
    {
        $this->container['departamento'] = $departamento;
        return $this;
    }
    
    public function getProvincia()
    {
        return $this->container['provincia'];
    }
    
    public function setProvincia($provincia)
    {
        $this->container['provincia'] = $provincia;
        return $this;
    }
    
    public function getDistrito()
    {
        return $this->container['distrito'];
    }
    
    public function setDistrito($distrito)
    {
        $this->container['distrito'] = $distrito;
        return $this;
    }
    
    public function getNombreVia()
    {
        return $this->container['nombre_via'];
    }
    
    public function setNombreVia($nombre_via)
    {
        $this->container['nombre_via'] = $nombre_via;
        return $this;
    }
    
    public function getNumeroExterior()
    {
        return $this->container['numero_exterior'];
    }
    
    public function setNumeroExterior($numero_exterior)
    {
        $this->container['numero_exterior'] = $numero_exterior;
        return $this;
    }
    
    public function getNumeroInterior()
    {
        return $this->container['numero_interior'];
    }
    
    public function setNumeroInterior($numero_interior)
    {
        $this->container['numero_interior'] = $numero_interior;
        return $this;
    }
    
    public function getNombreZona()
    {
        return $this->container['nombre_zona'];
    }
    
    public function setNombreZona($nombre_zona)
    {
        $this->container['nombre_zona'] = $nombre_zona;
        return $this;
    }
    
    public function getReferencia()
    {
        return $this->container['referencia'];
    }
    
    public function setReferencia($referencia)
    {
        $this->container['referencia'] = $referencia;
        return $this;
    }
    
    public function getFecha()
    {
        return $this->container['fecha'];
    }
    
    public function setFecha($fecha)
    {
        $this->container['fecha'] = $fecha;
        return $this;
    }
    
    public function getFechaActualizaciontSunat()
    {
        return $this->container['fecha_actualizaciont_sunat'];
    }
    
    public function setFechaActualizaciontSunat($fecha_actualizaciont_sunat)
    {
        $this->container['fecha_actualizaciont_sunat'] = $fecha_actualizaciont_sunat;
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
