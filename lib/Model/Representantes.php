<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class Representantes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'Representantes';
    
    protected static $rc_peTypes = [
        'clave_respuesta' => 'string',
        'fecha_reporte' => 'string',
        'documento_identidad' => 'string',
        'nombre' => 'string',
        'cargo' => 'string',
        'fecha_inicio_cargo' => 'string',
        'fecha_acta_representante' => 'string'
    ];
    
    protected static $rc_peFormats = [
        'clave_respuesta' => null,
        'fecha_reporte' => null,
        'documento_identidad' => null,
        'nombre' => null,
        'cargo' => null,
        'fecha_inicio_cargo' => null,
        'fecha_acta_representante' => null
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
        'clave_respuesta' => 'claveRespuesta',
        'fecha_reporte' => 'fechaReporte',
        'documento_identidad' => 'documentoIdentidad',
        'nombre' => 'nombre',
        'cargo' => 'cargo',
        'fecha_inicio_cargo' => 'fechaInicioCargo',
        'fecha_acta_representante' => 'fechaActaRepresentante'
    ];
    
    protected static $setters = [
        'clave_respuesta' => 'setClaveRespuesta',
        'fecha_reporte' => 'setFechaReporte',
        'documento_identidad' => 'setDocumentoIdentidad',
        'nombre' => 'setNombre',
        'cargo' => 'setCargo',
        'fecha_inicio_cargo' => 'setFechaInicioCargo',
        'fecha_acta_representante' => 'setFechaActaRepresentante'
    ];
    
    protected static $getters = [
        'clave_respuesta' => 'getClaveRespuesta',
        'fecha_reporte' => 'getFechaReporte',
        'documento_identidad' => 'getDocumentoIdentidad',
        'nombre' => 'getNombre',
        'cargo' => 'getCargo',
        'fecha_inicio_cargo' => 'getFechaInicioCargo',
        'fecha_acta_representante' => 'getFechaActaRepresentante'
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
        $this->container['clave_respuesta'] = isset($data['clave_respuesta']) ? $data['clave_respuesta'] : null;
        $this->container['fecha_reporte'] = isset($data['fecha_reporte']) ? $data['fecha_reporte'] : null;
        $this->container['documento_identidad'] = isset($data['documento_identidad']) ? $data['documento_identidad'] : null;
        $this->container['nombre'] = isset($data['nombre']) ? $data['nombre'] : null;
        $this->container['cargo'] = isset($data['cargo']) ? $data['cargo'] : null;
        $this->container['fecha_inicio_cargo'] = isset($data['fecha_inicio_cargo']) ? $data['fecha_inicio_cargo'] : null;
        $this->container['fecha_acta_representante'] = isset($data['fecha_acta_representante']) ? $data['fecha_acta_representante'] : null;
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
    
    public function getClaveRespuesta()
    {
        return $this->container['clave_respuesta'];
    }
    
    public function setClaveRespuesta($clave_respuesta)
    {
        $this->container['clave_respuesta'] = $clave_respuesta;
        return $this;
    }
    
    public function getFechaReporte()
    {
        return $this->container['fecha_reporte'];
    }
    
    public function setFechaReporte($fecha_reporte)
    {
        $this->container['fecha_reporte'] = $fecha_reporte;
        return $this;
    }
    
    public function getDocumentoIdentidad()
    {
        return $this->container['documento_identidad'];
    }
    
    public function setDocumentoIdentidad($documento_identidad)
    {
        $this->container['documento_identidad'] = $documento_identidad;
        return $this;
    }
    
    public function getNombre()
    {
        return $this->container['nombre'];
    }
    
    public function setNombre($nombre)
    {
        $this->container['nombre'] = $nombre;
        return $this;
    }
    
    public function getCargo()
    {
        return $this->container['cargo'];
    }
    
    public function setCargo($cargo)
    {
        $this->container['cargo'] = $cargo;
        return $this;
    }
    
    public function getFechaInicioCargo()
    {
        return $this->container['fecha_inicio_cargo'];
    }
    
    public function setFechaInicioCargo($fecha_inicio_cargo)
    {
        $this->container['fecha_inicio_cargo'] = $fecha_inicio_cargo;
        return $this;
    }
    
    public function getFechaActaRepresentante()
    {
        return $this->container['fecha_acta_representante'];
    }
    
    public function setFechaActaRepresentante($fecha_acta_representante)
    {
        $this->container['fecha_acta_representante'] = $fecha_acta_representante;
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
