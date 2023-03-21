<?php

namespace CirculoDeCredito\EmploymentVerification\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\EmploymentVerification\Client\ObjectSerializer;

class WeeksContributed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'WeeksContributed';
    
    protected static $RCCPMTypes = [
        'total_contributed_weeks' => 'int',
        'discounted_weeks' => 'int',
        'reinstated_weeks' => 'int'
    ];
    
    protected static $RCCPMFormats = [
        'total_contributed_weeks' => null,
        'discounted_weeks' => null,
        'reinstated_weeks' => null
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
        'total_contributed_weeks' => 'totalContributedWeeks',
        'discounted_weeks' => 'discountedWeeks',
        'reinstated_weeks' => 'reinstatedWeeks'
    ];
    
    protected static $setters = [
        'total_contributed_weeks' => 'setTotalContributedWeeks',
        'discounted_weeks' => 'setDiscountedWeeks',
        'reinstated_weeks' => 'setReinstatedWeeks'
    ];
    
    protected static $getters = [
        'total_contributed_weeks' => 'getTotalContributedWeeks',
        'discounted_weeks' => 'getDiscountedWeeks',
        'reinstated_weeks' => 'getReinstatedWeeks'
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
        $this->container['total_contributed_weeks'] = isset($data['total_contributed_weeks']) ? $data['total_contributed_weeks'] : null;
        $this->container['discounted_weeks'] = isset($data['discounted_weeks']) ? $data['discounted_weeks'] : null;
        $this->container['reinstated_weeks'] = isset($data['reinstated_weeks']) ? $data['reinstated_weeks'] : null;
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
    
    public function getTotalContributedWeeks()
    {
        return $this->container['total_contributed_weeks'];
    }
    
    public function setTotalContributedWeeks($total_contributed_weeks)
    {
        $this->container['total_contributed_weeks'] = $total_contributed_weeks;
        return $this;
    }
    
    public function getDiscountedWeeks()
    {
        return $this->container['discounted_weeks'];
    }
    
    public function setDiscountedWeeks($discounted_weeks)
    {
        $this->container['discounted_weeks'] = $discounted_weeks;
        return $this;
    }
    
    public function getReinstatedWeeks()
    {
        return $this->container['reinstated_weeks'];
    }
    
    public function setReinstatedWeeks($reinstated_weeks)
    {
        $this->container['reinstated_weeks'] = $reinstated_weeks;
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
