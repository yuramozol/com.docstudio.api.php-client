<?php
/**
 * LabelAssociationDTO
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
 * LabelAssociationDTO Class Doc Comment
 *
 * @category Class
 * @package  DocStudio\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LabelAssociationDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LabelAssociationDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'label_name' => 'string',
'label_uuid' => 'string',
'envelopes' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'label_name' => null,
'label_uuid' => 'uuid',
'envelopes' => 'uuid'    ];

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
        'label_name' => 'labelName',
'label_uuid' => 'labelUuid',
'envelopes' => 'envelopes'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label_name' => 'setLabelName',
'label_uuid' => 'setLabelUuid',
'envelopes' => 'setEnvelopes'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label_name' => 'getLabelName',
'label_uuid' => 'getLabelUuid',
'envelopes' => 'getEnvelopes'    ];

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
        $this->container['label_name'] = isset($data['label_name']) ? $data['label_name'] : null;
        $this->container['label_uuid'] = isset($data['label_uuid']) ? $data['label_uuid'] : null;
        $this->container['envelopes'] = isset($data['envelopes']) ? $data['envelopes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['envelopes'] === null) {
            $invalidProperties[] = "'envelopes' can't be null";
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
     * Gets label_name
     *
     * @return string
     */
    public function getLabelName()
    {
        return $this->container['label_name'];
    }

    /**
     * Sets label_name
     *
     * @param string $label_name Name of label to assign
     *
     * @return $this
     */
    public function setLabelName($label_name)
    {
        $this->container['label_name'] = $label_name;

        return $this;
    }

    /**
     * Gets label_uuid
     *
     * @return string
     */
    public function getLabelUuid()
    {
        return $this->container['label_uuid'];
    }

    /**
     * Sets label_uuid
     *
     * @param string $label_uuid UUID of label to assign
     *
     * @return $this
     */
    public function setLabelUuid($label_uuid)
    {
        $this->container['label_uuid'] = $label_uuid;

        return $this;
    }

    /**
     * Gets envelopes
     *
     * @return string[]
     */
    public function getEnvelopes()
    {
        return $this->container['envelopes'];
    }

    /**
     * Sets envelopes
     *
     * @param string[] $envelopes envelopes
     *
     * @return $this
     */
    public function setEnvelopes($envelopes)
    {
        $this->container['envelopes'] = $envelopes;

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
