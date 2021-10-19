<?php

namespace ExtraHop\Api\Model;

class Detection
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
     * @var int
     */
    protected $applianceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $assignee;
    /**
     * 
     *
     * @var string[]
     */
    protected $categories;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var int
     */
    protected $endTime;
    /**
     * 
     *
     * @var bool
     */
    protected $isUserCreated;
    /**
     * 
     *
     * @var DetectionMitreTactic[]
     */
    protected $mitreTactics;
    /**
     * 
     *
     * @var DetectionMitreTechnique[]
     */
    protected $mitreTechniques;
    /**
     * 
     *
     * @var DetectionParticipant[]
     */
    protected $participants;
    /**
     * 
     *
     * @var string[]
     */
    protected $properties;
    /**
     * 
     *
     * @var string|null
     */
    protected $resolution;
    /**
     * 
     *
     * @var int
     */
    protected $riskScore;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var string|null
     */
    protected $ticketId;
    /**
     * 
     *
     * @var string|null
     */
    protected $ticketUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @var int|null
     */
    protected $startTime;
    /**
     * 
     *
     * @var int|null
     */
    protected $updateTime;
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
     * @return int
     */
    public function getApplianceId() : int
    {
        return $this->applianceId;
    }
    /**
     * 
     *
     * @param int $applianceId
     *
     * @return self
     */
    public function setApplianceId(int $applianceId) : self
    {
        $this->applianceId = $applianceId;
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
     * @return string[]
     */
    public function getCategories() : array
    {
        return $this->categories;
    }
    /**
     * 
     *
     * @param string[] $categories
     *
     * @return self
     */
    public function setCategories(array $categories) : self
    {
        $this->categories = $categories;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getEndTime() : int
    {
        return $this->endTime;
    }
    /**
     * 
     *
     * @param int $endTime
     *
     * @return self
     */
    public function setEndTime(int $endTime) : self
    {
        $this->endTime = $endTime;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsUserCreated() : bool
    {
        return $this->isUserCreated;
    }
    /**
     * 
     *
     * @param bool $isUserCreated
     *
     * @return self
     */
    public function setIsUserCreated(bool $isUserCreated) : self
    {
        $this->isUserCreated = $isUserCreated;
        return $this;
    }
    /**
     * 
     *
     * @return DetectionMitreTactic[]
     */
    public function getMitreTactics() : array
    {
        return $this->mitreTactics;
    }
    /**
     * 
     *
     * @param DetectionMitreTactic[] $mitreTactics
     *
     * @return self
     */
    public function setMitreTactics(array $mitreTactics) : self
    {
        $this->mitreTactics = $mitreTactics;
        return $this;
    }
    /**
     * 
     *
     * @return DetectionMitreTechnique[]
     */
    public function getMitreTechniques() : array
    {
        return $this->mitreTechniques;
    }
    /**
     * 
     *
     * @param DetectionMitreTechnique[] $mitreTechniques
     *
     * @return self
     */
    public function setMitreTechniques(array $mitreTechniques) : self
    {
        $this->mitreTechniques = $mitreTechniques;
        return $this;
    }
    /**
     * 
     *
     * @return DetectionParticipant[]
     */
    public function getParticipants() : array
    {
        return $this->participants;
    }
    /**
     * 
     *
     * @param DetectionParticipant[] $participants
     *
     * @return self
     */
    public function setParticipants(array $participants) : self
    {
        $this->participants = $participants;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getProperties() : array
    {
        return $this->properties;
    }
    /**
     * 
     *
     * @param string[] $properties
     *
     * @return self
     */
    public function setProperties(array $properties) : self
    {
        $this->properties = $properties;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getResolution() : ?string
    {
        return $this->resolution;
    }
    /**
     * 
     *
     * @param string|null $resolution
     *
     * @return self
     */
    public function setResolution(?string $resolution) : self
    {
        $this->resolution = $resolution;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRiskScore() : int
    {
        return $this->riskScore;
    }
    /**
     * 
     *
     * @param int $riskScore
     *
     * @return self
     */
    public function setRiskScore(int $riskScore) : self
    {
        $this->riskScore = $riskScore;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTicketId() : ?string
    {
        return $this->ticketId;
    }
    /**
     * 
     *
     * @param string|null $ticketId
     *
     * @return self
     */
    public function setTicketId(?string $ticketId) : self
    {
        $this->ticketId = $ticketId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTicketUrl() : ?string
    {
        return $this->ticketUrl;
    }
    /**
     * 
     *
     * @param string|null $ticketUrl
     *
     * @return self
     */
    public function setTicketUrl(?string $ticketUrl) : self
    {
        $this->ticketUrl = $ticketUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStartTime() : ?int
    {
        return $this->startTime;
    }
    /**
     * 
     *
     * @param int|null $startTime
     *
     * @return self
     */
    public function setStartTime(?int $startTime) : self
    {
        $this->startTime = $startTime;
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