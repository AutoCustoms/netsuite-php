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

class VendorSearchBasic extends SearchRecordBasic {
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
     * @var SearchStringField
     */
    protected SearchStringField $attention;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $balance;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $billAddress;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $category;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $city;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $comments;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $contact;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $country;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $county;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $creditLimit;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $currency;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $currentExchangeRate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $dateCreated;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $defaultTaxReg;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $defaultTaxRegText;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $eligibleForCommission;

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
     * @var SearchStringField
     */
    protected SearchStringField $entityId;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $expenseAccount;

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
     * @var SearchDoubleField
     */
    protected SearchDoubleField $fxBalance;

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
    protected SearchMultiSelectField $incoterm;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    protected $is1099Eligible;
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
    protected SearchBooleanField $isJobResourceVend;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isPerson;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $laborCost;

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
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $level;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $middleName;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $otherRelationships;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $payablesAccount;

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
     * @var SearchDoubleField
     */
    protected SearchDoubleField $predConfidence;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $predictedDays;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $printTransactions;

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
     * @var SearchStringField
     */
    protected SearchStringField $salutation;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $shipAddress;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $state;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $taxIdNum;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $timeApprover;

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
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $workCalendar;

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
        "attention" => "SearchStringField",
        "balance" => "SearchDoubleField",
        "billAddress" => "SearchStringField",
        "category" => "SearchMultiSelectField",
        "city" => "SearchStringField",
        "comments" => "SearchStringField",
        "contact" => "SearchStringField",
        "country" => "SearchEnumMultiSelectField",
        "county" => "SearchStringField",
        "creditLimit" => "SearchDoubleField",
        "currency" => "SearchMultiSelectField",
        "currentExchangeRate" => "SearchDoubleField",
        "dateCreated" => "SearchDateField",
        "defaultTaxReg" => "SearchMultiSelectField",
        "defaultTaxRegText" => "SearchStringField",
        "eligibleForCommission" => "SearchBooleanField",
        "email" => "SearchStringField",
        "emailPreference" => "SearchEnumMultiSelectField",
        "emailTransactions" => "SearchBooleanField",
        "entityId" => "SearchStringField",
        "expenseAccount" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "fax" => "SearchStringField",
        "faxTransactions" => "SearchBooleanField",
        "firstName" => "SearchStringField",
        "fxBalance" => "SearchDoubleField",
        "fxUnbilledOrders" => "SearchDoubleField",
        "giveAccess" => "SearchBooleanField",
        "globalSubscriptionStatus" => "SearchEnumMultiSelectField",
        "group" => "SearchMultiSelectField",
        "hasDuplicates" => "SearchBooleanField",
        "image" => "SearchStringField",
        "incoterm" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "is1099Eligible" => "SearchBooleanField",
        "isDefaultBilling" => "SearchBooleanField",
        "isDefaultShipping" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "isJobResourceVend" => "SearchBooleanField",
        "isPerson" => "SearchBooleanField",
        "laborCost" => "SearchDoubleField",
        "language" => "SearchEnumMultiSelectField",
        "lastModifiedDate" => "SearchDateField",
        "lastName" => "SearchStringField",
        "level" => "SearchEnumMultiSelectField",
        "middleName" => "SearchStringField",
        "otherRelationships" => "SearchEnumMultiSelectField",
        "payablesAccount" => "SearchMultiSelectField",
        "pec" => "SearchStringField",
        "permission" => "SearchEnumMultiSelectField",
        "phone" => "SearchStringField",
        "phoneticName" => "SearchStringField",
        "predConfidence" => "SearchDoubleField",
        "predictedDays" => "SearchDoubleField",
        "printTransactions" => "SearchBooleanField",
        "purchaseOrderAmount" => "SearchDoubleField",
        "purchaseOrderQuantity" => "SearchDoubleField",
        "purchaseOrderQuantityDiff" => "SearchDoubleField",
        "receiptAmount" => "SearchDoubleField",
        "receiptQuantity" => "SearchDoubleField",
        "receiptQuantityDiff" => "SearchDoubleField",
        "salutation" => "SearchStringField",
        "shipAddress" => "SearchStringField",
        "state" => "SearchStringField",
        "subsidiary" => "SearchMultiSelectField",
        "taxIdNum" => "SearchStringField",
        "timeApprover" => "SearchMultiSelectField",
        "title" => "SearchStringField",
        "unbilledOrders" => "SearchDoubleField",
        "url" => "SearchStringField",
        "vatRegNumber" => "SearchStringField",
        "workCalendar" => "SearchMultiSelectField",
        "zipCode" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchStringField $accountNumber
     * @return VendorSearchBasic
     */
    public function setAccountNumber(SearchStringField $accountNumber): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setAddress(SearchStringField $address): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setAddressee(SearchStringField $addressee): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setAddressLabel(SearchStringField $addressLabel): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setAddressPhone(SearchStringField $addressPhone): VendorSearchBasic
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
     * @param SearchStringField $attention
     * @return VendorSearchBasic
     */
    public function setAttention(SearchStringField $attention): VendorSearchBasic
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
     * @param SearchDoubleField $balance
     * @return VendorSearchBasic
     */
    public function setBalance(SearchDoubleField $balance): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setBillAddress(SearchStringField $billAddress): VendorSearchBasic
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
     * @param SearchMultiSelectField $category
     * @return VendorSearchBasic
     */
    public function setCategory(SearchMultiSelectField $category): VendorSearchBasic
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
     * @param SearchStringField $city
     * @return VendorSearchBasic
     */
    public function setCity(SearchStringField $city): VendorSearchBasic
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
     * @param SearchStringField $comments
     * @return VendorSearchBasic
     */
    public function setComments(SearchStringField $comments): VendorSearchBasic
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
     * @param SearchStringField $contact
     * @return VendorSearchBasic
     */
    public function setContact(SearchStringField $contact): VendorSearchBasic
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
     * @param SearchEnumMultiSelectField $country
     * @return VendorSearchBasic
     */
    public function setCountry(SearchEnumMultiSelectField $country): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setCounty(SearchStringField $county): VendorSearchBasic
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
     * @param SearchDoubleField $creditLimit
     * @return VendorSearchBasic
     */
    public function setCreditLimit(SearchDoubleField $creditLimit): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setCurrency(SearchMultiSelectField $currency): VendorSearchBasic
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
     * @param SearchDoubleField $currentExchangeRate
     * @return VendorSearchBasic
     */
    public function setCurrentExchangeRate(SearchDoubleField $currentExchangeRate): VendorSearchBasic
    {
        $this->currentExchangeRate = $currentExchangeRate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCurrentExchangeRate(): SearchDoubleField
    {
        return $this->currentExchangeRate;
    }

    /**
     * @param SearchDateField $dateCreated
     * @return VendorSearchBasic
     */
    public function setDateCreated(SearchDateField $dateCreated): VendorSearchBasic
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
     * @param SearchMultiSelectField $defaultTaxReg
     * @return VendorSearchBasic
     */
    public function setDefaultTaxReg(SearchMultiSelectField $defaultTaxReg): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setDefaultTaxRegText(SearchStringField $defaultTaxRegText): VendorSearchBasic
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
     * @param SearchBooleanField $eligibleForCommission
     * @return VendorSearchBasic
     */
    public function setEligibleForCommission(SearchBooleanField $eligibleForCommission): VendorSearchBasic
    {
        $this->eligibleForCommission = $eligibleForCommission;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getEligibleForCommission(): SearchBooleanField
    {
        return $this->eligibleForCommission;
    }

    /**
     * @param SearchStringField $email
     * @return VendorSearchBasic
     */
    public function setEmail(SearchStringField $email): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setEmailPreference(SearchEnumMultiSelectField $emailPreference): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setEmailTransactions(SearchBooleanField $emailTransactions): VendorSearchBasic
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
     * @param SearchStringField $entityId
     * @return VendorSearchBasic
     */
    public function setEntityId(SearchStringField $entityId): VendorSearchBasic
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
     * @param SearchMultiSelectField $expenseAccount
     * @return VendorSearchBasic
     */
    public function setExpenseAccount(SearchMultiSelectField $expenseAccount): VendorSearchBasic
    {
        $this->expenseAccount = $expenseAccount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExpenseAccount(): SearchMultiSelectField
    {
        return $this->expenseAccount;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return VendorSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setFax(SearchStringField $fax): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setFaxTransactions(SearchBooleanField $faxTransactions): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setFirstName(SearchStringField $firstName): VendorSearchBasic
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
     * @param SearchDoubleField $fxBalance
     * @return VendorSearchBasic
     */
    public function setFxBalance(SearchDoubleField $fxBalance): VendorSearchBasic
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
     * @param SearchDoubleField $fxUnbilledOrders
     * @return VendorSearchBasic
     */
    public function setFxUnbilledOrders(SearchDoubleField $fxUnbilledOrders): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setGiveAccess(SearchBooleanField $giveAccess): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setGlobalSubscriptionStatus(SearchEnumMultiSelectField $globalSubscriptionStatus): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setGroup(SearchMultiSelectField $group): VendorSearchBasic
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
     * @param SearchBooleanField $hasDuplicates
     * @return VendorSearchBasic
     */
    public function setHasDuplicates(SearchBooleanField $hasDuplicates): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setImage(SearchStringField $image): VendorSearchBasic
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
     * @param SearchMultiSelectField $incoterm
     * @return VendorSearchBasic
     */
    public function setIncoterm(SearchMultiSelectField $incoterm): VendorSearchBasic
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
     * @param SearchMultiSelectField $internalId
     * @return VendorSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): VendorSearchBasic
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
     * @param SearchBooleanField $isDefaultBilling
     * @return VendorSearchBasic
     */
    public function setIsDefaultBilling(SearchBooleanField $isDefaultBilling): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setIsDefaultShipping(SearchBooleanField $isDefaultShipping): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): VendorSearchBasic
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
     * @param SearchBooleanField $isJobResourceVend
     * @return VendorSearchBasic
     */
    public function setIsJobResourceVend(SearchBooleanField $isJobResourceVend): VendorSearchBasic
    {
        $this->isJobResourceVend = $isJobResourceVend;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsJobResourceVend(): SearchBooleanField
    {
        return $this->isJobResourceVend;
    }

    /**
     * @param SearchBooleanField $isPerson
     * @return VendorSearchBasic
     */
    public function setIsPerson(SearchBooleanField $isPerson): VendorSearchBasic
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
     * @param SearchDoubleField $laborCost
     * @return VendorSearchBasic
     */
    public function setLaborCost(SearchDoubleField $laborCost): VendorSearchBasic
    {
        $this->laborCost = $laborCost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLaborCost(): SearchDoubleField
    {
        return $this->laborCost;
    }

    /**
     * @param SearchEnumMultiSelectField $language
     * @return VendorSearchBasic
     */
    public function setLanguage(SearchEnumMultiSelectField $language): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setLastName(SearchStringField $lastName): VendorSearchBasic
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
     * @param SearchEnumMultiSelectField $level
     * @return VendorSearchBasic
     */
    public function setLevel(SearchEnumMultiSelectField $level): VendorSearchBasic
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
     * @param SearchStringField $middleName
     * @return VendorSearchBasic
     */
    public function setMiddleName(SearchStringField $middleName): VendorSearchBasic
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
     * @param SearchEnumMultiSelectField $otherRelationships
     * @return VendorSearchBasic
     */
    public function setOtherRelationships(SearchEnumMultiSelectField $otherRelationships): VendorSearchBasic
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
     * @param SearchMultiSelectField $payablesAccount
     * @return VendorSearchBasic
     */
    public function setPayablesAccount(SearchMultiSelectField $payablesAccount): VendorSearchBasic
    {
        $this->payablesAccount = $payablesAccount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPayablesAccount(): SearchMultiSelectField
    {
        return $this->payablesAccount;
    }

    /**
     * @param SearchStringField $pec
     * @return VendorSearchBasic
     */
    public function setPec(SearchStringField $pec): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setPermission(SearchEnumMultiSelectField $permission): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setPhone(SearchStringField $phone): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setPhoneticName(SearchStringField $phoneticName): VendorSearchBasic
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
     * @param SearchDoubleField $predConfidence
     * @return VendorSearchBasic
     */
    public function setPredConfidence(SearchDoubleField $predConfidence): VendorSearchBasic
    {
        $this->predConfidence = $predConfidence;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPredConfidence(): SearchDoubleField
    {
        return $this->predConfidence;
    }

    /**
     * @param SearchDoubleField $predictedDays
     * @return VendorSearchBasic
     */
    public function setPredictedDays(SearchDoubleField $predictedDays): VendorSearchBasic
    {
        $this->predictedDays = $predictedDays;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPredictedDays(): SearchDoubleField
    {
        return $this->predictedDays;
    }

    /**
     * @param SearchBooleanField $printTransactions
     * @return VendorSearchBasic
     */
    public function setPrintTransactions(SearchBooleanField $printTransactions): VendorSearchBasic
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
     * @param SearchDoubleField $purchaseOrderAmount
     * @return VendorSearchBasic
     */
    public function setPurchaseOrderAmount(SearchDoubleField $purchaseOrderAmount): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setPurchaseOrderQuantity(SearchDoubleField $purchaseOrderQuantity): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setPurchaseOrderQuantityDiff(SearchDoubleField $purchaseOrderQuantityDiff): VendorSearchBasic
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
     * @param SearchDoubleField $receiptAmount
     * @return VendorSearchBasic
     */
    public function setReceiptAmount(SearchDoubleField $receiptAmount): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setReceiptQuantity(SearchDoubleField $receiptQuantity): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setReceiptQuantityDiff(SearchDoubleField $receiptQuantityDiff): VendorSearchBasic
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
     * @param SearchStringField $salutation
     * @return VendorSearchBasic
     */
    public function setSalutation(SearchStringField $salutation): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setShipAddress(SearchStringField $shipAddress): VendorSearchBasic
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
     * @param SearchStringField $state
     * @return VendorSearchBasic
     */
    public function setState(SearchStringField $state): VendorSearchBasic
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
     * @param SearchMultiSelectField $subsidiary
     * @return VendorSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): VendorSearchBasic
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
     * @param SearchStringField $taxIdNum
     * @return VendorSearchBasic
     */
    public function setTaxIdNum(SearchStringField $taxIdNum): VendorSearchBasic
    {
        $this->taxIdNum = $taxIdNum;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTaxIdNum(): SearchStringField
    {
        return $this->taxIdNum;
    }

    /**
     * @param SearchMultiSelectField $timeApprover
     * @return VendorSearchBasic
     */
    public function setTimeApprover(SearchMultiSelectField $timeApprover): VendorSearchBasic
    {
        $this->timeApprover = $timeApprover;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTimeApprover(): SearchMultiSelectField
    {
        return $this->timeApprover;
    }

    /**
     * @param SearchStringField $title
     * @return VendorSearchBasic
     */
    public function setTitle(SearchStringField $title): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setUnbilledOrders(SearchDoubleField $unbilledOrders): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setUrl(SearchStringField $url): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setVatRegNumber(SearchStringField $vatRegNumber): VendorSearchBasic
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
     * @param SearchMultiSelectField $workCalendar
     * @return VendorSearchBasic
     */
    public function setWorkCalendar(SearchMultiSelectField $workCalendar): VendorSearchBasic
    {
        $this->workCalendar = $workCalendar;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getWorkCalendar(): SearchMultiSelectField
    {
        return $this->workCalendar;
    }

    /**
     * @param SearchStringField $zipCode
     * @return VendorSearchBasic
     */
    public function setZipCode(SearchStringField $zipCode): VendorSearchBasic
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
     * @return VendorSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): VendorSearchBasic
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
