<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class Respuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'Respuesta';
    
    protected static $rc_peTypes = [
        'datos_consulta' => '\rc\pe\Client\Model\DatosConsulta',
        'resumen_credito' => '\rc\pe\Client\Model\ResumenCredito',
        'comportamiento_rcc_mfnz' => '\rc\pe\Client\Model\ComportamientoRCCMFNZ',
        'detalles_creditos' => '\rc\pe\Client\Model\DetalleCreditos',
        'otras_obligaciones' => '\rc\pe\Client\Model\OtrasObligaciones',
        'comercio_exterior' => '\rc\pe\Client\Model\ComercioExterior',
        'consultas' => '\rc\pe\Client\Model\Consultas',
        'datos_generales' => '\rc\pe\Client\Model\DatosGenerales'
    ];
    
    protected static $rc_peFormats = [
        'datos_consulta' => null,
        'resumen_credito' => null,
        'comportamiento_rcc_mfnz' => null,
        'detalles_creditos' => null,
        'otras_obligaciones' => null,
        'comercio_exterior' => null,
        'consultas' => null,
        'datos_generales' => null
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
        'datos_consulta' => 'datosConsulta',
        'resumen_credito' => 'resumenCredito',
        'comportamiento_rcc_mfnz' => 'comportamientoRCC_MFNZ',
        'detalles_creditos' => 'detallesCreditos',
        'otras_obligaciones' => 'otrasObligaciones',
        'comercio_exterior' => 'comercioExterior',
        'consultas' => 'consultas',
        'datos_generales' => 'datosGenerales'
    ];
    
    protected static $setters = [
        'datos_consulta' => 'setDatosConsulta',
        'resumen_credito' => 'setResumenCredito',
        'comportamiento_rcc_mfnz' => 'setComportamientoRccMfnz',
        'detalles_creditos' => 'setDetallesCreditos',
        'otras_obligaciones' => 'setOtrasObligaciones',
        'comercio_exterior' => 'setComercioExterior',
        'consultas' => 'setConsultas',
        'datos_generales' => 'setDatosGenerales'
    ];
    
    protected static $getters = [
        'datos_consulta' => 'getDatosConsulta',
        'resumen_credito' => 'getResumenCredito',
        'comportamiento_rcc_mfnz' => 'getComportamientoRccMfnz',
        'detalles_creditos' => 'getDetallesCreditos',
        'otras_obligaciones' => 'getOtrasObligaciones',
        'comercio_exterior' => 'getComercioExterior',
        'consultas' => 'getConsultas',
        'datos_generales' => 'getDatosGenerales'
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
        $this->container['datos_consulta'] = isset($data['datos_consulta']) ? $data['datos_consulta'] : null;
        $this->container['resumen_credito'] = isset($data['resumen_credito']) ? $data['resumen_credito'] : null;
        $this->container['comportamiento_rcc_mfnz'] = isset($data['comportamiento_rcc_mfnz']) ? $data['comportamiento_rcc_mfnz'] : null;
        $this->container['detalles_creditos'] = isset($data['detalles_creditos']) ? $data['detalles_creditos'] : null;
        $this->container['otras_obligaciones'] = isset($data['otras_obligaciones']) ? $data['otras_obligaciones'] : null;
        $this->container['comercio_exterior'] = isset($data['comercio_exterior']) ? $data['comercio_exterior'] : null;
        $this->container['consultas'] = isset($data['consultas']) ? $data['consultas'] : null;
        $this->container['datos_generales'] = isset($data['datos_generales']) ? $data['datos_generales'] : null;
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
    
    public function getDatosConsulta()
    {
        return $this->container['datos_consulta'];
    }
    
    public function setDatosConsulta($datos_consulta)
    {
        $this->container['datos_consulta'] = $datos_consulta;
        return $this;
    }
    
    public function getResumenCredito()
    {
        return $this->container['resumen_credito'];
    }
    
    public function setResumenCredito($resumen_credito)
    {
        $this->container['resumen_credito'] = $resumen_credito;
        return $this;
    }
    
    public function getComportamientoRccMfnz()
    {
        return $this->container['comportamiento_rcc_mfnz'];
    }
    
    public function setComportamientoRccMfnz($comportamiento_rcc_mfnz)
    {
        $this->container['comportamiento_rcc_mfnz'] = $comportamiento_rcc_mfnz;
        return $this;
    }
    
    public function getDetallesCreditos()
    {
        return $this->container['detalles_creditos'];
    }
    
    public function setDetallesCreditos($detalles_creditos)
    {
        $this->container['detalles_creditos'] = $detalles_creditos;
        return $this;
    }
    
    public function getOtrasObligaciones()
    {
        return $this->container['otras_obligaciones'];
    }
    
    public function setOtrasObligaciones($otras_obligaciones)
    {
        $this->container['otras_obligaciones'] = $otras_obligaciones;
        return $this;
    }
    
    public function getComercioExterior()
    {
        return $this->container['comercio_exterior'];
    }
    
    public function setComercioExterior($comercio_exterior)
    {
        $this->container['comercio_exterior'] = $comercio_exterior;
        return $this;
    }
    
    public function getConsultas()
    {
        return $this->container['consultas'];
    }
    
    public function setConsultas($consultas)
    {
        $this->container['consultas'] = $consultas;
        return $this;
    }
    
    public function getDatosGenerales()
    {
        return $this->container['datos_generales'];
    }
    
    public function setDatosGenerales($datos_generales)
    {
        $this->container['datos_generales'] = $datos_generales;
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
