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

class InventoryItem extends Record {
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
     * @var RecordRef
     */
    protected RecordRef $expenseAccount;

    /**
     * @var string
     */
    protected string $dateConvertedToInv;

    /**
     * @var ItemType
     */
    protected ItemType $originalItemType;

    /**
     * @var ItemSubType
     */
    protected ItemSubType $originalItemSubtype;

    /**
     * @var RecordRef
     */
    protected RecordRef $cogsAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $intercoCogsAccount;

    /**
     * @var string
     */
    protected string $salesDescription;

    /**
     * @var InventoryItemFraudRisk
     */
    protected InventoryItemFraudRisk $fraudRisk;

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
    protected bool $contingentRevenueHandling;

    /**
     * @var RecordRef
     */
    protected RecordRef $revReclassFXAccount;

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
    protected string $costingMethodDisplay;

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
     * @var RecordRef
     */
    protected RecordRef $issueProduct;

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
     * @var RecordRef
     */
    protected RecordRef $intercoDefRevAccount;

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
    protected string $minimumQuantityUnits;

    /**
     * @var RecordRef
     */
    protected RecordRef $softDescriptor;

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
     * @var string
     */
    protected string $reorderPointUnits;

    /**
     * @var bool
     */
    protected bool $useMarginalRates;

    /**
     * @var string
     */
    protected string $preferredStockLevelUnits;

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
     * @var float
     */
    protected float $vsoePrice;

    /**
     * @var VsoeSopGroup
     */
    protected VsoeSopGroup $vsoeSopGroup;

    /**
     * @var string
     */
    protected string $costEstimateUnits;

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
     * @var RecordRef
     */
    protected RecordRef $preferredLocation;

    /**
     * @var bool
     */
    protected bool $isStorePickupAllowed;

    /**
     * @var int
     */
    protected int $reorderMultiple;

    /**
     * @var float
     */
    protected float $cost;

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
     * @var string
     */
    protected string $costUnits;

    /**
     * @var float
     */
    protected float $totalValue;

    /**
     * @var float
     */
    protected float $averageCost;

    /**
     * @var bool
     */
    protected bool $useBins;

    /**
     * @var string
     */
    protected string $quantityReorderUnits;

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
     * @var string
     */
    protected string $safetyStockLevelUnits;

    /**
     * @var float
     */
    protected float $demandModifier;

    /**
     * @var RecordRef
     */
    protected RecordRef $distributionNetwork;

    /**
     * @var RecordRef
     */
    protected RecordRef $distributionCategory;

    /**
     * @var bool
     */
    protected bool $autoReorderPoint;

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
     * @var string
     */
    protected string $currency;

    /**
     * @var float
     */
    protected float $preferredStockLevel;

    /**
     * @var PricingMatrix
     */
    protected PricingMatrix $pricingMatrix;

    /**
     * @var InventoryItemHierarchyVersionsList
     */
    protected InventoryItemHierarchyVersionsList $hierarchyVersionsList;

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
    protected float $quantityBackOrdered;

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
    protected float $quantityOnHand;

    /**
     * @var float
     */
    protected float $onHandValueMli;

    /**
     * @var float
     */
    protected float $quantityOnOrder;

    /**
     * @var float
     */
    protected float $rate;

    /**
     * @var float
     */
    protected float $reorderPoint;

    /**
     * @var string
     */
    protected string $quantityCommittedUnits;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesTaxCode;

    /**
     * @var string
     */
    protected string $quantityAvailableUnits;

    /**
     * @var string
     */
    protected string $quantityOnHandUnits;

    /**
     * @var RecordRef
     */
    protected RecordRef $vendor;

    /**
     * @var string
     */
    protected string $quantityOnOrderUnits;

    /**
     * @var ProductFeedList
     */
    protected ProductFeedList $productFeedList;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $subsidiaryList;

    /**
     * @var ItemOptionsList
     */
    protected ItemOptionsList $itemOptionsList;

    /**
     * @var ItemVendorList
     */
    protected ItemVendorList $itemVendorList;

    /**
     * @var SiteCategoryList
     */
    protected SiteCategoryList $siteCategoryList;

    /**
     * @var TranslationList
     */
    protected TranslationList $translationsList;

    /**
     * @var InventoryItemBinNumberList
     */
    protected InventoryItemBinNumberList $binNumberList;

    /**
     * @var InventoryItemLocationsList
     */
    protected InventoryItemLocationsList $locationsList;

