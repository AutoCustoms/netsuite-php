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

class CustomerSearchBasic extends SearchRecordBasic {
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
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $stage;

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
        "stage" => "SearchEnumMultiSelectField",
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
     * @return CustomerSearchBasic
     */
    public function setAccountNumber(SearchStringField $accountNumber): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setAddress(SearchStringField $address): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setAddressee(SearchStringField $addressee): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setAddressLabel(SearchStringField $addressLabel): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setAddressPhone(SearchStringField $addressPhone): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setAssignedSite(SearchMultiSelectField $assignedSite): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setAssignedSiteId(SearchMultiSelectField $assignedSiteId): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setAttention(SearchStringField $attention): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setAvailableOffline(SearchBooleanField $availableOffline): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setBalance(SearchDoubleField $balance): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setBillAddress(SearchStringField $billAddress): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setBoughtAmount(SearchDoubleField $boughtAmount): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setBoughtDate(SearchDateField $boughtDate): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setBuyingReason(SearchMultiSelectField $buyingReason): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setBuyingTimeFrame(SearchMultiSelectField $buyingTimeFrame): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCategory(SearchMultiSelectField $category): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCcCustomerCode(SearchStringField $ccCustomerCode): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCcDefault(SearchBooleanField $ccDefault): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCcExpDate(SearchDateField $ccExpDate): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCcHolderName(SearchStringField $ccHolderName): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCcNumber(SearchStringField $ccNumber): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCcState(SearchMultiSelectField $ccState): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCcStateFrom(SearchDateField $ccStateFrom): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCcType(SearchMultiSelectField $ccType): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCity(SearchStringField $city): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setClassBought(SearchMultiSelectField $classBought): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setComments(SearchStringField $comments): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCompanyName(SearchStringField $companyName): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setConsolBalance(SearchDoubleField $consolBalance): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setConsolDaysOverdue(SearchLongField $consolDaysOverdue): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setConsolDepositBalance(SearchDoubleField $consolDepositBalance): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setConsolOverdueBalance(SearchDoubleField $consolOverdueBalance): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setConsolUnbilledOrders(SearchDoubleField $consolUnbilledOrders): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setContact(SearchStringField $contact): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setContribution(SearchLongField $contribution): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setConversionDate(SearchDateField $conversionDate): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCountry(SearchEnumMultiSelectField $country): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCounty(SearchStringField $county): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCreditHold(SearchEnumMultiSelectField $creditHold): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCreditHoldOverride(SearchBooleanField $creditHoldOverride): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCreditLimit(SearchDoubleField $creditLimit): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCurrency(SearchMultiSelectField $currency): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCustStage(SearchMultiSelectField $custStage): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCustStatus(SearchMultiSelectField $custStatus): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setDateClosed(SearchDateField $dateClosed): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setDateCreated(SearchDateField $dateCreated): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setDaysOverdue(SearchLongField $daysOverdue): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setDefaultOrderPriority(SearchDoubleField $defaultOrderPriority): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setDefaultTaxReg(SearchMultiSelectField $defaultTaxReg): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setDefaultTaxRegText(SearchStringField $defaultTaxRegText): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setDepositBalance(SearchDoubleField $depositBalance): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setDeptBought(SearchMultiSelectField $deptBought): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setDrAccount(SearchMultiSelectField $drAccount): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setEmail(SearchStringField $email): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setEmailPreference(SearchEnumMultiSelectField $emailPreference): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setEmailTransactions(SearchBooleanField $emailTransactions): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setEndDate(SearchDateField $endDate): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setEntityId(SearchStringField $entityId): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setEntityStatus(SearchMultiSelectField $entityStatus): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setEstimatedBudget(SearchDoubleField $estimatedBudget): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setExplicitConversion(SearchBooleanField $explicitConversion): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setFax(SearchStringField $fax): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setFaxTransactions(SearchBooleanField $faxTransactions): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setFirstName(SearchStringField $firstName): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setFirstOrderDate(SearchDateField $firstOrderDate): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setFirstSaleDate(SearchDateField $firstSaleDate): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setFxAccount(SearchMultiSelectField $fxAccount): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setFxBalance(SearchDoubleField $fxBalance): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setFxConsolBalance(SearchDoubleField $fxConsolBalance): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setFxConsolUnbilledOrders(SearchDoubleField $fxConsolUnbilledOrders): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setFxUnbilledOrders(SearchDoubleField $fxUnbilledOrders): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setGiveAccess(SearchBooleanField $giveAccess): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setGlobalSubscriptionStatus(SearchEnumMultiSelectField $globalSubscriptionStatus): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setGroup(SearchMultiSelectField $group): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setGroupPricingLevel(SearchMultiSelectField $groupPricingLevel): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setHasDuplicates(SearchBooleanField $hasDuplicates): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setImage(SearchStringField $image): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setIsBudgetApproved(SearchBooleanField $isBudgetApproved): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setIsDefaultBilling(SearchBooleanField $isDefaultBilling): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setIsDefaultShipping(SearchBooleanField $isDefaultShipping): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setIsPerson(SearchBooleanField $isPerson): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setIsReportedLead(SearchBooleanField $isReportedLead): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setIsShipAddress(SearchBooleanField $isShipAddress): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setItemPricingLevel(SearchMultiSelectField $itemPricingLevel): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setItemPricingUnitPrice(SearchDoubleField $itemPricingUnitPrice): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setItemsBought(SearchMultiSelectField $itemsBought): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setItemsOrdered(SearchMultiSelectField $itemsOrdered): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setLanguage(SearchEnumMultiSelectField $language): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setLastName(SearchStringField $lastName): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setLastOrderDate(SearchDateField $lastOrderDate): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setLastSaleDate(SearchDateField $lastSaleDate): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setLeadDate(SearchDateField $leadDate): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setLeadSource(SearchMultiSelectField $leadSource): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setLevel(SearchEnumMultiSelectField $level): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setLocationBought(SearchMultiSelectField $locationBought): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setManualCreditHold(SearchBooleanField $manualCreditHold): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setMerchantAccount(SearchMultiSelectField $merchantAccount): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setMiddleName(SearchStringField $middleName): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setMonthlyClosing(SearchEnumMultiSelectField $monthlyClosing): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setOnCreditHold(SearchBooleanField $onCreditHold): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setOrderedAmount(SearchDoubleField $orderedAmount): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setOrderedDate(SearchDateField $orderedDate): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setOtherRelationships(SearchEnumMultiSelectField $otherRelationships): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setOverdueBalance(SearchDoubleField $overdueBalance): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setParent(SearchMultiSelectField $parent): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setParentItemsBought(SearchMultiSelectField $parentItemsBought): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setParentItemsOrdered(SearchMultiSelectField $parentItemsOrdered): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setPartner(SearchMultiSelectField $partner): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setPartnerContribution(SearchLongField $partnerContribution): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setPartnerRole(SearchMultiSelectField $partnerRole): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setPartnerTeamMember(SearchMultiSelectField $partnerTeamMember): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setPec(SearchStringField $pec): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setPermission(SearchEnumMultiSelectField $permission): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setPhone(SearchStringField $phone): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setPhoneticName(SearchStringField $phoneticName): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setPriceLevel(SearchMultiSelectField $priceLevel): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setPricingGroup(SearchMultiSelectField $pricingGroup): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setPricingItem(SearchMultiSelectField $pricingItem): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setPrintTransactions(SearchBooleanField $printTransactions): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setProspectDate(SearchDateField $prospectDate): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setPstExempt(SearchBooleanField $pstExempt): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setReceivablesAccount(SearchMultiSelectField $receivablesAccount): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setReminderDate(SearchDateField $reminderDate): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setResaleNumber(SearchStringField $resaleNumber): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setRole(SearchMultiSelectField $role): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setSalesReadiness(SearchMultiSelectField $salesReadiness): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setSalesRep(SearchMultiSelectField $salesRep): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setSalesTeamMember(SearchMultiSelectField $salesTeamMember): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setSalesTeamRole(SearchMultiSelectField $salesTeamRole): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setSalutation(SearchStringField $salutation): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setShipAddress(SearchStringField $shipAddress): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setShipComplete(SearchBooleanField $shipComplete): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setShippingItem(SearchMultiSelectField $shippingItem): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setSourceSite(SearchMultiSelectField $sourceSite): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setSourceSiteId(SearchMultiSelectField $sourceSiteId): CustomerSearchBasic
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
     * @param SearchEnumMultiSelectField $stage
     * @return CustomerSearchBasic
     */
    public function setStage(SearchEnumMultiSelectField $stage): CustomerSearchBasic
    {
        $this->stage = $stage;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getStage(): SearchEnumMultiSelectField
    {
        return $this->stage;
    }

    /**
     * @param SearchDateField $startDate
     * @return CustomerSearchBasic
     */
    public function setStartDate(SearchDateField $startDate): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setState(SearchStringField $state): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setSubsidBought(SearchMultiSelectField $subsidBought): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setTaxable(SearchBooleanField $taxable): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setTerms(SearchMultiSelectField $terms): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setTerritory(SearchMultiSelectField $territory): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setTitle(SearchStringField $title): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setUnbilledOrders(SearchDoubleField $unbilledOrders): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setUrl(SearchStringField $url): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setVatRegNumber(SearchStringField $vatRegNumber): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setWebLead(SearchBooleanField $webLead): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setZipCode(SearchStringField $zipCode): CustomerSearchBasic
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
     * @return CustomerSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): CustomerSearchBasic
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
