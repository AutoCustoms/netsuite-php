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

class EntityCustomField extends CustomFieldType {
    /**
     * @var string
     */
    protected string $label;

    /**
     * @var RecordRef
     */
    protected RecordRef $owner;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var RecordRef
     */
    protected RecordRef $selectRecordType;

    /**
     * @var bool
     */
    protected bool $storeValue;

    /**
     * @var bool
     */
    protected bool $showInList;

    /**
     * @var bool
     */
    protected bool $globalSearch;

    /**
     * @var bool
     */
    protected bool $isParent;

    /**
     * @var RecordRef
     */
    protected RecordRef $insertBefore;

    /**
     * @var bool
     */
    protected bool $availableToSso;

    /**
     * @var RecordRef
     */
    protected RecordRef $subtab;

    /**
     * @var CustomizationDisplayType
     */
    protected CustomizationDisplayType $displayType;

    /**
     * @var int
     */
    protected int $displayWidth;

    /**
     * @var int
     */
    protected int $displayHeight;

    /**
     * @var string
     */
    protected string $help;

    /**
     * @var RecordRef
     */
    protected RecordRef $parentSubtab;

    /**
     * @var string
     */
    protected string $linkText;

    /**
     * @var bool
     */
    protected bool $isMandatory;

    /**
     * @var bool
     */
    protected bool $checkSpelling;

    /**
     * @var int
     */
    protected int $maxLength;

    /**
     * @var float
     */
    protected float $minValue;

    /**
     * @var float
     */
    protected float $maxValue;

    /**
     * @var bool
     */
    protected bool $defaultChecked;

    /**
     * @var string
     */
    protected string $defaultValue;

    /**
     * @var bool
     */
    protected bool $isFormula;

    /**
     * @var RecordRef
     */
    protected RecordRef $defaultSelection;

    /**
     * @var CustomizationDynamicDefault
     */
    protected CustomizationDynamicDefault $dynamicDefault;

    /**
     * @var RecordRef
     */
    protected RecordRef $searchDefault;

    /**
     * @var RecordRef
     */
    protected RecordRef $searchCompareField;

    /**
     * @var RecordRef
     */
    protected RecordRef $sourceList;

    /**
     * @var RecordRef
     */
    protected RecordRef $sourceFrom;

    /**
     * @var RecordRef
     */
    protected RecordRef $sourceFilterBy;

    /**
     * @var RecordRef
     */
    protected RecordRef $customSegment;

    /**
     * @var bool
     */
    protected bool $appliesToCustomer;

    /**
     * @var bool
     */
    protected bool $appliesToProject;

    /**
     * @var bool
     */
    protected bool $appliesToVendor;

    /**
     * @var bool
     */
    protected bool $appliesToEmployee;

    /**
     * @var bool
     */
    protected bool $appliesToOtherName;

    /**
     * @var bool
     */
    protected bool $appliesToContact;

    /**
     * @var bool
     */
    protected bool $appliesToPartner;

    /**
     * @var bool
     */
    protected bool $appliesToWebSite;

    /**
     * @var bool
     */
    protected bool $appliesToGroup;

    /**
     * @var bool
     */
    protected bool $availableExternally;

    /**
     * @var EntityCustomFieldFilterList
     */
    protected EntityCustomFieldFilterList $filterList;

    /**
     * @var CustomizationAccessLevel
     */
    protected CustomizationAccessLevel $accessLevel;

    /**
     * @var bool
     */
    protected bool $appliesToStatement;

    /**
     * @var CustomizationSearchLevel
     */
    protected CustomizationSearchLevel $searchLevel;

    /**
     * @var bool
     */
    protected bool $appliesToPriceList;

    /**
     * @var CustomFieldRoleAccessList
     */
    protected CustomFieldRoleAccessList $roleAccessList;

    /**
     * @var CustomFieldDepartmentAccessList
     */
    protected CustomFieldDepartmentAccessList $deptAccessList;

    /**
     * @var CustomFieldSubAccessList
     */
    protected CustomFieldSubAccessList $subAccessList;

    /**
     * @var CustomFieldTranslationsList
     */
    protected CustomFieldTranslationsList $translationsList;

    /**
     * @var string
     */
    protected string $internalId;

