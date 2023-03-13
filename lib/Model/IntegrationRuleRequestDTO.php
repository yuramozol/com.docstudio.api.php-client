<?php
/**
 * IntegrationRuleRequestDTO
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
 * IntegrationRuleRequestDTO Class Doc Comment
 *
 * @category Class
 * @description Request details
 * @package  DocStudio\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntegrationRuleRequestDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IntegrationRuleRequestDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mailbox_uuid' => 'string',
'template_uuid' => 'string',
'version_uuid' => 'string',
'in' => 'bool',
'naming_rule' => 'string',
'map' => 'string',
'source' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mailbox_uuid' => 'uuid',
'template_uuid' => 'uuid',
'version_uuid' => 'uuid',
'in' => null,
'naming_rule' => null,
'map' => null,
'source' => null    ];

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
'template_uuid' => 'templateUuid',
'version_uuid' => 'versionUuid',
'in' => 'in',
'naming_rule' => 'namingRule',
'map' => 'map',
'source' => 'source'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mailbox_uuid' => 'setMailboxUuid',
'template_uuid' => 'setTemplateUuid',
'version_uuid' => 'setVersionUuid',
'in' => 'setIn',
'naming_rule' => 'setNamingRule',
'map' => 'setMap',
'source' => 'setSource'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mailbox_uuid' => 'getMailboxUuid',
'template_uuid' => 'getTemplateUuid',
'version_uuid' => 'getVersionUuid',
'in' => 'getIn',
'naming_rule' => 'getNamingRule',
'map' => 'getMap',
'source' => 'getSource'    ];

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
        $this->container['mailbox_uuid'] = isset($data['mailbox_uuid']) ? $data['mailbox_uuid'] : null;
        $this->container['template_uuid'] = isset($data['template_uuid']) ? $data['template_uuid'] : null;
        $this->container['version_uuid'] = isset($data['version_uuid']) ? $data['version_uuid'] : null;
        $this->container['in'] = isset($data['in']) ? $data['in'] : null;
        $this->container['naming_rule'] = isset($data['naming_rule']) ? $data['naming_rule'] : null;
        $this->container['map'] = isset($data['map']) ? $data['map'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
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
        if ($this->container['template_uuid'] === null) {
            $invalidProperties[] = "'template_uuid' can't be null";
        }
        if ($this->container['version_uuid'] === null) {
            $invalidProperties[] = "'version_uuid' can't be null";
        }
        if ($this->container['map'] === null) {
            $invalidProperties[] = "'map' can't be null";
        }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
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
     * @param string $mailbox_uuid UUID of mailbox for applying rule for
     *
     * @return $this
     */
    public function setMailboxUuid($mailbox_uuid)
    {
        $this->container['mailbox_uuid'] = $mailbox_uuid;

        return $this;
    }

    /**
     * Gets template_uuid
     *
     * @return string
     */
    public function getTemplateUuid()
    {
        return $this->container['template_uuid'];
    }

    /**
     * Sets template_uuid
     *
     * @param string $template_uuid UUID of the template to use for generated envelope
     *
     * @return $this
     */
    public function setTemplateUuid($template_uuid)
    {
        $this->container['template_uuid'] = $template_uuid;

        return $this;
    }

    /**
     * Gets version_uuid
     *
     * @return string
     */
    public function getVersionUuid()
    {
        return $this->container['version_uuid'];
    }

    /**
     * Sets version_uuid
     *
     * @param string $version_uuid UUID of template version
     *
     * @return $this
     */
    public function setVersionUuid($version_uuid)
    {
        $this->container['version_uuid'] = $version_uuid;

        return $this;
    }

    /**
     * Gets in
     *
     * @return bool
     */
    public function getIn()
    {
        return $this->container['in'];
    }

    /**
     * Sets in
     *
     * @param bool $in Rule direction, true = IN, false = OUT
     *
     * @return $this
     */
    public function setIn($in)
    {
        $this->container['in'] = $in;

        return $this;
    }

    /**
     * Gets naming_rule
     *
     * @return string
     */
    public function getNamingRule()
    {
        return $this->container['naming_rule'];
    }

    /**
     * Sets naming_rule
     *
     * @param string $naming_rule Naming pattern rule. Tokens allowed: {mailboxUuid}, {envelopeUuid}, {randomNumber}, {templateUuid}, {date yyyy-MM-dd_HH-mm-ss}. Forbidden characters are: /:?*<>|
     *
     * @return $this
     */
    public function setNamingRule($naming_rule)
    {
        $this->container['naming_rule'] = $naming_rule;

        return $this;
    }

    /**
     * Gets map
     *
     * @return string
     */
    public function getMap()
    {
        return $this->container['map'];
    }

    /**
     * Sets map
     *
     * @param string $map XSLT map to use for transformation
     *
     * @return $this
     */
    public function setMap($map)
    {
        $this->container['map'] = $map;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source XML source to convert
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

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
