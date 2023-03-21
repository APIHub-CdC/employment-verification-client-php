<?php

namespace CirculoDeCredito\EmploymentVerification\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\EmploymentVerification\Client\ObjectSerializer;

class EmploymentVerificationMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'EmploymentVerificationMetadata';
    
    protected static $RCCPMTypes = [
        '_metadata' => 'CirculoDeCredito\EmploymentVerification\Client\Model\Metadata',
        'inquiries' => 'CirculoDeCredito\EmploymentVerification\Client\Model\EmploymentVerifications'
    ];
    
    protected static $RCCPMFormats = [
        '_metadata' => null,
        'inquiries' => null
    ];
    
    public static function RCCPMTypes()
    {
        return self::$RCCPMTypes;
    }
    
    public static function RCCPMFormats()
    {
        return self::$RCCPMFormats;
    }
    
    protected static $attributeMap = [
        '_metadata' => '_metadata',
        'inquiries' => 'inquiries'
    ];
    
    protected static $setters = [
        '_metadata' => 'setMetadata',
        'inquiries' => 'setInquiries'
    ];
    
    protected static $getters = [
        '_metadata' => 'getMetadata',
        'inquiries' => 'getInquiries'
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
        return self::$RCCPMModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['_metadata'] = isset($data['_metadata']) ? $data['_metadata'] : null;
        $this->container['inquiries'] = isset($data['inquiries']) ? $data['inquiries'] : null;
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
    
    public function getMetadata()
    {
        return $this->container['_metadata'];
    }
    
    public function setMetadata($_metadata)
    {
        $this->container['_metadata'] = $_metadata;
        return $this;
    }
    
    public function getInquiries()
    {
        return $this->container['inquiries'];
    }
    
    public function setInquiries($inquiries)
    {
        $this->container['inquiries'] = $inquiries;
        return $this;
    }
    
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    #[\ReturnTypeWillChange]
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
