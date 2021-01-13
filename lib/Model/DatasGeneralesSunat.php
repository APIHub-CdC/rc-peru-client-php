<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class DatasGeneralesSunat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'DatasGeneralesSunat';
    
    public static $rc_peTypes = [
        'nombre_comercial' => 'string',
        'clave_ciiu' => 'string',
        'fecha_inicio_actividades' => 'string',
        'clave_tipo_contribuyente' => 'string',
        'dependencia' => 'string',
        'clave_pais' => 'string',
        'clave_estado_contribuyente' => 'string',
        'actividad_comercio_exterior' => 'string',
        'fecha_actividad_comercio_exterior' => 'string'
    ];
    
    public static $rc_peFormats = [
        'nombre_comercial' => null,
        'clave_ciiu' => null,
        'fecha_inicio_actividades' => null,
        'clave_tipo_contribuyente' => null,
        'dependencia' => null,
        'clave_pais' => null,
        'clave_estado_contribuyente' => null,
        'actividad_comercio_exterior' => null,
        'fecha_actividad_comercio_exterior' => null
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
        'nombre_comercial' => 'nombreComercial',
        'clave_ciiu' => 'claveCiiu',
        'fecha_inicio_actividades' => 'fechaInicioActividades',
        'clave_tipo_contribuyente' => 'claveTipoContribuyente',
        'dependencia' => 'dependencia',
        'clave_pais' => 'clavePais',
        'clave_estado_contribuyente' => 'claveEstadoContribuyente',
        'actividad_comercio_exterior' => 'actividadComercioExterior',
        'fecha_actividad_comercio_exterior' => 'fechaActividadComercioExterior'
    ];
    
    public static $setters = [
        'nombre_comercial' => 'setNombreComercial',
        'clave_ciiu' => 'setClaveCiiu',
        'fecha_inicio_actividades' => 'setFechaInicioActividades',
        'clave_tipo_contribuyente' => 'setClaveTipoContribuyente',
        'dependencia' => 'setDependencia',
        'clave_pais' => 'setClavePais',
        'clave_estado_contribuyente' => 'setClaveEstadoContribuyente',
        'actividad_comercio_exterior' => 'setActividadComercioExterior',
        'fecha_actividad_comercio_exterior' => 'setFechaActividadComercioExterior'
    ];
    
    public static $getters = [
        'nombre_comercial' => 'getNombreComercial',
        'clave_ciiu' => 'getClaveCiiu',
        'fecha_inicio_actividades' => 'getFechaInicioActividades',
        'clave_tipo_contribuyente' => 'getClaveTipoContribuyente',
        'dependencia' => 'getDependencia',
        'clave_pais' => 'getClavePais',
        'clave_estado_contribuyente' => 'getClaveEstadoContribuyente',
        'actividad_comercio_exterior' => 'getActividadComercioExterior',
        'fecha_actividad_comercio_exterior' => 'getFechaActividadComercioExterior'
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
        $this->container['nombre_comercial'] = isset($data['nombre_comercial']) ? $data['nombre_comercial'] : null;
        $this->container['clave_ciiu'] = isset($data['clave_ciiu']) ? $data['clave_ciiu'] : null;
        $this->container['fecha_inicio_actividades'] = isset($data['fecha_inicio_actividades']) ? $data['fecha_inicio_actividades'] : null;
        $this->container['clave_tipo_contribuyente'] = isset($data['clave_tipo_contribuyente']) ? $data['clave_tipo_contribuyente'] : null;
        $this->container['dependencia'] = isset($data['dependencia']) ? $data['dependencia'] : null;
        $this->container['clave_pais'] = isset($data['clave_pais']) ? $data['clave_pais'] : null;
        $this->container['clave_estado_contribuyente'] = isset($data['clave_estado_contribuyente']) ? $data['clave_estado_contribuyente'] : null;
        $this->container['actividad_comercio_exterior'] = isset($data['actividad_comercio_exterior']) ? $data['actividad_comercio_exterior'] : null;
        $this->container['fecha_actividad_comercio_exterior'] = isset($data['fecha_actividad_comercio_exterior']) ? $data['fecha_actividad_comercio_exterior'] : null;
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
    
    public function getNombreComercial()
    {
        return $this->container['nombre_comercial'];
    }
    
    public function setNombreComercial($nombre_comercial)
    {
        $this->container['nombre_comercial'] = $nombre_comercial;
        return $this;
    }
    
    public function getClaveCiiu()
    {
        return $this->container['clave_ciiu'];
    }
    
    public function setClaveCiiu($clave_ciiu)
    {
        $this->container['clave_ciiu'] = $clave_ciiu;
        return $this;
    }
    
    public function getFechaInicioActividades()
    {
        return $this->container['fecha_inicio_actividades'];
    }
    
    public function setFechaInicioActividades($fecha_inicio_actividades)
    {
        $this->container['fecha_inicio_actividades'] = $fecha_inicio_actividades;
        return $this;
    }
    
    public function getClaveTipoContribuyente()
    {
        return $this->container['clave_tipo_contribuyente'];
    }
    
    public function setClaveTipoContribuyente($clave_tipo_contribuyente)
    {
        $this->container['clave_tipo_contribuyente'] = $clave_tipo_contribuyente;
        return $this;
    }
    
    public function getDependencia()
    {
        return $this->container['dependencia'];
    }
    
    public function setDependencia($dependencia)
    {
        $this->container['dependencia'] = $dependencia;
        return $this;
    }
    
    public function getClavePais()
    {
        return $this->container['clave_pais'];
    }
    
    public function setClavePais($clave_pais)
    {
        $this->container['clave_pais'] = $clave_pais;
        return $this;
    }
    
    public function getClaveEstadoContribuyente()
    {
        return $this->container['clave_estado_contribuyente'];
    }
    
    public function setClaveEstadoContribuyente($clave_estado_contribuyente)
    {
        $this->container['clave_estado_contribuyente'] = $clave_estado_contribuyente;
        return $this;
    }
    
    public function getActividadComercioExterior()
    {
        return $this->container['actividad_comercio_exterior'];
    }
    
    public function setActividadComercioExterior($actividad_comercio_exterior)
    {
        $this->container['actividad_comercio_exterior'] = $actividad_comercio_exterior;
        return $this;
    }
    
    public function getFechaActividadComercioExterior()
    {
        return $this->container['fecha_actividad_comercio_exterior'];
    }
    
    public function setFechaActividadComercioExterior($fecha_actividad_comercio_exterior)
    {
        $this->container['fecha_actividad_comercio_exterior'] = $fecha_actividad_comercio_exterior;
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
