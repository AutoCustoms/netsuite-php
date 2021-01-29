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
 * generated:  2021-01-29 05:23:50 PM UTC
 */

namespace NetSuite\Classes;

class ManufacturingRouting extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var RecordRef
     */
    protected RecordRef $billOfMaterials;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $locationList;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var bool
     */
    protected bool $isDefault;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var bool
     */
    protected bool $autoCalculateLag;

    /**
     * @var ManufacturingRoutingRoutingStepList
     */
    protected ManufacturingRoutingRoutingStepList $routingStepList;

    /**
     * @var ManufacturingRoutingRoutingComponentList
     */
    protected ManufacturingRoutingRoutingComponentList $routingComponentList;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

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

    /**
     * @param RecordRef $customForm
     * @return ManufacturingRouting
     */
    public function setCustomForm(RecordRef $customForm): ManufacturingRouting
    {
        $this->customForm = $customForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm(): RecordRef
    {
        return $this->customForm;
    }

    /**
     * @param RecordRef $billOfMaterials
     * @return ManufacturingRouting
     */
    public function setBillOfMaterials(RecordRef $billOfMaterials): ManufacturingRouting
    {
        $this->billOfMaterials = $billOfMaterials;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillOfMaterials(): RecordRef
    {
        return $this->billOfMaterials;
    }

    /**
     * @param RecordRef $subsidiary
     * @return ManufacturingRouting
     */
    public function setSubsidiary(RecordRef $subsidiary): ManufacturingRouting
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary(): RecordRef
    {
        return $this->subsidiary;
    }

    /**
     * @param RecordRef $item
     * @return ManufacturingRouting
     */
    public function setItem(RecordRef $item): ManufacturingRouting
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItem(): RecordRef
    {
        return $this->item;
    }

    /**
     * @param RecordRefList $locationList
     * @return ManufacturingRouting
     */
    public function setLocationList(RecordRefList $locationList): ManufacturingRouting
    {
        $this->locationList = $locationList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getLocationList(): RecordRefList
    {
        return $this->locationList;
    }

    /**
     * @param string $name
     * @return ManufacturingRouting
     */
    public function setName(string $name): ManufacturingRouting
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $memo
     * @return ManufacturingRouting
     */
    public function setMemo(string $memo): ManufacturingRouting
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * @param bool $isDefault
     * @return ManufacturingRouting
     */
    public function setIsDefault(bool $isDefault): ManufacturingRouting
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    /**
     * @param bool $isInactive
     * @return ManufacturingRouting
     */
    public function setIsInactive(bool $isInactive): ManufacturingRouting
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive(): bool
    {
        return $this->isInactive;
    }

    /**
     * @param bool $autoCalculateLag
     * @return ManufacturingRouting
     */
    public function setAutoCalculateLag(bool $autoCalculateLag): ManufacturingRouting
    {
        $this->autoCalculateLag = $autoCalculateLag;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAutoCalculateLag(): bool
    {
        return $this->autoCalculateLag;
    }

    /**
     * @param ManufacturingRoutingRoutingStepList $routingStepList
     * @return ManufacturingRouting
     */
    public function setRoutingStepList(ManufacturingRoutingRoutingStepList $routingStepList): ManufacturingRouting
    {
        $this->routingStepList = $routingStepList;
        return $this;
    }

    /**
     * @return ManufacturingRoutingRoutingStepList
     */
    public function getRoutingStepList(): ManufacturingRoutingRoutingStepList
    {
        return $this->routingStepList;
    }

    /**
     * @param ManufacturingRoutingRoutingComponentList $routingComponentList
     * @return ManufacturingRouting
     */
    public function setRoutingComponentList(ManufacturingRoutingRoutingComponentList $routingComponentList): ManufacturingRouting
    {
        $this->routingComponentList = $routingComponentList;
        return $this;
    }

    /**
     * @return ManufacturingRoutingRoutingComponentList
     */
    public function getRoutingComponentList(): ManufacturingRoutingRoutingComponentList
    {
        return $this->routingComponentList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return ManufacturingRouting
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): ManufacturingRouting
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList(): CustomFieldList
    {
        return $this->customFieldList;
    }

    /**
     * @param string $internalId
     * @return ManufacturingRouting
     */
    public function setInternalId(string $internalId): ManufacturingRouting
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

    /**
     * @param string $externalId
     * @return ManufacturingRouting
     */
    public function setExternalId(string $externalId): ManufacturingRouting
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

}
