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

class OriginatingLeadSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $accountNumber;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $address;

    protected $address1;
    protected $address2;
    protected $address3;
    /**
     * @var SearchColumnStringField[]
     */
    protected array $addressee;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $addressInternalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $addressLabel;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $addressPhone;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $altContact;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $altEmail;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $altName;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $altPhone;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $assignedSite;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $assignedSiteId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $attention;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $availableOffline;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $balance;

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
     * @var SearchColumnStringField[]
     */
    protected array $billPhone;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $billState;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $billZipCode;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $buyingReason;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $buyingTimeFrame;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $category;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $ccCustomerCode;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $ccDefault;

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
    protected array $ccInternalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $ccNumber;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $ccState;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $ccStateFrom;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $ccType;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $city;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $comments;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $companyName;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $consolBalance;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $consolDaysOverdue;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $consolDepositBalance;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $consolOverdueBalance;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $consolUnbilledOrders;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $contact;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $contribution;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $contributionPrimary;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $conversionDate;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $country;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $countryCode;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $creditHold;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $creditHoldOverride;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $creditLimit;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $currency;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $dateClosed;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $dateCreated;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $daysOverdue;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $defaultOrderPriority;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $defaultTaxReg;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $depositBalance;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $drAccount;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $email;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $emailPreference;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $emailTransactions;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $endDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $entityId;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $entityNumber;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $entityStatus;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedBudget;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $explicitConversion;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $fax;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $faxTransactions;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $firstName;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $firstOrderDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $firstSaleDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $fxAccount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fxBalance;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fxConsolBalance;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fxConsolUnbilledOrders;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $fxUnbilledOrders;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $giveAccess;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $globalSubscriptionStatus;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $groupPricingLevel;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $hasDuplicates;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $homePhone;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $image;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isBudgetApproved;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isDefaultBilling;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isDefaultShipping;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isPerson;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isShipAddress;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $itemPricingLevel;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $itemPricingUnitPrice;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $jobEndDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $jobProjectedEnd;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $jobStartDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $jobType;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $language;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastModifiedDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $lastName;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastOrderDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastSaleDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $leadDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $leadSource;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $level;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $manualCreditHold;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $middleName;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $mobilePhone;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $monthlyClosing;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $onCreditHold;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $overdueBalance;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $parent;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $partner;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $partnerContribution;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $partnerRole;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $partnerTeamMember;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $pec;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $permission;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $phone;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $phoneticName;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $prefCCProcessor;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $priceLevel;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $pricingGroup;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $pricingItem;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $printTransactions;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $prospectDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $receivablesAccount;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $reminderDays;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $resaleNumber;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $role;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $salesReadiness;

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
     * @var SearchColumnStringField[]
     */
    protected array $salutation;

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
     * @var SearchColumnStringField[]
     */
    protected array $shipPhone;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $shippingItem;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $shipState;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $shipZip;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $sourceSite;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $sourceSiteId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $stage;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDate;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $state;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subscription;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $subscriptionDate;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $subscriptionStatus;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $taxable;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $taxItem;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $terms;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $territory;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $title;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $unbilledOrders;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $url;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $vatRegNumber;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $webLead;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $zipCode;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "accountNumber" => "SearchColumnStringField[]",
        "address" => "SearchColumnStringField[]",
        "address1" => "SearchColumnStringField[]",
        "address2" => "SearchColumnStringField[]",
        "address3" => "SearchColumnStringField[]",
        "addressee" => "SearchColumnStringField[]",
        "addressInternalId" => "SearchColumnStringField[]",
        "addressLabel" => "SearchColumnStringField[]",
        "addressPhone" => "SearchColumnStringField[]",
        "altContact" => "SearchColumnStringField[]",
        "altEmail" => "SearchColumnStringField[]",
        "altName" => "SearchColumnStringField[]",
        "altPhone" => "SearchColumnStringField[]",
        "assignedSite" => "SearchColumnSelectField[]",
        "assignedSiteId" => "SearchColumnLongField[]",
        "attention" => "SearchColumnStringField[]",
        "availableOffline" => "SearchColumnBooleanField[]",
        "balance" => "SearchColumnDoubleField[]",
        "billAddress" => "SearchColumnStringField[]",
        "billAddress1" => "SearchColumnStringField[]",
        "billAddress2" => "SearchColumnStringField[]",
        "billAddress3" => "SearchColumnStringField[]",
        "billAddressee" => "SearchColumnStringField[]",
        "billAttention" => "SearchColumnStringField[]",
        "billCity" => "SearchColumnStringField[]",
        "billCountry" => "SearchColumnEnumSelectField[]",
        "billCountryCode" => "SearchColumnStringField[]",
        "billPhone" => "SearchColumnStringField[]",
        "billState" => "SearchColumnStringField[]",
        "billZipCode" => "SearchColumnStringField[]",
        "buyingReason" => "SearchColumnStringField[]",
        "buyingTimeFrame" => "SearchColumnStringField[]",
        "category" => "SearchColumnSelectField[]",
        "ccCustomerCode" => "SearchColumnStringField[]",
        "ccDefault" => "SearchColumnBooleanField[]",
        "ccExpDate" => "SearchColumnDateField[]",
        "ccHolderName" => "SearchColumnStringField[]",
        "ccInternalId" => "SearchColumnStringField[]",
        "ccNumber" => "SearchColumnStringField[]",
        "ccState" => "SearchColumnSelectField[]",
        "ccStateFrom" => "SearchColumnDateField[]",
        "ccType" => "SearchColumnSelectField[]",
        "city" => "SearchColumnStringField[]",
        "comments" => "SearchColumnStringField[]",
        "companyName" => "SearchColumnStringField[]",
        "consolBalance" => "SearchColumnDoubleField[]",
        "consolDaysOverdue" => "SearchColumnLongField[]",
        "consolDepositBalance" => "SearchColumnDoubleField[]",
        "consolOverdueBalance" => "SearchColumnDoubleField[]",
        "consolUnbilledOrders" => "SearchColumnDoubleField[]",
        "contact" => "SearchColumnStringField[]",
        "contribution" => "SearchColumnDoubleField[]",
        "contributionPrimary" => "SearchColumnDoubleField[]",
        "conversionDate" => "SearchColumnDateField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "countryCode" => "SearchColumnStringField[]",
        "creditHold" => "SearchColumnEnumSelectField[]",
        "creditHoldOverride" => "SearchColumnBooleanField[]",
        "creditLimit" => "SearchColumnDoubleField[]",
        "currency" => "SearchColumnSelectField[]",
        "dateClosed" => "SearchColumnDateField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "daysOverdue" => "SearchColumnLongField[]",
        "defaultOrderPriority" => "SearchColumnDoubleField[]",
        "defaultTaxReg" => "SearchColumnStringField[]",
        "depositBalance" => "SearchColumnDoubleField[]",
        "drAccount" => "SearchColumnStringField[]",
        "email" => "SearchColumnStringField[]",
        "emailPreference" => "SearchColumnEnumSelectField[]",
        "emailTransactions" => "SearchColumnBooleanField[]",
        "endDate" => "SearchColumnDateField[]",
        "entityId" => "SearchColumnStringField[]",
        "entityNumber" => "SearchColumnLongField[]",
        "entityStatus" => "SearchColumnSelectField[]",
        "estimatedBudget" => "SearchColumnDoubleField[]",
        "explicitConversion" => "SearchColumnBooleanField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fax" => "SearchColumnStringField[]",
        "faxTransactions" => "SearchColumnBooleanField[]",
        "firstName" => "SearchColumnStringField[]",
        "firstOrderDate" => "SearchColumnDateField[]",
        "firstSaleDate" => "SearchColumnDateField[]",
        "fxAccount" => "SearchColumnStringField[]",
        "fxBalance" => "SearchColumnDoubleField[]",
        "fxConsolBalance" => "SearchColumnDoubleField[]",
        "fxConsolUnbilledOrders" => "SearchColumnDoubleField[]",
        "fxUnbilledOrders" => "SearchColumnDoubleField[]",
        "giveAccess" => "SearchColumnBooleanField[]",
        "globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
        "groupPricingLevel" => "SearchColumnStringField[]",
        "hasDuplicates" => "SearchColumnBooleanField[]",
        "homePhone" => "SearchColumnStringField[]",
        "image" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isBudgetApproved" => "SearchColumnBooleanField[]",
        "isDefaultBilling" => "SearchColumnBooleanField[]",
        "isDefaultShipping" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isPerson" => "SearchColumnBooleanField[]",
        "isShipAddress" => "SearchColumnBooleanField[]",
        "itemPricingLevel" => "SearchColumnStringField[]",
        "itemPricingUnitPrice" => "SearchColumnDoubleField[]",
        "jobEndDate" => "SearchColumnDateField[]",
        "jobProjectedEnd" => "SearchColumnDateField[]",
        "jobStartDate" => "SearchColumnDateField[]",
        "jobType" => "SearchColumnSelectField[]",
        "language" => "SearchColumnEnumSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "lastName" => "SearchColumnStringField[]",
        "lastOrderDate" => "SearchColumnDateField[]",
        "lastSaleDate" => "SearchColumnDateField[]",
        "leadDate" => "SearchColumnDateField[]",
        "leadSource" => "SearchColumnSelectField[]",
        "level" => "SearchColumnEnumSelectField[]",
        "manualCreditHold" => "SearchColumnBooleanField[]",
        "middleName" => "SearchColumnStringField[]",
        "mobilePhone" => "SearchColumnStringField[]",
        "monthlyClosing" => "SearchColumnEnumSelectField[]",
        "onCreditHold" => "SearchColumnBooleanField[]",
        "overdueBalance" => "SearchColumnDoubleField[]",
        "parent" => "SearchColumnSelectField[]",
        "partner" => "SearchColumnSelectField[]",
        "partnerContribution" => "SearchColumnDoubleField[]",
        "partnerRole" => "SearchColumnStringField[]",
        "partnerTeamMember" => "SearchColumnSelectField[]",
        "pec" => "SearchColumnStringField[]",
        "permission" => "SearchColumnEnumSelectField[]",
        "phone" => "SearchColumnStringField[]",
        "phoneticName" => "SearchColumnStringField[]",
        "prefCCProcessor" => "SearchColumnSelectField[]",
        "priceLevel" => "SearchColumnSelectField[]",
        "pricingGroup" => "SearchColumnStringField[]",
        "pricingItem" => "SearchColumnStringField[]",
        "printTransactions" => "SearchColumnBooleanField[]",
        "prospectDate" => "SearchColumnDateField[]",
        "receivablesAccount" => "SearchColumnStringField[]",
        "reminderDays" => "SearchColumnLongField[]",
        "resaleNumber" => "SearchColumnStringField[]",
        "role" => "SearchColumnStringField[]",
        "salesReadiness" => "SearchColumnStringField[]",
        "salesRep" => "SearchColumnSelectField[]",
        "salesTeamMember" => "SearchColumnSelectField[]",
        "salesTeamRole" => "SearchColumnSelectField[]",
        "salutation" => "SearchColumnStringField[]",
        "shipAddress" => "SearchColumnStringField[]",
        "shipAddress1" => "SearchColumnStringField[]",
        "shipAddress2" => "SearchColumnStringField[]",
        "shipAddress3" => "SearchColumnStringField[]",
        "shipAddressee" => "SearchColumnStringField[]",
        "shipAttention" => "SearchColumnStringField[]",
        "shipCity" => "SearchColumnStringField[]",
        "shipComplete" => "SearchColumnBooleanField[]",
        "shipCountry" => "SearchColumnEnumSelectField[]",
        "shipCountryCode" => "SearchColumnStringField[]",
        "shipPhone" => "SearchColumnStringField[]",
        "shippingItem" => "SearchColumnSelectField[]",
        "shipState" => "SearchColumnStringField[]",
        "shipZip" => "SearchColumnStringField[]",
        "sourceSite" => "SearchColumnSelectField[]",
        "sourceSiteId" => "SearchColumnLongField[]",
        "stage" => "SearchColumnStringField[]",
        "startDate" => "SearchColumnDateField[]",
        "state" => "SearchColumnEnumSelectField[]",
        "subscription" => "SearchColumnSelectField[]",
        "subscriptionDate" => "SearchColumnDateField[]",
        "subscriptionStatus" => "SearchColumnBooleanField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "taxable" => "SearchColumnBooleanField[]",
        "taxItem" => "SearchColumnSelectField[]",
        "terms" => "SearchColumnSelectField[]",
        "territory" => "SearchColumnSelectField[]",
        "title" => "SearchColumnStringField[]",
        "unbilledOrders" => "SearchColumnDoubleField[]",
        "url" => "SearchColumnStringField[]",
        "vatRegNumber" => "SearchColumnStringField[]",
        "webLead" => "SearchColumnBooleanField[]",
        "zipCode" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnStringField[] $accountNumber
     * @return OriginatingLeadSearchRowBasic
     */
    public function setAccountNumber(SearchColumnStringField $accountNumber): OriginatingLeadSearchRowBasic
    {
        $this->accountNumber[] = $accountNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAccountNumber(): array
    {
        return $this->accountNumber;
    }

    /**
     * @param SearchColumnStringField[] $address
     * @return OriginatingLeadSearchRowBasic
     */
    public function setAddress(SearchColumnStringField $address): OriginatingLeadSearchRowBasic
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddress(): array
    {
        return $this->address;
    }

    /**
     * @param SearchColumnStringField[] $addressee
     * @return OriginatingLeadSearchRowBasic
     */
    public function setAddressee(SearchColumnStringField $addressee): OriginatingLeadSearchRowBasic
    {
        $this->addressee[] = $addressee;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddressee(): array
    {
        return $this->addressee;
    }

    /**
     * @param SearchColumnStringField[] $addressInternalId
     * @return OriginatingLeadSearchRowBasic
     */
    public function setAddressInternalId(SearchColumnStringField $addressInternalId): OriginatingLeadSearchRowBasic
    {
        $this->addressInternalId[] = $addressInternalId;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddressInternalId(): array
    {
        return $this->addressInternalId;
    }

    /**
     * @param SearchColumnStringField[] $addressLabel
     * @return OriginatingLeadSearchRowBasic
     */
    public function setAddressLabel(SearchColumnStringField $addressLabel): OriginatingLeadSearchRowBasic
    {
        $this->addressLabel[] = $addressLabel;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddressLabel(): array
    {
        return $this->addressLabel;
    }

    /**
     * @param SearchColumnStringField[] $addressPhone
     * @return OriginatingLeadSearchRowBasic
     */
    public function setAddressPhone(SearchColumnStringField $addressPhone): OriginatingLeadSearchRowBasic
    {
        $this->addressPhone[] = $addressPhone;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddressPhone(): array
    {
        return $this->addressPhone;
    }

    /**
     * @param SearchColumnStringField[] $altContact
     * @return OriginatingLeadSearchRowBasic
     */
    public function setAltContact(SearchColumnStringField $altContact): OriginatingLeadSearchRowBasic
    {
        $this->altContact[] = $altContact;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAltContact(): array
    {
        return $this->altContact;
    }

    /**
     * @param SearchColumnStringField[] $altEmail
     * @return OriginatingLeadSearchRowBasic
     */
    public function setAltEmail(SearchColumnStringField $altEmail): OriginatingLeadSearchRowBasic
    {
        $this->altEmail[] = $altEmail;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAltEmail(): array
    {
        return $this->altEmail;
    }

    /**
     * @param SearchColumnStringField[] $altName
     * @return OriginatingLeadSearchRowBasic
     */
    public function setAltName(SearchColumnStringField $altName): OriginatingLeadSearchRowBasic
    {
        $this->altName[] = $altName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAltName(): array
    {
        return $this->altName;
    }

    /**
     * @param SearchColumnStringField[] $altPhone
     * @return OriginatingLeadSearchRowBasic
     */
    public function setAltPhone(SearchColumnStringField $altPhone): OriginatingLeadSearchRowBasic
    {
        $this->altPhone[] = $altPhone;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAltPhone(): array
    {
        return $this->altPhone;
    }

    /**
     * @param SearchColumnSelectField[] $assignedSite
     * @return OriginatingLeadSearchRowBasic
     */
    public function setAssignedSite(SearchColumnSelectField $assignedSite): OriginatingLeadSearchRowBasic
    {
        $this->assignedSite[] = $assignedSite;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAssignedSite(): array
    {
        return $this->assignedSite;
    }

    /**
     * @param SearchColumnLongField[] $assignedSiteId
     * @return OriginatingLeadSearchRowBasic
     */
    public function setAssignedSiteId(SearchColumnLongField $assignedSiteId): OriginatingLeadSearchRowBasic
    {
        $this->assignedSiteId[] = $assignedSiteId;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getAssignedSiteId(): array
    {
        return $this->assignedSiteId;
    }

    /**
     * @param SearchColumnStringField[] $attention
     * @return OriginatingLeadSearchRowBasic
     */
    public function setAttention(SearchColumnStringField $attention): OriginatingLeadSearchRowBasic
    {
        $this->attention[] = $attention;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAttention(): array
    {
        return $this->attention;
    }

    /**
     * @param SearchColumnBooleanField[] $availableOffline
     * @return OriginatingLeadSearchRowBasic
     */
    public function setAvailableOffline(SearchColumnBooleanField $availableOffline): OriginatingLeadSearchRowBasic
    {
        $this->availableOffline[] = $availableOffline;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAvailableOffline(): array
    {
        return $this->availableOffline;
    }

    /**
     * @param SearchColumnDoubleField[] $balance
     * @return OriginatingLeadSearchRowBasic
     */
    public function setBalance(SearchColumnDoubleField $balance): OriginatingLeadSearchRowBasic
    {
        $this->balance[] = $balance;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBalance(): array
    {
        return $this->balance;
    }

    /**
     * @param SearchColumnStringField[] $billAddress
     * @return OriginatingLeadSearchRowBasic
     */
    public function setBillAddress(SearchColumnStringField $billAddress): OriginatingLeadSearchRowBasic
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
     * @return OriginatingLeadSearchRowBasic
     */
    public function setBillAddressee(SearchColumnStringField $billAddressee): OriginatingLeadSearchRowBasic
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
     * @return OriginatingLeadSearchRowBasic
     */
    public function setBillAttention(SearchColumnStringField $billAttention): OriginatingLeadSearchRowBasic
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
     * @return OriginatingLeadSearchRowBasic
     */
    public function setBillCity(SearchColumnStringField $billCity): OriginatingLeadSearchRowBasic
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
     * @return OriginatingLeadSearchRowBasic
     */
    public function setBillCountry(SearchColumnEnumSelectField $billCountry): OriginatingLeadSearchRowBasic
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
     * @return OriginatingLeadSearchRowBasic
     */
    public function setBillCountryCode(SearchColumnStringField $billCountryCode): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnStringField[] $billPhone
     * @return OriginatingLeadSearchRowBasic
     */
    public function setBillPhone(SearchColumnStringField $billPhone): OriginatingLeadSearchRowBasic
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
     * @return OriginatingLeadSearchRowBasic
     */
    public function setBillState(SearchColumnStringField $billState): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnStringField[] $billZipCode
     * @return OriginatingLeadSearchRowBasic
     */
    public function setBillZipCode(SearchColumnStringField $billZipCode): OriginatingLeadSearchRowBasic
    {
        $this->billZipCode[] = $billZipCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillZipCode(): array
    {
        return $this->billZipCode;
    }

    /**
     * @param SearchColumnStringField[] $buyingReason
     * @return OriginatingLeadSearchRowBasic
     */
    public function setBuyingReason(SearchColumnStringField $buyingReason): OriginatingLeadSearchRowBasic
    {
        $this->buyingReason[] = $buyingReason;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBuyingReason(): array
    {
        return $this->buyingReason;
    }

    /**
     * @param SearchColumnStringField[] $buyingTimeFrame
     * @return OriginatingLeadSearchRowBasic
     */
    public function setBuyingTimeFrame(SearchColumnStringField $buyingTimeFrame): OriginatingLeadSearchRowBasic
    {
        $this->buyingTimeFrame[] = $buyingTimeFrame;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBuyingTimeFrame(): array
    {
        return $this->buyingTimeFrame;
    }

    /**
     * @param SearchColumnSelectField[] $category
     * @return OriginatingLeadSearchRowBasic
     */
    public function setCategory(SearchColumnSelectField $category): OriginatingLeadSearchRowBasic
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCategory(): array
    {
        return $this->category;
    }

    /**
     * @param SearchColumnStringField[] $ccCustomerCode
     * @return OriginatingLeadSearchRowBasic
     */
    public function setCcCustomerCode(SearchColumnStringField $ccCustomerCode): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnBooleanField[] $ccDefault
     * @return OriginatingLeadSearchRowBasic
     */
    public function setCcDefault(SearchColumnBooleanField $ccDefault): OriginatingLeadSearchRowBasic
    {
        $this->ccDefault[] = $ccDefault;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCcDefault(): array
    {
        return $this->ccDefault;
    }

    /**
     * @param SearchColumnDateField[] $ccExpDate
     * @return OriginatingLeadSearchRowBasic
     */
    public function setCcExpDate(SearchColumnDateField $ccExpDate): OriginatingLeadSearchRowBasic
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
     * @return OriginatingLeadSearchRowBasic
     */
    public function setCcHolderName(SearchColumnStringField $ccHolderName): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnStringField[] $ccInternalId
     * @return OriginatingLeadSearchRowBasic
     */
    public function setCcInternalId(SearchColumnStringField $ccInternalId): OriginatingLeadSearchRowBasic
    {
        $this->ccInternalId[] = $ccInternalId;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCcInternalId(): array
    {
        return $this->ccInternalId;
    }

    /**
     * @param SearchColumnStringField[] $ccNumber
     * @return OriginatingLeadSearchRowBasic
     */
    public function setCcNumber(SearchColumnStringField $ccNumber): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnSelectField[] $ccState
     * @return OriginatingLeadSearchRowBasic
     */
    public function setCcState(SearchColumnSelectField $ccState): OriginatingLeadSearchRowBasic
    {
        $this->ccState[] = $ccState;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCcState(): array
    {
        return $this->ccState;
    }

    /**
     * @param SearchColumnDateField[] $ccStateFrom
     * @return OriginatingLeadSearchRowBasic
     */
    public function setCcStateFrom(SearchColumnDateField $ccStateFrom): OriginatingLeadSearchRowBasic
    {
        $this->ccStateFrom[] = $ccStateFrom;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCcStateFrom(): array
    {
        return $this->ccStateFrom;
    }

    /**
     * @param SearchColumnSelectField[] $ccType
     * @return OriginatingLeadSearchRowBasic
     */
    public function setCcType(SearchColumnSelectField $ccType): OriginatingLeadSearchRowBasic
    {
        $this->ccType[] = $ccType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCcType(): array
    {
        return $this->ccType;
    }

    /**
     * @param SearchColumnStringField[] $city
     * @return OriginatingLeadSearchRowBasic
     */
    public function setCity(SearchColumnStringField $city): OriginatingLeadSearchRowBasic
    {
        $this->city[] = $city;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCity(): array
    {
        return $this->city;
    }

    /**
     * @param SearchColumnStringField[] $comments
     * @return OriginatingLeadSearchRowBasic
     */
    public function setComments(SearchColumnStringField $comments): OriginatingLeadSearchRowBasic
    {
        $this->comments[] = $comments;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getComments(): array
    {
        return $this->comments;
    }

    /**
     * @param SearchColumnStringField[] $companyName
     * @return OriginatingLeadSearchRowBasic
     */
    public function setCompanyName(SearchColumnStringField $companyName): OriginatingLeadSearchRowBasic
    {
        $this->companyName[] = $companyName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCompanyName(): array
    {
        return $this->companyName;
    }

    /**
     * @param SearchColumnDoubleField[] $consolBalance
     * @return OriginatingLeadSearchRowBasic
     */
    public function setConsolBalance(SearchColumnDoubleField $consolBalance): OriginatingLeadSearchRowBasic
    {
        $this->consolBalance[] = $consolBalance;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getConsolBalance(): array
    {
        return $this->consolBalance;
    }

    /**
     * @param SearchColumnLongField[] $consolDaysOverdue
     * @return OriginatingLeadSearchRowBasic
     */
    public function setConsolDaysOverdue(SearchColumnLongField $consolDaysOverdue): OriginatingLeadSearchRowBasic
    {
        $this->consolDaysOverdue[] = $consolDaysOverdue;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getConsolDaysOverdue(): array
    {
        return $this->consolDaysOverdue;
    }

    /**
     * @param SearchColumnDoubleField[] $consolDepositBalance
     * @return OriginatingLeadSearchRowBasic
     */
    public function setConsolDepositBalance(SearchColumnDoubleField $consolDepositBalance): OriginatingLeadSearchRowBasic
    {
        $this->consolDepositBalance[] = $consolDepositBalance;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getConsolDepositBalance(): array
    {
        return $this->consolDepositBalance;
    }

    /**
     * @param SearchColumnDoubleField[] $consolOverdueBalance
     * @return OriginatingLeadSearchRowBasic
     */
    public function setConsolOverdueBalance(SearchColumnDoubleField $consolOverdueBalance): OriginatingLeadSearchRowBasic
    {
        $this->consolOverdueBalance[] = $consolOverdueBalance;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getConsolOverdueBalance(): array
    {
        return $this->consolOverdueBalance;
    }

    /**
     * @param SearchColumnDoubleField[] $consolUnbilledOrders
     * @return OriginatingLeadSearchRowBasic
     */
    public function setConsolUnbilledOrders(SearchColumnDoubleField $consolUnbilledOrders): OriginatingLeadSearchRowBasic
    {
        $this->consolUnbilledOrders[] = $consolUnbilledOrders;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getConsolUnbilledOrders(): array
    {
        return $this->consolUnbilledOrders;
    }

    /**
     * @param SearchColumnStringField[] $contact
     * @return OriginatingLeadSearchRowBasic
     */
    public function setContact(SearchColumnStringField $contact): OriginatingLeadSearchRowBasic
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getContact(): array
    {
        return $this->contact;
    }

    /**
     * @param SearchColumnDoubleField[] $contribution
     * @return OriginatingLeadSearchRowBasic
     */
    public function setContribution(SearchColumnDoubleField $contribution): OriginatingLeadSearchRowBasic
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
     * @return OriginatingLeadSearchRowBasic
     */
    public function setContributionPrimary(SearchColumnDoubleField $contributionPrimary): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnDateField[] $conversionDate
     * @return OriginatingLeadSearchRowBasic
     */
    public function setConversionDate(SearchColumnDateField $conversionDate): OriginatingLeadSearchRowBasic
    {
        $this->conversionDate[] = $conversionDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getConversionDate(): array
    {
        return $this->conversionDate;
    }

    /**
     * @param SearchColumnEnumSelectField[] $country
     * @return OriginatingLeadSearchRowBasic
     */
    public function setCountry(SearchColumnEnumSelectField $country): OriginatingLeadSearchRowBasic
    {
        $this->country[] = $country;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCountry(): array
    {
        return $this->country;
    }

    /**
     * @param SearchColumnStringField[] $countryCode
     * @return OriginatingLeadSearchRowBasic
     */
    public function setCountryCode(SearchColumnStringField $countryCode): OriginatingLeadSearchRowBasic
    {
        $this->countryCode[] = $countryCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCountryCode(): array
    {
        return $this->countryCode;
    }

    /**
     * @param SearchColumnEnumSelectField[] $creditHold
     * @return OriginatingLeadSearchRowBasic
     */
    public function setCreditHold(SearchColumnEnumSelectField $creditHold): OriginatingLeadSearchRowBasic
    {
        $this->creditHold[] = $creditHold;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCreditHold(): array
    {
        return $this->creditHold;
    }

    /**
     * @param SearchColumnBooleanField[] $creditHoldOverride
     * @return OriginatingLeadSearchRowBasic
     */
    public function setCreditHoldOverride(SearchColumnBooleanField $creditHoldOverride): OriginatingLeadSearchRowBasic
    {
        $this->creditHoldOverride[] = $creditHoldOverride;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCreditHoldOverride(): array
    {
        return $this->creditHoldOverride;
    }

    /**
     * @param SearchColumnDoubleField[] $creditLimit
     * @return OriginatingLeadSearchRowBasic
     */
    public function setCreditLimit(SearchColumnDoubleField $creditLimit): OriginatingLeadSearchRowBasic
    {
        $this->creditLimit[] = $creditLimit;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCreditLimit(): array
    {
        return $this->creditLimit;
    }

    /**
     * @param SearchColumnSelectField[] $currency
     * @return OriginatingLeadSearchRowBasic
     */
    public function setCurrency(SearchColumnSelectField $currency): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnDateField[] $dateClosed
     * @return OriginatingLeadSearchRowBasic
     */
    public function setDateClosed(SearchColumnDateField $dateClosed): OriginatingLeadSearchRowBasic
    {
        $this->dateClosed[] = $dateClosed;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateClosed(): array
    {
        return $this->dateClosed;
    }

    /**
     * @param SearchColumnDateField[] $dateCreated
     * @return OriginatingLeadSearchRowBasic
     */
    public function setDateCreated(SearchColumnDateField $dateCreated): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnLongField[] $daysOverdue
     * @return OriginatingLeadSearchRowBasic
     */
    public function setDaysOverdue(SearchColumnLongField $daysOverdue): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnDoubleField[] $defaultOrderPriority
     * @return OriginatingLeadSearchRowBasic
     */
    public function setDefaultOrderPriority(SearchColumnDoubleField $defaultOrderPriority): OriginatingLeadSearchRowBasic
    {
        $this->defaultOrderPriority[] = $defaultOrderPriority;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDefaultOrderPriority(): array
    {
        return $this->defaultOrderPriority;
    }

    /**
     * @param SearchColumnStringField[] $defaultTaxReg
     * @return OriginatingLeadSearchRowBasic
     */
    public function setDefaultTaxReg(SearchColumnStringField $defaultTaxReg): OriginatingLeadSearchRowBasic
    {
        $this->defaultTaxReg[] = $defaultTaxReg;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDefaultTaxReg(): array
    {
        return $this->defaultTaxReg;
    }

    /**
     * @param SearchColumnDoubleField[] $depositBalance
     * @return OriginatingLeadSearchRowBasic
     */
    public function setDepositBalance(SearchColumnDoubleField $depositBalance): OriginatingLeadSearchRowBasic
    {
        $this->depositBalance[] = $depositBalance;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDepositBalance(): array
    {
        return $this->depositBalance;
    }

    /**
     * @param SearchColumnStringField[] $drAccount
     * @return OriginatingLeadSearchRowBasic
     */
    public function setDrAccount(SearchColumnStringField $drAccount): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnStringField[] $email
     * @return OriginatingLeadSearchRowBasic
     */
    public function setEmail(SearchColumnStringField $email): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $emailPreference
     * @return OriginatingLeadSearchRowBasic
     */
    public function setEmailPreference(SearchColumnEnumSelectField $emailPreference): OriginatingLeadSearchRowBasic
    {
        $this->emailPreference[] = $emailPreference;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getEmailPreference(): array
    {
        return $this->emailPreference;
    }

    /**
     * @param SearchColumnBooleanField[] $emailTransactions
     * @return OriginatingLeadSearchRowBasic
     */
    public function setEmailTransactions(SearchColumnBooleanField $emailTransactions): OriginatingLeadSearchRowBasic
    {
        $this->emailTransactions[] = $emailTransactions;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getEmailTransactions(): array
    {
        return $this->emailTransactions;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return OriginatingLeadSearchRowBasic
     */
    public function setEndDate(SearchColumnDateField $endDate): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnStringField[] $entityId
     * @return OriginatingLeadSearchRowBasic
     */
    public function setEntityId(SearchColumnStringField $entityId): OriginatingLeadSearchRowBasic
    {
        $this->entityId[] = $entityId;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEntityId(): array
    {
        return $this->entityId;
    }

    /**
     * @param SearchColumnLongField[] $entityNumber
     * @return OriginatingLeadSearchRowBasic
     */
    public function setEntityNumber(SearchColumnLongField $entityNumber): OriginatingLeadSearchRowBasic
    {
        $this->entityNumber[] = $entityNumber;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getEntityNumber(): array
    {
        return $this->entityNumber;
    }

    /**
     * @param SearchColumnSelectField[] $entityStatus
     * @return OriginatingLeadSearchRowBasic
     */
    public function setEntityStatus(SearchColumnSelectField $entityStatus): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnDoubleField[] $estimatedBudget
     * @return OriginatingLeadSearchRowBasic
     */
    public function setEstimatedBudget(SearchColumnDoubleField $estimatedBudget): OriginatingLeadSearchRowBasic
    {
        $this->estimatedBudget[] = $estimatedBudget;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedBudget(): array
    {
        return $this->estimatedBudget;
    }

    /**
     * @param SearchColumnBooleanField[] $explicitConversion
     * @return OriginatingLeadSearchRowBasic
     */
    public function setExplicitConversion(SearchColumnBooleanField $explicitConversion): OriginatingLeadSearchRowBasic
    {
        $this->explicitConversion[] = $explicitConversion;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getExplicitConversion(): array
    {
        return $this->explicitConversion;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return OriginatingLeadSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnStringField[] $fax
     * @return OriginatingLeadSearchRowBasic
     */
    public function setFax(SearchColumnStringField $fax): OriginatingLeadSearchRowBasic
    {
        $this->fax[] = $fax;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFax(): array
    {
        return $this->fax;
    }

    /**
     * @param SearchColumnBooleanField[] $faxTransactions
     * @return OriginatingLeadSearchRowBasic
     */
    public function setFaxTransactions(SearchColumnBooleanField $faxTransactions): OriginatingLeadSearchRowBasic
    {
        $this->faxTransactions[] = $faxTransactions;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getFaxTransactions(): array
    {
        return $this->faxTransactions;
    }

    /**
     * @param SearchColumnStringField[] $firstName
     * @return OriginatingLeadSearchRowBasic
     */
    public function setFirstName(SearchColumnStringField $firstName): OriginatingLeadSearchRowBasic
    {
        $this->firstName[] = $firstName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFirstName(): array
    {
        return $this->firstName;
    }

    /**
     * @param SearchColumnDateField[] $firstOrderDate
     * @return OriginatingLeadSearchRowBasic
     */
    public function setFirstOrderDate(SearchColumnDateField $firstOrderDate): OriginatingLeadSearchRowBasic
    {
        $this->firstOrderDate[] = $firstOrderDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getFirstOrderDate(): array
    {
        return $this->firstOrderDate;
    }

    /**
     * @param SearchColumnDateField[] $firstSaleDate
     * @return OriginatingLeadSearchRowBasic
     */
    public function setFirstSaleDate(SearchColumnDateField $firstSaleDate): OriginatingLeadSearchRowBasic
    {
        $this->firstSaleDate[] = $firstSaleDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getFirstSaleDate(): array
    {
        return $this->firstSaleDate;
    }

    /**
     * @param SearchColumnStringField[] $fxAccount
     * @return OriginatingLeadSearchRowBasic
     */
    public function setFxAccount(SearchColumnStringField $fxAccount): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnDoubleField[] $fxBalance
     * @return OriginatingLeadSearchRowBasic
     */
    public function setFxBalance(SearchColumnDoubleField $fxBalance): OriginatingLeadSearchRowBasic
    {
        $this->fxBalance[] = $fxBalance;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxBalance(): array
    {
        return $this->fxBalance;
    }

    /**
     * @param SearchColumnDoubleField[] $fxConsolBalance
     * @return OriginatingLeadSearchRowBasic
     */
    public function setFxConsolBalance(SearchColumnDoubleField $fxConsolBalance): OriginatingLeadSearchRowBasic
    {
        $this->fxConsolBalance[] = $fxConsolBalance;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxConsolBalance(): array
    {
        return $this->fxConsolBalance;
    }

    /**
     * @param SearchColumnDoubleField[] $fxConsolUnbilledOrders
     * @return OriginatingLeadSearchRowBasic
     */
    public function setFxConsolUnbilledOrders(SearchColumnDoubleField $fxConsolUnbilledOrders): OriginatingLeadSearchRowBasic
    {
        $this->fxConsolUnbilledOrders[] = $fxConsolUnbilledOrders;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxConsolUnbilledOrders(): array
    {
        return $this->fxConsolUnbilledOrders;
    }

    /**
     * @param SearchColumnDoubleField[] $fxUnbilledOrders
     * @return OriginatingLeadSearchRowBasic
     */
    public function setFxUnbilledOrders(SearchColumnDoubleField $fxUnbilledOrders): OriginatingLeadSearchRowBasic
    {
        $this->fxUnbilledOrders[] = $fxUnbilledOrders;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxUnbilledOrders(): array
    {
        return $this->fxUnbilledOrders;
    }

    /**
     * @param SearchColumnBooleanField[] $giveAccess
     * @return OriginatingLeadSearchRowBasic
     */
    public function setGiveAccess(SearchColumnBooleanField $giveAccess): OriginatingLeadSearchRowBasic
    {
        $this->giveAccess[] = $giveAccess;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getGiveAccess(): array
    {
        return $this->giveAccess;
    }

    /**
     * @param SearchColumnEnumSelectField[] $globalSubscriptionStatus
     * @return OriginatingLeadSearchRowBasic
     */
    public function setGlobalSubscriptionStatus(SearchColumnEnumSelectField $globalSubscriptionStatus): OriginatingLeadSearchRowBasic
    {
        $this->globalSubscriptionStatus[] = $globalSubscriptionStatus;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getGlobalSubscriptionStatus(): array
    {
        return $this->globalSubscriptionStatus;
    }

    /**
     * @param SearchColumnStringField[] $groupPricingLevel
     * @return OriginatingLeadSearchRowBasic
     */
    public function setGroupPricingLevel(SearchColumnStringField $groupPricingLevel): OriginatingLeadSearchRowBasic
    {
        $this->groupPricingLevel[] = $groupPricingLevel;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGroupPricingLevel(): array
    {
        return $this->groupPricingLevel;
    }

    /**
     * @param SearchColumnBooleanField[] $hasDuplicates
     * @return OriginatingLeadSearchRowBasic
     */
    public function setHasDuplicates(SearchColumnBooleanField $hasDuplicates): OriginatingLeadSearchRowBasic
    {
        $this->hasDuplicates[] = $hasDuplicates;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getHasDuplicates(): array
    {
        return $this->hasDuplicates;
    }

    /**
     * @param SearchColumnStringField[] $homePhone
     * @return OriginatingLeadSearchRowBasic
     */
    public function setHomePhone(SearchColumnStringField $homePhone): OriginatingLeadSearchRowBasic
    {
        $this->homePhone[] = $homePhone;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getHomePhone(): array
    {
        return $this->homePhone;
    }

    /**
     * @param SearchColumnSelectField[] $image
     * @return OriginatingLeadSearchRowBasic
     */
    public function setImage(SearchColumnSelectField $image): OriginatingLeadSearchRowBasic
    {
        $this->image[] = $image;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getImage(): array
    {
        return $this->image;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return OriginatingLeadSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isBudgetApproved
     * @return OriginatingLeadSearchRowBasic
     */
    public function setIsBudgetApproved(SearchColumnBooleanField $isBudgetApproved): OriginatingLeadSearchRowBasic
    {
        $this->isBudgetApproved[] = $isBudgetApproved;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsBudgetApproved(): array
    {
        return $this->isBudgetApproved;
    }

    /**
     * @param SearchColumnBooleanField[] $isDefaultBilling
     * @return OriginatingLeadSearchRowBasic
     */
    public function setIsDefaultBilling(SearchColumnBooleanField $isDefaultBilling): OriginatingLeadSearchRowBasic
    {
        $this->isDefaultBilling[] = $isDefaultBilling;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsDefaultBilling(): array
    {
        return $this->isDefaultBilling;
    }

    /**
     * @param SearchColumnBooleanField[] $isDefaultShipping
     * @return OriginatingLeadSearchRowBasic
     */
    public function setIsDefaultShipping(SearchColumnBooleanField $isDefaultShipping): OriginatingLeadSearchRowBasic
    {
        $this->isDefaultShipping[] = $isDefaultShipping;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsDefaultShipping(): array
    {
        return $this->isDefaultShipping;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return OriginatingLeadSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isPerson
     * @return OriginatingLeadSearchRowBasic
     */
    public function setIsPerson(SearchColumnBooleanField $isPerson): OriginatingLeadSearchRowBasic
    {
        $this->isPerson[] = $isPerson;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsPerson(): array
    {
        return $this->isPerson;
    }

    /**
     * @param SearchColumnBooleanField[] $isShipAddress
     * @return OriginatingLeadSearchRowBasic
     */
    public function setIsShipAddress(SearchColumnBooleanField $isShipAddress): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnStringField[] $itemPricingLevel
     * @return OriginatingLeadSearchRowBasic
     */
    public function setItemPricingLevel(SearchColumnStringField $itemPricingLevel): OriginatingLeadSearchRowBasic
    {
        $this->itemPricingLevel[] = $itemPricingLevel;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getItemPricingLevel(): array
    {
        return $this->itemPricingLevel;
    }

    /**
     * @param SearchColumnDoubleField[] $itemPricingUnitPrice
     * @return OriginatingLeadSearchRowBasic
     */
    public function setItemPricingUnitPrice(SearchColumnDoubleField $itemPricingUnitPrice): OriginatingLeadSearchRowBasic
    {
        $this->itemPricingUnitPrice[] = $itemPricingUnitPrice;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getItemPricingUnitPrice(): array
    {
        return $this->itemPricingUnitPrice;
    }

    /**
     * @param SearchColumnDateField[] $jobEndDate
     * @return OriginatingLeadSearchRowBasic
     */
    public function setJobEndDate(SearchColumnDateField $jobEndDate): OriginatingLeadSearchRowBasic
    {
        $this->jobEndDate[] = $jobEndDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getJobEndDate(): array
    {
        return $this->jobEndDate;
    }

    /**
     * @param SearchColumnDateField[] $jobProjectedEnd
     * @return OriginatingLeadSearchRowBasic
     */
    public function setJobProjectedEnd(SearchColumnDateField $jobProjectedEnd): OriginatingLeadSearchRowBasic
    {
        $this->jobProjectedEnd[] = $jobProjectedEnd;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getJobProjectedEnd(): array
    {
        return $this->jobProjectedEnd;
    }

    /**
     * @param SearchColumnDateField[] $jobStartDate
     * @return OriginatingLeadSearchRowBasic
     */
    public function setJobStartDate(SearchColumnDateField $jobStartDate): OriginatingLeadSearchRowBasic
    {
        $this->jobStartDate[] = $jobStartDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getJobStartDate(): array
    {
        return $this->jobStartDate;
    }

    /**
     * @param SearchColumnSelectField[] $jobType
     * @return OriginatingLeadSearchRowBasic
     */
    public function setJobType(SearchColumnSelectField $jobType): OriginatingLeadSearchRowBasic
    {
        $this->jobType[] = $jobType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getJobType(): array
    {
        return $this->jobType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $language
     * @return OriginatingLeadSearchRowBasic
     */
    public function setLanguage(SearchColumnEnumSelectField $language): OriginatingLeadSearchRowBasic
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLanguage(): array
    {
        return $this->language;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return OriginatingLeadSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnStringField[] $lastName
     * @return OriginatingLeadSearchRowBasic
     */
    public function setLastName(SearchColumnStringField $lastName): OriginatingLeadSearchRowBasic
    {
        $this->lastName[] = $lastName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLastName(): array
    {
        return $this->lastName;
    }

    /**
     * @param SearchColumnDateField[] $lastOrderDate
     * @return OriginatingLeadSearchRowBasic
     */
    public function setLastOrderDate(SearchColumnDateField $lastOrderDate): OriginatingLeadSearchRowBasic
    {
        $this->lastOrderDate[] = $lastOrderDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastOrderDate(): array
    {
        return $this->lastOrderDate;
    }

    /**
     * @param SearchColumnDateField[] $lastSaleDate
     * @return OriginatingLeadSearchRowBasic
     */
    public function setLastSaleDate(SearchColumnDateField $lastSaleDate): OriginatingLeadSearchRowBasic
    {
        $this->lastSaleDate[] = $lastSaleDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastSaleDate(): array
    {
        return $this->lastSaleDate;
    }

    /**
     * @param SearchColumnDateField[] $leadDate
     * @return OriginatingLeadSearchRowBasic
     */
    public function setLeadDate(SearchColumnDateField $leadDate): OriginatingLeadSearchRowBasic
    {
        $this->leadDate[] = $leadDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLeadDate(): array
    {
        return $this->leadDate;
    }

    /**
     * @param SearchColumnSelectField[] $leadSource
     * @return OriginatingLeadSearchRowBasic
     */
    public function setLeadSource(SearchColumnSelectField $leadSource): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $level
     * @return OriginatingLeadSearchRowBasic
     */
    public function setLevel(SearchColumnEnumSelectField $level): OriginatingLeadSearchRowBasic
    {
        $this->level[] = $level;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLevel(): array
    {
        return $this->level;
    }

    /**
     * @param SearchColumnBooleanField[] $manualCreditHold
     * @return OriginatingLeadSearchRowBasic
     */
    public function setManualCreditHold(SearchColumnBooleanField $manualCreditHold): OriginatingLeadSearchRowBasic
    {
        $this->manualCreditHold[] = $manualCreditHold;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getManualCreditHold(): array
    {
        return $this->manualCreditHold;
    }

    /**
     * @param SearchColumnStringField[] $middleName
     * @return OriginatingLeadSearchRowBasic
     */
    public function setMiddleName(SearchColumnStringField $middleName): OriginatingLeadSearchRowBasic
    {
        $this->middleName[] = $middleName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMiddleName(): array
    {
        return $this->middleName;
    }

    /**
     * @param SearchColumnStringField[] $mobilePhone
     * @return OriginatingLeadSearchRowBasic
     */
    public function setMobilePhone(SearchColumnStringField $mobilePhone): OriginatingLeadSearchRowBasic
    {
        $this->mobilePhone[] = $mobilePhone;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMobilePhone(): array
    {
        return $this->mobilePhone;
    }

    /**
     * @param SearchColumnEnumSelectField[] $monthlyClosing
     * @return OriginatingLeadSearchRowBasic
     */
    public function setMonthlyClosing(SearchColumnEnumSelectField $monthlyClosing): OriginatingLeadSearchRowBasic
    {
        $this->monthlyClosing[] = $monthlyClosing;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getMonthlyClosing(): array
    {
        return $this->monthlyClosing;
    }

    /**
     * @param SearchColumnBooleanField[] $onCreditHold
     * @return OriginatingLeadSearchRowBasic
     */
    public function setOnCreditHold(SearchColumnBooleanField $onCreditHold): OriginatingLeadSearchRowBasic
    {
        $this->onCreditHold[] = $onCreditHold;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getOnCreditHold(): array
    {
        return $this->onCreditHold;
    }

    /**
     * @param SearchColumnDoubleField[] $overdueBalance
     * @return OriginatingLeadSearchRowBasic
     */
    public function setOverdueBalance(SearchColumnDoubleField $overdueBalance): OriginatingLeadSearchRowBasic
    {
        $this->overdueBalance[] = $overdueBalance;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getOverdueBalance(): array
    {
        return $this->overdueBalance;
    }

    /**
     * @param SearchColumnSelectField[] $parent
     * @return OriginatingLeadSearchRowBasic
     */
    public function setParent(SearchColumnSelectField $parent): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnSelectField[] $partner
     * @return OriginatingLeadSearchRowBasic
     */
    public function setPartner(SearchColumnSelectField $partner): OriginatingLeadSearchRowBasic
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
     * @return OriginatingLeadSearchRowBasic
     */
    public function setPartnerContribution(SearchColumnDoubleField $partnerContribution): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnStringField[] $partnerRole
     * @return OriginatingLeadSearchRowBasic
     */
    public function setPartnerRole(SearchColumnStringField $partnerRole): OriginatingLeadSearchRowBasic
    {
        $this->partnerRole[] = $partnerRole;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPartnerRole(): array
    {
        return $this->partnerRole;
    }

    /**
     * @param SearchColumnSelectField[] $partnerTeamMember
     * @return OriginatingLeadSearchRowBasic
     */
    public function setPartnerTeamMember(SearchColumnSelectField $partnerTeamMember): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnStringField[] $pec
     * @return OriginatingLeadSearchRowBasic
     */
    public function setPec(SearchColumnStringField $pec): OriginatingLeadSearchRowBasic
    {
        $this->pec[] = $pec;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPec(): array
    {
        return $this->pec;
    }

    /**
     * @param SearchColumnEnumSelectField[] $permission
     * @return OriginatingLeadSearchRowBasic
     */
    public function setPermission(SearchColumnEnumSelectField $permission): OriginatingLeadSearchRowBasic
    {
        $this->permission[] = $permission;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPermission(): array
    {
        return $this->permission;
    }

    /**
     * @param SearchColumnStringField[] $phone
     * @return OriginatingLeadSearchRowBasic
     */
    public function setPhone(SearchColumnStringField $phone): OriginatingLeadSearchRowBasic
    {
        $this->phone[] = $phone;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPhone(): array
    {
        return $this->phone;
    }

    /**
     * @param SearchColumnStringField[] $phoneticName
     * @return OriginatingLeadSearchRowBasic
     */
    public function setPhoneticName(SearchColumnStringField $phoneticName): OriginatingLeadSearchRowBasic
    {
        $this->phoneticName[] = $phoneticName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPhoneticName(): array
    {
        return $this->phoneticName;
    }

    /**
     * @param SearchColumnSelectField[] $prefCCProcessor
     * @return OriginatingLeadSearchRowBasic
     */
    public function setPrefCCProcessor(SearchColumnSelectField $prefCCProcessor): OriginatingLeadSearchRowBasic
    {
        $this->prefCCProcessor[] = $prefCCProcessor;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPrefCCProcessor(): array
    {
        return $this->prefCCProcessor;
    }

    /**
     * @param SearchColumnSelectField[] $priceLevel
     * @return OriginatingLeadSearchRowBasic
     */
    public function setPriceLevel(SearchColumnSelectField $priceLevel): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnStringField[] $pricingGroup
     * @return OriginatingLeadSearchRowBasic
     */
    public function setPricingGroup(SearchColumnStringField $pricingGroup): OriginatingLeadSearchRowBasic
    {
        $this->pricingGroup[] = $pricingGroup;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPricingGroup(): array
    {
        return $this->pricingGroup;
    }

    /**
     * @param SearchColumnStringField[] $pricingItem
     * @return OriginatingLeadSearchRowBasic
     */
    public function setPricingItem(SearchColumnStringField $pricingItem): OriginatingLeadSearchRowBasic
    {
        $this->pricingItem[] = $pricingItem;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPricingItem(): array
    {
        return $this->pricingItem;
    }

    /**
     * @param SearchColumnBooleanField[] $printTransactions
     * @return OriginatingLeadSearchRowBasic
     */
    public function setPrintTransactions(SearchColumnBooleanField $printTransactions): OriginatingLeadSearchRowBasic
    {
        $this->printTransactions[] = $printTransactions;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPrintTransactions(): array
    {
        return $this->printTransactions;
    }

    /**
     * @param SearchColumnDateField[] $prospectDate
     * @return OriginatingLeadSearchRowBasic
     */
    public function setProspectDate(SearchColumnDateField $prospectDate): OriginatingLeadSearchRowBasic
    {
        $this->prospectDate[] = $prospectDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getProspectDate(): array
    {
        return $this->prospectDate;
    }

    /**
     * @param SearchColumnStringField[] $receivablesAccount
     * @return OriginatingLeadSearchRowBasic
     */
    public function setReceivablesAccount(SearchColumnStringField $receivablesAccount): OriginatingLeadSearchRowBasic
    {
        $this->receivablesAccount[] = $receivablesAccount;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getReceivablesAccount(): array
    {
        return $this->receivablesAccount;
    }

    /**
     * @param SearchColumnLongField[] $reminderDays
     * @return OriginatingLeadSearchRowBasic
     */
    public function setReminderDays(SearchColumnLongField $reminderDays): OriginatingLeadSearchRowBasic
    {
        $this->reminderDays[] = $reminderDays;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getReminderDays(): array
    {
        return $this->reminderDays;
    }

    /**
     * @param SearchColumnStringField[] $resaleNumber
     * @return OriginatingLeadSearchRowBasic
     */
    public function setResaleNumber(SearchColumnStringField $resaleNumber): OriginatingLeadSearchRowBasic
    {
        $this->resaleNumber[] = $resaleNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getResaleNumber(): array
    {
        return $this->resaleNumber;
    }

    /**
     * @param SearchColumnStringField[] $role
     * @return OriginatingLeadSearchRowBasic
     */
    public function setRole(SearchColumnStringField $role): OriginatingLeadSearchRowBasic
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRole(): array
    {
        return $this->role;
    }

    /**
     * @param SearchColumnStringField[] $salesReadiness
     * @return OriginatingLeadSearchRowBasic
     */
    public function setSalesReadiness(SearchColumnStringField $salesReadiness): OriginatingLeadSearchRowBasic
    {
        $this->salesReadiness[] = $salesReadiness;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSalesReadiness(): array
    {
        return $this->salesReadiness;
    }

    /**
     * @param SearchColumnSelectField[] $salesRep
     * @return OriginatingLeadSearchRowBasic
     */
    public function setSalesRep(SearchColumnSelectField $salesRep): OriginatingLeadSearchRowBasic
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
     * @return OriginatingLeadSearchRowBasic
     */
    public function setSalesTeamMember(SearchColumnSelectField $salesTeamMember): OriginatingLeadSearchRowBasic
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
     * @return OriginatingLeadSearchRowBasic
     */
    public function setSalesTeamRole(SearchColumnSelectField $salesTeamRole): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnStringField[] $salutation
     * @return OriginatingLeadSearchRowBasic
     */
    public function setSalutation(SearchColumnStringField $salutation): OriginatingLeadSearchRowBasic
    {
        $this->salutation[] = $salutation;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSalutation(): array
    {
        return $this->salutation;
    }

    /**
     * @param SearchColumnStringField[] $shipAddress
     * @return OriginatingLeadSearchRowBasic
     */
    public function setShipAddress(SearchColumnStringField $shipAddress): OriginatingLeadSearchRowBasic
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
     * @return OriginatingLeadSearchRowBasic
     */
    public function setShipAddressee(SearchColumnStringField $shipAddressee): OriginatingLeadSearchRowBasic
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
     * @return OriginatingLeadSearchRowBasic
     */
    public function setShipAttention(SearchColumnStringField $shipAttention): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnStringField[] $shipCity
     * @return OriginatingLeadSearchRowBasic
     */
    public function setShipCity(SearchColumnStringField $shipCity): OriginatingLeadSearchRowBasic
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
     * @return OriginatingLeadSearchRowBasic
     */
    public function setShipComplete(SearchColumnBooleanField $shipComplete): OriginatingLeadSearchRowBasic
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
     * @return OriginatingLeadSearchRowBasic
     */
    public function setShipCountry(SearchColumnEnumSelectField $shipCountry): OriginatingLeadSearchRowBasic
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
     * @return OriginatingLeadSearchRowBasic
     */
    public function setShipCountryCode(SearchColumnStringField $shipCountryCode): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnStringField[] $shipPhone
     * @return OriginatingLeadSearchRowBasic
     */
    public function setShipPhone(SearchColumnStringField $shipPhone): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnSelectField[] $shippingItem
     * @return OriginatingLeadSearchRowBasic
     */
    public function setShippingItem(SearchColumnSelectField $shippingItem): OriginatingLeadSearchRowBasic
    {
        $this->shippingItem[] = $shippingItem;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getShippingItem(): array
    {
        return $this->shippingItem;
    }

    /**
     * @param SearchColumnStringField[] $shipState
     * @return OriginatingLeadSearchRowBasic
     */
    public function setShipState(SearchColumnStringField $shipState): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnStringField[] $shipZip
     * @return OriginatingLeadSearchRowBasic
     */
    public function setShipZip(SearchColumnStringField $shipZip): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnSelectField[] $sourceSite
     * @return OriginatingLeadSearchRowBasic
     */
    public function setSourceSite(SearchColumnSelectField $sourceSite): OriginatingLeadSearchRowBasic
    {
        $this->sourceSite[] = $sourceSite;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSourceSite(): array
    {
        return $this->sourceSite;
    }

    /**
     * @param SearchColumnLongField[] $sourceSiteId
     * @return OriginatingLeadSearchRowBasic
     */
    public function setSourceSiteId(SearchColumnLongField $sourceSiteId): OriginatingLeadSearchRowBasic
    {
        $this->sourceSiteId[] = $sourceSiteId;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getSourceSiteId(): array
    {
        return $this->sourceSiteId;
    }

    /**
     * @param SearchColumnStringField[] $stage
     * @return OriginatingLeadSearchRowBasic
     */
    public function setStage(SearchColumnStringField $stage): OriginatingLeadSearchRowBasic
    {
        $this->stage[] = $stage;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStage(): array
    {
        return $this->stage;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return OriginatingLeadSearchRowBasic
     */
    public function setStartDate(SearchColumnDateField $startDate): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $state
     * @return OriginatingLeadSearchRowBasic
     */
    public function setState(SearchColumnEnumSelectField $state): OriginatingLeadSearchRowBasic
    {
        $this->state[] = $state;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getState(): array
    {
        return $this->state;
    }

    /**
     * @param SearchColumnSelectField[] $subscription
     * @return OriginatingLeadSearchRowBasic
     */
    public function setSubscription(SearchColumnSelectField $subscription): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnDateField[] $subscriptionDate
     * @return OriginatingLeadSearchRowBasic
     */
    public function setSubscriptionDate(SearchColumnDateField $subscriptionDate): OriginatingLeadSearchRowBasic
    {
        $this->subscriptionDate[] = $subscriptionDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getSubscriptionDate(): array
    {
        return $this->subscriptionDate;
    }

    /**
     * @param SearchColumnBooleanField[] $subscriptionStatus
     * @return OriginatingLeadSearchRowBasic
     */
    public function setSubscriptionStatus(SearchColumnBooleanField $subscriptionStatus): OriginatingLeadSearchRowBasic
    {
        $this->subscriptionStatus[] = $subscriptionStatus;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getSubscriptionStatus(): array
    {
        return $this->subscriptionStatus;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return OriginatingLeadSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnBooleanField[] $taxable
     * @return OriginatingLeadSearchRowBasic
     */
    public function setTaxable(SearchColumnBooleanField $taxable): OriginatingLeadSearchRowBasic
    {
        $this->taxable[] = $taxable;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getTaxable(): array
    {
        return $this->taxable;
    }

    /**
     * @param SearchColumnSelectField[] $taxItem
     * @return OriginatingLeadSearchRowBasic
     */
    public function setTaxItem(SearchColumnSelectField $taxItem): OriginatingLeadSearchRowBasic
    {
        $this->taxItem[] = $taxItem;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxItem(): array
    {
        return $this->taxItem;
    }

    /**
     * @param SearchColumnSelectField[] $terms
     * @return OriginatingLeadSearchRowBasic
     */
    public function setTerms(SearchColumnSelectField $terms): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnSelectField[] $territory
     * @return OriginatingLeadSearchRowBasic
     */
    public function setTerritory(SearchColumnSelectField $territory): OriginatingLeadSearchRowBasic
    {
        $this->territory[] = $territory;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTerritory(): array
    {
        return $this->territory;
    }

    /**
     * @param SearchColumnStringField[] $title
     * @return OriginatingLeadSearchRowBasic
     */
    public function setTitle(SearchColumnStringField $title): OriginatingLeadSearchRowBasic
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
     * @param SearchColumnDoubleField[] $unbilledOrders
     * @return OriginatingLeadSearchRowBasic
     */
    public function setUnbilledOrders(SearchColumnDoubleField $unbilledOrders): OriginatingLeadSearchRowBasic
    {
        $this->unbilledOrders[] = $unbilledOrders;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnbilledOrders(): array
    {
        return $this->unbilledOrders;
    }

    /**
     * @param SearchColumnStringField[] $url
     * @return OriginatingLeadSearchRowBasic
     */
    public function setUrl(SearchColumnStringField $url): OriginatingLeadSearchRowBasic
    {
        $this->url[] = $url;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getUrl(): array
    {
        return $this->url;
    }

    /**
     * @param SearchColumnStringField[] $vatRegNumber
     * @return OriginatingLeadSearchRowBasic
     */
    public function setVatRegNumber(SearchColumnStringField $vatRegNumber): OriginatingLeadSearchRowBasic
    {
        $this->vatRegNumber[] = $vatRegNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getVatRegNumber(): array
    {
        return $this->vatRegNumber;
    }

    /**
     * @param SearchColumnBooleanField[] $webLead
     * @return OriginatingLeadSearchRowBasic
     */
    public function setWebLead(SearchColumnBooleanField $webLead): OriginatingLeadSearchRowBasic
    {
        $this->webLead[] = $webLead;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getWebLead(): array
    {
        return $this->webLead;
    }

    /**
     * @param SearchColumnStringField[] $zipCode
     * @return OriginatingLeadSearchRowBasic
     */
    public function setZipCode(SearchColumnStringField $zipCode): OriginatingLeadSearchRowBasic
    {
        $this->zipCode[] = $zipCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getZipCode(): array
    {
        return $this->zipCode;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return OriginatingLeadSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): OriginatingLeadSearchRowBasic
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
