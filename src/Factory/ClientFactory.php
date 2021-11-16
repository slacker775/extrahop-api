<?php declare(strict_types=1);

namespace ExtraHop\Api\Factory;

use ExtraHop\Api\Authentication\OAuth2AuthenticationPlugin;
use ExtraHop\Api\Client;
use Http\Client\Common\Plugin;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\Formatter\FullHttpMessageFormatter;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;

class ClientFactory
{

    public static function create(string $baseUrl, string $clientId,
        string $clientSecret,
        ClientInterface $httpClient = null, array $additionalPlugins = []
    ): Client {
        $tokenAuth = self::createAuth(
            $baseUrl . '/oauth2/token', $clientId, $clientSecret
        );

        if ($httpClient === null) {
            $httpClient = Psr18ClientDiscovery::find();
        }
        $uri = Psr17FactoryDiscovery::findUriFactory()->createUri(
            $baseUrl
        );
        $plugins = [
            new AddHostPlugin($uri),
            new AuthenticationRegistry([$tokenAuth]),
        ];
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        $httpClient = new PluginClient($httpClient, $plugins);

        return Client::create($httpClient);
    }

    public static function createAuth(string $tokenEndpoint, string $clientId,
        string $clientSecret
    ): OAuth2AuthenticationPlugin {
        return new OAuth2AuthenticationPlugin([
            'clientId'                => $clientId,
            'clientSecret'            => $clientSecret,
            'urlAccessToken'          => $tokenEndpoint,
            'urlAuthorize'            => $tokenEndpoint,
            'urlResourceOwnerDetails' => $tokenEndpoint,
        ]);
    }

    public static function getDebugLogger(LoggerInterface $logger,
        int $maxBodyLength = 1000
    ): Plugin {
        return new Plugin\LoggerPlugin(
            $logger,
            new FullHttpMessageFormatter($maxBodyLength)
        );
    }

}