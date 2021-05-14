<?php
/**
 * DomainDto
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
 * Do not edit the class manually.
 */

namespace MailSlurp\Models;

use \ArrayAccess;
use \MailSlurp\ObjectSerializer;

/**
 * DomainDto Class Doc Comment
 *
 * @category Class
 * @description Domain plus verification records and status
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DomainDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DomainDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'catch_all_inbox_id' => 'string',
        'created_at' => '\DateTime',
        'dkim_tokens' => 'string[]',
        'domain' => 'string',
        'domain_name_records' => '\MailSlurp\Models\DomainNameRecord[]',
        'id' => 'string',
        'is_verified' => 'bool',
        'updated_at' => '\DateTime',
        'user_id' => 'string',
        'verification_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'catch_all_inbox_id' => 'uuid',
        'created_at' => 'date-time',
        'dkim_tokens' => null,
        'domain' => null,
        'domain_name_records' => null,
        'id' => 'uuid',
        'is_verified' => null,
        'updated_at' => 'date-time',
        'user_id' => 'uuid',
        'verification_token' => null
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
        'catch_all_inbox_id' => 'catchAllInboxId',
        'created_at' => 'createdAt',
        'dkim_tokens' => 'dkimTokens',
        'domain' => 'domain',
        'domain_name_records' => 'domainNameRecords',
        'id' => 'id',
        'is_verified' => 'isVerified',
        'updated_at' => 'updatedAt',
        'user_id' => 'userId',
        'verification_token' => 'verificationToken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'catch_all_inbox_id' => 'setCatchAllInboxId',
        'created_at' => 'setCreatedAt',
        'dkim_tokens' => 'setDkimTokens',
        'domain' => 'setDomain',
        'domain_name_records' => 'setDomainNameRecords',
        'id' => 'setId',
        'is_verified' => 'setIsVerified',
        'updated_at' => 'setUpdatedAt',
        'user_id' => 'setUserId',
        'verification_token' => 'setVerificationToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'catch_all_inbox_id' => 'getCatchAllInboxId',
        'created_at' => 'getCreatedAt',
        'dkim_tokens' => 'getDkimTokens',
        'domain' => 'getDomain',
        'domain_name_records' => 'getDomainNameRecords',
        'id' => 'getId',
        'is_verified' => 'getIsVerified',
        'updated_at' => 'getUpdatedAt',
        'user_id' => 'getUserId',
        'verification_token' => 'getVerificationToken'
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
        $this->container['catch_all_inbox_id'] = isset($data['catch_all_inbox_id']) ? $data['catch_all_inbox_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['dkim_tokens'] = isset($data['dkim_tokens']) ? $data['dkim_tokens'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['domain_name_records'] = isset($data['domain_name_records']) ? $data['domain_name_records'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_verified'] = isset($data['is_verified']) ? $data['is_verified'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['verification_token'] = isset($data['verification_token']) ? $data['verification_token'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
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
     * Gets catch_all_inbox_id
     *
     * @return string|null
     */
    public function getCatchAllInboxId()
    {
        return $this->container['catch_all_inbox_id'];
    }

    /**
     * Sets catch_all_inbox_id
     *
     * @param string|null $catch_all_inbox_id The optional catch all inbox that will receive emails sent to the domain that cannot be matched.
     *
     * @return $this
     */
    public function setCatchAllInboxId($catch_all_inbox_id)
    {
        $this->container['catch_all_inbox_id'] = $catch_all_inbox_id;

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
     * Gets dkim_tokens
     *
     * @return string[]|null
     */
    public function getDkimTokens()
    {
        return $this->container['dkim_tokens'];
    }

    /**
     * Sets dkim_tokens
     *
     * @param string[]|null $dkim_tokens Unique token DKIM tokens
     *
     * @return $this
     */
    public function setDkimTokens($dkim_tokens)
    {
        $this->container['dkim_tokens'] = $dkim_tokens;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain Custom domain name
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets domain_name_records
     *
     * @return \MailSlurp\Models\DomainNameRecord[]|null
     */
    public function getDomainNameRecords()
    {
        return $this->container['domain_name_records'];
    }

    /**
     * Sets domain_name_records
     *
     * @param \MailSlurp\Models\DomainNameRecord[]|null $domain_name_records List of DNS domain name records (C, MX, TXT) etc that you must add to the DNS server associated with your domain provider.
     *
     * @return $this
     */
    public function setDomainNameRecords($domain_name_records)
    {
        $this->container['domain_name_records'] = $domain_name_records;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_verified
     *
     * @return bool|null
     */
    public function getIsVerified()
    {
        return $this->container['is_verified'];
    }

    /**
     * Sets is_verified
     *
     * @param bool|null $is_verified Whether domain has been verified or not. If the domain is not verified after 72 hours there is most likely an issue with the domains DNS records.
     *
     * @return $this
     */
    public function setIsVerified($is_verified)
    {
        $this->container['is_verified'] = $is_verified;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets verification_token
     *
     * @return string|null
     */
    public function getVerificationToken()
    {
        return $this->container['verification_token'];
    }

    /**
     * Sets verification_token
     *
     * @param string|null $verification_token Verification tokens
     *
     * @return $this
     */
    public function setVerificationToken($verification_token)
    {
        $this->container['verification_token'] = $verification_token;

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


