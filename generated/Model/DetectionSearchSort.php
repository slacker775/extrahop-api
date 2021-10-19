<?php

namespace ExtraHop\Api\Model;

class DetectionSearchSort
{
    /**
     * 
     *
     * @var string|null
     */
    protected $direction;
    /**
     * 
     *
     * @var string|null
     */
    protected $field;
    /**
     * 
     *
     * @return string|null
     */
    public function getDirection() : ?string
    {
        return $this->direction;
    }
    /**
     * 
     *
     * @param string|null $direction
     *
     * @return self
     */
    public function setDirection(?string $direction) : self
    {
        $this->direction = $direction;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getField() : ?string
    {
        return $this->field;
    }
    /**
     * 
     *
     * @param string|null $field
     *
     * @return self
     */
    public function setField(?string $field) : self
    {
        $this->field = $field;
        return $this;
    }
}