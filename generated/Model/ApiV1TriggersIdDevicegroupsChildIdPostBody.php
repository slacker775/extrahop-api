<?php

namespace ExtraHop\Api\Model;

class ApiV1TriggersIdDevicegroupsChildIdPostBody
{
    /**
     * 
     *
     * @var string|null
     */
    protected $assign;
    /**
     * 
     *
     * @var string|null
     */
    protected $unassign;
    /**
     * 
     *
     * @return string|null
     */
    public function getAssign() : ?string
    {
        return $this->assign;
    }
    /**
     * 
     *
     * @param string|null $assign
     *
     * @return self
     */
    public function setAssign(?string $assign) : self
    {
        $this->assign = $assign;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUnassign() : ?string
    {
        return $this->unassign;
    }
    /**
     * 
     *
     * @param string|null $unassign
     *
     * @return self
     */
    public function setUnassign(?string $unassign) : self
    {
        $this->unassign = $unassign;
        return $this;
    }
}