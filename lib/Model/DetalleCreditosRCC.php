<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class DetalleCreditosRCC implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'DetalleCreditosRCC';
    
    protected static $rc_peTypes = [
        'clave_mes' => 'string',
        'numero_entidades' => 'float',
        'id_peor_calificacion' => 'string',
        'porcentaje_calificacion' => 'float',
        'deuda_vigente' => 'float',
        'deuda_vencida' => 'float',
        'deuda_judicial' => 'float',
        'deuda_rr' => 'float',
        'deuda_indirecta' => 'float',
        'castigos' => 'float',
        'provisiones' => 'float',
        'entidades' => '\rc\pe\Client\Model\Entidades[]'
    ];
    
    protected static $rc_peFormats = [
        'clave_mes' => null,
        'numero_entidades' => null,
        'id_peor_calificacion' => null,
        'porcentaje_calificacion' => 'float',
        'deuda_vigente' => 'float',
        'deuda_vencida' => 'float',
        'deuda_judicial' => 'float',
        'deuda_rr' => 'float',
        'deuda_indirecta' => 'float',
        'castigos' => 'float',
        'provisiones' => 'float',
        'entidades' => null
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
        'clave_mes' => 'claveMes',
        'numero_entidades' => 'numeroEntidades',
        'id_peor_calificacion' => 'idPeorCalificacion',
        'porcentaje_calificacion' => 'porcentajeCalificacion',
        'deuda_vigente' => 'deudaVigente',
        'deuda_vencida' => 'deudaVencida',
        'deuda_judicial' => 'deudaJudicial',
        'deuda_rr' => 'deudaRR',
        'deuda_indirecta' => 'deudaIndirecta',
        'castigos' => 'castigos',
        'provisiones' => 'provisiones',
        'entidades' => 'entidades'
    ];
    
    protected static $setters = [
        'clave_mes' => 'setClaveMes',
        'numero_entidades' => 'setNumeroEntidades',
        'id_peor_calificacion' => 'setIdPeorCalificacion',
        'porcentaje_calificacion' => 'setPorcentajeCalificacion',
        'deuda_vigente' => 'setDeudaVigente',
        'deuda_vencida' => 'setDeudaVencida',
        'deuda_judicial' => 'setDeudaJudicial',
        'deuda_rr' => 'setDeudaRr',
        'deuda_indirecta' => 'setDeudaIndirecta',
        'castigos' => 'setCastigos',
        'provisiones' => 'setProvisiones',
        'entidades' => 'setEntidades'
    ];
    
    protected static $getters = [
        'clave_mes' => 'getClaveMes',
        'numero_entidades' => 'getNumeroEntidades',
        'id_peor_calificacion' => 'getIdPeorCalificacion',
        'porcentaje_calificacion' => 'getPorcentajeCalificacion',
        'deuda_vigente' => 'getDeudaVigente',
        'deuda_vencida' => 'getDeudaVencida',
        'deuda_judicial' => 'getDeudaJudicial',
        'deuda_rr' => 'getDeudaRr',
        'deuda_indirecta' => 'getDeudaIndirecta',
        'castigos' => 'getCastigos',
        'provisiones' => 'getProvisiones',
        'entidades' => 'getEntidades'
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
        $this->container['clave_mes'] = isset($data['clave_mes']) ? $data['clave_mes'] : null;
        $this->container['numero_entidades'] = isset($data['numero_entidades']) ? $data['numero_entidades'] : null;
        $this->container['id_peor_calificacion'] = isset($data['id_peor_calificacion']) ? $data['id_peor_calificacion'] : null;
        $this->container['porcentaje_calificacion'] = isset($data['porcentaje_calificacion']) ? $data['porcentaje_calificacion'] : null;
        $this->container['deuda_vigente'] = isset($data['deuda_vigente']) ? $data['deuda_vigente'] : null;
        $this->container['deuda_vencida'] = isset($data['deuda_vencida']) ? $data['deuda_vencida'] : null;
        $this->container['deuda_judicial'] = isset($data['deuda_judicial']) ? $data['deuda_judicial'] : null;
        $this->container['deuda_rr'] = isset($data['deuda_rr']) ? $data['deuda_rr'] : null;
        $this->container['deuda_indirecta'] = isset($data['deuda_indirecta']) ? $data['deuda_indirecta'] : null;
        $this->container['castigos'] = isset($data['castigos']) ? $data['castigos'] : null;
        $this->container['provisiones'] = isset($data['provisiones']) ? $data['provisiones'] : null;
        $this->container['entidades'] = isset($data['entidades']) ? $data['entidades'] : null;
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
    
    public function getClaveMes()
    {
        return $this->container['clave_mes'];
    }
    
    public function setClaveMes($clave_mes)
    {
        $this->container['clave_mes'] = $clave_mes;
        return $this;
    }
    
    public function getNumeroEntidades()
    {
        return $this->container['numero_entidades'];
    }
    
    public function setNumeroEntidades($numero_entidades)
    {
        $this->container['numero_entidades'] = $numero_entidades;
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
    
    public function getPorcentajeCalificacion()
    {
        return $this->container['porcentaje_calificacion'];
    }
    
    public function setPorcentajeCalificacion($porcentaje_calificacion)
    {
        $this->container['porcentaje_calificacion'] = $porcentaje_calificacion;
        return $this;
    }
    
    public function getDeudaVigente()
    {
        return $this->container['deuda_vigente'];
    }
    
    public function setDeudaVigente($deuda_vigente)
    {
        $this->container['deuda_vigente'] = $deuda_vigente;
        return $this;
    }
    
    public function getDeudaVencida()
    {
        return $this->container['deuda_vencida'];
    }
    
    public function setDeudaVencida($deuda_vencida)
    {
        $this->container['deuda_vencida'] = $deuda_vencida;
        return $this;
    }
    
    public function getDeudaJudicial()
    {
        return $this->container['deuda_judicial'];
    }
    
    public function setDeudaJudicial($deuda_judicial)
    {
        $this->container['deuda_judicial'] = $deuda_judicial;
        return $this;
    }
    
    public function getDeudaRr()
    {
        return $this->container['deuda_rr'];
    }
    
    public function setDeudaRr($deuda_rr)
    {
        $this->container['deuda_rr'] = $deuda_rr;
        return $this;
    }
    
    public function getDeudaIndirecta()
    {
        return $this->container['deuda_indirecta'];
    }
    
    public function setDeudaIndirecta($deuda_indirecta)
    {
        $this->container['deuda_indirecta'] = $deuda_indirecta;
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
    
    public function getProvisiones()
    {
        return $this->container['provisiones'];
    }
    
    public function setProvisiones($provisiones)
    {
        $this->container['provisiones'] = $provisiones;
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
