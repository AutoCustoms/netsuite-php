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

class ItemOptionCustomField extends CustomFieldType {
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
     * @var bool
     */
    protected bool $colPurchase;

    /**
     * @var bool
     */
    protected bool $colSale;

    /**
     * @var bool
     */
    protected bool $colOpportunity;

    /**
     * @var bool
     */
    protected bool $colStore;

    /**
     * @var bool
     */
    protected bool $colStoreHidden;

    /**
     * @var bool
     */
    protected bool $colTransferOrder;

    /**
     * @var bool
     */
    protected bool $colAllItems;

    /**
     * @var ItemsList
     */
    protected ItemsList $itemsList;

    /**
     * @var bool
     */
    protected bool $colKitItem;

    /**
     * @var ItemOptionCustomFieldFilterList
     */
    protected ItemOptionCustomFieldFilterList $filterList;

    /**
     * @var string
     */
    protected string $colOptionLabel;

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
        "insertBefore" => "RecordRef",
        "displayType" => "CustomizationDisplayType",
        "displayWidth" => "integer",
        "displayHeight" => "integer",
        "help" => "string",
        "linkText" => "string",
        "isMandatory" => "boolean",
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
        "colPurchase" => "boolean",
        "colSale" => "boolean",
        "colOpportunity" => "boolean",
        "colStore" => "boolean",
        "colStoreHidden" => "boolean",
        "colTransferOrder" => "boolean",
        "colAllItems" => "boolean",
        "itemsList" => "ItemsList",
        "colKitItem" => "boolean",
        "filterList" => "ItemOptionCustomFieldFilterList",
        "colOptionLabel" => "string",
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
     * @return ItemOptionCustomField
     */
    public function setLabel(string $label): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setOwner(RecordRef $owner): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setDescription(string $description): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setSelectRecordType(RecordRef $selectRecordType): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setStoreValue(bool $storeValue): ItemOptionCustomField
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
     * @param RecordRef $insertBefore
     * @return ItemOptionCustomField
     */
    public function setInsertBefore(RecordRef $insertBefore): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setDisplayType(CustomizationDisplayType $displayType): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setDisplayWidth(int $displayWidth): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setDisplayHeight(int $displayHeight): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setHelp(string $help): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setLinkText(string $linkText): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setIsMandatory(bool $isMandatory): ItemOptionCustomField
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
     * @param int $maxLength
     * @return ItemOptionCustomField
     */
    public function setMaxLength(int $maxLength): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setMinValue(float $minValue): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setMaxValue(float $maxValue): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setDefaultChecked(bool $defaultChecked): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setDefaultValue(string $defaultValue): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setIsFormula(bool $isFormula): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setDefaultSelection(RecordRef $defaultSelection): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setDynamicDefault(CustomizationDynamicDefault $dynamicDefault): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setSearchDefault(RecordRef $searchDefault): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setSearchCompareField(RecordRef $searchCompareField): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setSourceList(RecordRef $sourceList): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setSourceFrom(RecordRef $sourceFrom): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setSourceFilterBy(RecordRef $sourceFilterBy): ItemOptionCustomField
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
     * @param bool $colPurchase
     * @return ItemOptionCustomField
     */
    public function setColPurchase(bool $colPurchase): ItemOptionCustomField
    {
        $this->colPurchase = $colPurchase;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColPurchase(): bool
    {
        return $this->colPurchase;
    }

    /**
     * @param bool $colSale
     * @return ItemOptionCustomField
     */
    public function setColSale(bool $colSale): ItemOptionCustomField
    {
        $this->colSale = $colSale;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColSale(): bool
    {
        return $this->colSale;
    }

    /**
     * @param bool $colOpportunity
     * @return ItemOptionCustomField
     */
    public function setColOpportunity(bool $colOpportunity): ItemOptionCustomField
    {
        $this->colOpportunity = $colOpportunity;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColOpportunity(): bool
    {
        return $this->colOpportunity;
    }

    /**
     * @param bool $colStore
     * @return ItemOptionCustomField
     */
    public function setColStore(bool $colStore): ItemOptionCustomField
    {
        $this->colStore = $colStore;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColStore(): bool
    {
        return $this->colStore;
    }

    /**
     * @param bool $colStoreHidden
     * @return ItemOptionCustomField
     */
    public function setColStoreHidden(bool $colStoreHidden): ItemOptionCustomField
    {
        $this->colStoreHidden = $colStoreHidden;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColStoreHidden(): bool
    {
        return $this->colStoreHidden;
    }

    /**
     * @param bool $colTransferOrder
     * @return ItemOptionCustomField
     */
    public function setColTransferOrder(bool $colTransferOrder): ItemOptionCustomField
    {
        $this->colTransferOrder = $colTransferOrder;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColTransferOrder(): bool
    {
        return $this->colTransferOrder;
    }

    /**
     * @param bool $colAllItems
     * @return ItemOptionCustomField
     */
    public function setColAllItems(bool $colAllItems): ItemOptionCustomField
    {
        $this->colAllItems = $colAllItems;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColAllItems(): bool
    {
        return $this->colAllItems;
    }

    /**
     * @param ItemsList $itemsList
     * @return ItemOptionCustomField
     */
    public function setItemsList(ItemsList $itemsList): ItemOptionCustomField
    {
        $this->itemsList = $itemsList;
        return $this;
    }

    /**
     * @return ItemsList
     */
    public function getItemsList(): ItemsList
    {
        return $this->itemsList;
    }

    /**
     * @param bool $colKitItem
     * @return ItemOptionCustomField
     */
    public function setColKitItem(bool $colKitItem): ItemOptionCustomField
    {
        $this->colKitItem = $colKitItem;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColKitItem(): bool
    {
        return $this->colKitItem;
    }

    /**
     * @param ItemOptionCustomFieldFilterList $filterList
     * @return ItemOptionCustomField
     */
    public function setFilterList(ItemOptionCustomFieldFilterList $filterList): ItemOptionCustomField
    {
        $this->filterList = $filterList;
        return $this;
    }

    /**
     * @return ItemOptionCustomFieldFilterList
     */
    public function getFilterList(): ItemOptionCustomFieldFilterList
    {
        return $this->filterList;
    }

    /**
     * @param string $colOptionLabel
     * @return ItemOptionCustomField
     */
    public function setColOptionLabel(string $colOptionLabel): ItemOptionCustomField
    {
        $this->colOptionLabel = $colOptionLabel;
        return $this;
    }

    /**
     * @return string
     */
    public function getColOptionLabel(): string
    {
        return $this->colOptionLabel;
    }

    /**
     * @param CustomizationAccessLevel $accessLevel
     * @return ItemOptionCustomField
     */
    public function setAccessLevel(CustomizationAccessLevel $accessLevel): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setSearchLevel(CustomizationSearchLevel $searchLevel): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setRoleAccessList(CustomFieldRoleAccessList $roleAccessList): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setDeptAccessList(CustomFieldDepartmentAccessList $deptAccessList): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setSubAccessList(CustomFieldSubAccessList $subAccessList): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setTranslationsList(CustomFieldTranslationsList $translationsList): ItemOptionCustomField
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
     * @return ItemOptionCustomField
     */
    public function setInternalId(string $internalId): ItemOptionCustomField
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
