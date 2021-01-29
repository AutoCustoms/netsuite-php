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

class TransactionSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $abbrev;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $account;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $accountType;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $acctCorpCardExp;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $actualProductionEndDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $actualProductionStartDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $actualShipDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $altSalesAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $altSalesNetAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $amount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $amountPaid;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $amountRemaining;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $amountUnbilled;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $appliedToForeignAmount;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $appliedToIsFxVariance;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $appliedToLinkAmount;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $appliedToLinkType;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $appliedToTransaction;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $applyingForeignAmount;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $applyingIsFxVariance;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $applyingLinkAmount;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $applyingLinkType;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $applyingTransaction;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $approvalStatus;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $authCode;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $autoCalculateLag;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $avsStreetMatch;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $avsZipMatch;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $billable;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $billAddress;

    protected $billAddress1;
    protected $billAddress2;
    protected $billAddress3;
    /**
     * @var SearchColumnStringField[]
     */
    protected array $billAddressee;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $billAttention;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $billCity;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $billCountry;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $billCountryCode;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $billedDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $billingAccount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $billingAmount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $billingSchedule;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $billingTransaction;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $billPhone;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $billState;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $billVarianceStatus;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $billZip;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $binNumber;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $binNumberQuantity;

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
    protected array $buildVariance;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $built;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $canHaveStackablePromotions;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $catchUpPeriod;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $ccCustomerCode;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $ccExpDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $ccHolderName;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $ccNumber;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $ccStreet;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $ccZipCode;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $class;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $cleared;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $closed;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $closeDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $cogsAmount;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $commissionEffectiveDate;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $commit;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $componentYield;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $confirmationNumber;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $contribution;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $contributionPrimary;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $costComponentAmount;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $costComponentCategory;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $costComponentItem;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $costComponentQuantity;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $costComponentStandardCost;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $costEstimate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $costEstimateRate;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $costEstimateType;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $createdBy;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $createdFrom;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $creditAmount;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $cscMatch;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $currency;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $customForm;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $customGL;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $custType;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $dateCreated;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $daysOpen;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $daysOverdue;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $debitAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $deferredRevenue;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $deferRevRec;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $department;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $depositDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $depositTransaction;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $discountAmount;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $docUnit;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $drAccount;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $dueDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $effectiveRate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $email;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $endDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $entity;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $entityStatus;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estGrossProfit;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estGrossProfitPct;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estGrossProfitPercent;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $exchangeRate;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $excludeCommission;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $excludeFromRateRequest;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $expectedCloseDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $expectedReceiptDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $expenseCategory;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $expenseDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $firmed;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $forecastType;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $fulfillingTransaction;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $fxAccount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fxAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fxCostEstimate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fxCostEstimateRate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fxEstGrossProfit;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fxTranCostEstimate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fxVsoeAllocation;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fxVsoeAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fxVsoePrice;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $gcoAvailabelToCharge;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $gcoAvailableToRefund;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $gcoAvsStreetMatch;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $gcoAvsZipMatch;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $gcoBuyerAccountAge;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $gcoBuyerIp;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $gcoChargeAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $gcoChargebackAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $gcoConfirmedChargedTotal;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $gcoConfirmedRefundedTotal;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $gcoCreditcardNumber;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $gcoCscMatch;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $gcoFinancialState;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $gcoFulfillmentState;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $gcoOrderId;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $gcoOrderTotal;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $gcoPromotionAmount;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $gcoPromotionName;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $gcoRefundAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $gcoShippingTotal;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $gcoStateChangedDetail;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $giftCert;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $grossAmount;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $includeInForecast;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $incoterm;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $intercoStatus;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $intercoTransaction;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $inventoryLocation;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $inventorySubsidiary;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $inVsoeBundle;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isAllocation;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isBackflush;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isGcoChargeback;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isGcoChargeConfirmed;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isGcoPaymentGuaranteed;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isGcoRefundConfirmed;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInsideDelivery;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInsidePickup;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isIntercompanyAdjustment;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInTransitPayment;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isMultiShipTo;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isReversal;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isRevRecTransaction;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isScrap;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isShipAddress;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isTransferPriceCosting;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isWip;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $item;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $itemFulfillmentChoice;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $itemRevision;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $landedCostPerLine;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastModifiedDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $leadSource;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $line;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $lineSequenceNumber;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $lineUniqueKey;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $location;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $locationAutoAssigned;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $mainLine;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $mainName;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $manufacturingRouting;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $matchBillToReceipt;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $memo;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $memoMain;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $memorized;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $merchantAccount;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $message;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $multiSubsidiary;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $netAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $netAmountNoTax;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $nextApprover;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $nextBillDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $nexus;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $noAutoAssignLocation;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $nonReimbursable;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $oneTimeTotal;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $opportunity;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $options;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $orderAllocationStrategy;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $orderPriority;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $originator;

    /**
     * @var SearchColumnTextNumberField[]
     */
    protected array $otherRefNum;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $overheadParentItem;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $overrideInstallments;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $packageCount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $paidAmount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $paidTransaction;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $partner;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $partnerContribution;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $partnerRole;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $partnerTeamMember;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $payingAmount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $payingTransaction;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $paymentApproved;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $paymentEventDate;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $paymentEventHoldReason;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $paymentEventPurchaseCardUsed;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $paymentEventPurchaseDataSent;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $paymentEventResult;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $paymentEventType;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $paymentHold;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $paymentMethod;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $paymentOption;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $payPalPending;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $payPalStatus;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $payPalTranId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $payrollBatch;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $pnRefNum;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $poRate;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $posting;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $postingPeriod;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $priceLevel;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $print;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $probability;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $projectedAmount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $projectTask;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $promoCode;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $purchaseOrder;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantity;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityBilled;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityCommitted;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityPacked;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityPicked;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityRevCommitted;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityShipRecv;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityUom;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $rate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $realizedGainPostingTransaction;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $recognizedRevenue;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $recordType;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $recurAnnuallyTotal;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $recurMonthlyTotal;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $recurQuarterlyTotal;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $recurringBill;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $recurWeeklyTotal;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $refNumber;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $requestedDate;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $revCommitStatus;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $revCommittingTransaction;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $revenueStatus;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $reversalDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $reversalNumber;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $revRecEndDate;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $revRecOnRevCommitment;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $revRecStartDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $rgAccount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $rgAmount;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $salesEffectiveDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $salesOrder;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $salesRep;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $salesTeamMember;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $salesTeamRole;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $schedulingMethod;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $serialNumber;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $serialNumberCost;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $serialNumberCostAdjustment;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $serialNumberQuantity;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $serialNumbers;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $shipAddress;

    protected $shipAddress1;
    protected $shipAddress2;
    protected $shipAddress3;
    /**
     * @var SearchColumnStringField[]
     */
    protected array $shipAddressee;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $shipAttention;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $shipCarrier;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $shipCity;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $shipComplete;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $shipCountry;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $shipCountryCode;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $shipDate;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $shipGroup;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $shipMethod;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $shipPhone;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $shippingAmount;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $shipRecvStatusLine;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $shipState;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $shipTo;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $shipZip;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $signedAmount;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $source;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDate;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $status;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subscription;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subscriptionLine;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $subsidiaryTaxRegNum;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $taxAmount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $taxCode;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $taxLine;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $taxPeriod;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $taxPointDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $taxTotal;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $termInMonths;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $terms;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $termsOfSale;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $title;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $toBeEmailed;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $toBePrinted;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $toSubsidiary;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $total;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $totalCostEstimate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $trackingNumbers;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $tranDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $tranEstGrossProfit;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $tranFxEstGrossProfit;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $tranId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $tranIsVsoeBundle;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $transactionDiscount;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $transactionLineType;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $transactionNumber;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $transferLocation;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $transferOrderItemLine;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $transferOrderQuantityCommitted;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $transferOrderQuantityPacked;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $transferOrderQuantityPicked;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $transferOrderQuantityReceived;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $transferOrderQuantityShipped;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $type;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $unit;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $unitCostOverride;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $vendType;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $visibleToCustomer;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $vsoeAllocation;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $vsoeAmount;

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
     * @var SearchColumnStringField[]
     */
    protected array $webSite;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "abbrev" => "SearchColumnStringField[]",
        "account" => "SearchColumnSelectField[]",
        "accountType" => "SearchColumnEnumSelectField[]",
        "acctCorpCardExp" => "SearchColumnSelectField[]",
        "actualProductionEndDate" => "SearchColumnDateField[]",
        "actualProductionStartDate" => "SearchColumnDateField[]",
        "actualShipDate" => "SearchColumnDateField[]",
        "altSalesAmount" => "SearchColumnDoubleField[]",
        "altSalesNetAmount" => "SearchColumnDoubleField[]",
        "amount" => "SearchColumnDoubleField[]",
        "amountPaid" => "SearchColumnDoubleField[]",
        "amountRemaining" => "SearchColumnDoubleField[]",
        "amountUnbilled" => "SearchColumnDoubleField[]",
        "appliedToForeignAmount" => "SearchColumnDoubleField[]",
        "appliedToIsFxVariance" => "SearchColumnBooleanField[]",
        "appliedToLinkAmount" => "SearchColumnDoubleField[]",
        "appliedToLinkType" => "SearchColumnStringField[]",
        "appliedToTransaction" => "SearchColumnSelectField[]",
        "applyingForeignAmount" => "SearchColumnDoubleField[]",
        "applyingIsFxVariance" => "SearchColumnBooleanField[]",
        "applyingLinkAmount" => "SearchColumnDoubleField[]",
        "applyingLinkType" => "SearchColumnStringField[]",
        "applyingTransaction" => "SearchColumnSelectField[]",
        "approvalStatus" => "SearchColumnEnumSelectField[]",
        "authCode" => "SearchColumnStringField[]",
        "autoCalculateLag" => "SearchColumnBooleanField[]",
        "avsStreetMatch" => "SearchColumnEnumSelectField[]",
        "avsZipMatch" => "SearchColumnEnumSelectField[]",
        "billable" => "SearchColumnBooleanField[]",
        "billAddress" => "SearchColumnStringField[]",
        "billAddress1" => "SearchColumnStringField[]",
        "billAddress2" => "SearchColumnStringField[]",
        "billAddress3" => "SearchColumnStringField[]",
        "billAddressee" => "SearchColumnStringField[]",
        "billAttention" => "SearchColumnStringField[]",
        "billCity" => "SearchColumnStringField[]",
        "billCountry" => "SearchColumnEnumSelectField[]",
        "billCountryCode" => "SearchColumnStringField[]",
        "billedDate" => "SearchColumnDateField[]",
        "billingAccount" => "SearchColumnSelectField[]",
        "billingAmount" => "SearchColumnDoubleField[]",
        "billingSchedule" => "SearchColumnSelectField[]",
        "billingTransaction" => "SearchColumnSelectField[]",
        "billPhone" => "SearchColumnStringField[]",
        "billState" => "SearchColumnStringField[]",
        "billVarianceStatus" => "SearchColumnEnumSelectField[]",
        "billZip" => "SearchColumnStringField[]",
        "binNumber" => "SearchColumnStringField[]",
        "binNumberQuantity" => "SearchColumnDoubleField[]",
        "bomQuantity" => "SearchColumnDoubleField[]",
        "buildEntireAssembly" => "SearchColumnBooleanField[]",
        "buildVariance" => "SearchColumnDoubleField[]",
        "built" => "SearchColumnDoubleField[]",
        "canHaveStackablePromotions" => "SearchColumnBooleanField[]",
        "catchUpPeriod" => "SearchColumnStringField[]",
        "ccCustomerCode" => "SearchColumnStringField[]",
        "ccExpDate" => "SearchColumnDateField[]",
        "ccHolderName" => "SearchColumnStringField[]",
        "ccNumber" => "SearchColumnStringField[]",
        "ccStreet" => "SearchColumnStringField[]",
        "ccZipCode" => "SearchColumnStringField[]",
        "class" => "SearchColumnSelectField[]",
        "cleared" => "SearchColumnBooleanField[]",
        "closed" => "SearchColumnBooleanField[]",
        "closeDate" => "SearchColumnDateField[]",
        "cogsAmount" => "SearchColumnDoubleField[]",
        "commissionEffectiveDate" => "SearchColumnDateField[]",
        "commit" => "SearchColumnEnumSelectField[]",
        "componentYield" => "SearchColumnDoubleField[]",
        "confirmationNumber" => "SearchColumnStringField[]",
        "contribution" => "SearchColumnDoubleField[]",
        "contributionPrimary" => "SearchColumnDoubleField[]",
        "costComponentAmount" => "SearchColumnDoubleField[]",
        "costComponentCategory" => "SearchColumnStringField[]",
        "costComponentItem" => "SearchColumnStringField[]",
        "costComponentQuantity" => "SearchColumnDoubleField[]",
        "costComponentStandardCost" => "SearchColumnDoubleField[]",
        "costEstimate" => "SearchColumnDoubleField[]",
        "costEstimateRate" => "SearchColumnDoubleField[]",
        "costEstimateType" => "SearchColumnEnumSelectField[]",
        "createdBy" => "SearchColumnSelectField[]",
        "createdFrom" => "SearchColumnSelectField[]",
        "creditAmount" => "SearchColumnDoubleField[]",
        "cscMatch" => "SearchColumnEnumSelectField[]",
        "currency" => "SearchColumnSelectField[]",
        "customForm" => "SearchColumnSelectField[]",
        "customGL" => "SearchColumnBooleanField[]",
        "custType" => "SearchColumnSelectField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "daysOpen" => "SearchColumnLongField[]",
        "daysOverdue" => "SearchColumnLongField[]",
        "debitAmount" => "SearchColumnDoubleField[]",
        "deferredRevenue" => "SearchColumnDoubleField[]",
        "deferRevRec" => "SearchColumnBooleanField[]",
        "department" => "SearchColumnSelectField[]",
        "depositDate" => "SearchColumnDateField[]",
        "depositTransaction" => "SearchColumnSelectField[]",
        "discountAmount" => "SearchColumnDoubleField[]",
        "docUnit" => "SearchColumnStringField[]",
        "drAccount" => "SearchColumnStringField[]",
        "dueDate" => "SearchColumnDateField[]",
        "effectiveRate" => "SearchColumnDoubleField[]",
        "email" => "SearchColumnStringField[]",
        "endDate" => "SearchColumnDateField[]",
        "entity" => "SearchColumnSelectField[]",
        "entityStatus" => "SearchColumnSelectField[]",
        "estGrossProfit" => "SearchColumnDoubleField[]",
        "estGrossProfitPct" => "SearchColumnDoubleField[]",
        "estGrossProfitPercent" => "SearchColumnDoubleField[]",
        "exchangeRate" => "SearchColumnDoubleField[]",
        "excludeCommission" => "SearchColumnBooleanField[]",
        "excludeFromRateRequest" => "SearchColumnBooleanField[]",
        "expectedCloseDate" => "SearchColumnDateField[]",
        "expectedReceiptDate" => "SearchColumnDateField[]",
        "expenseCategory" => "SearchColumnSelectField[]",
        "expenseDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "firmed" => "SearchColumnBooleanField[]",
        "forecastType" => "SearchColumnEnumSelectField[]",
        "fulfillingTransaction" => "SearchColumnSelectField[]",
        "fxAccount" => "SearchColumnStringField[]",
        "fxAmount" => "SearchColumnDoubleField[]",
        "fxCostEstimate" => "SearchColumnDoubleField[]",
        "fxCostEstimateRate" => "SearchColumnDoubleField[]",
        "fxEstGrossProfit" => "SearchColumnDoubleField[]",
        "fxTranCostEstimate" => "SearchColumnDoubleField[]",
        "fxVsoeAllocation" => "SearchColumnDoubleField[]",
        "fxVsoeAmount" => "SearchColumnDoubleField[]",
        "fxVsoePrice" => "SearchColumnDoubleField[]",
        "gcoAvailabelToCharge" => "SearchColumnBooleanField[]",
        "gcoAvailableToRefund" => "SearchColumnBooleanField[]",
        "gcoAvsStreetMatch" => "SearchColumnEnumSelectField[]",
        "gcoAvsZipMatch" => "SearchColumnEnumSelectField[]",
        "gcoBuyerAccountAge" => "SearchColumnLongField[]",
        "gcoBuyerIp" => "SearchColumnStringField[]",
        "gcoChargeAmount" => "SearchColumnDoubleField[]",
        "gcoChargebackAmount" => "SearchColumnDoubleField[]",
        "gcoConfirmedChargedTotal" => "SearchColumnDoubleField[]",
        "gcoConfirmedRefundedTotal" => "SearchColumnDoubleField[]",
        "gcoCreditcardNumber" => "SearchColumnStringField[]",
        "gcoCscMatch" => "SearchColumnEnumSelectField[]",
        "gcoFinancialState" => "SearchColumnStringField[]",
        "gcoFulfillmentState" => "SearchColumnStringField[]",
        "gcoOrderId" => "SearchColumnStringField[]",
        "gcoOrderTotal" => "SearchColumnDoubleField[]",
        "gcoPromotionAmount" => "SearchColumnDoubleField[]",
        "gcoPromotionName" => "SearchColumnStringField[]",
        "gcoRefundAmount" => "SearchColumnDoubleField[]",
        "gcoShippingTotal" => "SearchColumnDoubleField[]",
        "gcoStateChangedDetail" => "SearchColumnStringField[]",
        "giftCert" => "SearchColumnStringField[]",
        "grossAmount" => "SearchColumnDoubleField[]",
        "includeInForecast" => "SearchColumnBooleanField[]",
        "incoterm" => "SearchColumnSelectField[]",
        "intercoStatus" => "SearchColumnEnumSelectField[]",
        "intercoTransaction" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "inventoryLocation" => "SearchColumnSelectField[]",
        "inventorySubsidiary" => "SearchColumnSelectField[]",
        "inVsoeBundle" => "SearchColumnBooleanField[]",
        "isAllocation" => "SearchColumnBooleanField[]",
        "isBackflush" => "SearchColumnBooleanField[]",
        "isGcoChargeback" => "SearchColumnBooleanField[]",
        "isGcoChargeConfirmed" => "SearchColumnBooleanField[]",
        "isGcoPaymentGuaranteed" => "SearchColumnBooleanField[]",
        "isGcoRefundConfirmed" => "SearchColumnBooleanField[]",
        "isInsideDelivery" => "SearchColumnBooleanField[]",
        "isInsidePickup" => "SearchColumnBooleanField[]",
        "isIntercompanyAdjustment" => "SearchColumnBooleanField[]",
        "isInTransitPayment" => "SearchColumnBooleanField[]",
        "isMultiShipTo" => "SearchColumnBooleanField[]",
        "isReversal" => "SearchColumnBooleanField[]",
        "isRevRecTransaction" => "SearchColumnBooleanField[]",
        "isScrap" => "SearchColumnBooleanField[]",
        "isShipAddress" => "SearchColumnBooleanField[]",
        "isTransferPriceCosting" => "SearchColumnBooleanField[]",
        "isWip" => "SearchColumnBooleanField[]",
        "item" => "SearchColumnSelectField[]",
        "itemFulfillmentChoice" => "SearchColumnEnumSelectField[]",
        "itemRevision" => "SearchColumnSelectField[]",
        "landedCostPerLine" => "SearchColumnBooleanField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "leadSource" => "SearchColumnSelectField[]",
        "line" => "SearchColumnLongField[]",
        "lineSequenceNumber" => "SearchColumnLongField[]",
        "lineUniqueKey" => "SearchColumnLongField[]",
        "location" => "SearchColumnSelectField[]",
        "locationAutoAssigned" => "SearchColumnBooleanField[]",
        "mainLine" => "SearchColumnBooleanField[]",
        "mainName" => "SearchColumnStringField[]",
        "manufacturingRouting" => "SearchColumnSelectField[]",
        "matchBillToReceipt" => "SearchColumnBooleanField[]",
        "memo" => "SearchColumnStringField[]",
        "memoMain" => "SearchColumnStringField[]",
        "memorized" => "SearchColumnBooleanField[]",
        "merchantAccount" => "SearchColumnSelectField[]",
        "message" => "SearchColumnStringField[]",
        "multiSubsidiary" => "SearchColumnBooleanField[]",
        "netAmount" => "SearchColumnDoubleField[]",
        "netAmountNoTax" => "SearchColumnDoubleField[]",
        "nextApprover" => "SearchColumnSelectField[]",
        "nextBillDate" => "SearchColumnDateField[]",
        "nexus" => "SearchColumnSelectField[]",
        "noAutoAssignLocation" => "SearchColumnBooleanField[]",
        "nonReimbursable" => "SearchColumnBooleanField[]",
        "oneTimeTotal" => "SearchColumnDoubleField[]",
        "opportunity" => "SearchColumnSelectField[]",
        "options" => "SearchColumnStringField[]",
        "orderAllocationStrategy" => "SearchColumnSelectField[]",
        "orderPriority" => "SearchColumnDoubleField[]",
        "originator" => "SearchColumnEnumSelectField[]",
        "otherRefNum" => "SearchColumnTextNumberField[]",
        "overheadParentItem" => "SearchColumnSelectField[]",
        "overrideInstallments" => "SearchColumnBooleanField[]",
        "packageCount" => "SearchColumnLongField[]",
        "paidAmount" => "SearchColumnDoubleField[]",
        "paidTransaction" => "SearchColumnSelectField[]",
        "partner" => "SearchColumnSelectField[]",
        "partnerContribution" => "SearchColumnDoubleField[]",
        "partnerRole" => "SearchColumnSelectField[]",
        "partnerTeamMember" => "SearchColumnSelectField[]",
        "payingAmount" => "SearchColumnDoubleField[]",
        "payingTransaction" => "SearchColumnSelectField[]",
        "paymentApproved" => "SearchColumnBooleanField[]",
        "paymentEventDate" => "SearchColumnDateField[]",
        "paymentEventHoldReason" => "SearchColumnEnumSelectField[]",
        "paymentEventPurchaseCardUsed" => "SearchColumnBooleanField[]",
        "paymentEventPurchaseDataSent" => "SearchColumnBooleanField[]",
        "paymentEventResult" => "SearchColumnEnumSelectField[]",
        "paymentEventType" => "SearchColumnEnumSelectField[]",
        "paymentHold" => "SearchColumnBooleanField[]",
        "paymentMethod" => "SearchColumnSelectField[]",
        "paymentOption" => "SearchColumnSelectField[]",
        "payPalPending" => "SearchColumnBooleanField[]",
        "payPalStatus" => "SearchColumnStringField[]",
        "payPalTranId" => "SearchColumnStringField[]",
        "payrollBatch" => "SearchColumnStringField[]",
        "pnRefNum" => "SearchColumnStringField[]",
        "poRate" => "SearchColumnDoubleField[]",
        "posting" => "SearchColumnBooleanField[]",
        "postingPeriod" => "SearchColumnSelectField[]",
        "priceLevel" => "SearchColumnSelectField[]",
        "print" => "SearchColumnStringField[]",
        "probability" => "SearchColumnDoubleField[]",
        "projectedAmount" => "SearchColumnDoubleField[]",
        "projectTask" => "SearchColumnSelectField[]",
        "promoCode" => "SearchColumnSelectField[]",
        "purchaseOrder" => "SearchColumnSelectField[]",
        "quantity" => "SearchColumnDoubleField[]",
        "quantityBilled" => "SearchColumnDoubleField[]",
        "quantityCommitted" => "SearchColumnDoubleField[]",
        "quantityPacked" => "SearchColumnDoubleField[]",
        "quantityPicked" => "SearchColumnDoubleField[]",
        "quantityRevCommitted" => "SearchColumnDoubleField[]",
        "quantityShipRecv" => "SearchColumnDoubleField[]",
        "quantityUom" => "SearchColumnDoubleField[]",
        "rate" => "SearchColumnDoubleField[]",
        "realizedGainPostingTransaction" => "SearchColumnStringField[]",
        "recognizedRevenue" => "SearchColumnDoubleField[]",
        "recordType" => "SearchColumnStringField[]",
        "recurAnnuallyTotal" => "SearchColumnDoubleField[]",
        "recurMonthlyTotal" => "SearchColumnDoubleField[]",
        "recurQuarterlyTotal" => "SearchColumnDoubleField[]",
        "recurringBill" => "SearchColumnBooleanField[]",
        "recurWeeklyTotal" => "SearchColumnDoubleField[]",
        "refNumber" => "SearchColumnLongField[]",
        "requestedDate" => "SearchColumnDateField[]",
        "revCommitStatus" => "SearchColumnEnumSelectField[]",
        "revCommittingTransaction" => "SearchColumnSelectField[]",
        "revenueStatus" => "SearchColumnEnumSelectField[]",
        "reversalDate" => "SearchColumnDateField[]",
        "reversalNumber" => "SearchColumnStringField[]",
        "revRecEndDate" => "SearchColumnDateField[]",
        "revRecOnRevCommitment" => "SearchColumnBooleanField[]",
        "revRecStartDate" => "SearchColumnDateField[]",
        "rgAccount" => "SearchColumnSelectField[]",
        "rgAmount" => "SearchColumnDoubleField[]",
        "salesEffectiveDate" => "SearchColumnDateField[]",
        "salesOrder" => "SearchColumnSelectField[]",
        "salesRep" => "SearchColumnSelectField[]",
        "salesTeamMember" => "SearchColumnSelectField[]",
        "salesTeamRole" => "SearchColumnSelectField[]",
        "schedulingMethod" => "SearchColumnEnumSelectField[]",
        "serialNumber" => "SearchColumnStringField[]",
        "serialNumberCost" => "SearchColumnDoubleField[]",
        "serialNumberCostAdjustment" => "SearchColumnDoubleField[]",
        "serialNumberQuantity" => "SearchColumnDoubleField[]",
        "serialNumbers" => "SearchColumnStringField[]",
        "shipAddress" => "SearchColumnStringField[]",
        "shipAddress1" => "SearchColumnStringField[]",
        "shipAddress2" => "SearchColumnStringField[]",
        "shipAddress3" => "SearchColumnStringField[]",
        "shipAddressee" => "SearchColumnStringField[]",
        "shipAttention" => "SearchColumnStringField[]",
        "shipCarrier" => "SearchColumnEnumSelectField[]",
        "shipCity" => "SearchColumnStringField[]",
        "shipComplete" => "SearchColumnBooleanField[]",
        "shipCountry" => "SearchColumnEnumSelectField[]",
        "shipCountryCode" => "SearchColumnStringField[]",
        "shipDate" => "SearchColumnDateField[]",
        "shipGroup" => "SearchColumnLongField[]",
        "shipMethod" => "SearchColumnSelectField[]",
        "shipPhone" => "SearchColumnStringField[]",
        "shippingAmount" => "SearchColumnDoubleField[]",
        "shipRecvStatusLine" => "SearchColumnBooleanField[]",
        "shipState" => "SearchColumnStringField[]",
        "shipTo" => "SearchColumnSelectField[]",
        "shipZip" => "SearchColumnStringField[]",
        "signedAmount" => "SearchColumnDoubleField[]",
        "source" => "SearchColumnStringField[]",
        "startDate" => "SearchColumnDateField[]",
        "status" => "SearchColumnEnumSelectField[]",
        "subscription" => "SearchColumnSelectField[]",
        "subscriptionLine" => "SearchColumnSelectField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "subsidiaryTaxRegNum" => "SearchColumnStringField[]",
        "taxAmount" => "SearchColumnDoubleField[]",
        "taxCode" => "SearchColumnSelectField[]",
        "taxLine" => "SearchColumnBooleanField[]",
        "taxPeriod" => "SearchColumnSelectField[]",
        "taxPointDate" => "SearchColumnDateField[]",
        "taxTotal" => "SearchColumnDoubleField[]",
        "termInMonths" => "SearchColumnLongField[]",
        "terms" => "SearchColumnSelectField[]",
        "termsOfSale" => "SearchColumnStringField[]",
        "title" => "SearchColumnStringField[]",
        "toBeEmailed" => "SearchColumnBooleanField[]",
        "toBePrinted" => "SearchColumnBooleanField[]",
        "toSubsidiary" => "SearchColumnSelectField[]",
        "total" => "SearchColumnDoubleField[]",
        "totalCostEstimate" => "SearchColumnDoubleField[]",
        "trackingNumbers" => "SearchColumnStringField[]",
        "tranDate" => "SearchColumnDateField[]",
        "tranEstGrossProfit" => "SearchColumnDoubleField[]",
        "tranFxEstGrossProfit" => "SearchColumnDoubleField[]",
        "tranId" => "SearchColumnStringField[]",
        "tranIsVsoeBundle" => "SearchColumnBooleanField[]",
        "transactionDiscount" => "SearchColumnBooleanField[]",
        "transactionLineType" => "SearchColumnEnumSelectField[]",
        "transactionNumber" => "SearchColumnStringField[]",
        "transferLocation" => "SearchColumnSelectField[]",
        "transferOrderItemLine" => "SearchColumnStringField[]",
        "transferOrderQuantityCommitted" => "SearchColumnDoubleField[]",
        "transferOrderQuantityPacked" => "SearchColumnDoubleField[]",
        "transferOrderQuantityPicked" => "SearchColumnDoubleField[]",
        "transferOrderQuantityReceived" => "SearchColumnDoubleField[]",
        "transferOrderQuantityShipped" => "SearchColumnDoubleField[]",
        "type" => "SearchColumnEnumSelectField[]",
        "unit" => "SearchColumnStringField[]",
        "unitCostOverride" => "SearchColumnDoubleField[]",
        "vendType" => "SearchColumnSelectField[]",
        "visibleToCustomer" => "SearchColumnBooleanField[]",
        "vsoeAllocation" => "SearchColumnDoubleField[]",
        "vsoeAmount" => "SearchColumnDoubleField[]",
        "vsoeDeferral" => "SearchColumnEnumSelectField[]",
        "vsoeDelivered" => "SearchColumnBooleanField[]",
        "vsoePermitDiscount" => "SearchColumnEnumSelectField[]",
        "vsoePrice" => "SearchColumnDoubleField[]",
        "webSite" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnStringField[] $abbrev
     * @return TransactionSearchRowBasic
     */
    public function setAbbrev(SearchColumnStringField $abbrev): TransactionSearchRowBasic
    {
        $this->abbrev[] = $abbrev;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAbbrev(): array
    {
        return $this->abbrev;
    }

    /**
     * @param SearchColumnSelectField[] $account
     * @return TransactionSearchRowBasic
     */
    public function setAccount(SearchColumnSelectField $account): TransactionSearchRowBasic
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccount(): array
    {
        return $this->account;
    }

    /**
     * @param SearchColumnEnumSelectField[] $accountType
     * @return TransactionSearchRowBasic
     */
    public function setAccountType(SearchColumnEnumSelectField $accountType): TransactionSearchRowBasic
    {
        $this->accountType[] = $accountType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getAccountType(): array
    {
        return $this->accountType;
    }

    /**
     * @param SearchColumnSelectField[] $acctCorpCardExp
     * @return TransactionSearchRowBasic
     */
    public function setAcctCorpCardExp(SearchColumnSelectField $acctCorpCardExp): TransactionSearchRowBasic
    {
        $this->acctCorpCardExp[] = $acctCorpCardExp;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAcctCorpCardExp(): array
    {
        return $this->acctCorpCardExp;
    }

    /**
     * @param SearchColumnDateField[] $actualProductionEndDate
     * @return TransactionSearchRowBasic
     */
    public function setActualProductionEndDate(SearchColumnDateField $actualProductionEndDate): TransactionSearchRowBasic
    {
        $this->actualProductionEndDate[] = $actualProductionEndDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getActualProductionEndDate(): array
    {
        return $this->actualProductionEndDate;
    }

    /**
     * @param SearchColumnDateField[] $actualProductionStartDate
     * @return TransactionSearchRowBasic
     */
    public function setActualProductionStartDate(SearchColumnDateField $actualProductionStartDate): TransactionSearchRowBasic
    {
        $this->actualProductionStartDate[] = $actualProductionStartDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getActualProductionStartDate(): array
    {
        return $this->actualProductionStartDate;
    }

    /**
     * @param SearchColumnDateField[] $actualShipDate
     * @return TransactionSearchRowBasic
     */
    public function setActualShipDate(SearchColumnDateField $actualShipDate): TransactionSearchRowBasic
    {
        $this->actualShipDate[] = $actualShipDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getActualShipDate(): array
    {
        return $this->actualShipDate;
    }

    /**
     * @param SearchColumnDoubleField[] $altSalesAmount
     * @return TransactionSearchRowBasic
     */
    public function setAltSalesAmount(SearchColumnDoubleField $altSalesAmount): TransactionSearchRowBasic
    {
        $this->altSalesAmount[] = $altSalesAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAltSalesAmount(): array
    {
        return $this->altSalesAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $altSalesNetAmount
     * @return TransactionSearchRowBasic
     */
    public function setAltSalesNetAmount(SearchColumnDoubleField $altSalesNetAmount): TransactionSearchRowBasic
    {
        $this->altSalesNetAmount[] = $altSalesNetAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAltSalesNetAmount(): array
    {
        return $this->altSalesNetAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $amount
     * @return TransactionSearchRowBasic
     */
    public function setAmount(SearchColumnDoubleField $amount): TransactionSearchRowBasic
    {
        $this->amount[] = $amount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmount(): array
    {
        return $this->amount;
    }

    /**
     * @param SearchColumnDoubleField[] $amountPaid
     * @return TransactionSearchRowBasic
     */
    public function setAmountPaid(SearchColumnDoubleField $amountPaid): TransactionSearchRowBasic
    {
        $this->amountPaid[] = $amountPaid;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmountPaid(): array
    {
        return $this->amountPaid;
    }

    /**
     * @param SearchColumnDoubleField[] $amountRemaining
     * @return TransactionSearchRowBasic
     */
    public function setAmountRemaining(SearchColumnDoubleField $amountRemaining): TransactionSearchRowBasic
    {
        $this->amountRemaining[] = $amountRemaining;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmountRemaining(): array
    {
        return $this->amountRemaining;
    }

    /**
     * @param SearchColumnDoubleField[] $amountUnbilled
     * @return TransactionSearchRowBasic
     */
    public function setAmountUnbilled(SearchColumnDoubleField $amountUnbilled): TransactionSearchRowBasic
    {
        $this->amountUnbilled[] = $amountUnbilled;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmountUnbilled(): array
    {
        return $this->amountUnbilled;
    }

    /**
     * @param SearchColumnDoubleField[] $appliedToForeignAmount
     * @return TransactionSearchRowBasic
     */
    public function setAppliedToForeignAmount(SearchColumnDoubleField $appliedToForeignAmount): TransactionSearchRowBasic
    {
        $this->appliedToForeignAmount[] = $appliedToForeignAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAppliedToForeignAmount(): array
    {
        return $this->appliedToForeignAmount;
    }

    /**
     * @param SearchColumnBooleanField[] $appliedToIsFxVariance
     * @return TransactionSearchRowBasic
     */
    public function setAppliedToIsFxVariance(SearchColumnBooleanField $appliedToIsFxVariance): TransactionSearchRowBasic
    {
        $this->appliedToIsFxVariance[] = $appliedToIsFxVariance;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAppliedToIsFxVariance(): array
    {
        return $this->appliedToIsFxVariance;
    }

    /**
     * @param SearchColumnDoubleField[] $appliedToLinkAmount
     * @return TransactionSearchRowBasic
     */
    public function setAppliedToLinkAmount(SearchColumnDoubleField $appliedToLinkAmount): TransactionSearchRowBasic
    {
        $this->appliedToLinkAmount[] = $appliedToLinkAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAppliedToLinkAmount(): array
    {
        return $this->appliedToLinkAmount;
    }

    /**
     * @param SearchColumnStringField[] $appliedToLinkType
     * @return TransactionSearchRowBasic
     */
    public function setAppliedToLinkType(SearchColumnStringField $appliedToLinkType): TransactionSearchRowBasic
    {
        $this->appliedToLinkType[] = $appliedToLinkType;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAppliedToLinkType(): array
    {
        return $this->appliedToLinkType;
    }

    /**
     * @param SearchColumnSelectField[] $appliedToTransaction
     * @return TransactionSearchRowBasic
     */
    public function setAppliedToTransaction(SearchColumnSelectField $appliedToTransaction): TransactionSearchRowBasic
    {
        $this->appliedToTransaction[] = $appliedToTransaction;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAppliedToTransaction(): array
    {
        return $this->appliedToTransaction;
    }

    /**
     * @param SearchColumnDoubleField[] $applyingForeignAmount
     * @return TransactionSearchRowBasic
     */
    public function setApplyingForeignAmount(SearchColumnDoubleField $applyingForeignAmount): TransactionSearchRowBasic
    {
        $this->applyingForeignAmount[] = $applyingForeignAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getApplyingForeignAmount(): array
    {
        return $this->applyingForeignAmount;
    }

    /**
     * @param SearchColumnBooleanField[] $applyingIsFxVariance
     * @return TransactionSearchRowBasic
     */
    public function setApplyingIsFxVariance(SearchColumnBooleanField $applyingIsFxVariance): TransactionSearchRowBasic
    {
        $this->applyingIsFxVariance[] = $applyingIsFxVariance;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getApplyingIsFxVariance(): array
    {
        return $this->applyingIsFxVariance;
    }

    /**
     * @param SearchColumnDoubleField[] $applyingLinkAmount
     * @return TransactionSearchRowBasic
     */
    public function setApplyingLinkAmount(SearchColumnDoubleField $applyingLinkAmount): TransactionSearchRowBasic
    {
        $this->applyingLinkAmount[] = $applyingLinkAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getApplyingLinkAmount(): array
    {
        return $this->applyingLinkAmount;
    }

    /**
     * @param SearchColumnStringField[] $applyingLinkType
     * @return TransactionSearchRowBasic
     */
    public function setApplyingLinkType(SearchColumnStringField $applyingLinkType): TransactionSearchRowBasic
    {
        $this->applyingLinkType[] = $applyingLinkType;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getApplyingLinkType(): array
    {
        return $this->applyingLinkType;
    }

    /**
     * @param SearchColumnSelectField[] $applyingTransaction
     * @return TransactionSearchRowBasic
     */
    public function setApplyingTransaction(SearchColumnSelectField $applyingTransaction): TransactionSearchRowBasic
    {
        $this->applyingTransaction[] = $applyingTransaction;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getApplyingTransaction(): array
    {
        return $this->applyingTransaction;
    }

    /**
     * @param SearchColumnEnumSelectField[] $approvalStatus
     * @return TransactionSearchRowBasic
     */
    public function setApprovalStatus(SearchColumnEnumSelectField $approvalStatus): TransactionSearchRowBasic
    {
        $this->approvalStatus[] = $approvalStatus;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getApprovalStatus(): array
    {
        return $this->approvalStatus;
    }

    /**
     * @param SearchColumnStringField[] $authCode
     * @return TransactionSearchRowBasic
     */
    public function setAuthCode(SearchColumnStringField $authCode): TransactionSearchRowBasic
    {
        $this->authCode[] = $authCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAuthCode(): array
    {
        return $this->authCode;
    }

    /**
     * @param SearchColumnBooleanField[] $autoCalculateLag
     * @return TransactionSearchRowBasic
     */
    public function setAutoCalculateLag(SearchColumnBooleanField $autoCalculateLag): TransactionSearchRowBasic
    {
        $this->autoCalculateLag[] = $autoCalculateLag;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAutoCalculateLag(): array
    {
        return $this->autoCalculateLag;
    }

    /**
     * @param SearchColumnEnumSelectField[] $avsStreetMatch
     * @return TransactionSearchRowBasic
     */
    public function setAvsStreetMatch(SearchColumnEnumSelectField $avsStreetMatch): TransactionSearchRowBasic
    {
        $this->avsStreetMatch[] = $avsStreetMatch;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getAvsStreetMatch(): array
    {
        return $this->avsStreetMatch;
    }

    /**
     * @param SearchColumnEnumSelectField[] $avsZipMatch
     * @return TransactionSearchRowBasic
     */
    public function setAvsZipMatch(SearchColumnEnumSelectField $avsZipMatch): TransactionSearchRowBasic
    {
        $this->avsZipMatch[] = $avsZipMatch;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getAvsZipMatch(): array
    {
        return $this->avsZipMatch;
    }

    /**
     * @param SearchColumnBooleanField[] $billable
     * @return TransactionSearchRowBasic
     */
    public function setBillable(SearchColumnBooleanField $billable): TransactionSearchRowBasic
    {
        $this->billable[] = $billable;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getBillable(): array
    {
        return $this->billable;
    }

    /**
     * @param SearchColumnStringField[] $billAddress
     * @return TransactionSearchRowBasic
     */
    public function setBillAddress(SearchColumnStringField $billAddress): TransactionSearchRowBasic
    {
        $this->billAddress[] = $billAddress;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillAddress(): array
    {
        return $this->billAddress;
    }

    /**
     * @param SearchColumnStringField[] $billAddressee
     * @return TransactionSearchRowBasic
     */
    public function setBillAddressee(SearchColumnStringField $billAddressee): TransactionSearchRowBasic
    {
        $this->billAddressee[] = $billAddressee;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillAddressee(): array
    {
        return $this->billAddressee;
    }

    /**
     * @param SearchColumnStringField[] $billAttention
     * @return TransactionSearchRowBasic
     */
    public function setBillAttention(SearchColumnStringField $billAttention): TransactionSearchRowBasic
    {
        $this->billAttention[] = $billAttention;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillAttention(): array
    {
        return $this->billAttention;
    }

    /**
     * @param SearchColumnStringField[] $billCity
     * @return TransactionSearchRowBasic
     */
    public function setBillCity(SearchColumnStringField $billCity): TransactionSearchRowBasic
    {
        $this->billCity[] = $billCity;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillCity(): array
    {
        return $this->billCity;
    }

    /**
     * @param SearchColumnEnumSelectField[] $billCountry
     * @return TransactionSearchRowBasic
     */
    public function setBillCountry(SearchColumnEnumSelectField $billCountry): TransactionSearchRowBasic
    {
        $this->billCountry[] = $billCountry;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getBillCountry(): array
    {
        return $this->billCountry;
    }

    /**
     * @param SearchColumnStringField[] $billCountryCode
     * @return TransactionSearchRowBasic
     */
    public function setBillCountryCode(SearchColumnStringField $billCountryCode): TransactionSearchRowBasic
    {
        $this->billCountryCode[] = $billCountryCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillCountryCode(): array
    {
        return $this->billCountryCode;
    }

    /**
     * @param SearchColumnDateField[] $billedDate
     * @return TransactionSearchRowBasic
     */
    public function setBilledDate(SearchColumnDateField $billedDate): TransactionSearchRowBasic
    {
        $this->billedDate[] = $billedDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getBilledDate(): array
    {
        return $this->billedDate;
    }

    /**
     * @param SearchColumnSelectField[] $billingAccount
     * @return TransactionSearchRowBasic
     */
    public function setBillingAccount(SearchColumnSelectField $billingAccount): TransactionSearchRowBasic
    {
        $this->billingAccount[] = $billingAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillingAccount(): array
    {
        return $this->billingAccount;
    }

    /**
     * @param SearchColumnDoubleField[] $billingAmount
     * @return TransactionSearchRowBasic
     */
    public function setBillingAmount(SearchColumnDoubleField $billingAmount): TransactionSearchRowBasic
    {
        $this->billingAmount[] = $billingAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBillingAmount(): array
    {
        return $this->billingAmount;
    }

    /**
     * @param SearchColumnSelectField[] $billingSchedule
     * @return TransactionSearchRowBasic
     */
    public function setBillingSchedule(SearchColumnSelectField $billingSchedule): TransactionSearchRowBasic
    {
        $this->billingSchedule[] = $billingSchedule;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillingSchedule(): array
    {
        return $this->billingSchedule;
    }

    /**
     * @param SearchColumnSelectField[] $billingTransaction
     * @return TransactionSearchRowBasic
     */
    public function setBillingTransaction(SearchColumnSelectField $billingTransaction): TransactionSearchRowBasic
    {
        $this->billingTransaction[] = $billingTransaction;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillingTransaction(): array
    {
        return $this->billingTransaction;
    }

    /**
     * @param SearchColumnStringField[] $billPhone
     * @return TransactionSearchRowBasic
     */
    public function setBillPhone(SearchColumnStringField $billPhone): TransactionSearchRowBasic
    {
        $this->billPhone[] = $billPhone;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillPhone(): array
    {
        return $this->billPhone;
    }

    /**
     * @param SearchColumnStringField[] $billState
     * @return TransactionSearchRowBasic
     */
    public function setBillState(SearchColumnStringField $billState): TransactionSearchRowBasic
    {
        $this->billState[] = $billState;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillState(): array
    {
        return $this->billState;
    }

    /**
     * @param SearchColumnEnumSelectField[] $billVarianceStatus
     * @return TransactionSearchRowBasic
     */
    public function setBillVarianceStatus(SearchColumnEnumSelectField $billVarianceStatus): TransactionSearchRowBasic
    {
        $this->billVarianceStatus[] = $billVarianceStatus;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getBillVarianceStatus(): array
    {
        return $this->billVarianceStatus;
    }

    /**
     * @param SearchColumnStringField[] $billZip
     * @return TransactionSearchRowBasic
     */
    public function setBillZip(SearchColumnStringField $billZip): TransactionSearchRowBasic
    {
        $this->billZip[] = $billZip;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillZip(): array
    {
        return $this->billZip;
    }

    /**
     * @param SearchColumnStringField[] $binNumber
     * @return TransactionSearchRowBasic
     */
    public function setBinNumber(SearchColumnStringField $binNumber): TransactionSearchRowBasic
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
     * @param SearchColumnDoubleField[] $binNumberQuantity
     * @return TransactionSearchRowBasic
     */
    public function setBinNumberQuantity(SearchColumnDoubleField $binNumberQuantity): TransactionSearchRowBasic
    {
        $this->binNumberQuantity[] = $binNumberQuantity;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBinNumberQuantity(): array
    {
        return $this->binNumberQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $bomQuantity
     * @return TransactionSearchRowBasic
     */
    public function setBomQuantity(SearchColumnDoubleField $bomQuantity): TransactionSearchRowBasic
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
     * @return TransactionSearchRowBasic
     */
    public function setBuildEntireAssembly(SearchColumnBooleanField $buildEntireAssembly): TransactionSearchRowBasic
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
     * @param SearchColumnDoubleField[] $buildVariance
     * @return TransactionSearchRowBasic
     */
    public function setBuildVariance(SearchColumnDoubleField $buildVariance): TransactionSearchRowBasic
    {
        $this->buildVariance[] = $buildVariance;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBuildVariance(): array
    {
        return $this->buildVariance;
    }

    /**
     * @param SearchColumnDoubleField[] $built
     * @return TransactionSearchRowBasic
     */
    public function setBuilt(SearchColumnDoubleField $built): TransactionSearchRowBasic
    {
        $this->built[] = $built;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBuilt(): array
    {
        return $this->built;
    }

    /**
     * @param SearchColumnBooleanField[] $canHaveStackablePromotions
     * @return TransactionSearchRowBasic
     */
    public function setCanHaveStackablePromotions(SearchColumnBooleanField $canHaveStackablePromotions): TransactionSearchRowBasic
    {
        $this->canHaveStackablePromotions[] = $canHaveStackablePromotions;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCanHaveStackablePromotions(): array
    {
        return $this->canHaveStackablePromotions;
    }

    /**
     * @param SearchColumnStringField[] $catchUpPeriod
     * @return TransactionSearchRowBasic
     */
    public function setCatchUpPeriod(SearchColumnStringField $catchUpPeriod): TransactionSearchRowBasic
    {
        $this->catchUpPeriod[] = $catchUpPeriod;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCatchUpPeriod(): array
    {
        return $this->catchUpPeriod;
    }

    /**
     * @param SearchColumnStringField[] $ccCustomerCode
     * @return TransactionSearchRowBasic
     */
    public function setCcCustomerCode(SearchColumnStringField $ccCustomerCode): TransactionSearchRowBasic
    {
        $this->ccCustomerCode[] = $ccCustomerCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCcCustomerCode(): array
    {
        return $this->ccCustomerCode;
    }

    /**
     * @param SearchColumnDateField[] $ccExpDate
     * @return TransactionSearchRowBasic
     */
    public function setCcExpDate(SearchColumnDateField $ccExpDate): TransactionSearchRowBasic
    {
        $this->ccExpDate[] = $ccExpDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCcExpDate(): array
    {
        return $this->ccExpDate;
    }

    /**
     * @param SearchColumnStringField[] $ccHolderName
     * @return TransactionSearchRowBasic
     */
    public function setCcHolderName(SearchColumnStringField $ccHolderName): TransactionSearchRowBasic
    {
        $this->ccHolderName[] = $ccHolderName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCcHolderName(): array
    {
        return $this->ccHolderName;
    }

    /**
     * @param SearchColumnStringField[] $ccNumber
     * @return TransactionSearchRowBasic
     */
    public function setCcNumber(SearchColumnStringField $ccNumber): TransactionSearchRowBasic
    {
        $this->ccNumber[] = $ccNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCcNumber(): array
    {
        return $this->ccNumber;
    }

    /**
     * @param SearchColumnStringField[] $ccStreet
     * @return TransactionSearchRowBasic
     */
    public function setCcStreet(SearchColumnStringField $ccStreet): TransactionSearchRowBasic
    {
        $this->ccStreet[] = $ccStreet;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCcStreet(): array
    {
        return $this->ccStreet;
    }

    /**
     * @param SearchColumnStringField[] $ccZipCode
     * @return TransactionSearchRowBasic
     */
    public function setCcZipCode(SearchColumnStringField $ccZipCode): TransactionSearchRowBasic
    {
        $this->ccZipCode[] = $ccZipCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCcZipCode(): array
    {
        return $this->ccZipCode;
    }

    /**
     * @param SearchColumnSelectField[] $class
     * @return TransactionSearchRowBasic
     */
    public function setClass(SearchColumnSelectField $class): TransactionSearchRowBasic
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
     * @param SearchColumnBooleanField[] $cleared
     * @return TransactionSearchRowBasic
     */
    public function setCleared(SearchColumnBooleanField $cleared): TransactionSearchRowBasic
    {
        $this->cleared[] = $cleared;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCleared(): array
    {
        return $this->cleared;
    }

    /**
     * @param SearchColumnBooleanField[] $closed
     * @return TransactionSearchRowBasic
     */
    public function setClosed(SearchColumnBooleanField $closed): TransactionSearchRowBasic
    {
        $this->closed[] = $closed;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getClosed(): array
    {
        return $this->closed;
    }

    /**
     * @param SearchColumnDateField[] $closeDate
     * @return TransactionSearchRowBasic
     */
    public function setCloseDate(SearchColumnDateField $closeDate): TransactionSearchRowBasic
    {
        $this->closeDate[] = $closeDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCloseDate(): array
    {
        return $this->closeDate;
    }

    /**
     * @param SearchColumnDoubleField[] $cogsAmount
     * @return TransactionSearchRowBasic
     */
    public function setCogsAmount(SearchColumnDoubleField $cogsAmount): TransactionSearchRowBasic
    {
        $this->cogsAmount[] = $cogsAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCogsAmount(): array
    {
        return $this->cogsAmount;
    }

    /**
     * @param SearchColumnDateField[] $commissionEffectiveDate
     * @return TransactionSearchRowBasic
     */
    public function setCommissionEffectiveDate(SearchColumnDateField $commissionEffectiveDate): TransactionSearchRowBasic
    {
        $this->commissionEffectiveDate[] = $commissionEffectiveDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCommissionEffectiveDate(): array
    {
        return $this->commissionEffectiveDate;
    }

    /**
     * @param SearchColumnEnumSelectField[] $commit
     * @return TransactionSearchRowBasic
     */
    public function setCommit(SearchColumnEnumSelectField $commit): TransactionSearchRowBasic
    {
        $this->commit[] = $commit;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCommit(): array
    {
        return $this->commit;
    }

    /**
     * @param SearchColumnDoubleField[] $componentYield
     * @return TransactionSearchRowBasic
     */
    public function setComponentYield(SearchColumnDoubleField $componentYield): TransactionSearchRowBasic
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
     * @param SearchColumnStringField[] $confirmationNumber
     * @return TransactionSearchRowBasic
     */
    public function setConfirmationNumber(SearchColumnStringField $confirmationNumber): TransactionSearchRowBasic
    {
        $this->confirmationNumber[] = $confirmationNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getConfirmationNumber(): array
    {
        return $this->confirmationNumber;
    }

    /**
     * @param SearchColumnDoubleField[] $contribution
     * @return TransactionSearchRowBasic
     */
    public function setContribution(SearchColumnDoubleField $contribution): TransactionSearchRowBasic
    {
        $this->contribution[] = $contribution;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getContribution(): array
    {
        return $this->contribution;
    }

    /**
     * @param SearchColumnDoubleField[] $contributionPrimary
     * @return TransactionSearchRowBasic
     */
    public function setContributionPrimary(SearchColumnDoubleField $contributionPrimary): TransactionSearchRowBasic
    {
        $this->contributionPrimary[] = $contributionPrimary;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getContributionPrimary(): array
    {
        return $this->contributionPrimary;
    }

    /**
     * @param SearchColumnDoubleField[] $costComponentAmount
     * @return TransactionSearchRowBasic
     */
    public function setCostComponentAmount(SearchColumnDoubleField $costComponentAmount): TransactionSearchRowBasic
    {
        $this->costComponentAmount[] = $costComponentAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostComponentAmount(): array
    {
        return $this->costComponentAmount;
    }

    /**
     * @param SearchColumnStringField[] $costComponentCategory
     * @return TransactionSearchRowBasic
     */
    public function setCostComponentCategory(SearchColumnStringField $costComponentCategory): TransactionSearchRowBasic
    {
        $this->costComponentCategory[] = $costComponentCategory;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCostComponentCategory(): array
    {
        return $this->costComponentCategory;
    }

    /**
     * @param SearchColumnStringField[] $costComponentItem
     * @return TransactionSearchRowBasic
     */
    public function setCostComponentItem(SearchColumnStringField $costComponentItem): TransactionSearchRowBasic
    {
        $this->costComponentItem[] = $costComponentItem;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCostComponentItem(): array
    {
        return $this->costComponentItem;
    }

    /**
     * @param SearchColumnDoubleField[] $costComponentQuantity
     * @return TransactionSearchRowBasic
     */
    public function setCostComponentQuantity(SearchColumnDoubleField $costComponentQuantity): TransactionSearchRowBasic
    {
        $this->costComponentQuantity[] = $costComponentQuantity;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostComponentQuantity(): array
    {
        return $this->costComponentQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $costComponentStandardCost
     * @return TransactionSearchRowBasic
     */
    public function setCostComponentStandardCost(SearchColumnDoubleField $costComponentStandardCost): TransactionSearchRowBasic
    {
        $this->costComponentStandardCost[] = $costComponentStandardCost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostComponentStandardCost(): array
    {
        return $this->costComponentStandardCost;
    }

    /**
     * @param SearchColumnDoubleField[] $costEstimate
     * @return TransactionSearchRowBasic
     */
    public function setCostEstimate(SearchColumnDoubleField $costEstimate): TransactionSearchRowBasic
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
     * @param SearchColumnDoubleField[] $costEstimateRate
     * @return TransactionSearchRowBasic
     */
    public function setCostEstimateRate(SearchColumnDoubleField $costEstimateRate): TransactionSearchRowBasic
    {
        $this->costEstimateRate[] = $costEstimateRate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostEstimateRate(): array
    {
        return $this->costEstimateRate;
    }

    /**
     * @param SearchColumnEnumSelectField[] $costEstimateType
     * @return TransactionSearchRowBasic
     */
    public function setCostEstimateType(SearchColumnEnumSelectField $costEstimateType): TransactionSearchRowBasic
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
     * @param SearchColumnSelectField[] $createdBy
     * @return TransactionSearchRowBasic
     */
    public function setCreatedBy(SearchColumnSelectField $createdBy): TransactionSearchRowBasic
    {
        $this->createdBy[] = $createdBy;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCreatedBy(): array
    {
        return $this->createdBy;
    }

    /**
     * @param SearchColumnSelectField[] $createdFrom
     * @return TransactionSearchRowBasic
     */
    public function setCreatedFrom(SearchColumnSelectField $createdFrom): TransactionSearchRowBasic
    {
        $this->createdFrom[] = $createdFrom;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCreatedFrom(): array
    {
        return $this->createdFrom;
    }

    /**
     * @param SearchColumnDoubleField[] $creditAmount
     * @return TransactionSearchRowBasic
     */
    public function setCreditAmount(SearchColumnDoubleField $creditAmount): TransactionSearchRowBasic
    {
        $this->creditAmount[] = $creditAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCreditAmount(): array
    {
        return $this->creditAmount;
    }

    /**
     * @param SearchColumnEnumSelectField[] $cscMatch
     * @return TransactionSearchRowBasic
     */
    public function setCscMatch(SearchColumnEnumSelectField $cscMatch): TransactionSearchRowBasic
    {
        $this->cscMatch[] = $cscMatch;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCscMatch(): array
    {
        return $this->cscMatch;
    }

    /**
     * @param SearchColumnSelectField[] $currency
     * @return TransactionSearchRowBasic
     */
    public function setCurrency(SearchColumnSelectField $currency): TransactionSearchRowBasic
    {
        $this->currency[] = $currency;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCurrency(): array
    {
        return $this->currency;
    }

    /**
     * @param SearchColumnSelectField[] $customForm
     * @return TransactionSearchRowBasic
     */
    public function setCustomForm(SearchColumnSelectField $customForm): TransactionSearchRowBasic
    {
        $this->customForm[] = $customForm;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCustomForm(): array
    {
        return $this->customForm;
    }

    /**
     * @param SearchColumnBooleanField[] $customGL
     * @return TransactionSearchRowBasic
     */
    public function setCustomGL(SearchColumnBooleanField $customGL): TransactionSearchRowBasic
    {
        $this->customGL[] = $customGL;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCustomGL(): array
    {
        return $this->customGL;
    }

    /**
     * @param SearchColumnSelectField[] $custType
     * @return TransactionSearchRowBasic
     */
    public function setCustType(SearchColumnSelectField $custType): TransactionSearchRowBasic
    {
        $this->custType[] = $custType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCustType(): array
    {
        return $this->custType;
    }

    /**
     * @param SearchColumnDateField[] $dateCreated
     * @return TransactionSearchRowBasic
     */
    public function setDateCreated(SearchColumnDateField $dateCreated): TransactionSearchRowBasic
    {
        $this->dateCreated[] = $dateCreated;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateCreated(): array
    {
        return $this->dateCreated;
    }

    /**
     * @param SearchColumnLongField[] $daysOpen
     * @return TransactionSearchRowBasic
     */
    public function setDaysOpen(SearchColumnLongField $daysOpen): TransactionSearchRowBasic
    {
        $this->daysOpen[] = $daysOpen;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDaysOpen(): array
    {
        return $this->daysOpen;
    }

    /**
     * @param SearchColumnLongField[] $daysOverdue
     * @return TransactionSearchRowBasic
     */
    public function setDaysOverdue(SearchColumnLongField $daysOverdue): TransactionSearchRowBasic
    {
        $this->daysOverdue[] = $daysOverdue;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDaysOverdue(): array
    {
        return $this->daysOverdue;
    }

    /**
     * @param SearchColumnDoubleField[] $debitAmount
     * @return TransactionSearchRowBasic
     */
    public function setDebitAmount(SearchColumnDoubleField $debitAmount): TransactionSearchRowBasic
    {
        $this->debitAmount[] = $debitAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDebitAmount(): array
    {
        return $this->debitAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $deferredRevenue
     * @return TransactionSearchRowBasic
     */
    public function setDeferredRevenue(SearchColumnDoubleField $deferredRevenue): TransactionSearchRowBasic
    {
        $this->deferredRevenue[] = $deferredRevenue;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDeferredRevenue(): array
    {
        return $this->deferredRevenue;
    }

    /**
     * @param SearchColumnBooleanField[] $deferRevRec
     * @return TransactionSearchRowBasic
     */
    public function setDeferRevRec(SearchColumnBooleanField $deferRevRec): TransactionSearchRowBasic
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
     * @param SearchColumnSelectField[] $department
     * @return TransactionSearchRowBasic
     */
    public function setDepartment(SearchColumnSelectField $department): TransactionSearchRowBasic
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
     * @param SearchColumnDateField[] $depositDate
     * @return TransactionSearchRowBasic
     */
    public function setDepositDate(SearchColumnDateField $depositDate): TransactionSearchRowBasic
    {
        $this->depositDate[] = $depositDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDepositDate(): array
    {
        return $this->depositDate;
    }

    /**
     * @param SearchColumnSelectField[] $depositTransaction
     * @return TransactionSearchRowBasic
     */
    public function setDepositTransaction(SearchColumnSelectField $depositTransaction): TransactionSearchRowBasic
    {
        $this->depositTransaction[] = $depositTransaction;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDepositTransaction(): array
    {
        return $this->depositTransaction;
    }

    /**
     * @param SearchColumnDoubleField[] $discountAmount
     * @return TransactionSearchRowBasic
     */
    public function setDiscountAmount(SearchColumnDoubleField $discountAmount): TransactionSearchRowBasic
    {
        $this->discountAmount[] = $discountAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDiscountAmount(): array
    {
        return $this->discountAmount;
    }

    /**
     * @param SearchColumnStringField[] $docUnit
     * @return TransactionSearchRowBasic
     */
    public function setDocUnit(SearchColumnStringField $docUnit): TransactionSearchRowBasic
    {
        $this->docUnit[] = $docUnit;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDocUnit(): array
    {
        return $this->docUnit;
    }

    /**
     * @param SearchColumnStringField[] $drAccount
     * @return TransactionSearchRowBasic
     */
    public function setDrAccount(SearchColumnStringField $drAccount): TransactionSearchRowBasic
    {
        $this->drAccount[] = $drAccount;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDrAccount(): array
    {
        return $this->drAccount;
    }

    /**
     * @param SearchColumnDateField[] $dueDate
     * @return TransactionSearchRowBasic
     */
    public function setDueDate(SearchColumnDateField $dueDate): TransactionSearchRowBasic
    {
        $this->dueDate[] = $dueDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDueDate(): array
    {
        return $this->dueDate;
    }

    /**
     * @param SearchColumnDoubleField[] $effectiveRate
     * @return TransactionSearchRowBasic
     */
    public function setEffectiveRate(SearchColumnDoubleField $effectiveRate): TransactionSearchRowBasic
    {
        $this->effectiveRate[] = $effectiveRate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEffectiveRate(): array
    {
        return $this->effectiveRate;
    }

    /**
     * @param SearchColumnStringField[] $email
     * @return TransactionSearchRowBasic
     */
    public function setEmail(SearchColumnStringField $email): TransactionSearchRowBasic
    {
        $this->email[] = $email;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEmail(): array
    {
        return $this->email;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return TransactionSearchRowBasic
     */
    public function setEndDate(SearchColumnDateField $endDate): TransactionSearchRowBasic
    {
        $this->endDate[] = $endDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDate(): array
    {
        return $this->endDate;
    }

    /**
     * @param SearchColumnSelectField[] $entity
     * @return TransactionSearchRowBasic
     */
    public function setEntity(SearchColumnSelectField $entity): TransactionSearchRowBasic
    {
        $this->entity[] = $entity;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEntity(): array
    {
        return $this->entity;
    }

    /**
     * @param SearchColumnSelectField[] $entityStatus
     * @return TransactionSearchRowBasic
     */
    public function setEntityStatus(SearchColumnSelectField $entityStatus): TransactionSearchRowBasic
    {
        $this->entityStatus[] = $entityStatus;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEntityStatus(): array
    {
        return $this->entityStatus;
    }

    /**
     * @param SearchColumnDoubleField[] $estGrossProfit
     * @return TransactionSearchRowBasic
     */
    public function setEstGrossProfit(SearchColumnDoubleField $estGrossProfit): TransactionSearchRowBasic
    {
        $this->estGrossProfit[] = $estGrossProfit;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstGrossProfit(): array
    {
        return $this->estGrossProfit;
    }

    /**
     * @param SearchColumnDoubleField[] $estGrossProfitPct
     * @return TransactionSearchRowBasic
     */
    public function setEstGrossProfitPct(SearchColumnDoubleField $estGrossProfitPct): TransactionSearchRowBasic
    {
        $this->estGrossProfitPct[] = $estGrossProfitPct;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstGrossProfitPct(): array
    {
        return $this->estGrossProfitPct;
    }

    /**
     * @param SearchColumnDoubleField[] $estGrossProfitPercent
     * @return TransactionSearchRowBasic
     */
    public function setEstGrossProfitPercent(SearchColumnDoubleField $estGrossProfitPercent): TransactionSearchRowBasic
    {
        $this->estGrossProfitPercent[] = $estGrossProfitPercent;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstGrossProfitPercent(): array
    {
        return $this->estGrossProfitPercent;
    }

    /**
     * @param SearchColumnDoubleField[] $exchangeRate
     * @return TransactionSearchRowBasic
     */
    public function setExchangeRate(SearchColumnDoubleField $exchangeRate): TransactionSearchRowBasic
    {
        $this->exchangeRate[] = $exchangeRate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getExchangeRate(): array
    {
        return $this->exchangeRate;
    }

    /**
     * @param SearchColumnBooleanField[] $excludeCommission
     * @return TransactionSearchRowBasic
     */
    public function setExcludeCommission(SearchColumnBooleanField $excludeCommission): TransactionSearchRowBasic
    {
        $this->excludeCommission[] = $excludeCommission;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getExcludeCommission(): array
    {
        return $this->excludeCommission;
    }

    /**
     * @param SearchColumnBooleanField[] $excludeFromRateRequest
     * @return TransactionSearchRowBasic
     */
    public function setExcludeFromRateRequest(SearchColumnBooleanField $excludeFromRateRequest): TransactionSearchRowBasic
    {
        $this->excludeFromRateRequest[] = $excludeFromRateRequest;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getExcludeFromRateRequest(): array
    {
        return $this->excludeFromRateRequest;
    }

    /**
     * @param SearchColumnDateField[] $expectedCloseDate
     * @return TransactionSearchRowBasic
     */
    public function setExpectedCloseDate(SearchColumnDateField $expectedCloseDate): TransactionSearchRowBasic
    {
        $this->expectedCloseDate[] = $expectedCloseDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getExpectedCloseDate(): array
    {
        return $this->expectedCloseDate;
    }

    /**
     * @param SearchColumnDateField[] $expectedReceiptDate
     * @return TransactionSearchRowBasic
     */
    public function setExpectedReceiptDate(SearchColumnDateField $expectedReceiptDate): TransactionSearchRowBasic
    {
        $this->expectedReceiptDate[] = $expectedReceiptDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getExpectedReceiptDate(): array
    {
        return $this->expectedReceiptDate;
    }

    /**
     * @param SearchColumnSelectField[] $expenseCategory
     * @return TransactionSearchRowBasic
     */
    public function setExpenseCategory(SearchColumnSelectField $expenseCategory): TransactionSearchRowBasic
    {
        $this->expenseCategory[] = $expenseCategory;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExpenseCategory(): array
    {
        return $this->expenseCategory;
    }

    /**
     * @param SearchColumnDateField[] $expenseDate
     * @return TransactionSearchRowBasic
     */
    public function setExpenseDate(SearchColumnDateField $expenseDate): TransactionSearchRowBasic
    {
        $this->expenseDate[] = $expenseDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getExpenseDate(): array
    {
        return $this->expenseDate;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return TransactionSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): TransactionSearchRowBasic
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
     * @param SearchColumnBooleanField[] $firmed
     * @return TransactionSearchRowBasic
     */
    public function setFirmed(SearchColumnBooleanField $firmed): TransactionSearchRowBasic
    {
        $this->firmed[] = $firmed;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getFirmed(): array
    {
        return $this->firmed;
    }

    /**
     * @param SearchColumnEnumSelectField[] $forecastType
     * @return TransactionSearchRowBasic
     */
    public function setForecastType(SearchColumnEnumSelectField $forecastType): TransactionSearchRowBasic
    {
        $this->forecastType[] = $forecastType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getForecastType(): array
    {
        return $this->forecastType;
    }

    /**
     * @param SearchColumnSelectField[] $fulfillingTransaction
     * @return TransactionSearchRowBasic
     */
    public function setFulfillingTransaction(SearchColumnSelectField $fulfillingTransaction): TransactionSearchRowBasic
    {
        $this->fulfillingTransaction[] = $fulfillingTransaction;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getFulfillingTransaction(): array
    {
        return $this->fulfillingTransaction;
    }

    /**
     * @param SearchColumnStringField[] $fxAccount
     * @return TransactionSearchRowBasic
     */
    public function setFxAccount(SearchColumnStringField $fxAccount): TransactionSearchRowBasic
    {
        $this->fxAccount[] = $fxAccount;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFxAccount(): array
    {
        return $this->fxAccount;
    }

    /**
     * @param SearchColumnDoubleField[] $fxAmount
     * @return TransactionSearchRowBasic
     */
    public function setFxAmount(SearchColumnDoubleField $fxAmount): TransactionSearchRowBasic
    {
        $this->fxAmount[] = $fxAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxAmount(): array
    {
        return $this->fxAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $fxCostEstimate
     * @return TransactionSearchRowBasic
     */
    public function setFxCostEstimate(SearchColumnDoubleField $fxCostEstimate): TransactionSearchRowBasic
    {
        $this->fxCostEstimate[] = $fxCostEstimate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxCostEstimate(): array
    {
        return $this->fxCostEstimate;
    }

    /**
     * @param SearchColumnDoubleField[] $fxCostEstimateRate
     * @return TransactionSearchRowBasic
     */
    public function setFxCostEstimateRate(SearchColumnDoubleField $fxCostEstimateRate): TransactionSearchRowBasic
    {
        $this->fxCostEstimateRate[] = $fxCostEstimateRate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxCostEstimateRate(): array
    {
        return $this->fxCostEstimateRate;
    }

    /**
     * @param SearchColumnDoubleField[] $fxEstGrossProfit
     * @return TransactionSearchRowBasic
     */
    public function setFxEstGrossProfit(SearchColumnDoubleField $fxEstGrossProfit): TransactionSearchRowBasic
    {
        $this->fxEstGrossProfit[] = $fxEstGrossProfit;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxEstGrossProfit(): array
    {
        return $this->fxEstGrossProfit;
    }

    /**
     * @param SearchColumnDoubleField[] $fxTranCostEstimate
     * @return TransactionSearchRowBasic
     */
    public function setFxTranCostEstimate(SearchColumnDoubleField $fxTranCostEstimate): TransactionSearchRowBasic
    {
        $this->fxTranCostEstimate[] = $fxTranCostEstimate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxTranCostEstimate(): array
    {
        return $this->fxTranCostEstimate;
    }

    /**
     * @param SearchColumnDoubleField[] $fxVsoeAllocation
     * @return TransactionSearchRowBasic
     */
    public function setFxVsoeAllocation(SearchColumnDoubleField $fxVsoeAllocation): TransactionSearchRowBasic
    {
        $this->fxVsoeAllocation[] = $fxVsoeAllocation;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxVsoeAllocation(): array
    {
        return $this->fxVsoeAllocation;
    }

    /**
     * @param SearchColumnDoubleField[] $fxVsoeAmount
     * @return TransactionSearchRowBasic
     */
    public function setFxVsoeAmount(SearchColumnDoubleField $fxVsoeAmount): TransactionSearchRowBasic
    {
        $this->fxVsoeAmount[] = $fxVsoeAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxVsoeAmount(): array
    {
        return $this->fxVsoeAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $fxVsoePrice
     * @return TransactionSearchRowBasic
     */
    public function setFxVsoePrice(SearchColumnDoubleField $fxVsoePrice): TransactionSearchRowBasic
    {
        $this->fxVsoePrice[] = $fxVsoePrice;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxVsoePrice(): array
    {
        return $this->fxVsoePrice;
    }

    /**
     * @param SearchColumnBooleanField[] $gcoAvailabelToCharge
     * @return TransactionSearchRowBasic
     */
    public function setGcoAvailabelToCharge(SearchColumnBooleanField $gcoAvailabelToCharge): TransactionSearchRowBasic
    {
        $this->gcoAvailabelToCharge[] = $gcoAvailabelToCharge;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getGcoAvailabelToCharge(): array
    {
        return $this->gcoAvailabelToCharge;
    }

    /**
     * @param SearchColumnBooleanField[] $gcoAvailableToRefund
     * @return TransactionSearchRowBasic
     */
    public function setGcoAvailableToRefund(SearchColumnBooleanField $gcoAvailableToRefund): TransactionSearchRowBasic
    {
        $this->gcoAvailableToRefund[] = $gcoAvailableToRefund;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getGcoAvailableToRefund(): array
    {
        return $this->gcoAvailableToRefund;
    }

    /**
     * @param SearchColumnEnumSelectField[] $gcoAvsStreetMatch
     * @return TransactionSearchRowBasic
     */
    public function setGcoAvsStreetMatch(SearchColumnEnumSelectField $gcoAvsStreetMatch): TransactionSearchRowBasic
    {
        $this->gcoAvsStreetMatch[] = $gcoAvsStreetMatch;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getGcoAvsStreetMatch(): array
    {
        return $this->gcoAvsStreetMatch;
    }

    /**
     * @param SearchColumnEnumSelectField[] $gcoAvsZipMatch
     * @return TransactionSearchRowBasic
     */
    public function setGcoAvsZipMatch(SearchColumnEnumSelectField $gcoAvsZipMatch): TransactionSearchRowBasic
    {
        $this->gcoAvsZipMatch[] = $gcoAvsZipMatch;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getGcoAvsZipMatch(): array
    {
        return $this->gcoAvsZipMatch;
    }

    /**
     * @param SearchColumnLongField[] $gcoBuyerAccountAge
     * @return TransactionSearchRowBasic
     */
    public function setGcoBuyerAccountAge(SearchColumnLongField $gcoBuyerAccountAge): TransactionSearchRowBasic
    {
        $this->gcoBuyerAccountAge[] = $gcoBuyerAccountAge;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getGcoBuyerAccountAge(): array
    {
        return $this->gcoBuyerAccountAge;
    }

    /**
     * @param SearchColumnStringField[] $gcoBuyerIp
     * @return TransactionSearchRowBasic
     */
    public function setGcoBuyerIp(SearchColumnStringField $gcoBuyerIp): TransactionSearchRowBasic
    {
        $this->gcoBuyerIp[] = $gcoBuyerIp;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGcoBuyerIp(): array
    {
        return $this->gcoBuyerIp;
    }

    /**
     * @param SearchColumnDoubleField[] $gcoChargeAmount
     * @return TransactionSearchRowBasic
     */
    public function setGcoChargeAmount(SearchColumnDoubleField $gcoChargeAmount): TransactionSearchRowBasic
    {
        $this->gcoChargeAmount[] = $gcoChargeAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGcoChargeAmount(): array
    {
        return $this->gcoChargeAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $gcoChargebackAmount
     * @return TransactionSearchRowBasic
     */
    public function setGcoChargebackAmount(SearchColumnDoubleField $gcoChargebackAmount): TransactionSearchRowBasic
    {
        $this->gcoChargebackAmount[] = $gcoChargebackAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGcoChargebackAmount(): array
    {
        return $this->gcoChargebackAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $gcoConfirmedChargedTotal
     * @return TransactionSearchRowBasic
     */
    public function setGcoConfirmedChargedTotal(SearchColumnDoubleField $gcoConfirmedChargedTotal): TransactionSearchRowBasic
    {
        $this->gcoConfirmedChargedTotal[] = $gcoConfirmedChargedTotal;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGcoConfirmedChargedTotal(): array
    {
        return $this->gcoConfirmedChargedTotal;
    }

    /**
     * @param SearchColumnDoubleField[] $gcoConfirmedRefundedTotal
     * @return TransactionSearchRowBasic
     */
    public function setGcoConfirmedRefundedTotal(SearchColumnDoubleField $gcoConfirmedRefundedTotal): TransactionSearchRowBasic
    {
        $this->gcoConfirmedRefundedTotal[] = $gcoConfirmedRefundedTotal;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGcoConfirmedRefundedTotal(): array
    {
        return $this->gcoConfirmedRefundedTotal;
    }

    /**
     * @param SearchColumnStringField[] $gcoCreditcardNumber
     * @return TransactionSearchRowBasic
     */
    public function setGcoCreditcardNumber(SearchColumnStringField $gcoCreditcardNumber): TransactionSearchRowBasic
    {
        $this->gcoCreditcardNumber[] = $gcoCreditcardNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGcoCreditcardNumber(): array
    {
        return $this->gcoCreditcardNumber;
    }

    /**
     * @param SearchColumnEnumSelectField[] $gcoCscMatch
     * @return TransactionSearchRowBasic
     */
    public function setGcoCscMatch(SearchColumnEnumSelectField $gcoCscMatch): TransactionSearchRowBasic
    {
        $this->gcoCscMatch[] = $gcoCscMatch;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getGcoCscMatch(): array
    {
        return $this->gcoCscMatch;
    }

    /**
     * @param SearchColumnStringField[] $gcoFinancialState
     * @return TransactionSearchRowBasic
     */
    public function setGcoFinancialState(SearchColumnStringField $gcoFinancialState): TransactionSearchRowBasic
    {
        $this->gcoFinancialState[] = $gcoFinancialState;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGcoFinancialState(): array
    {
        return $this->gcoFinancialState;
    }

    /**
     * @param SearchColumnStringField[] $gcoFulfillmentState
     * @return TransactionSearchRowBasic
     */
    public function setGcoFulfillmentState(SearchColumnStringField $gcoFulfillmentState): TransactionSearchRowBasic
    {
        $this->gcoFulfillmentState[] = $gcoFulfillmentState;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGcoFulfillmentState(): array
    {
        return $this->gcoFulfillmentState;
    }

    /**
     * @param SearchColumnStringField[] $gcoOrderId
     * @return TransactionSearchRowBasic
     */
    public function setGcoOrderId(SearchColumnStringField $gcoOrderId): TransactionSearchRowBasic
    {
        $this->gcoOrderId[] = $gcoOrderId;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGcoOrderId(): array
    {
        return $this->gcoOrderId;
    }

    /**
     * @param SearchColumnDoubleField[] $gcoOrderTotal
     * @return TransactionSearchRowBasic
     */
    public function setGcoOrderTotal(SearchColumnDoubleField $gcoOrderTotal): TransactionSearchRowBasic
    {
        $this->gcoOrderTotal[] = $gcoOrderTotal;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGcoOrderTotal(): array
    {
        return $this->gcoOrderTotal;
    }

    /**
     * @param SearchColumnDoubleField[] $gcoPromotionAmount
     * @return TransactionSearchRowBasic
     */
    public function setGcoPromotionAmount(SearchColumnDoubleField $gcoPromotionAmount): TransactionSearchRowBasic
    {
        $this->gcoPromotionAmount[] = $gcoPromotionAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGcoPromotionAmount(): array
    {
        return $this->gcoPromotionAmount;
    }

    /**
     * @param SearchColumnStringField[] $gcoPromotionName
     * @return TransactionSearchRowBasic
     */
    public function setGcoPromotionName(SearchColumnStringField $gcoPromotionName): TransactionSearchRowBasic
    {
        $this->gcoPromotionName[] = $gcoPromotionName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGcoPromotionName(): array
    {
        return $this->gcoPromotionName;
    }

    /**
     * @param SearchColumnDoubleField[] $gcoRefundAmount
     * @return TransactionSearchRowBasic
     */
    public function setGcoRefundAmount(SearchColumnDoubleField $gcoRefundAmount): TransactionSearchRowBasic
    {
        $this->gcoRefundAmount[] = $gcoRefundAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGcoRefundAmount(): array
    {
        return $this->gcoRefundAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $gcoShippingTotal
     * @return TransactionSearchRowBasic
     */
    public function setGcoShippingTotal(SearchColumnDoubleField $gcoShippingTotal): TransactionSearchRowBasic
    {
        $this->gcoShippingTotal[] = $gcoShippingTotal;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGcoShippingTotal(): array
    {
        return $this->gcoShippingTotal;
    }

    /**
     * @param SearchColumnStringField[] $gcoStateChangedDetail
     * @return TransactionSearchRowBasic
     */
    public function setGcoStateChangedDetail(SearchColumnStringField $gcoStateChangedDetail): TransactionSearchRowBasic
    {
        $this->gcoStateChangedDetail[] = $gcoStateChangedDetail;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGcoStateChangedDetail(): array
    {
        return $this->gcoStateChangedDetail;
    }

    /**
     * @param SearchColumnStringField[] $giftCert
     * @return TransactionSearchRowBasic
     */
    public function setGiftCert(SearchColumnStringField $giftCert): TransactionSearchRowBasic
    {
        $this->giftCert[] = $giftCert;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGiftCert(): array
    {
        return $this->giftCert;
    }

    /**
     * @param SearchColumnDoubleField[] $grossAmount
     * @return TransactionSearchRowBasic
     */
    public function setGrossAmount(SearchColumnDoubleField $grossAmount): TransactionSearchRowBasic
    {
        $this->grossAmount[] = $grossAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGrossAmount(): array
    {
        return $this->grossAmount;
    }

    /**
     * @param SearchColumnBooleanField[] $includeInForecast
     * @return TransactionSearchRowBasic
     */
    public function setIncludeInForecast(SearchColumnBooleanField $includeInForecast): TransactionSearchRowBasic
    {
        $this->includeInForecast[] = $includeInForecast;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIncludeInForecast(): array
    {
        return $this->includeInForecast;
    }

    /**
     * @param SearchColumnSelectField[] $incoterm
     * @return TransactionSearchRowBasic
     */
    public function setIncoterm(SearchColumnSelectField $incoterm): TransactionSearchRowBasic
    {
        $this->incoterm[] = $incoterm;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getIncoterm(): array
    {
        return $this->incoterm;
    }

    /**
     * @param SearchColumnEnumSelectField[] $intercoStatus
     * @return TransactionSearchRowBasic
     */
    public function setIntercoStatus(SearchColumnEnumSelectField $intercoStatus): TransactionSearchRowBasic
    {
        $this->intercoStatus[] = $intercoStatus;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getIntercoStatus(): array
    {
        return $this->intercoStatus;
    }

    /**
     * @param SearchColumnStringField[] $intercoTransaction
     * @return TransactionSearchRowBasic
     */
    public function setIntercoTransaction(SearchColumnStringField $intercoTransaction): TransactionSearchRowBasic
    {
        $this->intercoTransaction[] = $intercoTransaction;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getIntercoTransaction(): array
    {
        return $this->intercoTransaction;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return TransactionSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): TransactionSearchRowBasic
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
     * @return TransactionSearchRowBasic
     */
    public function setInventoryLocation(SearchColumnSelectField $inventoryLocation): TransactionSearchRowBasic
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
     * @param SearchColumnSelectField[] $inventorySubsidiary
     * @return TransactionSearchRowBasic
     */
    public function setInventorySubsidiary(SearchColumnSelectField $inventorySubsidiary): TransactionSearchRowBasic
    {
        $this->inventorySubsidiary[] = $inventorySubsidiary;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInventorySubsidiary(): array
    {
        return $this->inventorySubsidiary;
    }

    /**
     * @param SearchColumnBooleanField[] $inVsoeBundle
     * @return TransactionSearchRowBasic
     */
    public function setInVsoeBundle(SearchColumnBooleanField $inVsoeBundle): TransactionSearchRowBasic
    {
        $this->inVsoeBundle[] = $inVsoeBundle;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getInVsoeBundle(): array
    {
        return $this->inVsoeBundle;
    }

    /**
     * @param SearchColumnBooleanField[] $isAllocation
     * @return TransactionSearchRowBasic
     */
    public function setIsAllocation(SearchColumnBooleanField $isAllocation): TransactionSearchRowBasic
    {
        $this->isAllocation[] = $isAllocation;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsAllocation(): array
    {
        return $this->isAllocation;
    }

    /**
     * @param SearchColumnBooleanField[] $isBackflush
     * @return TransactionSearchRowBasic
     */
    public function setIsBackflush(SearchColumnBooleanField $isBackflush): TransactionSearchRowBasic
    {
        $this->isBackflush[] = $isBackflush;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsBackflush(): array
    {
        return $this->isBackflush;
    }

    /**
     * @param SearchColumnBooleanField[] $isGcoChargeback
     * @return TransactionSearchRowBasic
     */
    public function setIsGcoChargeback(SearchColumnBooleanField $isGcoChargeback): TransactionSearchRowBasic
    {
        $this->isGcoChargeback[] = $isGcoChargeback;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsGcoChargeback(): array
    {
        return $this->isGcoChargeback;
    }

    /**
     * @param SearchColumnBooleanField[] $isGcoChargeConfirmed
     * @return TransactionSearchRowBasic
     */
    public function setIsGcoChargeConfirmed(SearchColumnBooleanField $isGcoChargeConfirmed): TransactionSearchRowBasic
    {
        $this->isGcoChargeConfirmed[] = $isGcoChargeConfirmed;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsGcoChargeConfirmed(): array
    {
        return $this->isGcoChargeConfirmed;
    }

    /**
     * @param SearchColumnBooleanField[] $isGcoPaymentGuaranteed
     * @return TransactionSearchRowBasic
     */
    public function setIsGcoPaymentGuaranteed(SearchColumnBooleanField $isGcoPaymentGuaranteed): TransactionSearchRowBasic
    {
        $this->isGcoPaymentGuaranteed[] = $isGcoPaymentGuaranteed;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsGcoPaymentGuaranteed(): array
    {
        return $this->isGcoPaymentGuaranteed;
    }

    /**
     * @param SearchColumnBooleanField[] $isGcoRefundConfirmed
     * @return TransactionSearchRowBasic
     */
    public function setIsGcoRefundConfirmed(SearchColumnBooleanField $isGcoRefundConfirmed): TransactionSearchRowBasic
    {
        $this->isGcoRefundConfirmed[] = $isGcoRefundConfirmed;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsGcoRefundConfirmed(): array
    {
        return $this->isGcoRefundConfirmed;
    }

    /**
     * @param SearchColumnBooleanField[] $isInsideDelivery
     * @return TransactionSearchRowBasic
     */
    public function setIsInsideDelivery(SearchColumnBooleanField $isInsideDelivery): TransactionSearchRowBasic
    {
        $this->isInsideDelivery[] = $isInsideDelivery;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInsideDelivery(): array
    {
        return $this->isInsideDelivery;
    }

    /**
     * @param SearchColumnBooleanField[] $isInsidePickup
     * @return TransactionSearchRowBasic
     */
    public function setIsInsidePickup(SearchColumnBooleanField $isInsidePickup): TransactionSearchRowBasic
    {
        $this->isInsidePickup[] = $isInsidePickup;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInsidePickup(): array
    {
        return $this->isInsidePickup;
    }

    /**
     * @param SearchColumnBooleanField[] $isIntercompanyAdjustment
     * @return TransactionSearchRowBasic
     */
    public function setIsIntercompanyAdjustment(SearchColumnBooleanField $isIntercompanyAdjustment): TransactionSearchRowBasic
    {
        $this->isIntercompanyAdjustment[] = $isIntercompanyAdjustment;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsIntercompanyAdjustment(): array
    {
        return $this->isIntercompanyAdjustment;
    }

    /**
     * @param SearchColumnBooleanField[] $isInTransitPayment
     * @return TransactionSearchRowBasic
     */
    public function setIsInTransitPayment(SearchColumnBooleanField $isInTransitPayment): TransactionSearchRowBasic
    {
        $this->isInTransitPayment[] = $isInTransitPayment;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInTransitPayment(): array
    {
        return $this->isInTransitPayment;
    }

    /**
     * @param SearchColumnBooleanField[] $isMultiShipTo
     * @return TransactionSearchRowBasic
     */
    public function setIsMultiShipTo(SearchColumnBooleanField $isMultiShipTo): TransactionSearchRowBasic
    {
        $this->isMultiShipTo[] = $isMultiShipTo;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsMultiShipTo(): array
    {
        return $this->isMultiShipTo;
    }

    /**
     * @param SearchColumnBooleanField[] $isReversal
     * @return TransactionSearchRowBasic
     */
    public function setIsReversal(SearchColumnBooleanField $isReversal): TransactionSearchRowBasic
    {
        $this->isReversal[] = $isReversal;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsReversal(): array
    {
        return $this->isReversal;
    }

    /**
     * @param SearchColumnBooleanField[] $isRevRecTransaction
     * @return TransactionSearchRowBasic
     */
    public function setIsRevRecTransaction(SearchColumnBooleanField $isRevRecTransaction): TransactionSearchRowBasic
    {
        $this->isRevRecTransaction[] = $isRevRecTransaction;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsRevRecTransaction(): array
    {
        return $this->isRevRecTransaction;
    }

    /**
     * @param SearchColumnBooleanField[] $isScrap
     * @return TransactionSearchRowBasic
     */
    public function setIsScrap(SearchColumnBooleanField $isScrap): TransactionSearchRowBasic
    {
        $this->isScrap[] = $isScrap;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsScrap(): array
    {
        return $this->isScrap;
    }

    /**
     * @param SearchColumnBooleanField[] $isShipAddress
     * @return TransactionSearchRowBasic
     */
    public function setIsShipAddress(SearchColumnBooleanField $isShipAddress): TransactionSearchRowBasic
    {
        $this->isShipAddress[] = $isShipAddress;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsShipAddress(): array
    {
        return $this->isShipAddress;
    }

    /**
     * @param SearchColumnBooleanField[] $isTransferPriceCosting
     * @return TransactionSearchRowBasic
     */
    public function setIsTransferPriceCosting(SearchColumnBooleanField $isTransferPriceCosting): TransactionSearchRowBasic
    {
        $this->isTransferPriceCosting[] = $isTransferPriceCosting;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsTransferPriceCosting(): array
    {
        return $this->isTransferPriceCosting;
    }

    /**
     * @param SearchColumnBooleanField[] $isWip
     * @return TransactionSearchRowBasic
     */
    public function setIsWip(SearchColumnBooleanField $isWip): TransactionSearchRowBasic
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
     * @param SearchColumnSelectField[] $item
     * @return TransactionSearchRowBasic
     */
    public function setItem(SearchColumnSelectField $item): TransactionSearchRowBasic
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItem(): array
    {
        return $this->item;
    }

    /**
     * @param SearchColumnEnumSelectField[] $itemFulfillmentChoice
     * @return TransactionSearchRowBasic
     */
    public function setItemFulfillmentChoice(SearchColumnEnumSelectField $itemFulfillmentChoice): TransactionSearchRowBasic
    {
        $this->itemFulfillmentChoice[] = $itemFulfillmentChoice;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getItemFulfillmentChoice(): array
    {
        return $this->itemFulfillmentChoice;
    }

    /**
     * @param SearchColumnSelectField[] $itemRevision
     * @return TransactionSearchRowBasic
     */
    public function setItemRevision(SearchColumnSelectField $itemRevision): TransactionSearchRowBasic
    {
        $this->itemRevision[] = $itemRevision;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItemRevision(): array
    {
        return $this->itemRevision;
    }

    /**
     * @param SearchColumnBooleanField[] $landedCostPerLine
     * @return TransactionSearchRowBasic
     */
    public function setLandedCostPerLine(SearchColumnBooleanField $landedCostPerLine): TransactionSearchRowBasic
    {
        $this->landedCostPerLine[] = $landedCostPerLine;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getLandedCostPerLine(): array
    {
        return $this->landedCostPerLine;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return TransactionSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): TransactionSearchRowBasic
    {
        $this->lastModifiedDate[] = $lastModifiedDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModifiedDate(): array
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param SearchColumnSelectField[] $leadSource
     * @return TransactionSearchRowBasic
     */
    public function setLeadSource(SearchColumnSelectField $leadSource): TransactionSearchRowBasic
    {
        $this->leadSource[] = $leadSource;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLeadSource(): array
    {
        return $this->leadSource;
    }

    /**
     * @param SearchColumnLongField[] $line
     * @return TransactionSearchRowBasic
     */
    public function setLine(SearchColumnLongField $line): TransactionSearchRowBasic
    {
        $this->line[] = $line;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLine(): array
    {
        return $this->line;
    }

    /**
     * @param SearchColumnLongField[] $lineSequenceNumber
     * @return TransactionSearchRowBasic
     */
    public function setLineSequenceNumber(SearchColumnLongField $lineSequenceNumber): TransactionSearchRowBasic
    {
        $this->lineSequenceNumber[] = $lineSequenceNumber;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLineSequenceNumber(): array
    {
        return $this->lineSequenceNumber;
    }

    /**
     * @param SearchColumnLongField[] $lineUniqueKey
     * @return TransactionSearchRowBasic
     */
    public function setLineUniqueKey(SearchColumnLongField $lineUniqueKey): TransactionSearchRowBasic
    {
        $this->lineUniqueKey[] = $lineUniqueKey;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLineUniqueKey(): array
    {
        return $this->lineUniqueKey;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return TransactionSearchRowBasic
     */
    public function setLocation(SearchColumnSelectField $location): TransactionSearchRowBasic
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
     * @param SearchColumnBooleanField[] $locationAutoAssigned
     * @return TransactionSearchRowBasic
     */
    public function setLocationAutoAssigned(SearchColumnBooleanField $locationAutoAssigned): TransactionSearchRowBasic
    {
        $this->locationAutoAssigned[] = $locationAutoAssigned;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getLocationAutoAssigned(): array
    {
        return $this->locationAutoAssigned;
    }

    /**
     * @param SearchColumnBooleanField[] $mainLine
     * @return TransactionSearchRowBasic
     */
    public function setMainLine(SearchColumnBooleanField $mainLine): TransactionSearchRowBasic
    {
        $this->mainLine[] = $mainLine;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMainLine(): array
    {
        return $this->mainLine;
    }

    /**
     * @param SearchColumnStringField[] $mainName
     * @return TransactionSearchRowBasic
     */
    public function setMainName(SearchColumnStringField $mainName): TransactionSearchRowBasic
    {
        $this->mainName[] = $mainName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMainName(): array
    {
        return $this->mainName;
    }

    /**
     * @param SearchColumnSelectField[] $manufacturingRouting
     * @return TransactionSearchRowBasic
     */
    public function setManufacturingRouting(SearchColumnSelectField $manufacturingRouting): TransactionSearchRowBasic
    {
        $this->manufacturingRouting[] = $manufacturingRouting;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getManufacturingRouting(): array
    {
        return $this->manufacturingRouting;
    }

    /**
     * @param SearchColumnBooleanField[] $matchBillToReceipt
     * @return TransactionSearchRowBasic
     */
    public function setMatchBillToReceipt(SearchColumnBooleanField $matchBillToReceipt): TransactionSearchRowBasic
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
     * @param SearchColumnStringField[] $memo
     * @return TransactionSearchRowBasic
     */
    public function setMemo(SearchColumnStringField $memo): TransactionSearchRowBasic
    {
        $this->memo[] = $memo;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMemo(): array
    {
        return $this->memo;
    }

    /**
     * @param SearchColumnStringField[] $memoMain
     * @return TransactionSearchRowBasic
     */
    public function setMemoMain(SearchColumnStringField $memoMain): TransactionSearchRowBasic
    {
        $this->memoMain[] = $memoMain;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMemoMain(): array
    {
        return $this->memoMain;
    }

    /**
     * @param SearchColumnBooleanField[] $memorized
     * @return TransactionSearchRowBasic
     */
    public function setMemorized(SearchColumnBooleanField $memorized): TransactionSearchRowBasic
    {
        $this->memorized[] = $memorized;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMemorized(): array
    {
        return $this->memorized;
    }

    /**
     * @param SearchColumnSelectField[] $merchantAccount
     * @return TransactionSearchRowBasic
     */
    public function setMerchantAccount(SearchColumnSelectField $merchantAccount): TransactionSearchRowBasic
    {
        $this->merchantAccount[] = $merchantAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getMerchantAccount(): array
    {
        return $this->merchantAccount;
    }

    /**
     * @param SearchColumnStringField[] $message
     * @return TransactionSearchRowBasic
     */
    public function setMessage(SearchColumnStringField $message): TransactionSearchRowBasic
    {
        $this->message[] = $message;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMessage(): array
    {
        return $this->message;
    }

    /**
     * @param SearchColumnBooleanField[] $multiSubsidiary
     * @return TransactionSearchRowBasic
     */
    public function setMultiSubsidiary(SearchColumnBooleanField $multiSubsidiary): TransactionSearchRowBasic
    {
        $this->multiSubsidiary[] = $multiSubsidiary;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMultiSubsidiary(): array
    {
        return $this->multiSubsidiary;
    }

    /**
     * @param SearchColumnDoubleField[] $netAmount
     * @return TransactionSearchRowBasic
     */
    public function setNetAmount(SearchColumnDoubleField $netAmount): TransactionSearchRowBasic
    {
        $this->netAmount[] = $netAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getNetAmount(): array
    {
        return $this->netAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $netAmountNoTax
     * @return TransactionSearchRowBasic
     */
    public function setNetAmountNoTax(SearchColumnDoubleField $netAmountNoTax): TransactionSearchRowBasic
    {
        $this->netAmountNoTax[] = $netAmountNoTax;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getNetAmountNoTax(): array
    {
        return $this->netAmountNoTax;
    }

    /**
     * @param SearchColumnSelectField[] $nextApprover
     * @return TransactionSearchRowBasic
     */
    public function setNextApprover(SearchColumnSelectField $nextApprover): TransactionSearchRowBasic
    {
        $this->nextApprover[] = $nextApprover;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getNextApprover(): array
    {
        return $this->nextApprover;
    }

    /**
     * @param SearchColumnDateField[] $nextBillDate
     * @return TransactionSearchRowBasic
     */
    public function setNextBillDate(SearchColumnDateField $nextBillDate): TransactionSearchRowBasic
    {
        $this->nextBillDate[] = $nextBillDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getNextBillDate(): array
    {
        return $this->nextBillDate;
    }

    /**
     * @param SearchColumnSelectField[] $nexus
     * @return TransactionSearchRowBasic
     */
    public function setNexus(SearchColumnSelectField $nexus): TransactionSearchRowBasic
    {
        $this->nexus[] = $nexus;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getNexus(): array
    {
        return $this->nexus;
    }

    /**
     * @param SearchColumnBooleanField[] $noAutoAssignLocation
     * @return TransactionSearchRowBasic
     */
    public function setNoAutoAssignLocation(SearchColumnBooleanField $noAutoAssignLocation): TransactionSearchRowBasic
    {
        $this->noAutoAssignLocation[] = $noAutoAssignLocation;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getNoAutoAssignLocation(): array
    {
        return $this->noAutoAssignLocation;
    }

    /**
     * @param SearchColumnBooleanField[] $nonReimbursable
     * @return TransactionSearchRowBasic
     */
    public function setNonReimbursable(SearchColumnBooleanField $nonReimbursable): TransactionSearchRowBasic
    {
        $this->nonReimbursable[] = $nonReimbursable;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getNonReimbursable(): array
    {
        return $this->nonReimbursable;
    }

    /**
     * @param SearchColumnDoubleField[] $oneTimeTotal
     * @return TransactionSearchRowBasic
     */
    public function setOneTimeTotal(SearchColumnDoubleField $oneTimeTotal): TransactionSearchRowBasic
    {
        $this->oneTimeTotal[] = $oneTimeTotal;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getOneTimeTotal(): array
    {
        return $this->oneTimeTotal;
    }

    /**
     * @param SearchColumnSelectField[] $opportunity
     * @return TransactionSearchRowBasic
     */
    public function setOpportunity(SearchColumnSelectField $opportunity): TransactionSearchRowBasic
    {
        $this->opportunity[] = $opportunity;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOpportunity(): array
    {
        return $this->opportunity;
    }

    /**
     * @param SearchColumnStringField[] $options
     * @return TransactionSearchRowBasic
     */
    public function setOptions(SearchColumnStringField $options): TransactionSearchRowBasic
    {
        $this->options[] = $options;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param SearchColumnSelectField[] $orderAllocationStrategy
     * @return TransactionSearchRowBasic
     */
    public function setOrderAllocationStrategy(SearchColumnSelectField $orderAllocationStrategy): TransactionSearchRowBasic
    {
        $this->orderAllocationStrategy[] = $orderAllocationStrategy;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOrderAllocationStrategy(): array
    {
        return $this->orderAllocationStrategy;
    }

    /**
     * @param SearchColumnDoubleField[] $orderPriority
     * @return TransactionSearchRowBasic
     */
    public function setOrderPriority(SearchColumnDoubleField $orderPriority): TransactionSearchRowBasic
    {
        $this->orderPriority[] = $orderPriority;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getOrderPriority(): array
    {
        return $this->orderPriority;
    }

    /**
     * @param SearchColumnEnumSelectField[] $originator
     * @return TransactionSearchRowBasic
     */
    public function setOriginator(SearchColumnEnumSelectField $originator): TransactionSearchRowBasic
    {
        $this->originator[] = $originator;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getOriginator(): array
    {
        return $this->originator;
    }

    /**
     * @param SearchColumnTextNumberField[] $otherRefNum
     * @return TransactionSearchRowBasic
     */
    public function setOtherRefNum(SearchColumnTextNumberField $otherRefNum): TransactionSearchRowBasic
    {
        $this->otherRefNum[] = $otherRefNum;
        return $this;
    }

    /**
     * @return SearchColumnTextNumberField[]
     */
    public function getOtherRefNum(): array
    {
        return $this->otherRefNum;
    }

    /**
     * @param SearchColumnSelectField[] $overheadParentItem
     * @return TransactionSearchRowBasic
     */
    public function setOverheadParentItem(SearchColumnSelectField $overheadParentItem): TransactionSearchRowBasic
    {
        $this->overheadParentItem[] = $overheadParentItem;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOverheadParentItem(): array
    {
        return $this->overheadParentItem;
    }

    /**
     * @param SearchColumnBooleanField[] $overrideInstallments
     * @return TransactionSearchRowBasic
     */
    public function setOverrideInstallments(SearchColumnBooleanField $overrideInstallments): TransactionSearchRowBasic
    {
        $this->overrideInstallments[] = $overrideInstallments;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getOverrideInstallments(): array
    {
        return $this->overrideInstallments;
    }

    /**
     * @param SearchColumnLongField[] $packageCount
     * @return TransactionSearchRowBasic
     */
    public function setPackageCount(SearchColumnLongField $packageCount): TransactionSearchRowBasic
    {
        $this->packageCount[] = $packageCount;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getPackageCount(): array
    {
        return $this->packageCount;
    }

    /**
     * @param SearchColumnDoubleField[] $paidAmount
     * @return TransactionSearchRowBasic
     */
    public function setPaidAmount(SearchColumnDoubleField $paidAmount): TransactionSearchRowBasic
    {
        $this->paidAmount[] = $paidAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPaidAmount(): array
    {
        return $this->paidAmount;
    }

    /**
     * @param SearchColumnSelectField[] $paidTransaction
     * @return TransactionSearchRowBasic
     */
    public function setPaidTransaction(SearchColumnSelectField $paidTransaction): TransactionSearchRowBasic
    {
        $this->paidTransaction[] = $paidTransaction;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPaidTransaction(): array
    {
        return $this->paidTransaction;
    }

    /**
     * @param SearchColumnSelectField[] $partner
     * @return TransactionSearchRowBasic
     */
    public function setPartner(SearchColumnSelectField $partner): TransactionSearchRowBasic
    {
        $this->partner[] = $partner;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPartner(): array
    {
        return $this->partner;
    }

    /**
     * @param SearchColumnDoubleField[] $partnerContribution
     * @return TransactionSearchRowBasic
     */
    public function setPartnerContribution(SearchColumnDoubleField $partnerContribution): TransactionSearchRowBasic
    {
        $this->partnerContribution[] = $partnerContribution;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPartnerContribution(): array
    {
        return $this->partnerContribution;
    }

    /**
     * @param SearchColumnSelectField[] $partnerRole
     * @return TransactionSearchRowBasic
     */
    public function setPartnerRole(SearchColumnSelectField $partnerRole): TransactionSearchRowBasic
    {
        $this->partnerRole[] = $partnerRole;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPartnerRole(): array
    {
        return $this->partnerRole;
    }

    /**
     * @param SearchColumnSelectField[] $partnerTeamMember
     * @return TransactionSearchRowBasic
     */
    public function setPartnerTeamMember(SearchColumnSelectField $partnerTeamMember): TransactionSearchRowBasic
    {
        $this->partnerTeamMember[] = $partnerTeamMember;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPartnerTeamMember(): array
    {
        return $this->partnerTeamMember;
    }

    /**
     * @param SearchColumnDoubleField[] $payingAmount
     * @return TransactionSearchRowBasic
     */
    public function setPayingAmount(SearchColumnDoubleField $payingAmount): TransactionSearchRowBasic
    {
        $this->payingAmount[] = $payingAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPayingAmount(): array
    {
        return $this->payingAmount;
    }

    /**
     * @param SearchColumnSelectField[] $payingTransaction
     * @return TransactionSearchRowBasic
     */
    public function setPayingTransaction(SearchColumnSelectField $payingTransaction): TransactionSearchRowBasic
    {
        $this->payingTransaction[] = $payingTransaction;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPayingTransaction(): array
    {
        return $this->payingTransaction;
    }

    /**
     * @param SearchColumnBooleanField[] $paymentApproved
     * @return TransactionSearchRowBasic
     */
    public function setPaymentApproved(SearchColumnBooleanField $paymentApproved): TransactionSearchRowBasic
    {
        $this->paymentApproved[] = $paymentApproved;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPaymentApproved(): array
    {
        return $this->paymentApproved;
    }

    /**
     * @param SearchColumnDateField[] $paymentEventDate
     * @return TransactionSearchRowBasic
     */
    public function setPaymentEventDate(SearchColumnDateField $paymentEventDate): TransactionSearchRowBasic
    {
        $this->paymentEventDate[] = $paymentEventDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getPaymentEventDate(): array
    {
        return $this->paymentEventDate;
    }

    /**
     * @param SearchColumnEnumSelectField[] $paymentEventHoldReason
     * @return TransactionSearchRowBasic
     */
    public function setPaymentEventHoldReason(SearchColumnEnumSelectField $paymentEventHoldReason): TransactionSearchRowBasic
    {
        $this->paymentEventHoldReason[] = $paymentEventHoldReason;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPaymentEventHoldReason(): array
    {
        return $this->paymentEventHoldReason;
    }

    /**
     * @param SearchColumnBooleanField[] $paymentEventPurchaseCardUsed
     * @return TransactionSearchRowBasic
     */
    public function setPaymentEventPurchaseCardUsed(SearchColumnBooleanField $paymentEventPurchaseCardUsed): TransactionSearchRowBasic
    {
        $this->paymentEventPurchaseCardUsed[] = $paymentEventPurchaseCardUsed;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPaymentEventPurchaseCardUsed(): array
    {
        return $this->paymentEventPurchaseCardUsed;
    }

    /**
     * @param SearchColumnBooleanField[] $paymentEventPurchaseDataSent
     * @return TransactionSearchRowBasic
     */
    public function setPaymentEventPurchaseDataSent(SearchColumnBooleanField $paymentEventPurchaseDataSent): TransactionSearchRowBasic
    {
        $this->paymentEventPurchaseDataSent[] = $paymentEventPurchaseDataSent;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPaymentEventPurchaseDataSent(): array
    {
        return $this->paymentEventPurchaseDataSent;
    }

    /**
     * @param SearchColumnEnumSelectField[] $paymentEventResult
     * @return TransactionSearchRowBasic
     */
    public function setPaymentEventResult(SearchColumnEnumSelectField $paymentEventResult): TransactionSearchRowBasic
    {
        $this->paymentEventResult[] = $paymentEventResult;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPaymentEventResult(): array
    {
        return $this->paymentEventResult;
    }

    /**
     * @param SearchColumnEnumSelectField[] $paymentEventType
     * @return TransactionSearchRowBasic
     */
    public function setPaymentEventType(SearchColumnEnumSelectField $paymentEventType): TransactionSearchRowBasic
    {
        $this->paymentEventType[] = $paymentEventType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPaymentEventType(): array
    {
        return $this->paymentEventType;
    }

    /**
     * @param SearchColumnBooleanField[] $paymentHold
     * @return TransactionSearchRowBasic
     */
    public function setPaymentHold(SearchColumnBooleanField $paymentHold): TransactionSearchRowBasic
    {
        $this->paymentHold[] = $paymentHold;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPaymentHold(): array
    {
        return $this->paymentHold;
    }

    /**
     * @param SearchColumnSelectField[] $paymentMethod
     * @return TransactionSearchRowBasic
     */
    public function setPaymentMethod(SearchColumnSelectField $paymentMethod): TransactionSearchRowBasic
    {
        $this->paymentMethod[] = $paymentMethod;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPaymentMethod(): array
    {
        return $this->paymentMethod;
    }

    /**
     * @param SearchColumnSelectField[] $paymentOption
     * @return TransactionSearchRowBasic
     */
    public function setPaymentOption(SearchColumnSelectField $paymentOption): TransactionSearchRowBasic
    {
        $this->paymentOption[] = $paymentOption;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPaymentOption(): array
    {
        return $this->paymentOption;
    }

    /**
     * @param SearchColumnBooleanField[] $payPalPending
     * @return TransactionSearchRowBasic
     */
    public function setPayPalPending(SearchColumnBooleanField $payPalPending): TransactionSearchRowBasic
    {
        $this->payPalPending[] = $payPalPending;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPayPalPending(): array
    {
        return $this->payPalPending;
    }

    /**
     * @param SearchColumnStringField[] $payPalStatus
     * @return TransactionSearchRowBasic
     */
    public function setPayPalStatus(SearchColumnStringField $payPalStatus): TransactionSearchRowBasic
    {
        $this->payPalStatus[] = $payPalStatus;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPayPalStatus(): array
    {
        return $this->payPalStatus;
    }

    /**
     * @param SearchColumnStringField[] $payPalTranId
     * @return TransactionSearchRowBasic
     */
    public function setPayPalTranId(SearchColumnStringField $payPalTranId): TransactionSearchRowBasic
    {
        $this->payPalTranId[] = $payPalTranId;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPayPalTranId(): array
    {
        return $this->payPalTranId;
    }

    /**
     * @param SearchColumnStringField[] $payrollBatch
     * @return TransactionSearchRowBasic
     */
    public function setPayrollBatch(SearchColumnStringField $payrollBatch): TransactionSearchRowBasic
    {
        $this->payrollBatch[] = $payrollBatch;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPayrollBatch(): array
    {
        return $this->payrollBatch;
    }

    /**
     * @param SearchColumnStringField[] $pnRefNum
     * @return TransactionSearchRowBasic
     */
    public function setPnRefNum(SearchColumnStringField $pnRefNum): TransactionSearchRowBasic
    {
        $this->pnRefNum[] = $pnRefNum;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPnRefNum(): array
    {
        return $this->pnRefNum;
    }

    /**
     * @param SearchColumnDoubleField[] $poRate
     * @return TransactionSearchRowBasic
     */
    public function setPoRate(SearchColumnDoubleField $poRate): TransactionSearchRowBasic
    {
        $this->poRate[] = $poRate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPoRate(): array
    {
        return $this->poRate;
    }

    /**
     * @param SearchColumnBooleanField[] $posting
     * @return TransactionSearchRowBasic
     */
    public function setPosting(SearchColumnBooleanField $posting): TransactionSearchRowBasic
    {
        $this->posting[] = $posting;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPosting(): array
    {
        return $this->posting;
    }

    /**
     * @param SearchColumnSelectField[] $postingPeriod
     * @return TransactionSearchRowBasic
     */
    public function setPostingPeriod(SearchColumnSelectField $postingPeriod): TransactionSearchRowBasic
    {
        $this->postingPeriod[] = $postingPeriod;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPostingPeriod(): array
    {
        return $this->postingPeriod;
    }

    /**
     * @param SearchColumnSelectField[] $priceLevel
     * @return TransactionSearchRowBasic
     */
    public function setPriceLevel(SearchColumnSelectField $priceLevel): TransactionSearchRowBasic
    {
        $this->priceLevel[] = $priceLevel;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPriceLevel(): array
    {
        return $this->priceLevel;
    }

    /**
     * @param SearchColumnStringField[] $print
     * @return TransactionSearchRowBasic
     */
    public function setPrint(SearchColumnStringField $print): TransactionSearchRowBasic
    {
        $this->print[] = $print;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPrint(): array
    {
        return $this->print;
    }

    /**
     * @param SearchColumnDoubleField[] $probability
     * @return TransactionSearchRowBasic
     */
    public function setProbability(SearchColumnDoubleField $probability): TransactionSearchRowBasic
    {
        $this->probability[] = $probability;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getProbability(): array
    {
        return $this->probability;
    }

    /**
     * @param SearchColumnDoubleField[] $projectedAmount
     * @return TransactionSearchRowBasic
     */
    public function setProjectedAmount(SearchColumnDoubleField $projectedAmount): TransactionSearchRowBasic
    {
        $this->projectedAmount[] = $projectedAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getProjectedAmount(): array
    {
        return $this->projectedAmount;
    }

    /**
     * @param SearchColumnSelectField[] $projectTask
     * @return TransactionSearchRowBasic
     */
    public function setProjectTask(SearchColumnSelectField $projectTask): TransactionSearchRowBasic
    {
        $this->projectTask[] = $projectTask;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getProjectTask(): array
    {
        return $this->projectTask;
    }

    /**
     * @param SearchColumnSelectField[] $promoCode
     * @return TransactionSearchRowBasic
     */
    public function setPromoCode(SearchColumnSelectField $promoCode): TransactionSearchRowBasic
    {
        $this->promoCode[] = $promoCode;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPromoCode(): array
    {
        return $this->promoCode;
    }

    /**
     * @param SearchColumnSelectField[] $purchaseOrder
     * @return TransactionSearchRowBasic
     */
    public function setPurchaseOrder(SearchColumnSelectField $purchaseOrder): TransactionSearchRowBasic
    {
        $this->purchaseOrder[] = $purchaseOrder;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPurchaseOrder(): array
    {
        return $this->purchaseOrder;
    }

    /**
     * @param SearchColumnDoubleField[] $quantity
     * @return TransactionSearchRowBasic
     */
    public function setQuantity(SearchColumnDoubleField $quantity): TransactionSearchRowBasic
    {
        $this->quantity[] = $quantity;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantity(): array
    {
        return $this->quantity;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityBilled
     * @return TransactionSearchRowBasic
     */
    public function setQuantityBilled(SearchColumnDoubleField $quantityBilled): TransactionSearchRowBasic
    {
        $this->quantityBilled[] = $quantityBilled;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityBilled(): array
    {
        return $this->quantityBilled;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityCommitted
     * @return TransactionSearchRowBasic
     */
    public function setQuantityCommitted(SearchColumnDoubleField $quantityCommitted): TransactionSearchRowBasic
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
     * @param SearchColumnDoubleField[] $quantityPacked
     * @return TransactionSearchRowBasic
     */
    public function setQuantityPacked(SearchColumnDoubleField $quantityPacked): TransactionSearchRowBasic
    {
        $this->quantityPacked[] = $quantityPacked;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityPacked(): array
    {
        return $this->quantityPacked;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityPicked
     * @return TransactionSearchRowBasic
     */
    public function setQuantityPicked(SearchColumnDoubleField $quantityPicked): TransactionSearchRowBasic
    {
        $this->quantityPicked[] = $quantityPicked;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityPicked(): array
    {
        return $this->quantityPicked;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityRevCommitted
     * @return TransactionSearchRowBasic
     */
    public function setQuantityRevCommitted(SearchColumnDoubleField $quantityRevCommitted): TransactionSearchRowBasic
    {
        $this->quantityRevCommitted[] = $quantityRevCommitted;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityRevCommitted(): array
    {
        return $this->quantityRevCommitted;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityShipRecv
     * @return TransactionSearchRowBasic
     */
    public function setQuantityShipRecv(SearchColumnDoubleField $quantityShipRecv): TransactionSearchRowBasic
    {
        $this->quantityShipRecv[] = $quantityShipRecv;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityShipRecv(): array
    {
        return $this->quantityShipRecv;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityUom
     * @return TransactionSearchRowBasic
     */
    public function setQuantityUom(SearchColumnDoubleField $quantityUom): TransactionSearchRowBasic
    {
        $this->quantityUom[] = $quantityUom;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityUom(): array
    {
        return $this->quantityUom;
    }

    /**
     * @param SearchColumnDoubleField[] $rate
     * @return TransactionSearchRowBasic
     */
    public function setRate(SearchColumnDoubleField $rate): TransactionSearchRowBasic
    {
        $this->rate[] = $rate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRate(): array
    {
        return $this->rate;
    }

    /**
     * @param SearchColumnStringField[] $realizedGainPostingTransaction
     * @return TransactionSearchRowBasic
     */
    public function setRealizedGainPostingTransaction(SearchColumnStringField $realizedGainPostingTransaction): TransactionSearchRowBasic
    {
        $this->realizedGainPostingTransaction[] = $realizedGainPostingTransaction;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRealizedGainPostingTransaction(): array
    {
        return $this->realizedGainPostingTransaction;
    }

    /**
     * @param SearchColumnDoubleField[] $recognizedRevenue
     * @return TransactionSearchRowBasic
     */
    public function setRecognizedRevenue(SearchColumnDoubleField $recognizedRevenue): TransactionSearchRowBasic
    {
        $this->recognizedRevenue[] = $recognizedRevenue;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRecognizedRevenue(): array
    {
        return $this->recognizedRevenue;
    }

    /**
     * @param SearchColumnStringField[] $recordType
     * @return TransactionSearchRowBasic
     */
    public function setRecordType(SearchColumnStringField $recordType): TransactionSearchRowBasic
    {
        $this->recordType[] = $recordType;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRecordType(): array
    {
        return $this->recordType;
    }

    /**
     * @param SearchColumnDoubleField[] $recurAnnuallyTotal
     * @return TransactionSearchRowBasic
     */
    public function setRecurAnnuallyTotal(SearchColumnDoubleField $recurAnnuallyTotal): TransactionSearchRowBasic
    {
        $this->recurAnnuallyTotal[] = $recurAnnuallyTotal;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRecurAnnuallyTotal(): array
    {
        return $this->recurAnnuallyTotal;
    }

    /**
     * @param SearchColumnDoubleField[] $recurMonthlyTotal
     * @return TransactionSearchRowBasic
     */
    public function setRecurMonthlyTotal(SearchColumnDoubleField $recurMonthlyTotal): TransactionSearchRowBasic
    {
        $this->recurMonthlyTotal[] = $recurMonthlyTotal;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRecurMonthlyTotal(): array
    {
        return $this->recurMonthlyTotal;
    }

    /**
     * @param SearchColumnDoubleField[] $recurQuarterlyTotal
     * @return TransactionSearchRowBasic
     */
    public function setRecurQuarterlyTotal(SearchColumnDoubleField $recurQuarterlyTotal): TransactionSearchRowBasic
    {
        $this->recurQuarterlyTotal[] = $recurQuarterlyTotal;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRecurQuarterlyTotal(): array
    {
        return $this->recurQuarterlyTotal;
    }

    /**
     * @param SearchColumnBooleanField[] $recurringBill
     * @return TransactionSearchRowBasic
     */
    public function setRecurringBill(SearchColumnBooleanField $recurringBill): TransactionSearchRowBasic
    {
        $this->recurringBill[] = $recurringBill;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getRecurringBill(): array
    {
        return $this->recurringBill;
    }

    /**
     * @param SearchColumnDoubleField[] $recurWeeklyTotal
     * @return TransactionSearchRowBasic
     */
    public function setRecurWeeklyTotal(SearchColumnDoubleField $recurWeeklyTotal): TransactionSearchRowBasic
    {
        $this->recurWeeklyTotal[] = $recurWeeklyTotal;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRecurWeeklyTotal(): array
    {
        return $this->recurWeeklyTotal;
    }

    /**
     * @param SearchColumnLongField[] $refNumber
     * @return TransactionSearchRowBasic
     */
    public function setRefNumber(SearchColumnLongField $refNumber): TransactionSearchRowBasic
    {
        $this->refNumber[] = $refNumber;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getRefNumber(): array
    {
        return $this->refNumber;
    }

    /**
     * @param SearchColumnDateField[] $requestedDate
     * @return TransactionSearchRowBasic
     */
    public function setRequestedDate(SearchColumnDateField $requestedDate): TransactionSearchRowBasic
    {
        $this->requestedDate[] = $requestedDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getRequestedDate(): array
    {
        return $this->requestedDate;
    }

    /**
     * @param SearchColumnEnumSelectField[] $revCommitStatus
     * @return TransactionSearchRowBasic
     */
    public function setRevCommitStatus(SearchColumnEnumSelectField $revCommitStatus): TransactionSearchRowBasic
    {
        $this->revCommitStatus[] = $revCommitStatus;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getRevCommitStatus(): array
    {
        return $this->revCommitStatus;
    }

    /**
     * @param SearchColumnSelectField[] $revCommittingTransaction
     * @return TransactionSearchRowBasic
     */
    public function setRevCommittingTransaction(SearchColumnSelectField $revCommittingTransaction): TransactionSearchRowBasic
    {
        $this->revCommittingTransaction[] = $revCommittingTransaction;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRevCommittingTransaction(): array
    {
        return $this->revCommittingTransaction;
    }

    /**
     * @param SearchColumnEnumSelectField[] $revenueStatus
     * @return TransactionSearchRowBasic
     */
    public function setRevenueStatus(SearchColumnEnumSelectField $revenueStatus): TransactionSearchRowBasic
    {
        $this->revenueStatus[] = $revenueStatus;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getRevenueStatus(): array
    {
        return $this->revenueStatus;
    }

    /**
     * @param SearchColumnDateField[] $reversalDate
     * @return TransactionSearchRowBasic
     */
    public function setReversalDate(SearchColumnDateField $reversalDate): TransactionSearchRowBasic
    {
        $this->reversalDate[] = $reversalDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getReversalDate(): array
    {
        return $this->reversalDate;
    }

    /**
     * @param SearchColumnStringField[] $reversalNumber
     * @return TransactionSearchRowBasic
     */
    public function setReversalNumber(SearchColumnStringField $reversalNumber): TransactionSearchRowBasic
    {
        $this->reversalNumber[] = $reversalNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getReversalNumber(): array
    {
        return $this->reversalNumber;
    }

    /**
     * @param SearchColumnDateField[] $revRecEndDate
     * @return TransactionSearchRowBasic
     */
    public function setRevRecEndDate(SearchColumnDateField $revRecEndDate): TransactionSearchRowBasic
    {
        $this->revRecEndDate[] = $revRecEndDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getRevRecEndDate(): array
    {
        return $this->revRecEndDate;
    }

    /**
     * @param SearchColumnBooleanField[] $revRecOnRevCommitment
     * @return TransactionSearchRowBasic
     */
    public function setRevRecOnRevCommitment(SearchColumnBooleanField $revRecOnRevCommitment): TransactionSearchRowBasic
    {
        $this->revRecOnRevCommitment[] = $revRecOnRevCommitment;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getRevRecOnRevCommitment(): array
    {
        return $this->revRecOnRevCommitment;
    }

    /**
     * @param SearchColumnDateField[] $revRecStartDate
     * @return TransactionSearchRowBasic
     */
    public function setRevRecStartDate(SearchColumnDateField $revRecStartDate): TransactionSearchRowBasic
    {
        $this->revRecStartDate[] = $revRecStartDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getRevRecStartDate(): array
    {
        return $this->revRecStartDate;
    }

    /**
     * @param SearchColumnSelectField[] $rgAccount
     * @return TransactionSearchRowBasic
     */
    public function setRgAccount(SearchColumnSelectField $rgAccount): TransactionSearchRowBasic
    {
        $this->rgAccount[] = $rgAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRgAccount(): array
    {
        return $this->rgAccount;
    }

    /**
     * @param SearchColumnDoubleField[] $rgAmount
     * @return TransactionSearchRowBasic
     */
    public function setRgAmount(SearchColumnDoubleField $rgAmount): TransactionSearchRowBasic
    {
        $this->rgAmount[] = $rgAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRgAmount(): array
    {
        return $this->rgAmount;
    }

    /**
     * @param SearchColumnDateField[] $salesEffectiveDate
     * @return TransactionSearchRowBasic
     */
    public function setSalesEffectiveDate(SearchColumnDateField $salesEffectiveDate): TransactionSearchRowBasic
    {
        $this->salesEffectiveDate[] = $salesEffectiveDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getSalesEffectiveDate(): array
    {
        return $this->salesEffectiveDate;
    }

    /**
     * @param SearchColumnSelectField[] $salesOrder
     * @return TransactionSearchRowBasic
     */
    public function setSalesOrder(SearchColumnSelectField $salesOrder): TransactionSearchRowBasic
    {
        $this->salesOrder[] = $salesOrder;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesOrder(): array
    {
        return $this->salesOrder;
    }

    /**
     * @param SearchColumnSelectField[] $salesRep
     * @return TransactionSearchRowBasic
     */
    public function setSalesRep(SearchColumnSelectField $salesRep): TransactionSearchRowBasic
    {
        $this->salesRep[] = $salesRep;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesRep(): array
    {
        return $this->salesRep;
    }

    /**
     * @param SearchColumnSelectField[] $salesTeamMember
     * @return TransactionSearchRowBasic
     */
    public function setSalesTeamMember(SearchColumnSelectField $salesTeamMember): TransactionSearchRowBasic
    {
        $this->salesTeamMember[] = $salesTeamMember;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesTeamMember(): array
    {
        return $this->salesTeamMember;
    }

    /**
     * @param SearchColumnSelectField[] $salesTeamRole
     * @return TransactionSearchRowBasic
     */
    public function setSalesTeamRole(SearchColumnSelectField $salesTeamRole): TransactionSearchRowBasic
    {
        $this->salesTeamRole[] = $salesTeamRole;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesTeamRole(): array
    {
        return $this->salesTeamRole;
    }

    /**
     * @param SearchColumnEnumSelectField[] $schedulingMethod
     * @return TransactionSearchRowBasic
     */
    public function setSchedulingMethod(SearchColumnEnumSelectField $schedulingMethod): TransactionSearchRowBasic
    {
        $this->schedulingMethod[] = $schedulingMethod;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getSchedulingMethod(): array
    {
        return $this->schedulingMethod;
    }

    /**
     * @param SearchColumnStringField[] $serialNumber
     * @return TransactionSearchRowBasic
     */
    public function setSerialNumber(SearchColumnStringField $serialNumber): TransactionSearchRowBasic
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
     * @param SearchColumnDoubleField[] $serialNumberCost
     * @return TransactionSearchRowBasic
     */
    public function setSerialNumberCost(SearchColumnDoubleField $serialNumberCost): TransactionSearchRowBasic
    {
        $this->serialNumberCost[] = $serialNumberCost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getSerialNumberCost(): array
    {
        return $this->serialNumberCost;
    }

    /**
     * @param SearchColumnDoubleField[] $serialNumberCostAdjustment
     * @return TransactionSearchRowBasic
     */
    public function setSerialNumberCostAdjustment(SearchColumnDoubleField $serialNumberCostAdjustment): TransactionSearchRowBasic
    {
        $this->serialNumberCostAdjustment[] = $serialNumberCostAdjustment;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getSerialNumberCostAdjustment(): array
    {
        return $this->serialNumberCostAdjustment;
    }

    /**
     * @param SearchColumnDoubleField[] $serialNumberQuantity
     * @return TransactionSearchRowBasic
     */
    public function setSerialNumberQuantity(SearchColumnDoubleField $serialNumberQuantity): TransactionSearchRowBasic
    {
        $this->serialNumberQuantity[] = $serialNumberQuantity;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getSerialNumberQuantity(): array
    {
        return $this->serialNumberQuantity;
    }

    /**
     * @param SearchColumnStringField[] $serialNumbers
     * @return TransactionSearchRowBasic
     */
    public function setSerialNumbers(SearchColumnStringField $serialNumbers): TransactionSearchRowBasic
    {
        $this->serialNumbers[] = $serialNumbers;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSerialNumbers(): array
    {
        return $this->serialNumbers;
    }

    /**
     * @param SearchColumnStringField[] $shipAddress
     * @return TransactionSearchRowBasic
     */
    public function setShipAddress(SearchColumnStringField $shipAddress): TransactionSearchRowBasic
    {
        $this->shipAddress[] = $shipAddress;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipAddress(): array
    {
        return $this->shipAddress;
    }

    /**
     * @param SearchColumnStringField[] $shipAddressee
     * @return TransactionSearchRowBasic
     */
    public function setShipAddressee(SearchColumnStringField $shipAddressee): TransactionSearchRowBasic
    {
        $this->shipAddressee[] = $shipAddressee;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipAddressee(): array
    {
        return $this->shipAddressee;
    }

    /**
     * @param SearchColumnStringField[] $shipAttention
     * @return TransactionSearchRowBasic
     */
    public function setShipAttention(SearchColumnStringField $shipAttention): TransactionSearchRowBasic
    {
        $this->shipAttention[] = $shipAttention;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipAttention(): array
    {
        return $this->shipAttention;
    }

    /**
     * @param SearchColumnEnumSelectField[] $shipCarrier
     * @return TransactionSearchRowBasic
     */
    public function setShipCarrier(SearchColumnEnumSelectField $shipCarrier): TransactionSearchRowBasic
    {
        $this->shipCarrier[] = $shipCarrier;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getShipCarrier(): array
    {
        return $this->shipCarrier;
    }

    /**
     * @param SearchColumnStringField[] $shipCity
     * @return TransactionSearchRowBasic
     */
    public function setShipCity(SearchColumnStringField $shipCity): TransactionSearchRowBasic
    {
        $this->shipCity[] = $shipCity;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipCity(): array
    {
        return $this->shipCity;
    }

    /**
     * @param SearchColumnBooleanField[] $shipComplete
     * @return TransactionSearchRowBasic
     */
    public function setShipComplete(SearchColumnBooleanField $shipComplete): TransactionSearchRowBasic
    {
        $this->shipComplete[] = $shipComplete;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getShipComplete(): array
    {
        return $this->shipComplete;
    }

    /**
     * @param SearchColumnEnumSelectField[] $shipCountry
     * @return TransactionSearchRowBasic
     */
    public function setShipCountry(SearchColumnEnumSelectField $shipCountry): TransactionSearchRowBasic
    {
        $this->shipCountry[] = $shipCountry;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getShipCountry(): array
    {
        return $this->shipCountry;
    }

    /**
     * @param SearchColumnStringField[] $shipCountryCode
     * @return TransactionSearchRowBasic
     */
    public function setShipCountryCode(SearchColumnStringField $shipCountryCode): TransactionSearchRowBasic
    {
        $this->shipCountryCode[] = $shipCountryCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipCountryCode(): array
    {
        return $this->shipCountryCode;
    }

    /**
     * @param SearchColumnDateField[] $shipDate
     * @return TransactionSearchRowBasic
     */
    public function setShipDate(SearchColumnDateField $shipDate): TransactionSearchRowBasic
    {
        $this->shipDate[] = $shipDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getShipDate(): array
    {
        return $this->shipDate;
    }

    /**
     * @param SearchColumnLongField[] $shipGroup
     * @return TransactionSearchRowBasic
     */
    public function setShipGroup(SearchColumnLongField $shipGroup): TransactionSearchRowBasic
    {
        $this->shipGroup[] = $shipGroup;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getShipGroup(): array
    {
        return $this->shipGroup;
    }

    /**
     * @param SearchColumnSelectField[] $shipMethod
     * @return TransactionSearchRowBasic
     */
    public function setShipMethod(SearchColumnSelectField $shipMethod): TransactionSearchRowBasic
    {
        $this->shipMethod[] = $shipMethod;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getShipMethod(): array
    {
        return $this->shipMethod;
    }

    /**
     * @param SearchColumnStringField[] $shipPhone
     * @return TransactionSearchRowBasic
     */
    public function setShipPhone(SearchColumnStringField $shipPhone): TransactionSearchRowBasic
    {
        $this->shipPhone[] = $shipPhone;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipPhone(): array
    {
        return $this->shipPhone;
    }

    /**
     * @param SearchColumnDoubleField[] $shippingAmount
     * @return TransactionSearchRowBasic
     */
    public function setShippingAmount(SearchColumnDoubleField $shippingAmount): TransactionSearchRowBasic
    {
        $this->shippingAmount[] = $shippingAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getShippingAmount(): array
    {
        return $this->shippingAmount;
    }

    /**
     * @param SearchColumnBooleanField[] $shipRecvStatusLine
     * @return TransactionSearchRowBasic
     */
    public function setShipRecvStatusLine(SearchColumnBooleanField $shipRecvStatusLine): TransactionSearchRowBasic
    {
        $this->shipRecvStatusLine[] = $shipRecvStatusLine;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getShipRecvStatusLine(): array
    {
        return $this->shipRecvStatusLine;
    }

    /**
     * @param SearchColumnStringField[] $shipState
     * @return TransactionSearchRowBasic
     */
    public function setShipState(SearchColumnStringField $shipState): TransactionSearchRowBasic
    {
        $this->shipState[] = $shipState;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipState(): array
    {
        return $this->shipState;
    }

    /**
     * @param SearchColumnSelectField[] $shipTo
     * @return TransactionSearchRowBasic
     */
    public function setShipTo(SearchColumnSelectField $shipTo): TransactionSearchRowBasic
    {
        $this->shipTo[] = $shipTo;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getShipTo(): array
    {
        return $this->shipTo;
    }

    /**
     * @param SearchColumnStringField[] $shipZip
     * @return TransactionSearchRowBasic
     */
    public function setShipZip(SearchColumnStringField $shipZip): TransactionSearchRowBasic
    {
        $this->shipZip[] = $shipZip;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipZip(): array
    {
        return $this->shipZip;
    }

    /**
     * @param SearchColumnDoubleField[] $signedAmount
     * @return TransactionSearchRowBasic
     */
    public function setSignedAmount(SearchColumnDoubleField $signedAmount): TransactionSearchRowBasic
    {
        $this->signedAmount[] = $signedAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getSignedAmount(): array
    {
        return $this->signedAmount;
    }

    /**
     * @param SearchColumnStringField[] $source
     * @return TransactionSearchRowBasic
     */
    public function setSource(SearchColumnStringField $source): TransactionSearchRowBasic
    {
        $this->source[] = $source;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSource(): array
    {
        return $this->source;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return TransactionSearchRowBasic
     */
    public function setStartDate(SearchColumnDateField $startDate): TransactionSearchRowBasic
    {
        $this->startDate[] = $startDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDate(): array
    {
        return $this->startDate;
    }

    /**
     * @param SearchColumnEnumSelectField[] $status
     * @return TransactionSearchRowBasic
     */
    public function setStatus(SearchColumnEnumSelectField $status): TransactionSearchRowBasic
    {
        $this->status[] = $status;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getStatus(): array
    {
        return $this->status;
    }

    /**
     * @param SearchColumnSelectField[] $subscription
     * @return TransactionSearchRowBasic
     */
    public function setSubscription(SearchColumnSelectField $subscription): TransactionSearchRowBasic
    {
        $this->subscription[] = $subscription;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubscription(): array
    {
        return $this->subscription;
    }

    /**
     * @param SearchColumnSelectField[] $subscriptionLine
     * @return TransactionSearchRowBasic
     */
    public function setSubscriptionLine(SearchColumnSelectField $subscriptionLine): TransactionSearchRowBasic
    {
        $this->subscriptionLine[] = $subscriptionLine;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubscriptionLine(): array
    {
        return $this->subscriptionLine;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return TransactionSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): TransactionSearchRowBasic
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
     * @param SearchColumnStringField[] $subsidiaryTaxRegNum
     * @return TransactionSearchRowBasic
     */
    public function setSubsidiaryTaxRegNum(SearchColumnStringField $subsidiaryTaxRegNum): TransactionSearchRowBasic
    {
        $this->subsidiaryTaxRegNum[] = $subsidiaryTaxRegNum;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSubsidiaryTaxRegNum(): array
    {
        return $this->subsidiaryTaxRegNum;
    }

    /**
     * @param SearchColumnDoubleField[] $taxAmount
     * @return TransactionSearchRowBasic
     */
    public function setTaxAmount(SearchColumnDoubleField $taxAmount): TransactionSearchRowBasic
    {
        $this->taxAmount[] = $taxAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTaxAmount(): array
    {
        return $this->taxAmount;
    }

    /**
     * @param SearchColumnSelectField[] $taxCode
     * @return TransactionSearchRowBasic
     */
    public function setTaxCode(SearchColumnSelectField $taxCode): TransactionSearchRowBasic
    {
        $this->taxCode[] = $taxCode;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxCode(): array
    {
        return $this->taxCode;
    }

    /**
     * @param SearchColumnBooleanField[] $taxLine
     * @return TransactionSearchRowBasic
     */
    public function setTaxLine(SearchColumnBooleanField $taxLine): TransactionSearchRowBasic
    {
        $this->taxLine[] = $taxLine;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getTaxLine(): array
    {
        return $this->taxLine;
    }

    /**
     * @param SearchColumnSelectField[] $taxPeriod
     * @return TransactionSearchRowBasic
     */
    public function setTaxPeriod(SearchColumnSelectField $taxPeriod): TransactionSearchRowBasic
    {
        $this->taxPeriod[] = $taxPeriod;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxPeriod(): array
    {
        return $this->taxPeriod;
    }

    /**
     * @param SearchColumnDateField[] $taxPointDate
     * @return TransactionSearchRowBasic
     */
    public function setTaxPointDate(SearchColumnDateField $taxPointDate): TransactionSearchRowBasic
    {
        $this->taxPointDate[] = $taxPointDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getTaxPointDate(): array
    {
        return $this->taxPointDate;
    }

    /**
     * @param SearchColumnDoubleField[] $taxTotal
     * @return TransactionSearchRowBasic
     */
    public function setTaxTotal(SearchColumnDoubleField $taxTotal): TransactionSearchRowBasic
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTaxTotal(): array
    {
        return $this->taxTotal;
    }

    /**
     * @param SearchColumnLongField[] $termInMonths
     * @return TransactionSearchRowBasic
     */
    public function setTermInMonths(SearchColumnLongField $termInMonths): TransactionSearchRowBasic
    {
        $this->termInMonths[] = $termInMonths;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getTermInMonths(): array
    {
        return $this->termInMonths;
    }

    /**
     * @param SearchColumnSelectField[] $terms
     * @return TransactionSearchRowBasic
     */
    public function setTerms(SearchColumnSelectField $terms): TransactionSearchRowBasic
    {
        $this->terms[] = $terms;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTerms(): array
    {
        return $this->terms;
    }

    /**
     * @param SearchColumnStringField[] $termsOfSale
     * @return TransactionSearchRowBasic
     */
    public function setTermsOfSale(SearchColumnStringField $termsOfSale): TransactionSearchRowBasic
    {
        $this->termsOfSale[] = $termsOfSale;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTermsOfSale(): array
    {
        return $this->termsOfSale;
    }

    /**
     * @param SearchColumnStringField[] $title
     * @return TransactionSearchRowBasic
     */
    public function setTitle(SearchColumnStringField $title): TransactionSearchRowBasic
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTitle(): array
    {
        return $this->title;
    }

    /**
     * @param SearchColumnBooleanField[] $toBeEmailed
     * @return TransactionSearchRowBasic
     */
    public function setToBeEmailed(SearchColumnBooleanField $toBeEmailed): TransactionSearchRowBasic
    {
        $this->toBeEmailed[] = $toBeEmailed;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getToBeEmailed(): array
    {
        return $this->toBeEmailed;
    }

    /**
     * @param SearchColumnBooleanField[] $toBePrinted
     * @return TransactionSearchRowBasic
     */
    public function setToBePrinted(SearchColumnBooleanField $toBePrinted): TransactionSearchRowBasic
    {
        $this->toBePrinted[] = $toBePrinted;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getToBePrinted(): array
    {
        return $this->toBePrinted;
    }

    /**
     * @param SearchColumnSelectField[] $toSubsidiary
     * @return TransactionSearchRowBasic
     */
    public function setToSubsidiary(SearchColumnSelectField $toSubsidiary): TransactionSearchRowBasic
    {
        $this->toSubsidiary[] = $toSubsidiary;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getToSubsidiary(): array
    {
        return $this->toSubsidiary;
    }

    /**
     * @param SearchColumnDoubleField[] $total
     * @return TransactionSearchRowBasic
     */
    public function setTotal(SearchColumnDoubleField $total): TransactionSearchRowBasic
    {
        $this->total[] = $total;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTotal(): array
    {
        return $this->total;
    }

    /**
     * @param SearchColumnDoubleField[] $totalCostEstimate
     * @return TransactionSearchRowBasic
     */
    public function setTotalCostEstimate(SearchColumnDoubleField $totalCostEstimate): TransactionSearchRowBasic
    {
        $this->totalCostEstimate[] = $totalCostEstimate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTotalCostEstimate(): array
    {
        return $this->totalCostEstimate;
    }

    /**
     * @param SearchColumnStringField[] $trackingNumbers
     * @return TransactionSearchRowBasic
     */
    public function setTrackingNumbers(SearchColumnStringField $trackingNumbers): TransactionSearchRowBasic
    {
        $this->trackingNumbers[] = $trackingNumbers;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTrackingNumbers(): array
    {
        return $this->trackingNumbers;
    }

    /**
     * @param SearchColumnDateField[] $tranDate
     * @return TransactionSearchRowBasic
     */
    public function setTranDate(SearchColumnDateField $tranDate): TransactionSearchRowBasic
    {
        $this->tranDate[] = $tranDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getTranDate(): array
    {
        return $this->tranDate;
    }

    /**
     * @param SearchColumnDoubleField[] $tranEstGrossProfit
     * @return TransactionSearchRowBasic
     */
    public function setTranEstGrossProfit(SearchColumnDoubleField $tranEstGrossProfit): TransactionSearchRowBasic
    {
        $this->tranEstGrossProfit[] = $tranEstGrossProfit;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTranEstGrossProfit(): array
    {
        return $this->tranEstGrossProfit;
    }

    /**
     * @param SearchColumnDoubleField[] $tranFxEstGrossProfit
     * @return TransactionSearchRowBasic
     */
    public function setTranFxEstGrossProfit(SearchColumnDoubleField $tranFxEstGrossProfit): TransactionSearchRowBasic
    {
        $this->tranFxEstGrossProfit[] = $tranFxEstGrossProfit;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTranFxEstGrossProfit(): array
    {
        return $this->tranFxEstGrossProfit;
    }

    /**
     * @param SearchColumnStringField[] $tranId
     * @return TransactionSearchRowBasic
     */
    public function setTranId(SearchColumnStringField $tranId): TransactionSearchRowBasic
    {
        $this->tranId[] = $tranId;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTranId(): array
    {
        return $this->tranId;
    }

    /**
     * @param SearchColumnBooleanField[] $tranIsVsoeBundle
     * @return TransactionSearchRowBasic
     */
    public function setTranIsVsoeBundle(SearchColumnBooleanField $tranIsVsoeBundle): TransactionSearchRowBasic
    {
        $this->tranIsVsoeBundle[] = $tranIsVsoeBundle;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getTranIsVsoeBundle(): array
    {
        return $this->tranIsVsoeBundle;
    }

    /**
     * @param SearchColumnBooleanField[] $transactionDiscount
     * @return TransactionSearchRowBasic
     */
    public function setTransactionDiscount(SearchColumnBooleanField $transactionDiscount): TransactionSearchRowBasic
    {
        $this->transactionDiscount[] = $transactionDiscount;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getTransactionDiscount(): array
    {
        return $this->transactionDiscount;
    }

    /**
     * @param SearchColumnEnumSelectField[] $transactionLineType
     * @return TransactionSearchRowBasic
     */
    public function setTransactionLineType(SearchColumnEnumSelectField $transactionLineType): TransactionSearchRowBasic
    {
        $this->transactionLineType[] = $transactionLineType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getTransactionLineType(): array
    {
        return $this->transactionLineType;
    }

    /**
     * @param SearchColumnStringField[] $transactionNumber
     * @return TransactionSearchRowBasic
     */
    public function setTransactionNumber(SearchColumnStringField $transactionNumber): TransactionSearchRowBasic
    {
        $this->transactionNumber[] = $transactionNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTransactionNumber(): array
    {
        return $this->transactionNumber;
    }

    /**
     * @param SearchColumnSelectField[] $transferLocation
     * @return TransactionSearchRowBasic
     */
    public function setTransferLocation(SearchColumnSelectField $transferLocation): TransactionSearchRowBasic
    {
        $this->transferLocation[] = $transferLocation;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTransferLocation(): array
    {
        return $this->transferLocation;
    }

    /**
     * @param SearchColumnStringField[] $transferOrderItemLine
     * @return TransactionSearchRowBasic
     */
    public function setTransferOrderItemLine(SearchColumnStringField $transferOrderItemLine): TransactionSearchRowBasic
    {
        $this->transferOrderItemLine[] = $transferOrderItemLine;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTransferOrderItemLine(): array
    {
        return $this->transferOrderItemLine;
    }

    /**
     * @param SearchColumnDoubleField[] $transferOrderQuantityCommitted
     * @return TransactionSearchRowBasic
     */
    public function setTransferOrderQuantityCommitted(SearchColumnDoubleField $transferOrderQuantityCommitted): TransactionSearchRowBasic
    {
        $this->transferOrderQuantityCommitted[] = $transferOrderQuantityCommitted;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTransferOrderQuantityCommitted(): array
    {
        return $this->transferOrderQuantityCommitted;
    }

    /**
     * @param SearchColumnDoubleField[] $transferOrderQuantityPacked
     * @return TransactionSearchRowBasic
     */
    public function setTransferOrderQuantityPacked(SearchColumnDoubleField $transferOrderQuantityPacked): TransactionSearchRowBasic
    {
        $this->transferOrderQuantityPacked[] = $transferOrderQuantityPacked;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTransferOrderQuantityPacked(): array
    {
        return $this->transferOrderQuantityPacked;
    }

    /**
     * @param SearchColumnDoubleField[] $transferOrderQuantityPicked
     * @return TransactionSearchRowBasic
     */
    public function setTransferOrderQuantityPicked(SearchColumnDoubleField $transferOrderQuantityPicked): TransactionSearchRowBasic
    {
        $this->transferOrderQuantityPicked[] = $transferOrderQuantityPicked;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTransferOrderQuantityPicked(): array
    {
        return $this->transferOrderQuantityPicked;
    }

    /**
     * @param SearchColumnDoubleField[] $transferOrderQuantityReceived
     * @return TransactionSearchRowBasic
     */
    public function setTransferOrderQuantityReceived(SearchColumnDoubleField $transferOrderQuantityReceived): TransactionSearchRowBasic
    {
        $this->transferOrderQuantityReceived[] = $transferOrderQuantityReceived;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTransferOrderQuantityReceived(): array
    {
        return $this->transferOrderQuantityReceived;
    }

    /**
     * @param SearchColumnDoubleField[] $transferOrderQuantityShipped
     * @return TransactionSearchRowBasic
     */
    public function setTransferOrderQuantityShipped(SearchColumnDoubleField $transferOrderQuantityShipped): TransactionSearchRowBasic
    {
        $this->transferOrderQuantityShipped[] = $transferOrderQuantityShipped;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTransferOrderQuantityShipped(): array
    {
        return $this->transferOrderQuantityShipped;
    }

    /**
     * @param SearchColumnEnumSelectField[] $type
     * @return TransactionSearchRowBasic
     */
    public function setType(SearchColumnEnumSelectField $type): TransactionSearchRowBasic
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
     * @param SearchColumnStringField[] $unit
     * @return TransactionSearchRowBasic
     */
    public function setUnit(SearchColumnStringField $unit): TransactionSearchRowBasic
    {
        $this->unit[] = $unit;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getUnit(): array
    {
        return $this->unit;
    }

    /**
     * @param SearchColumnDoubleField[] $unitCostOverride
     * @return TransactionSearchRowBasic
     */
    public function setUnitCostOverride(SearchColumnDoubleField $unitCostOverride): TransactionSearchRowBasic
    {
        $this->unitCostOverride[] = $unitCostOverride;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnitCostOverride(): array
    {
        return $this->unitCostOverride;
    }

    /**
     * @param SearchColumnSelectField[] $vendType
     * @return TransactionSearchRowBasic
     */
    public function setVendType(SearchColumnSelectField $vendType): TransactionSearchRowBasic
    {
        $this->vendType[] = $vendType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVendType(): array
    {
        return $this->vendType;
    }

    /**
     * @param SearchColumnBooleanField[] $visibleToCustomer
     * @return TransactionSearchRowBasic
     */
    public function setVisibleToCustomer(SearchColumnBooleanField $visibleToCustomer): TransactionSearchRowBasic
    {
        $this->visibleToCustomer[] = $visibleToCustomer;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getVisibleToCustomer(): array
    {
        return $this->visibleToCustomer;
    }

    /**
     * @param SearchColumnDoubleField[] $vsoeAllocation
     * @return TransactionSearchRowBasic
     */
    public function setVsoeAllocation(SearchColumnDoubleField $vsoeAllocation): TransactionSearchRowBasic
    {
        $this->vsoeAllocation[] = $vsoeAllocation;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getVsoeAllocation(): array
    {
        return $this->vsoeAllocation;
    }

    /**
     * @param SearchColumnDoubleField[] $vsoeAmount
     * @return TransactionSearchRowBasic
     */
    public function setVsoeAmount(SearchColumnDoubleField $vsoeAmount): TransactionSearchRowBasic
    {
        $this->vsoeAmount[] = $vsoeAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getVsoeAmount(): array
    {
        return $this->vsoeAmount;
    }

    /**
     * @param SearchColumnEnumSelectField[] $vsoeDeferral
     * @return TransactionSearchRowBasic
     */
    public function setVsoeDeferral(SearchColumnEnumSelectField $vsoeDeferral): TransactionSearchRowBasic
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
     * @return TransactionSearchRowBasic
     */
    public function setVsoeDelivered(SearchColumnBooleanField $vsoeDelivered): TransactionSearchRowBasic
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
     * @return TransactionSearchRowBasic
     */
    public function setVsoePermitDiscount(SearchColumnEnumSelectField $vsoePermitDiscount): TransactionSearchRowBasic
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
     * @return TransactionSearchRowBasic
     */
    public function setVsoePrice(SearchColumnDoubleField $vsoePrice): TransactionSearchRowBasic
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
     * @param SearchColumnStringField[] $webSite
     * @return TransactionSearchRowBasic
     */
    public function setWebSite(SearchColumnStringField $webSite): TransactionSearchRowBasic
    {
        $this->webSite[] = $webSite;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getWebSite(): array
    {
        return $this->webSite;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return TransactionSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): TransactionSearchRowBasic
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
