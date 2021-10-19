<?php

namespace ExtraHop\Api\Endpoint;

class UnassignDeviceFromTag extends \ExtraHop\Api\Runtime\Client\BaseEndpoint implements \ExtraHop\Api\Runtime\Client\Endpoint
{
    protected $id;
    protected $deviceId;
    /**
     * 
     *
     * @param int $id 
     * @param int $deviceId 
     */
    public function __construct(int $id, int $deviceId)
    {
        $this->id = $id;
        $this->deviceId = $deviceId;
    }
    use \ExtraHop\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{deviceId}'), array($this->id, $this->deviceId), '/api/v1/tags/{id}/devices/{deviceId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
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