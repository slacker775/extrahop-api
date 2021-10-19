<?php

namespace ExtraHop\Api\Model;

class DetectionFormat
{
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
    protected $displayName;
    /**
     * 
     *
     * @var bool
     */
    protected $isUserCreated;
    /**
     * 
     *
     * @var string[]
     */
    protected $mitreCategories;
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
    protected $type;
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
    public function getDisplayName() : ?string
    {
        return $this->displayName;
    }
    /**
     * 
     *
     * @param string|null $displayName
     *
     * @return self
     */
    public function setDisplayName(?string $displayName) : self
    {
        $this->displayName = $displayName;
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
     * @return string[]
     */
    public function getMitreCategories() : array
    {
        return $this->mitreCategories;
    }
    /**
     * 
     *
     * @param string[] $mitreCategories
     *
     * @return self
     */
    public function setMitreCategories(array $mitreCategories) : self
    {
        $this->mitreCategories = $mitreCategories;
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
}