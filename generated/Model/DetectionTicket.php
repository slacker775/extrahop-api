<?php

namespace ExtraHop\Api\Model;

class DetectionTicket
{
    /**
     * 
     *
     * @var string
     */
    protected $ticketId;
    /**
     * 
     *
     * @var string|null
     */
    protected $assignee;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $resolution;
    /**
     * 
     *
     * @return string
     */
    public function getTicketId() : string
    {
        return $this->ticketId;
    }
    /**
     * 
     *
     * @param string $ticketId
     *
     * @return self
     */
    public function setTicketId(string $ticketId) : self
    {
        $this->ticketId = $ticketId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAssignee() : ?string
    {
        return $this->assignee;
    }
    /**
     * 
     *
     * @param string|null $assignee
     *
     * @return self
     */
    public function setAssignee(?string $assignee) : self
    {
        $this->assignee = $assignee;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResolution() : string
    {
        return $this->resolution;
    }
    /**
     * 
     *
     * @param string $resolution
     *
     * @return self
     */
    public function setResolution(string $resolution) : self
    {
        $this->resolution = $resolution;
        return $this;
    }
}