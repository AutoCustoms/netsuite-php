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

class OriginatingLeadSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchStringField
     */
    protected SearchStringField $accountNumber;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $address;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $addressee;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $addressLabel;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $addressPhone;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $assignedSite;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $assignedSiteId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $attention;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $availableOffline;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $balance;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $billAddress;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $boughtAmount;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $boughtDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $buyingReason;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $buyingTimeFrame;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $category;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $ccCustomerCode;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $ccDefault;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $ccExpDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $ccHolderName;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $ccNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $ccState;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $ccStateFrom;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $ccType;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $city;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $classBought;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $comments;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $companyName;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $consolBalance;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $consolDaysOverdue;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $consolDepositBalance;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $consolOverdueBalance;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $consolUnbilledOrders;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $contact;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $contribution;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $conversionDate;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $country;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $county;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $creditHold;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $creditHoldOverride;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $creditLimit;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $currency;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $custStage;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $custStatus;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $dateClosed;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $dateCreated;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $daysOverdue;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $defaultOrderPriority;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $defaultTaxReg;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $defaultTaxRegText;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $depositBalance;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $deptBought;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $drAccount;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $email;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $emailPreference;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $emailTransactions;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $endDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $entityId;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $entityStatus;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estimatedBudget;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $explicitConversion;

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
    protected SearchStringField $fax;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $faxTransactions;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $firstName;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $firstOrderDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $firstSaleDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $fxAccount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fxBalance;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fxConsolBalance;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fxConsolUnbilledOrders;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fxUnbilledOrders;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $giveAccess;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $globalSubscriptionStatus;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $group;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $groupPricingLevel;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $hasDuplicates;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $image;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isBudgetApproved;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isDefaultBilling;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isDefaultShipping;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isPerson;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isReportedLead;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isShipAddress;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $itemPricingLevel;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $itemPricingUnitPrice;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $itemsBought;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $itemsOrdered;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $language;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastModifiedDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $lastName;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastOrderDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastSaleDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $leadDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $leadSource;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $level;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $locationBought;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $manualCreditHold;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $merchantAccount;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $middleName;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $monthlyClosing;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $onCreditHold;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $orderedAmount;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $orderedDate;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $otherRelationships;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $overdueBalance;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $parent;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $parentItemsBought;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $parentItemsOrdered;

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
     * @var SearchStringField
     */
    protected SearchStringField $pec;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $permission;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $phone;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $phoneticName;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $priceLevel;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $pricingGroup;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $pricingItem;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $printTransactions;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $prospectDate;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $pstExempt;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $receivablesAccount;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $reminderDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $resaleNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $role;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $salesReadiness;

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
     * @var SearchStringField
     */
    protected SearchStringField $salutation;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $shipAddress;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $shipComplete;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $shippingItem;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $sourceSite;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $sourceSiteId;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $stage;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $startDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $state;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidBought;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $taxable;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $terms;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $territory;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $title;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $unbilledOrders;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $url;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $vatRegNumber;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $webLead;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $zipCode;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "accountNumber" => "SearchStringField",
        "address" => "SearchStringField",
        "addressee" => "SearchStringField",
        "addressLabel" => "SearchStringField",
        "addressPhone" => "SearchStringField",
        "assignedSite" => "SearchMultiSelectField",
        "assignedSiteId" => "SearchMultiSelectField",
        "attention" => "SearchStringField",
        "availableOffline" => "SearchBooleanField",
        "balance" => "SearchDoubleField",
        "billAddress" => "SearchStringField",
        "boughtAmount" => "SearchDoubleField",
        "boughtDate" => "SearchDateField",
        "buyingReason" => "SearchMultiSelectField",
        "buyingTimeFrame" => "SearchMultiSelectField",
        "category" => "SearchMultiSelectField",
        "ccCustomerCode" => "SearchStringField",
        "ccDefault" => "SearchBooleanField",
        "ccExpDate" => "SearchDateField",
        "ccHolderName" => "SearchStringField",
        "ccNumber" => "SearchStringField",
        "ccState" => "SearchMultiSelectField",
        "ccStateFrom" => "SearchDateField",
        "ccType" => "SearchMultiSelectField",
        "city" => "SearchStringField",
        "classBought" => "SearchMultiSelectField",
        "comments" => "SearchStringField",
        "companyName" => "SearchStringField",
        "consolBalance" => "SearchDoubleField",
        "consolDaysOverdue" => "SearchLongField",
        "consolDepositBalance" => "SearchDoubleField",
        "consolOverdueBalance" => "SearchDoubleField",
        "consolUnbilledOrders" => "SearchDoubleField",
        "contact" => "SearchStringField",
        "contribution" => "SearchLongField",
        "conversionDate" => "SearchDateField",
        "country" => "SearchEnumMultiSelectField",
        "county" => "SearchStringField",
        "creditHold" => "SearchEnumMultiSelectField",
        "creditHoldOverride" => "SearchBooleanField",
        "creditLimit" => "SearchDoubleField",
        "currency" => "SearchMultiSelectField",
        "custStage" => "SearchMultiSelectField",
        "custStatus" => "SearchMultiSelectField",
        "dateClosed" => "SearchDateField",
        "dateCreated" => "SearchDateField",
        "daysOverdue" => "SearchLongField",
        "defaultOrderPriority" => "SearchDoubleField",
        "defaultTaxReg" => "SearchMultiSelectField",
        "defaultTaxRegText" => "SearchStringField",
        "depositBalance" => "SearchDoubleField",
        "deptBought" => "SearchMultiSelectField",
        "drAccount" => "SearchMultiSelectField",
        "email" => "SearchStringField",
        "emailPreference" => "SearchEnumMultiSelectField",
        "emailTransactions" => "SearchBooleanField",
        "endDate" => "SearchDateField",
        "entityId" => "SearchStringField",
        "entityStatus" => "SearchMultiSelectField",
        "estimatedBudget" => "SearchDoubleField",
        "explicitConversion" => "SearchBooleanField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "fax" => "SearchStringField",
        "faxTransactions" => "SearchBooleanField",
        "firstName" => "SearchStringField",
        "firstOrderDate" => "SearchDateField",
        "firstSaleDate" => "SearchDateField",
        "fxAccount" => "SearchMultiSelectField",
        "fxBalance" => "SearchDoubleField",
        "fxConsolBalance" => "SearchDoubleField",
        "fxConsolUnbilledOrders" => "SearchDoubleField",
        "fxUnbilledOrders" => "SearchDoubleField",
        "giveAccess" => "SearchBooleanField",
        "globalSubscriptionStatus" => "SearchEnumMultiSelectField",
        "group" => "SearchMultiSelectField",
        "groupPricingLevel" => "SearchMultiSelectField",
        "hasDuplicates" => "SearchBooleanField",
        "image" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isBudgetApproved" => "SearchBooleanField",
        "isDefaultBilling" => "SearchBooleanField",
        "isDefaultShipping" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "isPerson" => "SearchBooleanField",
        "isReportedLead" => "SearchBooleanField",
        "isShipAddress" => "SearchBooleanField",
        "itemPricingLevel" => "SearchMultiSelectField",
        "itemPricingUnitPrice" => "SearchDoubleField",
        "itemsBought" => "SearchMultiSelectField",
        "itemsOrdered" => "SearchMultiSelectField",
        "language" => "SearchEnumMultiSelectField",
        "lastModifiedDate" => "SearchDateField",
        "lastName" => "SearchStringField",
        "lastOrderDate" => "SearchDateField",
        "lastSaleDate" => "SearchDateField",
        "leadDate" => "SearchDateField",
        "leadSource" => "SearchMultiSelectField",
        "level" => "SearchEnumMultiSelectField",
        "locationBought" => "SearchMultiSelectField",
        "manualCreditHold" => "SearchBooleanField",
        "merchantAccount" => "SearchMultiSelectField",
        "middleName" => "SearchStringField",
        "monthlyClosing" => "SearchEnumMultiSelectField",
        "onCreditHold" => "SearchBooleanField",
        "orderedAmount" => "SearchDoubleField",
        "orderedDate" => "SearchDateField",
        "otherRelationships" => "SearchEnumMultiSelectField",
        "overdueBalance" => "SearchDoubleField",
        "parent" => "SearchMultiSelectField",
        "parentItemsBought" => "SearchMultiSelectField",
        "parentItemsOrdered" => "SearchMultiSelectField",
        "partner" => "SearchMultiSelectField",
        "partnerContribution" => "SearchLongField",
        "partnerRole" => "SearchMultiSelectField",
        "partnerTeamMember" => "SearchMultiSelectField",
        "pec" => "SearchStringField",
        "permission" => "SearchEnumMultiSelectField",
        "phone" => "SearchStringField",
        "phoneticName" => "SearchStringField",
        "priceLevel" => "SearchMultiSelectField",
        "pricingGroup" => "SearchMultiSelectField",
        "pricingItem" => "SearchMultiSelectField",
        "printTransactions" => "SearchBooleanField",
        "prospectDate" => "SearchDateField",
        "pstExempt" => "SearchBooleanField",
        "receivablesAccount" => "SearchMultiSelectField",
        "reminderDate" => "SearchDateField",
        "resaleNumber" => "SearchStringField",
        "role" => "SearchMultiSelectField",
        "salesReadiness" => "SearchMultiSelectField",
        "salesRep" => "SearchMultiSelectField",
        "salesTeamMember" => "SearchMultiSelectField",
        "salesTeamRole" => "SearchMultiSelectField",
        "salutation" => "SearchStringField",
        "shipAddress" => "SearchStringField",
        "shipComplete" => "SearchBooleanField",
        "shippingItem" => "SearchMultiSelectField",
        "sourceSite" => "SearchMultiSelectField",
        "sourceSiteId" => "SearchMultiSelectField",
        "stage" => "SearchMultiSelectField",
        "startDate" => "SearchDateField",
        "state" => "SearchStringField",
        "subsidBought" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "taxable" => "SearchBooleanField",
        "terms" => "SearchMultiSelectField",
        "territory" => "SearchMultiSelectField",
        "title" => "SearchStringField",
        "unbilledOrders" => "SearchDoubleField",
        "url" => "SearchStringField",
        "vatRegNumber" => "SearchStringField",
        "webLead" => "SearchBooleanField",
        "zipCode" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchStringField $accountNumber
     * @return OriginatingLeadSearchBasic
     */
    public function setAccountNumber(SearchStringField $accountNumber): OriginatingLeadSearchBasic
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAccountNumber(): SearchStringField
    {
        return $this->accountNumber;
    }

    /**
     * @param SearchStringField $address
     * @return OriginatingLeadSearchBasic
     */
    public function setAddress(SearchStringField $address): OriginatingLeadSearchBasic
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAddress(): SearchStringField
    {
        return $this->address;
    }

    /**
     * @param SearchStringField $addressee
     * @return OriginatingLeadSearchBasic
     */
    public function setAddressee(SearchStringField $addressee): OriginatingLeadSearchBasic
    {
        $this->addressee = $addressee;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAddressee(): SearchStringField
    {
        return $this->addressee;
    }

    /**
     * @param SearchStringField $addressLabel
     * @return OriginatingLeadSearchBasic
     */
    public function setAddressLabel(SearchStringField $addressLabel): OriginatingLeadSearchBasic
    {
        $this->addressLabel = $addressLabel;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAddressLabel(): SearchStringField
    {
        return $this->addressLabel;
    }

    /**
     * @param SearchStringField $addressPhone
     * @return OriginatingLeadSearchBasic
     */
    public function setAddressPhone(SearchStringField $addressPhone): OriginatingLeadSearchBasic
    {
        $this->addressPhone = $addressPhone;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAddressPhone(): SearchStringField
    {
        return $this->addressPhone;
    }

    /**
     * @param SearchMultiSelectField $assignedSite
     * @return OriginatingLeadSearchBasic
     */
    public function setAssignedSite(SearchMultiSelectField $assignedSite): OriginatingLeadSearchBasic
    {
        $this->assignedSite = $assignedSite;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAssignedSite(): SearchMultiSelectField
    {
        return $this->assignedSite;
    }

    /**
     * @param SearchMultiSelectField $assignedSiteId
     * @return OriginatingLeadSearchBasic
     */
    public function setAssignedSiteId(SearchMultiSelectField $assignedSiteId): OriginatingLeadSearchBasic
    {
        $this->assignedSiteId = $assignedSiteId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAssignedSiteId(): SearchMultiSelectField
    {
        return $this->assignedSiteId;
    }

    /**
     * @param SearchStringField $attention
     * @return OriginatingLeadSearchBasic
     */
    public function setAttention(SearchStringField $attention): OriginatingLeadSearchBasic
    {
        $this->attention = $attention;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAttention(): SearchStringField
    {
        return $this->attention;
    }

    /**
     * @param SearchBooleanField $availableOffline
     * @return OriginatingLeadSearchBasic
     */
    public function setAvailableOffline(SearchBooleanField $availableOffline): OriginatingLeadSearchBasic
    {
        $this->availableOffline = $availableOffline;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAvailableOffline(): SearchBooleanField
    {
        return $this->availableOffline;
    }

    /**
     * @param SearchDoubleField $balance
     * @return OriginatingLeadSearchBasic
     */
    public function setBalance(SearchDoubleField $balance): OriginatingLeadSearchBasic
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBalance(): SearchDoubleField
    {
        return $this->balance;
    }

    /**
     * @param SearchStringField $billAddress
     * @return OriginatingLeadSearchBasic
     */
    public function setBillAddress(SearchStringField $billAddress): OriginatingLeadSearchBasic
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
     * @param SearchDoubleField $boughtAmount
     * @return OriginatingLeadSearchBasic
     */
    public function setBoughtAmount(SearchDoubleField $boughtAmount): OriginatingLeadSearchBasic
    {
        $this->boughtAmount = $boughtAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBoughtAmount(): SearchDoubleField
    {
        return $this->boughtAmount;
    }

    /**
     * @param SearchDateField $boughtDate
     * @return OriginatingLeadSearchBasic
     */
    public function setBoughtDate(SearchDateField $boughtDate): OriginatingLeadSearchBasic
    {
        $this->boughtDate = $boughtDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getBoughtDate(): SearchDateField
    {
        return $this->boughtDate;
    }

    /**
     * @param SearchMultiSelectField $buyingReason
     * @return OriginatingLeadSearchBasic
     */
    public function setBuyingReason(SearchMultiSelectField $buyingReason): OriginatingLeadSearchBasic
    {
        $this->buyingReason = $buyingReason;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBuyingReason(): SearchMultiSelectField
    {
        return $this->buyingReason;
    }

    /**
     * @param SearchMultiSelectField $buyingTimeFrame
     * @return OriginatingLeadSearchBasic
     */
    public function setBuyingTimeFrame(SearchMultiSelectField $buyingTimeFrame): OriginatingLeadSearchBasic
    {
        $this->buyingTimeFrame = $buyingTimeFrame;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBuyingTimeFrame(): SearchMultiSelectField
    {
        return $this->buyingTimeFrame;
    }

    /**
     * @param SearchMultiSelectField $category
     * @return OriginatingLeadSearchBasic
     */
    public function setCategory(SearchMultiSelectField $category): OriginatingLeadSearchBasic
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
     * @param SearchStringField $ccCustomerCode
     * @return OriginatingLeadSearchBasic
     */
    public function setCcCustomerCode(SearchStringField $ccCustomerCode): OriginatingLeadSearchBasic
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
     * @param SearchBooleanField $ccDefault
     * @return OriginatingLeadSearchBasic
     */
    public function setCcDefault(SearchBooleanField $ccDefault): OriginatingLeadSearchBasic
    {
        $this->ccDefault = $ccDefault;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCcDefault(): SearchBooleanField
    {
        return $this->ccDefault;
    }

    /**
     * @param SearchDateField $ccExpDate
     * @return OriginatingLeadSearchBasic
     */
    public function setCcExpDate(SearchDateField $ccExpDate): OriginatingLeadSearchBasic
    {
        $this->ccExpDate = $ccExpDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCcExpDate(): SearchDateField
    {
        return $this->ccExpDate;
    }

    /**
     * @param SearchStringField $ccHolderName
     * @return OriginatingLeadSearchBasic
     */
    public function setCcHolderName(SearchStringField $ccHolderName): OriginatingLeadSearchBasic
    {
        $this->ccHolderName = $ccHolderName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCcHolderName(): SearchStringField
    {
        return $this->ccHolderName;
    }

    /**
     * @param SearchStringField $ccNumber
     * @return OriginatingLeadSearchBasic
     */
    public function setCcNumber(SearchStringField $ccNumber): OriginatingLeadSearchBasic
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
     * @param SearchMultiSelectField $ccState
     * @return OriginatingLeadSearchBasic
     */
    public function setCcState(SearchMultiSelectField $ccState): OriginatingLeadSearchBasic
    {
        $this->ccState = $ccState;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCcState(): SearchMultiSelectField
    {
        return $this->ccState;
    }

    /**
     * @param SearchDateField $ccStateFrom
     * @return OriginatingLeadSearchBasic
     */
    public function setCcStateFrom(SearchDateField $ccStateFrom): OriginatingLeadSearchBasic
    {
        $this->ccStateFrom = $ccStateFrom;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCcStateFrom(): SearchDateField
    {
        return $this->ccStateFrom;
    }

    /**
     * @param SearchMultiSelectField $ccType
     * @return OriginatingLeadSearchBasic
     */
    public function setCcType(SearchMultiSelectField $ccType): OriginatingLeadSearchBasic
    {
        $this->ccType = $ccType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCcType(): SearchMultiSelectField
    {
        return $this->ccType;
    }

    /**
     * @param SearchStringField $city
     * @return OriginatingLeadSearchBasic
     */
    public function setCity(SearchStringField $city): OriginatingLeadSearchBasic
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCity(): SearchStringField
    {
        return $this->city;
    }

    /**
     * @param SearchMultiSelectField $classBought
     * @return OriginatingLeadSearchBasic
     */
    public function setClassBought(SearchMultiSelectField $classBought): OriginatingLeadSearchBasic
    {
        $this->classBought = $classBought;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getClassBought(): SearchMultiSelectField
    {
        return $this->classBought;
    }

    /**
     * @param SearchStringField $comments
     * @return OriginatingLeadSearchBasic
     */
    public function setComments(SearchStringField $comments): OriginatingLeadSearchBasic
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getComments(): SearchStringField
    {
        return $this->comments;
    }

    /**
     * @param SearchStringField $companyName
     * @return OriginatingLeadSearchBasic
     */
    public function setCompanyName(SearchStringField $companyName): OriginatingLeadSearchBasic
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCompanyName(): SearchStringField
    {
        return $this->companyName;
    }

    /**
     * @param SearchDoubleField $consolBalance
     * @return OriginatingLeadSearchBasic
     */
    public function setConsolBalance(SearchDoubleField $consolBalance): OriginatingLeadSearchBasic
    {
        $this->consolBalance = $consolBalance;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getConsolBalance(): SearchDoubleField
    {
        return $this->consolBalance;
    }

    /**
     * @param SearchLongField $consolDaysOverdue
     * @return OriginatingLeadSearchBasic
     */
    public function setConsolDaysOverdue(SearchLongField $consolDaysOverdue): OriginatingLeadSearchBasic
    {
        $this->consolDaysOverdue = $consolDaysOverdue;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getConsolDaysOverdue(): SearchLongField
    {
        return $this->consolDaysOverdue;
    }

    /**
     * @param SearchDoubleField $consolDepositBalance
     * @return OriginatingLeadSearchBasic
     */
    public function setConsolDepositBalance(SearchDoubleField $consolDepositBalance): OriginatingLeadSearchBasic
    {
        $this->consolDepositBalance = $consolDepositBalance;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getConsolDepositBalance(): SearchDoubleField
    {
        return $this->consolDepositBalance;
    }

    /**
     * @param SearchDoubleField $consolOverdueBalance
     * @return OriginatingLeadSearchBasic
     */
    public function setConsolOverdueBalance(SearchDoubleField $consolOverdueBalance): OriginatingLeadSearchBasic
    {
        $this->consolOverdueBalance = $consolOverdueBalance;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getConsolOverdueBalance(): SearchDoubleField
    {
        return $this->consolOverdueBalance;
    }

    /**
     * @param SearchDoubleField $consolUnbilledOrders
     * @return OriginatingLeadSearchBasic
     */
    public function setConsolUnbilledOrders(SearchDoubleField $consolUnbilledOrders): OriginatingLeadSearchBasic
    {
        $this->consolUnbilledOrders = $consolUnbilledOrders;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getConsolUnbilledOrders(): SearchDoubleField
    {
        return $this->consolUnbilledOrders;
    }

    /**
     * @param SearchStringField $contact
     * @return OriginatingLeadSearchBasic
     */
    public function setContact(SearchStringField $contact): OriginatingLeadSearchBasic
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getContact(): SearchStringField
    {
        return $this->contact;
    }

    /**
     * @param SearchLongField $contribution
     * @return OriginatingLeadSearchBasic
     */
    public function setContribution(SearchLongField $contribution): OriginatingLeadSearchBasic
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
     * @param SearchDateField $conversionDate
     * @return OriginatingLeadSearchBasic
     */
    public function setConversionDate(SearchDateField $conversionDate): OriginatingLeadSearchBasic
    {
        $this->conversionDate = $conversionDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getConversionDate(): SearchDateField
    {
        return $this->conversionDate;
    }

    /**
     * @param SearchEnumMultiSelectField $country
     * @return OriginatingLeadSearchBasic
     */
    public function setCountry(SearchEnumMultiSelectField $country): OriginatingLeadSearchBasic
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCountry(): SearchEnumMultiSelectField
    {
        return $this->country;
    }

    /**
     * @param SearchStringField $county
     * @return OriginatingLeadSearchBasic
     */
    public function setCounty(SearchStringField $county): OriginatingLeadSearchBasic
    {
        $this->county = $county;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCounty(): SearchStringField
    {
        return $this->county;
    }

    /**
     * @param SearchEnumMultiSelectField $creditHold
     * @return OriginatingLeadSearchBasic
     */
    public function setCreditHold(SearchEnumMultiSelectField $creditHold): OriginatingLeadSearchBasic
    {
        $this->creditHold = $creditHold;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCreditHold(): SearchEnumMultiSelectField
    {
        return $this->creditHold;
    }

    /**
     * @param SearchBooleanField $creditHoldOverride
     * @return OriginatingLeadSearchBasic
     */
    public function setCreditHoldOverride(SearchBooleanField $creditHoldOverride): OriginatingLeadSearchBasic
    {
        $this->creditHoldOverride = $creditHoldOverride;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCreditHoldOverride(): SearchBooleanField
    {
        return $this->creditHoldOverride;
    }

    /**
     * @param SearchDoubleField $creditLimit
     * @return OriginatingLeadSearchBasic
     */
    public function setCreditLimit(SearchDoubleField $creditLimit): OriginatingLeadSearchBasic
    {
        $this->creditLimit = $creditLimit;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCreditLimit(): SearchDoubleField
    {
        return $this->creditLimit;
    }

    /**
     * @param SearchMultiSelectField $currency
     * @return OriginatingLeadSearchBasic
     */
    public function setCurrency(SearchMultiSelectField $currency): OriginatingLeadSearchBasic
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
     * @param SearchMultiSelectField $custStage
     * @return OriginatingLeadSearchBasic
     */
    public function setCustStage(SearchMultiSelectField $custStage): OriginatingLeadSearchBasic
    {
        $this->custStage = $custStage;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustStage(): SearchMultiSelectField
    {
        return $this->custStage;
    }

    /**
     * @param SearchMultiSelectField $custStatus
     * @return OriginatingLeadSearchBasic
     */
    public function setCustStatus(SearchMultiSelectField $custStatus): OriginatingLeadSearchBasic
    {
        $this->custStatus = $custStatus;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustStatus(): SearchMultiSelectField
    {
        return $this->custStatus;
    }

    /**
     * @param SearchDateField $dateClosed
     * @return OriginatingLeadSearchBasic
     */
    public function setDateClosed(SearchDateField $dateClosed): OriginatingLeadSearchBasic
    {
        $this->dateClosed = $dateClosed;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateClosed(): SearchDateField
    {
        return $this->dateClosed;
    }

    /**
     * @param SearchDateField $dateCreated
     * @return OriginatingLeadSearchBasic
     */
    public function setDateCreated(SearchDateField $dateCreated): OriginatingLeadSearchBasic
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
     * @param SearchLongField $daysOverdue
     * @return OriginatingLeadSearchBasic
     */
    public function setDaysOverdue(SearchLongField $daysOverdue): OriginatingLeadSearchBasic
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
     * @param SearchDoubleField $defaultOrderPriority
     * @return OriginatingLeadSearchBasic
     */
    public function setDefaultOrderPriority(SearchDoubleField $defaultOrderPriority): OriginatingLeadSearchBasic
    {
        $this->defaultOrderPriority = $defaultOrderPriority;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDefaultOrderPriority(): SearchDoubleField
    {
        return $this->defaultOrderPriority;
    }

    /**
     * @param SearchMultiSelectField $defaultTaxReg
     * @return OriginatingLeadSearchBasic
     */
    public function setDefaultTaxReg(SearchMultiSelectField $defaultTaxReg): OriginatingLeadSearchBasic
    {
        $this->defaultTaxReg = $defaultTaxReg;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDefaultTaxReg(): SearchMultiSelectField
    {
        return $this->defaultTaxReg;
    }

    /**
     * @param SearchStringField $defaultTaxRegText
     * @return OriginatingLeadSearchBasic
     */
    public function setDefaultTaxRegText(SearchStringField $defaultTaxRegText): OriginatingLeadSearchBasic
    {
        $this->defaultTaxRegText = $defaultTaxRegText;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDefaultTaxRegText(): SearchStringField
    {
        return $this->defaultTaxRegText;
    }

    /**
     * @param SearchDoubleField $depositBalance
     * @return OriginatingLeadSearchBasic
     */
    public function setDepositBalance(SearchDoubleField $depositBalance): OriginatingLeadSearchBasic
    {
        $this->depositBalance = $depositBalance;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDepositBalance(): SearchDoubleField
    {
        return $this->depositBalance;
    }

    /**
     * @param SearchMultiSelectField $deptBought
     * @return OriginatingLeadSearchBasic
     */
    public function setDeptBought(SearchMultiSelectField $deptBought): OriginatingLeadSearchBasic
    {
        $this->deptBought = $deptBought;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDeptBought(): SearchMultiSelectField
    {
        return $this->deptBought;
    }

    /**
     * @param SearchMultiSelectField $drAccount
     * @return OriginatingLeadSearchBasic
     */
    public function setDrAccount(SearchMultiSelectField $drAccount): OriginatingLeadSearchBasic
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
     * @param SearchStringField $email
     * @return OriginatingLeadSearchBasic
     */
    public function setEmail(SearchStringField $email): OriginatingLeadSearchBasic
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
     * @param SearchEnumMultiSelectField $emailPreference
     * @return OriginatingLeadSearchBasic
     */
    public function setEmailPreference(SearchEnumMultiSelectField $emailPreference): OriginatingLeadSearchBasic
    {
        $this->emailPreference = $emailPreference;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getEmailPreference(): SearchEnumMultiSelectField
    {
        return $this->emailPreference;
    }

    /**
     * @param SearchBooleanField $emailTransactions
     * @return OriginatingLeadSearchBasic
     */
    public function setEmailTransactions(SearchBooleanField $emailTransactions): OriginatingLeadSearchBasic
    {
        $this->emailTransactions = $emailTransactions;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getEmailTransactions(): SearchBooleanField
    {
        return $this->emailTransactions;
    }

    /**
     * @param SearchDateField $endDate
     * @return OriginatingLeadSearchBasic
     */
    public function setEndDate(SearchDateField $endDate): OriginatingLeadSearchBasic
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
     * @param SearchStringField $entityId
     * @return OriginatingLeadSearchBasic
     */
    public function setEntityId(SearchStringField $entityId): OriginatingLeadSearchBasic
    {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEntityId(): SearchStringField
    {
        return $this->entityId;
    }

    /**
     * @param SearchMultiSelectField $entityStatus
     * @return OriginatingLeadSearchBasic
     */
    public function setEntityStatus(SearchMultiSelectField $entityStatus): OriginatingLeadSearchBasic
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
     * @param SearchDoubleField $estimatedBudget
     * @return OriginatingLeadSearchBasic
     */
    public function setEstimatedBudget(SearchDoubleField $estimatedBudget): OriginatingLeadSearchBasic
    {
        $this->estimatedBudget = $estimatedBudget;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedBudget(): SearchDoubleField
    {
        return $this->estimatedBudget;
    }

    /**
     * @param SearchBooleanField $explicitConversion
     * @return OriginatingLeadSearchBasic
     */
    public function setExplicitConversion(SearchBooleanField $explicitConversion): OriginatingLeadSearchBasic
    {
        $this->explicitConversion = $explicitConversion;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getExplicitConversion(): SearchBooleanField
    {
        return $this->explicitConversion;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return OriginatingLeadSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): OriginatingLeadSearchBasic
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
     * @return OriginatingLeadSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): OriginatingLeadSearchBasic
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
     * @param SearchStringField $fax
     * @return OriginatingLeadSearchBasic
     */
    public function setFax(SearchStringField $fax): OriginatingLeadSearchBasic
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getFax(): SearchStringField
    {
        return $this->fax;
    }

    /**
     * @param SearchBooleanField $faxTransactions
     * @return OriginatingLeadSearchBasic
     */
    public function setFaxTransactions(SearchBooleanField $faxTransactions): OriginatingLeadSearchBasic
    {
        $this->faxTransactions = $faxTransactions;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getFaxTransactions(): SearchBooleanField
    {
        return $this->faxTransactions;
    }

    /**
     * @param SearchStringField $firstName
     * @return OriginatingLeadSearchBasic
     */
    public function setFirstName(SearchStringField $firstName): OriginatingLeadSearchBasic
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getFirstName(): SearchStringField
    {
        return $this->firstName;
    }

    /**
     * @param SearchDateField $firstOrderDate
     * @return OriginatingLeadSearchBasic
     */
    public function setFirstOrderDate(SearchDateField $firstOrderDate): OriginatingLeadSearchBasic
    {
        $this->firstOrderDate = $firstOrderDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getFirstOrderDate(): SearchDateField
    {
        return $this->firstOrderDate;
    }

    /**
     * @param SearchDateField $firstSaleDate
     * @return OriginatingLeadSearchBasic
     */
    public function setFirstSaleDate(SearchDateField $firstSaleDate): OriginatingLeadSearchBasic
    {
        $this->firstSaleDate = $firstSaleDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getFirstSaleDate(): SearchDateField
    {
        return $this->firstSaleDate;
    }

    /**
     * @param SearchMultiSelectField $fxAccount
     * @return OriginatingLeadSearchBasic
     */
    public function setFxAccount(SearchMultiSelectField $fxAccount): OriginatingLeadSearchBasic
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
     * @param SearchDoubleField $fxBalance
     * @return OriginatingLeadSearchBasic
     */
    public function setFxBalance(SearchDoubleField $fxBalance): OriginatingLeadSearchBasic
    {
        $this->fxBalance = $fxBalance;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxBalance(): SearchDoubleField
    {
        return $this->fxBalance;
    }

    /**
     * @param SearchDoubleField $fxConsolBalance
     * @return OriginatingLeadSearchBasic
     */
    public function setFxConsolBalance(SearchDoubleField $fxConsolBalance): OriginatingLeadSearchBasic
    {
        $this->fxConsolBalance = $fxConsolBalance;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxConsolBalance(): SearchDoubleField
    {
        return $this->fxConsolBalance;
    }

    /**
     * @param SearchDoubleField $fxConsolUnbilledOrders
     * @return OriginatingLeadSearchBasic
     */
    public function setFxConsolUnbilledOrders(SearchDoubleField $fxConsolUnbilledOrders): OriginatingLeadSearchBasic
    {
        $this->fxConsolUnbilledOrders = $fxConsolUnbilledOrders;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxConsolUnbilledOrders(): SearchDoubleField
    {
        return $this->fxConsolUnbilledOrders;
    }

    /**
     * @param SearchDoubleField $fxUnbilledOrders
     * @return OriginatingLeadSearchBasic
     */
    public function setFxUnbilledOrders(SearchDoubleField $fxUnbilledOrders): OriginatingLeadSearchBasic
    {
        $this->fxUnbilledOrders = $fxUnbilledOrders;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxUnbilledOrders(): SearchDoubleField
    {
        return $this->fxUnbilledOrders;
    }

    /**
     * @param SearchBooleanField $giveAccess
     * @return OriginatingLeadSearchBasic
     */
    public function setGiveAccess(SearchBooleanField $giveAccess): OriginatingLeadSearchBasic
    {
        $this->giveAccess = $giveAccess;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getGiveAccess(): SearchBooleanField
    {
        return $this->giveAccess;
    }

    /**
     * @param SearchEnumMultiSelectField $globalSubscriptionStatus
     * @return OriginatingLeadSearchBasic
     */
    public function setGlobalSubscriptionStatus(SearchEnumMultiSelectField $globalSubscriptionStatus): OriginatingLeadSearchBasic
    {
        $this->globalSubscriptionStatus = $globalSubscriptionStatus;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getGlobalSubscriptionStatus(): SearchEnumMultiSelectField
    {
        return $this->globalSubscriptionStatus;
    }

    /**
     * @param SearchMultiSelectField $group
     * @return OriginatingLeadSearchBasic
     */
    public function setGroup(SearchMultiSelectField $group): OriginatingLeadSearchBasic
    {
        $this->group = $group;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getGroup(): SearchMultiSelectField
    {
        return $this->group;
    }

    /**
     * @param SearchMultiSelectField $groupPricingLevel
     * @return OriginatingLeadSearchBasic
     */
    public function setGroupPricingLevel(SearchMultiSelectField $groupPricingLevel): OriginatingLeadSearchBasic
    {
        $this->groupPricingLevel = $groupPricingLevel;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getGroupPricingLevel(): SearchMultiSelectField
    {
        return $this->groupPricingLevel;
    }

    /**
     * @param SearchBooleanField $hasDuplicates
     * @return OriginatingLeadSearchBasic
     */
    public function setHasDuplicates(SearchBooleanField $hasDuplicates): OriginatingLeadSearchBasic
    {
        $this->hasDuplicates = $hasDuplicates;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getHasDuplicates(): SearchBooleanField
    {
        return $this->hasDuplicates;
    }

    /**
     * @param SearchStringField $image
     * @return OriginatingLeadSearchBasic
     */
    public function setImage(SearchStringField $image): OriginatingLeadSearchBasic
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getImage(): SearchStringField
    {
        return $this->image;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return OriginatingLeadSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): OriginatingLeadSearchBasic
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
     * @return OriginatingLeadSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): OriginatingLeadSearchBasic
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
     * @param SearchBooleanField $isBudgetApproved
     * @return OriginatingLeadSearchBasic
     */
    public function setIsBudgetApproved(SearchBooleanField $isBudgetApproved): OriginatingLeadSearchBasic
    {
        $this->isBudgetApproved = $isBudgetApproved;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsBudgetApproved(): SearchBooleanField
    {
        return $this->isBudgetApproved;
    }

    /**
     * @param SearchBooleanField $isDefaultBilling
     * @return OriginatingLeadSearchBasic
     */
    public function setIsDefaultBilling(SearchBooleanField $isDefaultBilling): OriginatingLeadSearchBasic
    {
        $this->isDefaultBilling = $isDefaultBilling;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsDefaultBilling(): SearchBooleanField
    {
        return $this->isDefaultBilling;
    }

    /**
     * @param SearchBooleanField $isDefaultShipping
     * @return OriginatingLeadSearchBasic
     */
    public function setIsDefaultShipping(SearchBooleanField $isDefaultShipping): OriginatingLeadSearchBasic
    {
        $this->isDefaultShipping = $isDefaultShipping;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsDefaultShipping(): SearchBooleanField
    {
        return $this->isDefaultShipping;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return OriginatingLeadSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): OriginatingLeadSearchBasic
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
     * @param SearchBooleanField $isPerson
     * @return OriginatingLeadSearchBasic
     */
    public function setIsPerson(SearchBooleanField $isPerson): OriginatingLeadSearchBasic
    {
        $this->isPerson = $isPerson;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsPerson(): SearchBooleanField
    {
        return $this->isPerson;
    }

    /**
     * @param SearchBooleanField $isReportedLead
     * @return OriginatingLeadSearchBasic
     */
    public function setIsReportedLead(SearchBooleanField $isReportedLead): OriginatingLeadSearchBasic
    {
        $this->isReportedLead = $isReportedLead;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsReportedLead(): SearchBooleanField
    {
        return $this->isReportedLead;
    }

    /**
     * @param SearchBooleanField $isShipAddress
     * @return OriginatingLeadSearchBasic
     */
    public function setIsShipAddress(SearchBooleanField $isShipAddress): OriginatingLeadSearchBasic
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
     * @param SearchMultiSelectField $itemPricingLevel
     * @return OriginatingLeadSearchBasic
     */
    public function setItemPricingLevel(SearchMultiSelectField $itemPricingLevel): OriginatingLeadSearchBasic
    {
        $this->itemPricingLevel = $itemPricingLevel;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItemPricingLevel(): SearchMultiSelectField
    {
        return $this->itemPricingLevel;
    }

    /**
     * @param SearchDoubleField $itemPricingUnitPrice
     * @return OriginatingLeadSearchBasic
     */
    public function setItemPricingUnitPrice(SearchDoubleField $itemPricingUnitPrice): OriginatingLeadSearchBasic
    {
        $this->itemPricingUnitPrice = $itemPricingUnitPrice;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getItemPricingUnitPrice(): SearchDoubleField
    {
        return $this->itemPricingUnitPrice;
    }

    /**
     * @param SearchMultiSelectField $itemsBought
     * @return OriginatingLeadSearchBasic
     */
    public function setItemsBought(SearchMultiSelectField $itemsBought): OriginatingLeadSearchBasic
    {
        $this->itemsBought = $itemsBought;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItemsBought(): SearchMultiSelectField
    {
        return $this->itemsBought;
    }

    /**
     * @param SearchMultiSelectField $itemsOrdered
     * @return OriginatingLeadSearchBasic
     */
    public function setItemsOrdered(SearchMultiSelectField $itemsOrdered): OriginatingLeadSearchBasic
    {
        $this->itemsOrdered = $itemsOrdered;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItemsOrdered(): SearchMultiSelectField
    {
        return $this->itemsOrdered;
    }

    /**
     * @param SearchEnumMultiSelectField $language
     * @return OriginatingLeadSearchBasic
     */
    public function setLanguage(SearchEnumMultiSelectField $language): OriginatingLeadSearchBasic
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLanguage(): SearchEnumMultiSelectField
    {
        return $this->language;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return OriginatingLeadSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): OriginatingLeadSearchBasic
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
     * @param SearchStringField $lastName
     * @return OriginatingLeadSearchBasic
     */
    public function setLastName(SearchStringField $lastName): OriginatingLeadSearchBasic
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getLastName(): SearchStringField
    {
        return $this->lastName;
    }

    /**
     * @param SearchDateField $lastOrderDate
     * @return OriginatingLeadSearchBasic
     */
    public function setLastOrderDate(SearchDateField $lastOrderDate): OriginatingLeadSearchBasic
    {
        $this->lastOrderDate = $lastOrderDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastOrderDate(): SearchDateField
    {
        return $this->lastOrderDate;
    }

    /**
     * @param SearchDateField $lastSaleDate
     * @return OriginatingLeadSearchBasic
     */
    public function setLastSaleDate(SearchDateField $lastSaleDate): OriginatingLeadSearchBasic
    {
        $this->lastSaleDate = $lastSaleDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastSaleDate(): SearchDateField
    {
        return $this->lastSaleDate;
    }

    /**
     * @param SearchDateField $leadDate
     * @return OriginatingLeadSearchBasic
     */
    public function setLeadDate(SearchDateField $leadDate): OriginatingLeadSearchBasic
    {
        $this->leadDate = $leadDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLeadDate(): SearchDateField
    {
        return $this->leadDate;
    }

    /**
     * @param SearchMultiSelectField $leadSource
     * @return OriginatingLeadSearchBasic
     */
    public function setLeadSource(SearchMultiSelectField $leadSource): OriginatingLeadSearchBasic
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
     * @param SearchEnumMultiSelectField $level
     * @return OriginatingLeadSearchBasic
     */
    public function setLevel(SearchEnumMultiSelectField $level): OriginatingLeadSearchBasic
    {
        $this->level = $level;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLevel(): SearchEnumMultiSelectField
    {
        return $this->level;
    }

    /**
     * @param SearchMultiSelectField $locationBought
     * @return OriginatingLeadSearchBasic
     */
    public function setLocationBought(SearchMultiSelectField $locationBought): OriginatingLeadSearchBasic
    {
        $this->locationBought = $locationBought;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocationBought(): SearchMultiSelectField
    {
        return $this->locationBought;
    }

    /**
     * @param SearchBooleanField $manualCreditHold
     * @return OriginatingLeadSearchBasic
     */
    public function setManualCreditHold(SearchBooleanField $manualCreditHold): OriginatingLeadSearchBasic
    {
        $this->manualCreditHold = $manualCreditHold;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getManualCreditHold(): SearchBooleanField
    {
        return $this->manualCreditHold;
    }

    /**
     * @param SearchMultiSelectField $merchantAccount
     * @return OriginatingLeadSearchBasic
     */
    public function setMerchantAccount(SearchMultiSelectField $merchantAccount): OriginatingLeadSearchBasic
    {
        $this->merchantAccount = $merchantAccount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getMerchantAccount(): SearchMultiSelectField
    {
        return $this->merchantAccount;
    }

    /**
     * @param SearchStringField $middleName
     * @return OriginatingLeadSearchBasic
     */
    public function setMiddleName(SearchStringField $middleName): OriginatingLeadSearchBasic
    {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMiddleName(): SearchStringField
    {
        return $this->middleName;
    }

    /**
     * @param SearchEnumMultiSelectField $monthlyClosing
     * @return OriginatingLeadSearchBasic
     */
    public function setMonthlyClosing(SearchEnumMultiSelectField $monthlyClosing): OriginatingLeadSearchBasic
    {
        $this->monthlyClosing = $monthlyClosing;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getMonthlyClosing(): SearchEnumMultiSelectField
    {
        return $this->monthlyClosing;
    }

    /**
     * @param SearchBooleanField $onCreditHold
     * @return OriginatingLeadSearchBasic
     */
    public function setOnCreditHold(SearchBooleanField $onCreditHold): OriginatingLeadSearchBasic
    {
        $this->onCreditHold = $onCreditHold;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getOnCreditHold(): SearchBooleanField
    {
        return $this->onCreditHold;
    }

    /**
     * @param SearchDoubleField $orderedAmount
     * @return OriginatingLeadSearchBasic
     */
    public function setOrderedAmount(SearchDoubleField $orderedAmount): OriginatingLeadSearchBasic
    {
        $this->orderedAmount = $orderedAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getOrderedAmount(): SearchDoubleField
    {
        return $this->orderedAmount;
    }

    /**
     * @param SearchDateField $orderedDate
     * @return OriginatingLeadSearchBasic
     */
    public function setOrderedDate(SearchDateField $orderedDate): OriginatingLeadSearchBasic
    {
        $this->orderedDate = $orderedDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getOrderedDate(): SearchDateField
    {
        return $this->orderedDate;
    }

    /**
     * @param SearchEnumMultiSelectField $otherRelationships
     * @return OriginatingLeadSearchBasic
     */
    public function setOtherRelationships(SearchEnumMultiSelectField $otherRelationships): OriginatingLeadSearchBasic
    {
        $this->otherRelationships = $otherRelationships;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getOtherRelationships(): SearchEnumMultiSelectField
    {
        return $this->otherRelationships;
    }

    /**
     * @param SearchDoubleField $overdueBalance
     * @return OriginatingLeadSearchBasic
     */
    public function setOverdueBalance(SearchDoubleField $overdueBalance): OriginatingLeadSearchBasic
    {
        $this->overdueBalance = $overdueBalance;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getOverdueBalance(): SearchDoubleField
    {
        return $this->overdueBalance;
    }

    /**
     * @param SearchMultiSelectField $parent
     * @return OriginatingLeadSearchBasic
     */
    public function setParent(SearchMultiSelectField $parent): OriginatingLeadSearchBasic
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
     * @param SearchMultiSelectField $parentItemsBought
     * @return OriginatingLeadSearchBasic
     */
    public function setParentItemsBought(SearchMultiSelectField $parentItemsBought): OriginatingLeadSearchBasic
    {
        $this->parentItemsBought = $parentItemsBought;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getParentItemsBought(): SearchMultiSelectField
    {
        return $this->parentItemsBought;
    }

    /**
     * @param SearchMultiSelectField $parentItemsOrdered
     * @return OriginatingLeadSearchBasic
     */
    public function setParentItemsOrdered(SearchMultiSelectField $parentItemsOrdered): OriginatingLeadSearchBasic
    {
        $this->parentItemsOrdered = $parentItemsOrdered;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getParentItemsOrdered(): SearchMultiSelectField
    {
        return $this->parentItemsOrdered;
    }

    /**
     * @param SearchMultiSelectField $partner
     * @return OriginatingLeadSearchBasic
     */
    public function setPartner(SearchMultiSelectField $partner): OriginatingLeadSearchBasic
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
     * @return OriginatingLeadSearchBasic
     */
    public function setPartnerContribution(SearchLongField $partnerContribution): OriginatingLeadSearchBasic
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
     * @return OriginatingLeadSearchBasic
     */
    public function setPartnerRole(SearchMultiSelectField $partnerRole): OriginatingLeadSearchBasic
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
     * @return OriginatingLeadSearchBasic
     */
    public function setPartnerTeamMember(SearchMultiSelectField $partnerTeamMember): OriginatingLeadSearchBasic
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
     * @param SearchStringField $pec
     * @return OriginatingLeadSearchBasic
     */
    public function setPec(SearchStringField $pec): OriginatingLeadSearchBasic
    {
        $this->pec = $pec;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPec(): SearchStringField
    {
        return $this->pec;
    }

    /**
     * @param SearchEnumMultiSelectField $permission
     * @return OriginatingLeadSearchBasic
     */
    public function setPermission(SearchEnumMultiSelectField $permission): OriginatingLeadSearchBasic
    {
        $this->permission = $permission;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getPermission(): SearchEnumMultiSelectField
    {
        return $this->permission;
    }

    /**
     * @param SearchStringField $phone
     * @return OriginatingLeadSearchBasic
     */
    public function setPhone(SearchStringField $phone): OriginatingLeadSearchBasic
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPhone(): SearchStringField
    {
        return $this->phone;
    }

    /**
     * @param SearchStringField $phoneticName
     * @return OriginatingLeadSearchBasic
     */
    public function setPhoneticName(SearchStringField $phoneticName): OriginatingLeadSearchBasic
    {
        $this->phoneticName = $phoneticName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPhoneticName(): SearchStringField
    {
        return $this->phoneticName;
    }

    /**
     * @param SearchMultiSelectField $priceLevel
     * @return OriginatingLeadSearchBasic
     */
    public function setPriceLevel(SearchMultiSelectField $priceLevel): OriginatingLeadSearchBasic
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
     * @param SearchMultiSelectField $pricingGroup
     * @return OriginatingLeadSearchBasic
     */
    public function setPricingGroup(SearchMultiSelectField $pricingGroup): OriginatingLeadSearchBasic
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
     * @param SearchMultiSelectField $pricingItem
     * @return OriginatingLeadSearchBasic
     */
    public function setPricingItem(SearchMultiSelectField $pricingItem): OriginatingLeadSearchBasic
    {
        $this->pricingItem = $pricingItem;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPricingItem(): SearchMultiSelectField
    {
        return $this->pricingItem;
    }

    /**
     * @param SearchBooleanField $printTransactions
     * @return OriginatingLeadSearchBasic
     */
    public function setPrintTransactions(SearchBooleanField $printTransactions): OriginatingLeadSearchBasic
    {
        $this->printTransactions = $printTransactions;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPrintTransactions(): SearchBooleanField
    {
        return $this->printTransactions;
    }

    /**
     * @param SearchDateField $prospectDate
     * @return OriginatingLeadSearchBasic
     */
    public function setProspectDate(SearchDateField $prospectDate): OriginatingLeadSearchBasic
    {
        $this->prospectDate = $prospectDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getProspectDate(): SearchDateField
    {
        return $this->prospectDate;
    }

    /**
     * @param SearchBooleanField $pstExempt
     * @return OriginatingLeadSearchBasic
     */
    public function setPstExempt(SearchBooleanField $pstExempt): OriginatingLeadSearchBasic
    {
        $this->pstExempt = $pstExempt;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPstExempt(): SearchBooleanField
    {
        return $this->pstExempt;
    }

    /**
     * @param SearchMultiSelectField $receivablesAccount
     * @return OriginatingLeadSearchBasic
     */
    public function setReceivablesAccount(SearchMultiSelectField $receivablesAccount): OriginatingLeadSearchBasic
    {
        $this->receivablesAccount = $receivablesAccount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getReceivablesAccount(): SearchMultiSelectField
    {
        return $this->receivablesAccount;
    }

    /**
     * @param SearchDateField $reminderDate
     * @return OriginatingLeadSearchBasic
     */
    public function setReminderDate(SearchDateField $reminderDate): OriginatingLeadSearchBasic
    {
        $this->reminderDate = $reminderDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getReminderDate(): SearchDateField
    {
        return $this->reminderDate;
    }

    /**
     * @param SearchStringField $resaleNumber
     * @return OriginatingLeadSearchBasic
     */
    public function setResaleNumber(SearchStringField $resaleNumber): OriginatingLeadSearchBasic
    {
        $this->resaleNumber = $resaleNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getResaleNumber(): SearchStringField
    {
        return $this->resaleNumber;
    }

    /**
     * @param SearchMultiSelectField $role
     * @return OriginatingLeadSearchBasic
     */
    public function setRole(SearchMultiSelectField $role): OriginatingLeadSearchBasic
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRole(): SearchMultiSelectField
    {
        return $this->role;
    }

    /**
     * @param SearchMultiSelectField $salesReadiness
     * @return OriginatingLeadSearchBasic
     */
    public function setSalesReadiness(SearchMultiSelectField $salesReadiness): OriginatingLeadSearchBasic
    {
        $this->salesReadiness = $salesReadiness;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesReadiness(): SearchMultiSelectField
    {
        return $this->salesReadiness;
    }

    /**
     * @param SearchMultiSelectField $salesRep
     * @return OriginatingLeadSearchBasic
     */
    public function setSalesRep(SearchMultiSelectField $salesRep): OriginatingLeadSearchBasic
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
     * @return OriginatingLeadSearchBasic
     */
    public function setSalesTeamMember(SearchMultiSelectField $salesTeamMember): OriginatingLeadSearchBasic
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
     * @return OriginatingLeadSearchBasic
     */
    public function setSalesTeamRole(SearchMultiSelectField $salesTeamRole): OriginatingLeadSearchBasic
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
     * @param SearchStringField $salutation
     * @return OriginatingLeadSearchBasic
     */
    public function setSalutation(SearchStringField $salutation): OriginatingLeadSearchBasic
    {
        $this->salutation = $salutation;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getSalutation(): SearchStringField
    {
        return $this->salutation;
    }

    /**
     * @param SearchStringField $shipAddress
     * @return OriginatingLeadSearchBasic
     */
    public function setShipAddress(SearchStringField $shipAddress): OriginatingLeadSearchBasic
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
     * @param SearchBooleanField $shipComplete
     * @return OriginatingLeadSearchBasic
     */
    public function setShipComplete(SearchBooleanField $shipComplete): OriginatingLeadSearchBasic
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
     * @param SearchMultiSelectField $shippingItem
     * @return OriginatingLeadSearchBasic
     */
    public function setShippingItem(SearchMultiSelectField $shippingItem): OriginatingLeadSearchBasic
    {
        $this->shippingItem = $shippingItem;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getShippingItem(): SearchMultiSelectField
    {
        return $this->shippingItem;
    }

    /**
     * @param SearchMultiSelectField $sourceSite
     * @return OriginatingLeadSearchBasic
     */
    public function setSourceSite(SearchMultiSelectField $sourceSite): OriginatingLeadSearchBasic
    {
        $this->sourceSite = $sourceSite;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSourceSite(): SearchMultiSelectField
    {
        return $this->sourceSite;
    }

    /**
     * @param SearchMultiSelectField $sourceSiteId
     * @return OriginatingLeadSearchBasic
     */
    public function setSourceSiteId(SearchMultiSelectField $sourceSiteId): OriginatingLeadSearchBasic
    {
        $this->sourceSiteId = $sourceSiteId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSourceSiteId(): SearchMultiSelectField
    {
        return $this->sourceSiteId;
    }

    /**
     * @param SearchMultiSelectField $stage
     * @return OriginatingLeadSearchBasic
     */
    public function setStage(SearchMultiSelectField $stage): OriginatingLeadSearchBasic
    {
        $this->stage = $stage;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getStage(): SearchMultiSelectField
    {
        return $this->stage;
    }

    /**
     * @param SearchDateField $startDate
     * @return OriginatingLeadSearchBasic
     */
    public function setStartDate(SearchDateField $startDate): OriginatingLeadSearchBasic
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
     * @param SearchStringField $state
     * @return OriginatingLeadSearchBasic
     */
    public function setState(SearchStringField $state): OriginatingLeadSearchBasic
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getState(): SearchStringField
    {
        return $this->state;
    }

    /**
     * @param SearchMultiSelectField $subsidBought
     * @return OriginatingLeadSearchBasic
     */
    public function setSubsidBought(SearchMultiSelectField $subsidBought): OriginatingLeadSearchBasic
    {
        $this->subsidBought = $subsidBought;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidBought(): SearchMultiSelectField
    {
        return $this->subsidBought;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return OriginatingLeadSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): OriginatingLeadSearchBasic
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
     * @param SearchBooleanField $taxable
     * @return OriginatingLeadSearchBasic
     */
    public function setTaxable(SearchBooleanField $taxable): OriginatingLeadSearchBasic
    {
        $this->taxable = $taxable;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getTaxable(): SearchBooleanField
    {
        return $this->taxable;
    }

    /**
     * @param SearchMultiSelectField $terms
     * @return OriginatingLeadSearchBasic
     */
    public function setTerms(SearchMultiSelectField $terms): OriginatingLeadSearchBasic
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
     * @param SearchMultiSelectField $territory
     * @return OriginatingLeadSearchBasic
     */
    public function setTerritory(SearchMultiSelectField $territory): OriginatingLeadSearchBasic
    {
        $this->territory = $territory;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTerritory(): SearchMultiSelectField
    {
        return $this->territory;
    }

    /**
     * @param SearchStringField $title
     * @return OriginatingLeadSearchBasic
     */
    public function setTitle(SearchStringField $title): OriginatingLeadSearchBasic
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
     * @param SearchDoubleField $unbilledOrders
     * @return OriginatingLeadSearchBasic
     */
    public function setUnbilledOrders(SearchDoubleField $unbilledOrders): OriginatingLeadSearchBasic
    {
        $this->unbilledOrders = $unbilledOrders;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUnbilledOrders(): SearchDoubleField
    {
        return $this->unbilledOrders;
    }

    /**
     * @param SearchStringField $url
     * @return OriginatingLeadSearchBasic
     */
    public function setUrl(SearchStringField $url): OriginatingLeadSearchBasic
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getUrl(): SearchStringField
    {
        return $this->url;
    }

    /**
     * @param SearchStringField $vatRegNumber
     * @return OriginatingLeadSearchBasic
     */
    public function setVatRegNumber(SearchStringField $vatRegNumber): OriginatingLeadSearchBasic
    {
        $this->vatRegNumber = $vatRegNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getVatRegNumber(): SearchStringField
    {
        return $this->vatRegNumber;
    }

    /**
     * @param SearchBooleanField $webLead
     * @return OriginatingLeadSearchBasic
     */
    public function setWebLead(SearchBooleanField $webLead): OriginatingLeadSearchBasic
    {
        $this->webLead = $webLead;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getWebLead(): SearchBooleanField
    {
        return $this->webLead;
    }

    /**
     * @param SearchStringField $zipCode
     * @return OriginatingLeadSearchBasic
     */
    public function setZipCode(SearchStringField $zipCode): OriginatingLeadSearchBasic
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getZipCode(): SearchStringField
    {
        return $this->zipCode;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return OriginatingLeadSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): OriginatingLeadSearchBasic
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
