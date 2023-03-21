<?php

namespace CirculoDeCredito\EmploymentVerification\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\EmploymentVerification\Client\ObjectSerializer;

class WorkingHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'WorkingHistory';
    
    protected static $RCCPMTypes = [
        'date' => '\DateTime',
        'weeks_contributed' => 'CirculoDeCredito\EmploymentVerification\Client\Model\WeeksContributed',
        'working_history_detail' => 'CirculoDeCredito\EmploymentVerification\Client\Model\WorkingHistoryDetail[]'
    ];
    
    protected static $RCCPMFormats = [
        'date' => 'date',
        'weeks_contributed' => null,
        'working_history_detail' => null
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
        'date' => 'date',
        'weeks_contributed' => 'weeksContributed',
        'working_history_detail' => 'workingHistoryDetail'
    ];
    
    protected static $setters = [
        'date' => 'setDate',
        'weeks_contributed' => 'setWeeksContributed',
        'working_history_detail' => 'setWorkingHistoryDetail'
    ];
    
    protected static $getters = [
        'date' => 'getDate',
        'weeks_contributed' => 'getWeeksContributed',
        'working_history_detail' => 'getWorkingHistoryDetail'
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['weeks_contributed'] = isset($data['weeks_contributed']) ? $data['weeks_contributed'] : null;
        $this->container['working_history_detail'] = isset($data['working_history_detail']) ? $data['working_history_detail'] : null;
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
    
    public function getDate()
    {
        return $this->container['date'];
    }
    
    public function setDate($date)
    {
        $this->container['date'] = $date;
        return $this;
    }
    
    public function getWeeksContributed()
    {
        return $this->container['weeks_contributed'];
    }
    
    public function setWeeksContributed($weeks_contributed)
    {
        $this->container['weeks_contributed'] = $weeks_contributed;
        return $this;
    }
    
    public function getWorkingHistoryDetail()
    {
        return $this->container['working_history_detail'];
    }
    
    public function setWorkingHistoryDetail($working_history_detail)
    {
        $this->container['working_history_detail'] = $working_history_detail;
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
