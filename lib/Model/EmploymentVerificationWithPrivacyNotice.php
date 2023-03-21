<?php

namespace CirculoDeCredito\EmploymentVerification\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\EmploymentVerification\Client\ObjectSerializer;

class EmploymentVerificationWithPrivacyNotice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'EmploymentVerificationWithPrivacyNotice';
    
    protected static $RCCPMTypes = [
        'privacy_notice' => 'CirculoDeCredito\EmploymentVerification\Client\Model\PrivacyNotice',
        'employment_verification' => 'CirculoDeCredito\EmploymentVerification\Client\Model\EmploymentVerification'
    ];
    
    protected static $RCCPMFormats = [
        'privacy_notice' => null,
        'employment_verification' => null
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
        'privacy_notice' => 'privacyNotice',
        'employment_verification' => 'employmentVerification'
    ];
    
    protected static $setters = [
        'privacy_notice' => 'setPrivacyNotice',
        'employment_verification' => 'setEmploymentVerification'
    ];
    
    protected static $getters = [
        'privacy_notice' => 'getPrivacyNotice',
        'employment_verification' => 'getEmploymentVerification'
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
        $this->container['privacy_notice'] = isset($data['privacy_notice']) ? $data['privacy_notice'] : null;
        $this->container['employment_verification'] = isset($data['employment_verification']) ? $data['employment_verification'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['privacy_notice'] === null) {
            $invalidProperties[] = "'privacy_notice' can't be null";
        }
        if ($this->container['employment_verification'] === null) {
            $invalidProperties[] = "'employment_verification' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getPrivacyNotice()
    {
        return $this->container['privacy_notice'];
    }
    
    public function setPrivacyNotice($privacy_notice)
    {
        $this->container['privacy_notice'] = $privacy_notice;
        return $this;
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