    /**
     * @var MatrixOptionList
     */
    protected MatrixOptionList $matrixOptionList;

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
        "purchaseDescription" => "string",
        "copyDescription" => "boolean",
        "expenseAccount" => "RecordRef",
        "dateConvertedToInv" => "dateTime",
        "originalItemType" => "ItemType",
        "originalItemSubtype" => "ItemSubType",
        "cogsAccount" => "RecordRef",
        "intercoCogsAccount" => "RecordRef",
        "salesDescription" => "string",
        "fraudRisk" => "InventoryItemFraudRisk",
        "includeChildren" => "boolean",
        "incomeAccount" => "RecordRef",
        "intercoIncomeAccount" => "RecordRef",
        "taxSchedule" => "RecordRef",
        "dropshipExpenseAccount" => "RecordRef",
        "deferRevRec" => "boolean",
        "revenueRecognitionRule" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "revenueAllocationGroup" => "RecordRef",
        "createRevenuePlansOn" => "RecordRef",
        "directRevenuePosting" => "boolean",
        "contingentRevenueHandling" => "boolean",
        "revReclassFXAccount" => "RecordRef",
        "isTaxable" => "boolean",
        "matrixType" => "ItemMatrixType",
        "assetAccount" => "RecordRef",
        "matchBillToReceipt" => "boolean",
        "billQtyVarianceAcct" => "RecordRef",
        "billPriceVarianceAcct" => "RecordRef",
        "billExchRateVarianceAcct" => "RecordRef",
        "gainLossAccount" => "RecordRef",
        "shippingCost" => "float",
        "shippingCostUnits" => "string",
        "handlingCost" => "float",
        "handlingCostUnits" => "string",
        "weight" => "float",
        "weightUnit" => "ItemWeightUnit",
        "weightUnits" => "string",
        "costingMethodDisplay" => "string",
        "unitsType" => "RecordRef",
        "stockUnit" => "RecordRef",
        "purchaseUnit" => "RecordRef",
        "saleUnit" => "RecordRef",
        "issueProduct" => "RecordRef",
        "billingSchedule" => "RecordRef",
        "trackLandedCost" => "boolean",
        "matrixItemNameTemplate" => "string",
        "isDropShipItem" => "boolean",
        "isSpecialOrderItem" => "boolean",
        "stockDescription" => "string",
        "deferredRevenueAccount" => "RecordRef",
        "intercoDefRevAccount" => "RecordRef",
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
        "roundUpAsComponent" => "boolean",
        "purchaseOrderQuantity" => "float",
        "purchaseOrderAmount" => "float",
        "purchaseOrderQuantityDiff" => "float",
        "receiptQuantity" => "float",
        "receiptAmount" => "float",
        "receiptQuantityDiff" => "float",
        "defaultItemShipMethod" => "RecordRef",
        "itemCarrier" => "ShippingCarrier",
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
        "minimumQuantityUnits" => "string",
        "softDescriptor" => "RecordRef",
        "shipPackage" => "RecordRef",
        "shipIndividually" => "boolean",
        "costCategory" => "RecordRef",
        "pricesIncludeTax" => "boolean",
        "purchasePriceVarianceAcct" => "RecordRef",
        "quantityPricingSchedule" => "RecordRef",
        "reorderPointUnits" => "string",
        "useMarginalRates" => "boolean",
        "preferredStockLevelUnits" => "string",
        "costEstimateType" => "ItemCostEstimateType",
        "costEstimate" => "float",
        "transferPrice" => "float",
        "overallQuantityPricingType" => "ItemOverallQuantityPricingType",
        "pricingGroup" => "RecordRef",
        "vsoePrice" => "float",
        "vsoeSopGroup" => "VsoeSopGroup",
        "costEstimateUnits" => "string",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "itemRevenueCategory" => "RecordRef",
        "preferredLocation" => "RecordRef",
        "isStorePickupAllowed" => "boolean",
        "reorderMultiple" => "integer",
        "cost" => "float",
        "lastInvtCountDate" => "dateTime",
        "nextInvtCountDate" => "dateTime",
        "invtCountInterval" => "integer",
        "invtClassification" => "ItemInvtClassification",
        "costUnits" => "string",
        "totalValue" => "float",
        "averageCost" => "float",
        "useBins" => "boolean",
        "quantityReorderUnits" => "string",
        "leadTime" => "integer",
        "autoLeadTime" => "boolean",
        "lastPurchasePrice" => "float",
        "autoPreferredStockLevel" => "boolean",
        "preferredStockLevelDays" => "float",
        "safetyStockLevel" => "float",
        "safetyStockLevelDays" => "integer",
        "backwardConsumptionDays" => "integer",
        "seasonalDemand" => "boolean",
        "safetyStockLevelUnits" => "string",
        "demandModifier" => "float",
        "distributionNetwork" => "RecordRef",
        "distributionCategory" => "RecordRef",
        "autoReorderPoint" => "boolean",
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
        "availableToPartners" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "costingMethod" => "ItemCostingMethod",
        "currency" => "string",
        "preferredStockLevel" => "float",
        "pricingMatrix" => "PricingMatrix",
        "hierarchyVersionsList" => "InventoryItemHierarchyVersionsList",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "purchaseTaxCode" => "RecordRef",
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
        "quantityBackOrdered" => "float",
        "quantityCommitted" => "float",
        "quantityAvailable" => "float",
        "quantityOnHand" => "float",
        "onHandValueMli" => "float",
        "quantityOnOrder" => "float",
        "rate" => "float",
        "reorderPoint" => "float",
        "quantityCommittedUnits" => "string",
        "salesTaxCode" => "RecordRef",
        "quantityAvailableUnits" => "string",
        "quantityOnHandUnits" => "string",
        "vendor" => "RecordRef",
        "quantityOnOrderUnits" => "string",
        "productFeedList" => "ProductFeedList",
        "subsidiaryList" => "RecordRefList",
        "itemOptionsList" => "ItemOptionsList",
        "itemVendorList" => "ItemVendorList",
        "siteCategoryList" => "SiteCategoryList",
        "translationsList" => "TranslationList",
        "binNumberList" => "InventoryItemBinNumberList",
        "locationsList" => "InventoryItemLocationsList",
        "matrixOptionList" => "MatrixOptionList",
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
     * @return InventoryItem
     */
    public function setCreatedDate(string $createdDate): InventoryItem
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
     * @return InventoryItem
     */
    public function setLastModifiedDate(string $lastModifiedDate): InventoryItem
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
     * @return InventoryItem
     */
    public function setPurchaseDescription(string $purchaseDescription): InventoryItem
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
     * @return InventoryItem
     */
    public function setCopyDescription(bool $copyDescription): InventoryItem
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
     * @param RecordRef $expenseAccount
     * @return InventoryItem
     */
    public function setExpenseAccount(RecordRef $expenseAccount): InventoryItem
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
     * @param string $dateConvertedToInv
     * @return InventoryItem
     */
    public function setDateConvertedToInv(string $dateConvertedToInv): InventoryItem
    {
        $this->dateConvertedToInv = $dateConvertedToInv;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateConvertedToInv(): string
    {
        return $this->dateConvertedToInv;
    }

    /**
     * @param ItemType $originalItemType
     * @return InventoryItem
     */
    public function setOriginalItemType(ItemType $originalItemType): InventoryItem
    {
        $this->originalItemType = $originalItemType;
        return $this;
    }

    /**
     * @return ItemType
     */
    public function getOriginalItemType(): ItemType
    {
        return $this->originalItemType;
    }

    /**
     * @param ItemSubType $originalItemSubtype
     * @return InventoryItem
     */
    public function setOriginalItemSubtype(ItemSubType $originalItemSubtype): InventoryItem
    {
        $this->originalItemSubtype = $originalItemSubtype;
        return $this;
    }

    /**
     * @return ItemSubType
     */
    public function getOriginalItemSubtype(): ItemSubType
    {
        return $this->originalItemSubtype;
    }

    /**
     * @param RecordRef $cogsAccount
     * @return InventoryItem
     */
    public function setCogsAccount(RecordRef $cogsAccount): InventoryItem
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
     * @return InventoryItem
     */
    public function setIntercoCogsAccount(RecordRef $intercoCogsAccount): InventoryItem
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
     * @param string $salesDescription
     * @return InventoryItem
     */
    public function setSalesDescription(string $salesDescription): InventoryItem
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
     * @param InventoryItemFraudRisk $fraudRisk
     * @return InventoryItem
     */
    public function setFraudRisk(InventoryItemFraudRisk $fraudRisk): InventoryItem
    {
        $this->fraudRisk = $fraudRisk;
        return $this;
    }

    /**
     * @return InventoryItemFraudRisk
     */
    public function getFraudRisk(): InventoryItemFraudRisk
    {
        return $this->fraudRisk;
    }

    /**
     * @param bool $includeChildren
     * @return InventoryItem
     */
    public function setIncludeChildren(bool $includeChildren): InventoryItem
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
     * @return InventoryItem
     */
    public function setIncomeAccount(RecordRef $incomeAccount): InventoryItem
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
     * @return InventoryItem
     */
    public function setIntercoIncomeAccount(RecordRef $intercoIncomeAccount): InventoryItem
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
     * @param RecordRef $taxSchedule
     * @return InventoryItem
     */
    public function setTaxSchedule(RecordRef $taxSchedule): InventoryItem
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
     * @return InventoryItem
     */
    public function setDropshipExpenseAccount(RecordRef $dropshipExpenseAccount): InventoryItem
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
     * @return InventoryItem
     */
    public function setDeferRevRec(bool $deferRevRec): InventoryItem
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
     * @return InventoryItem
     */
    public function setRevenueRecognitionRule(RecordRef $revenueRecognitionRule): InventoryItem
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
     * @return InventoryItem
     */
    public function setRevRecForecastRule(RecordRef $revRecForecastRule): InventoryItem
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
     * @return InventoryItem
     */
    public function setRevenueAllocationGroup(RecordRef $revenueAllocationGroup): InventoryItem
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
     * @return InventoryItem
     */
    public function setCreateRevenuePlansOn(RecordRef $createRevenuePlansOn): InventoryItem
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
     * @return InventoryItem
     */
    public function setDirectRevenuePosting(bool $directRevenuePosting): InventoryItem
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
     * @return InventoryItem
     */
    public function setContingentRevenueHandling(bool $contingentRevenueHandling): InventoryItem
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
     * @return InventoryItem
     */
    public function setRevReclassFXAccount(RecordRef $revReclassFXAccount): InventoryItem
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
     * @param bool $isTaxable
     * @return InventoryItem
     */
    public function setIsTaxable(bool $isTaxable): InventoryItem
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
     * @return InventoryItem
     */
    public function setMatrixType(ItemMatrixType $matrixType): InventoryItem
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
     * @param RecordRef $assetAccount
     * @return InventoryItem
     */
    public function setAssetAccount(RecordRef $assetAccount): InventoryItem
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
     * @return InventoryItem
     */
    public function setMatchBillToReceipt(bool $matchBillToReceipt): InventoryItem
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
     * @return InventoryItem
     */
    public function setBillQtyVarianceAcct(RecordRef $billQtyVarianceAcct): InventoryItem
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
     * @return InventoryItem
     */
    public function setBillPriceVarianceAcct(RecordRef $billPriceVarianceAcct): InventoryItem
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
     * @return InventoryItem
     */
    public function setBillExchRateVarianceAcct(RecordRef $billExchRateVarianceAcct): InventoryItem
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
     * @return InventoryItem
     */
    public function setGainLossAccount(RecordRef $gainLossAccount): InventoryItem
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
     * @return InventoryItem
     */
    public function setShippingCost(float $shippingCost): InventoryItem
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
     * @return InventoryItem
     */
    public function setShippingCostUnits(string $shippingCostUnits): InventoryItem
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
     * @return InventoryItem
     */
    public function setHandlingCost(float $handlingCost): InventoryItem
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
     * @return InventoryItem
     */
    public function setHandlingCostUnits(string $handlingCostUnits): InventoryItem
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
     * @param float $weight
     * @return InventoryItem
     */
    public function setWeight(float $weight): InventoryItem
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
     * @return InventoryItem
     */
    public function setWeightUnit(ItemWeightUnit $weightUnit): InventoryItem
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
     * @return InventoryItem
     */
    public function setWeightUnits(string $weightUnits): InventoryItem
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
     * @param string $costingMethodDisplay
     * @return InventoryItem
     */
    public function setCostingMethodDisplay(string $costingMethodDisplay): InventoryItem
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
     * @param RecordRef $unitsType
     * @return InventoryItem
     */
    public function setUnitsType(RecordRef $unitsType): InventoryItem
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
     * @return InventoryItem
     */
    public function setStockUnit(RecordRef $stockUnit): InventoryItem
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
     * @return InventoryItem
     */
    public function setPurchaseUnit(RecordRef $purchaseUnit): InventoryItem
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
     * @return InventoryItem
     */
    public function setSaleUnit(RecordRef $saleUnit): InventoryItem
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
     * @return InventoryItem
     */
    public function setIssueProduct(RecordRef $issueProduct): InventoryItem
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
     * @return InventoryItem
     */
    public function setBillingSchedule(RecordRef $billingSchedule): InventoryItem
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
     * @return InventoryItem
     */
    public function setTrackLandedCost(bool $trackLandedCost): InventoryItem
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
     * @return InventoryItem
     */
    public function setMatrixItemNameTemplate(string $matrixItemNameTemplate): InventoryItem
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
     * @return InventoryItem
     */
    public function setIsDropShipItem(bool $isDropShipItem): InventoryItem
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
     * @return InventoryItem
     */
    public function setIsSpecialOrderItem(bool $isSpecialOrderItem): InventoryItem
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
     * @return InventoryItem
     */
    public function setStockDescription(string $stockDescription): InventoryItem
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
     * @return InventoryItem
     */
    public function setDeferredRevenueAccount(RecordRef $deferredRevenueAccount): InventoryItem
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
     * @return InventoryItem
     */
    public function setIntercoDefRevAccount(RecordRef $intercoDefRevAccount): InventoryItem
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
     * @param bool $producer
     * @return InventoryItem
     */
    public function setProducer(bool $producer): InventoryItem
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
     * @return InventoryItem
     */
    public function setManufacturer(string $manufacturer): InventoryItem
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
     * @return InventoryItem
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): InventoryItem
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
     * @return InventoryItem
     */
    public function setMpn(string $mpn): InventoryItem
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
     * @return InventoryItem
     */
    public function setMultManufactureAddr(bool $multManufactureAddr): InventoryItem
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
     * @return InventoryItem
     */
    public function setManufacturerCity(string $manufacturerCity): InventoryItem
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
     * @return InventoryItem
     */
    public function setManufacturerState(string $manufacturerState): InventoryItem
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
     * @return InventoryItem
     */
    public function setManufacturerZip(string $manufacturerZip): InventoryItem
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
     * @return InventoryItem
     */
    public function setCountryOfManufacture(Country $countryOfManufacture): InventoryItem
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
     * @param bool $roundUpAsComponent
     * @return InventoryItem
     */
    public function setRoundUpAsComponent(bool $roundUpAsComponent): InventoryItem
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
     * @return InventoryItem
     */
    public function setPurchaseOrderQuantity(float $purchaseOrderQuantity): InventoryItem
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
     * @return InventoryItem
     */
    public function setPurchaseOrderAmount(float $purchaseOrderAmount): InventoryItem
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
     * @return InventoryItem
     */
    public function setPurchaseOrderQuantityDiff(float $purchaseOrderQuantityDiff): InventoryItem
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
     * @return InventoryItem
     */
    public function setReceiptQuantity(float $receiptQuantity): InventoryItem
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
     * @return InventoryItem
     */
    public function setReceiptAmount(float $receiptAmount): InventoryItem
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
     * @return InventoryItem
     */
    public function setReceiptQuantityDiff(float $receiptQuantityDiff): InventoryItem
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
     * @param RecordRef $defaultItemShipMethod
     * @return InventoryItem
     */
    public function setDefaultItemShipMethod(RecordRef $defaultItemShipMethod): InventoryItem
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
     * @return InventoryItem
     */
    public function setItemCarrier(ShippingCarrier $itemCarrier): InventoryItem
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
     * @return InventoryItem
     */
    public function setItemShipMethodList(RecordRefList $itemShipMethodList): InventoryItem
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
     * @return InventoryItem
     */
    public function setManufacturerTaxId(string $manufacturerTaxId): InventoryItem
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
     * @return InventoryItem
     */
    public function setScheduleBNumber(string $scheduleBNumber): InventoryItem
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
     * @return InventoryItem
     */
    public function setScheduleBQuantity(int $scheduleBQuantity): InventoryItem
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
     * @return InventoryItem
     */
    public function setScheduleBCode(ScheduleBCode $scheduleBCode): InventoryItem
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
     * @return InventoryItem
     */
    public function setManufacturerTariff(string $manufacturerTariff): InventoryItem
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
     * @return InventoryItem
     */
    public function setPreferenceCriterion(ItemPreferenceCriterion $preferenceCriterion): InventoryItem
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
     * @return InventoryItem
     */
    public function setMinimumQuantity(int $minimumQuantity): InventoryItem
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
     * @return InventoryItem
     */
    public function setEnforceMinQtyInternally(bool $enforceMinQtyInternally): InventoryItem
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
     * @return InventoryItem
     */
    public function setMaximumQuantity(int $maximumQuantity): InventoryItem
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
     * @param string $minimumQuantityUnits
     * @return InventoryItem
     */
    public function setMinimumQuantityUnits(string $minimumQuantityUnits): InventoryItem
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
     * @param RecordRef $softDescriptor
     * @return InventoryItem
     */
    public function setSoftDescriptor(RecordRef $softDescriptor): InventoryItem
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
     * @param RecordRef $shipPackage
     * @return InventoryItem
     */
    public function setShipPackage(RecordRef $shipPackage): InventoryItem
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
     * @return InventoryItem
     */
    public function setShipIndividually(bool $shipIndividually): InventoryItem
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
     * @param RecordRef $costCategory
     * @return InventoryItem
     */
    public function setCostCategory(RecordRef $costCategory): InventoryItem
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
     * @return InventoryItem
     */
    public function setPricesIncludeTax(bool $pricesIncludeTax): InventoryItem
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
     * @return InventoryItem
     */
    public function setPurchasePriceVarianceAcct(RecordRef $purchasePriceVarianceAcct): InventoryItem
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
     * @return InventoryItem
     */
    public function setQuantityPricingSchedule(RecordRef $quantityPricingSchedule): InventoryItem
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
     * @param string $reorderPointUnits
     * @return InventoryItem
     */
    public function setReorderPointUnits(string $reorderPointUnits): InventoryItem
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
     * @param bool $useMarginalRates
     * @return InventoryItem
     */
    public function setUseMarginalRates(bool $useMarginalRates): InventoryItem
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
     * @param string $preferredStockLevelUnits
     * @return InventoryItem
     */
    public function setPreferredStockLevelUnits(string $preferredStockLevelUnits): InventoryItem
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
     * @param ItemCostEstimateType $costEstimateType
     * @return InventoryItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType): InventoryItem
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
     * @return InventoryItem
     */
    public function setCostEstimate(float $costEstimate): InventoryItem
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
     * @return InventoryItem
     */
    public function setTransferPrice(float $transferPrice): InventoryItem
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
     * @return InventoryItem
     */
    public function setOverallQuantityPricingType(ItemOverallQuantityPricingType $overallQuantityPricingType): InventoryItem
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
     * @return InventoryItem
     */
    public function setPricingGroup(RecordRef $pricingGroup): InventoryItem
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
     * @param float $vsoePrice
     * @return InventoryItem
     */
    public function setVsoePrice(float $vsoePrice): InventoryItem
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
     * @return InventoryItem
     */
    public function setVsoeSopGroup(VsoeSopGroup $vsoeSopGroup): InventoryItem
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
     * @param string $costEstimateUnits
     * @return InventoryItem
     */
    public function setCostEstimateUnits(string $costEstimateUnits): InventoryItem
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
     * @param VsoeDeferral $vsoeDeferral
     * @return InventoryItem
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral): InventoryItem
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
     * @return InventoryItem
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount): InventoryItem
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
     * @return InventoryItem
     */
    public function setVsoeDelivered(bool $vsoeDelivered): InventoryItem
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
     * @return InventoryItem
     */
    public function setItemRevenueCategory(RecordRef $itemRevenueCategory): InventoryItem
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
     * @param RecordRef $preferredLocation
     * @return InventoryItem
     */
    public function setPreferredLocation(RecordRef $preferredLocation): InventoryItem
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
     * @return InventoryItem
     */
    public function setIsStorePickupAllowed(bool $isStorePickupAllowed): InventoryItem
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
     * @param int $reorderMultiple
     * @return InventoryItem
     */
    public function setReorderMultiple(int $reorderMultiple): InventoryItem
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
     * @param float $cost
     * @return InventoryItem
     */
    public function setCost(float $cost): InventoryItem
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
     * @param string $lastInvtCountDate
     * @return InventoryItem
     */
    public function setLastInvtCountDate(string $lastInvtCountDate): InventoryItem
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
     * @return InventoryItem
     */
    public function setNextInvtCountDate(string $nextInvtCountDate): InventoryItem
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
     * @return InventoryItem
     */
    public function setInvtCountInterval(int $invtCountInterval): InventoryItem
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
     * @return InventoryItem
     */
    public function setInvtClassification(ItemInvtClassification $invtClassification): InventoryItem
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
     * @param string $costUnits
     * @return InventoryItem
     */
    public function setCostUnits(string $costUnits): InventoryItem
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
     * @param float $totalValue
     * @return InventoryItem
     */
    public function setTotalValue(float $totalValue): InventoryItem
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
     * @param float $averageCost
     * @return InventoryItem
     */
    public function setAverageCost(float $averageCost): InventoryItem
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
     * @param bool $useBins
     * @return InventoryItem
     */
    public function setUseBins(bool $useBins): InventoryItem
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
     * @param string $quantityReorderUnits
     * @return InventoryItem
     */
    public function setQuantityReorderUnits(string $quantityReorderUnits): InventoryItem
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
     * @param int $leadTime
     * @return InventoryItem
     */
    public function setLeadTime(int $leadTime): InventoryItem
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
     * @return InventoryItem
     */
    public function setAutoLeadTime(bool $autoLeadTime): InventoryItem
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
     * @return InventoryItem
     */
    public function setLastPurchasePrice(float $lastPurchasePrice): InventoryItem
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
     * @param bool $autoPreferredStockLevel
     * @return InventoryItem
     */
    public function setAutoPreferredStockLevel(bool $autoPreferredStockLevel): InventoryItem
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
     * @return InventoryItem
     */
    public function setPreferredStockLevelDays(float $preferredStockLevelDays): InventoryItem
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
     * @return InventoryItem
     */
    public function setSafetyStockLevel(float $safetyStockLevel): InventoryItem
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
     * @return InventoryItem
     */
    public function setSafetyStockLevelDays(int $safetyStockLevelDays): InventoryItem
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
     * @return InventoryItem
     */
    public function setBackwardConsumptionDays(int $backwardConsumptionDays): InventoryItem
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
     * @return InventoryItem
     */
    public function setSeasonalDemand(bool $seasonalDemand): InventoryItem
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
     * @param string $safetyStockLevelUnits
     * @return InventoryItem
     */
    public function setSafetyStockLevelUnits(string $safetyStockLevelUnits): InventoryItem
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
     * @param float $demandModifier
     * @return InventoryItem
     */
    public function setDemandModifier(float $demandModifier): InventoryItem
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
     * @param RecordRef $distributionNetwork
     * @return InventoryItem
     */
    public function setDistributionNetwork(RecordRef $distributionNetwork): InventoryItem
    {
        $this->distributionNetwork = $distributionNetwork;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDistributionNetwork(): RecordRef
    {
        return $this->distributionNetwork;
    }

    /**
     * @param RecordRef $distributionCategory
     * @return InventoryItem
     */
    public function setDistributionCategory(RecordRef $distributionCategory): InventoryItem
    {
        $this->distributionCategory = $distributionCategory;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDistributionCategory(): RecordRef
    {
        return $this->distributionCategory;
    }

    /**
     * @param bool $autoReorderPoint
     * @return InventoryItem
     */
    public function setAutoReorderPoint(bool $autoReorderPoint): InventoryItem
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
     * @param string $storeDisplayName
     * @return InventoryItem
     */
    public function setStoreDisplayName(string $storeDisplayName): InventoryItem
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
     * @return InventoryItem
     */
    public function setStoreDisplayThumbnail(RecordRef $storeDisplayThumbnail): InventoryItem
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
     * @return InventoryItem
     */
    public function setStoreDisplayImage(RecordRef $storeDisplayImage): InventoryItem
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
     * @return InventoryItem
     */
    public function setStoreDescription(string $storeDescription): InventoryItem
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
     * @return InventoryItem
     */
    public function setStoreDetailedDescription(string $storeDetailedDescription): InventoryItem
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
     * @return InventoryItem
     */
    public function setStoreItemTemplate(RecordRef $storeItemTemplate): InventoryItem
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
     * @return InventoryItem
     */
    public function setPageTitle(string $pageTitle): InventoryItem
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
     * @return InventoryItem
     */
    public function setMetaTagHtml(string $metaTagHtml): InventoryItem
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
     * @return InventoryItem
     */
    public function setExcludeFromSitemap(bool $excludeFromSitemap): InventoryItem
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
     * @return InventoryItem
     */
    public function setSitemapPriority(SitemapPriority $sitemapPriority): InventoryItem
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
     * @return InventoryItem
     */
    public function setSearchKeywords(string $searchKeywords): InventoryItem
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
     * @return InventoryItem
     */
    public function setIsDonationItem(bool $isDonationItem): InventoryItem
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
     * @return InventoryItem
     */
    public function setShowDefaultDonationAmount(bool $showDefaultDonationAmount): InventoryItem
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
     * @return InventoryItem
     */
    public function setMaxDonationAmount(float $maxDonationAmount): InventoryItem
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
     * @return InventoryItem
     */
    public function setDontShowPrice(bool $dontShowPrice): InventoryItem
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
     * @return InventoryItem
     */
    public function setNoPriceMessage(string $noPriceMessage): InventoryItem
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
     * @return InventoryItem
     */
    public function setOutOfStockMessage(string $outOfStockMessage): InventoryItem
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
     * @return InventoryItem
     */
    public function setOnSpecial(bool $onSpecial): InventoryItem
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
     * @return InventoryItem
     */
    public function setOutOfStockBehavior(ItemOutOfStockBehavior $outOfStockBehavior): InventoryItem
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
     * @return InventoryItem
     */
    public function setRelatedItemsDescription(string $relatedItemsDescription): InventoryItem
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
     * @return InventoryItem
     */
    public function setSpecialsDescription(string $specialsDescription): InventoryItem
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
     * @return InventoryItem
     */
    public function setFeaturedDescription(string $featuredDescription): InventoryItem
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
     * @return InventoryItem
     */
    public function setShoppingDotComCategory(string $shoppingDotComCategory): InventoryItem
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
     * @return InventoryItem
     */
    public function setShopzillaCategoryId(int $shopzillaCategoryId): InventoryItem
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
     * @return InventoryItem
     */
    public function setNexTagCategory(string $nexTagCategory): InventoryItem
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
     * @param string $urlComponent
     * @return InventoryItem
     */
    public function setUrlComponent(string $urlComponent): InventoryItem
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
     * @return InventoryItem
     */
    public function setCustomForm(RecordRef $customForm): InventoryItem
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
     * @return InventoryItem
     */
    public function setItemId(string $itemId): InventoryItem
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
     * @return InventoryItem
     */
    public function setUpcCode(string $upcCode): InventoryItem
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
     * @return InventoryItem
     */
    public function setDisplayName(string $displayName): InventoryItem
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
     * @return InventoryItem
     */
    public function setVendorName(string $vendorName): InventoryItem
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
     * @return InventoryItem
     */
    public function setParent(RecordRef $parent): InventoryItem
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
     * @return InventoryItem
     */
    public function setIsOnline(bool $isOnline): InventoryItem
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
     * @return InventoryItem
     */
    public function setIsHazmatItem(bool $isHazmatItem): InventoryItem
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
     * @return InventoryItem
     */
    public function setHazmatId(string $hazmatId): InventoryItem
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
     * @return InventoryItem
     */
    public function setHazmatShippingName(string $hazmatShippingName): InventoryItem
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
     * @return InventoryItem
     */
    public function setHazmatHazardClass(string $hazmatHazardClass): InventoryItem
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
     * @return InventoryItem
     */
    public function setHazmatPackingGroup(HazmatPackingGroup $hazmatPackingGroup): InventoryItem
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
     * @return InventoryItem
     */
    public function setHazmatItemUnits(string $hazmatItemUnits): InventoryItem
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
     * @return InventoryItem
     */
    public function setHazmatItemUnitsQty(float $hazmatItemUnitsQty): InventoryItem
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
     * @return InventoryItem
     */
    public function setIsGcoCompliant(bool $isGcoCompliant): InventoryItem
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
     * @return InventoryItem
     */
    public function setOfferSupport(bool $offerSupport): InventoryItem
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
     * @return InventoryItem
     */
    public function setIsInactive(bool $isInactive): InventoryItem
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
     * @return InventoryItem
     */
    public function setAvailableToPartners(bool $availableToPartners): InventoryItem
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
     * @return InventoryItem
     */
    public function setDepartment(RecordRef $department): InventoryItem
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
     * @return InventoryItem
     */
    public function setClass(RecordRef $class): InventoryItem
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
     * @return InventoryItem
     */
    public function setLocation(RecordRef $location): InventoryItem
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
     * @return InventoryItem
     */
    public function setCostingMethod(ItemCostingMethod $costingMethod): InventoryItem
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
     * @param string $currency
     * @return InventoryItem
     */
    public function setCurrency(string $currency): InventoryItem
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
     * @param float $preferredStockLevel
     * @return InventoryItem
     */
    public function setPreferredStockLevel(float $preferredStockLevel): InventoryItem
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
     * @param PricingMatrix $pricingMatrix
     * @return InventoryItem
     */
    public function setPricingMatrix(PricingMatrix $pricingMatrix): InventoryItem
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
     * @param InventoryItemHierarchyVersionsList $hierarchyVersionsList
     * @return InventoryItem
     */
    public function setHierarchyVersionsList(InventoryItemHierarchyVersionsList $hierarchyVersionsList): InventoryItem
    {
        $this->hierarchyVersionsList = $hierarchyVersionsList;
        return $this;
    }

    /**
     * @return InventoryItemHierarchyVersionsList
     */
    public function getHierarchyVersionsList(): InventoryItemHierarchyVersionsList
    {
        return $this->hierarchyVersionsList;
    }

    /**
     * @param ItemAccountingBookDetailList $accountingBookDetailList
     * @return InventoryItem
     */
    public function setAccountingBookDetailList(ItemAccountingBookDetailList $accountingBookDetailList): InventoryItem
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
     * @return InventoryItem
     */
    public function setPurchaseTaxCode(RecordRef $purchaseTaxCode): InventoryItem
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
     * @param float $defaultReturnCost
     * @return InventoryItem
     */
    public function setDefaultReturnCost(float $defaultReturnCost): InventoryItem
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
     * @return InventoryItem
     */
    public function setSupplyReplenishmentMethod(RecordRef $supplyReplenishmentMethod): InventoryItem
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
     * @return InventoryItem
     */
    public function setAlternateDemandSourceItem(RecordRef $alternateDemandSourceItem): InventoryItem
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
     * @return InventoryItem
     */
    public function setFixedLotSize(float $fixedLotSize): InventoryItem
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
     * @return InventoryItem
     */
    public function setPeriodicLotSizeType(PeriodicLotSizeType $periodicLotSizeType): InventoryItem
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
     * @return InventoryItem
     */
    public function setSupplyType(RecordRef $supplyType): InventoryItem
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
     * @return InventoryItem
     */
    public function setDemandTimeFence(int $demandTimeFence): InventoryItem
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
     * @return InventoryItem
     */
    public function setSupplyTimeFence(int $supplyTimeFence): InventoryItem
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
     * @return InventoryItem
     */
    public function setRescheduleInDays(int $rescheduleInDays): InventoryItem
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
     * @return InventoryItem
     */
    public function setRescheduleOutDays(int $rescheduleOutDays): InventoryItem
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
     * @return InventoryItem
     */
    public function setPeriodicLotSizeDays(int $periodicLotSizeDays): InventoryItem
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
     * @return InventoryItem
     */
    public function setSupplyLotSizingMethod(RecordRef $supplyLotSizingMethod): InventoryItem
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
     * @return InventoryItem
     */
    public function setForwardConsumptionDays(int $forwardConsumptionDays): InventoryItem
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
     * @return InventoryItem
     */
    public function setDemandSource(RecordRef $demandSource): InventoryItem
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
     * @param float $quantityBackOrdered
     * @return InventoryItem
     */
    public function setQuantityBackOrdered(float $quantityBackOrdered): InventoryItem
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
     * @param float $quantityCommitted
     * @return InventoryItem
     */
    public function setQuantityCommitted(float $quantityCommitted): InventoryItem
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
     * @return InventoryItem
     */
    public function setQuantityAvailable(float $quantityAvailable): InventoryItem
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
     * @param float $quantityOnHand
     * @return InventoryItem
     */
    public function setQuantityOnHand(float $quantityOnHand): InventoryItem
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
     * @param float $onHandValueMli
     * @return InventoryItem
     */
    public function setOnHandValueMli(float $onHandValueMli): InventoryItem
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
     * @param float $quantityOnOrder
     * @return InventoryItem
     */
    public function setQuantityOnOrder(float $quantityOnOrder): InventoryItem
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
     * @param float $rate
     * @return InventoryItem
     */
    public function setRate(float $rate): InventoryItem
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
     * @param float $reorderPoint
     * @return InventoryItem
     */
    public function setReorderPoint(float $reorderPoint): InventoryItem
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
     * @param string $quantityCommittedUnits
     * @return InventoryItem
     */
    public function setQuantityCommittedUnits(string $quantityCommittedUnits): InventoryItem
    {
        $this->quantityCommittedUnits = $quantityCommittedUnits;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantityCommittedUnits(): string
    {
        return $this->quantityCommittedUnits;
    }

    /**
     * @param RecordRef $salesTaxCode
     * @return InventoryItem
     */
    public function setSalesTaxCode(RecordRef $salesTaxCode): InventoryItem
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
     * @param string $quantityAvailableUnits
     * @return InventoryItem
     */
    public function setQuantityAvailableUnits(string $quantityAvailableUnits): InventoryItem
    {
        $this->quantityAvailableUnits = $quantityAvailableUnits;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantityAvailableUnits(): string
    {
        return $this->quantityAvailableUnits;
    }

    /**
     * @param string $quantityOnHandUnits
     * @return InventoryItem
     */
    public function setQuantityOnHandUnits(string $quantityOnHandUnits): InventoryItem
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
     * @param RecordRef $vendor
     * @return InventoryItem
     */
    public function setVendor(RecordRef $vendor): InventoryItem
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
     * @param string $quantityOnOrderUnits
     * @return InventoryItem
     */
    public function setQuantityOnOrderUnits(string $quantityOnOrderUnits): InventoryItem
    {
        $this->quantityOnOrderUnits = $quantityOnOrderUnits;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantityOnOrderUnits(): string
    {
        return $this->quantityOnOrderUnits;
    }

    /**
     * @param ProductFeedList $productFeedList
     * @return InventoryItem
     */
    public function setProductFeedList(ProductFeedList $productFeedList): InventoryItem
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
     * @param RecordRefList $subsidiaryList
     * @return InventoryItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): InventoryItem
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
     * @return InventoryItem
     */
    public function setItemOptionsList(ItemOptionsList $itemOptionsList): InventoryItem
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
     * @param ItemVendorList $itemVendorList
     * @return InventoryItem
     */
    public function setItemVendorList(ItemVendorList $itemVendorList): InventoryItem
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
     * @param SiteCategoryList $siteCategoryList
     * @return InventoryItem
     */
    public function setSiteCategoryList(SiteCategoryList $siteCategoryList): InventoryItem
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
     * @return InventoryItem
     */
    public function setTranslationsList(TranslationList $translationsList): InventoryItem
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
     * @param InventoryItemBinNumberList $binNumberList
     * @return InventoryItem
     */
    public function setBinNumberList(InventoryItemBinNumberList $binNumberList): InventoryItem
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
     * @param InventoryItemLocationsList $locationsList
     * @return InventoryItem
     */
    public function setLocationsList(InventoryItemLocationsList $locationsList): InventoryItem
    {
        $this->locationsList = $locationsList;
        return $this;
    }

    /**
     * @return InventoryItemLocationsList
     */
    public function getLocationsList(): InventoryItemLocationsList
    {
        return $this->locationsList;
    }

    /**
     * @param MatrixOptionList $matrixOptionList
     * @return InventoryItem
     */
    public function setMatrixOptionList(MatrixOptionList $matrixOptionList): InventoryItem
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
     * @param PresentationItemList $presentationItemList
     * @return InventoryItem
     */
    public function setPresentationItemList(PresentationItemList $presentationItemList): InventoryItem
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
     * @return InventoryItem
     */
    public function setFutureHorizon(int $futureHorizon): InventoryItem
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
     * @return InventoryItem
     */
    public function setConsumptionUnit(RecordRef $consumptionUnit): InventoryItem
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
     * @return InventoryItem
     */
    public function setEnableCatchWeight(bool $enableCatchWeight): InventoryItem
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
     * @return InventoryItem
     */
    public function setSecondaryUnitsType(RecordRef $secondaryUnitsType): InventoryItem
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
     * @return InventoryItem
     */
    public function setSecondaryBaseUnit(RecordRef $secondaryBaseUnit): InventoryItem
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
     * @return InventoryItem
     */
    public function setConversionRate(float $conversionRate): InventoryItem
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
     * @return InventoryItem
     */
    public function setSecondaryStockUnit(RecordRef $secondaryStockUnit): InventoryItem
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
     * @return InventoryItem
     */
    public function setSecondarySaleUnit(RecordRef $secondarySaleUnit): InventoryItem
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
     * @return InventoryItem
     */
    public function setSecondaryPurchaseUnit(RecordRef $secondaryPurchaseUnit): InventoryItem
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
     * @return InventoryItem
     */
    public function setSecondaryConsumptionUnit(RecordRef $secondaryConsumptionUnit): InventoryItem
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
     * @return InventoryItem
     */
    public function setLowerWarningLimit(float $lowerWarningLimit): InventoryItem
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
     * @return InventoryItem
     */
    public function setUpperWarningLimit(float $upperWarningLimit): InventoryItem
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
     * @return InventoryItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): InventoryItem
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
     * @return InventoryItem
     */
    public function setInternalId(string $internalId): InventoryItem
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
     * @return InventoryItem
     */
    public function setExternalId(string $externalId): InventoryItem
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
