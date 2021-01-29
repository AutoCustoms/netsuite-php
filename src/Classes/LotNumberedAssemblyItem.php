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

class LotNumberedAssemblyItem extends Record {
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
     * @var RecordRef
     */
    protected RecordRef $costCategory;

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
    protected string $manufacturerTaxId;

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
     * @var float
     */
    protected float $preferredStockLevel;

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
     * @var bool
     */
    protected bool $shipIndividually;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipPackage;

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
     * @var LotNumberedAssemblyItemBillOfMaterialsList
     */
    protected LotNumberedAssemblyItemBillOfMaterialsList $billOfMaterialsList;

    /**
     * @var ItemMemberList
     */
    protected ItemMemberList $memberList;

    /**
     * @var ItemAccountingBookDetailList
     */
    protected ItemAccountingBookDetailList $accountingBookDetailList;

    /**
     * @var LotNumberedInventoryItemLocationsList
     */
    protected LotNumberedInventoryItemLocationsList $locationsList;

    /**
     * @var SiteCategoryList
     */
    protected SiteCategoryList $siteCategoryList;

    /**
     * @var InventoryItemBinNumberList
     */
    protected InventoryItemBinNumberList $binNumberList;

    /**
     * @var LotNumberedInventoryItemNumbersList
     */
    protected LotNumberedInventoryItemNumbersList $numbersList;

    /**
     * @var TranslationList
     */
    protected TranslationList $translationsList;

    /**
     * @var PresentationItemList
     */
    protected PresentationItemList $presentationItemList;

