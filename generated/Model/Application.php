<?php

namespace ExtraHop\Api\Model;

class Application
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
     * @var ApplicationCriteria[]
     */
    protected $criteria;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $discoveryId;
    /**
     * 
     *
     * @var string
     */
    protected $displayName;
    /**
     * 
     *
     * @var string
     */
    protected $extrahopId;
    /**
     * 
     *
     * @var int
     */
    protected $modTime;
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
    protected $userModTime;
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
     * @return ApplicationCriteria[]
     */
    public function getCriteria() : array
    {
        return $this->criteria;
    }
    /**
     * 
     *
     * @param ApplicationCriteria[] $criteria
     *
     * @return self
     */
    public function setCriteria(array $criteria) : self
    {
        $this->criteria = $criteria;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDiscoveryId() : string
    {
        return $this->discoveryId;
    }
    /**
     * 
     *
     * @param string $discoveryId
     *
     * @return self
     */
    public function setDiscoveryId(string $discoveryId) : self
    {
        $this->discoveryId = $discoveryId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDisplayName() : string
    {
        return $this->displayName;
    }
    /**
     * 
     *
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName(string $displayName) : self
    {
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExtrahopId() : string
    {
        return $this->extrahopId;
    }
    /**
     * 
     *
     * @param string $extrahopId
     *
     * @return self
     */
    public function setExtrahopId(string $extrahopId) : self
    {
        $this->extrahopId = $extrahopId;
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
    public function getUserModTime() : int
    {
        return $this->userModTime;
    }
    /**
     * 
     *
     * @param int $userModTime
     *
     * @return self
     */
    public function setUserModTime(int $userModTime) : self
    {
        $this->userModTime = $userModTime;
        return $this;
    }
}