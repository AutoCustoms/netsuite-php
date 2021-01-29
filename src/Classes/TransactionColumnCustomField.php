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

class TransactionColumnCustomField extends CustomFieldType {
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
     * @var bool
     */
    protected bool $availableToSso;

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
    protected bool $colExpense;

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
    protected bool $colJournal;

    /**
     * @var bool
     */
    protected bool $colBuild;

    /**
     * @var bool
     */
    protected bool $colExpenseReport;

    /**
     * @var bool
     */
    protected bool $colTime;

    /**
     * @var bool
     */
    protected bool $colTransferOrder;

    /**
     * @var bool
     */
    protected bool $colTimeGroup;

    /**
     * @var bool
     */
    protected bool $colItemReceipt;

    /**
     * @var bool
     */
    protected bool $colItemReceiptOrder;

    /**
     * @var bool
     */
    protected bool $colItemFulfillment;

    /**
     * @var bool
     */
    protected bool $colItemFulfillmentOrder;

    /**
     * @var bool
     */
    protected bool $colPrintFlag;

    /**
     * @var bool
     */
    protected bool $colPickingTicket;

    /**
     * @var bool
     */
    protected bool $colPackingSlip;

    /**
     * @var bool
     */
    protected bool $colReturnForm;

    /**
     * @var bool
     */
    protected bool $colStoreWithGroups;

    /**
     * @var bool
     */
    protected bool $colGroupOnInvoices;

    /**
     * @var bool
     */
    protected bool $colKitItem;

