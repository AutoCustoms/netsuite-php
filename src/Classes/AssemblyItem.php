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

class AssemblyItem extends Record {
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
    protected bool $printItems;

    /**
     * @var RecordRef
     */
    protected RecordRef $vendor;

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
     * @var bool
     */
    protected bool $availableToPartners;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $subsidiaryList;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var bool
     */
    protected bool $includeChildren;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var RecordRef
     */
    protected RecordRef $cogsAccount;

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
     * @var RecordRef
     */
    protected RecordRef $salesTaxCode;

    /**
     * @var bool
     */
    protected bool $useComponentYield;

    /**
     * @var RecordRef
     */
    protected RecordRef $wipVarianceAcct;

    /**
     * @var RecordRef
     */
    protected RecordRef $purchaseTaxCode;

    /**
     * @var RecordRef
     */
    protected RecordRef $scrapAcct;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxSchedule;

    /**
     * @var RecordRef
     */
    protected RecordRef $wipAcct;

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
     * @var ItemWeightUnit
     */
    protected ItemWeightUnit $weightUnit;

    /**
     * @var bool
     */
    protected bool $isTaxable;

    /**
     * @var ItemCostingMethod
     */
    protected ItemCostingMethod $costingMethod;

    /**
     * @var float
     */
    protected float $rate;

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
     * @var bool
     */
    protected bool $trackLandedCost;

    /**
     * @var string
     */
    protected string $matrixItemNameTemplate;

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

    protected $manufactureraddr1;
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
     * @var AssemblyItemEffectiveBomControl
     */
    protected AssemblyItemEffectiveBomControl $effectiveBomControl;

    /**
     * @var string
     */
    protected string $defaultRevision;

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
     * @var bool
     */
    protected bool $isDropShipItem;

    /**
     * @var bool
     */
    protected bool $isPhantom;

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
     * @var RecordRef
     */
    protected RecordRef $scheduleBCode;

    /**
     * @var string
     */
    protected string $manufacturerTariff;

    /**
     * @var ItemPreferenceCriterion
     */
    protected ItemPreferenceCriterion $preferenceCriterion;

    /**
     * @var RecordRef
     */
    protected RecordRef $issueProduct;

    /**
     * @var int
     */
    protected int $minimumQuantity;

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
    protected RecordRef $softDescriptor;

    /**
     * @var bool
     */
    protected bool $isSpecialWorkOrderItem;

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
    protected RecordRef $prodQtyVarianceAcct;

    /**
     * @var RecordRef
     */
    protected RecordRef $prodPriceVarianceAcct;

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
    protected bool $buildEntireAssembly;

    /**
     * @var float
     */
    protected float $quantityOnHand;

    /**
     * @var bool
     */
    protected bool $useMarginalRates;

    /**
     * @var ItemCostEstimateType
     */
    protected ItemCostEstimateType $costEstimateType;

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
    protected RecordRef $intercoCogsAccount;

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
     * @var RecordRef
     */
    protected RecordRef $unbuildVarianceAccount;

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
     * @var RecordRef
     */
    protected RecordRef $dropshipExpenseAccount;

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
     * @var int
     */
    protected int $buildTime;

    /**
     * @var float
     */
    protected float $lastPurchasePrice;

    /**
     * @var string
     */
    protected string $purchaseDescription;

    /**
     * @var float
     */
    protected float $safetyStockLevel;

    /**
     * @var int
     */
    protected int $safetyStockLevelDays;

    /**
     * @var bool
     */
    protected bool $seasonalDemand;

    /**
     * @var int
     */
    protected int $reorderMultiple;

    /**
     * @var float
     */
    protected float $cost;

    /**
     * @var float
     */
    protected float $reorderPoint;

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
     * @var float
     */
    protected float $preferredStockLevel;

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
    protected float $quantityCommitted;

    /**
     * @var bool
     */
    protected bool $shipIndividually;

    /**
     * @var float
     */
    protected float $quantityAvailable;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipPackage;

    /**
     * @var float
     */
    protected float $quantityBackOrdered;

    /**
     * @var string
     */
    protected string $storeDisplayName;

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
     * @var RecordRef
     */
    protected RecordRef $supplyLotSizingMethod;

    /**
     * @var RecordRef
     */
    protected RecordRef $demandSource;

    /**
     * @var float
     */
    protected float $quantityOnOrder;

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
    protected string $urlComponent;

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
     * @var string
     */
    protected string $shoppingDotComCategory;

    /**
     * @var ItemOutOfStockBehavior
     */
    protected ItemOutOfStockBehavior $outOfStockBehavior;

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
    protected string $relatedItemsDescription;

    /**
     * @var bool
     */
    protected bool $onSpecial;

    /**
     * @var string
     */
    protected string $specialsDescription;

    /**
     * @var string
     */
    protected string $featuredDescription;

    /**
     * @var ItemOptionsList
     */
    protected ItemOptionsList $itemOptionsList;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $itemNumberOptionsList;

    /**
     * @var ItemVendorList
     */
    protected ItemVendorList $itemVendorList;

    /**
     * @var PricingMatrix
     */
    protected PricingMatrix $pricingMatrix;

