<?php

namespace ExtraHop\Api\Model;

class Vlan
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
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $vlanid;
    /**
     * 
     *
     * @var int|null
     */
    protected $networkId;
    /**
     * 
     *
     * @var int|null
     */
    protected $nodeId;
    /**
     * 
     *
     * @var int|null
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
     * @return int
     */
    public function getVlanid() : int
    {
        return $this->vlanid;
    }
    /**
     * 
     *
     * @param int $vlanid
     *
     * @return self
     */
    public function setVlanid(int $vlanid) : self
    {
        $this->vlanid = $vlanid;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNetworkId() : ?int
    {
        return $this->networkId;
    }
    /**
     * 
     *
     * @param int|null $networkId
     *
     * @return self
     */
    public function setNetworkId(?int $networkId) : self
    {
        $this->networkId = $networkId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNodeId() : ?int
    {
        return $this->nodeId;
    }
    /**
     * 
     *
     * @param int|null $nodeId
     *
     * @return self
     */
    public function setNodeId(?int $nodeId) : self
    {
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getModTime() : ?int
    {
        return $this->modTime;
    }
    /**
     * 
     *
     * @param int|null $modTime
     *
     * @return self
     */
    public function setModTime(?int $modTime) : self
    {
        $this->modTime = $modTime;
        return $this;
    }
}