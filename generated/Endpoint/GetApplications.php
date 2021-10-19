<?php

namespace ExtraHop\Api\Endpoint;

class GetApplications extends \ExtraHop\Api\Runtime\Client\BaseEndpoint implements \ExtraHop\Api\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $active_from 
     *     @var int $active_until 
     *     @var int $limit 
     *     @var int $offset 
     *     @var string $search_type 
     *     @var string $value 
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \ExtraHop\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/api/v1/applications';
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
        $optionsResolver->setDefined(array('active_from', 'active_until', 'limit', 'offset', 'search_type', 'value'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('active_from', array('int'));
        $optionsResolver->setAllowedTypes('active_until', array('int'));
        $optionsResolver->setAllowedTypes('limit', array('int'));
        $optionsResolver->setAllowedTypes('offset', array('int'));
        $optionsResolver->setAllowedTypes('search_type', array('string'));
        $optionsResolver->setAllowedTypes('value', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\ExtraHop\Api\Model\Application[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ExtraHop\\Api\\Model\\Application[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('oauth');
    }
}