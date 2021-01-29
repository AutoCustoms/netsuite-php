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

class NonInventoryResaleItem extends Record {
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
    protected bool $copyDescription;

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
     * @var RecordRef
     */
    protected RecordRef $dropshipExpenseAccount;

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
    protected bool $isDropShipItem;

    /**
     * @var bool
     */
    protected bool $isSpecialOrderItem;

    /**
     * @var float
     */
    protected float $shippingCost;

    /**
     * @var string
     */
    protected string $shippingCostUnits;

    /**
     * @var float
     */
    protected float $handlingCost;

    /**
     * @var string
     */
    protected string $handlingCostUnits;

    /**
     * @var ItemCostEstimateType
     */
    protected ItemCostEstimateType $costEstimateType;

    /**
     * @var float
     */
    protected float $costEstimate;

    /**
     * @var float
     */
    protected float $weight;

    /**
     * @var ItemWeightUnit
     */
    protected ItemWeightUnit $weightUnit;

    /**
     * @var string
     */
    protected string $weightUnits;

    /**
     * @var string
     */
    protected string $costEstimateUnits;

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
     * @var int
     */
    protected int $amortizationPeriod;

    /**
     * @var string
     */
    protected string $stockDescription;

    /**
     * @var bool
     */
    protected bool $producer;

    /**
     * @var string
     */
    protected string $manufacturer;

    /**
     * @var string
     */
    protected string $mpn;

    /**
     * @var bool
     */
    protected bool $multManufactureAddr;

    protected $manufacturerAddr1;
    /**
     * @var string
     */
    protected string $manufacturerCity;

    /**
     * @var string
     */
    protected string $manufacturerState;

    /**
     * @var string
     */
    protected string $manufacturerZip;

    /**
     * @var Country
     */
    protected Country $countryOfManufacture;

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
    protected string $manufacturerTaxId;

    /**
     * @var string
     */
    protected string $scheduleBNumber;

    /**
     * @var int
     */
    protected int $scheduleBQuantity;

    /**
     * @var ScheduleBCode
     */
    protected ScheduleBCode $scheduleBCode;

    /**
     * @var string
     */
    protected string $manufacturerTariff;

    /**
     * @var ItemPreferenceCriterion
     */
    protected ItemPreferenceCriterion $preferenceCriterion;

    /**
     * @var int
     */
    protected int $minimumQuantity;

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
     * @var RecordRef
     */
    protected RecordRef $shipPackage;

    /**
     * @var bool
     */
    protected bool $shipIndividually;

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
     * @var string
     */
    protected string $minimumQuantityUnits;

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
    protected string $storeDisplayName;

    /**
     * @var RecordRef
     */
    protected RecordRef $storeDisplayThumbnail;

    /**
     * @var RecordRef
     */
    protected RecordRef $storeDisplayImage;

    /**
     * @var string
     */
    protected string $storeDescription;

    /**
     * @var string
     */
    protected string $storeDetailedDescription;

    /**
     * @var RecordRef
     */
    protected RecordRef $storeItemTemplate;

    /**
     * @var string
     */
    protected string $pageTitle;

    /**
     * @var string
     */
    protected string $metaTagHtml;

    /**
     * @var bool
     */
    protected bool $excludeFromSitemap;

    /**
     * @var SitemapPriority
     */
    protected SitemapPriority $sitemapPriority;

    /**
     * @var string
     */
    protected string $searchKeywords;

    /**
     * @var bool
     */
    protected bool $isDonationItem;

    /**
     * @var bool
     */
    protected bool $showDefaultDonationAmount;

    /**
     * @var float
     */
    protected float $maxDonationAmount;

    /**
     * @var bool
     */
    protected bool $dontShowPrice;

    /**
     * @var string
     */
    protected string $noPriceMessage;

    /**
     * @var string
     */
    protected string $outOfStockMessage;

    /**
     * @var bool
     */
    protected bool $onSpecial;

    /**
     * @var ItemOutOfStockBehavior
     */
    protected ItemOutOfStockBehavior $outOfStockBehavior;

    /**
     * @var string
     */
    protected string $relatedItemsDescription;

    /**
     * @var string
     */
    protected string $specialsDescription;

    /**
     * @var string
     */
    protected string $featuredDescription;

    /**
     * @var string
     */
    protected string $shoppingDotComCategory;

    /**
     * @var int
     */
    protected int $shopzillaCategoryId;

    /**
     * @var string
     */
    protected string $nexTagCategory;

    /**
     * @var ProductFeedList
     */
    protected ProductFeedList $productFeedList;

    /**
     * @var string
     */
    protected string $urlComponent;

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
    protected bool $isHazmatItem;

    /**
     * @var string
     */
    protected string $hazmatId;

    /**
     * @var string
     */
    protected string $hazmatShippingName;

    /**
     * @var string
     */
    protected string $hazmatHazardClass;

    /**
     * @var HazmatPackingGroup
     */
    protected HazmatPackingGroup $hazmatPackingGroup;

    /**
     * @var string
     */
    protected string $hazmatItemUnits;

    /**
     * @var float
     */
    protected float $hazmatItemUnitsQty;

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
     * @var RecordRef
     */
    protected RecordRef $defaultItemShipMethod;

    /**
     * @var ShippingCarrier
     */
    protected ShippingCarrier $itemCarrier;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $itemShipMethodList;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $subsidiaryList;

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
     * @var SiteCategoryList
     */
    protected SiteCategoryList $siteCategoryList;

