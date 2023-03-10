<?php
/**
 * TemplateRestriction
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
 * TemplateRestriction Class Doc Comment
 *
 * @category Class
 * @description Template Restrictions
 * @package  DocStudio\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TemplateRestriction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TemplateRestriction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'image' => '\DocStudio\Client\Model\ImageRestriction',
'logo' => '\DocStudio\Client\Model\LogoImageRestriction',
'expire_after_days' => 'int',
'notify_in_days' => 'int',
'default_page_size' => 'string',
'supported_page_sizes' => '\DocStudio\Client\Model\DocumentPageSizeDTO[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'image' => null,
'logo' => null,
'expire_after_days' => 'int32',
'notify_in_days' => 'int32',
'default_page_size' => null,
'supported_page_sizes' => null    ];

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
        'image' => 'image',
'logo' => 'logo',
'expire_after_days' => 'expireAfterDays',
'notify_in_days' => 'notifyInDays',
'default_page_size' => 'defaultPageSize',
'supported_page_sizes' => 'supportedPageSizes'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'image' => 'setImage',
'logo' => 'setLogo',
'expire_after_days' => 'setExpireAfterDays',
'notify_in_days' => 'setNotifyInDays',
'default_page_size' => 'setDefaultPageSize',
'supported_page_sizes' => 'setSupportedPageSizes'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'image' => 'getImage',
'logo' => 'getLogo',
'expire_after_days' => 'getExpireAfterDays',
'notify_in_days' => 'getNotifyInDays',
'default_page_size' => 'getDefaultPageSize',
'supported_page_sizes' => 'getSupportedPageSizes'    ];

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

    const DEFAULT_PAGE_SIZE_A2 = 'A2';
const DEFAULT_PAGE_SIZE_A3 = 'A3';
const DEFAULT_PAGE_SIZE_A4 = 'A4';
const DEFAULT_PAGE_SIZE_A5 = 'A5';
const DEFAULT_PAGE_SIZE_LETTER = 'letter';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDefaultPageSizeAllowableValues()
    {
        return [
            self::DEFAULT_PAGE_SIZE_A2,
self::DEFAULT_PAGE_SIZE_A3,
self::DEFAULT_PAGE_SIZE_A4,
self::DEFAULT_PAGE_SIZE_A5,
self::DEFAULT_PAGE_SIZE_LETTER,        ];
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
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['expire_after_days'] = isset($data['expire_after_days']) ? $data['expire_after_days'] : null;
        $this->container['notify_in_days'] = isset($data['notify_in_days']) ? $data['notify_in_days'] : null;
        $this->container['default_page_size'] = isset($data['default_page_size']) ? $data['default_page_size'] : null;
        $this->container['supported_page_sizes'] = isset($data['supported_page_sizes']) ? $data['supported_page_sizes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDefaultPageSizeAllowableValues();
        if (!is_null($this->container['default_page_size']) && !in_array($this->container['default_page_size'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'default_page_size', must be one of '%s'",
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
     * Gets image
     *
     * @return \DocStudio\Client\Model\ImageRestriction
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \DocStudio\Client\Model\ImageRestriction $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return \DocStudio\Client\Model\LogoImageRestriction
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param \DocStudio\Client\Model\LogoImageRestriction $logo logo
     *
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets expire_after_days
     *
     * @return int
     */
    public function getExpireAfterDays()
    {
        return $this->container['expire_after_days'];
    }

    /**
     * Sets expire_after_days
     *
     * @param int $expire_after_days expire_after_days
     *
     * @return $this
     */
    public function setExpireAfterDays($expire_after_days)
    {
        $this->container['expire_after_days'] = $expire_after_days;

        return $this;
    }

    /**
     * Gets notify_in_days
     *
     * @return int
     */
    public function getNotifyInDays()
    {
        return $this->container['notify_in_days'];
    }

    /**
     * Sets notify_in_days
     *
     * @param int $notify_in_days notify_in_days
     *
     * @return $this
     */
    public function setNotifyInDays($notify_in_days)
    {
        $this->container['notify_in_days'] = $notify_in_days;

        return $this;
    }

    /**
     * Gets default_page_size
     *
     * @return string
     */
    public function getDefaultPageSize()
    {
        return $this->container['default_page_size'];
    }

    /**
     * Sets default_page_size
     *
     * @param string $default_page_size default_page_size
     *
     * @return $this
     */
    public function setDefaultPageSize($default_page_size)
    {
        $allowedValues = $this->getDefaultPageSizeAllowableValues();
        if (!is_null($default_page_size) && !in_array($default_page_size, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'default_page_size', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['default_page_size'] = $default_page_size;

        return $this;
    }

    /**
     * Gets supported_page_sizes
     *
     * @return \DocStudio\Client\Model\DocumentPageSizeDTO[]
     */
    public function getSupportedPageSizes()
    {
        return $this->container['supported_page_sizes'];
    }

    /**
     * Sets supported_page_sizes
     *
     * @param \DocStudio\Client\Model\DocumentPageSizeDTO[] $supported_page_sizes supported_page_sizes
     *
     * @return $this
     */
    public function setSupportedPageSizes($supported_page_sizes)
    {
        $this->container['supported_page_sizes'] = $supported_page_sizes;

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
