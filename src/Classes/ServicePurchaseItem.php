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

class ServicePurchaseItem extends Record {
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
    protected RecordRef $issueProduct;

    /**
     * @var bool
     */
    protected bool $includeChildren;

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
     * @var ServicePurchaseItemHierarchyVersionsList
     */
    protected ServicePurchaseItemHierarchyVersionsList $hierarchyVersionsList;

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
        "issueProduct" => "RecordRef",
        "includeChildren" => "boolean",
        "expenseAccount" => "RecordRef",
        "isTaxable" => "boolean",
        "matrixType" => "ItemMatrixType",
        "unitsType" => "RecordRef",
        "purchaseUnit" => "RecordRef",
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
        "hierarchyVersionsList" => "ServicePurchaseItemHierarchyVersionsList",
        "consumptionUnit" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return ServicePurchaseItem
     */
    public function setCreatedDate(string $createdDate): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setLastModifiedDate(string $lastModifiedDate): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setPurchaseDescription(string $purchaseDescription): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setManufacturingChargeItem(bool $manufacturingChargeItem): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setCost(float $cost): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setCostUnits(string $costUnits): ServicePurchaseItem
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
     * @param RecordRef $issueProduct
     * @return ServicePurchaseItem
     */
    public function setIssueProduct(RecordRef $issueProduct): ServicePurchaseItem
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
     * @param bool $includeChildren
     * @return ServicePurchaseItem
     */
    public function setIncludeChildren(bool $includeChildren): ServicePurchaseItem
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
     * @param RecordRef $expenseAccount
     * @return ServicePurchaseItem
     */
    public function setExpenseAccount(RecordRef $expenseAccount): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setIsTaxable(bool $isTaxable): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setMatrixType(ItemMatrixType $matrixType): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setUnitsType(RecordRef $unitsType): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setPurchaseUnit(RecordRef $purchaseUnit): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setCustomForm(RecordRef $customForm): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setItemId(string $itemId): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setUpcCode(string $upcCode): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setDisplayName(string $displayName): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setVendorName(string $vendorName): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setParent(RecordRef $parent): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setIsInactive(bool $isInactive): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setMatrixItemNameTemplate(string $matrixItemNameTemplate): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setAvailableToPartners(bool $availableToPartners): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setDepartment(RecordRef $department): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setClass(RecordRef $class): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setLocation(RecordRef $location): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setTaxSchedule(RecordRef $taxSchedule): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setDeferralAccount(RecordRef $deferralAccount): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setAmortizationTemplate(RecordRef $amortizationTemplate): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setResidual(string $residual): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setAmortizationPeriod(int $amortizationPeriod): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setIsFulfillable(bool $isFulfillable): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setGenerateAccruals(bool $generateAccruals): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setAccountingBookDetailList(ItemAccountingBookDetailList $accountingBookDetailList): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setCostCategory(RecordRef $costCategory): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setPurchaseOrderQuantity(float $purchaseOrderQuantity): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setPurchaseOrderAmount(float $purchaseOrderAmount): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setPurchaseOrderQuantityDiff(float $purchaseOrderQuantityDiff): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setReceiptQuantity(float $receiptQuantity): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setReceiptAmount(float $receiptAmount): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setReceiptQuantityDiff(float $receiptQuantityDiff): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setCurrency(string $currency): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setItemOptionsList(ItemOptionsList $itemOptionsList): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setMatrixOptionList(MatrixOptionList $matrixOptionList): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setItemVendorList(ItemVendorList $itemVendorList): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setPurchaseTaxCode(RecordRef $purchaseTaxCode): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setSalesTaxCode(RecordRef $salesTaxCode): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setTranslationsList(TranslationList $translationsList): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setVendor(RecordRef $vendor): ServicePurchaseItem
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
     * @param ServicePurchaseItemHierarchyVersionsList $hierarchyVersionsList
     * @return ServicePurchaseItem
     */
    public function setHierarchyVersionsList(ServicePurchaseItemHierarchyVersionsList $hierarchyVersionsList): ServicePurchaseItem
    {
        $this->hierarchyVersionsList = $hierarchyVersionsList;
        return $this;
    }

    /**
     * @return ServicePurchaseItemHierarchyVersionsList
     */
    public function getHierarchyVersionsList(): ServicePurchaseItemHierarchyVersionsList
    {
        return $this->hierarchyVersionsList;
    }

    /**
     * @param RecordRef $consumptionUnit
     * @return ServicePurchaseItem
     */
    public function setConsumptionUnit(RecordRef $consumptionUnit): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setInternalId(string $internalId): ServicePurchaseItem
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
     * @return ServicePurchaseItem
     */
    public function setExternalId(string $externalId): ServicePurchaseItem
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
