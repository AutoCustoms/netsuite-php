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

class LotNumberedInventoryItem extends Record {
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
     * @var RecordRef
     */
    protected RecordRef $incomeAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $intercoIncomeAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $issueProduct;

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
     * @var bool
     */
    protected bool $isTaxable;

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
    protected RecordRef $purchasePriceVarianceAcct;

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
     * @var int
     */
    protected int $reorderMultiple;

    /**
     * @var string
     */
    protected string $quantityReorderUnits;

    /**
     * @var float
     */
    protected float $totalValue;

    /**
     * @var bool
     */
    protected bool $useBins;

    /**
     * @var float
     */
    protected float $averageCost;

    /**
     * @var int
     */
    protected int $leadTime;

    /**
     * @var bool
     */
    protected bool $autoLeadTime;

    /**
     * @var float
     */
    protected float $lastPurchasePrice;

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
    protected float $safetyStockLevel;

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
     * @var string
     */
    protected string $expirationDate;

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
    protected string $specialsDescription;

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
     * @var LotNumberedInventoryItemHierarchyVersionsList
     */
    protected LotNumberedInventoryItemHierarchyVersionsList $hierarchyVersionsList;

    /**
     * @var ItemAccountingBookDetailList
     */
    protected ItemAccountingBookDetailList $accountingBookDetailList;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $itemNumberOptionsList;

    /**
     * @var LotNumberedInventoryItemNumbersList
     */
    protected LotNumberedInventoryItemNumbersList $numbersList;

    /**
     * @var InventoryItemBinNumberList
     */
    protected InventoryItemBinNumberList $binNumberList;

    /**
     * @var SiteCategoryList
     */
    protected SiteCategoryList $siteCategoryList;