    /**
     * @var TranslationList
     */
    protected TranslationList $translationsList;

    /**
     * @var RecordRef
     */
    protected RecordRef $vendor;

    /**
     * @var PresentationItemList
     */
    protected PresentationItemList $presentationItemList;

    /**
     * @var NonInventoryResaleItemHierarchyVersionsList
     */
    protected NonInventoryResaleItemHierarchyVersionsList $hierarchyVersionsList;

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
        "copyDescription" => "boolean",
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
        "dropshipExpenseAccount" => "RecordRef",
        "deferRevRec" => "boolean",
        "revenueRecognitionRule" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "revenueAllocationGroup" => "RecordRef",
        "createRevenuePlansOn" => "RecordRef",
        "directRevenuePosting" => "boolean",
        "isDropShipItem" => "boolean",
        "isSpecialOrderItem" => "boolean",
        "shippingCost" => "float",
        "shippingCostUnits" => "string",
        "handlingCost" => "float",
        "handlingCostUnits" => "string",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "weight" => "float",
        "weightUnit" => "ItemWeightUnit",
        "weightUnits" => "string",
        "costEstimateUnits" => "string",
        "unitsType" => "RecordRef",
        "purchaseUnit" => "RecordRef",
        "saleUnit" => "RecordRef",
        "issueProduct" => "RecordRef",
        "billingSchedule" => "RecordRef",
        "deferredRevenueAccount" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "deferralAccount" => "RecordRef",
        "amortizationTemplate" => "RecordRef",
        "residual" => "string",
        "amortizationPeriod" => "integer",
        "stockDescription" => "string",
        "producer" => "boolean",
        "manufacturer" => "string",
        "mpn" => "string",
        "multManufactureAddr" => "boolean",
        "manufacturerAddr1" => "string",
        "manufacturerCity" => "string",
        "manufacturerState" => "string",
        "manufacturerZip" => "string",
        "countryOfManufacture" => "Country",
        "purchaseOrderQuantity" => "float",
        "purchaseOrderAmount" => "float",
        "purchaseOrderQuantityDiff" => "float",
        "receiptQuantity" => "float",
        "receiptAmount" => "float",
        "receiptQuantityDiff" => "float",
        "manufacturerTaxId" => "string",
        "scheduleBNumber" => "string",
        "scheduleBQuantity" => "integer",
        "scheduleBCode" => "ScheduleBCode",
        "manufacturerTariff" => "string",
        "preferenceCriterion" => "ItemPreferenceCriterion",
        "minimumQuantity" => "integer",
        "enforceMinQtyInternally" => "boolean",
        "maximumQuantity" => "integer",
        "softDescriptor" => "string",
        "shipPackage" => "RecordRef",
        "shipIndividually" => "boolean",
        "isFulfillable" => "boolean",
        "generateAccruals" => "boolean",
        "costCategory" => "RecordRef",
        "pricesIncludeTax" => "boolean",
        "quantityPricingSchedule" => "RecordRef",
        "useMarginalRates" => "boolean",
        "overallQuantityPricingType" => "ItemOverallQuantityPricingType",
        "pricingGroup" => "RecordRef",
        "minimumQuantityUnits" => "string",
        "vsoePrice" => "float",
        "vsoeSopGroup" => "VsoeSopGroup",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "itemRevenueCategory" => "RecordRef",
        "storeDisplayName" => "string",
        "storeDisplayThumbnail" => "RecordRef",
        "storeDisplayImage" => "RecordRef",
        "storeDescription" => "string",
        "storeDetailedDescription" => "string",
        "storeItemTemplate" => "RecordRef",
        "pageTitle" => "string",
        "metaTagHtml" => "string",
        "excludeFromSitemap" => "boolean",
        "sitemapPriority" => "SitemapPriority",
        "searchKeywords" => "string",
        "isDonationItem" => "boolean",
        "showDefaultDonationAmount" => "boolean",
        "maxDonationAmount" => "float",
        "dontShowPrice" => "boolean",
        "noPriceMessage" => "string",
        "outOfStockMessage" => "string",
        "onSpecial" => "boolean",
        "outOfStockBehavior" => "ItemOutOfStockBehavior",
        "relatedItemsDescription" => "string",
        "specialsDescription" => "string",
        "featuredDescription" => "string",
        "shoppingDotComCategory" => "string",
        "shopzillaCategoryId" => "integer",
        "nexTagCategory" => "string",
        "productFeedList" => "ProductFeedList",
        "urlComponent" => "string",
        "customForm" => "RecordRef",
        "itemId" => "string",
        "upcCode" => "string",
        "displayName" => "string",
        "vendorName" => "string",
        "parent" => "RecordRef",
        "isOnline" => "boolean",
        "isHazmatItem" => "boolean",
        "hazmatId" => "string",
        "hazmatShippingName" => "string",
        "hazmatHazardClass" => "string",
        "hazmatPackingGroup" => "HazmatPackingGroup",
        "hazmatItemUnits" => "string",
        "hazmatItemUnitsQty" => "float",
        "isGcoCompliant" => "boolean",
        "offerSupport" => "boolean",
        "isInactive" => "boolean",
        "matrixItemNameTemplate" => "string",
        "availableToPartners" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "defaultItemShipMethod" => "RecordRef",
        "itemCarrier" => "ShippingCarrier",
        "itemShipMethodList" => "RecordRefList",
        "subsidiaryList" => "RecordRefList",
        "currency" => "string",
        "itemOptionsList" => "ItemOptionsList",
        "matrixOptionList" => "MatrixOptionList",
        "itemVendorList" => "ItemVendorList",
        "pricingMatrix" => "PricingMatrix",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "purchaseTaxCode" => "RecordRef",
        "rate" => "float",
        "salesTaxCode" => "RecordRef",
        "siteCategoryList" => "SiteCategoryList",
        "translationsList" => "TranslationList",
        "vendor" => "RecordRef",
        "presentationItemList" => "PresentationItemList",
        "hierarchyVersionsList" => "NonInventoryResaleItemHierarchyVersionsList",
        "consumptionUnit" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return NonInventoryResaleItem
     */
    public function setCreatedDate(string $createdDate): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setLastModifiedDate(string $lastModifiedDate): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setPurchaseDescription(string $purchaseDescription): NonInventoryResaleItem
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
     * @param bool $copyDescription
     * @return NonInventoryResaleItem
     */
    public function setCopyDescription(bool $copyDescription): NonInventoryResaleItem
    {
        $this->copyDescription = $copyDescription;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCopyDescription(): bool
    {
        return $this->copyDescription;
    }

    /**
     * @param float $cost
     * @return NonInventoryResaleItem
     */
    public function setCost(float $cost): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setCostUnits(string $costUnits): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setExpenseAccount(RecordRef $expenseAccount): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setIntercoExpenseAccount(RecordRef $intercoExpenseAccount): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setSalesDescription(string $salesDescription): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setIncludeChildren(bool $includeChildren): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setIncomeAccount(RecordRef $incomeAccount): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setIntercoIncomeAccount(RecordRef $intercoIncomeAccount): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setIsTaxable(bool $isTaxable): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setMatrixType(ItemMatrixType $matrixType): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setTaxSchedule(RecordRef $taxSchedule): NonInventoryResaleItem
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
     * @param RecordRef $dropshipExpenseAccount
     * @return NonInventoryResaleItem
     */
    public function setDropshipExpenseAccount(RecordRef $dropshipExpenseAccount): NonInventoryResaleItem
    {
        $this->dropshipExpenseAccount = $dropshipExpenseAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDropshipExpenseAccount(): RecordRef
    {
        return $this->dropshipExpenseAccount;
    }

    /**
     * @param bool $deferRevRec
     * @return NonInventoryResaleItem
     */
    public function setDeferRevRec(bool $deferRevRec): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setRevenueRecognitionRule(RecordRef $revenueRecognitionRule): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setRevRecForecastRule(RecordRef $revRecForecastRule): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setRevenueAllocationGroup(RecordRef $revenueAllocationGroup): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setCreateRevenuePlansOn(RecordRef $createRevenuePlansOn): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setDirectRevenuePosting(bool $directRevenuePosting): NonInventoryResaleItem
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
     * @param bool $isDropShipItem
     * @return NonInventoryResaleItem
     */
    public function setIsDropShipItem(bool $isDropShipItem): NonInventoryResaleItem
    {
        $this->isDropShipItem = $isDropShipItem;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDropShipItem(): bool
    {
        return $this->isDropShipItem;
    }

    /**
     * @param bool $isSpecialOrderItem
     * @return NonInventoryResaleItem
     */
    public function setIsSpecialOrderItem(bool $isSpecialOrderItem): NonInventoryResaleItem
    {
        $this->isSpecialOrderItem = $isSpecialOrderItem;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSpecialOrderItem(): bool
    {
        return $this->isSpecialOrderItem;
    }

    /**
     * @param float $shippingCost
     * @return NonInventoryResaleItem
     */
    public function setShippingCost(float $shippingCost): NonInventoryResaleItem
    {
        $this->shippingCost = $shippingCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getShippingCost(): float
    {
        return $this->shippingCost;
    }

    /**
     * @param string $shippingCostUnits
     * @return NonInventoryResaleItem
     */
    public function setShippingCostUnits(string $shippingCostUnits): NonInventoryResaleItem
    {
        $this->shippingCostUnits = $shippingCostUnits;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingCostUnits(): string
    {
        return $this->shippingCostUnits;
    }

    /**
     * @param float $handlingCost
     * @return NonInventoryResaleItem
     */
    public function setHandlingCost(float $handlingCost): NonInventoryResaleItem
    {
        $this->handlingCost = $handlingCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getHandlingCost(): float
    {
        return $this->handlingCost;
    }

    /**
     * @param string $handlingCostUnits
     * @return NonInventoryResaleItem
     */
    public function setHandlingCostUnits(string $handlingCostUnits): NonInventoryResaleItem
    {
        $this->handlingCostUnits = $handlingCostUnits;
        return $this;
    }

    /**
     * @return string
     */
    public function getHandlingCostUnits(): string
    {
        return $this->handlingCostUnits;
    }

    /**
     * @param ItemCostEstimateType $costEstimateType
     * @return NonInventoryResaleItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setCostEstimate(float $costEstimate): NonInventoryResaleItem
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
     * @param float $weight
     * @return NonInventoryResaleItem
     */
    public function setWeight(float $weight): NonInventoryResaleItem
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param ItemWeightUnit $weightUnit
     * @return NonInventoryResaleItem
     */
    public function setWeightUnit(ItemWeightUnit $weightUnit): NonInventoryResaleItem
    {
        $this->weightUnit = $weightUnit;
        return $this;
    }

    /**
     * @return ItemWeightUnit
     */
    public function getWeightUnit(): ItemWeightUnit
    {
        return $this->weightUnit;
    }

    /**
     * @param string $weightUnits
     * @return NonInventoryResaleItem
     */
    public function setWeightUnits(string $weightUnits): NonInventoryResaleItem
    {
        $this->weightUnits = $weightUnits;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeightUnits(): string
    {
        return $this->weightUnits;
    }

    /**
     * @param string $costEstimateUnits
     * @return NonInventoryResaleItem
     */
    public function setCostEstimateUnits(string $costEstimateUnits): NonInventoryResaleItem
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
     * @param RecordRef $unitsType
     * @return NonInventoryResaleItem
     */
    public function setUnitsType(RecordRef $unitsType): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setPurchaseUnit(RecordRef $purchaseUnit): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setSaleUnit(RecordRef $saleUnit): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setIssueProduct(RecordRef $issueProduct): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setBillingSchedule(RecordRef $billingSchedule): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setDeferredRevenueAccount(RecordRef $deferredRevenueAccount): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setDeferralAccount(RecordRef $deferralAccount): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setAmortizationTemplate(RecordRef $amortizationTemplate): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setResidual(string $residual): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setAmortizationPeriod(int $amortizationPeriod): NonInventoryResaleItem
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
     * @param string $stockDescription
     * @return NonInventoryResaleItem
     */
    public function setStockDescription(string $stockDescription): NonInventoryResaleItem
    {
        $this->stockDescription = $stockDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getStockDescription(): string
    {
        return $this->stockDescription;
    }

    /**
     * @param bool $producer
     * @return NonInventoryResaleItem
     */
    public function setProducer(bool $producer): NonInventoryResaleItem
    {
        $this->producer = $producer;
        return $this;
    }

    /**
     * @return bool
     */
    public function getProducer(): bool
    {
        return $this->producer;
    }

    /**
     * @param string $manufacturer
     * @return NonInventoryResaleItem
     */
    public function setManufacturer(string $manufacturer): NonInventoryResaleItem
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * @return string
     */
    public function getManufacturer(): string
    {
        return $this->manufacturer;
    }

    /**
     * @param string $mpn
     * @return NonInventoryResaleItem
     */
    public function setMpn(string $mpn): NonInventoryResaleItem
    {
        $this->mpn = $mpn;
        return $this;
    }

    /**
     * @return string
     */
    public function getMpn(): string
    {
        return $this->mpn;
    }

    /**
     * @param bool $multManufactureAddr
     * @return NonInventoryResaleItem
     */
    public function setMultManufactureAddr(bool $multManufactureAddr): NonInventoryResaleItem
    {
        $this->multManufactureAddr = $multManufactureAddr;
        return $this;
    }

    /**
     * @return bool
     */
    public function getMultManufactureAddr(): bool
    {
        return $this->multManufactureAddr;
    }

    /**
     * @param string $manufacturerCity
     * @return NonInventoryResaleItem
     */
    public function setManufacturerCity(string $manufacturerCity): NonInventoryResaleItem
    {
        $this->manufacturerCity = $manufacturerCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerCity(): string
    {
        return $this->manufacturerCity;
    }

    /**
     * @param string $manufacturerState
     * @return NonInventoryResaleItem
     */
    public function setManufacturerState(string $manufacturerState): NonInventoryResaleItem
    {
        $this->manufacturerState = $manufacturerState;
        return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerState(): string
    {
        return $this->manufacturerState;
    }

    /**
     * @param string $manufacturerZip
     * @return NonInventoryResaleItem
     */
    public function setManufacturerZip(string $manufacturerZip): NonInventoryResaleItem
    {
        $this->manufacturerZip = $manufacturerZip;
        return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerZip(): string
    {
        return $this->manufacturerZip;
    }

    /**
     * @param Country $countryOfManufacture
     * @return NonInventoryResaleItem
     */
    public function setCountryOfManufacture(Country $countryOfManufacture): NonInventoryResaleItem
    {
        $this->countryOfManufacture = $countryOfManufacture;
        return $this;
    }

    /**
     * @return Country
     */
    public function getCountryOfManufacture(): Country
    {
        return $this->countryOfManufacture;
    }

    /**
     * @param float $purchaseOrderQuantity
     * @return NonInventoryResaleItem
     */
    public function setPurchaseOrderQuantity(float $purchaseOrderQuantity): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setPurchaseOrderAmount(float $purchaseOrderAmount): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setPurchaseOrderQuantityDiff(float $purchaseOrderQuantityDiff): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setReceiptQuantity(float $receiptQuantity): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setReceiptAmount(float $receiptAmount): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setReceiptQuantityDiff(float $receiptQuantityDiff): NonInventoryResaleItem
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
     * @param string $manufacturerTaxId
     * @return NonInventoryResaleItem
     */
    public function setManufacturerTaxId(string $manufacturerTaxId): NonInventoryResaleItem
    {
        $this->manufacturerTaxId = $manufacturerTaxId;
        return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerTaxId(): string
    {
        return $this->manufacturerTaxId;
    }

    /**
     * @param string $scheduleBNumber
     * @return NonInventoryResaleItem
     */
    public function setScheduleBNumber(string $scheduleBNumber): NonInventoryResaleItem
    {
        $this->scheduleBNumber = $scheduleBNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getScheduleBNumber(): string
    {
        return $this->scheduleBNumber;
    }

    /**
     * @param int $scheduleBQuantity
     * @return NonInventoryResaleItem
     */
    public function setScheduleBQuantity(int $scheduleBQuantity): NonInventoryResaleItem
    {
        $this->scheduleBQuantity = $scheduleBQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getScheduleBQuantity(): int
    {
        return $this->scheduleBQuantity;
    }

    /**
     * @param ScheduleBCode $scheduleBCode
     * @return NonInventoryResaleItem
     */
    public function setScheduleBCode(ScheduleBCode $scheduleBCode): NonInventoryResaleItem
    {
        $this->scheduleBCode = $scheduleBCode;
        return $this;
    }

    /**
     * @return ScheduleBCode
     */
    public function getScheduleBCode(): ScheduleBCode
    {
        return $this->scheduleBCode;
    }

    /**
     * @param string $manufacturerTariff
     * @return NonInventoryResaleItem
     */
    public function setManufacturerTariff(string $manufacturerTariff): NonInventoryResaleItem
    {
        $this->manufacturerTariff = $manufacturerTariff;
        return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerTariff(): string
    {
        return $this->manufacturerTariff;
    }

    /**
     * @param ItemPreferenceCriterion $preferenceCriterion
     * @return NonInventoryResaleItem
     */
    public function setPreferenceCriterion(ItemPreferenceCriterion $preferenceCriterion): NonInventoryResaleItem
    {
        $this->preferenceCriterion = $preferenceCriterion;
        return $this;
    }

    /**
     * @return ItemPreferenceCriterion
     */
    public function getPreferenceCriterion(): ItemPreferenceCriterion
    {
        return $this->preferenceCriterion;
    }

    /**
     * @param int $minimumQuantity
     * @return NonInventoryResaleItem
     */
    public function setMinimumQuantity(int $minimumQuantity): NonInventoryResaleItem
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
     * @param bool $enforceMinQtyInternally
     * @return NonInventoryResaleItem
     */
    public function setEnforceMinQtyInternally(bool $enforceMinQtyInternally): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setMaximumQuantity(int $maximumQuantity): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setSoftDescriptor(string $softDescriptor): NonInventoryResaleItem
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
     * @param RecordRef $shipPackage
     * @return NonInventoryResaleItem
     */
    public function setShipPackage(RecordRef $shipPackage): NonInventoryResaleItem
    {
        $this->shipPackage = $shipPackage;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipPackage(): RecordRef
    {
        return $this->shipPackage;
    }

    /**
     * @param bool $shipIndividually
     * @return NonInventoryResaleItem
     */
    public function setShipIndividually(bool $shipIndividually): NonInventoryResaleItem
    {
        $this->shipIndividually = $shipIndividually;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShipIndividually(): bool
    {
        return $this->shipIndividually;
    }

    /**
     * @param bool $isFulfillable
     * @return NonInventoryResaleItem
     */
    public function setIsFulfillable(bool $isFulfillable): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setGenerateAccruals(bool $generateAccruals): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setCostCategory(RecordRef $costCategory): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setPricesIncludeTax(bool $pricesIncludeTax): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setQuantityPricingSchedule(RecordRef $quantityPricingSchedule): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setUseMarginalRates(bool $useMarginalRates): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setOverallQuantityPricingType(ItemOverallQuantityPricingType $overallQuantityPricingType): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setPricingGroup(RecordRef $pricingGroup): NonInventoryResaleItem
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
     * @param string $minimumQuantityUnits
     * @return NonInventoryResaleItem
     */
    public function setMinimumQuantityUnits(string $minimumQuantityUnits): NonInventoryResaleItem
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
     * @param float $vsoePrice
     * @return NonInventoryResaleItem
     */
    public function setVsoePrice(float $vsoePrice): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setVsoeSopGroup(VsoeSopGroup $vsoeSopGroup): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setVsoeDelivered(bool $vsoeDelivered): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setItemRevenueCategory(RecordRef $itemRevenueCategory): NonInventoryResaleItem
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
     * @param string $storeDisplayName
     * @return NonInventoryResaleItem
     */
    public function setStoreDisplayName(string $storeDisplayName): NonInventoryResaleItem
    {
        $this->storeDisplayName = $storeDisplayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreDisplayName(): string
    {
        return $this->storeDisplayName;
    }

    /**
     * @param RecordRef $storeDisplayThumbnail
     * @return NonInventoryResaleItem
     */
    public function setStoreDisplayThumbnail(RecordRef $storeDisplayThumbnail): NonInventoryResaleItem
    {
        $this->storeDisplayThumbnail = $storeDisplayThumbnail;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStoreDisplayThumbnail(): RecordRef
    {
        return $this->storeDisplayThumbnail;
    }

    /**
     * @param RecordRef $storeDisplayImage
     * @return NonInventoryResaleItem
     */
    public function setStoreDisplayImage(RecordRef $storeDisplayImage): NonInventoryResaleItem
    {
        $this->storeDisplayImage = $storeDisplayImage;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStoreDisplayImage(): RecordRef
    {
        return $this->storeDisplayImage;
    }

    /**
     * @param string $storeDescription
     * @return NonInventoryResaleItem
     */
    public function setStoreDescription(string $storeDescription): NonInventoryResaleItem
    {
        $this->storeDescription = $storeDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreDescription(): string
    {
        return $this->storeDescription;
    }

    /**
     * @param string $storeDetailedDescription
     * @return NonInventoryResaleItem
     */
    public function setStoreDetailedDescription(string $storeDetailedDescription): NonInventoryResaleItem
    {
        $this->storeDetailedDescription = $storeDetailedDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreDetailedDescription(): string
    {
        return $this->storeDetailedDescription;
    }

    /**
     * @param RecordRef $storeItemTemplate
     * @return NonInventoryResaleItem
     */
    public function setStoreItemTemplate(RecordRef $storeItemTemplate): NonInventoryResaleItem
    {
        $this->storeItemTemplate = $storeItemTemplate;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStoreItemTemplate(): RecordRef
    {
        return $this->storeItemTemplate;
    }

    /**
     * @param string $pageTitle
     * @return NonInventoryResaleItem
     */
    public function setPageTitle(string $pageTitle): NonInventoryResaleItem
    {
        $this->pageTitle = $pageTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getPageTitle(): string
    {
        return $this->pageTitle;
    }

    /**
     * @param string $metaTagHtml
     * @return NonInventoryResaleItem
     */
    public function setMetaTagHtml(string $metaTagHtml): NonInventoryResaleItem
    {
        $this->metaTagHtml = $metaTagHtml;
        return $this;
    }

    /**
     * @return string
     */
    public function getMetaTagHtml(): string
    {
        return $this->metaTagHtml;
    }

    /**
     * @param bool $excludeFromSitemap
     * @return NonInventoryResaleItem
     */
    public function setExcludeFromSitemap(bool $excludeFromSitemap): NonInventoryResaleItem
    {
        $this->excludeFromSitemap = $excludeFromSitemap;
        return $this;
    }

    /**
     * @return bool
     */
    public function getExcludeFromSitemap(): bool
    {
        return $this->excludeFromSitemap;
    }

    /**
     * @param SitemapPriority $sitemapPriority
     * @return NonInventoryResaleItem
     */
    public function setSitemapPriority(SitemapPriority $sitemapPriority): NonInventoryResaleItem
    {
        $this->sitemapPriority = $sitemapPriority;
        return $this;
    }

    /**
     * @return SitemapPriority
     */
    public function getSitemapPriority(): SitemapPriority
    {
        return $this->sitemapPriority;
    }

    /**
     * @param string $searchKeywords
     * @return NonInventoryResaleItem
     */
    public function setSearchKeywords(string $searchKeywords): NonInventoryResaleItem
    {
        $this->searchKeywords = $searchKeywords;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchKeywords(): string
    {
        return $this->searchKeywords;
    }

    /**
     * @param bool $isDonationItem
     * @return NonInventoryResaleItem
     */
    public function setIsDonationItem(bool $isDonationItem): NonInventoryResaleItem
    {
        $this->isDonationItem = $isDonationItem;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDonationItem(): bool
    {
        return $this->isDonationItem;
    }

    /**
     * @param bool $showDefaultDonationAmount
     * @return NonInventoryResaleItem
     */
    public function setShowDefaultDonationAmount(bool $showDefaultDonationAmount): NonInventoryResaleItem
    {
        $this->showDefaultDonationAmount = $showDefaultDonationAmount;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowDefaultDonationAmount(): bool
    {
        return $this->showDefaultDonationAmount;
    }

    /**
     * @param float $maxDonationAmount
     * @return NonInventoryResaleItem
     */
    public function setMaxDonationAmount(float $maxDonationAmount): NonInventoryResaleItem
    {
        $this->maxDonationAmount = $maxDonationAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxDonationAmount(): float
    {
        return $this->maxDonationAmount;
    }

    /**
     * @param bool $dontShowPrice
     * @return NonInventoryResaleItem
     */
    public function setDontShowPrice(bool $dontShowPrice): NonInventoryResaleItem
    {
        $this->dontShowPrice = $dontShowPrice;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDontShowPrice(): bool
    {
        return $this->dontShowPrice;
    }

    /**
     * @param string $noPriceMessage
     * @return NonInventoryResaleItem
     */
    public function setNoPriceMessage(string $noPriceMessage): NonInventoryResaleItem
    {
        $this->noPriceMessage = $noPriceMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getNoPriceMessage(): string
    {
        return $this->noPriceMessage;
    }

    /**
     * @param string $outOfStockMessage
     * @return NonInventoryResaleItem
     */
    public function setOutOfStockMessage(string $outOfStockMessage): NonInventoryResaleItem
    {
        $this->outOfStockMessage = $outOfStockMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutOfStockMessage(): string
    {
        return $this->outOfStockMessage;
    }

    /**
     * @param bool $onSpecial
     * @return NonInventoryResaleItem
     */
    public function setOnSpecial(bool $onSpecial): NonInventoryResaleItem
    {
        $this->onSpecial = $onSpecial;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOnSpecial(): bool
    {
        return $this->onSpecial;
    }

    /**
     * @param ItemOutOfStockBehavior $outOfStockBehavior
     * @return NonInventoryResaleItem
     */
    public function setOutOfStockBehavior(ItemOutOfStockBehavior $outOfStockBehavior): NonInventoryResaleItem
    {
        $this->outOfStockBehavior = $outOfStockBehavior;
        return $this;
    }

    /**
     * @return ItemOutOfStockBehavior
     */
    public function getOutOfStockBehavior(): ItemOutOfStockBehavior
    {
        return $this->outOfStockBehavior;
    }

    /**
     * @param string $relatedItemsDescription
     * @return NonInventoryResaleItem
     */
    public function setRelatedItemsDescription(string $relatedItemsDescription): NonInventoryResaleItem
    {
        $this->relatedItemsDescription = $relatedItemsDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getRelatedItemsDescription(): string
    {
        return $this->relatedItemsDescription;
    }

    /**
     * @param string $specialsDescription
     * @return NonInventoryResaleItem
     */
    public function setSpecialsDescription(string $specialsDescription): NonInventoryResaleItem
    {
        $this->specialsDescription = $specialsDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpecialsDescription(): string
    {
        return $this->specialsDescription;
    }

    /**
     * @param string $featuredDescription
     * @return NonInventoryResaleItem
     */
    public function setFeaturedDescription(string $featuredDescription): NonInventoryResaleItem
    {
        $this->featuredDescription = $featuredDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeaturedDescription(): string
    {
        return $this->featuredDescription;
    }

    /**
     * @param string $shoppingDotComCategory
     * @return NonInventoryResaleItem
     */
    public function setShoppingDotComCategory(string $shoppingDotComCategory): NonInventoryResaleItem
    {
        $this->shoppingDotComCategory = $shoppingDotComCategory;
        return $this;
    }

    /**
     * @return string
     */
    public function getShoppingDotComCategory(): string
    {
        return $this->shoppingDotComCategory;
    }

    /**
     * @param int $shopzillaCategoryId
     * @return NonInventoryResaleItem
     */
    public function setShopzillaCategoryId(int $shopzillaCategoryId): NonInventoryResaleItem
    {
        $this->shopzillaCategoryId = $shopzillaCategoryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getShopzillaCategoryId(): int
    {
        return $this->shopzillaCategoryId;
    }

    /**
     * @param string $nexTagCategory
     * @return NonInventoryResaleItem
     */
    public function setNexTagCategory(string $nexTagCategory): NonInventoryResaleItem
    {
        $this->nexTagCategory = $nexTagCategory;
        return $this;
    }

    /**
     * @return string
     */
    public function getNexTagCategory(): string
    {
        return $this->nexTagCategory;
    }

    /**
     * @param ProductFeedList $productFeedList
     * @return NonInventoryResaleItem
     */
    public function setProductFeedList(ProductFeedList $productFeedList): NonInventoryResaleItem
    {
        $this->productFeedList = $productFeedList;
        return $this;
    }

    /**
     * @return ProductFeedList
     */
    public function getProductFeedList(): ProductFeedList
    {
        return $this->productFeedList;
    }

    /**
     * @param string $urlComponent
     * @return NonInventoryResaleItem
     */
    public function setUrlComponent(string $urlComponent): NonInventoryResaleItem
    {
        $this->urlComponent = $urlComponent;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrlComponent(): string
    {
        return $this->urlComponent;
    }

    /**
     * @param RecordRef $customForm
     * @return NonInventoryResaleItem
     */
    public function setCustomForm(RecordRef $customForm): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setItemId(string $itemId): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setUpcCode(string $upcCode): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setDisplayName(string $displayName): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setVendorName(string $vendorName): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setParent(RecordRef $parent): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setIsOnline(bool $isOnline): NonInventoryResaleItem
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
     * @param bool $isHazmatItem
     * @return NonInventoryResaleItem
     */
    public function setIsHazmatItem(bool $isHazmatItem): NonInventoryResaleItem
    {
        $this->isHazmatItem = $isHazmatItem;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsHazmatItem(): bool
    {
        return $this->isHazmatItem;
    }

    /**
     * @param string $hazmatId
     * @return NonInventoryResaleItem
     */
    public function setHazmatId(string $hazmatId): NonInventoryResaleItem
    {
        $this->hazmatId = $hazmatId;
        return $this;
    }

    /**
     * @return string
     */
    public function getHazmatId(): string
    {
        return $this->hazmatId;
    }

    /**
     * @param string $hazmatShippingName
     * @return NonInventoryResaleItem
     */
    public function setHazmatShippingName(string $hazmatShippingName): NonInventoryResaleItem
    {
        $this->hazmatShippingName = $hazmatShippingName;
        return $this;
    }

    /**
     * @return string
     */
    public function getHazmatShippingName(): string
    {
        return $this->hazmatShippingName;
    }

    /**
     * @param string $hazmatHazardClass
     * @return NonInventoryResaleItem
     */
    public function setHazmatHazardClass(string $hazmatHazardClass): NonInventoryResaleItem
    {
        $this->hazmatHazardClass = $hazmatHazardClass;
        return $this;
    }

    /**
     * @return string
     */
    public function getHazmatHazardClass(): string
    {
        return $this->hazmatHazardClass;
    }

    /**
     * @param HazmatPackingGroup $hazmatPackingGroup
     * @return NonInventoryResaleItem
     */
    public function setHazmatPackingGroup(HazmatPackingGroup $hazmatPackingGroup): NonInventoryResaleItem
    {
        $this->hazmatPackingGroup = $hazmatPackingGroup;
        return $this;
    }

    /**
     * @return HazmatPackingGroup
     */
    public function getHazmatPackingGroup(): HazmatPackingGroup
    {
        return $this->hazmatPackingGroup;
    }

    /**
     * @param string $hazmatItemUnits
     * @return NonInventoryResaleItem
     */
    public function setHazmatItemUnits(string $hazmatItemUnits): NonInventoryResaleItem
    {
        $this->hazmatItemUnits = $hazmatItemUnits;
        return $this;
    }

    /**
     * @return string
     */
    public function getHazmatItemUnits(): string
    {
        return $this->hazmatItemUnits;
    }

    /**
     * @param float $hazmatItemUnitsQty
     * @return NonInventoryResaleItem
     */
    public function setHazmatItemUnitsQty(float $hazmatItemUnitsQty): NonInventoryResaleItem
    {
        $this->hazmatItemUnitsQty = $hazmatItemUnitsQty;
        return $this;
    }

    /**
     * @return float
     */
    public function getHazmatItemUnitsQty(): float
    {
        return $this->hazmatItemUnitsQty;
    }

    /**
     * @param bool $isGcoCompliant
     * @return NonInventoryResaleItem
     */
    public function setIsGcoCompliant(bool $isGcoCompliant): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setOfferSupport(bool $offerSupport): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setIsInactive(bool $isInactive): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setMatrixItemNameTemplate(string $matrixItemNameTemplate): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setAvailableToPartners(bool $availableToPartners): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setDepartment(RecordRef $department): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setClass(RecordRef $class): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setLocation(RecordRef $location): NonInventoryResaleItem
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
     * @param RecordRef $defaultItemShipMethod
     * @return NonInventoryResaleItem
     */
    public function setDefaultItemShipMethod(RecordRef $defaultItemShipMethod): NonInventoryResaleItem
    {
        $this->defaultItemShipMethod = $defaultItemShipMethod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDefaultItemShipMethod(): RecordRef
    {
        return $this->defaultItemShipMethod;
    }

    /**
     * @param ShippingCarrier $itemCarrier
     * @return NonInventoryResaleItem
     */
    public function setItemCarrier(ShippingCarrier $itemCarrier): NonInventoryResaleItem
    {
        $this->itemCarrier = $itemCarrier;
        return $this;
    }

    /**
     * @return ShippingCarrier
     */
    public function getItemCarrier(): ShippingCarrier
    {
        return $this->itemCarrier;
    }

    /**
     * @param RecordRefList $itemShipMethodList
     * @return NonInventoryResaleItem
     */
    public function setItemShipMethodList(RecordRefList $itemShipMethodList): NonInventoryResaleItem
    {
        $this->itemShipMethodList = $itemShipMethodList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getItemShipMethodList(): RecordRefList
    {
        return $this->itemShipMethodList;
    }

    /**
     * @param RecordRefList $subsidiaryList
     * @return NonInventoryResaleItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): NonInventoryResaleItem
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
     * @param string $currency
     * @return NonInventoryResaleItem
     */
    public function setCurrency(string $currency): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setItemOptionsList(ItemOptionsList $itemOptionsList): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setMatrixOptionList(MatrixOptionList $matrixOptionList): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setItemVendorList(ItemVendorList $itemVendorList): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setPricingMatrix(PricingMatrix $pricingMatrix): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setAccountingBookDetailList(ItemAccountingBookDetailList $accountingBookDetailList): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setPurchaseTaxCode(RecordRef $purchaseTaxCode): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setRate(float $rate): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setSalesTaxCode(RecordRef $salesTaxCode): NonInventoryResaleItem
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
     * @param SiteCategoryList $siteCategoryList
     * @return NonInventoryResaleItem
     */
    public function setSiteCategoryList(SiteCategoryList $siteCategoryList): NonInventoryResaleItem
    {
        $this->siteCategoryList = $siteCategoryList;
        return $this;
    }

    /**
     * @return SiteCategoryList
     */
    public function getSiteCategoryList(): SiteCategoryList
    {
        return $this->siteCategoryList;
    }

    /**
     * @param TranslationList $translationsList
     * @return NonInventoryResaleItem
     */
    public function setTranslationsList(TranslationList $translationsList): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setVendor(RecordRef $vendor): NonInventoryResaleItem
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
     * @param PresentationItemList $presentationItemList
     * @return NonInventoryResaleItem
     */
    public function setPresentationItemList(PresentationItemList $presentationItemList): NonInventoryResaleItem
    {
        $this->presentationItemList = $presentationItemList;
        return $this;
    }

    /**
     * @return PresentationItemList
     */
    public function getPresentationItemList(): PresentationItemList
    {
        return $this->presentationItemList;
    }

    /**
     * @param NonInventoryResaleItemHierarchyVersionsList $hierarchyVersionsList
     * @return NonInventoryResaleItem
     */
    public function setHierarchyVersionsList(NonInventoryResaleItemHierarchyVersionsList $hierarchyVersionsList): NonInventoryResaleItem
    {
        $this->hierarchyVersionsList = $hierarchyVersionsList;
        return $this;
    }

    /**
     * @return NonInventoryResaleItemHierarchyVersionsList
     */
    public function getHierarchyVersionsList(): NonInventoryResaleItemHierarchyVersionsList
    {
        return $this->hierarchyVersionsList;
    }

    /**
     * @param RecordRef $consumptionUnit
     * @return NonInventoryResaleItem
     */
    public function setConsumptionUnit(RecordRef $consumptionUnit): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setInternalId(string $internalId): NonInventoryResaleItem
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
     * @return NonInventoryResaleItem
     */
    public function setExternalId(string $externalId): NonInventoryResaleItem
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
