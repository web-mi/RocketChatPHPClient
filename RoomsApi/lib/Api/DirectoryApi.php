<?php
/**
 * DirectoryApi
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\RoomsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Rooms
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

namespace WebMI\RocketChatApiClient\RoomsApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use WebMI\RocketChatApiClient\RoomsApi\ApiException;
use WebMI\RocketChatApiClient\RoomsApi\Configuration;
use WebMI\RocketChatApiClient\RoomsApi\HeaderSelector;
use WebMI\RocketChatApiClient\RoomsApi\ObjectSerializer;

/**
 * DirectoryApi Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\RoomsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DirectoryApi
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
        'getApiV1Directory' => [
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
     * Operation getApiV1Directory
     *
     * Directory
     *
     * @param  string $x_auth_token The &#x60;authToken&#x60; of the authenticated user. (required)
     * @param  string $x_user_id The &#x60;userId&#x60; of the authenticated user. (required)
     * @param  mixed $query The query to search the workspace directory. When &#x60;type&#x60; is users you can send an additional workspace field, that can be local (default) or all. Workspace&#x3D;all will work only if &lt;a href&#x3D;\&quot;https://docs.rocket.chat/use-rocket.chat/rocket.chat-federation\&quot; target&#x3D;\&quot;_blank\&quot;&gt;federation&lt;/a&gt; is enabled. (required)
     * @param  int $offset Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. (optional)
     * @param  int $count The number of items to return. (optional)
     * @param  mixed $sort List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} (optional)
     * @param  string $fields This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;{ \&quot;username\&quot;: 1 } (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApiV1Directory'] to see the possible values for this operation
     *
     * @throws \WebMI\RocketChatApiClient\RoomsApi\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1Directory200Response|\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsCreate401Response
     */
    public function getApiV1Directory($x_auth_token, $x_user_id, $query, $offset = null, $count = null, $sort = null, $fields = null, string $contentType = self::contentTypes['getApiV1Directory'][0])
    {
        list($response) = $this->getApiV1DirectoryWithHttpInfo($x_auth_token, $x_user_id, $query, $offset, $count, $sort, $fields, $contentType);
        return $response;
    }

    /**
     * Operation getApiV1DirectoryWithHttpInfo
     *
     * Directory
     *
     * @param  string $x_auth_token The &#x60;authToken&#x60; of the authenticated user. (required)
     * @param  string $x_user_id The &#x60;userId&#x60; of the authenticated user. (required)
     * @param  mixed $query The query to search the workspace directory. When &#x60;type&#x60; is users you can send an additional workspace field, that can be local (default) or all. Workspace&#x3D;all will work only if &lt;a href&#x3D;\&quot;https://docs.rocket.chat/use-rocket.chat/rocket.chat-federation\&quot; target&#x3D;\&quot;_blank\&quot;&gt;federation&lt;/a&gt; is enabled. (required)
     * @param  int $offset Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. (optional)
     * @param  int $count The number of items to return. (optional)
     * @param  mixed $sort List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} (optional)
     * @param  string $fields This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;{ \&quot;username\&quot;: 1 } (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApiV1Directory'] to see the possible values for this operation
     *
     * @throws \WebMI\RocketChatApiClient\RoomsApi\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1Directory200Response|\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsCreate401Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getApiV1DirectoryWithHttpInfo($x_auth_token, $x_user_id, $query, $offset = null, $count = null, $sort = null, $fields = null, string $contentType = self::contentTypes['getApiV1Directory'][0])
    {
        $request = $this->getApiV1DirectoryRequest($x_auth_token, $x_user_id, $query, $offset, $count, $sort, $fields, $contentType);

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
                    if ('\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1Directory200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1Directory200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1Directory200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsCreate401Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsCreate401Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsCreate401Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1Directory200Response';
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
                        '\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1Directory200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsCreate401Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getApiV1DirectoryAsync
     *
     * Directory
     *
     * @param  string $x_auth_token The &#x60;authToken&#x60; of the authenticated user. (required)
     * @param  string $x_user_id The &#x60;userId&#x60; of the authenticated user. (required)
     * @param  mixed $query The query to search the workspace directory. When &#x60;type&#x60; is users you can send an additional workspace field, that can be local (default) or all. Workspace&#x3D;all will work only if &lt;a href&#x3D;\&quot;https://docs.rocket.chat/use-rocket.chat/rocket.chat-federation\&quot; target&#x3D;\&quot;_blank\&quot;&gt;federation&lt;/a&gt; is enabled. (required)
     * @param  int $offset Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. (optional)
     * @param  int $count The number of items to return. (optional)
     * @param  mixed $sort List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} (optional)
     * @param  string $fields This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;{ \&quot;username\&quot;: 1 } (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApiV1Directory'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getApiV1DirectoryAsync($x_auth_token, $x_user_id, $query, $offset = null, $count = null, $sort = null, $fields = null, string $contentType = self::contentTypes['getApiV1Directory'][0])
    {
        return $this->getApiV1DirectoryAsyncWithHttpInfo($x_auth_token, $x_user_id, $query, $offset, $count, $sort, $fields, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getApiV1DirectoryAsyncWithHttpInfo
     *
     * Directory
     *
     * @param  string $x_auth_token The &#x60;authToken&#x60; of the authenticated user. (required)
     * @param  string $x_user_id The &#x60;userId&#x60; of the authenticated user. (required)
     * @param  mixed $query The query to search the workspace directory. When &#x60;type&#x60; is users you can send an additional workspace field, that can be local (default) or all. Workspace&#x3D;all will work only if &lt;a href&#x3D;\&quot;https://docs.rocket.chat/use-rocket.chat/rocket.chat-federation\&quot; target&#x3D;\&quot;_blank\&quot;&gt;federation&lt;/a&gt; is enabled. (required)
     * @param  int $offset Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. (optional)
     * @param  int $count The number of items to return. (optional)
     * @param  mixed $sort List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} (optional)
     * @param  string $fields This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;{ \&quot;username\&quot;: 1 } (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApiV1Directory'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getApiV1DirectoryAsyncWithHttpInfo($x_auth_token, $x_user_id, $query, $offset = null, $count = null, $sort = null, $fields = null, string $contentType = self::contentTypes['getApiV1Directory'][0])
    {
        $returnType = '\WebMI\RocketChatApiClient\RoomsApi\Model\GetApiV1Directory200Response';
        $request = $this->getApiV1DirectoryRequest($x_auth_token, $x_user_id, $query, $offset, $count, $sort, $fields, $contentType);

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
     * Create request for operation 'getApiV1Directory'
     *
     * @param  string $x_auth_token The &#x60;authToken&#x60; of the authenticated user. (required)
     * @param  string $x_user_id The &#x60;userId&#x60; of the authenticated user. (required)
     * @param  mixed $query The query to search the workspace directory. When &#x60;type&#x60; is users you can send an additional workspace field, that can be local (default) or all. Workspace&#x3D;all will work only if &lt;a href&#x3D;\&quot;https://docs.rocket.chat/use-rocket.chat/rocket.chat-federation\&quot; target&#x3D;\&quot;_blank\&quot;&gt;federation&lt;/a&gt; is enabled. (required)
     * @param  int $offset Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. (optional)
     * @param  int $count The number of items to return. (optional)
     * @param  mixed $sort List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} (optional)
     * @param  string $fields This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;{ \&quot;username\&quot;: 1 } (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getApiV1Directory'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getApiV1DirectoryRequest($x_auth_token, $x_user_id, $query, $offset = null, $count = null, $sort = null, $fields = null, string $contentType = self::contentTypes['getApiV1Directory'][0])
    {

        // verify the required parameter 'x_auth_token' is set
        if ($x_auth_token === null || (is_array($x_auth_token) && count($x_auth_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_auth_token when calling getApiV1Directory'
            );
        }

        // verify the required parameter 'x_user_id' is set
        if ($x_user_id === null || (is_array($x_user_id) && count($x_user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_user_id when calling getApiV1Directory'
            );
        }

        // verify the required parameter 'query' is set
        if ($query === null || (is_array($query) && count($query) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $query when calling getApiV1Directory'
            );
        }






        $resourcePath = '/api/v1/directory';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $query,
            'query', // param base name
            'mixed', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $count,
            'count', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            'mixed', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $fields,
            'fields', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($x_auth_token !== null) {
            $headerParams['X-Auth-Token'] = ObjectSerializer::toHeaderValue($x_auth_token);
        }
        // header params
        if ($x_user_id !== null) {
            $headerParams['X-User-Id'] = ObjectSerializer::toHeaderValue($x_user_id);
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
