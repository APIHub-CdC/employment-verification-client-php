<?php

namespace CirculoDeCredito\EmploymentVerification\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\EmploymentVerification\Client\ObjectSerializer;

class PrivacyNotice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'PrivacyNotice';
    
    protected static $RCCPMTypes = [
        'full_name' => 'CirculoDeCredito\EmploymentVerification\Client\Model\FullName',
        'address' => 'CirculoDeCredito\EmploymentVerification\Client\Model\Address',
        'acceptanceDate' => 'string',
        'acceptance' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'full_name' => null,
        'address' => null,
        'acceptanceDate' => 'date-time',
        'acceptance' => null
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
        'full_name' => 'fullName',
        'address' => 'address',
        'acceptanceDate' => 'acceptanceDate',
        'acceptance' => 'acceptance'
    ];
    
    protected static $setters = [
        'full_name' => 'setFullName',
        'address' => 'setAddress',
        'acceptanceDate' => 'setAcceptanceDate',
        'acceptance' => 'setAcceptance'
    ];
    
    protected static $getters = [
        'full_name' => 'getFullName',
        'address' => 'getAddress',
        'acceptanceDate' => 'getAcceptanceDate',
        'acceptance' => 'getAcceptance'
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
    const ACCEPTANCE_Y = 'Y';
    const ACCEPTANCE_N = 'N';
    
    
    
    public function getAcceptanceAllowableValues()
    {
        return [
            self::ACCEPTANCE_Y,
            self::ACCEPTANCE_N,
        ];
    }
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['acceptanceDate'] = isset($data['acceptanceDate']) ? $data['acceptanceDate'] : null;
        $this->container['acceptance'] = isset($data['acceptance']) ? $data['acceptance'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['full_name'] === null) {
            $invalidProperties[] = "'full_name' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['acceptanceDate'] === null) {
            $invalidProperties[] = "'acceptanceDate' can't be null";
        }
        if ($this->container['acceptance'] === null) {
            $invalidProperties[] = "'acceptance' can't be null";
        }
        $allowedValues = $this->getAcceptanceAllowableValues();
        if (!is_null($this->container['acceptance']) && !in_array($this->container['acceptance'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'acceptance', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
        if ((mb_strlen($this->container['acceptance']) > 1)) {
            $invalidProperties[] = "invalid value for 'acceptance', the character length must be smaller than or equal to 1.";
        }
        if ((mb_strlen($this->container['acceptance']) < 1)) {
            $invalidProperties[] = "invalid value for 'acceptance', the character length must be bigger than or equal to 1.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getFullName()
    {
        return $this->container['full_name'];
    }
    
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;
        return $this;
    }
    
    public function getAddress()
    {
        return $this->container['address'];
    }
    
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }
    
    public function getAcceptanceDate()
    {
        return $this->container['acceptanceDate'];
    }
    
    public function setAcceptanceDate($acceptance_date)
    {
        $this->container['acceptanceDate'] = $acceptance_date;
        return $this;
    }
    
    public function getAcceptance()
    {
        return $this->container['acceptance'];
    }
    
    public function setAcceptance($acceptance)
    {
        $allowedValues = $this->getAcceptanceAllowableValues();
        if (!in_array($acceptance, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'acceptance', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($acceptance) > 1)) {
            throw new \InvalidArgumentException('invalid length for $acceptance when calling PrivacyNotice., must be smaller than or equal to 1.');
        }
        if ((mb_strlen($acceptance) < 1)) {
            throw new \InvalidArgumentException('invalid length for $acceptance when calling PrivacyNotice., must be bigger than or equal to 1.');
        }
        $this->container['acceptance'] = $acceptance;
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
