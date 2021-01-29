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

class CustomRecord extends Record {
    /**
     * @var string
     */
    protected string $customRecordId;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var RecordRef
     */
    protected RecordRef $parent;

    /**
     * @var string
     */
    protected string $disclaimer;

    /**
     * @var string
     */
    protected string $created;

    /**
     * @var string
     */
    protected string $lastModified;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var bool
     */
    protected bool $autoName;

    /**
     * @var string
     */
    protected string $altName;

    /**
     * @var RecordRef
     */
    protected RecordRef $owner;

    /**
     * @var RecordRef
     */
    protected RecordRef $recType;

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
     * @var string
     */
    protected string $description;

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
     * @var CustomRecordTranslationsList
     */
    protected CustomRecordTranslationsList $translationsList;

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
     * @var bool
     */
    protected bool $usePermissions;

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
    protected bool $enablEmailMerge;

    /**
     * @var bool
     */
    protected bool $isOrdered;

    /**
     * @var bool
     */
    protected bool $allowInlineEditing;

    /**
     * @var bool
     */
    protected bool $isAvailableOffline;

    /**
     * @var bool
     */
    protected bool $allowQuickSearch;

    /**
     * @var string
     */
    protected string $recordName;

    /**
     * @var string
     */
    protected string $scriptId;

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
        "customRecordId" => "string",
        "customForm" => "RecordRef",
        "isInactive" => "boolean",
        "parent" => "RecordRef",
        "disclaimer" => "string",
        "created" => "dateTime",
        "lastModified" => "dateTime",
        "name" => "string",
        "autoName" => "boolean",
        "altName" => "string",
        "owner" => "RecordRef",
        "recType" => "RecordRef",
        "enableNumbering" => "boolean",
        "numberingPrefix" => "string",
        "numberingSuffix" => "string",
        "numberingMinDigits" => "integer",
        "description" => "string",
        "numberingInit" => "integer",
        "numberingCurrentNumber" => "integer",
        "allowNumberingOverride" => "boolean",
        "isNumberingUpdateable" => "boolean",
        "translationsList" => "CustomRecordTranslationsList",
        "includeName" => "boolean",
        "showId" => "boolean",
        "showCreationDate" => "boolean",
        "showCreationDateOnList" => "boolean",
        "showLastModified" => "boolean",
        "showLastModifiedOnList" => "boolean",
        "showOwner" => "boolean",
        "showOwnerOnList" => "boolean",
        "showOwnerAllowChange" => "boolean",
        "usePermissions" => "boolean",
        "allowAttachments" => "boolean",
        "showNotes" => "boolean",
        "enablEmailMerge" => "boolean",
        "isOrdered" => "boolean",
        "allowInlineEditing" => "boolean",
        "isAvailableOffline" => "boolean",
        "allowQuickSearch" => "boolean",
        "recordName" => "string",
        "scriptId" => "string",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $customRecordId
     * @return CustomRecord
     */
    public function setCustomRecordId(string $customRecordId): CustomRecord
    {
        $this->customRecordId = $customRecordId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomRecordId(): string
    {
        return $this->customRecordId;
    }

    /**
     * @param RecordRef $customForm
     * @return CustomRecord
     */
    public function setCustomForm(RecordRef $customForm): CustomRecord
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
     * @param bool $isInactive
     * @return CustomRecord
     */
    public function setIsInactive(bool $isInactive): CustomRecord
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
     * @param RecordRef $parent
     * @return CustomRecord
     */
    public function setParent(RecordRef $parent): CustomRecord
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent(): RecordRef
    {
        return $this->parent;
    }

    /**
     * @param string $disclaimer
     * @return CustomRecord
     */
    public function setDisclaimer(string $disclaimer): CustomRecord
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
     * @param string $created
     * @return CustomRecord
     */
    public function setCreated(string $created): CustomRecord
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreated(): string
    {
        return $this->created;
    }

    /**
     * @param string $lastModified
     * @return CustomRecord
     */
    public function setLastModified(string $lastModified): CustomRecord
    {
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastModified(): string
    {
        return $this->lastModified;
    }

    /**
     * @param string $name
     * @return CustomRecord
     */
    public function setName(string $name): CustomRecord
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
     * @param bool $autoName
     * @return CustomRecord
     */
    public function setAutoName(bool $autoName): CustomRecord
    {
        $this->autoName = $autoName;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAutoName(): bool
    {
        return $this->autoName;
    }

    /**
     * @param string $altName
     * @return CustomRecord
     */
    public function setAltName(string $altName): CustomRecord
    {
        $this->altName = $altName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAltName(): string
    {
        return $this->altName;
    }

    /**
     * @param RecordRef $owner
     * @return CustomRecord
     */
    public function setOwner(RecordRef $owner): CustomRecord
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
     * @param RecordRef $recType
     * @return CustomRecord
     */
    public function setRecType(RecordRef $recType): CustomRecord
    {
        $this->recType = $recType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRecType(): RecordRef
    {
        return $this->recType;
    }

    /**
     * @param bool $enableNumbering
     * @return CustomRecord
     */
    public function setEnableNumbering(bool $enableNumbering): CustomRecord
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
     * @return CustomRecord
     */
    public function setNumberingPrefix(string $numberingPrefix): CustomRecord
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
     * @return CustomRecord
     */
    public function setNumberingSuffix(string $numberingSuffix): CustomRecord
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
     * @return CustomRecord
     */
    public function setNumberingMinDigits(int $numberingMinDigits): CustomRecord
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
     * @param string $description
     * @return CustomRecord
     */
    public function setDescription(string $description): CustomRecord
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
     * @param int $numberingInit
     * @return CustomRecord
     */
    public function setNumberingInit(int $numberingInit): CustomRecord
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
     * @return CustomRecord
     */
    public function setNumberingCurrentNumber(int $numberingCurrentNumber): CustomRecord
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
     * @return CustomRecord
     */
    public function setAllowNumberingOverride(bool $allowNumberingOverride): CustomRecord
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
     * @return CustomRecord
     */
    public function setIsNumberingUpdateable(bool $isNumberingUpdateable): CustomRecord
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
     * @param CustomRecordTranslationsList $translationsList
     * @return CustomRecord
     */
    public function setTranslationsList(CustomRecordTranslationsList $translationsList): CustomRecord
    {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * @return CustomRecordTranslationsList
     */
    public function getTranslationsList(): CustomRecordTranslationsList
    {
        return $this->translationsList;
    }

    /**
     * @param bool $includeName
     * @return CustomRecord
     */
    public function setIncludeName(bool $includeName): CustomRecord
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
     * @return CustomRecord
     */
    public function setShowId(bool $showId): CustomRecord
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
     * @return CustomRecord
     */
    public function setShowCreationDate(bool $showCreationDate): CustomRecord
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
     * @return CustomRecord
     */
    public function setShowCreationDateOnList(bool $showCreationDateOnList): CustomRecord
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
     * @return CustomRecord
     */
    public function setShowLastModified(bool $showLastModified): CustomRecord
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
     * @return CustomRecord
     */
    public function setShowLastModifiedOnList(bool $showLastModifiedOnList): CustomRecord
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
     * @return CustomRecord
     */
    public function setShowOwner(bool $showOwner): CustomRecord
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
     * @return CustomRecord
     */
    public function setShowOwnerOnList(bool $showOwnerOnList): CustomRecord
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
     * @return CustomRecord
     */
    public function setShowOwnerAllowChange(bool $showOwnerAllowChange): CustomRecord
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
     * @param bool $usePermissions
     * @return CustomRecord
     */
    public function setUsePermissions(bool $usePermissions): CustomRecord
    {
        $this->usePermissions = $usePermissions;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUsePermissions(): bool
    {
        return $this->usePermissions;
    }

    /**
     * @param bool $allowAttachments
     * @return CustomRecord
     */
    public function setAllowAttachments(bool $allowAttachments): CustomRecord
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
     * @return CustomRecord
     */
    public function setShowNotes(bool $showNotes): CustomRecord
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
     * @param bool $enablEmailMerge
     * @return CustomRecord
     */
    public function setEnablEmailMerge(bool $enablEmailMerge): CustomRecord
    {
        $this->enablEmailMerge = $enablEmailMerge;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEnablEmailMerge(): bool
    {
        return $this->enablEmailMerge;
    }

    /**
     * @param bool $isOrdered
     * @return CustomRecord
     */
    public function setIsOrdered(bool $isOrdered): CustomRecord
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
     * @param bool $allowInlineEditing
     * @return CustomRecord
     */
    public function setAllowInlineEditing(bool $allowInlineEditing): CustomRecord
    {
        $this->allowInlineEditing = $allowInlineEditing;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowInlineEditing(): bool
    {
        return $this->allowInlineEditing;
    }

    /**
     * @param bool $isAvailableOffline
     * @return CustomRecord
     */
    public function setIsAvailableOffline(bool $isAvailableOffline): CustomRecord
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
     * @return CustomRecord
     */
    public function setAllowQuickSearch(bool $allowQuickSearch): CustomRecord
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
     * @param string $recordName
     * @return CustomRecord
     */
    public function setRecordName(string $recordName): CustomRecord
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
     * @param string $scriptId
     * @return CustomRecord
     */
    public function setScriptId(string $scriptId): CustomRecord
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
     * @param CustomFieldList $customFieldList
     * @return CustomRecord
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CustomRecord
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
     * @return CustomRecord
     */
    public function setInternalId(string $internalId): CustomRecord
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
     * @return CustomRecord
     */
    public function setExternalId(string $externalId): CustomRecord
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
