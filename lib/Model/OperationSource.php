<?php
/**
 * OperationSource
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
 * OperationSource Class Doc Comment
 *
 * @category Class
 * @description Source of activity
 * @package  Docstudio\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OperationSource
{
    /**
     * Possible values of this enum
     */
    const WEB = 'WEB';
const API = 'API';
const JOB = 'JOB';
const INTEGRATION = 'INTEGRATION';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WEB,
self::API,
self::JOB,
self::INTEGRATION,        ];
    }
}
