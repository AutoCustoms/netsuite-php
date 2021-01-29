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

class SerializedInventoryItem extends Record {
    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

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
     * @var ItemMatrixType
     */
    protected ItemMatrixType $matrixType;

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
     * @var ItemCostingMethod
     */
    protected ItemCostingMethod $costingMethod;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $subsidiaryList;

    /**
     * @var string
     */
    protected string $purchaseDescription;

    /**
     * @var bool
     */
    protected bool $copyDescription;

    /**
     * @var RecordRef
     */
    protected RecordRef $issueProduct;

    /**
     * @var string
     */
    protected string $currency;

    /**
     * @var RecordRef
     */
    protected RecordRef $cogsAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $intercoCogsAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $vendor;

    /**
     * @var string
     */
    protected string $salesDescription;

    /**
     * @var string
     */
    protected string $lastInvtCountDate;

    /**
     * @var string
     */
    protected string $nextInvtCountDate;

    /**
     * @var int
     */
    protected int $invtCountInterval;

    /**
     * @var ItemInvtClassification
     */
    protected ItemInvtClassification $invtClassification;

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
     * @var RecordRef
     */
    protected RecordRef $taxSchedule;

    /**
     * @var RecordRef
     */
    protected RecordRef $dropshipExpenseAccount;

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
     * @var RecordRef
     */
    protected RecordRef $assetAccount;

    /**
     * @var bool
     */
    protected bool $matchBillToReceipt;

    /**
     * @var RecordRef
     */
    protected RecordRef $billQtyVarianceAcct;

    /**
     * @var RecordRef
     */
    protected RecordRef $billPriceVarianceAcct;

    /**
     * @var RecordRef
     */
    protected RecordRef $billExchRateVarianceAcct;

    /**
     * @var RecordRef
     */
    protected RecordRef $gainLossAccount;

    /**
     * @var float
     */
    protected float $shippingCost;

    /**
     * @var float
     */
    protected float $handlingCost;

    /**
     * @var float
     */
    protected float $weight;

    /**
     * @var string
     */
    protected string $costingMethodDisplay;

    /**
     * @var string
     */
    protected string $shippingCostUnits;

    /**
     * @var string
     */
    protected string $handlingCostUnits;

    /**
     * @var RecordRef
     */
    protected RecordRef $unitsType;

    /**
     * @var RecordRef
     */
    protected RecordRef $stockUnit;

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
    protected string $minimumQuantityUnits;

    /**
     * @var string
     */
    protected string $safetyStockLevelUnits;

    /**
     * @var RecordRef
     */
    protected RecordRef $billingSchedule;

    /**
     * @var bool
     */
    protected bool $trackLandedCost;

    /**
     * @var string
     */
    protected string $matrixItemNameTemplate;

    /**
     * @var bool
     */
    protected bool $isDropShipItem;

    /**
     * @var bool
     */
    protected bool $isSpecialOrderItem;

    /**
     * @var string
     */
    protected string $stockDescription;

    /**
     * @var RecordRef
     */
    protected RecordRef $deferredRevenueAccount;

    /**
     * @var bool
     */
    protected bool $producer;

    /**
     * @var string
     */
    protected string $manufacturer;

    /**
     * @var RecordRef
     */
    protected RecordRef $revRecSchedule;

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
     * @var RecordRef
     */
    protected RecordRef $defaultItemShipMethod;

    /**
     * @var ShippingCarrier
     */
    protected ShippingCarrier $itemCarrier;

    /**
     * @var bool
     */
    protected bool $roundUpAsComponent;

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
     * @var RecordRefList
     */
    protected RecordRefList $itemShipMethodList;

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
     * @var RecordRef
     */
    protected RecordRef $shipPackage;

    /**
     * @var bool
     */
    protected bool $shipIndividually;

    /**
     * @var RecordRef
     */
    protected RecordRef $softDescriptor;

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
    protected float $transferPrice;

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
    protected RecordRef $preferredLocation;

    /**
     * @var bool
     */
    protected bool $isStorePickupAllowed;

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
     * @var float
     */
    protected float $cost;

    /**
     * @var string
     */
    protected string $costUnits;

    /**
     * @var string
     */
    protected string $quantityReorderUnits;

    /**
     * @var int
     */
    protected int $reorderMultiple;

    /**
     * @var float
     */
    protected float $totalValue;

    /**
     * @var bool
     */
    protected bool $useBins;

    /**
     * @var int
     */
    protected int $leadTime;

    /**
     * @var bool
     */
    protected bool $autoLeadTime;

    /**
     * @var bool
     */
    protected bool $autoReorderPoint;

    /**
     * @var bool
     */
    protected bool $autoPreferredStockLevel;

    /**
     * @var float
     */
    protected float $preferredStockLevelDays;

    /**
     * @var float
     */
    protected float $averageCost;

    /**
     * @var float
     */
    protected float $safetyStockLevel;

    /**
     * @var float
     */
    protected float $lastPurchasePrice;

    /**
     * @var int
     */
    protected int $safetyStockLevelDays;

    /**
     * @var int
     */
    protected int $backwardConsumptionDays;

    /**
     * @var bool
     */
    protected bool $seasonalDemand;

    /**
     * @var float
     */
    protected float $demandModifier;

    /**
     * @var string
     */
    protected string $storeDisplayName;

    /**
     * @var RecordRef
     */
    protected RecordRef $storeDisplayThumbnail;

    /**
     * @var ItemWeightUnit
     */
    protected ItemWeightUnit $weightUnit;

    /**
     * @var string
     */
    protected string $weightUnits;

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
     * @var float
     */
    protected float $quantityOnHand;

    /**
     * @var string
     */
    protected string $quantityOnHandUnits;

    /**
     * @var float
     */
    protected float $onHandValueMli;

    /**
     * @var string
     */
    protected string $serialNumbers;

    /**
     * @var float
     */
    protected float $reorderPoint;

    /**
     * @var float
     */
    protected float $preferredStockLevel;

    /**
     * @var string
     */
    protected string $reorderPointUnits;

    /**
     * @var float
     */
    protected float $defaultReturnCost;

    /**
     * @var RecordRef
     */
    protected RecordRef $supplyReplenishmentMethod;

    /**
     * @var RecordRef
     */
    protected RecordRef $alternateDemandSourceItem;

    /**
     * @var float
     */
    protected float $fixedLotSize;

    /**
     * @var PeriodicLotSizeType
     */
    protected PeriodicLotSizeType $periodicLotSizeType;

    /**
     * @var RecordRef
     */
    protected RecordRef $supplyType;

    /**
     * @var int
     */
    protected int $demandTimeFence;

    /**
     * @var int
     */
    protected int $supplyTimeFence;

    /**
     * @var int
     */
    protected int $rescheduleInDays;

    /**
     * @var int
     */
    protected int $rescheduleOutDays;

    /**
     * @var int
     */
    protected int $periodicLotSizeDays;

    /**
     * @var RecordRef
     */
    protected RecordRef $supplyLotSizingMethod;

    /**
     * @var int
     */
    protected int $forwardConsumptionDays;

    /**
     * @var RecordRef
     */
    protected RecordRef $demandSource;

    /**
     * @var float
     */
    protected float $quantityOnOrder;

    /**
     * @var string
     */
    protected string $preferredStockLevelUnits;

    /**
     * @var float
     */
    protected float $quantityCommitted;

    /**
     * @var float
     */
    protected float $quantityAvailable;

    /**
     * @var float
     */
    protected float $quantityBackOrdered;

    /**
     * @var RecordRef
     */
    protected RecordRef $purchaseTaxCode;

    /**
     * @var RecordRef
     */
    protected RecordRef $purchasePriceVarianceAcct;

    /**
     * @var float
     */
    protected float $rate;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesTaxCode;

    /**
     * @var bool
     */
    protected bool $onSpecial;

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
     * @var string
     */
    protected string $specialsDescription;

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
    protected string $featuredDescription;

