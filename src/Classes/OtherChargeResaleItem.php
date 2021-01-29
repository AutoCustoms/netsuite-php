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

class OtherChargeResaleItem extends Record {
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
     * @var RecordRef
     */
    protected RecordRef $intercoExpenseAccount;

    /**
     * @var string
     */
    protected string $salesDescription;

    /**
     * @var bool
     */
    protected bool $includeChildren;

    /**
     * @var RecordRef
     */
    protected RecordRef $incomeAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $intercoIncomeAccount;

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
    protected RecordRef $taxSchedule;

    /**
     * @var ItemCostEstimateType
     */
    protected ItemCostEstimateType $costEstimateType;

    /**
     * @var float
     */
    protected float $costEstimate;

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
    protected RecordRef $saleUnit;

    /**
     * @var string
     */
    protected string $costEstimateUnits;

    /**
     * @var RecordRef
     */
    protected RecordRef $issueProduct;

    /**
     * @var RecordRef
     */
    protected RecordRef $billingSchedule;

    /**
     * @var RecordRef
     */
    protected RecordRef $deferredRevenueAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $intercoDefRevAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $revRecSchedule;

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
     * @var bool
     */
    protected bool $deferRevRec;

    /**
     * @var RecordRef
     */
    protected RecordRef $revenueRecognitionRule;

    /**
     * @var RecordRef
     */
    protected RecordRef $revRecForecastRule;

    /**
     * @var RecordRef
     */
    protected RecordRef $revenueAllocationGroup;

    /**
     * @var RecordRef
     */
    protected RecordRef $createRevenuePlansOn;

    /**
     * @var bool
     */
    protected bool $directRevenuePosting;

    /**
     * @var bool
     */
    protected bool $contingentRevenueHandling;

    /**
     * @var RecordRef
     */
    protected RecordRef $revReclassFXAccount;

    /**
     * @var int
     */
    protected int $amortizationPeriod;

    /**
     * @var int
     */
    protected int $minimumQuantity;

    /**
     * @var string
     */
    protected string $minimumQuantityUnits;

    /**
     * @var bool
     */
    protected bool $enforceMinQtyInternally;

    /**
     * @var int
     */
    protected int $maximumQuantity;

    /**
     * @var string
     */
    protected string $softDescriptor;

    /**
     * @var bool
     */
    protected bool $isFulfillable;

    /**
     * @var bool
     */
    protected bool $generateAccruals;

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
     * @var bool
     */
    protected bool $pricesIncludeTax;

    /**
     * @var RecordRef
     */
    protected RecordRef $quantityPricingSchedule;

    /**
     * @var bool
     */
    protected bool $useMarginalRates;

    /**
     * @var ItemOverallQuantityPricingType
     */
    protected ItemOverallQuantityPricingType $overallQuantityPricingType;

    /**
     * @var RecordRef
     */
    protected RecordRef $pricingGroup;

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
    protected bool $isOnline;

    /**
     * @var bool
     */
    protected bool $isGcoCompliant;

    /**
     * @var bool
     */
    protected bool $offerSupport;

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
     * @var float
     */
    protected float $vsoePrice;

    /**
     * @var VsoeSopGroup
     */
    protected VsoeSopGroup $vsoeSopGroup;

    /**
     * @var VsoeDeferral
     */
    protected VsoeDeferral $vsoeDeferral;

    /**
     * @var VsoePermitDiscount
     */
    protected VsoePermitDiscount $vsoePermitDiscount;

    /**
     * @var bool
     */
    protected bool $vsoeDelivered;

    /**
     * @var RecordRef
     */
    protected RecordRef $itemRevenueCategory;

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
     * @var PricingMatrix
     */
    protected PricingMatrix $pricingMatrix;

    /**
     * @var ItemAccountingBookDetailList
     */
    protected ItemAccountingBookDetailList $accountingBookDetailList;

    /**
     * @var RecordRef
     */
    protected RecordRef $purchaseTaxCode;

