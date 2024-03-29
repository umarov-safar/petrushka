<?php
/**
 * RoleEnum
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ensi\AdminAuthClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ensi Admin Auth
 *
 * Авторизация системных пользователей
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: mail@greensight.ru
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ensi\AdminAuthClient\Dto;
use \Ensi\AdminAuthClient\ObjectSerializer;

/**
 * RoleEnum Class Doc Comment
 *
 * @category Class
 * @description Роли. Расшифровка значений:   * &#x60;101&#x60; - Администратор   * &#x60;102&#x60; - Супер-администратор   * &#x60;106&#x60; - Продукт менеджер   * &#x60;103&#x60; - Менеджер продавцов   * &#x60;104&#x60; - Менеджер клиентов   * &#x60;115&#x60; - Администратор магазина   * &#x60;116&#x60; - SEO менеджер   * &#x60;120&#x60; - OMS. Администратор смены   * &#x60;119&#x60; - OMS. Сборщик   * &#x60;111&#x60; - OMS. Комплектовщик   * &#x60;113&#x60; - OMS. Оператор call-центра   * &#x60;114&#x60; - OMS. Сотрудник магазина   * &#x60;112&#x60; - OMS. Логист   * &#x60;201&#x60; - Оператор продавца   * &#x60;202&#x60; - Администратор продавца
 * @package  Ensi\AdminAuthClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RoleEnum
{
    /**
     * Possible values of this enum
     */
    const ADMIN = 101;
    const SUPER_ADMIN = 102;
    const PIM_MANAGER = 106;
    const MANAGER_SELLER = 103;
    const MANAGER_CLIENT = 104;
    const SELLER_ADMINISTRATOR = 115;
    const SEO_MANAGER = 116;
    const OMS_SHIFT_MANAGER = 120;
    const OMS_ORDER_COLLECTOR = 119;
    const OMS_ORDER_PICKER = 111;
    const OMS_CALL_CENTER = 113;
    const OMS_STORE_EMPLOYEE = 114;
    const OMS_LOGISTIC = 112;
    const SAS_SELLER_OPERATOR = 201;
    const SAS_SELLER_ADMIN = 202;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::ADMIN,
            self::SUPER_ADMIN,
            self::PIM_MANAGER,
            self::MANAGER_SELLER,
            self::MANAGER_CLIENT,
            self::SELLER_ADMINISTRATOR,
            self::SEO_MANAGER,
            self::OMS_SHIFT_MANAGER,
            self::OMS_ORDER_COLLECTOR,
            self::OMS_ORDER_PICKER,
            self::OMS_CALL_CENTER,
            self::OMS_STORE_EMPLOYEE,
            self::OMS_LOGISTIC,
            self::SAS_SELLER_OPERATOR,
            self::SAS_SELLER_ADMIN,
        ];
    }
}


