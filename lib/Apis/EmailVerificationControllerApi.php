<?php
/**
 * EmailVerificationControllerApi
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
 * MailSlurp is an API for sending and receiving emails from dynamically allocated email addresses. It's designed for developers and QA teams to test applications, process inbound emails, send templated notifications, attachments, and more.  ## Resources  - [Homepage](https://www.mailslurp.com) - Get an [API KEY](https://app.mailslurp.com/sign-up/) - Generated [SDK Clients](https://docs.mailslurp.com/) - [Examples](https://github.com/mailslurp/examples) repository
 *
 * The version of the OpenAPI document: 6.5.2
 * Contact: contact@mailslurp.dev
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
 * EmailVerificationControllerApi Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmailVerificationControllerApi
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
     * Operation getValidationRequests
     *
     * Validate a list of email addresses. Per unit billing. See your plan for pricing.
     *
     * @param  int $page Optional page index in list pagination (optional, default to 0)
     * @param  int $size Optional page size for paginated result list. (optional, default to 20)
     * @param  string $sort Optional createdAt sort direction ASC or DESC (optional, default to 'DESC')
     * @param  string $search_filter Optional search filter (optional)
     * @param  \DateTime $since Filter by created at after the given timestamp (optional)
     * @param  \DateTime $before Filter by created at before the given timestamp (optional)
     * @param  bool $is_valid Filter where email is valid is true or false (optional)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MailSlurp\Models\PageEmailValidationRequest
     */
    public function getValidationRequests($page = 0, $size = 20, $sort = 'DESC', $search_filter = null, $since = null, $before = null, $is_valid = null)
    {
        list($response) = $this->getValidationRequestsWithHttpInfo($page, $size, $sort, $search_filter, $since, $before, $is_valid);
        return $response;
    }

    /**
     * Operation getValidationRequestsWithHttpInfo
     *
     * Validate a list of email addresses. Per unit billing. See your plan for pricing.
     *
     * @param  int $page Optional page index in list pagination (optional, default to 0)
     * @param  int $size Optional page size for paginated result list. (optional, default to 20)
     * @param  string $sort Optional createdAt sort direction ASC or DESC (optional, default to 'DESC')
     * @param  string $search_filter Optional search filter (optional)
     * @param  \DateTime $since Filter by created at after the given timestamp (optional)
     * @param  \DateTime $before Filter by created at before the given timestamp (optional)
     * @param  bool $is_valid Filter where email is valid is true or false (optional)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MailSlurp\Models\PageEmailValidationRequest, HTTP status code, HTTP response headers (array of strings)
     */
    public function getValidationRequestsWithHttpInfo($page = 0, $size = 20, $sort = 'DESC', $search_filter = null, $since = null, $before = null, $is_valid = null)
    {
        $request = $this->getValidationRequestsRequest($page, $size, $sort, $search_filter, $since, $before, $is_valid);

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
                    if ('\MailSlurp\Models\PageEmailValidationRequest' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MailSlurp\Models\PageEmailValidationRequest', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MailSlurp\Models\PageEmailValidationRequest';
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
                        '\MailSlurp\Models\PageEmailValidationRequest',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getValidationRequestsAsync
     *
     * Validate a list of email addresses. Per unit billing. See your plan for pricing.
     *
     * @param  int $page Optional page index in list pagination (optional, default to 0)
     * @param  int $size Optional page size for paginated result list. (optional, default to 20)
     * @param  string $sort Optional createdAt sort direction ASC or DESC (optional, default to 'DESC')
     * @param  string $search_filter Optional search filter (optional)
     * @param  \DateTime $since Filter by created at after the given timestamp (optional)
     * @param  \DateTime $before Filter by created at before the given timestamp (optional)
     * @param  bool $is_valid Filter where email is valid is true or false (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getValidationRequestsAsync($page = 0, $size = 20, $sort = 'DESC', $search_filter = null, $since = null, $before = null, $is_valid = null)
    {
        return $this->getValidationRequestsAsyncWithHttpInfo($page, $size, $sort, $search_filter, $since, $before, $is_valid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getValidationRequestsAsyncWithHttpInfo
     *
     * Validate a list of email addresses. Per unit billing. See your plan for pricing.
     *
     * @param  int $page Optional page index in list pagination (optional, default to 0)
     * @param  int $size Optional page size for paginated result list. (optional, default to 20)
     * @param  string $sort Optional createdAt sort direction ASC or DESC (optional, default to 'DESC')
     * @param  string $search_filter Optional search filter (optional)
     * @param  \DateTime $since Filter by created at after the given timestamp (optional)
     * @param  \DateTime $before Filter by created at before the given timestamp (optional)
     * @param  bool $is_valid Filter where email is valid is true or false (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getValidationRequestsAsyncWithHttpInfo($page = 0, $size = 20, $sort = 'DESC', $search_filter = null, $since = null, $before = null, $is_valid = null)
    {
        $returnType = '\MailSlurp\Models\PageEmailValidationRequest';
        $request = $this->getValidationRequestsRequest($page, $size, $sort, $search_filter, $since, $before, $is_valid);

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
     * Create request for operation 'getValidationRequests'
     *
     * @param  int $page Optional page index in list pagination (optional, default to 0)
     * @param  int $size Optional page size for paginated result list. (optional, default to 20)
     * @param  string $sort Optional createdAt sort direction ASC or DESC (optional, default to 'DESC')
     * @param  string $search_filter Optional search filter (optional)
     * @param  \DateTime $since Filter by created at after the given timestamp (optional)
     * @param  \DateTime $before Filter by created at before the given timestamp (optional)
     * @param  bool $is_valid Filter where email is valid is true or false (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getValidationRequestsRequest($page = 0, $size = 20, $sort = 'DESC', $search_filter = null, $since = null, $before = null, $is_valid = null)
    {
        if ($page !== null && $page > 9223372036854775807) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling EmailVerificationControllerApi.getValidationRequests, must be smaller than or equal to 9223372036854775807.');
        }
        if ($page !== null && $page < 0) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling EmailVerificationControllerApi.getValidationRequests, must be bigger than or equal to 0.');
        }

        if ($size !== null && $size > 100) {
            throw new \InvalidArgumentException('invalid value for "$size" when calling EmailVerificationControllerApi.getValidationRequests, must be smaller than or equal to 100.');
        }
        if ($size !== null && $size < 1) {
            throw new \InvalidArgumentException('invalid value for "$size" when calling EmailVerificationControllerApi.getValidationRequests, must be bigger than or equal to 1.');
        }


        $resourcePath = '/email-verification/validation-requests';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($size !== null) {
            if('form' === 'form' && is_array($size)) {
                foreach($size as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['size'] = $size;
            }
        }
        // query params
        if ($sort !== null) {
            if('form' === 'form' && is_array($sort)) {
                foreach($sort as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['sort'] = $sort;
            }
        }
        // query params
        if ($search_filter !== null) {
            if('form' === 'form' && is_array($search_filter)) {
                foreach($search_filter as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['searchFilter'] = $search_filter;
            }
        }
        // query params
        if ($since !== null) {
            if('form' === 'form' && is_array($since)) {
                foreach($since as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['since'] = $since;
            }
        }
        // query params
        if ($before !== null) {
            if('form' === 'form' && is_array($before)) {
                foreach($before as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['before'] = $before;
            }
        }
        // query params
        if ($is_valid !== null) {
            if('form' === 'form' && is_array($is_valid)) {
                foreach($is_valid as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['isValid'] = $is_valid;
            }
        }



        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
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
     * Operation validateEmailAddressList
     *
     * Validate a list of email addresses. Per unit billing. See your plan for pricing.
     *
     * @param  \MailSlurp\Models\ValidateEmailAddressListOptions $validate_email_address_list_options validate_email_address_list_options (required)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MailSlurp\Models\ValidateEmailAddressListResult
     */
    public function validateEmailAddressList($validate_email_address_list_options)
    {
        list($response) = $this->validateEmailAddressListWithHttpInfo($validate_email_address_list_options);
        return $response;
    }

    /**
     * Operation validateEmailAddressListWithHttpInfo
     *
     * Validate a list of email addresses. Per unit billing. See your plan for pricing.
     *
     * @param  \MailSlurp\Models\ValidateEmailAddressListOptions $validate_email_address_list_options (required)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MailSlurp\Models\ValidateEmailAddressListResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function validateEmailAddressListWithHttpInfo($validate_email_address_list_options)
    {
        $request = $this->validateEmailAddressListRequest($validate_email_address_list_options);

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
                    if ('\MailSlurp\Models\ValidateEmailAddressListResult' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MailSlurp\Models\ValidateEmailAddressListResult', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MailSlurp\Models\ValidateEmailAddressListResult';
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
                        '\MailSlurp\Models\ValidateEmailAddressListResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation validateEmailAddressListAsync
     *
     * Validate a list of email addresses. Per unit billing. See your plan for pricing.
     *
     * @param  \MailSlurp\Models\ValidateEmailAddressListOptions $validate_email_address_list_options (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function validateEmailAddressListAsync($validate_email_address_list_options)
    {
        return $this->validateEmailAddressListAsyncWithHttpInfo($validate_email_address_list_options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation validateEmailAddressListAsyncWithHttpInfo
     *
     * Validate a list of email addresses. Per unit billing. See your plan for pricing.
     *
     * @param  \MailSlurp\Models\ValidateEmailAddressListOptions $validate_email_address_list_options (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function validateEmailAddressListAsyncWithHttpInfo($validate_email_address_list_options)
    {
        $returnType = '\MailSlurp\Models\ValidateEmailAddressListResult';
        $request = $this->validateEmailAddressListRequest($validate_email_address_list_options);

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
     * Create request for operation 'validateEmailAddressList'
     *
     * @param  \MailSlurp\Models\ValidateEmailAddressListOptions $validate_email_address_list_options (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function validateEmailAddressListRequest($validate_email_address_list_options)
    {
        // verify the required parameter 'validate_email_address_list_options' is set
        if ($validate_email_address_list_options === null || (is_array($validate_email_address_list_options) && count($validate_email_address_list_options) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $validate_email_address_list_options when calling validateEmailAddressList'
            );
        }

        $resourcePath = '/email-verification/email-address-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($validate_email_address_list_options)) {
            $_tempBody = $validate_email_address_list_options;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                ['application/json']
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
            'POST',
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
