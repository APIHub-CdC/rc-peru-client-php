<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class ProtestosGirador implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'ProtestosGirador';
    
    protected static $rc_peTypes = [
        'nombre_aceptante' => 'string',
        'segundo_nombre_aceptante' => 'string',
        'apellido_paterno_aceptante' => 'string',
        'apellido_materno_aceptante' => 'string',
        'clave_situacion' => 'string',
        'fecha_protesto' => 'string',
        'fecha_aclaracion' => 'string',
        'monto' => 'float',
        'clave_tipo_valor' => 'string'
    ];
    
    protected static $rc_peFormats = [
        'nombre_aceptante' => null,
        'segundo_nombre_aceptante' => null,
        'apellido_paterno_aceptante' => null,
        'apellido_materno_aceptante' => null,
        'clave_situacion' => null,
        'fecha_protesto' => null,
        'fecha_aclaracion' => null,
        'monto' => 'float',
        'clave_tipo_valor' => null
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
        'nombre_aceptante' => 'nombreAceptante',
        'segundo_nombre_aceptante' => 'segundoNombreAceptante',
        'apellido_paterno_aceptante' => 'apellidoPaternoAceptante',
        'apellido_materno_aceptante' => 'apellidoMaternoAceptante',
        'clave_situacion' => 'claveSituacion',
        'fecha_protesto' => 'fechaProtesto',
        'fecha_aclaracion' => 'fechaAclaracion',
        'monto' => 'monto',
        'clave_tipo_valor' => 'claveTipoValor'
    ];
    
    protected static $setters = [
        'nombre_aceptante' => 'setNombreAceptante',
        'segundo_nombre_aceptante' => 'setSegundoNombreAceptante',
        'apellido_paterno_aceptante' => 'setApellidoPaternoAceptante',
        'apellido_materno_aceptante' => 'setApellidoMaternoAceptante',
        'clave_situacion' => 'setClaveSituacion',
        'fecha_protesto' => 'setFechaProtesto',
        'fecha_aclaracion' => 'setFechaAclaracion',
        'monto' => 'setMonto',
        'clave_tipo_valor' => 'setClaveTipoValor'
    ];
    
    protected static $getters = [
        'nombre_aceptante' => 'getNombreAceptante',
        'segundo_nombre_aceptante' => 'getSegundoNombreAceptante',
        'apellido_paterno_aceptante' => 'getApellidoPaternoAceptante',
        'apellido_materno_aceptante' => 'getApellidoMaternoAceptante',
        'clave_situacion' => 'getClaveSituacion',
        'fecha_protesto' => 'getFechaProtesto',
        'fecha_aclaracion' => 'getFechaAclaracion',
        'monto' => 'getMonto',
        'clave_tipo_valor' => 'getClaveTipoValor'
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
        $this->container['nombre_aceptante'] = isset($data['nombre_aceptante']) ? $data['nombre_aceptante'] : null;
        $this->container['segundo_nombre_aceptante'] = isset($data['segundo_nombre_aceptante']) ? $data['segundo_nombre_aceptante'] : null;
        $this->container['apellido_paterno_aceptante'] = isset($data['apellido_paterno_aceptante']) ? $data['apellido_paterno_aceptante'] : null;
        $this->container['apellido_materno_aceptante'] = isset($data['apellido_materno_aceptante']) ? $data['apellido_materno_aceptante'] : null;
        $this->container['clave_situacion'] = isset($data['clave_situacion']) ? $data['clave_situacion'] : null;
        $this->container['fecha_protesto'] = isset($data['fecha_protesto']) ? $data['fecha_protesto'] : null;
        $this->container['fecha_aclaracion'] = isset($data['fecha_aclaracion']) ? $data['fecha_aclaracion'] : null;
        $this->container['monto'] = isset($data['monto']) ? $data['monto'] : null;
        $this->container['clave_tipo_valor'] = isset($data['clave_tipo_valor']) ? $data['clave_tipo_valor'] : null;
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
    
    public function getNombreAceptante()
    {
        return $this->container['nombre_aceptante'];
    }
    
    public function setNombreAceptante($nombre_aceptante)
    {
        $this->container['nombre_aceptante'] = $nombre_aceptante;
        return $this;
    }
    
    public function getSegundoNombreAceptante()
    {
        return $this->container['segundo_nombre_aceptante'];
    }
    
    public function setSegundoNombreAceptante($segundo_nombre_aceptante)
    {
        $this->container['segundo_nombre_aceptante'] = $segundo_nombre_aceptante;
        return $this;
    }
    
    public function getApellidoPaternoAceptante()
    {
        return $this->container['apellido_paterno_aceptante'];
    }
    
    public function setApellidoPaternoAceptante($apellido_paterno_aceptante)
    {
        $this->container['apellido_paterno_aceptante'] = $apellido_paterno_aceptante;
        return $this;
    }
    
    public function getApellidoMaternoAceptante()
    {
        return $this->container['apellido_materno_aceptante'];
    }
    
    public function setApellidoMaternoAceptante($apellido_materno_aceptante)
    {
        $this->container['apellido_materno_aceptante'] = $apellido_materno_aceptante;
        return $this;
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
    
    public function getFechaProtesto()
    {
        return $this->container['fecha_protesto'];
    }
    
    public function setFechaProtesto($fecha_protesto)
    {
        $this->container['fecha_protesto'] = $fecha_protesto;
        return $this;
    }
    
    public function getFechaAclaracion()
    {
        return $this->container['fecha_aclaracion'];
    }
    
    public function setFechaAclaracion($fecha_aclaracion)
    {
        $this->container['fecha_aclaracion'] = $fecha_aclaracion;
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
    
    public function getClaveTipoValor()
    {
        return $this->container['clave_tipo_valor'];
    }
    
    public function setClaveTipoValor($clave_tipo_valor)
    {
        $this->container['clave_tipo_valor'] = $clave_tipo_valor;
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
