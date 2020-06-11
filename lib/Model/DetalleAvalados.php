<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class DetalleAvalados implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'DetalleAvalados';
    
    protected static $rc_peTypes = [
        'periodo' => 'string',
        'id_calificacion' => 'string',
        'id_tipo_documento' => 'string',
        'documento' => 'string',
        'nombre' => 'string',
        'entidad' => 'string',
        'saldo' => 'float'
    ];
    
    protected static $rc_peFormats = [
        'periodo' => null,
        'id_calificacion' => null,
        'id_tipo_documento' => null,
        'documento' => null,
        'nombre' => null,
        'entidad' => null,
        'saldo' => 'float'
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
        'periodo' => 'periodo',
        'id_calificacion' => 'idCalificacion',
        'id_tipo_documento' => 'idTipoDocumento',
        'documento' => 'documento',
        'nombre' => 'nombre',
        'entidad' => 'entidad',
        'saldo' => 'saldo'
    ];
    
    protected static $setters = [
        'periodo' => 'setPeriodo',
        'id_calificacion' => 'setIdCalificacion',
        'id_tipo_documento' => 'setIdTipoDocumento',
        'documento' => 'setDocumento',
        'nombre' => 'setNombre',
        'entidad' => 'setEntidad',
        'saldo' => 'setSaldo'
    ];
    
    protected static $getters = [
        'periodo' => 'getPeriodo',
        'id_calificacion' => 'getIdCalificacion',
        'id_tipo_documento' => 'getIdTipoDocumento',
        'documento' => 'getDocumento',
        'nombre' => 'getNombre',
        'entidad' => 'getEntidad',
        'saldo' => 'getSaldo'
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
        $this->container['periodo'] = isset($data['periodo']) ? $data['periodo'] : null;
        $this->container['id_calificacion'] = isset($data['id_calificacion']) ? $data['id_calificacion'] : null;
        $this->container['id_tipo_documento'] = isset($data['id_tipo_documento']) ? $data['id_tipo_documento'] : null;
        $this->container['documento'] = isset($data['documento']) ? $data['documento'] : null;
        $this->container['nombre'] = isset($data['nombre']) ? $data['nombre'] : null;
        $this->container['entidad'] = isset($data['entidad']) ? $data['entidad'] : null;
        $this->container['saldo'] = isset($data['saldo']) ? $data['saldo'] : null;
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
    
    public function getPeriodo()
    {
        return $this->container['periodo'];
    }
    
    public function setPeriodo($periodo)
    {
        $this->container['periodo'] = $periodo;
        return $this;
    }
    
    public function getIdCalificacion()
    {
        return $this->container['id_calificacion'];
    }
    
    public function setIdCalificacion($id_calificacion)
    {
        $this->container['id_calificacion'] = $id_calificacion;
        return $this;
    }
    
    public function getIdTipoDocumento()
    {
        return $this->container['id_tipo_documento'];
    }
    
    public function setIdTipoDocumento($id_tipo_documento)
    {
        $this->container['id_tipo_documento'] = $id_tipo_documento;
        return $this;
    }
    
    public function getDocumento()
    {
        return $this->container['documento'];
    }
    
    public function setDocumento($documento)
    {
        $this->container['documento'] = $documento;
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
    
    public function getEntidad()
    {
        return $this->container['entidad'];
    }
    
    public function setEntidad($entidad)
    {
        $this->container['entidad'] = $entidad;
        return $this;
    }
    
    public function getSaldo()
    {
        return $this->container['saldo'];
    }
    
    public function setSaldo($saldo)
    {
        $this->container['saldo'] = $saldo;
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
