<?php

namespace ExtraHop\Api\Model;

class Trigger
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
     * @var bool
     */
    protected $applyAll;
    /**
     * 
     *
     * @var string
     */
    protected $author;
    /**
     * 
     *
     * @var bool
     */
    protected $debug;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var bool
     */
    protected $disabled;
    /**
     * 
     *
     * @var string|null
     */
    protected $event;
    /**
     * 
     *
     * @var string[]
     */
    protected $events;
    /**
     * 
     *
     * @var TriggerHint[]
     */
    protected $hints;
    /**
     * 
     *
     * @var int|null
     */
    protected $modTime;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $script;
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
     * @return bool
     */
    public function getApplyAll() : bool
    {
        return $this->applyAll;
    }
    /**
     * 
     *
     * @param bool $applyAll
     *
     * @return self
     */
    public function setApplyAll(bool $applyAll) : self
    {
        $this->applyAll = $applyAll;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthor() : string
    {
        return $this->author;
    }
    /**
     * 
     *
     * @param string $author
     *
     * @return self
     */
    public function setAuthor(string $author) : self
    {
        $this->author = $author;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDebug() : bool
    {
        return $this->debug;
    }
    /**
     * 
     *
     * @param bool $debug
     *
     * @return self
     */
    public function setDebug(bool $debug) : self
    {
        $this->debug = $debug;
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
     * @return bool
     */
    public function getDisabled() : bool
    {
        return $this->disabled;
    }
    /**
     * 
     *
     * @param bool $disabled
     *
     * @return self
     */
    public function setDisabled(bool $disabled) : self
    {
        $this->disabled = $disabled;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEvent() : ?string
    {
        return $this->event;
    }
    /**
     * 
     *
     * @param string|null $event
     *
     * @return self
     */
    public function setEvent(?string $event) : self
    {
        $this->event = $event;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getEvents() : array
    {
        return $this->events;
    }
    /**
     * 
     *
     * @param string[] $events
     *
     * @return self
     */
    public function setEvents(array $events) : self
    {
        $this->events = $events;
        return $this;
    }
    /**
     * 
     *
     * @return TriggerHint[]
     */
    public function getHints() : array
    {
        return $this->hints;
    }
    /**
     * 
     *
     * @param TriggerHint[] $hints
     *
     * @return self
     */
    public function setHints(array $hints) : self
    {
        $this->hints = $hints;
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
     * @return string
     */
    public function getScript() : string
    {
        return $this->script;
    }
    /**
     * 
     *
     * @param string $script
     *
     * @return self
     */
    public function setScript(string $script) : self
    {
        $this->script = $script;
        return $this;
    }
}