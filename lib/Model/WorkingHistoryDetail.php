<?php

namespace CirculoDeCredito\EmploymentVerification\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\EmploymentVerification\Client\ObjectSerializer;

class WorkingHistoryDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'WorkingHistoryDetail';
    
    protected static $RCCPMTypes = [
        'employer_name' => 'string',
        'employer_register' => 'string',
        'federal_entity' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'last_contribution_base_salary' => 'int',
        'work_status_events' => 'CirculoDeCredito\EmploymentVerification\Client\Model\WorkStatusEvent[]'
    ];
    
    protected static $RCCPMFormats = [
        'employer_name' => null,
        'employer_register' => null,
        'federal_entity' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'last_contribution_base_salary' => null,
        'work_status_events' => null
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
        'employer_name' => 'employerName',
        'employer_register' => 'employerRegister',
        'federal_entity' => 'federalEntity',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'last_contribution_base_salary' => 'lastContributionBaseSalary',
        'work_status_events' => 'workStatusEvents'
    ];
    
    protected static $setters = [
        'employer_name' => 'setEmployerName',
        'employer_register' => 'setEmployerRegister',
        'federal_entity' => 'setFederalEntity',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'last_contribution_base_salary' => 'setLastContributionBaseSalary',
        'work_status_events' => 'setWorkStatusEvents'
    ];
    
    protected static $getters = [
        'employer_name' => 'getEmployerName',
        'employer_register' => 'getEmployerRegister',
        'federal_entity' => 'getFederalEntity',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'last_contribution_base_salary' => 'getLastContributionBaseSalary',
        'work_status_events' => 'getWorkStatusEvents'
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
        $this->container['employer_name'] = isset($data['employer_name']) ? $data['employer_name'] : null;
        $this->container['employer_register'] = isset($data['employer_register']) ? $data['employer_register'] : null;
        $this->container['federal_entity'] = isset($data['federal_entity']) ? $data['federal_entity'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['last_contribution_base_salary'] = isset($data['last_contribution_base_salary']) ? $data['last_contribution_base_salary'] : null;
        $this->container['work_status_events'] = isset($data['work_status_events']) ? $data['work_status_events'] : null;
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
    
    public function getEmployerName()
    {
        return $this->container['employer_name'];
    }
    
    public function setEmployerName($employer_name)
    {
        $this->container['employer_name'] = $employer_name;
        return $this;
    }
    
    public function getEmployerRegister()
    {
        return $this->container['employer_register'];
    }
    
    public function setEmployerRegister($employer_register)
    {
        $this->container['employer_register'] = $employer_register;
        return $this;
    }
    
    public function getFederalEntity()
    {
        return $this->container['federal_entity'];
    }
    
    public function setFederalEntity($federal_entity)
    {
        $this->container['federal_entity'] = $federal_entity;
        return $this;
    }
    
    public function getStartDate()
    {
        return $this->container['start_date'];
    }
    
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;
        return $this;
    }
    
    public function getEndDate()
    {
        return $this->container['end_date'];
    }
    
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;
        return $this;
    }
    
    public function getLastContributionBaseSalary()
    {
        return $this->container['last_contribution_base_salary'];
    }
    
    public function setLastContributionBaseSalary($last_contribution_base_salary)
    {
        $this->container['last_contribution_base_salary'] = $last_contribution_base_salary;
        return $this;
    }
    
    public function getWorkStatusEvents()
    {
        return $this->container['work_status_events'];
    }
    
    public function setWorkStatusEvents($work_status_events)
    {
        $this->container['work_status_events'] = $work_status_events;
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
