<?php
/**
 * PageWebhookResult
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
 * Do not edit the class manually.
 */

namespace MailSlurp\Models;

use \ArrayAccess;
use \MailSlurp\ObjectSerializer;

/**
 * PageWebhookResult Class Doc Comment
 *
 * @category Class
 * @description Paginated webhook results. Page index starts at zero. Projection results may omit larger entity fields. For fetching a full entity use the projection ID with individual method calls.
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PageWebhookResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PageWebhookResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'content' => '\MailSlurp\Models\WebhookResultDto[]',
        'pageable' => '\MailSlurp\Models\Pageable',
        'last' => 'bool',
        'total_pages' => 'int',
        'total_elements' => 'int',
        'size' => 'int',
        'number' => 'int',
        'sort' => '\MailSlurp\Models\Sort',
        'first' => 'bool',
        'number_of_elements' => 'int',
        'empty' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'content' => null,
        'pageable' => null,
        'last' => null,
        'total_pages' => 'int32',
        'total_elements' => 'int64',
        'size' => 'int32',
        'number' => 'int32',
        'sort' => null,
        'first' => null,
        'number_of_elements' => 'int32',
        'empty' => null
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
        'content' => 'content',
        'pageable' => 'pageable',
        'last' => 'last',
        'total_pages' => 'totalPages',
        'total_elements' => 'totalElements',
        'size' => 'size',
        'number' => 'number',
        'sort' => 'sort',
        'first' => 'first',
        'number_of_elements' => 'numberOfElements',
        'empty' => 'empty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content' => 'setContent',
        'pageable' => 'setPageable',
        'last' => 'setLast',
        'total_pages' => 'setTotalPages',
        'total_elements' => 'setTotalElements',
        'size' => 'setSize',
        'number' => 'setNumber',
        'sort' => 'setSort',
        'first' => 'setFirst',
        'number_of_elements' => 'setNumberOfElements',
        'empty' => 'setEmpty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content' => 'getContent',
        'pageable' => 'getPageable',
        'last' => 'getLast',
        'total_pages' => 'getTotalPages',
        'total_elements' => 'getTotalElements',
        'size' => 'getSize',
        'number' => 'getNumber',
        'sort' => 'getSort',
        'first' => 'getFirst',
        'number_of_elements' => 'getNumberOfElements',
        'empty' => 'getEmpty'
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['pageable'] = isset($data['pageable']) ? $data['pageable'] : null;
        $this->container['last'] = isset($data['last']) ? $data['last'] : null;
        $this->container['total_pages'] = isset($data['total_pages']) ? $data['total_pages'] : null;
        $this->container['total_elements'] = isset($data['total_elements']) ? $data['total_elements'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['first'] = isset($data['first']) ? $data['first'] : null;
        $this->container['number_of_elements'] = isset($data['number_of_elements']) ? $data['number_of_elements'] : null;
        $this->container['empty'] = isset($data['empty']) ? $data['empty'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets content
     *
     * @return \MailSlurp\Models\WebhookResultDto[]|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param \MailSlurp\Models\WebhookResultDto[]|null $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets pageable
     *
     * @return \MailSlurp\Models\Pageable|null
     */
    public function getPageable()
    {
        return $this->container['pageable'];
    }

    /**
     * Sets pageable
     *
     * @param \MailSlurp\Models\Pageable|null $pageable pageable
     *
     * @return $this
     */
    public function setPageable($pageable)
    {
        $this->container['pageable'] = $pageable;

        return $this;
    }

    /**
     * Gets last
     *
     * @return bool|null
     */
    public function getLast()
    {
        return $this->container['last'];
    }

    /**
     * Sets last
     *
     * @param bool|null $last last
     *
     * @return $this
     */
    public function setLast($last)
    {
        $this->container['last'] = $last;

        return $this;
    }

    /**
     * Gets total_pages
     *
     * @return int|null
     */
    public function getTotalPages()
    {
        return $this->container['total_pages'];
    }

    /**
     * Sets total_pages
     *
     * @param int|null $total_pages total_pages
     *
     * @return $this
     */
    public function setTotalPages($total_pages)
    {
        $this->container['total_pages'] = $total_pages;

        return $this;
    }

    /**
     * Gets total_elements
     *
     * @return int|null
     */
    public function getTotalElements()
    {
        return $this->container['total_elements'];
    }

    /**
     * Sets total_elements
     *
     * @param int|null $total_elements total_elements
     *
     * @return $this
     */
    public function setTotalElements($total_elements)
    {
        $this->container['total_elements'] = $total_elements;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets number
     *
     * @return int|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int|null $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets sort
     *
     * @return \MailSlurp\Models\Sort|null
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param \MailSlurp\Models\Sort|null $sort sort
     *
     * @return $this
     */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets first
     *
     * @return bool|null
     */
    public function getFirst()
    {
        return $this->container['first'];
    }

    /**
     * Sets first
     *
     * @param bool|null $first first
     *
     * @return $this
     */
    public function setFirst($first)
    {
        $this->container['first'] = $first;

        return $this;
    }

    /**
     * Gets number_of_elements
     *
     * @return int|null
     */
    public function getNumberOfElements()
    {
        return $this->container['number_of_elements'];
    }

    /**
     * Sets number_of_elements
     *
     * @param int|null $number_of_elements number_of_elements
     *
     * @return $this
     */
    public function setNumberOfElements($number_of_elements)
    {
        $this->container['number_of_elements'] = $number_of_elements;

        return $this;
    }

    /**
     * Gets empty
     *
     * @return bool|null
     */
    public function getEmpty()
    {
        return $this->container['empty'];
    }

    /**
     * Sets empty
     *
     * @param bool|null $empty empty
     *
     * @return $this
     */
    public function setEmpty($empty)
    {
        $this->container['empty'] = $empty;

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


