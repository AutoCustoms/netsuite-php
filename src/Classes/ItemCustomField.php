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

class ItemCustomField extends CustomFieldType {
    /**
     * @var string
     */
    protected string $label;

    /**
     * @var RecordRef
     */
    protected RecordRef $owner;

    /**
     * @var bool
     */
    protected bool $itemMatrix;

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
    protected RecordRef $sourceFilterBy;

    /**
     * @var RecordRef
     */
    protected RecordRef $customSegment;

    /**
     * @var bool
     */
    protected bool $appliesToInventory;

    /**
     * @var bool
     */
    protected bool $appliesToNonInventory;

    /**
     * @var bool
     */
    protected bool $appliesToService;

    /**
     * @var bool
     */
    protected bool $appliesToOtherCharge;

    /**
     * @var bool
     */
    protected bool $appliesToGroup;

    /**
     * @var bool
     */
    protected bool $appliesToKit;

    /**
     * @var bool
     */
    protected bool $appliesToItemAssembly;

    /**
     * @var bool
     */
    protected bool $availableToSso;

    /**
     * @var ItemCustomFieldItemSubType
     */
    protected ItemCustomFieldItemSubType $itemSubType;

    /**
     * @var ItemCustomFieldFilterList
     */
    protected ItemCustomFieldFilterList $filterList;

    /**
     * @var bool
     */
    protected bool $appliesToPriceList;

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
        "itemMatrix" => "boolean",
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
        "sourceFilterBy" => "RecordRef",
        "customSegment" => "RecordRef",
        "appliesToInventory" => "boolean",
        "appliesToNonInventory" => "boolean",
        "appliesToService" => "boolean",
        "appliesToOtherCharge" => "boolean",
        "appliesToGroup" => "boolean",
        "appliesToKit" => "boolean",
        "appliesToItemAssembly" => "boolean",
        "availableToSso" => "boolean",
        "itemSubType" => "ItemCustomFieldItemSubType",
        "filterList" => "ItemCustomFieldFilterList",
        "appliesToPriceList" => "boolean",
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
     * @return ItemCustomField
     */
    public function setLabel(string $label): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setOwner(RecordRef $owner): ItemCustomField
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
     * @param bool $itemMatrix
     * @return ItemCustomField
     */
    public function setItemMatrix(bool $itemMatrix): ItemCustomField
    {
        $this->itemMatrix = $itemMatrix;
        return $this;
    }

    /**
     * @return bool
     */
    public function getItemMatrix(): bool
    {
        return $this->itemMatrix;
    }

