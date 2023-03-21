<?php

namespace CirculoDeCredito\EmploymentVerification\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\EmploymentVerification\Client\ObjectSerializer;

class WorkStatusEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'WorkStatusEvent';
    
    protected static $RCCPMTypes = [
        'change_type' => 'int',
        'event_date' => '\DateTime',
        'base_salary' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'change_type' => null,
        'event_date' => 'date',
        'base_salary' => null
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
        'change_type' => 'changeType',
        'event_date' => 'eventDate',
        'base_salary' => 'baseSalary'
    ];
    
    protected static $setters = [
        'change_type' => 'setChangeType',
        'event_date' => 'setEventDate',
        'base_salary' => 'setBaseSalary'
    ];
    
    protected static $getters = [
        'change_type' => 'getChangeType',
        'event_date' => 'getEventDate',
        'base_salary' => 'getBaseSalary'
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
        $this->container['change_type'] = isset($data['change_type']) ? $data['change_type'] : null;
        $this->container['event_date'] = isset($data['event_date']) ? $data['event_date'] : null;
        $this->container['base_salary'] = isset($data['base_salary']) ? $data['base_salary'] : null;
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
    
    public function getChangeType()
    {
        return $this->container['change_type'];
    }
    
    public function setChangeType($change_type)
    {
        $this->container['change_type'] = $change_type;
        return $this;
    }
    
    public function getEventDate()
    {
        return $this->container['event_date'];
    }
    
    public function setEventDate($event_date)
    {
        $this->container['event_date'] = $event_date;
        return $this;
    }
    
    public function getBaseSalary()
    {
        return $this->container['base_salary'];
    }
    
    public function setBaseSalary($base_salary)
    {
        $this->container['base_salary'] = $base_salary;
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
