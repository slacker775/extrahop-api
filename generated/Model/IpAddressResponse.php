<?php

namespace ExtraHop\Api\Model;

class IpAddressResponse
{
    /**
     * 
     *
     * @var string[]
     */
    protected $associatedIpaddrs;
    /**
     * 
     *
     * @var string[]
     */
    protected $currentIpaddrs;
    /**
     * 
     *
     * @var IpAddress[]
     */
    protected $ipaddrs;
    /**
     * 
     *
     * @return string[]
     */
    public function getAssociatedIpaddrs() : array
    {
        return $this->associatedIpaddrs;
    }
    /**
     * 
     *
     * @param string[] $associatedIpaddrs
     *
     * @return self
     */
    public function setAssociatedIpaddrs(array $associatedIpaddrs) : self
    {
        $this->associatedIpaddrs = $associatedIpaddrs;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getCurrentIpaddrs() : array
    {
        return $this->currentIpaddrs;
    }
    /**
     * 
     *
     * @param string[] $currentIpaddrs
     *
     * @return self
     */
    public function setCurrentIpaddrs(array $currentIpaddrs) : self
    {
        $this->currentIpaddrs = $currentIpaddrs;
        return $this;
    }
    /**
     * 
     *
     * @return IpAddress[]
     */
    public function getIpaddrs() : array
    {
        return $this->ipaddrs;
    }
    /**
     * 
     *
     * @param IpAddress[] $ipaddrs
     *
     * @return self
     */
    public function setIpaddrs(array $ipaddrs) : self
    {
        $this->ipaddrs = $ipaddrs;
        return $this;
    }
}