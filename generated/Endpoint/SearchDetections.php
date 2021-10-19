<?php

namespace ExtraHop\Api\Endpoint;

class SearchDetections extends \ExtraHop\Api\Runtime\Client\BaseEndpoint implements \ExtraHop\Api\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param null|\ExtraHop\Api\Model\DetectionSearch $requestBody 
     */
    public function __construct(?\ExtraHop\Api\Model\DetectionSearch $requestBody = null)
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
        return '/ap1/v1/detections/search';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ExtraHop\Api\Model\DetectionSearch) {
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
     * @return null|\ExtraHop\Api\Model\Detection[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ExtraHop\\Api\\Model\\Detection[]', 'json');
        }
        if (404 === $status) {
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth');
    }
}