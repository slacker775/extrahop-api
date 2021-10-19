<?php

namespace ExtraHop\Api\Model;

class DetectionSearchFilter
{
    /**
     * 
     *
     * @var string|null
     */
    protected $category;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $assignee;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $ticketId;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $status;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $resolution;
    /**
     * 
     *
     * @return string|null
     */
    public function getCategory() : ?string
    {
        return $this->category;
    }
    /**
     * 
     *
     * @param string|null $category
     *
     * @return self
     */
    public function setCategory(?string $category) : self
    {
        $this->category = $category;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getAssignee() : ?array
    {
        return $this->assignee;
    }
    /**
     * 
     *
     * @param string[]|null $assignee
     *
     * @return self
     */
    public function setAssignee(?array $assignee) : self
    {
        $this->assignee = $assignee;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getTicketId() : ?array
    {
        return $this->ticketId;
    }
    /**
     * 
     *
     * @param string[]|null $ticketId
     *
     * @return self
     */
    public function setTicketId(?array $ticketId) : self
    {
        $this->ticketId = $ticketId;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getStatus() : ?array
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string[]|null $status
     *
     * @return self
     */
    public function setStatus(?array $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getResolution() : ?array
    {
        return $this->resolution;
    }
    /**
     * 
     *
     * @param string[]|null $resolution
     *
     * @return self
     */
    public function setResolution(?array $resolution) : self
    {
        $this->resolution = $resolution;
        return $this;
    }
}