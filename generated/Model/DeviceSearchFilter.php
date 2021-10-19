<?php

namespace ExtraHop\Api\Model;

class DeviceSearchFilter
{
    /**
     * 
     *
     * @var string
     */
    protected $field;
    /**
     * 
     *
     * @var string
     */
    protected $operator;
    /**
     * 
     *
     * @var string
     */
    protected $operand;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $rules;
    /**
     * 
     *
     * @return string
     */
    public function getField() : string
    {
        return $this->field;
    }
    /**
     * 
     *
     * @param string $field
     *
     * @return self
     */
    public function setField(string $field) : self
    {
        $this->field = $field;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOperator() : string
    {
        return $this->operator;
    }
    /**
     * 
     *
     * @param string $operator
     *
     * @return self
     */
    public function setOperator(string $operator) : self
    {
        $this->operator = $operator;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOperand() : string
    {
        return $this->operand;
    }
    /**
     * 
     *
     * @param string $operand
     *
     * @return self
     */
    public function setOperand(string $operand) : self
    {
        $this->operand = $operand;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getRules() : ?array
    {
        return $this->rules;
    }
    /**
     * 
     *
     * @param string[]|null $rules
     *
     * @return self
     */
    public function setRules(?array $rules) : self
    {
        $this->rules = $rules;
        return $this;
    }
}