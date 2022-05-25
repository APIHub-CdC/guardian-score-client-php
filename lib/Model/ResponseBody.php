<?php

namespace GuardianScore\Client\Model;

use \ArrayAccess;
use \GuardianScore\Client\ObjectSerializer;

class ResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'ResponseBody';
    
    protected static $apihubTypes = [
        'score' => 'string',
        'razones' => 'string[]',
        'folio_consulta' => 'string',
        'success' => 'bool',
        'mensaje' => 'string'
    ];
    
    protected static $apihubFormats = [
        'score' => null,
        'razones' => null,
        'folio_consulta' => null,
        'success' => null,
        'mensaje' => null
    ];
    
    public static function apihubTypes()
    {
        return self::$apihubTypes;
    }
    
    public static function apihubFormats()
    {
        return self::$apihubFormats;
    }
    
    protected static $attributeMap = [
        'score' => 'score',
        'razones' => 'razones',
        'folio_consulta' => 'folioConsulta',
        'success' => 'success',
        'mensaje' => 'mensaje'
    ];
    
    protected static $setters = [
        'score' => 'setScore',
        'razones' => 'setRazones',
        'folio_consulta' => 'setFolioConsulta',
        'success' => 'setSuccess',
        'mensaje' => 'setMensaje'
    ];
    
    protected static $getters = [
        'score' => 'getScore',
        'razones' => 'getRazones',
        'folio_consulta' => 'getFolioConsulta',
        'success' => 'getSuccess',
        'mensaje' => 'getMensaje'
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
        return self::$apihubModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['razones'] = isset($data['razones']) ? $data['razones'] : null;
        $this->container['folio_consulta'] = isset($data['folio_consulta']) ? $data['folio_consulta'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['mensaje'] = isset($data['mensaje']) ? $data['mensaje'] : null;
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
    
    public function getScore()
    {
        return $this->container['score'];
    }
    
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }
    
    public function getRazones()
    {
        return $this->container['razones'];
    }
    
    public function setRazones($razones)
    {
        $this->container['razones'] = $razones;
        return $this;
    }
    
    public function getFolioConsulta()
    {
        return $this->container['folio_consulta'];
    }
    
    public function setFolioConsulta($folio_consulta)
    {
        $this->container['folio_consulta'] = $folio_consulta;
        return $this;
    }
    
    public function getSuccess()
    {
        return $this->container['success'];
    }
    
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }
    
    public function getMensaje()
    {
        return $this->container['mensaje'];
    }
    
    public function setMensaje($mensaje)
    {
        $this->container['mensaje'] = $mensaje;
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