    /**
     * @var LotNumberedInventoryItemLocationsList
     */
    protected LotNumberedInventoryItemLocationsList $locationsList;

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
        "currency" => "string",
        "cogsAccount" => "RecordRef",
        "intercoCogsAccount" => "RecordRef",
        "vendor" => "RecordRef",
        "salesDescription" => "string",
        "incomeAccount" => "RecordRef",
        "intercoIncomeAccount" => "RecordRef",
        "issueProduct" => "RecordRef",
        "taxSchedule" => "RecordRef",
        "dropshipExpenseAccount" => "RecordRef",
        "revenueRecognitionRule" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "revenueAllocationGroup" => "RecordRef",
        "createRevenuePlansOn" => "RecordRef",
        "directRevenuePosting" => "boolean",
        "isTaxable" => "boolean",
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
        "purchasePriceVarianceAcct" => "RecordRef",
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
        "reorderMultiple" => "integer",
        "quantityReorderUnits" => "string",
        "totalValue" => "float",
        "useBins" => "boolean",
        "averageCost" => "float",
        "leadTime" => "integer",
        "autoLeadTime" => "boolean",
        "lastPurchasePrice" => "float",
        "autoReorderPoint" => "boolean",
        "autoPreferredStockLevel" => "boolean",
        "preferredStockLevelDays" => "float",
        "safetyStockLevel" => "float",
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
        "expirationDate" => "dateTime",
        "lastInvtCountDate" => "dateTime",
        "nextInvtCountDate" => "dateTime",
        "invtCountInterval" => "integer",
        "invtClassification" => "ItemInvtClassification",
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
        "rate" => "float",
        "salesTaxCode" => "RecordRef",
        "dontShowPrice" => "boolean",
        "noPriceMessage" => "string",
        "outOfStockMessage" => "string",
        "onSpecial" => "boolean",
        "outOfStockBehavior" => "ItemOutOfStockBehavior",
        "specialsDescription" => "string",
        "relatedItemsDescription" => "string",
        "featuredDescription" => "string",
        "productFeedList" => "ProductFeedList",
        "urlComponent" => "string",
        "itemOptionsList" => "ItemOptionsList",
        "matrixOptionList" => "MatrixOptionList",
        "itemVendorList" => "ItemVendorList",
        "pricingMatrix" => "PricingMatrix",
        "hierarchyVersionsList" => "LotNumberedInventoryItemHierarchyVersionsList",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "itemNumberOptionsList" => "RecordRefList",
        "numbersList" => "LotNumberedInventoryItemNumbersList",
        "binNumberList" => "InventoryItemBinNumberList",
        "siteCategoryList" => "SiteCategoryList",
        "locationsList" => "LotNumberedInventoryItemLocationsList",
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
     * @return LotNumberedInventoryItem
     */
    public function setCreatedDate(string $createdDate): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setLastModifiedDate(string $lastModifiedDate): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setCustomForm(RecordRef $customForm): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setItemId(string $itemId): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setUpcCode(string $upcCode): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setDisplayName(string $displayName): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setMatrixType(ItemMatrixType $matrixType): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setIncludeChildren(bool $includeChildren): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setVendorName(string $vendorName): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setParent(RecordRef $parent): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setIsOnline(bool $isOnline): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setIsHazmatItem(bool $isHazmatItem): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setHazmatId(string $hazmatId): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setHazmatShippingName(string $hazmatShippingName): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setHazmatHazardClass(string $hazmatHazardClass): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setHazmatPackingGroup(HazmatPackingGroup $hazmatPackingGroup): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setHazmatItemUnits(string $hazmatItemUnits): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setHazmatItemUnitsQty(float $hazmatItemUnitsQty): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setIsGcoCompliant(bool $isGcoCompliant): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setOfferSupport(bool $offerSupport): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setIsInactive(bool $isInactive): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setAvailableToPartners(bool $availableToPartners): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setDepartment(RecordRef $department): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setClass(RecordRef $class): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setLocation(RecordRef $location): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setCostingMethod(ItemCostingMethod $costingMethod): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setPurchaseDescription(string $purchaseDescription): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setCopyDescription(bool $copyDescription): LotNumberedInventoryItem
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
     * @param string $currency
     * @return LotNumberedInventoryItem
     */
    public function setCurrency(string $currency): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setCogsAccount(RecordRef $cogsAccount): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setIntercoCogsAccount(RecordRef $intercoCogsAccount): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setVendor(RecordRef $vendor): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSalesDescription(string $salesDescription): LotNumberedInventoryItem
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
     * @param RecordRef $incomeAccount
     * @return LotNumberedInventoryItem
     */
    public function setIncomeAccount(RecordRef $incomeAccount): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setIntercoIncomeAccount(RecordRef $intercoIncomeAccount): LotNumberedInventoryItem
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
     * @param RecordRef $issueProduct
     * @return LotNumberedInventoryItem
     */
    public function setIssueProduct(RecordRef $issueProduct): LotNumberedInventoryItem
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
     * @param RecordRef $taxSchedule
     * @return LotNumberedInventoryItem
     */
    public function setTaxSchedule(RecordRef $taxSchedule): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setDropshipExpenseAccount(RecordRef $dropshipExpenseAccount): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setRevenueRecognitionRule(RecordRef $revenueRecognitionRule): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setRevRecForecastRule(RecordRef $revRecForecastRule): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setRevenueAllocationGroup(RecordRef $revenueAllocationGroup): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setCreateRevenuePlansOn(RecordRef $createRevenuePlansOn): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setDirectRevenuePosting(bool $directRevenuePosting): LotNumberedInventoryItem
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
     * @param bool $isTaxable
     * @return LotNumberedInventoryItem
     */
    public function setIsTaxable(bool $isTaxable): LotNumberedInventoryItem
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
     * @param RecordRef $assetAccount
     * @return LotNumberedInventoryItem
     */
    public function setAssetAccount(RecordRef $assetAccount): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setMatchBillToReceipt(bool $matchBillToReceipt): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setBillQtyVarianceAcct(RecordRef $billQtyVarianceAcct): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setBillPriceVarianceAcct(RecordRef $billPriceVarianceAcct): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setBillExchRateVarianceAcct(RecordRef $billExchRateVarianceAcct): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setGainLossAccount(RecordRef $gainLossAccount): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setShippingCost(float $shippingCost): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setHandlingCost(float $handlingCost): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setWeight(float $weight): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setCostingMethodDisplay(string $costingMethodDisplay): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setShippingCostUnits(string $shippingCostUnits): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setHandlingCostUnits(string $handlingCostUnits): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setUnitsType(RecordRef $unitsType): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setStockUnit(RecordRef $stockUnit): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setPurchaseUnit(RecordRef $purchaseUnit): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSaleUnit(RecordRef $saleUnit): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setMinimumQuantityUnits(string $minimumQuantityUnits): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSafetyStockLevelUnits(string $safetyStockLevelUnits): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setBillingSchedule(RecordRef $billingSchedule): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setTrackLandedCost(bool $trackLandedCost): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setMatrixItemNameTemplate(string $matrixItemNameTemplate): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setIsDropShipItem(bool $isDropShipItem): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setIsSpecialOrderItem(bool $isSpecialOrderItem): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setStockDescription(string $stockDescription): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setDeferredRevenueAccount(RecordRef $deferredRevenueAccount): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setProducer(bool $producer): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setManufacturer(string $manufacturer): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setMpn(string $mpn): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setMultManufactureAddr(bool $multManufactureAddr): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setManufacturerCity(string $manufacturerCity): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setManufacturerState(string $manufacturerState): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setManufacturerZip(string $manufacturerZip): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setCountryOfManufacture(Country $countryOfManufacture): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setDefaultItemShipMethod(RecordRef $defaultItemShipMethod): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setItemCarrier(ShippingCarrier $itemCarrier): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setRoundUpAsComponent(bool $roundUpAsComponent): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setPurchaseOrderQuantity(float $purchaseOrderQuantity): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setPurchaseOrderAmount(float $purchaseOrderAmount): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setPurchaseOrderQuantityDiff(float $purchaseOrderQuantityDiff): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setReceiptQuantity(float $receiptQuantity): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setReceiptAmount(float $receiptAmount): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setReceiptQuantityDiff(float $receiptQuantityDiff): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setItemShipMethodList(RecordRefList $itemShipMethodList): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setManufacturerTaxId(string $manufacturerTaxId): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setScheduleBNumber(string $scheduleBNumber): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setScheduleBQuantity(int $scheduleBQuantity): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setScheduleBCode(ScheduleBCode $scheduleBCode): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setManufacturerTariff(string $manufacturerTariff): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setPreferenceCriterion(ItemPreferenceCriterion $preferenceCriterion): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setMinimumQuantity(int $minimumQuantity): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setEnforceMinQtyInternally(bool $enforceMinQtyInternally): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setMaximumQuantity(int $maximumQuantity): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setShipPackage(RecordRef $shipPackage): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setShipIndividually(bool $shipIndividually): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSoftDescriptor(RecordRef $softDescriptor): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setCostCategory(RecordRef $costCategory): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setPricesIncludeTax(bool $pricesIncludeTax): LotNumberedInventoryItem
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
     * @param RecordRef $purchasePriceVarianceAcct
     * @return LotNumberedInventoryItem
     */
    public function setPurchasePriceVarianceAcct(RecordRef $purchasePriceVarianceAcct): LotNumberedInventoryItem
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
     * @param RecordRef $quantityPricingSchedule
     * @return LotNumberedInventoryItem
     */
    public function setQuantityPricingSchedule(RecordRef $quantityPricingSchedule): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setUseMarginalRates(bool $useMarginalRates): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setCostEstimate(float $costEstimate): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setTransferPrice(float $transferPrice): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setOverallQuantityPricingType(ItemOverallQuantityPricingType $overallQuantityPricingType): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setPricingGroup(RecordRef $pricingGroup): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setPreferredLocation(RecordRef $preferredLocation): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setIsStorePickupAllowed(bool $isStorePickupAllowed): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setVsoePrice(float $vsoePrice): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setVsoeSopGroup(VsoeSopGroup $vsoeSopGroup): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setVsoeDelivered(bool $vsoeDelivered): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setItemRevenueCategory(RecordRef $itemRevenueCategory): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setCost(float $cost): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setCostUnits(string $costUnits): LotNumberedInventoryItem
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
     * @param int $reorderMultiple
     * @return LotNumberedInventoryItem
     */
    public function setReorderMultiple(int $reorderMultiple): LotNumberedInventoryItem
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
     * @param string $quantityReorderUnits
     * @return LotNumberedInventoryItem
     */
    public function setQuantityReorderUnits(string $quantityReorderUnits): LotNumberedInventoryItem
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
     * @param float $totalValue
     * @return LotNumberedInventoryItem
     */
    public function setTotalValue(float $totalValue): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setUseBins(bool $useBins): LotNumberedInventoryItem
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
     * @param float $averageCost
     * @return LotNumberedInventoryItem
     */
    public function setAverageCost(float $averageCost): LotNumberedInventoryItem
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
     * @param int $leadTime
     * @return LotNumberedInventoryItem
     */
    public function setLeadTime(int $leadTime): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setAutoLeadTime(bool $autoLeadTime): LotNumberedInventoryItem
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
     * @param float $lastPurchasePrice
     * @return LotNumberedInventoryItem
     */
    public function setLastPurchasePrice(float $lastPurchasePrice): LotNumberedInventoryItem
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
     * @param bool $autoReorderPoint
     * @return LotNumberedInventoryItem
     */
    public function setAutoReorderPoint(bool $autoReorderPoint): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setAutoPreferredStockLevel(bool $autoPreferredStockLevel): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setPreferredStockLevelDays(float $preferredStockLevelDays): LotNumberedInventoryItem
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
     * @param float $safetyStockLevel
     * @return LotNumberedInventoryItem
     */
    public function setSafetyStockLevel(float $safetyStockLevel): LotNumberedInventoryItem
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
     * @param int $safetyStockLevelDays
     * @return LotNumberedInventoryItem
     */
    public function setSafetyStockLevelDays(int $safetyStockLevelDays): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setBackwardConsumptionDays(int $backwardConsumptionDays): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSeasonalDemand(bool $seasonalDemand): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setDemandModifier(float $demandModifier): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setStoreDisplayName(string $storeDisplayName): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setStoreDisplayThumbnail(RecordRef $storeDisplayThumbnail): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setWeightUnit(ItemWeightUnit $weightUnit): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setWeightUnits(string $weightUnits): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setStoreDisplayImage(RecordRef $storeDisplayImage): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setStoreDescription(string $storeDescription): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setStoreDetailedDescription(string $storeDetailedDescription): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setStoreItemTemplate(RecordRef $storeItemTemplate): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setPageTitle(string $pageTitle): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setMetaTagHtml(string $metaTagHtml): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setExcludeFromSitemap(bool $excludeFromSitemap): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSitemapPriority(SitemapPriority $sitemapPriority): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSearchKeywords(string $searchKeywords): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setIsDonationItem(bool $isDonationItem): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setShowDefaultDonationAmount(bool $showDefaultDonationAmount): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setMaxDonationAmount(float $maxDonationAmount): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setShoppingDotComCategory(string $shoppingDotComCategory): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setShopzillaCategoryId(int $shopzillaCategoryId): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setNexTagCategory(string $nexTagCategory): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setQuantityOnHand(float $quantityOnHand): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setQuantityOnHandUnits(string $quantityOnHandUnits): LotNumberedInventoryItem
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
     * @param string $expirationDate
     * @return LotNumberedInventoryItem
     */
    public function setExpirationDate(string $expirationDate): LotNumberedInventoryItem
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }

    /**
     * @param string $lastInvtCountDate
     * @return LotNumberedInventoryItem
     */
    public function setLastInvtCountDate(string $lastInvtCountDate): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setNextInvtCountDate(string $nextInvtCountDate): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setInvtCountInterval(int $invtCountInterval): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setInvtClassification(ItemInvtClassification $invtClassification): LotNumberedInventoryItem
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
     * @param float $onHandValueMli
     * @return LotNumberedInventoryItem
     */
    public function setOnHandValueMli(float $onHandValueMli): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSerialNumbers(string $serialNumbers): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setReorderPoint(float $reorderPoint): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setPreferredStockLevel(float $preferredStockLevel): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setReorderPointUnits(string $reorderPointUnits): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setDefaultReturnCost(float $defaultReturnCost): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSupplyReplenishmentMethod(RecordRef $supplyReplenishmentMethod): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setAlternateDemandSourceItem(RecordRef $alternateDemandSourceItem): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setFixedLotSize(float $fixedLotSize): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setPeriodicLotSizeType(PeriodicLotSizeType $periodicLotSizeType): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSupplyType(RecordRef $supplyType): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setDemandTimeFence(int $demandTimeFence): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSupplyTimeFence(int $supplyTimeFence): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setRescheduleInDays(int $rescheduleInDays): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setRescheduleOutDays(int $rescheduleOutDays): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setPeriodicLotSizeDays(int $periodicLotSizeDays): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSupplyLotSizingMethod(RecordRef $supplyLotSizingMethod): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setForwardConsumptionDays(int $forwardConsumptionDays): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setDemandSource(RecordRef $demandSource): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setQuantityOnOrder(float $quantityOnOrder): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setPreferredStockLevelUnits(string $preferredStockLevelUnits): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setQuantityCommitted(float $quantityCommitted): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setQuantityAvailable(float $quantityAvailable): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setQuantityBackOrdered(float $quantityBackOrdered): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setPurchaseTaxCode(RecordRef $purchaseTaxCode): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setRate(float $rate): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSalesTaxCode(RecordRef $salesTaxCode): LotNumberedInventoryItem
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
     * @param bool $dontShowPrice
     * @return LotNumberedInventoryItem
     */
    public function setDontShowPrice(bool $dontShowPrice): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setNoPriceMessage(string $noPriceMessage): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setOutOfStockMessage(string $outOfStockMessage): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setOnSpecial(bool $onSpecial): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setOutOfStockBehavior(ItemOutOfStockBehavior $outOfStockBehavior): LotNumberedInventoryItem
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
     * @param string $specialsDescription
     * @return LotNumberedInventoryItem
     */
    public function setSpecialsDescription(string $specialsDescription): LotNumberedInventoryItem
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
     * @param string $relatedItemsDescription
     * @return LotNumberedInventoryItem
     */
    public function setRelatedItemsDescription(string $relatedItemsDescription): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setFeaturedDescription(string $featuredDescription): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setProductFeedList(ProductFeedList $productFeedList): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setUrlComponent(string $urlComponent): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setItemOptionsList(ItemOptionsList $itemOptionsList): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setMatrixOptionList(MatrixOptionList $matrixOptionList): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setItemVendorList(ItemVendorList $itemVendorList): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setPricingMatrix(PricingMatrix $pricingMatrix): LotNumberedInventoryItem
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
     * @param LotNumberedInventoryItemHierarchyVersionsList $hierarchyVersionsList
     * @return LotNumberedInventoryItem
     */
    public function setHierarchyVersionsList(LotNumberedInventoryItemHierarchyVersionsList $hierarchyVersionsList): LotNumberedInventoryItem
    {
        $this->hierarchyVersionsList = $hierarchyVersionsList;
        return $this;
    }

    /**
     * @return LotNumberedInventoryItemHierarchyVersionsList
     */
    public function getHierarchyVersionsList(): LotNumberedInventoryItemHierarchyVersionsList
    {
        return $this->hierarchyVersionsList;
    }

    /**
     * @param ItemAccountingBookDetailList $accountingBookDetailList
     * @return LotNumberedInventoryItem
     */
    public function setAccountingBookDetailList(ItemAccountingBookDetailList $accountingBookDetailList): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setItemNumberOptionsList(RecordRefList $itemNumberOptionsList): LotNumberedInventoryItem
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
     * @param LotNumberedInventoryItemNumbersList $numbersList
     * @return LotNumberedInventoryItem
     */
    public function setNumbersList(LotNumberedInventoryItemNumbersList $numbersList): LotNumberedInventoryItem
    {
        $this->numbersList = $numbersList;
        return $this;
    }

    /**
     * @return LotNumberedInventoryItemNumbersList
     */
    public function getNumbersList(): LotNumberedInventoryItemNumbersList
    {
        return $this->numbersList;
    }

    /**
     * @param InventoryItemBinNumberList $binNumberList
     * @return LotNumberedInventoryItem
     */
    public function setBinNumberList(InventoryItemBinNumberList $binNumberList): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSiteCategoryList(SiteCategoryList $siteCategoryList): LotNumberedInventoryItem
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
     * @param LotNumberedInventoryItemLocationsList $locationsList
     * @return LotNumberedInventoryItem
     */
    public function setLocationsList(LotNumberedInventoryItemLocationsList $locationsList): LotNumberedInventoryItem
    {
        $this->locationsList = $locationsList;
        return $this;
    }

    /**
     * @return LotNumberedInventoryItemLocationsList
     */
    public function getLocationsList(): LotNumberedInventoryItemLocationsList
    {
        return $this->locationsList;
    }

    /**
     * @param TranslationList $translationsList
     * @return LotNumberedInventoryItem
     */
    public function setTranslationsList(TranslationList $translationsList): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setPresentationItemList(PresentationItemList $presentationItemList): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setFutureHorizon(int $futureHorizon): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setConsumptionUnit(RecordRef $consumptionUnit): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setEnableCatchWeight(bool $enableCatchWeight): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSecondaryUnitsType(RecordRef $secondaryUnitsType): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSecondaryBaseUnit(RecordRef $secondaryBaseUnit): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setConversionRate(float $conversionRate): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSecondaryStockUnit(RecordRef $secondaryStockUnit): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSecondarySaleUnit(RecordRef $secondarySaleUnit): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSecondaryPurchaseUnit(RecordRef $secondaryPurchaseUnit): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setSecondaryConsumptionUnit(RecordRef $secondaryConsumptionUnit): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setLowerWarningLimit(float $lowerWarningLimit): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setUpperWarningLimit(float $upperWarningLimit): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setInternalId(string $internalId): LotNumberedInventoryItem
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
     * @return LotNumberedInventoryItem
     */
    public function setExternalId(string $externalId): LotNumberedInventoryItem
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
