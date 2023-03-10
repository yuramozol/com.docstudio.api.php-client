<?php
/**
 * SearchEnvelopesDTO
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
 * SearchEnvelopesDTO Class Doc Comment
 *
 * @category Class
 * @description Search parameters
 * @package  DocStudio\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchEnvelopesDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SearchEnvelopesDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'label' => 'string[]',
'scope' => 'string[]',
'status' => 'string[]',
'subject' => 'string',
'receive_date_from' => '\DateTime',
'receive_date_to' => '\DateTime',
'expire_date_from' => '\DateTime',
'expire_date_to' => '\DateTime',
'archived' => 'bool',
'template' => 'string[]',
'active_role' => 'string[]',
'sender' => 'string[]',
'recipient' => 'string[]',
'sort_field' => 'string',
'sort' => 'string',
'search_fields' => '\DocStudio\Client\Model\SearchFieldValueDTO[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'label' => null,
'scope' => null,
'status' => null,
'subject' => null,
'receive_date_from' => 'date-time',
'receive_date_to' => 'date-time',
'expire_date_from' => 'date-time',
'expire_date_to' => 'date-time',
'archived' => null,
'template' => 'uuid',
'active_role' => null,
'sender' => 'uuid',
'recipient' => 'uuid',
'sort_field' => null,
'sort' => null,
'search_fields' => null    ];

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
        'label' => 'label',
'scope' => 'scope',
'status' => 'status',
'subject' => 'subject',
'receive_date_from' => 'receiveDateFrom',
'receive_date_to' => 'receiveDateTo',
'expire_date_from' => 'expireDateFrom',
'expire_date_to' => 'expireDateTo',
'archived' => 'archived',
'template' => 'template',
'active_role' => 'activeRole',
'sender' => 'sender',
'recipient' => 'recipient',
'sort_field' => 'sortField',
'sort' => 'sort',
'search_fields' => 'searchFields'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label' => 'setLabel',
'scope' => 'setScope',
'status' => 'setStatus',
'subject' => 'setSubject',
'receive_date_from' => 'setReceiveDateFrom',
'receive_date_to' => 'setReceiveDateTo',
'expire_date_from' => 'setExpireDateFrom',
'expire_date_to' => 'setExpireDateTo',
'archived' => 'setArchived',
'template' => 'setTemplate',
'active_role' => 'setActiveRole',
'sender' => 'setSender',
'recipient' => 'setRecipient',
'sort_field' => 'setSortField',
'sort' => 'setSort',
'search_fields' => 'setSearchFields'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label' => 'getLabel',
'scope' => 'getScope',
'status' => 'getStatus',
'subject' => 'getSubject',
'receive_date_from' => 'getReceiveDateFrom',
'receive_date_to' => 'getReceiveDateTo',
'expire_date_from' => 'getExpireDateFrom',
'expire_date_to' => 'getExpireDateTo',
'archived' => 'getArchived',
'template' => 'getTemplate',
'active_role' => 'getActiveRole',
'sender' => 'getSender',
'recipient' => 'getRecipient',
'sort_field' => 'getSortField',
'sort' => 'getSort',
'search_fields' => 'getSearchFields'    ];

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

    const SCOPE_INBOX = 'inbox';
const SCOPE_OUTBOX = 'outbox';
const SCOPE_DRAFT = 'draft';
const STATUS_DRAFT = 'DRAFT';
const STATUS_SENT = 'SENT';
const STATUS_WAITING = 'WAITING';
const STATUS_COMPLETED = 'COMPLETED';
const STATUS_CANCELLED = 'CANCELLED';
const STATUS_EXPIRED = 'EXPIRED';
const STATUS_ON_APPROVAL = 'ON_APPROVAL';
const SORT_DESC = 'desc';
const SORT_ASC = 'asc';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getScopeAllowableValues()
    {
        return [
            self::SCOPE_INBOX,
self::SCOPE_OUTBOX,
self::SCOPE_DRAFT,        ];
    }
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSortAllowableValues()
    {
        return [
            self::SORT_DESC,
self::SORT_ASC,        ];
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
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['receive_date_from'] = isset($data['receive_date_from']) ? $data['receive_date_from'] : null;
        $this->container['receive_date_to'] = isset($data['receive_date_to']) ? $data['receive_date_to'] : null;
        $this->container['expire_date_from'] = isset($data['expire_date_from']) ? $data['expire_date_from'] : null;
        $this->container['expire_date_to'] = isset($data['expire_date_to']) ? $data['expire_date_to'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['active_role'] = isset($data['active_role']) ? $data['active_role'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['sort_field'] = isset($data['sort_field']) ? $data['sort_field'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['search_fields'] = isset($data['search_fields']) ? $data['search_fields'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSortAllowableValues();
        if (!is_null($this->container['sort']) && !in_array($this->container['sort'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sort', must be one of '%s'",
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
     * Gets label
     *
     * @return string[]
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string[] $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string[]
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string[] $scope scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $allowedValues = $this->getScopeAllowableValues();
        if (!is_null($scope) && array_diff($scope, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'scope', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string[]
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string[] $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && array_diff($status, $allowedValues)) {
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
     * Gets receive_date_from
     *
     * @return \DateTime
     */
    public function getReceiveDateFrom()
    {
        return $this->container['receive_date_from'];
    }

    /**
     * Sets receive_date_from
     *
     * @param \DateTime $receive_date_from Receive date from
     *
     * @return $this
     */
    public function setReceiveDateFrom($receive_date_from)
    {
        $this->container['receive_date_from'] = $receive_date_from;

        return $this;
    }

    /**
     * Gets receive_date_to
     *
     * @return \DateTime
     */
    public function getReceiveDateTo()
    {
        return $this->container['receive_date_to'];
    }

    /**
     * Sets receive_date_to
     *
     * @param \DateTime $receive_date_to Receive date to
     *
     * @return $this
     */
    public function setReceiveDateTo($receive_date_to)
    {
        $this->container['receive_date_to'] = $receive_date_to;

        return $this;
    }

    /**
     * Gets expire_date_from
     *
     * @return \DateTime
     */
    public function getExpireDateFrom()
    {
        return $this->container['expire_date_from'];
    }

    /**
     * Sets expire_date_from
     *
     * @param \DateTime $expire_date_from Expire date from
     *
     * @return $this
     */
    public function setExpireDateFrom($expire_date_from)
    {
        $this->container['expire_date_from'] = $expire_date_from;

        return $this;
    }

    /**
     * Gets expire_date_to
     *
     * @return \DateTime
     */
    public function getExpireDateTo()
    {
        return $this->container['expire_date_to'];
    }

    /**
     * Sets expire_date_to
     *
     * @param \DateTime $expire_date_to Expire date to
     *
     * @return $this
     */
    public function setExpireDateTo($expire_date_to)
    {
        $this->container['expire_date_to'] = $expire_date_to;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool $archived Archived
     *
     * @return $this
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets template
     *
     * @return string[]
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param string[] $template template
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets active_role
     *
     * @return string[]
     */
    public function getActiveRole()
    {
        return $this->container['active_role'];
    }

    /**
     * Sets active_role
     *
     * @param string[] $active_role active_role
     *
     * @return $this
     */
    public function setActiveRole($active_role)
    {
        $this->container['active_role'] = $active_role;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return string[]
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param string[] $sender sender
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return string[]
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param string[] $recipient recipient
     *
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets sort_field
     *
     * @return string
     */
    public function getSortField()
    {
        return $this->container['sort_field'];
    }

    /**
     * Sets sort_field
     *
     * @param string $sort_field Field for sorting ('createdAt' by default)
     *
     * @return $this
     */
    public function setSortField($sort_field)
    {
        $this->container['sort_field'] = $sort_field;

        return $this;
    }

    /**
     * Gets sort
     *
     * @return string
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param string $sort Sort order, asc or desc
     *
     * @return $this
     */
    public function setSort($sort)
    {
        $allowedValues = $this->getSortAllowableValues();
        if (!is_null($sort) && !in_array($sort, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sort', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets search_fields
     *
     * @return \DocStudio\Client\Model\SearchFieldValueDTO[]
     */
    public function getSearchFields()
    {
        return $this->container['search_fields'];
    }

    /**
     * Sets search_fields
     *
     * @param \DocStudio\Client\Model\SearchFieldValueDTO[] $search_fields search_fields
     *
     * @return $this
     */
    public function setSearchFields($search_fields)
    {
        $this->container['search_fields'] = $search_fields;

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
