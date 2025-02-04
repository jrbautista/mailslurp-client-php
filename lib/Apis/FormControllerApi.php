<?php
/**
 * FormControllerApi
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
 * FormControllerApi Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FormControllerApi
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
     * Operation submitForm
     *
     * Submit a form to be parsed and sent as an email to an address determined by the form fields
     *
     * @param  string $_to The email address that submitted form should be sent to. (optional)
     * @param  string $_subject Optional subject of the email that will be sent. (optional)
     * @param  string $_redirect_to Optional URL to redirect form submitter to after submission. If not present user will see a success message. (optional)
     * @param  string $_email_address Email address of the submitting user. Include this if you wish to record the submitters email address and reply to it later. (optional)
     * @param  string $_success_message Optional success message to display if no _redirectTo present. (optional)
     * @param  string $_spam_check Optional but recommended field that catches spammers out. Include as a hidden form field but LEAVE EMPTY. Spam-bots will usually fill every field. If the _spamCheck field is filled the form submission will be ignored. (optional)
     * @param  string $other_parameters All other parameters or fields will be accepted and attached to the sent email. This includes files and any HTML form field with a name. These fields will become the body of the email that is sent. (optional)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function submitForm($_to = null, $_subject = null, $_redirect_to = null, $_email_address = null, $_success_message = null, $_spam_check = null, $other_parameters = null)
    {
        list($response) = $this->submitFormWithHttpInfo($_to, $_subject, $_redirect_to, $_email_address, $_success_message, $_spam_check, $other_parameters);
        return $response;
    }

    /**
     * Operation submitFormWithHttpInfo
     *
     * Submit a form to be parsed and sent as an email to an address determined by the form fields
     *
     * @param  string $_to The email address that submitted form should be sent to. (optional)
     * @param  string $_subject Optional subject of the email that will be sent. (optional)
     * @param  string $_redirect_to Optional URL to redirect form submitter to after submission. If not present user will see a success message. (optional)
     * @param  string $_email_address Email address of the submitting user. Include this if you wish to record the submitters email address and reply to it later. (optional)
     * @param  string $_success_message Optional success message to display if no _redirectTo present. (optional)
     * @param  string $_spam_check Optional but recommended field that catches spammers out. Include as a hidden form field but LEAVE EMPTY. Spam-bots will usually fill every field. If the _spamCheck field is filled the form submission will be ignored. (optional)
     * @param  string $other_parameters All other parameters or fields will be accepted and attached to the sent email. This includes files and any HTML form field with a name. These fields will become the body of the email that is sent. (optional)
     *
     * @throws \MailSlurp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function submitFormWithHttpInfo($_to = null, $_subject = null, $_redirect_to = null, $_email_address = null, $_success_message = null, $_spam_check = null, $other_parameters = null)
    {
        $request = $this->submitFormRequest($_to, $_subject, $_redirect_to, $_email_address, $_success_message, $_spam_check, $other_parameters);

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
                    if ('string' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'string', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'string';
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
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation submitFormAsync
     *
     * Submit a form to be parsed and sent as an email to an address determined by the form fields
     *
     * @param  string $_to The email address that submitted form should be sent to. (optional)
     * @param  string $_subject Optional subject of the email that will be sent. (optional)
     * @param  string $_redirect_to Optional URL to redirect form submitter to after submission. If not present user will see a success message. (optional)
     * @param  string $_email_address Email address of the submitting user. Include this if you wish to record the submitters email address and reply to it later. (optional)
     * @param  string $_success_message Optional success message to display if no _redirectTo present. (optional)
     * @param  string $_spam_check Optional but recommended field that catches spammers out. Include as a hidden form field but LEAVE EMPTY. Spam-bots will usually fill every field. If the _spamCheck field is filled the form submission will be ignored. (optional)
     * @param  string $other_parameters All other parameters or fields will be accepted and attached to the sent email. This includes files and any HTML form field with a name. These fields will become the body of the email that is sent. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function submitFormAsync($_to = null, $_subject = null, $_redirect_to = null, $_email_address = null, $_success_message = null, $_spam_check = null, $other_parameters = null)
    {
        return $this->submitFormAsyncWithHttpInfo($_to, $_subject, $_redirect_to, $_email_address, $_success_message, $_spam_check, $other_parameters)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation submitFormAsyncWithHttpInfo
     *
     * Submit a form to be parsed and sent as an email to an address determined by the form fields
     *
     * @param  string $_to The email address that submitted form should be sent to. (optional)
     * @param  string $_subject Optional subject of the email that will be sent. (optional)
     * @param  string $_redirect_to Optional URL to redirect form submitter to after submission. If not present user will see a success message. (optional)
     * @param  string $_email_address Email address of the submitting user. Include this if you wish to record the submitters email address and reply to it later. (optional)
     * @param  string $_success_message Optional success message to display if no _redirectTo present. (optional)
     * @param  string $_spam_check Optional but recommended field that catches spammers out. Include as a hidden form field but LEAVE EMPTY. Spam-bots will usually fill every field. If the _spamCheck field is filled the form submission will be ignored. (optional)
     * @param  string $other_parameters All other parameters or fields will be accepted and attached to the sent email. This includes files and any HTML form field with a name. These fields will become the body of the email that is sent. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function submitFormAsyncWithHttpInfo($_to = null, $_subject = null, $_redirect_to = null, $_email_address = null, $_success_message = null, $_spam_check = null, $other_parameters = null)
    {
        $returnType = 'string';
        $request = $this->submitFormRequest($_to, $_subject, $_redirect_to, $_email_address, $_success_message, $_spam_check, $other_parameters);

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
     * Create request for operation 'submitForm'
     *
     * @param  string $_to The email address that submitted form should be sent to. (optional)
     * @param  string $_subject Optional subject of the email that will be sent. (optional)
     * @param  string $_redirect_to Optional URL to redirect form submitter to after submission. If not present user will see a success message. (optional)
     * @param  string $_email_address Email address of the submitting user. Include this if you wish to record the submitters email address and reply to it later. (optional)
     * @param  string $_success_message Optional success message to display if no _redirectTo present. (optional)
     * @param  string $_spam_check Optional but recommended field that catches spammers out. Include as a hidden form field but LEAVE EMPTY. Spam-bots will usually fill every field. If the _spamCheck field is filled the form submission will be ignored. (optional)
     * @param  string $other_parameters All other parameters or fields will be accepted and attached to the sent email. This includes files and any HTML form field with a name. These fields will become the body of the email that is sent. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function submitFormRequest($_to = null, $_subject = null, $_redirect_to = null, $_email_address = null, $_success_message = null, $_spam_check = null, $other_parameters = null)
    {

        $resourcePath = '/forms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($_to !== null) {
            if('form' === 'form' && is_array($_to)) {
                foreach($_to as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['_to'] = $_to;
            }
        }
        // query params
        if ($_subject !== null) {
            if('form' === 'form' && is_array($_subject)) {
                foreach($_subject as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['_subject'] = $_subject;
            }
        }
        // query params
        if ($_redirect_to !== null) {
            if('form' === 'form' && is_array($_redirect_to)) {
                foreach($_redirect_to as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['_redirectTo'] = $_redirect_to;
            }
        }
        // query params
        if ($_email_address !== null) {
            if('form' === 'form' && is_array($_email_address)) {
                foreach($_email_address as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['_emailAddress'] = $_email_address;
            }
        }
        // query params
        if ($_success_message !== null) {
            if('form' === 'form' && is_array($_success_message)) {
                foreach($_success_message as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['_successMessage'] = $_success_message;
            }
        }
        // query params
        if ($_spam_check !== null) {
            if('form' === 'form' && is_array($_spam_check)) {
                foreach($_spam_check as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['_spamCheck'] = $_spam_check;
            }
        }
        // query params
        if ($other_parameters !== null) {
            if('form' === 'form' && is_array($other_parameters)) {
                foreach($other_parameters as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['otherParameters'] = $other_parameters;
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