    /**
     * @var LotNumberedAssemblyItemHierarchyVersionsList
     */
    protected LotNumberedAssemblyItemHierarchyVersionsList $hierarchyVersionsList;

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
        "isGcoCompliant" => "boolean",
        "offerSupport" => "boolean",
        "useComponentYield" => "boolean",
        "isInactive" => "boolean",
        "availableToPartners" => "boolean",
        "subsidiaryList" => "RecordRefList",
        "department" => "RecordRef",
        "includeChildren" => "boolean",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "costCategory" => "RecordRef",
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
        "purchaseTaxCode" => "RecordRef",
        "prodQtyVarianceAcct" => "RecordRef",
        "prodPriceVarianceAcct" => "RecordRef",
        "purchasePriceVarianceAcct" => "RecordRef",
        "wipVarianceAcct" => "RecordRef",
        "taxSchedule" => "RecordRef",
        "scrapAcct" => "RecordRef",
        "shippingCost" => "float",
        "wipAcct" => "RecordRef",
        "handlingCost" => "float",
        "weight" => "float",
        "weightUnit" => "ItemWeightUnit",
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
        "manufacturerTaxId" => "string",
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
        "safetyStockLevelDays" => "integer",
        "seasonalDemand" => "boolean",
        "serialNumbers" => "string",
        "reorderPoint" => "float",
        "preferredStockLevel" => "float",
        "expirationDate" => "dateTime",
        "lastInvtCountDate" => "dateTime",
        "nextInvtCountDate" => "dateTime",
        "invtCountInterval" => "integer",
        "invtClassification" => "ItemInvtClassification",
        "demandModifier" => "float",
        "autoReorderPoint" => "boolean",
        "autoPreferredStockLevel" => "boolean",
        "preferredStockLevelDays" => "float",
        "shipIndividually" => "boolean",
        "shipPackage" => "RecordRef",
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
        "quantityCommitted" => "float",
        "quantityAvailable" => "float",
        "quantityBackOrdered" => "float",
        "quantityOnOrder" => "float",
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
        "billOfMaterialsList" => "LotNumberedAssemblyItemBillOfMaterialsList",
        "memberList" => "ItemMemberList",
        "accountingBookDetailList" => "ItemAccountingBookDetailList",
        "locationsList" => "LotNumberedInventoryItemLocationsList",
        "siteCategoryList" => "SiteCategoryList",
        "binNumberList" => "InventoryItemBinNumberList",
        "numbersList" => "LotNumberedInventoryItemNumbersList",
        "translationsList" => "TranslationList",
        "presentationItemList" => "PresentationItemList",
        "hierarchyVersionsList" => "LotNumberedAssemblyItemHierarchyVersionsList",
        "futureHorizon" => "integer",
        "consumptionUnit" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return LotNumberedAssemblyItem
     */
    public function setCreatedDate(string $createdDate): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setLastModifiedDate(string $lastModifiedDate): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setCustomForm(RecordRef $customForm): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setItemId(string $itemId): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setUpcCode(string $upcCode): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setDisplayName(string $displayName): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setVendorName(string $vendorName): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setParent(RecordRef $parent): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setPrintItems(bool $printItems): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setIsOnline(bool $isOnline): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setIsGcoCompliant(bool $isGcoCompliant): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setOfferSupport(bool $offerSupport): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setUseComponentYield(bool $useComponentYield): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setIsInactive(bool $isInactive): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setAvailableToPartners(bool $availableToPartners): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setDepartment(RecordRef $department): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setIncludeChildren(bool $includeChildren): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setClass(RecordRef $class): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setLocation(RecordRef $location): LotNumberedAssemblyItem
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
     * @param RecordRef $costCategory
     * @return LotNumberedAssemblyItem
     */
    public function setCostCategory(RecordRef $costCategory): LotNumberedAssemblyItem
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
     * @param string $description
     * @return LotNumberedAssemblyItem
     */
    public function setDescription(string $description): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setCogsAccount(RecordRef $cogsAccount): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setVendor(RecordRef $vendor): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setIncomeAccount(RecordRef $incomeAccount): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setIntercoIncomeAccount(RecordRef $intercoIncomeAccount): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setAssetAccount(RecordRef $assetAccount): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setMatchBillToReceipt(bool $matchBillToReceipt): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setBillQtyVarianceAcct(RecordRef $billQtyVarianceAcct): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setBillPriceVarianceAcct(RecordRef $billPriceVarianceAcct): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setBillExchRateVarianceAcct(RecordRef $billExchRateVarianceAcct): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setGainLossAccount(RecordRef $gainLossAccount): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setSalesTaxCode(RecordRef $salesTaxCode): LotNumberedAssemblyItem
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
     * @param RecordRef $purchaseTaxCode
     * @return LotNumberedAssemblyItem
     */
    public function setPurchaseTaxCode(RecordRef $purchaseTaxCode): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setProdQtyVarianceAcct(RecordRef $prodQtyVarianceAcct): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setProdPriceVarianceAcct(RecordRef $prodPriceVarianceAcct): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setPurchasePriceVarianceAcct(RecordRef $purchasePriceVarianceAcct): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setWipVarianceAcct(RecordRef $wipVarianceAcct): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setTaxSchedule(RecordRef $taxSchedule): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setScrapAcct(RecordRef $scrapAcct): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setShippingCost(float $shippingCost): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setWipAcct(RecordRef $wipAcct): LotNumberedAssemblyItem
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
     * @param float $handlingCost
     * @return LotNumberedAssemblyItem
     */
    public function setHandlingCost(float $handlingCost): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setWeight(float $weight): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setWeightUnit(ItemWeightUnit $weightUnit): LotNumberedAssemblyItem
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
     * @param ItemCostingMethod $costingMethod
     * @return LotNumberedAssemblyItem
     */
    public function setCostingMethod(ItemCostingMethod $costingMethod): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setIsTaxable(bool $isTaxable): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setCostingMethodDisplay(string $costingMethodDisplay): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setRate(float $rate): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setUnitsType(RecordRef $unitsType): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setStockUnit(RecordRef $stockUnit): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setPurchaseUnit(RecordRef $purchaseUnit): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setSaleUnit(RecordRef $saleUnit): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setTrackLandedCost(bool $trackLandedCost): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setMatrixItemNameTemplate(string $matrixItemNameTemplate): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setBillingSchedule(RecordRef $billingSchedule): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setDeferredRevenueAccount(RecordRef $deferredRevenueAccount): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setStockDescription(string $stockDescription): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setProducer(bool $producer): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setManufacturer(string $manufacturer): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setMpn(string $mpn): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setMultManufactureAddr(bool $multManufactureAddr): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setManufacturerCity(string $manufacturerCity): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setManufacturerState(string $manufacturerState): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setManufacturerZip(string $manufacturerZip): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setCountryOfManufacture(Country $countryOfManufacture): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setEffectiveBomControl(AssemblyItemEffectiveBomControl $effectiveBomControl): LotNumberedAssemblyItem
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
     * @param string $manufacturerTaxId
     * @return LotNumberedAssemblyItem
     */
    public function setManufacturerTaxId(string $manufacturerTaxId): LotNumberedAssemblyItem
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
     * @param string $defaultRevision
     * @return LotNumberedAssemblyItem
     */
    public function setDefaultRevision(string $defaultRevision): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setDefaultItemShipMethod(RecordRef $defaultItemShipMethod): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setItemCarrier(ShippingCarrier $itemCarrier): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setRoundUpAsComponent(bool $roundUpAsComponent): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setPurchaseOrderQuantity(float $purchaseOrderQuantity): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setPurchaseOrderAmount(float $purchaseOrderAmount): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setPurchaseOrderQuantityDiff(float $purchaseOrderQuantityDiff): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setReceiptQuantity(float $receiptQuantity): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setReceiptAmount(float $receiptAmount): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setReceiptQuantityDiff(float $receiptQuantityDiff): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setIsDropShipItem(bool $isDropShipItem): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setIsPhantom(bool $isPhantom): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setItemShipMethodList(RecordRefList $itemShipMethodList): LotNumberedAssemblyItem
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
     * @param string $scheduleBNumber
     * @return LotNumberedAssemblyItem
     */
    public function setScheduleBNumber(string $scheduleBNumber): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setScheduleBQuantity(int $scheduleBQuantity): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setScheduleBCode(RecordRef $scheduleBCode): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setManufacturerTariff(string $manufacturerTariff): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setPreferenceCriterion(ItemPreferenceCriterion $preferenceCriterion): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setIssueProduct(RecordRef $issueProduct): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setMinimumQuantity(int $minimumQuantity): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setEnforceMinQtyInternally(bool $enforceMinQtyInternally): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setMaximumQuantity(int $maximumQuantity): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setSoftDescriptor(RecordRef $softDescriptor): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setIsSpecialWorkOrderItem(bool $isSpecialWorkOrderItem): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setPricesIncludeTax(bool $pricesIncludeTax): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setQuantityPricingSchedule(RecordRef $quantityPricingSchedule): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setBuildEntireAssembly(bool $buildEntireAssembly): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setQuantityOnHand(float $quantityOnHand): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setUseMarginalRates(bool $useMarginalRates): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setReorderMultiple(int $reorderMultiple): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setCost(float $cost): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setIsHazmatItem(bool $isHazmatItem): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setHazmatId(string $hazmatId): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setHazmatShippingName(string $hazmatShippingName): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setHazmatHazardClass(string $hazmatHazardClass): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setHazmatPackingGroup(HazmatPackingGroup $hazmatPackingGroup): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setHazmatItemUnits(string $hazmatItemUnits): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setHazmatItemUnitsQty(float $hazmatItemUnitsQty): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setCostEstimate(float $costEstimate): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setTransferPrice(float $transferPrice): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setOverallQuantityPricingType(ItemOverallQuantityPricingType $overallQuantityPricingType): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setPricingGroup(RecordRef $pricingGroup): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setIntercoCogsAccount(RecordRef $intercoCogsAccount): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setVsoePrice(float $vsoePrice): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setVsoeSopGroup(VsoeSopGroup $vsoeSopGroup): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setVsoeDelivered(bool $vsoeDelivered): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setItemRevenueCategory(RecordRef $itemRevenueCategory): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setUnbuildVarianceAccount(RecordRef $unbuildVarianceAccount): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setRevenueRecognitionRule(RecordRef $revenueRecognitionRule): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setRevRecForecastRule(RecordRef $revRecForecastRule): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setRevenueAllocationGroup(RecordRef $revenueAllocationGroup): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setCreateRevenuePlansOn(RecordRef $createRevenuePlansOn): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setDirectRevenuePosting(bool $directRevenuePosting): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setDropshipExpenseAccount(RecordRef $dropshipExpenseAccount): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setPreferredLocation(RecordRef $preferredLocation): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setIsStorePickupAllowed(bool $isStorePickupAllowed): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setTotalValue(float $totalValue): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setUseBins(bool $useBins): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setAverageCost(float $averageCost): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setLastPurchasePrice(float $lastPurchasePrice): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setPurchaseDescription(string $purchaseDescription): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setLeadTime(int $leadTime): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setAutoLeadTime(bool $autoLeadTime): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setBuildTime(int $buildTime): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setSafetyStockLevel(float $safetyStockLevel): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setSafetyStockLevelDays(int $safetyStockLevelDays): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setSeasonalDemand(bool $seasonalDemand): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setSerialNumbers(string $serialNumbers): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setReorderPoint(float $reorderPoint): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setPreferredStockLevel(float $preferredStockLevel): LotNumberedAssemblyItem
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
     * @param string $expirationDate
     * @return LotNumberedAssemblyItem
     */
    public function setExpirationDate(string $expirationDate): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setLastInvtCountDate(string $lastInvtCountDate): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setNextInvtCountDate(string $nextInvtCountDate): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setInvtCountInterval(int $invtCountInterval): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setInvtClassification(ItemInvtClassification $invtClassification): LotNumberedAssemblyItem
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
     * @param float $demandModifier
     * @return LotNumberedAssemblyItem
     */
    public function setDemandModifier(float $demandModifier): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setAutoReorderPoint(bool $autoReorderPoint): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setAutoPreferredStockLevel(bool $autoPreferredStockLevel): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setPreferredStockLevelDays(float $preferredStockLevelDays): LotNumberedAssemblyItem
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
     * @param bool $shipIndividually
     * @return LotNumberedAssemblyItem
     */
    public function setShipIndividually(bool $shipIndividually): LotNumberedAssemblyItem
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
     * @param RecordRef $shipPackage
     * @return LotNumberedAssemblyItem
     */
    public function setShipPackage(RecordRef $shipPackage): LotNumberedAssemblyItem
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
     * @param float $defaultReturnCost
     * @return LotNumberedAssemblyItem
     */
    public function setDefaultReturnCost(float $defaultReturnCost): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setSupplyReplenishmentMethod(RecordRef $supplyReplenishmentMethod): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setAlternateDemandSourceItem(RecordRef $alternateDemandSourceItem): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setFixedLotSize(float $fixedLotSize): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setSupplyType(RecordRef $supplyType): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setDemandTimeFence(int $demandTimeFence): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setSupplyTimeFence(int $supplyTimeFence): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setRescheduleInDays(int $rescheduleInDays): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setRescheduleOutDays(int $rescheduleOutDays): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setSupplyLotSizingMethod(RecordRef $supplyLotSizingMethod): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setDemandSource(RecordRef $demandSource): LotNumberedAssemblyItem
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
     * @param float $quantityCommitted
     * @return LotNumberedAssemblyItem
     */
    public function setQuantityCommitted(float $quantityCommitted): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setQuantityAvailable(float $quantityAvailable): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setQuantityBackOrdered(float $quantityBackOrdered): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setQuantityOnOrder(float $quantityOnOrder): LotNumberedAssemblyItem
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
     * @param string $storeDisplayName
     * @return LotNumberedAssemblyItem
     */
    public function setStoreDisplayName(string $storeDisplayName): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setStoreDisplayThumbnail(RecordRef $storeDisplayThumbnail): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setStoreDisplayImage(RecordRef $storeDisplayImage): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setStoreDescription(string $storeDescription): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setStoreDetailedDescription(string $storeDetailedDescription): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setStoreItemTemplate(RecordRef $storeItemTemplate): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setPageTitle(string $pageTitle): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setMetaTagHtml(string $metaTagHtml): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setExcludeFromSitemap(bool $excludeFromSitemap): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setSitemapPriority(SitemapPriority $sitemapPriority): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setUrlComponent(string $urlComponent): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setSearchKeywords(string $searchKeywords): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setIsDonationItem(bool $isDonationItem): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setShowDefaultDonationAmount(bool $showDefaultDonationAmount): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setMaxDonationAmount(float $maxDonationAmount): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setDontShowPrice(bool $dontShowPrice): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setNoPriceMessage(string $noPriceMessage): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setOutOfStockMessage(string $outOfStockMessage): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setShoppingDotComCategory(string $shoppingDotComCategory): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setOutOfStockBehavior(ItemOutOfStockBehavior $outOfStockBehavior): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setShopzillaCategoryId(int $shopzillaCategoryId): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setNexTagCategory(string $nexTagCategory): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setProductFeedList(ProductFeedList $productFeedList): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setRelatedItemsDescription(string $relatedItemsDescription): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setOnSpecial(bool $onSpecial): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setSpecialsDescription(string $specialsDescription): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setFeaturedDescription(string $featuredDescription): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setItemOptionsList(ItemOptionsList $itemOptionsList): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setItemNumberOptionsList(RecordRefList $itemNumberOptionsList): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setItemVendorList(ItemVendorList $itemVendorList): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setPricingMatrix(PricingMatrix $pricingMatrix): LotNumberedAssemblyItem
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
     * @param LotNumberedAssemblyItemBillOfMaterialsList $billOfMaterialsList
     * @return LotNumberedAssemblyItem
     */
    public function setBillOfMaterialsList(LotNumberedAssemblyItemBillOfMaterialsList $billOfMaterialsList): LotNumberedAssemblyItem
    {
        $this->billOfMaterialsList = $billOfMaterialsList;
        return $this;
    }

