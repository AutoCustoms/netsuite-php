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

class ItemNumberCustomField extends CustomFieldType {
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
     * @var CustomizationAccessLevel
     */
    protected CustomizationAccessLevel $accessLevel;

    /**
     * @var CustomizationSearchLevel
     */
    protected CustomizationSearchLevel $searchLevel;

    /**
     * @var ItemNumberCustomFieldFilterList
     */
    protected ItemNumberCustomFieldFilterList $filterList;

    /**
     * @var CustomFieldRoleAccessList
     */
    protected CustomFieldRoleAccessList $roleAccessList;

    /**
     * @var CustomFieldDepartmentAccessList
     */
    protected CustomFieldDepartmentAccessList $deptAccessList;

    /**
     * @var bool
     */
    protected bool $appliesToAllItems;

    /**
     * @var bool
     */
    protected bool $appliesToSerialized;

    /**
     * @var bool
     */
    protected bool $appliesToLots;

    /**
     * @var bool
     */
    protected bool $appliesToGiftCerts;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $itemsList;

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
        "accessLevel" => "CustomizationAccessLevel",
        "searchLevel" => "CustomizationSearchLevel",
        "filterList" => "ItemNumberCustomFieldFilterList",
        "roleAccessList" => "CustomFieldRoleAccessList",
        "deptAccessList" => "CustomFieldDepartmentAccessList",
        "appliesToAllItems" => "boolean",
        "appliesToSerialized" => "boolean",
        "appliesToLots" => "boolean",
        "appliesToGiftCerts" => "boolean",
        "itemsList" => "RecordRefList",
        "translationsList" => "CustomFieldTranslationsList",
        "internalId" => "string",
    );

    /**
     * @param string $label
     * @return ItemNumberCustomField
     */
    public function setLabel(string $label): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setOwner(RecordRef $owner): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setDescription(string $description): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setSelectRecordType(RecordRef $selectRecordType): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setStoreValue(bool $storeValue): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setShowInList(bool $showInList): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setInsertBefore(RecordRef $insertBefore): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setDisplayType(CustomizationDisplayType $displayType): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setDisplayWidth(int $displayWidth): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setDisplayHeight(int $displayHeight): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setHelp(string $help): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setLinkText(string $linkText): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setIsMandatory(bool $isMandatory): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setCheckSpelling(bool $checkSpelling): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setMaxLength(int $maxLength): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setMinValue(float $minValue): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setMaxValue(float $maxValue): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setDefaultChecked(bool $defaultChecked): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setDefaultValue(string $defaultValue): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setIsFormula(bool $isFormula): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setDefaultSelection(RecordRef $defaultSelection): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setDynamicDefault(CustomizationDynamicDefault $dynamicDefault): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setSearchDefault(RecordRef $searchDefault): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setSearchCompareField(RecordRef $searchCompareField): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setSourceList(RecordRef $sourceList): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setSourceFrom(RecordRef $sourceFrom): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setSourceFilterBy(RecordRef $sourceFilterBy): ItemNumberCustomField
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
     * @param CustomizationAccessLevel $accessLevel
     * @return ItemNumberCustomField
     */
    public function setAccessLevel(CustomizationAccessLevel $accessLevel): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setSearchLevel(CustomizationSearchLevel $searchLevel): ItemNumberCustomField
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
     * @param ItemNumberCustomFieldFilterList $filterList
     * @return ItemNumberCustomField
     */
    public function setFilterList(ItemNumberCustomFieldFilterList $filterList): ItemNumberCustomField
    {
        $this->filterList = $filterList;
        return $this;
    }

    /**
     * @return ItemNumberCustomFieldFilterList
     */
    public function getFilterList(): ItemNumberCustomFieldFilterList
    {
        return $this->filterList;
    }

    /**
     * @param CustomFieldRoleAccessList $roleAccessList
     * @return ItemNumberCustomField
     */
    public function setRoleAccessList(CustomFieldRoleAccessList $roleAccessList): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setDeptAccessList(CustomFieldDepartmentAccessList $deptAccessList): ItemNumberCustomField
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
     * @param bool $appliesToAllItems
     * @return ItemNumberCustomField
     */
    public function setAppliesToAllItems(bool $appliesToAllItems): ItemNumberCustomField
    {
        $this->appliesToAllItems = $appliesToAllItems;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToAllItems(): bool
    {
        return $this->appliesToAllItems;
    }

    /**
     * @param bool $appliesToSerialized
     * @return ItemNumberCustomField
     */
    public function setAppliesToSerialized(bool $appliesToSerialized): ItemNumberCustomField
    {
        $this->appliesToSerialized = $appliesToSerialized;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToSerialized(): bool
    {
        return $this->appliesToSerialized;
    }

    /**
     * @param bool $appliesToLots
     * @return ItemNumberCustomField
     */
    public function setAppliesToLots(bool $appliesToLots): ItemNumberCustomField
    {
        $this->appliesToLots = $appliesToLots;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToLots(): bool
    {
        return $this->appliesToLots;
    }

    /**
     * @param bool $appliesToGiftCerts
     * @return ItemNumberCustomField
     */
    public function setAppliesToGiftCerts(bool $appliesToGiftCerts): ItemNumberCustomField
    {
        $this->appliesToGiftCerts = $appliesToGiftCerts;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToGiftCerts(): bool
    {
        return $this->appliesToGiftCerts;
    }

    /**
     * @param RecordRefList $itemsList
     * @return ItemNumberCustomField
     */
    public function setItemsList(RecordRefList $itemsList): ItemNumberCustomField
    {
        $this->itemsList = $itemsList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getItemsList(): RecordRefList
    {
        return $this->itemsList;
    }

    /**
     * @param CustomFieldTranslationsList $translationsList
     * @return ItemNumberCustomField
     */
    public function setTranslationsList(CustomFieldTranslationsList $translationsList): ItemNumberCustomField
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
     * @return ItemNumberCustomField
     */
    public function setInternalId(string $internalId): ItemNumberCustomField
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
