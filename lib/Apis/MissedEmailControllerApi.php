<?php
/**
 * MissedEmailControllerApi
 * PHP version 5
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MailSlurp API
 *
 * MailSlurp is an API for sending and receiving emails from dynamically allocated email addresses. It's designed for developers and QA teams to test applications, process inbound emails, send templated notifications, attachments, and more.  ## Resources  - [Homepage](https://www.mailslurp.com) - Get an [API KEY](https://app.mailslurp.com/sign-up/) - Generated [SDK Clients](https://www.mailslurp.com/docs/) - [Examples](https://github.com/mailslurp/examples) repository
 *
 * The version of the OpenAPI document: 6.5.2
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MailSlurp\Apis;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use MailSlurp\ApiException;
use MailSlurp\Configuration;
use MailSlurp\HeaderSelector;
use MailSlurp\ObjectSerializer;

/**
 * MissedEmailControllerApi Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MissedEmailControllerApi
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

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
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
     * Operation getAllMissedEmails
     *
     * Get all MissedEmails in paginated format
     *
     * @param  string $inbox_id Optional inbox ID filter (optional)
     * @param  int $page Optional page index in list pagination (optional, default to 0)
     * @param  string $search_filter Optional search filter (optional)
     * @param  int $size Optional page size in list pagination (optional, default to 20)
     * @param  string $sort Optional createdAt sort direction ASC or DESC (optional, default to 'ASC')
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MailSlurp\Models\PageMissedEmailProjection
     */
    public function getAllMissedEmails($inbox_id = null, $page = 0, $search_filter = null, $size = 20, $sort = 'ASC')
    {
        list($response) = $this->getAllMissedEmailsWithHttpInfo($inbox_id, $page, $search_filter, $size, $sort);
        return $response;
    }

    /**
     * Operation getAllMissedEmailsWithHttpInfo
     *
     * Get all MissedEmails in paginated format
     *
     * @param  string $inbox_id Optional inbox ID filter (optional)
     * @param  int $page Optional page index in list pagination (optional, default to 0)
     * @param  string $search_filter Optional search filter (optional)
     * @param  int $size Optional page size in list pagination (optional, default to 20)
     * @param  string $sort Optional createdAt sort direction ASC or DESC (optional, default to 'ASC')
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MailSlurp\Models\PageMissedEmailProjection, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllMissedEmailsWithHttpInfo($inbox_id = null, $page = 0, $search_filter = null, $size = 20, $sort = 'ASC')
    {
        $request = $this->getAllMissedEmailsRequest($inbox_id, $page, $search_filter, $size, $sort);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\MailSlurp\Models\PageMissedEmailProjection' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MailSlurp\Models\PageMissedEmailProjection', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MailSlurp\Models\PageMissedEmailProjection';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\MailSlurp\Models\PageMissedEmailProjection',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAllMissedEmailsAsync
     *
     * Get all MissedEmails in paginated format
     *
     * @param  string $inbox_id Optional inbox ID filter (optional)
     * @param  int $page Optional page index in list pagination (optional, default to 0)
     * @param  string $search_filter Optional search filter (optional)
     * @param  int $size Optional page size in list pagination (optional, default to 20)
     * @param  string $sort Optional createdAt sort direction ASC or DESC (optional, default to 'ASC')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllMissedEmailsAsync($inbox_id = null, $page = 0, $search_filter = null, $size = 20, $sort = 'ASC')
    {
        return $this->getAllMissedEmailsAsyncWithHttpInfo($inbox_id, $page, $search_filter, $size, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllMissedEmailsAsyncWithHttpInfo
     *
     * Get all MissedEmails in paginated format
     *
     * @param  string $inbox_id Optional inbox ID filter (optional)
     * @param  int $page Optional page index in list pagination (optional, default to 0)
     * @param  string $search_filter Optional search filter (optional)
     * @param  int $size Optional page size in list pagination (optional, default to 20)
     * @param  string $sort Optional createdAt sort direction ASC or DESC (optional, default to 'ASC')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllMissedEmailsAsyncWithHttpInfo($inbox_id = null, $page = 0, $search_filter = null, $size = 20, $sort = 'ASC')
    {
        $returnType = '\MailSlurp\Models\PageMissedEmailProjection';
        $request = $this->getAllMissedEmailsRequest($inbox_id, $page, $search_filter, $size, $sort);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAllMissedEmails'
     *
     * @param  string $inbox_id Optional inbox ID filter (optional)
     * @param  int $page Optional page index in list pagination (optional, default to 0)
     * @param  string $search_filter Optional search filter (optional)
     * @param  int $size Optional page size in list pagination (optional, default to 20)
     * @param  string $sort Optional createdAt sort direction ASC or DESC (optional, default to 'ASC')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAllMissedEmailsRequest($inbox_id = null, $page = 0, $search_filter = null, $size = 20, $sort = 'ASC')
    {

        $resourcePath = '/missed-emails';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($inbox_id)) {
            $inbox_id = ObjectSerializer::serializeCollection($inbox_id, '', true);
        }
        if ($inbox_id !== null) {
            $queryParams['inboxId'] = $inbox_id;
        }
        // query params
        if (is_array($page)) {
            $page = ObjectSerializer::serializeCollection($page, '', true);
        }
        if ($page !== null) {
            $queryParams['page'] = $page;
        }
        // query params
        if (is_array($search_filter)) {
            $search_filter = ObjectSerializer::serializeCollection($search_filter, '', true);
        }
        if ($search_filter !== null) {
            $queryParams['searchFilter'] = $search_filter;
        }
        // query params
        if (is_array($size)) {
            $size = ObjectSerializer::serializeCollection($size, '', true);
        }
        if ($size !== null) {
            $queryParams['size'] = $size;
        }
        // query params
        if (is_array($sort)) {
            $sort = ObjectSerializer::serializeCollection($sort, '', true);
        }
        if ($sort !== null) {
            $queryParams['sort'] = $sort;
        }



        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getMissedEmail
     *
     * Get MissedEmail
     *
     * @param  string $missed_email_id missedEmailId (required)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MailSlurp\Models\MissedEmail
     */
    public function getMissedEmail($missed_email_id)
    {
        list($response) = $this->getMissedEmailWithHttpInfo($missed_email_id);
        return $response;
    }

    /**
     * Operation getMissedEmailWithHttpInfo
     *
     * Get MissedEmail
     *
     * @param  string $missed_email_id missedEmailId (required)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MailSlurp\Models\MissedEmail, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMissedEmailWithHttpInfo($missed_email_id)
    {
        $request = $this->getMissedEmailRequest($missed_email_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\MailSlurp\Models\MissedEmail' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MailSlurp\Models\MissedEmail', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MailSlurp\Models\MissedEmail';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\MailSlurp\Models\MissedEmail',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getMissedEmailAsync
     *
     * Get MissedEmail
     *
     * @param  string $missed_email_id missedEmailId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMissedEmailAsync($missed_email_id)
    {
        return $this->getMissedEmailAsyncWithHttpInfo($missed_email_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMissedEmailAsyncWithHttpInfo
     *
     * Get MissedEmail
     *
     * @param  string $missed_email_id missedEmailId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMissedEmailAsyncWithHttpInfo($missed_email_id)
    {
        $returnType = '\MailSlurp\Models\MissedEmail';
        $request = $this->getMissedEmailRequest($missed_email_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getMissedEmail'
     *
     * @param  string $missed_email_id missedEmailId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMissedEmailRequest($missed_email_id)
    {
        // verify the required parameter 'missed_email_id' is set
        if ($missed_email_id === null || (is_array($missed_email_id) && count($missed_email_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $missed_email_id when calling getMissedEmail'
            );
        }

        $resourcePath = '/missed-emails/{missedEmailId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($missed_email_id !== null) {
            $resourcePath = str_replace(
                '{' . 'missedEmailId' . '}',
                ObjectSerializer::toPathValue($missed_email_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation waitForNthMissedEmail
     *
     * Wait for Nth missed email
     *
     * @param  string $inbox_id Optional inbox ID filter (required)
     * @param  int $timeout Optional timeout milliseconds (required)
     * @param  int $index Zero based index of the email to wait for. If 1 missed email already and you want to wait for the 2nd email pass index&#x3D;1 (optional)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MailSlurp\Models\MissedEmail
     */
    public function waitForNthMissedEmail($inbox_id, $timeout, $index = null)
    {
        list($response) = $this->waitForNthMissedEmailWithHttpInfo($inbox_id, $timeout, $index);
        return $response;
    }

    /**
     * Operation waitForNthMissedEmailWithHttpInfo
     *
     * Wait for Nth missed email
     *
     * @param  string $inbox_id Optional inbox ID filter (required)
     * @param  int $timeout Optional timeout milliseconds (required)
     * @param  int $index Zero based index of the email to wait for. If 1 missed email already and you want to wait for the 2nd email pass index&#x3D;1 (optional)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MailSlurp\Models\MissedEmail, HTTP status code, HTTP response headers (array of strings)
     */
    public function waitForNthMissedEmailWithHttpInfo($inbox_id, $timeout, $index = null)
    {
        $request = $this->waitForNthMissedEmailRequest($inbox_id, $timeout, $index);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\MailSlurp\Models\MissedEmail' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MailSlurp\Models\MissedEmail', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MailSlurp\Models\MissedEmail';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\MailSlurp\Models\MissedEmail',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation waitForNthMissedEmailAsync
     *
     * Wait for Nth missed email
     *
     * @param  string $inbox_id Optional inbox ID filter (required)
     * @param  int $timeout Optional timeout milliseconds (required)
     * @param  int $index Zero based index of the email to wait for. If 1 missed email already and you want to wait for the 2nd email pass index&#x3D;1 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function waitForNthMissedEmailAsync($inbox_id, $timeout, $index = null)
    {
        return $this->waitForNthMissedEmailAsyncWithHttpInfo($inbox_id, $timeout, $index)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation waitForNthMissedEmailAsyncWithHttpInfo
     *
     * Wait for Nth missed email
     *
     * @param  string $inbox_id Optional inbox ID filter (required)
     * @param  int $timeout Optional timeout milliseconds (required)
     * @param  int $index Zero based index of the email to wait for. If 1 missed email already and you want to wait for the 2nd email pass index&#x3D;1 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function waitForNthMissedEmailAsyncWithHttpInfo($inbox_id, $timeout, $index = null)
    {
        $returnType = '\MailSlurp\Models\MissedEmail';
        $request = $this->waitForNthMissedEmailRequest($inbox_id, $timeout, $index);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'waitForNthMissedEmail'
     *
     * @param  string $inbox_id Optional inbox ID filter (required)
     * @param  int $timeout Optional timeout milliseconds (required)
     * @param  int $index Zero based index of the email to wait for. If 1 missed email already and you want to wait for the 2nd email pass index&#x3D;1 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function waitForNthMissedEmailRequest($inbox_id, $timeout, $index = null)
    {
        // verify the required parameter 'inbox_id' is set
        if ($inbox_id === null || (is_array($inbox_id) && count($inbox_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $inbox_id when calling waitForNthMissedEmail'
            );
        }
        // verify the required parameter 'timeout' is set
        if ($timeout === null || (is_array($timeout) && count($timeout) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $timeout when calling waitForNthMissedEmail'
            );
        }

        $resourcePath = '/missed-emails/waitForNthMissedEmail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($index)) {
            $index = ObjectSerializer::serializeCollection($index, '', true);
        }
        if ($index !== null) {
            $queryParams['index'] = $index;
        }


        // path params
        if ($inbox_id !== null) {
            $resourcePath = str_replace(
                '{' . 'inboxId' . '}',
                ObjectSerializer::toPathValue($inbox_id),
                $resourcePath
            );
        }
        // path params
        if ($timeout !== null) {
            $resourcePath = str_replace(
                '{' . 'timeout' . '}',
                ObjectSerializer::toPathValue($timeout),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
