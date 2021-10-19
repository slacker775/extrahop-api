<?php

namespace ExtraHop\Api\Model;

class Error
{
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string|null
     */
    protected $detail;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDetail() : ?string
    {
        return $this->detail;
    }
    /**
     * 
     *
     * @param string|null $detail
     *
     * @return self
     */
    public function setDetail(?string $detail) : self
    {
        $this->detail = $detail;
        return $this;
    }
}