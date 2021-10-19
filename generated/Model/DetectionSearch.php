<?php

namespace ExtraHop\Api\Model;

class DetectionSearch
{
    /**
     * 
     *
     * @var DetectionSearchFilter
     */
    protected $filter;
    /**
     * 
     *
     * @var int|null
     */
    protected $from;
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
     * @var DetectionSearchSort
     */
    protected $sort;
    /**
     * 
     *
     * @var int|null
     */
    protected $until;
    /**
     * 
     *
     * @var int|null
     */
    protected $updateTime;
    /**
     * 
     *
     * @return DetectionSearchFilter
     */
    public function getFilter() : DetectionSearchFilter
    {
        return $this->filter;
    }
    /**
     * 
     *
     * @param DetectionSearchFilter $filter
     *
     * @return self
     */
    public function setFilter(DetectionSearchFilter $filter) : self
    {
        $this->filter = $filter;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFrom() : ?int
    {
        return $this->from;
    }
    /**
     * 
     *
     * @param int|null $from
     *
     * @return self
     */
    public function setFrom(?int $from) : self
    {
        $this->from = $from;
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
     * @return DetectionSearchSort
     */
    public function getSort() : DetectionSearchSort
    {
        return $this->sort;
    }
    /**
     * 
     *
     * @param DetectionSearchSort $sort
     *
     * @return self
     */
    public function setSort(DetectionSearchSort $sort) : self
    {
        $this->sort = $sort;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUntil() : ?int
    {
        return $this->until;
    }
    /**
     * 
     *
     * @param int|null $until
     *
     * @return self
     */
    public function setUntil(?int $until) : self
    {
        $this->until = $until;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUpdateTime() : ?int
    {
        return $this->updateTime;
    }
    /**
     * 
     *
     * @param int|null $updateTime
     *
     * @return self
     */
    public function setUpdateTime(?int $updateTime) : self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
}