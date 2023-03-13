<?php
/**
 * ChainEnvelopeDTO
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
 * ChainEnvelopeDTO Class Doc Comment
 *
 * @category Class
 * @package  DocStudio\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChainEnvelopeDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChainEnvelopeDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'envelope_uuid' => 'string',
'chain_uuid' => 'string',
'subject' => 'string',
'status' => 'string',
'template_name' => 'string',
'received_at' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'envelope_uuid' => 'uuid',
'chain_uuid' => 'uuid',
'subject' => null,
'status' => null,
'template_name' => null,
'received_at' => 'date-time'    ];

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
        'envelope_uuid' => 'envelopeUuid',
'chain_uuid' => 'chainUuid',
'subject' => 'subject',
'status' => 'status',
'template_name' => 'templateName',
'received_at' => 'receivedAt'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'envelope_uuid' => 'setEnvelopeUuid',
'chain_uuid' => 'setChainUuid',
'subject' => 'setSubject',
'status' => 'setStatus',
'template_name' => 'setTemplateName',
'received_at' => 'setReceivedAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'envelope_uuid' => 'getEnvelopeUuid',
'chain_uuid' => 'getChainUuid',
'subject' => 'getSubject',
'status' => 'getStatus',
'template_name' => 'getTemplateName',
'received_at' => 'getReceivedAt'    ];

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

    const STATUS_DRAFT = 'DRAFT';
const STATUS_SENT = 'SENT';
const STATUS_WAITING = 'WAITING';
const STATUS_COMPLETED = 'COMPLETED';
const STATUS_CANCELLED = 'CANCELLED';
const STATUS_EXPIRED = 'EXPIRED';
const STATUS_ON_APPROVAL = 'ON_APPROVAL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
self::STATUS_SENT,
self::STATUS_WAITING,
self::STATUS_COMPLETED,
self::STATUS_CANCELLED,
self::STATUS_EXPIRED,
self::STATUS_ON_APPROVAL,        ];
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
        $this->container['envelope_uuid'] = isset($data['envelope_uuid']) ? $data['envelope_uuid'] : null;
        $this->container['chain_uuid'] = isset($data['chain_uuid']) ? $data['chain_uuid'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['template_name'] = isset($data['template_name']) ? $data['template_name'] : null;
        $this->container['received_at'] = isset($data['received_at']) ? $data['received_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets envelope_uuid
     *
     * @return string
     */
    public function getEnvelopeUuid()
    {
        return $this->container['envelope_uuid'];
    }

    /**
     * Sets envelope_uuid
     *
     * @param string $envelope_uuid Envelope UUID
     *
     * @return $this
     */
    public function setEnvelopeUuid($envelope_uuid)
    {
        $this->container['envelope_uuid'] = $envelope_uuid;

        return $this;
    }

    /**
     * Gets chain_uuid
     *
     * @return string
     */
    public function getChainUuid()
    {
        return $this->container['chain_uuid'];
    }

    /**
     * Sets chain_uuid
     *
     * @param string $chain_uuid Chain UUID
     *
     * @return $this
     */
    public function setChainUuid($chain_uuid)
    {
        $this->container['chain_uuid'] = $chain_uuid;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject Envelope subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Envelope status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets template_name
     *
     * @return string
     */
    public function getTemplateName()
    {
        return $this->container['template_name'];
    }

    /**
     * Sets template_name
     *
     * @param string $template_name Envelope template name
     *
     * @return $this
     */
    public function setTemplateName($template_name)
    {
        $this->container['template_name'] = $template_name;

        return $this;
    }

    /**
     * Gets received_at
     *
     * @return \DateTime
     */
    public function getReceivedAt()
    {
        return $this->container['received_at'];
    }

    /**
     * Sets received_at
     *
     * @param \DateTime $received_at Envelope receive date
     *
     * @return $this
     */
    public function setReceivedAt($received_at)
    {
        $this->container['received_at'] = $received_at;

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
