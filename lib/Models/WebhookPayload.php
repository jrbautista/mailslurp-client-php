<?php
/**
 * WebhookPayload
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
 * MailSlurp is an API for sending and receiving emails from dynamically allocated email addresses. It's designed for developers and QA teams to test applications, process inbound emails, send templated notifications, attachments, and more.   ## Resources - [Homepage](https://www.mailslurp.com) - Get an [API KEY](https://app.mailslurp.com/sign-up/) - Generated [SDK Clients](https://www.mailslurp.com/docs/) - [Examples](https://github.com/mailslurp/examples) repository
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

namespace MailSlurp\Models;

use \ArrayAccess;
use \MailSlurp\ObjectSerializer;

/**
 * WebhookPayload Class Doc Comment
 *
 * @category Class
 * @description MailSlurp webhook payload schema. This schema describes the JSON object that is sent via HTTP POST to webhook urls when an email is received by an inbox that a webhook is attached to. Payloads may be delivered multiple times so use the ID as a key for event uniqueness. The payload contains IDs for the email and inbox affected. Use these to fetch more data related to the event using appropriate inbox and email endpoints. See https://www.mailslurp.com/guides/email-webhooks/ for more information. Your webhook endpoint should accept POST HTTP request and return a 200 in under 30 seconds. Process the webhook asynchronously if you need to.
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebhookPayload implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attachment_meta_datas' => '\MailSlurp\Models\AttachmentMetaData[]',
        'bcc' => 'string[]',
        'cc' => 'string[]',
        'created_at' => '\DateTime',
        'email_id' => 'string',
        'event_name' => 'string',
        'from' => 'string',
        'inbox_id' => 'string',
        'message_id' => 'string',
        'subject' => 'string',
        'to' => 'string[]',
        'webhook_id' => 'string',
        'webhook_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'attachment_meta_datas' => null,
        'bcc' => null,
        'cc' => null,
        'created_at' => 'date-time',
        'email_id' => 'uuid',
        'event_name' => null,
        'from' => null,
        'inbox_id' => 'uuid',
        'message_id' => null,
        'subject' => null,
        'to' => null,
        'webhook_id' => 'uuid',
        'webhook_name' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'attachment_meta_datas' => 'attachmentMetaDatas',
        'bcc' => 'bcc',
        'cc' => 'cc',
        'created_at' => 'createdAt',
        'email_id' => 'emailId',
        'event_name' => 'eventName',
        'from' => 'from',
        'inbox_id' => 'inboxId',
        'message_id' => 'messageId',
        'subject' => 'subject',
        'to' => 'to',
        'webhook_id' => 'webhookId',
        'webhook_name' => 'webhookName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attachment_meta_datas' => 'setAttachmentMetaDatas',
        'bcc' => 'setBcc',
        'cc' => 'setCc',
        'created_at' => 'setCreatedAt',
        'email_id' => 'setEmailId',
        'event_name' => 'setEventName',
        'from' => 'setFrom',
        'inbox_id' => 'setInboxId',
        'message_id' => 'setMessageId',
        'subject' => 'setSubject',
        'to' => 'setTo',
        'webhook_id' => 'setWebhookId',
        'webhook_name' => 'setWebhookName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attachment_meta_datas' => 'getAttachmentMetaDatas',
        'bcc' => 'getBcc',
        'cc' => 'getCc',
        'created_at' => 'getCreatedAt',
        'email_id' => 'getEmailId',
        'event_name' => 'getEventName',
        'from' => 'getFrom',
        'inbox_id' => 'getInboxId',
        'message_id' => 'getMessageId',
        'subject' => 'getSubject',
        'to' => 'getTo',
        'webhook_id' => 'getWebhookId',
        'webhook_name' => 'getWebhookName'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const EVENT_NAME_EMAIL_RECEIVED = 'EMAIL_RECEIVED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventNameAllowableValues()
    {
        return [
            self::EVENT_NAME_EMAIL_RECEIVED,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['attachment_meta_datas'] = isset($data['attachment_meta_datas']) ? $data['attachment_meta_datas'] : null;
        $this->container['bcc'] = isset($data['bcc']) ? $data['bcc'] : null;
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['email_id'] = isset($data['email_id']) ? $data['email_id'] : null;
        $this->container['event_name'] = isset($data['event_name']) ? $data['event_name'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['inbox_id'] = isset($data['inbox_id']) ? $data['inbox_id'] : null;
        $this->container['message_id'] = isset($data['message_id']) ? $data['message_id'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['webhook_id'] = isset($data['webhook_id']) ? $data['webhook_id'] : null;
        $this->container['webhook_name'] = isset($data['webhook_name']) ? $data['webhook_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEventNameAllowableValues();
        if (!is_null($this->container['event_name']) && !in_array($this->container['event_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'event_name', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets attachment_meta_datas
     *
     * @return \MailSlurp\Models\AttachmentMetaData[]|null
     */
    public function getAttachmentMetaDatas()
    {
        return $this->container['attachment_meta_datas'];
    }

    /**
     * Sets attachment_meta_datas
     *
     * @param \MailSlurp\Models\AttachmentMetaData[]|null $attachment_meta_datas List of attachment meta data objects if attachments present
     *
     * @return $this
     */
    public function setAttachmentMetaDatas($attachment_meta_datas)
    {
        $this->container['attachment_meta_datas'] = $attachment_meta_datas;

        return $this;
    }

    /**
     * Gets bcc
     *
     * @return string[]|null
     */
    public function getBcc()
    {
        return $this->container['bcc'];
    }

    /**
     * Sets bcc
     *
     * @param string[]|null $bcc List of `BCC` recipients email was addressed to
     *
     * @return $this
     */
    public function setBcc($bcc)
    {
        $this->container['bcc'] = $bcc;

        return $this;
    }

    /**
     * Gets cc
     *
     * @return string[]|null
     */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
     * Sets cc
     *
     * @param string[]|null $cc List of `CC` recipients email was addressed to
     *
     * @return $this
     */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Date time of event creation
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets email_id
     *
     * @return string|null
     */
    public function getEmailId()
    {
        return $this->container['email_id'];
    }

    /**
     * Sets email_id
     *
     * @param string|null $email_id ID of the email that was received. Use this ID for fetching the email
     *
     * @return $this
     */
    public function setEmailId($email_id)
    {
        $this->container['email_id'] = $email_id;

        return $this;
    }

    /**
     * Gets event_name
     *
     * @return string|null
     */
    public function getEventName()
    {
        return $this->container['event_name'];
    }

    /**
     * Sets event_name
     *
     * @param string|null $event_name Name of the event type webhook is being triggered for
     *
     * @return $this
     */
    public function setEventName($event_name)
    {
        $allowedValues = $this->getEventNameAllowableValues();
        if (!is_null($event_name) && !in_array($event_name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'event_name', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event_name'] = $event_name;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from Who the email was sent from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets inbox_id
     *
     * @return string|null
     */
    public function getInboxId()
    {
        return $this->container['inbox_id'];
    }

    /**
     * Sets inbox_id
     *
     * @param string|null $inbox_id Id of the inbox that receive an email
     *
     * @return $this
     */
    public function setInboxId($inbox_id)
    {
        $this->container['inbox_id'] = $inbox_id;

        return $this;
    }

    /**
     * Gets message_id
     *
     * @return string|null
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     *
     * @param string|null $message_id Idempotent message ID. Store this ID locally or in a database to prevent message duplication.
     *
     * @return $this
     */
    public function setMessageId($message_id)
    {
        $this->container['message_id'] = $message_id;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject The subject line of the email message
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string[]|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string[]|null $to List of `To` recipients email was addressed to
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets webhook_id
     *
     * @return string|null
     */
    public function getWebhookId()
    {
        return $this->container['webhook_id'];
    }

    /**
     * Sets webhook_id
     *
     * @param string|null $webhook_id ID of webhook entity being triggered
     *
     * @return $this
     */
    public function setWebhookId($webhook_id)
    {
        $this->container['webhook_id'] = $webhook_id;

        return $this;
    }

    /**
     * Gets webhook_name
     *
     * @return string|null
     */
    public function getWebhookName()
    {
        return $this->container['webhook_name'];
    }

    /**
     * Sets webhook_name
     *
     * @param string|null $webhook_name Name of the webhook being triggered
     *
     * @return $this
     */
    public function setWebhookName($webhook_name)
    {
        $this->container['webhook_name'] = $webhook_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


