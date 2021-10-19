<?php

namespace ExtraHop\Api\Model;

class MetricStats
{
    /**
     * 
     *
     * @var int
     */
    protected $oid;
    /**
     * 
     *
     * @var int
     */
    protected $time;
    /**
     * 
     *
     * @var int
     */
    protected $duration;
    /**
     * 
     *
     * @var int[]
     */
    protected $values;
    /**
     * 
     *
     * @return int
     */
    public function getOid() : int
    {
        return $this->oid;
    }
    /**
     * 
     *
     * @param int $oid
     *
     * @return self
     */
    public function setOid(int $oid) : self
    {
        $this->oid = $oid;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTime() : int
    {
        return $this->time;
    }
    /**
     * 
     *
     * @param int $time
     *
     * @return self
     */
    public function setTime(int $time) : self
    {
        $this->time = $time;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDuration() : int
    {
        return $this->duration;
    }
    /**
     * 
     *
     * @param int $duration
     *
     * @return self
     */
    public function setDuration(int $duration) : self
    {
        $this->duration = $duration;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getValues() : array
    {
        return $this->values;
    }
    /**
     * 
     *
     * @param int[] $values
     *
     * @return self
     */
    public function setValues(array $values) : self
    {
        $this->values = $values;
        return $this;
    }
}