    static $paramtypesmap = array(
        "label" => "string",
        "owner" => "RecordRef",
        "description" => "string",
        "selectRecordType" => "RecordRef",
        "storeValue" => "boolean",
        "showInList" => "boolean",
        "globalSearch" => "boolean",
        "isParent" => "boolean",
        "insertBefore" => "RecordRef",
        "availableToSso" => "boolean",
        "subtab" => "RecordRef",
        "displayType" => "CustomizationDisplayType",
        "displayWidth" => "integer",
        "displayHeight" => "integer",
        "help" => "string",
        "parentSubtab" => "RecordRef",
        "linkText" => "string",
        "isMandatory" => "boolean",
        "checkSpelling" => "boolean",
        "maxLength" => "integer",
        "minValue" => "float",
        "maxValue" => "float",
        "defaultChecked" => "boolean",
        "defaultValue" => "string",
        "isFormula" => "boolean",
        "defaultSelection" => "RecordRef",
        "dynamicDefault" => "CustomizationDynamicDefault",
        "searchDefault" => "RecordRef",
        "searchCompareField" => "RecordRef",
        "sourceList" => "RecordRef",
        "sourceFrom" => "RecordRef",
        "sourceFilterBy" => "RecordRef",
        "customSegment" => "RecordRef",
        "appliesToCustomer" => "boolean",
        "appliesToProject" => "boolean",
        "appliesToVendor" => "boolean",
        "appliesToEmployee" => "boolean",
        "appliesToOtherName" => "boolean",
        "appliesToContact" => "boolean",
        "appliesToPartner" => "boolean",
        "appliesToWebSite" => "boolean",
        "appliesToGroup" => "boolean",
        "availableExternally" => "boolean",
        "filterList" => "EntityCustomFieldFilterList",
        "accessLevel" => "CustomizationAccessLevel",
        "appliesToStatement" => "boolean",
        "searchLevel" => "CustomizationSearchLevel",
        "appliesToPriceList" => "boolean",
        "roleAccessList" => "CustomFieldRoleAccessList",
        "deptAccessList" => "CustomFieldDepartmentAccessList",
        "subAccessList" => "CustomFieldSubAccessList",
        "translationsList" => "CustomFieldTranslationsList",
        "internalId" => "string",
    );

