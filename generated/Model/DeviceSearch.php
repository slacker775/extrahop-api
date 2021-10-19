<?php

namespace ExtraHop\Api\Model;

class DeviceSearch
{
    /**
     * 
     *
     * @var int|null
     */
    protected $activeFrom;
    /**
     * 
     *
     * @var int|null
     */
    protected $activeUntil;
    /**
     * 
     *
     * @var int|null
     */
    protected $limit;
    /**
     * 
     *
     * @var int|null
     */
    protected $offset;
    /**
     * 
     *
     * @var DeviceSearchFilter
     */
    protected $filter;
    /**
     * 
     *
     * @return int|null
     */
    public function getActiveFrom() : ?int
    {
        return $this->activeFrom;
    }
    /**
     * 
     *
     * @param int|null $activeFrom
     *
     * @return self
     */
    public function setActiveFrom(?int $activeFrom) : self
    {
        $this->activeFrom = $activeFrom;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getActiveUntil() : ?int
    {
        return $this->activeUntil;
    }
    /**
     * 
     *
     * @param int|null $activeUntil
     *
     * @return self
     */
    public function setActiveUntil(?int $activeUntil) : self
    {
        $this->activeUntil = $activeUntil;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLimit() : ?int
    {
        return $this->limit;
    }
    /**
     * 
     *
     * @param int|null $limit
     *
     * @return self
     */
    public function setLimit(?int $limit) : self
    {
        $this->limit = $limit;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOffset() : ?int
    {
        return $this->offset;
    }
    /**
     * 
     *
     * @param int|null $offset
     *
     * @return self
     */
    public function setOffset(?int $offset) : self
    {
        $this->offset = $offset;
        return $this;
    }
    /**
     * 
     *
     * @return DeviceSearchFilter
     */
    public function getFilter() : DeviceSearchFilter
    {
        return $this->filter;
    }
    /**
     * 
     *
     * @param DeviceSearchFilter $filter
     *
     * @return self
     */
    public function setFilter(DeviceSearchFilter $filter) : self
    {
        $this->filter = $filter;
        return $this;
    }
}