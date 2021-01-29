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

class CustomerSearchRowBasic extends SearchRowBasic {
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
     * @var SearchColumnEnumSelectField[]
     */
    protected array $stage;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDate;

    /**
     * @var SearchColumnStringField[]
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
        "stage" => "SearchColumnEnumSelectField[]",
        "startDate" => "SearchColumnDateField[]",
        "state" => "SearchColumnStringField[]",
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
     * @return CustomerSearchRowBasic
     */
    public function setAccountNumber(SearchColumnStringField $accountNumber): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setAddress(SearchColumnStringField $address): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setAddressee(SearchColumnStringField $addressee): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setAddressInternalId(SearchColumnStringField $addressInternalId): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setAddressLabel(SearchColumnStringField $addressLabel): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setAddressPhone(SearchColumnStringField $addressPhone): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setAltContact(SearchColumnStringField $altContact): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setAltEmail(SearchColumnStringField $altEmail): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setAltName(SearchColumnStringField $altName): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setAltPhone(SearchColumnStringField $altPhone): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setAssignedSite(SearchColumnSelectField $assignedSite): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setAssignedSiteId(SearchColumnLongField $assignedSiteId): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setAttention(SearchColumnStringField $attention): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setAvailableOffline(SearchColumnBooleanField $availableOffline): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setBalance(SearchColumnDoubleField $balance): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setBillAddress(SearchColumnStringField $billAddress): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setBillAddressee(SearchColumnStringField $billAddressee): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setBillAttention(SearchColumnStringField $billAttention): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setBillCity(SearchColumnStringField $billCity): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setBillCountry(SearchColumnEnumSelectField $billCountry): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setBillCountryCode(SearchColumnStringField $billCountryCode): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setBillPhone(SearchColumnStringField $billPhone): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setBillState(SearchColumnStringField $billState): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setBillZipCode(SearchColumnStringField $billZipCode): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setBuyingReason(SearchColumnStringField $buyingReason): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setBuyingTimeFrame(SearchColumnStringField $buyingTimeFrame): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setCategory(SearchColumnSelectField $category): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setCcCustomerCode(SearchColumnStringField $ccCustomerCode): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setCcDefault(SearchColumnBooleanField $ccDefault): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setCcExpDate(SearchColumnDateField $ccExpDate): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setCcHolderName(SearchColumnStringField $ccHolderName): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setCcInternalId(SearchColumnStringField $ccInternalId): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setCcNumber(SearchColumnStringField $ccNumber): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setCcState(SearchColumnSelectField $ccState): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setCcStateFrom(SearchColumnDateField $ccStateFrom): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setCcType(SearchColumnSelectField $ccType): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setCity(SearchColumnStringField $city): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setComments(SearchColumnStringField $comments): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setCompanyName(SearchColumnStringField $companyName): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setConsolBalance(SearchColumnDoubleField $consolBalance): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setConsolDaysOverdue(SearchColumnLongField $consolDaysOverdue): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setConsolDepositBalance(SearchColumnDoubleField $consolDepositBalance): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setConsolOverdueBalance(SearchColumnDoubleField $consolOverdueBalance): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setConsolUnbilledOrders(SearchColumnDoubleField $consolUnbilledOrders): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setContact(SearchColumnStringField $contact): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setContribution(SearchColumnDoubleField $contribution): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setContributionPrimary(SearchColumnDoubleField $contributionPrimary): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setConversionDate(SearchColumnDateField $conversionDate): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setCountry(SearchColumnEnumSelectField $country): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setCountryCode(SearchColumnStringField $countryCode): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setCreditHold(SearchColumnEnumSelectField $creditHold): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setCreditHoldOverride(SearchColumnBooleanField $creditHoldOverride): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setCreditLimit(SearchColumnDoubleField $creditLimit): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setCurrency(SearchColumnSelectField $currency): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setDateClosed(SearchColumnDateField $dateClosed): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setDateCreated(SearchColumnDateField $dateCreated): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setDaysOverdue(SearchColumnLongField $daysOverdue): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setDefaultOrderPriority(SearchColumnDoubleField $defaultOrderPriority): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setDefaultTaxReg(SearchColumnStringField $defaultTaxReg): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setDepositBalance(SearchColumnDoubleField $depositBalance): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setDrAccount(SearchColumnStringField $drAccount): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setEmail(SearchColumnStringField $email): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setEmailPreference(SearchColumnEnumSelectField $emailPreference): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setEmailTransactions(SearchColumnBooleanField $emailTransactions): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setEndDate(SearchColumnDateField $endDate): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setEntityId(SearchColumnStringField $entityId): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setEntityNumber(SearchColumnLongField $entityNumber): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setEntityStatus(SearchColumnSelectField $entityStatus): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setEstimatedBudget(SearchColumnDoubleField $estimatedBudget): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setExplicitConversion(SearchColumnBooleanField $explicitConversion): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setFax(SearchColumnStringField $fax): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setFaxTransactions(SearchColumnBooleanField $faxTransactions): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setFirstName(SearchColumnStringField $firstName): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setFirstOrderDate(SearchColumnDateField $firstOrderDate): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setFirstSaleDate(SearchColumnDateField $firstSaleDate): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setFxAccount(SearchColumnStringField $fxAccount): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setFxBalance(SearchColumnDoubleField $fxBalance): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setFxConsolBalance(SearchColumnDoubleField $fxConsolBalance): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setFxConsolUnbilledOrders(SearchColumnDoubleField $fxConsolUnbilledOrders): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setFxUnbilledOrders(SearchColumnDoubleField $fxUnbilledOrders): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setGiveAccess(SearchColumnBooleanField $giveAccess): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setGlobalSubscriptionStatus(SearchColumnEnumSelectField $globalSubscriptionStatus): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setGroupPricingLevel(SearchColumnStringField $groupPricingLevel): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setHasDuplicates(SearchColumnBooleanField $hasDuplicates): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setHomePhone(SearchColumnStringField $homePhone): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setImage(SearchColumnSelectField $image): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setIsBudgetApproved(SearchColumnBooleanField $isBudgetApproved): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setIsDefaultBilling(SearchColumnBooleanField $isDefaultBilling): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setIsDefaultShipping(SearchColumnBooleanField $isDefaultShipping): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setIsPerson(SearchColumnBooleanField $isPerson): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setIsShipAddress(SearchColumnBooleanField $isShipAddress): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setItemPricingLevel(SearchColumnStringField $itemPricingLevel): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setItemPricingUnitPrice(SearchColumnDoubleField $itemPricingUnitPrice): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setJobEndDate(SearchColumnDateField $jobEndDate): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setJobProjectedEnd(SearchColumnDateField $jobProjectedEnd): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setJobStartDate(SearchColumnDateField $jobStartDate): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setJobType(SearchColumnSelectField $jobType): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setLanguage(SearchColumnEnumSelectField $language): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setLastName(SearchColumnStringField $lastName): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setLastOrderDate(SearchColumnDateField $lastOrderDate): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setLastSaleDate(SearchColumnDateField $lastSaleDate): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setLeadDate(SearchColumnDateField $leadDate): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setLeadSource(SearchColumnSelectField $leadSource): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setLevel(SearchColumnEnumSelectField $level): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setManualCreditHold(SearchColumnBooleanField $manualCreditHold): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setMiddleName(SearchColumnStringField $middleName): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setMobilePhone(SearchColumnStringField $mobilePhone): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setMonthlyClosing(SearchColumnEnumSelectField $monthlyClosing): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setOnCreditHold(SearchColumnBooleanField $onCreditHold): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setOverdueBalance(SearchColumnDoubleField $overdueBalance): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setParent(SearchColumnSelectField $parent): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setPartner(SearchColumnSelectField $partner): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setPartnerContribution(SearchColumnDoubleField $partnerContribution): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setPartnerRole(SearchColumnStringField $partnerRole): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setPartnerTeamMember(SearchColumnSelectField $partnerTeamMember): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setPec(SearchColumnStringField $pec): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setPermission(SearchColumnEnumSelectField $permission): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setPhone(SearchColumnStringField $phone): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setPhoneticName(SearchColumnStringField $phoneticName): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setPrefCCProcessor(SearchColumnSelectField $prefCCProcessor): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setPriceLevel(SearchColumnSelectField $priceLevel): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setPricingGroup(SearchColumnStringField $pricingGroup): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setPricingItem(SearchColumnStringField $pricingItem): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setPrintTransactions(SearchColumnBooleanField $printTransactions): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setProspectDate(SearchColumnDateField $prospectDate): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setReceivablesAccount(SearchColumnStringField $receivablesAccount): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setReminderDays(SearchColumnLongField $reminderDays): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setResaleNumber(SearchColumnStringField $resaleNumber): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setRole(SearchColumnStringField $role): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setSalesReadiness(SearchColumnStringField $salesReadiness): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setSalesRep(SearchColumnSelectField $salesRep): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setSalesTeamMember(SearchColumnSelectField $salesTeamMember): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setSalesTeamRole(SearchColumnSelectField $salesTeamRole): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setSalutation(SearchColumnStringField $salutation): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setShipAddress(SearchColumnStringField $shipAddress): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setShipAddressee(SearchColumnStringField $shipAddressee): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setShipAttention(SearchColumnStringField $shipAttention): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setShipCity(SearchColumnStringField $shipCity): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setShipComplete(SearchColumnBooleanField $shipComplete): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setShipCountry(SearchColumnEnumSelectField $shipCountry): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setShipCountryCode(SearchColumnStringField $shipCountryCode): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setShipPhone(SearchColumnStringField $shipPhone): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setShippingItem(SearchColumnSelectField $shippingItem): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setShipState(SearchColumnStringField $shipState): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setShipZip(SearchColumnStringField $shipZip): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setSourceSite(SearchColumnSelectField $sourceSite): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setSourceSiteId(SearchColumnLongField $sourceSiteId): CustomerSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $stage
     * @return CustomerSearchRowBasic
     */
    public function setStage(SearchColumnEnumSelectField $stage): CustomerSearchRowBasic
    {
        $this->stage[] = $stage;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getStage(): array
    {
        return $this->stage;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return CustomerSearchRowBasic
     */
    public function setStartDate(SearchColumnDateField $startDate): CustomerSearchRowBasic
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
     * @param SearchColumnStringField[] $state
     * @return CustomerSearchRowBasic
     */
    public function setState(SearchColumnStringField $state): CustomerSearchRowBasic
    {
        $this->state[] = $state;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getState(): array
    {
        return $this->state;
    }

    /**
     * @param SearchColumnSelectField[] $subscription
     * @return CustomerSearchRowBasic
     */
    public function setSubscription(SearchColumnSelectField $subscription): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setSubscriptionDate(SearchColumnDateField $subscriptionDate): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setSubscriptionStatus(SearchColumnBooleanField $subscriptionStatus): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setTaxable(SearchColumnBooleanField $taxable): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setTaxItem(SearchColumnSelectField $taxItem): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setTerms(SearchColumnSelectField $terms): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setTerritory(SearchColumnSelectField $territory): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setTitle(SearchColumnStringField $title): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setUnbilledOrders(SearchColumnDoubleField $unbilledOrders): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setUrl(SearchColumnStringField $url): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setVatRegNumber(SearchColumnStringField $vatRegNumber): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setWebLead(SearchColumnBooleanField $webLead): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setZipCode(SearchColumnStringField $zipCode): CustomerSearchRowBasic
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
     * @return CustomerSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): CustomerSearchRowBasic
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