    /**
     * @param string $label
     * @return EntityCustomField
     */
    public function setLabel(string $label): EntityCustomField
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param RecordRef $owner
     * @return EntityCustomField
     */
    public function setOwner(RecordRef $owner): EntityCustomField
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
     * @return EntityCustomField
     */
    public function setDescription(string $description): EntityCustomField
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
     * @param RecordRef $selectRecordType
     * @return EntityCustomField
     */
    public function setSelectRecordType(RecordRef $selectRecordType): EntityCustomField
    {
        $this->selectRecordType = $selectRecordType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSelectRecordType(): RecordRef
    {
        return $this->selectRecordType;
    }

    /**
     * @param bool $storeValue
     * @return EntityCustomField
     */
    public function setStoreValue(bool $storeValue): EntityCustomField
    {
        $this->storeValue = $storeValue;
        return $this;
    }

    /**
     * @return bool
     */
    public function getStoreValue(): bool
    {
        return $this->storeValue;
    }

    /**
     * @param bool $showInList
     * @return EntityCustomField
     */
    public function setShowInList(bool $showInList): EntityCustomField
    {
        $this->showInList = $showInList;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowInList(): bool
    {
        return $this->showInList;
    }

    /**
     * @param bool $globalSearch
     * @return EntityCustomField
     */
    public function setGlobalSearch(bool $globalSearch): EntityCustomField
    {
        $this->globalSearch = $globalSearch;
        return $this;
    }

    /**
     * @return bool
     */
    public function getGlobalSearch(): bool
    {
        return $this->globalSearch;
    }

    /**
     * @param bool $isParent
     * @return EntityCustomField
     */
    public function setIsParent(bool $isParent): EntityCustomField
    {
        $this->isParent = $isParent;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsParent(): bool
    {
        return $this->isParent;
    }

    /**
     * @param RecordRef $insertBefore
     * @return EntityCustomField
     */
    public function setInsertBefore(RecordRef $insertBefore): EntityCustomField
    {
        $this->insertBefore = $insertBefore;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInsertBefore(): RecordRef
    {
        return $this->insertBefore;
    }

    /**
     * @param bool $availableToSso
     * @return EntityCustomField
     */
    public function setAvailableToSso(bool $availableToSso): EntityCustomField
    {
        $this->availableToSso = $availableToSso;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAvailableToSso(): bool
    {
        return $this->availableToSso;
    }

    /**
     * @param RecordRef $subtab
     * @return EntityCustomField
     */
    public function setSubtab(RecordRef $subtab): EntityCustomField
    {
        $this->subtab = $subtab;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubtab(): RecordRef
    {
        return $this->subtab;
    }

    /**
     * @param CustomizationDisplayType $displayType
     * @return EntityCustomField
     */
    public function setDisplayType(CustomizationDisplayType $displayType): EntityCustomField
    {
        $this->displayType = $displayType;
        return $this;
    }

    /**
     * @return CustomizationDisplayType
     */
    public function getDisplayType(): CustomizationDisplayType
    {
        return $this->displayType;
    }

    /**
     * @param int $displayWidth
     * @return EntityCustomField
     */
    public function setDisplayWidth(int $displayWidth): EntityCustomField
    {
        $this->displayWidth = $displayWidth;
        return $this;
    }

    /**
     * @return int
     */
    public function getDisplayWidth(): int
    {
        return $this->displayWidth;
    }

    /**
     * @param int $displayHeight
     * @return EntityCustomField
     */
    public function setDisplayHeight(int $displayHeight): EntityCustomField
    {
        $this->displayHeight = $displayHeight;
        return $this;
    }

    /**
     * @return int
     */
    public function getDisplayHeight(): int
    {
        return $this->displayHeight;
    }

    /**
     * @param string $help
     * @return EntityCustomField
     */
    public function setHelp(string $help): EntityCustomField
    {
        $this->help = $help;
        return $this;
    }

    /**
     * @return string
     */
    public function getHelp(): string
    {
        return $this->help;
    }

    /**
     * @param RecordRef $parentSubtab
     * @return EntityCustomField
     */
    public function setParentSubtab(RecordRef $parentSubtab): EntityCustomField
    {
        $this->parentSubtab = $parentSubtab;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParentSubtab(): RecordRef
    {
        return $this->parentSubtab;
    }

    /**
     * @param string $linkText
     * @return EntityCustomField
     */
    public function setLinkText(string $linkText): EntityCustomField
    {
        $this->linkText = $linkText;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinkText(): string
    {
        return $this->linkText;
    }

    /**
     * @param bool $isMandatory
     * @return EntityCustomField
     */
    public function setIsMandatory(bool $isMandatory): EntityCustomField
    {
        $this->isMandatory = $isMandatory;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsMandatory(): bool
    {
        return $this->isMandatory;
    }

    /**
     * @param bool $checkSpelling
     * @return EntityCustomField
     */
    public function setCheckSpelling(bool $checkSpelling): EntityCustomField
    {
        $this->checkSpelling = $checkSpelling;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCheckSpelling(): bool
    {
        return $this->checkSpelling;
    }

    /**
     * @param int $maxLength
     * @return EntityCustomField
     */
    public function setMaxLength(int $maxLength): EntityCustomField
    {
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxLength(): int
    {
        return $this->maxLength;
    }

    /**
     * @param float $minValue
     * @return EntityCustomField
     */
    public function setMinValue(float $minValue): EntityCustomField
    {
        $this->minValue = $minValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getMinValue(): float
    {
        return $this->minValue;
    }

    /**
     * @param float $maxValue
     * @return EntityCustomField
     */
    public function setMaxValue(float $maxValue): EntityCustomField
    {
        $this->maxValue = $maxValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxValue(): float
    {
        return $this->maxValue;
    }

    /**
     * @param bool $defaultChecked
     * @return EntityCustomField
     */
    public function setDefaultChecked(bool $defaultChecked): EntityCustomField
    {
        $this->defaultChecked = $defaultChecked;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDefaultChecked(): bool
    {
        return $this->defaultChecked;
    }

    /**
     * @param string $defaultValue
     * @return EntityCustomField
     */
    public function setDefaultValue(string $defaultValue): EntityCustomField
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultValue(): string
    {
        return $this->defaultValue;
    }

    /**
     * @param bool $isFormula
     * @return EntityCustomField
     */
    public function setIsFormula(bool $isFormula): EntityCustomField
    {
        $this->isFormula = $isFormula;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsFormula(): bool
    {
        return $this->isFormula;
    }

    /**
     * @param RecordRef $defaultSelection
     * @return EntityCustomField
     */
    public function setDefaultSelection(RecordRef $defaultSelection): EntityCustomField
    {
        $this->defaultSelection = $defaultSelection;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDefaultSelection(): RecordRef
    {
        return $this->defaultSelection;
    }

    /**
     * @param CustomizationDynamicDefault $dynamicDefault
     * @return EntityCustomField
     */
    public function setDynamicDefault(CustomizationDynamicDefault $dynamicDefault): EntityCustomField
    {
        $this->dynamicDefault = $dynamicDefault;
        return $this;
    }

    /**
     * @return CustomizationDynamicDefault
     */
    public function getDynamicDefault(): CustomizationDynamicDefault
    {
        return $this->dynamicDefault;
    }

    /**
     * @param RecordRef $searchDefault
     * @return EntityCustomField
     */
    public function setSearchDefault(RecordRef $searchDefault): EntityCustomField
    {
        $this->searchDefault = $searchDefault;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSearchDefault(): RecordRef
    {
        return $this->searchDefault;
    }

    /**
     * @param RecordRef $searchCompareField
     * @return EntityCustomField
     */
    public function setSearchCompareField(RecordRef $searchCompareField): EntityCustomField
    {
        $this->searchCompareField = $searchCompareField;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSearchCompareField(): RecordRef
    {
        return $this->searchCompareField;
    }

    /**
     * @param RecordRef $sourceList
     * @return EntityCustomField
     */
    public function setSourceList(RecordRef $sourceList): EntityCustomField
    {
        $this->sourceList = $sourceList;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSourceList(): RecordRef
    {
        return $this->sourceList;
    }

    /**
     * @param RecordRef $sourceFrom
     * @return EntityCustomField
     */
    public function setSourceFrom(RecordRef $sourceFrom): EntityCustomField
    {
        $this->sourceFrom = $sourceFrom;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSourceFrom(): RecordRef
    {
        return $this->sourceFrom;
    }

    /**
     * @param RecordRef $sourceFilterBy
     * @return EntityCustomField
     */
    public function setSourceFilterBy(RecordRef $sourceFilterBy): EntityCustomField
    {
        $this->sourceFilterBy = $sourceFilterBy;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSourceFilterBy(): RecordRef
    {
        return $this->sourceFilterBy;
    }

    /**
     * @param RecordRef $customSegment
     * @return EntityCustomField
     */
    public function setCustomSegment(RecordRef $customSegment): EntityCustomField
    {
        $this->customSegment = $customSegment;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomSegment(): RecordRef
    {
        return $this->customSegment;
    }

    /**
     * @param bool $appliesToCustomer
     * @return EntityCustomField
     */
    public function setAppliesToCustomer(bool $appliesToCustomer): EntityCustomField
    {
        $this->appliesToCustomer = $appliesToCustomer;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToCustomer(): bool
    {
        return $this->appliesToCustomer;
    }

    /**
     * @param bool $appliesToProject
     * @return EntityCustomField
     */
    public function setAppliesToProject(bool $appliesToProject): EntityCustomField
    {
        $this->appliesToProject = $appliesToProject;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToProject(): bool
    {
        return $this->appliesToProject;
    }

    /**
     * @param bool $appliesToVendor
     * @return EntityCustomField
     */
    public function setAppliesToVendor(bool $appliesToVendor): EntityCustomField
    {
        $this->appliesToVendor = $appliesToVendor;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToVendor(): bool
    {
        return $this->appliesToVendor;
    }

    /**
     * @param bool $appliesToEmployee
     * @return EntityCustomField
     */
    public function setAppliesToEmployee(bool $appliesToEmployee): EntityCustomField
    {
        $this->appliesToEmployee = $appliesToEmployee;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToEmployee(): bool
    {
        return $this->appliesToEmployee;
    }

    /**
     * @param bool $appliesToOtherName
     * @return EntityCustomField
     */
    public function setAppliesToOtherName(bool $appliesToOtherName): EntityCustomField
    {
        $this->appliesToOtherName = $appliesToOtherName;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToOtherName(): bool
    {
        return $this->appliesToOtherName;
    }

    /**
     * @param bool $appliesToContact
     * @return EntityCustomField
     */
    public function setAppliesToContact(bool $appliesToContact): EntityCustomField
    {
        $this->appliesToContact = $appliesToContact;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToContact(): bool
    {
        return $this->appliesToContact;
    }

    /**
     * @param bool $appliesToPartner
     * @return EntityCustomField
     */
    public function setAppliesToPartner(bool $appliesToPartner): EntityCustomField
    {
        $this->appliesToPartner = $appliesToPartner;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToPartner(): bool
    {
        return $this->appliesToPartner;
    }

    /**
     * @param bool $appliesToWebSite
     * @return EntityCustomField
     */
    public function setAppliesToWebSite(bool $appliesToWebSite): EntityCustomField
    {
        $this->appliesToWebSite = $appliesToWebSite;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToWebSite(): bool
    {
        return $this->appliesToWebSite;
    }

    /**
     * @param bool $appliesToGroup
     * @return EntityCustomField
     */
    public function setAppliesToGroup(bool $appliesToGroup): EntityCustomField
    {
        $this->appliesToGroup = $appliesToGroup;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToGroup(): bool
    {
        return $this->appliesToGroup;
    }

    /**
     * @param bool $availableExternally
     * @return EntityCustomField
     */
    public function setAvailableExternally(bool $availableExternally): EntityCustomField
    {
        $this->availableExternally = $availableExternally;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAvailableExternally(): bool
    {
        return $this->availableExternally;
    }

    /**
     * @param EntityCustomFieldFilterList $filterList
     * @return EntityCustomField
     */
    public function setFilterList(EntityCustomFieldFilterList $filterList): EntityCustomField
    {
        $this->filterList = $filterList;
        return $this;
    }

    /**
     * @return EntityCustomFieldFilterList
     */
    public function getFilterList(): EntityCustomFieldFilterList
    {
        return $this->filterList;
    }

    /**
     * @param CustomizationAccessLevel $accessLevel
     * @return EntityCustomField
     */
    public function setAccessLevel(CustomizationAccessLevel $accessLevel): EntityCustomField
    {
        $this->accessLevel = $accessLevel;
        return $this;
    }

    /**
     * @return CustomizationAccessLevel
     */
    public function getAccessLevel(): CustomizationAccessLevel
    {
        return $this->accessLevel;
    }

    /**
     * @param bool $appliesToStatement
     * @return EntityCustomField
     */
    public function setAppliesToStatement(bool $appliesToStatement): EntityCustomField
    {
        $this->appliesToStatement = $appliesToStatement;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToStatement(): bool
    {
        return $this->appliesToStatement;
    }

    /**
     * @param CustomizationSearchLevel $searchLevel
     * @return EntityCustomField
     */
    public function setSearchLevel(CustomizationSearchLevel $searchLevel): EntityCustomField
    {
        $this->searchLevel = $searchLevel;
        return $this;
    }

    /**
     * @return CustomizationSearchLevel
     */
    public function getSearchLevel(): CustomizationSearchLevel
    {
        return $this->searchLevel;
    }

    /**
     * @param bool $appliesToPriceList
     * @return EntityCustomField
     */
    public function setAppliesToPriceList(bool $appliesToPriceList): EntityCustomField
    {
        $this->appliesToPriceList = $appliesToPriceList;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToPriceList(): bool
    {
        return $this->appliesToPriceList;
    }

    /**
     * @param CustomFieldRoleAccessList $roleAccessList
     * @return EntityCustomField
     */
    public function setRoleAccessList(CustomFieldRoleAccessList $roleAccessList): EntityCustomField
    {
        $this->roleAccessList = $roleAccessList;
        return $this;
    }

    /**
     * @return CustomFieldRoleAccessList
     */
    public function getRoleAccessList(): CustomFieldRoleAccessList
    {
        return $this->roleAccessList;
    }

    /**
     * @param CustomFieldDepartmentAccessList $deptAccessList
     * @return EntityCustomField
     */
    public function setDeptAccessList(CustomFieldDepartmentAccessList $deptAccessList): EntityCustomField
    {
        $this->deptAccessList = $deptAccessList;
        return $this;
    }

    /**
     * @return CustomFieldDepartmentAccessList
     */
    public function getDeptAccessList(): CustomFieldDepartmentAccessList
    {
        return $this->deptAccessList;
    }

    /**
     * @param CustomFieldSubAccessList $subAccessList
     * @return EntityCustomField
     */
    public function setSubAccessList(CustomFieldSubAccessList $subAccessList): EntityCustomField
    {
        $this->subAccessList = $subAccessList;
        return $this;
    }

    /**
     * @return CustomFieldSubAccessList
     */
    public function getSubAccessList(): CustomFieldSubAccessList
    {
        return $this->subAccessList;
    }

    /**
     * @param CustomFieldTranslationsList $translationsList
     * @return EntityCustomField
     */
    public function setTranslationsList(CustomFieldTranslationsList $translationsList): EntityCustomField
    {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * @return CustomFieldTranslationsList
     */
    public function getTranslationsList(): CustomFieldTranslationsList
    {
        return $this->translationsList;
    }

    /**
     * @param string $internalId
     * @return EntityCustomField
     */
    public function setInternalId(string $internalId): EntityCustomField
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
