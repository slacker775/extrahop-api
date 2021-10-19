<?php

namespace ExtraHop\Api\Model;

class MetricResponse
{
    /**
     * 
     *
     * @var MetricStats[]
     */
    protected $stats;
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
    protected $nodeId;
    /**
     * 
     *
     * @var int
     */
    protected $clock;
    /**
     * 
     *
     * @var int
     */
    protected $from;
    /**
     * 
     *
     * @var int
     */
    protected $until;
    /**
     * 
     *
     * @return MetricStats[]
     */
    public function getStats() : array
    {
        return $this->stats;
    }
    /**
     * 
     *
     * @param MetricStats[] $stats
     *
     * @return self
     */
    public function setStats(array $stats) : self
    {
        $this->stats = $stats;
        return $this;
    }
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
    public function getNodeId() : int
    {
        return $this->nodeId;
    }
    /**
     * 
     *
     * @param int $nodeId
     *
     * @return self
     */
    public function setNodeId(int $nodeId) : self
    {
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getClock() : int
    {
        return $this->clock;
    }
    /**
     * 
     *
     * @param int $clock
     *
     * @return self
     */
    public function setClock(int $clock) : self
    {
        $this->clock = $clock;
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