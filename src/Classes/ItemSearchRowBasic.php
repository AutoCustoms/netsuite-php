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

class ItemSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $accBookRevRecForecastRule;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $accountingBook;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $accountingBookAmortization;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $accountingBookCreatePlansOn;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $accountingBookRevRecRule;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $accountingBookRevRecSchedule;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $allowedShippingMethod;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $alternateDemandSourceItem;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $assetAccount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $atpLeadTime;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $atpMethod;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $autoLeadTime;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $autoPreferredStockLevel;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $autoReorderPoint;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $availableToPartners;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $averageCost;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $backwardConsumptionDays;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $basePrice;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $billExchRateVarianceAcct;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $billPriceVarianceAcct;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $billQtyVarianceAcct;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $binNumber;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $binOnHandAvail;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $binOnHandCount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $bomQuantity;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $buildEntireAssembly;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $buildTime;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $buyItNowPrice;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $category;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $categoryPreferred;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $class;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $componentYield;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $consumptionUnit;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $contingentRevenueHandling;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $conversionRate;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $copyDescription;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $correlatedItem;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $correlatedItemCorrelation;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $correlatedItemCount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $correlatedItemLift;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $correlatedItemPurchaseRate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $cost;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $costAccountingStatus;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $costCategory;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $costEstimate;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $costEstimateType;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $costingMethod;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $countryOfManufacture;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $created;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $createJob;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $createRevenuePlansOn;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $custReturnVarianceAccount;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $dateViewed;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $daysBeforeExpiration;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $defaultReturnCost;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $defaultShippingMethod;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $deferredExpenseAccount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $deferredRevenueAccount;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $deferRevRec;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $demandModifier;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $demandSource;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $demandTimeFence;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $department;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $departmentnohierarchy;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $directRevenuePosting;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $displayIneBayStore;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $displayName;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $distributionCategory;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $distributionNetwork;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $dontShowPrice;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $eBayItemDescription;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $eBayItemSubtitle;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $eBayItemTitle;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $ebayRelistingOption;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $effectiveBomControl;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $effectiveDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $effectiveRevision;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $enableCatchWeight;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $endAuctionsWhenOutOfStock;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $excludeFromSitemap;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $expenseAccount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $featuredDescription;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $feedDescription;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $feedName;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fixedLotSize;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $forwardConsumptionDays;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $fraudRisk;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $froogleProductFeed;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $futureHorizon;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fxCost;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $gainLossAccount;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $generateAccruals;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $giftCertAuthCode;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $giftCertEmail;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $giftCertExpirationDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $giftCertFrom;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $giftCertMessage;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $giftCertOriginalAmount;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $giftCertRecipient;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $hierarchyNode;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $hierarchyVersion;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $hits;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $imageUrl;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $includeChildren;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $incomeAccount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $intercoDefRevAccount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $intercoExpenseAccount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $intercoIncomeAccount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $inventoryLocation;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $invtClassification;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $invtCountInterval;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isAvailable;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isDropShipItem;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isFulfillable;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isGcoCompliant;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isLotItem;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isOnline;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isSerialItem;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isSpecialOrderItem;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isSpecialWorkOrderItem;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isStorePickupAllowed;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $issueProduct;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isTaxable;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isVsoeBundle;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isWip;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $itemId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $itemRevenueCategory;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $itemUrl;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastInvtCountDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $lastPurchasePrice;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastQuantityAvailableChange;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $leadTime;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $liabilityAccount;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $listingDuration;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $location;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $locationAllowStorePickup;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $locationAtpLeadTime;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $locationAverageCost;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $locationBinQuantityAvailable;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $locationBuildTime;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $locationCost;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $locationCostAccountingStatus;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $locationDefaultReturnCost;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $locationDemandSource;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $locationDemandTimeFence;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $locationFixedLotSize;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $locationInventoryCostTemplate;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $locationInvtClassification;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $locationInvtCountInterval;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $locationLastInvtCountDate;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $locationLeadTime;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $locationNextInvtCountDate;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $locationPeriodicLotSizeDays;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $locationPeriodicLotSizeType;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $locationPreferredStockLevel;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $locationQtyAvailForStorePickup;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $locationQuantityAvailable;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $locationQuantityBackOrdered;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $locationQuantityCommitted;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $locationQuantityInTransit;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $locationQuantityOnHand;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $locationQuantityOnOrder;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $locationReOrderPoint;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $locationRescheduleInDays;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $locationRescheduleOutDays;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $locationSafetyStockLevel;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $locationStorePickupBufferStock;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $locationSupplyLotSizingMethod;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $locationSupplyTimeFence;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $locationSupplyType;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $locationTotalValue;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $locBackwardConsumptionDays;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $locForwardConsumptionDays;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $lowerWarningLimit;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $manufacturer;

    protected $manufacturerAddr1;
    /**
     * @var SearchColumnStringField[]
     */
    protected array $manufacturerCity;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $manufacturerState;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $manufacturerTariff;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $manufacturerTaxId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $manufacturerZip;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $manufacturingChargeItem;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $matchBillToReceipt;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $maximumQuantity;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $memberItem;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $memberQuantity;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $metaTagHtml;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $minimumQuantity;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $modified;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $mossApplies;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $mpn;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $multManufactureAddr;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $nextagCategory;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $nextagProductFeed;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $nextInvtCountDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $noPriceMessage;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $numActiveListings;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $numberAllowedDownloads;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $numCurrentlyListed;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $obsoleteDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $obsoleteRevision;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $offerSupport;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $onlineCustomerPrice;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $onlinePrice;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $onSpecial;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $otherPrices;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $otherVendor;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $outOfStockBehavior;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $outOfStockMessage;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $overallQuantityPricingType;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $overheadType;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $pageTitle;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $parent;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $periodicLotSizeDays;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $periodicLotSizeType;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $preferenceCriterion;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $preferredBin;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $preferredLocation;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $preferredStockLevel;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $preferredStockLevelDays;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $pricesIncludeTax;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $pricingGroup;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $primaryCategory;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $prodPriceVarianceAcct;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $prodQtyVarianceAcct;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $purchaseDescription;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $purchaseOrderAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $purchaseOrderQuantity;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $purchaseOrderQuantityDiff;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $purchasePriceVarianceAcct;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $purchaseUnit;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityAvailable;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityBackOrdered;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityCommitted;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityOnHand;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityOnOrder;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $quantityPricingSchedule;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $receiptAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $receiptQuantity;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $receiptQuantityDiff;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $reorderMultiple;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $reOrderPoint;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $rescheduleInDays;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $rescheduleOutDays;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $reservePrice;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $revenueAllocationGroup;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $revenueRecognitionRule;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $revRecForecastRule;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $revReclassFXAccount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $revRecSchedule;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $roundUpAsComponent;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $safetyStockLevel;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $safetyStockLevelDays;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $salesDescription;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $salesTaxCode;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $saleUnit;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $sameAsPrimaryBookAmortization;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $sameAsPrimaryBookRevRec;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $scheduleBCode;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $scheduleBNumber;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $scheduleBQuantity;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $scrapAcct;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $searchKeywords;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $seasonalDemand;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $secondaryConsumptionUnit;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $secondaryPurchaseUnit;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $secondarySaleUnit;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $secondaryStockUnit;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $secondaryUnitsType;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $sellOnEBay;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $serialNumber;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $serialNumberLocation;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $shipIndividually;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $shipPackage;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $shippingCarrier;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $shippingRate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $shoppingDotComCategory;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $shoppingProductFeed;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $shopzillaCategoryId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $shopzillaProductFeed;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $sitemapPriority;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $softDescriptor;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $startingPrice;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $stockDescription;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $stockUnit;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $storeDescription;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $storeDetailedDescription;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $storeDisplayImage;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $storeDisplayName;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $storeDisplayThumbnail;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $subType;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $supplyLotSizingMethod;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $supplyReplenishmentMethod;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $supplyTimeFence;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $supplyType;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $taxSchedule;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $thumbNailUrl;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $totalValue;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $trackLandedCost;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $transferPrice;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $type;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $unbuildVarianceAccount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $unitsType;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $upcCode;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $upperWarningLimit;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $urlComponent;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $useBins;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $useComponentYield;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $useMarginalRates;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $vendor;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $vendorCode;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $vendorCost;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $vendorCostEntered;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $vendorName;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $vendorPriceCurrency;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $vendorSchedule;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $vendReturnVarianceAccount;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $vsoeDeferral;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $vsoeDelivered;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $vsoePermitDiscount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $vsoePrice;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $vsoeSopGroup;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $webSite;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $weight;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $weightUnit;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $wipAcct;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $wipVarianceAcct;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $yahooProductFeed;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "accBookRevRecForecastRule" => "SearchColumnSelectField[]",
        "accountingBook" => "SearchColumnSelectField[]",
        "accountingBookAmortization" => "SearchColumnSelectField[]",
        "accountingBookCreatePlansOn" => "SearchColumnSelectField[]",
        "accountingBookRevRecRule" => "SearchColumnSelectField[]",
        "accountingBookRevRecSchedule" => "SearchColumnSelectField[]",
        "allowedShippingMethod" => "SearchColumnSelectField[]",
        "alternateDemandSourceItem" => "SearchColumnStringField[]",
        "assetAccount" => "SearchColumnSelectField[]",
        "atpLeadTime" => "SearchColumnDoubleField[]",
        "atpMethod" => "SearchColumnEnumSelectField[]",
        "autoLeadTime" => "SearchColumnBooleanField[]",
        "autoPreferredStockLevel" => "SearchColumnBooleanField[]",
        "autoReorderPoint" => "SearchColumnBooleanField[]",
        "availableToPartners" => "SearchColumnBooleanField[]",
        "averageCost" => "SearchColumnDoubleField[]",
        "backwardConsumptionDays" => "SearchColumnLongField[]",
        "basePrice" => "SearchColumnDoubleField[]",
        "billExchRateVarianceAcct" => "SearchColumnSelectField[]",
        "billPriceVarianceAcct" => "SearchColumnSelectField[]",
        "billQtyVarianceAcct" => "SearchColumnSelectField[]",
        "binNumber" => "SearchColumnStringField[]",
        "binOnHandAvail" => "SearchColumnDoubleField[]",
        "binOnHandCount" => "SearchColumnDoubleField[]",
        "bomQuantity" => "SearchColumnDoubleField[]",
        "buildEntireAssembly" => "SearchColumnBooleanField[]",
        "buildTime" => "SearchColumnDoubleField[]",
        "buyItNowPrice" => "SearchColumnDoubleField[]",
        "category" => "SearchColumnStringField[]",
        "categoryPreferred" => "SearchColumnStringField[]",
        "class" => "SearchColumnSelectField[]",
        "componentYield" => "SearchColumnDoubleField[]",
        "consumptionUnit" => "SearchColumnSelectField[]",
        "contingentRevenueHandling" => "SearchColumnBooleanField[]",
        "conversionRate" => "SearchColumnDoubleField[]",
        "copyDescription" => "SearchColumnBooleanField[]",
        "correlatedItem" => "SearchColumnSelectField[]",
        "correlatedItemCorrelation" => "SearchColumnDoubleField[]",
        "correlatedItemCount" => "SearchColumnLongField[]",
        "correlatedItemLift" => "SearchColumnDoubleField[]",
        "correlatedItemPurchaseRate" => "SearchColumnDoubleField[]",
        "cost" => "SearchColumnDoubleField[]",
        "costAccountingStatus" => "SearchColumnEnumSelectField[]",
        "costCategory" => "SearchColumnStringField[]",
        "costEstimate" => "SearchColumnDoubleField[]",
        "costEstimateType" => "SearchColumnEnumSelectField[]",
        "costingMethod" => "SearchColumnEnumSelectField[]",
        "countryOfManufacture" => "SearchColumnEnumSelectField[]",
        "created" => "SearchColumnDateField[]",
        "createJob" => "SearchColumnBooleanField[]",
        "createRevenuePlansOn" => "SearchColumnSelectField[]",
        "custReturnVarianceAccount" => "SearchColumnSelectField[]",
        "dateViewed" => "SearchColumnDateField[]",
        "daysBeforeExpiration" => "SearchColumnStringField[]",
        "defaultReturnCost" => "SearchColumnDoubleField[]",
        "defaultShippingMethod" => "SearchColumnStringField[]",
        "deferredExpenseAccount" => "SearchColumnSelectField[]",
        "deferredRevenueAccount" => "SearchColumnSelectField[]",
        "deferRevRec" => "SearchColumnBooleanField[]",
        "demandModifier" => "SearchColumnDoubleField[]",
        "demandSource" => "SearchColumnEnumSelectField[]",
        "demandTimeFence" => "SearchColumnLongField[]",
        "department" => "SearchColumnSelectField[]",
        "departmentnohierarchy" => "SearchColumnSelectField[]",
        "directRevenuePosting" => "SearchColumnBooleanField[]",
        "displayIneBayStore" => "SearchColumnBooleanField[]",
        "displayName" => "SearchColumnStringField[]",
        "distributionCategory" => "SearchColumnSelectField[]",
        "distributionNetwork" => "SearchColumnSelectField[]",
        "dontShowPrice" => "SearchColumnBooleanField[]",
        "eBayItemDescription" => "SearchColumnStringField[]",
        "eBayItemSubtitle" => "SearchColumnStringField[]",
        "eBayItemTitle" => "SearchColumnStringField[]",
        "ebayRelistingOption" => "SearchColumnEnumSelectField[]",
        "effectiveBomControl" => "SearchColumnEnumSelectField[]",
        "effectiveDate" => "SearchColumnDateField[]",
        "effectiveRevision" => "SearchColumnSelectField[]",
        "enableCatchWeight" => "SearchColumnBooleanField[]",
        "endAuctionsWhenOutOfStock" => "SearchColumnBooleanField[]",
        "excludeFromSitemap" => "SearchColumnBooleanField[]",
        "expenseAccount" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "featuredDescription" => "SearchColumnStringField[]",
        "feedDescription" => "SearchColumnStringField[]",
        "feedName" => "SearchColumnStringField[]",
        "fixedLotSize" => "SearchColumnDoubleField[]",
        "forwardConsumptionDays" => "SearchColumnLongField[]",
        "fraudRisk" => "SearchColumnEnumSelectField[]",
        "froogleProductFeed" => "SearchColumnBooleanField[]",
        "futureHorizon" => "SearchColumnLongField[]",
        "fxCost" => "SearchColumnDoubleField[]",
        "gainLossAccount" => "SearchColumnSelectField[]",
        "generateAccruals" => "SearchColumnBooleanField[]",
        "giftCertAuthCode" => "SearchColumnStringField[]",
        "giftCertEmail" => "SearchColumnStringField[]",
        "giftCertExpirationDate" => "SearchColumnStringField[]",
        "giftCertFrom" => "SearchColumnStringField[]",
        "giftCertMessage" => "SearchColumnStringField[]",
        "giftCertOriginalAmount" => "SearchColumnStringField[]",
        "giftCertRecipient" => "SearchColumnStringField[]",
        "hierarchyNode" => "SearchColumnStringField[]",
        "hierarchyVersion" => "SearchColumnStringField[]",
        "hits" => "SearchColumnLongField[]",
        "imageUrl" => "SearchColumnStringField[]",
        "includeChildren" => "SearchColumnBooleanField[]",
        "incomeAccount" => "SearchColumnSelectField[]",
        "intercoDefRevAccount" => "SearchColumnSelectField[]",
        "intercoExpenseAccount" => "SearchColumnSelectField[]",
        "intercoIncomeAccount" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "inventoryLocation" => "SearchColumnSelectField[]",
        "invtClassification" => "SearchColumnEnumSelectField[]",
        "invtCountInterval" => "SearchColumnLongField[]",
        "isAvailable" => "SearchColumnBooleanField[]",
        "isDropShipItem" => "SearchColumnBooleanField[]",
        "isFulfillable" => "SearchColumnBooleanField[]",
        "isGcoCompliant" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isLotItem" => "SearchColumnBooleanField[]",
        "isOnline" => "SearchColumnBooleanField[]",
        "isSerialItem" => "SearchColumnBooleanField[]",
        "isSpecialOrderItem" => "SearchColumnBooleanField[]",
        "isSpecialWorkOrderItem" => "SearchColumnBooleanField[]",
        "isStorePickupAllowed" => "SearchColumnBooleanField[]",
        "issueProduct" => "SearchColumnSelectField[]",
        "isTaxable" => "SearchColumnBooleanField[]",
        "isVsoeBundle" => "SearchColumnBooleanField[]",
        "isWip" => "SearchColumnBooleanField[]",
        "itemId" => "SearchColumnStringField[]",
        "itemRevenueCategory" => "SearchColumnSelectField[]",
        "itemUrl" => "SearchColumnStringField[]",
        "lastInvtCountDate" => "SearchColumnDateField[]",
        "lastPurchasePrice" => "SearchColumnDoubleField[]",
        "lastQuantityAvailableChange" => "SearchColumnDateField[]",
        "leadTime" => "SearchColumnLongField[]",
        "liabilityAccount" => "SearchColumnSelectField[]",
        "listingDuration" => "SearchColumnEnumSelectField[]",
        "location" => "SearchColumnSelectField[]",
        "locationAllowStorePickup" => "SearchColumnBooleanField[]",
        "locationAtpLeadTime" => "SearchColumnDoubleField[]",
        "locationAverageCost" => "SearchColumnDoubleField[]",
        "locationBinQuantityAvailable" => "SearchColumnStringField[]",
        "locationBuildTime" => "SearchColumnDoubleField[]",
        "locationCost" => "SearchColumnDoubleField[]",
        "locationCostAccountingStatus" => "SearchColumnEnumSelectField[]",
        "locationDefaultReturnCost" => "SearchColumnDoubleField[]",
        "locationDemandSource" => "SearchColumnEnumSelectField[]",
        "locationDemandTimeFence" => "SearchColumnLongField[]",
        "locationFixedLotSize" => "SearchColumnDoubleField[]",
        "locationInventoryCostTemplate" => "SearchColumnStringField[]",
        "locationInvtClassification" => "SearchColumnEnumSelectField[]",
        "locationInvtCountInterval" => "SearchColumnLongField[]",
        "locationLastInvtCountDate" => "SearchColumnDateField[]",
        "locationLeadTime" => "SearchColumnLongField[]",
        "locationNextInvtCountDate" => "SearchColumnDateField[]",
        "locationPeriodicLotSizeDays" => "SearchColumnLongField[]",
        "locationPeriodicLotSizeType" => "SearchColumnEnumSelectField[]",
        "locationPreferredStockLevel" => "SearchColumnDoubleField[]",
        "locationQtyAvailForStorePickup" => "SearchColumnDoubleField[]",
        "locationQuantityAvailable" => "SearchColumnDoubleField[]",
        "locationQuantityBackOrdered" => "SearchColumnDoubleField[]",
        "locationQuantityCommitted" => "SearchColumnDoubleField[]",
        "locationQuantityInTransit" => "SearchColumnDoubleField[]",
        "locationQuantityOnHand" => "SearchColumnDoubleField[]",
        "locationQuantityOnOrder" => "SearchColumnDoubleField[]",
        "locationReOrderPoint" => "SearchColumnDoubleField[]",
        "locationRescheduleInDays" => "SearchColumnLongField[]",
        "locationRescheduleOutDays" => "SearchColumnLongField[]",
        "locationSafetyStockLevel" => "SearchColumnDoubleField[]",
        "locationStorePickupBufferStock" => "SearchColumnDoubleField[]",
        "locationSupplyLotSizingMethod" => "SearchColumnEnumSelectField[]",
        "locationSupplyTimeFence" => "SearchColumnLongField[]",
        "locationSupplyType" => "SearchColumnEnumSelectField[]",
        "locationTotalValue" => "SearchColumnDoubleField[]",
        "locBackwardConsumptionDays" => "SearchColumnLongField[]",
        "locForwardConsumptionDays" => "SearchColumnLongField[]",
        "lowerWarningLimit" => "SearchColumnDoubleField[]",
        "manufacturer" => "SearchColumnStringField[]",
        "manufacturerAddr1" => "SearchColumnStringField[]",
        "manufacturerCity" => "SearchColumnStringField[]",
        "manufacturerState" => "SearchColumnStringField[]",
        "manufacturerTariff" => "SearchColumnStringField[]",
        "manufacturerTaxId" => "SearchColumnStringField[]",
        "manufacturerZip" => "SearchColumnStringField[]",
        "manufacturingChargeItem" => "SearchColumnBooleanField[]",
        "matchBillToReceipt" => "SearchColumnBooleanField[]",
        "maximumQuantity" => "SearchColumnStringField[]",
        "memberItem" => "SearchColumnSelectField[]",
        "memberQuantity" => "SearchColumnDoubleField[]",
        "metaTagHtml" => "SearchColumnStringField[]",
        "minimumQuantity" => "SearchColumnStringField[]",
        "modified" => "SearchColumnDateField[]",
        "mossApplies" => "SearchColumnBooleanField[]",
        "mpn" => "SearchColumnStringField[]",
        "multManufactureAddr" => "SearchColumnBooleanField[]",
        "nextagCategory" => "SearchColumnStringField[]",
        "nextagProductFeed" => "SearchColumnBooleanField[]",
        "nextInvtCountDate" => "SearchColumnDateField[]",
        "noPriceMessage" => "SearchColumnStringField[]",
        "numActiveListings" => "SearchColumnLongField[]",
        "numberAllowedDownloads" => "SearchColumnStringField[]",
        "numCurrentlyListed" => "SearchColumnLongField[]",
        "obsoleteDate" => "SearchColumnDateField[]",
        "obsoleteRevision" => "SearchColumnSelectField[]",
        "offerSupport" => "SearchColumnBooleanField[]",
        "onlineCustomerPrice" => "SearchColumnDoubleField[]",
        "onlinePrice" => "SearchColumnDoubleField[]",
        "onSpecial" => "SearchColumnBooleanField[]",
        "otherPrices" => "SearchColumnDoubleField[]",
        "otherVendor" => "SearchColumnSelectField[]",
        "outOfStockBehavior" => "SearchColumnStringField[]",
        "outOfStockMessage" => "SearchColumnStringField[]",
        "overallQuantityPricingType" => "SearchColumnEnumSelectField[]",
        "overheadType" => "SearchColumnEnumSelectField[]",
        "pageTitle" => "SearchColumnStringField[]",
        "parent" => "SearchColumnSelectField[]",
        "periodicLotSizeDays" => "SearchColumnLongField[]",
        "periodicLotSizeType" => "SearchColumnEnumSelectField[]",
        "preferenceCriterion" => "SearchColumnStringField[]",
        "preferredBin" => "SearchColumnBooleanField[]",
        "preferredLocation" => "SearchColumnSelectField[]",
        "preferredStockLevel" => "SearchColumnDoubleField[]",
        "preferredStockLevelDays" => "SearchColumnLongField[]",
        "pricesIncludeTax" => "SearchColumnBooleanField[]",
        "pricingGroup" => "SearchColumnSelectField[]",
        "primaryCategory" => "SearchColumnStringField[]",
        "prodPriceVarianceAcct" => "SearchColumnSelectField[]",
        "prodQtyVarianceAcct" => "SearchColumnSelectField[]",
        "purchaseDescription" => "SearchColumnStringField[]",
        "purchaseOrderAmount" => "SearchColumnDoubleField[]",
        "purchaseOrderQuantity" => "SearchColumnDoubleField[]",
        "purchaseOrderQuantityDiff" => "SearchColumnDoubleField[]",
        "purchasePriceVarianceAcct" => "SearchColumnSelectField[]",
        "purchaseUnit" => "SearchColumnSelectField[]",
        "quantityAvailable" => "SearchColumnDoubleField[]",
        "quantityBackOrdered" => "SearchColumnDoubleField[]",
        "quantityCommitted" => "SearchColumnDoubleField[]",
        "quantityOnHand" => "SearchColumnDoubleField[]",
        "quantityOnOrder" => "SearchColumnDoubleField[]",
        "quantityPricingSchedule" => "SearchColumnSelectField[]",
        "receiptAmount" => "SearchColumnDoubleField[]",
        "receiptQuantity" => "SearchColumnDoubleField[]",
        "receiptQuantityDiff" => "SearchColumnDoubleField[]",
        "reorderMultiple" => "SearchColumnLongField[]",
        "reOrderPoint" => "SearchColumnDoubleField[]",
        "rescheduleInDays" => "SearchColumnLongField[]",
        "rescheduleOutDays" => "SearchColumnLongField[]",
        "reservePrice" => "SearchColumnDoubleField[]",
        "revenueAllocationGroup" => "SearchColumnSelectField[]",
        "revenueRecognitionRule" => "SearchColumnSelectField[]",
        "revRecForecastRule" => "SearchColumnSelectField[]",
        "revReclassFXAccount" => "SearchColumnSelectField[]",
        "revRecSchedule" => "SearchColumnSelectField[]",
        "roundUpAsComponent" => "SearchColumnBooleanField[]",
        "safetyStockLevel" => "SearchColumnDoubleField[]",
        "safetyStockLevelDays" => "SearchColumnLongField[]",
        "salesDescription" => "SearchColumnStringField[]",
        "salesTaxCode" => "SearchColumnSelectField[]",
        "saleUnit" => "SearchColumnSelectField[]",
        "sameAsPrimaryBookAmortization" => "SearchColumnBooleanField[]",
        "sameAsPrimaryBookRevRec" => "SearchColumnBooleanField[]",
        "scheduleBCode" => "SearchColumnEnumSelectField[]",
        "scheduleBNumber" => "SearchColumnStringField[]",
        "scheduleBQuantity" => "SearchColumnStringField[]",
        "scrapAcct" => "SearchColumnSelectField[]",
        "searchKeywords" => "SearchColumnStringField[]",
        "seasonalDemand" => "SearchColumnBooleanField[]",
        "secondaryConsumptionUnit" => "SearchColumnSelectField[]",
        "secondaryPurchaseUnit" => "SearchColumnSelectField[]",
        "secondarySaleUnit" => "SearchColumnSelectField[]",
        "secondaryStockUnit" => "SearchColumnSelectField[]",
        "secondaryUnitsType" => "SearchColumnSelectField[]",
        "sellOnEBay" => "SearchColumnBooleanField[]",
        "serialNumber" => "SearchColumnStringField[]",
        "serialNumberLocation" => "SearchColumnStringField[]",
        "shipIndividually" => "SearchColumnBooleanField[]",
        "shipPackage" => "SearchColumnSelectField[]",
        "shippingCarrier" => "SearchColumnEnumSelectField[]",
        "shippingRate" => "SearchColumnDoubleField[]",
        "shoppingDotComCategory" => "SearchColumnStringField[]",
        "shoppingProductFeed" => "SearchColumnBooleanField[]",
        "shopzillaCategoryId" => "SearchColumnLongField[]",
        "shopzillaProductFeed" => "SearchColumnBooleanField[]",
        "sitemapPriority" => "SearchColumnEnumSelectField[]",
        "softDescriptor" => "SearchColumnSelectField[]",
        "startingPrice" => "SearchColumnDoubleField[]",
        "stockDescription" => "SearchColumnStringField[]",
        "stockUnit" => "SearchColumnSelectField[]",
        "storeDescription" => "SearchColumnStringField[]",
        "storeDetailedDescription" => "SearchColumnStringField[]",
        "storeDisplayImage" => "SearchColumnSelectField[]",
        "storeDisplayName" => "SearchColumnStringField[]",
        "storeDisplayThumbnail" => "SearchColumnSelectField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "subType" => "SearchColumnEnumSelectField[]",
        "supplyLotSizingMethod" => "SearchColumnEnumSelectField[]",
        "supplyReplenishmentMethod" => "SearchColumnEnumSelectField[]",
        "supplyTimeFence" => "SearchColumnLongField[]",
        "supplyType" => "SearchColumnEnumSelectField[]",
        "taxSchedule" => "SearchColumnSelectField[]",
        "thumbNailUrl" => "SearchColumnStringField[]",
        "totalValue" => "SearchColumnDoubleField[]",
        "trackLandedCost" => "SearchColumnBooleanField[]",
        "transferPrice" => "SearchColumnDoubleField[]",
        "type" => "SearchColumnEnumSelectField[]",
        "unbuildVarianceAccount" => "SearchColumnSelectField[]",
        "unitsType" => "SearchColumnSelectField[]",
        "upcCode" => "SearchColumnStringField[]",
        "upperWarningLimit" => "SearchColumnDoubleField[]",
        "urlComponent" => "SearchColumnStringField[]",
        "useBins" => "SearchColumnBooleanField[]",
        "useComponentYield" => "SearchColumnBooleanField[]",
        "useMarginalRates" => "SearchColumnBooleanField[]",
        "vendor" => "SearchColumnSelectField[]",
        "vendorCode" => "SearchColumnStringField[]",
        "vendorCost" => "SearchColumnDoubleField[]",
        "vendorCostEntered" => "SearchColumnDoubleField[]",
        "vendorName" => "SearchColumnStringField[]",
        "vendorPriceCurrency" => "SearchColumnStringField[]",
        "vendorSchedule" => "SearchColumnSelectField[]",
        "vendReturnVarianceAccount" => "SearchColumnSelectField[]",
        "vsoeDeferral" => "SearchColumnEnumSelectField[]",
        "vsoeDelivered" => "SearchColumnBooleanField[]",
        "vsoePermitDiscount" => "SearchColumnEnumSelectField[]",
        "vsoePrice" => "SearchColumnDoubleField[]",
        "vsoeSopGroup" => "SearchColumnEnumSelectField[]",
        "webSite" => "SearchColumnSelectField[]",
        "weight" => "SearchColumnDoubleField[]",
        "weightUnit" => "SearchColumnEnumSelectField[]",
        "wipAcct" => "SearchColumnSelectField[]",
        "wipVarianceAcct" => "SearchColumnSelectField[]",
        "yahooProductFeed" => "SearchColumnBooleanField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnSelectField[] $accBookRevRecForecastRule
     * @return ItemSearchRowBasic
     */
    public function setAccBookRevRecForecastRule(SearchColumnSelectField $accBookRevRecForecastRule): ItemSearchRowBasic
    {
        $this->accBookRevRecForecastRule[] = $accBookRevRecForecastRule;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccBookRevRecForecastRule(): array
    {
        return $this->accBookRevRecForecastRule;
    }

    /**
     * @param SearchColumnSelectField[] $accountingBook
     * @return ItemSearchRowBasic
     */
    public function setAccountingBook(SearchColumnSelectField $accountingBook): ItemSearchRowBasic
    {
        $this->accountingBook[] = $accountingBook;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccountingBook(): array
    {
        return $this->accountingBook;
    }

    /**
     * @param SearchColumnSelectField[] $accountingBookAmortization
     * @return ItemSearchRowBasic
     */
    public function setAccountingBookAmortization(SearchColumnSelectField $accountingBookAmortization): ItemSearchRowBasic
    {
        $this->accountingBookAmortization[] = $accountingBookAmortization;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccountingBookAmortization(): array
    {
        return $this->accountingBookAmortization;
    }

    /**
     * @param SearchColumnSelectField[] $accountingBookCreatePlansOn
     * @return ItemSearchRowBasic
     */
    public function setAccountingBookCreatePlansOn(SearchColumnSelectField $accountingBookCreatePlansOn): ItemSearchRowBasic
    {
        $this->accountingBookCreatePlansOn[] = $accountingBookCreatePlansOn;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccountingBookCreatePlansOn(): array
    {
        return $this->accountingBookCreatePlansOn;
    }

    /**
     * @param SearchColumnSelectField[] $accountingBookRevRecRule
     * @return ItemSearchRowBasic
     */
    public function setAccountingBookRevRecRule(SearchColumnSelectField $accountingBookRevRecRule): ItemSearchRowBasic
    {
        $this->accountingBookRevRecRule[] = $accountingBookRevRecRule;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccountingBookRevRecRule(): array
    {
        return $this->accountingBookRevRecRule;
    }

    /**
     * @param SearchColumnSelectField[] $accountingBookRevRecSchedule
     * @return ItemSearchRowBasic
     */
    public function setAccountingBookRevRecSchedule(SearchColumnSelectField $accountingBookRevRecSchedule): ItemSearchRowBasic
    {
        $this->accountingBookRevRecSchedule[] = $accountingBookRevRecSchedule;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccountingBookRevRecSchedule(): array
    {
        return $this->accountingBookRevRecSchedule;
    }

    /**
     * @param SearchColumnSelectField[] $allowedShippingMethod
     * @return ItemSearchRowBasic
     */
    public function setAllowedShippingMethod(SearchColumnSelectField $allowedShippingMethod): ItemSearchRowBasic
    {
        $this->allowedShippingMethod[] = $allowedShippingMethod;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAllowedShippingMethod(): array
    {
        return $this->allowedShippingMethod;
    }

    /**
     * @param SearchColumnStringField[] $alternateDemandSourceItem
     * @return ItemSearchRowBasic
     */
    public function setAlternateDemandSourceItem(SearchColumnStringField $alternateDemandSourceItem): ItemSearchRowBasic
    {
        $this->alternateDemandSourceItem[] = $alternateDemandSourceItem;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAlternateDemandSourceItem(): array
    {
        return $this->alternateDemandSourceItem;
    }

    /**
     * @param SearchColumnSelectField[] $assetAccount
     * @return ItemSearchRowBasic
     */
    public function setAssetAccount(SearchColumnSelectField $assetAccount): ItemSearchRowBasic
    {
        $this->assetAccount[] = $assetAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAssetAccount(): array
    {
        return $this->assetAccount;
    }

    /**
     * @param SearchColumnDoubleField[] $atpLeadTime
     * @return ItemSearchRowBasic
     */
    public function setAtpLeadTime(SearchColumnDoubleField $atpLeadTime): ItemSearchRowBasic
    {
        $this->atpLeadTime[] = $atpLeadTime;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAtpLeadTime(): array
    {
        return $this->atpLeadTime;
    }

    /**
     * @param SearchColumnEnumSelectField[] $atpMethod
     * @return ItemSearchRowBasic
     */
    public function setAtpMethod(SearchColumnEnumSelectField $atpMethod): ItemSearchRowBasic
    {
        $this->atpMethod[] = $atpMethod;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getAtpMethod(): array
    {
        return $this->atpMethod;
    }

    /**
     * @param SearchColumnBooleanField[] $autoLeadTime
     * @return ItemSearchRowBasic
     */
    public function setAutoLeadTime(SearchColumnBooleanField $autoLeadTime): ItemSearchRowBasic
    {
        $this->autoLeadTime[] = $autoLeadTime;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAutoLeadTime(): array
    {
        return $this->autoLeadTime;
    }

    /**
     * @param SearchColumnBooleanField[] $autoPreferredStockLevel
     * @return ItemSearchRowBasic
     */
    public function setAutoPreferredStockLevel(SearchColumnBooleanField $autoPreferredStockLevel): ItemSearchRowBasic
    {
        $this->autoPreferredStockLevel[] = $autoPreferredStockLevel;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAutoPreferredStockLevel(): array
    {
        return $this->autoPreferredStockLevel;
    }

    /**
     * @param SearchColumnBooleanField[] $autoReorderPoint
     * @return ItemSearchRowBasic
     */
    public function setAutoReorderPoint(SearchColumnBooleanField $autoReorderPoint): ItemSearchRowBasic
    {
        $this->autoReorderPoint[] = $autoReorderPoint;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAutoReorderPoint(): array
    {
        return $this->autoReorderPoint;
    }

    /**
     * @param SearchColumnBooleanField[] $availableToPartners
     * @return ItemSearchRowBasic
     */
    public function setAvailableToPartners(SearchColumnBooleanField $availableToPartners): ItemSearchRowBasic
    {
        $this->availableToPartners[] = $availableToPartners;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAvailableToPartners(): array
    {
        return $this->availableToPartners;
    }

    /**
     * @param SearchColumnDoubleField[] $averageCost
     * @return ItemSearchRowBasic
     */
    public function setAverageCost(SearchColumnDoubleField $averageCost): ItemSearchRowBasic
    {
        $this->averageCost[] = $averageCost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAverageCost(): array
    {
        return $this->averageCost;
    }

    /**
     * @param SearchColumnLongField[] $backwardConsumptionDays
     * @return ItemSearchRowBasic
     */
    public function setBackwardConsumptionDays(SearchColumnLongField $backwardConsumptionDays): ItemSearchRowBasic
    {
        $this->backwardConsumptionDays[] = $backwardConsumptionDays;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getBackwardConsumptionDays(): array
    {
        return $this->backwardConsumptionDays;
    }

    /**
     * @param SearchColumnDoubleField[] $basePrice
     * @return ItemSearchRowBasic
     */
    public function setBasePrice(SearchColumnDoubleField $basePrice): ItemSearchRowBasic
    {
        $this->basePrice[] = $basePrice;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBasePrice(): array
    {
        return $this->basePrice;
    }

    /**
     * @param SearchColumnSelectField[] $billExchRateVarianceAcct
     * @return ItemSearchRowBasic
     */
    public function setBillExchRateVarianceAcct(SearchColumnSelectField $billExchRateVarianceAcct): ItemSearchRowBasic
    {
        $this->billExchRateVarianceAcct[] = $billExchRateVarianceAcct;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillExchRateVarianceAcct(): array
    {
        return $this->billExchRateVarianceAcct;
    }

    /**
     * @param SearchColumnSelectField[] $billPriceVarianceAcct
     * @return ItemSearchRowBasic
     */
    public function setBillPriceVarianceAcct(SearchColumnSelectField $billPriceVarianceAcct): ItemSearchRowBasic
    {
        $this->billPriceVarianceAcct[] = $billPriceVarianceAcct;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillPriceVarianceAcct(): array
    {
        return $this->billPriceVarianceAcct;
    }

    /**
     * @param SearchColumnSelectField[] $billQtyVarianceAcct
     * @return ItemSearchRowBasic
     */
    public function setBillQtyVarianceAcct(SearchColumnSelectField $billQtyVarianceAcct): ItemSearchRowBasic
    {
        $this->billQtyVarianceAcct[] = $billQtyVarianceAcct;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillQtyVarianceAcct(): array
    {
        return $this->billQtyVarianceAcct;
    }

    /**
     * @param SearchColumnStringField[] $binNumber
     * @return ItemSearchRowBasic
     */
    public function setBinNumber(SearchColumnStringField $binNumber): ItemSearchRowBasic
    {
        $this->binNumber[] = $binNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBinNumber(): array
    {
        return $this->binNumber;
    }

    /**
     * @param SearchColumnDoubleField[] $binOnHandAvail
     * @return ItemSearchRowBasic
     */
    public function setBinOnHandAvail(SearchColumnDoubleField $binOnHandAvail): ItemSearchRowBasic
    {
        $this->binOnHandAvail[] = $binOnHandAvail;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBinOnHandAvail(): array
    {
        return $this->binOnHandAvail;
    }

    /**
     * @param SearchColumnDoubleField[] $binOnHandCount
     * @return ItemSearchRowBasic
     */
    public function setBinOnHandCount(SearchColumnDoubleField $binOnHandCount): ItemSearchRowBasic
    {
        $this->binOnHandCount[] = $binOnHandCount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBinOnHandCount(): array
    {
        return $this->binOnHandCount;
    }

    /**
     * @param SearchColumnDoubleField[] $bomQuantity
     * @return ItemSearchRowBasic
     */
    public function setBomQuantity(SearchColumnDoubleField $bomQuantity): ItemSearchRowBasic
    {
        $this->bomQuantity[] = $bomQuantity;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBomQuantity(): array
    {
        return $this->bomQuantity;
    }

    /**
     * @param SearchColumnBooleanField[] $buildEntireAssembly
     * @return ItemSearchRowBasic
     */
    public function setBuildEntireAssembly(SearchColumnBooleanField $buildEntireAssembly): ItemSearchRowBasic
    {
        $this->buildEntireAssembly[] = $buildEntireAssembly;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getBuildEntireAssembly(): array
    {
        return $this->buildEntireAssembly;
    }

    /**
     * @param SearchColumnDoubleField[] $buildTime
     * @return ItemSearchRowBasic
     */
    public function setBuildTime(SearchColumnDoubleField $buildTime): ItemSearchRowBasic
    {
        $this->buildTime[] = $buildTime;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBuildTime(): array
    {
        return $this->buildTime;
    }

    /**
     * @param SearchColumnDoubleField[] $buyItNowPrice
     * @return ItemSearchRowBasic
     */
    public function setBuyItNowPrice(SearchColumnDoubleField $buyItNowPrice): ItemSearchRowBasic
    {
        $this->buyItNowPrice[] = $buyItNowPrice;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBuyItNowPrice(): array
    {
        return $this->buyItNowPrice;
    }

    /**
     * @param SearchColumnStringField[] $category
     * @return ItemSearchRowBasic
     */
    public function setCategory(SearchColumnStringField $category): ItemSearchRowBasic
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCategory(): array
    {
        return $this->category;
    }

    /**
     * @param SearchColumnStringField[] $categoryPreferred
     * @return ItemSearchRowBasic
     */
    public function setCategoryPreferred(SearchColumnStringField $categoryPreferred): ItemSearchRowBasic
    {
        $this->categoryPreferred[] = $categoryPreferred;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCategoryPreferred(): array
    {
        return $this->categoryPreferred;
    }

    /**
     * @param SearchColumnSelectField[] $class
     * @return ItemSearchRowBasic
     */
    public function setClass(SearchColumnSelectField $class): ItemSearchRowBasic
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getClass(): array
    {
        return $this->class;
    }

    /**
     * @param SearchColumnDoubleField[] $componentYield
     * @return ItemSearchRowBasic
     */
    public function setComponentYield(SearchColumnDoubleField $componentYield): ItemSearchRowBasic
    {
        $this->componentYield[] = $componentYield;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getComponentYield(): array
    {
        return $this->componentYield;
    }

    /**
     * @param SearchColumnSelectField[] $consumptionUnit
     * @return ItemSearchRowBasic
     */
    public function setConsumptionUnit(SearchColumnSelectField $consumptionUnit): ItemSearchRowBasic
    {
        $this->consumptionUnit[] = $consumptionUnit;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getConsumptionUnit(): array
    {
        return $this->consumptionUnit;
    }

    /**
     * @param SearchColumnBooleanField[] $contingentRevenueHandling
     * @return ItemSearchRowBasic
     */
    public function setContingentRevenueHandling(SearchColumnBooleanField $contingentRevenueHandling): ItemSearchRowBasic
    {
        $this->contingentRevenueHandling[] = $contingentRevenueHandling;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getContingentRevenueHandling(): array
    {
        return $this->contingentRevenueHandling;
    }

    /**
     * @param SearchColumnDoubleField[] $conversionRate
     * @return ItemSearchRowBasic
     */
    public function setConversionRate(SearchColumnDoubleField $conversionRate): ItemSearchRowBasic
    {
        $this->conversionRate[] = $conversionRate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getConversionRate(): array
    {
        return $this->conversionRate;
    }

    /**
     * @param SearchColumnBooleanField[] $copyDescription
     * @return ItemSearchRowBasic
     */
    public function setCopyDescription(SearchColumnBooleanField $copyDescription): ItemSearchRowBasic
    {
        $this->copyDescription[] = $copyDescription;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCopyDescription(): array
    {
        return $this->copyDescription;
    }

    /**
     * @param SearchColumnSelectField[] $correlatedItem
     * @return ItemSearchRowBasic
     */
    public function setCorrelatedItem(SearchColumnSelectField $correlatedItem): ItemSearchRowBasic
    {
        $this->correlatedItem[] = $correlatedItem;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCorrelatedItem(): array
    {
        return $this->correlatedItem;
    }

    /**
     * @param SearchColumnDoubleField[] $correlatedItemCorrelation
     * @return ItemSearchRowBasic
     */
    public function setCorrelatedItemCorrelation(SearchColumnDoubleField $correlatedItemCorrelation): ItemSearchRowBasic
    {
        $this->correlatedItemCorrelation[] = $correlatedItemCorrelation;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCorrelatedItemCorrelation(): array
    {
        return $this->correlatedItemCorrelation;
    }

    /**
     * @param SearchColumnLongField[] $correlatedItemCount
     * @return ItemSearchRowBasic
     */
    public function setCorrelatedItemCount(SearchColumnLongField $correlatedItemCount): ItemSearchRowBasic
    {
        $this->correlatedItemCount[] = $correlatedItemCount;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getCorrelatedItemCount(): array
    {
        return $this->correlatedItemCount;
    }

    /**
     * @param SearchColumnDoubleField[] $correlatedItemLift
     * @return ItemSearchRowBasic
     */
    public function setCorrelatedItemLift(SearchColumnDoubleField $correlatedItemLift): ItemSearchRowBasic
    {
        $this->correlatedItemLift[] = $correlatedItemLift;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCorrelatedItemLift(): array
    {
        return $this->correlatedItemLift;
    }

    /**
     * @param SearchColumnDoubleField[] $correlatedItemPurchaseRate
     * @return ItemSearchRowBasic
     */
    public function setCorrelatedItemPurchaseRate(SearchColumnDoubleField $correlatedItemPurchaseRate): ItemSearchRowBasic
    {
        $this->correlatedItemPurchaseRate[] = $correlatedItemPurchaseRate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCorrelatedItemPurchaseRate(): array
    {
        return $this->correlatedItemPurchaseRate;
    }

    /**
     * @param SearchColumnDoubleField[] $cost
     * @return ItemSearchRowBasic
     */
    public function setCost(SearchColumnDoubleField $cost): ItemSearchRowBasic
    {
        $this->cost[] = $cost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCost(): array
    {
        return $this->cost;
    }

    /**
     * @param SearchColumnEnumSelectField[] $costAccountingStatus
     * @return ItemSearchRowBasic
     */
    public function setCostAccountingStatus(SearchColumnEnumSelectField $costAccountingStatus): ItemSearchRowBasic
    {
        $this->costAccountingStatus[] = $costAccountingStatus;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCostAccountingStatus(): array
    {
        return $this->costAccountingStatus;
    }

    /**
     * @param SearchColumnStringField[] $costCategory
     * @return ItemSearchRowBasic
     */
    public function setCostCategory(SearchColumnStringField $costCategory): ItemSearchRowBasic
    {
        $this->costCategory[] = $costCategory;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCostCategory(): array
    {
        return $this->costCategory;
    }

    /**
     * @param SearchColumnDoubleField[] $costEstimate
     * @return ItemSearchRowBasic
     */
    public function setCostEstimate(SearchColumnDoubleField $costEstimate): ItemSearchRowBasic
    {
        $this->costEstimate[] = $costEstimate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostEstimate(): array
    {
        return $this->costEstimate;
    }

    /**
     * @param SearchColumnEnumSelectField[] $costEstimateType
     * @return ItemSearchRowBasic
     */
    public function setCostEstimateType(SearchColumnEnumSelectField $costEstimateType): ItemSearchRowBasic
    {
        $this->costEstimateType[] = $costEstimateType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCostEstimateType(): array
    {
        return $this->costEstimateType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $costingMethod
     * @return ItemSearchRowBasic
     */
    public function setCostingMethod(SearchColumnEnumSelectField $costingMethod): ItemSearchRowBasic
    {
        $this->costingMethod[] = $costingMethod;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCostingMethod(): array
    {
        return $this->costingMethod;
    }

    /**
     * @param SearchColumnEnumSelectField[] $countryOfManufacture
     * @return ItemSearchRowBasic
     */
    public function setCountryOfManufacture(SearchColumnEnumSelectField $countryOfManufacture): ItemSearchRowBasic
    {
        $this->countryOfManufacture[] = $countryOfManufacture;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCountryOfManufacture(): array
    {
        return $this->countryOfManufacture;
    }

    /**
     * @param SearchColumnDateField[] $created
     * @return ItemSearchRowBasic
     */
    public function setCreated(SearchColumnDateField $created): ItemSearchRowBasic
    {
        $this->created[] = $created;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCreated(): array
    {
        return $this->created;
    }

    /**
     * @param SearchColumnBooleanField[] $createJob
     * @return ItemSearchRowBasic
     */
    public function setCreateJob(SearchColumnBooleanField $createJob): ItemSearchRowBasic
    {
        $this->createJob[] = $createJob;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCreateJob(): array
    {
        return $this->createJob;
    }

    /**
     * @param SearchColumnSelectField[] $createRevenuePlansOn
     * @return ItemSearchRowBasic
     */
    public function setCreateRevenuePlansOn(SearchColumnSelectField $createRevenuePlansOn): ItemSearchRowBasic
    {
        $this->createRevenuePlansOn[] = $createRevenuePlansOn;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCreateRevenuePlansOn(): array
    {
        return $this->createRevenuePlansOn;
    }

    /**
     * @param SearchColumnSelectField[] $custReturnVarianceAccount
     * @return ItemSearchRowBasic
     */
    public function setCustReturnVarianceAccount(SearchColumnSelectField $custReturnVarianceAccount): ItemSearchRowBasic
    {
        $this->custReturnVarianceAccount[] = $custReturnVarianceAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCustReturnVarianceAccount(): array
    {
        return $this->custReturnVarianceAccount;
    }

    /**
     * @param SearchColumnDateField[] $dateViewed
     * @return ItemSearchRowBasic
     */
    public function setDateViewed(SearchColumnDateField $dateViewed): ItemSearchRowBasic
    {
        $this->dateViewed[] = $dateViewed;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateViewed(): array
    {
        return $this->dateViewed;
    }

    /**
     * @param SearchColumnStringField[] $daysBeforeExpiration
     * @return ItemSearchRowBasic
     */
    public function setDaysBeforeExpiration(SearchColumnStringField $daysBeforeExpiration): ItemSearchRowBasic
    {
        $this->daysBeforeExpiration[] = $daysBeforeExpiration;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDaysBeforeExpiration(): array
    {
        return $this->daysBeforeExpiration;
    }

    /**
     * @param SearchColumnDoubleField[] $defaultReturnCost
     * @return ItemSearchRowBasic
     */
    public function setDefaultReturnCost(SearchColumnDoubleField $defaultReturnCost): ItemSearchRowBasic
    {
        $this->defaultReturnCost[] = $defaultReturnCost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDefaultReturnCost(): array
    {
        return $this->defaultReturnCost;
    }

    /**
     * @param SearchColumnStringField[] $defaultShippingMethod
     * @return ItemSearchRowBasic
     */
    public function setDefaultShippingMethod(SearchColumnStringField $defaultShippingMethod): ItemSearchRowBasic
    {
        $this->defaultShippingMethod[] = $defaultShippingMethod;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDefaultShippingMethod(): array
    {
        return $this->defaultShippingMethod;
    }

    /**
     * @param SearchColumnSelectField[] $deferredExpenseAccount
     * @return ItemSearchRowBasic
     */
    public function setDeferredExpenseAccount(SearchColumnSelectField $deferredExpenseAccount): ItemSearchRowBasic
    {
        $this->deferredExpenseAccount[] = $deferredExpenseAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDeferredExpenseAccount(): array
    {
        return $this->deferredExpenseAccount;
    }

    /**
     * @param SearchColumnSelectField[] $deferredRevenueAccount
     * @return ItemSearchRowBasic
     */
    public function setDeferredRevenueAccount(SearchColumnSelectField $deferredRevenueAccount): ItemSearchRowBasic
    {
        $this->deferredRevenueAccount[] = $deferredRevenueAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDeferredRevenueAccount(): array
    {
        return $this->deferredRevenueAccount;
    }

    /**
     * @param SearchColumnBooleanField[] $deferRevRec
     * @return ItemSearchRowBasic
     */
    public function setDeferRevRec(SearchColumnBooleanField $deferRevRec): ItemSearchRowBasic
    {
        $this->deferRevRec[] = $deferRevRec;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getDeferRevRec(): array
    {
        return $this->deferRevRec;
    }

    /**
     * @param SearchColumnDoubleField[] $demandModifier
     * @return ItemSearchRowBasic
     */
    public function setDemandModifier(SearchColumnDoubleField $demandModifier): ItemSearchRowBasic
    {
        $this->demandModifier[] = $demandModifier;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDemandModifier(): array
    {
        return $this->demandModifier;
    }

    /**
     * @param SearchColumnEnumSelectField[] $demandSource
     * @return ItemSearchRowBasic
     */
    public function setDemandSource(SearchColumnEnumSelectField $demandSource): ItemSearchRowBasic
    {
        $this->demandSource[] = $demandSource;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getDemandSource(): array
    {
        return $this->demandSource;
    }

    /**
     * @param SearchColumnLongField[] $demandTimeFence
     * @return ItemSearchRowBasic
     */
    public function setDemandTimeFence(SearchColumnLongField $demandTimeFence): ItemSearchRowBasic
    {
        $this->demandTimeFence[] = $demandTimeFence;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDemandTimeFence(): array
    {
        return $this->demandTimeFence;
    }

    /**
     * @param SearchColumnSelectField[] $department
     * @return ItemSearchRowBasic
     */
    public function setDepartment(SearchColumnSelectField $department): ItemSearchRowBasic
    {
        $this->department[] = $department;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDepartment(): array
    {
        return $this->department;
    }

    /**
     * @param SearchColumnSelectField[] $departmentnohierarchy
     * @return ItemSearchRowBasic
     */
    public function setDepartmentnohierarchy(SearchColumnSelectField $departmentnohierarchy): ItemSearchRowBasic
    {
        $this->departmentnohierarchy[] = $departmentnohierarchy;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDepartmentnohierarchy(): array
    {
        return $this->departmentnohierarchy;
    }

    /**
     * @param SearchColumnBooleanField[] $directRevenuePosting
     * @return ItemSearchRowBasic
     */
    public function setDirectRevenuePosting(SearchColumnBooleanField $directRevenuePosting): ItemSearchRowBasic
    {
        $this->directRevenuePosting[] = $directRevenuePosting;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getDirectRevenuePosting(): array
    {
        return $this->directRevenuePosting;
    }

    /**
     * @param SearchColumnBooleanField[] $displayIneBayStore
     * @return ItemSearchRowBasic
     */
    public function setDisplayIneBayStore(SearchColumnBooleanField $displayIneBayStore): ItemSearchRowBasic
    {
        $this->displayIneBayStore[] = $displayIneBayStore;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getDisplayIneBayStore(): array
    {
        return $this->displayIneBayStore;
    }

    /**
     * @param SearchColumnStringField[] $displayName
     * @return ItemSearchRowBasic
     */
    public function setDisplayName(SearchColumnStringField $displayName): ItemSearchRowBasic
    {
        $this->displayName[] = $displayName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDisplayName(): array
    {
        return $this->displayName;
    }

    /**
     * @param SearchColumnSelectField[] $distributionCategory
     * @return ItemSearchRowBasic
     */
    public function setDistributionCategory(SearchColumnSelectField $distributionCategory): ItemSearchRowBasic
    {
        $this->distributionCategory[] = $distributionCategory;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDistributionCategory(): array
    {
        return $this->distributionCategory;
    }

    /**
     * @param SearchColumnSelectField[] $distributionNetwork
     * @return ItemSearchRowBasic
     */
    public function setDistributionNetwork(SearchColumnSelectField $distributionNetwork): ItemSearchRowBasic
    {
        $this->distributionNetwork[] = $distributionNetwork;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDistributionNetwork(): array
    {
        return $this->distributionNetwork;
    }

    /**
     * @param SearchColumnBooleanField[] $dontShowPrice
     * @return ItemSearchRowBasic
     */
    public function setDontShowPrice(SearchColumnBooleanField $dontShowPrice): ItemSearchRowBasic
    {
        $this->dontShowPrice[] = $dontShowPrice;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getDontShowPrice(): array
    {
        return $this->dontShowPrice;
    }

    /**
     * @param SearchColumnStringField[] $eBayItemDescription
     * @return ItemSearchRowBasic
     */
    public function setEBayItemDescription(SearchColumnStringField $eBayItemDescription): ItemSearchRowBasic
    {
        $this->eBayItemDescription[] = $eBayItemDescription;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEBayItemDescription(): array
    {
        return $this->eBayItemDescription;
    }

    /**
     * @param SearchColumnStringField[] $eBayItemSubtitle
     * @return ItemSearchRowBasic
     */
    public function setEBayItemSubtitle(SearchColumnStringField $eBayItemSubtitle): ItemSearchRowBasic
    {
        $this->eBayItemSubtitle[] = $eBayItemSubtitle;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEBayItemSubtitle(): array
    {
        return $this->eBayItemSubtitle;
    }

    /**
     * @param SearchColumnStringField[] $eBayItemTitle
     * @return ItemSearchRowBasic
     */
    public function setEBayItemTitle(SearchColumnStringField $eBayItemTitle): ItemSearchRowBasic
    {
        $this->eBayItemTitle[] = $eBayItemTitle;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEBayItemTitle(): array
    {
        return $this->eBayItemTitle;
    }

    /**
     * @param SearchColumnEnumSelectField[] $ebayRelistingOption
     * @return ItemSearchRowBasic
     */
    public function setEbayRelistingOption(SearchColumnEnumSelectField $ebayRelistingOption): ItemSearchRowBasic
    {
        $this->ebayRelistingOption[] = $ebayRelistingOption;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getEbayRelistingOption(): array
    {
        return $this->ebayRelistingOption;
    }

    /**
     * @param SearchColumnEnumSelectField[] $effectiveBomControl
     * @return ItemSearchRowBasic
     */
    public function setEffectiveBomControl(SearchColumnEnumSelectField $effectiveBomControl): ItemSearchRowBasic
    {
        $this->effectiveBomControl[] = $effectiveBomControl;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getEffectiveBomControl(): array
    {
        return $this->effectiveBomControl;
    }

    /**
     * @param SearchColumnDateField[] $effectiveDate
     * @return ItemSearchRowBasic
     */
    public function setEffectiveDate(SearchColumnDateField $effectiveDate): ItemSearchRowBasic
    {
        $this->effectiveDate[] = $effectiveDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEffectiveDate(): array
    {
        return $this->effectiveDate;
    }

    /**
     * @param SearchColumnSelectField[] $effectiveRevision
     * @return ItemSearchRowBasic
     */
    public function setEffectiveRevision(SearchColumnSelectField $effectiveRevision): ItemSearchRowBasic
    {
        $this->effectiveRevision[] = $effectiveRevision;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEffectiveRevision(): array
    {
        return $this->effectiveRevision;
    }

    /**
     * @param SearchColumnBooleanField[] $enableCatchWeight
     * @return ItemSearchRowBasic
     */
    public function setEnableCatchWeight(SearchColumnBooleanField $enableCatchWeight): ItemSearchRowBasic
    {
        $this->enableCatchWeight[] = $enableCatchWeight;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getEnableCatchWeight(): array
    {
        return $this->enableCatchWeight;
    }

    /**
     * @param SearchColumnBooleanField[] $endAuctionsWhenOutOfStock
     * @return ItemSearchRowBasic
     */
    public function setEndAuctionsWhenOutOfStock(SearchColumnBooleanField $endAuctionsWhenOutOfStock): ItemSearchRowBasic
    {
        $this->endAuctionsWhenOutOfStock[] = $endAuctionsWhenOutOfStock;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getEndAuctionsWhenOutOfStock(): array
    {
        return $this->endAuctionsWhenOutOfStock;
    }

    /**
     * @param SearchColumnBooleanField[] $excludeFromSitemap
     * @return ItemSearchRowBasic
     */
    public function setExcludeFromSitemap(SearchColumnBooleanField $excludeFromSitemap): ItemSearchRowBasic
    {
        $this->excludeFromSitemap[] = $excludeFromSitemap;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getExcludeFromSitemap(): array
    {
        return $this->excludeFromSitemap;
    }

    /**
     * @param SearchColumnSelectField[] $expenseAccount
     * @return ItemSearchRowBasic
     */
    public function setExpenseAccount(SearchColumnSelectField $expenseAccount): ItemSearchRowBasic
    {
        $this->expenseAccount[] = $expenseAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExpenseAccount(): array
    {
        return $this->expenseAccount;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return ItemSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): ItemSearchRowBasic
    {
        $this->externalId[] = $externalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId(): array
    {
        return $this->externalId;
    }

    /**
     * @param SearchColumnStringField[] $featuredDescription
     * @return ItemSearchRowBasic
     */
    public function setFeaturedDescription(SearchColumnStringField $featuredDescription): ItemSearchRowBasic
    {
        $this->featuredDescription[] = $featuredDescription;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFeaturedDescription(): array
    {
        return $this->featuredDescription;
    }

    /**
     * @param SearchColumnStringField[] $feedDescription
     * @return ItemSearchRowBasic
     */
    public function setFeedDescription(SearchColumnStringField $feedDescription): ItemSearchRowBasic
    {
        $this->feedDescription[] = $feedDescription;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFeedDescription(): array
    {
        return $this->feedDescription;
    }

    /**
     * @param SearchColumnStringField[] $feedName
     * @return ItemSearchRowBasic
     */
    public function setFeedName(SearchColumnStringField $feedName): ItemSearchRowBasic
    {
        $this->feedName[] = $feedName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFeedName(): array
    {
        return $this->feedName;
    }

    /**
     * @param SearchColumnDoubleField[] $fixedLotSize
     * @return ItemSearchRowBasic
     */
    public function setFixedLotSize(SearchColumnDoubleField $fixedLotSize): ItemSearchRowBasic
    {
        $this->fixedLotSize[] = $fixedLotSize;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFixedLotSize(): array
    {
        return $this->fixedLotSize;
    }

    /**
     * @param SearchColumnLongField[] $forwardConsumptionDays
     * @return ItemSearchRowBasic
     */
    public function setForwardConsumptionDays(SearchColumnLongField $forwardConsumptionDays): ItemSearchRowBasic
    {
        $this->forwardConsumptionDays[] = $forwardConsumptionDays;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getForwardConsumptionDays(): array
    {
        return $this->forwardConsumptionDays;
    }

    /**
     * @param SearchColumnEnumSelectField[] $fraudRisk
     * @return ItemSearchRowBasic
     */
    public function setFraudRisk(SearchColumnEnumSelectField $fraudRisk): ItemSearchRowBasic
    {
        $this->fraudRisk[] = $fraudRisk;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getFraudRisk(): array
    {
        return $this->fraudRisk;
    }

    /**
     * @param SearchColumnBooleanField[] $froogleProductFeed
     * @return ItemSearchRowBasic
     */
    public function setFroogleProductFeed(SearchColumnBooleanField $froogleProductFeed): ItemSearchRowBasic
    {
        $this->froogleProductFeed[] = $froogleProductFeed;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getFroogleProductFeed(): array
    {
        return $this->froogleProductFeed;
    }

    /**
     * @param SearchColumnLongField[] $futureHorizon
     * @return ItemSearchRowBasic
     */
    public function setFutureHorizon(SearchColumnLongField $futureHorizon): ItemSearchRowBasic
    {
        $this->futureHorizon[] = $futureHorizon;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getFutureHorizon(): array
    {
        return $this->futureHorizon;
    }

    /**
     * @param SearchColumnDoubleField[] $fxCost
     * @return ItemSearchRowBasic
     */
    public function setFxCost(SearchColumnDoubleField $fxCost): ItemSearchRowBasic
    {
        $this->fxCost[] = $fxCost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxCost(): array
    {
        return $this->fxCost;
    }

    /**
     * @param SearchColumnSelectField[] $gainLossAccount
     * @return ItemSearchRowBasic
     */
    public function setGainLossAccount(SearchColumnSelectField $gainLossAccount): ItemSearchRowBasic
    {
        $this->gainLossAccount[] = $gainLossAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getGainLossAccount(): array
    {
        return $this->gainLossAccount;
    }

    /**
     * @param SearchColumnBooleanField[] $generateAccruals
     * @return ItemSearchRowBasic
     */
    public function setGenerateAccruals(SearchColumnBooleanField $generateAccruals): ItemSearchRowBasic
    {
        $this->generateAccruals[] = $generateAccruals;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getGenerateAccruals(): array
    {
        return $this->generateAccruals;
    }

    /**
     * @param SearchColumnStringField[] $giftCertAuthCode
     * @return ItemSearchRowBasic
     */
    public function setGiftCertAuthCode(SearchColumnStringField $giftCertAuthCode): ItemSearchRowBasic
    {
        $this->giftCertAuthCode[] = $giftCertAuthCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGiftCertAuthCode(): array
    {
        return $this->giftCertAuthCode;
    }

    /**
     * @param SearchColumnStringField[] $giftCertEmail
     * @return ItemSearchRowBasic
     */
    public function setGiftCertEmail(SearchColumnStringField $giftCertEmail): ItemSearchRowBasic
    {
        $this->giftCertEmail[] = $giftCertEmail;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGiftCertEmail(): array
    {
        return $this->giftCertEmail;
    }

    /**
     * @param SearchColumnStringField[] $giftCertExpirationDate
     * @return ItemSearchRowBasic
     */
    public function setGiftCertExpirationDate(SearchColumnStringField $giftCertExpirationDate): ItemSearchRowBasic
    {
        $this->giftCertExpirationDate[] = $giftCertExpirationDate;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGiftCertExpirationDate(): array
    {
        return $this->giftCertExpirationDate;
    }

    /**
     * @param SearchColumnStringField[] $giftCertFrom
     * @return ItemSearchRowBasic
     */
    public function setGiftCertFrom(SearchColumnStringField $giftCertFrom): ItemSearchRowBasic
    {
        $this->giftCertFrom[] = $giftCertFrom;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGiftCertFrom(): array
    {
        return $this->giftCertFrom;
    }

    /**
     * @param SearchColumnStringField[] $giftCertMessage
     * @return ItemSearchRowBasic
     */
    public function setGiftCertMessage(SearchColumnStringField $giftCertMessage): ItemSearchRowBasic
    {
        $this->giftCertMessage[] = $giftCertMessage;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGiftCertMessage(): array
    {
        return $this->giftCertMessage;
    }

    /**
     * @param SearchColumnStringField[] $giftCertOriginalAmount
     * @return ItemSearchRowBasic
     */
    public function setGiftCertOriginalAmount(SearchColumnStringField $giftCertOriginalAmount): ItemSearchRowBasic
    {
        $this->giftCertOriginalAmount[] = $giftCertOriginalAmount;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGiftCertOriginalAmount(): array
    {
        return $this->giftCertOriginalAmount;
    }

    /**
     * @param SearchColumnStringField[] $giftCertRecipient
     * @return ItemSearchRowBasic
     */
    public function setGiftCertRecipient(SearchColumnStringField $giftCertRecipient): ItemSearchRowBasic
    {
        $this->giftCertRecipient[] = $giftCertRecipient;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGiftCertRecipient(): array
    {
        return $this->giftCertRecipient;
    }

    /**
     * @param SearchColumnStringField[] $hierarchyNode
     * @return ItemSearchRowBasic
     */
    public function setHierarchyNode(SearchColumnStringField $hierarchyNode): ItemSearchRowBasic
    {
        $this->hierarchyNode[] = $hierarchyNode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getHierarchyNode(): array
    {
        return $this->hierarchyNode;
    }

    /**
     * @param SearchColumnStringField[] $hierarchyVersion
     * @return ItemSearchRowBasic
     */
    public function setHierarchyVersion(SearchColumnStringField $hierarchyVersion): ItemSearchRowBasic
    {
        $this->hierarchyVersion[] = $hierarchyVersion;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getHierarchyVersion(): array
    {
        return $this->hierarchyVersion;
    }

    /**
     * @param SearchColumnLongField[] $hits
     * @return ItemSearchRowBasic
     */
    public function setHits(SearchColumnLongField $hits): ItemSearchRowBasic
    {
        $this->hits[] = $hits;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getHits(): array
    {
        return $this->hits;
    }

    /**
     * @param SearchColumnStringField[] $imageUrl
     * @return ItemSearchRowBasic
     */
    public function setImageUrl(SearchColumnStringField $imageUrl): ItemSearchRowBasic
    {
        $this->imageUrl[] = $imageUrl;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getImageUrl(): array
    {
        return $this->imageUrl;
    }

    /**
     * @param SearchColumnBooleanField[] $includeChildren
     * @return ItemSearchRowBasic
     */
    public function setIncludeChildren(SearchColumnBooleanField $includeChildren): ItemSearchRowBasic
    {
        $this->includeChildren[] = $includeChildren;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIncludeChildren(): array
    {
        return $this->includeChildren;
    }

    /**
     * @param SearchColumnSelectField[] $incomeAccount
     * @return ItemSearchRowBasic
     */
    public function setIncomeAccount(SearchColumnSelectField $incomeAccount): ItemSearchRowBasic
    {
        $this->incomeAccount[] = $incomeAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getIncomeAccount(): array
    {
        return $this->incomeAccount;
    }

    /**
     * @param SearchColumnSelectField[] $intercoDefRevAccount
     * @return ItemSearchRowBasic
     */
    public function setIntercoDefRevAccount(SearchColumnSelectField $intercoDefRevAccount): ItemSearchRowBasic
    {
        $this->intercoDefRevAccount[] = $intercoDefRevAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getIntercoDefRevAccount(): array
    {
        return $this->intercoDefRevAccount;
    }

    /**
     * @param SearchColumnSelectField[] $intercoExpenseAccount
     * @return ItemSearchRowBasic
     */
    public function setIntercoExpenseAccount(SearchColumnSelectField $intercoExpenseAccount): ItemSearchRowBasic
    {
        $this->intercoExpenseAccount[] = $intercoExpenseAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getIntercoExpenseAccount(): array
    {
        return $this->intercoExpenseAccount;
    }

    /**
     * @param SearchColumnSelectField[] $intercoIncomeAccount
     * @return ItemSearchRowBasic
     */
    public function setIntercoIncomeAccount(SearchColumnSelectField $intercoIncomeAccount): ItemSearchRowBasic
    {
        $this->intercoIncomeAccount[] = $intercoIncomeAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getIntercoIncomeAccount(): array
    {
        return $this->intercoIncomeAccount;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return ItemSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): ItemSearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $inventoryLocation
     * @return ItemSearchRowBasic
     */
    public function setInventoryLocation(SearchColumnSelectField $inventoryLocation): ItemSearchRowBasic
    {
        $this->inventoryLocation[] = $inventoryLocation;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInventoryLocation(): array
    {
        return $this->inventoryLocation;
    }

    /**
     * @param SearchColumnEnumSelectField[] $invtClassification
     * @return ItemSearchRowBasic
     */
    public function setInvtClassification(SearchColumnEnumSelectField $invtClassification): ItemSearchRowBasic
    {
        $this->invtClassification[] = $invtClassification;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getInvtClassification(): array
    {
        return $this->invtClassification;
    }

    /**
     * @param SearchColumnLongField[] $invtCountInterval
     * @return ItemSearchRowBasic
     */
    public function setInvtCountInterval(SearchColumnLongField $invtCountInterval): ItemSearchRowBasic
    {
        $this->invtCountInterval[] = $invtCountInterval;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getInvtCountInterval(): array
    {
        return $this->invtCountInterval;
    }

    /**
     * @param SearchColumnBooleanField[] $isAvailable
     * @return ItemSearchRowBasic
     */
    public function setIsAvailable(SearchColumnBooleanField $isAvailable): ItemSearchRowBasic
    {
        $this->isAvailable[] = $isAvailable;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsAvailable(): array
    {
        return $this->isAvailable;
    }

    /**
     * @param SearchColumnBooleanField[] $isDropShipItem
     * @return ItemSearchRowBasic
     */
    public function setIsDropShipItem(SearchColumnBooleanField $isDropShipItem): ItemSearchRowBasic
    {
        $this->isDropShipItem[] = $isDropShipItem;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsDropShipItem(): array
    {
        return $this->isDropShipItem;
    }

    /**
     * @param SearchColumnBooleanField[] $isFulfillable
     * @return ItemSearchRowBasic
     */
    public function setIsFulfillable(SearchColumnBooleanField $isFulfillable): ItemSearchRowBasic
    {
        $this->isFulfillable[] = $isFulfillable;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsFulfillable(): array
    {
        return $this->isFulfillable;
    }

    /**
     * @param SearchColumnBooleanField[] $isGcoCompliant
     * @return ItemSearchRowBasic
     */
    public function setIsGcoCompliant(SearchColumnBooleanField $isGcoCompliant): ItemSearchRowBasic
    {
        $this->isGcoCompliant[] = $isGcoCompliant;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsGcoCompliant(): array
    {
        return $this->isGcoCompliant;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return ItemSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): ItemSearchRowBasic
    {
        $this->isInactive[] = $isInactive;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive(): array
    {
        return $this->isInactive;
    }

    /**
     * @param SearchColumnBooleanField[] $isLotItem
     * @return ItemSearchRowBasic
     */
    public function setIsLotItem(SearchColumnBooleanField $isLotItem): ItemSearchRowBasic
    {
        $this->isLotItem[] = $isLotItem;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsLotItem(): array
    {
        return $this->isLotItem;
    }

    /**
     * @param SearchColumnBooleanField[] $isOnline
     * @return ItemSearchRowBasic
     */
    public function setIsOnline(SearchColumnBooleanField $isOnline): ItemSearchRowBasic
    {
        $this->isOnline[] = $isOnline;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsOnline(): array
    {
        return $this->isOnline;
    }

    /**
     * @param SearchColumnBooleanField[] $isSerialItem
     * @return ItemSearchRowBasic
     */
    public function setIsSerialItem(SearchColumnBooleanField $isSerialItem): ItemSearchRowBasic
    {
        $this->isSerialItem[] = $isSerialItem;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsSerialItem(): array
    {
        return $this->isSerialItem;
    }

    /**
     * @param SearchColumnBooleanField[] $isSpecialOrderItem
     * @return ItemSearchRowBasic
     */
    public function setIsSpecialOrderItem(SearchColumnBooleanField $isSpecialOrderItem): ItemSearchRowBasic
    {
        $this->isSpecialOrderItem[] = $isSpecialOrderItem;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsSpecialOrderItem(): array
    {
        return $this->isSpecialOrderItem;
    }

    /**
     * @param SearchColumnBooleanField[] $isSpecialWorkOrderItem
     * @return ItemSearchRowBasic
     */
    public function setIsSpecialWorkOrderItem(SearchColumnBooleanField $isSpecialWorkOrderItem): ItemSearchRowBasic
    {
        $this->isSpecialWorkOrderItem[] = $isSpecialWorkOrderItem;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsSpecialWorkOrderItem(): array
    {
        return $this->isSpecialWorkOrderItem;
    }

    /**
     * @param SearchColumnBooleanField[] $isStorePickupAllowed
     * @return ItemSearchRowBasic
     */
    public function setIsStorePickupAllowed(SearchColumnBooleanField $isStorePickupAllowed): ItemSearchRowBasic
    {
        $this->isStorePickupAllowed[] = $isStorePickupAllowed;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsStorePickupAllowed(): array
    {
        return $this->isStorePickupAllowed;
    }

    /**
     * @param SearchColumnSelectField[] $issueProduct
     * @return ItemSearchRowBasic
     */
    public function setIssueProduct(SearchColumnSelectField $issueProduct): ItemSearchRowBasic
    {
        $this->issueProduct[] = $issueProduct;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getIssueProduct(): array
    {
        return $this->issueProduct;
    }

    /**
     * @param SearchColumnBooleanField[] $isTaxable
     * @return ItemSearchRowBasic
     */
    public function setIsTaxable(SearchColumnBooleanField $isTaxable): ItemSearchRowBasic
    {
        $this->isTaxable[] = $isTaxable;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsTaxable(): array
    {
        return $this->isTaxable;
    }

    /**
     * @param SearchColumnBooleanField[] $isVsoeBundle
     * @return ItemSearchRowBasic
     */
    public function setIsVsoeBundle(SearchColumnBooleanField $isVsoeBundle): ItemSearchRowBasic
    {
        $this->isVsoeBundle[] = $isVsoeBundle;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsVsoeBundle(): array
    {
        return $this->isVsoeBundle;
    }

    /**
     * @param SearchColumnBooleanField[] $isWip
     * @return ItemSearchRowBasic
     */
    public function setIsWip(SearchColumnBooleanField $isWip): ItemSearchRowBasic
    {
        $this->isWip[] = $isWip;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsWip(): array
    {
        return $this->isWip;
    }

    /**
     * @param SearchColumnStringField[] $itemId
     * @return ItemSearchRowBasic
     */
    public function setItemId(SearchColumnStringField $itemId): ItemSearchRowBasic
    {
        $this->itemId[] = $itemId;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getItemId(): array
    {
        return $this->itemId;
    }

    /**
     * @param SearchColumnSelectField[] $itemRevenueCategory
     * @return ItemSearchRowBasic
     */
    public function setItemRevenueCategory(SearchColumnSelectField $itemRevenueCategory): ItemSearchRowBasic
    {
        $this->itemRevenueCategory[] = $itemRevenueCategory;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItemRevenueCategory(): array
    {
        return $this->itemRevenueCategory;
    }

    /**
     * @param SearchColumnStringField[] $itemUrl
     * @return ItemSearchRowBasic
     */
    public function setItemUrl(SearchColumnStringField $itemUrl): ItemSearchRowBasic
    {
        $this->itemUrl[] = $itemUrl;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getItemUrl(): array
    {
        return $this->itemUrl;
    }

    /**
     * @param SearchColumnDateField[] $lastInvtCountDate
     * @return ItemSearchRowBasic
     */
    public function setLastInvtCountDate(SearchColumnDateField $lastInvtCountDate): ItemSearchRowBasic
    {
        $this->lastInvtCountDate[] = $lastInvtCountDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastInvtCountDate(): array
    {
        return $this->lastInvtCountDate;
    }

    /**
     * @param SearchColumnDoubleField[] $lastPurchasePrice
     * @return ItemSearchRowBasic
     */
    public function setLastPurchasePrice(SearchColumnDoubleField $lastPurchasePrice): ItemSearchRowBasic
    {
        $this->lastPurchasePrice[] = $lastPurchasePrice;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLastPurchasePrice(): array
    {
        return $this->lastPurchasePrice;
    }

    /**
     * @param SearchColumnDateField[] $lastQuantityAvailableChange
     * @return ItemSearchRowBasic
     */
    public function setLastQuantityAvailableChange(SearchColumnDateField $lastQuantityAvailableChange): ItemSearchRowBasic
    {
        $this->lastQuantityAvailableChange[] = $lastQuantityAvailableChange;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastQuantityAvailableChange(): array
    {
        return $this->lastQuantityAvailableChange;
    }

    /**
     * @param SearchColumnLongField[] $leadTime
     * @return ItemSearchRowBasic
     */
    public function setLeadTime(SearchColumnLongField $leadTime): ItemSearchRowBasic
    {
        $this->leadTime[] = $leadTime;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLeadTime(): array
    {
        return $this->leadTime;
    }

    /**
     * @param SearchColumnSelectField[] $liabilityAccount
     * @return ItemSearchRowBasic
     */
    public function setLiabilityAccount(SearchColumnSelectField $liabilityAccount): ItemSearchRowBasic
    {
        $this->liabilityAccount[] = $liabilityAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLiabilityAccount(): array
    {
        return $this->liabilityAccount;
    }

    /**
     * @param SearchColumnEnumSelectField[] $listingDuration
     * @return ItemSearchRowBasic
     */
    public function setListingDuration(SearchColumnEnumSelectField $listingDuration): ItemSearchRowBasic
    {
        $this->listingDuration[] = $listingDuration;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getListingDuration(): array
    {
        return $this->listingDuration;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return ItemSearchRowBasic
     */
    public function setLocation(SearchColumnSelectField $location): ItemSearchRowBasic
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation(): array
    {
        return $this->location;
    }

    /**
     * @param SearchColumnBooleanField[] $locationAllowStorePickup
     * @return ItemSearchRowBasic
     */
    public function setLocationAllowStorePickup(SearchColumnBooleanField $locationAllowStorePickup): ItemSearchRowBasic
    {
        $this->locationAllowStorePickup[] = $locationAllowStorePickup;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getLocationAllowStorePickup(): array
    {
        return $this->locationAllowStorePickup;
    }

    /**
     * @param SearchColumnDoubleField[] $locationAtpLeadTime
     * @return ItemSearchRowBasic
     */
    public function setLocationAtpLeadTime(SearchColumnDoubleField $locationAtpLeadTime): ItemSearchRowBasic
    {
        $this->locationAtpLeadTime[] = $locationAtpLeadTime;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationAtpLeadTime(): array
    {
        return $this->locationAtpLeadTime;
    }

    /**
     * @param SearchColumnDoubleField[] $locationAverageCost
     * @return ItemSearchRowBasic
     */
    public function setLocationAverageCost(SearchColumnDoubleField $locationAverageCost): ItemSearchRowBasic
    {
        $this->locationAverageCost[] = $locationAverageCost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationAverageCost(): array
    {
        return $this->locationAverageCost;
    }

    /**
     * @param SearchColumnStringField[] $locationBinQuantityAvailable
     * @return ItemSearchRowBasic
     */
    public function setLocationBinQuantityAvailable(SearchColumnStringField $locationBinQuantityAvailable): ItemSearchRowBasic
    {
        $this->locationBinQuantityAvailable[] = $locationBinQuantityAvailable;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocationBinQuantityAvailable(): array
    {
        return $this->locationBinQuantityAvailable;
    }

    /**
     * @param SearchColumnDoubleField[] $locationBuildTime
     * @return ItemSearchRowBasic
     */
    public function setLocationBuildTime(SearchColumnDoubleField $locationBuildTime): ItemSearchRowBasic
    {
        $this->locationBuildTime[] = $locationBuildTime;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationBuildTime(): array
    {
        return $this->locationBuildTime;
    }

    /**
     * @param SearchColumnDoubleField[] $locationCost
     * @return ItemSearchRowBasic
     */
    public function setLocationCost(SearchColumnDoubleField $locationCost): ItemSearchRowBasic
    {
        $this->locationCost[] = $locationCost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationCost(): array
    {
        return $this->locationCost;
    }

    /**
     * @param SearchColumnEnumSelectField[] $locationCostAccountingStatus
     * @return ItemSearchRowBasic
     */
    public function setLocationCostAccountingStatus(SearchColumnEnumSelectField $locationCostAccountingStatus): ItemSearchRowBasic
    {
        $this->locationCostAccountingStatus[] = $locationCostAccountingStatus;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLocationCostAccountingStatus(): array
    {
        return $this->locationCostAccountingStatus;
    }

    /**
     * @param SearchColumnDoubleField[] $locationDefaultReturnCost
     * @return ItemSearchRowBasic
     */
    public function setLocationDefaultReturnCost(SearchColumnDoubleField $locationDefaultReturnCost): ItemSearchRowBasic
    {
        $this->locationDefaultReturnCost[] = $locationDefaultReturnCost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationDefaultReturnCost(): array
    {
        return $this->locationDefaultReturnCost;
    }

    /**
     * @param SearchColumnEnumSelectField[] $locationDemandSource
     * @return ItemSearchRowBasic
     */
    public function setLocationDemandSource(SearchColumnEnumSelectField $locationDemandSource): ItemSearchRowBasic
    {
        $this->locationDemandSource[] = $locationDemandSource;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLocationDemandSource(): array
    {
        return $this->locationDemandSource;
    }

    /**
     * @param SearchColumnLongField[] $locationDemandTimeFence
     * @return ItemSearchRowBasic
     */
    public function setLocationDemandTimeFence(SearchColumnLongField $locationDemandTimeFence): ItemSearchRowBasic
    {
        $this->locationDemandTimeFence[] = $locationDemandTimeFence;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLocationDemandTimeFence(): array
    {
        return $this->locationDemandTimeFence;
    }

    /**
     * @param SearchColumnDoubleField[] $locationFixedLotSize
     * @return ItemSearchRowBasic
     */
    public function setLocationFixedLotSize(SearchColumnDoubleField $locationFixedLotSize): ItemSearchRowBasic
    {
        $this->locationFixedLotSize[] = $locationFixedLotSize;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationFixedLotSize(): array
    {
        return $this->locationFixedLotSize;
    }

    /**
     * @param SearchColumnStringField[] $locationInventoryCostTemplate
     * @return ItemSearchRowBasic
     */
    public function setLocationInventoryCostTemplate(SearchColumnStringField $locationInventoryCostTemplate): ItemSearchRowBasic
    {
        $this->locationInventoryCostTemplate[] = $locationInventoryCostTemplate;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocationInventoryCostTemplate(): array
    {
        return $this->locationInventoryCostTemplate;
    }

    /**
     * @param SearchColumnEnumSelectField[] $locationInvtClassification
     * @return ItemSearchRowBasic
     */
    public function setLocationInvtClassification(SearchColumnEnumSelectField $locationInvtClassification): ItemSearchRowBasic
    {
        $this->locationInvtClassification[] = $locationInvtClassification;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLocationInvtClassification(): array
    {
        return $this->locationInvtClassification;
    }

    /**
     * @param SearchColumnLongField[] $locationInvtCountInterval
     * @return ItemSearchRowBasic
     */
    public function setLocationInvtCountInterval(SearchColumnLongField $locationInvtCountInterval): ItemSearchRowBasic
    {
        $this->locationInvtCountInterval[] = $locationInvtCountInterval;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLocationInvtCountInterval(): array
    {
        return $this->locationInvtCountInterval;
    }

    /**
     * @param SearchColumnDateField[] $locationLastInvtCountDate
     * @return ItemSearchRowBasic
     */
    public function setLocationLastInvtCountDate(SearchColumnDateField $locationLastInvtCountDate): ItemSearchRowBasic
    {
        $this->locationLastInvtCountDate[] = $locationLastInvtCountDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLocationLastInvtCountDate(): array
    {
        return $this->locationLastInvtCountDate;
    }

    /**
     * @param SearchColumnLongField[] $locationLeadTime
     * @return ItemSearchRowBasic
     */
    public function setLocationLeadTime(SearchColumnLongField $locationLeadTime): ItemSearchRowBasic
    {
        $this->locationLeadTime[] = $locationLeadTime;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLocationLeadTime(): array
    {
        return $this->locationLeadTime;
    }

    /**
     * @param SearchColumnDateField[] $locationNextInvtCountDate
     * @return ItemSearchRowBasic
     */
    public function setLocationNextInvtCountDate(SearchColumnDateField $locationNextInvtCountDate): ItemSearchRowBasic
    {
        $this->locationNextInvtCountDate[] = $locationNextInvtCountDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLocationNextInvtCountDate(): array
    {
        return $this->locationNextInvtCountDate;
    }

    /**
     * @param SearchColumnLongField[] $locationPeriodicLotSizeDays
     * @return ItemSearchRowBasic
     */
    public function setLocationPeriodicLotSizeDays(SearchColumnLongField $locationPeriodicLotSizeDays): ItemSearchRowBasic
    {
        $this->locationPeriodicLotSizeDays[] = $locationPeriodicLotSizeDays;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLocationPeriodicLotSizeDays(): array
    {
        return $this->locationPeriodicLotSizeDays;
    }

    /**
     * @param SearchColumnEnumSelectField[] $locationPeriodicLotSizeType
     * @return ItemSearchRowBasic
     */
    public function setLocationPeriodicLotSizeType(SearchColumnEnumSelectField $locationPeriodicLotSizeType): ItemSearchRowBasic
    {
        $this->locationPeriodicLotSizeType[] = $locationPeriodicLotSizeType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLocationPeriodicLotSizeType(): array
    {
        return $this->locationPeriodicLotSizeType;
    }

    /**
     * @param SearchColumnDoubleField[] $locationPreferredStockLevel
     * @return ItemSearchRowBasic
     */
    public function setLocationPreferredStockLevel(SearchColumnDoubleField $locationPreferredStockLevel): ItemSearchRowBasic
    {
        $this->locationPreferredStockLevel[] = $locationPreferredStockLevel;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationPreferredStockLevel(): array
    {
        return $this->locationPreferredStockLevel;
    }

    /**
     * @param SearchColumnDoubleField[] $locationQtyAvailForStorePickup
     * @return ItemSearchRowBasic
     */
    public function setLocationQtyAvailForStorePickup(SearchColumnDoubleField $locationQtyAvailForStorePickup): ItemSearchRowBasic
    {
        $this->locationQtyAvailForStorePickup[] = $locationQtyAvailForStorePickup;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationQtyAvailForStorePickup(): array
    {
        return $this->locationQtyAvailForStorePickup;
    }

    /**
     * @param SearchColumnDoubleField[] $locationQuantityAvailable
     * @return ItemSearchRowBasic
     */
    public function setLocationQuantityAvailable(SearchColumnDoubleField $locationQuantityAvailable): ItemSearchRowBasic
    {
        $this->locationQuantityAvailable[] = $locationQuantityAvailable;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationQuantityAvailable(): array
    {
        return $this->locationQuantityAvailable;
    }

    /**
     * @param SearchColumnDoubleField[] $locationQuantityBackOrdered
     * @return ItemSearchRowBasic
     */
    public function setLocationQuantityBackOrdered(SearchColumnDoubleField $locationQuantityBackOrdered): ItemSearchRowBasic
    {
        $this->locationQuantityBackOrdered[] = $locationQuantityBackOrdered;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationQuantityBackOrdered(): array
    {
        return $this->locationQuantityBackOrdered;
    }

    /**
     * @param SearchColumnDoubleField[] $locationQuantityCommitted
     * @return ItemSearchRowBasic
     */
    public function setLocationQuantityCommitted(SearchColumnDoubleField $locationQuantityCommitted): ItemSearchRowBasic
    {
        $this->locationQuantityCommitted[] = $locationQuantityCommitted;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationQuantityCommitted(): array
    {
        return $this->locationQuantityCommitted;
    }

    /**
     * @param SearchColumnDoubleField[] $locationQuantityInTransit
     * @return ItemSearchRowBasic
     */
    public function setLocationQuantityInTransit(SearchColumnDoubleField $locationQuantityInTransit): ItemSearchRowBasic
    {
        $this->locationQuantityInTransit[] = $locationQuantityInTransit;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationQuantityInTransit(): array
    {
        return $this->locationQuantityInTransit;
    }

    /**
     * @param SearchColumnDoubleField[] $locationQuantityOnHand
     * @return ItemSearchRowBasic
     */
    public function setLocationQuantityOnHand(SearchColumnDoubleField $locationQuantityOnHand): ItemSearchRowBasic
    {
        $this->locationQuantityOnHand[] = $locationQuantityOnHand;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationQuantityOnHand(): array
    {
        return $this->locationQuantityOnHand;
    }

    /**
     * @param SearchColumnDoubleField[] $locationQuantityOnOrder
     * @return ItemSearchRowBasic
     */
    public function setLocationQuantityOnOrder(SearchColumnDoubleField $locationQuantityOnOrder): ItemSearchRowBasic
    {
        $this->locationQuantityOnOrder[] = $locationQuantityOnOrder;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationQuantityOnOrder(): array
    {
        return $this->locationQuantityOnOrder;
    }

    /**
     * @param SearchColumnDoubleField[] $locationReOrderPoint
     * @return ItemSearchRowBasic
     */
    public function setLocationReOrderPoint(SearchColumnDoubleField $locationReOrderPoint): ItemSearchRowBasic
    {
        $this->locationReOrderPoint[] = $locationReOrderPoint;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationReOrderPoint(): array
    {
        return $this->locationReOrderPoint;
    }

    /**
     * @param SearchColumnLongField[] $locationRescheduleInDays
     * @return ItemSearchRowBasic
     */
    public function setLocationRescheduleInDays(SearchColumnLongField $locationRescheduleInDays): ItemSearchRowBasic
    {
        $this->locationRescheduleInDays[] = $locationRescheduleInDays;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLocationRescheduleInDays(): array
    {
        return $this->locationRescheduleInDays;
    }

    /**
     * @param SearchColumnLongField[] $locationRescheduleOutDays
     * @return ItemSearchRowBasic
     */
    public function setLocationRescheduleOutDays(SearchColumnLongField $locationRescheduleOutDays): ItemSearchRowBasic
    {
        $this->locationRescheduleOutDays[] = $locationRescheduleOutDays;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLocationRescheduleOutDays(): array
    {
        return $this->locationRescheduleOutDays;
    }

    /**
     * @param SearchColumnDoubleField[] $locationSafetyStockLevel
     * @return ItemSearchRowBasic
     */
    public function setLocationSafetyStockLevel(SearchColumnDoubleField $locationSafetyStockLevel): ItemSearchRowBasic
    {
        $this->locationSafetyStockLevel[] = $locationSafetyStockLevel;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationSafetyStockLevel(): array
    {
        return $this->locationSafetyStockLevel;
    }

    /**
     * @param SearchColumnDoubleField[] $locationStorePickupBufferStock
     * @return ItemSearchRowBasic
     */
    public function setLocationStorePickupBufferStock(SearchColumnDoubleField $locationStorePickupBufferStock): ItemSearchRowBasic
    {
        $this->locationStorePickupBufferStock[] = $locationStorePickupBufferStock;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationStorePickupBufferStock(): array
    {
        return $this->locationStorePickupBufferStock;
    }

    /**
     * @param SearchColumnEnumSelectField[] $locationSupplyLotSizingMethod
     * @return ItemSearchRowBasic
     */
    public function setLocationSupplyLotSizingMethod(SearchColumnEnumSelectField $locationSupplyLotSizingMethod): ItemSearchRowBasic
    {
        $this->locationSupplyLotSizingMethod[] = $locationSupplyLotSizingMethod;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLocationSupplyLotSizingMethod(): array
    {
        return $this->locationSupplyLotSizingMethod;
    }

    /**
     * @param SearchColumnLongField[] $locationSupplyTimeFence
     * @return ItemSearchRowBasic
     */
    public function setLocationSupplyTimeFence(SearchColumnLongField $locationSupplyTimeFence): ItemSearchRowBasic
    {
        $this->locationSupplyTimeFence[] = $locationSupplyTimeFence;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLocationSupplyTimeFence(): array
    {
        return $this->locationSupplyTimeFence;
    }

    /**
     * @param SearchColumnEnumSelectField[] $locationSupplyType
     * @return ItemSearchRowBasic
     */
    public function setLocationSupplyType(SearchColumnEnumSelectField $locationSupplyType): ItemSearchRowBasic
    {
        $this->locationSupplyType[] = $locationSupplyType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLocationSupplyType(): array
    {
        return $this->locationSupplyType;
    }

    /**
     * @param SearchColumnDoubleField[] $locationTotalValue
     * @return ItemSearchRowBasic
     */
    public function setLocationTotalValue(SearchColumnDoubleField $locationTotalValue): ItemSearchRowBasic
    {
        $this->locationTotalValue[] = $locationTotalValue;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationTotalValue(): array
    {
        return $this->locationTotalValue;
    }

    /**
     * @param SearchColumnLongField[] $locBackwardConsumptionDays
     * @return ItemSearchRowBasic
     */
    public function setLocBackwardConsumptionDays(SearchColumnLongField $locBackwardConsumptionDays): ItemSearchRowBasic
    {
        $this->locBackwardConsumptionDays[] = $locBackwardConsumptionDays;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLocBackwardConsumptionDays(): array
    {
        return $this->locBackwardConsumptionDays;
    }

    /**
     * @param SearchColumnLongField[] $locForwardConsumptionDays
     * @return ItemSearchRowBasic
     */
    public function setLocForwardConsumptionDays(SearchColumnLongField $locForwardConsumptionDays): ItemSearchRowBasic
    {
        $this->locForwardConsumptionDays[] = $locForwardConsumptionDays;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLocForwardConsumptionDays(): array
    {
        return $this->locForwardConsumptionDays;
    }

    /**
     * @param SearchColumnDoubleField[] $lowerWarningLimit
     * @return ItemSearchRowBasic
     */
    public function setLowerWarningLimit(SearchColumnDoubleField $lowerWarningLimit): ItemSearchRowBasic
    {
        $this->lowerWarningLimit[] = $lowerWarningLimit;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLowerWarningLimit(): array
    {
        return $this->lowerWarningLimit;
    }

    /**
     * @param SearchColumnStringField[] $manufacturer
     * @return ItemSearchRowBasic
     */
    public function setManufacturer(SearchColumnStringField $manufacturer): ItemSearchRowBasic
    {
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getManufacturer(): array
    {
        return $this->manufacturer;
    }

    /**
     * @param SearchColumnStringField[] $manufacturerCity
     * @return ItemSearchRowBasic
     */
    public function setManufacturerCity(SearchColumnStringField $manufacturerCity): ItemSearchRowBasic
    {
        $this->manufacturerCity[] = $manufacturerCity;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getManufacturerCity(): array
    {
        return $this->manufacturerCity;
    }

    /**
     * @param SearchColumnStringField[] $manufacturerState
     * @return ItemSearchRowBasic
     */
    public function setManufacturerState(SearchColumnStringField $manufacturerState): ItemSearchRowBasic
    {
        $this->manufacturerState[] = $manufacturerState;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getManufacturerState(): array
    {
        return $this->manufacturerState;
    }

    /**
     * @param SearchColumnStringField[] $manufacturerTariff
     * @return ItemSearchRowBasic
     */
    public function setManufacturerTariff(SearchColumnStringField $manufacturerTariff): ItemSearchRowBasic
    {
        $this->manufacturerTariff[] = $manufacturerTariff;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getManufacturerTariff(): array
    {
        return $this->manufacturerTariff;
    }

    /**
     * @param SearchColumnStringField[] $manufacturerTaxId
     * @return ItemSearchRowBasic
     */
    public function setManufacturerTaxId(SearchColumnStringField $manufacturerTaxId): ItemSearchRowBasic
    {
        $this->manufacturerTaxId[] = $manufacturerTaxId;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getManufacturerTaxId(): array
    {
        return $this->manufacturerTaxId;
    }

    /**
     * @param SearchColumnStringField[] $manufacturerZip
     * @return ItemSearchRowBasic
     */
    public function setManufacturerZip(SearchColumnStringField $manufacturerZip): ItemSearchRowBasic
    {
        $this->manufacturerZip[] = $manufacturerZip;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getManufacturerZip(): array
    {
        return $this->manufacturerZip;
    }

    /**
     * @param SearchColumnBooleanField[] $manufacturingChargeItem
     * @return ItemSearchRowBasic
     */
    public function setManufacturingChargeItem(SearchColumnBooleanField $manufacturingChargeItem): ItemSearchRowBasic
    {
        $this->manufacturingChargeItem[] = $manufacturingChargeItem;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getManufacturingChargeItem(): array
    {
        return $this->manufacturingChargeItem;
    }

    /**
     * @param SearchColumnBooleanField[] $matchBillToReceipt
     * @return ItemSearchRowBasic
     */
    public function setMatchBillToReceipt(SearchColumnBooleanField $matchBillToReceipt): ItemSearchRowBasic
    {
        $this->matchBillToReceipt[] = $matchBillToReceipt;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMatchBillToReceipt(): array
    {
        return $this->matchBillToReceipt;
    }

    /**
     * @param SearchColumnStringField[] $maximumQuantity
     * @return ItemSearchRowBasic
     */
    public function setMaximumQuantity(SearchColumnStringField $maximumQuantity): ItemSearchRowBasic
    {
        $this->maximumQuantity[] = $maximumQuantity;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMaximumQuantity(): array
    {
        return $this->maximumQuantity;
    }

    /**
     * @param SearchColumnSelectField[] $memberItem
     * @return ItemSearchRowBasic
     */
    public function setMemberItem(SearchColumnSelectField $memberItem): ItemSearchRowBasic
    {
        $this->memberItem[] = $memberItem;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getMemberItem(): array
    {
        return $this->memberItem;
    }

    /**
     * @param SearchColumnDoubleField[] $memberQuantity
     * @return ItemSearchRowBasic
     */
    public function setMemberQuantity(SearchColumnDoubleField $memberQuantity): ItemSearchRowBasic
    {
        $this->memberQuantity[] = $memberQuantity;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getMemberQuantity(): array
    {
        return $this->memberQuantity;
    }

    /**
     * @param SearchColumnStringField[] $metaTagHtml
     * @return ItemSearchRowBasic
     */
    public function setMetaTagHtml(SearchColumnStringField $metaTagHtml): ItemSearchRowBasic
    {
        $this->metaTagHtml[] = $metaTagHtml;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMetaTagHtml(): array
    {
        return $this->metaTagHtml;
    }

    /**
     * @param SearchColumnStringField[] $minimumQuantity
     * @return ItemSearchRowBasic
     */
    public function setMinimumQuantity(SearchColumnStringField $minimumQuantity): ItemSearchRowBasic
    {
        $this->minimumQuantity[] = $minimumQuantity;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMinimumQuantity(): array
    {
        return $this->minimumQuantity;
    }

    /**
     * @param SearchColumnDateField[] $modified
     * @return ItemSearchRowBasic
     */
    public function setModified(SearchColumnDateField $modified): ItemSearchRowBasic
    {
        $this->modified[] = $modified;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getModified(): array
    {
        return $this->modified;
    }

    /**
     * @param SearchColumnBooleanField[] $mossApplies
     * @return ItemSearchRowBasic
     */
    public function setMossApplies(SearchColumnBooleanField $mossApplies): ItemSearchRowBasic
    {
        $this->mossApplies[] = $mossApplies;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMossApplies(): array
    {
        return $this->mossApplies;
    }

    /**
     * @param SearchColumnStringField[] $mpn
     * @return ItemSearchRowBasic
     */
    public function setMpn(SearchColumnStringField $mpn): ItemSearchRowBasic
    {
        $this->mpn[] = $mpn;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMpn(): array
    {
        return $this->mpn;
    }

    /**
     * @param SearchColumnBooleanField[] $multManufactureAddr
     * @return ItemSearchRowBasic
     */
    public function setMultManufactureAddr(SearchColumnBooleanField $multManufactureAddr): ItemSearchRowBasic
    {
        $this->multManufactureAddr[] = $multManufactureAddr;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMultManufactureAddr(): array
    {
        return $this->multManufactureAddr;
    }

    /**
     * @param SearchColumnStringField[] $nextagCategory
     * @return ItemSearchRowBasic
     */
    public function setNextagCategory(SearchColumnStringField $nextagCategory): ItemSearchRowBasic
    {
        $this->nextagCategory[] = $nextagCategory;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNextagCategory(): array
    {
        return $this->nextagCategory;
    }

    /**
     * @param SearchColumnBooleanField[] $nextagProductFeed
     * @return ItemSearchRowBasic
     */
    public function setNextagProductFeed(SearchColumnBooleanField $nextagProductFeed): ItemSearchRowBasic
    {
        $this->nextagProductFeed[] = $nextagProductFeed;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getNextagProductFeed(): array
    {
        return $this->nextagProductFeed;
    }

    /**
     * @param SearchColumnDateField[] $nextInvtCountDate
     * @return ItemSearchRowBasic
     */
    public function setNextInvtCountDate(SearchColumnDateField $nextInvtCountDate): ItemSearchRowBasic
    {
        $this->nextInvtCountDate[] = $nextInvtCountDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getNextInvtCountDate(): array
    {
        return $this->nextInvtCountDate;
    }

    /**
     * @param SearchColumnStringField[] $noPriceMessage
     * @return ItemSearchRowBasic
     */
    public function setNoPriceMessage(SearchColumnStringField $noPriceMessage): ItemSearchRowBasic
    {
        $this->noPriceMessage[] = $noPriceMessage;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNoPriceMessage(): array
    {
        return $this->noPriceMessage;
    }

    /**
     * @param SearchColumnLongField[] $numActiveListings
     * @return ItemSearchRowBasic
     */
    public function setNumActiveListings(SearchColumnLongField $numActiveListings): ItemSearchRowBasic
    {
        $this->numActiveListings[] = $numActiveListings;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getNumActiveListings(): array
    {
        return $this->numActiveListings;
    }

    /**
     * @param SearchColumnStringField[] $numberAllowedDownloads
     * @return ItemSearchRowBasic
     */
    public function setNumberAllowedDownloads(SearchColumnStringField $numberAllowedDownloads): ItemSearchRowBasic
    {
        $this->numberAllowedDownloads[] = $numberAllowedDownloads;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNumberAllowedDownloads(): array
    {
        return $this->numberAllowedDownloads;
    }

    /**
     * @param SearchColumnLongField[] $numCurrentlyListed
     * @return ItemSearchRowBasic
     */
    public function setNumCurrentlyListed(SearchColumnLongField $numCurrentlyListed): ItemSearchRowBasic
    {
        $this->numCurrentlyListed[] = $numCurrentlyListed;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getNumCurrentlyListed(): array
    {
        return $this->numCurrentlyListed;
    }

    /**
     * @param SearchColumnDateField[] $obsoleteDate
     * @return ItemSearchRowBasic
     */
    public function setObsoleteDate(SearchColumnDateField $obsoleteDate): ItemSearchRowBasic
    {
        $this->obsoleteDate[] = $obsoleteDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getObsoleteDate(): array
    {
        return $this->obsoleteDate;
    }

    /**
     * @param SearchColumnSelectField[] $obsoleteRevision
     * @return ItemSearchRowBasic
     */
    public function setObsoleteRevision(SearchColumnSelectField $obsoleteRevision): ItemSearchRowBasic
    {
        $this->obsoleteRevision[] = $obsoleteRevision;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getObsoleteRevision(): array
    {
        return $this->obsoleteRevision;
    }

    /**
     * @param SearchColumnBooleanField[] $offerSupport
     * @return ItemSearchRowBasic
     */
    public function setOfferSupport(SearchColumnBooleanField $offerSupport): ItemSearchRowBasic
    {
        $this->offerSupport[] = $offerSupport;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getOfferSupport(): array
    {
        return $this->offerSupport;
    }

    /**
     * @param SearchColumnDoubleField[] $onlineCustomerPrice
     * @return ItemSearchRowBasic
     */
    public function setOnlineCustomerPrice(SearchColumnDoubleField $onlineCustomerPrice): ItemSearchRowBasic
    {
        $this->onlineCustomerPrice[] = $onlineCustomerPrice;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getOnlineCustomerPrice(): array
    {
        return $this->onlineCustomerPrice;
    }

    /**
     * @param SearchColumnDoubleField[] $onlinePrice
     * @return ItemSearchRowBasic
     */
    public function setOnlinePrice(SearchColumnDoubleField $onlinePrice): ItemSearchRowBasic
    {
        $this->onlinePrice[] = $onlinePrice;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getOnlinePrice(): array
    {
        return $this->onlinePrice;
    }

    /**
     * @param SearchColumnBooleanField[] $onSpecial
     * @return ItemSearchRowBasic
     */
    public function setOnSpecial(SearchColumnBooleanField $onSpecial): ItemSearchRowBasic
    {
        $this->onSpecial[] = $onSpecial;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getOnSpecial(): array
    {
        return $this->onSpecial;
    }

    /**
     * @param SearchColumnDoubleField[] $otherPrices
     * @return ItemSearchRowBasic
     */
    public function setOtherPrices(SearchColumnDoubleField $otherPrices): ItemSearchRowBasic
    {
        $this->otherPrices[] = $otherPrices;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getOtherPrices(): array
    {
        return $this->otherPrices;
    }

    /**
     * @param SearchColumnSelectField[] $otherVendor
     * @return ItemSearchRowBasic
     */
    public function setOtherVendor(SearchColumnSelectField $otherVendor): ItemSearchRowBasic
    {
        $this->otherVendor[] = $otherVendor;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOtherVendor(): array
    {
        return $this->otherVendor;
    }

    /**
     * @param SearchColumnStringField[] $outOfStockBehavior
     * @return ItemSearchRowBasic
     */
    public function setOutOfStockBehavior(SearchColumnStringField $outOfStockBehavior): ItemSearchRowBasic
    {
        $this->outOfStockBehavior[] = $outOfStockBehavior;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getOutOfStockBehavior(): array
    {
        return $this->outOfStockBehavior;
    }

    /**
     * @param SearchColumnStringField[] $outOfStockMessage
     * @return ItemSearchRowBasic
     */
    public function setOutOfStockMessage(SearchColumnStringField $outOfStockMessage): ItemSearchRowBasic
    {
        $this->outOfStockMessage[] = $outOfStockMessage;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getOutOfStockMessage(): array
    {
        return $this->outOfStockMessage;
    }

    /**
     * @param SearchColumnEnumSelectField[] $overallQuantityPricingType
     * @return ItemSearchRowBasic
     */
    public function setOverallQuantityPricingType(SearchColumnEnumSelectField $overallQuantityPricingType): ItemSearchRowBasic
    {
        $this->overallQuantityPricingType[] = $overallQuantityPricingType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getOverallQuantityPricingType(): array
    {
        return $this->overallQuantityPricingType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $overheadType
     * @return ItemSearchRowBasic
     */
    public function setOverheadType(SearchColumnEnumSelectField $overheadType): ItemSearchRowBasic
    {
        $this->overheadType[] = $overheadType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getOverheadType(): array
    {
        return $this->overheadType;
    }

    /**
     * @param SearchColumnStringField[] $pageTitle
     * @return ItemSearchRowBasic
     */
    public function setPageTitle(SearchColumnStringField $pageTitle): ItemSearchRowBasic
    {
        $this->pageTitle[] = $pageTitle;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPageTitle(): array
    {
        return $this->pageTitle;
    }

    /**
     * @param SearchColumnSelectField[] $parent
     * @return ItemSearchRowBasic
     */
    public function setParent(SearchColumnSelectField $parent): ItemSearchRowBasic
    {
        $this->parent[] = $parent;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getParent(): array
    {
        return $this->parent;
    }

    /**
     * @param SearchColumnLongField[] $periodicLotSizeDays
     * @return ItemSearchRowBasic
     */
    public function setPeriodicLotSizeDays(SearchColumnLongField $periodicLotSizeDays): ItemSearchRowBasic
    {
        $this->periodicLotSizeDays[] = $periodicLotSizeDays;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getPeriodicLotSizeDays(): array
    {
        return $this->periodicLotSizeDays;
    }

    /**
     * @param SearchColumnEnumSelectField[] $periodicLotSizeType
     * @return ItemSearchRowBasic
     */
    public function setPeriodicLotSizeType(SearchColumnEnumSelectField $periodicLotSizeType): ItemSearchRowBasic
    {
        $this->periodicLotSizeType[] = $periodicLotSizeType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPeriodicLotSizeType(): array
    {
        return $this->periodicLotSizeType;
    }

    /**
     * @param SearchColumnStringField[] $preferenceCriterion
     * @return ItemSearchRowBasic
     */
    public function setPreferenceCriterion(SearchColumnStringField $preferenceCriterion): ItemSearchRowBasic
    {
        $this->preferenceCriterion[] = $preferenceCriterion;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPreferenceCriterion(): array
    {
        return $this->preferenceCriterion;
    }

    /**
     * @param SearchColumnBooleanField[] $preferredBin
     * @return ItemSearchRowBasic
     */
    public function setPreferredBin(SearchColumnBooleanField $preferredBin): ItemSearchRowBasic
    {
        $this->preferredBin[] = $preferredBin;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPreferredBin(): array
    {
        return $this->preferredBin;
    }

    /**
     * @param SearchColumnSelectField[] $preferredLocation
     * @return ItemSearchRowBasic
     */
    public function setPreferredLocation(SearchColumnSelectField $preferredLocation): ItemSearchRowBasic
    {
        $this->preferredLocation[] = $preferredLocation;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPreferredLocation(): array
    {
        return $this->preferredLocation;
    }

    /**
     * @param SearchColumnDoubleField[] $preferredStockLevel
     * @return ItemSearchRowBasic
     */
    public function setPreferredStockLevel(SearchColumnDoubleField $preferredStockLevel): ItemSearchRowBasic
    {
        $this->preferredStockLevel[] = $preferredStockLevel;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPreferredStockLevel(): array
    {
        return $this->preferredStockLevel;
    }

    /**
     * @param SearchColumnLongField[] $preferredStockLevelDays
     * @return ItemSearchRowBasic
     */
    public function setPreferredStockLevelDays(SearchColumnLongField $preferredStockLevelDays): ItemSearchRowBasic
    {
        $this->preferredStockLevelDays[] = $preferredStockLevelDays;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getPreferredStockLevelDays(): array
    {
        return $this->preferredStockLevelDays;
    }

    /**
     * @param SearchColumnBooleanField[] $pricesIncludeTax
     * @return ItemSearchRowBasic
     */
    public function setPricesIncludeTax(SearchColumnBooleanField $pricesIncludeTax): ItemSearchRowBasic
    {
        $this->pricesIncludeTax[] = $pricesIncludeTax;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPricesIncludeTax(): array
    {
        return $this->pricesIncludeTax;
    }

    /**
     * @param SearchColumnSelectField[] $pricingGroup
     * @return ItemSearchRowBasic
     */
    public function setPricingGroup(SearchColumnSelectField $pricingGroup): ItemSearchRowBasic
    {
        $this->pricingGroup[] = $pricingGroup;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPricingGroup(): array
    {
        return $this->pricingGroup;
    }

    /**
     * @param SearchColumnStringField[] $primaryCategory
     * @return ItemSearchRowBasic
     */
    public function setPrimaryCategory(SearchColumnStringField $primaryCategory): ItemSearchRowBasic
    {
        $this->primaryCategory[] = $primaryCategory;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPrimaryCategory(): array
    {
        return $this->primaryCategory;
    }

    /**
     * @param SearchColumnSelectField[] $prodPriceVarianceAcct
     * @return ItemSearchRowBasic
     */
    public function setProdPriceVarianceAcct(SearchColumnSelectField $prodPriceVarianceAcct): ItemSearchRowBasic
    {
        $this->prodPriceVarianceAcct[] = $prodPriceVarianceAcct;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getProdPriceVarianceAcct(): array
    {
        return $this->prodPriceVarianceAcct;
    }

    /**
     * @param SearchColumnSelectField[] $prodQtyVarianceAcct
     * @return ItemSearchRowBasic
     */
    public function setProdQtyVarianceAcct(SearchColumnSelectField $prodQtyVarianceAcct): ItemSearchRowBasic
    {
        $this->prodQtyVarianceAcct[] = $prodQtyVarianceAcct;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getProdQtyVarianceAcct(): array
    {
        return $this->prodQtyVarianceAcct;
    }

    /**
     * @param SearchColumnStringField[] $purchaseDescription
     * @return ItemSearchRowBasic
     */
    public function setPurchaseDescription(SearchColumnStringField $purchaseDescription): ItemSearchRowBasic
    {
        $this->purchaseDescription[] = $purchaseDescription;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPurchaseDescription(): array
    {
        return $this->purchaseDescription;
    }

    /**
     * @param SearchColumnDoubleField[] $purchaseOrderAmount
     * @return ItemSearchRowBasic
     */
    public function setPurchaseOrderAmount(SearchColumnDoubleField $purchaseOrderAmount): ItemSearchRowBasic
    {
        $this->purchaseOrderAmount[] = $purchaseOrderAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPurchaseOrderAmount(): array
    {
        return $this->purchaseOrderAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $purchaseOrderQuantity
     * @return ItemSearchRowBasic
     */
    public function setPurchaseOrderQuantity(SearchColumnDoubleField $purchaseOrderQuantity): ItemSearchRowBasic
    {
        $this->purchaseOrderQuantity[] = $purchaseOrderQuantity;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPurchaseOrderQuantity(): array
    {
        return $this->purchaseOrderQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $purchaseOrderQuantityDiff
     * @return ItemSearchRowBasic
     */
    public function setPurchaseOrderQuantityDiff(SearchColumnDoubleField $purchaseOrderQuantityDiff): ItemSearchRowBasic
    {
        $this->purchaseOrderQuantityDiff[] = $purchaseOrderQuantityDiff;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPurchaseOrderQuantityDiff(): array
    {
        return $this->purchaseOrderQuantityDiff;
    }

    /**
     * @param SearchColumnSelectField[] $purchasePriceVarianceAcct
     * @return ItemSearchRowBasic
     */
    public function setPurchasePriceVarianceAcct(SearchColumnSelectField $purchasePriceVarianceAcct): ItemSearchRowBasic
    {
        $this->purchasePriceVarianceAcct[] = $purchasePriceVarianceAcct;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPurchasePriceVarianceAcct(): array
    {
        return $this->purchasePriceVarianceAcct;
    }

    /**
     * @param SearchColumnSelectField[] $purchaseUnit
     * @return ItemSearchRowBasic
     */
    public function setPurchaseUnit(SearchColumnSelectField $purchaseUnit): ItemSearchRowBasic
    {
        $this->purchaseUnit[] = $purchaseUnit;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPurchaseUnit(): array
    {
        return $this->purchaseUnit;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityAvailable
     * @return ItemSearchRowBasic
     */
    public function setQuantityAvailable(SearchColumnDoubleField $quantityAvailable): ItemSearchRowBasic
    {
        $this->quantityAvailable[] = $quantityAvailable;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityAvailable(): array
    {
        return $this->quantityAvailable;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityBackOrdered
     * @return ItemSearchRowBasic
     */
    public function setQuantityBackOrdered(SearchColumnDoubleField $quantityBackOrdered): ItemSearchRowBasic
    {
        $this->quantityBackOrdered[] = $quantityBackOrdered;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityBackOrdered(): array
    {
        return $this->quantityBackOrdered;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityCommitted
     * @return ItemSearchRowBasic
     */
    public function setQuantityCommitted(SearchColumnDoubleField $quantityCommitted): ItemSearchRowBasic
    {
        $this->quantityCommitted[] = $quantityCommitted;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityCommitted(): array
    {
        return $this->quantityCommitted;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityOnHand
     * @return ItemSearchRowBasic
     */
    public function setQuantityOnHand(SearchColumnDoubleField $quantityOnHand): ItemSearchRowBasic
    {
        $this->quantityOnHand[] = $quantityOnHand;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityOnHand(): array
    {
        return $this->quantityOnHand;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityOnOrder
     * @return ItemSearchRowBasic
     */
    public function setQuantityOnOrder(SearchColumnDoubleField $quantityOnOrder): ItemSearchRowBasic
    {
        $this->quantityOnOrder[] = $quantityOnOrder;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityOnOrder(): array
    {
        return $this->quantityOnOrder;
    }

    /**
     * @param SearchColumnSelectField[] $quantityPricingSchedule
     * @return ItemSearchRowBasic
     */
    public function setQuantityPricingSchedule(SearchColumnSelectField $quantityPricingSchedule): ItemSearchRowBasic
    {
        $this->quantityPricingSchedule[] = $quantityPricingSchedule;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getQuantityPricingSchedule(): array
    {
        return $this->quantityPricingSchedule;
    }

    /**
     * @param SearchColumnDoubleField[] $receiptAmount
     * @return ItemSearchRowBasic
     */
    public function setReceiptAmount(SearchColumnDoubleField $receiptAmount): ItemSearchRowBasic
    {
        $this->receiptAmount[] = $receiptAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getReceiptAmount(): array
    {
        return $this->receiptAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $receiptQuantity
     * @return ItemSearchRowBasic
     */
    public function setReceiptQuantity(SearchColumnDoubleField $receiptQuantity): ItemSearchRowBasic
    {
        $this->receiptQuantity[] = $receiptQuantity;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getReceiptQuantity(): array
    {
        return $this->receiptQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $receiptQuantityDiff
     * @return ItemSearchRowBasic
     */
    public function setReceiptQuantityDiff(SearchColumnDoubleField $receiptQuantityDiff): ItemSearchRowBasic
    {
        $this->receiptQuantityDiff[] = $receiptQuantityDiff;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getReceiptQuantityDiff(): array
    {
        return $this->receiptQuantityDiff;
    }

    /**
     * @param SearchColumnLongField[] $reorderMultiple
     * @return ItemSearchRowBasic
     */
    public function setReorderMultiple(SearchColumnLongField $reorderMultiple): ItemSearchRowBasic
    {
        $this->reorderMultiple[] = $reorderMultiple;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getReorderMultiple(): array
    {
        return $this->reorderMultiple;
    }

    /**
     * @param SearchColumnDoubleField[] $reOrderPoint
     * @return ItemSearchRowBasic
     */
    public function setReOrderPoint(SearchColumnDoubleField $reOrderPoint): ItemSearchRowBasic
    {
        $this->reOrderPoint[] = $reOrderPoint;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getReOrderPoint(): array
    {
        return $this->reOrderPoint;
    }

    /**
     * @param SearchColumnLongField[] $rescheduleInDays
     * @return ItemSearchRowBasic
     */
    public function setRescheduleInDays(SearchColumnLongField $rescheduleInDays): ItemSearchRowBasic
    {
        $this->rescheduleInDays[] = $rescheduleInDays;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getRescheduleInDays(): array
    {
        return $this->rescheduleInDays;
    }

    /**
     * @param SearchColumnLongField[] $rescheduleOutDays
     * @return ItemSearchRowBasic
     */
    public function setRescheduleOutDays(SearchColumnLongField $rescheduleOutDays): ItemSearchRowBasic
    {
        $this->rescheduleOutDays[] = $rescheduleOutDays;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getRescheduleOutDays(): array
    {
        return $this->rescheduleOutDays;
    }

    /**
     * @param SearchColumnDoubleField[] $reservePrice
     * @return ItemSearchRowBasic
     */
    public function setReservePrice(SearchColumnDoubleField $reservePrice): ItemSearchRowBasic
    {
        $this->reservePrice[] = $reservePrice;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getReservePrice(): array
    {
        return $this->reservePrice;
    }

    /**
     * @param SearchColumnSelectField[] $revenueAllocationGroup
     * @return ItemSearchRowBasic
     */
    public function setRevenueAllocationGroup(SearchColumnSelectField $revenueAllocationGroup): ItemSearchRowBasic
    {
        $this->revenueAllocationGroup[] = $revenueAllocationGroup;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRevenueAllocationGroup(): array
    {
        return $this->revenueAllocationGroup;
    }

    /**
     * @param SearchColumnSelectField[] $revenueRecognitionRule
     * @return ItemSearchRowBasic
     */
    public function setRevenueRecognitionRule(SearchColumnSelectField $revenueRecognitionRule): ItemSearchRowBasic
    {
        $this->revenueRecognitionRule[] = $revenueRecognitionRule;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRevenueRecognitionRule(): array
    {
        return $this->revenueRecognitionRule;
    }

    /**
     * @param SearchColumnSelectField[] $revRecForecastRule
     * @return ItemSearchRowBasic
     */
    public function setRevRecForecastRule(SearchColumnSelectField $revRecForecastRule): ItemSearchRowBasic
    {
        $this->revRecForecastRule[] = $revRecForecastRule;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRevRecForecastRule(): array
    {
        return $this->revRecForecastRule;
    }

    /**
     * @param SearchColumnSelectField[] $revReclassFXAccount
     * @return ItemSearchRowBasic
     */
    public function setRevReclassFXAccount(SearchColumnSelectField $revReclassFXAccount): ItemSearchRowBasic
    {
        $this->revReclassFXAccount[] = $revReclassFXAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRevReclassFXAccount(): array
    {
        return $this->revReclassFXAccount;
    }

    /**
     * @param SearchColumnSelectField[] $revRecSchedule
     * @return ItemSearchRowBasic
     */
    public function setRevRecSchedule(SearchColumnSelectField $revRecSchedule): ItemSearchRowBasic
    {
        $this->revRecSchedule[] = $revRecSchedule;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRevRecSchedule(): array
    {
        return $this->revRecSchedule;
    }

    /**
     * @param SearchColumnBooleanField[] $roundUpAsComponent
     * @return ItemSearchRowBasic
     */
    public function setRoundUpAsComponent(SearchColumnBooleanField $roundUpAsComponent): ItemSearchRowBasic
    {
        $this->roundUpAsComponent[] = $roundUpAsComponent;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getRoundUpAsComponent(): array
    {
        return $this->roundUpAsComponent;
    }

    /**
     * @param SearchColumnDoubleField[] $safetyStockLevel
     * @return ItemSearchRowBasic
     */
    public function setSafetyStockLevel(SearchColumnDoubleField $safetyStockLevel): ItemSearchRowBasic
    {
        $this->safetyStockLevel[] = $safetyStockLevel;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getSafetyStockLevel(): array
    {
        return $this->safetyStockLevel;
    }

    /**
     * @param SearchColumnLongField[] $safetyStockLevelDays
     * @return ItemSearchRowBasic
     */
    public function setSafetyStockLevelDays(SearchColumnLongField $safetyStockLevelDays): ItemSearchRowBasic
    {
        $this->safetyStockLevelDays[] = $safetyStockLevelDays;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getSafetyStockLevelDays(): array
    {
        return $this->safetyStockLevelDays;
    }

    /**
     * @param SearchColumnStringField[] $salesDescription
     * @return ItemSearchRowBasic
     */
    public function setSalesDescription(SearchColumnStringField $salesDescription): ItemSearchRowBasic
    {
        $this->salesDescription[] = $salesDescription;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSalesDescription(): array
    {
        return $this->salesDescription;
    }

    /**
     * @param SearchColumnSelectField[] $salesTaxCode
     * @return ItemSearchRowBasic
     */
    public function setSalesTaxCode(SearchColumnSelectField $salesTaxCode): ItemSearchRowBasic
    {
        $this->salesTaxCode[] = $salesTaxCode;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesTaxCode(): array
    {
        return $this->salesTaxCode;
    }

    /**
     * @param SearchColumnSelectField[] $saleUnit
     * @return ItemSearchRowBasic
     */
    public function setSaleUnit(SearchColumnSelectField $saleUnit): ItemSearchRowBasic
    {
        $this->saleUnit[] = $saleUnit;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSaleUnit(): array
    {
        return $this->saleUnit;
    }

    /**
     * @param SearchColumnBooleanField[] $sameAsPrimaryBookAmortization
     * @return ItemSearchRowBasic
     */
    public function setSameAsPrimaryBookAmortization(SearchColumnBooleanField $sameAsPrimaryBookAmortization): ItemSearchRowBasic
    {
        $this->sameAsPrimaryBookAmortization[] = $sameAsPrimaryBookAmortization;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getSameAsPrimaryBookAmortization(): array
    {
        return $this->sameAsPrimaryBookAmortization;
    }

    /**
     * @param SearchColumnBooleanField[] $sameAsPrimaryBookRevRec
     * @return ItemSearchRowBasic
     */
    public function setSameAsPrimaryBookRevRec(SearchColumnBooleanField $sameAsPrimaryBookRevRec): ItemSearchRowBasic
    {
        $this->sameAsPrimaryBookRevRec[] = $sameAsPrimaryBookRevRec;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getSameAsPrimaryBookRevRec(): array
    {
        return $this->sameAsPrimaryBookRevRec;
    }

    /**
     * @param SearchColumnEnumSelectField[] $scheduleBCode
     * @return ItemSearchRowBasic
     */
    public function setScheduleBCode(SearchColumnEnumSelectField $scheduleBCode): ItemSearchRowBasic
    {
        $this->scheduleBCode[] = $scheduleBCode;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getScheduleBCode(): array
    {
        return $this->scheduleBCode;
    }

    /**
     * @param SearchColumnStringField[] $scheduleBNumber
     * @return ItemSearchRowBasic
     */
    public function setScheduleBNumber(SearchColumnStringField $scheduleBNumber): ItemSearchRowBasic
    {
        $this->scheduleBNumber[] = $scheduleBNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getScheduleBNumber(): array
    {
        return $this->scheduleBNumber;
    }

    /**
     * @param SearchColumnStringField[] $scheduleBQuantity
     * @return ItemSearchRowBasic
     */
    public function setScheduleBQuantity(SearchColumnStringField $scheduleBQuantity): ItemSearchRowBasic
    {
        $this->scheduleBQuantity[] = $scheduleBQuantity;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getScheduleBQuantity(): array
    {
        return $this->scheduleBQuantity;
    }

    /**
     * @param SearchColumnSelectField[] $scrapAcct
     * @return ItemSearchRowBasic
     */
    public function setScrapAcct(SearchColumnSelectField $scrapAcct): ItemSearchRowBasic
    {
        $this->scrapAcct[] = $scrapAcct;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getScrapAcct(): array
    {
        return $this->scrapAcct;
    }

    /**
     * @param SearchColumnStringField[] $searchKeywords
     * @return ItemSearchRowBasic
     */
    public function setSearchKeywords(SearchColumnStringField $searchKeywords): ItemSearchRowBasic
    {
        $this->searchKeywords[] = $searchKeywords;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSearchKeywords(): array
    {
        return $this->searchKeywords;
    }

    /**
     * @param SearchColumnBooleanField[] $seasonalDemand
     * @return ItemSearchRowBasic
     */
    public function setSeasonalDemand(SearchColumnBooleanField $seasonalDemand): ItemSearchRowBasic
    {
        $this->seasonalDemand[] = $seasonalDemand;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getSeasonalDemand(): array
    {
        return $this->seasonalDemand;
    }

    /**
     * @param SearchColumnSelectField[] $secondaryConsumptionUnit
     * @return ItemSearchRowBasic
     */
    public function setSecondaryConsumptionUnit(SearchColumnSelectField $secondaryConsumptionUnit): ItemSearchRowBasic
    {
        $this->secondaryConsumptionUnit[] = $secondaryConsumptionUnit;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSecondaryConsumptionUnit(): array
    {
        return $this->secondaryConsumptionUnit;
    }

    /**
     * @param SearchColumnSelectField[] $secondaryPurchaseUnit
     * @return ItemSearchRowBasic
     */
    public function setSecondaryPurchaseUnit(SearchColumnSelectField $secondaryPurchaseUnit): ItemSearchRowBasic
    {
        $this->secondaryPurchaseUnit[] = $secondaryPurchaseUnit;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSecondaryPurchaseUnit(): array
    {
        return $this->secondaryPurchaseUnit;
    }

    /**
     * @param SearchColumnSelectField[] $secondarySaleUnit
     * @return ItemSearchRowBasic
     */
    public function setSecondarySaleUnit(SearchColumnSelectField $secondarySaleUnit): ItemSearchRowBasic
    {
        $this->secondarySaleUnit[] = $secondarySaleUnit;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSecondarySaleUnit(): array
    {
        return $this->secondarySaleUnit;
    }

    /**
     * @param SearchColumnSelectField[] $secondaryStockUnit
     * @return ItemSearchRowBasic
     */
    public function setSecondaryStockUnit(SearchColumnSelectField $secondaryStockUnit): ItemSearchRowBasic
    {
        $this->secondaryStockUnit[] = $secondaryStockUnit;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSecondaryStockUnit(): array
    {
        return $this->secondaryStockUnit;
    }

    /**
     * @param SearchColumnSelectField[] $secondaryUnitsType
     * @return ItemSearchRowBasic
     */
    public function setSecondaryUnitsType(SearchColumnSelectField $secondaryUnitsType): ItemSearchRowBasic
    {
        $this->secondaryUnitsType[] = $secondaryUnitsType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSecondaryUnitsType(): array
    {
        return $this->secondaryUnitsType;
    }

    /**
     * @param SearchColumnBooleanField[] $sellOnEBay
     * @return ItemSearchRowBasic
     */
    public function setSellOnEBay(SearchColumnBooleanField $sellOnEBay): ItemSearchRowBasic
    {
        $this->sellOnEBay[] = $sellOnEBay;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getSellOnEBay(): array
    {
        return $this->sellOnEBay;
    }

    /**
     * @param SearchColumnStringField[] $serialNumber
     * @return ItemSearchRowBasic
     */
    public function setSerialNumber(SearchColumnStringField $serialNumber): ItemSearchRowBasic
    {
        $this->serialNumber[] = $serialNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSerialNumber(): array
    {
        return $this->serialNumber;
    }

    /**
     * @param SearchColumnStringField[] $serialNumberLocation
     * @return ItemSearchRowBasic
     */
    public function setSerialNumberLocation(SearchColumnStringField $serialNumberLocation): ItemSearchRowBasic
    {
        $this->serialNumberLocation[] = $serialNumberLocation;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSerialNumberLocation(): array
    {
        return $this->serialNumberLocation;
    }

    /**
     * @param SearchColumnBooleanField[] $shipIndividually
     * @return ItemSearchRowBasic
     */
    public function setShipIndividually(SearchColumnBooleanField $shipIndividually): ItemSearchRowBasic
    {
        $this->shipIndividually[] = $shipIndividually;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getShipIndividually(): array
    {
        return $this->shipIndividually;
    }

    /**
     * @param SearchColumnSelectField[] $shipPackage
     * @return ItemSearchRowBasic
     */
    public function setShipPackage(SearchColumnSelectField $shipPackage): ItemSearchRowBasic
    {
        $this->shipPackage[] = $shipPackage;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getShipPackage(): array
    {
        return $this->shipPackage;
    }

    /**
     * @param SearchColumnEnumSelectField[] $shippingCarrier
     * @return ItemSearchRowBasic
     */
    public function setShippingCarrier(SearchColumnEnumSelectField $shippingCarrier): ItemSearchRowBasic
    {
        $this->shippingCarrier[] = $shippingCarrier;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getShippingCarrier(): array
    {
        return $this->shippingCarrier;
    }

    /**
     * @param SearchColumnDoubleField[] $shippingRate
     * @return ItemSearchRowBasic
     */
    public function setShippingRate(SearchColumnDoubleField $shippingRate): ItemSearchRowBasic
    {
        $this->shippingRate[] = $shippingRate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getShippingRate(): array
    {
        return $this->shippingRate;
    }

    /**
     * @param SearchColumnStringField[] $shoppingDotComCategory
     * @return ItemSearchRowBasic
     */
    public function setShoppingDotComCategory(SearchColumnStringField $shoppingDotComCategory): ItemSearchRowBasic
    {
        $this->shoppingDotComCategory[] = $shoppingDotComCategory;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShoppingDotComCategory(): array
    {
        return $this->shoppingDotComCategory;
    }

    /**
     * @param SearchColumnBooleanField[] $shoppingProductFeed
     * @return ItemSearchRowBasic
     */
    public function setShoppingProductFeed(SearchColumnBooleanField $shoppingProductFeed): ItemSearchRowBasic
    {
        $this->shoppingProductFeed[] = $shoppingProductFeed;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getShoppingProductFeed(): array
    {
        return $this->shoppingProductFeed;
    }

    /**
     * @param SearchColumnLongField[] $shopzillaCategoryId
     * @return ItemSearchRowBasic
     */
    public function setShopzillaCategoryId(SearchColumnLongField $shopzillaCategoryId): ItemSearchRowBasic
    {
        $this->shopzillaCategoryId[] = $shopzillaCategoryId;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getShopzillaCategoryId(): array
    {
        return $this->shopzillaCategoryId;
    }

    /**
     * @param SearchColumnBooleanField[] $shopzillaProductFeed
     * @return ItemSearchRowBasic
     */
    public function setShopzillaProductFeed(SearchColumnBooleanField $shopzillaProductFeed): ItemSearchRowBasic
    {
        $this->shopzillaProductFeed[] = $shopzillaProductFeed;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getShopzillaProductFeed(): array
    {
        return $this->shopzillaProductFeed;
    }

    /**
     * @param SearchColumnEnumSelectField[] $sitemapPriority
     * @return ItemSearchRowBasic
     */
    public function setSitemapPriority(SearchColumnEnumSelectField $sitemapPriority): ItemSearchRowBasic
    {
        $this->sitemapPriority[] = $sitemapPriority;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getSitemapPriority(): array
    {
        return $this->sitemapPriority;
    }

    /**
     * @param SearchColumnSelectField[] $softDescriptor
     * @return ItemSearchRowBasic
     */
    public function setSoftDescriptor(SearchColumnSelectField $softDescriptor): ItemSearchRowBasic
    {
        $this->softDescriptor[] = $softDescriptor;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSoftDescriptor(): array
    {
        return $this->softDescriptor;
    }

    /**
     * @param SearchColumnDoubleField[] $startingPrice
     * @return ItemSearchRowBasic
     */
    public function setStartingPrice(SearchColumnDoubleField $startingPrice): ItemSearchRowBasic
    {
        $this->startingPrice[] = $startingPrice;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getStartingPrice(): array
    {
        return $this->startingPrice;
    }

    /**
     * @param SearchColumnStringField[] $stockDescription
     * @return ItemSearchRowBasic
     */
    public function setStockDescription(SearchColumnStringField $stockDescription): ItemSearchRowBasic
    {
        $this->stockDescription[] = $stockDescription;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStockDescription(): array
    {
        return $this->stockDescription;
    }

    /**
     * @param SearchColumnSelectField[] $stockUnit
     * @return ItemSearchRowBasic
     */
    public function setStockUnit(SearchColumnSelectField $stockUnit): ItemSearchRowBasic
    {
        $this->stockUnit[] = $stockUnit;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getStockUnit(): array
    {
        return $this->stockUnit;
    }

    /**
     * @param SearchColumnStringField[] $storeDescription
     * @return ItemSearchRowBasic
     */
    public function setStoreDescription(SearchColumnStringField $storeDescription): ItemSearchRowBasic
    {
        $this->storeDescription[] = $storeDescription;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStoreDescription(): array
    {
        return $this->storeDescription;
    }

    /**
     * @param SearchColumnStringField[] $storeDetailedDescription
     * @return ItemSearchRowBasic
     */
    public function setStoreDetailedDescription(SearchColumnStringField $storeDetailedDescription): ItemSearchRowBasic
    {
        $this->storeDetailedDescription[] = $storeDetailedDescription;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStoreDetailedDescription(): array
    {
        return $this->storeDetailedDescription;
    }

    /**
     * @param SearchColumnSelectField[] $storeDisplayImage
     * @return ItemSearchRowBasic
     */
    public function setStoreDisplayImage(SearchColumnSelectField $storeDisplayImage): ItemSearchRowBasic
    {
        $this->storeDisplayImage[] = $storeDisplayImage;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getStoreDisplayImage(): array
    {
        return $this->storeDisplayImage;
    }

    /**
     * @param SearchColumnStringField[] $storeDisplayName
     * @return ItemSearchRowBasic
     */
    public function setStoreDisplayName(SearchColumnStringField $storeDisplayName): ItemSearchRowBasic
    {
        $this->storeDisplayName[] = $storeDisplayName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStoreDisplayName(): array
    {
        return $this->storeDisplayName;
    }

    /**
     * @param SearchColumnSelectField[] $storeDisplayThumbnail
     * @return ItemSearchRowBasic
     */
    public function setStoreDisplayThumbnail(SearchColumnSelectField $storeDisplayThumbnail): ItemSearchRowBasic
    {
        $this->storeDisplayThumbnail[] = $storeDisplayThumbnail;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getStoreDisplayThumbnail(): array
    {
        return $this->storeDisplayThumbnail;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return ItemSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): ItemSearchRowBasic
    {
        $this->subsidiary[] = $subsidiary;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary(): array
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchColumnEnumSelectField[] $subType
     * @return ItemSearchRowBasic
     */
    public function setSubType(SearchColumnEnumSelectField $subType): ItemSearchRowBasic
    {
        $this->subType[] = $subType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getSubType(): array
    {
        return $this->subType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $supplyLotSizingMethod
     * @return ItemSearchRowBasic
     */
    public function setSupplyLotSizingMethod(SearchColumnEnumSelectField $supplyLotSizingMethod): ItemSearchRowBasic
    {
        $this->supplyLotSizingMethod[] = $supplyLotSizingMethod;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getSupplyLotSizingMethod(): array
    {
        return $this->supplyLotSizingMethod;
    }

    /**
     * @param SearchColumnEnumSelectField[] $supplyReplenishmentMethod
     * @return ItemSearchRowBasic
     */
    public function setSupplyReplenishmentMethod(SearchColumnEnumSelectField $supplyReplenishmentMethod): ItemSearchRowBasic
    {
        $this->supplyReplenishmentMethod[] = $supplyReplenishmentMethod;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getSupplyReplenishmentMethod(): array
    {
        return $this->supplyReplenishmentMethod;
    }

    /**
     * @param SearchColumnLongField[] $supplyTimeFence
     * @return ItemSearchRowBasic
     */
    public function setSupplyTimeFence(SearchColumnLongField $supplyTimeFence): ItemSearchRowBasic
    {
        $this->supplyTimeFence[] = $supplyTimeFence;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getSupplyTimeFence(): array
    {
        return $this->supplyTimeFence;
    }

    /**
     * @param SearchColumnEnumSelectField[] $supplyType
     * @return ItemSearchRowBasic
     */
    public function setSupplyType(SearchColumnEnumSelectField $supplyType): ItemSearchRowBasic
    {
        $this->supplyType[] = $supplyType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getSupplyType(): array
    {
        return $this->supplyType;
    }

    /**
     * @param SearchColumnSelectField[] $taxSchedule
     * @return ItemSearchRowBasic
     */
    public function setTaxSchedule(SearchColumnSelectField $taxSchedule): ItemSearchRowBasic
    {
        $this->taxSchedule[] = $taxSchedule;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxSchedule(): array
    {
        return $this->taxSchedule;
    }

    /**
     * @param SearchColumnStringField[] $thumbNailUrl
     * @return ItemSearchRowBasic
     */
    public function setThumbNailUrl(SearchColumnStringField $thumbNailUrl): ItemSearchRowBasic
    {
        $this->thumbNailUrl[] = $thumbNailUrl;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getThumbNailUrl(): array
    {
        return $this->thumbNailUrl;
    }

    /**
     * @param SearchColumnDoubleField[] $totalValue
     * @return ItemSearchRowBasic
     */
    public function setTotalValue(SearchColumnDoubleField $totalValue): ItemSearchRowBasic
    {
        $this->totalValue[] = $totalValue;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTotalValue(): array
    {
        return $this->totalValue;
    }

    /**
     * @param SearchColumnBooleanField[] $trackLandedCost
     * @return ItemSearchRowBasic
     */
    public function setTrackLandedCost(SearchColumnBooleanField $trackLandedCost): ItemSearchRowBasic
    {
        $this->trackLandedCost[] = $trackLandedCost;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getTrackLandedCost(): array
    {
        return $this->trackLandedCost;
    }

    /**
     * @param SearchColumnDoubleField[] $transferPrice
     * @return ItemSearchRowBasic
     */
    public function setTransferPrice(SearchColumnDoubleField $transferPrice): ItemSearchRowBasic
    {
        $this->transferPrice[] = $transferPrice;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTransferPrice(): array
    {
        return $this->transferPrice;
    }

    /**
     * @param SearchColumnEnumSelectField[] $type
     * @return ItemSearchRowBasic
     */
    public function setType(SearchColumnEnumSelectField $type): ItemSearchRowBasic
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getType(): array
    {
        return $this->type;
    }

    /**
     * @param SearchColumnSelectField[] $unbuildVarianceAccount
     * @return ItemSearchRowBasic
     */
    public function setUnbuildVarianceAccount(SearchColumnSelectField $unbuildVarianceAccount): ItemSearchRowBasic
    {
        $this->unbuildVarianceAccount[] = $unbuildVarianceAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getUnbuildVarianceAccount(): array
    {
        return $this->unbuildVarianceAccount;
    }

    /**
     * @param SearchColumnSelectField[] $unitsType
     * @return ItemSearchRowBasic
     */
    public function setUnitsType(SearchColumnSelectField $unitsType): ItemSearchRowBasic
    {
        $this->unitsType[] = $unitsType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getUnitsType(): array
    {
        return $this->unitsType;
    }

    /**
     * @param SearchColumnStringField[] $upcCode
     * @return ItemSearchRowBasic
     */
    public function setUpcCode(SearchColumnStringField $upcCode): ItemSearchRowBasic
    {
        $this->upcCode[] = $upcCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getUpcCode(): array
    {
        return $this->upcCode;
    }

    /**
     * @param SearchColumnDoubleField[] $upperWarningLimit
     * @return ItemSearchRowBasic
     */
    public function setUpperWarningLimit(SearchColumnDoubleField $upperWarningLimit): ItemSearchRowBasic
    {
        $this->upperWarningLimit[] = $upperWarningLimit;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUpperWarningLimit(): array
    {
        return $this->upperWarningLimit;
    }

    /**
     * @param SearchColumnStringField[] $urlComponent
     * @return ItemSearchRowBasic
     */
    public function setUrlComponent(SearchColumnStringField $urlComponent): ItemSearchRowBasic
    {
        $this->urlComponent[] = $urlComponent;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getUrlComponent(): array
    {
        return $this->urlComponent;
    }

    /**
     * @param SearchColumnBooleanField[] $useBins
     * @return ItemSearchRowBasic
     */
    public function setUseBins(SearchColumnBooleanField $useBins): ItemSearchRowBasic
    {
        $this->useBins[] = $useBins;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUseBins(): array
    {
        return $this->useBins;
    }

    /**
     * @param SearchColumnBooleanField[] $useComponentYield
     * @return ItemSearchRowBasic
     */
    public function setUseComponentYield(SearchColumnBooleanField $useComponentYield): ItemSearchRowBasic
    {
        $this->useComponentYield[] = $useComponentYield;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUseComponentYield(): array
    {
        return $this->useComponentYield;
    }

    /**
     * @param SearchColumnBooleanField[] $useMarginalRates
     * @return ItemSearchRowBasic
     */
    public function setUseMarginalRates(SearchColumnBooleanField $useMarginalRates): ItemSearchRowBasic
    {
        $this->useMarginalRates[] = $useMarginalRates;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUseMarginalRates(): array
    {
        return $this->useMarginalRates;
    }

    /**
     * @param SearchColumnSelectField[] $vendor
     * @return ItemSearchRowBasic
     */
    public function setVendor(SearchColumnSelectField $vendor): ItemSearchRowBasic
    {
        $this->vendor[] = $vendor;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVendor(): array
    {
        return $this->vendor;
    }

    /**
     * @param SearchColumnStringField[] $vendorCode
     * @return ItemSearchRowBasic
     */
    public function setVendorCode(SearchColumnStringField $vendorCode): ItemSearchRowBasic
    {
        $this->vendorCode[] = $vendorCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getVendorCode(): array
    {
        return $this->vendorCode;
    }

    /**
     * @param SearchColumnDoubleField[] $vendorCost
     * @return ItemSearchRowBasic
     */
    public function setVendorCost(SearchColumnDoubleField $vendorCost): ItemSearchRowBasic
    {
        $this->vendorCost[] = $vendorCost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getVendorCost(): array
    {
        return $this->vendorCost;
    }

    /**
     * @param SearchColumnDoubleField[] $vendorCostEntered
     * @return ItemSearchRowBasic
     */
    public function setVendorCostEntered(SearchColumnDoubleField $vendorCostEntered): ItemSearchRowBasic
    {
        $this->vendorCostEntered[] = $vendorCostEntered;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getVendorCostEntered(): array
    {
        return $this->vendorCostEntered;
    }

    /**
     * @param SearchColumnStringField[] $vendorName
     * @return ItemSearchRowBasic
     */
    public function setVendorName(SearchColumnStringField $vendorName): ItemSearchRowBasic
    {
        $this->vendorName[] = $vendorName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getVendorName(): array
    {
        return $this->vendorName;
    }

    /**
     * @param SearchColumnStringField[] $vendorPriceCurrency
     * @return ItemSearchRowBasic
     */
    public function setVendorPriceCurrency(SearchColumnStringField $vendorPriceCurrency): ItemSearchRowBasic
    {
        $this->vendorPriceCurrency[] = $vendorPriceCurrency;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getVendorPriceCurrency(): array
    {
        return $this->vendorPriceCurrency;
    }

    /**
     * @param SearchColumnSelectField[] $vendorSchedule
     * @return ItemSearchRowBasic
     */
    public function setVendorSchedule(SearchColumnSelectField $vendorSchedule): ItemSearchRowBasic
    {
        $this->vendorSchedule[] = $vendorSchedule;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVendorSchedule(): array
    {
        return $this->vendorSchedule;
    }

    /**
     * @param SearchColumnSelectField[] $vendReturnVarianceAccount
     * @return ItemSearchRowBasic
     */
    public function setVendReturnVarianceAccount(SearchColumnSelectField $vendReturnVarianceAccount): ItemSearchRowBasic
    {
        $this->vendReturnVarianceAccount[] = $vendReturnVarianceAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVendReturnVarianceAccount(): array
    {
        return $this->vendReturnVarianceAccount;
    }

    /**
     * @param SearchColumnEnumSelectField[] $vsoeDeferral
     * @return ItemSearchRowBasic
     */
    public function setVsoeDeferral(SearchColumnEnumSelectField $vsoeDeferral): ItemSearchRowBasic
    {
        $this->vsoeDeferral[] = $vsoeDeferral;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getVsoeDeferral(): array
    {
        return $this->vsoeDeferral;
    }

    /**
     * @param SearchColumnBooleanField[] $vsoeDelivered
     * @return ItemSearchRowBasic
     */
    public function setVsoeDelivered(SearchColumnBooleanField $vsoeDelivered): ItemSearchRowBasic
    {
        $this->vsoeDelivered[] = $vsoeDelivered;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getVsoeDelivered(): array
    {
        return $this->vsoeDelivered;
    }

    /**
     * @param SearchColumnEnumSelectField[] $vsoePermitDiscount
     * @return ItemSearchRowBasic
     */
    public function setVsoePermitDiscount(SearchColumnEnumSelectField $vsoePermitDiscount): ItemSearchRowBasic
    {
        $this->vsoePermitDiscount[] = $vsoePermitDiscount;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getVsoePermitDiscount(): array
    {
        return $this->vsoePermitDiscount;
    }

    /**
     * @param SearchColumnDoubleField[] $vsoePrice
     * @return ItemSearchRowBasic
     */
    public function setVsoePrice(SearchColumnDoubleField $vsoePrice): ItemSearchRowBasic
    {
        $this->vsoePrice[] = $vsoePrice;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getVsoePrice(): array
    {
        return $this->vsoePrice;
    }

    /**
     * @param SearchColumnEnumSelectField[] $vsoeSopGroup
     * @return ItemSearchRowBasic
     */
    public function setVsoeSopGroup(SearchColumnEnumSelectField $vsoeSopGroup): ItemSearchRowBasic
    {
        $this->vsoeSopGroup[] = $vsoeSopGroup;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getVsoeSopGroup(): array
    {
        return $this->vsoeSopGroup;
    }

    /**
     * @param SearchColumnSelectField[] $webSite
     * @return ItemSearchRowBasic
     */
    public function setWebSite(SearchColumnSelectField $webSite): ItemSearchRowBasic
    {
        $this->webSite[] = $webSite;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getWebSite(): array
    {
        return $this->webSite;
    }

    /**
     * @param SearchColumnDoubleField[] $weight
     * @return ItemSearchRowBasic
     */
    public function setWeight(SearchColumnDoubleField $weight): ItemSearchRowBasic
    {
        $this->weight[] = $weight;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getWeight(): array
    {
        return $this->weight;
    }

    /**
     * @param SearchColumnEnumSelectField[] $weightUnit
     * @return ItemSearchRowBasic
     */
    public function setWeightUnit(SearchColumnEnumSelectField $weightUnit): ItemSearchRowBasic
    {
        $this->weightUnit[] = $weightUnit;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getWeightUnit(): array
    {
        return $this->weightUnit;
    }

    /**
     * @param SearchColumnSelectField[] $wipAcct
     * @return ItemSearchRowBasic
     */
    public function setWipAcct(SearchColumnSelectField $wipAcct): ItemSearchRowBasic
    {
        $this->wipAcct[] = $wipAcct;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getWipAcct(): array
    {
        return $this->wipAcct;
    }

    /**
     * @param SearchColumnSelectField[] $wipVarianceAcct
     * @return ItemSearchRowBasic
     */
    public function setWipVarianceAcct(SearchColumnSelectField $wipVarianceAcct): ItemSearchRowBasic
    {
        $this->wipVarianceAcct[] = $wipVarianceAcct;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getWipVarianceAcct(): array
    {
        return $this->wipVarianceAcct;
    }

    /**
     * @param SearchColumnBooleanField[] $yahooProductFeed
     * @return ItemSearchRowBasic
     */
    public function setYahooProductFeed(SearchColumnBooleanField $yahooProductFeed): ItemSearchRowBasic
    {
        $this->yahooProductFeed[] = $yahooProductFeed;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getYahooProductFeed(): array
    {
        return $this->yahooProductFeed;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return ItemSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): ItemSearchRowBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList(): SearchColumnCustomFieldList
    {
        return $this->customFieldList;
    }

}
