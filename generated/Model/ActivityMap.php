<?php

namespace ExtraHop\Api\Model;

class ActivityMap
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
    protected $mode;
    /**
     * 
     *
     * @var string|null
     */
    protected $owner;
    /**
     * 
     *
     * @var string[]
     */
    protected $rights;
    /**
     * 
     *
     * @var string|null
     */
    protected $shortCode;
    /**
     * 
     *
     * @var bool
     */
    protected $showAlertStatus;
    /**
     * 
     *
     * @var string[]
     */
    protected $walks;
    /**
     * 
     *
     * @var string|null
     */
    protected $weighting;
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
    public function getMode() : ?string
    {
        return $this->mode;
    }
    /**
     * 
     *
     * @param string|null $mode
     *
     * @return self
     */
    public function setMode(?string $mode) : self
    {
        $this->mode = $mode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOwner() : ?string
    {
        return $this->owner;
    }
    /**
     * 
     *
     * @param string|null $owner
     *
     * @return self
     */
    public function setOwner(?string $owner) : self
    {
        $this->owner = $owner;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getRights() : array
    {
        return $this->rights;
    }
    /**
     * 
     *
     * @param string[] $rights
     *
     * @return self
     */
    public function setRights(array $rights) : self
    {
        $this->rights = $rights;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShortCode() : ?string
    {
        return $this->shortCode;
    }
    /**
     * 
     *
     * @param string|null $shortCode
     *
     * @return self
     */
    public function setShortCode(?string $shortCode) : self
    {
        $this->shortCode = $shortCode;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getShowAlertStatus() : bool
    {
        return $this->showAlertStatus;
    }
    /**
     * 
     *
     * @param bool $showAlertStatus
     *
     * @return self
     */
    public function setShowAlertStatus(bool $showAlertStatus) : self
    {
        $this->showAlertStatus = $showAlertStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getWalks() : array
    {
        return $this->walks;
    }
    /**
     * 
     *
     * @param string[] $walks
     *
     * @return self
     */
    public function setWalks(array $walks) : self
    {
        $this->walks = $walks;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWeighting() : ?string
    {
        return $this->weighting;
    }
    /**
     * 
     *
     * @param string|null $weighting
     *
     * @return self
     */
    public function setWeighting(?string $weighting) : self
    {
        $this->weighting = $weighting;
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