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

class TransactionSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $account;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $accountType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $acctCorpCardExp;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $actualProductionEndDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $actualProductionStartDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $actualShipDate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $altSalesAmount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $altSalesNetAmount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $amount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $amountPaid;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $amountRemaining;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $amountUnbilled;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $anyLineItem;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $appliedToForeignAmount;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $appliedToIsFxVariance;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $appliedToLinkAmount;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $appliedToLinkType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $appliedToTransaction;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $applyingForeignAmount;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $applyingIsFxVariance;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $applyingLinkAmount;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $applyingLinkType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $applyingTransaction;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $approvalStatus;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $authCode;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $autoCalculateLag;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $avsStreetMatch;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $avsZipMatch;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $billable;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $billAddress;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $billAddressee;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $billAttention;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $billCity;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $billCountry;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $billCounty;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $billedDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $billingAccount;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $billingSchedule;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $billingStatus;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $billingTransaction;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $billPhone;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $billState;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $billVarianceStatus;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $billZip;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $binNumber;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $binNumberQuantity;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $bomQuantity;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $bookSpecificTransaction;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $buildEntireAssembly;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $buildVariance;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $built;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $canHaveStackablePromotions;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $catchUpPeriod;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $ccCustomerCode;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $ccExpireDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $ccName;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $ccNumber;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $chargeType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $class;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $cleared;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $closed;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $closeDate;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $cogs;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $commissionEffectiveDate;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $commit;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $componentYield;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $confirmationNumber;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $contribution;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $costComponentAmount;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $costComponentCategory;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $costComponentItem;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $costComponentQuantity;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $costComponentStandardCost;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $costEstimate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $costEstimateRate;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $costEstimateType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $createdBy;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $createdFrom;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $creditAmount;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $cscMatch;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $currency;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $customerSubOf;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $customForm;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $customGL;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $custType;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $dateCreated;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $daysOpen;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $daysOverdue;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $debitAmount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $deferredRevenue;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $deferRevRec;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $department;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $depositDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $depositTransaction;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $drAccount;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $dueDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $email;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $employee;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $endDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $entity;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $entityStatus;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estGrossProfit;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estGrossProfitPct;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $exchangeRate;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $excludeCommission;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $excludeFromRateRequest;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $expectedCloseDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $expectedReceiptDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $expenseCategory;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $expenseDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $finChrg;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $firmed;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $forecastType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $fulfillingTransaction;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $fxAccount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fxAmount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fxCostEstimate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fxCostEstimateRate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fxEstGrossProfit;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fxTranCostEstimate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fxVsoeAllocation;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fxVsoeAmount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fxVsoePrice;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $gcoAvailabelToCharge;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $gcoAvailableToRefund;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $gcoAvsStreetMatch;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $gcoAvsZipMatch;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $gcoBuyerAccountAge;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $gcoBuyerIp;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $gcoChargeAmount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $gcoChargebackAmount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $gcoConfirmedChargedTotal;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $gcoConfirmedRefundedTotal;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $gcoCreditcardNumber;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $gcoCscMatch;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $gcoFinancialState;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $gcoFulfillmentState;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $gcoOrderId;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $gcoOrderTotal;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $gcoPromotionAmount;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $gcoPromotionName;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $gcoRefundAmount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $gcoShippingTotal;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $gcoStateChangedDetail;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $giftCertificate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $grossAmount;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $includeInForecast;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $incoterm;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $intercoStatus;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $intercoTransaction;

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
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $inventorySubsidiary;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $inVsoeBundle;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isAllocation;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isBackflush;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isGcoChargeback;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isGcoChargeConfirmed;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isGcoPaymentGuaranteed;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isGcoRefundConfirmed;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isInsideDelivery;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isInsidePickup;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isIntercompanyAdjustment;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isInTransitPayment;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isMultiShipTo;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isPayPalMeth;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isReversal;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isRevRecTransaction;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isScrap;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isShipAddress;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isTransferPriceCosting;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isVsoeAlloc;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isWip;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $item;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $itemFulfillmentChoice;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $itemRevision;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $itemSubOf;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $landedCostPerLine;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastModifiedDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $leadSource;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $lineUniqueKey;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $location;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $locationAutoAssigned;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $mainLine;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $mainName;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $manufacturingRouting;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $matchBillToReceipt;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $memo;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $memoMain;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $memorized;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $merchantAccount;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $message;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $multiSubsidiary;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $nameText;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $netAmount;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $nextApprover;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $nextBillDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $nexus;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $noAutoAssignLocation;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $nonReimbursable;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $number;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $oneTimeTotal;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $opportunity;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $orderAllocationStrategy;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $orderPriority;

    /**
     * @var SearchTextNumberField
     */
    protected SearchTextNumberField $otherRefNum;

    /**
     * @var SearchTextNumberField
     */
    protected SearchTextNumberField $otherRefNumNonDeposit;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $overheadParentItem;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $overrideInstallments;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $packageCount;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $paidTransaction;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $parent;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $partner;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $partnerContribution;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $partnerRole;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $partnerTeamMember;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $payingTransaction;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $paymentApproved;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $paymentEventDate;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $paymentEventHoldReason;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $paymentEventPurchaseCardUsed;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $paymentEventPurchaseDataSent;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $paymentEventResult;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $paymentEventType;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $paymentHold;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $paymentMethod;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $paymentOption;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $payPalPending;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $payPalStatus;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $payPalTranId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $pnRefNum;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $poAsText;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $posting;

    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

    /**
     * @var PostingPeriodDate
     */
    protected PostingPeriodDate $postingPeriodRelative;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $priceLevel;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $printedPickingTicket;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $probability;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $projectedAmount;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $projectTask;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $promoCode;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $purchaseOrder;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantity;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityBilled;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityCommitted;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityPacked;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityPicked;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityRevCommitted;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityShipRecv;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $recognizedRevenue;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $recordType;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $recurAnnuallyTotal;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $recurMonthlyTotal;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $recurQuarterlyTotal;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $recurringBill;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $recurWeeklyTotal;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $refNumber;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $requestedDate;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $revCommitStatus;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $revCommittingStatus;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $revCommittingTransaction;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $revenueStatus;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $reversalDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $reversalNumber;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $revRecEndDate;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $revRecOnRevCommitment;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $revRecStartDate;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $revRecTermInMonths;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $salesEffectiveDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $salesOrder;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $salesRep;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $salesTeamMember;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $salesTeamRole;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $schedulingMethod;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $serialNumber;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $serialNumberCost;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $serialNumberCostAdjustment;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $serialNumberQuantity;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $serialNumbers;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $shipAddress;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $shipAddressee;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $shipAttention;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $shipCarrier;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $shipCity;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $shipComplete;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $shipCountry;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $shipCounty;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $shipDate;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $shipGroup;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $shipMethod;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $shipPhone;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $shipping;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $shipRecvStatus;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $shipRecvStatusLine;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $shipState;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $shipTo;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $shipZip;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $source;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $startDate;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $statistical;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $status;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subscription;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subscriptionLine;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiaryTaxRegNum;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $taxItem;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $taxLine;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxPeriod;

    /**
     * @var PostingPeriodDate
     */
    protected PostingPeriodDate $taxPeriodRelative;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $taxPointDate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $taxRate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $terms;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $termsOfSale;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $title;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $toBeEmailed;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $toBePrinted;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $toSubsidiary;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $totalAmount;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $trackingNumbers;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $tranCostEstimate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $tranDate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $tranEstGrossProfit;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $tranEstGrossProfitPct;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $tranFxEstGrossProfit;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $tranId;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $tranIsVsoeBundle;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $transactionDiscount;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $transactionLineType;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $transactionNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $transferLocation;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $transferOrderQuantityCommitted;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $transferOrderQuantityPacked;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $transferOrderQuantityPicked;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $transferOrderQuantityReceived;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $transferOrderQuantityShipped;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $type;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $unit;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $unitCostOverride;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $unitsType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $vendType;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $visibleToCustomer;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $voided;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $vsoeAllocation;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $vsoeAmount;

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
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $webSite;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "account" => "SearchMultiSelectField",
        "accountType" => "SearchEnumMultiSelectField",
        "acctCorpCardExp" => "SearchMultiSelectField",
        "actualProductionEndDate" => "SearchDateField",
        "actualProductionStartDate" => "SearchDateField",
        "actualShipDate" => "SearchDateField",
        "altSalesAmount" => "SearchDoubleField",
        "altSalesNetAmount" => "SearchDoubleField",
        "amount" => "SearchDoubleField",
        "amountPaid" => "SearchDoubleField",
        "amountRemaining" => "SearchDoubleField",
        "amountUnbilled" => "SearchDoubleField",
        "anyLineItem" => "SearchMultiSelectField",
        "appliedToForeignAmount" => "SearchDoubleField",
        "appliedToIsFxVariance" => "SearchBooleanField",
        "appliedToLinkAmount" => "SearchDoubleField",
        "appliedToLinkType" => "SearchEnumMultiSelectField",
        "appliedToTransaction" => "SearchMultiSelectField",
        "applyingForeignAmount" => "SearchDoubleField",
        "applyingIsFxVariance" => "SearchBooleanField",
        "applyingLinkAmount" => "SearchDoubleField",
        "applyingLinkType" => "SearchEnumMultiSelectField",
        "applyingTransaction" => "SearchMultiSelectField",
        "approvalStatus" => "SearchEnumMultiSelectField",
        "authCode" => "SearchStringField",
        "autoCalculateLag" => "SearchBooleanField",
        "avsStreetMatch" => "SearchEnumMultiSelectField",
        "avsZipMatch" => "SearchEnumMultiSelectField",
        "billable" => "SearchBooleanField",
        "billAddress" => "SearchStringField",
        "billAddressee" => "SearchStringField",
        "billAttention" => "SearchStringField",
        "billCity" => "SearchStringField",
        "billCountry" => "SearchEnumMultiSelectField",
        "billCounty" => "SearchStringField",
        "billedDate" => "SearchDateField",
        "billingAccount" => "SearchMultiSelectField",
        "billingSchedule" => "SearchMultiSelectField",
        "billingStatus" => "SearchBooleanField",
        "billingTransaction" => "SearchMultiSelectField",
        "billPhone" => "SearchStringField",
        "billState" => "SearchStringField",
        "billVarianceStatus" => "SearchEnumMultiSelectField",
        "billZip" => "SearchStringField",
        "binNumber" => "SearchStringField",
        "binNumberQuantity" => "SearchDoubleField",
        "bomQuantity" => "SearchDoubleField",
        "bookSpecificTransaction" => "SearchBooleanField",
        "buildEntireAssembly" => "SearchBooleanField",
        "buildVariance" => "SearchDoubleField",
        "built" => "SearchDoubleField",
        "canHaveStackablePromotions" => "SearchBooleanField",
        "catchUpPeriod" => "SearchMultiSelectField",
        "ccCustomerCode" => "SearchStringField",
        "ccExpireDate" => "SearchDateField",
        "ccName" => "SearchStringField",
        "ccNumber" => "SearchStringField",
        "chargeType" => "SearchEnumMultiSelectField",
        "class" => "SearchMultiSelectField",
        "cleared" => "SearchBooleanField",
        "closed" => "SearchBooleanField",
        "closeDate" => "SearchDateField",
        "cogs" => "SearchBooleanField",
        "commissionEffectiveDate" => "SearchDateField",
        "commit" => "SearchEnumMultiSelectField",
        "componentYield" => "SearchDoubleField",
        "confirmationNumber" => "SearchStringField",
        "contribution" => "SearchLongField",
        "costComponentAmount" => "SearchDoubleField",
        "costComponentCategory" => "SearchMultiSelectField",
        "costComponentItem" => "SearchMultiSelectField",
        "costComponentQuantity" => "SearchDoubleField",
        "costComponentStandardCost" => "SearchDoubleField",
        "costEstimate" => "SearchDoubleField",
        "costEstimateRate" => "SearchDoubleField",
        "costEstimateType" => "SearchEnumMultiSelectField",
        "createdBy" => "SearchMultiSelectField",
        "createdFrom" => "SearchMultiSelectField",
        "creditAmount" => "SearchDoubleField",
        "cscMatch" => "SearchEnumMultiSelectField",
        "currency" => "SearchMultiSelectField",
        "customerSubOf" => "SearchMultiSelectField",
        "customForm" => "SearchMultiSelectField",
        "customGL" => "SearchBooleanField",
        "custType" => "SearchMultiSelectField",
        "dateCreated" => "SearchDateField",
        "daysOpen" => "SearchLongField",
        "daysOverdue" => "SearchLongField",
        "debitAmount" => "SearchDoubleField",
        "deferredRevenue" => "SearchDoubleField",
        "deferRevRec" => "SearchBooleanField",
        "department" => "SearchMultiSelectField",
        "depositDate" => "SearchDateField",
        "depositTransaction" => "SearchMultiSelectField",
        "drAccount" => "SearchMultiSelectField",
        "dueDate" => "SearchDateField",
        "email" => "SearchStringField",
        "employee" => "SearchMultiSelectField",
        "endDate" => "SearchDateField",
        "entity" => "SearchMultiSelectField",
        "entityStatus" => "SearchMultiSelectField",
        "estGrossProfit" => "SearchDoubleField",
        "estGrossProfitPct" => "SearchDoubleField",
        "exchangeRate" => "SearchDoubleField",
        "excludeCommission" => "SearchBooleanField",
        "excludeFromRateRequest" => "SearchBooleanField",
        "expectedCloseDate" => "SearchDateField",
        "expectedReceiptDate" => "SearchDateField",
        "expenseCategory" => "SearchMultiSelectField",
        "expenseDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "finChrg" => "SearchBooleanField",
        "firmed" => "SearchBooleanField",
        "forecastType" => "SearchEnumMultiSelectField",
        "fulfillingTransaction" => "SearchMultiSelectField",
        "fxAccount" => "SearchMultiSelectField",
        "fxAmount" => "SearchDoubleField",
        "fxCostEstimate" => "SearchDoubleField",
        "fxCostEstimateRate" => "SearchDoubleField",
        "fxEstGrossProfit" => "SearchDoubleField",
        "fxTranCostEstimate" => "SearchDoubleField",
        "fxVsoeAllocation" => "SearchDoubleField",
        "fxVsoeAmount" => "SearchDoubleField",
        "fxVsoePrice" => "SearchDoubleField",
        "gcoAvailabelToCharge" => "SearchBooleanField",
        "gcoAvailableToRefund" => "SearchBooleanField",
        "gcoAvsStreetMatch" => "SearchEnumMultiSelectField",
        "gcoAvsZipMatch" => "SearchEnumMultiSelectField",
        "gcoBuyerAccountAge" => "SearchLongField",
        "gcoBuyerIp" => "SearchStringField",
        "gcoChargeAmount" => "SearchDoubleField",
        "gcoChargebackAmount" => "SearchDoubleField",
        "gcoConfirmedChargedTotal" => "SearchDoubleField",
        "gcoConfirmedRefundedTotal" => "SearchDoubleField",
        "gcoCreditcardNumber" => "SearchStringField",
        "gcoCscMatch" => "SearchEnumMultiSelectField",
        "gcoFinancialState" => "SearchStringField",
        "gcoFulfillmentState" => "SearchStringField",
        "gcoOrderId" => "SearchStringField",
        "gcoOrderTotal" => "SearchDoubleField",
        "gcoPromotionAmount" => "SearchDoubleField",
        "gcoPromotionName" => "SearchStringField",
        "gcoRefundAmount" => "SearchDoubleField",
        "gcoShippingTotal" => "SearchDoubleField",
        "gcoStateChangedDetail" => "SearchStringField",
        "giftCertificate" => "SearchStringField",
        "grossAmount" => "SearchDoubleField",
        "includeInForecast" => "SearchBooleanField",
        "incoterm" => "SearchMultiSelectField",
        "intercoStatus" => "SearchEnumMultiSelectField",
        "intercoTransaction" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "inventoryLocation" => "SearchMultiSelectField",
        "inventorySubsidiary" => "SearchMultiSelectField",
        "inVsoeBundle" => "SearchBooleanField",
        "isAllocation" => "SearchBooleanField",
        "isBackflush" => "SearchBooleanField",
        "isGcoChargeback" => "SearchBooleanField",
        "isGcoChargeConfirmed" => "SearchBooleanField",
        "isGcoPaymentGuaranteed" => "SearchBooleanField",
        "isGcoRefundConfirmed" => "SearchBooleanField",
        "isInsideDelivery" => "SearchBooleanField",
        "isInsidePickup" => "SearchBooleanField",
        "isIntercompanyAdjustment" => "SearchBooleanField",
        "isInTransitPayment" => "SearchBooleanField",
        "isMultiShipTo" => "SearchBooleanField",
        "isPayPalMeth" => "SearchBooleanField",
        "isReversal" => "SearchBooleanField",
        "isRevRecTransaction" => "SearchBooleanField",
        "isScrap" => "SearchBooleanField",
        "isShipAddress" => "SearchBooleanField",
        "isTransferPriceCosting" => "SearchBooleanField",
        "isVsoeAlloc" => "SearchBooleanField",
        "isWip" => "SearchBooleanField",
        "item" => "SearchMultiSelectField",
        "itemFulfillmentChoice" => "SearchEnumMultiSelectField",
        "itemRevision" => "SearchMultiSelectField",
        "itemSubOf" => "SearchMultiSelectField",
        "landedCostPerLine" => "SearchBooleanField",
        "lastModifiedDate" => "SearchDateField",
        "leadSource" => "SearchMultiSelectField",
        "lineUniqueKey" => "SearchLongField",
        "location" => "SearchMultiSelectField",
        "locationAutoAssigned" => "SearchBooleanField",
        "mainLine" => "SearchBooleanField",
        "mainName" => "SearchMultiSelectField",
        "manufacturingRouting" => "SearchMultiSelectField",
        "matchBillToReceipt" => "SearchBooleanField",
        "memo" => "SearchStringField",
        "memoMain" => "SearchStringField",
        "memorized" => "SearchBooleanField",
        "merchantAccount" => "SearchStringField",
        "message" => "SearchStringField",
        "multiSubsidiary" => "SearchBooleanField",
        "nameText" => "SearchStringField",
        "netAmount" => "SearchDoubleField",
        "nextApprover" => "SearchMultiSelectField",
        "nextBillDate" => "SearchDateField",
        "nexus" => "SearchMultiSelectField",
        "noAutoAssignLocation" => "SearchBooleanField",
        "nonReimbursable" => "SearchBooleanField",
        "number" => "SearchLongField",
        "oneTimeTotal" => "SearchDoubleField",
        "opportunity" => "SearchMultiSelectField",
        "orderAllocationStrategy" => "SearchMultiSelectField",
        "orderPriority" => "SearchDoubleField",
        "otherRefNum" => "SearchTextNumberField",
        "otherRefNumNonDeposit" => "SearchTextNumberField",
        "overheadParentItem" => "SearchMultiSelectField",
        "overrideInstallments" => "SearchBooleanField",
        "packageCount" => "SearchLongField",
        "paidTransaction" => "SearchMultiSelectField",
        "parent" => "SearchLongField",
        "partner" => "SearchMultiSelectField",
        "partnerContribution" => "SearchLongField",
        "partnerRole" => "SearchMultiSelectField",
        "partnerTeamMember" => "SearchMultiSelectField",
        "payingTransaction" => "SearchMultiSelectField",
        "paymentApproved" => "SearchBooleanField",
        "paymentEventDate" => "SearchDateField",
        "paymentEventHoldReason" => "SearchEnumMultiSelectField",
        "paymentEventPurchaseCardUsed" => "SearchBooleanField",
        "paymentEventPurchaseDataSent" => "SearchBooleanField",
        "paymentEventResult" => "SearchEnumMultiSelectField",
        "paymentEventType" => "SearchEnumMultiSelectField",
        "paymentHold" => "SearchBooleanField",
        "paymentMethod" => "SearchMultiSelectField",
        "paymentOption" => "SearchStringField",
        "payPalPending" => "SearchBooleanField",
        "payPalStatus" => "SearchStringField",
        "payPalTranId" => "SearchStringField",
        "pnRefNum" => "SearchStringField",
        "poAsText" => "SearchStringField",
        "posting" => "SearchBooleanField",
        "postingPeriod" => "RecordRef",
        "postingPeriodRelative" => "PostingPeriodDate",
        "priceLevel" => "SearchMultiSelectField",
        "printedPickingTicket" => "SearchBooleanField",
        "probability" => "SearchLongField",
        "projectedAmount" => "SearchDoubleField",
        "projectTask" => "SearchMultiSelectField",
        "promoCode" => "SearchMultiSelectField",
        "purchaseOrder" => "SearchMultiSelectField",
        "quantity" => "SearchDoubleField",
        "quantityBilled" => "SearchDoubleField",
        "quantityCommitted" => "SearchDoubleField",
        "quantityPacked" => "SearchDoubleField",
        "quantityPicked" => "SearchDoubleField",
        "quantityRevCommitted" => "SearchDoubleField",
        "quantityShipRecv" => "SearchDoubleField",
        "recognizedRevenue" => "SearchDoubleField",
        "recordType" => "SearchStringField",
        "recurAnnuallyTotal" => "SearchDoubleField",
        "recurMonthlyTotal" => "SearchDoubleField",
        "recurQuarterlyTotal" => "SearchDoubleField",
        "recurringBill" => "SearchBooleanField",
        "recurWeeklyTotal" => "SearchDoubleField",
        "refNumber" => "SearchLongField",
        "requestedDate" => "SearchDateField",
        "revCommitStatus" => "SearchEnumMultiSelectField",
        "revCommittingStatus" => "SearchBooleanField",
        "revCommittingTransaction" => "SearchMultiSelectField",
        "revenueStatus" => "SearchEnumMultiSelectField",
        "reversalDate" => "SearchDateField",
        "reversalNumber" => "SearchStringField",
        "revRecEndDate" => "SearchDateField",
        "revRecOnRevCommitment" => "SearchBooleanField",
        "revRecStartDate" => "SearchDateField",
        "revRecTermInMonths" => "SearchLongField",
        "salesEffectiveDate" => "SearchDateField",
        "salesOrder" => "SearchMultiSelectField",
        "salesRep" => "SearchMultiSelectField",
        "salesTeamMember" => "SearchMultiSelectField",
        "salesTeamRole" => "SearchMultiSelectField",
        "schedulingMethod" => "SearchEnumMultiSelectField",
        "serialNumber" => "SearchStringField",
        "serialNumberCost" => "SearchDoubleField",
        "serialNumberCostAdjustment" => "SearchDoubleField",
        "serialNumberQuantity" => "SearchDoubleField",
        "serialNumbers" => "SearchStringField",
        "shipAddress" => "SearchStringField",
        "shipAddressee" => "SearchStringField",
        "shipAttention" => "SearchStringField",
        "shipCarrier" => "SearchEnumMultiSelectField",
        "shipCity" => "SearchStringField",
        "shipComplete" => "SearchBooleanField",
        "shipCountry" => "SearchEnumMultiSelectField",
        "shipCounty" => "SearchStringField",
        "shipDate" => "SearchDateField",
        "shipGroup" => "SearchLongField",
        "shipMethod" => "SearchMultiSelectField",
        "shipPhone" => "SearchStringField",
        "shipping" => "SearchBooleanField",
        "shipRecvStatus" => "SearchBooleanField",
        "shipRecvStatusLine" => "SearchBooleanField",
        "shipState" => "SearchMultiSelectField",
        "shipTo" => "SearchMultiSelectField",
        "shipZip" => "SearchStringField",
        "source" => "SearchEnumMultiSelectField",
        "startDate" => "SearchDateField",
        "statistical" => "SearchBooleanField",
        "status" => "SearchEnumMultiSelectField",
        "subscription" => "SearchMultiSelectField",
        "subscriptionLine" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "subsidiaryTaxRegNum" => "SearchMultiSelectField",
        "taxItem" => "SearchMultiSelectField",
        "taxLine" => "SearchBooleanField",
        "taxPeriod" => "RecordRef",
        "taxPeriodRelative" => "PostingPeriodDate",
        "taxPointDate" => "SearchDateField",
        "taxRate" => "SearchDoubleField",
        "terms" => "SearchMultiSelectField",
        "termsOfSale" => "SearchEnumMultiSelectField",
        "title" => "SearchStringField",
        "toBeEmailed" => "SearchBooleanField",
        "toBePrinted" => "SearchBooleanField",
        "toSubsidiary" => "SearchMultiSelectField",
        "totalAmount" => "SearchDoubleField",
        "trackingNumbers" => "SearchStringField",
        "tranCostEstimate" => "SearchDoubleField",
        "tranDate" => "SearchDateField",
        "tranEstGrossProfit" => "SearchDoubleField",
        "tranEstGrossProfitPct" => "SearchDoubleField",
        "tranFxEstGrossProfit" => "SearchDoubleField",
        "tranId" => "SearchStringField",
        "tranIsVsoeBundle" => "SearchBooleanField",
        "transactionDiscount" => "SearchBooleanField",
        "transactionLineType" => "SearchEnumMultiSelectField",
        "transactionNumber" => "SearchStringField",
        "transferLocation" => "SearchMultiSelectField",
        "transferOrderQuantityCommitted" => "SearchDoubleField",
        "transferOrderQuantityPacked" => "SearchDoubleField",
        "transferOrderQuantityPicked" => "SearchDoubleField",
        "transferOrderQuantityReceived" => "SearchDoubleField",
        "transferOrderQuantityShipped" => "SearchDoubleField",
        "type" => "SearchEnumMultiSelectField",
        "unit" => "SearchMultiSelectField",
        "unitCostOverride" => "SearchDoubleField",
        "unitsType" => "SearchMultiSelectField",
        "vendType" => "SearchMultiSelectField",
        "visibleToCustomer" => "SearchBooleanField",
        "voided" => "SearchBooleanField",
        "vsoeAllocation" => "SearchDoubleField",
        "vsoeAmount" => "SearchDoubleField",
        "vsoeDeferral" => "SearchEnumMultiSelectField",
        "vsoeDelivered" => "SearchBooleanField",
        "vsoePermitDiscount" => "SearchEnumMultiSelectField",
        "vsoePrice" => "SearchDoubleField",
        "webSite" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchMultiSelectField $account
     * @return TransactionSearchBasic
     */
    public function setAccount(SearchMultiSelectField $account): TransactionSearchBasic
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
     * @param SearchEnumMultiSelectField $accountType
     * @return TransactionSearchBasic
     */
    public function setAccountType(SearchEnumMultiSelectField $accountType): TransactionSearchBasic
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAccountType(): SearchEnumMultiSelectField
    {
        return $this->accountType;
    }

    /**
     * @param SearchMultiSelectField $acctCorpCardExp
     * @return TransactionSearchBasic
     */
    public function setAcctCorpCardExp(SearchMultiSelectField $acctCorpCardExp): TransactionSearchBasic
    {
        $this->acctCorpCardExp = $acctCorpCardExp;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAcctCorpCardExp(): SearchMultiSelectField
    {
        return $this->acctCorpCardExp;
    }

    /**
     * @param SearchDateField $actualProductionEndDate
     * @return TransactionSearchBasic
     */
    public function setActualProductionEndDate(SearchDateField $actualProductionEndDate): TransactionSearchBasic
    {
        $this->actualProductionEndDate = $actualProductionEndDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getActualProductionEndDate(): SearchDateField
    {
        return $this->actualProductionEndDate;
    }

    /**
     * @param SearchDateField $actualProductionStartDate
     * @return TransactionSearchBasic
     */
    public function setActualProductionStartDate(SearchDateField $actualProductionStartDate): TransactionSearchBasic
    {
        $this->actualProductionStartDate = $actualProductionStartDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getActualProductionStartDate(): SearchDateField
    {
        return $this->actualProductionStartDate;
    }

    /**
     * @param SearchDateField $actualShipDate
     * @return TransactionSearchBasic
     */
    public function setActualShipDate(SearchDateField $actualShipDate): TransactionSearchBasic
    {
        $this->actualShipDate = $actualShipDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getActualShipDate(): SearchDateField
    {
        return $this->actualShipDate;
    }

    /**
     * @param SearchDoubleField $altSalesAmount
     * @return TransactionSearchBasic
     */
    public function setAltSalesAmount(SearchDoubleField $altSalesAmount): TransactionSearchBasic
    {
        $this->altSalesAmount = $altSalesAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAltSalesAmount(): SearchDoubleField
    {
        return $this->altSalesAmount;
    }

    /**
     * @param SearchDoubleField $altSalesNetAmount
     * @return TransactionSearchBasic
     */
    public function setAltSalesNetAmount(SearchDoubleField $altSalesNetAmount): TransactionSearchBasic
    {
        $this->altSalesNetAmount = $altSalesNetAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAltSalesNetAmount(): SearchDoubleField
    {
        return $this->altSalesNetAmount;
    }

    /**
     * @param SearchDoubleField $amount
     * @return TransactionSearchBasic
     */
    public function setAmount(SearchDoubleField $amount): TransactionSearchBasic
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmount(): SearchDoubleField
    {
        return $this->amount;
    }

    /**
     * @param SearchDoubleField $amountPaid
     * @return TransactionSearchBasic
     */
    public function setAmountPaid(SearchDoubleField $amountPaid): TransactionSearchBasic
    {
        $this->amountPaid = $amountPaid;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmountPaid(): SearchDoubleField
    {
        return $this->amountPaid;
    }

    /**
     * @param SearchDoubleField $amountRemaining
     * @return TransactionSearchBasic
     */
    public function setAmountRemaining(SearchDoubleField $amountRemaining): TransactionSearchBasic
    {
        $this->amountRemaining = $amountRemaining;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmountRemaining(): SearchDoubleField
    {
        return $this->amountRemaining;
    }

    /**
     * @param SearchDoubleField $amountUnbilled
     * @return TransactionSearchBasic
     */
    public function setAmountUnbilled(SearchDoubleField $amountUnbilled): TransactionSearchBasic
    {
        $this->amountUnbilled = $amountUnbilled;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmountUnbilled(): SearchDoubleField
    {
        return $this->amountUnbilled;
    }

    /**
     * @param SearchMultiSelectField $anyLineItem
     * @return TransactionSearchBasic
     */
    public function setAnyLineItem(SearchMultiSelectField $anyLineItem): TransactionSearchBasic
    {
        $this->anyLineItem = $anyLineItem;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAnyLineItem(): SearchMultiSelectField
    {
        return $this->anyLineItem;
    }

    /**
     * @param SearchDoubleField $appliedToForeignAmount
     * @return TransactionSearchBasic
     */
    public function setAppliedToForeignAmount(SearchDoubleField $appliedToForeignAmount): TransactionSearchBasic
    {
        $this->appliedToForeignAmount = $appliedToForeignAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAppliedToForeignAmount(): SearchDoubleField
    {
        return $this->appliedToForeignAmount;
    }

    /**
     * @param SearchBooleanField $appliedToIsFxVariance
     * @return TransactionSearchBasic
     */
    public function setAppliedToIsFxVariance(SearchBooleanField $appliedToIsFxVariance): TransactionSearchBasic
    {
        $this->appliedToIsFxVariance = $appliedToIsFxVariance;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAppliedToIsFxVariance(): SearchBooleanField
    {
        return $this->appliedToIsFxVariance;
    }

    /**
     * @param SearchDoubleField $appliedToLinkAmount
     * @return TransactionSearchBasic
     */
    public function setAppliedToLinkAmount(SearchDoubleField $appliedToLinkAmount): TransactionSearchBasic
    {
        $this->appliedToLinkAmount = $appliedToLinkAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAppliedToLinkAmount(): SearchDoubleField
    {
        return $this->appliedToLinkAmount;
    }

    /**
     * @param SearchEnumMultiSelectField $appliedToLinkType
     * @return TransactionSearchBasic
     */
    public function setAppliedToLinkType(SearchEnumMultiSelectField $appliedToLinkType): TransactionSearchBasic
    {
        $this->appliedToLinkType = $appliedToLinkType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAppliedToLinkType(): SearchEnumMultiSelectField
    {
        return $this->appliedToLinkType;
    }

    /**
     * @param SearchMultiSelectField $appliedToTransaction
     * @return TransactionSearchBasic
     */
    public function setAppliedToTransaction(SearchMultiSelectField $appliedToTransaction): TransactionSearchBasic
    {
        $this->appliedToTransaction = $appliedToTransaction;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAppliedToTransaction(): SearchMultiSelectField
    {
        return $this->appliedToTransaction;
    }

    /**
     * @param SearchDoubleField $applyingForeignAmount
     * @return TransactionSearchBasic
     */
    public function setApplyingForeignAmount(SearchDoubleField $applyingForeignAmount): TransactionSearchBasic
    {
        $this->applyingForeignAmount = $applyingForeignAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getApplyingForeignAmount(): SearchDoubleField
    {
        return $this->applyingForeignAmount;
    }

    /**
     * @param SearchBooleanField $applyingIsFxVariance
     * @return TransactionSearchBasic
     */
    public function setApplyingIsFxVariance(SearchBooleanField $applyingIsFxVariance): TransactionSearchBasic
    {
        $this->applyingIsFxVariance = $applyingIsFxVariance;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getApplyingIsFxVariance(): SearchBooleanField
    {
        return $this->applyingIsFxVariance;
    }

    /**
     * @param SearchDoubleField $applyingLinkAmount
     * @return TransactionSearchBasic
     */
    public function setApplyingLinkAmount(SearchDoubleField $applyingLinkAmount): TransactionSearchBasic
    {
        $this->applyingLinkAmount = $applyingLinkAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getApplyingLinkAmount(): SearchDoubleField
    {
        return $this->applyingLinkAmount;
    }

    /**
     * @param SearchEnumMultiSelectField $applyingLinkType
     * @return TransactionSearchBasic
     */
    public function setApplyingLinkType(SearchEnumMultiSelectField $applyingLinkType): TransactionSearchBasic
    {
        $this->applyingLinkType = $applyingLinkType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getApplyingLinkType(): SearchEnumMultiSelectField
    {
        return $this->applyingLinkType;
    }

    /**
     * @param SearchMultiSelectField $applyingTransaction
     * @return TransactionSearchBasic
     */
    public function setApplyingTransaction(SearchMultiSelectField $applyingTransaction): TransactionSearchBasic
    {
        $this->applyingTransaction = $applyingTransaction;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getApplyingTransaction(): SearchMultiSelectField
    {
        return $this->applyingTransaction;
    }

    /**
     * @param SearchEnumMultiSelectField $approvalStatus
     * @return TransactionSearchBasic
     */
    public function setApprovalStatus(SearchEnumMultiSelectField $approvalStatus): TransactionSearchBasic
    {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getApprovalStatus(): SearchEnumMultiSelectField
    {
        return $this->approvalStatus;
    }

    /**
     * @param SearchStringField $authCode
     * @return TransactionSearchBasic
     */
    public function setAuthCode(SearchStringField $authCode): TransactionSearchBasic
    {
        $this->authCode = $authCode;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAuthCode(): SearchStringField
    {
        return $this->authCode;
    }

    /**
     * @param SearchBooleanField $autoCalculateLag
     * @return TransactionSearchBasic
     */
    public function setAutoCalculateLag(SearchBooleanField $autoCalculateLag): TransactionSearchBasic
    {
        $this->autoCalculateLag = $autoCalculateLag;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAutoCalculateLag(): SearchBooleanField
    {
        return $this->autoCalculateLag;
    }

    /**
     * @param SearchEnumMultiSelectField $avsStreetMatch
     * @return TransactionSearchBasic
     */
    public function setAvsStreetMatch(SearchEnumMultiSelectField $avsStreetMatch): TransactionSearchBasic
    {
        $this->avsStreetMatch = $avsStreetMatch;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAvsStreetMatch(): SearchEnumMultiSelectField
    {
        return $this->avsStreetMatch;
    }

    /**
     * @param SearchEnumMultiSelectField $avsZipMatch
     * @return TransactionSearchBasic
     */
    public function setAvsZipMatch(SearchEnumMultiSelectField $avsZipMatch): TransactionSearchBasic
    {
        $this->avsZipMatch = $avsZipMatch;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAvsZipMatch(): SearchEnumMultiSelectField
    {
        return $this->avsZipMatch;
    }

    /**
     * @param SearchBooleanField $billable
     * @return TransactionSearchBasic
     */
    public function setBillable(SearchBooleanField $billable): TransactionSearchBasic
    {
        $this->billable = $billable;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getBillable(): SearchBooleanField
    {
        return $this->billable;
    }

    /**
     * @param SearchStringField $billAddress
     * @return TransactionSearchBasic
     */
    public function setBillAddress(SearchStringField $billAddress): TransactionSearchBasic
    {
        $this->billAddress = $billAddress;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillAddress(): SearchStringField
    {
        return $this->billAddress;
    }

    /**
     * @param SearchStringField $billAddressee
     * @return TransactionSearchBasic
     */
    public function setBillAddressee(SearchStringField $billAddressee): TransactionSearchBasic
    {
        $this->billAddressee = $billAddressee;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillAddressee(): SearchStringField
    {
        return $this->billAddressee;
    }

    /**
     * @param SearchStringField $billAttention
     * @return TransactionSearchBasic
     */
    public function setBillAttention(SearchStringField $billAttention): TransactionSearchBasic
    {
        $this->billAttention = $billAttention;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillAttention(): SearchStringField
    {
        return $this->billAttention;
    }

    /**
     * @param SearchStringField $billCity
     * @return TransactionSearchBasic
     */
    public function setBillCity(SearchStringField $billCity): TransactionSearchBasic
    {
        $this->billCity = $billCity;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillCity(): SearchStringField
    {
        return $this->billCity;
    }

    /**
     * @param SearchEnumMultiSelectField $billCountry
     * @return TransactionSearchBasic
     */
    public function setBillCountry(SearchEnumMultiSelectField $billCountry): TransactionSearchBasic
    {
        $this->billCountry = $billCountry;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getBillCountry(): SearchEnumMultiSelectField
    {
        return $this->billCountry;
    }

    /**
     * @param SearchStringField $billCounty
     * @return TransactionSearchBasic
     */
    public function setBillCounty(SearchStringField $billCounty): TransactionSearchBasic
    {
        $this->billCounty = $billCounty;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillCounty(): SearchStringField
    {
        return $this->billCounty;
    }

    /**
     * @param SearchDateField $billedDate
     * @return TransactionSearchBasic
     */
    public function setBilledDate(SearchDateField $billedDate): TransactionSearchBasic
    {
        $this->billedDate = $billedDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getBilledDate(): SearchDateField
    {
        return $this->billedDate;
    }

    /**
     * @param SearchMultiSelectField $billingAccount
     * @return TransactionSearchBasic
     */
    public function setBillingAccount(SearchMultiSelectField $billingAccount): TransactionSearchBasic
    {
        $this->billingAccount = $billingAccount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillingAccount(): SearchMultiSelectField
    {
        return $this->billingAccount;
    }

    /**
     * @param SearchMultiSelectField $billingSchedule
     * @return TransactionSearchBasic
     */
    public function setBillingSchedule(SearchMultiSelectField $billingSchedule): TransactionSearchBasic
    {
        $this->billingSchedule = $billingSchedule;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillingSchedule(): SearchMultiSelectField
    {
        return $this->billingSchedule;
    }

    /**
     * @param SearchBooleanField $billingStatus
     * @return TransactionSearchBasic
     */
    public function setBillingStatus(SearchBooleanField $billingStatus): TransactionSearchBasic
    {
        $this->billingStatus = $billingStatus;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getBillingStatus(): SearchBooleanField
    {
        return $this->billingStatus;
    }

    /**
     * @param SearchMultiSelectField $billingTransaction
     * @return TransactionSearchBasic
     */
    public function setBillingTransaction(SearchMultiSelectField $billingTransaction): TransactionSearchBasic
    {
        $this->billingTransaction = $billingTransaction;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillingTransaction(): SearchMultiSelectField
    {
        return $this->billingTransaction;
    }

    /**
     * @param SearchStringField $billPhone
     * @return TransactionSearchBasic
     */
    public function setBillPhone(SearchStringField $billPhone): TransactionSearchBasic
    {
        $this->billPhone = $billPhone;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillPhone(): SearchStringField
    {
        return $this->billPhone;
    }

    /**
     * @param SearchStringField $billState
     * @return TransactionSearchBasic
     */
    public function setBillState(SearchStringField $billState): TransactionSearchBasic
    {
        $this->billState = $billState;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillState(): SearchStringField
    {
        return $this->billState;
    }

    /**
     * @param SearchEnumMultiSelectField $billVarianceStatus
     * @return TransactionSearchBasic
     */
    public function setBillVarianceStatus(SearchEnumMultiSelectField $billVarianceStatus): TransactionSearchBasic
    {
        $this->billVarianceStatus = $billVarianceStatus;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getBillVarianceStatus(): SearchEnumMultiSelectField
    {
        return $this->billVarianceStatus;
    }

    /**
     * @param SearchStringField $billZip
     * @return TransactionSearchBasic
     */
    public function setBillZip(SearchStringField $billZip): TransactionSearchBasic
    {
        $this->billZip = $billZip;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillZip(): SearchStringField
    {
        return $this->billZip;
    }

    /**
     * @param SearchStringField $binNumber
     * @return TransactionSearchBasic
     */
    public function setBinNumber(SearchStringField $binNumber): TransactionSearchBasic
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
     * @param SearchDoubleField $binNumberQuantity
     * @return TransactionSearchBasic
     */
    public function setBinNumberQuantity(SearchDoubleField $binNumberQuantity): TransactionSearchBasic
    {
        $this->binNumberQuantity = $binNumberQuantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBinNumberQuantity(): SearchDoubleField
    {
        return $this->binNumberQuantity;
    }

    /**
     * @param SearchDoubleField $bomQuantity
     * @return TransactionSearchBasic
     */
    public function setBomQuantity(SearchDoubleField $bomQuantity): TransactionSearchBasic
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
     * @param SearchBooleanField $bookSpecificTransaction
     * @return TransactionSearchBasic
     */
    public function setBookSpecificTransaction(SearchBooleanField $bookSpecificTransaction): TransactionSearchBasic
    {
        $this->bookSpecificTransaction = $bookSpecificTransaction;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getBookSpecificTransaction(): SearchBooleanField
    {
        return $this->bookSpecificTransaction;
    }

    /**
     * @param SearchBooleanField $buildEntireAssembly
     * @return TransactionSearchBasic
     */
    public function setBuildEntireAssembly(SearchBooleanField $buildEntireAssembly): TransactionSearchBasic
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
     * @param SearchDoubleField $buildVariance
     * @return TransactionSearchBasic
     */
    public function setBuildVariance(SearchDoubleField $buildVariance): TransactionSearchBasic
    {
        $this->buildVariance = $buildVariance;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBuildVariance(): SearchDoubleField
    {
        return $this->buildVariance;
    }

    /**
     * @param SearchDoubleField $built
     * @return TransactionSearchBasic
     */
    public function setBuilt(SearchDoubleField $built): TransactionSearchBasic
    {
        $this->built = $built;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBuilt(): SearchDoubleField
    {
        return $this->built;
    }

    /**
     * @param SearchBooleanField $canHaveStackablePromotions
     * @return TransactionSearchBasic
     */
    public function setCanHaveStackablePromotions(SearchBooleanField $canHaveStackablePromotions): TransactionSearchBasic
    {
        $this->canHaveStackablePromotions = $canHaveStackablePromotions;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCanHaveStackablePromotions(): SearchBooleanField
    {
        return $this->canHaveStackablePromotions;
    }

    /**
     * @param SearchMultiSelectField $catchUpPeriod
     * @return TransactionSearchBasic
     */
    public function setCatchUpPeriod(SearchMultiSelectField $catchUpPeriod): TransactionSearchBasic
    {
        $this->catchUpPeriod = $catchUpPeriod;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCatchUpPeriod(): SearchMultiSelectField
    {
        return $this->catchUpPeriod;
    }

    /**
     * @param SearchStringField $ccCustomerCode
     * @return TransactionSearchBasic
     */
    public function setCcCustomerCode(SearchStringField $ccCustomerCode): TransactionSearchBasic
    {
        $this->ccCustomerCode = $ccCustomerCode;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCcCustomerCode(): SearchStringField
    {
        return $this->ccCustomerCode;
    }

    /**
     * @param SearchDateField $ccExpireDate
     * @return TransactionSearchBasic
     */
    public function setCcExpireDate(SearchDateField $ccExpireDate): TransactionSearchBasic
    {
        $this->ccExpireDate = $ccExpireDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCcExpireDate(): SearchDateField
    {
        return $this->ccExpireDate;
    }

    /**
     * @param SearchStringField $ccName
     * @return TransactionSearchBasic
     */
    public function setCcName(SearchStringField $ccName): TransactionSearchBasic
    {
        $this->ccName = $ccName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCcName(): SearchStringField
    {
        return $this->ccName;
    }

    /**
     * @param SearchStringField $ccNumber
     * @return TransactionSearchBasic
     */
    public function setCcNumber(SearchStringField $ccNumber): TransactionSearchBasic
    {
        $this->ccNumber = $ccNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCcNumber(): SearchStringField
    {
        return $this->ccNumber;
    }

    /**
     * @param SearchEnumMultiSelectField $chargeType
     * @return TransactionSearchBasic
     */
    public function setChargeType(SearchEnumMultiSelectField $chargeType): TransactionSearchBasic
    {
        $this->chargeType = $chargeType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getChargeType(): SearchEnumMultiSelectField
    {
        return $this->chargeType;
    }

    /**
     * @param SearchMultiSelectField $class
     * @return TransactionSearchBasic
     */
    public function setClass(SearchMultiSelectField $class): TransactionSearchBasic
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
     * @param SearchBooleanField $cleared
     * @return TransactionSearchBasic
     */
    public function setCleared(SearchBooleanField $cleared): TransactionSearchBasic
    {
        $this->cleared = $cleared;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCleared(): SearchBooleanField
    {
        return $this->cleared;
    }

    /**
     * @param SearchBooleanField $closed
     * @return TransactionSearchBasic
     */
    public function setClosed(SearchBooleanField $closed): TransactionSearchBasic
    {
        $this->closed = $closed;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getClosed(): SearchBooleanField
    {
        return $this->closed;
    }

    /**
     * @param SearchDateField $closeDate
     * @return TransactionSearchBasic
     */
    public function setCloseDate(SearchDateField $closeDate): TransactionSearchBasic
    {
        $this->closeDate = $closeDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCloseDate(): SearchDateField
    {
        return $this->closeDate;
    }

    /**
     * @param SearchBooleanField $cogs
     * @return TransactionSearchBasic
     */
    public function setCogs(SearchBooleanField $cogs): TransactionSearchBasic
    {
        $this->cogs = $cogs;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCogs(): SearchBooleanField
    {
        return $this->cogs;
    }

    /**
     * @param SearchDateField $commissionEffectiveDate
     * @return TransactionSearchBasic
     */
    public function setCommissionEffectiveDate(SearchDateField $commissionEffectiveDate): TransactionSearchBasic
    {
        $this->commissionEffectiveDate = $commissionEffectiveDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCommissionEffectiveDate(): SearchDateField
    {
        return $this->commissionEffectiveDate;
    }

    /**
     * @param SearchEnumMultiSelectField $commit
     * @return TransactionSearchBasic
     */
    public function setCommit(SearchEnumMultiSelectField $commit): TransactionSearchBasic
    {
        $this->commit = $commit;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCommit(): SearchEnumMultiSelectField
    {
        return $this->commit;
    }

    /**
     * @param SearchDoubleField $componentYield
     * @return TransactionSearchBasic
     */
    public function setComponentYield(SearchDoubleField $componentYield): TransactionSearchBasic
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
     * @param SearchStringField $confirmationNumber
     * @return TransactionSearchBasic
     */
    public function setConfirmationNumber(SearchStringField $confirmationNumber): TransactionSearchBasic
    {
        $this->confirmationNumber = $confirmationNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getConfirmationNumber(): SearchStringField
    {
        return $this->confirmationNumber;
    }

    /**
     * @param SearchLongField $contribution
     * @return TransactionSearchBasic
     */
    public function setContribution(SearchLongField $contribution): TransactionSearchBasic
    {
        $this->contribution = $contribution;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getContribution(): SearchLongField
    {
        return $this->contribution;
    }

    /**
     * @param SearchDoubleField $costComponentAmount
     * @return TransactionSearchBasic
     */
    public function setCostComponentAmount(SearchDoubleField $costComponentAmount): TransactionSearchBasic
    {
        $this->costComponentAmount = $costComponentAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostComponentAmount(): SearchDoubleField
    {
        return $this->costComponentAmount;
    }

    /**
     * @param SearchMultiSelectField $costComponentCategory
     * @return TransactionSearchBasic
     */
    public function setCostComponentCategory(SearchMultiSelectField $costComponentCategory): TransactionSearchBasic
    {
        $this->costComponentCategory = $costComponentCategory;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCostComponentCategory(): SearchMultiSelectField
    {
        return $this->costComponentCategory;
    }

    /**
     * @param SearchMultiSelectField $costComponentItem
     * @return TransactionSearchBasic
     */
    public function setCostComponentItem(SearchMultiSelectField $costComponentItem): TransactionSearchBasic
    {
        $this->costComponentItem = $costComponentItem;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCostComponentItem(): SearchMultiSelectField
    {
        return $this->costComponentItem;
    }

    /**
     * @param SearchDoubleField $costComponentQuantity
     * @return TransactionSearchBasic
     */
    public function setCostComponentQuantity(SearchDoubleField $costComponentQuantity): TransactionSearchBasic
    {
        $this->costComponentQuantity = $costComponentQuantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostComponentQuantity(): SearchDoubleField
    {
        return $this->costComponentQuantity;
    }

    /**
     * @param SearchDoubleField $costComponentStandardCost
     * @return TransactionSearchBasic
     */
    public function setCostComponentStandardCost(SearchDoubleField $costComponentStandardCost): TransactionSearchBasic
    {
        $this->costComponentStandardCost = $costComponentStandardCost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostComponentStandardCost(): SearchDoubleField
    {
        return $this->costComponentStandardCost;
    }

    /**
     * @param SearchDoubleField $costEstimate
     * @return TransactionSearchBasic
     */
    public function setCostEstimate(SearchDoubleField $costEstimate): TransactionSearchBasic
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
     * @param SearchDoubleField $costEstimateRate
     * @return TransactionSearchBasic
     */
    public function setCostEstimateRate(SearchDoubleField $costEstimateRate): TransactionSearchBasic
    {
        $this->costEstimateRate = $costEstimateRate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostEstimateRate(): SearchDoubleField
    {
        return $this->costEstimateRate;
    }

    /**
     * @param SearchEnumMultiSelectField $costEstimateType
     * @return TransactionSearchBasic
     */
    public function setCostEstimateType(SearchEnumMultiSelectField $costEstimateType): TransactionSearchBasic
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
     * @param SearchMultiSelectField $createdBy
     * @return TransactionSearchBasic
     */
    public function setCreatedBy(SearchMultiSelectField $createdBy): TransactionSearchBasic
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCreatedBy(): SearchMultiSelectField
    {
        return $this->createdBy;
    }

    /**
     * @param SearchMultiSelectField $createdFrom
     * @return TransactionSearchBasic
     */
    public function setCreatedFrom(SearchMultiSelectField $createdFrom): TransactionSearchBasic
    {
        $this->createdFrom = $createdFrom;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCreatedFrom(): SearchMultiSelectField
    {
        return $this->createdFrom;
    }

    /**
     * @param SearchDoubleField $creditAmount
     * @return TransactionSearchBasic
     */
    public function setCreditAmount(SearchDoubleField $creditAmount): TransactionSearchBasic
    {
        $this->creditAmount = $creditAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCreditAmount(): SearchDoubleField
    {
        return $this->creditAmount;
    }

    /**
     * @param SearchEnumMultiSelectField $cscMatch
     * @return TransactionSearchBasic
     */
    public function setCscMatch(SearchEnumMultiSelectField $cscMatch): TransactionSearchBasic
    {
        $this->cscMatch = $cscMatch;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCscMatch(): SearchEnumMultiSelectField
    {
        return $this->cscMatch;
    }

    /**
     * @param SearchMultiSelectField $currency
     * @return TransactionSearchBasic
     */
    public function setCurrency(SearchMultiSelectField $currency): TransactionSearchBasic
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCurrency(): SearchMultiSelectField
    {
        return $this->currency;
    }

    /**
     * @param SearchMultiSelectField $customerSubOf
     * @return TransactionSearchBasic
     */
    public function setCustomerSubOf(SearchMultiSelectField $customerSubOf): TransactionSearchBasic
    {
        $this->customerSubOf = $customerSubOf;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustomerSubOf(): SearchMultiSelectField
    {
        return $this->customerSubOf;
    }

    /**
     * @param SearchMultiSelectField $customForm
     * @return TransactionSearchBasic
     */
    public function setCustomForm(SearchMultiSelectField $customForm): TransactionSearchBasic
    {
        $this->customForm = $customForm;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustomForm(): SearchMultiSelectField
    {
        return $this->customForm;
    }

    /**
     * @param SearchBooleanField $customGL
     * @return TransactionSearchBasic
     */
    public function setCustomGL(SearchBooleanField $customGL): TransactionSearchBasic
    {
        $this->customGL = $customGL;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCustomGL(): SearchBooleanField
    {
        return $this->customGL;
    }

    /**
     * @param SearchMultiSelectField $custType
     * @return TransactionSearchBasic
     */
    public function setCustType(SearchMultiSelectField $custType): TransactionSearchBasic
    {
        $this->custType = $custType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustType(): SearchMultiSelectField
    {
        return $this->custType;
    }

    /**
     * @param SearchDateField $dateCreated
     * @return TransactionSearchBasic
     */
    public function setDateCreated(SearchDateField $dateCreated): TransactionSearchBasic
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateCreated(): SearchDateField
    {
        return $this->dateCreated;
    }

    /**
     * @param SearchLongField $daysOpen
     * @return TransactionSearchBasic
     */
    public function setDaysOpen(SearchLongField $daysOpen): TransactionSearchBasic
    {
        $this->daysOpen = $daysOpen;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDaysOpen(): SearchLongField
    {
        return $this->daysOpen;
    }

    /**
     * @param SearchLongField $daysOverdue
     * @return TransactionSearchBasic
     */
    public function setDaysOverdue(SearchLongField $daysOverdue): TransactionSearchBasic
    {
        $this->daysOverdue = $daysOverdue;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDaysOverdue(): SearchLongField
    {
        return $this->daysOverdue;
    }

    /**
     * @param SearchDoubleField $debitAmount
     * @return TransactionSearchBasic
     */
    public function setDebitAmount(SearchDoubleField $debitAmount): TransactionSearchBasic
    {
        $this->debitAmount = $debitAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDebitAmount(): SearchDoubleField
    {
        return $this->debitAmount;
    }

    /**
     * @param SearchDoubleField $deferredRevenue
     * @return TransactionSearchBasic
     */
    public function setDeferredRevenue(SearchDoubleField $deferredRevenue): TransactionSearchBasic
    {
        $this->deferredRevenue = $deferredRevenue;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDeferredRevenue(): SearchDoubleField
    {
        return $this->deferredRevenue;
    }

    /**
     * @param SearchBooleanField $deferRevRec
     * @return TransactionSearchBasic
     */
    public function setDeferRevRec(SearchBooleanField $deferRevRec): TransactionSearchBasic
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
     * @param SearchMultiSelectField $department
     * @return TransactionSearchBasic
     */
    public function setDepartment(SearchMultiSelectField $department): TransactionSearchBasic
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
     * @param SearchDateField $depositDate
     * @return TransactionSearchBasic
     */
    public function setDepositDate(SearchDateField $depositDate): TransactionSearchBasic
    {
        $this->depositDate = $depositDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDepositDate(): SearchDateField
    {
        return $this->depositDate;
    }

    /**
     * @param SearchMultiSelectField $depositTransaction
     * @return TransactionSearchBasic
     */
    public function setDepositTransaction(SearchMultiSelectField $depositTransaction): TransactionSearchBasic
    {
        $this->depositTransaction = $depositTransaction;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDepositTransaction(): SearchMultiSelectField
    {
        return $this->depositTransaction;
    }

    /**
     * @param SearchMultiSelectField $drAccount
     * @return TransactionSearchBasic
     */
    public function setDrAccount(SearchMultiSelectField $drAccount): TransactionSearchBasic
    {
        $this->drAccount = $drAccount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDrAccount(): SearchMultiSelectField
    {
        return $this->drAccount;
    }

    /**
     * @param SearchDateField $dueDate
     * @return TransactionSearchBasic
     */
    public function setDueDate(SearchDateField $dueDate): TransactionSearchBasic
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDueDate(): SearchDateField
    {
        return $this->dueDate;
    }

    /**
     * @param SearchStringField $email
     * @return TransactionSearchBasic
     */
    public function setEmail(SearchStringField $email): TransactionSearchBasic
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEmail(): SearchStringField
    {
        return $this->email;
    }

    /**
     * @param SearchMultiSelectField $employee
     * @return TransactionSearchBasic
     */
    public function setEmployee(SearchMultiSelectField $employee): TransactionSearchBasic
    {
        $this->employee = $employee;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEmployee(): SearchMultiSelectField
    {
        return $this->employee;
    }

    /**
     * @param SearchDateField $endDate
     * @return TransactionSearchBasic
     */
    public function setEndDate(SearchDateField $endDate): TransactionSearchBasic
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEndDate(): SearchDateField
    {
        return $this->endDate;
    }

    /**
     * @param SearchMultiSelectField $entity
     * @return TransactionSearchBasic
     */
    public function setEntity(SearchMultiSelectField $entity): TransactionSearchBasic
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEntity(): SearchMultiSelectField
    {
        return $this->entity;
    }

    /**
     * @param SearchMultiSelectField $entityStatus
     * @return TransactionSearchBasic
     */
    public function setEntityStatus(SearchMultiSelectField $entityStatus): TransactionSearchBasic
    {
        $this->entityStatus = $entityStatus;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEntityStatus(): SearchMultiSelectField
    {
        return $this->entityStatus;
    }

    /**
     * @param SearchDoubleField $estGrossProfit
     * @return TransactionSearchBasic
     */
    public function setEstGrossProfit(SearchDoubleField $estGrossProfit): TransactionSearchBasic
    {
        $this->estGrossProfit = $estGrossProfit;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstGrossProfit(): SearchDoubleField
    {
        return $this->estGrossProfit;
    }

    /**
     * @param SearchDoubleField $estGrossProfitPct
     * @return TransactionSearchBasic
     */
    public function setEstGrossProfitPct(SearchDoubleField $estGrossProfitPct): TransactionSearchBasic
    {
        $this->estGrossProfitPct = $estGrossProfitPct;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstGrossProfitPct(): SearchDoubleField
    {
        return $this->estGrossProfitPct;
    }

    /**
     * @param SearchDoubleField $exchangeRate
     * @return TransactionSearchBasic
     */
    public function setExchangeRate(SearchDoubleField $exchangeRate): TransactionSearchBasic
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getExchangeRate(): SearchDoubleField
    {
        return $this->exchangeRate;
    }

    /**
     * @param SearchBooleanField $excludeCommission
     * @return TransactionSearchBasic
     */
    public function setExcludeCommission(SearchBooleanField $excludeCommission): TransactionSearchBasic
    {
        $this->excludeCommission = $excludeCommission;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getExcludeCommission(): SearchBooleanField
    {
        return $this->excludeCommission;
    }

    /**
     * @param SearchBooleanField $excludeFromRateRequest
     * @return TransactionSearchBasic
     */
    public function setExcludeFromRateRequest(SearchBooleanField $excludeFromRateRequest): TransactionSearchBasic
    {
        $this->excludeFromRateRequest = $excludeFromRateRequest;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getExcludeFromRateRequest(): SearchBooleanField
    {
        return $this->excludeFromRateRequest;
    }

    /**
     * @param SearchDateField $expectedCloseDate
     * @return TransactionSearchBasic
     */
    public function setExpectedCloseDate(SearchDateField $expectedCloseDate): TransactionSearchBasic
    {
        $this->expectedCloseDate = $expectedCloseDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getExpectedCloseDate(): SearchDateField
    {
        return $this->expectedCloseDate;
    }

    /**
     * @param SearchDateField $expectedReceiptDate
     * @return TransactionSearchBasic
     */
    public function setExpectedReceiptDate(SearchDateField $expectedReceiptDate): TransactionSearchBasic
    {
        $this->expectedReceiptDate = $expectedReceiptDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getExpectedReceiptDate(): SearchDateField
    {
        return $this->expectedReceiptDate;
    }

    /**
     * @param SearchMultiSelectField $expenseCategory
     * @return TransactionSearchBasic
     */
    public function setExpenseCategory(SearchMultiSelectField $expenseCategory): TransactionSearchBasic
    {
        $this->expenseCategory = $expenseCategory;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExpenseCategory(): SearchMultiSelectField
    {
        return $this->expenseCategory;
    }

    /**
     * @param SearchDateField $expenseDate
     * @return TransactionSearchBasic
     */
    public function setExpenseDate(SearchDateField $expenseDate): TransactionSearchBasic
    {
        $this->expenseDate = $expenseDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getExpenseDate(): SearchDateField
    {
        return $this->expenseDate;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return TransactionSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): TransactionSearchBasic
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
     * @return TransactionSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): TransactionSearchBasic
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
     * @param SearchBooleanField $finChrg
     * @return TransactionSearchBasic
     */
    public function setFinChrg(SearchBooleanField $finChrg): TransactionSearchBasic
    {
        $this->finChrg = $finChrg;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getFinChrg(): SearchBooleanField
    {
        return $this->finChrg;
    }

    /**
     * @param SearchBooleanField $firmed
     * @return TransactionSearchBasic
     */
    public function setFirmed(SearchBooleanField $firmed): TransactionSearchBasic
    {
        $this->firmed = $firmed;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getFirmed(): SearchBooleanField
    {
        return $this->firmed;
    }

    /**
     * @param SearchEnumMultiSelectField $forecastType
     * @return TransactionSearchBasic
     */
    public function setForecastType(SearchEnumMultiSelectField $forecastType): TransactionSearchBasic
    {
        $this->forecastType = $forecastType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getForecastType(): SearchEnumMultiSelectField
    {
        return $this->forecastType;
    }

    /**
     * @param SearchMultiSelectField $fulfillingTransaction
     * @return TransactionSearchBasic
     */
    public function setFulfillingTransaction(SearchMultiSelectField $fulfillingTransaction): TransactionSearchBasic
    {
        $this->fulfillingTransaction = $fulfillingTransaction;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getFulfillingTransaction(): SearchMultiSelectField
    {
        return $this->fulfillingTransaction;
    }

    /**
     * @param SearchMultiSelectField $fxAccount
     * @return TransactionSearchBasic
     */
    public function setFxAccount(SearchMultiSelectField $fxAccount): TransactionSearchBasic
    {
        $this->fxAccount = $fxAccount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getFxAccount(): SearchMultiSelectField
    {
        return $this->fxAccount;
    }

    /**
     * @param SearchDoubleField $fxAmount
     * @return TransactionSearchBasic
     */
    public function setFxAmount(SearchDoubleField $fxAmount): TransactionSearchBasic
    {
        $this->fxAmount = $fxAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxAmount(): SearchDoubleField
    {
        return $this->fxAmount;
    }

    /**
     * @param SearchDoubleField $fxCostEstimate
     * @return TransactionSearchBasic
     */
    public function setFxCostEstimate(SearchDoubleField $fxCostEstimate): TransactionSearchBasic
    {
        $this->fxCostEstimate = $fxCostEstimate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxCostEstimate(): SearchDoubleField
    {
        return $this->fxCostEstimate;
    }

    /**
     * @param SearchDoubleField $fxCostEstimateRate
     * @return TransactionSearchBasic
     */
    public function setFxCostEstimateRate(SearchDoubleField $fxCostEstimateRate): TransactionSearchBasic
    {
        $this->fxCostEstimateRate = $fxCostEstimateRate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxCostEstimateRate(): SearchDoubleField
    {
        return $this->fxCostEstimateRate;
    }

    /**
     * @param SearchDoubleField $fxEstGrossProfit
     * @return TransactionSearchBasic
     */
    public function setFxEstGrossProfit(SearchDoubleField $fxEstGrossProfit): TransactionSearchBasic
    {
        $this->fxEstGrossProfit = $fxEstGrossProfit;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxEstGrossProfit(): SearchDoubleField
    {
        return $this->fxEstGrossProfit;
    }

    /**
     * @param SearchDoubleField $fxTranCostEstimate
     * @return TransactionSearchBasic
     */
    public function setFxTranCostEstimate(SearchDoubleField $fxTranCostEstimate): TransactionSearchBasic
    {
        $this->fxTranCostEstimate = $fxTranCostEstimate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxTranCostEstimate(): SearchDoubleField
    {
        return $this->fxTranCostEstimate;
    }

    /**
     * @param SearchDoubleField $fxVsoeAllocation
     * @return TransactionSearchBasic
     */
    public function setFxVsoeAllocation(SearchDoubleField $fxVsoeAllocation): TransactionSearchBasic
    {
        $this->fxVsoeAllocation = $fxVsoeAllocation;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxVsoeAllocation(): SearchDoubleField
    {
        return $this->fxVsoeAllocation;
    }

    /**
     * @param SearchDoubleField $fxVsoeAmount
     * @return TransactionSearchBasic
     */
    public function setFxVsoeAmount(SearchDoubleField $fxVsoeAmount): TransactionSearchBasic
    {
        $this->fxVsoeAmount = $fxVsoeAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxVsoeAmount(): SearchDoubleField
    {
        return $this->fxVsoeAmount;
    }

    /**
     * @param SearchDoubleField $fxVsoePrice
     * @return TransactionSearchBasic
     */
    public function setFxVsoePrice(SearchDoubleField $fxVsoePrice): TransactionSearchBasic
    {
        $this->fxVsoePrice = $fxVsoePrice;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxVsoePrice(): SearchDoubleField
    {
        return $this->fxVsoePrice;
    }

    /**
     * @param SearchBooleanField $gcoAvailabelToCharge
     * @return TransactionSearchBasic
     */
    public function setGcoAvailabelToCharge(SearchBooleanField $gcoAvailabelToCharge): TransactionSearchBasic
    {
        $this->gcoAvailabelToCharge = $gcoAvailabelToCharge;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getGcoAvailabelToCharge(): SearchBooleanField
    {
        return $this->gcoAvailabelToCharge;
    }

    /**
     * @param SearchBooleanField $gcoAvailableToRefund
     * @return TransactionSearchBasic
     */
    public function setGcoAvailableToRefund(SearchBooleanField $gcoAvailableToRefund): TransactionSearchBasic
    {
        $this->gcoAvailableToRefund = $gcoAvailableToRefund;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getGcoAvailableToRefund(): SearchBooleanField
    {
        return $this->gcoAvailableToRefund;
    }

    /**
     * @param SearchEnumMultiSelectField $gcoAvsStreetMatch
     * @return TransactionSearchBasic
     */
    public function setGcoAvsStreetMatch(SearchEnumMultiSelectField $gcoAvsStreetMatch): TransactionSearchBasic
    {
        $this->gcoAvsStreetMatch = $gcoAvsStreetMatch;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getGcoAvsStreetMatch(): SearchEnumMultiSelectField
    {
        return $this->gcoAvsStreetMatch;
    }

    /**
     * @param SearchEnumMultiSelectField $gcoAvsZipMatch
     * @return TransactionSearchBasic
     */
    public function setGcoAvsZipMatch(SearchEnumMultiSelectField $gcoAvsZipMatch): TransactionSearchBasic
    {
        $this->gcoAvsZipMatch = $gcoAvsZipMatch;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getGcoAvsZipMatch(): SearchEnumMultiSelectField
    {
        return $this->gcoAvsZipMatch;
    }

    /**
     * @param SearchLongField $gcoBuyerAccountAge
     * @return TransactionSearchBasic
     */
    public function setGcoBuyerAccountAge(SearchLongField $gcoBuyerAccountAge): TransactionSearchBasic
    {
        $this->gcoBuyerAccountAge = $gcoBuyerAccountAge;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getGcoBuyerAccountAge(): SearchLongField
    {
        return $this->gcoBuyerAccountAge;
    }

    /**
     * @param SearchStringField $gcoBuyerIp
     * @return TransactionSearchBasic
     */
    public function setGcoBuyerIp(SearchStringField $gcoBuyerIp): TransactionSearchBasic
    {
        $this->gcoBuyerIp = $gcoBuyerIp;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGcoBuyerIp(): SearchStringField
    {
        return $this->gcoBuyerIp;
    }

    /**
     * @param SearchDoubleField $gcoChargeAmount
     * @return TransactionSearchBasic
     */
    public function setGcoChargeAmount(SearchDoubleField $gcoChargeAmount): TransactionSearchBasic
    {
        $this->gcoChargeAmount = $gcoChargeAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGcoChargeAmount(): SearchDoubleField
    {
        return $this->gcoChargeAmount;
    }

    /**
     * @param SearchDoubleField $gcoChargebackAmount
     * @return TransactionSearchBasic
     */
    public function setGcoChargebackAmount(SearchDoubleField $gcoChargebackAmount): TransactionSearchBasic
    {
        $this->gcoChargebackAmount = $gcoChargebackAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGcoChargebackAmount(): SearchDoubleField
    {
        return $this->gcoChargebackAmount;
    }

    /**
     * @param SearchDoubleField $gcoConfirmedChargedTotal
     * @return TransactionSearchBasic
     */
    public function setGcoConfirmedChargedTotal(SearchDoubleField $gcoConfirmedChargedTotal): TransactionSearchBasic
    {
        $this->gcoConfirmedChargedTotal = $gcoConfirmedChargedTotal;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGcoConfirmedChargedTotal(): SearchDoubleField
    {
        return $this->gcoConfirmedChargedTotal;
    }

    /**
     * @param SearchDoubleField $gcoConfirmedRefundedTotal
     * @return TransactionSearchBasic
     */
    public function setGcoConfirmedRefundedTotal(SearchDoubleField $gcoConfirmedRefundedTotal): TransactionSearchBasic
    {
        $this->gcoConfirmedRefundedTotal = $gcoConfirmedRefundedTotal;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGcoConfirmedRefundedTotal(): SearchDoubleField
    {
        return $this->gcoConfirmedRefundedTotal;
    }

    /**
     * @param SearchStringField $gcoCreditcardNumber
     * @return TransactionSearchBasic
     */
    public function setGcoCreditcardNumber(SearchStringField $gcoCreditcardNumber): TransactionSearchBasic
    {
        $this->gcoCreditcardNumber = $gcoCreditcardNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGcoCreditcardNumber(): SearchStringField
    {
        return $this->gcoCreditcardNumber;
    }

    /**
     * @param SearchEnumMultiSelectField $gcoCscMatch
     * @return TransactionSearchBasic
     */
    public function setGcoCscMatch(SearchEnumMultiSelectField $gcoCscMatch): TransactionSearchBasic
    {
        $this->gcoCscMatch = $gcoCscMatch;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getGcoCscMatch(): SearchEnumMultiSelectField
    {
        return $this->gcoCscMatch;
    }

    /**
     * @param SearchStringField $gcoFinancialState
     * @return TransactionSearchBasic
     */
    public function setGcoFinancialState(SearchStringField $gcoFinancialState): TransactionSearchBasic
    {
        $this->gcoFinancialState = $gcoFinancialState;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGcoFinancialState(): SearchStringField
    {
        return $this->gcoFinancialState;
    }

    /**
     * @param SearchStringField $gcoFulfillmentState
     * @return TransactionSearchBasic
     */
    public function setGcoFulfillmentState(SearchStringField $gcoFulfillmentState): TransactionSearchBasic
    {
        $this->gcoFulfillmentState = $gcoFulfillmentState;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGcoFulfillmentState(): SearchStringField
    {
        return $this->gcoFulfillmentState;
    }

    /**
     * @param SearchStringField $gcoOrderId
     * @return TransactionSearchBasic
     */
    public function setGcoOrderId(SearchStringField $gcoOrderId): TransactionSearchBasic
    {
        $this->gcoOrderId = $gcoOrderId;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGcoOrderId(): SearchStringField
    {
        return $this->gcoOrderId;
    }

    /**
     * @param SearchDoubleField $gcoOrderTotal
     * @return TransactionSearchBasic
     */
    public function setGcoOrderTotal(SearchDoubleField $gcoOrderTotal): TransactionSearchBasic
    {
        $this->gcoOrderTotal = $gcoOrderTotal;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGcoOrderTotal(): SearchDoubleField
    {
        return $this->gcoOrderTotal;
    }

    /**
     * @param SearchDoubleField $gcoPromotionAmount
     * @return TransactionSearchBasic
     */
    public function setGcoPromotionAmount(SearchDoubleField $gcoPromotionAmount): TransactionSearchBasic
    {
        $this->gcoPromotionAmount = $gcoPromotionAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGcoPromotionAmount(): SearchDoubleField
    {
        return $this->gcoPromotionAmount;
    }

    /**
     * @param SearchStringField $gcoPromotionName
     * @return TransactionSearchBasic
     */
    public function setGcoPromotionName(SearchStringField $gcoPromotionName): TransactionSearchBasic
    {
        $this->gcoPromotionName = $gcoPromotionName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGcoPromotionName(): SearchStringField
    {
        return $this->gcoPromotionName;
    }

    /**
     * @param SearchDoubleField $gcoRefundAmount
     * @return TransactionSearchBasic
     */
    public function setGcoRefundAmount(SearchDoubleField $gcoRefundAmount): TransactionSearchBasic
    {
        $this->gcoRefundAmount = $gcoRefundAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGcoRefundAmount(): SearchDoubleField
    {
        return $this->gcoRefundAmount;
    }

    /**
     * @param SearchDoubleField $gcoShippingTotal
     * @return TransactionSearchBasic
     */
    public function setGcoShippingTotal(SearchDoubleField $gcoShippingTotal): TransactionSearchBasic
    {
        $this->gcoShippingTotal = $gcoShippingTotal;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGcoShippingTotal(): SearchDoubleField
    {
        return $this->gcoShippingTotal;
    }

    /**
     * @param SearchStringField $gcoStateChangedDetail
     * @return TransactionSearchBasic
     */
    public function setGcoStateChangedDetail(SearchStringField $gcoStateChangedDetail): TransactionSearchBasic
    {
        $this->gcoStateChangedDetail = $gcoStateChangedDetail;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGcoStateChangedDetail(): SearchStringField
    {
        return $this->gcoStateChangedDetail;
    }

    /**
     * @param SearchStringField $giftCertificate
     * @return TransactionSearchBasic
     */
    public function setGiftCertificate(SearchStringField $giftCertificate): TransactionSearchBasic
    {
        $this->giftCertificate = $giftCertificate;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGiftCertificate(): SearchStringField
    {
        return $this->giftCertificate;
    }

    /**
     * @param SearchDoubleField $grossAmount
     * @return TransactionSearchBasic
     */
    public function setGrossAmount(SearchDoubleField $grossAmount): TransactionSearchBasic
    {
        $this->grossAmount = $grossAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGrossAmount(): SearchDoubleField
    {
        return $this->grossAmount;
    }

    /**
     * @param SearchBooleanField $includeInForecast
     * @return TransactionSearchBasic
     */
    public function setIncludeInForecast(SearchBooleanField $includeInForecast): TransactionSearchBasic
    {
        $this->includeInForecast = $includeInForecast;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIncludeInForecast(): SearchBooleanField
    {
        return $this->includeInForecast;
    }

    /**
     * @param SearchMultiSelectField $incoterm
     * @return TransactionSearchBasic
     */
    public function setIncoterm(SearchMultiSelectField $incoterm): TransactionSearchBasic
    {
        $this->incoterm = $incoterm;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getIncoterm(): SearchMultiSelectField
    {
        return $this->incoterm;
    }

    /**
     * @param SearchEnumMultiSelectField $intercoStatus
     * @return TransactionSearchBasic
     */
    public function setIntercoStatus(SearchEnumMultiSelectField $intercoStatus): TransactionSearchBasic
    {
        $this->intercoStatus = $intercoStatus;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getIntercoStatus(): SearchEnumMultiSelectField
    {
        return $this->intercoStatus;
    }

    /**
     * @param SearchMultiSelectField $intercoTransaction
     * @return TransactionSearchBasic
     */
    public function setIntercoTransaction(SearchMultiSelectField $intercoTransaction): TransactionSearchBasic
    {
        $this->intercoTransaction = $intercoTransaction;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getIntercoTransaction(): SearchMultiSelectField
    {
        return $this->intercoTransaction;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return TransactionSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): TransactionSearchBasic
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
     * @return TransactionSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): TransactionSearchBasic
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
     * @return TransactionSearchBasic
     */
    public function setInventoryLocation(SearchMultiSelectField $inventoryLocation): TransactionSearchBasic
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
     * @param SearchMultiSelectField $inventorySubsidiary
     * @return TransactionSearchBasic
     */
    public function setInventorySubsidiary(SearchMultiSelectField $inventorySubsidiary): TransactionSearchBasic
    {
        $this->inventorySubsidiary = $inventorySubsidiary;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInventorySubsidiary(): SearchMultiSelectField
    {
        return $this->inventorySubsidiary;
    }

    /**
     * @param SearchBooleanField $inVsoeBundle
     * @return TransactionSearchBasic
     */
    public function setInVsoeBundle(SearchBooleanField $inVsoeBundle): TransactionSearchBasic
    {
        $this->inVsoeBundle = $inVsoeBundle;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getInVsoeBundle(): SearchBooleanField
    {
        return $this->inVsoeBundle;
    }

    /**
     * @param SearchBooleanField $isAllocation
     * @return TransactionSearchBasic
     */
    public function setIsAllocation(SearchBooleanField $isAllocation): TransactionSearchBasic
    {
        $this->isAllocation = $isAllocation;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsAllocation(): SearchBooleanField
    {
        return $this->isAllocation;
    }

    /**
     * @param SearchBooleanField $isBackflush
     * @return TransactionSearchBasic
     */
    public function setIsBackflush(SearchBooleanField $isBackflush): TransactionSearchBasic
    {
        $this->isBackflush = $isBackflush;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsBackflush(): SearchBooleanField
    {
        return $this->isBackflush;
    }

    /**
     * @param SearchBooleanField $isGcoChargeback
     * @return TransactionSearchBasic
     */
    public function setIsGcoChargeback(SearchBooleanField $isGcoChargeback): TransactionSearchBasic
    {
        $this->isGcoChargeback = $isGcoChargeback;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsGcoChargeback(): SearchBooleanField
    {
        return $this->isGcoChargeback;
    }

    /**
     * @param SearchBooleanField $isGcoChargeConfirmed
     * @return TransactionSearchBasic
     */
    public function setIsGcoChargeConfirmed(SearchBooleanField $isGcoChargeConfirmed): TransactionSearchBasic
    {
        $this->isGcoChargeConfirmed = $isGcoChargeConfirmed;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsGcoChargeConfirmed(): SearchBooleanField
    {
        return $this->isGcoChargeConfirmed;
    }

    /**
     * @param SearchBooleanField $isGcoPaymentGuaranteed
     * @return TransactionSearchBasic
     */
    public function setIsGcoPaymentGuaranteed(SearchBooleanField $isGcoPaymentGuaranteed): TransactionSearchBasic
    {
        $this->isGcoPaymentGuaranteed = $isGcoPaymentGuaranteed;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsGcoPaymentGuaranteed(): SearchBooleanField
    {
        return $this->isGcoPaymentGuaranteed;
    }

    /**
     * @param SearchBooleanField $isGcoRefundConfirmed
     * @return TransactionSearchBasic
     */
    public function setIsGcoRefundConfirmed(SearchBooleanField $isGcoRefundConfirmed): TransactionSearchBasic
    {
        $this->isGcoRefundConfirmed = $isGcoRefundConfirmed;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsGcoRefundConfirmed(): SearchBooleanField
    {
        return $this->isGcoRefundConfirmed;
    }

    /**
     * @param SearchBooleanField $isInsideDelivery
     * @return TransactionSearchBasic
     */
    public function setIsInsideDelivery(SearchBooleanField $isInsideDelivery): TransactionSearchBasic
    {
        $this->isInsideDelivery = $isInsideDelivery;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInsideDelivery(): SearchBooleanField
    {
        return $this->isInsideDelivery;
    }

    /**
     * @param SearchBooleanField $isInsidePickup
     * @return TransactionSearchBasic
     */
    public function setIsInsidePickup(SearchBooleanField $isInsidePickup): TransactionSearchBasic
    {
        $this->isInsidePickup = $isInsidePickup;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInsidePickup(): SearchBooleanField
    {
        return $this->isInsidePickup;
    }

    /**
     * @param SearchBooleanField $isIntercompanyAdjustment
     * @return TransactionSearchBasic
     */
    public function setIsIntercompanyAdjustment(SearchBooleanField $isIntercompanyAdjustment): TransactionSearchBasic
    {
        $this->isIntercompanyAdjustment = $isIntercompanyAdjustment;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsIntercompanyAdjustment(): SearchBooleanField
    {
        return $this->isIntercompanyAdjustment;
    }

    /**
     * @param SearchBooleanField $isInTransitPayment
     * @return TransactionSearchBasic
     */
    public function setIsInTransitPayment(SearchBooleanField $isInTransitPayment): TransactionSearchBasic
    {
        $this->isInTransitPayment = $isInTransitPayment;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInTransitPayment(): SearchBooleanField
    {
        return $this->isInTransitPayment;
    }

    /**
     * @param SearchBooleanField $isMultiShipTo
     * @return TransactionSearchBasic
     */
    public function setIsMultiShipTo(SearchBooleanField $isMultiShipTo): TransactionSearchBasic
    {
        $this->isMultiShipTo = $isMultiShipTo;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsMultiShipTo(): SearchBooleanField
    {
        return $this->isMultiShipTo;
    }

    /**
     * @param SearchBooleanField $isPayPalMeth
     * @return TransactionSearchBasic
     */
    public function setIsPayPalMeth(SearchBooleanField $isPayPalMeth): TransactionSearchBasic
    {
        $this->isPayPalMeth = $isPayPalMeth;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsPayPalMeth(): SearchBooleanField
    {
        return $this->isPayPalMeth;
    }

    /**
     * @param SearchBooleanField $isReversal
     * @return TransactionSearchBasic
     */
    public function setIsReversal(SearchBooleanField $isReversal): TransactionSearchBasic
    {
        $this->isReversal = $isReversal;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsReversal(): SearchBooleanField
    {
        return $this->isReversal;
    }

    /**
     * @param SearchBooleanField $isRevRecTransaction
     * @return TransactionSearchBasic
     */
    public function setIsRevRecTransaction(SearchBooleanField $isRevRecTransaction): TransactionSearchBasic
    {
        $this->isRevRecTransaction = $isRevRecTransaction;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsRevRecTransaction(): SearchBooleanField
    {
        return $this->isRevRecTransaction;
    }

    /**
     * @param SearchBooleanField $isScrap
     * @return TransactionSearchBasic
     */
    public function setIsScrap(SearchBooleanField $isScrap): TransactionSearchBasic
    {
        $this->isScrap = $isScrap;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsScrap(): SearchBooleanField
    {
        return $this->isScrap;
    }

    /**
     * @param SearchBooleanField $isShipAddress
     * @return TransactionSearchBasic
     */
    public function setIsShipAddress(SearchBooleanField $isShipAddress): TransactionSearchBasic
    {
        $this->isShipAddress = $isShipAddress;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsShipAddress(): SearchBooleanField
    {
        return $this->isShipAddress;
    }

    /**
     * @param SearchBooleanField $isTransferPriceCosting
     * @return TransactionSearchBasic
     */
    public function setIsTransferPriceCosting(SearchBooleanField $isTransferPriceCosting): TransactionSearchBasic
    {
        $this->isTransferPriceCosting = $isTransferPriceCosting;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsTransferPriceCosting(): SearchBooleanField
    {
        return $this->isTransferPriceCosting;
    }

    /**
     * @param SearchBooleanField $isVsoeAlloc
     * @return TransactionSearchBasic
     */
    public function setIsVsoeAlloc(SearchBooleanField $isVsoeAlloc): TransactionSearchBasic
    {
        $this->isVsoeAlloc = $isVsoeAlloc;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsVsoeAlloc(): SearchBooleanField
    {
        return $this->isVsoeAlloc;
    }

    /**
     * @param SearchBooleanField $isWip
     * @return TransactionSearchBasic
     */
    public function setIsWip(SearchBooleanField $isWip): TransactionSearchBasic
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
     * @param SearchMultiSelectField $item
     * @return TransactionSearchBasic
     */
    public function setItem(SearchMultiSelectField $item): TransactionSearchBasic
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem(): SearchMultiSelectField
    {
        return $this->item;
    }

    /**
     * @param SearchEnumMultiSelectField $itemFulfillmentChoice
     * @return TransactionSearchBasic
     */
    public function setItemFulfillmentChoice(SearchEnumMultiSelectField $itemFulfillmentChoice): TransactionSearchBasic
    {
        $this->itemFulfillmentChoice = $itemFulfillmentChoice;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getItemFulfillmentChoice(): SearchEnumMultiSelectField
    {
        return $this->itemFulfillmentChoice;
    }

    /**
     * @param SearchMultiSelectField $itemRevision
     * @return TransactionSearchBasic
     */
    public function setItemRevision(SearchMultiSelectField $itemRevision): TransactionSearchBasic
    {
        $this->itemRevision = $itemRevision;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItemRevision(): SearchMultiSelectField
    {
        return $this->itemRevision;
    }

    /**
     * @param SearchMultiSelectField $itemSubOf
     * @return TransactionSearchBasic
     */
    public function setItemSubOf(SearchMultiSelectField $itemSubOf): TransactionSearchBasic
    {
        $this->itemSubOf = $itemSubOf;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItemSubOf(): SearchMultiSelectField
    {
        return $this->itemSubOf;
    }

    /**
     * @param SearchBooleanField $landedCostPerLine
     * @return TransactionSearchBasic
     */
    public function setLandedCostPerLine(SearchBooleanField $landedCostPerLine): TransactionSearchBasic
    {
        $this->landedCostPerLine = $landedCostPerLine;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getLandedCostPerLine(): SearchBooleanField
    {
        return $this->landedCostPerLine;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return TransactionSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): TransactionSearchBasic
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
     * @param SearchMultiSelectField $leadSource
     * @return TransactionSearchBasic
     */
    public function setLeadSource(SearchMultiSelectField $leadSource): TransactionSearchBasic
    {
        $this->leadSource = $leadSource;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLeadSource(): SearchMultiSelectField
    {
        return $this->leadSource;
    }

    /**
     * @param SearchLongField $lineUniqueKey
     * @return TransactionSearchBasic
     */
    public function setLineUniqueKey(SearchLongField $lineUniqueKey): TransactionSearchBasic
    {
        $this->lineUniqueKey = $lineUniqueKey;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLineUniqueKey(): SearchLongField
    {
        return $this->lineUniqueKey;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return TransactionSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): TransactionSearchBasic
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
     * @param SearchBooleanField $locationAutoAssigned
     * @return TransactionSearchBasic
     */
    public function setLocationAutoAssigned(SearchBooleanField $locationAutoAssigned): TransactionSearchBasic
    {
        $this->locationAutoAssigned = $locationAutoAssigned;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getLocationAutoAssigned(): SearchBooleanField
    {
        return $this->locationAutoAssigned;
    }

    /**
     * @param SearchBooleanField $mainLine
     * @return TransactionSearchBasic
     */
    public function setMainLine(SearchBooleanField $mainLine): TransactionSearchBasic
    {
        $this->mainLine = $mainLine;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMainLine(): SearchBooleanField
    {
        return $this->mainLine;
    }

    /**
     * @param SearchMultiSelectField $mainName
     * @return TransactionSearchBasic
     */
    public function setMainName(SearchMultiSelectField $mainName): TransactionSearchBasic
    {
        $this->mainName = $mainName;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getMainName(): SearchMultiSelectField
    {
        return $this->mainName;
    }

    /**
     * @param SearchMultiSelectField $manufacturingRouting
     * @return TransactionSearchBasic
     */
    public function setManufacturingRouting(SearchMultiSelectField $manufacturingRouting): TransactionSearchBasic
    {
        $this->manufacturingRouting = $manufacturingRouting;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getManufacturingRouting(): SearchMultiSelectField
    {
        return $this->manufacturingRouting;
    }

    /**
     * @param SearchBooleanField $matchBillToReceipt
     * @return TransactionSearchBasic
     */
    public function setMatchBillToReceipt(SearchBooleanField $matchBillToReceipt): TransactionSearchBasic
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
     * @param SearchStringField $memo
     * @return TransactionSearchBasic
     */
    public function setMemo(SearchStringField $memo): TransactionSearchBasic
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMemo(): SearchStringField
    {
        return $this->memo;
    }

    /**
     * @param SearchStringField $memoMain
     * @return TransactionSearchBasic
     */
    public function setMemoMain(SearchStringField $memoMain): TransactionSearchBasic
    {
        $this->memoMain = $memoMain;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMemoMain(): SearchStringField
    {
        return $this->memoMain;
    }

    /**
     * @param SearchBooleanField $memorized
     * @return TransactionSearchBasic
     */
    public function setMemorized(SearchBooleanField $memorized): TransactionSearchBasic
    {
        $this->memorized = $memorized;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMemorized(): SearchBooleanField
    {
        return $this->memorized;
    }

    /**
     * @param SearchStringField $merchantAccount
     * @return TransactionSearchBasic
     */
    public function setMerchantAccount(SearchStringField $merchantAccount): TransactionSearchBasic
    {
        $this->merchantAccount = $merchantAccount;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMerchantAccount(): SearchStringField
    {
        return $this->merchantAccount;
    }

    /**
     * @param SearchStringField $message
     * @return TransactionSearchBasic
     */
    public function setMessage(SearchStringField $message): TransactionSearchBasic
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMessage(): SearchStringField
    {
        return $this->message;
    }

    /**
     * @param SearchBooleanField $multiSubsidiary
     * @return TransactionSearchBasic
     */
    public function setMultiSubsidiary(SearchBooleanField $multiSubsidiary): TransactionSearchBasic
    {
        $this->multiSubsidiary = $multiSubsidiary;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMultiSubsidiary(): SearchBooleanField
    {
        return $this->multiSubsidiary;
    }

    /**
     * @param SearchStringField $nameText
     * @return TransactionSearchBasic
     */
    public function setNameText(SearchStringField $nameText): TransactionSearchBasic
    {
        $this->nameText = $nameText;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getNameText(): SearchStringField
    {
        return $this->nameText;
    }

    /**
     * @param SearchDoubleField $netAmount
     * @return TransactionSearchBasic
     */
    public function setNetAmount(SearchDoubleField $netAmount): TransactionSearchBasic
    {
        $this->netAmount = $netAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getNetAmount(): SearchDoubleField
    {
        return $this->netAmount;
    }

    /**
     * @param SearchMultiSelectField $nextApprover
     * @return TransactionSearchBasic
     */
    public function setNextApprover(SearchMultiSelectField $nextApprover): TransactionSearchBasic
    {
        $this->nextApprover = $nextApprover;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getNextApprover(): SearchMultiSelectField
    {
        return $this->nextApprover;
    }

    /**
     * @param SearchDateField $nextBillDate
     * @return TransactionSearchBasic
     */
    public function setNextBillDate(SearchDateField $nextBillDate): TransactionSearchBasic
    {
        $this->nextBillDate = $nextBillDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getNextBillDate(): SearchDateField
    {
        return $this->nextBillDate;
    }

    /**
     * @param SearchMultiSelectField $nexus
     * @return TransactionSearchBasic
     */
    public function setNexus(SearchMultiSelectField $nexus): TransactionSearchBasic
    {
        $this->nexus = $nexus;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getNexus(): SearchMultiSelectField
    {
        return $this->nexus;
    }

    /**
     * @param SearchBooleanField $noAutoAssignLocation
     * @return TransactionSearchBasic
     */
    public function setNoAutoAssignLocation(SearchBooleanField $noAutoAssignLocation): TransactionSearchBasic
    {
        $this->noAutoAssignLocation = $noAutoAssignLocation;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getNoAutoAssignLocation(): SearchBooleanField
    {
        return $this->noAutoAssignLocation;
    }

    /**
     * @param SearchBooleanField $nonReimbursable
     * @return TransactionSearchBasic
     */
    public function setNonReimbursable(SearchBooleanField $nonReimbursable): TransactionSearchBasic
    {
        $this->nonReimbursable = $nonReimbursable;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getNonReimbursable(): SearchBooleanField
    {
        return $this->nonReimbursable;
    }

    /**
     * @param SearchLongField $number
     * @return TransactionSearchBasic
     */
    public function setNumber(SearchLongField $number): TransactionSearchBasic
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getNumber(): SearchLongField
    {
        return $this->number;
    }

    /**
     * @param SearchDoubleField $oneTimeTotal
     * @return TransactionSearchBasic
     */
    public function setOneTimeTotal(SearchDoubleField $oneTimeTotal): TransactionSearchBasic
    {
        $this->oneTimeTotal = $oneTimeTotal;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getOneTimeTotal(): SearchDoubleField
    {
        return $this->oneTimeTotal;
    }

    /**
     * @param SearchMultiSelectField $opportunity
     * @return TransactionSearchBasic
     */
    public function setOpportunity(SearchMultiSelectField $opportunity): TransactionSearchBasic
    {
        $this->opportunity = $opportunity;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOpportunity(): SearchMultiSelectField
    {
        return $this->opportunity;
    }

    /**
     * @param SearchMultiSelectField $orderAllocationStrategy
     * @return TransactionSearchBasic
     */
    public function setOrderAllocationStrategy(SearchMultiSelectField $orderAllocationStrategy): TransactionSearchBasic
    {
        $this->orderAllocationStrategy = $orderAllocationStrategy;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOrderAllocationStrategy(): SearchMultiSelectField
    {
        return $this->orderAllocationStrategy;
    }

    /**
     * @param SearchDoubleField $orderPriority
     * @return TransactionSearchBasic
     */
    public function setOrderPriority(SearchDoubleField $orderPriority): TransactionSearchBasic
    {
        $this->orderPriority = $orderPriority;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getOrderPriority(): SearchDoubleField
    {
        return $this->orderPriority;
    }

    /**
     * @param SearchTextNumberField $otherRefNum
     * @return TransactionSearchBasic
     */
    public function setOtherRefNum(SearchTextNumberField $otherRefNum): TransactionSearchBasic
    {
        $this->otherRefNum = $otherRefNum;
        return $this;
    }

    /**
     * @return SearchTextNumberField
     */
    public function getOtherRefNum(): SearchTextNumberField
    {
        return $this->otherRefNum;
    }

    /**
     * @param SearchTextNumberField $otherRefNumNonDeposit
     * @return TransactionSearchBasic
     */
    public function setOtherRefNumNonDeposit(SearchTextNumberField $otherRefNumNonDeposit): TransactionSearchBasic
    {
        $this->otherRefNumNonDeposit = $otherRefNumNonDeposit;
        return $this;
    }

    /**
     * @return SearchTextNumberField
     */
    public function getOtherRefNumNonDeposit(): SearchTextNumberField
    {
        return $this->otherRefNumNonDeposit;
    }

    /**
     * @param SearchMultiSelectField $overheadParentItem
     * @return TransactionSearchBasic
     */
    public function setOverheadParentItem(SearchMultiSelectField $overheadParentItem): TransactionSearchBasic
    {
        $this->overheadParentItem = $overheadParentItem;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOverheadParentItem(): SearchMultiSelectField
    {
        return $this->overheadParentItem;
    }

    /**
     * @param SearchBooleanField $overrideInstallments
     * @return TransactionSearchBasic
     */
    public function setOverrideInstallments(SearchBooleanField $overrideInstallments): TransactionSearchBasic
    {
        $this->overrideInstallments = $overrideInstallments;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getOverrideInstallments(): SearchBooleanField
    {
        return $this->overrideInstallments;
    }

    /**
     * @param SearchLongField $packageCount
     * @return TransactionSearchBasic
     */
    public function setPackageCount(SearchLongField $packageCount): TransactionSearchBasic
    {
        $this->packageCount = $packageCount;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPackageCount(): SearchLongField
    {
        return $this->packageCount;
    }

    /**
     * @param SearchMultiSelectField $paidTransaction
     * @return TransactionSearchBasic
     */
    public function setPaidTransaction(SearchMultiSelectField $paidTransaction): TransactionSearchBasic
    {
        $this->paidTransaction = $paidTransaction;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPaidTransaction(): SearchMultiSelectField
    {
        return $this->paidTransaction;
    }

    /**
     * @param SearchLongField $parent
     * @return TransactionSearchBasic
     */
    public function setParent(SearchLongField $parent): TransactionSearchBasic
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getParent(): SearchLongField
    {
        return $this->parent;
    }

    /**
     * @param SearchMultiSelectField $partner
     * @return TransactionSearchBasic
     */
    public function setPartner(SearchMultiSelectField $partner): TransactionSearchBasic
    {
        $this->partner = $partner;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPartner(): SearchMultiSelectField
    {
        return $this->partner;
    }

    /**
     * @param SearchLongField $partnerContribution
     * @return TransactionSearchBasic
     */
    public function setPartnerContribution(SearchLongField $partnerContribution): TransactionSearchBasic
    {
        $this->partnerContribution = $partnerContribution;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPartnerContribution(): SearchLongField
    {
        return $this->partnerContribution;
    }

    /**
     * @param SearchMultiSelectField $partnerRole
     * @return TransactionSearchBasic
     */
    public function setPartnerRole(SearchMultiSelectField $partnerRole): TransactionSearchBasic
    {
        $this->partnerRole = $partnerRole;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPartnerRole(): SearchMultiSelectField
    {
        return $this->partnerRole;
    }

    /**
     * @param SearchMultiSelectField $partnerTeamMember
     * @return TransactionSearchBasic
     */
    public function setPartnerTeamMember(SearchMultiSelectField $partnerTeamMember): TransactionSearchBasic
    {
        $this->partnerTeamMember = $partnerTeamMember;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPartnerTeamMember(): SearchMultiSelectField
    {
        return $this->partnerTeamMember;
    }

    /**
     * @param SearchMultiSelectField $payingTransaction
     * @return TransactionSearchBasic
     */
    public function setPayingTransaction(SearchMultiSelectField $payingTransaction): TransactionSearchBasic
    {
        $this->payingTransaction = $payingTransaction;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPayingTransaction(): SearchMultiSelectField
    {
        return $this->payingTransaction;
    }

    /**
     * @param SearchBooleanField $paymentApproved
     * @return TransactionSearchBasic
     */
    public function setPaymentApproved(SearchBooleanField $paymentApproved): TransactionSearchBasic
    {
        $this->paymentApproved = $paymentApproved;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPaymentApproved(): SearchBooleanField
    {
        return $this->paymentApproved;
    }

    /**
     * @param SearchDateField $paymentEventDate
     * @return TransactionSearchBasic
     */
    public function setPaymentEventDate(SearchDateField $paymentEventDate): TransactionSearchBasic
    {
        $this->paymentEventDate = $paymentEventDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getPaymentEventDate(): SearchDateField
    {
        return $this->paymentEventDate;
    }

    /**
     * @param SearchEnumMultiSelectField $paymentEventHoldReason
     * @return TransactionSearchBasic
     */
    public function setPaymentEventHoldReason(SearchEnumMultiSelectField $paymentEventHoldReason): TransactionSearchBasic
    {
        $this->paymentEventHoldReason = $paymentEventHoldReason;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getPaymentEventHoldReason(): SearchEnumMultiSelectField
    {
        return $this->paymentEventHoldReason;
    }

    /**
     * @param SearchBooleanField $paymentEventPurchaseCardUsed
     * @return TransactionSearchBasic
     */
    public function setPaymentEventPurchaseCardUsed(SearchBooleanField $paymentEventPurchaseCardUsed): TransactionSearchBasic
    {
        $this->paymentEventPurchaseCardUsed = $paymentEventPurchaseCardUsed;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPaymentEventPurchaseCardUsed(): SearchBooleanField
    {
        return $this->paymentEventPurchaseCardUsed;
    }

    /**
     * @param SearchBooleanField $paymentEventPurchaseDataSent
     * @return TransactionSearchBasic
     */
    public function setPaymentEventPurchaseDataSent(SearchBooleanField $paymentEventPurchaseDataSent): TransactionSearchBasic
    {
        $this->paymentEventPurchaseDataSent = $paymentEventPurchaseDataSent;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPaymentEventPurchaseDataSent(): SearchBooleanField
    {
        return $this->paymentEventPurchaseDataSent;
    }

    /**
     * @param SearchEnumMultiSelectField $paymentEventResult
     * @return TransactionSearchBasic
     */
    public function setPaymentEventResult(SearchEnumMultiSelectField $paymentEventResult): TransactionSearchBasic
    {
        $this->paymentEventResult = $paymentEventResult;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getPaymentEventResult(): SearchEnumMultiSelectField
    {
        return $this->paymentEventResult;
    }

    /**
     * @param SearchEnumMultiSelectField $paymentEventType
     * @return TransactionSearchBasic
     */
    public function setPaymentEventType(SearchEnumMultiSelectField $paymentEventType): TransactionSearchBasic
    {
        $this->paymentEventType = $paymentEventType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getPaymentEventType(): SearchEnumMultiSelectField
    {
        return $this->paymentEventType;
    }

    /**
     * @param SearchBooleanField $paymentHold
     * @return TransactionSearchBasic
     */
    public function setPaymentHold(SearchBooleanField $paymentHold): TransactionSearchBasic
    {
        $this->paymentHold = $paymentHold;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPaymentHold(): SearchBooleanField
    {
        return $this->paymentHold;
    }

    /**
     * @param SearchMultiSelectField $paymentMethod
     * @return TransactionSearchBasic
     */
    public function setPaymentMethod(SearchMultiSelectField $paymentMethod): TransactionSearchBasic
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPaymentMethod(): SearchMultiSelectField
    {
        return $this->paymentMethod;
    }

    /**
     * @param SearchStringField $paymentOption
     * @return TransactionSearchBasic
     */
    public function setPaymentOption(SearchStringField $paymentOption): TransactionSearchBasic
    {
        $this->paymentOption = $paymentOption;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPaymentOption(): SearchStringField
    {
        return $this->paymentOption;
    }

    /**
     * @param SearchBooleanField $payPalPending
     * @return TransactionSearchBasic
     */
    public function setPayPalPending(SearchBooleanField $payPalPending): TransactionSearchBasic
    {
        $this->payPalPending = $payPalPending;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPayPalPending(): SearchBooleanField
    {
        return $this->payPalPending;
    }

    /**
     * @param SearchStringField $payPalStatus
     * @return TransactionSearchBasic
     */
    public function setPayPalStatus(SearchStringField $payPalStatus): TransactionSearchBasic
    {
        $this->payPalStatus = $payPalStatus;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPayPalStatus(): SearchStringField
    {
        return $this->payPalStatus;
    }

    /**
     * @param SearchStringField $payPalTranId
     * @return TransactionSearchBasic
     */
    public function setPayPalTranId(SearchStringField $payPalTranId): TransactionSearchBasic
    {
        $this->payPalTranId = $payPalTranId;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPayPalTranId(): SearchStringField
    {
        return $this->payPalTranId;
    }

    /**
     * @param SearchStringField $pnRefNum
     * @return TransactionSearchBasic
     */
    public function setPnRefNum(SearchStringField $pnRefNum): TransactionSearchBasic
    {
        $this->pnRefNum = $pnRefNum;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPnRefNum(): SearchStringField
    {
        return $this->pnRefNum;
    }

    /**
     * @param SearchStringField $poAsText
     * @return TransactionSearchBasic
     */
    public function setPoAsText(SearchStringField $poAsText): TransactionSearchBasic
    {
        $this->poAsText = $poAsText;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPoAsText(): SearchStringField
    {
        return $this->poAsText;
    }

    /**
     * @param SearchBooleanField $posting
     * @return TransactionSearchBasic
     */
    public function setPosting(SearchBooleanField $posting): TransactionSearchBasic
    {
        $this->posting = $posting;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPosting(): SearchBooleanField
    {
        return $this->posting;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return TransactionSearchBasic
     */
    public function setPostingPeriod(RecordRef $postingPeriod): TransactionSearchBasic
    {
        $this->postingPeriod = $postingPeriod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPostingPeriod(): RecordRef
    {
        return $this->postingPeriod;
    }

    /**
     * @param PostingPeriodDate $postingPeriodRelative
     * @return TransactionSearchBasic
     */
    public function setPostingPeriodRelative(PostingPeriodDate $postingPeriodRelative): TransactionSearchBasic
    {
        $this->postingPeriodRelative = $postingPeriodRelative;
        return $this;
    }

    /**
     * @return PostingPeriodDate
     */
    public function getPostingPeriodRelative(): PostingPeriodDate
    {
        return $this->postingPeriodRelative;
    }

    /**
     * @param SearchMultiSelectField $priceLevel
     * @return TransactionSearchBasic
     */
    public function setPriceLevel(SearchMultiSelectField $priceLevel): TransactionSearchBasic
    {
        $this->priceLevel = $priceLevel;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPriceLevel(): SearchMultiSelectField
    {
        return $this->priceLevel;
    }

    /**
     * @param SearchBooleanField $printedPickingTicket
     * @return TransactionSearchBasic
     */
    public function setPrintedPickingTicket(SearchBooleanField $printedPickingTicket): TransactionSearchBasic
    {
        $this->printedPickingTicket = $printedPickingTicket;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPrintedPickingTicket(): SearchBooleanField
    {
        return $this->printedPickingTicket;
    }

    /**
     * @param SearchLongField $probability
     * @return TransactionSearchBasic
     */
    public function setProbability(SearchLongField $probability): TransactionSearchBasic
    {
        $this->probability = $probability;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getProbability(): SearchLongField
    {
        return $this->probability;
    }

    /**
     * @param SearchDoubleField $projectedAmount
     * @return TransactionSearchBasic
     */
    public function setProjectedAmount(SearchDoubleField $projectedAmount): TransactionSearchBasic
    {
        $this->projectedAmount = $projectedAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getProjectedAmount(): SearchDoubleField
    {
        return $this->projectedAmount;
    }

    /**
     * @param SearchMultiSelectField $projectTask
     * @return TransactionSearchBasic
     */
    public function setProjectTask(SearchMultiSelectField $projectTask): TransactionSearchBasic
    {
        $this->projectTask = $projectTask;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getProjectTask(): SearchMultiSelectField
    {
        return $this->projectTask;
    }

    /**
     * @param SearchMultiSelectField $promoCode
     * @return TransactionSearchBasic
     */
    public function setPromoCode(SearchMultiSelectField $promoCode): TransactionSearchBasic
    {
        $this->promoCode = $promoCode;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPromoCode(): SearchMultiSelectField
    {
        return $this->promoCode;
    }

    /**
     * @param SearchMultiSelectField $purchaseOrder
     * @return TransactionSearchBasic
     */
    public function setPurchaseOrder(SearchMultiSelectField $purchaseOrder): TransactionSearchBasic
    {
        $this->purchaseOrder = $purchaseOrder;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPurchaseOrder(): SearchMultiSelectField
    {
        return $this->purchaseOrder;
    }

    /**
     * @param SearchDoubleField $quantity
     * @return TransactionSearchBasic
     */
    public function setQuantity(SearchDoubleField $quantity): TransactionSearchBasic
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantity(): SearchDoubleField
    {
        return $this->quantity;
    }

    /**
     * @param SearchDoubleField $quantityBilled
     * @return TransactionSearchBasic
     */
    public function setQuantityBilled(SearchDoubleField $quantityBilled): TransactionSearchBasic
    {
        $this->quantityBilled = $quantityBilled;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityBilled(): SearchDoubleField
    {
        return $this->quantityBilled;
    }

    /**
     * @param SearchDoubleField $quantityCommitted
     * @return TransactionSearchBasic
     */
    public function setQuantityCommitted(SearchDoubleField $quantityCommitted): TransactionSearchBasic
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
     * @param SearchDoubleField $quantityPacked
     * @return TransactionSearchBasic
     */
    public function setQuantityPacked(SearchDoubleField $quantityPacked): TransactionSearchBasic
    {
        $this->quantityPacked = $quantityPacked;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityPacked(): SearchDoubleField
    {
        return $this->quantityPacked;
    }

    /**
     * @param SearchDoubleField $quantityPicked
     * @return TransactionSearchBasic
     */
    public function setQuantityPicked(SearchDoubleField $quantityPicked): TransactionSearchBasic
    {
        $this->quantityPicked = $quantityPicked;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityPicked(): SearchDoubleField
    {
        return $this->quantityPicked;
    }

    /**
     * @param SearchDoubleField $quantityRevCommitted
     * @return TransactionSearchBasic
     */
    public function setQuantityRevCommitted(SearchDoubleField $quantityRevCommitted): TransactionSearchBasic
    {
        $this->quantityRevCommitted = $quantityRevCommitted;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityRevCommitted(): SearchDoubleField
    {
        return $this->quantityRevCommitted;
    }

    /**
     * @param SearchDoubleField $quantityShipRecv
     * @return TransactionSearchBasic
     */
    public function setQuantityShipRecv(SearchDoubleField $quantityShipRecv): TransactionSearchBasic
    {
        $this->quantityShipRecv = $quantityShipRecv;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityShipRecv(): SearchDoubleField
    {
        return $this->quantityShipRecv;
    }

    /**
     * @param SearchDoubleField $recognizedRevenue
     * @return TransactionSearchBasic
     */
    public function setRecognizedRevenue(SearchDoubleField $recognizedRevenue): TransactionSearchBasic
    {
        $this->recognizedRevenue = $recognizedRevenue;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRecognizedRevenue(): SearchDoubleField
    {
        return $this->recognizedRevenue;
    }

    /**
     * @param SearchStringField $recordType
     * @return TransactionSearchBasic
     */
    public function setRecordType(SearchStringField $recordType): TransactionSearchBasic
    {
        $this->recordType = $recordType;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getRecordType(): SearchStringField
    {
        return $this->recordType;
    }

    /**
     * @param SearchDoubleField $recurAnnuallyTotal
     * @return TransactionSearchBasic
     */
    public function setRecurAnnuallyTotal(SearchDoubleField $recurAnnuallyTotal): TransactionSearchBasic
    {
        $this->recurAnnuallyTotal = $recurAnnuallyTotal;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRecurAnnuallyTotal(): SearchDoubleField
    {
        return $this->recurAnnuallyTotal;
    }

    /**
     * @param SearchDoubleField $recurMonthlyTotal
     * @return TransactionSearchBasic
     */
    public function setRecurMonthlyTotal(SearchDoubleField $recurMonthlyTotal): TransactionSearchBasic
    {
        $this->recurMonthlyTotal = $recurMonthlyTotal;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRecurMonthlyTotal(): SearchDoubleField
    {
        return $this->recurMonthlyTotal;
    }

    /**
     * @param SearchDoubleField $recurQuarterlyTotal
     * @return TransactionSearchBasic
     */
    public function setRecurQuarterlyTotal(SearchDoubleField $recurQuarterlyTotal): TransactionSearchBasic
    {
        $this->recurQuarterlyTotal = $recurQuarterlyTotal;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRecurQuarterlyTotal(): SearchDoubleField
    {
        return $this->recurQuarterlyTotal;
    }

    /**
     * @param SearchBooleanField $recurringBill
     * @return TransactionSearchBasic
     */
    public function setRecurringBill(SearchBooleanField $recurringBill): TransactionSearchBasic
    {
        $this->recurringBill = $recurringBill;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getRecurringBill(): SearchBooleanField
    {
        return $this->recurringBill;
    }

    /**
     * @param SearchDoubleField $recurWeeklyTotal
     * @return TransactionSearchBasic
     */
    public function setRecurWeeklyTotal(SearchDoubleField $recurWeeklyTotal): TransactionSearchBasic
    {
        $this->recurWeeklyTotal = $recurWeeklyTotal;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRecurWeeklyTotal(): SearchDoubleField
    {
        return $this->recurWeeklyTotal;
    }

    /**
     * @param SearchLongField $refNumber
     * @return TransactionSearchBasic
     */
    public function setRefNumber(SearchLongField $refNumber): TransactionSearchBasic
    {
        $this->refNumber = $refNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getRefNumber(): SearchLongField
    {
        return $this->refNumber;
    }

    /**
     * @param SearchDateField $requestedDate
     * @return TransactionSearchBasic
     */
    public function setRequestedDate(SearchDateField $requestedDate): TransactionSearchBasic
    {
        $this->requestedDate = $requestedDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getRequestedDate(): SearchDateField
    {
        return $this->requestedDate;
    }

    /**
     * @param SearchEnumMultiSelectField $revCommitStatus
     * @return TransactionSearchBasic
     */
    public function setRevCommitStatus(SearchEnumMultiSelectField $revCommitStatus): TransactionSearchBasic
    {
        $this->revCommitStatus = $revCommitStatus;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getRevCommitStatus(): SearchEnumMultiSelectField
    {
        return $this->revCommitStatus;
    }

    /**
     * @param SearchBooleanField $revCommittingStatus
     * @return TransactionSearchBasic
     */
    public function setRevCommittingStatus(SearchBooleanField $revCommittingStatus): TransactionSearchBasic
    {
        $this->revCommittingStatus = $revCommittingStatus;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getRevCommittingStatus(): SearchBooleanField
    {
        return $this->revCommittingStatus;
    }

    /**
     * @param SearchMultiSelectField $revCommittingTransaction
     * @return TransactionSearchBasic
     */
    public function setRevCommittingTransaction(SearchMultiSelectField $revCommittingTransaction): TransactionSearchBasic
    {
        $this->revCommittingTransaction = $revCommittingTransaction;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRevCommittingTransaction(): SearchMultiSelectField
    {
        return $this->revCommittingTransaction;
    }

    /**
     * @param SearchEnumMultiSelectField $revenueStatus
     * @return TransactionSearchBasic
     */
    public function setRevenueStatus(SearchEnumMultiSelectField $revenueStatus): TransactionSearchBasic
    {
        $this->revenueStatus = $revenueStatus;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getRevenueStatus(): SearchEnumMultiSelectField
    {
        return $this->revenueStatus;
    }

    /**
     * @param SearchDateField $reversalDate
     * @return TransactionSearchBasic
     */
    public function setReversalDate(SearchDateField $reversalDate): TransactionSearchBasic
    {
        $this->reversalDate = $reversalDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getReversalDate(): SearchDateField
    {
        return $this->reversalDate;
    }

    /**
     * @param SearchStringField $reversalNumber
     * @return TransactionSearchBasic
     */
    public function setReversalNumber(SearchStringField $reversalNumber): TransactionSearchBasic
    {
        $this->reversalNumber = $reversalNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getReversalNumber(): SearchStringField
    {
        return $this->reversalNumber;
    }

    /**
     * @param SearchDateField $revRecEndDate
     * @return TransactionSearchBasic
     */
    public function setRevRecEndDate(SearchDateField $revRecEndDate): TransactionSearchBasic
    {
        $this->revRecEndDate = $revRecEndDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getRevRecEndDate(): SearchDateField
    {
        return $this->revRecEndDate;
    }

    /**
     * @param SearchBooleanField $revRecOnRevCommitment
     * @return TransactionSearchBasic
     */
    public function setRevRecOnRevCommitment(SearchBooleanField $revRecOnRevCommitment): TransactionSearchBasic
    {
        $this->revRecOnRevCommitment = $revRecOnRevCommitment;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getRevRecOnRevCommitment(): SearchBooleanField
    {
        return $this->revRecOnRevCommitment;
    }

    /**
     * @param SearchDateField $revRecStartDate
     * @return TransactionSearchBasic
     */
    public function setRevRecStartDate(SearchDateField $revRecStartDate): TransactionSearchBasic
    {
        $this->revRecStartDate = $revRecStartDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getRevRecStartDate(): SearchDateField
    {
        return $this->revRecStartDate;
    }

    /**
     * @param SearchLongField $revRecTermInMonths
     * @return TransactionSearchBasic
     */
    public function setRevRecTermInMonths(SearchLongField $revRecTermInMonths): TransactionSearchBasic
    {
        $this->revRecTermInMonths = $revRecTermInMonths;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getRevRecTermInMonths(): SearchLongField
    {
        return $this->revRecTermInMonths;
    }

    /**
     * @param SearchDateField $salesEffectiveDate
     * @return TransactionSearchBasic
     */
    public function setSalesEffectiveDate(SearchDateField $salesEffectiveDate): TransactionSearchBasic
    {
        $this->salesEffectiveDate = $salesEffectiveDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getSalesEffectiveDate(): SearchDateField
    {
        return $this->salesEffectiveDate;
    }

    /**
     * @param SearchMultiSelectField $salesOrder
     * @return TransactionSearchBasic
     */
    public function setSalesOrder(SearchMultiSelectField $salesOrder): TransactionSearchBasic
    {
        $this->salesOrder = $salesOrder;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesOrder(): SearchMultiSelectField
    {
        return $this->salesOrder;
    }

    /**
     * @param SearchMultiSelectField $salesRep
     * @return TransactionSearchBasic
     */
    public function setSalesRep(SearchMultiSelectField $salesRep): TransactionSearchBasic
    {
        $this->salesRep = $salesRep;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesRep(): SearchMultiSelectField
    {
        return $this->salesRep;
    }

    /**
     * @param SearchMultiSelectField $salesTeamMember
     * @return TransactionSearchBasic
     */
    public function setSalesTeamMember(SearchMultiSelectField $salesTeamMember): TransactionSearchBasic
    {
        $this->salesTeamMember = $salesTeamMember;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesTeamMember(): SearchMultiSelectField
    {
        return $this->salesTeamMember;
    }

    /**
     * @param SearchMultiSelectField $salesTeamRole
     * @return TransactionSearchBasic
     */
    public function setSalesTeamRole(SearchMultiSelectField $salesTeamRole): TransactionSearchBasic
    {
        $this->salesTeamRole = $salesTeamRole;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesTeamRole(): SearchMultiSelectField
    {
        return $this->salesTeamRole;
    }

    /**
     * @param SearchEnumMultiSelectField $schedulingMethod
     * @return TransactionSearchBasic
     */
    public function setSchedulingMethod(SearchEnumMultiSelectField $schedulingMethod): TransactionSearchBasic
    {
        $this->schedulingMethod = $schedulingMethod;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getSchedulingMethod(): SearchEnumMultiSelectField
    {
        return $this->schedulingMethod;
    }

    /**
     * @param SearchStringField $serialNumber
     * @return TransactionSearchBasic
     */
    public function setSerialNumber(SearchStringField $serialNumber): TransactionSearchBasic
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
     * @param SearchDoubleField $serialNumberCost
     * @return TransactionSearchBasic
     */
    public function setSerialNumberCost(SearchDoubleField $serialNumberCost): TransactionSearchBasic
    {
        $this->serialNumberCost = $serialNumberCost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getSerialNumberCost(): SearchDoubleField
    {
        return $this->serialNumberCost;
    }

    /**
     * @param SearchDoubleField $serialNumberCostAdjustment
     * @return TransactionSearchBasic
     */
    public function setSerialNumberCostAdjustment(SearchDoubleField $serialNumberCostAdjustment): TransactionSearchBasic
    {
        $this->serialNumberCostAdjustment = $serialNumberCostAdjustment;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getSerialNumberCostAdjustment(): SearchDoubleField
    {
        return $this->serialNumberCostAdjustment;
    }

    /**
     * @param SearchDoubleField $serialNumberQuantity
     * @return TransactionSearchBasic
     */
    public function setSerialNumberQuantity(SearchDoubleField $serialNumberQuantity): TransactionSearchBasic
    {
        $this->serialNumberQuantity = $serialNumberQuantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getSerialNumberQuantity(): SearchDoubleField
    {
        return $this->serialNumberQuantity;
    }

    /**
     * @param SearchStringField $serialNumbers
     * @return TransactionSearchBasic
     */
    public function setSerialNumbers(SearchStringField $serialNumbers): TransactionSearchBasic
    {
        $this->serialNumbers = $serialNumbers;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getSerialNumbers(): SearchStringField
    {
        return $this->serialNumbers;
    }

    /**
     * @param SearchStringField $shipAddress
     * @return TransactionSearchBasic
     */
    public function setShipAddress(SearchStringField $shipAddress): TransactionSearchBasic
    {
        $this->shipAddress = $shipAddress;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getShipAddress(): SearchStringField
    {
        return $this->shipAddress;
    }

    /**
     * @param SearchStringField $shipAddressee
     * @return TransactionSearchBasic
     */
    public function setShipAddressee(SearchStringField $shipAddressee): TransactionSearchBasic
    {
        $this->shipAddressee = $shipAddressee;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getShipAddressee(): SearchStringField
    {
        return $this->shipAddressee;
    }

    /**
     * @param SearchStringField $shipAttention
     * @return TransactionSearchBasic
     */
    public function setShipAttention(SearchStringField $shipAttention): TransactionSearchBasic
    {
        $this->shipAttention = $shipAttention;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getShipAttention(): SearchStringField
    {
        return $this->shipAttention;
    }

    /**
     * @param SearchEnumMultiSelectField $shipCarrier
     * @return TransactionSearchBasic
     */
    public function setShipCarrier(SearchEnumMultiSelectField $shipCarrier): TransactionSearchBasic
    {
        $this->shipCarrier = $shipCarrier;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getShipCarrier(): SearchEnumMultiSelectField
    {
        return $this->shipCarrier;
    }

    /**
     * @param SearchStringField $shipCity
     * @return TransactionSearchBasic
     */
    public function setShipCity(SearchStringField $shipCity): TransactionSearchBasic
    {
        $this->shipCity = $shipCity;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getShipCity(): SearchStringField
    {
        return $this->shipCity;
    }

    /**
     * @param SearchBooleanField $shipComplete
     * @return TransactionSearchBasic
     */
    public function setShipComplete(SearchBooleanField $shipComplete): TransactionSearchBasic
    {
        $this->shipComplete = $shipComplete;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getShipComplete(): SearchBooleanField
    {
        return $this->shipComplete;
    }

    /**
     * @param SearchEnumMultiSelectField $shipCountry
     * @return TransactionSearchBasic
     */
    public function setShipCountry(SearchEnumMultiSelectField $shipCountry): TransactionSearchBasic
    {
        $this->shipCountry = $shipCountry;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getShipCountry(): SearchEnumMultiSelectField
    {
        return $this->shipCountry;
    }

    /**
     * @param SearchStringField $shipCounty
     * @return TransactionSearchBasic
     */
    public function setShipCounty(SearchStringField $shipCounty): TransactionSearchBasic
    {
        $this->shipCounty = $shipCounty;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getShipCounty(): SearchStringField
    {
        return $this->shipCounty;
    }

    /**
     * @param SearchDateField $shipDate
     * @return TransactionSearchBasic
     */
    public function setShipDate(SearchDateField $shipDate): TransactionSearchBasic
    {
        $this->shipDate = $shipDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getShipDate(): SearchDateField
    {
        return $this->shipDate;
    }

    /**
     * @param SearchLongField $shipGroup
     * @return TransactionSearchBasic
     */
    public function setShipGroup(SearchLongField $shipGroup): TransactionSearchBasic
    {
        $this->shipGroup = $shipGroup;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getShipGroup(): SearchLongField
    {
        return $this->shipGroup;
    }

    /**
     * @param SearchMultiSelectField $shipMethod
     * @return TransactionSearchBasic
     */
    public function setShipMethod(SearchMultiSelectField $shipMethod): TransactionSearchBasic
    {
        $this->shipMethod = $shipMethod;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getShipMethod(): SearchMultiSelectField
    {
        return $this->shipMethod;
    }

    /**
     * @param SearchStringField $shipPhone
     * @return TransactionSearchBasic
     */
    public function setShipPhone(SearchStringField $shipPhone): TransactionSearchBasic
    {
        $this->shipPhone = $shipPhone;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getShipPhone(): SearchStringField
    {
        return $this->shipPhone;
    }

    /**
     * @param SearchBooleanField $shipping
     * @return TransactionSearchBasic
     */
    public function setShipping(SearchBooleanField $shipping): TransactionSearchBasic
    {
        $this->shipping = $shipping;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getShipping(): SearchBooleanField
    {
        return $this->shipping;
    }

    /**
     * @param SearchBooleanField $shipRecvStatus
     * @return TransactionSearchBasic
     */
    public function setShipRecvStatus(SearchBooleanField $shipRecvStatus): TransactionSearchBasic
    {
        $this->shipRecvStatus = $shipRecvStatus;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getShipRecvStatus(): SearchBooleanField
    {
        return $this->shipRecvStatus;
    }

    /**
     * @param SearchBooleanField $shipRecvStatusLine
     * @return TransactionSearchBasic
     */
    public function setShipRecvStatusLine(SearchBooleanField $shipRecvStatusLine): TransactionSearchBasic
    {
        $this->shipRecvStatusLine = $shipRecvStatusLine;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getShipRecvStatusLine(): SearchBooleanField
    {
        return $this->shipRecvStatusLine;
    }

    /**
     * @param SearchMultiSelectField $shipState
     * @return TransactionSearchBasic
     */
    public function setShipState(SearchMultiSelectField $shipState): TransactionSearchBasic
    {
        $this->shipState = $shipState;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getShipState(): SearchMultiSelectField
    {
        return $this->shipState;
    }

    /**
     * @param SearchMultiSelectField $shipTo
     * @return TransactionSearchBasic
     */
    public function setShipTo(SearchMultiSelectField $shipTo): TransactionSearchBasic
    {
        $this->shipTo = $shipTo;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getShipTo(): SearchMultiSelectField
    {
        return $this->shipTo;
    }

    /**
     * @param SearchStringField $shipZip
     * @return TransactionSearchBasic
     */
    public function setShipZip(SearchStringField $shipZip): TransactionSearchBasic
    {
        $this->shipZip = $shipZip;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getShipZip(): SearchStringField
    {
        return $this->shipZip;
    }

    /**
     * @param SearchEnumMultiSelectField $source
     * @return TransactionSearchBasic
     */
    public function setSource(SearchEnumMultiSelectField $source): TransactionSearchBasic
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getSource(): SearchEnumMultiSelectField
    {
        return $this->source;
    }

    /**
     * @param SearchDateField $startDate
     * @return TransactionSearchBasic
     */
    public function setStartDate(SearchDateField $startDate): TransactionSearchBasic
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDate(): SearchDateField
    {
        return $this->startDate;
    }

    /**
     * @param SearchBooleanField $statistical
     * @return TransactionSearchBasic
     */
    public function setStatistical(SearchBooleanField $statistical): TransactionSearchBasic
    {
        $this->statistical = $statistical;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getStatistical(): SearchBooleanField
    {
        return $this->statistical;
    }

    /**
     * @param SearchEnumMultiSelectField $status
     * @return TransactionSearchBasic
     */
    public function setStatus(SearchEnumMultiSelectField $status): TransactionSearchBasic
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getStatus(): SearchEnumMultiSelectField
    {
        return $this->status;
    }

    /**
     * @param SearchMultiSelectField $subscription
     * @return TransactionSearchBasic
     */
    public function setSubscription(SearchMultiSelectField $subscription): TransactionSearchBasic
    {
        $this->subscription = $subscription;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubscription(): SearchMultiSelectField
    {
        return $this->subscription;
    }

    /**
     * @param SearchMultiSelectField $subscriptionLine
     * @return TransactionSearchBasic
     */
    public function setSubscriptionLine(SearchMultiSelectField $subscriptionLine): TransactionSearchBasic
    {
        $this->subscriptionLine = $subscriptionLine;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubscriptionLine(): SearchMultiSelectField
    {
        return $this->subscriptionLine;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return TransactionSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): TransactionSearchBasic
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
     * @param SearchMultiSelectField $subsidiaryTaxRegNum
     * @return TransactionSearchBasic
     */
    public function setSubsidiaryTaxRegNum(SearchMultiSelectField $subsidiaryTaxRegNum): TransactionSearchBasic
    {
        $this->subsidiaryTaxRegNum = $subsidiaryTaxRegNum;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiaryTaxRegNum(): SearchMultiSelectField
    {
        return $this->subsidiaryTaxRegNum;
    }

    /**
     * @param SearchMultiSelectField $taxItem
     * @return TransactionSearchBasic
     */
    public function setTaxItem(SearchMultiSelectField $taxItem): TransactionSearchBasic
    {
        $this->taxItem = $taxItem;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTaxItem(): SearchMultiSelectField
    {
        return $this->taxItem;
    }

    /**
     * @param SearchBooleanField $taxLine
     * @return TransactionSearchBasic
     */
    public function setTaxLine(SearchBooleanField $taxLine): TransactionSearchBasic
    {
        $this->taxLine = $taxLine;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getTaxLine(): SearchBooleanField
    {
        return $this->taxLine;
    }

    /**
     * @param RecordRef $taxPeriod
     * @return TransactionSearchBasic
     */
    public function setTaxPeriod(RecordRef $taxPeriod): TransactionSearchBasic
    {
        $this->taxPeriod = $taxPeriod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxPeriod(): RecordRef
    {
        return $this->taxPeriod;
    }

    /**
     * @param PostingPeriodDate $taxPeriodRelative
     * @return TransactionSearchBasic
     */
    public function setTaxPeriodRelative(PostingPeriodDate $taxPeriodRelative): TransactionSearchBasic
    {
        $this->taxPeriodRelative = $taxPeriodRelative;
        return $this;
    }

    /**
     * @return PostingPeriodDate
     */
    public function getTaxPeriodRelative(): PostingPeriodDate
    {
        return $this->taxPeriodRelative;
    }

    /**
     * @param SearchDateField $taxPointDate
     * @return TransactionSearchBasic
     */
    public function setTaxPointDate(SearchDateField $taxPointDate): TransactionSearchBasic
    {
        $this->taxPointDate = $taxPointDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getTaxPointDate(): SearchDateField
    {
        return $this->taxPointDate;
    }

    /**
     * @param SearchDoubleField $taxRate
     * @return TransactionSearchBasic
     */
    public function setTaxRate(SearchDoubleField $taxRate): TransactionSearchBasic
    {
        $this->taxRate = $taxRate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTaxRate(): SearchDoubleField
    {
        return $this->taxRate;
    }

    /**
     * @param SearchMultiSelectField $terms
     * @return TransactionSearchBasic
     */
    public function setTerms(SearchMultiSelectField $terms): TransactionSearchBasic
    {
        $this->terms = $terms;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTerms(): SearchMultiSelectField
    {
        return $this->terms;
    }

    /**
     * @param SearchEnumMultiSelectField $termsOfSale
     * @return TransactionSearchBasic
     */
    public function setTermsOfSale(SearchEnumMultiSelectField $termsOfSale): TransactionSearchBasic
    {
        $this->termsOfSale = $termsOfSale;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getTermsOfSale(): SearchEnumMultiSelectField
    {
        return $this->termsOfSale;
    }

    /**
     * @param SearchStringField $title
     * @return TransactionSearchBasic
     */
    public function setTitle(SearchStringField $title): TransactionSearchBasic
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTitle(): SearchStringField
    {
        return $this->title;
    }

    /**
     * @param SearchBooleanField $toBeEmailed
     * @return TransactionSearchBasic
     */
    public function setToBeEmailed(SearchBooleanField $toBeEmailed): TransactionSearchBasic
    {
        $this->toBeEmailed = $toBeEmailed;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getToBeEmailed(): SearchBooleanField
    {
        return $this->toBeEmailed;
    }

    /**
     * @param SearchBooleanField $toBePrinted
     * @return TransactionSearchBasic
     */
    public function setToBePrinted(SearchBooleanField $toBePrinted): TransactionSearchBasic
    {
        $this->toBePrinted = $toBePrinted;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getToBePrinted(): SearchBooleanField
    {
        return $this->toBePrinted;
    }

    /**
     * @param SearchMultiSelectField $toSubsidiary
     * @return TransactionSearchBasic
     */
    public function setToSubsidiary(SearchMultiSelectField $toSubsidiary): TransactionSearchBasic
    {
        $this->toSubsidiary = $toSubsidiary;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getToSubsidiary(): SearchMultiSelectField
    {
        return $this->toSubsidiary;
    }

    /**
     * @param SearchDoubleField $totalAmount
     * @return TransactionSearchBasic
     */
    public function setTotalAmount(SearchDoubleField $totalAmount): TransactionSearchBasic
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTotalAmount(): SearchDoubleField
    {
        return $this->totalAmount;
    }

    /**
     * @param SearchStringField $trackingNumbers
     * @return TransactionSearchBasic
     */
    public function setTrackingNumbers(SearchStringField $trackingNumbers): TransactionSearchBasic
    {
        $this->trackingNumbers = $trackingNumbers;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTrackingNumbers(): SearchStringField
    {
        return $this->trackingNumbers;
    }

    /**
     * @param SearchDoubleField $tranCostEstimate
     * @return TransactionSearchBasic
     */
    public function setTranCostEstimate(SearchDoubleField $tranCostEstimate): TransactionSearchBasic
    {
        $this->tranCostEstimate = $tranCostEstimate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTranCostEstimate(): SearchDoubleField
    {
        return $this->tranCostEstimate;
    }

    /**
     * @param SearchDateField $tranDate
     * @return TransactionSearchBasic
     */
    public function setTranDate(SearchDateField $tranDate): TransactionSearchBasic
    {
        $this->tranDate = $tranDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getTranDate(): SearchDateField
    {
        return $this->tranDate;
    }

    /**
     * @param SearchDoubleField $tranEstGrossProfit
     * @return TransactionSearchBasic
     */
    public function setTranEstGrossProfit(SearchDoubleField $tranEstGrossProfit): TransactionSearchBasic
    {
        $this->tranEstGrossProfit = $tranEstGrossProfit;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTranEstGrossProfit(): SearchDoubleField
    {
        return $this->tranEstGrossProfit;
    }

    /**
     * @param SearchDoubleField $tranEstGrossProfitPct
     * @return TransactionSearchBasic
     */
    public function setTranEstGrossProfitPct(SearchDoubleField $tranEstGrossProfitPct): TransactionSearchBasic
    {
        $this->tranEstGrossProfitPct = $tranEstGrossProfitPct;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTranEstGrossProfitPct(): SearchDoubleField
    {
        return $this->tranEstGrossProfitPct;
    }

    /**
     * @param SearchDoubleField $tranFxEstGrossProfit
     * @return TransactionSearchBasic
     */
    public function setTranFxEstGrossProfit(SearchDoubleField $tranFxEstGrossProfit): TransactionSearchBasic
    {
        $this->tranFxEstGrossProfit = $tranFxEstGrossProfit;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTranFxEstGrossProfit(): SearchDoubleField
    {
        return $this->tranFxEstGrossProfit;
    }

    /**
     * @param SearchStringField $tranId
     * @return TransactionSearchBasic
     */
    public function setTranId(SearchStringField $tranId): TransactionSearchBasic
    {
        $this->tranId = $tranId;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTranId(): SearchStringField
    {
        return $this->tranId;
    }

    /**
     * @param SearchBooleanField $tranIsVsoeBundle
     * @return TransactionSearchBasic
     */
    public function setTranIsVsoeBundle(SearchBooleanField $tranIsVsoeBundle): TransactionSearchBasic
    {
        $this->tranIsVsoeBundle = $tranIsVsoeBundle;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getTranIsVsoeBundle(): SearchBooleanField
    {
        return $this->tranIsVsoeBundle;
    }

    /**
     * @param SearchBooleanField $transactionDiscount
     * @return TransactionSearchBasic
     */
    public function setTransactionDiscount(SearchBooleanField $transactionDiscount): TransactionSearchBasic
    {
        $this->transactionDiscount = $transactionDiscount;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getTransactionDiscount(): SearchBooleanField
    {
        return $this->transactionDiscount;
    }

    /**
     * @param SearchEnumMultiSelectField $transactionLineType
     * @return TransactionSearchBasic
     */
    public function setTransactionLineType(SearchEnumMultiSelectField $transactionLineType): TransactionSearchBasic
    {
        $this->transactionLineType = $transactionLineType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getTransactionLineType(): SearchEnumMultiSelectField
    {
        return $this->transactionLineType;
    }

    /**
     * @param SearchStringField $transactionNumber
     * @return TransactionSearchBasic
     */
    public function setTransactionNumber(SearchStringField $transactionNumber): TransactionSearchBasic
    {
        $this->transactionNumber = $transactionNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTransactionNumber(): SearchStringField
    {
        return $this->transactionNumber;
    }

    /**
     * @param SearchMultiSelectField $transferLocation
     * @return TransactionSearchBasic
     */
    public function setTransferLocation(SearchMultiSelectField $transferLocation): TransactionSearchBasic
    {
        $this->transferLocation = $transferLocation;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTransferLocation(): SearchMultiSelectField
    {
        return $this->transferLocation;
    }

    /**
     * @param SearchDoubleField $transferOrderQuantityCommitted
     * @return TransactionSearchBasic
     */
    public function setTransferOrderQuantityCommitted(SearchDoubleField $transferOrderQuantityCommitted): TransactionSearchBasic
    {
        $this->transferOrderQuantityCommitted = $transferOrderQuantityCommitted;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTransferOrderQuantityCommitted(): SearchDoubleField
    {
        return $this->transferOrderQuantityCommitted;
    }

    /**
     * @param SearchDoubleField $transferOrderQuantityPacked
     * @return TransactionSearchBasic
     */
    public function setTransferOrderQuantityPacked(SearchDoubleField $transferOrderQuantityPacked): TransactionSearchBasic
    {
        $this->transferOrderQuantityPacked = $transferOrderQuantityPacked;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTransferOrderQuantityPacked(): SearchDoubleField
    {
        return $this->transferOrderQuantityPacked;
    }

    /**
     * @param SearchDoubleField $transferOrderQuantityPicked
     * @return TransactionSearchBasic
     */
    public function setTransferOrderQuantityPicked(SearchDoubleField $transferOrderQuantityPicked): TransactionSearchBasic
    {
        $this->transferOrderQuantityPicked = $transferOrderQuantityPicked;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTransferOrderQuantityPicked(): SearchDoubleField
    {
        return $this->transferOrderQuantityPicked;
    }

    /**
     * @param SearchDoubleField $transferOrderQuantityReceived
     * @return TransactionSearchBasic
     */
    public function setTransferOrderQuantityReceived(SearchDoubleField $transferOrderQuantityReceived): TransactionSearchBasic
    {
        $this->transferOrderQuantityReceived = $transferOrderQuantityReceived;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTransferOrderQuantityReceived(): SearchDoubleField
    {
        return $this->transferOrderQuantityReceived;
    }

    /**
     * @param SearchDoubleField $transferOrderQuantityShipped
     * @return TransactionSearchBasic
     */
    public function setTransferOrderQuantityShipped(SearchDoubleField $transferOrderQuantityShipped): TransactionSearchBasic
    {
        $this->transferOrderQuantityShipped = $transferOrderQuantityShipped;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTransferOrderQuantityShipped(): SearchDoubleField
    {
        return $this->transferOrderQuantityShipped;
    }

    /**
     * @param SearchEnumMultiSelectField $type
     * @return TransactionSearchBasic
     */
    public function setType(SearchEnumMultiSelectField $type): TransactionSearchBasic
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
     * @param SearchMultiSelectField $unit
     * @return TransactionSearchBasic
     */
    public function setUnit(SearchMultiSelectField $unit): TransactionSearchBasic
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getUnit(): SearchMultiSelectField
    {
        return $this->unit;
    }

    /**
     * @param SearchDoubleField $unitCostOverride
     * @return TransactionSearchBasic
     */
    public function setUnitCostOverride(SearchDoubleField $unitCostOverride): TransactionSearchBasic
    {
        $this->unitCostOverride = $unitCostOverride;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUnitCostOverride(): SearchDoubleField
    {
        return $this->unitCostOverride;
    }

    /**
     * @param SearchMultiSelectField $unitsType
     * @return TransactionSearchBasic
     */
    public function setUnitsType(SearchMultiSelectField $unitsType): TransactionSearchBasic
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
     * @param SearchMultiSelectField $vendType
     * @return TransactionSearchBasic
     */
    public function setVendType(SearchMultiSelectField $vendType): TransactionSearchBasic
    {
        $this->vendType = $vendType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVendType(): SearchMultiSelectField
    {
        return $this->vendType;
    }

    /**
     * @param SearchBooleanField $visibleToCustomer
     * @return TransactionSearchBasic
     */
    public function setVisibleToCustomer(SearchBooleanField $visibleToCustomer): TransactionSearchBasic
    {
        $this->visibleToCustomer = $visibleToCustomer;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getVisibleToCustomer(): SearchBooleanField
    {
        return $this->visibleToCustomer;
    }

    /**
     * @param SearchBooleanField $voided
     * @return TransactionSearchBasic
     */
    public function setVoided(SearchBooleanField $voided): TransactionSearchBasic
    {
        $this->voided = $voided;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getVoided(): SearchBooleanField
    {
        return $this->voided;
    }

    /**
     * @param SearchDoubleField $vsoeAllocation
     * @return TransactionSearchBasic
     */
    public function setVsoeAllocation(SearchDoubleField $vsoeAllocation): TransactionSearchBasic
    {
        $this->vsoeAllocation = $vsoeAllocation;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getVsoeAllocation(): SearchDoubleField
    {
        return $this->vsoeAllocation;
    }

    /**
     * @param SearchDoubleField $vsoeAmount
     * @return TransactionSearchBasic
     */
    public function setVsoeAmount(SearchDoubleField $vsoeAmount): TransactionSearchBasic
    {
        $this->vsoeAmount = $vsoeAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getVsoeAmount(): SearchDoubleField
    {
        return $this->vsoeAmount;
    }

    /**
     * @param SearchEnumMultiSelectField $vsoeDeferral
     * @return TransactionSearchBasic
     */
    public function setVsoeDeferral(SearchEnumMultiSelectField $vsoeDeferral): TransactionSearchBasic
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
     * @return TransactionSearchBasic
     */
    public function setVsoeDelivered(SearchBooleanField $vsoeDelivered): TransactionSearchBasic
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
     * @return TransactionSearchBasic
     */
    public function setVsoePermitDiscount(SearchEnumMultiSelectField $vsoePermitDiscount): TransactionSearchBasic
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
     * @return TransactionSearchBasic
     */
    public function setVsoePrice(SearchDoubleField $vsoePrice): TransactionSearchBasic
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
     * @param SearchMultiSelectField $webSite
     * @return TransactionSearchBasic
     */
    public function setWebSite(SearchMultiSelectField $webSite): TransactionSearchBasic
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
     * @param SearchCustomFieldList $customFieldList
     * @return TransactionSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): TransactionSearchBasic
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
