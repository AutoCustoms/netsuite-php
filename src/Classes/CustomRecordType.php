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

class CustomRecordType extends Record {
    /**
     * @var string
     */
    protected string $recordName;

    /**
     * @var bool
     */
    protected bool $includeName;

    /**
     * @var bool
     */
    protected bool $showId;

    /**
     * @var bool
     */
    protected bool $showCreationDate;

    /**
     * @var bool
     */
    protected bool $showCreationDateOnList;

    /**
     * @var bool
     */
    protected bool $showLastModified;

    /**
     * @var bool
     */
    protected bool $showLastModifiedOnList;

    /**
     * @var bool
     */
    protected bool $showOwner;

    /**
     * @var bool
     */
    protected bool $showOwnerOnList;

    /**
     * @var bool
     */
    protected bool $showOwnerAllowChange;

    /**
     * @var CustomRecordTypeAccessType
     */
    protected CustomRecordTypeAccessType $accessType;

    /**
     * @var bool
     */
    protected bool $allowAttachments;

    /**
     * @var bool
     */
    protected bool $showNotes;

    /**
     * @var bool
     */
    protected bool $enableMailMerge;

    /**
     * @var bool
     */
    protected bool $isOrdered;

    /**
     * @var bool
     */
    protected bool $isAvailableOffline;

    /**
     * @var bool
     */
    protected bool $allowQuickSearch;

    /**
     * @var bool
     */
    protected bool $hierarchical;

    /**
     * @var bool
     */
    protected bool $enableDle;

    /**
     * @var bool
     */
    protected bool $enableNameTranslation;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var string
     */
    protected string $disclaimer;

    /**
     * @var bool
     */
    protected bool $enableNumbering;

    /**
     * @var string
     */
    protected string $numberingPrefix;

    /**
     * @var string
     */
    protected string $numberingSuffix;

    /**
     * @var int
     */
    protected int $numberingMinDigits;

    /**
     * @var int
     */
    protected int $numberingInit;

    /**
     * @var int
     */
    protected int $numberingCurrentNumber;

    /**
     * @var bool
     */
    protected bool $allowNumberingOverride;

    /**
     * @var bool
     */
    protected bool $isNumberingUpdateable;

    /**
     * @var RecordRef
     */
    protected RecordRef $owner;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var CustomRecordTypeTabsList
     */
    protected CustomRecordTypeTabsList $tabsList;

    /**
     * @var CustomRecordTypeSublistsList
     */
    protected CustomRecordTypeSublistsList $sublistsList;

    /**
     * @var CustomRecordTypeFormsList
     */
    protected CustomRecordTypeFormsList $formsList;

    /**
     * @var CustomRecordTypeOnlineFormsList
     */
    protected CustomRecordTypeOnlineFormsList $onlineFormsList;

    /**
     * @var CustomRecordTypePermissionsList
     */
    protected CustomRecordTypePermissionsList $permissionsList;

    /**
     * @var CustomRecordTypeLinksList
     */
    protected CustomRecordTypeLinksList $linksList;

    /**
     * @var CustomRecordTypeManagersList
     */
    protected CustomRecordTypeManagersList $managersList;

    /**
     * @var CustomRecordTypeChildrenList
     */
    protected CustomRecordTypeChildrenList $childrenList;

    /**
     * @var CustomRecordTypeParentsList
     */
    protected CustomRecordTypeParentsList $parentsList;

    /**
     * @var CustomRecordTypeTranslationsList
     */
    protected CustomRecordTypeTranslationsList $translationsList;

    /**
     * @var string
     */
    protected string $scriptId;

    /**
     * @var CustomRecordTypeFieldList
     */
    protected CustomRecordTypeFieldList $customFieldList;

    /**
     * @var string
     */
    protected string $internalId;

