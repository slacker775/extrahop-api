<?php

namespace ExtraHop\Api\Model;

class MetricSpec
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $key1;
    /**
     * 
     *
     * @var string|null
     */
    protected $key2;
    /**
     * 
     *
     * @var string|null
     */
    protected $calcType;
    /**
     * 
     *
     * @var float[]|null
     */
    protected $percentiles;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getKey1() : ?string
    {
        return $this->key1;
    }
    /**
     * 
     *
     * @param string|null $key1
     *
     * @return self
     */
    public function setKey1(?string $key1) : self
    {
        $this->key1 = $key1;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getKey2() : ?string
    {
        return $this->key2;
    }
    /**
     * 
     *
     * @param string|null $key2
     *
     * @return self
     */
    public function setKey2(?string $key2) : self
    {
        $this->key2 = $key2;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCalcType() : ?string
    {
        return $this->calcType;
    }
    /**
     * 
     *
     * @param string|null $calcType
     *
     * @return self
     */
    public function setCalcType(?string $calcType) : self
    {
        $this->calcType = $calcType;
        return $this;
    }
    /**
     * 
     *
     * @return float[]|null
     */
    public function getPercentiles() : ?array
    {
        return $this->percentiles;
    }
    /**
     * 
     *
     * @param float[]|null $percentiles
     *
     * @return self
     */
    public function setPercentiles(?array $percentiles) : self
    {
        $this->percentiles = $percentiles;
        return $this;
    }
}