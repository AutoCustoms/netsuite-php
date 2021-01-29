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

class ItemSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $accBookRevRecForecastRule;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $account;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $accountingBook;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $accountingBookAmortization;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $accountingBookCreatePlansOn;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $accountingBookRevRecRule;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $accountingBookRevRecSchedule;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $allowedShippingMethod;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $alternateDemandSourceItem;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $atpLeadTime;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $atpMethod;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $autoLeadTime;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $autoPreferredStockLevel;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $autoReorderPoint;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $availableToPartners;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $averageCost;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $backwardConsumptionDays;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $binNumber;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $binOnHandAvail;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $binOnHandCount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $bomQuantity;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $buildEntireAssembly;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $buildTime;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $buyItNowPrice;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $caption;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $category;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $class;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $component;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $componentOf;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $componentYield;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $consumptionUnit;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $contingentRevenueHandling;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $conversionRate;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $copyDescription;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $correlatedItem;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $correlatedItemCorrelation;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $correlatedItemCount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $correlatedItemLift;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $correlatedItemPurchaseRate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $cost;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $costAccountingStatus;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $costCategory;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $costEstimate;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $costEstimateType;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $costingMethod;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $countryOfManufacture;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $created;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $createJob;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $createRevenuePlansOn;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $dateViewed;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $daysBeforeExpiration;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $defaultReturnCost;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $defaultShippingMethod;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $deferRevRec;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $demandModifier;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $demandSource;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $demandTimeFence;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $department;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $directRevenuePosting;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $displayIneBayStore;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $displayName;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $distributionCategory;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $distributionNetwork;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $dontShowPrice;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $eBayItemDescription;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $eBayItemSubtitle;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $eBayItemTitle;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $ebayRelistingOption;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $effectiveBomControl;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $effectiveDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $effectiveRevision;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $enableCatchWeight;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $endAuctionsWhenOutOfStock;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $excludeFromSitemap;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $featuredDescription;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $feedDescription;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $feedName;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fixedLotSize;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $forwardConsumptionDays;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $fraudRisk;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $froogleProductFeed;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $futureHorizon;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fxCost;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $generateAccruals;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $giftCertAuthCode;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $giftCertEmail;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $giftCertExpDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $giftCertFrom;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $giftCertMsg;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $giftCertOrigAmt;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $giftCertRecipient;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $hierarchyNode;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $hierarchyVersion;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $imageUrl;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $includeChildren;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $inventoryLocation;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $invtClassification;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $invtCountInterval;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isAvailable;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isDropShipItem;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isFulfillable;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isGcoCompliant;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isLotItem;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isOnline;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isPreferredVendor;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isSerialItem;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isSpecialOrderItem;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isSpecialWorkOrderItem;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isStorePickupAllowed;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $issueProduct;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isTaxable;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isVsoeBundle;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isWip;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $itemId;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $itemRevenueCategory;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $itemUrl;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastInvtCountDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastModifiedDate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $lastPurchasePrice;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastQuantityAvailableChange;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $leadTime;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $listingDuration;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $location;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $locationAllowStorePickup;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $locationAtpLeadTime;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $locationAverageCost;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $locationBuildTime;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $locationCost;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $locationCostAccountingStatus;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $locationDefaultReturnCost;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $locationDemandSource;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $locationDemandTimeFence;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $locationFixedLotSize;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $locationInventoryCostTemplate;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $locationInvtClassification;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $locationInvtCountInterval;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $locationLastInvtCountDate;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $locationLeadTime;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $locationNextInvtCountDate;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $locationPeriodicLotSizeDays;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $locationPeriodicLotSizeType;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $locationPreferredStockLevel;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $locationQtyAvailForStorePickup;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $locationQuantityAvailable;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $locationQuantityBackOrdered;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $locationQuantityCommitted;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $locationQuantityInTransit;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $locationQuantityOnHand;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $locationQuantityOnOrder;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $locationReorderPoint;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $locationRescheduleInDays;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $locationRescheduleOutDays;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $locationSafetyStockLevel;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $locationStorePickupBufferStock;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $locationSupplyLotSizingMethod;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $locationSupplyTimeFence;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $locationSupplyType;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $locationTotalValue;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $locBackwardConsumptionDays;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $locForwardConsumptionDays;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $lowerWarningLimit;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $manufacturer;

    protected $manufactureraddr1;
    /**
     * @var SearchStringField
     */
    protected SearchStringField $manufacturerCity;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $manufacturerState;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $manufacturerTariff;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $manufacturerTaxId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $manufacturerZip;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $manufacturingChargeItem;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $matchBillToReceipt;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $matrix;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $matrixChild;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $maximumQuantity;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $metaTagHtml;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $minimumQuantity;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $mossApplies;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $mpn;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $multManufactureAddr;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $nexTagCategory;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $nexTagProductFeed;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $nextInvtCountDate;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $numActiveListings;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $numberAllowedDownloads;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $numCurrentlyListed;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $obsoleteDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $obsoleteRevision;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $offerSupport;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $onlineCustomerPrice;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $onSpecial;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $otherVendor;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $outOfStockBehavior;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $overallQuantityPricingType;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $overheadType;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $pageTitle;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $parent;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $periodicLotSizeDays;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $periodicLotSizeType;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $preferenceCriterion;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $preferredBin;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $preferredLocation;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $preferredStockLevel;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $preferredStockLevelDays;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $price;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $pricesIncludeTax;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $pricingGroup;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $primaryCategory;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $purchaseOrderAmount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $purchaseOrderQuantity;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $purchaseOrderQuantityDiff;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $purchaseUnit;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityAvailable;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityBackOrdered;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityCommitted;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityOnHand;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityOnOrder;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $quantityPricingSchedule;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $receiptAmount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $receiptQuantity;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $receiptQuantityDiff;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $reorderMultiple;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $reorderPoint;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $rescheduleInDays;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $rescheduleOutDays;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $reservePrice;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $revenueAllocationGroup;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $revenueRecognitionRule;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $revRecForecastRule;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $revRecSchedule;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $roundUpAsComponent;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $safetyStockLevel;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $safetyStockLevelDays;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $salesDescription;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $saleUnit;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $sameAsPrimaryBookAmortization;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $sameAsPrimaryBookRevRec;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $scheduleBCode;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $scheduleBNumber;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $scheduleBQuantity;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $searchKeywords;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $seasonalDemand;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $secondaryConsumptionUnit;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $secondaryPurchaseUnit;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $secondarySaleUnit;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $secondaryStockUnit;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $secondaryUnitsType;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $sellOnEBay;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $serialNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $serialNumberLocation;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $shipIndividually;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $shipPackage;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $shippingCarrier;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $shippingRate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $shoppingDotComCategory;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $shoppingProductFeed;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $shopzillaCategoryId;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $shopzillaProductFeed;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $sitemapPriority;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $softDescriptor;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $startingPrice;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $stockDescription;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $stockUnit;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $storeDescription;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $subType;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $supplyLotSizingMethod;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $supplyReplenishmentMethod;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $supplyTimeFence;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $supplyType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $taxCode;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $taxSchedule;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $thumbnailUrl;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $totalValue;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $trackLandedCost;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $transferPrice;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $type;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $unitsType;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $upcCode;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $upperWarningLimit;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $urlComponent;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $useBins;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $useComponentYield;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $useMarginalRates;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $vendor;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $vendorCode;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $vendorCost;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $vendorCostEntered;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $vendorName;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $vendorPriceCurrency;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $vsoeDeferral;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $vsoeDelivered;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $vsoePermitDiscount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $vsoePrice;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $vsoeSopGroup;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $webSite;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $weight;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $yahooProductFeed;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "accBookRevRecForecastRule" => "SearchMultiSelectField",
        "account" => "SearchMultiSelectField",
        "accountingBook" => "SearchMultiSelectField",
        "accountingBookAmortization" => "SearchMultiSelectField",
        "accountingBookCreatePlansOn" => "SearchMultiSelectField",
        "accountingBookRevRecRule" => "SearchMultiSelectField",
        "accountingBookRevRecSchedule" => "SearchMultiSelectField",
        "allowedShippingMethod" => "SearchMultiSelectField",
        "alternateDemandSourceItem" => "SearchMultiSelectField",
        "atpLeadTime" => "SearchDoubleField",
        "atpMethod" => "SearchEnumMultiSelectField",
        "autoLeadTime" => "SearchBooleanField",
        "autoPreferredStockLevel" => "SearchBooleanField",
        "autoReorderPoint" => "SearchBooleanField",
        "availableToPartners" => "SearchBooleanField",
        "averageCost" => "SearchDoubleField",
        "backwardConsumptionDays" => "SearchLongField",
        "binNumber" => "SearchStringField",
        "binOnHandAvail" => "SearchDoubleField",
        "binOnHandCount" => "SearchDoubleField",
        "bomQuantity" => "SearchDoubleField",
        "buildEntireAssembly" => "SearchBooleanField",
        "buildTime" => "SearchDoubleField",
        "buyItNowPrice" => "SearchDoubleField",
        "caption" => "SearchStringField",
        "category" => "SearchMultiSelectField",
        "class" => "SearchMultiSelectField",
        "component" => "SearchMultiSelectField",
        "componentOf" => "SearchMultiSelectField",
        "componentYield" => "SearchDoubleField",
        "consumptionUnit" => "SearchMultiSelectField",
        "contingentRevenueHandling" => "SearchBooleanField",
        "conversionRate" => "SearchDoubleField",
        "copyDescription" => "SearchBooleanField",
        "correlatedItem" => "SearchMultiSelectField",
        "correlatedItemCorrelation" => "SearchDoubleField",
        "correlatedItemCount" => "SearchLongField",
        "correlatedItemLift" => "SearchDoubleField",
        "correlatedItemPurchaseRate" => "SearchDoubleField",
        "cost" => "SearchDoubleField",
        "costAccountingStatus" => "SearchEnumMultiSelectField",
        "costCategory" => "SearchMultiSelectField",
        "costEstimate" => "SearchDoubleField",
        "costEstimateType" => "SearchEnumMultiSelectField",
        "costingMethod" => "SearchEnumMultiSelectField",
        "countryOfManufacture" => "SearchEnumMultiSelectField",
        "created" => "SearchDateField",
        "createJob" => "SearchBooleanField",
        "createRevenuePlansOn" => "SearchMultiSelectField",
        "dateViewed" => "SearchDateField",
        "daysBeforeExpiration" => "SearchDoubleField",
        "defaultReturnCost" => "SearchDoubleField",
        "defaultShippingMethod" => "SearchMultiSelectField",
        "deferRevRec" => "SearchBooleanField",
        "demandModifier" => "SearchDoubleField",
        "demandSource" => "SearchEnumMultiSelectField",
        "demandTimeFence" => "SearchLongField",
        "department" => "SearchMultiSelectField",
        "directRevenuePosting" => "SearchBooleanField",
        "displayIneBayStore" => "SearchBooleanField",
        "displayName" => "SearchStringField",
        "distributionCategory" => "SearchMultiSelectField",
        "distributionNetwork" => "SearchMultiSelectField",
        "dontShowPrice" => "SearchBooleanField",
        "eBayItemDescription" => "SearchStringField",
        "eBayItemSubtitle" => "SearchStringField",
        "eBayItemTitle" => "SearchStringField",
        "ebayRelistingOption" => "SearchEnumMultiSelectField",
        "effectiveBomControl" => "SearchEnumMultiSelectField",
        "effectiveDate" => "SearchDateField",
        "effectiveRevision" => "SearchMultiSelectField",
        "enableCatchWeight" => "SearchBooleanField",
        "endAuctionsWhenOutOfStock" => "SearchBooleanField",
        "excludeFromSitemap" => "SearchBooleanField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "featuredDescription" => "SearchStringField",
        "feedDescription" => "SearchStringField",
        "feedName" => "SearchStringField",
        "fixedLotSize" => "SearchDoubleField",
        "forwardConsumptionDays" => "SearchLongField",
        "fraudRisk" => "SearchEnumMultiSelectField",
        "froogleProductFeed" => "SearchBooleanField",
        "futureHorizon" => "SearchLongField",
        "fxCost" => "SearchDoubleField",
        "generateAccruals" => "SearchBooleanField",
        "giftCertAuthCode" => "SearchStringField",
        "giftCertEmail" => "SearchStringField",
        "giftCertExpDate" => "SearchDateField",
        "giftCertFrom" => "SearchStringField",
        "giftCertMsg" => "SearchStringField",
        "giftCertOrigAmt" => "SearchStringField",
        "giftCertRecipient" => "SearchStringField",
        "hierarchyNode" => "SearchMultiSelectField",
        "hierarchyVersion" => "SearchMultiSelectField",
        "imageUrl" => "SearchStringField",
        "includeChildren" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "inventoryLocation" => "SearchMultiSelectField",
        "invtClassification" => "SearchEnumMultiSelectField",
        "invtCountInterval" => "SearchLongField",
        "isAvailable" => "SearchBooleanField",
        "isDropShipItem" => "SearchBooleanField",
        "isFulfillable" => "SearchBooleanField",
        "isGcoCompliant" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "isLotItem" => "SearchBooleanField",
        "isOnline" => "SearchBooleanField",
        "isPreferredVendor" => "SearchBooleanField",
        "isSerialItem" => "SearchBooleanField",
        "isSpecialOrderItem" => "SearchBooleanField",
        "isSpecialWorkOrderItem" => "SearchBooleanField",
        "isStorePickupAllowed" => "SearchBooleanField",
        "issueProduct" => "SearchMultiSelectField",
        "isTaxable" => "SearchBooleanField",
        "isVsoeBundle" => "SearchBooleanField",
        "isWip" => "SearchBooleanField",
        "itemId" => "SearchStringField",
        "itemRevenueCategory" => "SearchMultiSelectField",
        "itemUrl" => "SearchStringField",
        "lastInvtCountDate" => "SearchDateField",
        "lastModifiedDate" => "SearchDateField",
        "lastPurchasePrice" => "SearchDoubleField",
        "lastQuantityAvailableChange" => "SearchDateField",
        "leadTime" => "SearchLongField",
        "listingDuration" => "SearchEnumMultiSelectField",
        "location" => "SearchMultiSelectField",
        "locationAllowStorePickup" => "SearchBooleanField",
        "locationAtpLeadTime" => "SearchDoubleField",
        "locationAverageCost" => "SearchDoubleField",
        "locationBuildTime" => "SearchDoubleField",
        "locationCost" => "SearchDoubleField",
        "locationCostAccountingStatus" => "SearchEnumMultiSelectField",
        "locationDefaultReturnCost" => "SearchDoubleField",
        "locationDemandSource" => "SearchEnumMultiSelectField",
        "locationDemandTimeFence" => "SearchLongField",
        "locationFixedLotSize" => "SearchDoubleField",
        "locationInventoryCostTemplate" => "SearchMultiSelectField",
        "locationInvtClassification" => "SearchEnumMultiSelectField",
        "locationInvtCountInterval" => "SearchLongField",
        "locationLastInvtCountDate" => "SearchDateField",
        "locationLeadTime" => "SearchLongField",
        "locationNextInvtCountDate" => "SearchDateField",
        "locationPeriodicLotSizeDays" => "SearchLongField",
        "locationPeriodicLotSizeType" => "SearchEnumMultiSelectField",
        "locationPreferredStockLevel" => "SearchDoubleField",
        "locationQtyAvailForStorePickup" => "SearchDoubleField",
        "locationQuantityAvailable" => "SearchDoubleField",
        "locationQuantityBackOrdered" => "SearchDoubleField",
        "locationQuantityCommitted" => "SearchDoubleField",
        "locationQuantityInTransit" => "SearchDoubleField",
        "locationQuantityOnHand" => "SearchDoubleField",
        "locationQuantityOnOrder" => "SearchDoubleField",
        "locationReorderPoint" => "SearchDoubleField",
        "locationRescheduleInDays" => "SearchLongField",
        "locationRescheduleOutDays" => "SearchLongField",
        "locationSafetyStockLevel" => "SearchDoubleField",
        "locationStorePickupBufferStock" => "SearchDoubleField",
        "locationSupplyLotSizingMethod" => "SearchEnumMultiSelectField",
        "locationSupplyTimeFence" => "SearchLongField",
        "locationSupplyType" => "SearchEnumMultiSelectField",
        "locationTotalValue" => "SearchDoubleField",
        "locBackwardConsumptionDays" => "SearchLongField",
        "locForwardConsumptionDays" => "SearchLongField",
        "lowerWarningLimit" => "SearchDoubleField",
        "manufacturer" => "SearchStringField",
        "manufactureraddr1" => "SearchStringField",
        "manufacturerCity" => "SearchStringField",
        "manufacturerState" => "SearchStringField",
        "manufacturerTariff" => "SearchStringField",
        "manufacturerTaxId" => "SearchStringField",
        "manufacturerZip" => "SearchStringField",
        "manufacturingChargeItem" => "SearchBooleanField",
        "matchBillToReceipt" => "SearchBooleanField",
        "matrix" => "SearchBooleanField",
        "matrixChild" => "SearchBooleanField",
        "maximumQuantity" => "SearchLongField",
        "metaTagHtml" => "SearchStringField",
        "minimumQuantity" => "SearchLongField",
        "mossApplies" => "SearchBooleanField",
        "mpn" => "SearchStringField",
        "multManufactureAddr" => "SearchBooleanField",
        "nexTagCategory" => "SearchStringField",
        "nexTagProductFeed" => "SearchBooleanField",
        "nextInvtCountDate" => "SearchDateField",
        "numActiveListings" => "SearchLongField",
        "numberAllowedDownloads" => "SearchDoubleField",
        "numCurrentlyListed" => "SearchLongField",
        "obsoleteDate" => "SearchDateField",
        "obsoleteRevision" => "SearchMultiSelectField",
        "offerSupport" => "SearchBooleanField",
        "onlineCustomerPrice" => "SearchDoubleField",
        "onSpecial" => "SearchBooleanField",
        "otherVendor" => "SearchMultiSelectField",
        "outOfStockBehavior" => "SearchMultiSelectField",
        "overallQuantityPricingType" => "SearchEnumMultiSelectField",
        "overheadType" => "SearchEnumMultiSelectField",
        "pageTitle" => "SearchStringField",
        "parent" => "SearchMultiSelectField",
        "periodicLotSizeDays" => "SearchLongField",
        "periodicLotSizeType" => "SearchEnumMultiSelectField",
        "preferenceCriterion" => "SearchStringField",
        "preferredBin" => "SearchBooleanField",
        "preferredLocation" => "SearchMultiSelectField",
        "preferredStockLevel" => "SearchDoubleField",
        "preferredStockLevelDays" => "SearchLongField",
        "price" => "SearchDoubleField",
        "pricesIncludeTax" => "SearchBooleanField",
        "pricingGroup" => "SearchMultiSelectField",
        "primaryCategory" => "SearchLongField",
        "purchaseOrderAmount" => "SearchDoubleField",
        "purchaseOrderQuantity" => "SearchDoubleField",
        "purchaseOrderQuantityDiff" => "SearchDoubleField",
        "purchaseUnit" => "SearchMultiSelectField",
        "quantityAvailable" => "SearchDoubleField",
        "quantityBackOrdered" => "SearchDoubleField",
        "quantityCommitted" => "SearchDoubleField",
        "quantityOnHand" => "SearchDoubleField",
        "quantityOnOrder" => "SearchDoubleField",
        "quantityPricingSchedule" => "SearchMultiSelectField",
        "receiptAmount" => "SearchDoubleField",
        "receiptQuantity" => "SearchDoubleField",
        "receiptQuantityDiff" => "SearchDoubleField",
        "reorderMultiple" => "SearchLongField",
        "reorderPoint" => "SearchDoubleField",
        "rescheduleInDays" => "SearchLongField",
        "rescheduleOutDays" => "SearchLongField",
        "reservePrice" => "SearchDoubleField",
        "revenueAllocationGroup" => "SearchMultiSelectField",
        "revenueRecognitionRule" => "SearchMultiSelectField",
        "revRecForecastRule" => "SearchMultiSelectField",
        "revRecSchedule" => "SearchMultiSelectField",
        "roundUpAsComponent" => "SearchBooleanField",
        "safetyStockLevel" => "SearchDoubleField",
        "safetyStockLevelDays" => "SearchLongField",
        "salesDescription" => "SearchStringField",
        "saleUnit" => "SearchMultiSelectField",
        "sameAsPrimaryBookAmortization" => "SearchBooleanField",
        "sameAsPrimaryBookRevRec" => "SearchBooleanField",
        "scheduleBCode" => "SearchEnumMultiSelectField",
        "scheduleBNumber" => "SearchStringField",
        "scheduleBQuantity" => "SearchStringField",
        "searchKeywords" => "SearchStringField",
        "seasonalDemand" => "SearchBooleanField",
        "secondaryConsumptionUnit" => "SearchMultiSelectField",
        "secondaryPurchaseUnit" => "SearchMultiSelectField",
        "secondarySaleUnit" => "SearchMultiSelectField",
        "secondaryStockUnit" => "SearchMultiSelectField",
        "secondaryUnitsType" => "SearchMultiSelectField",
        "sellOnEBay" => "SearchBooleanField",
        "serialNumber" => "SearchStringField",
        "serialNumberLocation" => "SearchMultiSelectField",
        "shipIndividually" => "SearchBooleanField",
        "shipPackage" => "SearchMultiSelectField",
        "shippingCarrier" => "SearchEnumMultiSelectField",
        "shippingRate" => "SearchDoubleField",
        "shoppingDotComCategory" => "SearchStringField",
        "shoppingProductFeed" => "SearchBooleanField",
        "shopzillaCategoryId" => "SearchLongField",
        "shopzillaProductFeed" => "SearchBooleanField",
        "sitemapPriority" => "SearchEnumMultiSelectField",
        "softDescriptor" => "SearchMultiSelectField",
        "startingPrice" => "SearchDoubleField",
        "stockDescription" => "SearchStringField",
        "stockUnit" => "SearchMultiSelectField",
        "storeDescription" => "SearchStringField",
        "subsidiary" => "SearchMultiSelectField",
        "subType" => "SearchEnumMultiSelectField",
        "supplyLotSizingMethod" => "SearchEnumMultiSelectField",
        "supplyReplenishmentMethod" => "SearchEnumMultiSelectField",
        "supplyTimeFence" => "SearchLongField",
        "supplyType" => "SearchEnumMultiSelectField",
        "taxCode" => "SearchMultiSelectField",
        "taxSchedule" => "SearchMultiSelectField",
        "thumbnailUrl" => "SearchStringField",
        "totalValue" => "SearchDoubleField",
        "trackLandedCost" => "SearchBooleanField",
        "transferPrice" => "SearchDoubleField",
        "type" => "SearchEnumMultiSelectField",
        "unitsType" => "SearchMultiSelectField",
        "upcCode" => "SearchStringField",
        "upperWarningLimit" => "SearchDoubleField",
        "urlComponent" => "SearchStringField",
        "useBins" => "SearchBooleanField",
        "useComponentYield" => "SearchBooleanField",
        "useMarginalRates" => "SearchBooleanField",
        "vendor" => "SearchMultiSelectField",
        "vendorCode" => "SearchStringField",
        "vendorCost" => "SearchDoubleField",
        "vendorCostEntered" => "SearchDoubleField",
        "vendorName" => "SearchStringField",
        "vendorPriceCurrency" => "SearchMultiSelectField",
        "vsoeDeferral" => "SearchEnumMultiSelectField",
        "vsoeDelivered" => "SearchBooleanField",
        "vsoePermitDiscount" => "SearchEnumMultiSelectField",
        "vsoePrice" => "SearchDoubleField",
        "vsoeSopGroup" => "SearchEnumMultiSelectField",
        "webSite" => "SearchMultiSelectField",
        "weight" => "SearchDoubleField",
        "yahooProductFeed" => "SearchBooleanField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchMultiSelectField $accBookRevRecForecastRule
     * @return ItemSearchBasic
     */
    public function setAccBookRevRecForecastRule(SearchMultiSelectField $accBookRevRecForecastRule): ItemSearchBasic
    {
        $this->accBookRevRecForecastRule = $accBookRevRecForecastRule;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccBookRevRecForecastRule(): SearchMultiSelectField
    {
        return $this->accBookRevRecForecastRule;
    }

    /**
     * @param SearchMultiSelectField $account
     * @return ItemSearchBasic
     */
    public function setAccount(SearchMultiSelectField $account): ItemSearchBasic
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccount(): SearchMultiSelectField
    {
        return $this->account;
    }

    /**
     * @param SearchMultiSelectField $accountingBook
     * @return ItemSearchBasic
     */
    public function setAccountingBook(SearchMultiSelectField $accountingBook): ItemSearchBasic
    {
        $this->accountingBook = $accountingBook;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingBook(): SearchMultiSelectField
    {
        return $this->accountingBook;
    }

    /**
     * @param SearchMultiSelectField $accountingBookAmortization
     * @return ItemSearchBasic
     */
    public function setAccountingBookAmortization(SearchMultiSelectField $accountingBookAmortization): ItemSearchBasic
    {
        $this->accountingBookAmortization = $accountingBookAmortization;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingBookAmortization(): SearchMultiSelectField
    {
        return $this->accountingBookAmortization;
    }

    /**
     * @param SearchMultiSelectField $accountingBookCreatePlansOn
     * @return ItemSearchBasic
     */
    public function setAccountingBookCreatePlansOn(SearchMultiSelectField $accountingBookCreatePlansOn): ItemSearchBasic
    {
        $this->accountingBookCreatePlansOn = $accountingBookCreatePlansOn;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingBookCreatePlansOn(): SearchMultiSelectField
    {
        return $this->accountingBookCreatePlansOn;
    }

    /**
     * @param SearchMultiSelectField $accountingBookRevRecRule
     * @return ItemSearchBasic
     */
    public function setAccountingBookRevRecRule(SearchMultiSelectField $accountingBookRevRecRule): ItemSearchBasic
    {
        $this->accountingBookRevRecRule = $accountingBookRevRecRule;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingBookRevRecRule(): SearchMultiSelectField
    {
        return $this->accountingBookRevRecRule;
    }

    /**
     * @param SearchMultiSelectField $accountingBookRevRecSchedule
     * @return ItemSearchBasic
     */
    public function setAccountingBookRevRecSchedule(SearchMultiSelectField $accountingBookRevRecSchedule): ItemSearchBasic
    {
        $this->accountingBookRevRecSchedule = $accountingBookRevRecSchedule;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingBookRevRecSchedule(): SearchMultiSelectField
    {
        return $this->accountingBookRevRecSchedule;
    }

    /**
     * @param SearchMultiSelectField $allowedShippingMethod
     * @return ItemSearchBasic
     */
    public function setAllowedShippingMethod(SearchMultiSelectField $allowedShippingMethod): ItemSearchBasic
    {
        $this->allowedShippingMethod = $allowedShippingMethod;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAllowedShippingMethod(): SearchMultiSelectField
    {
        return $this->allowedShippingMethod;
    }

    /**
     * @param SearchMultiSelectField $alternateDemandSourceItem
     * @return ItemSearchBasic
     */
    public function setAlternateDemandSourceItem(SearchMultiSelectField $alternateDemandSourceItem): ItemSearchBasic
    {
        $this->alternateDemandSourceItem = $alternateDemandSourceItem;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAlternateDemandSourceItem(): SearchMultiSelectField
    {
        return $this->alternateDemandSourceItem;
    }

    /**
     * @param SearchDoubleField $atpLeadTime
     * @return ItemSearchBasic
     */
    public function setAtpLeadTime(SearchDoubleField $atpLeadTime): ItemSearchBasic
    {
        $this->atpLeadTime = $atpLeadTime;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAtpLeadTime(): SearchDoubleField
    {
        return $this->atpLeadTime;
    }

    /**
     * @param SearchEnumMultiSelectField $atpMethod
     * @return ItemSearchBasic
     */
    public function setAtpMethod(SearchEnumMultiSelectField $atpMethod): ItemSearchBasic
    {
        $this->atpMethod = $atpMethod;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAtpMethod(): SearchEnumMultiSelectField
    {
        return $this->atpMethod;
    }

    /**
     * @param SearchBooleanField $autoLeadTime
     * @return ItemSearchBasic
     */
    public function setAutoLeadTime(SearchBooleanField $autoLeadTime): ItemSearchBasic
    {
        $this->autoLeadTime = $autoLeadTime;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAutoLeadTime(): SearchBooleanField
    {
        return $this->autoLeadTime;
    }

    /**
     * @param SearchBooleanField $autoPreferredStockLevel
     * @return ItemSearchBasic
     */
    public function setAutoPreferredStockLevel(SearchBooleanField $autoPreferredStockLevel): ItemSearchBasic
    {
        $this->autoPreferredStockLevel = $autoPreferredStockLevel;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAutoPreferredStockLevel(): SearchBooleanField
    {
        return $this->autoPreferredStockLevel;
    }

    /**
     * @param SearchBooleanField $autoReorderPoint
     * @return ItemSearchBasic
     */
    public function setAutoReorderPoint(SearchBooleanField $autoReorderPoint): ItemSearchBasic
    {
        $this->autoReorderPoint = $autoReorderPoint;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAutoReorderPoint(): SearchBooleanField
    {
        return $this->autoReorderPoint;
    }

    /**
     * @param SearchBooleanField $availableToPartners
     * @return ItemSearchBasic
     */
    public function setAvailableToPartners(SearchBooleanField $availableToPartners): ItemSearchBasic
    {
        $this->availableToPartners = $availableToPartners;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAvailableToPartners(): SearchBooleanField
    {
        return $this->availableToPartners;
    }

    /**
     * @param SearchDoubleField $averageCost
     * @return ItemSearchBasic
     */
    public function setAverageCost(SearchDoubleField $averageCost): ItemSearchBasic
    {
        $this->averageCost = $averageCost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAverageCost(): SearchDoubleField
    {
        return $this->averageCost;
    }

    /**
     * @param SearchLongField $backwardConsumptionDays
     * @return ItemSearchBasic
     */
    public function setBackwardConsumptionDays(SearchLongField $backwardConsumptionDays): ItemSearchBasic
    {
        $this->backwardConsumptionDays = $backwardConsumptionDays;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getBackwardConsumptionDays(): SearchLongField
    {
        return $this->backwardConsumptionDays;
    }

    /**
     * @param SearchStringField $binNumber
     * @return ItemSearchBasic
     */
    public function setBinNumber(SearchStringField $binNumber): ItemSearchBasic
    {
        $this->binNumber = $binNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBinNumber(): SearchStringField
    {
        return $this->binNumber;
    }

    /**
     * @param SearchDoubleField $binOnHandAvail
     * @return ItemSearchBasic
     */
    public function setBinOnHandAvail(SearchDoubleField $binOnHandAvail): ItemSearchBasic
    {
        $this->binOnHandAvail = $binOnHandAvail;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBinOnHandAvail(): SearchDoubleField
    {
        return $this->binOnHandAvail;
    }

    /**
     * @param SearchDoubleField $binOnHandCount
     * @return ItemSearchBasic
     */
    public function setBinOnHandCount(SearchDoubleField $binOnHandCount): ItemSearchBasic
    {
        $this->binOnHandCount = $binOnHandCount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBinOnHandCount(): SearchDoubleField
    {
        return $this->binOnHandCount;
    }

    /**
     * @param SearchDoubleField $bomQuantity
     * @return ItemSearchBasic
     */
    public function setBomQuantity(SearchDoubleField $bomQuantity): ItemSearchBasic
    {
        $this->bomQuantity = $bomQuantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBomQuantity(): SearchDoubleField
    {
        return $this->bomQuantity;
    }

    /**
     * @param SearchBooleanField $buildEntireAssembly
     * @return ItemSearchBasic
     */
    public function setBuildEntireAssembly(SearchBooleanField $buildEntireAssembly): ItemSearchBasic
    {
        $this->buildEntireAssembly = $buildEntireAssembly;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getBuildEntireAssembly(): SearchBooleanField
    {
        return $this->buildEntireAssembly;
    }

    /**
     * @param SearchDoubleField $buildTime
     * @return ItemSearchBasic
     */
    public function setBuildTime(SearchDoubleField $buildTime): ItemSearchBasic
    {
        $this->buildTime = $buildTime;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBuildTime(): SearchDoubleField
    {
        return $this->buildTime;
    }

    /**
     * @param SearchDoubleField $buyItNowPrice
     * @return ItemSearchBasic
     */
    public function setBuyItNowPrice(SearchDoubleField $buyItNowPrice): ItemSearchBasic
    {
        $this->buyItNowPrice = $buyItNowPrice;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBuyItNowPrice(): SearchDoubleField
    {
        return $this->buyItNowPrice;
    }

    /**
     * @param SearchStringField $caption
     * @return ItemSearchBasic
     */
    public function setCaption(SearchStringField $caption): ItemSearchBasic
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCaption(): SearchStringField
    {
        return $this->caption;
    }

    /**
     * @param SearchMultiSelectField $category
     * @return ItemSearchBasic
     */
    public function setCategory(SearchMultiSelectField $category): ItemSearchBasic
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCategory(): SearchMultiSelectField
    {
        return $this->category;
    }

    /**
     * @param SearchMultiSelectField $class
     * @return ItemSearchBasic
     */
    public function setClass(SearchMultiSelectField $class): ItemSearchBasic
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getClass(): SearchMultiSelectField
    {
        return $this->class;
    }

    /**
     * @param SearchMultiSelectField $component
     * @return ItemSearchBasic
     */
    public function setComponent(SearchMultiSelectField $component): ItemSearchBasic
    {
        $this->component = $component;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getComponent(): SearchMultiSelectField
    {
        return $this->component;
    }

    /**
     * @param SearchMultiSelectField $componentOf
     * @return ItemSearchBasic
     */
    public function setComponentOf(SearchMultiSelectField $componentOf): ItemSearchBasic
    {
        $this->componentOf = $componentOf;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getComponentOf(): SearchMultiSelectField
    {
        return $this->componentOf;
    }

    /**
     * @param SearchDoubleField $componentYield
     * @return ItemSearchBasic
     */
    public function setComponentYield(SearchDoubleField $componentYield): ItemSearchBasic
    {
        $this->componentYield = $componentYield;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getComponentYield(): SearchDoubleField
    {
        return $this->componentYield;
    }

    /**
     * @param SearchMultiSelectField $consumptionUnit
     * @return ItemSearchBasic
     */
    public function setConsumptionUnit(SearchMultiSelectField $consumptionUnit): ItemSearchBasic
    {
        $this->consumptionUnit = $consumptionUnit;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getConsumptionUnit(): SearchMultiSelectField
    {
        return $this->consumptionUnit;
    }

    /**
     * @param SearchBooleanField $contingentRevenueHandling
     * @return ItemSearchBasic
     */
    public function setContingentRevenueHandling(SearchBooleanField $contingentRevenueHandling): ItemSearchBasic
    {
        $this->contingentRevenueHandling = $contingentRevenueHandling;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getContingentRevenueHandling(): SearchBooleanField
    {
        return $this->contingentRevenueHandling;
    }

    /**
     * @param SearchDoubleField $conversionRate
     * @return ItemSearchBasic
     */
    public function setConversionRate(SearchDoubleField $conversionRate): ItemSearchBasic
    {
        $this->conversionRate = $conversionRate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getConversionRate(): SearchDoubleField
    {
        return $this->conversionRate;
    }

    /**
     * @param SearchBooleanField $copyDescription
     * @return ItemSearchBasic
     */
    public function setCopyDescription(SearchBooleanField $copyDescription): ItemSearchBasic
    {
        $this->copyDescription = $copyDescription;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCopyDescription(): SearchBooleanField
    {
        return $this->copyDescription;
    }

    /**
     * @param SearchMultiSelectField $correlatedItem
     * @return ItemSearchBasic
     */
    public function setCorrelatedItem(SearchMultiSelectField $correlatedItem): ItemSearchBasic
    {
        $this->correlatedItem = $correlatedItem;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCorrelatedItem(): SearchMultiSelectField
    {
        return $this->correlatedItem;
    }

    /**
     * @param SearchDoubleField $correlatedItemCorrelation
     * @return ItemSearchBasic
     */
    public function setCorrelatedItemCorrelation(SearchDoubleField $correlatedItemCorrelation): ItemSearchBasic
    {
        $this->correlatedItemCorrelation = $correlatedItemCorrelation;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCorrelatedItemCorrelation(): SearchDoubleField
    {
        return $this->correlatedItemCorrelation;
    }

    /**
     * @param SearchLongField $correlatedItemCount
     * @return ItemSearchBasic
     */
    public function setCorrelatedItemCount(SearchLongField $correlatedItemCount): ItemSearchBasic
    {
        $this->correlatedItemCount = $correlatedItemCount;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getCorrelatedItemCount(): SearchLongField
    {
        return $this->correlatedItemCount;
    }

    /**
     * @param SearchDoubleField $correlatedItemLift
     * @return ItemSearchBasic
     */
    public function setCorrelatedItemLift(SearchDoubleField $correlatedItemLift): ItemSearchBasic
    {
        $this->correlatedItemLift = $correlatedItemLift;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCorrelatedItemLift(): SearchDoubleField
    {
        return $this->correlatedItemLift;
    }

    /**
     * @param SearchDoubleField $correlatedItemPurchaseRate
     * @return ItemSearchBasic
     */
    public function setCorrelatedItemPurchaseRate(SearchDoubleField $correlatedItemPurchaseRate): ItemSearchBasic
    {
        $this->correlatedItemPurchaseRate = $correlatedItemPurchaseRate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCorrelatedItemPurchaseRate(): SearchDoubleField
    {
        return $this->correlatedItemPurchaseRate;
    }

    /**
     * @param SearchDoubleField $cost
     * @return ItemSearchBasic
     */
    public function setCost(SearchDoubleField $cost): ItemSearchBasic
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCost(): SearchDoubleField
    {
        return $this->cost;
    }

    /**
     * @param SearchEnumMultiSelectField $costAccountingStatus
     * @return ItemSearchBasic
     */
    public function setCostAccountingStatus(SearchEnumMultiSelectField $costAccountingStatus): ItemSearchBasic
    {
        $this->costAccountingStatus = $costAccountingStatus;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCostAccountingStatus(): SearchEnumMultiSelectField
    {
        return $this->costAccountingStatus;
    }

    /**
     * @param SearchMultiSelectField $costCategory
     * @return ItemSearchBasic
     */
    public function setCostCategory(SearchMultiSelectField $costCategory): ItemSearchBasic
    {
        $this->costCategory = $costCategory;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCostCategory(): SearchMultiSelectField
    {
        return $this->costCategory;
    }

    /**
     * @param SearchDoubleField $costEstimate
     * @return ItemSearchBasic
     */
    public function setCostEstimate(SearchDoubleField $costEstimate): ItemSearchBasic
    {
        $this->costEstimate = $costEstimate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostEstimate(): SearchDoubleField
    {
        return $this->costEstimate;
    }

    /**
     * @param SearchEnumMultiSelectField $costEstimateType
     * @return ItemSearchBasic
     */
    public function setCostEstimateType(SearchEnumMultiSelectField $costEstimateType): ItemSearchBasic
    {
        $this->costEstimateType = $costEstimateType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCostEstimateType(): SearchEnumMultiSelectField
    {
        return $this->costEstimateType;
    }

    /**
     * @param SearchEnumMultiSelectField $costingMethod
     * @return ItemSearchBasic
     */
    public function setCostingMethod(SearchEnumMultiSelectField $costingMethod): ItemSearchBasic
    {
        $this->costingMethod = $costingMethod;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCostingMethod(): SearchEnumMultiSelectField
    {
        return $this->costingMethod;
    }

    /**
     * @param SearchEnumMultiSelectField $countryOfManufacture
     * @return ItemSearchBasic
     */
    public function setCountryOfManufacture(SearchEnumMultiSelectField $countryOfManufacture): ItemSearchBasic
    {
        $this->countryOfManufacture = $countryOfManufacture;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCountryOfManufacture(): SearchEnumMultiSelectField
    {
        return $this->countryOfManufacture;
    }

    /**
     * @param SearchDateField $created
     * @return ItemSearchBasic
     */
    public function setCreated(SearchDateField $created): ItemSearchBasic
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCreated(): SearchDateField
    {
        return $this->created;
    }

    /**
     * @param SearchBooleanField $createJob
     * @return ItemSearchBasic
     */
    public function setCreateJob(SearchBooleanField $createJob): ItemSearchBasic
    {
        $this->createJob = $createJob;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCreateJob(): SearchBooleanField
    {
        return $this->createJob;
    }

    /**
     * @param SearchMultiSelectField $createRevenuePlansOn
     * @return ItemSearchBasic
     */
    public function setCreateRevenuePlansOn(SearchMultiSelectField $createRevenuePlansOn): ItemSearchBasic
    {
        $this->createRevenuePlansOn = $createRevenuePlansOn;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCreateRevenuePlansOn(): SearchMultiSelectField
    {
        return $this->createRevenuePlansOn;
    }

    /**
     * @param SearchDateField $dateViewed
     * @return ItemSearchBasic
     */
    public function setDateViewed(SearchDateField $dateViewed): ItemSearchBasic
    {
        $this->dateViewed = $dateViewed;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateViewed(): SearchDateField
    {
        return $this->dateViewed;
    }

    /**
     * @param SearchDoubleField $daysBeforeExpiration
     * @return ItemSearchBasic
     */
    public function setDaysBeforeExpiration(SearchDoubleField $daysBeforeExpiration): ItemSearchBasic
    {
        $this->daysBeforeExpiration = $daysBeforeExpiration;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDaysBeforeExpiration(): SearchDoubleField
    {
        return $this->daysBeforeExpiration;
    }

    /**
     * @param SearchDoubleField $defaultReturnCost
     * @return ItemSearchBasic
     */
    public function setDefaultReturnCost(SearchDoubleField $defaultReturnCost): ItemSearchBasic
    {
        $this->defaultReturnCost = $defaultReturnCost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDefaultReturnCost(): SearchDoubleField
    {
        return $this->defaultReturnCost;
    }

    /**
     * @param SearchMultiSelectField $defaultShippingMethod
     * @return ItemSearchBasic
     */
    public function setDefaultShippingMethod(SearchMultiSelectField $defaultShippingMethod): ItemSearchBasic
    {
        $this->defaultShippingMethod = $defaultShippingMethod;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDefaultShippingMethod(): SearchMultiSelectField
    {
        return $this->defaultShippingMethod;
    }

    /**
     * @param SearchBooleanField $deferRevRec
     * @return ItemSearchBasic
     */
    public function setDeferRevRec(SearchBooleanField $deferRevRec): ItemSearchBasic
    {
        $this->deferRevRec = $deferRevRec;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getDeferRevRec(): SearchBooleanField
    {
        return $this->deferRevRec;
    }

    /**
     * @param SearchDoubleField $demandModifier
     * @return ItemSearchBasic
     */
    public function setDemandModifier(SearchDoubleField $demandModifier): ItemSearchBasic
    {
        $this->demandModifier = $demandModifier;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDemandModifier(): SearchDoubleField
    {
        return $this->demandModifier;
    }

    /**
     * @param SearchEnumMultiSelectField $demandSource
     * @return ItemSearchBasic
     */
    public function setDemandSource(SearchEnumMultiSelectField $demandSource): ItemSearchBasic
    {
        $this->demandSource = $demandSource;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getDemandSource(): SearchEnumMultiSelectField
    {
        return $this->demandSource;
    }

    /**
     * @param SearchLongField $demandTimeFence
     * @return ItemSearchBasic
     */
    public function setDemandTimeFence(SearchLongField $demandTimeFence): ItemSearchBasic
    {
        $this->demandTimeFence = $demandTimeFence;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDemandTimeFence(): SearchLongField
    {
        return $this->demandTimeFence;
    }

    /**
     * @param SearchMultiSelectField $department
     * @return ItemSearchBasic
     */
    public function setDepartment(SearchMultiSelectField $department): ItemSearchBasic
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDepartment(): SearchMultiSelectField
    {
        return $this->department;
    }

    /**
     * @param SearchBooleanField $directRevenuePosting
     * @return ItemSearchBasic
     */
    public function setDirectRevenuePosting(SearchBooleanField $directRevenuePosting): ItemSearchBasic
    {
        $this->directRevenuePosting = $directRevenuePosting;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getDirectRevenuePosting(): SearchBooleanField
    {
        return $this->directRevenuePosting;
    }

    /**
     * @param SearchBooleanField $displayIneBayStore
     * @return ItemSearchBasic
     */
    public function setDisplayIneBayStore(SearchBooleanField $displayIneBayStore): ItemSearchBasic
    {
        $this->displayIneBayStore = $displayIneBayStore;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getDisplayIneBayStore(): SearchBooleanField
    {
        return $this->displayIneBayStore;
    }

    /**
     * @param SearchStringField $displayName
     * @return ItemSearchBasic
     */
    public function setDisplayName(SearchStringField $displayName): ItemSearchBasic
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDisplayName(): SearchStringField
    {
        return $this->displayName;
    }

    /**
     * @param SearchMultiSelectField $distributionCategory
     * @return ItemSearchBasic
     */
    public function setDistributionCategory(SearchMultiSelectField $distributionCategory): ItemSearchBasic
    {
        $this->distributionCategory = $distributionCategory;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDistributionCategory(): SearchMultiSelectField
    {
        return $this->distributionCategory;
    }

    /**
     * @param SearchMultiSelectField $distributionNetwork
     * @return ItemSearchBasic
     */
    public function setDistributionNetwork(SearchMultiSelectField $distributionNetwork): ItemSearchBasic
    {
        $this->distributionNetwork = $distributionNetwork;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDistributionNetwork(): SearchMultiSelectField
    {
        return $this->distributionNetwork;
    }

    /**
     * @param SearchBooleanField $dontShowPrice
     * @return ItemSearchBasic
     */
    public function setDontShowPrice(SearchBooleanField $dontShowPrice): ItemSearchBasic
    {
        $this->dontShowPrice = $dontShowPrice;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getDontShowPrice(): SearchBooleanField
    {
        return $this->dontShowPrice;
    }

    /**
     * @param SearchStringField $eBayItemDescription
     * @return ItemSearchBasic
     */
    public function setEBayItemDescription(SearchStringField $eBayItemDescription): ItemSearchBasic
    {
        $this->eBayItemDescription = $eBayItemDescription;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEBayItemDescription(): SearchStringField
    {
        return $this->eBayItemDescription;
    }

    /**
     * @param SearchStringField $eBayItemSubtitle
     * @return ItemSearchBasic
     */
    public function setEBayItemSubtitle(SearchStringField $eBayItemSubtitle): ItemSearchBasic
    {
        $this->eBayItemSubtitle = $eBayItemSubtitle;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEBayItemSubtitle(): SearchStringField
    {
        return $this->eBayItemSubtitle;
    }

    /**
     * @param SearchStringField $eBayItemTitle
     * @return ItemSearchBasic
     */
    public function setEBayItemTitle(SearchStringField $eBayItemTitle): ItemSearchBasic
    {
        $this->eBayItemTitle = $eBayItemTitle;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEBayItemTitle(): SearchStringField
    {
        return $this->eBayItemTitle;
    }

    /**
     * @param SearchEnumMultiSelectField $ebayRelistingOption
     * @return ItemSearchBasic
     */
    public function setEbayRelistingOption(SearchEnumMultiSelectField $ebayRelistingOption): ItemSearchBasic
    {
        $this->ebayRelistingOption = $ebayRelistingOption;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getEbayRelistingOption(): SearchEnumMultiSelectField
    {
        return $this->ebayRelistingOption;
    }

    /**
     * @param SearchEnumMultiSelectField $effectiveBomControl
     * @return ItemSearchBasic
     */
    public function setEffectiveBomControl(SearchEnumMultiSelectField $effectiveBomControl): ItemSearchBasic
    {
        $this->effectiveBomControl = $effectiveBomControl;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getEffectiveBomControl(): SearchEnumMultiSelectField
    {
        return $this->effectiveBomControl;
    }

    /**
     * @param SearchDateField $effectiveDate
     * @return ItemSearchBasic
     */
    public function setEffectiveDate(SearchDateField $effectiveDate): ItemSearchBasic
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEffectiveDate(): SearchDateField
    {
        return $this->effectiveDate;
    }

    /**
     * @param SearchMultiSelectField $effectiveRevision
     * @return ItemSearchBasic
     */
    public function setEffectiveRevision(SearchMultiSelectField $effectiveRevision): ItemSearchBasic
    {
        $this->effectiveRevision = $effectiveRevision;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEffectiveRevision(): SearchMultiSelectField
    {
        return $this->effectiveRevision;
    }

    /**
     * @param SearchBooleanField $enableCatchWeight
     * @return ItemSearchBasic
     */
    public function setEnableCatchWeight(SearchBooleanField $enableCatchWeight): ItemSearchBasic
    {
        $this->enableCatchWeight = $enableCatchWeight;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getEnableCatchWeight(): SearchBooleanField
    {
        return $this->enableCatchWeight;
    }

    /**
     * @param SearchBooleanField $endAuctionsWhenOutOfStock
     * @return ItemSearchBasic
     */
    public function setEndAuctionsWhenOutOfStock(SearchBooleanField $endAuctionsWhenOutOfStock): ItemSearchBasic
    {
        $this->endAuctionsWhenOutOfStock = $endAuctionsWhenOutOfStock;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getEndAuctionsWhenOutOfStock(): SearchBooleanField
    {
        return $this->endAuctionsWhenOutOfStock;
    }

    /**
     * @param SearchBooleanField $excludeFromSitemap
     * @return ItemSearchBasic
     */
    public function setExcludeFromSitemap(SearchBooleanField $excludeFromSitemap): ItemSearchBasic
    {
        $this->excludeFromSitemap = $excludeFromSitemap;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getExcludeFromSitemap(): SearchBooleanField
    {
        return $this->excludeFromSitemap;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return ItemSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): ItemSearchBasic
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId(): SearchMultiSelectField
    {
        return $this->externalId;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return ItemSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): ItemSearchBasic
    {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString(): SearchStringField
    {
        return $this->externalIdString;
    }

    /**
     * @param SearchStringField $featuredDescription
     * @return ItemSearchBasic
     */
    public function setFeaturedDescription(SearchStringField $featuredDescription): ItemSearchBasic
    {
        $this->featuredDescription = $featuredDescription;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getFeaturedDescription(): SearchStringField
    {
        return $this->featuredDescription;
    }

    /**
     * @param SearchStringField $feedDescription
     * @return ItemSearchBasic
     */
    public function setFeedDescription(SearchStringField $feedDescription): ItemSearchBasic
    {
        $this->feedDescription = $feedDescription;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getFeedDescription(): SearchStringField
    {
        return $this->feedDescription;
    }

    /**
     * @param SearchStringField $feedName
     * @return ItemSearchBasic
     */
    public function setFeedName(SearchStringField $feedName): ItemSearchBasic
    {
        $this->feedName = $feedName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getFeedName(): SearchStringField
    {
        return $this->feedName;
    }

    /**
     * @param SearchDoubleField $fixedLotSize
     * @return ItemSearchBasic
     */
    public function setFixedLotSize(SearchDoubleField $fixedLotSize): ItemSearchBasic
    {
        $this->fixedLotSize = $fixedLotSize;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFixedLotSize(): SearchDoubleField
    {
        return $this->fixedLotSize;
    }

    /**
     * @param SearchLongField $forwardConsumptionDays
     * @return ItemSearchBasic
     */
    public function setForwardConsumptionDays(SearchLongField $forwardConsumptionDays): ItemSearchBasic
    {
        $this->forwardConsumptionDays = $forwardConsumptionDays;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getForwardConsumptionDays(): SearchLongField
    {
        return $this->forwardConsumptionDays;
    }

    /**
     * @param SearchEnumMultiSelectField $fraudRisk
     * @return ItemSearchBasic
     */
    public function setFraudRisk(SearchEnumMultiSelectField $fraudRisk): ItemSearchBasic
    {
        $this->fraudRisk = $fraudRisk;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getFraudRisk(): SearchEnumMultiSelectField
    {
        return $this->fraudRisk;
    }

    /**
     * @param SearchBooleanField $froogleProductFeed
     * @return ItemSearchBasic
     */
    public function setFroogleProductFeed(SearchBooleanField $froogleProductFeed): ItemSearchBasic
    {
        $this->froogleProductFeed = $froogleProductFeed;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getFroogleProductFeed(): SearchBooleanField
    {
        return $this->froogleProductFeed;
    }

    /**
     * @param SearchLongField $futureHorizon
     * @return ItemSearchBasic
     */
    public function setFutureHorizon(SearchLongField $futureHorizon): ItemSearchBasic
    {
        $this->futureHorizon = $futureHorizon;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getFutureHorizon(): SearchLongField
    {
        return $this->futureHorizon;
    }

    /**
     * @param SearchDoubleField $fxCost
     * @return ItemSearchBasic
     */
    public function setFxCost(SearchDoubleField $fxCost): ItemSearchBasic
    {
        $this->fxCost = $fxCost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxCost(): SearchDoubleField
    {
        return $this->fxCost;
    }

    /**
     * @param SearchBooleanField $generateAccruals
     * @return ItemSearchBasic
     */
    public function setGenerateAccruals(SearchBooleanField $generateAccruals): ItemSearchBasic
    {
        $this->generateAccruals = $generateAccruals;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getGenerateAccruals(): SearchBooleanField
    {
        return $this->generateAccruals;
    }

    /**
     * @param SearchStringField $giftCertAuthCode
     * @return ItemSearchBasic
     */
    public function setGiftCertAuthCode(SearchStringField $giftCertAuthCode): ItemSearchBasic
    {
        $this->giftCertAuthCode = $giftCertAuthCode;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGiftCertAuthCode(): SearchStringField
    {
        return $this->giftCertAuthCode;
    }

    /**
     * @param SearchStringField $giftCertEmail
     * @return ItemSearchBasic
     */
    public function setGiftCertEmail(SearchStringField $giftCertEmail): ItemSearchBasic
    {
        $this->giftCertEmail = $giftCertEmail;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGiftCertEmail(): SearchStringField
    {
        return $this->giftCertEmail;
    }

    /**
     * @param SearchDateField $giftCertExpDate
     * @return ItemSearchBasic
     */
    public function setGiftCertExpDate(SearchDateField $giftCertExpDate): ItemSearchBasic
    {
        $this->giftCertExpDate = $giftCertExpDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getGiftCertExpDate(): SearchDateField
    {
        return $this->giftCertExpDate;
    }

    /**
     * @param SearchStringField $giftCertFrom
     * @return ItemSearchBasic
     */
    public function setGiftCertFrom(SearchStringField $giftCertFrom): ItemSearchBasic
    {
        $this->giftCertFrom = $giftCertFrom;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGiftCertFrom(): SearchStringField
    {
        return $this->giftCertFrom;
    }

    /**
     * @param SearchStringField $giftCertMsg
     * @return ItemSearchBasic
     */
    public function setGiftCertMsg(SearchStringField $giftCertMsg): ItemSearchBasic
    {
        $this->giftCertMsg = $giftCertMsg;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGiftCertMsg(): SearchStringField
    {
        return $this->giftCertMsg;
    }

    /**
     * @param SearchStringField $giftCertOrigAmt
     * @return ItemSearchBasic
     */
    public function setGiftCertOrigAmt(SearchStringField $giftCertOrigAmt): ItemSearchBasic
    {
        $this->giftCertOrigAmt = $giftCertOrigAmt;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGiftCertOrigAmt(): SearchStringField
    {
        return $this->giftCertOrigAmt;
    }

    /**
     * @param SearchStringField $giftCertRecipient
     * @return ItemSearchBasic
     */
    public function setGiftCertRecipient(SearchStringField $giftCertRecipient): ItemSearchBasic
    {
        $this->giftCertRecipient = $giftCertRecipient;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGiftCertRecipient(): SearchStringField
    {
        return $this->giftCertRecipient;
    }

    /**
     * @param SearchMultiSelectField $hierarchyNode
     * @return ItemSearchBasic
     */
    public function setHierarchyNode(SearchMultiSelectField $hierarchyNode): ItemSearchBasic
    {
        $this->hierarchyNode = $hierarchyNode;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getHierarchyNode(): SearchMultiSelectField
    {
        return $this->hierarchyNode;
    }

    /**
     * @param SearchMultiSelectField $hierarchyVersion
     * @return ItemSearchBasic
     */
    public function setHierarchyVersion(SearchMultiSelectField $hierarchyVersion): ItemSearchBasic
    {
        $this->hierarchyVersion = $hierarchyVersion;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getHierarchyVersion(): SearchMultiSelectField
    {
        return $this->hierarchyVersion;
    }

    /**
     * @param SearchStringField $imageUrl
     * @return ItemSearchBasic
     */
    public function setImageUrl(SearchStringField $imageUrl): ItemSearchBasic
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getImageUrl(): SearchStringField
    {
        return $this->imageUrl;
    }

    /**
     * @param SearchBooleanField $includeChildren
     * @return ItemSearchBasic
     */
    public function setIncludeChildren(SearchBooleanField $includeChildren): ItemSearchBasic
    {
        $this->includeChildren = $includeChildren;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIncludeChildren(): SearchBooleanField
    {
        return $this->includeChildren;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return ItemSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): ItemSearchBasic
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId(): SearchMultiSelectField
    {
        return $this->internalId;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return ItemSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): ItemSearchBasic
    {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber(): SearchLongField
    {
        return $this->internalIdNumber;
    }

    /**
     * @param SearchMultiSelectField $inventoryLocation
     * @return ItemSearchBasic
     */
    public function setInventoryLocation(SearchMultiSelectField $inventoryLocation): ItemSearchBasic
    {
        $this->inventoryLocation = $inventoryLocation;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInventoryLocation(): SearchMultiSelectField
    {
        return $this->inventoryLocation;
    }

    /**
     * @param SearchEnumMultiSelectField $invtClassification
     * @return ItemSearchBasic
     */
    public function setInvtClassification(SearchEnumMultiSelectField $invtClassification): ItemSearchBasic
    {
        $this->invtClassification = $invtClassification;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getInvtClassification(): SearchEnumMultiSelectField
    {
        return $this->invtClassification;
    }

    /**
     * @param SearchLongField $invtCountInterval
     * @return ItemSearchBasic
     */
    public function setInvtCountInterval(SearchLongField $invtCountInterval): ItemSearchBasic
    {
        $this->invtCountInterval = $invtCountInterval;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInvtCountInterval(): SearchLongField
    {
        return $this->invtCountInterval;
    }

    /**
     * @param SearchBooleanField $isAvailable
     * @return ItemSearchBasic
     */
    public function setIsAvailable(SearchBooleanField $isAvailable): ItemSearchBasic
    {
        $this->isAvailable = $isAvailable;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsAvailable(): SearchBooleanField
    {
        return $this->isAvailable;
    }

    /**
     * @param SearchBooleanField $isDropShipItem
     * @return ItemSearchBasic
     */
    public function setIsDropShipItem(SearchBooleanField $isDropShipItem): ItemSearchBasic
    {
        $this->isDropShipItem = $isDropShipItem;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsDropShipItem(): SearchBooleanField
    {
        return $this->isDropShipItem;
    }

    /**
     * @param SearchBooleanField $isFulfillable
     * @return ItemSearchBasic
     */
    public function setIsFulfillable(SearchBooleanField $isFulfillable): ItemSearchBasic
    {
        $this->isFulfillable = $isFulfillable;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsFulfillable(): SearchBooleanField
    {
        return $this->isFulfillable;
    }

    /**
     * @param SearchBooleanField $isGcoCompliant
     * @return ItemSearchBasic
     */
    public function setIsGcoCompliant(SearchBooleanField $isGcoCompliant): ItemSearchBasic
    {
        $this->isGcoCompliant = $isGcoCompliant;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsGcoCompliant(): SearchBooleanField
    {
        return $this->isGcoCompliant;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return ItemSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): ItemSearchBasic
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive(): SearchBooleanField
    {
        return $this->isInactive;
    }

    /**
     * @param SearchBooleanField $isLotItem
     * @return ItemSearchBasic
     */
    public function setIsLotItem(SearchBooleanField $isLotItem): ItemSearchBasic
    {
        $this->isLotItem = $isLotItem;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsLotItem(): SearchBooleanField
    {
        return $this->isLotItem;
    }

    /**
     * @param SearchBooleanField $isOnline
     * @return ItemSearchBasic
     */
    public function setIsOnline(SearchBooleanField $isOnline): ItemSearchBasic
    {
        $this->isOnline = $isOnline;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsOnline(): SearchBooleanField
    {
        return $this->isOnline;
    }

    /**
     * @param SearchBooleanField $isPreferredVendor
     * @return ItemSearchBasic
     */
    public function setIsPreferredVendor(SearchBooleanField $isPreferredVendor): ItemSearchBasic
    {
        $this->isPreferredVendor = $isPreferredVendor;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsPreferredVendor(): SearchBooleanField
    {
        return $this->isPreferredVendor;
    }

    /**
     * @param SearchBooleanField $isSerialItem
     * @return ItemSearchBasic
     */
    public function setIsSerialItem(SearchBooleanField $isSerialItem): ItemSearchBasic
    {
        $this->isSerialItem = $isSerialItem;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsSerialItem(): SearchBooleanField
    {
        return $this->isSerialItem;
    }

    /**
     * @param SearchBooleanField $isSpecialOrderItem
     * @return ItemSearchBasic
     */
    public function setIsSpecialOrderItem(SearchBooleanField $isSpecialOrderItem): ItemSearchBasic
    {
        $this->isSpecialOrderItem = $isSpecialOrderItem;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsSpecialOrderItem(): SearchBooleanField
    {
        return $this->isSpecialOrderItem;
    }

    /**
     * @param SearchBooleanField $isSpecialWorkOrderItem
     * @return ItemSearchBasic
     */
    public function setIsSpecialWorkOrderItem(SearchBooleanField $isSpecialWorkOrderItem): ItemSearchBasic
    {
        $this->isSpecialWorkOrderItem = $isSpecialWorkOrderItem;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsSpecialWorkOrderItem(): SearchBooleanField
    {
        return $this->isSpecialWorkOrderItem;
    }

    /**
     * @param SearchBooleanField $isStorePickupAllowed
     * @return ItemSearchBasic
     */
    public function setIsStorePickupAllowed(SearchBooleanField $isStorePickupAllowed): ItemSearchBasic
    {
        $this->isStorePickupAllowed = $isStorePickupAllowed;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsStorePickupAllowed(): SearchBooleanField
    {
        return $this->isStorePickupAllowed;
    }

    /**
     * @param SearchMultiSelectField $issueProduct
     * @return ItemSearchBasic
     */
    public function setIssueProduct(SearchMultiSelectField $issueProduct): ItemSearchBasic
    {
        $this->issueProduct = $issueProduct;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getIssueProduct(): SearchMultiSelectField
    {
        return $this->issueProduct;
    }

    /**
     * @param SearchBooleanField $isTaxable
     * @return ItemSearchBasic
     */
    public function setIsTaxable(SearchBooleanField $isTaxable): ItemSearchBasic
    {
        $this->isTaxable = $isTaxable;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsTaxable(): SearchBooleanField
    {
        return $this->isTaxable;
    }

    /**
     * @param SearchBooleanField $isVsoeBundle
     * @return ItemSearchBasic
     */
    public function setIsVsoeBundle(SearchBooleanField $isVsoeBundle): ItemSearchBasic
    {
        $this->isVsoeBundle = $isVsoeBundle;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsVsoeBundle(): SearchBooleanField
    {
        return $this->isVsoeBundle;
    }

    /**
     * @param SearchBooleanField $isWip
     * @return ItemSearchBasic
     */
    public function setIsWip(SearchBooleanField $isWip): ItemSearchBasic
    {
        $this->isWip = $isWip;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsWip(): SearchBooleanField
    {
        return $this->isWip;
    }

    /**
     * @param SearchStringField $itemId
     * @return ItemSearchBasic
     */
    public function setItemId(SearchStringField $itemId): ItemSearchBasic
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getItemId(): SearchStringField
    {
        return $this->itemId;
    }

    /**
     * @param SearchMultiSelectField $itemRevenueCategory
     * @return ItemSearchBasic
     */
    public function setItemRevenueCategory(SearchMultiSelectField $itemRevenueCategory): ItemSearchBasic
    {
        $this->itemRevenueCategory = $itemRevenueCategory;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItemRevenueCategory(): SearchMultiSelectField
    {
        return $this->itemRevenueCategory;
    }

    /**
     * @param SearchStringField $itemUrl
     * @return ItemSearchBasic
     */
    public function setItemUrl(SearchStringField $itemUrl): ItemSearchBasic
    {
        $this->itemUrl = $itemUrl;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getItemUrl(): SearchStringField
    {
        return $this->itemUrl;
    }

    /**
     * @param SearchDateField $lastInvtCountDate
     * @return ItemSearchBasic
     */
    public function setLastInvtCountDate(SearchDateField $lastInvtCountDate): ItemSearchBasic
    {
        $this->lastInvtCountDate = $lastInvtCountDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastInvtCountDate(): SearchDateField
    {
        return $this->lastInvtCountDate;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return ItemSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): ItemSearchBasic
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModifiedDate(): SearchDateField
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param SearchDoubleField $lastPurchasePrice
     * @return ItemSearchBasic
     */
    public function setLastPurchasePrice(SearchDoubleField $lastPurchasePrice): ItemSearchBasic
    {
        $this->lastPurchasePrice = $lastPurchasePrice;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLastPurchasePrice(): SearchDoubleField
    {
        return $this->lastPurchasePrice;
    }

    /**
     * @param SearchDateField $lastQuantityAvailableChange
     * @return ItemSearchBasic
     */
    public function setLastQuantityAvailableChange(SearchDateField $lastQuantityAvailableChange): ItemSearchBasic
    {
        $this->lastQuantityAvailableChange = $lastQuantityAvailableChange;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastQuantityAvailableChange(): SearchDateField
    {
        return $this->lastQuantityAvailableChange;
    }

    /**
     * @param SearchLongField $leadTime
     * @return ItemSearchBasic
     */
    public function setLeadTime(SearchLongField $leadTime): ItemSearchBasic
    {
        $this->leadTime = $leadTime;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLeadTime(): SearchLongField
    {
        return $this->leadTime;
    }

    /**
     * @param SearchEnumMultiSelectField $listingDuration
     * @return ItemSearchBasic
     */
    public function setListingDuration(SearchEnumMultiSelectField $listingDuration): ItemSearchBasic
    {
        $this->listingDuration = $listingDuration;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getListingDuration(): SearchEnumMultiSelectField
    {
        return $this->listingDuration;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return ItemSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): ItemSearchBasic
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation(): SearchMultiSelectField
    {
        return $this->location;
    }

    /**
     * @param SearchBooleanField $locationAllowStorePickup
     * @return ItemSearchBasic
     */
    public function setLocationAllowStorePickup(SearchBooleanField $locationAllowStorePickup): ItemSearchBasic
    {
        $this->locationAllowStorePickup = $locationAllowStorePickup;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getLocationAllowStorePickup(): SearchBooleanField
    {
        return $this->locationAllowStorePickup;
    }

    /**
     * @param SearchDoubleField $locationAtpLeadTime
     * @return ItemSearchBasic
     */
    public function setLocationAtpLeadTime(SearchDoubleField $locationAtpLeadTime): ItemSearchBasic
    {
        $this->locationAtpLeadTime = $locationAtpLeadTime;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationAtpLeadTime(): SearchDoubleField
    {
        return $this->locationAtpLeadTime;
    }

    /**
     * @param SearchDoubleField $locationAverageCost
     * @return ItemSearchBasic
     */
    public function setLocationAverageCost(SearchDoubleField $locationAverageCost): ItemSearchBasic
    {
        $this->locationAverageCost = $locationAverageCost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationAverageCost(): SearchDoubleField
    {
        return $this->locationAverageCost;
    }

    /**
     * @param SearchDoubleField $locationBuildTime
     * @return ItemSearchBasic
     */
    public function setLocationBuildTime(SearchDoubleField $locationBuildTime): ItemSearchBasic
    {
        $this->locationBuildTime = $locationBuildTime;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationBuildTime(): SearchDoubleField
    {
        return $this->locationBuildTime;
    }

    /**
     * @param SearchDoubleField $locationCost
     * @return ItemSearchBasic
     */
    public function setLocationCost(SearchDoubleField $locationCost): ItemSearchBasic
    {
        $this->locationCost = $locationCost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationCost(): SearchDoubleField
    {
        return $this->locationCost;
    }

    /**
     * @param SearchEnumMultiSelectField $locationCostAccountingStatus
     * @return ItemSearchBasic
     */
    public function setLocationCostAccountingStatus(SearchEnumMultiSelectField $locationCostAccountingStatus): ItemSearchBasic
    {
        $this->locationCostAccountingStatus = $locationCostAccountingStatus;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLocationCostAccountingStatus(): SearchEnumMultiSelectField
    {
        return $this->locationCostAccountingStatus;
    }

    /**
     * @param SearchDoubleField $locationDefaultReturnCost
     * @return ItemSearchBasic
     */
    public function setLocationDefaultReturnCost(SearchDoubleField $locationDefaultReturnCost): ItemSearchBasic
    {
        $this->locationDefaultReturnCost = $locationDefaultReturnCost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationDefaultReturnCost(): SearchDoubleField
    {
        return $this->locationDefaultReturnCost;
    }

    /**
     * @param SearchEnumMultiSelectField $locationDemandSource
     * @return ItemSearchBasic
     */
    public function setLocationDemandSource(SearchEnumMultiSelectField $locationDemandSource): ItemSearchBasic
    {
        $this->locationDemandSource = $locationDemandSource;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLocationDemandSource(): SearchEnumMultiSelectField
    {
        return $this->locationDemandSource;
    }

    /**
     * @param SearchLongField $locationDemandTimeFence
     * @return ItemSearchBasic
     */
    public function setLocationDemandTimeFence(SearchLongField $locationDemandTimeFence): ItemSearchBasic
    {
        $this->locationDemandTimeFence = $locationDemandTimeFence;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLocationDemandTimeFence(): SearchLongField
    {
        return $this->locationDemandTimeFence;
    }

    /**
     * @param SearchDoubleField $locationFixedLotSize
     * @return ItemSearchBasic
     */
    public function setLocationFixedLotSize(SearchDoubleField $locationFixedLotSize): ItemSearchBasic
    {
        $this->locationFixedLotSize = $locationFixedLotSize;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationFixedLotSize(): SearchDoubleField
    {
        return $this->locationFixedLotSize;
    }

    /**
     * @param SearchMultiSelectField $locationInventoryCostTemplate
     * @return ItemSearchBasic
     */
    public function setLocationInventoryCostTemplate(SearchMultiSelectField $locationInventoryCostTemplate): ItemSearchBasic
    {
        $this->locationInventoryCostTemplate = $locationInventoryCostTemplate;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocationInventoryCostTemplate(): SearchMultiSelectField
    {
        return $this->locationInventoryCostTemplate;
    }

    /**
     * @param SearchEnumMultiSelectField $locationInvtClassification
     * @return ItemSearchBasic
     */
    public function setLocationInvtClassification(SearchEnumMultiSelectField $locationInvtClassification): ItemSearchBasic
    {
        $this->locationInvtClassification = $locationInvtClassification;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLocationInvtClassification(): SearchEnumMultiSelectField
    {
        return $this->locationInvtClassification;
    }

    /**
     * @param SearchLongField $locationInvtCountInterval
     * @return ItemSearchBasic
     */
    public function setLocationInvtCountInterval(SearchLongField $locationInvtCountInterval): ItemSearchBasic
    {
        $this->locationInvtCountInterval = $locationInvtCountInterval;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLocationInvtCountInterval(): SearchLongField
    {
        return $this->locationInvtCountInterval;
    }

    /**
     * @param SearchDateField $locationLastInvtCountDate
     * @return ItemSearchBasic
     */
    public function setLocationLastInvtCountDate(SearchDateField $locationLastInvtCountDate): ItemSearchBasic
    {
        $this->locationLastInvtCountDate = $locationLastInvtCountDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLocationLastInvtCountDate(): SearchDateField
    {
        return $this->locationLastInvtCountDate;
    }

    /**
     * @param SearchLongField $locationLeadTime
     * @return ItemSearchBasic
     */
    public function setLocationLeadTime(SearchLongField $locationLeadTime): ItemSearchBasic
    {
        $this->locationLeadTime = $locationLeadTime;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLocationLeadTime(): SearchLongField
    {
        return $this->locationLeadTime;
    }

    /**
     * @param SearchDateField $locationNextInvtCountDate
     * @return ItemSearchBasic
     */
    public function setLocationNextInvtCountDate(SearchDateField $locationNextInvtCountDate): ItemSearchBasic
    {
        $this->locationNextInvtCountDate = $locationNextInvtCountDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLocationNextInvtCountDate(): SearchDateField
    {
        return $this->locationNextInvtCountDate;
    }

    /**
     * @param SearchLongField $locationPeriodicLotSizeDays
     * @return ItemSearchBasic
     */
    public function setLocationPeriodicLotSizeDays(SearchLongField $locationPeriodicLotSizeDays): ItemSearchBasic
    {
        $this->locationPeriodicLotSizeDays = $locationPeriodicLotSizeDays;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLocationPeriodicLotSizeDays(): SearchLongField
    {
        return $this->locationPeriodicLotSizeDays;
    }

    /**
     * @param SearchEnumMultiSelectField $locationPeriodicLotSizeType
     * @return ItemSearchBasic
     */
    public function setLocationPeriodicLotSizeType(SearchEnumMultiSelectField $locationPeriodicLotSizeType): ItemSearchBasic
    {
        $this->locationPeriodicLotSizeType = $locationPeriodicLotSizeType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLocationPeriodicLotSizeType(): SearchEnumMultiSelectField
    {
        return $this->locationPeriodicLotSizeType;
    }

    /**
     * @param SearchDoubleField $locationPreferredStockLevel
     * @return ItemSearchBasic
     */
    public function setLocationPreferredStockLevel(SearchDoubleField $locationPreferredStockLevel): ItemSearchBasic
    {
        $this->locationPreferredStockLevel = $locationPreferredStockLevel;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationPreferredStockLevel(): SearchDoubleField
    {
        return $this->locationPreferredStockLevel;
    }

    /**
     * @param SearchDoubleField $locationQtyAvailForStorePickup
     * @return ItemSearchBasic
     */
    public function setLocationQtyAvailForStorePickup(SearchDoubleField $locationQtyAvailForStorePickup): ItemSearchBasic
    {
        $this->locationQtyAvailForStorePickup = $locationQtyAvailForStorePickup;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationQtyAvailForStorePickup(): SearchDoubleField
    {
        return $this->locationQtyAvailForStorePickup;
    }

    /**
     * @param SearchDoubleField $locationQuantityAvailable
     * @return ItemSearchBasic
     */
    public function setLocationQuantityAvailable(SearchDoubleField $locationQuantityAvailable): ItemSearchBasic
    {
        $this->locationQuantityAvailable = $locationQuantityAvailable;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationQuantityAvailable(): SearchDoubleField
    {
        return $this->locationQuantityAvailable;
    }

    /**
     * @param SearchDoubleField $locationQuantityBackOrdered
     * @return ItemSearchBasic
     */
    public function setLocationQuantityBackOrdered(SearchDoubleField $locationQuantityBackOrdered): ItemSearchBasic
    {
        $this->locationQuantityBackOrdered = $locationQuantityBackOrdered;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationQuantityBackOrdered(): SearchDoubleField
    {
        return $this->locationQuantityBackOrdered;
    }

    /**
     * @param SearchDoubleField $locationQuantityCommitted
     * @return ItemSearchBasic
     */
    public function setLocationQuantityCommitted(SearchDoubleField $locationQuantityCommitted): ItemSearchBasic
    {
        $this->locationQuantityCommitted = $locationQuantityCommitted;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationQuantityCommitted(): SearchDoubleField
    {
        return $this->locationQuantityCommitted;
    }

    /**
     * @param SearchDoubleField $locationQuantityInTransit
     * @return ItemSearchBasic
     */
    public function setLocationQuantityInTransit(SearchDoubleField $locationQuantityInTransit): ItemSearchBasic
    {
        $this->locationQuantityInTransit = $locationQuantityInTransit;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationQuantityInTransit(): SearchDoubleField
    {
        return $this->locationQuantityInTransit;
    }

    /**
     * @param SearchDoubleField $locationQuantityOnHand
     * @return ItemSearchBasic
     */
    public function setLocationQuantityOnHand(SearchDoubleField $locationQuantityOnHand): ItemSearchBasic
    {
        $this->locationQuantityOnHand = $locationQuantityOnHand;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationQuantityOnHand(): SearchDoubleField
    {
        return $this->locationQuantityOnHand;
    }

    /**
     * @param SearchDoubleField $locationQuantityOnOrder
     * @return ItemSearchBasic
     */
    public function setLocationQuantityOnOrder(SearchDoubleField $locationQuantityOnOrder): ItemSearchBasic
    {
        $this->locationQuantityOnOrder = $locationQuantityOnOrder;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationQuantityOnOrder(): SearchDoubleField
    {
        return $this->locationQuantityOnOrder;
    }

    /**
     * @param SearchDoubleField $locationReorderPoint
     * @return ItemSearchBasic
     */
    public function setLocationReorderPoint(SearchDoubleField $locationReorderPoint): ItemSearchBasic
    {
        $this->locationReorderPoint = $locationReorderPoint;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationReorderPoint(): SearchDoubleField
    {
        return $this->locationReorderPoint;
    }

    /**
     * @param SearchLongField $locationRescheduleInDays
     * @return ItemSearchBasic
     */
    public function setLocationRescheduleInDays(SearchLongField $locationRescheduleInDays): ItemSearchBasic
    {
        $this->locationRescheduleInDays = $locationRescheduleInDays;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLocationRescheduleInDays(): SearchLongField
    {
        return $this->locationRescheduleInDays;
    }

    /**
     * @param SearchLongField $locationRescheduleOutDays
     * @return ItemSearchBasic
     */
    public function setLocationRescheduleOutDays(SearchLongField $locationRescheduleOutDays): ItemSearchBasic
    {
        $this->locationRescheduleOutDays = $locationRescheduleOutDays;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLocationRescheduleOutDays(): SearchLongField
    {
        return $this->locationRescheduleOutDays;
    }

    /**
     * @param SearchDoubleField $locationSafetyStockLevel
     * @return ItemSearchBasic
     */
    public function setLocationSafetyStockLevel(SearchDoubleField $locationSafetyStockLevel): ItemSearchBasic
    {
        $this->locationSafetyStockLevel = $locationSafetyStockLevel;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationSafetyStockLevel(): SearchDoubleField
    {
        return $this->locationSafetyStockLevel;
    }

    /**
     * @param SearchDoubleField $locationStorePickupBufferStock
     * @return ItemSearchBasic
     */
    public function setLocationStorePickupBufferStock(SearchDoubleField $locationStorePickupBufferStock): ItemSearchBasic
    {
        $this->locationStorePickupBufferStock = $locationStorePickupBufferStock;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationStorePickupBufferStock(): SearchDoubleField
    {
        return $this->locationStorePickupBufferStock;
    }

    /**
     * @param SearchEnumMultiSelectField $locationSupplyLotSizingMethod
     * @return ItemSearchBasic
     */
    public function setLocationSupplyLotSizingMethod(SearchEnumMultiSelectField $locationSupplyLotSizingMethod): ItemSearchBasic
    {
        $this->locationSupplyLotSizingMethod = $locationSupplyLotSizingMethod;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLocationSupplyLotSizingMethod(): SearchEnumMultiSelectField
    {
        return $this->locationSupplyLotSizingMethod;
    }

    /**
     * @param SearchLongField $locationSupplyTimeFence
     * @return ItemSearchBasic
     */
    public function setLocationSupplyTimeFence(SearchLongField $locationSupplyTimeFence): ItemSearchBasic
    {
        $this->locationSupplyTimeFence = $locationSupplyTimeFence;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLocationSupplyTimeFence(): SearchLongField
    {
        return $this->locationSupplyTimeFence;
    }

    /**
     * @param SearchEnumMultiSelectField $locationSupplyType
     * @return ItemSearchBasic
     */
    public function setLocationSupplyType(SearchEnumMultiSelectField $locationSupplyType): ItemSearchBasic
    {
        $this->locationSupplyType = $locationSupplyType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLocationSupplyType(): SearchEnumMultiSelectField
    {
        return $this->locationSupplyType;
    }

    /**
     * @param SearchDoubleField $locationTotalValue
     * @return ItemSearchBasic
     */
    public function setLocationTotalValue(SearchDoubleField $locationTotalValue): ItemSearchBasic
    {
        $this->locationTotalValue = $locationTotalValue;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationTotalValue(): SearchDoubleField
    {
        return $this->locationTotalValue;
    }

    /**
     * @param SearchLongField $locBackwardConsumptionDays
     * @return ItemSearchBasic
     */
    public function setLocBackwardConsumptionDays(SearchLongField $locBackwardConsumptionDays): ItemSearchBasic
    {
        $this->locBackwardConsumptionDays = $locBackwardConsumptionDays;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLocBackwardConsumptionDays(): SearchLongField
    {
        return $this->locBackwardConsumptionDays;
    }

    /**
     * @param SearchLongField $locForwardConsumptionDays
     * @return ItemSearchBasic
     */
    public function setLocForwardConsumptionDays(SearchLongField $locForwardConsumptionDays): ItemSearchBasic
    {
        $this->locForwardConsumptionDays = $locForwardConsumptionDays;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLocForwardConsumptionDays(): SearchLongField
    {
        return $this->locForwardConsumptionDays;
    }

    /**
     * @param SearchDoubleField $lowerWarningLimit
     * @return ItemSearchBasic
     */
    public function setLowerWarningLimit(SearchDoubleField $lowerWarningLimit): ItemSearchBasic
    {
        $this->lowerWarningLimit = $lowerWarningLimit;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLowerWarningLimit(): SearchDoubleField
    {
        return $this->lowerWarningLimit;
    }

    /**
     * @param SearchStringField $manufacturer
     * @return ItemSearchBasic
     */
    public function setManufacturer(SearchStringField $manufacturer): ItemSearchBasic
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getManufacturer(): SearchStringField
    {
        return $this->manufacturer;
    }

    /**
     * @param SearchStringField $manufacturerCity
     * @return ItemSearchBasic
     */
    public function setManufacturerCity(SearchStringField $manufacturerCity): ItemSearchBasic
    {
        $this->manufacturerCity = $manufacturerCity;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getManufacturerCity(): SearchStringField
    {
        return $this->manufacturerCity;
    }

    /**
     * @param SearchStringField $manufacturerState
     * @return ItemSearchBasic
     */
    public function setManufacturerState(SearchStringField $manufacturerState): ItemSearchBasic
    {
        $this->manufacturerState = $manufacturerState;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getManufacturerState(): SearchStringField
    {
        return $this->manufacturerState;
    }

    /**
     * @param SearchStringField $manufacturerTariff
     * @return ItemSearchBasic
     */
    public function setManufacturerTariff(SearchStringField $manufacturerTariff): ItemSearchBasic
    {
        $this->manufacturerTariff = $manufacturerTariff;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getManufacturerTariff(): SearchStringField
    {
        return $this->manufacturerTariff;
    }

    /**
     * @param SearchStringField $manufacturerTaxId
     * @return ItemSearchBasic
     */
    public function setManufacturerTaxId(SearchStringField $manufacturerTaxId): ItemSearchBasic
    {
        $this->manufacturerTaxId = $manufacturerTaxId;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getManufacturerTaxId(): SearchStringField
    {
        return $this->manufacturerTaxId;
    }

    /**
     * @param SearchStringField $manufacturerZip
     * @return ItemSearchBasic
     */
    public function setManufacturerZip(SearchStringField $manufacturerZip): ItemSearchBasic
    {
        $this->manufacturerZip = $manufacturerZip;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getManufacturerZip(): SearchStringField
    {
        return $this->manufacturerZip;
    }

    /**
     * @param SearchBooleanField $manufacturingChargeItem
     * @return ItemSearchBasic
     */
    public function setManufacturingChargeItem(SearchBooleanField $manufacturingChargeItem): ItemSearchBasic
    {
        $this->manufacturingChargeItem = $manufacturingChargeItem;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getManufacturingChargeItem(): SearchBooleanField
    {
        return $this->manufacturingChargeItem;
    }

    /**
     * @param SearchBooleanField $matchBillToReceipt
     * @return ItemSearchBasic
     */
    public function setMatchBillToReceipt(SearchBooleanField $matchBillToReceipt): ItemSearchBasic
    {
        $this->matchBillToReceipt = $matchBillToReceipt;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMatchBillToReceipt(): SearchBooleanField
    {
        return $this->matchBillToReceipt;
    }

    /**
     * @param SearchBooleanField $matrix
     * @return ItemSearchBasic
     */
    public function setMatrix(SearchBooleanField $matrix): ItemSearchBasic
    {
        $this->matrix = $matrix;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMatrix(): SearchBooleanField
    {
        return $this->matrix;
    }

    /**
     * @param SearchBooleanField $matrixChild
     * @return ItemSearchBasic
     */
    public function setMatrixChild(SearchBooleanField $matrixChild): ItemSearchBasic
    {
        $this->matrixChild = $matrixChild;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMatrixChild(): SearchBooleanField
    {
        return $this->matrixChild;
    }

    /**
     * @param SearchLongField $maximumQuantity
     * @return ItemSearchBasic
     */
    public function setMaximumQuantity(SearchLongField $maximumQuantity): ItemSearchBasic
    {
        $this->maximumQuantity = $maximumQuantity;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getMaximumQuantity(): SearchLongField
    {
        return $this->maximumQuantity;
    }

    /**
     * @param SearchStringField $metaTagHtml
     * @return ItemSearchBasic
     */
    public function setMetaTagHtml(SearchStringField $metaTagHtml): ItemSearchBasic
    {
        $this->metaTagHtml = $metaTagHtml;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMetaTagHtml(): SearchStringField
    {
        return $this->metaTagHtml;
    }

    /**
     * @param SearchLongField $minimumQuantity
     * @return ItemSearchBasic
     */
    public function setMinimumQuantity(SearchLongField $minimumQuantity): ItemSearchBasic
    {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getMinimumQuantity(): SearchLongField
    {
        return $this->minimumQuantity;
    }

    /**
     * @param SearchBooleanField $mossApplies
     * @return ItemSearchBasic
     */
    public function setMossApplies(SearchBooleanField $mossApplies): ItemSearchBasic
    {
        $this->mossApplies = $mossApplies;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMossApplies(): SearchBooleanField
    {
        return $this->mossApplies;
    }

    /**
     * @param SearchStringField $mpn
     * @return ItemSearchBasic
     */
    public function setMpn(SearchStringField $mpn): ItemSearchBasic
    {
        $this->mpn = $mpn;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMpn(): SearchStringField
    {
        return $this->mpn;
    }

    /**
     * @param SearchBooleanField $multManufactureAddr
     * @return ItemSearchBasic
     */
    public function setMultManufactureAddr(SearchBooleanField $multManufactureAddr): ItemSearchBasic
    {
        $this->multManufactureAddr = $multManufactureAddr;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMultManufactureAddr(): SearchBooleanField
    {
        return $this->multManufactureAddr;
    }

    /**
     * @param SearchStringField $nexTagCategory
     * @return ItemSearchBasic
     */
    public function setNexTagCategory(SearchStringField $nexTagCategory): ItemSearchBasic
    {
        $this->nexTagCategory = $nexTagCategory;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getNexTagCategory(): SearchStringField
    {
        return $this->nexTagCategory;
    }

    /**
     * @param SearchBooleanField $nexTagProductFeed
     * @return ItemSearchBasic
     */
    public function setNexTagProductFeed(SearchBooleanField $nexTagProductFeed): ItemSearchBasic
    {
        $this->nexTagProductFeed = $nexTagProductFeed;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getNexTagProductFeed(): SearchBooleanField
    {
        return $this->nexTagProductFeed;
    }

    /**
     * @param SearchDateField $nextInvtCountDate
     * @return ItemSearchBasic
     */
    public function setNextInvtCountDate(SearchDateField $nextInvtCountDate): ItemSearchBasic
    {
        $this->nextInvtCountDate = $nextInvtCountDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getNextInvtCountDate(): SearchDateField
    {
        return $this->nextInvtCountDate;
    }

    /**
     * @param SearchLongField $numActiveListings
     * @return ItemSearchBasic
     */
    public function setNumActiveListings(SearchLongField $numActiveListings): ItemSearchBasic
    {
        $this->numActiveListings = $numActiveListings;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getNumActiveListings(): SearchLongField
    {
        return $this->numActiveListings;
    }

    /**
     * @param SearchDoubleField $numberAllowedDownloads
     * @return ItemSearchBasic
     */
    public function setNumberAllowedDownloads(SearchDoubleField $numberAllowedDownloads): ItemSearchBasic
    {
        $this->numberAllowedDownloads = $numberAllowedDownloads;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getNumberAllowedDownloads(): SearchDoubleField
    {
        return $this->numberAllowedDownloads;
    }

    /**
     * @param SearchLongField $numCurrentlyListed
     * @return ItemSearchBasic
     */
    public function setNumCurrentlyListed(SearchLongField $numCurrentlyListed): ItemSearchBasic
    {
        $this->numCurrentlyListed = $numCurrentlyListed;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getNumCurrentlyListed(): SearchLongField
    {
        return $this->numCurrentlyListed;
    }

    /**
     * @param SearchDateField $obsoleteDate
     * @return ItemSearchBasic
     */
    public function setObsoleteDate(SearchDateField $obsoleteDate): ItemSearchBasic
    {
        $this->obsoleteDate = $obsoleteDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getObsoleteDate(): SearchDateField
    {
        return $this->obsoleteDate;
    }

    /**
     * @param SearchMultiSelectField $obsoleteRevision
     * @return ItemSearchBasic
     */
    public function setObsoleteRevision(SearchMultiSelectField $obsoleteRevision): ItemSearchBasic
    {
        $this->obsoleteRevision = $obsoleteRevision;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getObsoleteRevision(): SearchMultiSelectField
    {
        return $this->obsoleteRevision;
    }

    /**
     * @param SearchBooleanField $offerSupport
     * @return ItemSearchBasic
     */
    public function setOfferSupport(SearchBooleanField $offerSupport): ItemSearchBasic
    {
        $this->offerSupport = $offerSupport;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getOfferSupport(): SearchBooleanField
    {
        return $this->offerSupport;
    }

    /**
     * @param SearchDoubleField $onlineCustomerPrice
     * @return ItemSearchBasic
     */
    public function setOnlineCustomerPrice(SearchDoubleField $onlineCustomerPrice): ItemSearchBasic
    {
        $this->onlineCustomerPrice = $onlineCustomerPrice;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getOnlineCustomerPrice(): SearchDoubleField
    {
        return $this->onlineCustomerPrice;
    }

    /**
     * @param SearchBooleanField $onSpecial
     * @return ItemSearchBasic
     */
    public function setOnSpecial(SearchBooleanField $onSpecial): ItemSearchBasic
    {
        $this->onSpecial = $onSpecial;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getOnSpecial(): SearchBooleanField
    {
        return $this->onSpecial;
    }

    /**
     * @param SearchMultiSelectField $otherVendor
     * @return ItemSearchBasic
     */
    public function setOtherVendor(SearchMultiSelectField $otherVendor): ItemSearchBasic
    {
        $this->otherVendor = $otherVendor;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOtherVendor(): SearchMultiSelectField
    {
        return $this->otherVendor;
    }

    /**
     * @param SearchMultiSelectField $outOfStockBehavior
     * @return ItemSearchBasic
     */
    public function setOutOfStockBehavior(SearchMultiSelectField $outOfStockBehavior): ItemSearchBasic
    {
        $this->outOfStockBehavior = $outOfStockBehavior;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOutOfStockBehavior(): SearchMultiSelectField
    {
        return $this->outOfStockBehavior;
    }

    /**
     * @param SearchEnumMultiSelectField $overallQuantityPricingType
     * @return ItemSearchBasic
     */
    public function setOverallQuantityPricingType(SearchEnumMultiSelectField $overallQuantityPricingType): ItemSearchBasic
    {
        $this->overallQuantityPricingType = $overallQuantityPricingType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getOverallQuantityPricingType(): SearchEnumMultiSelectField
    {
        return $this->overallQuantityPricingType;
    }

    /**
     * @param SearchEnumMultiSelectField $overheadType
     * @return ItemSearchBasic
     */
    public function setOverheadType(SearchEnumMultiSelectField $overheadType): ItemSearchBasic
    {
        $this->overheadType = $overheadType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getOverheadType(): SearchEnumMultiSelectField
    {
        return $this->overheadType;
    }

    /**
     * @param SearchStringField $pageTitle
     * @return ItemSearchBasic
     */
    public function setPageTitle(SearchStringField $pageTitle): ItemSearchBasic
    {
        $this->pageTitle = $pageTitle;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPageTitle(): SearchStringField
    {
        return $this->pageTitle;
    }

    /**
     * @param SearchMultiSelectField $parent
     * @return ItemSearchBasic
     */
    public function setParent(SearchMultiSelectField $parent): ItemSearchBasic
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getParent(): SearchMultiSelectField
    {
        return $this->parent;
    }

    /**
     * @param SearchLongField $periodicLotSizeDays
     * @return ItemSearchBasic
     */
    public function setPeriodicLotSizeDays(SearchLongField $periodicLotSizeDays): ItemSearchBasic
    {
        $this->periodicLotSizeDays = $periodicLotSizeDays;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPeriodicLotSizeDays(): SearchLongField
    {
        return $this->periodicLotSizeDays;
    }

    /**
     * @param SearchEnumMultiSelectField $periodicLotSizeType
     * @return ItemSearchBasic
     */
    public function setPeriodicLotSizeType(SearchEnumMultiSelectField $periodicLotSizeType): ItemSearchBasic
    {
        $this->periodicLotSizeType = $periodicLotSizeType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getPeriodicLotSizeType(): SearchEnumMultiSelectField
    {
        return $this->periodicLotSizeType;
    }

    /**
     * @param SearchStringField $preferenceCriterion
     * @return ItemSearchBasic
     */
    public function setPreferenceCriterion(SearchStringField $preferenceCriterion): ItemSearchBasic
    {
        $this->preferenceCriterion = $preferenceCriterion;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPreferenceCriterion(): SearchStringField
    {
        return $this->preferenceCriterion;
    }

    /**
     * @param SearchBooleanField $preferredBin
     * @return ItemSearchBasic
     */
    public function setPreferredBin(SearchBooleanField $preferredBin): ItemSearchBasic
    {
        $this->preferredBin = $preferredBin;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPreferredBin(): SearchBooleanField
    {
        return $this->preferredBin;
    }

    /**
     * @param SearchMultiSelectField $preferredLocation
     * @return ItemSearchBasic
     */
    public function setPreferredLocation(SearchMultiSelectField $preferredLocation): ItemSearchBasic
    {
        $this->preferredLocation = $preferredLocation;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPreferredLocation(): SearchMultiSelectField
    {
        return $this->preferredLocation;
    }

    /**
     * @param SearchDoubleField $preferredStockLevel
     * @return ItemSearchBasic
     */
    public function setPreferredStockLevel(SearchDoubleField $preferredStockLevel): ItemSearchBasic
    {
        $this->preferredStockLevel = $preferredStockLevel;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPreferredStockLevel(): SearchDoubleField
    {
        return $this->preferredStockLevel;
    }

    /**
     * @param SearchLongField $preferredStockLevelDays
     * @return ItemSearchBasic
     */
    public function setPreferredStockLevelDays(SearchLongField $preferredStockLevelDays): ItemSearchBasic
    {
        $this->preferredStockLevelDays = $preferredStockLevelDays;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPreferredStockLevelDays(): SearchLongField
    {
        return $this->preferredStockLevelDays;
    }

    /**
     * @param SearchDoubleField $price
     * @return ItemSearchBasic
     */
    public function setPrice(SearchDoubleField $price): ItemSearchBasic
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPrice(): SearchDoubleField
    {
        return $this->price;
    }

    /**
     * @param SearchBooleanField $pricesIncludeTax
     * @return ItemSearchBasic
     */
    public function setPricesIncludeTax(SearchBooleanField $pricesIncludeTax): ItemSearchBasic
    {
        $this->pricesIncludeTax = $pricesIncludeTax;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPricesIncludeTax(): SearchBooleanField
    {
        return $this->pricesIncludeTax;
    }

    /**
     * @param SearchMultiSelectField $pricingGroup
     * @return ItemSearchBasic
     */
    public function setPricingGroup(SearchMultiSelectField $pricingGroup): ItemSearchBasic
    {
        $this->pricingGroup = $pricingGroup;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPricingGroup(): SearchMultiSelectField
    {
        return $this->pricingGroup;
    }

    /**
     * @param SearchLongField $primaryCategory
     * @return ItemSearchBasic
     */
    public function setPrimaryCategory(SearchLongField $primaryCategory): ItemSearchBasic
    {
        $this->primaryCategory = $primaryCategory;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPrimaryCategory(): SearchLongField
    {
        return $this->primaryCategory;
    }

    /**
     * @param SearchDoubleField $purchaseOrderAmount
     * @return ItemSearchBasic
     */
    public function setPurchaseOrderAmount(SearchDoubleField $purchaseOrderAmount): ItemSearchBasic
    {
        $this->purchaseOrderAmount = $purchaseOrderAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPurchaseOrderAmount(): SearchDoubleField
    {
        return $this->purchaseOrderAmount;
    }

    /**
     * @param SearchDoubleField $purchaseOrderQuantity
     * @return ItemSearchBasic
     */
    public function setPurchaseOrderQuantity(SearchDoubleField $purchaseOrderQuantity): ItemSearchBasic
    {
        $this->purchaseOrderQuantity = $purchaseOrderQuantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPurchaseOrderQuantity(): SearchDoubleField
    {
        return $this->purchaseOrderQuantity;
    }

    /**
     * @param SearchDoubleField $purchaseOrderQuantityDiff
     * @return ItemSearchBasic
     */
    public function setPurchaseOrderQuantityDiff(SearchDoubleField $purchaseOrderQuantityDiff): ItemSearchBasic
    {
        $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPurchaseOrderQuantityDiff(): SearchDoubleField
    {
        return $this->purchaseOrderQuantityDiff;
    }

    /**
     * @param SearchMultiSelectField $purchaseUnit
     * @return ItemSearchBasic
     */
    public function setPurchaseUnit(SearchMultiSelectField $purchaseUnit): ItemSearchBasic
    {
        $this->purchaseUnit = $purchaseUnit;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPurchaseUnit(): SearchMultiSelectField
    {
        return $this->purchaseUnit;
    }

    /**
     * @param SearchDoubleField $quantityAvailable
     * @return ItemSearchBasic
     */
    public function setQuantityAvailable(SearchDoubleField $quantityAvailable): ItemSearchBasic
    {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityAvailable(): SearchDoubleField
    {
        return $this->quantityAvailable;
    }

    /**
     * @param SearchDoubleField $quantityBackOrdered
     * @return ItemSearchBasic
     */
    public function setQuantityBackOrdered(SearchDoubleField $quantityBackOrdered): ItemSearchBasic
    {
        $this->quantityBackOrdered = $quantityBackOrdered;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityBackOrdered(): SearchDoubleField
    {
        return $this->quantityBackOrdered;
    }

    /**
     * @param SearchDoubleField $quantityCommitted
     * @return ItemSearchBasic
     */
    public function setQuantityCommitted(SearchDoubleField $quantityCommitted): ItemSearchBasic
    {
        $this->quantityCommitted = $quantityCommitted;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityCommitted(): SearchDoubleField
    {
        return $this->quantityCommitted;
    }

    /**
     * @param SearchDoubleField $quantityOnHand
     * @return ItemSearchBasic
     */
    public function setQuantityOnHand(SearchDoubleField $quantityOnHand): ItemSearchBasic
    {
        $this->quantityOnHand = $quantityOnHand;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityOnHand(): SearchDoubleField
    {
        return $this->quantityOnHand;
    }

    /**
     * @param SearchDoubleField $quantityOnOrder
     * @return ItemSearchBasic
     */
    public function setQuantityOnOrder(SearchDoubleField $quantityOnOrder): ItemSearchBasic
    {
        $this->quantityOnOrder = $quantityOnOrder;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityOnOrder(): SearchDoubleField
    {
        return $this->quantityOnOrder;
    }

    /**
     * @param SearchMultiSelectField $quantityPricingSchedule
     * @return ItemSearchBasic
     */
    public function setQuantityPricingSchedule(SearchMultiSelectField $quantityPricingSchedule): ItemSearchBasic
    {
        $this->quantityPricingSchedule = $quantityPricingSchedule;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getQuantityPricingSchedule(): SearchMultiSelectField
    {
        return $this->quantityPricingSchedule;
    }

    /**
     * @param SearchDoubleField $receiptAmount
     * @return ItemSearchBasic
     */
    public function setReceiptAmount(SearchDoubleField $receiptAmount): ItemSearchBasic
    {
        $this->receiptAmount = $receiptAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getReceiptAmount(): SearchDoubleField
    {
        return $this->receiptAmount;
    }

    /**
     * @param SearchDoubleField $receiptQuantity
     * @return ItemSearchBasic
     */
    public function setReceiptQuantity(SearchDoubleField $receiptQuantity): ItemSearchBasic
    {
        $this->receiptQuantity = $receiptQuantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getReceiptQuantity(): SearchDoubleField
    {
        return $this->receiptQuantity;
    }

    /**
     * @param SearchDoubleField $receiptQuantityDiff
     * @return ItemSearchBasic
     */
    public function setReceiptQuantityDiff(SearchDoubleField $receiptQuantityDiff): ItemSearchBasic
    {
        $this->receiptQuantityDiff = $receiptQuantityDiff;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getReceiptQuantityDiff(): SearchDoubleField
    {
        return $this->receiptQuantityDiff;
    }

    /**
     * @param SearchLongField $reorderMultiple
     * @return ItemSearchBasic
     */
    public function setReorderMultiple(SearchLongField $reorderMultiple): ItemSearchBasic
    {
        $this->reorderMultiple = $reorderMultiple;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getReorderMultiple(): SearchLongField
    {
        return $this->reorderMultiple;
    }

    /**
     * @param SearchDoubleField $reorderPoint
     * @return ItemSearchBasic
     */
    public function setReorderPoint(SearchDoubleField $reorderPoint): ItemSearchBasic
    {
        $this->reorderPoint = $reorderPoint;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getReorderPoint(): SearchDoubleField
    {
        return $this->reorderPoint;
    }

    /**
     * @param SearchLongField $rescheduleInDays
     * @return ItemSearchBasic
     */
    public function setRescheduleInDays(SearchLongField $rescheduleInDays): ItemSearchBasic
    {
        $this->rescheduleInDays = $rescheduleInDays;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getRescheduleInDays(): SearchLongField
    {
        return $this->rescheduleInDays;
    }

    /**
     * @param SearchLongField $rescheduleOutDays
     * @return ItemSearchBasic
     */
    public function setRescheduleOutDays(SearchLongField $rescheduleOutDays): ItemSearchBasic
    {
        $this->rescheduleOutDays = $rescheduleOutDays;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getRescheduleOutDays(): SearchLongField
    {
        return $this->rescheduleOutDays;
    }

    /**
     * @param SearchDoubleField $reservePrice
     * @return ItemSearchBasic
     */
    public function setReservePrice(SearchDoubleField $reservePrice): ItemSearchBasic
    {
        $this->reservePrice = $reservePrice;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getReservePrice(): SearchDoubleField
    {
        return $this->reservePrice;
    }

    /**
     * @param SearchMultiSelectField $revenueAllocationGroup
     * @return ItemSearchBasic
     */
    public function setRevenueAllocationGroup(SearchMultiSelectField $revenueAllocationGroup): ItemSearchBasic
    {
        $this->revenueAllocationGroup = $revenueAllocationGroup;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRevenueAllocationGroup(): SearchMultiSelectField
    {
        return $this->revenueAllocationGroup;
    }

    /**
     * @param SearchMultiSelectField $revenueRecognitionRule
     * @return ItemSearchBasic
     */
    public function setRevenueRecognitionRule(SearchMultiSelectField $revenueRecognitionRule): ItemSearchBasic
    {
        $this->revenueRecognitionRule = $revenueRecognitionRule;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRevenueRecognitionRule(): SearchMultiSelectField
    {
        return $this->revenueRecognitionRule;
    }

    /**
     * @param SearchMultiSelectField $revRecForecastRule
     * @return ItemSearchBasic
     */
    public function setRevRecForecastRule(SearchMultiSelectField $revRecForecastRule): ItemSearchBasic
    {
        $this->revRecForecastRule = $revRecForecastRule;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRevRecForecastRule(): SearchMultiSelectField
    {
        return $this->revRecForecastRule;
    }

    /**
     * @param SearchMultiSelectField $revRecSchedule
     * @return ItemSearchBasic
     */
    public function setRevRecSchedule(SearchMultiSelectField $revRecSchedule): ItemSearchBasic
    {
        $this->revRecSchedule = $revRecSchedule;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRevRecSchedule(): SearchMultiSelectField
    {
        return $this->revRecSchedule;
    }

    /**
     * @param SearchBooleanField $roundUpAsComponent
     * @return ItemSearchBasic
     */
    public function setRoundUpAsComponent(SearchBooleanField $roundUpAsComponent): ItemSearchBasic
    {
        $this->roundUpAsComponent = $roundUpAsComponent;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getRoundUpAsComponent(): SearchBooleanField
    {
        return $this->roundUpAsComponent;
    }

    /**
     * @param SearchDoubleField $safetyStockLevel
     * @return ItemSearchBasic
     */
    public function setSafetyStockLevel(SearchDoubleField $safetyStockLevel): ItemSearchBasic
    {
        $this->safetyStockLevel = $safetyStockLevel;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getSafetyStockLevel(): SearchDoubleField
    {
        return $this->safetyStockLevel;
    }

    /**
     * @param SearchLongField $safetyStockLevelDays
     * @return ItemSearchBasic
     */
    public function setSafetyStockLevelDays(SearchLongField $safetyStockLevelDays): ItemSearchBasic
    {
        $this->safetyStockLevelDays = $safetyStockLevelDays;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getSafetyStockLevelDays(): SearchLongField
    {
        return $this->safetyStockLevelDays;
    }

    /**
     * @param SearchStringField $salesDescription
     * @return ItemSearchBasic
     */
    public function setSalesDescription(SearchStringField $salesDescription): ItemSearchBasic
    {
        $this->salesDescription = $salesDescription;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getSalesDescription(): SearchStringField
    {
        return $this->salesDescription;
    }

    /**
     * @param SearchMultiSelectField $saleUnit
     * @return ItemSearchBasic
     */
    public function setSaleUnit(SearchMultiSelectField $saleUnit): ItemSearchBasic
    {
        $this->saleUnit = $saleUnit;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSaleUnit(): SearchMultiSelectField
    {
        return $this->saleUnit;
    }

    /**
     * @param SearchBooleanField $sameAsPrimaryBookAmortization
     * @return ItemSearchBasic
     */
    public function setSameAsPrimaryBookAmortization(SearchBooleanField $sameAsPrimaryBookAmortization): ItemSearchBasic
    {
        $this->sameAsPrimaryBookAmortization = $sameAsPrimaryBookAmortization;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getSameAsPrimaryBookAmortization(): SearchBooleanField
    {
        return $this->sameAsPrimaryBookAmortization;
    }

    /**
     * @param SearchBooleanField $sameAsPrimaryBookRevRec
     * @return ItemSearchBasic
     */
    public function setSameAsPrimaryBookRevRec(SearchBooleanField $sameAsPrimaryBookRevRec): ItemSearchBasic
    {
        $this->sameAsPrimaryBookRevRec = $sameAsPrimaryBookRevRec;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getSameAsPrimaryBookRevRec(): SearchBooleanField
    {
        return $this->sameAsPrimaryBookRevRec;
    }

    /**
     * @param SearchEnumMultiSelectField $scheduleBCode
     * @return ItemSearchBasic
     */
    public function setScheduleBCode(SearchEnumMultiSelectField $scheduleBCode): ItemSearchBasic
    {
        $this->scheduleBCode = $scheduleBCode;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getScheduleBCode(): SearchEnumMultiSelectField
    {
        return $this->scheduleBCode;
    }

    /**
     * @param SearchStringField $scheduleBNumber
     * @return ItemSearchBasic
     */
    public function setScheduleBNumber(SearchStringField $scheduleBNumber): ItemSearchBasic
    {
        $this->scheduleBNumber = $scheduleBNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getScheduleBNumber(): SearchStringField
    {
        return $this->scheduleBNumber;
    }

    /**
     * @param SearchStringField $scheduleBQuantity
     * @return ItemSearchBasic
     */
    public function setScheduleBQuantity(SearchStringField $scheduleBQuantity): ItemSearchBasic
    {
        $this->scheduleBQuantity = $scheduleBQuantity;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getScheduleBQuantity(): SearchStringField
    {
        return $this->scheduleBQuantity;
    }

    /**
     * @param SearchStringField $searchKeywords
     * @return ItemSearchBasic
     */
    public function setSearchKeywords(SearchStringField $searchKeywords): ItemSearchBasic
    {
        $this->searchKeywords = $searchKeywords;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getSearchKeywords(): SearchStringField
    {
        return $this->searchKeywords;
    }

    /**
     * @param SearchBooleanField $seasonalDemand
     * @return ItemSearchBasic
     */
    public function setSeasonalDemand(SearchBooleanField $seasonalDemand): ItemSearchBasic
    {
        $this->seasonalDemand = $seasonalDemand;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getSeasonalDemand(): SearchBooleanField
    {
        return $this->seasonalDemand;
    }

    /**
     * @param SearchMultiSelectField $secondaryConsumptionUnit
     * @return ItemSearchBasic
     */
    public function setSecondaryConsumptionUnit(SearchMultiSelectField $secondaryConsumptionUnit): ItemSearchBasic
    {
        $this->secondaryConsumptionUnit = $secondaryConsumptionUnit;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSecondaryConsumptionUnit(): SearchMultiSelectField
    {
        return $this->secondaryConsumptionUnit;
    }

    /**
     * @param SearchMultiSelectField $secondaryPurchaseUnit
     * @return ItemSearchBasic
     */
    public function setSecondaryPurchaseUnit(SearchMultiSelectField $secondaryPurchaseUnit): ItemSearchBasic
    {
        $this->secondaryPurchaseUnit = $secondaryPurchaseUnit;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSecondaryPurchaseUnit(): SearchMultiSelectField
    {
        return $this->secondaryPurchaseUnit;
    }

    /**
     * @param SearchMultiSelectField $secondarySaleUnit
     * @return ItemSearchBasic
     */
    public function setSecondarySaleUnit(SearchMultiSelectField $secondarySaleUnit): ItemSearchBasic
    {
        $this->secondarySaleUnit = $secondarySaleUnit;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSecondarySaleUnit(): SearchMultiSelectField
    {
        return $this->secondarySaleUnit;
    }

    /**
     * @param SearchMultiSelectField $secondaryStockUnit
     * @return ItemSearchBasic
     */
    public function setSecondaryStockUnit(SearchMultiSelectField $secondaryStockUnit): ItemSearchBasic
    {
        $this->secondaryStockUnit = $secondaryStockUnit;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSecondaryStockUnit(): SearchMultiSelectField
    {
        return $this->secondaryStockUnit;
    }

    /**
     * @param SearchMultiSelectField $secondaryUnitsType
     * @return ItemSearchBasic
     */
    public function setSecondaryUnitsType(SearchMultiSelectField $secondaryUnitsType): ItemSearchBasic
    {
        $this->secondaryUnitsType = $secondaryUnitsType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSecondaryUnitsType(): SearchMultiSelectField
    {
        return $this->secondaryUnitsType;
    }

    /**
     * @param SearchBooleanField $sellOnEBay
     * @return ItemSearchBasic
     */
    public function setSellOnEBay(SearchBooleanField $sellOnEBay): ItemSearchBasic
    {
        $this->sellOnEBay = $sellOnEBay;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getSellOnEBay(): SearchBooleanField
    {
        return $this->sellOnEBay;
    }

    /**
     * @param SearchStringField $serialNumber
     * @return ItemSearchBasic
     */
    public function setSerialNumber(SearchStringField $serialNumber): ItemSearchBasic
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getSerialNumber(): SearchStringField
    {
        return $this->serialNumber;
    }

    /**
     * @param SearchMultiSelectField $serialNumberLocation
     * @return ItemSearchBasic
     */
    public function setSerialNumberLocation(SearchMultiSelectField $serialNumberLocation): ItemSearchBasic
    {
        $this->serialNumberLocation = $serialNumberLocation;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSerialNumberLocation(): SearchMultiSelectField
    {
        return $this->serialNumberLocation;
    }

    /**
     * @param SearchBooleanField $shipIndividually
     * @return ItemSearchBasic
     */
    public function setShipIndividually(SearchBooleanField $shipIndividually): ItemSearchBasic
    {
        $this->shipIndividually = $shipIndividually;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getShipIndividually(): SearchBooleanField
    {
        return $this->shipIndividually;
    }

    /**
     * @param SearchMultiSelectField $shipPackage
     * @return ItemSearchBasic
     */
    public function setShipPackage(SearchMultiSelectField $shipPackage): ItemSearchBasic
    {
        $this->shipPackage = $shipPackage;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getShipPackage(): SearchMultiSelectField
    {
        return $this->shipPackage;
    }

    /**
     * @param SearchEnumMultiSelectField $shippingCarrier
     * @return ItemSearchBasic
     */
    public function setShippingCarrier(SearchEnumMultiSelectField $shippingCarrier): ItemSearchBasic
    {
        $this->shippingCarrier = $shippingCarrier;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getShippingCarrier(): SearchEnumMultiSelectField
    {
        return $this->shippingCarrier;
    }

    /**
     * @param SearchDoubleField $shippingRate
     * @return ItemSearchBasic
     */
    public function setShippingRate(SearchDoubleField $shippingRate): ItemSearchBasic
    {
        $this->shippingRate = $shippingRate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getShippingRate(): SearchDoubleField
    {
        return $this->shippingRate;
    }

    /**
     * @param SearchStringField $shoppingDotComCategory
     * @return ItemSearchBasic
     */
    public function setShoppingDotComCategory(SearchStringField $shoppingDotComCategory): ItemSearchBasic
    {
        $this->shoppingDotComCategory = $shoppingDotComCategory;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getShoppingDotComCategory(): SearchStringField
    {
        return $this->shoppingDotComCategory;
    }

    /**
     * @param SearchBooleanField $shoppingProductFeed
     * @return ItemSearchBasic
     */
    public function setShoppingProductFeed(SearchBooleanField $shoppingProductFeed): ItemSearchBasic
    {
        $this->shoppingProductFeed = $shoppingProductFeed;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getShoppingProductFeed(): SearchBooleanField
    {
        return $this->shoppingProductFeed;
    }

    /**
     * @param SearchLongField $shopzillaCategoryId
     * @return ItemSearchBasic
     */
    public function setShopzillaCategoryId(SearchLongField $shopzillaCategoryId): ItemSearchBasic
    {
        $this->shopzillaCategoryId = $shopzillaCategoryId;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getShopzillaCategoryId(): SearchLongField
    {
        return $this->shopzillaCategoryId;
    }

    /**
     * @param SearchBooleanField $shopzillaProductFeed
     * @return ItemSearchBasic
     */
    public function setShopzillaProductFeed(SearchBooleanField $shopzillaProductFeed): ItemSearchBasic
    {
        $this->shopzillaProductFeed = $shopzillaProductFeed;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getShopzillaProductFeed(): SearchBooleanField
    {
        return $this->shopzillaProductFeed;
    }

    /**
     * @param SearchEnumMultiSelectField $sitemapPriority
     * @return ItemSearchBasic
     */
    public function setSitemapPriority(SearchEnumMultiSelectField $sitemapPriority): ItemSearchBasic
    {
        $this->sitemapPriority = $sitemapPriority;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getSitemapPriority(): SearchEnumMultiSelectField
    {
        return $this->sitemapPriority;
    }

    /**
     * @param SearchMultiSelectField $softDescriptor
     * @return ItemSearchBasic
     */
    public function setSoftDescriptor(SearchMultiSelectField $softDescriptor): ItemSearchBasic
    {
        $this->softDescriptor = $softDescriptor;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSoftDescriptor(): SearchMultiSelectField
    {
        return $this->softDescriptor;
    }

    /**
     * @param SearchDoubleField $startingPrice
     * @return ItemSearchBasic
     */
    public function setStartingPrice(SearchDoubleField $startingPrice): ItemSearchBasic
    {
        $this->startingPrice = $startingPrice;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getStartingPrice(): SearchDoubleField
    {
        return $this->startingPrice;
    }

    /**
     * @param SearchStringField $stockDescription
     * @return ItemSearchBasic
     */
    public function setStockDescription(SearchStringField $stockDescription): ItemSearchBasic
    {
        $this->stockDescription = $stockDescription;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getStockDescription(): SearchStringField
    {
        return $this->stockDescription;
    }

    /**
     * @param SearchMultiSelectField $stockUnit
     * @return ItemSearchBasic
     */
    public function setStockUnit(SearchMultiSelectField $stockUnit): ItemSearchBasic
    {
        $this->stockUnit = $stockUnit;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getStockUnit(): SearchMultiSelectField
    {
        return $this->stockUnit;
    }

    /**
     * @param SearchStringField $storeDescription
     * @return ItemSearchBasic
     */
    public function setStoreDescription(SearchStringField $storeDescription): ItemSearchBasic
    {
        $this->storeDescription = $storeDescription;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getStoreDescription(): SearchStringField
    {
        return $this->storeDescription;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return ItemSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): ItemSearchBasic
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary(): SearchMultiSelectField
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchEnumMultiSelectField $subType
     * @return ItemSearchBasic
     */
    public function setSubType(SearchEnumMultiSelectField $subType): ItemSearchBasic
    {
        $this->subType = $subType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getSubType(): SearchEnumMultiSelectField
    {
        return $this->subType;
    }

    /**
     * @param SearchEnumMultiSelectField $supplyLotSizingMethod
     * @return ItemSearchBasic
     */
    public function setSupplyLotSizingMethod(SearchEnumMultiSelectField $supplyLotSizingMethod): ItemSearchBasic
    {
        $this->supplyLotSizingMethod = $supplyLotSizingMethod;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getSupplyLotSizingMethod(): SearchEnumMultiSelectField
    {
        return $this->supplyLotSizingMethod;
    }

    /**
     * @param SearchEnumMultiSelectField $supplyReplenishmentMethod
     * @return ItemSearchBasic
     */
    public function setSupplyReplenishmentMethod(SearchEnumMultiSelectField $supplyReplenishmentMethod): ItemSearchBasic
    {
        $this->supplyReplenishmentMethod = $supplyReplenishmentMethod;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getSupplyReplenishmentMethod(): SearchEnumMultiSelectField
    {
        return $this->supplyReplenishmentMethod;
    }

    /**
     * @param SearchLongField $supplyTimeFence
     * @return ItemSearchBasic
     */
    public function setSupplyTimeFence(SearchLongField $supplyTimeFence): ItemSearchBasic
    {
        $this->supplyTimeFence = $supplyTimeFence;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getSupplyTimeFence(): SearchLongField
    {
        return $this->supplyTimeFence;
    }

    /**
     * @param SearchEnumMultiSelectField $supplyType
     * @return ItemSearchBasic
     */
    public function setSupplyType(SearchEnumMultiSelectField $supplyType): ItemSearchBasic
    {
        $this->supplyType = $supplyType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getSupplyType(): SearchEnumMultiSelectField
    {
        return $this->supplyType;
    }

    /**
     * @param SearchMultiSelectField $taxCode
     * @return ItemSearchBasic
     */
    public function setTaxCode(SearchMultiSelectField $taxCode): ItemSearchBasic
    {
        $this->taxCode = $taxCode;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTaxCode(): SearchMultiSelectField
    {
        return $this->taxCode;
    }

    /**
     * @param SearchMultiSelectField $taxSchedule
     * @return ItemSearchBasic
     */
    public function setTaxSchedule(SearchMultiSelectField $taxSchedule): ItemSearchBasic
    {
        $this->taxSchedule = $taxSchedule;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTaxSchedule(): SearchMultiSelectField
    {
        return $this->taxSchedule;
    }

    /**
     * @param SearchStringField $thumbnailUrl
     * @return ItemSearchBasic
     */
    public function setThumbnailUrl(SearchStringField $thumbnailUrl): ItemSearchBasic
    {
        $this->thumbnailUrl = $thumbnailUrl;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getThumbnailUrl(): SearchStringField
    {
        return $this->thumbnailUrl;
    }

    /**
     * @param SearchDoubleField $totalValue
     * @return ItemSearchBasic
     */
    public function setTotalValue(SearchDoubleField $totalValue): ItemSearchBasic
    {
        $this->totalValue = $totalValue;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTotalValue(): SearchDoubleField
    {
        return $this->totalValue;
    }

    /**
     * @param SearchBooleanField $trackLandedCost
     * @return ItemSearchBasic
     */
    public function setTrackLandedCost(SearchBooleanField $trackLandedCost): ItemSearchBasic
    {
        $this->trackLandedCost = $trackLandedCost;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getTrackLandedCost(): SearchBooleanField
    {
        return $this->trackLandedCost;
    }

    /**
     * @param SearchDoubleField $transferPrice
     * @return ItemSearchBasic
     */
    public function setTransferPrice(SearchDoubleField $transferPrice): ItemSearchBasic
    {
        $this->transferPrice = $transferPrice;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTransferPrice(): SearchDoubleField
    {
        return $this->transferPrice;
    }

    /**
     * @param SearchEnumMultiSelectField $type
     * @return ItemSearchBasic
     */
    public function setType(SearchEnumMultiSelectField $type): ItemSearchBasic
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getType(): SearchEnumMultiSelectField
    {
        return $this->type;
    }

    /**
     * @param SearchMultiSelectField $unitsType
     * @return ItemSearchBasic
     */
    public function setUnitsType(SearchMultiSelectField $unitsType): ItemSearchBasic
    {
        $this->unitsType = $unitsType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getUnitsType(): SearchMultiSelectField
    {
        return $this->unitsType;
    }

    /**
     * @param SearchStringField $upcCode
     * @return ItemSearchBasic
     */
    public function setUpcCode(SearchStringField $upcCode): ItemSearchBasic
    {
        $this->upcCode = $upcCode;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getUpcCode(): SearchStringField
    {
        return $this->upcCode;
    }

    /**
     * @param SearchDoubleField $upperWarningLimit
     * @return ItemSearchBasic
     */
    public function setUpperWarningLimit(SearchDoubleField $upperWarningLimit): ItemSearchBasic
    {
        $this->upperWarningLimit = $upperWarningLimit;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUpperWarningLimit(): SearchDoubleField
    {
        return $this->upperWarningLimit;
    }

    /**
     * @param SearchStringField $urlComponent
     * @return ItemSearchBasic
     */
    public function setUrlComponent(SearchStringField $urlComponent): ItemSearchBasic
    {
        $this->urlComponent = $urlComponent;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getUrlComponent(): SearchStringField
    {
        return $this->urlComponent;
    }

    /**
     * @param SearchBooleanField $useBins
     * @return ItemSearchBasic
     */
    public function setUseBins(SearchBooleanField $useBins): ItemSearchBasic
    {
        $this->useBins = $useBins;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUseBins(): SearchBooleanField
    {
        return $this->useBins;
    }

    /**
     * @param SearchBooleanField $useComponentYield
     * @return ItemSearchBasic
     */
    public function setUseComponentYield(SearchBooleanField $useComponentYield): ItemSearchBasic
    {
        $this->useComponentYield = $useComponentYield;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUseComponentYield(): SearchBooleanField
    {
        return $this->useComponentYield;
    }

    /**
     * @param SearchBooleanField $useMarginalRates
     * @return ItemSearchBasic
     */
    public function setUseMarginalRates(SearchBooleanField $useMarginalRates): ItemSearchBasic
    {
        $this->useMarginalRates = $useMarginalRates;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUseMarginalRates(): SearchBooleanField
    {
        return $this->useMarginalRates;
    }

    /**
     * @param SearchMultiSelectField $vendor
     * @return ItemSearchBasic
     */
    public function setVendor(SearchMultiSelectField $vendor): ItemSearchBasic
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVendor(): SearchMultiSelectField
    {
        return $this->vendor;
    }

    /**
     * @param SearchStringField $vendorCode
     * @return ItemSearchBasic
     */
    public function setVendorCode(SearchStringField $vendorCode): ItemSearchBasic
    {
        $this->vendorCode = $vendorCode;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getVendorCode(): SearchStringField
    {
        return $this->vendorCode;
    }

    /**
     * @param SearchDoubleField $vendorCost
     * @return ItemSearchBasic
     */
    public function setVendorCost(SearchDoubleField $vendorCost): ItemSearchBasic
    {
        $this->vendorCost = $vendorCost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getVendorCost(): SearchDoubleField
    {
        return $this->vendorCost;
    }

    /**
     * @param SearchDoubleField $vendorCostEntered
     * @return ItemSearchBasic
     */
    public function setVendorCostEntered(SearchDoubleField $vendorCostEntered): ItemSearchBasic
    {
        $this->vendorCostEntered = $vendorCostEntered;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getVendorCostEntered(): SearchDoubleField
    {
        return $this->vendorCostEntered;
    }

    /**
     * @param SearchStringField $vendorName
     * @return ItemSearchBasic
     */
    public function setVendorName(SearchStringField $vendorName): ItemSearchBasic
    {
        $this->vendorName = $vendorName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getVendorName(): SearchStringField
    {
        return $this->vendorName;
    }

    /**
     * @param SearchMultiSelectField $vendorPriceCurrency
     * @return ItemSearchBasic
     */
    public function setVendorPriceCurrency(SearchMultiSelectField $vendorPriceCurrency): ItemSearchBasic
    {
        $this->vendorPriceCurrency = $vendorPriceCurrency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVendorPriceCurrency(): SearchMultiSelectField
    {
        return $this->vendorPriceCurrency;
    }

    /**
     * @param SearchEnumMultiSelectField $vsoeDeferral
     * @return ItemSearchBasic
     */
    public function setVsoeDeferral(SearchEnumMultiSelectField $vsoeDeferral): ItemSearchBasic
    {
        $this->vsoeDeferral = $vsoeDeferral;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getVsoeDeferral(): SearchEnumMultiSelectField
    {
        return $this->vsoeDeferral;
    }

    /**
     * @param SearchBooleanField $vsoeDelivered
     * @return ItemSearchBasic
     */
    public function setVsoeDelivered(SearchBooleanField $vsoeDelivered): ItemSearchBasic
    {
        $this->vsoeDelivered = $vsoeDelivered;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getVsoeDelivered(): SearchBooleanField
    {
        return $this->vsoeDelivered;
    }

    /**
     * @param SearchEnumMultiSelectField $vsoePermitDiscount
     * @return ItemSearchBasic
     */
    public function setVsoePermitDiscount(SearchEnumMultiSelectField $vsoePermitDiscount): ItemSearchBasic
    {
        $this->vsoePermitDiscount = $vsoePermitDiscount;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getVsoePermitDiscount(): SearchEnumMultiSelectField
    {
        return $this->vsoePermitDiscount;
    }

    /**
     * @param SearchDoubleField $vsoePrice
     * @return ItemSearchBasic
     */
    public function setVsoePrice(SearchDoubleField $vsoePrice): ItemSearchBasic
    {
        $this->vsoePrice = $vsoePrice;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getVsoePrice(): SearchDoubleField
    {
        return $this->vsoePrice;
    }

    /**
     * @param SearchEnumMultiSelectField $vsoeSopGroup
     * @return ItemSearchBasic
     */
    public function setVsoeSopGroup(SearchEnumMultiSelectField $vsoeSopGroup): ItemSearchBasic
    {
        $this->vsoeSopGroup = $vsoeSopGroup;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getVsoeSopGroup(): SearchEnumMultiSelectField
    {
        return $this->vsoeSopGroup;
    }

    /**
     * @param SearchMultiSelectField $webSite
     * @return ItemSearchBasic
     */
    public function setWebSite(SearchMultiSelectField $webSite): ItemSearchBasic
    {
        $this->webSite = $webSite;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getWebSite(): SearchMultiSelectField
    {
        return $this->webSite;
    }

    /**
     * @param SearchDoubleField $weight
     * @return ItemSearchBasic
     */
    public function setWeight(SearchDoubleField $weight): ItemSearchBasic
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getWeight(): SearchDoubleField
    {
        return $this->weight;
    }

    /**
     * @param SearchBooleanField $yahooProductFeed
     * @return ItemSearchBasic
     */
    public function setYahooProductFeed(SearchBooleanField $yahooProductFeed): ItemSearchBasic
    {
        $this->yahooProductFeed = $yahooProductFeed;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getYahooProductFeed(): SearchBooleanField
    {
        return $this->yahooProductFeed;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return ItemSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): ItemSearchBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList(): SearchCustomFieldList
    {
        return $this->customFieldList;
    }

}
