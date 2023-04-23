<?php
/**
 * OnlineSzamlaStatusEnum
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Billingo API v3
 *
 * This is a Billingo API v3 documentation. Our API based on REST software architectural style. API has resource-oriented URLs, accepts JSON-encoded request bodies and returns JSON-encoded responses. To use this API you have to generate a new API key on our [site](https://app.billingo.hu/api-key). After that, you can test your API key on this page.
 *
 * OpenAPI spec version: 3.0.14
 * Contact: hello@billingo.hu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.42
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * OnlineSzamlaStatusEnum Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OnlineSzamlaStatusEnum
{
    /**
     * Possible values of this enum
     */
    const ABORTED = 'aborted';
const DONE = 'done';
const EMPTY_ORGANIZATION_COUNTRY_CODE = 'empty_organization_country_code';
const EMPTY_PARTNER_COUNTRY_CODE = 'empty_partner_country_code';
const EMPTY_TAX = 'empty_tax';
const FORBIDDEN = 'forbidden';
const INVALID_ADDRESS = 'invalid_address';
const INVALID_CLIENT = 'invalid_client';
const INVALID_CONVERSION_RATE = 'invalid_conversion_rate';
const INVALID_CUSTOMER = 'invalid_customer';
const INVALID_INVOICE_REFERENCE = 'invalid_invoice_reference';
const INVALID_POSTALCODE = 'invalid_postalcode';
const INVALID_SECURITY_USER = 'invalid_security_user';
const INVALID_TAX = 'invalid_tax';
const INVALID_TAX_NUMBER = 'invalid_tax_number';
const INVALID_USER_RELATION = 'invalid_user_relation';
const INVALID_VAT_DATA = 'invalid_vat_data';
const INVOICE_NUMBER_NOT_UNIQUE = 'invoice_number_not_unique';
const KOBAK_PROCESSING = 'kobak_processing';
const MISSING_DOCUMENT_ITEM_NAME = 'missing_document_item_name';
const NAV_WARN = 'nav_warn';
const NO_ONLINE_SZAMLA_SETTINGS = 'no_online_szamla_settings';
const NO_SEND_BY_USER = 'no_send_by_user';
const NON_EXIST_TAX_NUMBER = 'non_exist_tax_number';
const NOT_UNIQUE = 'not unique';
const NOT_CHECKED = 'not_checked';
const NOT_REGISTERED_CUSTOMER = 'not_registered_customer';
const PROCESSING = 'processing';
const RECEIVED = 'received';
const SAVED = 'saved';
const SEND_FAILED = 'send_failed';
const SENT = 'sent';
const STARTED = 'started';
const TECHNICAL_ERROR = 'technical_error';
const UNDER_TAX_LIMIT = 'under_tax_limit';
const USER_HAS_INVALID_KOBAK = 'user_has_invalid_kobak';
const USER_HASNOT_KOBAK = 'user_hasnot_kobak';
const VALIDATION_OK = 'validation_ok';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ABORTED,
self::DONE,
self::EMPTY_ORGANIZATION_COUNTRY_CODE,
self::EMPTY_PARTNER_COUNTRY_CODE,
self::EMPTY_TAX,
self::FORBIDDEN,
self::INVALID_ADDRESS,
self::INVALID_CLIENT,
self::INVALID_CONVERSION_RATE,
self::INVALID_CUSTOMER,
self::INVALID_INVOICE_REFERENCE,
self::INVALID_POSTALCODE,
self::INVALID_SECURITY_USER,
self::INVALID_TAX,
self::INVALID_TAX_NUMBER,
self::INVALID_USER_RELATION,
self::INVALID_VAT_DATA,
self::INVOICE_NUMBER_NOT_UNIQUE,
self::KOBAK_PROCESSING,
self::MISSING_DOCUMENT_ITEM_NAME,
self::NAV_WARN,
self::NO_ONLINE_SZAMLA_SETTINGS,
self::NO_SEND_BY_USER,
self::NON_EXIST_TAX_NUMBER,
self::NOT_UNIQUE,
self::NOT_CHECKED,
self::NOT_REGISTERED_CUSTOMER,
self::PROCESSING,
self::RECEIVED,
self::SAVED,
self::SEND_FAILED,
self::SENT,
self::STARTED,
self::TECHNICAL_ERROR,
self::UNDER_TAX_LIMIT,
self::USER_HAS_INVALID_KOBAK,
self::USER_HASNOT_KOBAK,
self::VALIDATION_OK,        ];
    }
}
