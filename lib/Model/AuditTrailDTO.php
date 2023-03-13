<?php
/**
 * AuditTrailDTO
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
 * AuditTrailDTO Class Doc Comment
 *
 * @category Class
 * @package  DocStudio\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuditTrailDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuditTrailDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'envelope_uuid' => 'string',
'date_time' => '\DateTime',
'user_uuid' => 'string',
'mailbox_uuid' => 'string',
'mailbox_name' => 'string',
'user_first_and_last_name' => 'string',
'operation' => 'string',
'ip' => 'string',
'browser' => 'string',
'os' => 'string',
'geolocation' => '\DocStudio\Client\Model\GeolocationInfoDTO',
'description' => 'string',
'latitude' => 'float',
'longitude' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'envelope_uuid' => 'uuid',
'date_time' => 'date-time',
'user_uuid' => 'uuid',
'mailbox_uuid' => 'uuid',
'mailbox_name' => null,
'user_first_and_last_name' => null,
'operation' => null,
'ip' => null,
'browser' => null,
'os' => null,
'geolocation' => null,
'description' => null,
'latitude' => 'float',
'longitude' => 'float'    ];

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
'date_time' => 'dateTime',
'user_uuid' => 'userUuid',
'mailbox_uuid' => 'mailboxUuid',
'mailbox_name' => 'mailboxName',
'user_first_and_last_name' => 'userFirstAndLastName',
'operation' => 'operation',
'ip' => 'ip',
'browser' => 'browser',
'os' => 'os',
'geolocation' => 'geolocation',
'description' => 'description',
'latitude' => 'latitude',
'longitude' => 'longitude'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'envelope_uuid' => 'setEnvelopeUuid',
'date_time' => 'setDateTime',
'user_uuid' => 'setUserUuid',
'mailbox_uuid' => 'setMailboxUuid',
'mailbox_name' => 'setMailboxName',
'user_first_and_last_name' => 'setUserFirstAndLastName',
'operation' => 'setOperation',
'ip' => 'setIp',
'browser' => 'setBrowser',
'os' => 'setOs',
'geolocation' => 'setGeolocation',
'description' => 'setDescription',
'latitude' => 'setLatitude',
'longitude' => 'setLongitude'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'envelope_uuid' => 'getEnvelopeUuid',
'date_time' => 'getDateTime',
'user_uuid' => 'getUserUuid',
'mailbox_uuid' => 'getMailboxUuid',
'mailbox_name' => 'getMailboxName',
'user_first_and_last_name' => 'getUserFirstAndLastName',
'operation' => 'getOperation',
'ip' => 'getIp',
'browser' => 'getBrowser',
'os' => 'getOs',
'geolocation' => 'getGeolocation',
'description' => 'getDescription',
'latitude' => 'getLatitude',
'longitude' => 'getLongitude'    ];

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

    const OPERATION_CREATE_DRAFT_ENV = 'CREATE_DRAFT_ENV';
const OPERATION_DRAFT_UPDATE = 'DRAFT_UPDATE';
const OPERATION_SEND_ENVELOPE = 'SEND_ENVELOPE';
const OPERATION_RECEIVE_ENVELOPE = 'RECEIVE_ENVELOPE';
const OPERATION_VIEW_ENVELOPE = 'VIEW_ENVELOPE';
const OPERATION_FILL_FIELDS = 'FILL_FIELDS';
const OPERATION_APPROVED = 'APPROVED';
const OPERATION_CANCEL = 'CANCEL';
const OPERATION_COMPLETED = 'COMPLETED';
const OPERATION_ARCHIVE = 'ARCHIVE';
const OPERATION_UNARCHIVE = 'UNARCHIVE';
const OPERATION_INVITATION_ACCEPT = 'INVITATION_ACCEPT';
const OPERATION_SIGN_DOCUMENTS = 'SIGN_DOCUMENTS';
const OPERATION_ENVELOPE_UPDATE = 'ENVELOPE_UPDATE';
const OPERATION_ENVELOPE_DELEGATE = 'ENVELOPE_DELEGATE';
const OPERATION_DOC_STAMP = 'DOC_STAMP';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperationAllowableValues()
    {
        return [
            self::OPERATION_CREATE_DRAFT_ENV,
self::OPERATION_DRAFT_UPDATE,
self::OPERATION_SEND_ENVELOPE,
self::OPERATION_RECEIVE_ENVELOPE,
self::OPERATION_VIEW_ENVELOPE,
self::OPERATION_FILL_FIELDS,
self::OPERATION_APPROVED,
self::OPERATION_CANCEL,
self::OPERATION_COMPLETED,
self::OPERATION_ARCHIVE,
self::OPERATION_UNARCHIVE,
self::OPERATION_INVITATION_ACCEPT,
self::OPERATION_SIGN_DOCUMENTS,
self::OPERATION_ENVELOPE_UPDATE,
self::OPERATION_ENVELOPE_DELEGATE,
self::OPERATION_DOC_STAMP,        ];
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
        $this->container['date_time'] = isset($data['date_time']) ? $data['date_time'] : null;
        $this->container['user_uuid'] = isset($data['user_uuid']) ? $data['user_uuid'] : null;
        $this->container['mailbox_uuid'] = isset($data['mailbox_uuid']) ? $data['mailbox_uuid'] : null;
        $this->container['mailbox_name'] = isset($data['mailbox_name']) ? $data['mailbox_name'] : null;
        $this->container['user_first_and_last_name'] = isset($data['user_first_and_last_name']) ? $data['user_first_and_last_name'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['browser'] = isset($data['browser']) ? $data['browser'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['geolocation'] = isset($data['geolocation']) ? $data['geolocation'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($this->container['operation']) && !in_array($this->container['operation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'operation', must be one of '%s'",
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
     * @param string $envelope_uuid envelope_uuid
     *
     * @return $this
     */
    public function setEnvelopeUuid($envelope_uuid)
    {
        $this->container['envelope_uuid'] = $envelope_uuid;

        return $this;
    }

    /**
     * Gets date_time
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->container['date_time'];
    }

    /**
     * Sets date_time
     *
     * @param \DateTime $date_time date_time
     *
     * @return $this
     */
    public function setDateTime($date_time)
    {
        $this->container['date_time'] = $date_time;

        return $this;
    }

    /**
     * Gets user_uuid
     *
     * @return string
     */
    public function getUserUuid()
    {
        return $this->container['user_uuid'];
    }

    /**
     * Sets user_uuid
     *
     * @param string $user_uuid user_uuid
     *
     * @return $this
     */
    public function setUserUuid($user_uuid)
    {
        $this->container['user_uuid'] = $user_uuid;

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
     * @param string $mailbox_uuid mailbox_uuid
     *
     * @return $this
     */
    public function setMailboxUuid($mailbox_uuid)
    {
        $this->container['mailbox_uuid'] = $mailbox_uuid;

        return $this;
    }

    /**
     * Gets mailbox_name
     *
     * @return string
     */
    public function getMailboxName()
    {
        return $this->container['mailbox_name'];
    }

    /**
     * Sets mailbox_name
     *
     * @param string $mailbox_name mailbox_name
     *
     * @return $this
     */
    public function setMailboxName($mailbox_name)
    {
        $this->container['mailbox_name'] = $mailbox_name;

        return $this;
    }

    /**
     * Gets user_first_and_last_name
     *
     * @return string
     */
    public function getUserFirstAndLastName()
    {
        return $this->container['user_first_and_last_name'];
    }

    /**
     * Sets user_first_and_last_name
     *
     * @param string $user_first_and_last_name user_first_and_last_name
     *
     * @return $this
     */
    public function setUserFirstAndLastName($user_first_and_last_name)
    {
        $this->container['user_first_and_last_name'] = $user_first_and_last_name;

        return $this;
    }

    /**
     * Gets operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     *
     * @param string $operation operation
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($operation) && !in_array($operation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operation'] = $operation;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string $ip ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets browser
     *
     * @return string
     */
    public function getBrowser()
    {
        return $this->container['browser'];
    }

    /**
     * Sets browser
     *
     * @param string $browser browser
     *
     * @return $this
     */
    public function setBrowser($browser)
    {
        $this->container['browser'] = $browser;

        return $this;
    }

    /**
     * Gets os
     *
     * @return string
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     *
     * @param string $os os
     *
     * @return $this
     */
    public function setOs($os)
    {
        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets geolocation
     *
     * @return \DocStudio\Client\Model\GeolocationInfoDTO
     */
    public function getGeolocation()
    {
        return $this->container['geolocation'];
    }

    /**
     * Sets geolocation
     *
     * @param \DocStudio\Client\Model\GeolocationInfoDTO $geolocation geolocation
     *
     * @return $this
     */
    public function setGeolocation($geolocation)
    {
        $this->container['geolocation'] = $geolocation;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param float $latitude latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param float $longitude longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

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
