<?php
/**
 * EmailControllerApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace MailSlurp;

use \MailSlurp\Configuration;
use \MailSlurp\ApiException;
use \MailSlurp\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * EmailControllerApiTest Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmailControllerApiTest extends TestCase
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
     * Test case for deleteAllEmails
     *
     * Delete all emails in all inboxes..
     *
     */
    public function testDeleteAllEmails()
    {
    }

    /**
     * Test case for deleteEmail
     *
     * Delete an email.
     *
     */
    public function testDeleteEmail()
    {
    }

    /**
     * Test case for downloadAttachment
     *
     * Get email attachment bytes. Returned as `octet-stream` with content type header. If you have trouble with byte responses try the `downloadAttachmentBase64` response endpoints and convert the base 64 encoded content to a file or string..
     *
     */
    public function testDownloadAttachment()
    {
    }

    /**
     * Test case for downloadAttachmentBase64
     *
     * Get email attachment as base64 encoded string as an alternative to binary responses. Decode the `base64FileContents` as a `utf-8` encoded string or array of bytes depending on the `contentType`..
     *
     */
    public function testDownloadAttachmentBase64()
    {
    }

    /**
     * Test case for downloadBody
     *
     * Get email body as string. Returned as `plain/text` with content type header..
     *
     */
    public function testDownloadBody()
    {
    }

    /**
     * Test case for downloadBodyBytes
     *
     * Get email body in bytes. Returned as `octet-stream` with content type header..
     *
     */
    public function testDownloadBodyBytes()
    {
    }

    /**
     * Test case for forwardEmail
     *
     * Forward email to recipients.
     *
     */
    public function testForwardEmail()
    {
    }

    /**
     * Test case for getAttachmentMetaData
     *
     * Get email attachment metadata. This is the `contentType` and `contentLength` of an attachment. To get the individual attachments  use the `downloadAttachment` methods..
     *
     */
    public function testGetAttachmentMetaData()
    {
    }

    /**
     * Test case for getAttachments1
     *
     * Get all email attachment metadata. Metadata includes name and size of attachments..
     *
     */
    public function testGetAttachments1()
    {
    }

    /**
     * Test case for getEmail
     *
     * Get email content including headers and body. Expects email to exist by ID. For emails that may not have arrived yet use the WaitForController..
     *
     */
    public function testGetEmail()
    {
    }

    /**
     * Test case for getEmailContentMatch
     *
     * Get email content regex pattern match results. Runs regex against email body and returns match groups..
     *
     */
    public function testGetEmailContentMatch()
    {
    }

    /**
     * Test case for getEmailHTML
     *
     * Get email content as HTML. For displaying emails in browser context..
     *
     */
    public function testGetEmailHTML()
    {
    }

    /**
     * Test case for getEmailHTMLQuery
     *
     * Parse and return text from an email, stripping HTML and decoding encoded characters.
     *
     */
    public function testGetEmailHTMLQuery()
    {
    }

    /**
     * Test case for getEmailTextLines
     *
     * Parse and return text from an email, stripping HTML and decoding encoded characters.
     *
     */
    public function testGetEmailTextLines()
    {
    }

    /**
     * Test case for getEmailsPaginated
     *
     * Get all emails in all inboxes in paginated form. Email API list all..
     *
     */
    public function testGetEmailsPaginated()
    {
    }

    /**
     * Test case for getLatestEmail
     *
     * Get latest email in all inboxes. Most recently received..
     *
     */
    public function testGetLatestEmail()
    {
    }

    /**
     * Test case for getLatestEmailInInbox
     *
     * Get latest email in an inbox. Use `WaitForController` to get emails that may not have arrived yet..
     *
     */
    public function testGetLatestEmailInInbox()
    {
    }

    /**
     * Test case for getOrganizationEmailsPaginated
     *
     * Get all organization emails. List team or shared test email accounts.
     *
     */
    public function testGetOrganizationEmailsPaginated()
    {
    }

    /**
     * Test case for getRawEmailContents
     *
     * Get raw email string. Returns unparsed raw SMTP message with headers and body..
     *
     */
    public function testGetRawEmailContents()
    {
    }

    /**
     * Test case for getRawEmailJson
     *
     * Get raw email in JSON. Unparsed SMTP message in JSON wrapper format..
     *
     */
    public function testGetRawEmailJson()
    {
    }

    /**
     * Test case for getUnreadEmailCount
     *
     * Get unread email count.
     *
     */
    public function testGetUnreadEmailCount()
    {
    }

    /**
     * Test case for replyToEmail
     *
     * Reply to an email.
     *
     */
    public function testReplyToEmail()
    {
    }

    /**
     * Test case for validateEmail
     *
     * Validate email HTML contents.
     *
     */
    public function testValidateEmail()
    {
    }
}
