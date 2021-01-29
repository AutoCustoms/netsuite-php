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

class EntityGroup extends Record {
    /**
     * @var string
     */
    protected string $groupName;

    /**
     * @var EntityGroupType
     */
    protected EntityGroupType $groupType;

    /**
     * @var string
     */
    protected string $email;

    /**
     * @var RecordRef
     */
    protected RecordRef $groupOwner;

    /**
     * @var bool
     */
    protected bool $isSavedSearch;

    /**
     * @var EntityGroupType
     */
    protected EntityGroupType $parentGroupType;

    /**
     * @var RecordRef
     */
    protected RecordRef $savedSearch;

    /**
     * @var bool
     */
    protected bool $isSalesTeam;

    /**
     * @var string
     */
    protected string $comments;

    /**
     * @var bool
     */
    protected bool $isPrivate;

    /**
     * @var RecordRef
     */
    protected RecordRef $restrictionGroup;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var bool
     */
    protected bool $isSalesRep;

    /**
     * @var bool
     */
    protected bool $isSupportRep;

    /**
     * @var bool
     */
    protected bool $isProductTeam;

    /**
     * @var bool
     */
    protected bool $isFunctionalTeam;

    /**
     * @var RecordRef
     */
    protected RecordRef $issueRole;

    /**
     * @var bool
     */
    protected bool $isManufacturingWorkCenter;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var float
     */
    protected float $machineResources;

    /**
     * @var float
     */
    protected float $laborResources;

