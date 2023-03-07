<?php
/**
 * AppLinks
 *
 * PHP version 5
 *
 * @category Class
 * @package  Docstudio\Client
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

namespace Docstudio\Client\Model;

use \ArrayAccess;
use \Docstudio\Client\ObjectSerializer;

/**
 * AppLinks Class Doc Comment
 *
 * @category Class
 * @description Application Links
 * @package  Docstudio\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppLinks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AppLinks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'official_url' => 'string',
'base_url' => 'string',
'docs_url' => 'string',
'error_list_url' => 'string',
'terms_and_conditions' => 'string',
'privacy_policy' => 'string',
'youtube_url' => 'string',
'video_url' => 'string',
'whats_new_url' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'official_url' => null,
'base_url' => null,
'docs_url' => null,
'error_list_url' => null,
'terms_and_conditions' => null,
'privacy_policy' => null,
'youtube_url' => null,
'video_url' => null,
'whats_new_url' => null    ];

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
        'official_url' => 'officialUrl',
'base_url' => 'baseUrl',
'docs_url' => 'docsUrl',
'error_list_url' => 'errorListUrl',
'terms_and_conditions' => 'termsAndConditions',
'privacy_policy' => 'privacyPolicy',
'youtube_url' => 'youtubeUrl',
'video_url' => 'videoUrl',
'whats_new_url' => 'whatsNewUrl'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'official_url' => 'setOfficialUrl',
'base_url' => 'setBaseUrl',
'docs_url' => 'setDocsUrl',
'error_list_url' => 'setErrorListUrl',
'terms_and_conditions' => 'setTermsAndConditions',
'privacy_policy' => 'setPrivacyPolicy',
'youtube_url' => 'setYoutubeUrl',
'video_url' => 'setVideoUrl',
'whats_new_url' => 'setWhatsNewUrl'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'official_url' => 'getOfficialUrl',
'base_url' => 'getBaseUrl',
'docs_url' => 'getDocsUrl',
'error_list_url' => 'getErrorListUrl',
'terms_and_conditions' => 'getTermsAndConditions',
'privacy_policy' => 'getPrivacyPolicy',
'youtube_url' => 'getYoutubeUrl',
'video_url' => 'getVideoUrl',
'whats_new_url' => 'getWhatsNewUrl'    ];

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
        $this->container['official_url'] = isset($data['official_url']) ? $data['official_url'] : null;
        $this->container['base_url'] = isset($data['base_url']) ? $data['base_url'] : null;
        $this->container['docs_url'] = isset($data['docs_url']) ? $data['docs_url'] : null;
        $this->container['error_list_url'] = isset($data['error_list_url']) ? $data['error_list_url'] : null;
        $this->container['terms_and_conditions'] = isset($data['terms_and_conditions']) ? $data['terms_and_conditions'] : null;
        $this->container['privacy_policy'] = isset($data['privacy_policy']) ? $data['privacy_policy'] : null;
        $this->container['youtube_url'] = isset($data['youtube_url']) ? $data['youtube_url'] : null;
        $this->container['video_url'] = isset($data['video_url']) ? $data['video_url'] : null;
        $this->container['whats_new_url'] = isset($data['whats_new_url']) ? $data['whats_new_url'] : null;
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
     * Gets official_url
     *
     * @return string
     */
    public function getOfficialUrl()
    {
        return $this->container['official_url'];
    }

    /**
     * Sets official_url
     *
     * @param string $official_url official_url
     *
     * @return $this
     */
    public function setOfficialUrl($official_url)
    {
        $this->container['official_url'] = $official_url;

        return $this;
    }

    /**
     * Gets base_url
     *
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->container['base_url'];
    }

    /**
     * Sets base_url
     *
     * @param string $base_url base_url
     *
     * @return $this
     */
    public function setBaseUrl($base_url)
    {
        $this->container['base_url'] = $base_url;

        return $this;
    }

    /**
     * Gets docs_url
     *
     * @return string
     */
    public function getDocsUrl()
    {
        return $this->container['docs_url'];
    }

    /**
     * Sets docs_url
     *
     * @param string $docs_url docs_url
     *
     * @return $this
     */
    public function setDocsUrl($docs_url)
    {
        $this->container['docs_url'] = $docs_url;

        return $this;
    }

    /**
     * Gets error_list_url
     *
     * @return string
     */
    public function getErrorListUrl()
    {
        return $this->container['error_list_url'];
    }

    /**
     * Sets error_list_url
     *
     * @param string $error_list_url error_list_url
     *
     * @return $this
     */
    public function setErrorListUrl($error_list_url)
    {
        $this->container['error_list_url'] = $error_list_url;

        return $this;
    }

    /**
     * Gets terms_and_conditions
     *
     * @return string
     */
    public function getTermsAndConditions()
    {
        return $this->container['terms_and_conditions'];
    }

    /**
     * Sets terms_and_conditions
     *
     * @param string $terms_and_conditions terms_and_conditions
     *
     * @return $this
     */
    public function setTermsAndConditions($terms_and_conditions)
    {
        $this->container['terms_and_conditions'] = $terms_and_conditions;

        return $this;
    }

    /**
     * Gets privacy_policy
     *
     * @return string
     */
    public function getPrivacyPolicy()
    {
        return $this->container['privacy_policy'];
    }

    /**
     * Sets privacy_policy
     *
     * @param string $privacy_policy privacy_policy
     *
     * @return $this
     */
    public function setPrivacyPolicy($privacy_policy)
    {
        $this->container['privacy_policy'] = $privacy_policy;

        return $this;
    }

    /**
     * Gets youtube_url
     *
     * @return string
     */
    public function getYoutubeUrl()
    {
        return $this->container['youtube_url'];
    }

    /**
     * Sets youtube_url
     *
     * @param string $youtube_url youtube_url
     *
     * @return $this
     */
    public function setYoutubeUrl($youtube_url)
    {
        $this->container['youtube_url'] = $youtube_url;

        return $this;
    }

    /**
     * Gets video_url
     *
     * @return string
     */
    public function getVideoUrl()
    {
        return $this->container['video_url'];
    }

    /**
     * Sets video_url
     *
     * @param string $video_url video_url
     *
     * @return $this
     */
    public function setVideoUrl($video_url)
    {
        $this->container['video_url'] = $video_url;

        return $this;
    }

    /**
     * Gets whats_new_url
     *
     * @return string
     */
    public function getWhatsNewUrl()
    {
        return $this->container['whats_new_url'];
    }

    /**
     * Sets whats_new_url
     *
     * @param string $whats_new_url whats_new_url
     *
     * @return $this
     */
    public function setWhatsNewUrl($whats_new_url)
    {
        $this->container['whats_new_url'] = $whats_new_url;

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
