<?php
/**
 * ActivityLogObjectType
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
use \Docstudio\Client\ObjectSerializer;

/**
 * ActivityLogObjectType Class Doc Comment
 *
 * @category Class
 * @description Object type
 * @package  Docstudio\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActivityLogObjectType
{
    /**
     * Possible values of this enum
     */
    const TEMPLATE = 'template';
const ENVELOPE = 'envelope';
const DICTIONARY = 'dictionary';
const MAILBOX = 'mailbox';
const MAILBOX_ALIAS = 'mailbox_alias';
const CATEGORY = 'category';
const MAILBOX_FILTER = 'mailbox_filter';
const MAILBOX_LABEL = 'mailbox_label';
const USER = 'user';
const ACCOUNT = 'account';
const SCENARIO = 'scenario';
const ACCOUNT_DOMAIN = 'account_domain';
const ROLE = 'role';
const INTEGRATION_RULE = 'integration_rule';
const CRYPTO_CONFIG = 'crypto_config';
const EXTERNAL_LINK = 'external_link';
const APPROVAL_FLOW = 'approval_flow';
const ACCOUNT_TARIFF = 'account_tariff';
const ACCOUNT_SSO_ID_PROVIDER = 'account_sso_id_provider';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TEMPLATE,
self::ENVELOPE,
self::DICTIONARY,
self::MAILBOX,
self::MAILBOX_ALIAS,
self::CATEGORY,
self::MAILBOX_FILTER,
self::MAILBOX_LABEL,
self::USER,
self::ACCOUNT,
self::SCENARIO,
self::ACCOUNT_DOMAIN,
self::ROLE,
self::INTEGRATION_RULE,
self::CRYPTO_CONFIG,
self::EXTERNAL_LINK,
self::APPROVAL_FLOW,
self::ACCOUNT_TARIFF,
self::ACCOUNT_SSO_ID_PROVIDER,        ];
    }
}
