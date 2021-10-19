<?php

namespace ExtraHop\Api\Model;

class ApiV1ObservationsAssociatedipaddrsPostBodyObservations
{
    /**
     * The device IP address observed by the ExtraHop system.
     *
     * @var string
     */
    protected $ipaddr;
    /**
     * The associated IP address.
     *
     * @var string
     */
    protected $associatedIpaddr;
    /**
     * The time that the observation was created by the source, expressed in milliseconds since the epoch.
     *
     * @var int
     */
    protected $timestamp;
    /**
     * The device IP address observed by the ExtraHop system.
     *
     * @return string
     */
    public function getIpaddr() : string
    {
        return $this->ipaddr;
    }
    /**
     * The device IP address observed by the ExtraHop system.
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
     * The associated IP address.
     *
     * @return string
     */
    public function getAssociatedIpaddr() : string
    {
        return $this->associatedIpaddr;
    }
    /**
     * The associated IP address.
     *
     * @param string $associatedIpaddr
     *
     * @return self
     */
    public function setAssociatedIpaddr(string $associatedIpaddr) : self
    {
        $this->associatedIpaddr = $associatedIpaddr;
        return $this;
    }
    /**
     * The time that the observation was created by the source, expressed in milliseconds since the epoch.
     *
     * @return int
     */
    public function getTimestamp() : int
    {
        return $this->timestamp;
    }
    /**
     * The time that the observation was created by the source, expressed in milliseconds since the epoch.
     *
     * @param int $timestamp
     *
     * @return self
     */
    public function setTimestamp(int $timestamp) : self
    {
        $this->timestamp = $timestamp;
        return $this;
    }
}