    /**
     * @var TransactionColumnCustomFieldFilterList
     */
    protected TransactionColumnCustomFieldFilterList $filterList;

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
        "availableToSso" => "boolean",
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
        "sourceList" => "RecordRef",
        "sourceFrom" => "RecordRef",
        "sourceFilterBy" => "RecordRef",
        "customSegment" => "RecordRef",
        "colExpense" => "boolean",
        "colPurchase" => "boolean",
        "colSale" => "boolean",
        "colOpportunity" => "boolean",
        "colStore" => "boolean",
        "colStoreHidden" => "boolean",
        "colJournal" => "boolean",
        "colBuild" => "boolean",
        "colExpenseReport" => "boolean",
        "colTime" => "boolean",
        "colTransferOrder" => "boolean",
        "colTimeGroup" => "boolean",
        "colItemReceipt" => "boolean",
        "colItemReceiptOrder" => "boolean",
        "colItemFulfillment" => "boolean",
        "colItemFulfillmentOrder" => "boolean",
        "colPrintFlag" => "boolean",
        "colPickingTicket" => "boolean",
        "colPackingSlip" => "boolean",
        "colReturnForm" => "boolean",
        "colStoreWithGroups" => "boolean",
        "colGroupOnInvoices" => "boolean",
        "colKitItem" => "boolean",
        "filterList" => "TransactionColumnCustomFieldFilterList",
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
     * @return TransactionColumnCustomField
     */
    public function setLabel(string $label): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setOwner(RecordRef $owner): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setDescription(string $description): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setSelectRecordType(RecordRef $selectRecordType): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setStoreValue(bool $storeValue): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setInsertBefore(RecordRef $insertBefore): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setAvailableToSso(bool $availableToSso): TransactionColumnCustomField
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
     * @param CustomizationDisplayType $displayType
     * @return TransactionColumnCustomField
     */
    public function setDisplayType(CustomizationDisplayType $displayType): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setDisplayWidth(int $displayWidth): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setDisplayHeight(int $displayHeight): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setHelp(string $help): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setLinkText(string $linkText): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setIsMandatory(bool $isMandatory): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setMaxLength(int $maxLength): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setMinValue(float $minValue): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setMaxValue(float $maxValue): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setDefaultChecked(bool $defaultChecked): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setDefaultValue(string $defaultValue): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setIsFormula(bool $isFormula): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setDefaultSelection(RecordRef $defaultSelection): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setDynamicDefault(CustomizationDynamicDefault $dynamicDefault): TransactionColumnCustomField
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
     * @param RecordRef $sourceList
     * @return TransactionColumnCustomField
     */
    public function setSourceList(RecordRef $sourceList): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setSourceFrom(RecordRef $sourceFrom): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setSourceFilterBy(RecordRef $sourceFilterBy): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setCustomSegment(RecordRef $customSegment): TransactionColumnCustomField
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
     * @param bool $colExpense
     * @return TransactionColumnCustomField
     */
    public function setColExpense(bool $colExpense): TransactionColumnCustomField
    {
        $this->colExpense = $colExpense;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColExpense(): bool
    {
        return $this->colExpense;
    }

    /**
     * @param bool $colPurchase
     * @return TransactionColumnCustomField
     */
    public function setColPurchase(bool $colPurchase): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setColSale(bool $colSale): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setColOpportunity(bool $colOpportunity): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setColStore(bool $colStore): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setColStoreHidden(bool $colStoreHidden): TransactionColumnCustomField
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
     * @param bool $colJournal
     * @return TransactionColumnCustomField
     */
    public function setColJournal(bool $colJournal): TransactionColumnCustomField
    {
        $this->colJournal = $colJournal;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColJournal(): bool
    {
        return $this->colJournal;
    }

    /**
     * @param bool $colBuild
     * @return TransactionColumnCustomField
     */
    public function setColBuild(bool $colBuild): TransactionColumnCustomField
    {
        $this->colBuild = $colBuild;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColBuild(): bool
    {
        return $this->colBuild;
    }

    /**
     * @param bool $colExpenseReport
     * @return TransactionColumnCustomField
     */
    public function setColExpenseReport(bool $colExpenseReport): TransactionColumnCustomField
    {
        $this->colExpenseReport = $colExpenseReport;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColExpenseReport(): bool
    {
        return $this->colExpenseReport;
    }

    /**
     * @param bool $colTime
     * @return TransactionColumnCustomField
     */
    public function setColTime(bool $colTime): TransactionColumnCustomField
    {
        $this->colTime = $colTime;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColTime(): bool
    {
        return $this->colTime;
    }

    /**
     * @param bool $colTransferOrder
     * @return TransactionColumnCustomField
     */
    public function setColTransferOrder(bool $colTransferOrder): TransactionColumnCustomField
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
     * @param bool $colTimeGroup
     * @return TransactionColumnCustomField
     */
    public function setColTimeGroup(bool $colTimeGroup): TransactionColumnCustomField
    {
        $this->colTimeGroup = $colTimeGroup;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColTimeGroup(): bool
    {
        return $this->colTimeGroup;
    }

    /**
     * @param bool $colItemReceipt
     * @return TransactionColumnCustomField
     */
    public function setColItemReceipt(bool $colItemReceipt): TransactionColumnCustomField
    {
        $this->colItemReceipt = $colItemReceipt;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColItemReceipt(): bool
    {
        return $this->colItemReceipt;
    }

    /**
     * @param bool $colItemReceiptOrder
     * @return TransactionColumnCustomField
     */
    public function setColItemReceiptOrder(bool $colItemReceiptOrder): TransactionColumnCustomField
    {
        $this->colItemReceiptOrder = $colItemReceiptOrder;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColItemReceiptOrder(): bool
    {
        return $this->colItemReceiptOrder;
    }

    /**
     * @param bool $colItemFulfillment
     * @return TransactionColumnCustomField
     */
    public function setColItemFulfillment(bool $colItemFulfillment): TransactionColumnCustomField
    {
        $this->colItemFulfillment = $colItemFulfillment;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColItemFulfillment(): bool
    {
        return $this->colItemFulfillment;
    }

    /**
     * @param bool $colItemFulfillmentOrder
     * @return TransactionColumnCustomField
     */
    public function setColItemFulfillmentOrder(bool $colItemFulfillmentOrder): TransactionColumnCustomField
    {
        $this->colItemFulfillmentOrder = $colItemFulfillmentOrder;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColItemFulfillmentOrder(): bool
    {
        return $this->colItemFulfillmentOrder;
    }

    /**
     * @param bool $colPrintFlag
     * @return TransactionColumnCustomField
     */
    public function setColPrintFlag(bool $colPrintFlag): TransactionColumnCustomField
    {
        $this->colPrintFlag = $colPrintFlag;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColPrintFlag(): bool
    {
        return $this->colPrintFlag;
    }

    /**
     * @param bool $colPickingTicket
     * @return TransactionColumnCustomField
     */
    public function setColPickingTicket(bool $colPickingTicket): TransactionColumnCustomField
    {
        $this->colPickingTicket = $colPickingTicket;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColPickingTicket(): bool
    {
        return $this->colPickingTicket;
    }

    /**
     * @param bool $colPackingSlip
     * @return TransactionColumnCustomField
     */
    public function setColPackingSlip(bool $colPackingSlip): TransactionColumnCustomField
    {
        $this->colPackingSlip = $colPackingSlip;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColPackingSlip(): bool
    {
        return $this->colPackingSlip;
    }

    /**
     * @param bool $colReturnForm
     * @return TransactionColumnCustomField
     */
    public function setColReturnForm(bool $colReturnForm): TransactionColumnCustomField
    {
        $this->colReturnForm = $colReturnForm;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColReturnForm(): bool
    {
        return $this->colReturnForm;
    }

    /**
     * @param bool $colStoreWithGroups
     * @return TransactionColumnCustomField
     */
    public function setColStoreWithGroups(bool $colStoreWithGroups): TransactionColumnCustomField
    {
        $this->colStoreWithGroups = $colStoreWithGroups;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColStoreWithGroups(): bool
    {
        return $this->colStoreWithGroups;
    }

    /**
     * @param bool $colGroupOnInvoices
     * @return TransactionColumnCustomField
     */
    public function setColGroupOnInvoices(bool $colGroupOnInvoices): TransactionColumnCustomField
    {
        $this->colGroupOnInvoices = $colGroupOnInvoices;
        return $this;
    }

    /**
     * @return bool
     */
    public function getColGroupOnInvoices(): bool
    {
        return $this->colGroupOnInvoices;
    }

    /**
     * @param bool $colKitItem
     * @return TransactionColumnCustomField
     */
    public function setColKitItem(bool $colKitItem): TransactionColumnCustomField
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
     * @param TransactionColumnCustomFieldFilterList $filterList
     * @return TransactionColumnCustomField
     */
    public function setFilterList(TransactionColumnCustomFieldFilterList $filterList): TransactionColumnCustomField
    {
        $this->filterList = $filterList;
        return $this;
    }

    /**
     * @return TransactionColumnCustomFieldFilterList
     */
    public function getFilterList(): TransactionColumnCustomFieldFilterList
    {
        return $this->filterList;
    }

    /**
     * @param CustomizationAccessLevel $accessLevel
     * @return TransactionColumnCustomField
     */
    public function setAccessLevel(CustomizationAccessLevel $accessLevel): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setSearchLevel(CustomizationSearchLevel $searchLevel): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setRoleAccessList(CustomFieldRoleAccessList $roleAccessList): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setDeptAccessList(CustomFieldDepartmentAccessList $deptAccessList): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setSubAccessList(CustomFieldSubAccessList $subAccessList): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setTranslationsList(CustomFieldTranslationsList $translationsList): TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
     */
    public function setInternalId(string $internalId): TransactionColumnCustomField
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
