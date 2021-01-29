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

class OtherCustomField extends CustomFieldType {
    /**
     * @var RecordRef
     */
    protected RecordRef $recType;

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
     * @var RecordRef
     */
    protected RecordRef $insertBefore;

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
     * @var OtherCustomFieldFilterList
     */
    protected OtherCustomFieldFilterList $filterList;

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
        "recType" => "RecordRef",
        "label" => "string",
        "owner" => "RecordRef",
        "description" => "string",
        "selectRecordType" => "RecordRef",
        "storeValue" => "boolean",
        "showInList" => "boolean",
        "insertBefore" => "RecordRef",
        "displayType" => "CustomizationDisplayType",
        "displayWidth" => "integer",
        "displayHeight" => "integer",
        "help" => "string",
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
        "filterList" => "OtherCustomFieldFilterList",
        "accessLevel" => "CustomizationAccessLevel",
        "searchLevel" => "CustomizationSearchLevel",
        "roleAccessList" => "CustomFieldRoleAccessList",
        "deptAccessList" => "CustomFieldDepartmentAccessList",
        "subAccessList" => "CustomFieldSubAccessList",
        "translationsList" => "CustomFieldTranslationsList",
        "internalId" => "string",
    );

    /**
     * @param RecordRef $recType
     * @return OtherCustomField
     */
    public function setRecType(RecordRef $recType): OtherCustomField
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
     * @param string $label
     * @return OtherCustomField
     */
    public function setLabel(string $label): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setOwner(RecordRef $owner): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setDescription(string $description): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setSelectRecordType(RecordRef $selectRecordType): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setStoreValue(bool $storeValue): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setShowInList(bool $showInList): OtherCustomField
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
     * @param RecordRef $insertBefore
     * @return OtherCustomField
     */
    public function setInsertBefore(RecordRef $insertBefore): OtherCustomField
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
     * @param CustomizationDisplayType $displayType
     * @return OtherCustomField
     */
    public function setDisplayType(CustomizationDisplayType $displayType): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setDisplayWidth(int $displayWidth): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setDisplayHeight(int $displayHeight): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setHelp(string $help): OtherCustomField
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
     * @param string $linkText
     * @return OtherCustomField
     */
    public function setLinkText(string $linkText): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setIsMandatory(bool $isMandatory): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setCheckSpelling(bool $checkSpelling): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setMaxLength(int $maxLength): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setMinValue(float $minValue): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setMaxValue(float $maxValue): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setDefaultChecked(bool $defaultChecked): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setDefaultValue(string $defaultValue): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setIsFormula(bool $isFormula): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setDefaultSelection(RecordRef $defaultSelection): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setDynamicDefault(CustomizationDynamicDefault $dynamicDefault): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setSearchDefault(RecordRef $searchDefault): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setSearchCompareField(RecordRef $searchCompareField): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setSourceList(RecordRef $sourceList): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setSourceFrom(RecordRef $sourceFrom): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setSourceFilterBy(RecordRef $sourceFilterBy): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setCustomSegment(RecordRef $customSegment): OtherCustomField
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
     * @param OtherCustomFieldFilterList $filterList
     * @return OtherCustomField
     */
    public function setFilterList(OtherCustomFieldFilterList $filterList): OtherCustomField
    {
        $this->filterList = $filterList;
        return $this;
    }

    /**
     * @return OtherCustomFieldFilterList
     */
    public function getFilterList(): OtherCustomFieldFilterList
    {
        return $this->filterList;
    }

    /**
     * @param CustomizationAccessLevel $accessLevel
     * @return OtherCustomField
     */
    public function setAccessLevel(CustomizationAccessLevel $accessLevel): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setSearchLevel(CustomizationSearchLevel $searchLevel): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setRoleAccessList(CustomFieldRoleAccessList $roleAccessList): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setDeptAccessList(CustomFieldDepartmentAccessList $deptAccessList): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setSubAccessList(CustomFieldSubAccessList $subAccessList): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setTranslationsList(CustomFieldTranslationsList $translationsList): OtherCustomField
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
     * @return OtherCustomField
     */
    public function setInternalId(string $internalId): OtherCustomField
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