    /**
     * @return LotNumberedAssemblyItemBillOfMaterialsList
     */
    public function getBillOfMaterialsList(): LotNumberedAssemblyItemBillOfMaterialsList
    {
        return $this->billOfMaterialsList;
    }

    /**
     * @param ItemMemberList $memberList
     * @return LotNumberedAssemblyItem
     */
    public function setMemberList(ItemMemberList $memberList): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setAccountingBookDetailList(ItemAccountingBookDetailList $accountingBookDetailList): LotNumberedAssemblyItem
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
     * @param LotNumberedInventoryItemLocationsList $locationsList
     * @return LotNumberedAssemblyItem
     */
    public function setLocationsList(LotNumberedInventoryItemLocationsList $locationsList): LotNumberedAssemblyItem
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
     * @param SiteCategoryList $siteCategoryList
     * @return LotNumberedAssemblyItem
     */
    public function setSiteCategoryList(SiteCategoryList $siteCategoryList): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setBinNumberList(InventoryItemBinNumberList $binNumberList): LotNumberedAssemblyItem
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
     * @param LotNumberedInventoryItemNumbersList $numbersList
     * @return LotNumberedAssemblyItem
     */
    public function setNumbersList(LotNumberedInventoryItemNumbersList $numbersList): LotNumberedAssemblyItem
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
     * @param TranslationList $translationsList
     * @return LotNumberedAssemblyItem
     */
    public function setTranslationsList(TranslationList $translationsList): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setPresentationItemList(PresentationItemList $presentationItemList): LotNumberedAssemblyItem
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
     * @param LotNumberedAssemblyItemHierarchyVersionsList $hierarchyVersionsList
     * @return LotNumberedAssemblyItem
     */
    public function setHierarchyVersionsList(LotNumberedAssemblyItemHierarchyVersionsList $hierarchyVersionsList): LotNumberedAssemblyItem
    {
        $this->hierarchyVersionsList = $hierarchyVersionsList;
        return $this;
    }

    /**
     * @return LotNumberedAssemblyItemHierarchyVersionsList
     */
    public function getHierarchyVersionsList(): LotNumberedAssemblyItemHierarchyVersionsList
    {
        return $this->hierarchyVersionsList;
    }

    /**
     * @param int $futureHorizon
     * @return LotNumberedAssemblyItem
     */
    public function setFutureHorizon(int $futureHorizon): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setConsumptionUnit(RecordRef $consumptionUnit): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setInternalId(string $internalId): LotNumberedAssemblyItem
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
     * @return LotNumberedAssemblyItem
     */
    public function setExternalId(string $externalId): LotNumberedAssemblyItem
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
