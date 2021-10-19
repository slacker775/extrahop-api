<?php

namespace ExtraHop\Api\Model;

class ApplicationActivity
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $applicationId;
    /**
     * 
     *
     * @var int
     */
    protected $fromTime;
    /**
     * 
     *
     * @var int
     */
    protected $untilTime;
    /**
     * 
     *
     * @var string
     */
    protected $statName;
    /**
     * 
     *
     * @var int
     */
    protected $modTime;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getApplicationId() : int
    {
        return $this->applicationId;
    }
    /**
     * 
     *
     * @param int $applicationId
     *
     * @return self
     */
    public function setApplicationId(int $applicationId) : self
    {
        $this->applicationId = $applicationId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFromTime() : int
    {
        return $this->fromTime;
    }
    /**
     * 
     *
     * @param int $fromTime
     *
     * @return self
     */
    public function setFromTime(int $fromTime) : self
    {
        $this->fromTime = $fromTime;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUntilTime() : int
    {
        return $this->untilTime;
    }
    /**
     * 
     *
     * @param int $untilTime
     *
     * @return self
     */
    public function setUntilTime(int $untilTime) : self
    {
        $this->untilTime = $untilTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatName() : string
    {
        return $this->statName;
    }
    /**
     * 
     *
     * @param string $statName
     *
     * @return self
     */
    public function setStatName(string $statName) : self
    {
        $this->statName = $statName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getModTime() : int
    {
        return $this->modTime;
    }
    /**
     * 
     *
     * @param int $modTime
     *
     * @return self
     */
    public function setModTime(int $modTime) : self
    {
        $this->modTime = $modTime;
        return $this;
    }
}