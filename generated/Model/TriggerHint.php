<?php

namespace ExtraHop\Api\Model;

class TriggerHint
{
    /**
     * 
     *
     * @var int|null
     */
    protected $snaplen;
    /**
     * 
     *
     * @var int|null
     */
    protected $payloadBytes;
    /**
     * 
     *
     * @var int|null
     */
    protected $clipboardBytes;
    /**
     * 
     *
     * @var string|null
     */
    protected $cycle;
    /**
     * 
     *
     * @var string|null
     */
    protected $metricTypes;
    /**
     * 
     *
     * @var bool
     */
    protected $flowPayloadTurn;
    /**
     * 
     *
     * @var int|null
     */
    protected $flowClientPortMin;
    /**
     * 
     *
     * @var int|null
     */
    protected $flowClientPortMax;
    /**
     * 
     *
     * @var int|null
     */
    protected $flowClientBytes;
    /**
     * 
     *
     * @var string|null
     */
    protected $flowClientString;
    /**
     * 
     *
     * @var int|null
     */
    protected $flowServerPortMin;
    /**
     * 
     *
     * @var int|null
     */
    protected $flowServerPortMax;
    /**
     * 
     *
     * @var int|null
     */
    protected $flowServerBytes;
    /**
     * 
     *
     * @var string|null
     */
    protected $flowServerString;
    /**
     * 
     *
     * @var bool
     */
    protected $flowUdpAll;
    /**
     * 
     *
     * @var bool
     */
    protected $fireClassifyOnExpiration;
    /**
     * 
     *
     * @return int|null
     */
    public function getSnaplen() : ?int
    {
        return $this->snaplen;
    }
    /**
     * 
     *
     * @param int|null $snaplen
     *
     * @return self
     */
    public function setSnaplen(?int $snaplen) : self
    {
        $this->snaplen = $snaplen;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPayloadBytes() : ?int
    {
        return $this->payloadBytes;
    }
    /**
     * 
     *
     * @param int|null $payloadBytes
     *
     * @return self
     */
    public function setPayloadBytes(?int $payloadBytes) : self
    {
        $this->payloadBytes = $payloadBytes;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getClipboardBytes() : ?int
    {
        return $this->clipboardBytes;
    }
    /**
     * 
     *
     * @param int|null $clipboardBytes
     *
     * @return self
     */
    public function setClipboardBytes(?int $clipboardBytes) : self
    {
        $this->clipboardBytes = $clipboardBytes;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCycle() : ?string
    {
        return $this->cycle;
    }
    /**
     * 
     *
     * @param string|null $cycle
     *
     * @return self
     */
    public function setCycle(?string $cycle) : self
    {
        $this->cycle = $cycle;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMetricTypes() : ?string
    {
        return $this->metricTypes;
    }
    /**
     * 
     *
     * @param string|null $metricTypes
     *
     * @return self
     */
    public function setMetricTypes(?string $metricTypes) : self
    {
        $this->metricTypes = $metricTypes;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFlowPayloadTurn() : bool
    {
        return $this->flowPayloadTurn;
    }
    /**
     * 
     *
     * @param bool $flowPayloadTurn
     *
     * @return self
     */
    public function setFlowPayloadTurn(bool $flowPayloadTurn) : self
    {
        $this->flowPayloadTurn = $flowPayloadTurn;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFlowClientPortMin() : ?int
    {
        return $this->flowClientPortMin;
    }
    /**
     * 
     *
     * @param int|null $flowClientPortMin
     *
     * @return self
     */
    public function setFlowClientPortMin(?int $flowClientPortMin) : self
    {
        $this->flowClientPortMin = $flowClientPortMin;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFlowClientPortMax() : ?int
    {
        return $this->flowClientPortMax;
    }
    /**
     * 
     *
     * @param int|null $flowClientPortMax
     *
     * @return self
     */
    public function setFlowClientPortMax(?int $flowClientPortMax) : self
    {
        $this->flowClientPortMax = $flowClientPortMax;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFlowClientBytes() : ?int
    {
        return $this->flowClientBytes;
    }
    /**
     * 
     *
     * @param int|null $flowClientBytes
     *
     * @return self
     */
    public function setFlowClientBytes(?int $flowClientBytes) : self
    {
        $this->flowClientBytes = $flowClientBytes;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFlowClientString() : ?string
    {
        return $this->flowClientString;
    }
    /**
     * 
     *
     * @param string|null $flowClientString
     *
     * @return self
     */
    public function setFlowClientString(?string $flowClientString) : self
    {
        $this->flowClientString = $flowClientString;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFlowServerPortMin() : ?int
    {
        return $this->flowServerPortMin;
    }
    /**
     * 
     *
     * @param int|null $flowServerPortMin
     *
     * @return self
     */
    public function setFlowServerPortMin(?int $flowServerPortMin) : self
    {
        $this->flowServerPortMin = $flowServerPortMin;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFlowServerPortMax() : ?int
    {
        return $this->flowServerPortMax;
    }
    /**
     * 
     *
     * @param int|null $flowServerPortMax
     *
     * @return self
     */
    public function setFlowServerPortMax(?int $flowServerPortMax) : self
    {
        $this->flowServerPortMax = $flowServerPortMax;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFlowServerBytes() : ?int
    {
        return $this->flowServerBytes;
    }
    /**
     * 
     *
     * @param int|null $flowServerBytes
     *
     * @return self
     */
    public function setFlowServerBytes(?int $flowServerBytes) : self
    {
        $this->flowServerBytes = $flowServerBytes;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFlowServerString() : ?string
    {
        return $this->flowServerString;
    }
    /**
     * 
     *
     * @param string|null $flowServerString
     *
     * @return self
     */
    public function setFlowServerString(?string $flowServerString) : self
    {
        $this->flowServerString = $flowServerString;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFlowUdpAll() : bool
    {
        return $this->flowUdpAll;
    }
    /**
     * 
     *
     * @param bool $flowUdpAll
     *
     * @return self
     */
    public function setFlowUdpAll(bool $flowUdpAll) : self
    {
        $this->flowUdpAll = $flowUdpAll;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFireClassifyOnExpiration() : bool
    {
        return $this->fireClassifyOnExpiration;
    }
    /**
     * 
     *
     * @param bool $fireClassifyOnExpiration
     *
     * @return self
     */
    public function setFireClassifyOnExpiration(bool $fireClassifyOnExpiration) : self
    {
        $this->fireClassifyOnExpiration = $fireClassifyOnExpiration;
        return $this;
    }
}