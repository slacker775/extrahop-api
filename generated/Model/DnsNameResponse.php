<?php

namespace ExtraHop\Api\Model;

class DnsNameResponse
{
    /**
     * 
     *
     * @var string[]
     */
    protected $currentDnsNames;
    /**
     * 
     *
     * @var DnsName[]
     */
    protected $dnsNames;
    /**
     * 
     *
     * @return string[]
     */
    public function getCurrentDnsNames() : array
    {
        return $this->currentDnsNames;
    }
    /**
     * 
     *
     * @param string[] $currentDnsNames
     *
     * @return self
     */
    public function setCurrentDnsNames(array $currentDnsNames) : self
    {
        $this->currentDnsNames = $currentDnsNames;
        return $this;
    }
    /**
     * 
     *
     * @return DnsName[]
     */
    public function getDnsNames() : array
    {
        return $this->dnsNames;
    }
    /**
     * 
     *
     * @param DnsName[] $dnsNames
     *
     * @return self
     */
    public function setDnsNames(array $dnsNames) : self
    {
        $this->dnsNames = $dnsNames;
        return $this;
    }
}