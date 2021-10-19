<?php

namespace ExtraHop\Api\Model;

class MetricRequest
{
    /**
     * 
     *
     * @var string
     */
    protected $cycle;
    /**
     * 
     *
     * @var int
     */
    protected $from;
    /**
     * 
     *
     * @var string
     */
    protected $metricCategory;
    /**
     * 
     *
     * @var MetricSpec[]
     */
    protected $metricSpecs;
    /**
     * 
     *
     * @var int[]
     */
    protected $objectIds;
    /**
     * 
     *
     * @var string
     */
    protected $objectType;
    /**
     * 
     *
     * @var int
     */
    protected $until;
    /**
     * 
     *
     * @return string
     */
    public function getCycle() : string
    {
        return $this->cycle;
    }
    /**
     * 
     *
     * @param string $cycle
     *
     * @return self
     */
    public function setCycle(string $cycle) : self
    {
        $this->cycle = $cycle;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFrom() : int
    {
        return $this->from;
    }
    /**
     * 
     *
     * @param int $from
     *
     * @return self
     */
    public function setFrom(int $from) : self
    {
        $this->from = $from;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMetricCategory() : string
    {
        return $this->metricCategory;
    }
    /**
     * 
     *
     * @param string $metricCategory
     *
     * @return self
     */
    public function setMetricCategory(string $metricCategory) : self
    {
        $this->metricCategory = $metricCategory;
        return $this;
    }
    /**
     * 
     *
     * @return MetricSpec[]
     */
    public function getMetricSpecs() : array
    {
        return $this->metricSpecs;
    }
    /**
     * 
     *
     * @param MetricSpec[] $metricSpecs
     *
     * @return self
     */
    public function setMetricSpecs(array $metricSpecs) : self
    {
        $this->metricSpecs = $metricSpecs;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getObjectIds() : array
    {
        return $this->objectIds;
    }
    /**
     * 
     *
     * @param int[] $objectIds
     *
     * @return self
     */
    public function setObjectIds(array $objectIds) : self
    {
        $this->objectIds = $objectIds;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getObjectType() : string
    {
        return $this->objectType;
    }
    /**
     * 
     *
     * @param string $objectType
     *
     * @return self
     */
    public function setObjectType(string $objectType) : self
    {
        $this->objectType = $objectType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUntil() : int
    {
        return $this->until;
    }
    /**
     * 
     *
     * @param int $until
     *
     * @return self
     */
    public function setUntil(int $until) : self
    {
        $this->until = $until;
        return $this;
    }
}