<?php

namespace GuardianScore\Client\Model;

use \ArrayAccess;
use \GuardianScore\Client\ObjectSerializer;

class RequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'RequestBody';
    
    protected static $apihubTypes = [
        'credit_report' => '\GuardianScore\Client\Model\CreditReport'
    ];
    
    protected static $apihubFormats = [
        'credit_report' => null
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
        'credit_report' => 'creditReport'
    ];
    
    protected static $setters = [
        'credit_report' => 'setCreditReport'
    ];
    
    protected static $getters = [
        'credit_report' => 'getCreditReport'
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
        $this->container['credit_report'] = isset($data['credit_report']) ? $data['credit_report'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['credit_report'] === null) {
            $invalidProperties[] = "'credit_report' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getCreditReport()
    {
        return $this->container['credit_report'];
    }
    
    public function setCreditReport($credit_report)
    {
        $this->container['credit_report'] = $credit_report;
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
