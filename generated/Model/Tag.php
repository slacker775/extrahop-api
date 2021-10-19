<?php

namespace ExtraHop\Api\Model;

class Tag
{
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $modTime;
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
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