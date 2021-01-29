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

class OtherChargeSaleItem extends Record {
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
    protected RecordRef $saleUnit;

    /**
     * @var RecordRef
     */
    protected RecordRef $issueProduct;

    /**
     * @var string
     */
    protected string $costEstimateUnits;

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
    protected RecordRef $revRecSchedule;

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
     * @var RecordRef
     */
    protected RecordRef $costCategory;

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
     * @var RecordRefList
     */
    protected RecordRefList $subsidiaryList;

    /**
     * @var ItemOptionsList
     */
    protected ItemOptionsList $itemOptionsList;

    /**
     * @var MatrixOptionList
     */
    protected MatrixOptionList $matrixOptionList;

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
     * @var OtherChargeSaleItemHierarchyVersionsList
     */
    protected OtherChargeSaleItemHierarchyVersionsList $hierarchyVersionsList;

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
        "salesDescription" => "string",
        "includeChildren" => "boolean",
        "incomeAccount" => "RecordRef",
        "isTaxable" => "boolean",
        "matrixType" => "ItemMatrixType",
        "taxSchedule" => "RecordRef",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "unitsType" => "RecordRef",
        "saleUnit" => "RecordRef",
        "issueProduct" => "RecordRef",
        "costEstimateUnits" => "string",
        "billingSchedule" => "RecordRef",
        "deferredRevenueAccount" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "minimumQuantity" => "integer",
        "minimumQuantityUnits" => "string",
        "enforceMinQtyInternally" => "boolean",
        "maximumQuantity" => "integer",
        "softDescriptor" => "string",
        "isFulfillable" => "boolean",
        "costCategory" => "RecordRef",
        "pricesIncludeTax" => "boolean",
        "quantityPricingSchedule" => "RecordRef",
        "useMarginalRates" => "boolean",
        "overallQuantityPricingType" => "ItemOverallQuantityPricingType",
        "pricingGroup" => "RecordRef",
        "customForm" => "RecordRef",
        "itemId" => "string",
        "upcCode" => "string",
        "displayName" => "string",
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
        "vsoePrice" => "float",
        "vsoeSopGroup" => "VsoeSopGroup",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "itemRevenueCategory" => "RecordRef",
        "deferRevRec" => "boolean",
        "revenueRecognitionRule" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "revenueAllocationGroup" => "RecordRef",
        "createRevenuePlansOn" => "RecordRef",
        "directRevenuePosting" => "boolean",
        "contingentRevenueHandling" => "boolean",
        "revReclassFXAccount" => "RecordRef",
        "subsidiaryList" => "RecordRefList",
        "itemOptionsList" => "ItemOptionsList",
        "matrixOptionList" => "MatrixOptionList",
        "pricingMatrix" => "PricingMatrix",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "purchaseTaxCode" => "RecordRef",
        "rate" => "float",
        "salesTaxCode" => "RecordRef",
        "translationsList" => "TranslationList",
        "hierarchyVersionsList" => "OtherChargeSaleItemHierarchyVersionsList",
        "consumptionUnit" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return OtherChargeSaleItem
     */
    public function setCreatedDate(string $createdDate): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setLastModifiedDate(string $lastModifiedDate): OtherChargeSaleItem
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
     * @param string $salesDescription
     * @return OtherChargeSaleItem
     */
    public function setSalesDescription(string $salesDescription): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setIncludeChildren(bool $includeChildren): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setIncomeAccount(RecordRef $incomeAccount): OtherChargeSaleItem
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
     * @param bool $isTaxable
     * @return OtherChargeSaleItem
     */
    public function setIsTaxable(bool $isTaxable): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setMatrixType(ItemMatrixType $matrixType): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setTaxSchedule(RecordRef $taxSchedule): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setCostEstimate(float $costEstimate): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setUnitsType(RecordRef $unitsType): OtherChargeSaleItem
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
     * @param RecordRef $saleUnit
     * @return OtherChargeSaleItem
     */
    public function setSaleUnit(RecordRef $saleUnit): OtherChargeSaleItem
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
     * @param RecordRef $issueProduct
     * @return OtherChargeSaleItem
     */
    public function setIssueProduct(RecordRef $issueProduct): OtherChargeSaleItem
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
     * @param string $costEstimateUnits
     * @return OtherChargeSaleItem
     */
    public function setCostEstimateUnits(string $costEstimateUnits): OtherChargeSaleItem
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
     * @param RecordRef $billingSchedule
     * @return OtherChargeSaleItem
     */
    public function setBillingSchedule(RecordRef $billingSchedule): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setDeferredRevenueAccount(RecordRef $deferredRevenueAccount): OtherChargeSaleItem
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
     * @param RecordRef $revRecSchedule
     * @return OtherChargeSaleItem
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): OtherChargeSaleItem
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
     * @param int $minimumQuantity
     * @return OtherChargeSaleItem
     */
    public function setMinimumQuantity(int $minimumQuantity): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setMinimumQuantityUnits(string $minimumQuantityUnits): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setEnforceMinQtyInternally(bool $enforceMinQtyInternally): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setMaximumQuantity(int $maximumQuantity): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setSoftDescriptor(string $softDescriptor): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setIsFulfillable(bool $isFulfillable): OtherChargeSaleItem
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
     * @param RecordRef $costCategory
     * @return OtherChargeSaleItem
     */
    public function setCostCategory(RecordRef $costCategory): OtherChargeSaleItem
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
     * @param bool $pricesIncludeTax
     * @return OtherChargeSaleItem
     */
    public function setPricesIncludeTax(bool $pricesIncludeTax): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setQuantityPricingSchedule(RecordRef $quantityPricingSchedule): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setUseMarginalRates(bool $useMarginalRates): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setOverallQuantityPricingType(ItemOverallQuantityPricingType $overallQuantityPricingType): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setPricingGroup(RecordRef $pricingGroup): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setCustomForm(RecordRef $customForm): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setItemId(string $itemId): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setUpcCode(string $upcCode): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setDisplayName(string $displayName): OtherChargeSaleItem
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
     * @param RecordRef $parent
     * @return OtherChargeSaleItem
     */
    public function setParent(RecordRef $parent): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setIsOnline(bool $isOnline): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setIsGcoCompliant(bool $isGcoCompliant): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setOfferSupport(bool $offerSupport): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setIsInactive(bool $isInactive): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setMatrixItemNameTemplate(string $matrixItemNameTemplate): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setAvailableToPartners(bool $availableToPartners): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setDepartment(RecordRef $department): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setClass(RecordRef $class): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setLocation(RecordRef $location): OtherChargeSaleItem
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
     * @param float $vsoePrice
     * @return OtherChargeSaleItem
     */
    public function setVsoePrice(float $vsoePrice): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setVsoeSopGroup(VsoeSopGroup $vsoeSopGroup): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setVsoeDelivered(bool $vsoeDelivered): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setItemRevenueCategory(RecordRef $itemRevenueCategory): OtherChargeSaleItem
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
     * @param bool $deferRevRec
     * @return OtherChargeSaleItem
     */
    public function setDeferRevRec(bool $deferRevRec): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setRevenueRecognitionRule(RecordRef $revenueRecognitionRule): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setRevRecForecastRule(RecordRef $revRecForecastRule): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setRevenueAllocationGroup(RecordRef $revenueAllocationGroup): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setCreateRevenuePlansOn(RecordRef $createRevenuePlansOn): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setDirectRevenuePosting(bool $directRevenuePosting): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setContingentRevenueHandling(bool $contingentRevenueHandling): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setRevReclassFXAccount(RecordRef $revReclassFXAccount): OtherChargeSaleItem
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
     * @param RecordRefList $subsidiaryList
     * @return OtherChargeSaleItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): OtherChargeSaleItem
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
     * @param ItemOptionsList $itemOptionsList
     * @return OtherChargeSaleItem
     */
    public function setItemOptionsList(ItemOptionsList $itemOptionsList): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setMatrixOptionList(MatrixOptionList $matrixOptionList): OtherChargeSaleItem
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
     * @param PricingMatrix $pricingMatrix
     * @return OtherChargeSaleItem
     */
    public function setPricingMatrix(PricingMatrix $pricingMatrix): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setAccountingBookDetailList(ItemAccountingBookDetailList $accountingBookDetailList): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setPurchaseTaxCode(RecordRef $purchaseTaxCode): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setRate(float $rate): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setSalesTaxCode(RecordRef $salesTaxCode): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setTranslationsList(TranslationList $translationsList): OtherChargeSaleItem
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
     * @param OtherChargeSaleItemHierarchyVersionsList $hierarchyVersionsList
     * @return OtherChargeSaleItem
     */
    public function setHierarchyVersionsList(OtherChargeSaleItemHierarchyVersionsList $hierarchyVersionsList): OtherChargeSaleItem
    {
        $this->hierarchyVersionsList = $hierarchyVersionsList;
        return $this;
    }

    /**
     * @return OtherChargeSaleItemHierarchyVersionsList
     */
    public function getHierarchyVersionsList(): OtherChargeSaleItemHierarchyVersionsList
    {
        return $this->hierarchyVersionsList;
    }

    /**
     * @param RecordRef $consumptionUnit
     * @return OtherChargeSaleItem
     */
    public function setConsumptionUnit(RecordRef $consumptionUnit): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setInternalId(string $internalId): OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
     */
    public function setExternalId(string $externalId): OtherChargeSaleItem
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
