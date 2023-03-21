<?php

namespace CirculoDeCredito\EmploymentVerification\Client\Model;
use CirculoDeCredito\EmploymentVerification\Client\ObjectSerializer;

class EmploymentVerification extends EmploymentVerificationId 
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'EmploymentVerification';
    
    protected static $RCCPMTypes = [
        'curp' => 'string',
        'nss' => 'string',
        'email' => 'string',
        'subscription_id' => 'string',
        'employment_verification_request_id' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'curp' => null,
        'nss' => null,
        'email' => 'email',
        'subscription_id' => null,
        'employment_verification_request_id' => null
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
        'curp' => 'curp',
        'nss' => 'nss',
        'email' => 'email',
        'subscription_id' => 'subscriptionId',
        'employment_verification_request_id' => 'employmentVerificationRequestId'
    ];
    
    protected static $setters = [
        'curp' => 'setCurp',
        'nss' => 'setNss',
        'email' => 'setEmail',
        'subscription_id' => 'setSubscriptionId',
        'employment_verification_request_id' => 'setEmploymentVerificationRequestId'
    ];
    
    protected static $getters = [
        'curp' => 'getCurp',
        'nss' => 'getNss',
        'email' => 'getEmail',
        'subscription_id' => 'getSubscriptionId',
        'employment_verification_request_id' => 'getEmploymentVerificationRequestId'
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
        $this->container['curp'] = isset($data['curp']) ? $data['curp'] : null;
        $this->container['nss'] = isset($data['nss']) ? $data['nss'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['subscription_id'] = isset($data['subscription_id']) ? $data['subscription_id'] : null;
        $this->container['employment_verification_request_id'] = isset($data['employment_verification_request_id']) ? $data['employment_verification_request_id'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();
        if ($this->container['curp'] === null) {
            $invalidProperties[] = "'curp' can't be null";
        }
        if ((mb_strlen($this->container['curp']) > 18)) {
            $invalidProperties[] = "invalid value for 'curp', the character length must be smaller than or equal to 18.";
        }
        if ((mb_strlen($this->container['curp']) < 18)) {
            $invalidProperties[] = "invalid value for 'curp', the character length must be bigger than or equal to 18.";
        }
        if (!is_null($this->container['nss']) && (mb_strlen($this->container['nss']) > 11)) {
            $invalidProperties[] = "invalid value for 'nss', the character length must be smaller than or equal to 11.";
        }
        if (!is_null($this->container['nss']) && (mb_strlen($this->container['nss']) < 11)) {
            $invalidProperties[] = "invalid value for 'nss', the character length must be bigger than or equal to 11.";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ((mb_strlen($this->container['email']) > 80)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 80.";
        }
        if ((mb_strlen($this->container['email']) < 3)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 3.";
        }

        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getCurp()
    {
        return $this->container['curp'];
    }
    
    public function setCurp($curp)
    {
        if ((mb_strlen($curp) > 18)) {
            throw new \InvalidArgumentException('invalid length for $curp when calling EmploymentVerification., must be smaller than or equal to 18.');
        }
        if ((mb_strlen($curp) < 18)) {
            throw new \InvalidArgumentException('invalid length for $curp when calling EmploymentVerification., must be bigger than or equal to 18.');
        }
        $this->container['curp'] = $curp;
        return $this;
    }
    
    public function getNss()
    {
        return $this->container['nss'];
    }
    
    public function setNss($nss)
    {
        if (!is_null($nss) && (mb_strlen($nss) > 11)) {
            throw new \InvalidArgumentException('invalid length for $nss when calling EmploymentVerification., must be smaller than or equal to 11.');
        }
        if (!is_null($nss) && (mb_strlen($nss) < 11)) {
            throw new \InvalidArgumentException('invalid length for $nss when calling EmploymentVerification., must be bigger than or equal to 11.');
        }
        $this->container['nss'] = $nss;
        return $this;
    }
    
    public function getEmail()
    {
        return $this->container['email'];
    }
    
    public function setEmail($email)
    {
        if ((mb_strlen($email) > 80)) {
            throw new \InvalidArgumentException('invalid length for $email when calling EmploymentVerification., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($email) < 3)) {
            throw new \InvalidArgumentException('invalid length for $email when calling EmploymentVerification., must be bigger than or equal to 3.');
        }
        $this->container['email'] = $email;
        return $this;
    }

    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }
    
    public function setSubscriptionId($subscriptionId) {
        
        if ($subscriptionId === null || !is_string($subscriptionId)) {
            throw new \InvalidArgumentException('Invalid subscriptionId must be a string and not null');
        }

        $this->container['subscription_id'] = $subscriptionId;
        return $this;
    }

    public function getEmploymentVerificationRequestId()
    {
        return $this->container['employment_verification_request_id'];
    }
    
    public function setEmploymentVerificationRequestId($requestId)
    {
        if ($requestId === null || !is_string($requestId)) {
            throw new \InvalidArgumentException('Invalid requestId must be a string and not null');
        }

        $this->container['employment_verification_request_id'] = $requestId;
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
