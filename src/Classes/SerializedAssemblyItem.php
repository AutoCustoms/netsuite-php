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

class SerializedAssemblyItem extends Record {
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
     * @var bool
     */
    protected bool $isOnline;

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
    protected bool $isGcoCompliant;

    /**
     * @var bool
     */
    protected bool $offerSupport;

    /**
     * @var bool
     */
    protected bool $useComponentYield;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $subsidiaryList;

    /**
     * @var bool
     */
    protected bool $availableToPartners;

    /**
     * @var bool
     */
    protected bool $includeChildren;

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
    protected RecordRef $vendor;

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
     * @var RecordRef
     */
    protected RecordRef $costCategory;

    /**
     * @var RecordRef
     */
    protected RecordRef $purchaseTaxCode;

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
    protected RecordRef $wipVarianceAcct;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxSchedule;

    /**
     * @var RecordRef
     */
    protected RecordRef $scrapAcct;

    /**
     * @var float
     */
    protected float $shippingCost;

    /**
     * @var RecordRef
     */
    protected RecordRef $wipAcct;

    /**
     * @var string
     */
    protected string $shippingCostUnits;

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
    protected string $handlingCostUnits;

    /**
     * @var ItemWeightUnit
     */
    protected ItemWeightUnit $weightUnit;

    /**
     * @var string
     */
    protected string $weightUnits;

    /**
     * @var ItemCostingMethod
     */
    protected ItemCostingMethod $costingMethod;

    /**
     * @var bool
     */
    protected bool $isTaxable;

    /**
     * @var string
     */
    protected string $costingMethodDisplay;

    /**
     * @var float
     */
    protected float $rate;

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
    protected string $minimumQuantityUnits;

    /**
     * @var string
     */
    protected string $defaultRevision;

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
     * @var bool
     */
    protected bool $isDropShipItem;

    /**
     * @var bool
     */
    protected bool $isPhantom;

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
    protected bool $buildEntireAssembly;

    /**
     * @var float
     */
    protected float $quantityOnHand;

    /**
     * @var string
     */
    protected string $quantityOnHandUnits;

    /**
     * @var bool
     */
    protected bool $useMarginalRates;

    /**
     * @var int
     */
    protected int $reorderMultiple;

    /**
     * @var float
     */
    protected float $cost;

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
     * @var float
     */
    protected float $lastPurchasePrice;

    /**
     * @var string
     */
    protected string $purchaseDescription;

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
    protected float $safetyStockLevel;

    /**
     * @var string
     */
    protected string $safetyStockLevelUnits;

    /**
     * @var int
     */
    protected int $safetyStockLevelDays;

    /**
     * @var bool
     */
    protected bool $seasonalDemand;

    /**
     * @var string
     */
    protected string $serialNumbers;

    /**
     * @var float
     */
    protected float $reorderPoint;

    /**
     * @var string
     */
    protected string $reorderPointUnits;

    /**
     * @var float
     */
    protected float $preferredStockLevel;

    /**
     * @var string
     */
    protected string $preferredStockLevelUnits;

    /**
     * @var float
     */
    protected float $demandModifier;

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
     * @var bool
     */
    protected bool $shipIndividually;

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
     * @var float
     */
    protected float $quantityOnOrder;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipPackage;

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
    protected string $urlComponent;

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
    protected string $shoppingDotComCategory;

    /**
     * @var int
     */
    protected int $shopzillaCategoryId;

    /**
     * @var string
     */
    protected string $outOfStockMessage;

    /**
     * @var string
     */
    protected string $nexTagCategory;

    /**
     * @var ItemOutOfStockBehavior
     */
    protected ItemOutOfStockBehavior $outOfStockBehavior;

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
     * @var SerializedAssemblyItemBillOfMaterialsList
     */
    protected SerializedAssemblyItemBillOfMaterialsList $billOfMaterialsList;

    /**
     * @var ItemMemberList
     */
    protected ItemMemberList $memberList;

    /**
     * @var ItemAccountingBookDetailList
     */
    protected ItemAccountingBookDetailList $accountingBookDetailList;

    /**
     * @var SerializedInventoryItemLocationsList
     */
    protected SerializedInventoryItemLocationsList $locationsList;

