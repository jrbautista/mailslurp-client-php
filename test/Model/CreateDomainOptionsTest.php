<?php
/**
 * CreateDomainOptionsTest
 *
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
 * Please update the test case below to test the model.
 */

namespace MailSlurp;

use PHPUnit\Framework\TestCase;

/**
 * CreateDomainOptionsTest Class Doc Comment
 *
 * @category    Class
 * @description Options for creating a domain to use with MailSlurp. You must have ownership access to this domain in order to verify it. Domains will not function correctly until the domain has been verified. See https://www.mailslurp.com/guides/custom-domains for help. Domains can be either &#x60;HTTP&#x60; or &#x60;SMTP&#x60; type. The type of domain determines which inboxes can be used with it. &#x60;SMTP&#x60; inboxes use a mail server running &#x60;mx.mailslurp.com&#x60; while &#x60;HTTP&#x60; inboxes are handled by AWS SES.
 * @package     MailSlurp
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class CreateDomainOptionsTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "CreateDomainOptions"
     */
    public function testCreateDomainOptions()
    {
    }

    /**
     * Test attribute "created_catch_all_inbox"
     */
    public function testPropertyCreatedCatchAllInbox()
    {
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
    }

    /**
     * Test attribute "domain"
     */
    public function testPropertyDomain()
    {
    }

    /**
     * Test attribute "domain_type"
     */
    public function testPropertyDomainType()
    {
    }
}
