<?php

namespace CirculoDeCredito\EmploymentVerification\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\EmploymentVerification\Client\ObjectSerializer;

class EmploymentVerificationId implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'EmploymentVerificationId';
    
    protected static $RCCPMTypes = [
        'employment_verification_request_id' => 'string',
        'subscription_id' => 'string',
        'inquiry_id' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'employment_verification_request_id' => 'uuid',
        'subscription_id' => 'uuid',
        'inquiry_id' => 'uuid'
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
        'employment_verification_request_id' => 'employmentVerificationRequestId',
        'subscription_id' => 'subscriptionId',
        'inquiry_id' => 'inquiryId'
    ];
    
    protected static $setters = [
        'employment_verification_request_id' => 'setEmploymentVerificationRequestId',
        'subscription_id' => 'setSubscriptionId',
        'inquiry_id' => 'setInquiryId'
    ];
    
    protected static $getters = [
        'employment_verification_request_id' => 'getEmploymentVerificationRequestId',
        'subscription_id' => 'getSubscriptionId',
        'inquiry_id' => 'getInquiryId'
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
        $this->container['employment_verification_request_id'] = isset($data['employment_verification_request_id']) ? $data['employment_verification_request_id'] : null;
        $this->container['subscription_id'] = isset($data['subscription_id']) ? $data['subscription_id'] : null;
        $this->container['inquiry_id'] = isset($data['inquiry_id']) ? $data['inquiry_id'] : null;
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
    
    public function getEmploymentVerificationRequestId()
    {
        return $this->container['employment_verification_request_id'];
    }
    
    public function setEmploymentVerificationRequestId($employment_verification_request_id)
    {
        $this->container['employment_verification_request_id'] = $employment_verification_request_id;
        return $this;
    }
    
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }
    
    public function setSubscriptionId($subscription_id)
    {
        $this->container['subscription_id'] = $subscription_id;
        return $this;
    }
    
    public function getInquiryId()
    {
        return $this->container['inquiry_id'];
    }
    
    public function setInquiryId($inquiry_id)
    {
        $this->container['inquiry_id'] = $inquiry_id;
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
