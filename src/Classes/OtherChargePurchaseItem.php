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

class OtherChargePurchaseItem extends Record {
    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var string
     */
    protected string $purchaseDescription;

    /**
     * @var bool
     */
    protected bool $manufacturingChargeItem;

    /**
     * @var float
     */
    protected float $cost;

    /**
     * @var string
     */
    protected string $costUnits;

    /**
     * @var RecordRef
     */
    protected RecordRef $expenseAccount;

    /**
     * @var bool
     */
    protected bool $isTaxable;

    /**
     * @var ItemMatrixType
     */
    protected ItemMatrixType $matrixType;

    /**
     * @var RecordRef
     */
    protected RecordRef $unitsType;

    /**
     * @var RecordRef
     */
    protected RecordRef $purchaseUnit;

    /**
     * @var bool
     */
    protected bool $includeChildren;

    /**
     * @var RecordRef
     */
    protected RecordRef $issueProduct;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $itemId;

    /**
     * @var string
     */
    protected string $upcCode;

    /**
     * @var string
     */
    protected string $displayName;

    /**
     * @var string
     */
    protected string $vendorName;

    /**
     * @var RecordRef
     */
    protected RecordRef $parent;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var string
     */
    protected string $matrixItemNameTemplate;

    /**
     * @var bool
     */
    protected bool $availableToPartners;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $subsidiaryList;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxSchedule;

    /**
     * @var RecordRef
     */
    protected RecordRef $deferralAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $amortizationTemplate;

    /**
     * @var string
     */
    protected string $residual;

    /**
     * @var int
     */
    protected int $amortizationPeriod;

    /**
     * @var bool
     */
    protected bool $isFulfillable;

    /**
     * @var bool
     */
    protected bool $generateAccruals;

    /**
     * @var ItemAccountingBookDetailList
     */
    protected ItemAccountingBookDetailList $accountingBookDetailList;

    /**
     * @var RecordRef
     */
    protected RecordRef $costCategory;

    /**
     * @var ItemOverheadType
     */
    protected ItemOverheadType $overheadType;

    /**
     * @var float
     */
    protected float $purchaseOrderQuantity;

    /**
     * @var float
     */
    protected float $purchaseOrderAmount;

    /**
     * @var float
     */
    protected float $purchaseOrderQuantityDiff;

    /**
     * @var float
     */
    protected float $receiptQuantity;

    /**
     * @var float
     */
    protected float $receiptAmount;

    /**
     * @var float
     */
    protected float $receiptQuantityDiff;

    /**
     * @var string
     */
    protected string $currency;

    /**
     * @var ItemOptionsList
     */
    protected ItemOptionsList $itemOptionsList;

    /**
     * @var MatrixOptionList
     */
    protected MatrixOptionList $matrixOptionList;

    /**
     * @var ItemVendorList
     */
    protected ItemVendorList $itemVendorList;

    /**
     * @var RecordRef
     */
    protected RecordRef $purchaseTaxCode;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesTaxCode;

    /**
     * @var TranslationList
     */
    protected TranslationList $translationsList;

    /**
     * @var RecordRef
     */
    protected RecordRef $vendor;

    /**
     * @var OtherChargePurchaseItemHierarchyVersionsList
     */
    protected OtherChargePurchaseItemHierarchyVersionsList $hierarchyVersionsList;

