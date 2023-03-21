<?php

namespace CirculoDeCredito\EmploymentVerification\Client\Model;
use CirculoDeCredito\EmploymentVerification\Client\ObjectSerializer;

class AckFailureEVConsumption extends EVAResponse 
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'AckFailureEVConsumption';
    
    protected static $RCCPMTypes = [
        'employment_verification' => 'CirculoDeCredito\EmploymentVerification\Client\Model\FailureEVConsumption'
    ];
    
    protected static $RCCPMFormats = [
        'employment_verification' => null
    ];
    
    public static function RCCPMTypes()
    {
        return self::$RCCPMTypes + parent::RCCPMTypes();
    }
    
    public static function RCCPMFormats()
    {
        return self::$RCCPMFormats + parent::RCCPMFormats();
    }
    
    protected static $attributeMap = [
        'employment_verification' => 'employmentVerification'
    ];
    
    protected static $setters = [
        'employment_verification' => 'setEmploymentVerification'
    ];
    
    protected static $getters = [
        'employment_verification' => 'getEmploymentVerification'
    ];
    
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }
    
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }
    
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }
    
    public function getModelName()
    {
        return self::$RCCPMModelName;
    }
    
    
    
    public function __construct(array $data = null)
    {
        parent::__construct($data);
        $this->container['employment_verification'] = isset($data['employment_verification']) ? $data['employment_verification'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getEmploymentVerification()
    {
        return $this->container['employment_verification'];
    }
    
    public function setEmploymentVerification($employment_verification)
    {
        $this->container['employment_verification'] = $employment_verification;
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
