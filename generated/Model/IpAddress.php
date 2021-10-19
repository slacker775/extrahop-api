<?php

namespace ExtraHop\Api\Model;

class IpAddress
{
    /**
     * 
     *
     * @var string
     */
    protected $ipaddr;
    /**
     * 
     *
     * @var int
     */
    protected $lastObservationTime;
    /**
     * 
     *
     * @return string
     */
    public function getIpaddr() : string
    {
        return $this->ipaddr;
    }
    /**
     * 
     *
     * @param string $ipaddr
     *
     * @return self
     */
    public function setIpaddr(string $ipaddr) : self
    {
        $this->ipaddr = $ipaddr;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastObservationTime() : int
    {
        return $this->lastObservationTime;
    }
    /**
     * 
     *
     * @param int $lastObservationTime
     *
     * @return self
     */
    public function setLastObservationTime(int $lastObservationTime) : self
    {
        $this->lastObservationTime = $lastObservationTime;
        return $this;
    }
}