    /**
     * @param string $description
     * @return ItemCustomField
     */
    public function setDescription(string $description): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setSelectRecordType(RecordRef $selectRecordType): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setStoreValue(bool $storeValue): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setShowInList(bool $showInList): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setGlobalSearch(bool $globalSearch): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setIsParent(bool $isParent): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setInsertBefore(RecordRef $insertBefore): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setSubtab(RecordRef $subtab): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setDisplayType(CustomizationDisplayType $displayType): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setDisplayWidth(int $displayWidth): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setDisplayHeight(int $displayHeight): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setHelp(string $help): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setParentSubtab(RecordRef $parentSubtab): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setLinkText(string $linkText): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setIsMandatory(bool $isMandatory): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setCheckSpelling(bool $checkSpelling): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setMaxLength(int $maxLength): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setMinValue(float $minValue): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setMaxValue(float $maxValue): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setDefaultChecked(bool $defaultChecked): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setDefaultValue(string $defaultValue): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setIsFormula(bool $isFormula): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setDefaultSelection(RecordRef $defaultSelection): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setDynamicDefault(CustomizationDynamicDefault $dynamicDefault): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setSearchDefault(RecordRef $searchDefault): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setSearchCompareField(RecordRef $searchCompareField): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setSourceList(RecordRef $sourceList): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setSourceFrom(RecordRef $sourceFrom): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setSourceFilterBy(RecordRef $sourceFilterBy): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setCustomSegment(RecordRef $customSegment): ItemCustomField
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
     * @param bool $appliesToInventory
     * @return ItemCustomField
     */
    public function setAppliesToInventory(bool $appliesToInventory): ItemCustomField
    {
        $this->appliesToInventory = $appliesToInventory;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToInventory(): bool
    {
        return $this->appliesToInventory;
    }

    /**
     * @param bool $appliesToNonInventory
     * @return ItemCustomField
     */
    public function setAppliesToNonInventory(bool $appliesToNonInventory): ItemCustomField
    {
        $this->appliesToNonInventory = $appliesToNonInventory;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToNonInventory(): bool
    {
        return $this->appliesToNonInventory;
    }

    /**
     * @param bool $appliesToService
     * @return ItemCustomField
     */
    public function setAppliesToService(bool $appliesToService): ItemCustomField
    {
        $this->appliesToService = $appliesToService;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToService(): bool
    {
        return $this->appliesToService;
    }

    /**
     * @param bool $appliesToOtherCharge
     * @return ItemCustomField
     */
    public function setAppliesToOtherCharge(bool $appliesToOtherCharge): ItemCustomField
    {
        $this->appliesToOtherCharge = $appliesToOtherCharge;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToOtherCharge(): bool
    {
        return $this->appliesToOtherCharge;
    }

    /**
     * @param bool $appliesToGroup
     * @return ItemCustomField
     */
    public function setAppliesToGroup(bool $appliesToGroup): ItemCustomField
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
     * @param bool $appliesToKit
     * @return ItemCustomField
     */
    public function setAppliesToKit(bool $appliesToKit): ItemCustomField
    {
        $this->appliesToKit = $appliesToKit;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToKit(): bool
    {
        return $this->appliesToKit;
    }

    /**
     * @param bool $appliesToItemAssembly
     * @return ItemCustomField
     */
    public function setAppliesToItemAssembly(bool $appliesToItemAssembly): ItemCustomField
    {
        $this->appliesToItemAssembly = $appliesToItemAssembly;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToItemAssembly(): bool
    {
        return $this->appliesToItemAssembly;
    }

    /**
     * @param bool $availableToSso
     * @return ItemCustomField
     */
    public function setAvailableToSso(bool $availableToSso): ItemCustomField
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
     * @param ItemCustomFieldItemSubType $itemSubType
     * @return ItemCustomField
     */
    public function setItemSubType(ItemCustomFieldItemSubType $itemSubType): ItemCustomField
    {
        $this->itemSubType = $itemSubType;
        return $this;
    }

    /**
     * @return ItemCustomFieldItemSubType
     */
    public function getItemSubType(): ItemCustomFieldItemSubType
    {
        return $this->itemSubType;
    }

    /**
     * @param ItemCustomFieldFilterList $filterList
     * @return ItemCustomField
     */
    public function setFilterList(ItemCustomFieldFilterList $filterList): ItemCustomField
    {
        $this->filterList = $filterList;
        return $this;
    }

    /**
     * @return ItemCustomFieldFilterList
     */
    public function getFilterList(): ItemCustomFieldFilterList
    {
        return $this->filterList;
    }

    /**
     * @param bool $appliesToPriceList
     * @return ItemCustomField
     */
    public function setAppliesToPriceList(bool $appliesToPriceList): ItemCustomField
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
     * @param CustomizationAccessLevel $accessLevel
     * @return ItemCustomField
     */
    public function setAccessLevel(CustomizationAccessLevel $accessLevel): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setSearchLevel(CustomizationSearchLevel $searchLevel): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setRoleAccessList(CustomFieldRoleAccessList $roleAccessList): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setDeptAccessList(CustomFieldDepartmentAccessList $deptAccessList): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setSubAccessList(CustomFieldSubAccessList $subAccessList): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setTranslationsList(CustomFieldTranslationsList $translationsList): ItemCustomField
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
     * @return ItemCustomField
     */
    public function setInternalId(string $internalId): ItemCustomField
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
