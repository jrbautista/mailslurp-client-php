<?php
/**
 * WebhookNewContactPayload
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

namespace MailSlurp\Models;

use \ArrayAccess;
use \MailSlurp\ObjectSerializer;

/**
 * WebhookNewContactPayload Class Doc Comment
 *
 * @category Class
 * @description NEW_CONTACT webhook payload. Sent to your webhook url endpoint via HTTP POST when an email is received by the inbox that your webhook is attached to that contains a recipient that has not been saved as a contact.
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebhookNewContactPayload implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookNewContactPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'message_id' => 'string',
        'webhook_id' => 'string',
        'webhook_name' => 'string',
        'event_name' => 'string',
        'contact_id' => 'string',
        'group_id' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'company' => 'string',
        'primary_email_address' => 'string',
        'email_addresses' => 'string[]',
        'tags' => 'string[]',
        'meta_data' => 'object',
        'opt_out' => 'bool',
        'created_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'message_id' => null,
        'webhook_id' => 'uuid',
        'webhook_name' => null,
        'event_name' => null,
        'contact_id' => 'uuid',
        'group_id' => 'uuid',
        'first_name' => null,
        'last_name' => null,
        'company' => null,
        'primary_email_address' => null,
        'email_addresses' => null,
        'tags' => null,
        'meta_data' => null,
        'opt_out' => null,
        'created_at' => 'date-time'
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
        'message_id' => 'messageId',
        'webhook_id' => 'webhookId',
        'webhook_name' => 'webhookName',
        'event_name' => 'eventName',
        'contact_id' => 'contactId',
        'group_id' => 'groupId',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'company' => 'company',
        'primary_email_address' => 'primaryEmailAddress',
        'email_addresses' => 'emailAddresses',
        'tags' => 'tags',
        'meta_data' => 'metaData',
        'opt_out' => 'optOut',
        'created_at' => 'createdAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message_id' => 'setMessageId',
        'webhook_id' => 'setWebhookId',
        'webhook_name' => 'setWebhookName',
        'event_name' => 'setEventName',
        'contact_id' => 'setContactId',
        'group_id' => 'setGroupId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'company' => 'setCompany',
        'primary_email_address' => 'setPrimaryEmailAddress',
        'email_addresses' => 'setEmailAddresses',
        'tags' => 'setTags',
        'meta_data' => 'setMetaData',
        'opt_out' => 'setOptOut',
        'created_at' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message_id' => 'getMessageId',
        'webhook_id' => 'getWebhookId',
        'webhook_name' => 'getWebhookName',
        'event_name' => 'getEventName',
        'contact_id' => 'getContactId',
        'group_id' => 'getGroupId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'company' => 'getCompany',
        'primary_email_address' => 'getPrimaryEmailAddress',
        'email_addresses' => 'getEmailAddresses',
        'tags' => 'getTags',
        'meta_data' => 'getMetaData',
        'opt_out' => 'getOptOut',
        'created_at' => 'getCreatedAt'
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
    const EVENT_NAME_NEW_EMAIL = 'NEW_EMAIL';
    const EVENT_NAME_NEW_CONTACT = 'NEW_CONTACT';
    const EVENT_NAME_NEW_ATTACHMENT = 'NEW_ATTACHMENT';
    const EVENT_NAME_EMAIL_OPENED = 'EMAIL_OPENED';
    const EVENT_NAME_EMAIL_READ = 'EMAIL_READ';
    const EVENT_NAME_BOUNCE = 'BOUNCE';
    const EVENT_NAME_BOUNCE_RECIPIENT = 'BOUNCE_RECIPIENT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventNameAllowableValues()
    {
        return [
            self::EVENT_NAME_EMAIL_RECEIVED,
            self::EVENT_NAME_NEW_EMAIL,
            self::EVENT_NAME_NEW_CONTACT,
            self::EVENT_NAME_NEW_ATTACHMENT,
            self::EVENT_NAME_EMAIL_OPENED,
            self::EVENT_NAME_EMAIL_READ,
            self::EVENT_NAME_BOUNCE,
            self::EVENT_NAME_BOUNCE_RECIPIENT,
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
        $this->container['message_id'] = isset($data['message_id']) ? $data['message_id'] : null;
        $this->container['webhook_id'] = isset($data['webhook_id']) ? $data['webhook_id'] : null;
        $this->container['webhook_name'] = isset($data['webhook_name']) ? $data['webhook_name'] : null;
        $this->container['event_name'] = isset($data['event_name']) ? $data['event_name'] : null;
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['primary_email_address'] = isset($data['primary_email_address']) ? $data['primary_email_address'] : null;
        $this->container['email_addresses'] = isset($data['email_addresses']) ? $data['email_addresses'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['opt_out'] = isset($data['opt_out']) ? $data['opt_out'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['message_id'] === null) {
            $invalidProperties[] = "'message_id' can't be null";
        }
        if ($this->container['webhook_id'] === null) {
            $invalidProperties[] = "'webhook_id' can't be null";
        }
        if ($this->container['event_name'] === null) {
            $invalidProperties[] = "'event_name' can't be null";
        }
        $allowedValues = $this->getEventNameAllowableValues();
        if (!is_null($this->container['event_name']) && !in_array($this->container['event_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'event_name', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['contact_id'] === null) {
            $invalidProperties[] = "'contact_id' can't be null";
        }
        if ($this->container['email_addresses'] === null) {
            $invalidProperties[] = "'email_addresses' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
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
     * Gets message_id
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     *
     * @param string $message_id Idempotent message ID. Store this ID locally or in a database to prevent message duplication.
     *
     * @return $this
     */
    public function setMessageId($message_id)
    {
        $this->container['message_id'] = $message_id;

        return $this;
    }

    /**
     * Gets webhook_id
     *
     * @return string
     */
    public function getWebhookId()
    {
        return $this->container['webhook_id'];
    }

    /**
     * Sets webhook_id
     *
     * @param string $webhook_id ID of webhook entity being triggered
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
     * Gets event_name
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->container['event_name'];
    }

    /**
     * Sets event_name
     *
     * @param string $event_name Name of the event type webhook is being triggered for.
     *
     * @return $this
     */
    public function setEventName($event_name)
    {
        $allowedValues = $this->getEventNameAllowableValues();
        if (!in_array($event_name, $allowedValues, true)) {
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
     * Gets contact_id
     *
     * @return string
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param string $contact_id contact_id
     *
     * @return $this
     */
    public function setContactId($contact_id)
    {
        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param string|null $group_id group_id
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets primary_email_address
     *
     * @return string|null
     */
    public function getPrimaryEmailAddress()
    {
        return $this->container['primary_email_address'];
    }

    /**
     * Sets primary_email_address
     *
     * @param string|null $primary_email_address primary_email_address
     *
     * @return $this
     */
    public function setPrimaryEmailAddress($primary_email_address)
    {
        $this->container['primary_email_address'] = $primary_email_address;

        return $this;
    }

    /**
     * Gets email_addresses
     *
     * @return string[]
     */
    public function getEmailAddresses()
    {
        return $this->container['email_addresses'];
    }

    /**
     * Sets email_addresses
     *
     * @param string[] $email_addresses email_addresses
     *
     * @return $this
     */
    public function setEmailAddresses($email_addresses)
    {
        $this->container['email_addresses'] = $email_addresses;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets meta_data
     *
     * @return object|null
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param object|null $meta_data meta_data
     *
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets opt_out
     *
     * @return bool|null
     */
    public function getOptOut()
    {
        return $this->container['opt_out'];
    }

    /**
     * Sets opt_out
     *
     * @param bool|null $opt_out opt_out
     *
     * @return $this
     */
    public function setOptOut($opt_out)
    {
        $this->container['opt_out'] = $opt_out;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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


