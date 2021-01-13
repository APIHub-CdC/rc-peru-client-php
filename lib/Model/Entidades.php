<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class Entidades implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'Entidades';
    
    public static $rc_peTypes = [
        'nombre_entidad' => 'string',
        'id_calificacion' => 'string',
        'porcentaje_calificacion' => 'float',
        'detalle_vigente' => 'float',
        'detalle_vencida' => 'float',
        'detalle_judicial' => 'float',
        'detalle_rr' => 'float',
        'detalle_indirecta' => 'float',
        'detalle_castigos' => 'float',
        'detalle_provisiones' => 'float'
    ];
    
    public static $rc_peFormats = [
        'nombre_entidad' => null,
        'id_calificacion' => null,
        'porcentaje_calificacion' => 'float',
        'detalle_vigente' => 'float',
        'detalle_vencida' => 'float',
        'detalle_judicial' => 'float',
        'detalle_rr' => 'float',
        'detalle_indirecta' => 'float',
        'detalle_castigos' => 'float',
        'detalle_provisiones' => 'float'
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
        'id_calificacion' => 'idCalificacion',
        'porcentaje_calificacion' => 'porcentajeCalificacion',
        'detalle_vigente' => 'detalleVigente',
        'detalle_vencida' => 'detalleVencida',
        'detalle_judicial' => 'detalleJudicial',
        'detalle_rr' => 'detalleRR',
        'detalle_indirecta' => 'detalleIndirecta',
        'detalle_castigos' => 'detalleCastigos',
        'detalle_provisiones' => 'detalleProvisiones'
    ];
    
    public static $setters = [
        'nombre_entidad' => 'setNombreEntidad',
        'id_calificacion' => 'setIdCalificacion',
        'porcentaje_calificacion' => 'setPorcentajeCalificacion',
        'detalle_vigente' => 'setDetalleVigente',
        'detalle_vencida' => 'setDetalleVencida',
        'detalle_judicial' => 'setDetalleJudicial',
        'detalle_rr' => 'setDetalleRr',
        'detalle_indirecta' => 'setDetalleIndirecta',
        'detalle_castigos' => 'setDetalleCastigos',
        'detalle_provisiones' => 'setDetalleProvisiones'
    ];
    
    public static $getters = [
        'nombre_entidad' => 'getNombreEntidad',
        'id_calificacion' => 'getIdCalificacion',
        'porcentaje_calificacion' => 'getPorcentajeCalificacion',
        'detalle_vigente' => 'getDetalleVigente',
        'detalle_vencida' => 'getDetalleVencida',
        'detalle_judicial' => 'getDetalleJudicial',
        'detalle_rr' => 'getDetalleRr',
        'detalle_indirecta' => 'getDetalleIndirecta',
        'detalle_castigos' => 'getDetalleCastigos',
        'detalle_provisiones' => 'getDetalleProvisiones'
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
        $this->container['id_calificacion'] = isset($data['id_calificacion']) ? $data['id_calificacion'] : null;
        $this->container['porcentaje_calificacion'] = isset($data['porcentaje_calificacion']) ? $data['porcentaje_calificacion'] : null;
        $this->container['detalle_vigente'] = isset($data['detalle_vigente']) ? $data['detalle_vigente'] : null;
        $this->container['detalle_vencida'] = isset($data['detalle_vencida']) ? $data['detalle_vencida'] : null;
        $this->container['detalle_judicial'] = isset($data['detalle_judicial']) ? $data['detalle_judicial'] : null;
        $this->container['detalle_rr'] = isset($data['detalle_rr']) ? $data['detalle_rr'] : null;
        $this->container['detalle_indirecta'] = isset($data['detalle_indirecta']) ? $data['detalle_indirecta'] : null;
        $this->container['detalle_castigos'] = isset($data['detalle_castigos']) ? $data['detalle_castigos'] : null;
        $this->container['detalle_provisiones'] = isset($data['detalle_provisiones']) ? $data['detalle_provisiones'] : null;
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
    
    public function getIdCalificacion()
    {
        return $this->container['id_calificacion'];
    }
    
    public function setIdCalificacion($id_calificacion)
    {
        $this->container['id_calificacion'] = $id_calificacion;
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
    
    public function getDetalleVencida()
    {
        return $this->container['detalle_vencida'];
    }
    
    public function setDetalleVencida($detalle_vencida)
    {
        $this->container['detalle_vencida'] = $detalle_vencida;
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
    
    public function getDetalleRr()
    {
        return $this->container['detalle_rr'];
    }
    
    public function setDetalleRr($detalle_rr)
    {
        $this->container['detalle_rr'] = $detalle_rr;
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
    
    public function getDetalleCastigos()
    {
        return $this->container['detalle_castigos'];
    }
    
    public function setDetalleCastigos($detalle_castigos)
    {
        $this->container['detalle_castigos'] = $detalle_castigos;
        return $this;
    }
    
    public function getDetalleProvisiones()
    {
        return $this->container['detalle_provisiones'];
    }
    
    public function setDetalleProvisiones($detalle_provisiones)
    {
        $this->container['detalle_provisiones'] = $detalle_provisiones;
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
