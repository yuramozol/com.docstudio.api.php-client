<?php
/**
 * UserNotificationResponseDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocStudio\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocStudio Api Documentation
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: R75.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.41
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocStudio\Client\Model;

use \ArrayAccess;
use \DocStudio\Client\ObjectSerializer;

/**
 * UserNotificationResponseDTO Class Doc Comment
 *
 * @category Class
 * @description Data records
 * @package  DocStudio\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserNotificationResponseDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserNotificationResponseDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'type' => 'string',
'code' => 'string',
'data' => 'object',
'created_at' => '\DateTime',
'mailbox_uuid' => 'string',
'account_uuid' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'type' => null,
'code' => null,
'data' => null,
'created_at' => 'date-time',
'mailbox_uuid' => 'uuid',
'account_uuid' => 'uuid'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'type' => 'type',
'code' => 'code',
'data' => 'data',
'created_at' => 'createdAt',
'mailbox_uuid' => 'mailboxUuid',
'account_uuid' => 'accountUuid'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'type' => 'setType',
'code' => 'setCode',
'data' => 'setData',
'created_at' => 'setCreatedAt',
'mailbox_uuid' => 'setMailboxUuid',
'account_uuid' => 'setAccountUuid'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'type' => 'getType',
'code' => 'getCode',
'data' => 'getData',
'created_at' => 'getCreatedAt',
'mailbox_uuid' => 'getMailboxUuid',
'account_uuid' => 'getAccountUuid'    ];

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
        return self::$swaggerModelName;
    }

    const TYPE_USER = 'user';
const TYPE_ACCOUNT = 'account';
const TYPE_MAILBOX = 'mailbox';
const CODE__1 = '1';
const CODE__101 = '101';
const CODE__102 = '102';
const CODE__103 = '103';
const CODE__104 = '104';
const CODE__105 = '105';
const CODE__106 = '106';
const CODE__201 = '201';
const CODE__202 = '202';
const CODE__301 = '301';
const CODE__302 = '302';
const CODE__303 = '303';
const CODE__304 = '304';
const CODE__305 = '305';
const CODE__306 = '306';
const CODE__307 = '307';
const CODE__308 = '308';
const CODE__309 = '309';
const CODE__310 = '310';
const CODE__311 = '311';
const CODE__312 = '312';
const CODE__313 = '313';
const CODE__314 = '314';
const CODE__315 = '315';
const CODE__401 = '401';
const CODE__402 = '402';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_USER,
self::TYPE_ACCOUNT,
self::TYPE_MAILBOX,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE__1,
self::CODE__101,
self::CODE__102,
self::CODE__103,
self::CODE__104,
self::CODE__105,
self::CODE__106,
self::CODE__201,
self::CODE__202,
self::CODE__301,
self::CODE__302,
self::CODE__303,
self::CODE__304,
self::CODE__305,
self::CODE__306,
self::CODE__307,
self::CODE__308,
self::CODE__309,
self::CODE__310,
self::CODE__311,
self::CODE__312,
self::CODE__313,
self::CODE__314,
self::CODE__315,
self::CODE__401,
self::CODE__402,        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['mailbox_uuid'] = isset($data['mailbox_uuid']) ? $data['mailbox_uuid'] : null;
        $this->container['account_uuid'] = isset($data['account_uuid']) ? $data['account_uuid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($this->container['code']) && !in_array($this->container['code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'code', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
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
     * @param string $id Notification uuid
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Notification type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Notification code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $allowedValues = $this->getCodeAllowableValues();
        if (!in_array($code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets data
     *
     * @return object
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param object $data Notification data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

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
     * @param \DateTime $created_at Notification date
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets mailbox_uuid
     *
     * @return string
     */
    public function getMailboxUuid()
    {
        return $this->container['mailbox_uuid'];
    }

    /**
     * Sets mailbox_uuid
     *
     * @param string $mailbox_uuid Mailbox UUID for mailbox-wide notifications
     *
     * @return $this
     */
    public function setMailboxUuid($mailbox_uuid)
    {
        $this->container['mailbox_uuid'] = $mailbox_uuid;

        return $this;
    }

    /**
     * Gets account_uuid
     *
     * @return string
     */
    public function getAccountUuid()
    {
        return $this->container['account_uuid'];
    }

    /**
     * Sets account_uuid
     *
     * @param string $account_uuid Account UUID for account-wide notifications
     *
     * @return $this
     */
    public function setAccountUuid($account_uuid)
    {
        $this->container['account_uuid'] = $account_uuid;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
