<?php
/**
 * EmailProjectionTest
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
 * Contact: contact@mailslurp.dev
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
 * EmailProjectionTest Class Doc Comment
 *
 * @category    Class
 * @description A compact representation of a full email. Used in list endpoints to keep response sizes low. Body and attachments are not included. To get all fields of the email use the &#x60;getEmail&#x60; method with the email projection&#39;s ID. See &#x60;EmailDto&#x60; for documentation on projection properties.
 * @package     MailSlurp
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class EmailProjectionTest extends TestCase
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
     * Test "EmailProjection"
     */
    public function testEmailProjection()
    {
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
    }

    /**
     * Test attribute "from"
     */
    public function testPropertyFrom()
    {
    }

    /**
     * Test attribute "created_at"
     */
    public function testPropertyCreatedAt()
    {
    }

    /**
     * Test attribute "subject"
     */
    public function testPropertySubject()
    {
    }

    /**
     * Test attribute "inbox_id"
     */
    public function testPropertyInboxId()
    {
    }

    /**
     * Test attribute "to"
     */
    public function testPropertyTo()
    {
    }

    /**
     * Test attribute "attachments"
     */
    public function testPropertyAttachments()
    {
    }

    /**
     * Test attribute "bcc"
     */
    public function testPropertyBcc()
    {
    }

    /**
     * Test attribute "cc"
     */
    public function testPropertyCc()
    {
    }

    /**
     * Test attribute "team_access"
     */
    public function testPropertyTeamAccess()
    {
    }

    /**
     * Test attribute "read"
     */
    public function testPropertyRead()
    {
    }

    /**
     * Test attribute "body_md5_hash"
     */
    public function testPropertyBodyMd5Hash()
    {
    }

    /**
     * Test attribute "body_excerpt"
     */
    public function testPropertyBodyExcerpt()
    {
    }
}
