<?php
/**
 * ActivityLogAction
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
 * ActivityLogAction Class Doc Comment
 *
 * @category Class
 * @description Action performed
 * @package  Docstudio\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActivityLogAction
{
    /**
     * Possible values of this enum
     */
    const TEMPLATE_READ = 'template-read';
const TEMPLATE_CREATED = 'template-created';
const TEMPLATE_UPDATED = 'template-updated';
const TEMPLATE_ARCHIVED = 'template-archived';
const MAILBOX_CREATED = 'mailbox-created';
const MAILBOX_ARCHIVED = 'mailbox-archived';
const MAILBOX_NAME_CHANGED = 'mailbox-name-changed';
const MAILBOX_FILTER_CREATED = 'mailbox-filter-created';
const MAILBOX_FILTER_UPDATED = 'mailbox-filter-updated';
const MAILBOX_FILTER_DELETED = 'mailbox-filter-deleted';
const MAILBOX_LABEL_CREATED = 'mailbox-label-created';
const MAILBOX_LABEL_UPDATED = 'mailbox-label-updated';
const MAILBOX_LABEL_DELETED = 'mailbox-label-deleted';
const MAILBOX_ALIAS_CREATED = 'mailbox-alias-created';
const MAILBOX_ALIAS_DELETED = 'mailbox-alias-deleted';
const MAILBOX_INTEGRATION_UPDATED = 'mailbox-integration-updated';
const USER_INVITED_TO_ACCOUNT = 'user-invited-to-account';
const USER_INVITED_TO_MAILBOX = 'user-invited-to-mailbox';
const USER_PERMISSIONS_CHANGED = 'user-permissions-changed';
const USER_PASSWORD_RESET = 'user-password-reset';
const USER_PASSWORD_RENEW = 'user-password-renew';
const USER_BLOCKED = 'user-blocked';
const USER_UNBLOCKED = 'user-unblocked';
const USER_CREATED = 'user-created';
const USER_DELETED = 'user-deleted';
const CATEGORY_CREATED = 'category-created';
const CATEGORY_UPDATED = 'category-updated';
const CATEGORY_DELETED = 'category-deleted';
const CATEGORY_MOVED = 'category-moved';
const DICTIONARY_CREATED = 'dictionary-created';
const DICTIONARY_UPDATED = 'dictionary-updated';
const DICTIONARY_ACCESS_CHANGED = 'dictionary-access-changed';
const DICTIONARY_COLUMN_CREATED = 'dictionary-column-created';
const DICTIONARY_COLUMN_UPDATED = 'dictionary-column-updated';
const DICTIONARY_COLUMN_DELETED = 'dictionary-column-deleted';
const DICTIONARY_RECORD_CREATED = 'dictionary-record-created';
const DICTIONARY_RECORD_UPDATED = 'dictionary-record-updated';
const DICTIONARY_RECORD_DELETED = 'dictionary-record-deleted';
const DICTIONARY_ARCHIVED = 'dictionary-archived';
const DICTIONARY_DOWNLOAD = 'dictionary-download';
const DICTIONARY_UPLOADED = 'dictionary-uploaded';
const ENVELOPE_READ = 'envelope-read';
const ENVELOPE_DRAFT_CREATED = 'envelope-draft-created';
const ENVELOPE_DRAFT_UPDATED = 'envelope-draft-updated';
const ENVELOPE_DRAFT_DELETED = 'envelope-draft-deleted';
const ENVELOPE_LABEL_ASSIGNED = 'envelope-label-assigned';
const ENVELOPE_LABEL_UNASSIGNED = 'envelope-label-unassigned';
const ENVELOPE_SENT = 'envelope-sent';
const ENVELOPE_ARCHIVED = 'envelope-archived';
const ENVELOPE_UNARCHIVED = 'envelope-unarchived';
const ENVELOPE_UPDATED = 'envelope-updated';
const ENVELOPE_DATA_UPDATED = 'envelope-data-updated';
const ENVELOPE_RECEIVED = 'envelope-received';
const ENVELOPE_COMPLETED = 'envelope-completed';
const ENVELOPE_CANCELLED = 'envelope-cancelled';
const ENVELOPE_EXPIRED = 'envelope-expired';
const ENVELOPE_INVITATION_ACCEPTED = 'envelope-invitation-accepted';
const ENVELOPE_REPORT_DOWNLOAD = 'envelope-report-download';
const ENVELOPE_DELEGATED = 'envelope-delegated';
const ENVELOPE_DELEGATION_CANCELLED = 'envelope-delegation-cancelled';
const ENVELOPE_SENT_FOR_APPROVAL = 'envelope-sent-for-approval';
const ENVELOPE_APPROVAL_CANCELLED = 'envelope-approval-cancelled';
const ENVELOPE_APPROVED = 'envelope-approved';
const ENVELOPE_REJECTED = 'envelope-rejected';
const APPROVAL_FLOW_CREATED = 'approval-flow-created';
const APPROVAL_FLOW_UPDATED = 'approval-flow-updated';
const APPROVAL_FLOW_DELETED = 'approval-flow-deleted';
const SCENARIO_CREATED = 'scenario-created';
const SCENARIO_UPDATED = 'scenario-updated';
const SCENARIO_DELETED = 'scenario-deleted';
const SCENARIO_CLONED = 'scenario-cloned';
const SCENARIO_RUN = 'scenario-run';
const ACCOUNT_CREATED = 'account-created';
const ACCOUNT_UPDATED = 'account-updated';
const ACCOUNT_POLICIES_UPDATED = 'account-policies-updated';
const ACCOUNT_CRYPTO_CONFIG_CREATED = 'account-crypto-config-created';
const ACCOUNT_CRYPTO_CONFIG_DELETED = 'account-crypto-config-deleted';
const ACCOUNT_EXTERNAL_LINK_CREATED = 'account-external-link-created';
const ACCOUNT_EXTERNAL_LINK_UPDATED = 'account-external-link-updated';
const ACCOUNT_EXTERNAL_LINK_DELETED = 'account-external-link-deleted';
const ACCOUNT_DOMAIN_CREATED = 'account-domain-created';
const ACCOUNT_DOMAIN_UPDATED = 'account-domain-updated';
const ACCOUNT_DOMAIN_DELETED = 'account-domain-deleted';
const ACCOUNT_AUDIT_READ = 'account-audit-read';
const ACCOUNT_MAILBOXES_REPORT_DOWNLOAD = 'account-mailboxes-report-download';
const ACCOUNT_USERS_REPORT_DOWNLOAD = 'account-users-report-download';
const ACCOUNT_TARIFF_CHANGED = 'account-tariff-changed';
const ACCOUNT_SSO_IDP_CREATED = 'account-sso-idp-created';
const ACCOUNT_SSO_IDP_UPDATED = 'account-sso-idp-updated';
const ACCOUNT_SSO_IDP_DELETED = 'account-sso-idp-deleted';
const ROLE_CREATED = 'role-created';
const ROLE_UPDATED = 'role-updated';
const ROLE_DELETED = 'role-deleted';
const INTEGRATION_RULE_CREATED = 'integration-rule-created';
const INTEGRATION_RULE_UPDATED = 'integration-rule-updated';
const INTEGRATION_RULE_DELETED = 'integration-rule-deleted';
const FORBIDDEN_ERROR = 'forbidden-error';
const NOT_FOUND_ERROR = 'not-found-error';
const UNAUTHORIZED_ERROR = 'unauthorized-error';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TEMPLATE_READ,
self::TEMPLATE_CREATED,
self::TEMPLATE_UPDATED,
self::TEMPLATE_ARCHIVED,
self::MAILBOX_CREATED,
self::MAILBOX_ARCHIVED,
self::MAILBOX_NAME_CHANGED,
self::MAILBOX_FILTER_CREATED,
self::MAILBOX_FILTER_UPDATED,
self::MAILBOX_FILTER_DELETED,
self::MAILBOX_LABEL_CREATED,
self::MAILBOX_LABEL_UPDATED,
self::MAILBOX_LABEL_DELETED,
self::MAILBOX_ALIAS_CREATED,
self::MAILBOX_ALIAS_DELETED,
self::MAILBOX_INTEGRATION_UPDATED,
self::USER_INVITED_TO_ACCOUNT,
self::USER_INVITED_TO_MAILBOX,
self::USER_PERMISSIONS_CHANGED,
self::USER_PASSWORD_RESET,
self::USER_PASSWORD_RENEW,
self::USER_BLOCKED,
self::USER_UNBLOCKED,
self::USER_CREATED,
self::USER_DELETED,
self::CATEGORY_CREATED,
self::CATEGORY_UPDATED,
self::CATEGORY_DELETED,
self::CATEGORY_MOVED,
self::DICTIONARY_CREATED,
self::DICTIONARY_UPDATED,
self::DICTIONARY_ACCESS_CHANGED,
self::DICTIONARY_COLUMN_CREATED,
self::DICTIONARY_COLUMN_UPDATED,
self::DICTIONARY_COLUMN_DELETED,
self::DICTIONARY_RECORD_CREATED,
self::DICTIONARY_RECORD_UPDATED,
self::DICTIONARY_RECORD_DELETED,
self::DICTIONARY_ARCHIVED,
self::DICTIONARY_DOWNLOAD,
self::DICTIONARY_UPLOADED,
self::ENVELOPE_READ,
self::ENVELOPE_DRAFT_CREATED,
self::ENVELOPE_DRAFT_UPDATED,
self::ENVELOPE_DRAFT_DELETED,
self::ENVELOPE_LABEL_ASSIGNED,
self::ENVELOPE_LABEL_UNASSIGNED,
self::ENVELOPE_SENT,
self::ENVELOPE_ARCHIVED,
self::ENVELOPE_UNARCHIVED,
self::ENVELOPE_UPDATED,
self::ENVELOPE_DATA_UPDATED,
self::ENVELOPE_RECEIVED,
self::ENVELOPE_COMPLETED,
self::ENVELOPE_CANCELLED,
self::ENVELOPE_EXPIRED,
self::ENVELOPE_INVITATION_ACCEPTED,
self::ENVELOPE_REPORT_DOWNLOAD,
self::ENVELOPE_DELEGATED,
self::ENVELOPE_DELEGATION_CANCELLED,
self::ENVELOPE_SENT_FOR_APPROVAL,
self::ENVELOPE_APPROVAL_CANCELLED,
self::ENVELOPE_APPROVED,
self::ENVELOPE_REJECTED,
self::APPROVAL_FLOW_CREATED,
self::APPROVAL_FLOW_UPDATED,
self::APPROVAL_FLOW_DELETED,
self::SCENARIO_CREATED,
self::SCENARIO_UPDATED,
self::SCENARIO_DELETED,
self::SCENARIO_CLONED,
self::SCENARIO_RUN,
self::ACCOUNT_CREATED,
self::ACCOUNT_UPDATED,
self::ACCOUNT_POLICIES_UPDATED,
self::ACCOUNT_CRYPTO_CONFIG_CREATED,
self::ACCOUNT_CRYPTO_CONFIG_DELETED,
self::ACCOUNT_EXTERNAL_LINK_CREATED,
self::ACCOUNT_EXTERNAL_LINK_UPDATED,
self::ACCOUNT_EXTERNAL_LINK_DELETED,
self::ACCOUNT_DOMAIN_CREATED,
self::ACCOUNT_DOMAIN_UPDATED,
self::ACCOUNT_DOMAIN_DELETED,
self::ACCOUNT_AUDIT_READ,
self::ACCOUNT_MAILBOXES_REPORT_DOWNLOAD,
self::ACCOUNT_USERS_REPORT_DOWNLOAD,
self::ACCOUNT_TARIFF_CHANGED,
self::ACCOUNT_SSO_IDP_CREATED,
self::ACCOUNT_SSO_IDP_UPDATED,
self::ACCOUNT_SSO_IDP_DELETED,
self::ROLE_CREATED,
self::ROLE_UPDATED,
self::ROLE_DELETED,
self::INTEGRATION_RULE_CREATED,
self::INTEGRATION_RULE_UPDATED,
self::INTEGRATION_RULE_DELETED,
self::FORBIDDEN_ERROR,
self::NOT_FOUND_ERROR,
self::UNAUTHORIZED_ERROR,        ];
    }
}
