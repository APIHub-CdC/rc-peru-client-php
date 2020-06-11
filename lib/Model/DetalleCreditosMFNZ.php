<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class DetalleCreditosMFNZ implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'DetalleCreditosMFNZ';
    
    protected static $rc_peTypes = [
        'periodo' => 'string',
        'entidades' => 'float',
        'id_peor_calificacion' => 'string',
        'porcentaje' => 'float',
        'vigente' => 'float',
        'vencida_menor30' => 'float',
        'vencida_mayor30' => 'float',
        'judicial' => 'float',
        'refinanciada' => 'float',
        'indirecta' => 'float',
        'castigos' => 'float',
        'detalle_entidades' => '\rc\pe\Client\Model\DetalleEntidades[]'
    ];
    
    protected static $rc_peFormats = [
        'periodo' => null,
        'entidades' => null,
        'id_peor_calificacion' => null,
        'porcentaje' => 'float',
        'vigente' => 'float',
        'vencida_menor30' => 'float',
        'vencida_mayor30' => 'float',
        'judicial' => 'float',
        'refinanciada' => 'float',
        'indirecta' => 'float',
        'castigos' => 'float',
        'detalle_entidades' => null
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
        'entidades' => 'entidades',
        'id_peor_calificacion' => 'idPeorCalificacion',
        'porcentaje' => 'porcentaje',
        'vigente' => 'vigente',
        'vencida_menor30' => 'vencidaMenor30',
        'vencida_mayor30' => 'vencidaMayor30',
        'judicial' => 'judicial',
        'refinanciada' => 'refinanciada',
        'indirecta' => 'indirecta',
        'castigos' => 'castigos',
        'detalle_entidades' => 'detalleEntidades'
    ];
    
    protected static $setters = [
        'periodo' => 'setPeriodo',
        'entidades' => 'setEntidades',
        'id_peor_calificacion' => 'setIdPeorCalificacion',
        'porcentaje' => 'setPorcentaje',
        'vigente' => 'setVigente',
        'vencida_menor30' => 'setVencidaMenor30',
        'vencida_mayor30' => 'setVencidaMayor30',
        'judicial' => 'setJudicial',
        'refinanciada' => 'setRefinanciada',
        'indirecta' => 'setIndirecta',
        'castigos' => 'setCastigos',
        'detalle_entidades' => 'setDetalleEntidades'
    ];
    
    protected static $getters = [
        'periodo' => 'getPeriodo',
        'entidades' => 'getEntidades',
        'id_peor_calificacion' => 'getIdPeorCalificacion',
        'porcentaje' => 'getPorcentaje',
        'vigente' => 'getVigente',
        'vencida_menor30' => 'getVencidaMenor30',
        'vencida_mayor30' => 'getVencidaMayor30',
        'judicial' => 'getJudicial',
        'refinanciada' => 'getRefinanciada',
        'indirecta' => 'getIndirecta',
        'castigos' => 'getCastigos',
        'detalle_entidades' => 'getDetalleEntidades'
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
        $this->container['entidades'] = isset($data['entidades']) ? $data['entidades'] : null;
        $this->container['id_peor_calificacion'] = isset($data['id_peor_calificacion']) ? $data['id_peor_calificacion'] : null;
        $this->container['porcentaje'] = isset($data['porcentaje']) ? $data['porcentaje'] : null;
        $this->container['vigente'] = isset($data['vigente']) ? $data['vigente'] : null;
        $this->container['vencida_menor30'] = isset($data['vencida_menor30']) ? $data['vencida_menor30'] : null;
        $this->container['vencida_mayor30'] = isset($data['vencida_mayor30']) ? $data['vencida_mayor30'] : null;
        $this->container['judicial'] = isset($data['judicial']) ? $data['judicial'] : null;
        $this->container['refinanciada'] = isset($data['refinanciada']) ? $data['refinanciada'] : null;
        $this->container['indirecta'] = isset($data['indirecta']) ? $data['indirecta'] : null;
        $this->container['castigos'] = isset($data['castigos']) ? $data['castigos'] : null;
        $this->container['detalle_entidades'] = isset($data['detalle_entidades']) ? $data['detalle_entidades'] : null;
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
    
    public function getEntidades()
    {
        return $this->container['entidades'];
    }
    
    public function setEntidades($entidades)
    {
        $this->container['entidades'] = $entidades;
        return $this;
    }
    
    public function getIdPeorCalificacion()
    {
        return $this->container['id_peor_calificacion'];
    }
    
    public function setIdPeorCalificacion($id_peor_calificacion)
    {
        $this->container['id_peor_calificacion'] = $id_peor_calificacion;
        return $this;
    }
    
    public function getPorcentaje()
    {
        return $this->container['porcentaje'];
    }
    
    public function setPorcentaje($porcentaje)
    {
        $this->container['porcentaje'] = $porcentaje;
        return $this;
    }
    
    public function getVigente()
    {
        return $this->container['vigente'];
    }
    
    public function setVigente($vigente)
    {
        $this->container['vigente'] = $vigente;
        return $this;
    }
    
    public function getVencidaMenor30()
    {
        return $this->container['vencida_menor30'];
    }
    
    public function setVencidaMenor30($vencida_menor30)
    {
        $this->container['vencida_menor30'] = $vencida_menor30;
        return $this;
    }
    
    public function getVencidaMayor30()
    {
        return $this->container['vencida_mayor30'];
    }
    
    public function setVencidaMayor30($vencida_mayor30)
    {
        $this->container['vencida_mayor30'] = $vencida_mayor30;
        return $this;
    }
    
    public function getJudicial()
    {
        return $this->container['judicial'];
    }
    
    public function setJudicial($judicial)
    {
        $this->container['judicial'] = $judicial;
        return $this;
    }
    
    public function getRefinanciada()
    {
        return $this->container['refinanciada'];
    }
    
    public function setRefinanciada($refinanciada)
    {
        $this->container['refinanciada'] = $refinanciada;
        return $this;
    }
    
    public function getIndirecta()
    {
        return $this->container['indirecta'];
    }
    
    public function setIndirecta($indirecta)
    {
        $this->container['indirecta'] = $indirecta;
        return $this;
    }
    
    public function getCastigos()
    {
        return $this->container['castigos'];
    }
    
    public function setCastigos($castigos)
    {
        $this->container['castigos'] = $castigos;
        return $this;
    }
    
    public function getDetalleEntidades()
    {
        return $this->container['detalle_entidades'];
    }
    
    public function setDetalleEntidades($detalle_entidades)
    {
        $this->container['detalle_entidades'] = $detalle_entidades;
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
