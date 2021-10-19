<?php

namespace ExtraHop\Api\Model;

class ApplicationCriteria
{
    /**
     * 
     *
     * @var string
     */
    protected $protocolDefault;
    /**
     * 
     *
     * @var ApplicationSource[]
     */
    protected $sources;
    /**
     * 
     *
     * @var string[][]
     */
    protected $protocols;
    /**
     * 
     *
     * @return string
     */
    public function getProtocolDefault() : string
    {
        return $this->protocolDefault;
    }
    /**
     * 
     *
     * @param string $protocolDefault
     *
     * @return self
     */
    public function setProtocolDefault(string $protocolDefault) : self
    {
        $this->protocolDefault = $protocolDefault;
        return $this;
    }
    /**
     * 
     *
     * @return ApplicationSource[]
     */
    public function getSources() : array
    {
        return $this->sources;
    }
    /**
     * 
     *
     * @param ApplicationSource[] $sources
     *
     * @return self
     */
    public function setSources(array $sources) : self
    {
        $this->sources = $sources;
        return $this;
    }
    /**
     * 
     *
     * @return string[][]
     */
    public function getProtocols() : array
    {
        return $this->protocols;
    }
    /**
     * 
     *
     * @param string[][] $protocols
     *
     * @return self
     */
    public function setProtocols(array $protocols) : self
    {
        $this->protocols = $protocols;
        return $this;
    }
}