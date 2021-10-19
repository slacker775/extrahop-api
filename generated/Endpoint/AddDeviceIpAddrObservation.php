<?php

namespace ExtraHop\Api\Endpoint;

class AddDeviceIpAddrObservation extends \ExtraHop\Api\Runtime\Client\BaseEndpoint implements \ExtraHop\Api\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param null|\ExtraHop\Api\Model\ApiV1ObservationsAssociatedipaddrsPostBody $requestBody 
     */
    public function __construct(?\ExtraHop\Api\Model\ApiV1ObservationsAssociatedipaddrsPostBody $requestBody = null)
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
        return '/api/v1/observations/associatedipaddrs';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ExtraHop\Api\Model\ApiV1ObservationsAssociatedipaddrsPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth');
    }
}