<?php

namespace ExtraHop\Api\Model;

class DnsName
{
    /**
     * 
     *
     * @var string
     */
    protected $dnsName;
    /**
     * 
     *
     * @var string
     */
    protected $lastObservationTime;
    /**
     * 
     *
     * @return string
     */
    public function getDnsName() : string
    {
        return $this->dnsName;
    }
    /**
     * 
     *
     * @param string $dnsName
     *
     * @return self
     */
    public function setDnsName(string $dnsName) : self
    {
        $this->dnsName = $dnsName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastObservationTime() : string
    {
        return $this->lastObservationTime;
    }
    /**
     * 
     *
     * @param string $lastObservationTime
     *
     * @return self
     */
    public function setLastObservationTime(string $lastObservationTime) : self
    {
        $this->lastObservationTime = $lastObservationTime;
        return $this;
    }
}