<?php

namespace CirculoDeCredito\EmploymentVerification\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\EmploymentVerification\Client\ObjectSerializer;

class EVAResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'EVAResponse';
    
    protected static $RCCPMTypes = [
        'acknowledge_id' => 'string',
        'date_time' => '\DateTime',
        'operation' => 'string',
        'message' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'acknowledge_id' => 'uuid',
        'date_time' => 'date-time',
        'operation' => null,
        'message' => null
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
        'acknowledge_id' => 'acknowledgeId',
        'date_time' => 'dateTime',
        'operation' => 'operation',
        'message' => 'message'
    ];
    
    protected static $setters = [
        'acknowledge_id' => 'setAcknowledgeId',
        'date_time' => 'setDateTime',
        'operation' => 'setOperation',
        'message' => 'setMessage'
    ];
    
    protected static $getters = [
        'acknowledge_id' => 'getAcknowledgeId',
        'date_time' => 'getDateTime',
        'operation' => 'getOperation',
        'message' => 'getMessage'
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
    const OPERATION_REQUEST = 'request';
    const OPERATION_CONSUMPTION = 'consumption';
    
    
    
    public function getOperationAllowableValues()
    {
        return [
            self::OPERATION_REQUEST,
            self::OPERATION_CONSUMPTION,
        ];
    }
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['acknowledge_id'] = isset($data['acknowledge_id']) ? $data['acknowledge_id'] : null;
        $this->container['date_time'] = isset($data['date_time']) ? $data['date_time'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($this->container['operation']) && !in_array($this->container['operation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'operation', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
        if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 120)) {
            $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 120.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getAcknowledgeId()
    {
        return $this->container['acknowledge_id'];
    }
    
    public function setAcknowledgeId($acknowledge_id)
    {
        $this->container['acknowledge_id'] = $acknowledge_id;
        return $this;
    }
    
    public function getDateTime()
    {
        return $this->container['date_time'];
    }
    
    public function setDateTime($date_time)
    {
        $this->container['date_time'] = $date_time;
        return $this;
    }
    
    public function getOperation()
    {
        return $this->container['operation'];
    }
    
    public function setOperation($operation)
    {
        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($operation) && !in_array($operation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operation'] = $operation;
        return $this;
    }
    
    public function getMessage()
    {
        return $this->container['message'];
    }
    
    public function setMessage($message)
    {
        if (!is_null($message) && (mb_strlen($message) > 120)) {
            throw new \InvalidArgumentException('invalid length for $message when calling EVAResponse., must be smaller than or equal to 120.');
        }
        $this->container['message'] = $message;
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
