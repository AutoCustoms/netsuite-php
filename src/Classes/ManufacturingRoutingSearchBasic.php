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

class ManufacturingRoutingSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $autoCalculateLag;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $billOfMaterials;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isDefault;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $item;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $lagAmount;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $lagType;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $lagUnits;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $location;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $manufacturingCostTemplate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $manufacturingWorkCenter;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $memo;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $operationName;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $operationYield;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $runRate;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $sequence;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $setupTime;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "autoCalculateLag" => "SearchBooleanField",
        "billOfMaterials" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isDefault" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "item" => "SearchMultiSelectField",
        "lagAmount" => "SearchDoubleField",
        "lagType" => "SearchEnumMultiSelectField",
        "lagUnits" => "SearchStringField",
        "location" => "SearchMultiSelectField",
        "manufacturingCostTemplate" => "SearchMultiSelectField",
        "manufacturingWorkCenter" => "SearchMultiSelectField",
        "memo" => "SearchStringField",
        "name" => "SearchStringField",
        "operationName" => "SearchStringField",
        "operationYield" => "SearchDoubleField",
        "runRate" => "SearchDoubleField",
        "sequence" => "SearchLongField",
        "setupTime" => "SearchDoubleField",
        "subsidiary" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchBooleanField $autoCalculateLag
     * @return ManufacturingRoutingSearchBasic
     */
    public function setAutoCalculateLag(SearchBooleanField $autoCalculateLag): ManufacturingRoutingSearchBasic
    {
        $this->autoCalculateLag = $autoCalculateLag;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAutoCalculateLag(): SearchBooleanField
    {
        return $this->autoCalculateLag;
    }

    /**
     * @param SearchMultiSelectField $billOfMaterials
     * @return ManufacturingRoutingSearchBasic
     */
    public function setBillOfMaterials(SearchMultiSelectField $billOfMaterials): ManufacturingRoutingSearchBasic
    {
        $this->billOfMaterials = $billOfMaterials;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillOfMaterials(): SearchMultiSelectField
    {
        return $this->billOfMaterials;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return ManufacturingRoutingSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): ManufacturingRoutingSearchBasic
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId(): SearchMultiSelectField
    {
        return $this->externalId;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return ManufacturingRoutingSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): ManufacturingRoutingSearchBasic
    {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString(): SearchStringField
    {
        return $this->externalIdString;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return ManufacturingRoutingSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): ManufacturingRoutingSearchBasic
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId(): SearchMultiSelectField
    {
        return $this->internalId;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return ManufacturingRoutingSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): ManufacturingRoutingSearchBasic
    {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber(): SearchLongField
    {
        return $this->internalIdNumber;
    }

    /**
     * @param SearchBooleanField $isDefault
     * @return ManufacturingRoutingSearchBasic
     */
    public function setIsDefault(SearchBooleanField $isDefault): ManufacturingRoutingSearchBasic
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsDefault(): SearchBooleanField
    {
        return $this->isDefault;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return ManufacturingRoutingSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): ManufacturingRoutingSearchBasic
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive(): SearchBooleanField
    {
        return $this->isInactive;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return ManufacturingRoutingSearchBasic
     */
    public function setItem(SearchMultiSelectField $item): ManufacturingRoutingSearchBasic
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem(): SearchMultiSelectField
    {
        return $this->item;
    }

    /**
     * @param SearchDoubleField $lagAmount
     * @return ManufacturingRoutingSearchBasic
     */
    public function setLagAmount(SearchDoubleField $lagAmount): ManufacturingRoutingSearchBasic
    {
        $this->lagAmount = $lagAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLagAmount(): SearchDoubleField
    {
        return $this->lagAmount;
    }

    /**
     * @param SearchEnumMultiSelectField $lagType
     * @return ManufacturingRoutingSearchBasic
     */
    public function setLagType(SearchEnumMultiSelectField $lagType): ManufacturingRoutingSearchBasic
    {
        $this->lagType = $lagType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLagType(): SearchEnumMultiSelectField
    {
        return $this->lagType;
    }

    /**
     * @param SearchStringField $lagUnits
     * @return ManufacturingRoutingSearchBasic
     */
    public function setLagUnits(SearchStringField $lagUnits): ManufacturingRoutingSearchBasic
    {
        $this->lagUnits = $lagUnits;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getLagUnits(): SearchStringField
    {
        return $this->lagUnits;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return ManufacturingRoutingSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): ManufacturingRoutingSearchBasic
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation(): SearchMultiSelectField
    {
        return $this->location;
    }

    /**
     * @param SearchMultiSelectField $manufacturingCostTemplate
     * @return ManufacturingRoutingSearchBasic
     */
    public function setManufacturingCostTemplate(SearchMultiSelectField $manufacturingCostTemplate): ManufacturingRoutingSearchBasic
    {
        $this->manufacturingCostTemplate = $manufacturingCostTemplate;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getManufacturingCostTemplate(): SearchMultiSelectField
    {
        return $this->manufacturingCostTemplate;
    }

    /**
     * @param SearchMultiSelectField $manufacturingWorkCenter
     * @return ManufacturingRoutingSearchBasic
     */
    public function setManufacturingWorkCenter(SearchMultiSelectField $manufacturingWorkCenter): ManufacturingRoutingSearchBasic
    {
        $this->manufacturingWorkCenter = $manufacturingWorkCenter;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getManufacturingWorkCenter(): SearchMultiSelectField
    {
        return $this->manufacturingWorkCenter;
    }

    /**
     * @param SearchStringField $memo
     * @return ManufacturingRoutingSearchBasic
     */
    public function setMemo(SearchStringField $memo): ManufacturingRoutingSearchBasic
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMemo(): SearchStringField
    {
        return $this->memo;
    }

    /**
     * @param SearchStringField $name
     * @return ManufacturingRoutingSearchBasic
     */
    public function setName(SearchStringField $name): ManufacturingRoutingSearchBasic
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName(): SearchStringField
    {
        return $this->name;
    }

    /**
     * @param SearchStringField $operationName
     * @return ManufacturingRoutingSearchBasic
     */
    public function setOperationName(SearchStringField $operationName): ManufacturingRoutingSearchBasic
    {
        $this->operationName = $operationName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getOperationName(): SearchStringField
    {
        return $this->operationName;
    }

    /**
     * @param SearchDoubleField $operationYield
     * @return ManufacturingRoutingSearchBasic
     */
    public function setOperationYield(SearchDoubleField $operationYield): ManufacturingRoutingSearchBasic
    {
        $this->operationYield = $operationYield;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getOperationYield(): SearchDoubleField
    {
        return $this->operationYield;
    }

    /**
     * @param SearchDoubleField $runRate
     * @return ManufacturingRoutingSearchBasic
     */
    public function setRunRate(SearchDoubleField $runRate): ManufacturingRoutingSearchBasic
    {
        $this->runRate = $runRate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRunRate(): SearchDoubleField
    {
        return $this->runRate;
    }

    /**
     * @param SearchLongField $sequence
     * @return ManufacturingRoutingSearchBasic
     */
    public function setSequence(SearchLongField $sequence): ManufacturingRoutingSearchBasic
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getSequence(): SearchLongField
    {
        return $this->sequence;
    }

    /**
     * @param SearchDoubleField $setupTime
     * @return ManufacturingRoutingSearchBasic
     */
    public function setSetupTime(SearchDoubleField $setupTime): ManufacturingRoutingSearchBasic
    {
        $this->setupTime = $setupTime;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getSetupTime(): SearchDoubleField
    {
        return $this->setupTime;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return ManufacturingRoutingSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): ManufacturingRoutingSearchBasic
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary(): SearchMultiSelectField
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return ManufacturingRoutingSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): ManufacturingRoutingSearchBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList(): SearchCustomFieldList
    {
        return $this->customFieldList;
    }

}
