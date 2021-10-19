<?php

namespace ExtraHop\Api\Endpoint;

class DeleteTriggerDeviceGroup extends \ExtraHop\Api\Runtime\Client\BaseEndpoint implements \ExtraHop\Api\Runtime\Client\Endpoint
{
    protected $id;
    protected $child-id;
    /**
     * 
     *
     * @param int $id 
     * @param int $childId 
     */
    public function __construct(int $id, int $childId)
    {
        $this->id = $id;
        $this->child-id = $childId;
    }
    use \ExtraHop\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{child-id}'), array($this->id, $this->child-id), '/api/v1/triggers/{id}/devicegroups/{child-id}');
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