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

class CustomRecordCustomField extends CustomFieldType {
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
    protected RecordRef $sourcefilterby;

    /**
     * @var RecordRef
     */
    protected RecordRef $customSegment;

    /**
     * @var string
     */
    protected string $recType;

    /**
     * @var bool
     */
    protected bool $roleRestrict;

    /**
     * @var CustomRecordCustomFieldFilterList
     */
    protected CustomRecordCustomFieldFilterList $filterList;

    /**
     * @var CustomizationAccessLevel
     */
    protected CustomizationAccessLevel $accessLevel;

    /**
     * @var CustomizationSearchLevel
     */
    protected CustomizationSearchLevel $searchLevel;

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
        "sourcefilterby" => "RecordRef",
        "customSegment" => "RecordRef",
        "recType" => "string",
        "roleRestrict" => "boolean",
        "filterList" => "CustomRecordCustomFieldFilterList",
        "accessLevel" => "CustomizationAccessLevel",
        "searchLevel" => "CustomizationSearchLevel",
        "roleAccessList" => "CustomFieldRoleAccessList",
        "deptAccessList" => "CustomFieldDepartmentAccessList",
        "subAccessList" => "CustomFieldSubAccessList",
        "translationsList" => "CustomFieldTranslationsList",
        "internalId" => "string",
    );

    /**
     * @param string $label
     * @return CustomRecordCustomField
     */
    public function setLabel(string $label): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setOwner(RecordRef $owner): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setDescription(string $description): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setSelectRecordType(RecordRef $selectRecordType): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setStoreValue(bool $storeValue): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setShowInList(bool $showInList): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setGlobalSearch(bool $globalSearch): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setIsParent(bool $isParent): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setInsertBefore(RecordRef $insertBefore): CustomRecordCustomField
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
     * @param RecordRef $subtab
     * @return CustomRecordCustomField
     */
    public function setSubtab(RecordRef $subtab): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setDisplayType(CustomizationDisplayType $displayType): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setDisplayWidth(int $displayWidth): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setDisplayHeight(int $displayHeight): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setHelp(string $help): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setParentSubtab(RecordRef $parentSubtab): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setLinkText(string $linkText): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setIsMandatory(bool $isMandatory): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setCheckSpelling(bool $checkSpelling): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setMaxLength(int $maxLength): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setMinValue(float $minValue): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setMaxValue(float $maxValue): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setDefaultChecked(bool $defaultChecked): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setDefaultValue(string $defaultValue): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setIsFormula(bool $isFormula): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setDefaultSelection(RecordRef $defaultSelection): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setDynamicDefault(CustomizationDynamicDefault $dynamicDefault): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setSearchDefault(RecordRef $searchDefault): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setSearchCompareField(RecordRef $searchCompareField): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setSourceList(RecordRef $sourceList): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setSourceFrom(RecordRef $sourceFrom): CustomRecordCustomField
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
     * @param RecordRef $sourcefilterby
     * @return CustomRecordCustomField
     */
    public function setSourcefilterby(RecordRef $sourcefilterby): CustomRecordCustomField
    {
        $this->sourcefilterby = $sourcefilterby;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSourcefilterby(): RecordRef
    {
        return $this->sourcefilterby;
    }

    /**
     * @param RecordRef $customSegment
     * @return CustomRecordCustomField
     */
    public function setCustomSegment(RecordRef $customSegment): CustomRecordCustomField
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
     * @param string $recType
     * @return CustomRecordCustomField
     */
    public function setRecType(string $recType): CustomRecordCustomField
    {
        $this->recType = $recType;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecType(): string
    {
        return $this->recType;
    }

    /**
     * @param bool $roleRestrict
     * @return CustomRecordCustomField
     */
    public function setRoleRestrict(bool $roleRestrict): CustomRecordCustomField
    {
        $this->roleRestrict = $roleRestrict;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRoleRestrict(): bool
    {
        return $this->roleRestrict;
    }

    /**
     * @param CustomRecordCustomFieldFilterList $filterList
     * @return CustomRecordCustomField
     */
    public function setFilterList(CustomRecordCustomFieldFilterList $filterList): CustomRecordCustomField
    {
        $this->filterList = $filterList;
        return $this;
    }

    /**
     * @return CustomRecordCustomFieldFilterList
     */
    public function getFilterList(): CustomRecordCustomFieldFilterList
    {
        return $this->filterList;
    }

    /**
     * @param CustomizationAccessLevel $accessLevel
     * @return CustomRecordCustomField
     */
    public function setAccessLevel(CustomizationAccessLevel $accessLevel): CustomRecordCustomField
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
     * @param CustomizationSearchLevel $searchLevel
     * @return CustomRecordCustomField
     */
    public function setSearchLevel(CustomizationSearchLevel $searchLevel): CustomRecordCustomField
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
     * @param CustomFieldRoleAccessList $roleAccessList
     * @return CustomRecordCustomField
     */
    public function setRoleAccessList(CustomFieldRoleAccessList $roleAccessList): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setDeptAccessList(CustomFieldDepartmentAccessList $deptAccessList): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setSubAccessList(CustomFieldSubAccessList $subAccessList): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setTranslationsList(CustomFieldTranslationsList $translationsList): CustomRecordCustomField
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
     * @return CustomRecordCustomField
     */
    public function setInternalId(string $internalId): CustomRecordCustomField
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
