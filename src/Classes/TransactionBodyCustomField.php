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

class TransactionBodyCustomField extends CustomFieldType {
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
    protected bool $bodyPurchase;

    /**
     * @var bool
     */
    protected bool $bodySale;

    /**
     * @var bool
     */
    protected bool $bodyOpportunity;

    /**
     * @var bool
     */
    protected bool $bodyJournal;

    /**
     * @var bool
     */
    protected bool $bodyExpenseReport;

    /**
     * @var bool
     */
    protected bool $bodyStore;

    /**
     * @var bool
     */
    protected bool $bodyTransferOrder;

    /**
     * @var bool
     */
    protected bool $bodyItemReceipt;

    /**
     * @var bool
     */
    protected bool $bodyItemReceiptOrder;

    /**
     * @var bool
     */
    protected bool $bodyItemFulfillment;

    /**
     * @var bool
     */
    protected bool $bodyItemFulfillmentOrder;

    /**
     * @var bool
     */
    protected bool $bodyInventoryAdjustment;

    /**
     * @var bool
     */
    protected bool $bodyBTegata;

    /**
     * @var bool
     */
    protected bool $bodyAssemblyBuild;

    /**
     * @var bool
     */
    protected bool $bodyPrintFlag;

    /**
     * @var bool
     */
    protected bool $bodyPickingTicket;

    /**
     * @var bool
     */
    protected bool $bodyOtherTransaction;

    /**
     * @var bool
     */
    protected bool $bodyPrintPackingSlip;

    /**
     * @var bool
     */
    protected bool $bodyCustomerPayment;

    /**
     * @var bool
     */
    protected bool $bodyVendorPayment;

    /**
     * @var bool
     */
    protected bool $bodyDeposit;

    /**
     * @var bool
     */
    protected bool $bodyBom;

    /**
     * @var bool
     */
    protected bool $bodyPrintStatement;

