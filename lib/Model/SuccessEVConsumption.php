<?php

namespace CirculoDeCredito\EmploymentVerification\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\EmploymentVerification\Client\ObjectSerializer;

class SuccessEVConsumption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'SuccessEVConsumption';
    
    protected static $RCCPMTypes = [
        'request' => 'CirculoDeCredito\EmploymentVerification\Client\Model\EmploymentVerification',
        'names' => 'string',
        'birthday' => '\DateTime',
        'work_status' => 'string',
        'valid_until' => '\DateTime',
        'nss_check' => 'bool',
        'working_history' => 'CirculoDeCredito\EmploymentVerification\Client\Model\WorkingHistory'
    ];
    
    protected static $RCCPMFormats = [
        'request' => null,
        'names' => null,
        'birthday' => 'date',
        'work_status' => null,
        'valid_until' => 'date',
        'nss_check' => null,
        'working_history' => null
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
        'request' => 'request',
        'names' => 'names',
        'birthday' => 'birthday',
        'work_status' => 'workStatus',
        'valid_until' => 'validUntil',
        'nss_check' => 'nssCheck',
        'working_history' => 'workingHistory'
    ];
    
    protected static $setters = [
        'request' => 'setRequest',
        'names' => 'setNames',
        'birthday' => 'setBirthday',
        'work_status' => 'setWorkStatus',
        'valid_until' => 'setValidUntil',
        'nss_check' => 'setNssCheck',
        'working_history' => 'setWorkingHistory'
    ];
    
    protected static $getters = [
        'request' => 'getRequest',
        'names' => 'getNames',
        'birthday' => 'getBirthday',
        'work_status' => 'getWorkStatus',
        'valid_until' => 'getValidUntil',
        'nss_check' => 'getNssCheck',
        'working_history' => 'getWorkingHistory'
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
    const WORK_STATUS_W = 'W';
    const WORK_STATUS_NW = 'NW';
    
    
    
    public function getWorkStatusAllowableValues()
    {
        return [
            self::WORK_STATUS_W,
            self::WORK_STATUS_NW,
        ];
    }
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['request'] = isset($data['request']) ? $data['request'] : null;
        $this->container['names'] = isset($data['names']) ? $data['names'] : null;
        $this->container['birthday'] = isset($data['birthday']) ? $data['birthday'] : null;
        $this->container['work_status'] = isset($data['work_status']) ? $data['work_status'] : null;
        $this->container['valid_until'] = isset($data['valid_until']) ? $data['valid_until'] : null;
        $this->container['nss_check'] = isset($data['nss_check']) ? $data['nss_check'] : null;
        $this->container['working_history'] = isset($data['working_history']) ? $data['working_history'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        $allowedValues = $this->getWorkStatusAllowableValues();
        if (!is_null($this->container['work_status']) && !in_array($this->container['work_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'work_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getRequest()
    {
        return $this->container['request'];
    }
    
    public function setRequest($request)
    {
        $this->container['request'] = $request;
        return $this;
    }
    
    public function getNames()
    {
        return $this->container['names'];
    }
    
    public function setNames($names)
    {
        $this->container['names'] = $names;
        return $this;
    }
    
    public function getBirthday()
    {
        return $this->container['birthday'];
    }
    
    public function setBirthday($birthday)
    {
        $this->container['birthday'] = $birthday;
        return $this;
    }
    
    public function getWorkStatus()
    {
        return $this->container['work_status'];
    }
    
    public function setWorkStatus($work_status)
    {
        $allowedValues = $this->getWorkStatusAllowableValues();
        if (!is_null($work_status) && !in_array($work_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'work_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['work_status'] = $work_status;
        return $this;
    }
    
    public function getValidUntil()
    {
        return $this->container['valid_until'];
    }
    
    public function setValidUntil($valid_until)
    {
        $this->container['valid_until'] = $valid_until;
        return $this;
    }
    
    public function getNssCheck()
    {
        return $this->container['nss_check'];
    }
    
    public function setNssCheck($nss_check)
    {
        $this->container['nss_check'] = $nss_check;
        return $this;
    }
    
    public function getWorkingHistory()
    {
        return $this->container['working_history'];
    }
    
    public function setWorkingHistory($working_history)
    {
        $this->container['working_history'] = $working_history;
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
