<?php
/**
 * SessionPolicy
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
 * SessionPolicy Class Doc Comment
 *
 * @category Class
 * @description Session policy
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SessionPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SessionPolicy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'session_hours' => 'int',
'single_session' => 'bool',
'single_ip_session' => 'bool',
'max_login_attempts' => 'int',
'max_attempts_timeout_minutes' => 'int',
'allowed_ips' => 'string[]',
'blocked_ips' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'session_hours' => 'int32',
'single_session' => null,
'single_ip_session' => null,
'max_login_attempts' => 'int32',
'max_attempts_timeout_minutes' => 'int32',
'allowed_ips' => null,
'blocked_ips' => null    ];

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
        'session_hours' => 'sessionHours',
'single_session' => 'singleSession',
'single_ip_session' => 'singleIpSession',
'max_login_attempts' => 'maxLoginAttempts',
'max_attempts_timeout_minutes' => 'maxAttemptsTimeoutMinutes',
'allowed_ips' => 'allowedIps',
'blocked_ips' => 'blockedIps'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'session_hours' => 'setSessionHours',
'single_session' => 'setSingleSession',
'single_ip_session' => 'setSingleIpSession',
'max_login_attempts' => 'setMaxLoginAttempts',
'max_attempts_timeout_minutes' => 'setMaxAttemptsTimeoutMinutes',
'allowed_ips' => 'setAllowedIps',
'blocked_ips' => 'setBlockedIps'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'session_hours' => 'getSessionHours',
'single_session' => 'getSingleSession',
'single_ip_session' => 'getSingleIpSession',
'max_login_attempts' => 'getMaxLoginAttempts',
'max_attempts_timeout_minutes' => 'getMaxAttemptsTimeoutMinutes',
'allowed_ips' => 'getAllowedIps',
'blocked_ips' => 'getBlockedIps'    ];

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
        $this->container['session_hours'] = isset($data['session_hours']) ? $data['session_hours'] : null;
        $this->container['single_session'] = isset($data['single_session']) ? $data['single_session'] : null;
        $this->container['single_ip_session'] = isset($data['single_ip_session']) ? $data['single_ip_session'] : null;
        $this->container['max_login_attempts'] = isset($data['max_login_attempts']) ? $data['max_login_attempts'] : null;
        $this->container['max_attempts_timeout_minutes'] = isset($data['max_attempts_timeout_minutes']) ? $data['max_attempts_timeout_minutes'] : null;
        $this->container['allowed_ips'] = isset($data['allowed_ips']) ? $data['allowed_ips'] : null;
        $this->container['blocked_ips'] = isset($data['blocked_ips']) ? $data['blocked_ips'] : null;
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
     * Gets session_hours
     *
     * @return int
     */
    public function getSessionHours()
    {
        return $this->container['session_hours'];
    }

    /**
     * Sets session_hours
     *
     * @param int $session_hours session_hours
     *
     * @return $this
     */
    public function setSessionHours($session_hours)
    {
        $this->container['session_hours'] = $session_hours;

        return $this;
    }

    /**
     * Gets single_session
     *
     * @return bool
     */
    public function getSingleSession()
    {
        return $this->container['single_session'];
    }

    /**
     * Sets single_session
     *
     * @param bool $single_session single_session
     *
     * @return $this
     */
    public function setSingleSession($single_session)
    {
        $this->container['single_session'] = $single_session;

        return $this;
    }

    /**
     * Gets single_ip_session
     *
     * @return bool
     */
    public function getSingleIpSession()
    {
        return $this->container['single_ip_session'];
    }

    /**
     * Sets single_ip_session
     *
     * @param bool $single_ip_session single_ip_session
     *
     * @return $this
     */
    public function setSingleIpSession($single_ip_session)
    {
        $this->container['single_ip_session'] = $single_ip_session;

        return $this;
    }

    /**
     * Gets max_login_attempts
     *
     * @return int
     */
    public function getMaxLoginAttempts()
    {
        return $this->container['max_login_attempts'];
    }

    /**
     * Sets max_login_attempts
     *
     * @param int $max_login_attempts max_login_attempts
     *
     * @return $this
     */
    public function setMaxLoginAttempts($max_login_attempts)
    {
        $this->container['max_login_attempts'] = $max_login_attempts;

        return $this;
    }

    /**
     * Gets max_attempts_timeout_minutes
     *
     * @return int
     */
    public function getMaxAttemptsTimeoutMinutes()
    {
        return $this->container['max_attempts_timeout_minutes'];
    }

    /**
     * Sets max_attempts_timeout_minutes
     *
     * @param int $max_attempts_timeout_minutes max_attempts_timeout_minutes
     *
     * @return $this
     */
    public function setMaxAttemptsTimeoutMinutes($max_attempts_timeout_minutes)
    {
        $this->container['max_attempts_timeout_minutes'] = $max_attempts_timeout_minutes;

        return $this;
    }

    /**
     * Gets allowed_ips
     *
     * @return string[]
     */
    public function getAllowedIps()
    {
        return $this->container['allowed_ips'];
    }

    /**
     * Sets allowed_ips
     *
     * @param string[] $allowed_ips allowed_ips
     *
     * @return $this
     */
    public function setAllowedIps($allowed_ips)
    {
        $this->container['allowed_ips'] = $allowed_ips;

        return $this;
    }

    /**
     * Gets blocked_ips
     *
     * @return string[]
     */
    public function getBlockedIps()
    {
        return $this->container['blocked_ips'];
    }

    /**
     * Sets blocked_ips
     *
     * @param string[] $blocked_ips blocked_ips
     *
     * @return $this
     */
    public function setBlockedIps($blocked_ips)
    {
        $this->container['blocked_ips'] = $blocked_ips;

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