    /**
     * @var RecordRef
     */
    protected RecordRef $consumptionUnit;

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
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "purchaseDescription" => "string",
        "manufacturingChargeItem" => "boolean",
        "cost" => "float",
        "costUnits" => "string",
        "expenseAccount" => "RecordRef",
        "isTaxable" => "boolean",
        "matrixType" => "ItemMatrixType",
        "unitsType" => "RecordRef",
        "purchaseUnit" => "RecordRef",
        "includeChildren" => "boolean",
        "issueProduct" => "RecordRef",
        "customForm" => "RecordRef",
        "itemId" => "string",
        "upcCode" => "string",
        "displayName" => "string",
        "vendorName" => "string",
        "parent" => "RecordRef",
        "isInactive" => "boolean",
        "matrixItemNameTemplate" => "string",
        "availableToPartners" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "subsidiaryList" => "RecordRefList",
        "location" => "RecordRef",
        "taxSchedule" => "RecordRef",
        "deferralAccount" => "RecordRef",
        "amortizationTemplate" => "RecordRef",
        "residual" => "string",
        "amortizationPeriod" => "integer",
        "isFulfillable" => "boolean",
        "generateAccruals" => "boolean",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "costCategory" => "RecordRef",
        "overheadType" => "ItemOverheadType",
        "purchaseOrderQuantity" => "float",
        "purchaseOrderAmount" => "float",
        "purchaseOrderQuantityDiff" => "float",
        "receiptQuantity" => "float",
        "receiptAmount" => "float",
        "receiptQuantityDiff" => "float",
        "currency" => "string",
        "itemOptionsList" => "ItemOptionsList",
        "matrixOptionList" => "MatrixOptionList",
        "itemVendorList" => "ItemVendorList",
        "purchaseTaxCode" => "RecordRef",
        "salesTaxCode" => "RecordRef",
        "translationsList" => "TranslationList",
        "vendor" => "RecordRef",
        "hierarchyVersionsList" => "OtherChargePurchaseItemHierarchyVersionsList",
        "consumptionUnit" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return OtherChargePurchaseItem
     */
    public function setCreatedDate(string $createdDate): OtherChargePurchaseItem
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->createdDate;
    }

    /**
     * @param string $lastModifiedDate
     * @return OtherChargePurchaseItem
     */
    public function setLastModifiedDate(string $lastModifiedDate): OtherChargePurchaseItem
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedDate(): string
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param string $purchaseDescription
     * @return OtherChargePurchaseItem
     */
    public function setPurchaseDescription(string $purchaseDescription): OtherChargePurchaseItem
    {
        $this->purchaseDescription = $purchaseDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseDescription(): string
    {
        return $this->purchaseDescription;
    }

    /**
     * @param bool $manufacturingChargeItem
     * @return OtherChargePurchaseItem
     */
    public function setManufacturingChargeItem(bool $manufacturingChargeItem): OtherChargePurchaseItem
    {
        $this->manufacturingChargeItem = $manufacturingChargeItem;
        return $this;
    }

    /**
     * @return bool
     */
    public function getManufacturingChargeItem(): bool
    {
        return $this->manufacturingChargeItem;
    }

    /**
     * @param float $cost
     * @return OtherChargePurchaseItem
     */
    public function setCost(float $cost): OtherChargePurchaseItem
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * @param string $costUnits
     * @return OtherChargePurchaseItem
     */
    public function setCostUnits(string $costUnits): OtherChargePurchaseItem
    {
        $this->costUnits = $costUnits;
        return $this;
    }

    /**
     * @return string
     */
    public function getCostUnits(): string
    {
        return $this->costUnits;
    }

    /**
     * @param RecordRef $expenseAccount
     * @return OtherChargePurchaseItem
     */
    public function setExpenseAccount(RecordRef $expenseAccount): OtherChargePurchaseItem
    {
        $this->expenseAccount = $expenseAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getExpenseAccount(): RecordRef
    {
        return $this->expenseAccount;
    }

    /**
     * @param bool $isTaxable
     * @return OtherChargePurchaseItem
     */
    public function setIsTaxable(bool $isTaxable): OtherChargePurchaseItem
    {
        $this->isTaxable = $isTaxable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsTaxable(): bool
    {
        return $this->isTaxable;
    }

    /**
     * @param ItemMatrixType $matrixType
     * @return OtherChargePurchaseItem
     */
    public function setMatrixType(ItemMatrixType $matrixType): OtherChargePurchaseItem
    {
        $this->matrixType = $matrixType;
        return $this;
    }

    /**
     * @return ItemMatrixType
     */
    public function getMatrixType(): ItemMatrixType
    {
        return $this->matrixType;
    }

    /**
     * @param RecordRef $unitsType
     * @return OtherChargePurchaseItem
     */
    public function setUnitsType(RecordRef $unitsType): OtherChargePurchaseItem
    {
        $this->unitsType = $unitsType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnitsType(): RecordRef
    {
        return $this->unitsType;
    }

    /**
     * @param RecordRef $purchaseUnit
     * @return OtherChargePurchaseItem
     */
    public function setPurchaseUnit(RecordRef $purchaseUnit): OtherChargePurchaseItem
    {
        $this->purchaseUnit = $purchaseUnit;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPurchaseUnit(): RecordRef
    {
        return $this->purchaseUnit;
    }

    /**
     * @param bool $includeChildren
     * @return OtherChargePurchaseItem
     */
    public function setIncludeChildren(bool $includeChildren): OtherChargePurchaseItem
    {
        $this->includeChildren = $includeChildren;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeChildren(): bool
    {
        return $this->includeChildren;
    }

    /**
     * @param RecordRef $issueProduct
     * @return OtherChargePurchaseItem
     */
    public function setIssueProduct(RecordRef $issueProduct): OtherChargePurchaseItem
    {
        $this->issueProduct = $issueProduct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIssueProduct(): RecordRef
    {
        return $this->issueProduct;
    }

    /**
     * @param RecordRef $customForm
     * @return OtherChargePurchaseItem
     */
    public function setCustomForm(RecordRef $customForm): OtherChargePurchaseItem
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
     * @param string $itemId
     * @return OtherChargePurchaseItem
     */
    public function setItemId(string $itemId): OtherChargePurchaseItem
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemId(): string
    {
        return $this->itemId;
    }

    /**
     * @param string $upcCode
     * @return OtherChargePurchaseItem
     */
    public function setUpcCode(string $upcCode): OtherChargePurchaseItem
    {
        $this->upcCode = $upcCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpcCode(): string
    {
        return $this->upcCode;
    }

    /**
     * @param string $displayName
     * @return OtherChargePurchaseItem
     */
    public function setDisplayName(string $displayName): OtherChargePurchaseItem
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * @param string $vendorName
     * @return OtherChargePurchaseItem
     */
    public function setVendorName(string $vendorName): OtherChargePurchaseItem
    {
        $this->vendorName = $vendorName;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorName(): string
    {
        return $this->vendorName;
    }

    /**
     * @param RecordRef $parent
     * @return OtherChargePurchaseItem
     */
    public function setParent(RecordRef $parent): OtherChargePurchaseItem
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
     * @param bool $isInactive
     * @return OtherChargePurchaseItem
     */
    public function setIsInactive(bool $isInactive): OtherChargePurchaseItem
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
     * @param string $matrixItemNameTemplate
     * @return OtherChargePurchaseItem
     */
    public function setMatrixItemNameTemplate(string $matrixItemNameTemplate): OtherChargePurchaseItem
    {
        $this->matrixItemNameTemplate = $matrixItemNameTemplate;
        return $this;
    }

    /**
     * @return string
     */
    public function getMatrixItemNameTemplate(): string
    {
        return $this->matrixItemNameTemplate;
    }

    /**
     * @param bool $availableToPartners
     * @return OtherChargePurchaseItem
     */
    public function setAvailableToPartners(bool $availableToPartners): OtherChargePurchaseItem
    {
        $this->availableToPartners = $availableToPartners;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAvailableToPartners(): bool
    {
        return $this->availableToPartners;
    }

    /**
     * @param RecordRef $department
     * @return OtherChargePurchaseItem
     */
    public function setDepartment(RecordRef $department): OtherChargePurchaseItem
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment(): RecordRef
    {
        return $this->department;
    }

    /**
     * @param RecordRef $class
     * @return OtherChargePurchaseItem
     */
    public function setClass(RecordRef $class): OtherChargePurchaseItem
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass(): RecordRef
    {
        return $this->class;
    }

    /**
     * @param RecordRefList $subsidiaryList
     * @return OtherChargePurchaseItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): OtherChargePurchaseItem
    {
        $this->subsidiaryList = $subsidiaryList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getSubsidiaryList(): RecordRefList
    {
        return $this->subsidiaryList;
    }

    /**
     * @param RecordRef $location
     * @return OtherChargePurchaseItem
     */
    public function setLocation(RecordRef $location): OtherChargePurchaseItem
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation(): RecordRef
    {
        return $this->location;
    }

    /**
     * @param RecordRef $taxSchedule
     * @return OtherChargePurchaseItem
     */
    public function setTaxSchedule(RecordRef $taxSchedule): OtherChargePurchaseItem
    {
        $this->taxSchedule = $taxSchedule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxSchedule(): RecordRef
    {
        return $this->taxSchedule;
    }

    /**
     * @param RecordRef $deferralAccount
     * @return OtherChargePurchaseItem
     */
    public function setDeferralAccount(RecordRef $deferralAccount): OtherChargePurchaseItem
    {
        $this->deferralAccount = $deferralAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDeferralAccount(): RecordRef
    {
        return $this->deferralAccount;
    }

    /**
     * @param RecordRef $amortizationTemplate
     * @return OtherChargePurchaseItem
     */
    public function setAmortizationTemplate(RecordRef $amortizationTemplate): OtherChargePurchaseItem
    {
        $this->amortizationTemplate = $amortizationTemplate;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAmortizationTemplate(): RecordRef
    {
        return $this->amortizationTemplate;
    }

    /**
     * @param string $residual
     * @return OtherChargePurchaseItem
     */
    public function setResidual(string $residual): OtherChargePurchaseItem
    {
        $this->residual = $residual;
        return $this;
    }

    /**
     * @return string
     */
    public function getResidual(): string
    {
        return $this->residual;
    }

    /**
     * @param int $amortizationPeriod
     * @return OtherChargePurchaseItem
     */
    public function setAmortizationPeriod(int $amortizationPeriod): OtherChargePurchaseItem
    {
        $this->amortizationPeriod = $amortizationPeriod;
        return $this;
    }

    /**
     * @return int
     */
    public function getAmortizationPeriod(): int
    {
        return $this->amortizationPeriod;
    }

    /**
     * @param bool $isFulfillable
     * @return OtherChargePurchaseItem
     */
    public function setIsFulfillable(bool $isFulfillable): OtherChargePurchaseItem
    {
        $this->isFulfillable = $isFulfillable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsFulfillable(): bool
    {
        return $this->isFulfillable;
    }

    /**
     * @param bool $generateAccruals
     * @return OtherChargePurchaseItem
     */
    public function setGenerateAccruals(bool $generateAccruals): OtherChargePurchaseItem
    {
        $this->generateAccruals = $generateAccruals;
        return $this;
    }

    /**
     * @return bool
     */
    public function getGenerateAccruals(): bool
    {
        return $this->generateAccruals;
    }

    /**
     * @param ItemAccountingBookDetailList $accountingBookDetailList
     * @return OtherChargePurchaseItem
     */
    public function setAccountingBookDetailList(ItemAccountingBookDetailList $accountingBookDetailList): OtherChargePurchaseItem
    {
        $this->accountingBookDetailList = $accountingBookDetailList;
        return $this;
    }

    /**
     * @return ItemAccountingBookDetailList
     */
    public function getAccountingBookDetailList(): ItemAccountingBookDetailList
    {
        return $this->accountingBookDetailList;
    }

    /**
     * @param RecordRef $costCategory
     * @return OtherChargePurchaseItem
     */
    public function setCostCategory(RecordRef $costCategory): OtherChargePurchaseItem
    {
        $this->costCategory = $costCategory;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCostCategory(): RecordRef
    {
        return $this->costCategory;
    }

    /**
     * @param ItemOverheadType $overheadType
     * @return OtherChargePurchaseItem
     */
    public function setOverheadType(ItemOverheadType $overheadType): OtherChargePurchaseItem
    {
        $this->overheadType = $overheadType;
        return $this;
    }

    /**
     * @return ItemOverheadType
     */
    public function getOverheadType(): ItemOverheadType
    {
        return $this->overheadType;
    }

    /**
     * @param float $purchaseOrderQuantity
     * @return OtherChargePurchaseItem
     */
    public function setPurchaseOrderQuantity(float $purchaseOrderQuantity): OtherChargePurchaseItem
    {
        $this->purchaseOrderQuantity = $purchaseOrderQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderQuantity(): float
    {
        return $this->purchaseOrderQuantity;
    }

    /**
     * @param float $purchaseOrderAmount
     * @return OtherChargePurchaseItem
     */
    public function setPurchaseOrderAmount(float $purchaseOrderAmount): OtherChargePurchaseItem
    {
        $this->purchaseOrderAmount = $purchaseOrderAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderAmount(): float
    {
        return $this->purchaseOrderAmount;
    }

    /**
     * @param float $purchaseOrderQuantityDiff
     * @return OtherChargePurchaseItem
     */
    public function setPurchaseOrderQuantityDiff(float $purchaseOrderQuantityDiff): OtherChargePurchaseItem
    {
        $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
        return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderQuantityDiff(): float
    {
        return $this->purchaseOrderQuantityDiff;
    }

    /**
     * @param float $receiptQuantity
     * @return OtherChargePurchaseItem
     */
    public function setReceiptQuantity(float $receiptQuantity): OtherChargePurchaseItem
    {
        $this->receiptQuantity = $receiptQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getReceiptQuantity(): float
    {
        return $this->receiptQuantity;
    }

    /**
     * @param float $receiptAmount
     * @return OtherChargePurchaseItem
     */
    public function setReceiptAmount(float $receiptAmount): OtherChargePurchaseItem
    {
        $this->receiptAmount = $receiptAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getReceiptAmount(): float
    {
        return $this->receiptAmount;
    }

    /**
     * @param float $receiptQuantityDiff
     * @return OtherChargePurchaseItem
     */
    public function setReceiptQuantityDiff(float $receiptQuantityDiff): OtherChargePurchaseItem
    {
        $this->receiptQuantityDiff = $receiptQuantityDiff;
        return $this;
    }

    /**
     * @return float
     */
    public function getReceiptQuantityDiff(): float
    {
        return $this->receiptQuantityDiff;
    }

    /**
     * @param string $currency
     * @return OtherChargePurchaseItem
     */
    public function setCurrency(string $currency): OtherChargePurchaseItem
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param ItemOptionsList $itemOptionsList
     * @return OtherChargePurchaseItem
     */
    public function setItemOptionsList(ItemOptionsList $itemOptionsList): OtherChargePurchaseItem
    {
        $this->itemOptionsList = $itemOptionsList;
        return $this;
    }

    /**
     * @return ItemOptionsList
     */
    public function getItemOptionsList(): ItemOptionsList
    {
        return $this->itemOptionsList;
    }

    /**
     * @param MatrixOptionList $matrixOptionList
     * @return OtherChargePurchaseItem
     */
    public function setMatrixOptionList(MatrixOptionList $matrixOptionList): OtherChargePurchaseItem
    {
        $this->matrixOptionList = $matrixOptionList;
        return $this;
    }

    /**
     * @return MatrixOptionList
     */
    public function getMatrixOptionList(): MatrixOptionList
    {
        return $this->matrixOptionList;
    }

    /**
     * @param ItemVendorList $itemVendorList
     * @return OtherChargePurchaseItem
     */
    public function setItemVendorList(ItemVendorList $itemVendorList): OtherChargePurchaseItem
    {
        $this->itemVendorList = $itemVendorList;
        return $this;
    }

    /**
     * @return ItemVendorList
     */
    public function getItemVendorList(): ItemVendorList
    {
        return $this->itemVendorList;
    }

    /**
     * @param RecordRef $purchaseTaxCode
     * @return OtherChargePurchaseItem
     */
    public function setPurchaseTaxCode(RecordRef $purchaseTaxCode): OtherChargePurchaseItem
    {
        $this->purchaseTaxCode = $purchaseTaxCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPurchaseTaxCode(): RecordRef
    {
        return $this->purchaseTaxCode;
    }

    /**
     * @param RecordRef $salesTaxCode
     * @return OtherChargePurchaseItem
     */
    public function setSalesTaxCode(RecordRef $salesTaxCode): OtherChargePurchaseItem
    {
        $this->salesTaxCode = $salesTaxCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesTaxCode(): RecordRef
    {
        return $this->salesTaxCode;
    }

    /**
     * @param TranslationList $translationsList
     * @return OtherChargePurchaseItem
     */
    public function setTranslationsList(TranslationList $translationsList): OtherChargePurchaseItem
    {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * @return TranslationList
     */
    public function getTranslationsList(): TranslationList
    {
        return $this->translationsList;
    }

    /**
     * @param RecordRef $vendor
     * @return OtherChargePurchaseItem
     */
    public function setVendor(RecordRef $vendor): OtherChargePurchaseItem
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getVendor(): RecordRef
    {
        return $this->vendor;
    }

    /**
     * @param OtherChargePurchaseItemHierarchyVersionsList $hierarchyVersionsList
     * @return OtherChargePurchaseItem
     */
    public function setHierarchyVersionsList(OtherChargePurchaseItemHierarchyVersionsList $hierarchyVersionsList): OtherChargePurchaseItem
    {
        $this->hierarchyVersionsList = $hierarchyVersionsList;
        return $this;
    }

    /**
     * @return OtherChargePurchaseItemHierarchyVersionsList
     */
    public function getHierarchyVersionsList(): OtherChargePurchaseItemHierarchyVersionsList
    {
        return $this->hierarchyVersionsList;
    }

    /**
     * @param RecordRef $consumptionUnit
     * @return OtherChargePurchaseItem
     */
    public function setConsumptionUnit(RecordRef $consumptionUnit): OtherChargePurchaseItem
    {
        $this->consumptionUnit = $consumptionUnit;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getConsumptionUnit(): RecordRef
    {
        return $this->consumptionUnit;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return OtherChargePurchaseItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): OtherChargePurchaseItem
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
     * @return OtherChargePurchaseItem
     */
    public function setInternalId(string $internalId): OtherChargePurchaseItem
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
     * @return OtherChargePurchaseItem
     */
    public function setExternalId(string $externalId): OtherChargePurchaseItem
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
