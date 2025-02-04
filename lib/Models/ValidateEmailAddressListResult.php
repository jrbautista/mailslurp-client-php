<?php
/**
 * ValidateEmailAddressListResult
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
 * ValidateEmailAddressListResult Class Doc Comment
 *
 * @category Class
 * @description Result of validating a list of email addresses
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ValidateEmailAddressListResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ValidateEmailAddressListResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'valid_email_addresses' => 'string[]',
        'invalid_email_addresses' => 'string[]',
        'result_map_email_address_is_valid' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'valid_email_addresses' => null,
        'invalid_email_addresses' => null,
        'result_map_email_address_is_valid' => null
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
        'valid_email_addresses' => 'validEmailAddresses',
        'invalid_email_addresses' => 'invalidEmailAddresses',
        'result_map_email_address_is_valid' => 'resultMapEmailAddressIsValid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'valid_email_addresses' => 'setValidEmailAddresses',
        'invalid_email_addresses' => 'setInvalidEmailAddresses',
        'result_map_email_address_is_valid' => 'setResultMapEmailAddressIsValid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'valid_email_addresses' => 'getValidEmailAddresses',
        'invalid_email_addresses' => 'getInvalidEmailAddresses',
        'result_map_email_address_is_valid' => 'getResultMapEmailAddressIsValid'
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
        $this->container['valid_email_addresses'] = isset($data['valid_email_addresses']) ? $data['valid_email_addresses'] : null;
        $this->container['invalid_email_addresses'] = isset($data['invalid_email_addresses']) ? $data['invalid_email_addresses'] : null;
        $this->container['result_map_email_address_is_valid'] = isset($data['result_map_email_address_is_valid']) ? $data['result_map_email_address_is_valid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['valid_email_addresses'] === null) {
            $invalidProperties[] = "'valid_email_addresses' can't be null";
        }
        if ($this->container['invalid_email_addresses'] === null) {
            $invalidProperties[] = "'invalid_email_addresses' can't be null";
        }
        if ($this->container['result_map_email_address_is_valid'] === null) {
            $invalidProperties[] = "'result_map_email_address_is_valid' can't be null";
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
     * Gets valid_email_addresses
     *
     * @return string[]
     */
    public function getValidEmailAddresses()
    {
        return $this->container['valid_email_addresses'];
    }

    /**
     * Sets valid_email_addresses
     *
     * @param string[] $valid_email_addresses valid_email_addresses
     *
     * @return $this
     */
    public function setValidEmailAddresses($valid_email_addresses)
    {
        $this->container['valid_email_addresses'] = $valid_email_addresses;

        return $this;
    }

    /**
     * Gets invalid_email_addresses
     *
     * @return string[]
     */
    public function getInvalidEmailAddresses()
    {
        return $this->container['invalid_email_addresses'];
    }

    /**
     * Sets invalid_email_addresses
     *
     * @param string[] $invalid_email_addresses invalid_email_addresses
     *
     * @return $this
     */
    public function setInvalidEmailAddresses($invalid_email_addresses)
    {
        $this->container['invalid_email_addresses'] = $invalid_email_addresses;

        return $this;
    }

    /**
     * Gets result_map_email_address_is_valid
     *
     * @return map[string,bool]
     */
    public function getResultMapEmailAddressIsValid()
    {
        return $this->container['result_map_email_address_is_valid'];
    }

    /**
     * Sets result_map_email_address_is_valid
     *
     * @param map[string,bool] $result_map_email_address_is_valid result_map_email_address_is_valid
     *
     * @return $this
     */
    public function setResultMapEmailAddressIsValid($result_map_email_address_is_valid)
    {
        $this->container['result_map_email_address_is_valid'] = $result_map_email_address_is_valid;

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


