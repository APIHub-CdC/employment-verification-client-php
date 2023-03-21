<?php

namespace CirculoDeCredito\EmploymentVerification\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\EmploymentVerification\Client\ObjectSerializer;

class FullName implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'FullName';
    
    protected static $RCCPMTypes = [
        'first_name' => 'string',
        'middle_name' => 'string',
        'first_surname' => 'string',
        'second_surname' => 'string',
        'aditional_surname' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'first_name' => null,
        'middle_name' => null,
        'first_surname' => null,
        'second_surname' => null,
        'aditional_surname' => null
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
        'first_name' => 'firstName',
        'middle_name' => 'middleName',
        'first_surname' => 'firstSurname',
        'second_surname' => 'secondSurname',
        'aditional_surname' => 'aditionalSurname'
    ];
    
    protected static $setters = [
        'first_name' => 'setFirstName',
        'middle_name' => 'setMiddleName',
        'first_surname' => 'setFirstSurname',
        'second_surname' => 'setSecondSurname',
        'aditional_surname' => 'setAditionalSurname'
    ];
    
    protected static $getters = [
        'first_name' => 'getFirstName',
        'middle_name' => 'getMiddleName',
        'first_surname' => 'getFirstSurname',
        'second_surname' => 'getSecondSurname',
        'aditional_surname' => 'getAditionalSurname'
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
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['first_surname'] = isset($data['first_surname']) ? $data['first_surname'] : null;
        $this->container['second_surname'] = isset($data['second_surname']) ? $data['second_surname'] : null;
        $this->container['aditional_surname'] = isset($data['aditional_surname']) ? $data['aditional_surname'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ((mb_strlen($this->container['first_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 50.";
        }
        if ((mb_strlen($this->container['first_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['middle_name']) && (mb_strlen($this->container['middle_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'middle_name', the character length must be smaller than or equal to 50.";
        }
        if (!is_null($this->container['middle_name']) && (mb_strlen($this->container['middle_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'middle_name', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['first_surname'] === null) {
            $invalidProperties[] = "'first_surname' can't be null";
        }
        if ((mb_strlen($this->container['first_surname']) > 30)) {
            $invalidProperties[] = "invalid value for 'first_surname', the character length must be smaller than or equal to 30.";
        }
        if ((mb_strlen($this->container['first_surname']) < 0)) {
            $invalidProperties[] = "invalid value for 'first_surname', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['second_surname'] === null) {
            $invalidProperties[] = "'second_surname' can't be null";
        }
        if ((mb_strlen($this->container['second_surname']) > 30)) {
            $invalidProperties[] = "invalid value for 'second_surname', the character length must be smaller than or equal to 30.";
        }
        if ((mb_strlen($this->container['second_surname']) < 0)) {
            $invalidProperties[] = "invalid value for 'second_surname', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['aditional_surname']) && (mb_strlen($this->container['aditional_surname']) > 30)) {
            $invalidProperties[] = "invalid value for 'aditional_surname', the character length must be smaller than or equal to 30.";
        }
        if (!is_null($this->container['aditional_surname']) && (mb_strlen($this->container['aditional_surname']) < 0)) {
            $invalidProperties[] = "invalid value for 'aditional_surname', the character length must be bigger than or equal to 0.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getFirstName()
    {
        return $this->container['first_name'];
    }
    
    public function setFirstName($first_name)
    {
        if ((mb_strlen($first_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling FullName., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($first_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling FullName., must be bigger than or equal to 0.');
        }
        $this->container['first_name'] = $first_name;
        return $this;
    }
    
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }
    
    public function setMiddleName($middle_name)
    {
        if (!is_null($middle_name) && (mb_strlen($middle_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $middle_name when calling FullName., must be smaller than or equal to 50.');
        }
        if (!is_null($middle_name) && (mb_strlen($middle_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $middle_name when calling FullName., must be bigger than or equal to 0.');
        }
        $this->container['middle_name'] = $middle_name;
        return $this;
    }
    
    public function getFirstSurname()
    {
        return $this->container['first_surname'];
    }
    
    public function setFirstSurname($first_surname)
    {
        if ((mb_strlen($first_surname) > 30)) {
            throw new \InvalidArgumentException('invalid length for $first_surname when calling FullName., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($first_surname) < 0)) {
            throw new \InvalidArgumentException('invalid length for $first_surname when calling FullName., must be bigger than or equal to 0.');
        }
        $this->container['first_surname'] = $first_surname;
        return $this;
    }
    
    public function getSecondSurname()
    {
        return $this->container['second_surname'];
    }
    
    public function setSecondSurname($second_surname)
    {
        if ((mb_strlen($second_surname) > 30)) {
            throw new \InvalidArgumentException('invalid length for $second_surname when calling FullName., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($second_surname) < 0)) {
            throw new \InvalidArgumentException('invalid length for $second_surname when calling FullName., must be bigger than or equal to 0.');
        }
        $this->container['second_surname'] = $second_surname;
        return $this;
    }
    
    public function getAditionalSurname()
    {
        return $this->container['aditional_surname'];
    }
    
    public function setAditionalSurname($aditional_surname)
    {
        if (!is_null($aditional_surname) && (mb_strlen($aditional_surname) > 30)) {
            throw new \InvalidArgumentException('invalid length for $aditional_surname when calling FullName., must be smaller than or equal to 30.');
        }
        if (!is_null($aditional_surname) && (mb_strlen($aditional_surname) < 0)) {
            throw new \InvalidArgumentException('invalid length for $aditional_surname when calling FullName., must be bigger than or equal to 0.');
        }
        $this->container['aditional_surname'] = $aditional_surname;
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
