<?php

namespace ExtraHop\Api\Endpoint;

class GetMetricTotals extends \ExtraHop\Api\Runtime\Client\BaseEndpoint implements \ExtraHop\Api\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param null|\ExtraHop\Api\Model\MetricRequest $requestBody 
     */
    public function __construct(?\ExtraHop\Api\Model\MetricRequest $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \ExtraHop\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/api/v1/metrics/total';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ExtraHop\Api\Model\MetricRequest) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\ExtraHop\Api\Model\MetricResponse[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ExtraHop\\Api\\Model\\MetricResponse[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth');
    }
}