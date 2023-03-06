<?php
/**
 * PasswordPolicy
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
 * PasswordPolicy Class Doc Comment
 *
 * @category Class
 * @description Password policy
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PasswordPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PasswordPolicy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'min_length' => 'int',
'max_length' => 'int',
'uppercase' => 'int',
'lowercase' => 'int',
'digit' => 'int',
'special_symbol' => 'int',
'repeat_character' => 'int',
'allow_whitespace' => 'bool',
'prevent_common_passwords' => 'bool',
'prevent_common_words' => 'bool',
'expiration_days' => 'int',
'notify_before_days' => 'int',
'prevent_reuse_months' => 'int',
'prevent_reuse_count' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'min_length' => 'int32',
'max_length' => 'int32',
'uppercase' => 'int32',
'lowercase' => 'int32',
'digit' => 'int32',
'special_symbol' => 'int32',
'repeat_character' => 'int32',
'allow_whitespace' => null,
'prevent_common_passwords' => null,
'prevent_common_words' => null,
'expiration_days' => 'int32',
'notify_before_days' => 'int32',
'prevent_reuse_months' => 'int32',
'prevent_reuse_count' => 'int32'    ];

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
        'min_length' => 'minLength',
'max_length' => 'maxLength',
'uppercase' => 'uppercase',
'lowercase' => 'lowercase',
'digit' => 'digit',
'special_symbol' => 'specialSymbol',
'repeat_character' => 'repeatCharacter',
'allow_whitespace' => 'allowWhitespace',
'prevent_common_passwords' => 'preventCommonPasswords',
'prevent_common_words' => 'preventCommonWords',
'expiration_days' => 'expirationDays',
'notify_before_days' => 'notifyBeforeDays',
'prevent_reuse_months' => 'preventReuseMonths',
'prevent_reuse_count' => 'preventReuseCount'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'min_length' => 'setMinLength',
'max_length' => 'setMaxLength',
'uppercase' => 'setUppercase',
'lowercase' => 'setLowercase',
'digit' => 'setDigit',
'special_symbol' => 'setSpecialSymbol',
'repeat_character' => 'setRepeatCharacter',
'allow_whitespace' => 'setAllowWhitespace',
'prevent_common_passwords' => 'setPreventCommonPasswords',
'prevent_common_words' => 'setPreventCommonWords',
'expiration_days' => 'setExpirationDays',
'notify_before_days' => 'setNotifyBeforeDays',
'prevent_reuse_months' => 'setPreventReuseMonths',
'prevent_reuse_count' => 'setPreventReuseCount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'min_length' => 'getMinLength',
'max_length' => 'getMaxLength',
'uppercase' => 'getUppercase',
'lowercase' => 'getLowercase',
'digit' => 'getDigit',
'special_symbol' => 'getSpecialSymbol',
'repeat_character' => 'getRepeatCharacter',
'allow_whitespace' => 'getAllowWhitespace',
'prevent_common_passwords' => 'getPreventCommonPasswords',
'prevent_common_words' => 'getPreventCommonWords',
'expiration_days' => 'getExpirationDays',
'notify_before_days' => 'getNotifyBeforeDays',
'prevent_reuse_months' => 'getPreventReuseMonths',
'prevent_reuse_count' => 'getPreventReuseCount'    ];

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
        $this->container['min_length'] = isset($data['min_length']) ? $data['min_length'] : null;
        $this->container['max_length'] = isset($data['max_length']) ? $data['max_length'] : null;
        $this->container['uppercase'] = isset($data['uppercase']) ? $data['uppercase'] : null;
        $this->container['lowercase'] = isset($data['lowercase']) ? $data['lowercase'] : null;
        $this->container['digit'] = isset($data['digit']) ? $data['digit'] : null;
        $this->container['special_symbol'] = isset($data['special_symbol']) ? $data['special_symbol'] : null;
        $this->container['repeat_character'] = isset($data['repeat_character']) ? $data['repeat_character'] : null;
        $this->container['allow_whitespace'] = isset($data['allow_whitespace']) ? $data['allow_whitespace'] : null;
        $this->container['prevent_common_passwords'] = isset($data['prevent_common_passwords']) ? $data['prevent_common_passwords'] : null;
        $this->container['prevent_common_words'] = isset($data['prevent_common_words']) ? $data['prevent_common_words'] : null;
        $this->container['expiration_days'] = isset($data['expiration_days']) ? $data['expiration_days'] : null;
        $this->container['notify_before_days'] = isset($data['notify_before_days']) ? $data['notify_before_days'] : null;
        $this->container['prevent_reuse_months'] = isset($data['prevent_reuse_months']) ? $data['prevent_reuse_months'] : null;
        $this->container['prevent_reuse_count'] = isset($data['prevent_reuse_count']) ? $data['prevent_reuse_count'] : null;
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
     * Gets min_length
     *
     * @return int
     */
    public function getMinLength()
    {
        return $this->container['min_length'];
    }

    /**
     * Sets min_length
     *
     * @param int $min_length min_length
     *
     * @return $this
     */
    public function setMinLength($min_length)
    {
        $this->container['min_length'] = $min_length;

        return $this;
    }

    /**
     * Gets max_length
     *
     * @return int
     */
    public function getMaxLength()
    {
        return $this->container['max_length'];
    }

    /**
     * Sets max_length
     *
     * @param int $max_length max_length
     *
     * @return $this
     */
    public function setMaxLength($max_length)
    {
        $this->container['max_length'] = $max_length;

        return $this;
    }

    /**
     * Gets uppercase
     *
     * @return int
     */
    public function getUppercase()
    {
        return $this->container['uppercase'];
    }

    /**
     * Sets uppercase
     *
     * @param int $uppercase uppercase
     *
     * @return $this
     */
    public function setUppercase($uppercase)
    {
        $this->container['uppercase'] = $uppercase;

        return $this;
    }

    /**
     * Gets lowercase
     *
     * @return int
     */
    public function getLowercase()
    {
        return $this->container['lowercase'];
    }

    /**
     * Sets lowercase
     *
     * @param int $lowercase lowercase
     *
     * @return $this
     */
    public function setLowercase($lowercase)
    {
        $this->container['lowercase'] = $lowercase;

        return $this;
    }

    /**
     * Gets digit
     *
     * @return int
     */
    public function getDigit()
    {
        return $this->container['digit'];
    }

    /**
     * Sets digit
     *
     * @param int $digit digit
     *
     * @return $this
     */
    public function setDigit($digit)
    {
        $this->container['digit'] = $digit;

        return $this;
    }

    /**
     * Gets special_symbol
     *
     * @return int
     */
    public function getSpecialSymbol()
    {
        return $this->container['special_symbol'];
    }

    /**
     * Sets special_symbol
     *
     * @param int $special_symbol special_symbol
     *
     * @return $this
     */
    public function setSpecialSymbol($special_symbol)
    {
        $this->container['special_symbol'] = $special_symbol;

        return $this;
    }

    /**
     * Gets repeat_character
     *
     * @return int
     */
    public function getRepeatCharacter()
    {
        return $this->container['repeat_character'];
    }

    /**
     * Sets repeat_character
     *
     * @param int $repeat_character repeat_character
     *
     * @return $this
     */
    public function setRepeatCharacter($repeat_character)
    {
        $this->container['repeat_character'] = $repeat_character;

        return $this;
    }

    /**
     * Gets allow_whitespace
     *
     * @return bool
     */
    public function getAllowWhitespace()
    {
        return $this->container['allow_whitespace'];
    }

    /**
     * Sets allow_whitespace
     *
     * @param bool $allow_whitespace allow_whitespace
     *
     * @return $this
     */
    public function setAllowWhitespace($allow_whitespace)
    {
        $this->container['allow_whitespace'] = $allow_whitespace;

        return $this;
    }

    /**
     * Gets prevent_common_passwords
     *
     * @return bool
     */
    public function getPreventCommonPasswords()
    {
        return $this->container['prevent_common_passwords'];
    }

    /**
     * Sets prevent_common_passwords
     *
     * @param bool $prevent_common_passwords prevent_common_passwords
     *
     * @return $this
     */
    public function setPreventCommonPasswords($prevent_common_passwords)
    {
        $this->container['prevent_common_passwords'] = $prevent_common_passwords;

        return $this;
    }

    /**
     * Gets prevent_common_words
     *
     * @return bool
     */
    public function getPreventCommonWords()
    {
        return $this->container['prevent_common_words'];
    }

    /**
     * Sets prevent_common_words
     *
     * @param bool $prevent_common_words prevent_common_words
     *
     * @return $this
     */
    public function setPreventCommonWords($prevent_common_words)
    {
        $this->container['prevent_common_words'] = $prevent_common_words;

        return $this;
    }

    /**
     * Gets expiration_days
     *
     * @return int
     */
    public function getExpirationDays()
    {
        return $this->container['expiration_days'];
    }

    /**
     * Sets expiration_days
     *
     * @param int $expiration_days expiration_days
     *
     * @return $this
     */
    public function setExpirationDays($expiration_days)
    {
        $this->container['expiration_days'] = $expiration_days;

        return $this;
    }

    /**
     * Gets notify_before_days
     *
     * @return int
     */
    public function getNotifyBeforeDays()
    {
        return $this->container['notify_before_days'];
    }

    /**
     * Sets notify_before_days
     *
     * @param int $notify_before_days notify_before_days
     *
     * @return $this
     */
    public function setNotifyBeforeDays($notify_before_days)
    {
        $this->container['notify_before_days'] = $notify_before_days;

        return $this;
    }

    /**
     * Gets prevent_reuse_months
     *
     * @return int
     */
    public function getPreventReuseMonths()
    {
        return $this->container['prevent_reuse_months'];
    }

    /**
     * Sets prevent_reuse_months
     *
     * @param int $prevent_reuse_months prevent_reuse_months
     *
     * @return $this
     */
    public function setPreventReuseMonths($prevent_reuse_months)
    {
        $this->container['prevent_reuse_months'] = $prevent_reuse_months;

        return $this;
    }

    /**
     * Gets prevent_reuse_count
     *
     * @return int
     */
    public function getPreventReuseCount()
    {
        return $this->container['prevent_reuse_count'];
    }

    /**
     * Sets prevent_reuse_count
     *
     * @param int $prevent_reuse_count prevent_reuse_count
     *
     * @return $this
     */
    public function setPreventReuseCount($prevent_reuse_count)
    {
        $this->container['prevent_reuse_count'] = $prevent_reuse_count;

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