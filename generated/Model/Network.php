<?php

namespace ExtraHop\Api\Model;

class Network
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
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $applianceUuid;
    /**
     * 
     *
     * @var bool
     */
    protected $idle;
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
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getApplianceUuid() : ?string
    {
        return $this->applianceUuid;
    }
    /**
     * 
     *
     * @param string|null $applianceUuid
     *
     * @return self
     */
    public function setApplianceUuid(?string $applianceUuid) : self
    {
        $this->applianceUuid = $applianceUuid;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIdle() : bool
    {
        return $this->idle;
    }
    /**
     * 
     *
     * @param bool $idle
     *
     * @return self
     */
    public function setIdle(bool $idle) : self
    {
        $this->idle = $idle;
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