<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class DatosPersonales implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'DatosPersonales';
    
    protected static $rc_peTypes = [
        'primer_nombre' => 'string',
        'segundo_nombre' => 'string',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'apellido_casada' => 'string',
        'fecha_nacimiento' => 'string',
        'edad' => 'float',
        'genero' => 'string',
        'tipo_documento' => 'string',
        'numero_documento' => 'string',
        'ruc' => 'string',
        'codigo_sbs' => 'float',
        'ubigeo' => 'string',
        'departamento' => 'string',
        'provincia' => 'string',
        'distrito' => 'string',
        'via' => 'string',
        'numero_exterior' => 'string',
        'numero_interior' => 'string',
        'zona' => 'string',
        'clave_tipo_persona' => 'float',
        'clave_tipo_empresa' => 'string'
    ];
    
    protected static $rc_peFormats = [
        'primer_nombre' => null,
        'segundo_nombre' => null,
        'apellido_paterno' => null,
        'apellido_materno' => null,
        'apellido_casada' => null,
        'fecha_nacimiento' => null,
        'edad' => null,
        'genero' => null,
        'tipo_documento' => null,
        'numero_documento' => null,
        'ruc' => null,
        'codigo_sbs' => 'float',
        'ubigeo' => null,
        'departamento' => null,
        'provincia' => null,
        'distrito' => null,
        'via' => null,
        'numero_exterior' => null,
        'numero_interior' => null,
        'zona' => null,
        'clave_tipo_persona' => null,
        'clave_tipo_empresa' => null
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
        'primer_nombre' => 'primerNombre',
        'segundo_nombre' => 'segundoNombre',
        'apellido_paterno' => 'apellidoPaterno',
        'apellido_materno' => 'apellidoMaterno',
        'apellido_casada' => 'apellidoCasada',
        'fecha_nacimiento' => 'fechaNacimiento',
        'edad' => 'edad',
        'genero' => 'genero',
        'tipo_documento' => 'tipoDocumento',
        'numero_documento' => 'numeroDocumento',
        'ruc' => 'RUC',
        'codigo_sbs' => 'codigoSBS',
        'ubigeo' => 'ubigeo',
        'departamento' => 'departamento',
        'provincia' => 'provincia',
        'distrito' => 'distrito',
        'via' => 'via',
        'numero_exterior' => 'numeroExterior',
        'numero_interior' => 'numeroInterior',
        'zona' => 'zona',
        'clave_tipo_persona' => 'claveTipoPersona',
        'clave_tipo_empresa' => 'claveTipoEmpresa'
    ];
    
    protected static $setters = [
        'primer_nombre' => 'setPrimerNombre',
        'segundo_nombre' => 'setSegundoNombre',
        'apellido_paterno' => 'setApellidoPaterno',
        'apellido_materno' => 'setApellidoMaterno',
        'apellido_casada' => 'setApellidoCasada',
        'fecha_nacimiento' => 'setFechaNacimiento',
        'edad' => 'setEdad',
        'genero' => 'setGenero',
        'tipo_documento' => 'setTipoDocumento',
        'numero_documento' => 'setNumeroDocumento',
        'ruc' => 'setRuc',
        'codigo_sbs' => 'setCodigoSbs',
        'ubigeo' => 'setUbigeo',
        'departamento' => 'setDepartamento',
        'provincia' => 'setProvincia',
        'distrito' => 'setDistrito',
        'via' => 'setVia',
        'numero_exterior' => 'setNumeroExterior',
        'numero_interior' => 'setNumeroInterior',
        'zona' => 'setZona',
        'clave_tipo_persona' => 'setClaveTipoPersona',
        'clave_tipo_empresa' => 'setClaveTipoEmpresa'
    ];
    
    protected static $getters = [
        'primer_nombre' => 'getPrimerNombre',
        'segundo_nombre' => 'getSegundoNombre',
        'apellido_paterno' => 'getApellidoPaterno',
        'apellido_materno' => 'getApellidoMaterno',
        'apellido_casada' => 'getApellidoCasada',
        'fecha_nacimiento' => 'getFechaNacimiento',
        'edad' => 'getEdad',
        'genero' => 'getGenero',
        'tipo_documento' => 'getTipoDocumento',
        'numero_documento' => 'getNumeroDocumento',
        'ruc' => 'getRuc',
        'codigo_sbs' => 'getCodigoSbs',
        'ubigeo' => 'getUbigeo',
        'departamento' => 'getDepartamento',
        'provincia' => 'getProvincia',
        'distrito' => 'getDistrito',
        'via' => 'getVia',
        'numero_exterior' => 'getNumeroExterior',
        'numero_interior' => 'getNumeroInterior',
        'zona' => 'getZona',
        'clave_tipo_persona' => 'getClaveTipoPersona',
        'clave_tipo_empresa' => 'getClaveTipoEmpresa'
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
        $this->container['primer_nombre'] = isset($data['primer_nombre']) ? $data['primer_nombre'] : null;
        $this->container['segundo_nombre'] = isset($data['segundo_nombre']) ? $data['segundo_nombre'] : null;
        $this->container['apellido_paterno'] = isset($data['apellido_paterno']) ? $data['apellido_paterno'] : null;
        $this->container['apellido_materno'] = isset($data['apellido_materno']) ? $data['apellido_materno'] : null;
        $this->container['apellido_casada'] = isset($data['apellido_casada']) ? $data['apellido_casada'] : null;
        $this->container['fecha_nacimiento'] = isset($data['fecha_nacimiento']) ? $data['fecha_nacimiento'] : null;
        $this->container['edad'] = isset($data['edad']) ? $data['edad'] : null;
        $this->container['genero'] = isset($data['genero']) ? $data['genero'] : null;
        $this->container['tipo_documento'] = isset($data['tipo_documento']) ? $data['tipo_documento'] : null;
        $this->container['numero_documento'] = isset($data['numero_documento']) ? $data['numero_documento'] : null;
        $this->container['ruc'] = isset($data['ruc']) ? $data['ruc'] : null;
        $this->container['codigo_sbs'] = isset($data['codigo_sbs']) ? $data['codigo_sbs'] : null;
        $this->container['ubigeo'] = isset($data['ubigeo']) ? $data['ubigeo'] : null;
        $this->container['departamento'] = isset($data['departamento']) ? $data['departamento'] : null;
        $this->container['provincia'] = isset($data['provincia']) ? $data['provincia'] : null;
        $this->container['distrito'] = isset($data['distrito']) ? $data['distrito'] : null;
        $this->container['via'] = isset($data['via']) ? $data['via'] : null;
        $this->container['numero_exterior'] = isset($data['numero_exterior']) ? $data['numero_exterior'] : null;
        $this->container['numero_interior'] = isset($data['numero_interior']) ? $data['numero_interior'] : null;
        $this->container['zona'] = isset($data['zona']) ? $data['zona'] : null;
        $this->container['clave_tipo_persona'] = isset($data['clave_tipo_persona']) ? $data['clave_tipo_persona'] : null;
        $this->container['clave_tipo_empresa'] = isset($data['clave_tipo_empresa']) ? $data['clave_tipo_empresa'] : null;
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
    
    public function getPrimerNombre()
    {
        return $this->container['primer_nombre'];
    }
    
    public function setPrimerNombre($primer_nombre)
    {
        $this->container['primer_nombre'] = $primer_nombre;
        return $this;
    }
    
    public function getSegundoNombre()
    {
        return $this->container['segundo_nombre'];
    }
    
    public function setSegundoNombre($segundo_nombre)
    {
        $this->container['segundo_nombre'] = $segundo_nombre;
        return $this;
    }
    
    public function getApellidoPaterno()
    {
        return $this->container['apellido_paterno'];
    }
    
    public function setApellidoPaterno($apellido_paterno)
    {
        $this->container['apellido_paterno'] = $apellido_paterno;
        return $this;
    }
    
    public function getApellidoMaterno()
    {
        return $this->container['apellido_materno'];
    }
    
    public function setApellidoMaterno($apellido_materno)
    {
        $this->container['apellido_materno'] = $apellido_materno;
        return $this;
    }
    
    public function getApellidoCasada()
    {
        return $this->container['apellido_casada'];
    }
    
    public function setApellidoCasada($apellido_casada)
    {
        $this->container['apellido_casada'] = $apellido_casada;
        return $this;
    }
    
    public function getFechaNacimiento()
    {
        return $this->container['fecha_nacimiento'];
    }
    
    public function setFechaNacimiento($fecha_nacimiento)
    {
        $this->container['fecha_nacimiento'] = $fecha_nacimiento;
        return $this;
    }
    
    public function getEdad()
    {
        return $this->container['edad'];
    }
    
    public function setEdad($edad)
    {
        $this->container['edad'] = $edad;
        return $this;
    }
    
    public function getGenero()
    {
        return $this->container['genero'];
    }
    
    public function setGenero($genero)
    {
        $this->container['genero'] = $genero;
        return $this;
    }
    
    public function getTipoDocumento()
    {
        return $this->container['tipo_documento'];
    }
    
    public function setTipoDocumento($tipo_documento)
    {
        $this->container['tipo_documento'] = $tipo_documento;
        return $this;
    }
    
    public function getNumeroDocumento()
    {
        return $this->container['numero_documento'];
    }
    
    public function setNumeroDocumento($numero_documento)
    {
        $this->container['numero_documento'] = $numero_documento;
        return $this;
    }
    
    public function getRuc()
    {
        return $this->container['ruc'];
    }
    
    public function setRuc($ruc)
    {
        $this->container['ruc'] = $ruc;
        return $this;
    }
    
    public function getCodigoSbs()
    {
        return $this->container['codigo_sbs'];
    }
    
    public function setCodigoSbs($codigo_sbs)
    {
        $this->container['codigo_sbs'] = $codigo_sbs;
        return $this;
    }
    
    public function getUbigeo()
    {
        return $this->container['ubigeo'];
    }
    
    public function setUbigeo($ubigeo)
    {
        $this->container['ubigeo'] = $ubigeo;
        return $this;
    }
    
    public function getDepartamento()
    {
        return $this->container['departamento'];
    }
    
    public function setDepartamento($departamento)
    {
        $this->container['departamento'] = $departamento;
        return $this;
    }
    
    public function getProvincia()
    {
        return $this->container['provincia'];
    }
    
    public function setProvincia($provincia)
    {
        $this->container['provincia'] = $provincia;
        return $this;
    }
    
    public function getDistrito()
    {
        return $this->container['distrito'];
    }
    
    public function setDistrito($distrito)
    {
        $this->container['distrito'] = $distrito;
        return $this;
    }
    
    public function getVia()
    {
        return $this->container['via'];
    }
    
    public function setVia($via)
    {
        $this->container['via'] = $via;
        return $this;
    }
    
    public function getNumeroExterior()
    {
        return $this->container['numero_exterior'];
    }
    
    public function setNumeroExterior($numero_exterior)
    {
        $this->container['numero_exterior'] = $numero_exterior;
        return $this;
    }
    
    public function getNumeroInterior()
    {
        return $this->container['numero_interior'];
    }
    
    public function setNumeroInterior($numero_interior)
    {
        $this->container['numero_interior'] = $numero_interior;
        return $this;
    }
    
    public function getZona()
    {
        return $this->container['zona'];
    }
    
    public function setZona($zona)
    {
        $this->container['zona'] = $zona;
        return $this;
    }
    
    public function getClaveTipoPersona()
    {
        return $this->container['clave_tipo_persona'];
    }
    
    public function setClaveTipoPersona($clave_tipo_persona)
    {
        $this->container['clave_tipo_persona'] = $clave_tipo_persona;
        return $this;
    }
    
    public function getClaveTipoEmpresa()
    {
        return $this->container['clave_tipo_empresa'];
    }
    
    public function setClaveTipoEmpresa($clave_tipo_empresa)
    {
        $this->container['clave_tipo_empresa'] = $clave_tipo_empresa;
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
