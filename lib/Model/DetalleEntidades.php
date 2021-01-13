<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class DetalleEntidades implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'DetalleEntidades';
    
    public static $rc_peTypes = [
        'nombre_entidad' => 'string',
        'id_calificacion_entidad' => 'string',
        'porcentaje_calificacion' => 'float',
        'detalle_vigente' => 'float',
        'detalle_vencida_menor30' => 'float',
        'detalle_vencida_mayor30' => 'float',
        'detalle_judicial' => 'float',
        'detalle_refinanciada' => 'float',
        'detalle_indirecta' => 'float',
        'detalle_castigo' => 'float'
    ];
    
    public static $rc_peFormats = [
        'nombre_entidad' => null,
        'id_calificacion_entidad' => null,
        'porcentaje_calificacion' => 'float',
        'detalle_vigente' => 'float',
        'detalle_vencida_menor30' => 'float',
        'detalle_vencida_mayor30' => 'float',
        'detalle_judicial' => 'float',
        'detalle_refinanciada' => 'float',
        'detalle_indirecta' => 'float',
        'detalle_castigo' => 'float'
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
        'nombre_entidad' => 'nombreEntidad',
        'id_calificacion_entidad' => 'idCalificacionEntidad',
        'porcentaje_calificacion' => 'porcentajeCalificacion',
        'detalle_vigente' => 'detalleVigente',
        'detalle_vencida_menor30' => 'detalleVencidaMenor30',
        'detalle_vencida_mayor30' => 'detalleVencidaMayor30',
        'detalle_judicial' => 'detalleJudicial',
        'detalle_refinanciada' => 'detalleRefinanciada',
        'detalle_indirecta' => 'detalleIndirecta',
        'detalle_castigo' => 'detalleCastigo'
    ];
    
    public static $setters = [
        'nombre_entidad' => 'setNombreEntidad',
        'id_calificacion_entidad' => 'setIdCalificacionEntidad',
        'porcentaje_calificacion' => 'setPorcentajeCalificacion',
        'detalle_vigente' => 'setDetalleVigente',
        'detalle_vencida_menor30' => 'setDetalleVencidaMenor30',
        'detalle_vencida_mayor30' => 'setDetalleVencidaMayor30',
        'detalle_judicial' => 'setDetalleJudicial',
        'detalle_refinanciada' => 'setDetalleRefinanciada',
        'detalle_indirecta' => 'setDetalleIndirecta',
        'detalle_castigo' => 'setDetalleCastigo'
    ];
    
    public static $getters = [
        'nombre_entidad' => 'getNombreEntidad',
        'id_calificacion_entidad' => 'getIdCalificacionEntidad',
        'porcentaje_calificacion' => 'getPorcentajeCalificacion',
        'detalle_vigente' => 'getDetalleVigente',
        'detalle_vencida_menor30' => 'getDetalleVencidaMenor30',
        'detalle_vencida_mayor30' => 'getDetalleVencidaMayor30',
        'detalle_judicial' => 'getDetalleJudicial',
        'detalle_refinanciada' => 'getDetalleRefinanciada',
        'detalle_indirecta' => 'getDetalleIndirecta',
        'detalle_castigo' => 'getDetalleCastigo'
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
        $this->container['nombre_entidad'] = isset($data['nombre_entidad']) ? $data['nombre_entidad'] : null;
        $this->container['id_calificacion_entidad'] = isset($data['id_calificacion_entidad']) ? $data['id_calificacion_entidad'] : null;
        $this->container['porcentaje_calificacion'] = isset($data['porcentaje_calificacion']) ? $data['porcentaje_calificacion'] : null;
        $this->container['detalle_vigente'] = isset($data['detalle_vigente']) ? $data['detalle_vigente'] : null;
        $this->container['detalle_vencida_menor30'] = isset($data['detalle_vencida_menor30']) ? $data['detalle_vencida_menor30'] : null;
        $this->container['detalle_vencida_mayor30'] = isset($data['detalle_vencida_mayor30']) ? $data['detalle_vencida_mayor30'] : null;
        $this->container['detalle_judicial'] = isset($data['detalle_judicial']) ? $data['detalle_judicial'] : null;
        $this->container['detalle_refinanciada'] = isset($data['detalle_refinanciada']) ? $data['detalle_refinanciada'] : null;
        $this->container['detalle_indirecta'] = isset($data['detalle_indirecta']) ? $data['detalle_indirecta'] : null;
        $this->container['detalle_castigo'] = isset($data['detalle_castigo']) ? $data['detalle_castigo'] : null;
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
    
    public function getNombreEntidad()
    {
        return $this->container['nombre_entidad'];
    }
    
    public function setNombreEntidad($nombre_entidad)
    {
        $this->container['nombre_entidad'] = $nombre_entidad;
        return $this;
    }
    
    public function getIdCalificacionEntidad()
    {
        return $this->container['id_calificacion_entidad'];
    }
    
    public function setIdCalificacionEntidad($id_calificacion_entidad)
    {
        $this->container['id_calificacion_entidad'] = $id_calificacion_entidad;
        return $this;
    }
    
    public function getPorcentajeCalificacion()
    {
        return $this->container['porcentaje_calificacion'];
    }
    
    public function setPorcentajeCalificacion($porcentaje_calificacion)
    {
        $this->container['porcentaje_calificacion'] = $porcentaje_calificacion;
        return $this;
    }
    
    public function getDetalleVigente()
    {
        return $this->container['detalle_vigente'];
    }
    
    public function setDetalleVigente($detalle_vigente)
    {
        $this->container['detalle_vigente'] = $detalle_vigente;
        return $this;
    }
    
    public function getDetalleVencidaMenor30()
    {
        return $this->container['detalle_vencida_menor30'];
    }
    
    public function setDetalleVencidaMenor30($detalle_vencida_menor30)
    {
        $this->container['detalle_vencida_menor30'] = $detalle_vencida_menor30;
        return $this;
    }
    
    public function getDetalleVencidaMayor30()
    {
        return $this->container['detalle_vencida_mayor30'];
    }
    
    public function setDetalleVencidaMayor30($detalle_vencida_mayor30)
    {
        $this->container['detalle_vencida_mayor30'] = $detalle_vencida_mayor30;
        return $this;
    }
    
    public function getDetalleJudicial()
    {
        return $this->container['detalle_judicial'];
    }
    
    public function setDetalleJudicial($detalle_judicial)
    {
        $this->container['detalle_judicial'] = $detalle_judicial;
        return $this;
    }
    
    public function getDetalleRefinanciada()
    {
        return $this->container['detalle_refinanciada'];
    }
    
    public function setDetalleRefinanciada($detalle_refinanciada)
    {
        $this->container['detalle_refinanciada'] = $detalle_refinanciada;
        return $this;
    }
    
    public function getDetalleIndirecta()
    {
        return $this->container['detalle_indirecta'];
    }
    
    public function setDetalleIndirecta($detalle_indirecta)
    {
        $this->container['detalle_indirecta'] = $detalle_indirecta;
        return $this;
    }
    
    public function getDetalleCastigo()
    {
        return $this->container['detalle_castigo'];
    }
    
    public function setDetalleCastigo($detalle_castigo)
    {
        $this->container['detalle_castigo'] = $detalle_castigo;
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
