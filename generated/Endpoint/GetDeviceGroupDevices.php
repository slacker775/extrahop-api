<?php

namespace ExtraHop\Api\Endpoint;

class GetDeviceGroupDevices extends \ExtraHop\Api\Runtime\Client\BaseEndpoint implements \ExtraHop\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param int $id 
     * @param array $queryParameters {
     *     @var float $active_from 
     *     @var float $active_until 
     *     @var float $limit 
     *     @var float $offset 
     * }
     */
    public function __construct(int $id, array $queryParameters = array())
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \ExtraHop\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/api/v1/devicegroups/{id}/devices');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('active_from', 'active_until', 'limit', 'offset'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('active_from', array('float'));
        $optionsResolver->setAllowedTypes('active_until', array('float'));
        $optionsResolver->setAllowedTypes('limit', array('float'));
        $optionsResolver->setAllowedTypes('offset', array('float'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\ExtraHop\Api\Model\Device[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ExtraHop\\Api\\Model\\Device[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth');
    }
}