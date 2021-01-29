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

class EntityGroupSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $email;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $groupName;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $groupType;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isDynamic;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isManufacturingWorkCenter;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isPrivate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $laborResources;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastModifiedDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $machineResources;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $owner;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $savedSearch;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $size;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $workCalendar;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "email" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "groupName" => "SearchColumnStringField[]",
        "groupType" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isDynamic" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isManufacturingWorkCenter" => "SearchColumnBooleanField[]",
        "isPrivate" => "SearchColumnBooleanField[]",
        "laborResources" => "SearchColumnDoubleField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "machineResources" => "SearchColumnDoubleField[]",
        "owner" => "SearchColumnSelectField[]",
        "savedSearch" => "SearchColumnStringField[]",
        "size" => "SearchColumnLongField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "workCalendar" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnStringField[] $email
     * @return EntityGroupSearchRowBasic
     */
    public function setEmail(SearchColumnStringField $email): EntityGroupSearchRowBasic
    {
        $this->email[] = $email;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEmail(): array
    {
        return $this->email;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return EntityGroupSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): EntityGroupSearchRowBasic
    {
        $this->externalId[] = $externalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId(): array
    {
        return $this->externalId;
    }

    /**
     * @param SearchColumnStringField[] $groupName
     * @return EntityGroupSearchRowBasic
     */
    public function setGroupName(SearchColumnStringField $groupName): EntityGroupSearchRowBasic
    {
        $this->groupName[] = $groupName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGroupName(): array
    {
        return $this->groupName;
    }

    /**
     * @param SearchColumnStringField[] $groupType
     * @return EntityGroupSearchRowBasic
     */
    public function setGroupType(SearchColumnStringField $groupType): EntityGroupSearchRowBasic
    {
        $this->groupType[] = $groupType;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGroupType(): array
    {
        return $this->groupType;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return EntityGroupSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): EntityGroupSearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnBooleanField[] $isDynamic
     * @return EntityGroupSearchRowBasic
     */
    public function setIsDynamic(SearchColumnBooleanField $isDynamic): EntityGroupSearchRowBasic
    {
        $this->isDynamic[] = $isDynamic;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsDynamic(): array
    {
        return $this->isDynamic;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return EntityGroupSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): EntityGroupSearchRowBasic
    {
        $this->isInactive[] = $isInactive;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive(): array
    {
        return $this->isInactive;
    }

    /**
     * @param SearchColumnBooleanField[] $isManufacturingWorkCenter
     * @return EntityGroupSearchRowBasic
     */
    public function setIsManufacturingWorkCenter(SearchColumnBooleanField $isManufacturingWorkCenter): EntityGroupSearchRowBasic
    {
        $this->isManufacturingWorkCenter[] = $isManufacturingWorkCenter;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsManufacturingWorkCenter(): array
    {
        return $this->isManufacturingWorkCenter;
    }

    /**
     * @param SearchColumnBooleanField[] $isPrivate
     * @return EntityGroupSearchRowBasic
     */
    public function setIsPrivate(SearchColumnBooleanField $isPrivate): EntityGroupSearchRowBasic
    {
        $this->isPrivate[] = $isPrivate;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsPrivate(): array
    {
        return $this->isPrivate;
    }

    /**
     * @param SearchColumnDoubleField[] $laborResources
     * @return EntityGroupSearchRowBasic
     */
    public function setLaborResources(SearchColumnDoubleField $laborResources): EntityGroupSearchRowBasic
    {
        $this->laborResources[] = $laborResources;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLaborResources(): array
    {
        return $this->laborResources;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return EntityGroupSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): EntityGroupSearchRowBasic
    {
        $this->lastModifiedDate[] = $lastModifiedDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModifiedDate(): array
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param SearchColumnDoubleField[] $machineResources
     * @return EntityGroupSearchRowBasic
     */
    public function setMachineResources(SearchColumnDoubleField $machineResources): EntityGroupSearchRowBasic
    {
        $this->machineResources[] = $machineResources;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getMachineResources(): array
    {
        return $this->machineResources;
    }

    /**
     * @param SearchColumnSelectField[] $owner
     * @return EntityGroupSearchRowBasic
     */
    public function setOwner(SearchColumnSelectField $owner): EntityGroupSearchRowBasic
    {
        $this->owner[] = $owner;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOwner(): array
    {
        return $this->owner;
    }

    /**
     * @param SearchColumnStringField[] $savedSearch
     * @return EntityGroupSearchRowBasic
     */
    public function setSavedSearch(SearchColumnStringField $savedSearch): EntityGroupSearchRowBasic
    {
        $this->savedSearch[] = $savedSearch;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSavedSearch(): array
    {
        return $this->savedSearch;
    }

    /**
     * @param SearchColumnLongField[] $size
     * @return EntityGroupSearchRowBasic
     */
    public function setSize(SearchColumnLongField $size): EntityGroupSearchRowBasic
    {
        $this->size[] = $size;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getSize(): array
    {
        return $this->size;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return EntityGroupSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): EntityGroupSearchRowBasic
    {
        $this->subsidiary[] = $subsidiary;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary(): array
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchColumnSelectField[] $workCalendar
     * @return EntityGroupSearchRowBasic
     */
    public function setWorkCalendar(SearchColumnSelectField $workCalendar): EntityGroupSearchRowBasic
    {
        $this->workCalendar[] = $workCalendar;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getWorkCalendar(): array
    {
        return $this->workCalendar;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return EntityGroupSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): EntityGroupSearchRowBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList(): SearchColumnCustomFieldList
    {
        return $this->customFieldList;
    }

}
