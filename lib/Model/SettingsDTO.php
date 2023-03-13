<?php
/**
 * SettingsDTO
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
 * SettingsDTO Class Doc Comment
 *
 * @category Class
 * @package  DocStudio\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SettingsDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SettingsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'build_version' => 'string',
'application_name' => 'string',
'theme' => 'string',
'pod_name' => 'string',
'links' => '\DocStudio\Client\Model\AppLinks',
'locales' => '\DocStudio\Client\Model\AppLocales',
'test_mode' => 'bool',
'envelope' => '\DocStudio\Client\Model\EnvelopeRestrictions',
'template' => '\DocStudio\Client\Model\TemplateRestriction',
'user' => '\DocStudio\Client\Model\UserProperties',
'page_scripts' => '\DocStudio\Client\Model\AppPageScripts',
'chunk_upload' => '\DocStudio\Client\Model\ChunkUploadProps',
'crypto' => '\DocStudio\Client\Model\CryptoProperties',
'logos_properties' => '\DocStudio\Client\Model\LogosProperties',
'email_properties' => '\DocStudio\Client\Model\EmailProperties',
'billing' => '\DocStudio\Client\Model\BillingProperties',
'sso' => '\DocStudio\Client\Model\SsoProperties',
'geolocation' => '\DocStudio\Client\Model\GeolocationProperties',
'google_maps_api_key' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'build_version' => null,
'application_name' => null,
'theme' => null,
'pod_name' => null,
'links' => null,
'locales' => null,
'test_mode' => null,
'envelope' => null,
'template' => null,
'user' => null,
'page_scripts' => null,
'chunk_upload' => null,
'crypto' => null,
'logos_properties' => null,
'email_properties' => null,
'billing' => null,
'sso' => null,
'geolocation' => null,
'google_maps_api_key' => null    ];

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
        'build_version' => 'buildVersion',
'application_name' => 'applicationName',
'theme' => 'theme',
'pod_name' => 'podName',
'links' => 'links',
'locales' => 'locales',
'test_mode' => 'testMode',
'envelope' => 'envelope',
'template' => 'template',
'user' => 'user',
'page_scripts' => 'pageScripts',
'chunk_upload' => 'chunkUpload',
'crypto' => 'crypto',
'logos_properties' => 'logosProperties',
'email_properties' => 'emailProperties',
'billing' => 'billing',
'sso' => 'sso',
'geolocation' => 'geolocation',
'google_maps_api_key' => 'googleMapsApiKey'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'build_version' => 'setBuildVersion',
'application_name' => 'setApplicationName',
'theme' => 'setTheme',
'pod_name' => 'setPodName',
'links' => 'setLinks',
'locales' => 'setLocales',
'test_mode' => 'setTestMode',
'envelope' => 'setEnvelope',
'template' => 'setTemplate',
'user' => 'setUser',
'page_scripts' => 'setPageScripts',
'chunk_upload' => 'setChunkUpload',
'crypto' => 'setCrypto',
'logos_properties' => 'setLogosProperties',
'email_properties' => 'setEmailProperties',
'billing' => 'setBilling',
'sso' => 'setSso',
'geolocation' => 'setGeolocation',
'google_maps_api_key' => 'setGoogleMapsApiKey'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'build_version' => 'getBuildVersion',
'application_name' => 'getApplicationName',
'theme' => 'getTheme',
'pod_name' => 'getPodName',
'links' => 'getLinks',
'locales' => 'getLocales',
'test_mode' => 'getTestMode',
'envelope' => 'getEnvelope',
'template' => 'getTemplate',
'user' => 'getUser',
'page_scripts' => 'getPageScripts',
'chunk_upload' => 'getChunkUpload',
'crypto' => 'getCrypto',
'logos_properties' => 'getLogosProperties',
'email_properties' => 'getEmailProperties',
'billing' => 'getBilling',
'sso' => 'getSso',
'geolocation' => 'getGeolocation',
'google_maps_api_key' => 'getGoogleMapsApiKey'    ];

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
        $this->container['build_version'] = isset($data['build_version']) ? $data['build_version'] : null;
        $this->container['application_name'] = isset($data['application_name']) ? $data['application_name'] : null;
        $this->container['theme'] = isset($data['theme']) ? $data['theme'] : null;
        $this->container['pod_name'] = isset($data['pod_name']) ? $data['pod_name'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['locales'] = isset($data['locales']) ? $data['locales'] : null;
        $this->container['test_mode'] = isset($data['test_mode']) ? $data['test_mode'] : null;
        $this->container['envelope'] = isset($data['envelope']) ? $data['envelope'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['page_scripts'] = isset($data['page_scripts']) ? $data['page_scripts'] : null;
        $this->container['chunk_upload'] = isset($data['chunk_upload']) ? $data['chunk_upload'] : null;
        $this->container['crypto'] = isset($data['crypto']) ? $data['crypto'] : null;
        $this->container['logos_properties'] = isset($data['logos_properties']) ? $data['logos_properties'] : null;
        $this->container['email_properties'] = isset($data['email_properties']) ? $data['email_properties'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['sso'] = isset($data['sso']) ? $data['sso'] : null;
        $this->container['geolocation'] = isset($data['geolocation']) ? $data['geolocation'] : null;
        $this->container['google_maps_api_key'] = isset($data['google_maps_api_key']) ? $data['google_maps_api_key'] : null;
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
     * Gets build_version
     *
     * @return string
     */
    public function getBuildVersion()
    {
        return $this->container['build_version'];
    }

    /**
     * Sets build_version
     *
     * @param string $build_version The version of the build
     *
     * @return $this
     */
    public function setBuildVersion($build_version)
    {
        $this->container['build_version'] = $build_version;

        return $this;
    }

    /**
     * Gets application_name
     *
     * @return string
     */
    public function getApplicationName()
    {
        return $this->container['application_name'];
    }

    /**
     * Sets application_name
     *
     * @param string $application_name The name of the platform
     *
     * @return $this
     */
    public function setApplicationName($application_name)
    {
        $this->container['application_name'] = $application_name;

        return $this;
    }

    /**
     * Gets theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->container['theme'];
    }

    /**
     * Sets theme
     *
     * @param string $theme The name of the UI theme
     *
     * @return $this
     */
    public function setTheme($theme)
    {
        $this->container['theme'] = $theme;

        return $this;
    }

    /**
     * Gets pod_name
     *
     * @return string
     */
    public function getPodName()
    {
        return $this->container['pod_name'];
    }

    /**
     * Sets pod_name
     *
     * @param string $pod_name Kubernetes Pod Name
     *
     * @return $this
     */
    public function setPodName($pod_name)
    {
        $this->container['pod_name'] = $pod_name;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \DocStudio\Client\Model\AppLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \DocStudio\Client\Model\AppLinks $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets locales
     *
     * @return \DocStudio\Client\Model\AppLocales
     */
    public function getLocales()
    {
        return $this->container['locales'];
    }

    /**
     * Sets locales
     *
     * @param \DocStudio\Client\Model\AppLocales $locales locales
     *
     * @return $this
     */
    public function setLocales($locales)
    {
        $this->container['locales'] = $locales;

        return $this;
    }

    /**
     * Gets test_mode
     *
     * @return bool
     */
    public function getTestMode()
    {
        return $this->container['test_mode'];
    }

    /**
     * Sets test_mode
     *
     * @param bool $test_mode Is Test Mode enabled?
     *
     * @return $this
     */
    public function setTestMode($test_mode)
    {
        $this->container['test_mode'] = $test_mode;

        return $this;
    }

    /**
     * Gets envelope
     *
     * @return \DocStudio\Client\Model\EnvelopeRestrictions
     */
    public function getEnvelope()
    {
        return $this->container['envelope'];
    }

    /**
     * Sets envelope
     *
     * @param \DocStudio\Client\Model\EnvelopeRestrictions $envelope envelope
     *
     * @return $this
     */
    public function setEnvelope($envelope)
    {
        $this->container['envelope'] = $envelope;

        return $this;
    }

    /**
     * Gets template
     *
     * @return \DocStudio\Client\Model\TemplateRestriction
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param \DocStudio\Client\Model\TemplateRestriction $template template
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \DocStudio\Client\Model\UserProperties
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \DocStudio\Client\Model\UserProperties $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets page_scripts
     *
     * @return \DocStudio\Client\Model\AppPageScripts
     */
    public function getPageScripts()
    {
        return $this->container['page_scripts'];
    }

    /**
     * Sets page_scripts
     *
     * @param \DocStudio\Client\Model\AppPageScripts $page_scripts page_scripts
     *
     * @return $this
     */
    public function setPageScripts($page_scripts)
    {
        $this->container['page_scripts'] = $page_scripts;

        return $this;
    }

    /**
     * Gets chunk_upload
     *
     * @return \DocStudio\Client\Model\ChunkUploadProps
     */
    public function getChunkUpload()
    {
        return $this->container['chunk_upload'];
    }

    /**
     * Sets chunk_upload
     *
     * @param \DocStudio\Client\Model\ChunkUploadProps $chunk_upload chunk_upload
     *
     * @return $this
     */
    public function setChunkUpload($chunk_upload)
    {
        $this->container['chunk_upload'] = $chunk_upload;

        return $this;
    }

    /**
     * Gets crypto
     *
     * @return \DocStudio\Client\Model\CryptoProperties
     */
    public function getCrypto()
    {
        return $this->container['crypto'];
    }

    /**
     * Sets crypto
     *
     * @param \DocStudio\Client\Model\CryptoProperties $crypto crypto
     *
     * @return $this
     */
    public function setCrypto($crypto)
    {
        $this->container['crypto'] = $crypto;

        return $this;
    }

    /**
     * Gets logos_properties
     *
     * @return \DocStudio\Client\Model\LogosProperties
     */
    public function getLogosProperties()
    {
        return $this->container['logos_properties'];
    }

    /**
     * Sets logos_properties
     *
     * @param \DocStudio\Client\Model\LogosProperties $logos_properties logos_properties
     *
     * @return $this
     */
    public function setLogosProperties($logos_properties)
    {
        $this->container['logos_properties'] = $logos_properties;

        return $this;
    }

    /**
     * Gets email_properties
     *
     * @return \DocStudio\Client\Model\EmailProperties
     */
    public function getEmailProperties()
    {
        return $this->container['email_properties'];
    }

    /**
     * Sets email_properties
     *
     * @param \DocStudio\Client\Model\EmailProperties $email_properties email_properties
     *
     * @return $this
     */
    public function setEmailProperties($email_properties)
    {
        $this->container['email_properties'] = $email_properties;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return \DocStudio\Client\Model\BillingProperties
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param \DocStudio\Client\Model\BillingProperties $billing billing
     *
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets sso
     *
     * @return \DocStudio\Client\Model\SsoProperties
     */
    public function getSso()
    {
        return $this->container['sso'];
    }

    /**
     * Sets sso
     *
     * @param \DocStudio\Client\Model\SsoProperties $sso sso
     *
     * @return $this
     */
    public function setSso($sso)
    {
        $this->container['sso'] = $sso;

        return $this;
    }

    /**
     * Gets geolocation
     *
     * @return \DocStudio\Client\Model\GeolocationProperties
     */
    public function getGeolocation()
    {
        return $this->container['geolocation'];
    }

    /**
     * Sets geolocation
     *
     * @param \DocStudio\Client\Model\GeolocationProperties $geolocation geolocation
     *
     * @return $this
     */
    public function setGeolocation($geolocation)
    {
        $this->container['geolocation'] = $geolocation;

        return $this;
    }

    /**
     * Gets google_maps_api_key
     *
     * @return string
     */
    public function getGoogleMapsApiKey()
    {
        return $this->container['google_maps_api_key'];
    }

    /**
     * Sets google_maps_api_key
     *
     * @param string $google_maps_api_key Google maps api key
     *
     * @return $this
     */
    public function setGoogleMapsApiKey($google_maps_api_key)
    {
        $this->container['google_maps_api_key'] = $google_maps_api_key;

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
