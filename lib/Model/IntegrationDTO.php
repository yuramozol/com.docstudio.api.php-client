<?php
/**
 * IntegrationDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocStudio Api Documentation
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: R74.25
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.41
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * IntegrationDTO Class Doc Comment
 *
 * @category Class
 * @description Integration info
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntegrationDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IntegrationDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mailbox_uuid' => 'string',
'active' => 'bool',
'protocol' => 'string',
'protocol_settings' => '\Swagger\Client\Model\IntegrationProtocolSettingsDTO',
'default_rule' => '\Swagger\Client\Model\IntegrationDefaultRuleDTO'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mailbox_uuid' => 'uuid',
'active' => null,
'protocol' => null,
'protocol_settings' => null,
'default_rule' => null    ];

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
        'mailbox_uuid' => 'mailboxUuid',
'active' => 'active',
'protocol' => 'protocol',
'protocol_settings' => 'protocolSettings',
'default_rule' => 'defaultRule'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mailbox_uuid' => 'setMailboxUuid',
'active' => 'setActive',
'protocol' => 'setProtocol',
'protocol_settings' => 'setProtocolSettings',
'default_rule' => 'setDefaultRule'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mailbox_uuid' => 'getMailboxUuid',
'active' => 'getActive',
'protocol' => 'getProtocol',
'protocol_settings' => 'getProtocolSettings',
'default_rule' => 'getDefaultRule'    ];

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

    const PROTOCOL_SFTP = 'sftp';
const PROTOCOL_SOAP = 'soap';
const PROTOCOL_AS2 = 'as2';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_SFTP,
self::PROTOCOL_SOAP,
self::PROTOCOL_AS2,        ];
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
        $this->container['mailbox_uuid'] = isset($data['mailbox_uuid']) ? $data['mailbox_uuid'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['protocol_settings'] = isset($data['protocol_settings']) ? $data['protocol_settings'] : null;
        $this->container['default_rule'] = isset($data['default_rule']) ? $data['default_rule'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['mailbox_uuid'] === null) {
            $invalidProperties[] = "'mailbox_uuid' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        $allowedValues = $this->getProtocolAllowableValues();
        if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['protocol_settings'] === null) {
            $invalidProperties[] = "'protocol_settings' can't be null";
        }
        if ($this->container['default_rule'] === null) {
            $invalidProperties[] = "'default_rule' can't be null";
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
     * @param string $mailbox_uuid Mailbox uuid
     *
     * @return $this
     */
    public function setMailboxUuid($mailbox_uuid)
    {
        $this->container['mailbox_uuid'] = $mailbox_uuid;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active Integration status
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets protocol
     *
     * @return string
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     *
     * @param string $protocol Integration protocol
     *
     * @return $this
     */
    public function setProtocol($protocol)
    {
        $allowedValues = $this->getProtocolAllowableValues();
        if (!in_array($protocol, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'protocol', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['protocol'] = $protocol;

        return $this;
    }

    /**
     * Gets protocol_settings
     *
     * @return \Swagger\Client\Model\IntegrationProtocolSettingsDTO
     */
    public function getProtocolSettings()
    {
        return $this->container['protocol_settings'];
    }

    /**
     * Sets protocol_settings
     *
     * @param \Swagger\Client\Model\IntegrationProtocolSettingsDTO $protocol_settings protocol_settings
     *
     * @return $this
     */
    public function setProtocolSettings($protocol_settings)
    {
        $this->container['protocol_settings'] = $protocol_settings;

        return $this;
    }

    /**
     * Gets default_rule
     *
     * @return \Swagger\Client\Model\IntegrationDefaultRuleDTO
     */
    public function getDefaultRule()
    {
        return $this->container['default_rule'];
    }

    /**
     * Sets default_rule
     *
     * @param \Swagger\Client\Model\IntegrationDefaultRuleDTO $default_rule default_rule
     *
     * @return $this
     */
    public function setDefaultRule($default_rule)
    {
        $this->container['default_rule'] = $default_rule;

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
