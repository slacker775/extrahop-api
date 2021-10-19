<?php

namespace ExtraHop\Api\Endpoint;

class AddTriggerDeviceGroup extends \ExtraHop\Api\Runtime\Client\BaseEndpoint implements \ExtraHop\Api\Runtime\Client\Endpoint
{
    protected $id;
    protected $child-id;
    /**
     * 
     *
     * @param int $id 
     * @param int $childId 
     * @param null|\ExtraHop\Api\Model\ApiV1TriggersIdDevicegroupsChildIdPostBody $requestBody 
     */
    public function __construct(int $id, int $childId, ?\ExtraHop\Api\Model\ApiV1TriggersIdDevicegroupsChildIdPostBody $requestBody = null)
    {
        $this->id = $id;
        $this->child-id = $childId;
        $this->body = $requestBody;
    }
    use \ExtraHop\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{child-id}'), array($this->id, $this->child-id), '/api/v1/triggers/{id}/devicegroups/{child-id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ExtraHop\Api\Model\ApiV1TriggersIdDevicegroupsChildIdPostBody) {
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