    /**
     * @var SiteCategoryList
     */
    protected SiteCategoryList $siteCategoryList;

    /**
     * @var InventoryItemBinNumberList
     */
    protected InventoryItemBinNumberList $binNumberList;

    /**
     * @var SerializedInventoryItemNumbersList
     */
    protected SerializedInventoryItemNumbersList $numbersList;

    /**
     * @var TranslationList
     */
    protected TranslationList $translationsList;

    /**
     * @var PresentationItemList
     */
    protected PresentationItemList $presentationItemList;

    /**
     * @var SerializedAssemblyItemHierarchyVersionsList
     */
    protected SerializedAssemblyItemHierarchyVersionsList $hierarchyVersionsList;

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
        "isOnline" => "boolean",
        "lastInvtCountDate" => "dateTime",
        "nextInvtCountDate" => "dateTime",
        "invtCountInterval" => "integer",
        "invtClassification" => "ItemInvtClassification",
        "isGcoCompliant" => "boolean",
        "offerSupport" => "boolean",
        "useComponentYield" => "boolean",
        "isInactive" => "boolean",
        "subsidiaryList" => "RecordRefList",
        "availableToPartners" => "boolean",
        "includeChildren" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "description" => "string",
        "cogsAccount" => "RecordRef",
        "vendor" => "RecordRef",
        "incomeAccount" => "RecordRef",
        "intercoIncomeAccount" => "RecordRef",
        "assetAccount" => "RecordRef",
        "matchBillToReceipt" => "boolean",
        "billQtyVarianceAcct" => "RecordRef",
        "billPriceVarianceAcct" => "RecordRef",
        "billExchRateVarianceAcct" => "RecordRef",
        "gainLossAccount" => "RecordRef",
        "salesTaxCode" => "RecordRef",
        "costCategory" => "RecordRef",
        "purchaseTaxCode" => "RecordRef",
        "prodQtyVarianceAcct" => "RecordRef",
        "prodPriceVarianceAcct" => "RecordRef",
        "purchasePriceVarianceAcct" => "RecordRef",
        "wipVarianceAcct" => "RecordRef",
        "taxSchedule" => "RecordRef",
        "scrapAcct" => "RecordRef",
        "shippingCost" => "float",
        "wipAcct" => "RecordRef",
        "shippingCostUnits" => "string",
        "handlingCost" => "float",
        "weight" => "float",
        "handlingCostUnits" => "string",
        "weightUnit" => "ItemWeightUnit",
        "weightUnits" => "string",
        "costingMethod" => "ItemCostingMethod",
        "isTaxable" => "boolean",
        "costingMethodDisplay" => "string",
        "rate" => "float",
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
        "minimumQuantityUnits" => "string",
        "defaultRevision" => "string",
        "defaultItemShipMethod" => "RecordRef",
        "itemCarrier" => "ShippingCarrier",
        "roundUpAsComponent" => "boolean",
        "purchaseOrderQuantity" => "float",
        "purchaseOrderAmount" => "float",
        "purchaseOrderQuantityDiff" => "float",
        "receiptQuantity" => "float",
        "receiptAmount" => "float",
        "receiptQuantityDiff" => "float",
        "isDropShipItem" => "boolean",
        "isPhantom" => "boolean",
        "itemShipMethodList" => "RecordRefList",
        "manufacturerTaxId" => "string",
        "scheduleBNumber" => "string",
        "scheduleBQuantity" => "integer",
        "scheduleBCode" => "RecordRef",
        "manufacturerTariff" => "string",
        "preferenceCriterion" => "ItemPreferenceCriterion",
        "issueProduct" => "RecordRef",
        "minimumQuantity" => "integer",
        "enforceMinQtyInternally" => "boolean",
        "maximumQuantity" => "integer",
        "softDescriptor" => "RecordRef",
        "isSpecialWorkOrderItem" => "boolean",
        "pricesIncludeTax" => "boolean",
        "quantityPricingSchedule" => "RecordRef",
        "buildEntireAssembly" => "boolean",
        "quantityOnHand" => "float",
        "quantityOnHandUnits" => "string",
        "useMarginalRates" => "boolean",
        "reorderMultiple" => "integer",
        "cost" => "float",
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
        "lastPurchasePrice" => "float",
        "purchaseDescription" => "string",
        "leadTime" => "integer",
        "autoLeadTime" => "boolean",
        "buildTime" => "integer",
        "safetyStockLevel" => "float",
        "safetyStockLevelUnits" => "string",
        "safetyStockLevelDays" => "integer",
        "seasonalDemand" => "boolean",
        "serialNumbers" => "string",
        "reorderPoint" => "float",
        "reorderPointUnits" => "string",
        "preferredStockLevel" => "float",
        "preferredStockLevelUnits" => "string",
        "demandModifier" => "float",
        "autoReorderPoint" => "boolean",
        "autoPreferredStockLevel" => "boolean",
        "preferredStockLevelDays" => "float",
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
        "shipIndividually" => "boolean",
        "quantityCommitted" => "float",
        "quantityAvailable" => "float",
        "quantityBackOrdered" => "float",
        "quantityOnOrder" => "float",
        "shipPackage" => "RecordRef",
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
        "urlComponent" => "string",
        "searchKeywords" => "string",
        "isDonationItem" => "boolean",
        "showDefaultDonationAmount" => "boolean",
        "maxDonationAmount" => "float",
        "dontShowPrice" => "boolean",
        "noPriceMessage" => "string",
        "shoppingDotComCategory" => "string",
        "shopzillaCategoryId" => "integer",
        "outOfStockMessage" => "string",
        "nexTagCategory" => "string",
        "outOfStockBehavior" => "ItemOutOfStockBehavior",
        "productFeedList" => "ProductFeedList",
        "relatedItemsDescription" => "string",
        "onSpecial" => "boolean",
        "specialsDescription" => "string",
        "featuredDescription" => "string",
        "itemOptionsList" => "ItemOptionsList",
        "itemNumberOptionsList" => "RecordRefList",
        "itemVendorList" => "ItemVendorList",
        "pricingMatrix" => "PricingMatrix",
        "billOfMaterialsList" => "SerializedAssemblyItemBillOfMaterialsList",
        "memberList" => "ItemMemberList",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "locationsList" => "SerializedInventoryItemLocationsList",
        "siteCategoryList" => "SiteCategoryList",
        "binNumberList" => "InventoryItemBinNumberList",
        "numbersList" => "SerializedInventoryItemNumbersList",
        "translationsList" => "TranslationList",
        "presentationItemList" => "PresentationItemList",
        "hierarchyVersionsList" => "SerializedAssemblyItemHierarchyVersionsList",
        "futureHorizon" => "integer",
        "consumptionUnit" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return SerializedAssemblyItem
     */
    public function setCreatedDate(string $createdDate): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setLastModifiedDate(string $lastModifiedDate): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setCustomForm(RecordRef $customForm): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setItemId(string $itemId): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setUpcCode(string $upcCode): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setDisplayName(string $displayName): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setVendorName(string $vendorName): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setParent(RecordRef $parent): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setPrintItems(bool $printItems): SerializedAssemblyItem
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
     * @param bool $isOnline
     * @return SerializedAssemblyItem
     */
    public function setIsOnline(bool $isOnline): SerializedAssemblyItem
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
     * @param string $lastInvtCountDate
     * @return SerializedAssemblyItem
     */
    public function setLastInvtCountDate(string $lastInvtCountDate): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setNextInvtCountDate(string $nextInvtCountDate): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setInvtCountInterval(int $invtCountInterval): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setInvtClassification(ItemInvtClassification $invtClassification): SerializedAssemblyItem
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
     * @param bool $isGcoCompliant
     * @return SerializedAssemblyItem
     */
    public function setIsGcoCompliant(bool $isGcoCompliant): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setOfferSupport(bool $offerSupport): SerializedAssemblyItem
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
     * @param bool $useComponentYield
     * @return SerializedAssemblyItem
     */
    public function setUseComponentYield(bool $useComponentYield): SerializedAssemblyItem
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
     * @param bool $isInactive
     * @return SerializedAssemblyItem
     */
    public function setIsInactive(bool $isInactive): SerializedAssemblyItem
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
     * @param RecordRefList $subsidiaryList
     * @return SerializedAssemblyItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): SerializedAssemblyItem
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
     * @param bool $availableToPartners
     * @return SerializedAssemblyItem
     */
    public function setAvailableToPartners(bool $availableToPartners): SerializedAssemblyItem
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
     * @param bool $includeChildren
     * @return SerializedAssemblyItem
     */
    public function setIncludeChildren(bool $includeChildren): SerializedAssemblyItem
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
     * @param RecordRef $department
     * @return SerializedAssemblyItem
     */
    public function setDepartment(RecordRef $department): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setClass(RecordRef $class): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setLocation(RecordRef $location): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setDescription(string $description): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setCogsAccount(RecordRef $cogsAccount): SerializedAssemblyItem
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
     * @param RecordRef $vendor
     * @return SerializedAssemblyItem
     */
    public function setVendor(RecordRef $vendor): SerializedAssemblyItem
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
     * @param RecordRef $incomeAccount
     * @return SerializedAssemblyItem
     */
    public function setIncomeAccount(RecordRef $incomeAccount): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setIntercoIncomeAccount(RecordRef $intercoIncomeAccount): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setAssetAccount(RecordRef $assetAccount): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setMatchBillToReceipt(bool $matchBillToReceipt): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setBillQtyVarianceAcct(RecordRef $billQtyVarianceAcct): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setBillPriceVarianceAcct(RecordRef $billPriceVarianceAcct): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setBillExchRateVarianceAcct(RecordRef $billExchRateVarianceAcct): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setGainLossAccount(RecordRef $gainLossAccount): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setSalesTaxCode(RecordRef $salesTaxCode): SerializedAssemblyItem
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
     * @param RecordRef $costCategory
     * @return SerializedAssemblyItem
     */
    public function setCostCategory(RecordRef $costCategory): SerializedAssemblyItem
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
     * @param RecordRef $purchaseTaxCode
     * @return SerializedAssemblyItem
     */
    public function setPurchaseTaxCode(RecordRef $purchaseTaxCode): SerializedAssemblyItem
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
     * @param RecordRef $prodQtyVarianceAcct
     * @return SerializedAssemblyItem
     */
    public function setProdQtyVarianceAcct(RecordRef $prodQtyVarianceAcct): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setProdPriceVarianceAcct(RecordRef $prodPriceVarianceAcct): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setPurchasePriceVarianceAcct(RecordRef $purchasePriceVarianceAcct): SerializedAssemblyItem
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
     * @param RecordRef $wipVarianceAcct
     * @return SerializedAssemblyItem
     */
    public function setWipVarianceAcct(RecordRef $wipVarianceAcct): SerializedAssemblyItem
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
     * @param RecordRef $taxSchedule
     * @return SerializedAssemblyItem
     */
    public function setTaxSchedule(RecordRef $taxSchedule): SerializedAssemblyItem
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
     * @param RecordRef $scrapAcct
     * @return SerializedAssemblyItem
     */
    public function setScrapAcct(RecordRef $scrapAcct): SerializedAssemblyItem
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
     * @param float $shippingCost
     * @return SerializedAssemblyItem
     */
    public function setShippingCost(float $shippingCost): SerializedAssemblyItem
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
     * @param RecordRef $wipAcct
     * @return SerializedAssemblyItem
     */
    public function setWipAcct(RecordRef $wipAcct): SerializedAssemblyItem
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
     * @param string $shippingCostUnits
     * @return SerializedAssemblyItem
     */
    public function setShippingCostUnits(string $shippingCostUnits): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setHandlingCost(float $handlingCost): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setWeight(float $weight): SerializedAssemblyItem
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
     * @param string $handlingCostUnits
     * @return SerializedAssemblyItem
     */
    public function setHandlingCostUnits(string $handlingCostUnits): SerializedAssemblyItem
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
     * @param ItemWeightUnit $weightUnit
     * @return SerializedAssemblyItem
     */
    public function setWeightUnit(ItemWeightUnit $weightUnit): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setWeightUnits(string $weightUnits): SerializedAssemblyItem
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
     * @param ItemCostingMethod $costingMethod
     * @return SerializedAssemblyItem
     */
    public function setCostingMethod(ItemCostingMethod $costingMethod): SerializedAssemblyItem
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
     * @param bool $isTaxable
     * @return SerializedAssemblyItem
     */
    public function setIsTaxable(bool $isTaxable): SerializedAssemblyItem
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
     * @param string $costingMethodDisplay
     * @return SerializedAssemblyItem
     */
    public function setCostingMethodDisplay(string $costingMethodDisplay): SerializedAssemblyItem
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
     * @param float $rate
     * @return SerializedAssemblyItem
     */
    public function setRate(float $rate): SerializedAssemblyItem
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
     * @param RecordRef $unitsType
     * @return SerializedAssemblyItem
     */
    public function setUnitsType(RecordRef $unitsType): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setStockUnit(RecordRef $stockUnit): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setPurchaseUnit(RecordRef $purchaseUnit): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setSaleUnit(RecordRef $saleUnit): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setTrackLandedCost(bool $trackLandedCost): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setMatrixItemNameTemplate(string $matrixItemNameTemplate): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setBillingSchedule(RecordRef $billingSchedule): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setDeferredRevenueAccount(RecordRef $deferredRevenueAccount): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setStockDescription(string $stockDescription): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setProducer(bool $producer): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setManufacturer(string $manufacturer): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setMpn(string $mpn): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setMultManufactureAddr(bool $multManufactureAddr): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setManufacturerCity(string $manufacturerCity): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setManufacturerState(string $manufacturerState): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setManufacturerZip(string $manufacturerZip): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setCountryOfManufacture(Country $countryOfManufacture): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setEffectiveBomControl(AssemblyItemEffectiveBomControl $effectiveBomControl): SerializedAssemblyItem
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
     * @param string $minimumQuantityUnits
     * @return SerializedAssemblyItem
     */
    public function setMinimumQuantityUnits(string $minimumQuantityUnits): SerializedAssemblyItem
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
     * @param string $defaultRevision
     * @return SerializedAssemblyItem
     */
    public function setDefaultRevision(string $defaultRevision): SerializedAssemblyItem
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
     * @param RecordRef $defaultItemShipMethod
     * @return SerializedAssemblyItem
     */
    public function setDefaultItemShipMethod(RecordRef $defaultItemShipMethod): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setItemCarrier(ShippingCarrier $itemCarrier): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setRoundUpAsComponent(bool $roundUpAsComponent): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setPurchaseOrderQuantity(float $purchaseOrderQuantity): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setPurchaseOrderAmount(float $purchaseOrderAmount): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setPurchaseOrderQuantityDiff(float $purchaseOrderQuantityDiff): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setReceiptQuantity(float $receiptQuantity): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setReceiptAmount(float $receiptAmount): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setReceiptQuantityDiff(float $receiptQuantityDiff): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setIsDropShipItem(bool $isDropShipItem): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setIsPhantom(bool $isPhantom): SerializedAssemblyItem
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
     * @param RecordRefList $itemShipMethodList
     * @return SerializedAssemblyItem
     */
    public function setItemShipMethodList(RecordRefList $itemShipMethodList): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setManufacturerTaxId(string $manufacturerTaxId): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setScheduleBNumber(string $scheduleBNumber): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setScheduleBQuantity(int $scheduleBQuantity): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setScheduleBCode(RecordRef $scheduleBCode): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setManufacturerTariff(string $manufacturerTariff): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setPreferenceCriterion(ItemPreferenceCriterion $preferenceCriterion): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setIssueProduct(RecordRef $issueProduct): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setMinimumQuantity(int $minimumQuantity): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setEnforceMinQtyInternally(bool $enforceMinQtyInternally): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setMaximumQuantity(int $maximumQuantity): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setSoftDescriptor(RecordRef $softDescriptor): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setIsSpecialWorkOrderItem(bool $isSpecialWorkOrderItem): SerializedAssemblyItem
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
     * @param bool $pricesIncludeTax
     * @return SerializedAssemblyItem
     */
    public function setPricesIncludeTax(bool $pricesIncludeTax): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setQuantityPricingSchedule(RecordRef $quantityPricingSchedule): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setBuildEntireAssembly(bool $buildEntireAssembly): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setQuantityOnHand(float $quantityOnHand): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setQuantityOnHandUnits(string $quantityOnHandUnits): SerializedAssemblyItem
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
     * @param bool $useMarginalRates
     * @return SerializedAssemblyItem
     */
    public function setUseMarginalRates(bool $useMarginalRates): SerializedAssemblyItem
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
     * @param int $reorderMultiple
     * @return SerializedAssemblyItem
     */
    public function setReorderMultiple(int $reorderMultiple): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setCost(float $cost): SerializedAssemblyItem
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
     * @param ItemCostEstimateType $costEstimateType
     * @return SerializedAssemblyItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setIsHazmatItem(bool $isHazmatItem): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setHazmatId(string $hazmatId): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setHazmatShippingName(string $hazmatShippingName): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setHazmatHazardClass(string $hazmatHazardClass): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setHazmatPackingGroup(HazmatPackingGroup $hazmatPackingGroup): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setHazmatItemUnits(string $hazmatItemUnits): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setHazmatItemUnitsQty(float $hazmatItemUnitsQty): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setCostEstimate(float $costEstimate): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setTransferPrice(float $transferPrice): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setOverallQuantityPricingType(ItemOverallQuantityPricingType $overallQuantityPricingType): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setPricingGroup(RecordRef $pricingGroup): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setIntercoCogsAccount(RecordRef $intercoCogsAccount): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setVsoePrice(float $vsoePrice): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setVsoeSopGroup(VsoeSopGroup $vsoeSopGroup): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setVsoeDelivered(bool $vsoeDelivered): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setItemRevenueCategory(RecordRef $itemRevenueCategory): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setUnbuildVarianceAccount(RecordRef $unbuildVarianceAccount): SerializedAssemblyItem
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
     * @param RecordRef $revenueRecognitionRule
     * @return SerializedAssemblyItem
     */
    public function setRevenueRecognitionRule(RecordRef $revenueRecognitionRule): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setRevRecForecastRule(RecordRef $revRecForecastRule): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setRevenueAllocationGroup(RecordRef $revenueAllocationGroup): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setCreateRevenuePlansOn(RecordRef $createRevenuePlansOn): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setDirectRevenuePosting(bool $directRevenuePosting): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setDropshipExpenseAccount(RecordRef $dropshipExpenseAccount): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setPreferredLocation(RecordRef $preferredLocation): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setIsStorePickupAllowed(bool $isStorePickupAllowed): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setTotalValue(float $totalValue): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setUseBins(bool $useBins): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setAverageCost(float $averageCost): SerializedAssemblyItem
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
     * @param float $lastPurchasePrice
     * @return SerializedAssemblyItem
     */
    public function setLastPurchasePrice(float $lastPurchasePrice): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setPurchaseDescription(string $purchaseDescription): SerializedAssemblyItem
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
     * @param int $leadTime
     * @return SerializedAssemblyItem
     */
    public function setLeadTime(int $leadTime): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setAutoLeadTime(bool $autoLeadTime): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setBuildTime(int $buildTime): SerializedAssemblyItem
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
     * @param float $safetyStockLevel
     * @return SerializedAssemblyItem
     */
    public function setSafetyStockLevel(float $safetyStockLevel): SerializedAssemblyItem
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
     * @param string $safetyStockLevelUnits
     * @return SerializedAssemblyItem
     */
    public function setSafetyStockLevelUnits(string $safetyStockLevelUnits): SerializedAssemblyItem
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
     * @param int $safetyStockLevelDays
     * @return SerializedAssemblyItem
     */
    public function setSafetyStockLevelDays(int $safetyStockLevelDays): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setSeasonalDemand(bool $seasonalDemand): SerializedAssemblyItem
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
     * @param string $serialNumbers
     * @return SerializedAssemblyItem
     */
    public function setSerialNumbers(string $serialNumbers): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setReorderPoint(float $reorderPoint): SerializedAssemblyItem
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
     * @param string $reorderPointUnits
     * @return SerializedAssemblyItem
     */
    public function setReorderPointUnits(string $reorderPointUnits): SerializedAssemblyItem
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
     * @param float $preferredStockLevel
     * @return SerializedAssemblyItem
     */
    public function setPreferredStockLevel(float $preferredStockLevel): SerializedAssemblyItem
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
     * @param string $preferredStockLevelUnits
     * @return SerializedAssemblyItem
     */
    public function setPreferredStockLevelUnits(string $preferredStockLevelUnits): SerializedAssemblyItem
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
     * @param float $demandModifier
     * @return SerializedAssemblyItem
     */
    public function setDemandModifier(float $demandModifier): SerializedAssemblyItem
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
     * @param bool $autoReorderPoint
     * @return SerializedAssemblyItem
     */
    public function setAutoReorderPoint(bool $autoReorderPoint): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setAutoPreferredStockLevel(bool $autoPreferredStockLevel): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setPreferredStockLevelDays(float $preferredStockLevelDays): SerializedAssemblyItem
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
     * @param float $defaultReturnCost
     * @return SerializedAssemblyItem
     */
    public function setDefaultReturnCost(float $defaultReturnCost): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setSupplyReplenishmentMethod(RecordRef $supplyReplenishmentMethod): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setAlternateDemandSourceItem(RecordRef $alternateDemandSourceItem): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setFixedLotSize(float $fixedLotSize): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setSupplyType(RecordRef $supplyType): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setDemandTimeFence(int $demandTimeFence): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setSupplyTimeFence(int $supplyTimeFence): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setRescheduleInDays(int $rescheduleInDays): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setRescheduleOutDays(int $rescheduleOutDays): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setSupplyLotSizingMethod(RecordRef $supplyLotSizingMethod): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setDemandSource(RecordRef $demandSource): SerializedAssemblyItem
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
     * @param bool $shipIndividually
     * @return SerializedAssemblyItem
     */
    public function setShipIndividually(bool $shipIndividually): SerializedAssemblyItem
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
     * @param float $quantityCommitted
     * @return SerializedAssemblyItem
     */
    public function setQuantityCommitted(float $quantityCommitted): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setQuantityAvailable(float $quantityAvailable): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setQuantityBackOrdered(float $quantityBackOrdered): SerializedAssemblyItem
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
     * @param float $quantityOnOrder
     * @return SerializedAssemblyItem
     */
    public function setQuantityOnOrder(float $quantityOnOrder): SerializedAssemblyItem
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
     * @param RecordRef $shipPackage
     * @return SerializedAssemblyItem
     */
    public function setShipPackage(RecordRef $shipPackage): SerializedAssemblyItem
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
     * @param string $storeDisplayName
     * @return SerializedAssemblyItem
     */
    public function setStoreDisplayName(string $storeDisplayName): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setStoreDisplayThumbnail(RecordRef $storeDisplayThumbnail): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setStoreDisplayImage(RecordRef $storeDisplayImage): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setStoreDescription(string $storeDescription): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setStoreDetailedDescription(string $storeDetailedDescription): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setStoreItemTemplate(RecordRef $storeItemTemplate): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setPageTitle(string $pageTitle): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setMetaTagHtml(string $metaTagHtml): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setExcludeFromSitemap(bool $excludeFromSitemap): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setSitemapPriority(SitemapPriority $sitemapPriority): SerializedAssemblyItem
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
     * @param string $urlComponent
     * @return SerializedAssemblyItem
     */
    public function setUrlComponent(string $urlComponent): SerializedAssemblyItem
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
     * @param string $searchKeywords
     * @return SerializedAssemblyItem
     */
    public function setSearchKeywords(string $searchKeywords): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setIsDonationItem(bool $isDonationItem): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setShowDefaultDonationAmount(bool $showDefaultDonationAmount): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setMaxDonationAmount(float $maxDonationAmount): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setDontShowPrice(bool $dontShowPrice): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setNoPriceMessage(string $noPriceMessage): SerializedAssemblyItem
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
     * @param string $shoppingDotComCategory
     * @return SerializedAssemblyItem
     */
    public function setShoppingDotComCategory(string $shoppingDotComCategory): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setShopzillaCategoryId(int $shopzillaCategoryId): SerializedAssemblyItem
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
     * @param string $outOfStockMessage
     * @return SerializedAssemblyItem
     */
    public function setOutOfStockMessage(string $outOfStockMessage): SerializedAssemblyItem
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
     * @param string $nexTagCategory
     * @return SerializedAssemblyItem
     */
    public function setNexTagCategory(string $nexTagCategory): SerializedAssemblyItem
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
     * @param ItemOutOfStockBehavior $outOfStockBehavior
     * @return SerializedAssemblyItem
     */
    public function setOutOfStockBehavior(ItemOutOfStockBehavior $outOfStockBehavior): SerializedAssemblyItem
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
     * @param ProductFeedList $productFeedList
     * @return SerializedAssemblyItem
     */
    public function setProductFeedList(ProductFeedList $productFeedList): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setRelatedItemsDescription(string $relatedItemsDescription): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setOnSpecial(bool $onSpecial): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setSpecialsDescription(string $specialsDescription): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setFeaturedDescription(string $featuredDescription): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setItemOptionsList(ItemOptionsList $itemOptionsList): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setItemNumberOptionsList(RecordRefList $itemNumberOptionsList): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setItemVendorList(ItemVendorList $itemVendorList): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setPricingMatrix(PricingMatrix $pricingMatrix): SerializedAssemblyItem
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
     * @param SerializedAssemblyItemBillOfMaterialsList $billOfMaterialsList
     * @return SerializedAssemblyItem
     */
    public function setBillOfMaterialsList(SerializedAssemblyItemBillOfMaterialsList $billOfMaterialsList): SerializedAssemblyItem
    {
        $this->billOfMaterialsList = $billOfMaterialsList;
        return $this;
    }

    /**
     * @return SerializedAssemblyItemBillOfMaterialsList
     */
    public function getBillOfMaterialsList(): SerializedAssemblyItemBillOfMaterialsList
    {
        return $this->billOfMaterialsList;
    }

    /**
     * @param ItemMemberList $memberList
     * @return SerializedAssemblyItem
     */
    public function setMemberList(ItemMemberList $memberList): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setAccountingBookDetailList(ItemAccountingBookDetailList $accountingBookDetailList): SerializedAssemblyItem
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
     * @param SerializedInventoryItemLocationsList $locationsList
     * @return SerializedAssemblyItem
     */
    public function setLocationsList(SerializedInventoryItemLocationsList $locationsList): SerializedAssemblyItem
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
     * @param SiteCategoryList $siteCategoryList
     * @return SerializedAssemblyItem
     */
    public function setSiteCategoryList(SiteCategoryList $siteCategoryList): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setBinNumberList(InventoryItemBinNumberList $binNumberList): SerializedAssemblyItem
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
     * @param SerializedInventoryItemNumbersList $numbersList
     * @return SerializedAssemblyItem
     */
    public function setNumbersList(SerializedInventoryItemNumbersList $numbersList): SerializedAssemblyItem
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
     * @param TranslationList $translationsList
     * @return SerializedAssemblyItem
     */
    public function setTranslationsList(TranslationList $translationsList): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setPresentationItemList(PresentationItemList $presentationItemList): SerializedAssemblyItem
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
     * @param SerializedAssemblyItemHierarchyVersionsList $hierarchyVersionsList
     * @return SerializedAssemblyItem
     */
    public function setHierarchyVersionsList(SerializedAssemblyItemHierarchyVersionsList $hierarchyVersionsList): SerializedAssemblyItem
    {
        $this->hierarchyVersionsList = $hierarchyVersionsList;
        return $this;
    }

    /**
     * @return SerializedAssemblyItemHierarchyVersionsList
     */
    public function getHierarchyVersionsList(): SerializedAssemblyItemHierarchyVersionsList
    {
        return $this->hierarchyVersionsList;
    }

    /**
     * @param int $futureHorizon
     * @return SerializedAssemblyItem
     */
    public function setFutureHorizon(int $futureHorizon): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setConsumptionUnit(RecordRef $consumptionUnit): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setInternalId(string $internalId): SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
     */
    public function setExternalId(string $externalId): SerializedAssemblyItem
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
