<?php

namespace ExtraHop\Api\Model;

class DetectionParticipant
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
     * @var string
     */
    protected $objectType;
    /**
     * 
     *
     * @var int
     */
    protected $objectId;
    /**
     * 
     *
     * @var string
     */
    protected $role;
    /**
     * 
     *
     * @var bool
     */
    protected $external;
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
     * @return string
     */
    public function getObjectType() : string
    {
        return $this->objectType;
    }
    /**
     * 
     *
     * @param string $objectType
     *
     * @return self
     */
    public function setObjectType(string $objectType) : self
    {
        $this->objectType = $objectType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getObjectId() : int
    {
        return $this->objectId;
    }
    /**
     * 
     *
     * @param int $objectId
     *
     * @return self
     */
    public function setObjectId(int $objectId) : self
    {
        $this->objectId = $objectId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRole() : string
    {
        return $this->role;
    }
    /**
     * 
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role) : self
    {
        $this->role = $role;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getExternal() : bool
    {
        return $this->external;
    }
    /**
     * 
     *
     * @param bool $external
     *
     * @return self
     */
    public function setExternal(bool $external) : self
    {
        $this->external = $external;
        return $this;
    }
}