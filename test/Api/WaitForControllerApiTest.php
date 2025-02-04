<?php
/**
 * WaitForControllerApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace MailSlurp;

use \MailSlurp\Configuration;
use \MailSlurp\ApiException;
use \MailSlurp\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * WaitForControllerApiTest Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WaitForControllerApiTest extends TestCase
{

    /**
     * Setup before running any test cases
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
     * Test case for waitFor
     *
     * Wait for an email to match the provided filter conditions such as subject contains keyword..
     *
     */
    public function testWaitFor()
    {
    }

    /**
     * Test case for waitForEmailCount
     *
     * Wait for and return count number of emails. Hold connection until inbox count matches expected or timeout occurs.
     *
     */
    public function testWaitForEmailCount()
    {
    }

    /**
     * Test case for waitForLatestEmail
     *
     * Fetch inbox's latest email or if empty wait for an email to arrive.
     *
     */
    public function testWaitForLatestEmail()
    {
    }

    /**
     * Test case for waitForMatchingEmails
     *
     * Wait or return list of emails that match simple matching patterns.
     *
     */
    public function testWaitForMatchingEmails()
    {
    }

    /**
     * Test case for waitForMatchingFirstEmail
     *
     * Wait for or return the first email that matches provided MatchOptions array.
     *
     */
    public function testWaitForMatchingFirstEmail()
    {
    }

    /**
     * Test case for waitForNthEmail
     *
     * Wait for or fetch the email with a given index in the inbox specified. If index doesn't exist waits for it to exist or timeout to occur..
     *
     */
    public function testWaitForNthEmail()
    {
    }
}