    /**
     * @var TransactionBodyCustomFieldFilterList
     */
    protected TransactionBodyCustomFieldFilterList $filterList;

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
        "availableToSso" => "boolean",
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
        "bodyPurchase" => "boolean",
        "bodySale" => "boolean",
        "bodyOpportunity" => "boolean",
        "bodyJournal" => "boolean",
        "bodyExpenseReport" => "boolean",
        "bodyStore" => "boolean",
        "bodyTransferOrder" => "boolean",
        "bodyItemReceipt" => "boolean",
        "bodyItemReceiptOrder" => "boolean",
        "bodyItemFulfillment" => "boolean",
        "bodyItemFulfillmentOrder" => "boolean",
        "bodyInventoryAdjustment" => "boolean",
        "bodyBTegata" => "boolean",
        "bodyAssemblyBuild" => "boolean",
        "bodyPrintFlag" => "boolean",
        "bodyPickingTicket" => "boolean",
        "bodyOtherTransaction" => "boolean",
        "bodyPrintPackingSlip" => "boolean",
        "bodyCustomerPayment" => "boolean",
        "bodyVendorPayment" => "boolean",
        "bodyDeposit" => "boolean",
        "bodyBom" => "boolean",
        "bodyPrintStatement" => "boolean",
        "filterList" => "TransactionBodyCustomFieldFilterList",
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
     * @return TransactionBodyCustomField
     */
    public function setLabel(string $label): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setOwner(RecordRef $owner): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setDescription(string $description): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setSelectRecordType(RecordRef $selectRecordType): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setStoreValue(bool $storeValue): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setShowInList(bool $showInList): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setGlobalSearch(bool $globalSearch): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setIsParent(bool $isParent): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setInsertBefore(RecordRef $insertBefore): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setSubtab(RecordRef $subtab): TransactionBodyCustomField
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
     * @param bool $availableToSso
     * @return TransactionBodyCustomField
     */
    public function setAvailableToSso(bool $availableToSso): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setDisplayType(CustomizationDisplayType $displayType): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setDisplayWidth(int $displayWidth): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setDisplayHeight(int $displayHeight): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setHelp(string $help): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setParentSubtab(RecordRef $parentSubtab): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setLinkText(string $linkText): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setIsMandatory(bool $isMandatory): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setCheckSpelling(bool $checkSpelling): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setMaxLength(int $maxLength): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setMinValue(float $minValue): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setMaxValue(float $maxValue): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setDefaultChecked(bool $defaultChecked): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setDefaultValue(string $defaultValue): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setIsFormula(bool $isFormula): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setDefaultSelection(RecordRef $defaultSelection): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setDynamicDefault(CustomizationDynamicDefault $dynamicDefault): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setSearchDefault(RecordRef $searchDefault): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setSearchCompareField(RecordRef $searchCompareField): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setSourceList(RecordRef $sourceList): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setSourceFrom(RecordRef $sourceFrom): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setSourceFilterBy(RecordRef $sourceFilterBy): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setCustomSegment(RecordRef $customSegment): TransactionBodyCustomField
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
     * @param bool $bodyPurchase
     * @return TransactionBodyCustomField
     */
    public function setBodyPurchase(bool $bodyPurchase): TransactionBodyCustomField
    {
        $this->bodyPurchase = $bodyPurchase;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyPurchase(): bool
    {
        return $this->bodyPurchase;
    }

    /**
     * @param bool $bodySale
     * @return TransactionBodyCustomField
     */
    public function setBodySale(bool $bodySale): TransactionBodyCustomField
    {
        $this->bodySale = $bodySale;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodySale(): bool
    {
        return $this->bodySale;
    }

    /**
     * @param bool $bodyOpportunity
     * @return TransactionBodyCustomField
     */
    public function setBodyOpportunity(bool $bodyOpportunity): TransactionBodyCustomField
    {
        $this->bodyOpportunity = $bodyOpportunity;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyOpportunity(): bool
    {
        return $this->bodyOpportunity;
    }

    /**
     * @param bool $bodyJournal
     * @return TransactionBodyCustomField
     */
    public function setBodyJournal(bool $bodyJournal): TransactionBodyCustomField
    {
        $this->bodyJournal = $bodyJournal;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyJournal(): bool
    {
        return $this->bodyJournal;
    }

    /**
     * @param bool $bodyExpenseReport
     * @return TransactionBodyCustomField
     */
    public function setBodyExpenseReport(bool $bodyExpenseReport): TransactionBodyCustomField
    {
        $this->bodyExpenseReport = $bodyExpenseReport;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyExpenseReport(): bool
    {
        return $this->bodyExpenseReport;
    }

    /**
     * @param bool $bodyStore
     * @return TransactionBodyCustomField
     */
    public function setBodyStore(bool $bodyStore): TransactionBodyCustomField
    {
        $this->bodyStore = $bodyStore;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyStore(): bool
    {
        return $this->bodyStore;
    }

    /**
     * @param bool $bodyTransferOrder
     * @return TransactionBodyCustomField
     */
    public function setBodyTransferOrder(bool $bodyTransferOrder): TransactionBodyCustomField
    {
        $this->bodyTransferOrder = $bodyTransferOrder;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyTransferOrder(): bool
    {
        return $this->bodyTransferOrder;
    }

    /**
     * @param bool $bodyItemReceipt
     * @return TransactionBodyCustomField
     */
    public function setBodyItemReceipt(bool $bodyItemReceipt): TransactionBodyCustomField
    {
        $this->bodyItemReceipt = $bodyItemReceipt;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyItemReceipt(): bool
    {
        return $this->bodyItemReceipt;
    }

    /**
     * @param bool $bodyItemReceiptOrder
     * @return TransactionBodyCustomField
     */
    public function setBodyItemReceiptOrder(bool $bodyItemReceiptOrder): TransactionBodyCustomField
    {
        $this->bodyItemReceiptOrder = $bodyItemReceiptOrder;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyItemReceiptOrder(): bool
    {
        return $this->bodyItemReceiptOrder;
    }

    /**
     * @param bool $bodyItemFulfillment
     * @return TransactionBodyCustomField
     */
    public function setBodyItemFulfillment(bool $bodyItemFulfillment): TransactionBodyCustomField
    {
        $this->bodyItemFulfillment = $bodyItemFulfillment;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyItemFulfillment(): bool
    {
        return $this->bodyItemFulfillment;
    }

    /**
     * @param bool $bodyItemFulfillmentOrder
     * @return TransactionBodyCustomField
     */
    public function setBodyItemFulfillmentOrder(bool $bodyItemFulfillmentOrder): TransactionBodyCustomField
    {
        $this->bodyItemFulfillmentOrder = $bodyItemFulfillmentOrder;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyItemFulfillmentOrder(): bool
    {
        return $this->bodyItemFulfillmentOrder;
    }

    /**
     * @param bool $bodyInventoryAdjustment
     * @return TransactionBodyCustomField
     */
    public function setBodyInventoryAdjustment(bool $bodyInventoryAdjustment): TransactionBodyCustomField
    {
        $this->bodyInventoryAdjustment = $bodyInventoryAdjustment;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyInventoryAdjustment(): bool
    {
        return $this->bodyInventoryAdjustment;
    }

    /**
     * @param bool $bodyBTegata
     * @return TransactionBodyCustomField
     */
    public function setBodyBTegata(bool $bodyBTegata): TransactionBodyCustomField
    {
        $this->bodyBTegata = $bodyBTegata;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyBTegata(): bool
    {
        return $this->bodyBTegata;
    }

    /**
     * @param bool $bodyAssemblyBuild
     * @return TransactionBodyCustomField
     */
    public function setBodyAssemblyBuild(bool $bodyAssemblyBuild): TransactionBodyCustomField
    {
        $this->bodyAssemblyBuild = $bodyAssemblyBuild;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyAssemblyBuild(): bool
    {
        return $this->bodyAssemblyBuild;
    }

    /**
     * @param bool $bodyPrintFlag
     * @return TransactionBodyCustomField
     */
    public function setBodyPrintFlag(bool $bodyPrintFlag): TransactionBodyCustomField
    {
        $this->bodyPrintFlag = $bodyPrintFlag;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyPrintFlag(): bool
    {
        return $this->bodyPrintFlag;
    }

    /**
     * @param bool $bodyPickingTicket
     * @return TransactionBodyCustomField
     */
    public function setBodyPickingTicket(bool $bodyPickingTicket): TransactionBodyCustomField
    {
        $this->bodyPickingTicket = $bodyPickingTicket;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyPickingTicket(): bool
    {
        return $this->bodyPickingTicket;
    }

    /**
     * @param bool $bodyOtherTransaction
     * @return TransactionBodyCustomField
     */
    public function setBodyOtherTransaction(bool $bodyOtherTransaction): TransactionBodyCustomField
    {
        $this->bodyOtherTransaction = $bodyOtherTransaction;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyOtherTransaction(): bool
    {
        return $this->bodyOtherTransaction;
    }

    /**
     * @param bool $bodyPrintPackingSlip
     * @return TransactionBodyCustomField
     */
    public function setBodyPrintPackingSlip(bool $bodyPrintPackingSlip): TransactionBodyCustomField
    {
        $this->bodyPrintPackingSlip = $bodyPrintPackingSlip;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyPrintPackingSlip(): bool
    {
        return $this->bodyPrintPackingSlip;
    }

    /**
     * @param bool $bodyCustomerPayment
     * @return TransactionBodyCustomField
     */
    public function setBodyCustomerPayment(bool $bodyCustomerPayment): TransactionBodyCustomField
    {
        $this->bodyCustomerPayment = $bodyCustomerPayment;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyCustomerPayment(): bool
    {
        return $this->bodyCustomerPayment;
    }

    /**
     * @param bool $bodyVendorPayment
     * @return TransactionBodyCustomField
     */
    public function setBodyVendorPayment(bool $bodyVendorPayment): TransactionBodyCustomField
    {
        $this->bodyVendorPayment = $bodyVendorPayment;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyVendorPayment(): bool
    {
        return $this->bodyVendorPayment;
    }

    /**
     * @param bool $bodyDeposit
     * @return TransactionBodyCustomField
     */
    public function setBodyDeposit(bool $bodyDeposit): TransactionBodyCustomField
    {
        $this->bodyDeposit = $bodyDeposit;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyDeposit(): bool
    {
        return $this->bodyDeposit;
    }

    /**
     * @param bool $bodyBom
     * @return TransactionBodyCustomField
     */
    public function setBodyBom(bool $bodyBom): TransactionBodyCustomField
    {
        $this->bodyBom = $bodyBom;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyBom(): bool
    {
        return $this->bodyBom;
    }

    /**
     * @param bool $bodyPrintStatement
     * @return TransactionBodyCustomField
     */
    public function setBodyPrintStatement(bool $bodyPrintStatement): TransactionBodyCustomField
    {
        $this->bodyPrintStatement = $bodyPrintStatement;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyPrintStatement(): bool
    {
        return $this->bodyPrintStatement;
    }

    /**
     * @param TransactionBodyCustomFieldFilterList $filterList
     * @return TransactionBodyCustomField
     */
    public function setFilterList(TransactionBodyCustomFieldFilterList $filterList): TransactionBodyCustomField
    {
        $this->filterList = $filterList;
        return $this;
    }

    /**
     * @return TransactionBodyCustomFieldFilterList
     */
    public function getFilterList(): TransactionBodyCustomFieldFilterList
    {
        return $this->filterList;
    }

    /**
     * @param CustomizationAccessLevel $accessLevel
     * @return TransactionBodyCustomField
     */
    public function setAccessLevel(CustomizationAccessLevel $accessLevel): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setSearchLevel(CustomizationSearchLevel $searchLevel): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setRoleAccessList(CustomFieldRoleAccessList $roleAccessList): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setDeptAccessList(CustomFieldDepartmentAccessList $deptAccessList): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setSubAccessList(CustomFieldSubAccessList $subAccessList): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setTranslationsList(CustomFieldTranslationsList $translationsList): TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
     */
    public function setInternalId(string $internalId): TransactionBodyCustomField
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