    /**
     * @var ItemMemberList
     */
    protected ItemMemberList $memberList;

    /**
     * @var ItemAccountingBookDetailList
     */
    protected ItemAccountingBookDetailList $accountingBookDetailList;

    /**
     * @var AssemblyItemBillOfMaterialsList
     */
    protected AssemblyItemBillOfMaterialsList $billOfMaterialsList;

    /**
     * @var InventoryItemLocationsList
     */
    protected InventoryItemLocationsList $locationsList;

    /**
     * @var SiteCategoryList
     */
    protected SiteCategoryList $siteCategoryList;

    /**
     * @var InventoryItemBinNumberList
     */
    protected InventoryItemBinNumberList $binNumberList;

    /**
     * @var TranslationList
     */
    protected TranslationList $translationsList;

    /**
     * @var PresentationItemList
     */
    protected PresentationItemList $presentationItemList;

    /**
     * @var AssemblyItemHierarchyVersionsList
     */
    protected AssemblyItemHierarchyVersionsList $hierarchyVersionsList;

    /**
     * @var int
     */
    protected int $futureHorizon;

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
        "customForm" => "RecordRef",
        "itemId" => "string",
        "upcCode" => "string",
        "displayName" => "string",
        "vendorName" => "string",
        "parent" => "RecordRef",
        "printItems" => "boolean",
        "vendor" => "RecordRef",
        "isOnline" => "boolean",
        "isGcoCompliant" => "boolean",
        "offerSupport" => "boolean",
        "isInactive" => "boolean",
        "availableToPartners" => "boolean",
        "subsidiaryList" => "RecordRefList",
        "department" => "RecordRef",
        "includeChildren" => "boolean",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "description" => "string",
        "cogsAccount" => "RecordRef",
        "incomeAccount" => "RecordRef",
        "intercoIncomeAccount" => "RecordRef",
        "assetAccount" => "RecordRef",
        "matchBillToReceipt" => "boolean",
        "billQtyVarianceAcct" => "RecordRef",
        "billPriceVarianceAcct" => "RecordRef",
        "billExchRateVarianceAcct" => "RecordRef",
        "gainLossAccount" => "RecordRef",
        "salesTaxCode" => "RecordRef",
        "useComponentYield" => "boolean",
        "wipVarianceAcct" => "RecordRef",
        "purchaseTaxCode" => "RecordRef",
        "scrapAcct" => "RecordRef",
        "taxSchedule" => "RecordRef",
        "wipAcct" => "RecordRef",
        "shippingCost" => "float",
        "handlingCost" => "float",
        "weight" => "float",
        "weightUnit" => "ItemWeightUnit",
        "isTaxable" => "boolean",
        "costingMethod" => "ItemCostingMethod",
        "rate" => "float",
        "costingMethodDisplay" => "string",
        "unitsType" => "RecordRef",
        "stockUnit" => "RecordRef",
        "purchaseUnit" => "RecordRef",
        "saleUnit" => "RecordRef",
        "trackLandedCost" => "boolean",
        "matrixItemNameTemplate" => "string",
        "billingSchedule" => "RecordRef",
        "deferredRevenueAccount" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "stockDescription" => "string",
        "producer" => "boolean",
        "manufacturer" => "string",
        "mpn" => "string",
        "multManufactureAddr" => "boolean",
        "manufactureraddr1" => "string",
        "manufacturerCity" => "string",
        "manufacturerState" => "string",
        "manufacturerZip" => "string",
        "countryOfManufacture" => "Country",
        "effectiveBomControl" => "AssemblyItemEffectiveBomControl",
        "defaultRevision" => "string",
        "roundUpAsComponent" => "boolean",
        "purchaseOrderQuantity" => "float",
        "purchaseOrderAmount" => "float",
        "purchaseOrderQuantityDiff" => "float",
        "receiptQuantity" => "float",
        "receiptAmount" => "float",
        "receiptQuantityDiff" => "float",
        "isDropShipItem" => "boolean",
        "isPhantom" => "boolean",
        "defaultItemShipMethod" => "RecordRef",
        "itemCarrier" => "ShippingCarrier",
        "itemShipMethodList" => "RecordRefList",
        "manufacturerTaxId" => "string",
        "scheduleBNumber" => "string",
        "scheduleBQuantity" => "integer",
        "scheduleBCode" => "RecordRef",
        "manufacturerTariff" => "string",
        "preferenceCriterion" => "ItemPreferenceCriterion",
        "issueProduct" => "RecordRef",
        "minimumQuantity" => "integer",
        "lastInvtCountDate" => "dateTime",
        "nextInvtCountDate" => "dateTime",
        "invtCountInterval" => "integer",
        "invtClassification" => "ItemInvtClassification",
        "enforceMinQtyInternally" => "boolean",
        "maximumQuantity" => "integer",
        "softDescriptor" => "RecordRef",
        "isSpecialWorkOrderItem" => "boolean",
        "costCategory" => "RecordRef",
        "pricesIncludeTax" => "boolean",
        "prodQtyVarianceAcct" => "RecordRef",
        "prodPriceVarianceAcct" => "RecordRef",
        "purchasePriceVarianceAcct" => "RecordRef",
        "quantityPricingSchedule" => "RecordRef",
        "buildEntireAssembly" => "boolean",
        "quantityOnHand" => "float",
        "useMarginalRates" => "boolean",
        "costEstimateType" => "ItemCostEstimateType",
        "isHazmatItem" => "boolean",
        "hazmatId" => "string",
        "hazmatShippingName" => "string",
        "hazmatHazardClass" => "string",
        "hazmatPackingGroup" => "HazmatPackingGroup",
        "hazmatItemUnits" => "string",
        "hazmatItemUnitsQty" => "float",
        "costEstimate" => "float",
        "transferPrice" => "float",
        "overallQuantityPricingType" => "ItemOverallQuantityPricingType",
        "pricingGroup" => "RecordRef",
        "intercoCogsAccount" => "RecordRef",
        "vsoePrice" => "float",
        "vsoeSopGroup" => "VsoeSopGroup",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "itemRevenueCategory" => "RecordRef",
        "unbuildVarianceAccount" => "RecordRef",
        "deferRevRec" => "boolean",
        "revenueRecognitionRule" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "revenueAllocationGroup" => "RecordRef",
        "createRevenuePlansOn" => "RecordRef",
        "directRevenuePosting" => "boolean",
        "dropshipExpenseAccount" => "RecordRef",
        "preferredLocation" => "RecordRef",
        "isStorePickupAllowed" => "boolean",
        "totalValue" => "float",
        "useBins" => "boolean",
        "averageCost" => "float",
        "leadTime" => "integer",
        "autoLeadTime" => "boolean",
        "buildTime" => "integer",
        "lastPurchasePrice" => "float",
        "purchaseDescription" => "string",
        "safetyStockLevel" => "float",
        "safetyStockLevelDays" => "integer",
        "seasonalDemand" => "boolean",
        "reorderMultiple" => "integer",
        "cost" => "float",
        "reorderPoint" => "float",
        "demandModifier" => "float",
        "distributionNetwork" => "RecordRef",
        "distributionCategory" => "RecordRef",
        "preferredStockLevel" => "float",
        "autoReorderPoint" => "boolean",
        "autoPreferredStockLevel" => "boolean",
        "preferredStockLevelDays" => "float",
        "quantityCommitted" => "float",
        "shipIndividually" => "boolean",
        "quantityAvailable" => "float",
        "shipPackage" => "RecordRef",
        "quantityBackOrdered" => "float",
        "storeDisplayName" => "string",
        "defaultReturnCost" => "float",
        "supplyReplenishmentMethod" => "RecordRef",
        "alternateDemandSourceItem" => "RecordRef",
        "fixedLotSize" => "float",
        "supplyType" => "RecordRef",
        "demandTimeFence" => "integer",
        "supplyTimeFence" => "integer",
        "rescheduleInDays" => "integer",
        "rescheduleOutDays" => "integer",
        "supplyLotSizingMethod" => "RecordRef",
        "demandSource" => "RecordRef",
        "quantityOnOrder" => "float",
        "storeDisplayThumbnail" => "RecordRef",
        "storeDisplayImage" => "RecordRef",
        "storeDescription" => "string",
        "storeDetailedDescription" => "string",
        "storeItemTemplate" => "RecordRef",
        "pageTitle" => "string",
        "urlComponent" => "string",
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
        "shoppingDotComCategory" => "string",
        "outOfStockBehavior" => "ItemOutOfStockBehavior",
        "shopzillaCategoryId" => "integer",
        "nexTagCategory" => "string",
        "productFeedList" => "ProductFeedList",
        "relatedItemsDescription" => "string",
        "onSpecial" => "boolean",
        "specialsDescription" => "string",
        "featuredDescription" => "string",
        "itemOptionsList" => "ItemOptionsList",
        "itemNumberOptionsList" => "RecordRefList",
        "itemVendorList" => "ItemVendorList",
        "pricingMatrix" => "PricingMatrix",
        "memberList" => "ItemMemberList",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "billOfMaterialsList" => "AssemblyItemBillOfMaterialsList",
        "locationsList" => "InventoryItemLocationsList",
        "siteCategoryList" => "SiteCategoryList",
        "binNumberList" => "InventoryItemBinNumberList",
        "translationsList" => "TranslationList",
        "presentationItemList" => "PresentationItemList",
        "hierarchyVersionsList" => "AssemblyItemHierarchyVersionsList",
        "futureHorizon" => "integer",
        "consumptionUnit" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return AssemblyItem
     */
    public function setCreatedDate(string $createdDate): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setLastModifiedDate(string $lastModifiedDate): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setCustomForm(RecordRef $customForm): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setItemId(string $itemId): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setUpcCode(string $upcCode): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setDisplayName(string $displayName): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setVendorName(string $vendorName): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setParent(RecordRef $parent): AssemblyItem
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
     * @param bool $printItems
     * @return AssemblyItem
     */
    public function setPrintItems(bool $printItems): AssemblyItem
    {
        $this->printItems = $printItems;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPrintItems(): bool
    {
        return $this->printItems;
    }

    /**
     * @param RecordRef $vendor
     * @return AssemblyItem
     */
    public function setVendor(RecordRef $vendor): AssemblyItem
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
     * @param bool $isOnline
     * @return AssemblyItem
     */
    public function setIsOnline(bool $isOnline): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setIsGcoCompliant(bool $isGcoCompliant): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setOfferSupport(bool $offerSupport): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setIsInactive(bool $isInactive): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setAvailableToPartners(bool $availableToPartners): AssemblyItem
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
     * @param RecordRefList $subsidiaryList
     * @return AssemblyItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): AssemblyItem
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
     * @param RecordRef $department
     * @return AssemblyItem
     */
    public function setDepartment(RecordRef $department): AssemblyItem
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
     * @param bool $includeChildren
     * @return AssemblyItem
     */
    public function setIncludeChildren(bool $includeChildren): AssemblyItem
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
     * @param RecordRef $class
     * @return AssemblyItem
     */
    public function setClass(RecordRef $class): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setLocation(RecordRef $location): AssemblyItem
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
     * @param string $description
     * @return AssemblyItem
     */
    public function setDescription(string $description): AssemblyItem
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param RecordRef $cogsAccount
     * @return AssemblyItem
     */
    public function setCogsAccount(RecordRef $cogsAccount): AssemblyItem
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
     * @param RecordRef $incomeAccount
     * @return AssemblyItem
     */
    public function setIncomeAccount(RecordRef $incomeAccount): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setIntercoIncomeAccount(RecordRef $intercoIncomeAccount): AssemblyItem
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
     * @param RecordRef $assetAccount
     * @return AssemblyItem
     */
    public function setAssetAccount(RecordRef $assetAccount): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setMatchBillToReceipt(bool $matchBillToReceipt): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setBillQtyVarianceAcct(RecordRef $billQtyVarianceAcct): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setBillPriceVarianceAcct(RecordRef $billPriceVarianceAcct): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setBillExchRateVarianceAcct(RecordRef $billExchRateVarianceAcct): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setGainLossAccount(RecordRef $gainLossAccount): AssemblyItem
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
     * @param RecordRef $salesTaxCode
     * @return AssemblyItem
     */
    public function setSalesTaxCode(RecordRef $salesTaxCode): AssemblyItem
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
     * @param bool $useComponentYield
     * @return AssemblyItem
     */
    public function setUseComponentYield(bool $useComponentYield): AssemblyItem
    {
        $this->useComponentYield = $useComponentYield;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUseComponentYield(): bool
    {
        return $this->useComponentYield;
    }

    /**
     * @param RecordRef $wipVarianceAcct
     * @return AssemblyItem
     */
    public function setWipVarianceAcct(RecordRef $wipVarianceAcct): AssemblyItem
    {
        $this->wipVarianceAcct = $wipVarianceAcct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWipVarianceAcct(): RecordRef
    {
        return $this->wipVarianceAcct;
    }

    /**
     * @param RecordRef $purchaseTaxCode
     * @return AssemblyItem
     */
    public function setPurchaseTaxCode(RecordRef $purchaseTaxCode): AssemblyItem
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
     * @param RecordRef $scrapAcct
     * @return AssemblyItem
     */
    public function setScrapAcct(RecordRef $scrapAcct): AssemblyItem
    {
        $this->scrapAcct = $scrapAcct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getScrapAcct(): RecordRef
    {
        return $this->scrapAcct;
    }

    /**
     * @param RecordRef $taxSchedule
     * @return AssemblyItem
     */
    public function setTaxSchedule(RecordRef $taxSchedule): AssemblyItem
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
     * @param RecordRef $wipAcct
     * @return AssemblyItem
     */
    public function setWipAcct(RecordRef $wipAcct): AssemblyItem
    {
        $this->wipAcct = $wipAcct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWipAcct(): RecordRef
    {
        return $this->wipAcct;
    }

    /**
     * @param float $shippingCost
     * @return AssemblyItem
     */
    public function setShippingCost(float $shippingCost): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setHandlingCost(float $handlingCost): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setWeight(float $weight): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setWeightUnit(ItemWeightUnit $weightUnit): AssemblyItem
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
     * @param bool $isTaxable
     * @return AssemblyItem
     */
    public function setIsTaxable(bool $isTaxable): AssemblyItem
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
     * @param ItemCostingMethod $costingMethod
     * @return AssemblyItem
     */
    public function setCostingMethod(ItemCostingMethod $costingMethod): AssemblyItem
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
     * @param float $rate
     * @return AssemblyItem
     */
    public function setRate(float $rate): AssemblyItem
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
     * @param string $costingMethodDisplay
     * @return AssemblyItem
     */
    public function setCostingMethodDisplay(string $costingMethodDisplay): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setUnitsType(RecordRef $unitsType): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setStockUnit(RecordRef $stockUnit): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setPurchaseUnit(RecordRef $purchaseUnit): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setSaleUnit(RecordRef $saleUnit): AssemblyItem
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
     * @param bool $trackLandedCost
     * @return AssemblyItem
     */
    public function setTrackLandedCost(bool $trackLandedCost): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setMatrixItemNameTemplate(string $matrixItemNameTemplate): AssemblyItem
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
     * @param RecordRef $billingSchedule
     * @return AssemblyItem
     */
    public function setBillingSchedule(RecordRef $billingSchedule): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setDeferredRevenueAccount(RecordRef $deferredRevenueAccount): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setStockDescription(string $stockDescription): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setProducer(bool $producer): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setManufacturer(string $manufacturer): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setMpn(string $mpn): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setMultManufactureAddr(bool $multManufactureAddr): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setManufacturerCity(string $manufacturerCity): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setManufacturerState(string $manufacturerState): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setManufacturerZip(string $manufacturerZip): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setCountryOfManufacture(Country $countryOfManufacture): AssemblyItem
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
     * @param AssemblyItemEffectiveBomControl $effectiveBomControl
     * @return AssemblyItem
     */
    public function setEffectiveBomControl(AssemblyItemEffectiveBomControl $effectiveBomControl): AssemblyItem
    {
        $this->effectiveBomControl = $effectiveBomControl;
        return $this;
    }

    /**
     * @return AssemblyItemEffectiveBomControl
     */
    public function getEffectiveBomControl(): AssemblyItemEffectiveBomControl
    {
        return $this->effectiveBomControl;
    }

    /**
     * @param string $defaultRevision
     * @return AssemblyItem
     */
    public function setDefaultRevision(string $defaultRevision): AssemblyItem
    {
        $this->defaultRevision = $defaultRevision;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultRevision(): string
    {
        return $this->defaultRevision;
    }

    /**
     * @param bool $roundUpAsComponent
     * @return AssemblyItem
     */
    public function setRoundUpAsComponent(bool $roundUpAsComponent): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setPurchaseOrderQuantity(float $purchaseOrderQuantity): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setPurchaseOrderAmount(float $purchaseOrderAmount): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setPurchaseOrderQuantityDiff(float $purchaseOrderQuantityDiff): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setReceiptQuantity(float $receiptQuantity): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setReceiptAmount(float $receiptAmount): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setReceiptQuantityDiff(float $receiptQuantityDiff): AssemblyItem
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
     * @param bool $isDropShipItem
     * @return AssemblyItem
     */
    public function setIsDropShipItem(bool $isDropShipItem): AssemblyItem
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
     * @param bool $isPhantom
     * @return AssemblyItem
     */
    public function setIsPhantom(bool $isPhantom): AssemblyItem
    {
        $this->isPhantom = $isPhantom;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPhantom(): bool
    {
        return $this->isPhantom;
    }

    /**
     * @param RecordRef $defaultItemShipMethod
     * @return AssemblyItem
     */
    public function setDefaultItemShipMethod(RecordRef $defaultItemShipMethod): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setItemCarrier(ShippingCarrier $itemCarrier): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setItemShipMethodList(RecordRefList $itemShipMethodList): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setManufacturerTaxId(string $manufacturerTaxId): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setScheduleBNumber(string $scheduleBNumber): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setScheduleBQuantity(int $scheduleBQuantity): AssemblyItem
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
     * @param RecordRef $scheduleBCode
     * @return AssemblyItem
     */
    public function setScheduleBCode(RecordRef $scheduleBCode): AssemblyItem
    {
        $this->scheduleBCode = $scheduleBCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getScheduleBCode(): RecordRef
    {
        return $this->scheduleBCode;
    }

    /**
     * @param string $manufacturerTariff
     * @return AssemblyItem
     */
    public function setManufacturerTariff(string $manufacturerTariff): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setPreferenceCriterion(ItemPreferenceCriterion $preferenceCriterion): AssemblyItem
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
     * @param RecordRef $issueProduct
     * @return AssemblyItem
     */
    public function setIssueProduct(RecordRef $issueProduct): AssemblyItem
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
     * @param int $minimumQuantity
     * @return AssemblyItem
     */
    public function setMinimumQuantity(int $minimumQuantity): AssemblyItem
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
     * @param string $lastInvtCountDate
     * @return AssemblyItem
     */
    public function setLastInvtCountDate(string $lastInvtCountDate): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setNextInvtCountDate(string $nextInvtCountDate): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setInvtCountInterval(int $invtCountInterval): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setInvtClassification(ItemInvtClassification $invtClassification): AssemblyItem
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
     * @param bool $enforceMinQtyInternally
     * @return AssemblyItem
     */
    public function setEnforceMinQtyInternally(bool $enforceMinQtyInternally): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setMaximumQuantity(int $maximumQuantity): AssemblyItem
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
     * @param RecordRef $softDescriptor
     * @return AssemblyItem
     */
    public function setSoftDescriptor(RecordRef $softDescriptor): AssemblyItem
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
     * @param bool $isSpecialWorkOrderItem
     * @return AssemblyItem
     */
    public function setIsSpecialWorkOrderItem(bool $isSpecialWorkOrderItem): AssemblyItem
    {
        $this->isSpecialWorkOrderItem = $isSpecialWorkOrderItem;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSpecialWorkOrderItem(): bool
    {
        return $this->isSpecialWorkOrderItem;
    }

    /**
     * @param RecordRef $costCategory
     * @return AssemblyItem
     */
    public function setCostCategory(RecordRef $costCategory): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setPricesIncludeTax(bool $pricesIncludeTax): AssemblyItem
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
     * @param RecordRef $prodQtyVarianceAcct
     * @return AssemblyItem
     */
    public function setProdQtyVarianceAcct(RecordRef $prodQtyVarianceAcct): AssemblyItem
    {
        $this->prodQtyVarianceAcct = $prodQtyVarianceAcct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProdQtyVarianceAcct(): RecordRef
    {
        return $this->prodQtyVarianceAcct;
    }

    /**
     * @param RecordRef $prodPriceVarianceAcct
     * @return AssemblyItem
     */
    public function setProdPriceVarianceAcct(RecordRef $prodPriceVarianceAcct): AssemblyItem
    {
        $this->prodPriceVarianceAcct = $prodPriceVarianceAcct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProdPriceVarianceAcct(): RecordRef
    {
        return $this->prodPriceVarianceAcct;
    }

    /**
     * @param RecordRef $purchasePriceVarianceAcct
     * @return AssemblyItem
     */
    public function setPurchasePriceVarianceAcct(RecordRef $purchasePriceVarianceAcct): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setQuantityPricingSchedule(RecordRef $quantityPricingSchedule): AssemblyItem
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
     * @param bool $buildEntireAssembly
     * @return AssemblyItem
     */
    public function setBuildEntireAssembly(bool $buildEntireAssembly): AssemblyItem
    {
        $this->buildEntireAssembly = $buildEntireAssembly;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBuildEntireAssembly(): bool
    {
        return $this->buildEntireAssembly;
    }

    /**
     * @param float $quantityOnHand
     * @return AssemblyItem
     */
    public function setQuantityOnHand(float $quantityOnHand): AssemblyItem
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
     * @param bool $useMarginalRates
     * @return AssemblyItem
     */
    public function setUseMarginalRates(bool $useMarginalRates): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType): AssemblyItem
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
     * @param bool $isHazmatItem
     * @return AssemblyItem
     */
    public function setIsHazmatItem(bool $isHazmatItem): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setHazmatId(string $hazmatId): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setHazmatShippingName(string $hazmatShippingName): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setHazmatHazardClass(string $hazmatHazardClass): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setHazmatPackingGroup(HazmatPackingGroup $hazmatPackingGroup): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setHazmatItemUnits(string $hazmatItemUnits): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setHazmatItemUnitsQty(float $hazmatItemUnitsQty): AssemblyItem
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
     * @param float $costEstimate
     * @return AssemblyItem
     */
    public function setCostEstimate(float $costEstimate): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setTransferPrice(float $transferPrice): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setOverallQuantityPricingType(ItemOverallQuantityPricingType $overallQuantityPricingType): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setPricingGroup(RecordRef $pricingGroup): AssemblyItem
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
     * @param RecordRef $intercoCogsAccount
     * @return AssemblyItem
     */
    public function setIntercoCogsAccount(RecordRef $intercoCogsAccount): AssemblyItem
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
     * @param float $vsoePrice
     * @return AssemblyItem
     */
    public function setVsoePrice(float $vsoePrice): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setVsoeSopGroup(VsoeSopGroup $vsoeSopGroup): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setVsoeDelivered(bool $vsoeDelivered): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setItemRevenueCategory(RecordRef $itemRevenueCategory): AssemblyItem
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
     * @param RecordRef $unbuildVarianceAccount
     * @return AssemblyItem
     */
    public function setUnbuildVarianceAccount(RecordRef $unbuildVarianceAccount): AssemblyItem
    {
        $this->unbuildVarianceAccount = $unbuildVarianceAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnbuildVarianceAccount(): RecordRef
    {
        return $this->unbuildVarianceAccount;
    }

    /**
     * @param bool $deferRevRec
     * @return AssemblyItem
     */
    public function setDeferRevRec(bool $deferRevRec): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setRevenueRecognitionRule(RecordRef $revenueRecognitionRule): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setRevRecForecastRule(RecordRef $revRecForecastRule): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setRevenueAllocationGroup(RecordRef $revenueAllocationGroup): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setCreateRevenuePlansOn(RecordRef $createRevenuePlansOn): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setDirectRevenuePosting(bool $directRevenuePosting): AssemblyItem
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
     * @param RecordRef $dropshipExpenseAccount
     * @return AssemblyItem
     */
    public function setDropshipExpenseAccount(RecordRef $dropshipExpenseAccount): AssemblyItem
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
     * @param RecordRef $preferredLocation
     * @return AssemblyItem
     */
    public function setPreferredLocation(RecordRef $preferredLocation): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setIsStorePickupAllowed(bool $isStorePickupAllowed): AssemblyItem
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
     * @param float $totalValue
     * @return AssemblyItem
     */
    public function setTotalValue(float $totalValue): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setUseBins(bool $useBins): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setAverageCost(float $averageCost): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setLeadTime(int $leadTime): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setAutoLeadTime(bool $autoLeadTime): AssemblyItem
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
     * @param int $buildTime
     * @return AssemblyItem
     */
    public function setBuildTime(int $buildTime): AssemblyItem
    {
        $this->buildTime = $buildTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getBuildTime(): int
    {
        return $this->buildTime;
    }

    /**
     * @param float $lastPurchasePrice
     * @return AssemblyItem
     */
    public function setLastPurchasePrice(float $lastPurchasePrice): AssemblyItem
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
     * @param string $purchaseDescription
     * @return AssemblyItem
     */
    public function setPurchaseDescription(string $purchaseDescription): AssemblyItem
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
     * @param float $safetyStockLevel
     * @return AssemblyItem
     */
    public function setSafetyStockLevel(float $safetyStockLevel): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setSafetyStockLevelDays(int $safetyStockLevelDays): AssemblyItem
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
     * @param bool $seasonalDemand
     * @return AssemblyItem
     */
    public function setSeasonalDemand(bool $seasonalDemand): AssemblyItem
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
     * @param int $reorderMultiple
     * @return AssemblyItem
     */
    public function setReorderMultiple(int $reorderMultiple): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setCost(float $cost): AssemblyItem
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
     * @param float $reorderPoint
     * @return AssemblyItem
     */
    public function setReorderPoint(float $reorderPoint): AssemblyItem
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
     * @param float $demandModifier
     * @return AssemblyItem
     */
    public function setDemandModifier(float $demandModifier): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setDistributionNetwork(RecordRef $distributionNetwork): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setDistributionCategory(RecordRef $distributionCategory): AssemblyItem
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
     * @param float $preferredStockLevel
     * @return AssemblyItem
     */
    public function setPreferredStockLevel(float $preferredStockLevel): AssemblyItem
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
     * @param bool $autoReorderPoint
     * @return AssemblyItem
     */
    public function setAutoReorderPoint(bool $autoReorderPoint): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setAutoPreferredStockLevel(bool $autoPreferredStockLevel): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setPreferredStockLevelDays(float $preferredStockLevelDays): AssemblyItem
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
     * @param float $quantityCommitted
     * @return AssemblyItem
     */
    public function setQuantityCommitted(float $quantityCommitted): AssemblyItem
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
     * @param bool $shipIndividually
     * @return AssemblyItem
     */
    public function setShipIndividually(bool $shipIndividually): AssemblyItem
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
     * @param float $quantityAvailable
     * @return AssemblyItem
     */
    public function setQuantityAvailable(float $quantityAvailable): AssemblyItem
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
     * @param RecordRef $shipPackage
     * @return AssemblyItem
     */
    public function setShipPackage(RecordRef $shipPackage): AssemblyItem
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
     * @param float $quantityBackOrdered
     * @return AssemblyItem
     */
    public function setQuantityBackOrdered(float $quantityBackOrdered): AssemblyItem
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
     * @param string $storeDisplayName
     * @return AssemblyItem
     */
    public function setStoreDisplayName(string $storeDisplayName): AssemblyItem
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
     * @param float $defaultReturnCost
     * @return AssemblyItem
     */
    public function setDefaultReturnCost(float $defaultReturnCost): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setSupplyReplenishmentMethod(RecordRef $supplyReplenishmentMethod): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setAlternateDemandSourceItem(RecordRef $alternateDemandSourceItem): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setFixedLotSize(float $fixedLotSize): AssemblyItem
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
     * @param RecordRef $supplyType
     * @return AssemblyItem
     */
    public function setSupplyType(RecordRef $supplyType): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setDemandTimeFence(int $demandTimeFence): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setSupplyTimeFence(int $supplyTimeFence): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setRescheduleInDays(int $rescheduleInDays): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setRescheduleOutDays(int $rescheduleOutDays): AssemblyItem
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
     * @param RecordRef $supplyLotSizingMethod
     * @return AssemblyItem
     */
    public function setSupplyLotSizingMethod(RecordRef $supplyLotSizingMethod): AssemblyItem
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
     * @param RecordRef $demandSource
     * @return AssemblyItem
     */
    public function setDemandSource(RecordRef $demandSource): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setQuantityOnOrder(float $quantityOnOrder): AssemblyItem
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
     * @param RecordRef $storeDisplayThumbnail
     * @return AssemblyItem
     */
    public function setStoreDisplayThumbnail(RecordRef $storeDisplayThumbnail): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setStoreDisplayImage(RecordRef $storeDisplayImage): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setStoreDescription(string $storeDescription): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setStoreDetailedDescription(string $storeDetailedDescription): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setStoreItemTemplate(RecordRef $storeItemTemplate): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setPageTitle(string $pageTitle): AssemblyItem
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
     * @param string $urlComponent
     * @return AssemblyItem
     */
    public function setUrlComponent(string $urlComponent): AssemblyItem
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
     * @param string $metaTagHtml
     * @return AssemblyItem
     */
    public function setMetaTagHtml(string $metaTagHtml): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setExcludeFromSitemap(bool $excludeFromSitemap): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setSitemapPriority(SitemapPriority $sitemapPriority): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setSearchKeywords(string $searchKeywords): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setIsDonationItem(bool $isDonationItem): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setShowDefaultDonationAmount(bool $showDefaultDonationAmount): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setMaxDonationAmount(float $maxDonationAmount): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setDontShowPrice(bool $dontShowPrice): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setNoPriceMessage(string $noPriceMessage): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setOutOfStockMessage(string $outOfStockMessage): AssemblyItem
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
     * @param string $shoppingDotComCategory
     * @return AssemblyItem
     */
    public function setShoppingDotComCategory(string $shoppingDotComCategory): AssemblyItem
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
     * @param ItemOutOfStockBehavior $outOfStockBehavior
     * @return AssemblyItem
     */
    public function setOutOfStockBehavior(ItemOutOfStockBehavior $outOfStockBehavior): AssemblyItem
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
     * @param int $shopzillaCategoryId
     * @return AssemblyItem
     */
    public function setShopzillaCategoryId(int $shopzillaCategoryId): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setNexTagCategory(string $nexTagCategory): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setProductFeedList(ProductFeedList $productFeedList): AssemblyItem
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
     * @param string $relatedItemsDescription
     * @return AssemblyItem
     */
    public function setRelatedItemsDescription(string $relatedItemsDescription): AssemblyItem
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
     * @param bool $onSpecial
     * @return AssemblyItem
     */
    public function setOnSpecial(bool $onSpecial): AssemblyItem
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
     * @param string $specialsDescription
     * @return AssemblyItem
     */
    public function setSpecialsDescription(string $specialsDescription): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setFeaturedDescription(string $featuredDescription): AssemblyItem
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
     * @param ItemOptionsList $itemOptionsList
     * @return AssemblyItem
     */
    public function setItemOptionsList(ItemOptionsList $itemOptionsList): AssemblyItem
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
     * @param RecordRefList $itemNumberOptionsList
     * @return AssemblyItem
     */
    public function setItemNumberOptionsList(RecordRefList $itemNumberOptionsList): AssemblyItem
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
     * @param ItemVendorList $itemVendorList
     * @return AssemblyItem
     */
    public function setItemVendorList(ItemVendorList $itemVendorList): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setPricingMatrix(PricingMatrix $pricingMatrix): AssemblyItem
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
     * @param ItemMemberList $memberList
     * @return AssemblyItem
     */
    public function setMemberList(ItemMemberList $memberList): AssemblyItem
    {
        $this->memberList = $memberList;
        return $this;
    }

    /**
     * @return ItemMemberList
     */
    public function getMemberList(): ItemMemberList
    {
        return $this->memberList;
    }

    /**
     * @param ItemAccountingBookDetailList $accountingBookDetailList
     * @return AssemblyItem
     */
    public function setAccountingBookDetailList(ItemAccountingBookDetailList $accountingBookDetailList): AssemblyItem
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
     * @param AssemblyItemBillOfMaterialsList $billOfMaterialsList
     * @return AssemblyItem
     */
    public function setBillOfMaterialsList(AssemblyItemBillOfMaterialsList $billOfMaterialsList): AssemblyItem
    {
        $this->billOfMaterialsList = $billOfMaterialsList;
        return $this;
    }

    /**
     * @return AssemblyItemBillOfMaterialsList
     */
    public function getBillOfMaterialsList(): AssemblyItemBillOfMaterialsList
    {
        return $this->billOfMaterialsList;
    }

    /**
     * @param InventoryItemLocationsList $locationsList
     * @return AssemblyItem
     */
    public function setLocationsList(InventoryItemLocationsList $locationsList): AssemblyItem
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
     * @param SiteCategoryList $siteCategoryList
     * @return AssemblyItem
     */
    public function setSiteCategoryList(SiteCategoryList $siteCategoryList): AssemblyItem
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
     * @param InventoryItemBinNumberList $binNumberList
     * @return AssemblyItem
     */
    public function setBinNumberList(InventoryItemBinNumberList $binNumberList): AssemblyItem
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
     * @param TranslationList $translationsList
     * @return AssemblyItem
     */
    public function setTranslationsList(TranslationList $translationsList): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setPresentationItemList(PresentationItemList $presentationItemList): AssemblyItem
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
     * @param AssemblyItemHierarchyVersionsList $hierarchyVersionsList
     * @return AssemblyItem
     */
    public function setHierarchyVersionsList(AssemblyItemHierarchyVersionsList $hierarchyVersionsList): AssemblyItem
    {
        $this->hierarchyVersionsList = $hierarchyVersionsList;
        return $this;
    }

    /**
     * @return AssemblyItemHierarchyVersionsList
     */
    public function getHierarchyVersionsList(): AssemblyItemHierarchyVersionsList
    {
        return $this->hierarchyVersionsList;
    }

    /**
     * @param int $futureHorizon
     * @return AssemblyItem
     */
    public function setFutureHorizon(int $futureHorizon): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setConsumptionUnit(RecordRef $consumptionUnit): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setInternalId(string $internalId): AssemblyItem
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
     * @return AssemblyItem
     */
    public function setExternalId(string $externalId): AssemblyItem
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
