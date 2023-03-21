<?php

namespace CirculoDeCredito\EmploymentVerification\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\EmploymentVerification\Client\ObjectSerializer;

class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'Address';
    
    protected static $RCCPMTypes = [
        'street_and_number' => 'string',
        'settlement' => 'string',
        'county' => 'string',
        'city' => 'string',
        'state' => 'CirculoDeCredito\EmploymentVerification\Client\Model\StateCatalog',
        'postal_code' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'street_and_number' => null,
        'settlement' => null,
        'county' => null,
        'city' => null,
        'state' => null,
        'postal_code' => null
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
        'street_and_number' => 'streetAndNumber',
        'settlement' => 'settlement',
        'county' => 'county',
        'city' => 'city',
        'state' => 'state',
        'postal_code' => 'postalCode'
    ];
    
    protected static $setters = [
        'street_and_number' => 'setStreetAndNumber',
        'settlement' => 'setSettlement',
        'county' => 'setCounty',
        'city' => 'setCity',
        'state' => 'setState',
        'postal_code' => 'setPostalCode'
    ];
    
    protected static $getters = [
        'street_and_number' => 'getStreetAndNumber',
        'settlement' => 'getSettlement',
        'county' => 'getCounty',
        'city' => 'getCity',
        'state' => 'getState',
        'postal_code' => 'getPostalCode'
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
        $this->container['street_and_number'] = isset($data['street_and_number']) ? $data['street_and_number'] : null;
        $this->container['settlement'] = isset($data['settlement']) ? $data['settlement'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['street_and_number'] === null) {
            $invalidProperties[] = "'street_and_number' can't be null";
        }
        if ((mb_strlen($this->container['street_and_number']) > 80)) {
            $invalidProperties[] = "invalid value for 'street_and_number', the character length must be smaller than or equal to 80.";
        }
        if ((mb_strlen($this->container['street_and_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'street_and_number', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['settlement'] === null) {
            $invalidProperties[] = "'settlement' can't be null";
        }
        if ((mb_strlen($this->container['settlement']) > 65)) {
            $invalidProperties[] = "invalid value for 'settlement', the character length must be smaller than or equal to 65.";
        }
        if ((mb_strlen($this->container['settlement']) < 0)) {
            $invalidProperties[] = "invalid value for 'settlement', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['county'] === null) {
            $invalidProperties[] = "'county' can't be null";
        }
        if ((mb_strlen($this->container['county']) > 65)) {
            $invalidProperties[] = "invalid value for 'county', the character length must be smaller than or equal to 65.";
        }
        if ((mb_strlen($this->container['county']) < 0)) {
            $invalidProperties[] = "invalid value for 'county', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ((mb_strlen($this->container['city']) > 65)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 65.";
        }
        if ((mb_strlen($this->container['city']) < 0)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['postal_code'] === null) {
            $invalidProperties[] = "'postal_code' can't be null";
        }
        if ((mb_strlen($this->container['postal_code']) > 5)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 5.";
        }
        if ((mb_strlen($this->container['postal_code']) < 5)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be bigger than or equal to 5.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getStreetAndNumber()
    {
        return $this->container['street_and_number'];
    }
    
    public function setStreetAndNumber($street_and_number)
    {
        if ((mb_strlen($street_and_number) > 80)) {
            throw new \InvalidArgumentException('invalid length for $street_and_number when calling Address., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($street_and_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $street_and_number when calling Address., must be bigger than or equal to 0.');
        }
        $this->container['street_and_number'] = $street_and_number;
        return $this;
    }
    
    public function getSettlement()
    {
        return $this->container['settlement'];
    }
    
    public function setSettlement($settlement)
    {
        if ((mb_strlen($settlement) > 65)) {
            throw new \InvalidArgumentException('invalid length for $settlement when calling Address., must be smaller than or equal to 65.');
        }
        if ((mb_strlen($settlement) < 0)) {
            throw new \InvalidArgumentException('invalid length for $settlement when calling Address., must be bigger than or equal to 0.');
        }
        $this->container['settlement'] = $settlement;
        return $this;
    }
    
    public function getCounty()
    {
        return $this->container['county'];
    }
    
    public function setCounty($county)
    {
        if ((mb_strlen($county) > 65)) {
            throw new \InvalidArgumentException('invalid length for $county when calling Address., must be smaller than or equal to 65.');
        }
        if ((mb_strlen($county) < 0)) {
            throw new \InvalidArgumentException('invalid length for $county when calling Address., must be bigger than or equal to 0.');
        }
        $this->container['county'] = $county;
        return $this;
    }
    
    public function getCity()
    {
        return $this->container['city'];
    }
    
    public function setCity($city)
    {
        if ((mb_strlen($city) > 65)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be smaller than or equal to 65.');
        }
        if ((mb_strlen($city) < 0)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be bigger than or equal to 0.');
        }
        $this->container['city'] = $city;
        return $this;
    }
    
    public function getState()
    {
        return $this->container['state'];
    }
    
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }
    
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }
    
    public function setPostalCode($postal_code)
    {
        if ((mb_strlen($postal_code) > 5)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling Address., must be smaller than or equal to 5.');
        }
        if ((mb_strlen($postal_code) < 5)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling Address., must be bigger than or equal to 5.');
        }
        $this->container['postal_code'] = $postal_code;
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