    /**
     * @var ProductFeedList
     */
    protected ProductFeedList $productFeedList;

    /**
     * @var string
     */
    protected string $urlComponent;

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
     * @var SerializedInventoryItemHierarchyVersionsList
     */
    protected SerializedInventoryItemHierarchyVersionsList $hierarchyVersionsList;

    /**
     * @var ItemAccountingBookDetailList
     */
    protected ItemAccountingBookDetailList $accountingBookDetailList;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $itemNumberOptionsList;

    /**
     * @var SerializedInventoryItemNumbersList
     */
    protected SerializedInventoryItemNumbersList $numbersList;

    /**
     * @var InventoryItemBinNumberList
     */
    protected InventoryItemBinNumberList $binNumberList;

    /**
     * @var SiteCategoryList
     */
    protected SiteCategoryList $siteCategoryList;

    /**
     * @var SerializedInventoryItemLocationsList
     */
    protected SerializedInventoryItemLocationsList $locationsList;

    /**
     * @var TranslationList
     */
    protected TranslationList $translationsList;

    /**
     * @var PresentationItemList
     */
    protected PresentationItemList $presentationItemList;

    /**
     * @var int
     */
    protected int $futureHorizon;

    /**
     * @var RecordRef
     */
    protected RecordRef $consumptionUnit;

    /**
     * @var bool
     */
    protected bool $enableCatchWeight;

    /**
     * @var RecordRef
     */
    protected RecordRef $secondaryUnitsType;

    /**
     * @var RecordRef
     */
    protected RecordRef $secondaryBaseUnit;

    /**
     * @var float
     */
    protected float $conversionRate;

    /**
     * @var RecordRef
     */
    protected RecordRef $secondaryStockUnit;

    /**
     * @var RecordRef
     */
    protected RecordRef $secondarySaleUnit;

    /**
     * @var RecordRef
     */
    protected RecordRef $secondaryPurchaseUnit;

    /**
     * @var RecordRef
     */
    protected RecordRef $secondaryConsumptionUnit;

    /**
     * @var float
     */
    protected float $lowerWarningLimit;

    /**
     * @var float
     */
    protected float $upperWarningLimit;

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
        "customForm" => "RecordRef",
        "itemId" => "string",
        "upcCode" => "string",
        "displayName" => "string",
        "matrixType" => "ItemMatrixType",
        "includeChildren" => "boolean",
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
        "availableToPartners" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "costingMethod" => "ItemCostingMethod",
        "subsidiaryList" => "RecordRefList",
        "purchaseDescription" => "string",
        "copyDescription" => "boolean",
        "issueProduct" => "RecordRef",
        "currency" => "string",
        "cogsAccount" => "RecordRef",
        "intercoCogsAccount" => "RecordRef",
        "vendor" => "RecordRef",
        "salesDescription" => "string",
        "lastInvtCountDate" => "dateTime",
        "nextInvtCountDate" => "dateTime",
        "invtCountInterval" => "integer",
        "invtClassification" => "ItemInvtClassification",
        "incomeAccount" => "RecordRef",
        "intercoIncomeAccount" => "RecordRef",
        "isTaxable" => "boolean",
        "taxSchedule" => "RecordRef",
        "dropshipExpenseAccount" => "RecordRef",
        "revenueRecognitionRule" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "revenueAllocationGroup" => "RecordRef",
        "createRevenuePlansOn" => "RecordRef",
        "directRevenuePosting" => "boolean",
        "assetAccount" => "RecordRef",
        "matchBillToReceipt" => "boolean",
        "billQtyVarianceAcct" => "RecordRef",
        "billPriceVarianceAcct" => "RecordRef",
        "billExchRateVarianceAcct" => "RecordRef",
        "gainLossAccount" => "RecordRef",
        "shippingCost" => "float",
        "handlingCost" => "float",
        "weight" => "float",
        "costingMethodDisplay" => "string",
        "shippingCostUnits" => "string",
        "handlingCostUnits" => "string",
        "unitsType" => "RecordRef",
        "stockUnit" => "RecordRef",
        "purchaseUnit" => "RecordRef",
        "saleUnit" => "RecordRef",
        "minimumQuantityUnits" => "string",
        "safetyStockLevelUnits" => "string",
        "billingSchedule" => "RecordRef",
        "trackLandedCost" => "boolean",
        "matrixItemNameTemplate" => "string",
        "isDropShipItem" => "boolean",
        "isSpecialOrderItem" => "boolean",
        "stockDescription" => "string",
        "deferredRevenueAccount" => "RecordRef",
        "producer" => "boolean",
        "manufacturer" => "string",
        "revRecSchedule" => "RecordRef",
        "mpn" => "string",
        "multManufactureAddr" => "boolean",
        "manufacturerAddr1" => "string",
        "manufacturerCity" => "string",
        "manufacturerState" => "string",
        "manufacturerZip" => "string",
        "countryOfManufacture" => "Country",
        "defaultItemShipMethod" => "RecordRef",
        "itemCarrier" => "ShippingCarrier",
        "roundUpAsComponent" => "boolean",
        "purchaseOrderQuantity" => "float",
        "purchaseOrderAmount" => "float",
        "purchaseOrderQuantityDiff" => "float",
        "receiptQuantity" => "float",
        "receiptAmount" => "float",
        "receiptQuantityDiff" => "float",
        "itemShipMethodList" => "RecordRefList",
        "manufacturerTaxId" => "string",
        "scheduleBNumber" => "string",
        "scheduleBQuantity" => "integer",
        "scheduleBCode" => "ScheduleBCode",
        "manufacturerTariff" => "string",
        "preferenceCriterion" => "ItemPreferenceCriterion",
        "minimumQuantity" => "integer",
        "enforceMinQtyInternally" => "boolean",
        "maximumQuantity" => "integer",
        "shipPackage" => "RecordRef",
        "shipIndividually" => "boolean",
        "softDescriptor" => "RecordRef",
        "costCategory" => "RecordRef",
        "pricesIncludeTax" => "boolean",
        "quantityPricingSchedule" => "RecordRef",
        "useMarginalRates" => "boolean",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "transferPrice" => "float",
        "overallQuantityPricingType" => "ItemOverallQuantityPricingType",
        "pricingGroup" => "RecordRef",
        "preferredLocation" => "RecordRef",
        "isStorePickupAllowed" => "boolean",
        "vsoePrice" => "float",
        "vsoeSopGroup" => "VsoeSopGroup",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "itemRevenueCategory" => "RecordRef",
        "cost" => "float",
        "costUnits" => "string",
        "quantityReorderUnits" => "string",
        "reorderMultiple" => "integer",
        "totalValue" => "float",
        "useBins" => "boolean",
        "leadTime" => "integer",
        "autoLeadTime" => "boolean",
        "autoReorderPoint" => "boolean",
        "autoPreferredStockLevel" => "boolean",
        "preferredStockLevelDays" => "float",
        "averageCost" => "float",
        "safetyStockLevel" => "float",
        "lastPurchasePrice" => "float",
        "safetyStockLevelDays" => "integer",
        "backwardConsumptionDays" => "integer",
        "seasonalDemand" => "boolean",
        "demandModifier" => "float",
        "storeDisplayName" => "string",
        "storeDisplayThumbnail" => "RecordRef",
        "weightUnit" => "ItemWeightUnit",
        "weightUnits" => "string",
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
        "shoppingDotComCategory" => "string",
        "shopzillaCategoryId" => "integer",
        "nexTagCategory" => "string",
        "quantityOnHand" => "float",
        "quantityOnHandUnits" => "string",
        "onHandValueMli" => "float",
        "serialNumbers" => "string",
        "reorderPoint" => "float",
        "preferredStockLevel" => "float",
        "reorderPointUnits" => "string",
        "defaultReturnCost" => "float",
        "supplyReplenishmentMethod" => "RecordRef",
        "alternateDemandSourceItem" => "RecordRef",
        "fixedLotSize" => "float",
        "periodicLotSizeType" => "PeriodicLotSizeType",
        "supplyType" => "RecordRef",
        "demandTimeFence" => "integer",
        "supplyTimeFence" => "integer",
        "rescheduleInDays" => "integer",
        "rescheduleOutDays" => "integer",
        "periodicLotSizeDays" => "integer",
        "supplyLotSizingMethod" => "RecordRef",
        "forwardConsumptionDays" => "integer",
        "demandSource" => "RecordRef",
        "quantityOnOrder" => "float",
        "preferredStockLevelUnits" => "string",
        "quantityCommitted" => "float",
        "quantityAvailable" => "float",
        "quantityBackOrdered" => "float",
        "purchaseTaxCode" => "RecordRef",
        "purchasePriceVarianceAcct" => "RecordRef",
        "rate" => "float",
        "salesTaxCode" => "RecordRef",
        "onSpecial" => "boolean",
        "dontShowPrice" => "boolean",
        "noPriceMessage" => "string",
        "outOfStockMessage" => "string",
        "specialsDescription" => "string",
        "outOfStockBehavior" => "ItemOutOfStockBehavior",
        "relatedItemsDescription" => "string",
        "featuredDescription" => "string",
        "productFeedList" => "ProductFeedList",
        "urlComponent" => "string",
        "itemOptionsList" => "ItemOptionsList",
        "matrixOptionList" => "MatrixOptionList",
        "itemVendorList" => "ItemVendorList",
        "pricingMatrix" => "PricingMatrix",
        "hierarchyVersionsList" => "SerializedInventoryItemHierarchyVersionsList",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "itemNumberOptionsList" => "RecordRefList",
        "numbersList" => "SerializedInventoryItemNumbersList",
        "binNumberList" => "InventoryItemBinNumberList",
        "siteCategoryList" => "SiteCategoryList",
        "locationsList" => "SerializedInventoryItemLocationsList",
        "translationsList" => "TranslationList",
        "presentationItemList" => "PresentationItemList",
        "futureHorizon" => "integer",
        "consumptionUnit" => "RecordRef",
        "enableCatchWeight" => "boolean",
        "secondaryUnitsType" => "RecordRef",
        "secondaryBaseUnit" => "RecordRef",
        "conversionRate" => "float",
        "secondaryStockUnit" => "RecordRef",
        "secondarySaleUnit" => "RecordRef",
        "secondaryPurchaseUnit" => "RecordRef",
        "secondaryConsumptionUnit" => "RecordRef",
        "lowerWarningLimit" => "float",
        "upperWarningLimit" => "float",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return SerializedInventoryItem
     */
    public function setCreatedDate(string $createdDate): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setLastModifiedDate(string $lastModifiedDate): SerializedInventoryItem
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
     * @param RecordRef $customForm
     * @return SerializedInventoryItem
     */
    public function setCustomForm(RecordRef $customForm): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setItemId(string $itemId): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setUpcCode(string $upcCode): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setDisplayName(string $displayName): SerializedInventoryItem
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
     * @param ItemMatrixType $matrixType
     * @return SerializedInventoryItem
     */
    public function setMatrixType(ItemMatrixType $matrixType): SerializedInventoryItem
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
     * @param bool $includeChildren
     * @return SerializedInventoryItem
     */
    public function setIncludeChildren(bool $includeChildren): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setVendorName(string $vendorName): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setParent(RecordRef $parent): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setIsOnline(bool $isOnline): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setIsHazmatItem(bool $isHazmatItem): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setHazmatId(string $hazmatId): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setHazmatShippingName(string $hazmatShippingName): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setHazmatHazardClass(string $hazmatHazardClass): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setHazmatPackingGroup(HazmatPackingGroup $hazmatPackingGroup): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setHazmatItemUnits(string $hazmatItemUnits): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setHazmatItemUnitsQty(float $hazmatItemUnitsQty): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setIsGcoCompliant(bool $isGcoCompliant): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setOfferSupport(bool $offerSupport): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setIsInactive(bool $isInactive): SerializedInventoryItem
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
     * @param bool $availableToPartners
     * @return SerializedInventoryItem
     */
    public function setAvailableToPartners(bool $availableToPartners): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setDepartment(RecordRef $department): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setClass(RecordRef $class): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setLocation(RecordRef $location): SerializedInventoryItem
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
     * @param ItemCostingMethod $costingMethod
     * @return SerializedInventoryItem
     */
    public function setCostingMethod(ItemCostingMethod $costingMethod): SerializedInventoryItem
    {
        $this->costingMethod = $costingMethod;
        return $this;
    }

