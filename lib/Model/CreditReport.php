<?php

namespace GuardianScore\Client\Model;

use \ArrayAccess;
use \GuardianScore\Client\ObjectSerializer;

class CreditReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'CreditReport';
    
    protected static $apihubTypes = [
        'id_folio_consulta_reporte' => 'string',
        'folio_otorgante' => 'string'
    ];
    
    protected static $apihubFormats = [
        'id_folio_consulta_reporte' => null,
        'folio_otorgante' => null
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
        'id_folio_consulta_reporte' => 'idFolioConsultaReporte',
        'folio_otorgante' => 'folioOtorgante'
    ];
    
    protected static $setters = [
        'id_folio_consulta_reporte' => 'setIdFolioConsultaReporte',
        'folio_otorgante' => 'setFolioOtorgante'
    ];
    
    protected static $getters = [
        'id_folio_consulta_reporte' => 'getIdFolioConsultaReporte',
        'folio_otorgante' => 'getFolioOtorgante'
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
        $this->container['id_folio_consulta_reporte'] = isset($data['id_folio_consulta_reporte']) ? $data['id_folio_consulta_reporte'] : null;
        $this->container['folio_otorgante'] = isset($data['folio_otorgante']) ? $data['folio_otorgante'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id_folio_consulta_reporte'] === null) {
            $invalidProperties[] = "'id_folio_consulta_reporte' can't be null";
        }
        if ((mb_strlen($this->container['id_folio_consulta_reporte']) > 30)) {
            $invalidProperties[] = "invalid value for 'id_folio_consulta_reporte', the character length must be smaller than or equal to 30.";
        }
        if ((mb_strlen($this->container['id_folio_consulta_reporte']) < 2)) {
            $invalidProperties[] = "invalid value for 'id_folio_consulta_reporte', the character length must be bigger than or equal to 2.";
        }
        if ($this->container['folio_otorgante'] === null) {
            $invalidProperties[] = "'folio_otorgante' can't be null";
        }
        if ((mb_strlen($this->container['folio_otorgante']) > 10)) {
            $invalidProperties[] = "invalid value for 'folio_otorgante', the character length must be smaller than or equal to 10.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getIdFolioConsultaReporte()
    {
        return $this->container['id_folio_consulta_reporte'];
    }
    
    public function setIdFolioConsultaReporte($id_folio_consulta_reporte)
    {
        if ((mb_strlen($id_folio_consulta_reporte) > 30)) {
            throw new \InvalidArgumentException('invalid length for $id_folio_consulta_reporte when calling CreditReport., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($id_folio_consulta_reporte) < 2)) {
            throw new \InvalidArgumentException('invalid length for $id_folio_consulta_reporte when calling CreditReport., must be bigger than or equal to 2.');
        }
        $this->container['id_folio_consulta_reporte'] = $id_folio_consulta_reporte;
        return $this;
    }
    
    public function getFolioOtorgante()
    {
        return $this->container['folio_otorgante'];
    }
    
    public function setFolioOtorgante($folio_otorgante)
    {
        if ((mb_strlen($folio_otorgante) > 10)) {
            throw new \InvalidArgumentException('invalid length for $folio_otorgante when calling CreditReport., must be smaller than or equal to 10.');
        }
        $this->container['folio_otorgante'] = $folio_otorgante;
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
