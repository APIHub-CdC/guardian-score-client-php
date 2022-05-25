<?php

namespace GuardianScore\Client\Model;

use \ArrayAccess;
use \GuardianScore\Client\ObjectSerializer;

class Error implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Error';
    
    protected static $apihubTypes = [
        'code' => 'string',
        'message' => 'string',
        'title' => 'string',
        'status' => 'string'
    ];
    
    protected static $apihubFormats = [
        'code' => null,
        'message' => null,
        'title' => null,
        'status' => null
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
        'code' => 'code',
        'message' => 'message',
        'title' => 'title',
        'status' => 'status'
    ];
    
    protected static $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'title' => 'setTitle',
        'status' => 'setStatus'
    ];
    
    protected static $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'title' => 'getTitle',
        'status' => 'getStatus'
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
    const STATUS__100 = '100';
    const STATUS__101 = '101';
    const STATUS__102 = '102';
    const STATUS__103 = '103';
    const STATUS__200 = '200';
    const STATUS__201 = '201';
    const STATUS__202 = '202';
    const STATUS__203 = '203';
    const STATUS__204 = '204';
    const STATUS__205 = '205';
    const STATUS__206 = '206';
    const STATUS__207 = '207';
    const STATUS__208 = '208';
    const STATUS__226 = '226';
    const STATUS__300 = '300';
    const STATUS__301 = '301';
    const STATUS__302 = '302';
    const STATUS__303 = '303';
    const STATUS__304 = '304';
    const STATUS__305 = '305';
    const STATUS__307 = '307';
    const STATUS__308 = '308';
    const STATUS__400 = '400';
    const STATUS__401 = '401';
    const STATUS__402 = '402';
    const STATUS__403 = '403';
    const STATUS__404 = '404';
    const STATUS__405 = '405';
    const STATUS__406 = '406';
    const STATUS__407 = '407';
    const STATUS__408 = '408';
    const STATUS__409 = '409';
    const STATUS__410 = '410';
    const STATUS__411 = '411';
    const STATUS__412 = '412';
    const STATUS__413 = '413';
    const STATUS__414 = '414';
    const STATUS__415 = '415';
    const STATUS__416 = '416';
    const STATUS__417 = '417';
    const STATUS__418 = '418';
    const STATUS__419 = '419';
    const STATUS__420 = '420';
    const STATUS__421 = '421';
    const STATUS__422 = '422';
    const STATUS__423 = '423';
    const STATUS__424 = '424';
    const STATUS__426 = '426';
    const STATUS__428 = '428';
    const STATUS__429 = '429';
    const STATUS__431 = '431';
    const STATUS__451 = '451';
    const STATUS__500 = '500';
    const STATUS__501 = '501';
    const STATUS__502 = '502';
    const STATUS__503 = '503';
    const STATUS__504 = '504';
    const STATUS__505 = '505';
    const STATUS__506 = '506';
    const STATUS__507 = '507';
    const STATUS__508 = '508';
    const STATUS__509 = '509';
    const STATUS__510 = '510';
    const STATUS__511 = '511';
    
    
    
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS__100,
            self::STATUS__101,
            self::STATUS__102,
            self::STATUS__103,
            self::STATUS__200,
            self::STATUS__201,
            self::STATUS__202,
            self::STATUS__203,
            self::STATUS__204,
            self::STATUS__205,
            self::STATUS__206,
            self::STATUS__207,
            self::STATUS__208,
            self::STATUS__226,
            self::STATUS__300,
            self::STATUS__301,
            self::STATUS__302,
            self::STATUS__303,
            self::STATUS__304,
            self::STATUS__305,
            self::STATUS__307,
            self::STATUS__308,
            self::STATUS__400,
            self::STATUS__401,
            self::STATUS__402,
            self::STATUS__403,
            self::STATUS__404,
            self::STATUS__405,
            self::STATUS__406,
            self::STATUS__407,
            self::STATUS__408,
            self::STATUS__409,
            self::STATUS__410,
            self::STATUS__411,
            self::STATUS__412,
            self::STATUS__413,
            self::STATUS__414,
            self::STATUS__415,
            self::STATUS__416,
            self::STATUS__417,
            self::STATUS__418,
            self::STATUS__419,
            self::STATUS__420,
            self::STATUS__421,
            self::STATUS__422,
            self::STATUS__423,
            self::STATUS__424,
            self::STATUS__426,
            self::STATUS__428,
            self::STATUS__429,
            self::STATUS__431,
            self::STATUS__451,
            self::STATUS__500,
            self::STATUS__501,
            self::STATUS__502,
            self::STATUS__503,
            self::STATUS__504,
            self::STATUS__505,
            self::STATUS__506,
            self::STATUS__507,
            self::STATUS__508,
            self::STATUS__509,
            self::STATUS__510,
            self::STATUS__511,
        ];
    }
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
        if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 3)) {
            $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 3.";
        }
        if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 3)) {
            $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 3.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getCode()
    {
        return $this->container['code'];
    }
    
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }
    
    public function getMessage()
    {
        return $this->container['message'];
    }
    
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }
    
    public function getTitle()
    {
        return $this->container['title'];
    }
    
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }
    
    public function getStatus()
    {
        return $this->container['status'];
    }
    
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($status) && (mb_strlen($status) > 3)) {
            throw new \InvalidArgumentException('invalid length for $status when calling Error., must be smaller than or equal to 3.');
        }
        if (!is_null($status) && (mb_strlen($status) < 3)) {
            throw new \InvalidArgumentException('invalid length for $status when calling Error., must be bigger than or equal to 3.');
        }
        $this->container['status'] = $status;
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