    static $paramtypesmap = array(
        "recordName" => "string",
        "includeName" => "boolean",
        "showId" => "boolean",
        "showCreationDate" => "boolean",
        "showCreationDateOnList" => "boolean",
        "showLastModified" => "boolean",
        "showLastModifiedOnList" => "boolean",
        "showOwner" => "boolean",
        "showOwnerOnList" => "boolean",
        "showOwnerAllowChange" => "boolean",
        "accessType" => "CustomRecordTypeAccessType",
        "allowAttachments" => "boolean",
        "showNotes" => "boolean",
        "enableMailMerge" => "boolean",
        "isOrdered" => "boolean",
        "isAvailableOffline" => "boolean",
        "allowQuickSearch" => "boolean",
        "hierarchical" => "boolean",
        "enableDle" => "boolean",
        "enableNameTranslation" => "boolean",
        "isInactive" => "boolean",
        "disclaimer" => "string",
        "enableNumbering" => "boolean",
        "numberingPrefix" => "string",
        "numberingSuffix" => "string",
        "numberingMinDigits" => "integer",
        "numberingInit" => "integer",
        "numberingCurrentNumber" => "integer",
        "allowNumberingOverride" => "boolean",
        "isNumberingUpdateable" => "boolean",
        "owner" => "RecordRef",
        "description" => "string",
        "tabsList" => "CustomRecordTypeTabsList",
        "sublistsList" => "CustomRecordTypeSublistsList",
        "formsList" => "CustomRecordTypeFormsList",
        "onlineFormsList" => "CustomRecordTypeOnlineFormsList",
        "permissionsList" => "CustomRecordTypePermissionsList",
        "linksList" => "CustomRecordTypeLinksList",
        "managersList" => "CustomRecordTypeManagersList",
        "childrenList" => "CustomRecordTypeChildrenList",
        "parentsList" => "CustomRecordTypeParentsList",
        "translationsList" => "CustomRecordTypeTranslationsList",
        "scriptId" => "string",
        "customFieldList" => "CustomRecordTypeFieldList",
        "internalId" => "string",
    );

