<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class ResumenCredito implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'ResumenCredito';
    
    public static $rc_peTypes = [
        'endeudamiento_total' => '\rc\pe\Client\Model\EndeudamientoTotal[]',
        'deuda_tipo_producto_rc' => '\rc\pe\Client\Model\DeudaTipoProductoRC[]',
        'detalle_producto' => '\rc\pe\Client\Model\DetalleProducto[]',
        'indicadores_sbs' => '\rc\pe\Client\Model\IndicadoresSBS[]',
        'calificacion' => '\rc\pe\Client\Model\ResumenCreditoCalificacion',
        'sbs_ultimos24_meses' => '\rc\pe\Client\Model\ResumenCreditoSBSUltimos24Meses'
    ];
    
    public static $rc_peFormats = [
        'endeudamiento_total' => null,
        'deuda_tipo_producto_rc' => null,
        'detalle_producto' => null,
        'indicadores_sbs' => null,
        'calificacion' => null,
        'sbs_ultimos24_meses' => null
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
        'endeudamiento_total' => 'endeudamientoTotal',
        'deuda_tipo_producto_rc' => 'deudaTipoProductoRC',
        'detalle_producto' => 'detalleProducto',
        'indicadores_sbs' => 'indicadoresSBS',
        'calificacion' => 'calificacion',
        'sbs_ultimos24_meses' => 'SBSUltimos24Meses'
    ];
    
    public static $setters = [
        'endeudamiento_total' => 'setEndeudamientoTotal',
        'deuda_tipo_producto_rc' => 'setDeudaTipoProductoRc',
        'detalle_producto' => 'setDetalleProducto',
        'indicadores_sbs' => 'setIndicadoresSbs',
        'calificacion' => 'setCalificacion',
        'sbs_ultimos24_meses' => 'setSbsUltimos24Meses'
    ];
    
    public static $getters = [
        'endeudamiento_total' => 'getEndeudamientoTotal',
        'deuda_tipo_producto_rc' => 'getDeudaTipoProductoRc',
        'detalle_producto' => 'getDetalleProducto',
        'indicadores_sbs' => 'getIndicadoresSbs',
        'calificacion' => 'getCalificacion',
        'sbs_ultimos24_meses' => 'getSbsUltimos24Meses'
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
        $this->container['endeudamiento_total'] = isset($data['endeudamiento_total']) ? $data['endeudamiento_total'] : null;
        $this->container['deuda_tipo_producto_rc'] = isset($data['deuda_tipo_producto_rc']) ? $data['deuda_tipo_producto_rc'] : null;
        $this->container['detalle_producto'] = isset($data['detalle_producto']) ? $data['detalle_producto'] : null;
        $this->container['indicadores_sbs'] = isset($data['indicadores_sbs']) ? $data['indicadores_sbs'] : null;
        $this->container['calificacion'] = isset($data['calificacion']) ? $data['calificacion'] : null;
        $this->container['sbs_ultimos24_meses'] = isset($data['sbs_ultimos24_meses']) ? $data['sbs_ultimos24_meses'] : null;
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
    
    public function getEndeudamientoTotal()
    {
        return $this->container['endeudamiento_total'];
    }
    
    public function setEndeudamientoTotal($endeudamiento_total)
    {
        $this->container['endeudamiento_total'] = $endeudamiento_total;
        return $this;
    }
    
    public function getDeudaTipoProductoRc()
    {
        return $this->container['deuda_tipo_producto_rc'];
    }
    
    public function setDeudaTipoProductoRc($deuda_tipo_producto_rc)
    {
        $this->container['deuda_tipo_producto_rc'] = $deuda_tipo_producto_rc;
        return $this;
    }
    
    public function getDetalleProducto()
    {
        return $this->container['detalle_producto'];
    }
    
    public function setDetalleProducto($detalle_producto)
    {
        $this->container['detalle_producto'] = $detalle_producto;
        return $this;
    }
    
    public function getIndicadoresSbs()
    {
        return $this->container['indicadores_sbs'];
    }
    
    public function setIndicadoresSbs($indicadores_sbs)
    {
        $this->container['indicadores_sbs'] = $indicadores_sbs;
        return $this;
    }
    
    public function getCalificacion()
    {
        return $this->container['calificacion'];
    }
    
    public function setCalificacion($calificacion)
    {
        $this->container['calificacion'] = $calificacion;
        return $this;
    }
    
    public function getSbsUltimos24Meses()
    {
        return $this->container['sbs_ultimos24_meses'];
    }
    
    public function setSbsUltimos24Meses($sbs_ultimos24_meses)
    {
        $this->container['sbs_ultimos24_meses'] = $sbs_ultimos24_meses;
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
