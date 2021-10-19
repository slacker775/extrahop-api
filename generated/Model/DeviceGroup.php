<?php

namespace ExtraHop\Api\Model;

class DeviceGroup
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
    protected $field;
    /**
     * 
     *
     * @var string|null
     */
    protected $value;
    /**
     * 
     *
     * @var string[]
     */
    protected $filter;
    /**
     * 
     *
     * @var bool
     */
    protected $builtIn;
    /**
     * 
     *
     * @var bool
     */
    protected $dynamic;
    /**
     * 
     *
     * @var bool
     */
    protected $includeCustomDevices;
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
    public function getField() : ?string
    {
        return $this->field;
    }
    /**
     * 
     *
     * @param string|null $field
     *
     * @return self
     */
    public function setField(?string $field) : self
    {
        $this->field = $field;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value) : self
    {
        $this->value = $value;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getFilter() : array
    {
        return $this->filter;
    }
    /**
     * 
     *
     * @param string[] $filter
     *
     * @return self
     */
    public function setFilter(array $filter) : self
    {
        $this->filter = $filter;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBuiltIn() : bool
    {
        return $this->builtIn;
    }
    /**
     * 
     *
     * @param bool $builtIn
     *
     * @return self
     */
    public function setBuiltIn(bool $builtIn) : self
    {
        $this->builtIn = $builtIn;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDynamic() : bool
    {
        return $this->dynamic;
    }
    /**
     * 
     *
     * @param bool $dynamic
     *
     * @return self
     */
    public function setDynamic(bool $dynamic) : self
    {
        $this->dynamic = $dynamic;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIncludeCustomDevices() : bool
    {
        return $this->includeCustomDevices;
    }
    /**
     * 
     *
     * @param bool $includeCustomDevices
     *
     * @return self
     */
    public function setIncludeCustomDevices(bool $includeCustomDevices) : self
    {
        $this->includeCustomDevices = $includeCustomDevices;
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