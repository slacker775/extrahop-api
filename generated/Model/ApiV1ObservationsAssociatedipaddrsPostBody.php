<?php

namespace ExtraHop\Api\Model;

class ApiV1ObservationsAssociatedipaddrsPostBody
{
    /**
     * The source of the observations
     *
     * @var string
     */
    protected $source;
    /**
     * 
     *
     * @var ApiV1ObservationsAssociatedipaddrsPostBodyObservations
     */
    protected $observations;
    /**
     * The source of the observations
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * The source of the observations
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->source = $source;
        return $this;
    }
    /**
     * 
     *
     * @return ApiV1ObservationsAssociatedipaddrsPostBodyObservations
     */
    public function getObservations() : ApiV1ObservationsAssociatedipaddrsPostBodyObservations
    {
        return $this->observations;
    }
    /**
     * 
     *
     * @param ApiV1ObservationsAssociatedipaddrsPostBodyObservations $observations
     *
     * @return self
     */
    public function setObservations(ApiV1ObservationsAssociatedipaddrsPostBodyObservations $observations) : self
    {
        $this->observations = $observations;
        return $this;
    }
}