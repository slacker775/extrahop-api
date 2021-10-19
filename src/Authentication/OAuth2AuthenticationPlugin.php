<?php declare(strict_types=1);

namespace ExtraHop\Api\Authentication;

use Jane\OpenApiRuntime\Client\AuthenticationPlugin;
use League\OAuth2\Client\OptionProvider\HttpBasicAuthOptionProvider;
use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Provider\GenericProvider;
use League\OAuth2\Client\Token\AccessTokenInterface;
use Psr\Http\Message\RequestInterface;

class OAuth2AuthenticationPlugin
    implements AuthenticationPlugin
{

    private ?AccessTokenInterface $accessToken;

    private AbstractProvider $provider;

    public function __construct(array $options = [])
    {
        $this->provider = new GenericProvider($options, [
            'optionProvider' => new HttpBasicAuthOptionProvider(),
        ]);
        $this->accessToken = null;
    }

    public function authentication(RequestInterface $request
    ): RequestInterface {
        if ($this->accessToken === null) {
            $this->accessToken = $this->provider->getAccessToken(
                'client_credentials'
            );
        } elseif ($this->accessToken->hasExpired() === true) {
            $this->accessToken = $this->provider->getAccessToken(
                'refresh_token',
                [
                    'refresh_token' => $this->accessToken->getRefreshToken(),
                ]
            );
        }
        return $request->withHeader(
            'Authorization', 'Bearer ' . (string)$this->accessToken
        );
    }

    public function getScope(): string
    {
        return 'oauth';
    }

}