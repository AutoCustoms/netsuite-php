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

class EntityGroupSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchStringField
     */
    protected SearchStringField $email;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $groupName;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $groupOwner;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $groupType;

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
    protected SearchBooleanField $isDynamic;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isManufacturingWorkCenter;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isPrivate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $laborResources;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastModifiedDate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $machineResources;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $workCalendar;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "email" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "groupName" => "SearchStringField",
        "groupOwner" => "SearchMultiSelectField",
        "groupType" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isDynamic" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "isManufacturingWorkCenter" => "SearchBooleanField",
        "isPrivate" => "SearchBooleanField",
        "laborResources" => "SearchDoubleField",
        "lastModifiedDate" => "SearchDateField",
        "machineResources" => "SearchDoubleField",
        "subsidiary" => "SearchMultiSelectField",
        "workCalendar" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchStringField $email
     * @return EntityGroupSearchBasic
     */
    public function setEmail(SearchStringField $email): EntityGroupSearchBasic
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEmail(): SearchStringField
    {
        return $this->email;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return EntityGroupSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): EntityGroupSearchBasic
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
     * @return EntityGroupSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): EntityGroupSearchBasic
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
     * @param SearchStringField $groupName
     * @return EntityGroupSearchBasic
     */
    public function setGroupName(SearchStringField $groupName): EntityGroupSearchBasic
    {
        $this->groupName = $groupName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGroupName(): SearchStringField
    {
        return $this->groupName;
    }

    /**
     * @param SearchMultiSelectField $groupOwner
     * @return EntityGroupSearchBasic
     */
    public function setGroupOwner(SearchMultiSelectField $groupOwner): EntityGroupSearchBasic
    {
        $this->groupOwner = $groupOwner;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getGroupOwner(): SearchMultiSelectField
    {
        return $this->groupOwner;
    }

    /**
     * @param SearchMultiSelectField $groupType
     * @return EntityGroupSearchBasic
     */
    public function setGroupType(SearchMultiSelectField $groupType): EntityGroupSearchBasic
    {
        $this->groupType = $groupType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getGroupType(): SearchMultiSelectField
    {
        return $this->groupType;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return EntityGroupSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): EntityGroupSearchBasic
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
     * @return EntityGroupSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): EntityGroupSearchBasic
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
     * @param SearchBooleanField $isDynamic
     * @return EntityGroupSearchBasic
     */
    public function setIsDynamic(SearchBooleanField $isDynamic): EntityGroupSearchBasic
    {
        $this->isDynamic = $isDynamic;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsDynamic(): SearchBooleanField
    {
        return $this->isDynamic;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return EntityGroupSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): EntityGroupSearchBasic
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
     * @param SearchBooleanField $isManufacturingWorkCenter
     * @return EntityGroupSearchBasic
     */
    public function setIsManufacturingWorkCenter(SearchBooleanField $isManufacturingWorkCenter): EntityGroupSearchBasic
    {
        $this->isManufacturingWorkCenter = $isManufacturingWorkCenter;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsManufacturingWorkCenter(): SearchBooleanField
    {
        return $this->isManufacturingWorkCenter;
    }

    /**
     * @param SearchBooleanField $isPrivate
     * @return EntityGroupSearchBasic
     */
    public function setIsPrivate(SearchBooleanField $isPrivate): EntityGroupSearchBasic
    {
        $this->isPrivate = $isPrivate;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsPrivate(): SearchBooleanField
    {
        return $this->isPrivate;
    }

    /**
     * @param SearchDoubleField $laborResources
     * @return EntityGroupSearchBasic
     */
    public function setLaborResources(SearchDoubleField $laborResources): EntityGroupSearchBasic
    {
        $this->laborResources = $laborResources;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLaborResources(): SearchDoubleField
    {
        return $this->laborResources;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return EntityGroupSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): EntityGroupSearchBasic
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModifiedDate(): SearchDateField
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param SearchDoubleField $machineResources
     * @return EntityGroupSearchBasic
     */
    public function setMachineResources(SearchDoubleField $machineResources): EntityGroupSearchBasic
    {
        $this->machineResources = $machineResources;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getMachineResources(): SearchDoubleField
    {
        return $this->machineResources;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return EntityGroupSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): EntityGroupSearchBasic
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
     * @param SearchMultiSelectField $workCalendar
     * @return EntityGroupSearchBasic
     */
    public function setWorkCalendar(SearchMultiSelectField $workCalendar): EntityGroupSearchBasic
    {
        $this->workCalendar = $workCalendar;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getWorkCalendar(): SearchMultiSelectField
    {
        return $this->workCalendar;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return EntityGroupSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): EntityGroupSearchBasic
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
