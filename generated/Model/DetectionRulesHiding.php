<?php

namespace ExtraHop\Api\Model;

class DetectionRulesHiding
{
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $author;
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
    protected $detectionType;
    /**
     * 
     *
     * @var int
     */
    protected $detectionsHidden;
    /**
     * 
     *
     * @var bool
     */
    protected $enabled;
    /**
     * 
     *
     * @var bool
     */
    protected $hidePastDetections;
    /**
     * 
     *
     * @var string[]
     */
    protected $offender;
    /**
     * 
     *
     * @var string[]
     */
    protected $victim;
    /**
     * 
     *
     * @var int|null
     */
    protected $expiration;
    /**
     * 
     *
     * @var int|null
     */
    protected $createTime;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAuthor() : ?string
    {
        return $this->author;
    }
    /**
     * 
     *
     * @param string|null $author
     *
     * @return self
     */
    public function setAuthor(?string $author) : self
    {
        $this->author = $author;
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
    public function getDetectionType() : ?string
    {
        return $this->detectionType;
    }
    /**
     * 
     *
     * @param string|null $detectionType
     *
     * @return self
     */
    public function setDetectionType(?string $detectionType) : self
    {
        $this->detectionType = $detectionType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDetectionsHidden() : int
    {
        return $this->detectionsHidden;
    }
    /**
     * 
     *
     * @param int $detectionsHidden
     *
     * @return self
     */
    public function setDetectionsHidden(int $detectionsHidden) : self
    {
        $this->detectionsHidden = $detectionsHidden;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * 
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHidePastDetections() : bool
    {
        return $this->hidePastDetections;
    }
    /**
     * 
     *
     * @param bool $hidePastDetections
     *
     * @return self
     */
    public function setHidePastDetections(bool $hidePastDetections) : self
    {
        $this->hidePastDetections = $hidePastDetections;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getOffender() : array
    {
        return $this->offender;
    }
    /**
     * 
     *
     * @param string[] $offender
     *
     * @return self
     */
    public function setOffender(array $offender) : self
    {
        $this->offender = $offender;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getVictim() : array
    {
        return $this->victim;
    }
    /**
     * 
     *
     * @param string[] $victim
     *
     * @return self
     */
    public function setVictim(array $victim) : self
    {
        $this->victim = $victim;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExpiration() : ?int
    {
        return $this->expiration;
    }
    /**
     * 
     *
     * @param int|null $expiration
     *
     * @return self
     */
    public function setExpiration(?int $expiration) : self
    {
        $this->expiration = $expiration;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCreateTime() : ?int
    {
        return $this->createTime;
    }
    /**
     * 
     *
     * @param int|null $createTime
     *
     * @return self
     */
    public function setCreateTime(?int $createTime) : self
    {
        $this->createTime = $createTime;
        return $this;
    }
}