    /**
     * @var float
     */
    protected float $rate;

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
     * @var OtherChargeResaleItemHierarchyVersionsList
     */
    protected OtherChargeResaleItemHierarchyVersionsList $hierarchyVersionsList;

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
        "intercoExpenseAccount" => "RecordRef",
        "salesDescription" => "string",
        "includeChildren" => "boolean",
        "incomeAccount" => "RecordRef",
        "intercoIncomeAccount" => "RecordRef",
        "isTaxable" => "boolean",
        "matrixType" => "ItemMatrixType",
        "taxSchedule" => "RecordRef",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "unitsType" => "RecordRef",
        "purchaseUnit" => "RecordRef",
        "saleUnit" => "RecordRef",
        "costEstimateUnits" => "string",
        "issueProduct" => "RecordRef",
        "billingSchedule" => "RecordRef",
        "deferredRevenueAccount" => "RecordRef",
        "intercoDefRevAccount" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "deferralAccount" => "RecordRef",
        "amortizationTemplate" => "RecordRef",
        "residual" => "string",
        "deferRevRec" => "boolean",
        "revenueRecognitionRule" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "revenueAllocationGroup" => "RecordRef",
        "createRevenuePlansOn" => "RecordRef",
        "directRevenuePosting" => "boolean",
        "contingentRevenueHandling" => "boolean",
        "revReclassFXAccount" => "RecordRef",
        "amortizationPeriod" => "integer",
        "minimumQuantity" => "integer",
        "minimumQuantityUnits" => "string",
        "enforceMinQtyInternally" => "boolean",
        "maximumQuantity" => "integer",
        "softDescriptor" => "string",
        "isFulfillable" => "boolean",
        "generateAccruals" => "boolean",
        "costCategory" => "RecordRef",
        "purchaseOrderQuantity" => "float",
        "purchaseOrderAmount" => "float",
        "purchaseOrderQuantityDiff" => "float",
        "receiptQuantity" => "float",
        "receiptAmount" => "float",
        "receiptQuantityDiff" => "float",
        "pricesIncludeTax" => "boolean",
        "quantityPricingSchedule" => "RecordRef",
        "useMarginalRates" => "boolean",
        "overallQuantityPricingType" => "ItemOverallQuantityPricingType",
        "pricingGroup" => "RecordRef",
        "customForm" => "RecordRef",
        "itemId" => "string",
        "upcCode" => "string",
        "displayName" => "string",
        "vendorName" => "string",
        "parent" => "RecordRef",
        "isOnline" => "boolean",
        "isGcoCompliant" => "boolean",
        "offerSupport" => "boolean",
        "isInactive" => "boolean",
        "matrixItemNameTemplate" => "string",
        "availableToPartners" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiaryList" => "RecordRefList",
        "vsoePrice" => "float",
        "vsoeSopGroup" => "VsoeSopGroup",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "itemRevenueCategory" => "RecordRef",
        "currency" => "string",
        "itemOptionsList" => "ItemOptionsList",
        "matrixOptionList" => "MatrixOptionList",
        "itemVendorList" => "ItemVendorList",
        "pricingMatrix" => "PricingMatrix",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "purchaseTaxCode" => "RecordRef",
        "rate" => "float",
        "salesTaxCode" => "RecordRef",
        "translationsList" => "TranslationList",
        "vendor" => "RecordRef",
        "hierarchyVersionsList" => "OtherChargeResaleItemHierarchyVersionsList",
        "consumptionUnit" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return OtherChargeResaleItem
     */
    public function setCreatedDate(string $createdDate): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setLastModifiedDate(string $lastModifiedDate): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setPurchaseDescription(string $purchaseDescription): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setManufacturingChargeItem(bool $manufacturingChargeItem): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setCost(float $cost): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setCostUnits(string $costUnits): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setExpenseAccount(RecordRef $expenseAccount): OtherChargeResaleItem
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
     * @param RecordRef $intercoExpenseAccount
     * @return OtherChargeResaleItem
     */
    public function setIntercoExpenseAccount(RecordRef $intercoExpenseAccount): OtherChargeResaleItem
    {
        $this->intercoExpenseAccount = $intercoExpenseAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIntercoExpenseAccount(): RecordRef
    {
        return $this->intercoExpenseAccount;
    }

    /**
     * @param string $salesDescription
     * @return OtherChargeResaleItem
     */
    public function setSalesDescription(string $salesDescription): OtherChargeResaleItem
    {
        $this->salesDescription = $salesDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesDescription(): string
    {
        return $this->salesDescription;
    }

    /**
     * @param bool $includeChildren
     * @return OtherChargeResaleItem
     */
    public function setIncludeChildren(bool $includeChildren): OtherChargeResaleItem
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
     * @param RecordRef $incomeAccount
     * @return OtherChargeResaleItem
     */
    public function setIncomeAccount(RecordRef $incomeAccount): OtherChargeResaleItem
    {
        $this->incomeAccount = $incomeAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIncomeAccount(): RecordRef
    {
        return $this->incomeAccount;
    }

    /**
     * @param RecordRef $intercoIncomeAccount
     * @return OtherChargeResaleItem
     */
    public function setIntercoIncomeAccount(RecordRef $intercoIncomeAccount): OtherChargeResaleItem
    {
        $this->intercoIncomeAccount = $intercoIncomeAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIntercoIncomeAccount(): RecordRef
    {
        return $this->intercoIncomeAccount;
    }

    /**
     * @param bool $isTaxable
     * @return OtherChargeResaleItem
     */
    public function setIsTaxable(bool $isTaxable): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setMatrixType(ItemMatrixType $matrixType): OtherChargeResaleItem
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
     * @param RecordRef $taxSchedule
     * @return OtherChargeResaleItem
     */
    public function setTaxSchedule(RecordRef $taxSchedule): OtherChargeResaleItem
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
     * @param ItemCostEstimateType $costEstimateType
     * @return OtherChargeResaleItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType): OtherChargeResaleItem
    {
        $this->costEstimateType = $costEstimateType;
        return $this;
    }

    /**
     * @return ItemCostEstimateType
     */
    public function getCostEstimateType(): ItemCostEstimateType
    {
        return $this->costEstimateType;
    }

    /**
     * @param float $costEstimate
     * @return OtherChargeResaleItem
     */
    public function setCostEstimate(float $costEstimate): OtherChargeResaleItem
    {
        $this->costEstimate = $costEstimate;
        return $this;
    }

    /**
     * @return float
     */
    public function getCostEstimate(): float
    {
        return $this->costEstimate;
    }

    /**
     * @param RecordRef $unitsType
     * @return OtherChargeResaleItem
     */
    public function setUnitsType(RecordRef $unitsType): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setPurchaseUnit(RecordRef $purchaseUnit): OtherChargeResaleItem
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
     * @param RecordRef $saleUnit
     * @return OtherChargeResaleItem
     */
    public function setSaleUnit(RecordRef $saleUnit): OtherChargeResaleItem
    {
        $this->saleUnit = $saleUnit;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSaleUnit(): RecordRef
    {
        return $this->saleUnit;
    }

    /**
     * @param string $costEstimateUnits
     * @return OtherChargeResaleItem
     */
    public function setCostEstimateUnits(string $costEstimateUnits): OtherChargeResaleItem
    {
        $this->costEstimateUnits = $costEstimateUnits;
        return $this;
    }

    /**
     * @return string
     */
    public function getCostEstimateUnits(): string
    {
        return $this->costEstimateUnits;
    }

    /**
     * @param RecordRef $issueProduct
     * @return OtherChargeResaleItem
     */
    public function setIssueProduct(RecordRef $issueProduct): OtherChargeResaleItem
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
     * @param RecordRef $billingSchedule
     * @return OtherChargeResaleItem
     */
    public function setBillingSchedule(RecordRef $billingSchedule): OtherChargeResaleItem
    {
        $this->billingSchedule = $billingSchedule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingSchedule(): RecordRef
    {
        return $this->billingSchedule;
    }

    /**
     * @param RecordRef $deferredRevenueAccount
     * @return OtherChargeResaleItem
     */
    public function setDeferredRevenueAccount(RecordRef $deferredRevenueAccount): OtherChargeResaleItem
    {
        $this->deferredRevenueAccount = $deferredRevenueAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDeferredRevenueAccount(): RecordRef
    {
        return $this->deferredRevenueAccount;
    }

    /**
     * @param RecordRef $intercoDefRevAccount
     * @return OtherChargeResaleItem
     */
    public function setIntercoDefRevAccount(RecordRef $intercoDefRevAccount): OtherChargeResaleItem
    {
        $this->intercoDefRevAccount = $intercoDefRevAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIntercoDefRevAccount(): RecordRef
    {
        return $this->intercoDefRevAccount;
    }

    /**
     * @param RecordRef $revRecSchedule
     * @return OtherChargeResaleItem
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): OtherChargeResaleItem
    {
        $this->revRecSchedule = $revRecSchedule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevRecSchedule(): RecordRef
    {
        return $this->revRecSchedule;
    }

    /**
     * @param RecordRef $deferralAccount
     * @return OtherChargeResaleItem
     */
    public function setDeferralAccount(RecordRef $deferralAccount): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setAmortizationTemplate(RecordRef $amortizationTemplate): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setResidual(string $residual): OtherChargeResaleItem
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
     * @param bool $deferRevRec
     * @return OtherChargeResaleItem
     */
    public function setDeferRevRec(bool $deferRevRec): OtherChargeResaleItem
    {
        $this->deferRevRec = $deferRevRec;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDeferRevRec(): bool
    {
        return $this->deferRevRec;
    }

    /**
     * @param RecordRef $revenueRecognitionRule
     * @return OtherChargeResaleItem
     */
    public function setRevenueRecognitionRule(RecordRef $revenueRecognitionRule): OtherChargeResaleItem
    {
        $this->revenueRecognitionRule = $revenueRecognitionRule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevenueRecognitionRule(): RecordRef
    {
        return $this->revenueRecognitionRule;
    }

    /**
     * @param RecordRef $revRecForecastRule
     * @return OtherChargeResaleItem
     */
    public function setRevRecForecastRule(RecordRef $revRecForecastRule): OtherChargeResaleItem
    {
        $this->revRecForecastRule = $revRecForecastRule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevRecForecastRule(): RecordRef
    {
        return $this->revRecForecastRule;
    }

    /**
     * @param RecordRef $revenueAllocationGroup
     * @return OtherChargeResaleItem
     */
    public function setRevenueAllocationGroup(RecordRef $revenueAllocationGroup): OtherChargeResaleItem
    {
        $this->revenueAllocationGroup = $revenueAllocationGroup;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevenueAllocationGroup(): RecordRef
    {
        return $this->revenueAllocationGroup;
    }

    /**
     * @param RecordRef $createRevenuePlansOn
     * @return OtherChargeResaleItem
     */
    public function setCreateRevenuePlansOn(RecordRef $createRevenuePlansOn): OtherChargeResaleItem
    {
        $this->createRevenuePlansOn = $createRevenuePlansOn;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreateRevenuePlansOn(): RecordRef
    {
        return $this->createRevenuePlansOn;
    }

    /**
     * @param bool $directRevenuePosting
     * @return OtherChargeResaleItem
     */
    public function setDirectRevenuePosting(bool $directRevenuePosting): OtherChargeResaleItem
    {
        $this->directRevenuePosting = $directRevenuePosting;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDirectRevenuePosting(): bool
    {
        return $this->directRevenuePosting;
    }

    /**
     * @param bool $contingentRevenueHandling
     * @return OtherChargeResaleItem
     */
    public function setContingentRevenueHandling(bool $contingentRevenueHandling): OtherChargeResaleItem
    {
        $this->contingentRevenueHandling = $contingentRevenueHandling;
        return $this;
    }

    /**
     * @return bool
     */
    public function getContingentRevenueHandling(): bool
    {
        return $this->contingentRevenueHandling;
    }

    /**
     * @param RecordRef $revReclassFXAccount
     * @return OtherChargeResaleItem
     */
    public function setRevReclassFXAccount(RecordRef $revReclassFXAccount): OtherChargeResaleItem
    {
        $this->revReclassFXAccount = $revReclassFXAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevReclassFXAccount(): RecordRef
    {
        return $this->revReclassFXAccount;
    }

    /**
     * @param int $amortizationPeriod
     * @return OtherChargeResaleItem
     */
    public function setAmortizationPeriod(int $amortizationPeriod): OtherChargeResaleItem
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
     * @param int $minimumQuantity
     * @return OtherChargeResaleItem
     */
    public function setMinimumQuantity(int $minimumQuantity): OtherChargeResaleItem
    {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinimumQuantity(): int
    {
        return $this->minimumQuantity;
    }

    /**
     * @param string $minimumQuantityUnits
     * @return OtherChargeResaleItem
     */
    public function setMinimumQuantityUnits(string $minimumQuantityUnits): OtherChargeResaleItem
    {
        $this->minimumQuantityUnits = $minimumQuantityUnits;
        return $this;
    }

    /**
     * @return string
     */
    public function getMinimumQuantityUnits(): string
    {
        return $this->minimumQuantityUnits;
    }

    /**
     * @param bool $enforceMinQtyInternally
     * @return OtherChargeResaleItem
     */
    public function setEnforceMinQtyInternally(bool $enforceMinQtyInternally): OtherChargeResaleItem
    {
        $this->enforceMinQtyInternally = $enforceMinQtyInternally;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEnforceMinQtyInternally(): bool
    {
        return $this->enforceMinQtyInternally;
    }

    /**
     * @param int $maximumQuantity
     * @return OtherChargeResaleItem
     */
    public function setMaximumQuantity(int $maximumQuantity): OtherChargeResaleItem
    {
        $this->maximumQuantity = $maximumQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaximumQuantity(): int
    {
        return $this->maximumQuantity;
    }

    /**
     * @param string $softDescriptor
     * @return OtherChargeResaleItem
     */
    public function setSoftDescriptor(string $softDescriptor): OtherChargeResaleItem
    {
        $this->softDescriptor = $softDescriptor;
        return $this;
    }

    /**
     * @return string
     */
    public function getSoftDescriptor(): string
    {
        return $this->softDescriptor;
    }

    /**
     * @param bool $isFulfillable
     * @return OtherChargeResaleItem
     */
    public function setIsFulfillable(bool $isFulfillable): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setGenerateAccruals(bool $generateAccruals): OtherChargeResaleItem
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
     * @param RecordRef $costCategory
     * @return OtherChargeResaleItem
     */
    public function setCostCategory(RecordRef $costCategory): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setPurchaseOrderQuantity(float $purchaseOrderQuantity): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setPurchaseOrderAmount(float $purchaseOrderAmount): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setPurchaseOrderQuantityDiff(float $purchaseOrderQuantityDiff): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setReceiptQuantity(float $receiptQuantity): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setReceiptAmount(float $receiptAmount): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setReceiptQuantityDiff(float $receiptQuantityDiff): OtherChargeResaleItem
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
     * @param bool $pricesIncludeTax
     * @return OtherChargeResaleItem
     */
    public function setPricesIncludeTax(bool $pricesIncludeTax): OtherChargeResaleItem
    {
        $this->pricesIncludeTax = $pricesIncludeTax;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPricesIncludeTax(): bool
    {
        return $this->pricesIncludeTax;
    }

    /**
     * @param RecordRef $quantityPricingSchedule
     * @return OtherChargeResaleItem
     */
    public function setQuantityPricingSchedule(RecordRef $quantityPricingSchedule): OtherChargeResaleItem
    {
        $this->quantityPricingSchedule = $quantityPricingSchedule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getQuantityPricingSchedule(): RecordRef
    {
        return $this->quantityPricingSchedule;
    }

    /**
     * @param bool $useMarginalRates
     * @return OtherChargeResaleItem
     */
    public function setUseMarginalRates(bool $useMarginalRates): OtherChargeResaleItem
    {
        $this->useMarginalRates = $useMarginalRates;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUseMarginalRates(): bool
    {
        return $this->useMarginalRates;
    }

    /**
     * @param ItemOverallQuantityPricingType $overallQuantityPricingType
     * @return OtherChargeResaleItem
     */
    public function setOverallQuantityPricingType(ItemOverallQuantityPricingType $overallQuantityPricingType): OtherChargeResaleItem
    {
        $this->overallQuantityPricingType = $overallQuantityPricingType;
        return $this;
    }

    /**
     * @return ItemOverallQuantityPricingType
     */
    public function getOverallQuantityPricingType(): ItemOverallQuantityPricingType
    {
        return $this->overallQuantityPricingType;
    }

    /**
     * @param RecordRef $pricingGroup
     * @return OtherChargeResaleItem
     */
    public function setPricingGroup(RecordRef $pricingGroup): OtherChargeResaleItem
    {
        $this->pricingGroup = $pricingGroup;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPricingGroup(): RecordRef
    {
        return $this->pricingGroup;
    }

    /**
     * @param RecordRef $customForm
     * @return OtherChargeResaleItem
     */
    public function setCustomForm(RecordRef $customForm): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setItemId(string $itemId): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setUpcCode(string $upcCode): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setDisplayName(string $displayName): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setVendorName(string $vendorName): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setParent(RecordRef $parent): OtherChargeResaleItem
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
     * @param bool $isOnline
     * @return OtherChargeResaleItem
     */
    public function setIsOnline(bool $isOnline): OtherChargeResaleItem
    {
        $this->isOnline = $isOnline;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsOnline(): bool
    {
        return $this->isOnline;
    }

    /**
     * @param bool $isGcoCompliant
     * @return OtherChargeResaleItem
     */
    public function setIsGcoCompliant(bool $isGcoCompliant): OtherChargeResaleItem
    {
        $this->isGcoCompliant = $isGcoCompliant;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsGcoCompliant(): bool
    {
        return $this->isGcoCompliant;
    }

    /**
     * @param bool $offerSupport
     * @return OtherChargeResaleItem
     */
    public function setOfferSupport(bool $offerSupport): OtherChargeResaleItem
    {
        $this->offerSupport = $offerSupport;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOfferSupport(): bool
    {
        return $this->offerSupport;
    }

    /**
     * @param bool $isInactive
     * @return OtherChargeResaleItem
     */
    public function setIsInactive(bool $isInactive): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setMatrixItemNameTemplate(string $matrixItemNameTemplate): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setAvailableToPartners(bool $availableToPartners): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setDepartment(RecordRef $department): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setClass(RecordRef $class): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setLocation(RecordRef $location): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): OtherChargeResaleItem
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
     * @param float $vsoePrice
     * @return OtherChargeResaleItem
     */
    public function setVsoePrice(float $vsoePrice): OtherChargeResaleItem
    {
        $this->vsoePrice = $vsoePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getVsoePrice(): float
    {
        return $this->vsoePrice;
    }

    /**
     * @param VsoeSopGroup $vsoeSopGroup
     * @return OtherChargeResaleItem
     */
    public function setVsoeSopGroup(VsoeSopGroup $vsoeSopGroup): OtherChargeResaleItem
    {
        $this->vsoeSopGroup = $vsoeSopGroup;
        return $this;
    }

    /**
     * @return VsoeSopGroup
     */
    public function getVsoeSopGroup(): VsoeSopGroup
    {
        return $this->vsoeSopGroup;
    }

    /**
     * @param VsoeDeferral $vsoeDeferral
     * @return OtherChargeResaleItem
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral): OtherChargeResaleItem
    {
        $this->vsoeDeferral = $vsoeDeferral;
        return $this;
    }

    /**
     * @return VsoeDeferral
     */
    public function getVsoeDeferral(): VsoeDeferral
    {
        return $this->vsoeDeferral;
    }

    /**
     * @param VsoePermitDiscount $vsoePermitDiscount
     * @return OtherChargeResaleItem
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount): OtherChargeResaleItem
    {
        $this->vsoePermitDiscount = $vsoePermitDiscount;
        return $this;
    }

    /**
     * @return VsoePermitDiscount
     */
    public function getVsoePermitDiscount(): VsoePermitDiscount
    {
        return $this->vsoePermitDiscount;
    }

    /**
     * @param bool $vsoeDelivered
     * @return OtherChargeResaleItem
     */
    public function setVsoeDelivered(bool $vsoeDelivered): OtherChargeResaleItem
    {
        $this->vsoeDelivered = $vsoeDelivered;
        return $this;
    }

    /**
     * @return bool
     */
    public function getVsoeDelivered(): bool
    {
        return $this->vsoeDelivered;
    }

    /**
     * @param RecordRef $itemRevenueCategory
     * @return OtherChargeResaleItem
     */
    public function setItemRevenueCategory(RecordRef $itemRevenueCategory): OtherChargeResaleItem
    {
        $this->itemRevenueCategory = $itemRevenueCategory;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItemRevenueCategory(): RecordRef
    {
        return $this->itemRevenueCategory;
    }

    /**
     * @param string $currency
     * @return OtherChargeResaleItem
     */
    public function setCurrency(string $currency): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setItemOptionsList(ItemOptionsList $itemOptionsList): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setMatrixOptionList(MatrixOptionList $matrixOptionList): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setItemVendorList(ItemVendorList $itemVendorList): OtherChargeResaleItem
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
     * @param PricingMatrix $pricingMatrix
     * @return OtherChargeResaleItem
     */
    public function setPricingMatrix(PricingMatrix $pricingMatrix): OtherChargeResaleItem
    {
        $this->pricingMatrix = $pricingMatrix;
        return $this;
    }

    /**
     * @return PricingMatrix
     */
    public function getPricingMatrix(): PricingMatrix
    {
        return $this->pricingMatrix;
    }

    /**
     * @param ItemAccountingBookDetailList $accountingBookDetailList
     * @return OtherChargeResaleItem
     */
    public function setAccountingBookDetailList(ItemAccountingBookDetailList $accountingBookDetailList): OtherChargeResaleItem
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
     * @param RecordRef $purchaseTaxCode
     * @return OtherChargeResaleItem
     */
    public function setPurchaseTaxCode(RecordRef $purchaseTaxCode): OtherChargeResaleItem
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
     * @param float $rate
     * @return OtherChargeResaleItem
     */
    public function setRate(float $rate): OtherChargeResaleItem
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @param RecordRef $salesTaxCode
     * @return OtherChargeResaleItem
     */
    public function setSalesTaxCode(RecordRef $salesTaxCode): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setTranslationsList(TranslationList $translationsList): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setVendor(RecordRef $vendor): OtherChargeResaleItem
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
     * @param OtherChargeResaleItemHierarchyVersionsList $hierarchyVersionsList
     * @return OtherChargeResaleItem
     */
    public function setHierarchyVersionsList(OtherChargeResaleItemHierarchyVersionsList $hierarchyVersionsList): OtherChargeResaleItem
    {
        $this->hierarchyVersionsList = $hierarchyVersionsList;
        return $this;
    }

    /**
     * @return OtherChargeResaleItemHierarchyVersionsList
     */
    public function getHierarchyVersionsList(): OtherChargeResaleItemHierarchyVersionsList
    {
        return $this->hierarchyVersionsList;
    }

    /**
     * @param RecordRef $consumptionUnit
     * @return OtherChargeResaleItem
     */
    public function setConsumptionUnit(RecordRef $consumptionUnit): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setInternalId(string $internalId): OtherChargeResaleItem
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
     * @return OtherChargeResaleItem
     */
    public function setExternalId(string $externalId): OtherChargeResaleItem
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
