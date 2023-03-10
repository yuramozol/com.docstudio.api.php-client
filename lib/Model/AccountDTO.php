<?php
/**
 * AccountDTO
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
 * AccountDTO Class Doc Comment
 *
 * @category Class
 * @package  DocStudio\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uuid' => 'string',
'name' => 'string',
'inn' => 'string',
'created_at' => '\DateTime',
'modified_at' => '\DateTime',
'mailboxes' => '\DocStudio\Client\Model\MailboxSimpleDTO[]',
'users' => '\DocStudio\Client\Model\AccountUserDTO[]',
'logo' => 'string',
'brand' => 'string',
'currency' => 'string',
'timezone' => 'string',
'create_personal_mailbox' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'uuid' => 'uuid',
'name' => null,
'inn' => null,
'created_at' => 'date-time',
'modified_at' => 'date-time',
'mailboxes' => null,
'users' => null,
'logo' => null,
'brand' => null,
'currency' => null,
'timezone' => null,
'create_personal_mailbox' => null    ];

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
        'uuid' => 'uuid',
'name' => 'name',
'inn' => 'inn',
'created_at' => 'createdAt',
'modified_at' => 'modifiedAt',
'mailboxes' => 'mailboxes',
'users' => 'users',
'logo' => 'logo',
'brand' => 'brand',
'currency' => 'currency',
'timezone' => 'timezone',
'create_personal_mailbox' => 'createPersonalMailbox'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
'name' => 'setName',
'inn' => 'setInn',
'created_at' => 'setCreatedAt',
'modified_at' => 'setModifiedAt',
'mailboxes' => 'setMailboxes',
'users' => 'setUsers',
'logo' => 'setLogo',
'brand' => 'setBrand',
'currency' => 'setCurrency',
'timezone' => 'setTimezone',
'create_personal_mailbox' => 'setCreatePersonalMailbox'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
'name' => 'getName',
'inn' => 'getInn',
'created_at' => 'getCreatedAt',
'modified_at' => 'getModifiedAt',
'mailboxes' => 'getMailboxes',
'users' => 'getUsers',
'logo' => 'getLogo',
'brand' => 'getBrand',
'currency' => 'getCurrency',
'timezone' => 'getTimezone',
'create_personal_mailbox' => 'getCreatePersonalMailbox'    ];

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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['inn'] = isset($data['inn']) ? $data['inn'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['modified_at'] = isset($data['modified_at']) ? $data['modified_at'] : null;
        $this->container['mailboxes'] = isset($data['mailboxes']) ? $data['mailboxes'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['create_personal_mailbox'] = isset($data['create_personal_mailbox']) ? $data['create_personal_mailbox'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid Account UUID
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Account Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets inn
     *
     * @return string
     */
    public function getInn()
    {
        return $this->container['inn'];
    }

    /**
     * Sets inn
     *
     * @param string $inn Account TAX number
     *
     * @return $this
     */
    public function setInn($inn)
    {
        $this->container['inn'] = $inn;

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
     * @param \DateTime $created_at Account creation date
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets modified_at
     *
     * @return \DateTime
     */
    public function getModifiedAt()
    {
        return $this->container['modified_at'];
    }

    /**
     * Sets modified_at
     *
     * @param \DateTime $modified_at Account last modification date
     *
     * @return $this
     */
    public function setModifiedAt($modified_at)
    {
        $this->container['modified_at'] = $modified_at;

        return $this;
    }

    /**
     * Gets mailboxes
     *
     * @return \DocStudio\Client\Model\MailboxSimpleDTO[]
     */
    public function getMailboxes()
    {
        return $this->container['mailboxes'];
    }

    /**
     * Sets mailboxes
     *
     * @param \DocStudio\Client\Model\MailboxSimpleDTO[] $mailboxes mailboxes
     *
     * @return $this
     */
    public function setMailboxes($mailboxes)
    {
        $this->container['mailboxes'] = $mailboxes;

        return $this;
    }

    /**
     * Gets users
     *
     * @return \DocStudio\Client\Model\AccountUserDTO[]
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param \DocStudio\Client\Model\AccountUserDTO[] $users users
     *
     * @return $this
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string $logo Account logo in base64 format (svg, png, jpeg)
     *
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand Account brand logo in base64 format (svg, png, jpeg)
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Account currency for billing purposes
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone Account timezone for billing purposes
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets create_personal_mailbox
     *
     * @return bool
     */
    public function getCreatePersonalMailbox()
    {
        return $this->container['create_personal_mailbox'];
    }

    /**
     * Sets create_personal_mailbox
     *
     * @param bool $create_personal_mailbox Create personal mailbox for self-registered corporate user
     *
     * @return $this
     */
    public function setCreatePersonalMailbox($create_personal_mailbox)
    {
        $this->container['create_personal_mailbox'] = $create_personal_mailbox;

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
