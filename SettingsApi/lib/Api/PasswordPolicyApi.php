<?php
/**
 * PasswordPolicyApi
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\SettingsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Settings
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace WebMI\RocketChatApiClient\SettingsApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use WebMI\RocketChatApiClient\SettingsApi\ApiException;
use WebMI\RocketChatApiClient\SettingsApi\Configuration;
use WebMI\RocketChatApiClient\SettingsApi\HeaderSelector;
use WebMI\RocketChatApiClient\SettingsApi\ObjectSerializer;

/**
 * PasswordPolicyApi Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\SettingsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PasswordPolicyApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getPwGetPolicy' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getPwGetPolicy
     *
     * Get Password Policy
     *
     * @param  string $x_user_id The user ID. (required)
     * @param  string $x_auth_token The authentication token. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPwGetPolicy'] to see the possible values for this operation
     *
     * @throws \WebMI\RocketChatApiClient\SettingsApi\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return object
     */
    public function getPwGetPolicy($x_user_id, $x_auth_token, string $contentType = self::contentTypes['getPwGetPolicy'][0])
    {
        list($response) = $this->getPwGetPolicyWithHttpInfo($x_user_id, $x_auth_token, $contentType);
        return $response;
    }

    /**
     * Operation getPwGetPolicyWithHttpInfo
     *
     * Get Password Policy
     *
     * @param  string $x_user_id The user ID. (required)
     * @param  string $x_auth_token The authentication token. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPwGetPolicy'] to see the possible values for this operation
     *
     * @throws \WebMI\RocketChatApiClient\SettingsApi\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPwGetPolicyWithHttpInfo($x_user_id, $x_auth_token, string $contentType = self::contentTypes['getPwGetPolicy'][0])
    {
        $request = $this->getPwGetPolicyRequest($x_user_id, $x_auth_token, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('object' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPwGetPolicyAsync
     *
     * Get Password Policy
     *
     * @param  string $x_user_id The user ID. (required)
     * @param  string $x_auth_token The authentication token. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPwGetPolicy'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPwGetPolicyAsync($x_user_id, $x_auth_token, string $contentType = self::contentTypes['getPwGetPolicy'][0])
    {
        return $this->getPwGetPolicyAsyncWithHttpInfo($x_user_id, $x_auth_token, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPwGetPolicyAsyncWithHttpInfo
     *
     * Get Password Policy
     *
     * @param  string $x_user_id The user ID. (required)
     * @param  string $x_auth_token The authentication token. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPwGetPolicy'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPwGetPolicyAsyncWithHttpInfo($x_user_id, $x_auth_token, string $contentType = self::contentTypes['getPwGetPolicy'][0])
    {
        $returnType = 'object';
        $request = $this->getPwGetPolicyRequest($x_user_id, $x_auth_token, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getPwGetPolicy'
     *
     * @param  string $x_user_id The user ID. (required)
     * @param  string $x_auth_token The authentication token. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPwGetPolicy'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPwGetPolicyRequest($x_user_id, $x_auth_token, string $contentType = self::contentTypes['getPwGetPolicy'][0])
    {

        // verify the required parameter 'x_user_id' is set
        if ($x_user_id === null || (is_array($x_user_id) && count($x_user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_user_id when calling getPwGetPolicy'
            );
        }

        // verify the required parameter 'x_auth_token' is set
        if ($x_auth_token === null || (is_array($x_auth_token) && count($x_auth_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_auth_token when calling getPwGetPolicy'
            );
        }


        $resourcePath = '/api/v1/pw.getPolicy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_user_id !== null) {
            $headerParams['X-User-Id'] = ObjectSerializer::toHeaderValue($x_user_id);
        }
        // header params
        if ($x_auth_token !== null) {
            $headerParams['X-Auth-Token'] = ObjectSerializer::toHeaderValue($x_auth_token);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
