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

class NonInventorySaleItem extends Record {
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
     * @var string
     */
    protected string $stockDescription;

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
     * @var SiteCategoryList
     */
    protected SiteCategoryList $siteCategoryList;

    /**
     * @var TranslationList
     */
    protected TranslationList $translationsList;

    /**
     * @var PresentationItemList
     */
    protected PresentationItemList $presentationItemList;

    /**
     * @var NonInventorySaleItemHierarchyVersionsList
     */
    protected NonInventorySaleItemHierarchyVersionsList $hierarchyVersionsList;

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
        "saleUnit" => "RecordRef",
        "issueProduct" => "RecordRef",
        "billingSchedule" => "RecordRef",
        "deferredRevenueAccount" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "stockDescription" => "string",
        "isHazmatItem" => "boolean",
        "hazmatId" => "string",
        "hazmatShippingName" => "string",
        "hazmatHazardClass" => "string",
        "hazmatPackingGroup" => "HazmatPackingGroup",
        "hazmatItemUnits" => "string",
        "hazmatItemUnitsQty" => "float",
        "producer" => "boolean",
        "manufacturer" => "string",
        "mpn" => "string",
        "multManufactureAddr" => "boolean",
        "manufacturerAddr1" => "string",
        "manufacturerCity" => "string",
        "manufacturerState" => "string",
        "manufacturerZip" => "string",
        "countryOfManufacture" => "Country",
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
        "deferRevRec" => "boolean",
        "revenueRecognitionRule" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "revenueAllocationGroup" => "RecordRef",
        "createRevenuePlansOn" => "RecordRef",
        "directRevenuePosting" => "boolean",
        "contingentRevenueHandling" => "boolean",
        "revReclassFXAccount" => "RecordRef",
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
        "defaultItemShipMethod" => "RecordRef",
        "itemCarrier" => "ShippingCarrier",
        "itemShipMethodList" => "RecordRefList",
        "subsidiaryList" => "RecordRefList",
        "itemOptionsList" => "ItemOptionsList",
        "matrixOptionList" => "MatrixOptionList",
        "pricingMatrix" => "PricingMatrix",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "purchaseTaxCode" => "RecordRef",
        "rate" => "float",
        "salesTaxCode" => "RecordRef",
        "siteCategoryList" => "SiteCategoryList",
        "translationsList" => "TranslationList",
        "presentationItemList" => "PresentationItemList",
        "hierarchyVersionsList" => "NonInventorySaleItemHierarchyVersionsList",
        "consumptionUnit" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return NonInventorySaleItem
     */
    public function setCreatedDate(string $createdDate): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setLastModifiedDate(string $lastModifiedDate): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setSalesDescription(string $salesDescription): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setIncludeChildren(bool $includeChildren): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setIncomeAccount(RecordRef $incomeAccount): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setIsTaxable(bool $isTaxable): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setMatrixType(ItemMatrixType $matrixType): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setTaxSchedule(RecordRef $taxSchedule): NonInventorySaleItem
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
     * @param float $shippingCost
     * @return NonInventorySaleItem
     */
    public function setShippingCost(float $shippingCost): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setShippingCostUnits(string $shippingCostUnits): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setHandlingCost(float $handlingCost): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setHandlingCostUnits(string $handlingCostUnits): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setCostEstimate(float $costEstimate): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setWeight(float $weight): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setWeightUnit(ItemWeightUnit $weightUnit): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setWeightUnits(string $weightUnits): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setCostEstimateUnits(string $costEstimateUnits): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setUnitsType(RecordRef $unitsType): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setSaleUnit(RecordRef $saleUnit): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setIssueProduct(RecordRef $issueProduct): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setBillingSchedule(RecordRef $billingSchedule): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setDeferredRevenueAccount(RecordRef $deferredRevenueAccount): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): NonInventorySaleItem
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
     * @param string $stockDescription
     * @return NonInventorySaleItem
     */
    public function setStockDescription(string $stockDescription): NonInventorySaleItem
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
     * @param bool $isHazmatItem
     * @return NonInventorySaleItem
     */
    public function setIsHazmatItem(bool $isHazmatItem): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setHazmatId(string $hazmatId): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setHazmatShippingName(string $hazmatShippingName): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setHazmatHazardClass(string $hazmatHazardClass): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setHazmatPackingGroup(HazmatPackingGroup $hazmatPackingGroup): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setHazmatItemUnits(string $hazmatItemUnits): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setHazmatItemUnitsQty(float $hazmatItemUnitsQty): NonInventorySaleItem
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
     * @param bool $producer
     * @return NonInventorySaleItem
     */
    public function setProducer(bool $producer): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setManufacturer(string $manufacturer): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setMpn(string $mpn): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setMultManufactureAddr(bool $multManufactureAddr): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setManufacturerCity(string $manufacturerCity): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setManufacturerState(string $manufacturerState): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setManufacturerZip(string $manufacturerZip): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setCountryOfManufacture(Country $countryOfManufacture): NonInventorySaleItem
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
     * @param string $manufacturerTaxId
     * @return NonInventorySaleItem
     */
    public function setManufacturerTaxId(string $manufacturerTaxId): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setScheduleBNumber(string $scheduleBNumber): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setScheduleBQuantity(int $scheduleBQuantity): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setScheduleBCode(ScheduleBCode $scheduleBCode): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setManufacturerTariff(string $manufacturerTariff): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setPreferenceCriterion(ItemPreferenceCriterion $preferenceCriterion): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setMinimumQuantity(int $minimumQuantity): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setEnforceMinQtyInternally(bool $enforceMinQtyInternally): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setMaximumQuantity(int $maximumQuantity): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setSoftDescriptor(string $softDescriptor): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setShipPackage(RecordRef $shipPackage): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setShipIndividually(bool $shipIndividually): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setIsFulfillable(bool $isFulfillable): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setCostCategory(RecordRef $costCategory): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setPricesIncludeTax(bool $pricesIncludeTax): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setQuantityPricingSchedule(RecordRef $quantityPricingSchedule): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setUseMarginalRates(bool $useMarginalRates): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setOverallQuantityPricingType(ItemOverallQuantityPricingType $overallQuantityPricingType): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setPricingGroup(RecordRef $pricingGroup): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setMinimumQuantityUnits(string $minimumQuantityUnits): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setVsoePrice(float $vsoePrice): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setVsoeSopGroup(VsoeSopGroup $vsoeSopGroup): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setVsoeDelivered(bool $vsoeDelivered): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setItemRevenueCategory(RecordRef $itemRevenueCategory): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setDeferRevRec(bool $deferRevRec): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setRevenueRecognitionRule(RecordRef $revenueRecognitionRule): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setRevRecForecastRule(RecordRef $revRecForecastRule): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setRevenueAllocationGroup(RecordRef $revenueAllocationGroup): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setCreateRevenuePlansOn(RecordRef $createRevenuePlansOn): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setDirectRevenuePosting(bool $directRevenuePosting): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setContingentRevenueHandling(bool $contingentRevenueHandling): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setRevReclassFXAccount(RecordRef $revReclassFXAccount): NonInventorySaleItem
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
     * @param string $storeDisplayName
     * @return NonInventorySaleItem
     */
    public function setStoreDisplayName(string $storeDisplayName): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setStoreDisplayThumbnail(RecordRef $storeDisplayThumbnail): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setStoreDisplayImage(RecordRef $storeDisplayImage): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setStoreDescription(string $storeDescription): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setStoreDetailedDescription(string $storeDetailedDescription): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setStoreItemTemplate(RecordRef $storeItemTemplate): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setPageTitle(string $pageTitle): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setMetaTagHtml(string $metaTagHtml): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setExcludeFromSitemap(bool $excludeFromSitemap): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setSitemapPriority(SitemapPriority $sitemapPriority): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setSearchKeywords(string $searchKeywords): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setIsDonationItem(bool $isDonationItem): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setShowDefaultDonationAmount(bool $showDefaultDonationAmount): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setMaxDonationAmount(float $maxDonationAmount): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setDontShowPrice(bool $dontShowPrice): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setNoPriceMessage(string $noPriceMessage): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setOutOfStockMessage(string $outOfStockMessage): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setOnSpecial(bool $onSpecial): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setOutOfStockBehavior(ItemOutOfStockBehavior $outOfStockBehavior): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setRelatedItemsDescription(string $relatedItemsDescription): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setSpecialsDescription(string $specialsDescription): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setFeaturedDescription(string $featuredDescription): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setShoppingDotComCategory(string $shoppingDotComCategory): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setShopzillaCategoryId(int $shopzillaCategoryId): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setNexTagCategory(string $nexTagCategory): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setProductFeedList(ProductFeedList $productFeedList): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setUrlComponent(string $urlComponent): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setCustomForm(RecordRef $customForm): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setItemId(string $itemId): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setUpcCode(string $upcCode): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setDisplayName(string $displayName): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setParent(RecordRef $parent): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setIsOnline(bool $isOnline): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setIsGcoCompliant(bool $isGcoCompliant): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setOfferSupport(bool $offerSupport): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setIsInactive(bool $isInactive): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setMatrixItemNameTemplate(string $matrixItemNameTemplate): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setAvailableToPartners(bool $availableToPartners): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setDepartment(RecordRef $department): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setClass(RecordRef $class): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setLocation(RecordRef $location): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setDefaultItemShipMethod(RecordRef $defaultItemShipMethod): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setItemCarrier(ShippingCarrier $itemCarrier): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setItemShipMethodList(RecordRefList $itemShipMethodList): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setItemOptionsList(ItemOptionsList $itemOptionsList): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setMatrixOptionList(MatrixOptionList $matrixOptionList): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setPricingMatrix(PricingMatrix $pricingMatrix): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setAccountingBookDetailList(ItemAccountingBookDetailList $accountingBookDetailList): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setPurchaseTaxCode(RecordRef $purchaseTaxCode): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setRate(float $rate): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setSalesTaxCode(RecordRef $salesTaxCode): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setSiteCategoryList(SiteCategoryList $siteCategoryList): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setTranslationsList(TranslationList $translationsList): NonInventorySaleItem
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
     * @param PresentationItemList $presentationItemList
     * @return NonInventorySaleItem
     */
    public function setPresentationItemList(PresentationItemList $presentationItemList): NonInventorySaleItem
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
     * @param NonInventorySaleItemHierarchyVersionsList $hierarchyVersionsList
     * @return NonInventorySaleItem
     */
    public function setHierarchyVersionsList(NonInventorySaleItemHierarchyVersionsList $hierarchyVersionsList): NonInventorySaleItem
    {
        $this->hierarchyVersionsList = $hierarchyVersionsList;
        return $this;
    }

    /**
     * @return NonInventorySaleItemHierarchyVersionsList
     */
    public function getHierarchyVersionsList(): NonInventorySaleItemHierarchyVersionsList
    {
        return $this->hierarchyVersionsList;
    }

    /**
     * @param RecordRef $consumptionUnit
     * @return NonInventorySaleItem
     */
    public function setConsumptionUnit(RecordRef $consumptionUnit): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setInternalId(string $internalId): NonInventorySaleItem
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
     * @return NonInventorySaleItem
     */
    public function setExternalId(string $externalId): NonInventorySaleItem
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
