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

class NonInventoryPurchaseItem extends Record {
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
     * @var RecordRef
     */
    protected RecordRef $issueProduct;

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
     * @var bool
     */
    protected bool $includeChildren;

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
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $subsidiaryList;

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
     * @var NonInventoryPurchaseItemHierarchyVersionsList
     */
    protected NonInventoryPurchaseItemHierarchyVersionsList $hierarchyVersionsList;

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
        "cost" => "float",
        "costUnits" => "string",
        "expenseAccount" => "RecordRef",
        "issueProduct" => "RecordRef",
        "isTaxable" => "boolean",
        "matrixType" => "ItemMatrixType",
        "unitsType" => "RecordRef",
        "purchaseUnit" => "RecordRef",
        "customForm" => "RecordRef",
        "itemId" => "string",
        "upcCode" => "string",
        "displayName" => "string",
        "includeChildren" => "boolean",
        "vendorName" => "string",
        "parent" => "RecordRef",
        "isInactive" => "boolean",
        "matrixItemNameTemplate" => "string",
        "availableToPartners" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiaryList" => "RecordRefList",
        "taxSchedule" => "RecordRef",
        "deferralAccount" => "RecordRef",
        "amortizationTemplate" => "RecordRef",
        "residual" => "string",
        "amortizationPeriod" => "integer",
        "isFulfillable" => "boolean",
        "generateAccruals" => "boolean",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "costCategory" => "RecordRef",
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
        "hierarchyVersionsList" => "NonInventoryPurchaseItemHierarchyVersionsList",
        "consumptionUnit" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return NonInventoryPurchaseItem
     */
    public function setCreatedDate(string $createdDate): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setLastModifiedDate(string $lastModifiedDate): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setPurchaseDescription(string $purchaseDescription): NonInventoryPurchaseItem
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
     * @param float $cost
     * @return NonInventoryPurchaseItem
     */
    public function setCost(float $cost): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setCostUnits(string $costUnits): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setExpenseAccount(RecordRef $expenseAccount): NonInventoryPurchaseItem
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
     * @param RecordRef $issueProduct
     * @return NonInventoryPurchaseItem
     */
    public function setIssueProduct(RecordRef $issueProduct): NonInventoryPurchaseItem
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
     * @param bool $isTaxable
     * @return NonInventoryPurchaseItem
     */
    public function setIsTaxable(bool $isTaxable): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setMatrixType(ItemMatrixType $matrixType): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setUnitsType(RecordRef $unitsType): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setPurchaseUnit(RecordRef $purchaseUnit): NonInventoryPurchaseItem
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
     * @param RecordRef $customForm
     * @return NonInventoryPurchaseItem
     */
    public function setCustomForm(RecordRef $customForm): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setItemId(string $itemId): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setUpcCode(string $upcCode): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setDisplayName(string $displayName): NonInventoryPurchaseItem
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
     * @param bool $includeChildren
     * @return NonInventoryPurchaseItem
     */
    public function setIncludeChildren(bool $includeChildren): NonInventoryPurchaseItem
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
     * @param string $vendorName
     * @return NonInventoryPurchaseItem
     */
    public function setVendorName(string $vendorName): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setParent(RecordRef $parent): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setIsInactive(bool $isInactive): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setMatrixItemNameTemplate(string $matrixItemNameTemplate): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setAvailableToPartners(bool $availableToPartners): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setDepartment(RecordRef $department): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setClass(RecordRef $class): NonInventoryPurchaseItem
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
     * @param RecordRef $location
     * @return NonInventoryPurchaseItem
     */
    public function setLocation(RecordRef $location): NonInventoryPurchaseItem
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
     * @param RecordRefList $subsidiaryList
     * @return NonInventoryPurchaseItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): NonInventoryPurchaseItem
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
     * @param RecordRef $taxSchedule
     * @return NonInventoryPurchaseItem
     */
    public function setTaxSchedule(RecordRef $taxSchedule): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setDeferralAccount(RecordRef $deferralAccount): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setAmortizationTemplate(RecordRef $amortizationTemplate): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setResidual(string $residual): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setAmortizationPeriod(int $amortizationPeriod): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setIsFulfillable(bool $isFulfillable): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setGenerateAccruals(bool $generateAccruals): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setAccountingBookDetailList(ItemAccountingBookDetailList $accountingBookDetailList): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setCostCategory(RecordRef $costCategory): NonInventoryPurchaseItem
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
     * @param float $purchaseOrderQuantity
     * @return NonInventoryPurchaseItem
     */
    public function setPurchaseOrderQuantity(float $purchaseOrderQuantity): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setPurchaseOrderAmount(float $purchaseOrderAmount): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setPurchaseOrderQuantityDiff(float $purchaseOrderQuantityDiff): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setReceiptQuantity(float $receiptQuantity): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setReceiptAmount(float $receiptAmount): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setReceiptQuantityDiff(float $receiptQuantityDiff): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setCurrency(string $currency): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setItemOptionsList(ItemOptionsList $itemOptionsList): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setMatrixOptionList(MatrixOptionList $matrixOptionList): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setItemVendorList(ItemVendorList $itemVendorList): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setPurchaseTaxCode(RecordRef $purchaseTaxCode): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setSalesTaxCode(RecordRef $salesTaxCode): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setTranslationsList(TranslationList $translationsList): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setVendor(RecordRef $vendor): NonInventoryPurchaseItem
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
     * @param NonInventoryPurchaseItemHierarchyVersionsList $hierarchyVersionsList
     * @return NonInventoryPurchaseItem
     */
    public function setHierarchyVersionsList(NonInventoryPurchaseItemHierarchyVersionsList $hierarchyVersionsList): NonInventoryPurchaseItem
    {
        $this->hierarchyVersionsList = $hierarchyVersionsList;
        return $this;
    }

    /**
     * @return NonInventoryPurchaseItemHierarchyVersionsList
     */
    public function getHierarchyVersionsList(): NonInventoryPurchaseItemHierarchyVersionsList
    {
        return $this->hierarchyVersionsList;
    }

    /**
     * @param RecordRef $consumptionUnit
     * @return NonInventoryPurchaseItem
     */
    public function setConsumptionUnit(RecordRef $consumptionUnit): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setInternalId(string $internalId): NonInventoryPurchaseItem
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
     * @return NonInventoryPurchaseItem
     */
    public function setExternalId(string $externalId): NonInventoryPurchaseItem
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
