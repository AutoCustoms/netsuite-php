<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2020-12-11 06:57:10 PM PST
 */

namespace NetSuite\Classes;

class ManufacturingRouting extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billOfMaterials;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $locationList;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var boolean
     */
    public $isDefault;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var boolean
     */
    public $autoCalculateLag;
    /**
     * @var \NetSuite\Classes\ManufacturingRoutingRoutingStepList
     */
    public $routingStepList;
    /**
     * @var \NetSuite\Classes\ManufacturingRoutingRoutingComponentList
     */
    public $routingComponentList;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "customForm" => "RecordRef",
        "billOfMaterials" => "RecordRef",
        "subsidiary" => "RecordRef",
        "item" => "RecordRef",
        "locationList" => "RecordRefList",
        "name" => "string",
        "memo" => "string",
        "isDefault" => "boolean",
        "isInactive" => "boolean",
        "autoCalculateLag" => "boolean",
        "routingStepList" => "ManufacturingRoutingRoutingStepList",
        "routingComponentList" => "ManufacturingRoutingRoutingComponentList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