    /**
     * @param string $recordName
     * @return CustomRecordType
     */
    public function setRecordName(string $recordName): CustomRecordType
    {
        $this->recordName = $recordName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecordName(): string
    {
        return $this->recordName;
    }

    /**
     * @param bool $includeName
     * @return CustomRecordType
     */
    public function setIncludeName(bool $includeName): CustomRecordType
    {
        $this->includeName = $includeName;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeName(): bool
    {
        return $this->includeName;
    }

    /**
     * @param bool $showId
     * @return CustomRecordType
     */
    public function setShowId(bool $showId): CustomRecordType
    {
        $this->showId = $showId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowId(): bool
    {
        return $this->showId;
    }

    /**
     * @param bool $showCreationDate
     * @return CustomRecordType
     */
    public function setShowCreationDate(bool $showCreationDate): CustomRecordType
    {
        $this->showCreationDate = $showCreationDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowCreationDate(): bool
    {
        return $this->showCreationDate;
    }

    /**
     * @param bool $showCreationDateOnList
     * @return CustomRecordType
     */
    public function setShowCreationDateOnList(bool $showCreationDateOnList): CustomRecordType
    {
        $this->showCreationDateOnList = $showCreationDateOnList;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowCreationDateOnList(): bool
    {
        return $this->showCreationDateOnList;
    }

    /**
     * @param bool $showLastModified
     * @return CustomRecordType
     */
    public function setShowLastModified(bool $showLastModified): CustomRecordType
    {
        $this->showLastModified = $showLastModified;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowLastModified(): bool
    {
        return $this->showLastModified;
    }

    /**
     * @param bool $showLastModifiedOnList
     * @return CustomRecordType
     */
    public function setShowLastModifiedOnList(bool $showLastModifiedOnList): CustomRecordType
    {
        $this->showLastModifiedOnList = $showLastModifiedOnList;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowLastModifiedOnList(): bool
    {
        return $this->showLastModifiedOnList;
    }

    /**
     * @param bool $showOwner
     * @return CustomRecordType
     */
    public function setShowOwner(bool $showOwner): CustomRecordType
    {
        $this->showOwner = $showOwner;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowOwner(): bool
    {
        return $this->showOwner;
    }

    /**
     * @param bool $showOwnerOnList
     * @return CustomRecordType
     */
    public function setShowOwnerOnList(bool $showOwnerOnList): CustomRecordType
    {
        $this->showOwnerOnList = $showOwnerOnList;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowOwnerOnList(): bool
    {
        return $this->showOwnerOnList;
    }

    /**
     * @param bool $showOwnerAllowChange
     * @return CustomRecordType
     */
    public function setShowOwnerAllowChange(bool $showOwnerAllowChange): CustomRecordType
    {
        $this->showOwnerAllowChange = $showOwnerAllowChange;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowOwnerAllowChange(): bool
    {
        return $this->showOwnerAllowChange;
    }

    /**
     * @param CustomRecordTypeAccessType $accessType
     * @return CustomRecordType
     */
    public function setAccessType(CustomRecordTypeAccessType $accessType): CustomRecordType
    {
        $this->accessType = $accessType;
        return $this;
    }

    /**
     * @return CustomRecordTypeAccessType
     */
    public function getAccessType(): CustomRecordTypeAccessType
    {
        return $this->accessType;
    }

    /**
     * @param bool $allowAttachments
     * @return CustomRecordType
     */
    public function setAllowAttachments(bool $allowAttachments): CustomRecordType
    {
        $this->allowAttachments = $allowAttachments;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowAttachments(): bool
    {
        return $this->allowAttachments;
    }

    /**
     * @param bool $showNotes
     * @return CustomRecordType
     */
    public function setShowNotes(bool $showNotes): CustomRecordType
    {
        $this->showNotes = $showNotes;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowNotes(): bool
    {
        return $this->showNotes;
    }

    /**
     * @param bool $enableMailMerge
     * @return CustomRecordType
     */
    public function setEnableMailMerge(bool $enableMailMerge): CustomRecordType
    {
        $this->enableMailMerge = $enableMailMerge;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEnableMailMerge(): bool
    {
        return $this->enableMailMerge;
    }

    /**
     * @param bool $isOrdered
     * @return CustomRecordType
     */
    public function setIsOrdered(bool $isOrdered): CustomRecordType
    {
        $this->isOrdered = $isOrdered;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsOrdered(): bool
    {
        return $this->isOrdered;
    }

    /**
     * @param bool $isAvailableOffline
     * @return CustomRecordType
     */
    public function setIsAvailableOffline(bool $isAvailableOffline): CustomRecordType
    {
        $this->isAvailableOffline = $isAvailableOffline;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAvailableOffline(): bool
    {
        return $this->isAvailableOffline;
    }

    /**
     * @param bool $allowQuickSearch
     * @return CustomRecordType
     */
    public function setAllowQuickSearch(bool $allowQuickSearch): CustomRecordType
    {
        $this->allowQuickSearch = $allowQuickSearch;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowQuickSearch(): bool
    {
        return $this->allowQuickSearch;
    }

    /**
     * @param bool $hierarchical
     * @return CustomRecordType
     */
    public function setHierarchical(bool $hierarchical): CustomRecordType
    {
        $this->hierarchical = $hierarchical;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHierarchical(): bool
    {
        return $this->hierarchical;
    }

    /**
     * @param bool $enableDle
     * @return CustomRecordType
     */
    public function setEnableDle(bool $enableDle): CustomRecordType
    {
        $this->enableDle = $enableDle;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEnableDle(): bool
    {
        return $this->enableDle;
    }

    /**
     * @param bool $enableNameTranslation
     * @return CustomRecordType
     */
    public function setEnableNameTranslation(bool $enableNameTranslation): CustomRecordType
    {
        $this->enableNameTranslation = $enableNameTranslation;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEnableNameTranslation(): bool
    {
        return $this->enableNameTranslation;
    }

    /**
     * @param bool $isInactive
     * @return CustomRecordType
     */
    public function setIsInactive(bool $isInactive): CustomRecordType
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
     * @param string $disclaimer
     * @return CustomRecordType
     */
    public function setDisclaimer(string $disclaimer): CustomRecordType
    {
        $this->disclaimer = $disclaimer;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisclaimer(): string
    {
        return $this->disclaimer;
    }

    /**
     * @param bool $enableNumbering
     * @return CustomRecordType
     */
    public function setEnableNumbering(bool $enableNumbering): CustomRecordType
    {
        $this->enableNumbering = $enableNumbering;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEnableNumbering(): bool
    {
        return $this->enableNumbering;
    }

    /**
     * @param string $numberingPrefix
     * @return CustomRecordType
     */
    public function setNumberingPrefix(string $numberingPrefix): CustomRecordType
    {
        $this->numberingPrefix = $numberingPrefix;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumberingPrefix(): string
    {
        return $this->numberingPrefix;
    }

    /**
     * @param string $numberingSuffix
     * @return CustomRecordType
     */
    public function setNumberingSuffix(string $numberingSuffix): CustomRecordType
    {
        $this->numberingSuffix = $numberingSuffix;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumberingSuffix(): string
    {
        return $this->numberingSuffix;
    }

    /**
     * @param int $numberingMinDigits
     * @return CustomRecordType
     */
    public function setNumberingMinDigits(int $numberingMinDigits): CustomRecordType
    {
        $this->numberingMinDigits = $numberingMinDigits;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberingMinDigits(): int
    {
        return $this->numberingMinDigits;
    }

    /**
     * @param int $numberingInit
     * @return CustomRecordType
     */
    public function setNumberingInit(int $numberingInit): CustomRecordType
    {
        $this->numberingInit = $numberingInit;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberingInit(): int
    {
        return $this->numberingInit;
    }

    /**
     * @param int $numberingCurrentNumber
     * @return CustomRecordType
     */
    public function setNumberingCurrentNumber(int $numberingCurrentNumber): CustomRecordType
    {
        $this->numberingCurrentNumber = $numberingCurrentNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberingCurrentNumber(): int
    {
        return $this->numberingCurrentNumber;
    }

    /**
     * @param bool $allowNumberingOverride
     * @return CustomRecordType
     */
    public function setAllowNumberingOverride(bool $allowNumberingOverride): CustomRecordType
    {
        $this->allowNumberingOverride = $allowNumberingOverride;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowNumberingOverride(): bool
    {
        return $this->allowNumberingOverride;
    }

    /**
     * @param bool $isNumberingUpdateable
     * @return CustomRecordType
     */
    public function setIsNumberingUpdateable(bool $isNumberingUpdateable): CustomRecordType
    {
        $this->isNumberingUpdateable = $isNumberingUpdateable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsNumberingUpdateable(): bool
    {
        return $this->isNumberingUpdateable;
    }

    /**
     * @param RecordRef $owner
     * @return CustomRecordType
     */
    public function setOwner(RecordRef $owner): CustomRecordType
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOwner(): RecordRef
    {
        return $this->owner;
    }

    /**
     * @param string $description
     * @return CustomRecordType
     */
    public function setDescription(string $description): CustomRecordType
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param CustomRecordTypeTabsList $tabsList
     * @return CustomRecordType
     */
    public function setTabsList(CustomRecordTypeTabsList $tabsList): CustomRecordType
    {
        $this->tabsList = $tabsList;
        return $this;
    }

    /**
     * @return CustomRecordTypeTabsList
     */
    public function getTabsList(): CustomRecordTypeTabsList
    {
        return $this->tabsList;
    }

    /**
     * @param CustomRecordTypeSublistsList $sublistsList
     * @return CustomRecordType
     */
    public function setSublistsList(CustomRecordTypeSublistsList $sublistsList): CustomRecordType
    {
        $this->sublistsList = $sublistsList;
        return $this;
    }

    /**
     * @return CustomRecordTypeSublistsList
     */
    public function getSublistsList(): CustomRecordTypeSublistsList
    {
        return $this->sublistsList;
    }

    /**
     * @param CustomRecordTypeFormsList $formsList
     * @return CustomRecordType
     */
    public function setFormsList(CustomRecordTypeFormsList $formsList): CustomRecordType
    {
        $this->formsList = $formsList;
        return $this;
    }

    /**
     * @return CustomRecordTypeFormsList
     */
    public function getFormsList(): CustomRecordTypeFormsList
    {
        return $this->formsList;
    }

    /**
     * @param CustomRecordTypeOnlineFormsList $onlineFormsList
     * @return CustomRecordType
     */
    public function setOnlineFormsList(CustomRecordTypeOnlineFormsList $onlineFormsList): CustomRecordType
    {
        $this->onlineFormsList = $onlineFormsList;
        return $this;
    }

    /**
     * @return CustomRecordTypeOnlineFormsList
     */
    public function getOnlineFormsList(): CustomRecordTypeOnlineFormsList
    {
        return $this->onlineFormsList;
    }

    /**
     * @param CustomRecordTypePermissionsList $permissionsList
     * @return CustomRecordType
     */
    public function setPermissionsList(CustomRecordTypePermissionsList $permissionsList): CustomRecordType
    {
        $this->permissionsList = $permissionsList;
        return $this;
    }

    /**
     * @return CustomRecordTypePermissionsList
     */
    public function getPermissionsList(): CustomRecordTypePermissionsList
    {
        return $this->permissionsList;
    }

    /**
     * @param CustomRecordTypeLinksList $linksList
     * @return CustomRecordType
     */
    public function setLinksList(CustomRecordTypeLinksList $linksList): CustomRecordType
    {
        $this->linksList = $linksList;
        return $this;
    }

    /**
     * @return CustomRecordTypeLinksList
     */
    public function getLinksList(): CustomRecordTypeLinksList
    {
        return $this->linksList;
    }

    /**
     * @param CustomRecordTypeManagersList $managersList
     * @return CustomRecordType
     */
    public function setManagersList(CustomRecordTypeManagersList $managersList): CustomRecordType
    {
        $this->managersList = $managersList;
        return $this;
    }

    /**
     * @return CustomRecordTypeManagersList
     */
    public function getManagersList(): CustomRecordTypeManagersList
    {
        return $this->managersList;
    }

    /**
     * @param CustomRecordTypeChildrenList $childrenList
     * @return CustomRecordType
     */
    public function setChildrenList(CustomRecordTypeChildrenList $childrenList): CustomRecordType
    {
        $this->childrenList = $childrenList;
        return $this;
    }

    /**
     * @return CustomRecordTypeChildrenList
     */
    public function getChildrenList(): CustomRecordTypeChildrenList
    {
        return $this->childrenList;
    }

    /**
     * @param CustomRecordTypeParentsList $parentsList
     * @return CustomRecordType
     */
    public function setParentsList(CustomRecordTypeParentsList $parentsList): CustomRecordType
    {
        $this->parentsList = $parentsList;
        return $this;
    }

    /**
     * @return CustomRecordTypeParentsList
     */
    public function getParentsList(): CustomRecordTypeParentsList
    {
        return $this->parentsList;
    }

    /**
     * @param CustomRecordTypeTranslationsList $translationsList
     * @return CustomRecordType
     */
    public function setTranslationsList(CustomRecordTypeTranslationsList $translationsList): CustomRecordType
    {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * @return CustomRecordTypeTranslationsList
     */
    public function getTranslationsList(): CustomRecordTypeTranslationsList
    {
        return $this->translationsList;
    }

    /**
     * @param string $scriptId
     * @return CustomRecordType
     */
    public function setScriptId(string $scriptId): CustomRecordType
    {
        $this->scriptId = $scriptId;
        return $this;
    }

    /**
     * @return string
     */
    public function getScriptId(): string
    {
        return $this->scriptId;
    }

    /**
     * @param CustomRecordTypeFieldList $customFieldList
     * @return CustomRecordType
     */
    public function setCustomFieldList(CustomRecordTypeFieldList $customFieldList): CustomRecordType
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return CustomRecordTypeFieldList
     */
    public function getCustomFieldList(): CustomRecordTypeFieldList
    {
        return $this->customFieldList;
    }

    /**
     * @param string $internalId
     * @return CustomRecordType
     */
    public function setInternalId(string $internalId): CustomRecordType
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

}