    /**
     * @return ItemCostingMethod
     */
    public function getCostingMethod(): ItemCostingMethod
    {
        return $this->costingMethod;
    }

    /**
     * @param RecordRefList $subsidiaryList
     * @return SerializedInventoryItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): SerializedInventoryItem
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
     * @param string $purchaseDescription
     * @return SerializedInventoryItem
     */
    public function setPurchaseDescription(string $purchaseDescription): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setCopyDescription(bool $copyDescription): SerializedInventoryItem
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
     * @param RecordRef $issueProduct
     * @return SerializedInventoryItem
     */
    public function setIssueProduct(RecordRef $issueProduct): SerializedInventoryItem
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
     * @param string $currency
     * @return SerializedInventoryItem
     */
    public function setCurrency(string $currency): SerializedInventoryItem
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
     * @param RecordRef $cogsAccount
     * @return SerializedInventoryItem
     */
    public function setCogsAccount(RecordRef $cogsAccount): SerializedInventoryItem
    {
        $this->cogsAccount = $cogsAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCogsAccount(): RecordRef
    {
        return $this->cogsAccount;
    }

    /**
     * @param RecordRef $intercoCogsAccount
     * @return SerializedInventoryItem
     */
    public function setIntercoCogsAccount(RecordRef $intercoCogsAccount): SerializedInventoryItem
    {
        $this->intercoCogsAccount = $intercoCogsAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIntercoCogsAccount(): RecordRef
    {
        return $this->intercoCogsAccount;
    }

    /**
     * @param RecordRef $vendor
     * @return SerializedInventoryItem
     */
    public function setVendor(RecordRef $vendor): SerializedInventoryItem
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
     * @param string $salesDescription
     * @return SerializedInventoryItem
     */
    public function setSalesDescription(string $salesDescription): SerializedInventoryItem
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
     * @param string $lastInvtCountDate
     * @return SerializedInventoryItem
     */
    public function setLastInvtCountDate(string $lastInvtCountDate): SerializedInventoryItem
    {
        $this->lastInvtCountDate = $lastInvtCountDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastInvtCountDate(): string
    {
        return $this->lastInvtCountDate;
    }

    /**
     * @param string $nextInvtCountDate
     * @return SerializedInventoryItem
     */
    public function setNextInvtCountDate(string $nextInvtCountDate): SerializedInventoryItem
    {
        $this->nextInvtCountDate = $nextInvtCountDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextInvtCountDate(): string
    {
        return $this->nextInvtCountDate;
    }

    /**
     * @param int $invtCountInterval
     * @return SerializedInventoryItem
     */
    public function setInvtCountInterval(int $invtCountInterval): SerializedInventoryItem
    {
        $this->invtCountInterval = $invtCountInterval;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvtCountInterval(): int
    {
        return $this->invtCountInterval;
    }

    /**
     * @param ItemInvtClassification $invtClassification
     * @return SerializedInventoryItem
     */
    public function setInvtClassification(ItemInvtClassification $invtClassification): SerializedInventoryItem
    {
        $this->invtClassification = $invtClassification;
        return $this;
    }

    /**
     * @return ItemInvtClassification
     */
    public function getInvtClassification(): ItemInvtClassification
    {
        return $this->invtClassification;
    }

    /**
     * @param RecordRef $incomeAccount
     * @return SerializedInventoryItem
     */
    public function setIncomeAccount(RecordRef $incomeAccount): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setIntercoIncomeAccount(RecordRef $intercoIncomeAccount): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setIsTaxable(bool $isTaxable): SerializedInventoryItem
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
     * @param RecordRef $taxSchedule
     * @return SerializedInventoryItem
     */
    public function setTaxSchedule(RecordRef $taxSchedule): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setDropshipExpenseAccount(RecordRef $dropshipExpenseAccount): SerializedInventoryItem
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
     * @param RecordRef $revenueRecognitionRule
     * @return SerializedInventoryItem
     */
    public function setRevenueRecognitionRule(RecordRef $revenueRecognitionRule): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setRevRecForecastRule(RecordRef $revRecForecastRule): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setRevenueAllocationGroup(RecordRef $revenueAllocationGroup): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setCreateRevenuePlansOn(RecordRef $createRevenuePlansOn): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setDirectRevenuePosting(bool $directRevenuePosting): SerializedInventoryItem
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
     * @param RecordRef $assetAccount
     * @return SerializedInventoryItem
     */
    public function setAssetAccount(RecordRef $assetAccount): SerializedInventoryItem
    {
        $this->assetAccount = $assetAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAssetAccount(): RecordRef
    {
        return $this->assetAccount;
    }

    /**
     * @param bool $matchBillToReceipt
     * @return SerializedInventoryItem
     */
    public function setMatchBillToReceipt(bool $matchBillToReceipt): SerializedInventoryItem
    {
        $this->matchBillToReceipt = $matchBillToReceipt;
        return $this;
    }

    /**
     * @return bool
     */
    public function getMatchBillToReceipt(): bool
    {
        return $this->matchBillToReceipt;
    }

    /**
     * @param RecordRef $billQtyVarianceAcct
     * @return SerializedInventoryItem
     */
    public function setBillQtyVarianceAcct(RecordRef $billQtyVarianceAcct): SerializedInventoryItem
    {
        $this->billQtyVarianceAcct = $billQtyVarianceAcct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillQtyVarianceAcct(): RecordRef
    {
        return $this->billQtyVarianceAcct;
    }

    /**
     * @param RecordRef $billPriceVarianceAcct
     * @return SerializedInventoryItem
     */
    public function setBillPriceVarianceAcct(RecordRef $billPriceVarianceAcct): SerializedInventoryItem
    {
        $this->billPriceVarianceAcct = $billPriceVarianceAcct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillPriceVarianceAcct(): RecordRef
    {
        return $this->billPriceVarianceAcct;
    }

    /**
     * @param RecordRef $billExchRateVarianceAcct
     * @return SerializedInventoryItem
     */
    public function setBillExchRateVarianceAcct(RecordRef $billExchRateVarianceAcct): SerializedInventoryItem
    {
        $this->billExchRateVarianceAcct = $billExchRateVarianceAcct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillExchRateVarianceAcct(): RecordRef
    {
        return $this->billExchRateVarianceAcct;
    }

    /**
     * @param RecordRef $gainLossAccount
     * @return SerializedInventoryItem
     */
    public function setGainLossAccount(RecordRef $gainLossAccount): SerializedInventoryItem
    {
        $this->gainLossAccount = $gainLossAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getGainLossAccount(): RecordRef
    {
        return $this->gainLossAccount;
    }

    /**
     * @param float $shippingCost
     * @return SerializedInventoryItem
     */
    public function setShippingCost(float $shippingCost): SerializedInventoryItem
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
     * @param float $handlingCost
     * @return SerializedInventoryItem
     */
    public function setHandlingCost(float $handlingCost): SerializedInventoryItem
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
     * @param float $weight
     * @return SerializedInventoryItem
     */
    public function setWeight(float $weight): SerializedInventoryItem
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
     * @param string $costingMethodDisplay
     * @return SerializedInventoryItem
     */
    public function setCostingMethodDisplay(string $costingMethodDisplay): SerializedInventoryItem
    {
        $this->costingMethodDisplay = $costingMethodDisplay;
        return $this;
    }

    /**
     * @return string
     */
    public function getCostingMethodDisplay(): string
    {
        return $this->costingMethodDisplay;
    }

    /**
     * @param string $shippingCostUnits
     * @return SerializedInventoryItem
     */
    public function setShippingCostUnits(string $shippingCostUnits): SerializedInventoryItem
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
     * @param string $handlingCostUnits
     * @return SerializedInventoryItem
     */
    public function setHandlingCostUnits(string $handlingCostUnits): SerializedInventoryItem
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
     * @param RecordRef $unitsType
     * @return SerializedInventoryItem
     */
    public function setUnitsType(RecordRef $unitsType): SerializedInventoryItem
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
     * @param RecordRef $stockUnit
     * @return SerializedInventoryItem
     */
    public function setStockUnit(RecordRef $stockUnit): SerializedInventoryItem
    {
        $this->stockUnit = $stockUnit;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStockUnit(): RecordRef
    {
        return $this->stockUnit;
    }

    /**
     * @param RecordRef $purchaseUnit
     * @return SerializedInventoryItem
     */
    public function setPurchaseUnit(RecordRef $purchaseUnit): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setSaleUnit(RecordRef $saleUnit): SerializedInventoryItem
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
     * @param string $minimumQuantityUnits
     * @return SerializedInventoryItem
     */
    public function setMinimumQuantityUnits(string $minimumQuantityUnits): SerializedInventoryItem
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
     * @param string $safetyStockLevelUnits
     * @return SerializedInventoryItem
     */
    public function setSafetyStockLevelUnits(string $safetyStockLevelUnits): SerializedInventoryItem
    {
        $this->safetyStockLevelUnits = $safetyStockLevelUnits;
        return $this;
    }

    /**
     * @return string
     */
    public function getSafetyStockLevelUnits(): string
    {
        return $this->safetyStockLevelUnits;
    }

    /**
     * @param RecordRef $billingSchedule
     * @return SerializedInventoryItem
     */
    public function setBillingSchedule(RecordRef $billingSchedule): SerializedInventoryItem
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
     * @param bool $trackLandedCost
     * @return SerializedInventoryItem
     */
    public function setTrackLandedCost(bool $trackLandedCost): SerializedInventoryItem
    {
        $this->trackLandedCost = $trackLandedCost;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTrackLandedCost(): bool
    {
        return $this->trackLandedCost;
    }

    /**
     * @param string $matrixItemNameTemplate
     * @return SerializedInventoryItem
     */
    public function setMatrixItemNameTemplate(string $matrixItemNameTemplate): SerializedInventoryItem
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
     * @param bool $isDropShipItem
     * @return SerializedInventoryItem
     */
    public function setIsDropShipItem(bool $isDropShipItem): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setIsSpecialOrderItem(bool $isSpecialOrderItem): SerializedInventoryItem
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
     * @param string $stockDescription
     * @return SerializedInventoryItem
     */
    public function setStockDescription(string $stockDescription): SerializedInventoryItem
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
     * @param RecordRef $deferredRevenueAccount
     * @return SerializedInventoryItem
     */
    public function setDeferredRevenueAccount(RecordRef $deferredRevenueAccount): SerializedInventoryItem
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
     * @param bool $producer
     * @return SerializedInventoryItem
     */
    public function setProducer(bool $producer): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setManufacturer(string $manufacturer): SerializedInventoryItem
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
     * @param RecordRef $revRecSchedule
     * @return SerializedInventoryItem
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): SerializedInventoryItem
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
     * @param string $mpn
     * @return SerializedInventoryItem
     */
    public function setMpn(string $mpn): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setMultManufactureAddr(bool $multManufactureAddr): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setManufacturerCity(string $manufacturerCity): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setManufacturerState(string $manufacturerState): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setManufacturerZip(string $manufacturerZip): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setCountryOfManufacture(Country $countryOfManufacture): SerializedInventoryItem
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
     * @param RecordRef $defaultItemShipMethod
     * @return SerializedInventoryItem
     */
    public function setDefaultItemShipMethod(RecordRef $defaultItemShipMethod): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setItemCarrier(ShippingCarrier $itemCarrier): SerializedInventoryItem
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
     * @param bool $roundUpAsComponent
     * @return SerializedInventoryItem
     */
    public function setRoundUpAsComponent(bool $roundUpAsComponent): SerializedInventoryItem
    {
        $this->roundUpAsComponent = $roundUpAsComponent;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRoundUpAsComponent(): bool
    {
        return $this->roundUpAsComponent;
    }

    /**
     * @param float $purchaseOrderQuantity
     * @return SerializedInventoryItem
     */
    public function setPurchaseOrderQuantity(float $purchaseOrderQuantity): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setPurchaseOrderAmount(float $purchaseOrderAmount): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setPurchaseOrderQuantityDiff(float $purchaseOrderQuantityDiff): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setReceiptQuantity(float $receiptQuantity): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setReceiptAmount(float $receiptAmount): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setReceiptQuantityDiff(float $receiptQuantityDiff): SerializedInventoryItem
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
     * @param RecordRefList $itemShipMethodList
     * @return SerializedInventoryItem
     */
    public function setItemShipMethodList(RecordRefList $itemShipMethodList): SerializedInventoryItem
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
     * @param string $manufacturerTaxId
     * @return SerializedInventoryItem
     */
    public function setManufacturerTaxId(string $manufacturerTaxId): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setScheduleBNumber(string $scheduleBNumber): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setScheduleBQuantity(int $scheduleBQuantity): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setScheduleBCode(ScheduleBCode $scheduleBCode): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setManufacturerTariff(string $manufacturerTariff): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setPreferenceCriterion(ItemPreferenceCriterion $preferenceCriterion): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setMinimumQuantity(int $minimumQuantity): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setEnforceMinQtyInternally(bool $enforceMinQtyInternally): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setMaximumQuantity(int $maximumQuantity): SerializedInventoryItem
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
     * @param RecordRef $shipPackage
     * @return SerializedInventoryItem
     */
    public function setShipPackage(RecordRef $shipPackage): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setShipIndividually(bool $shipIndividually): SerializedInventoryItem
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
     * @param RecordRef $softDescriptor
     * @return SerializedInventoryItem
     */
    public function setSoftDescriptor(RecordRef $softDescriptor): SerializedInventoryItem
    {
        $this->softDescriptor = $softDescriptor;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSoftDescriptor(): RecordRef
    {
        return $this->softDescriptor;
    }

    /**
     * @param RecordRef $costCategory
     * @return SerializedInventoryItem
     */
    public function setCostCategory(RecordRef $costCategory): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setPricesIncludeTax(bool $pricesIncludeTax): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setQuantityPricingSchedule(RecordRef $quantityPricingSchedule): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setUseMarginalRates(bool $useMarginalRates): SerializedInventoryItem
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
     * @param ItemCostEstimateType $costEstimateType
     * @return SerializedInventoryItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setCostEstimate(float $costEstimate): SerializedInventoryItem
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
     * @param float $transferPrice
     * @return SerializedInventoryItem
     */
    public function setTransferPrice(float $transferPrice): SerializedInventoryItem
    {
        $this->transferPrice = $transferPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getTransferPrice(): float
    {
        return $this->transferPrice;
    }

    /**
     * @param ItemOverallQuantityPricingType $overallQuantityPricingType
     * @return SerializedInventoryItem
     */
    public function setOverallQuantityPricingType(ItemOverallQuantityPricingType $overallQuantityPricingType): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setPricingGroup(RecordRef $pricingGroup): SerializedInventoryItem
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
     * @param RecordRef $preferredLocation
     * @return SerializedInventoryItem
     */
    public function setPreferredLocation(RecordRef $preferredLocation): SerializedInventoryItem
    {
        $this->preferredLocation = $preferredLocation;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPreferredLocation(): RecordRef
    {
        return $this->preferredLocation;
    }

    /**
     * @param bool $isStorePickupAllowed
     * @return SerializedInventoryItem
     */
    public function setIsStorePickupAllowed(bool $isStorePickupAllowed): SerializedInventoryItem
    {
        $this->isStorePickupAllowed = $isStorePickupAllowed;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsStorePickupAllowed(): bool
    {
        return $this->isStorePickupAllowed;
    }

    /**
     * @param float $vsoePrice
     * @return SerializedInventoryItem
     */
    public function setVsoePrice(float $vsoePrice): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setVsoeSopGroup(VsoeSopGroup $vsoeSopGroup): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setVsoeDelivered(bool $vsoeDelivered): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setItemRevenueCategory(RecordRef $itemRevenueCategory): SerializedInventoryItem
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
     * @param float $cost
     * @return SerializedInventoryItem
     */
    public function setCost(float $cost): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setCostUnits(string $costUnits): SerializedInventoryItem
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
     * @param string $quantityReorderUnits
     * @return SerializedInventoryItem
     */
    public function setQuantityReorderUnits(string $quantityReorderUnits): SerializedInventoryItem
    {
        $this->quantityReorderUnits = $quantityReorderUnits;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantityReorderUnits(): string
    {
        return $this->quantityReorderUnits;
    }

    /**
     * @param int $reorderMultiple
     * @return SerializedInventoryItem
     */
    public function setReorderMultiple(int $reorderMultiple): SerializedInventoryItem
    {
        $this->reorderMultiple = $reorderMultiple;
        return $this;
    }

    /**
     * @return int
     */
    public function getReorderMultiple(): int
    {
        return $this->reorderMultiple;
    }

    /**
     * @param float $totalValue
     * @return SerializedInventoryItem
     */
    public function setTotalValue(float $totalValue): SerializedInventoryItem
    {
        $this->totalValue = $totalValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalValue(): float
    {
        return $this->totalValue;
    }

    /**
     * @param bool $useBins
     * @return SerializedInventoryItem
     */
    public function setUseBins(bool $useBins): SerializedInventoryItem
    {
        $this->useBins = $useBins;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUseBins(): bool
    {
        return $this->useBins;
    }

    /**
     * @param int $leadTime
     * @return SerializedInventoryItem
     */
    public function setLeadTime(int $leadTime): SerializedInventoryItem
    {
        $this->leadTime = $leadTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getLeadTime(): int
    {
        return $this->leadTime;
    }

    /**
     * @param bool $autoLeadTime
     * @return SerializedInventoryItem
     */
    public function setAutoLeadTime(bool $autoLeadTime): SerializedInventoryItem
    {
        $this->autoLeadTime = $autoLeadTime;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAutoLeadTime(): bool
    {
        return $this->autoLeadTime;
    }

    /**
     * @param bool $autoReorderPoint
     * @return SerializedInventoryItem
     */
    public function setAutoReorderPoint(bool $autoReorderPoint): SerializedInventoryItem
    {
        $this->autoReorderPoint = $autoReorderPoint;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAutoReorderPoint(): bool
    {
        return $this->autoReorderPoint;
    }

    /**
     * @param bool $autoPreferredStockLevel
     * @return SerializedInventoryItem
     */
    public function setAutoPreferredStockLevel(bool $autoPreferredStockLevel): SerializedInventoryItem
    {
        $this->autoPreferredStockLevel = $autoPreferredStockLevel;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAutoPreferredStockLevel(): bool
    {
        return $this->autoPreferredStockLevel;
    }

    /**
     * @param float $preferredStockLevelDays
     * @return SerializedInventoryItem
     */
    public function setPreferredStockLevelDays(float $preferredStockLevelDays): SerializedInventoryItem
    {
        $this->preferredStockLevelDays = $preferredStockLevelDays;
        return $this;
    }

    /**
     * @return float
     */
    public function getPreferredStockLevelDays(): float
    {
        return $this->preferredStockLevelDays;
    }

    /**
     * @param float $averageCost
     * @return SerializedInventoryItem
     */
    public function setAverageCost(float $averageCost): SerializedInventoryItem
    {
        $this->averageCost = $averageCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getAverageCost(): float
    {
        return $this->averageCost;
    }

    /**
     * @param float $safetyStockLevel
     * @return SerializedInventoryItem
     */
    public function setSafetyStockLevel(float $safetyStockLevel): SerializedInventoryItem
    {
        $this->safetyStockLevel = $safetyStockLevel;
        return $this;
    }

    /**
     * @return float
     */
    public function getSafetyStockLevel(): float
    {
        return $this->safetyStockLevel;
    }

    /**
     * @param float $lastPurchasePrice
     * @return SerializedInventoryItem
     */
    public function setLastPurchasePrice(float $lastPurchasePrice): SerializedInventoryItem
    {
        $this->lastPurchasePrice = $lastPurchasePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getLastPurchasePrice(): float
    {
        return $this->lastPurchasePrice;
    }

    /**
     * @param int $safetyStockLevelDays
     * @return SerializedInventoryItem
     */
    public function setSafetyStockLevelDays(int $safetyStockLevelDays): SerializedInventoryItem
    {
        $this->safetyStockLevelDays = $safetyStockLevelDays;
        return $this;
    }

    /**
     * @return int
     */
    public function getSafetyStockLevelDays(): int
    {
        return $this->safetyStockLevelDays;
    }

    /**
     * @param int $backwardConsumptionDays
     * @return SerializedInventoryItem
     */
    public function setBackwardConsumptionDays(int $backwardConsumptionDays): SerializedInventoryItem
    {
        $this->backwardConsumptionDays = $backwardConsumptionDays;
        return $this;
    }

    /**
     * @return int
     */
    public function getBackwardConsumptionDays(): int
    {
        return $this->backwardConsumptionDays;
    }

    /**
     * @param bool $seasonalDemand
     * @return SerializedInventoryItem
     */
    public function setSeasonalDemand(bool $seasonalDemand): SerializedInventoryItem
    {
        $this->seasonalDemand = $seasonalDemand;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSeasonalDemand(): bool
    {
        return $this->seasonalDemand;
    }

    /**
     * @param float $demandModifier
     * @return SerializedInventoryItem
     */
    public function setDemandModifier(float $demandModifier): SerializedInventoryItem
    {
        $this->demandModifier = $demandModifier;
        return $this;
    }

    /**
     * @return float
     */
    public function getDemandModifier(): float
    {
        return $this->demandModifier;
    }

    /**
     * @param string $storeDisplayName
     * @return SerializedInventoryItem
     */
    public function setStoreDisplayName(string $storeDisplayName): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setStoreDisplayThumbnail(RecordRef $storeDisplayThumbnail): SerializedInventoryItem
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
     * @param ItemWeightUnit $weightUnit
     * @return SerializedInventoryItem
     */
    public function setWeightUnit(ItemWeightUnit $weightUnit): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setWeightUnits(string $weightUnits): SerializedInventoryItem
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
     * @param RecordRef $storeDisplayImage
     * @return SerializedInventoryItem
     */
    public function setStoreDisplayImage(RecordRef $storeDisplayImage): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setStoreDescription(string $storeDescription): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setStoreDetailedDescription(string $storeDetailedDescription): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setStoreItemTemplate(RecordRef $storeItemTemplate): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setPageTitle(string $pageTitle): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setMetaTagHtml(string $metaTagHtml): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setExcludeFromSitemap(bool $excludeFromSitemap): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setSitemapPriority(SitemapPriority $sitemapPriority): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setSearchKeywords(string $searchKeywords): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setIsDonationItem(bool $isDonationItem): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setShowDefaultDonationAmount(bool $showDefaultDonationAmount): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setMaxDonationAmount(float $maxDonationAmount): SerializedInventoryItem
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
     * @param string $shoppingDotComCategory
     * @return SerializedInventoryItem
     */
    public function setShoppingDotComCategory(string $shoppingDotComCategory): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setShopzillaCategoryId(int $shopzillaCategoryId): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setNexTagCategory(string $nexTagCategory): SerializedInventoryItem
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
     * @param float $quantityOnHand
     * @return SerializedInventoryItem
     */
    public function setQuantityOnHand(float $quantityOnHand): SerializedInventoryItem
    {
        $this->quantityOnHand = $quantityOnHand;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOnHand(): float
    {
        return $this->quantityOnHand;
    }

    /**
     * @param string $quantityOnHandUnits
     * @return SerializedInventoryItem
     */
    public function setQuantityOnHandUnits(string $quantityOnHandUnits): SerializedInventoryItem
    {
        $this->quantityOnHandUnits = $quantityOnHandUnits;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantityOnHandUnits(): string
    {
        return $this->quantityOnHandUnits;
    }

    /**
     * @param float $onHandValueMli
     * @return SerializedInventoryItem
     */
    public function setOnHandValueMli(float $onHandValueMli): SerializedInventoryItem
    {
        $this->onHandValueMli = $onHandValueMli;
        return $this;
    }

    /**
     * @return float
     */
    public function getOnHandValueMli(): float
    {
        return $this->onHandValueMli;
    }

    /**
     * @param string $serialNumbers
     * @return SerializedInventoryItem
     */
    public function setSerialNumbers(string $serialNumbers): SerializedInventoryItem
    {
        $this->serialNumbers = $serialNumbers;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumbers(): string
    {
        return $this->serialNumbers;
    }

    /**
     * @param float $reorderPoint
     * @return SerializedInventoryItem
     */
    public function setReorderPoint(float $reorderPoint): SerializedInventoryItem
    {
        $this->reorderPoint = $reorderPoint;
        return $this;
    }

    /**
     * @return float
     */
    public function getReorderPoint(): float
    {
        return $this->reorderPoint;
    }

    /**
     * @param float $preferredStockLevel
     * @return SerializedInventoryItem
     */
    public function setPreferredStockLevel(float $preferredStockLevel): SerializedInventoryItem
    {
        $this->preferredStockLevel = $preferredStockLevel;
        return $this;
    }

    /**
     * @return float
     */
    public function getPreferredStockLevel(): float
    {
        return $this->preferredStockLevel;
    }

    /**
     * @param string $reorderPointUnits
     * @return SerializedInventoryItem
     */
    public function setReorderPointUnits(string $reorderPointUnits): SerializedInventoryItem
    {
        $this->reorderPointUnits = $reorderPointUnits;
        return $this;
    }

    /**
     * @return string
     */
    public function getReorderPointUnits(): string
    {
        return $this->reorderPointUnits;
    }

    /**
     * @param float $defaultReturnCost
     * @return SerializedInventoryItem
     */
    public function setDefaultReturnCost(float $defaultReturnCost): SerializedInventoryItem
    {
        $this->defaultReturnCost = $defaultReturnCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getDefaultReturnCost(): float
    {
        return $this->defaultReturnCost;
    }

    /**
     * @param RecordRef $supplyReplenishmentMethod
     * @return SerializedInventoryItem
     */
    public function setSupplyReplenishmentMethod(RecordRef $supplyReplenishmentMethod): SerializedInventoryItem
    {
        $this->supplyReplenishmentMethod = $supplyReplenishmentMethod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSupplyReplenishmentMethod(): RecordRef
    {
        return $this->supplyReplenishmentMethod;
    }

    /**
     * @param RecordRef $alternateDemandSourceItem
     * @return SerializedInventoryItem
     */
    public function setAlternateDemandSourceItem(RecordRef $alternateDemandSourceItem): SerializedInventoryItem
    {
        $this->alternateDemandSourceItem = $alternateDemandSourceItem;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAlternateDemandSourceItem(): RecordRef
    {
        return $this->alternateDemandSourceItem;
    }

    /**
     * @param float $fixedLotSize
     * @return SerializedInventoryItem
     */
    public function setFixedLotSize(float $fixedLotSize): SerializedInventoryItem
    {
        $this->fixedLotSize = $fixedLotSize;
        return $this;
    }

    /**
     * @return float
     */
    public function getFixedLotSize(): float
    {
        return $this->fixedLotSize;
    }

    /**
     * @param PeriodicLotSizeType $periodicLotSizeType
     * @return SerializedInventoryItem
     */
    public function setPeriodicLotSizeType(PeriodicLotSizeType $periodicLotSizeType): SerializedInventoryItem
    {
        $this->periodicLotSizeType = $periodicLotSizeType;
        return $this;
    }

    /**
     * @return PeriodicLotSizeType
     */
    public function getPeriodicLotSizeType(): PeriodicLotSizeType
    {
        return $this->periodicLotSizeType;
    }

    /**
     * @param RecordRef $supplyType
     * @return SerializedInventoryItem
     */
    public function setSupplyType(RecordRef $supplyType): SerializedInventoryItem
    {
        $this->supplyType = $supplyType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSupplyType(): RecordRef
    {
        return $this->supplyType;
    }

    /**
     * @param int $demandTimeFence
     * @return SerializedInventoryItem
     */
    public function setDemandTimeFence(int $demandTimeFence): SerializedInventoryItem
    {
        $this->demandTimeFence = $demandTimeFence;
        return $this;
    }

    /**
     * @return int
     */
    public function getDemandTimeFence(): int
    {
        return $this->demandTimeFence;
    }

    /**
     * @param int $supplyTimeFence
     * @return SerializedInventoryItem
     */
    public function setSupplyTimeFence(int $supplyTimeFence): SerializedInventoryItem
    {
        $this->supplyTimeFence = $supplyTimeFence;
        return $this;
    }

    /**
     * @return int
     */
    public function getSupplyTimeFence(): int
    {
        return $this->supplyTimeFence;
    }

    /**
     * @param int $rescheduleInDays
     * @return SerializedInventoryItem
     */
    public function setRescheduleInDays(int $rescheduleInDays): SerializedInventoryItem
    {
        $this->rescheduleInDays = $rescheduleInDays;
        return $this;
    }

    /**
     * @return int
     */
    public function getRescheduleInDays(): int
    {
        return $this->rescheduleInDays;
    }

    /**
     * @param int $rescheduleOutDays
     * @return SerializedInventoryItem
     */
    public function setRescheduleOutDays(int $rescheduleOutDays): SerializedInventoryItem
    {
        $this->rescheduleOutDays = $rescheduleOutDays;
        return $this;
    }

    /**
     * @return int
     */
    public function getRescheduleOutDays(): int
    {
        return $this->rescheduleOutDays;
    }

    /**
     * @param int $periodicLotSizeDays
     * @return SerializedInventoryItem
     */
    public function setPeriodicLotSizeDays(int $periodicLotSizeDays): SerializedInventoryItem
    {
        $this->periodicLotSizeDays = $periodicLotSizeDays;
        return $this;
    }

    /**
     * @return int
     */
    public function getPeriodicLotSizeDays(): int
    {
        return $this->periodicLotSizeDays;
    }

    /**
     * @param RecordRef $supplyLotSizingMethod
     * @return SerializedInventoryItem
     */
    public function setSupplyLotSizingMethod(RecordRef $supplyLotSizingMethod): SerializedInventoryItem
    {
        $this->supplyLotSizingMethod = $supplyLotSizingMethod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSupplyLotSizingMethod(): RecordRef
    {
        return $this->supplyLotSizingMethod;
    }

    /**
     * @param int $forwardConsumptionDays
     * @return SerializedInventoryItem
     */
    public function setForwardConsumptionDays(int $forwardConsumptionDays): SerializedInventoryItem
    {
        $this->forwardConsumptionDays = $forwardConsumptionDays;
        return $this;
    }

    /**
     * @return int
     */
    public function getForwardConsumptionDays(): int
    {
        return $this->forwardConsumptionDays;
    }

    /**
     * @param RecordRef $demandSource
     * @return SerializedInventoryItem
     */
    public function setDemandSource(RecordRef $demandSource): SerializedInventoryItem
    {
        $this->demandSource = $demandSource;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDemandSource(): RecordRef
    {
        return $this->demandSource;
    }

    /**
     * @param float $quantityOnOrder
     * @return SerializedInventoryItem
     */
    public function setQuantityOnOrder(float $quantityOnOrder): SerializedInventoryItem
    {
        $this->quantityOnOrder = $quantityOnOrder;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOnOrder(): float
    {
        return $this->quantityOnOrder;
    }

    /**
     * @param string $preferredStockLevelUnits
     * @return SerializedInventoryItem
     */
    public function setPreferredStockLevelUnits(string $preferredStockLevelUnits): SerializedInventoryItem
    {
        $this->preferredStockLevelUnits = $preferredStockLevelUnits;
        return $this;
    }

    /**
     * @return string
     */
    public function getPreferredStockLevelUnits(): string
    {
        return $this->preferredStockLevelUnits;
    }

    /**
     * @param float $quantityCommitted
     * @return SerializedInventoryItem
     */
    public function setQuantityCommitted(float $quantityCommitted): SerializedInventoryItem
    {
        $this->quantityCommitted = $quantityCommitted;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityCommitted(): float
    {
        return $this->quantityCommitted;
    }

    /**
     * @param float $quantityAvailable
     * @return SerializedInventoryItem
     */
    public function setQuantityAvailable(float $quantityAvailable): SerializedInventoryItem
    {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityAvailable(): float
    {
        return $this->quantityAvailable;
    }

    /**
     * @param float $quantityBackOrdered
     * @return SerializedInventoryItem
     */
    public function setQuantityBackOrdered(float $quantityBackOrdered): SerializedInventoryItem
    {
        $this->quantityBackOrdered = $quantityBackOrdered;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityBackOrdered(): float
    {
        return $this->quantityBackOrdered;
    }

    /**
     * @param RecordRef $purchaseTaxCode
     * @return SerializedInventoryItem
     */
    public function setPurchaseTaxCode(RecordRef $purchaseTaxCode): SerializedInventoryItem
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
     * @param RecordRef $purchasePriceVarianceAcct
     * @return SerializedInventoryItem
     */
    public function setPurchasePriceVarianceAcct(RecordRef $purchasePriceVarianceAcct): SerializedInventoryItem
    {
        $this->purchasePriceVarianceAcct = $purchasePriceVarianceAcct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPurchasePriceVarianceAcct(): RecordRef
    {
        return $this->purchasePriceVarianceAcct;
    }

    /**
     * @param float $rate
     * @return SerializedInventoryItem
     */
    public function setRate(float $rate): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setSalesTaxCode(RecordRef $salesTaxCode): SerializedInventoryItem
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
     * @param bool $onSpecial
     * @return SerializedInventoryItem
     */
    public function setOnSpecial(bool $onSpecial): SerializedInventoryItem
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
     * @param bool $dontShowPrice
     * @return SerializedInventoryItem
     */
    public function setDontShowPrice(bool $dontShowPrice): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setNoPriceMessage(string $noPriceMessage): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setOutOfStockMessage(string $outOfStockMessage): SerializedInventoryItem
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
     * @param string $specialsDescription
     * @return SerializedInventoryItem
     */
    public function setSpecialsDescription(string $specialsDescription): SerializedInventoryItem
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
     * @param ItemOutOfStockBehavior $outOfStockBehavior
     * @return SerializedInventoryItem
     */
    public function setOutOfStockBehavior(ItemOutOfStockBehavior $outOfStockBehavior): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setRelatedItemsDescription(string $relatedItemsDescription): SerializedInventoryItem
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
     * @param string $featuredDescription
     * @return SerializedInventoryItem
     */
    public function setFeaturedDescription(string $featuredDescription): SerializedInventoryItem
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
     * @param ProductFeedList $productFeedList
     * @return SerializedInventoryItem
     */
    public function setProductFeedList(ProductFeedList $productFeedList): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setUrlComponent(string $urlComponent): SerializedInventoryItem
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
     * @param ItemOptionsList $itemOptionsList
     * @return SerializedInventoryItem
     */
    public function setItemOptionsList(ItemOptionsList $itemOptionsList): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setMatrixOptionList(MatrixOptionList $matrixOptionList): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setItemVendorList(ItemVendorList $itemVendorList): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setPricingMatrix(PricingMatrix $pricingMatrix): SerializedInventoryItem
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
     * @param SerializedInventoryItemHierarchyVersionsList $hierarchyVersionsList
     * @return SerializedInventoryItem
     */
    public function setHierarchyVersionsList(SerializedInventoryItemHierarchyVersionsList $hierarchyVersionsList): SerializedInventoryItem
    {
        $this->hierarchyVersionsList = $hierarchyVersionsList;
        return $this;
    }

    /**
     * @return SerializedInventoryItemHierarchyVersionsList
     */
    public function getHierarchyVersionsList(): SerializedInventoryItemHierarchyVersionsList
    {
        return $this->hierarchyVersionsList;
    }

    /**
     * @param ItemAccountingBookDetailList $accountingBookDetailList
     * @return SerializedInventoryItem
     */
    public function setAccountingBookDetailList(ItemAccountingBookDetailList $accountingBookDetailList): SerializedInventoryItem
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
     * @param RecordRefList $itemNumberOptionsList
     * @return SerializedInventoryItem
     */
    public function setItemNumberOptionsList(RecordRefList $itemNumberOptionsList): SerializedInventoryItem
    {
        $this->itemNumberOptionsList = $itemNumberOptionsList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getItemNumberOptionsList(): RecordRefList
    {
        return $this->itemNumberOptionsList;
    }

    /**
     * @param SerializedInventoryItemNumbersList $numbersList
     * @return SerializedInventoryItem
     */
    public function setNumbersList(SerializedInventoryItemNumbersList $numbersList): SerializedInventoryItem
    {
        $this->numbersList = $numbersList;
        return $this;
    }

    /**
     * @return SerializedInventoryItemNumbersList
     */
    public function getNumbersList(): SerializedInventoryItemNumbersList
    {
        return $this->numbersList;
    }

    /**
     * @param InventoryItemBinNumberList $binNumberList
     * @return SerializedInventoryItem
     */
    public function setBinNumberList(InventoryItemBinNumberList $binNumberList): SerializedInventoryItem
    {
        $this->binNumberList = $binNumberList;
        return $this;
    }

    /**
     * @return InventoryItemBinNumberList
     */
    public function getBinNumberList(): InventoryItemBinNumberList
    {
        return $this->binNumberList;
    }

    /**
     * @param SiteCategoryList $siteCategoryList
     * @return SerializedInventoryItem
     */
    public function setSiteCategoryList(SiteCategoryList $siteCategoryList): SerializedInventoryItem
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
     * @param SerializedInventoryItemLocationsList $locationsList
     * @return SerializedInventoryItem
     */
    public function setLocationsList(SerializedInventoryItemLocationsList $locationsList): SerializedInventoryItem
    {
        $this->locationsList = $locationsList;
        return $this;
    }

    /**
     * @return SerializedInventoryItemLocationsList
     */
    public function getLocationsList(): SerializedInventoryItemLocationsList
    {
        return $this->locationsList;
    }

    /**
     * @param TranslationList $translationsList
     * @return SerializedInventoryItem
     */
    public function setTranslationsList(TranslationList $translationsList): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setPresentationItemList(PresentationItemList $presentationItemList): SerializedInventoryItem
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
     * @param int $futureHorizon
     * @return SerializedInventoryItem
     */
    public function setFutureHorizon(int $futureHorizon): SerializedInventoryItem
    {
        $this->futureHorizon = $futureHorizon;
        return $this;
    }

    /**
     * @return int
     */
    public function getFutureHorizon(): int
    {
        return $this->futureHorizon;
    }

    /**
     * @param RecordRef $consumptionUnit
     * @return SerializedInventoryItem
     */
    public function setConsumptionUnit(RecordRef $consumptionUnit): SerializedInventoryItem
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
     * @param bool $enableCatchWeight
     * @return SerializedInventoryItem
     */
    public function setEnableCatchWeight(bool $enableCatchWeight): SerializedInventoryItem
    {
        $this->enableCatchWeight = $enableCatchWeight;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEnableCatchWeight(): bool
    {
        return $this->enableCatchWeight;
    }

    /**
     * @param RecordRef $secondaryUnitsType
     * @return SerializedInventoryItem
     */
    public function setSecondaryUnitsType(RecordRef $secondaryUnitsType): SerializedInventoryItem
    {
        $this->secondaryUnitsType = $secondaryUnitsType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSecondaryUnitsType(): RecordRef
    {
        return $this->secondaryUnitsType;
    }

    /**
     * @param RecordRef $secondaryBaseUnit
     * @return SerializedInventoryItem
     */
    public function setSecondaryBaseUnit(RecordRef $secondaryBaseUnit): SerializedInventoryItem
    {
        $this->secondaryBaseUnit = $secondaryBaseUnit;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSecondaryBaseUnit(): RecordRef
    {
        return $this->secondaryBaseUnit;
    }

    /**
     * @param float $conversionRate
     * @return SerializedInventoryItem
     */
    public function setConversionRate(float $conversionRate): SerializedInventoryItem
    {
        $this->conversionRate = $conversionRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getConversionRate(): float
    {
        return $this->conversionRate;
    }

    /**
     * @param RecordRef $secondaryStockUnit
     * @return SerializedInventoryItem
     */
    public function setSecondaryStockUnit(RecordRef $secondaryStockUnit): SerializedInventoryItem
    {
        $this->secondaryStockUnit = $secondaryStockUnit;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSecondaryStockUnit(): RecordRef
    {
        return $this->secondaryStockUnit;
    }

    /**
     * @param RecordRef $secondarySaleUnit
     * @return SerializedInventoryItem
     */
    public function setSecondarySaleUnit(RecordRef $secondarySaleUnit): SerializedInventoryItem
    {
        $this->secondarySaleUnit = $secondarySaleUnit;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSecondarySaleUnit(): RecordRef
    {
        return $this->secondarySaleUnit;
    }

    /**
     * @param RecordRef $secondaryPurchaseUnit
     * @return SerializedInventoryItem
     */
    public function setSecondaryPurchaseUnit(RecordRef $secondaryPurchaseUnit): SerializedInventoryItem
    {
        $this->secondaryPurchaseUnit = $secondaryPurchaseUnit;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSecondaryPurchaseUnit(): RecordRef
    {
        return $this->secondaryPurchaseUnit;
    }

    /**
     * @param RecordRef $secondaryConsumptionUnit
     * @return SerializedInventoryItem
     */
    public function setSecondaryConsumptionUnit(RecordRef $secondaryConsumptionUnit): SerializedInventoryItem
    {
        $this->secondaryConsumptionUnit = $secondaryConsumptionUnit;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSecondaryConsumptionUnit(): RecordRef
    {
        return $this->secondaryConsumptionUnit;
    }

    /**
     * @param float $lowerWarningLimit
     * @return SerializedInventoryItem
     */
    public function setLowerWarningLimit(float $lowerWarningLimit): SerializedInventoryItem
    {
        $this->lowerWarningLimit = $lowerWarningLimit;
        return $this;
    }

    /**
     * @return float
     */
    public function getLowerWarningLimit(): float
    {
        return $this->lowerWarningLimit;
    }

    /**
     * @param float $upperWarningLimit
     * @return SerializedInventoryItem
     */
    public function setUpperWarningLimit(float $upperWarningLimit): SerializedInventoryItem
    {
        $this->upperWarningLimit = $upperWarningLimit;
        return $this;
    }

    /**
     * @return float
     */
    public function getUpperWarningLimit(): float
    {
        return $this->upperWarningLimit;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return SerializedInventoryItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setInternalId(string $internalId): SerializedInventoryItem
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
     * @return SerializedInventoryItem
     */
    public function setExternalId(string $externalId): SerializedInventoryItem
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