    /**
     * @var RecordRef
     */
    protected RecordRef $workCalendar;

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
        "groupName" => "string",
        "groupType" => "EntityGroupType",
        "email" => "string",
        "groupOwner" => "RecordRef",
        "isSavedSearch" => "boolean",
        "parentGroupType" => "EntityGroupType",
        "savedSearch" => "RecordRef",
        "isSalesTeam" => "boolean",
        "comments" => "string",
        "isPrivate" => "boolean",
        "restrictionGroup" => "RecordRef",
        "isInactive" => "boolean",
        "isSalesRep" => "boolean",
        "isSupportRep" => "boolean",
        "isProductTeam" => "boolean",
        "isFunctionalTeam" => "boolean",
        "issueRole" => "RecordRef",
        "isManufacturingWorkCenter" => "boolean",
        "subsidiary" => "RecordRef",
        "machineResources" => "float",
        "laborResources" => "float",
        "workCalendar" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $groupName
     * @return EntityGroup
     */
    public function setGroupName(string $groupName): EntityGroup
    {
        $this->groupName = $groupName;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupName(): string
    {
        return $this->groupName;
    }

    /**
     * @param EntityGroupType $groupType
     * @return EntityGroup
     */
    public function setGroupType(EntityGroupType $groupType): EntityGroup
    {
        $this->groupType = $groupType;
        return $this;
    }

    /**
     * @return EntityGroupType
     */
    public function getGroupType(): EntityGroupType
    {
        return $this->groupType;
    }

    /**
     * @param string $email
     * @return EntityGroup
     */
    public function setEmail(string $email): EntityGroup
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param RecordRef $groupOwner
     * @return EntityGroup
     */
    public function setGroupOwner(RecordRef $groupOwner): EntityGroup
    {
        $this->groupOwner = $groupOwner;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getGroupOwner(): RecordRef
    {
        return $this->groupOwner;
    }

    /**
     * @param bool $isSavedSearch
     * @return EntityGroup
     */
    public function setIsSavedSearch(bool $isSavedSearch): EntityGroup
    {
        $this->isSavedSearch = $isSavedSearch;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSavedSearch(): bool
    {
        return $this->isSavedSearch;
    }

    /**
     * @param EntityGroupType $parentGroupType
     * @return EntityGroup
     */
    public function setParentGroupType(EntityGroupType $parentGroupType): EntityGroup
    {
        $this->parentGroupType = $parentGroupType;
        return $this;
    }

    /**
     * @return EntityGroupType
     */
    public function getParentGroupType(): EntityGroupType
    {
        return $this->parentGroupType;
    }

    /**
     * @param RecordRef $savedSearch
     * @return EntityGroup
     */
    public function setSavedSearch(RecordRef $savedSearch): EntityGroup
    {
        $this->savedSearch = $savedSearch;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSavedSearch(): RecordRef
    {
        return $this->savedSearch;
    }

    /**
     * @param bool $isSalesTeam
     * @return EntityGroup
     */
    public function setIsSalesTeam(bool $isSalesTeam): EntityGroup
    {
        $this->isSalesTeam = $isSalesTeam;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSalesTeam(): bool
    {
        return $this->isSalesTeam;
    }

    /**
     * @param string $comments
     * @return EntityGroup
     */
    public function setComments(string $comments): EntityGroup
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return string
     */
    public function getComments(): string
    {
        return $this->comments;
    }

    /**
     * @param bool $isPrivate
     * @return EntityGroup
     */
    public function setIsPrivate(bool $isPrivate): EntityGroup
    {
        $this->isPrivate = $isPrivate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPrivate(): bool
    {
        return $this->isPrivate;
    }

    /**
     * @param RecordRef $restrictionGroup
     * @return EntityGroup
     */
    public function setRestrictionGroup(RecordRef $restrictionGroup): EntityGroup
    {
        $this->restrictionGroup = $restrictionGroup;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRestrictionGroup(): RecordRef
    {
        return $this->restrictionGroup;
    }

    /**
     * @param bool $isInactive
     * @return EntityGroup
     */
    public function setIsInactive(bool $isInactive): EntityGroup
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
     * @param bool $isSalesRep
     * @return EntityGroup
     */
    public function setIsSalesRep(bool $isSalesRep): EntityGroup
    {
        $this->isSalesRep = $isSalesRep;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSalesRep(): bool
    {
        return $this->isSalesRep;
    }

    /**
     * @param bool $isSupportRep
     * @return EntityGroup
     */
    public function setIsSupportRep(bool $isSupportRep): EntityGroup
    {
        $this->isSupportRep = $isSupportRep;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSupportRep(): bool
    {
        return $this->isSupportRep;
    }

    /**
     * @param bool $isProductTeam
     * @return EntityGroup
     */
    public function setIsProductTeam(bool $isProductTeam): EntityGroup
    {
        $this->isProductTeam = $isProductTeam;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsProductTeam(): bool
    {
        return $this->isProductTeam;
    }

    /**
     * @param bool $isFunctionalTeam
     * @return EntityGroup
     */
    public function setIsFunctionalTeam(bool $isFunctionalTeam): EntityGroup
    {
        $this->isFunctionalTeam = $isFunctionalTeam;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsFunctionalTeam(): bool
    {
        return $this->isFunctionalTeam;
    }

    /**
     * @param RecordRef $issueRole
     * @return EntityGroup
     */
    public function setIssueRole(RecordRef $issueRole): EntityGroup
    {
        $this->issueRole = $issueRole;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIssueRole(): RecordRef
    {
        return $this->issueRole;
    }

    /**
     * @param bool $isManufacturingWorkCenter
     * @return EntityGroup
     */
    public function setIsManufacturingWorkCenter(bool $isManufacturingWorkCenter): EntityGroup
    {
        $this->isManufacturingWorkCenter = $isManufacturingWorkCenter;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsManufacturingWorkCenter(): bool
    {
        return $this->isManufacturingWorkCenter;
    }

    /**
     * @param RecordRef $subsidiary
     * @return EntityGroup
     */
    public function setSubsidiary(RecordRef $subsidiary): EntityGroup
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
     * @param float $machineResources
     * @return EntityGroup
     */
    public function setMachineResources(float $machineResources): EntityGroup
    {
        $this->machineResources = $machineResources;
        return $this;
    }

    /**
     * @return float
     */
    public function getMachineResources(): float
    {
        return $this->machineResources;
    }

    /**
     * @param float $laborResources
     * @return EntityGroup
     */
    public function setLaborResources(float $laborResources): EntityGroup
    {
        $this->laborResources = $laborResources;
        return $this;
    }

    /**
     * @return float
     */
    public function getLaborResources(): float
    {
        return $this->laborResources;
    }

    /**
     * @param RecordRef $workCalendar
     * @return EntityGroup
     */
    public function setWorkCalendar(RecordRef $workCalendar): EntityGroup
    {
        $this->workCalendar = $workCalendar;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWorkCalendar(): RecordRef
    {
        return $this->workCalendar;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return EntityGroup
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): EntityGroup
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
     * @return EntityGroup
     */
    public function setInternalId(string $internalId): EntityGroup
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
     * @return EntityGroup
     */
    public function setExternalId(string $externalId): EntityGroup
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
