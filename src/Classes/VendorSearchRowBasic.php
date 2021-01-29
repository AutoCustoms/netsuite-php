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

class VendorSearchRowBasic extends SearchRowBasic {
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
     * @var SearchColumnStringField[]
     */
    protected array $attention;

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
     * @var SearchColumnSelectField[]
     */
    protected array $category;

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
     * @var SearchColumnStringField[]
     */
    protected array $contact;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $country;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $countryCode;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $creditLimit;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $currency;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $currentExchangeRate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $dateCreated;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $defaultTaxReg;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $eligibleForCommission;

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
    protected array $expenseAccount;

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
     * @var SearchColumnDoubleField[]
     */
    protected array $fxBalance;

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
    protected array $incoterm;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    protected $is1099Eligible;
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
    protected array $isJobResourceVend;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isPerson;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $laborCost;

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
     * @var SearchColumnEnumSelectField[]
     */
    protected array $level;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $middleName;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $mobilePhone;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $payablesAccount;

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
     * @var SearchColumnDoubleField[]
     */
    protected array $predConfidence;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $predictedDays;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $printOnCheckAs;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $printTransactions;

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
     * @var SearchColumnStringField[]
     */
    protected array $shipState;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $shipZip;

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
     * @var SearchColumnStringField[]
     */
    protected array $taxIdNum;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $terms;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $timeApprover;

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
     * @var SearchColumnSelectField[]
     */
    protected array $workCalendar;

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
        "attention" => "SearchColumnStringField[]",
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
        "category" => "SearchColumnSelectField[]",
        "city" => "SearchColumnStringField[]",
        "comments" => "SearchColumnStringField[]",
        "companyName" => "SearchColumnStringField[]",
        "contact" => "SearchColumnStringField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "countryCode" => "SearchColumnStringField[]",
        "creditLimit" => "SearchColumnDoubleField[]",
        "currency" => "SearchColumnSelectField[]",
        "currentExchangeRate" => "SearchColumnDoubleField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "defaultTaxReg" => "SearchColumnStringField[]",
        "eligibleForCommission" => "SearchColumnBooleanField[]",
        "email" => "SearchColumnStringField[]",
        "emailPreference" => "SearchColumnEnumSelectField[]",
        "emailTransactions" => "SearchColumnBooleanField[]",
        "entityId" => "SearchColumnStringField[]",
        "entityNumber" => "SearchColumnLongField[]",
        "expenseAccount" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fax" => "SearchColumnStringField[]",
        "faxTransactions" => "SearchColumnBooleanField[]",
        "firstName" => "SearchColumnStringField[]",
        "fxBalance" => "SearchColumnDoubleField[]",
        "fxUnbilledOrders" => "SearchColumnDoubleField[]",
        "giveAccess" => "SearchColumnBooleanField[]",
        "globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
        "hasDuplicates" => "SearchColumnBooleanField[]",
        "homePhone" => "SearchColumnStringField[]",
        "image" => "SearchColumnSelectField[]",
        "incoterm" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "is1099Eligible" => "SearchColumnBooleanField[]",
        "isDefaultBilling" => "SearchColumnBooleanField[]",
        "isDefaultShipping" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isJobResourceVend" => "SearchColumnBooleanField[]",
        "isPerson" => "SearchColumnBooleanField[]",
        "laborCost" => "SearchColumnDoubleField[]",
        "language" => "SearchColumnEnumSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "lastName" => "SearchColumnStringField[]",
        "level" => "SearchColumnEnumSelectField[]",
        "middleName" => "SearchColumnStringField[]",
        "mobilePhone" => "SearchColumnStringField[]",
        "payablesAccount" => "SearchColumnSelectField[]",
        "pec" => "SearchColumnStringField[]",
        "permission" => "SearchColumnEnumSelectField[]",
        "phone" => "SearchColumnStringField[]",
        "phoneticName" => "SearchColumnStringField[]",
        "predConfidence" => "SearchColumnDoubleField[]",
        "predictedDays" => "SearchColumnDoubleField[]",
        "printOnCheckAs" => "SearchColumnStringField[]",
        "printTransactions" => "SearchColumnBooleanField[]",
        "purchaseOrderAmount" => "SearchColumnDoubleField[]",
        "purchaseOrderQuantity" => "SearchColumnDoubleField[]",
        "purchaseOrderQuantityDiff" => "SearchColumnDoubleField[]",
        "receiptAmount" => "SearchColumnDoubleField[]",
        "receiptQuantity" => "SearchColumnDoubleField[]",
        "receiptQuantityDiff" => "SearchColumnDoubleField[]",
        "salutation" => "SearchColumnStringField[]",
        "shipAddress" => "SearchColumnStringField[]",
        "shipAddress1" => "SearchColumnStringField[]",
        "shipAddress2" => "SearchColumnStringField[]",
        "shipAddress3" => "SearchColumnStringField[]",
        "shipAddressee" => "SearchColumnStringField[]",
        "shipAttention" => "SearchColumnStringField[]",
        "shipCity" => "SearchColumnStringField[]",
        "shipCountry" => "SearchColumnEnumSelectField[]",
        "shipCountryCode" => "SearchColumnStringField[]",
        "shipPhone" => "SearchColumnStringField[]",
        "shipState" => "SearchColumnStringField[]",
        "shipZip" => "SearchColumnStringField[]",
        "state" => "SearchColumnStringField[]",
        "subscription" => "SearchColumnSelectField[]",
        "subscriptionDate" => "SearchColumnDateField[]",
        "subscriptionStatus" => "SearchColumnBooleanField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "taxIdNum" => "SearchColumnStringField[]",
        "terms" => "SearchColumnSelectField[]",
        "timeApprover" => "SearchColumnSelectField[]",
        "title" => "SearchColumnStringField[]",
        "unbilledOrders" => "SearchColumnDoubleField[]",
        "url" => "SearchColumnStringField[]",
        "vatRegNumber" => "SearchColumnStringField[]",
        "workCalendar" => "SearchColumnSelectField[]",
        "zipCode" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnStringField[] $accountNumber
     * @return VendorSearchRowBasic
     */
    public function setAccountNumber(SearchColumnStringField $accountNumber): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setAddress(SearchColumnStringField $address): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setAddressee(SearchColumnStringField $addressee): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setAddressInternalId(SearchColumnStringField $addressInternalId): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setAddressLabel(SearchColumnStringField $addressLabel): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setAddressPhone(SearchColumnStringField $addressPhone): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setAltContact(SearchColumnStringField $altContact): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setAltEmail(SearchColumnStringField $altEmail): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setAltName(SearchColumnStringField $altName): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setAltPhone(SearchColumnStringField $altPhone): VendorSearchRowBasic
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
     * @param SearchColumnStringField[] $attention
     * @return VendorSearchRowBasic
     */
    public function setAttention(SearchColumnStringField $attention): VendorSearchRowBasic
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
     * @param SearchColumnDoubleField[] $balance
     * @return VendorSearchRowBasic
     */
    public function setBalance(SearchColumnDoubleField $balance): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setBillAddress(SearchColumnStringField $billAddress): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setBillAddressee(SearchColumnStringField $billAddressee): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setBillAttention(SearchColumnStringField $billAttention): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setBillCity(SearchColumnStringField $billCity): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setBillCountry(SearchColumnEnumSelectField $billCountry): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setBillCountryCode(SearchColumnStringField $billCountryCode): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setBillPhone(SearchColumnStringField $billPhone): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setBillState(SearchColumnStringField $billState): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setBillZipCode(SearchColumnStringField $billZipCode): VendorSearchRowBasic
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
     * @param SearchColumnSelectField[] $category
     * @return VendorSearchRowBasic
     */
    public function setCategory(SearchColumnSelectField $category): VendorSearchRowBasic
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
     * @param SearchColumnStringField[] $city
     * @return VendorSearchRowBasic
     */
    public function setCity(SearchColumnStringField $city): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setComments(SearchColumnStringField $comments): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setCompanyName(SearchColumnStringField $companyName): VendorSearchRowBasic
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
     * @param SearchColumnStringField[] $contact
     * @return VendorSearchRowBasic
     */
    public function setContact(SearchColumnStringField $contact): VendorSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $country
     * @return VendorSearchRowBasic
     */
    public function setCountry(SearchColumnEnumSelectField $country): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setCountryCode(SearchColumnStringField $countryCode): VendorSearchRowBasic
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
     * @param SearchColumnDoubleField[] $creditLimit
     * @return VendorSearchRowBasic
     */
    public function setCreditLimit(SearchColumnDoubleField $creditLimit): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setCurrency(SearchColumnSelectField $currency): VendorSearchRowBasic
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
     * @param SearchColumnDoubleField[] $currentExchangeRate
     * @return VendorSearchRowBasic
     */
    public function setCurrentExchangeRate(SearchColumnDoubleField $currentExchangeRate): VendorSearchRowBasic
    {
        $this->currentExchangeRate[] = $currentExchangeRate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCurrentExchangeRate(): array
    {
        return $this->currentExchangeRate;
    }

    /**
     * @param SearchColumnDateField[] $dateCreated
     * @return VendorSearchRowBasic
     */
    public function setDateCreated(SearchColumnDateField $dateCreated): VendorSearchRowBasic
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
     * @param SearchColumnStringField[] $defaultTaxReg
     * @return VendorSearchRowBasic
     */
    public function setDefaultTaxReg(SearchColumnStringField $defaultTaxReg): VendorSearchRowBasic
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
     * @param SearchColumnBooleanField[] $eligibleForCommission
     * @return VendorSearchRowBasic
     */
    public function setEligibleForCommission(SearchColumnBooleanField $eligibleForCommission): VendorSearchRowBasic
    {
        $this->eligibleForCommission[] = $eligibleForCommission;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getEligibleForCommission(): array
    {
        return $this->eligibleForCommission;
    }

    /**
     * @param SearchColumnStringField[] $email
     * @return VendorSearchRowBasic
     */
    public function setEmail(SearchColumnStringField $email): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setEmailPreference(SearchColumnEnumSelectField $emailPreference): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setEmailTransactions(SearchColumnBooleanField $emailTransactions): VendorSearchRowBasic
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
     * @param SearchColumnStringField[] $entityId
     * @return VendorSearchRowBasic
     */
    public function setEntityId(SearchColumnStringField $entityId): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setEntityNumber(SearchColumnLongField $entityNumber): VendorSearchRowBasic
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
     * @param SearchColumnSelectField[] $expenseAccount
     * @return VendorSearchRowBasic
     */
    public function setExpenseAccount(SearchColumnSelectField $expenseAccount): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setFax(SearchColumnStringField $fax): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setFaxTransactions(SearchColumnBooleanField $faxTransactions): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setFirstName(SearchColumnStringField $firstName): VendorSearchRowBasic
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
     * @param SearchColumnDoubleField[] $fxBalance
     * @return VendorSearchRowBasic
     */
    public function setFxBalance(SearchColumnDoubleField $fxBalance): VendorSearchRowBasic
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
     * @param SearchColumnDoubleField[] $fxUnbilledOrders
     * @return VendorSearchRowBasic
     */
    public function setFxUnbilledOrders(SearchColumnDoubleField $fxUnbilledOrders): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setGiveAccess(SearchColumnBooleanField $giveAccess): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setGlobalSubscriptionStatus(SearchColumnEnumSelectField $globalSubscriptionStatus): VendorSearchRowBasic
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
     * @param SearchColumnBooleanField[] $hasDuplicates
     * @return VendorSearchRowBasic
     */
    public function setHasDuplicates(SearchColumnBooleanField $hasDuplicates): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setHomePhone(SearchColumnStringField $homePhone): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setImage(SearchColumnSelectField $image): VendorSearchRowBasic
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
     * @param SearchColumnSelectField[] $incoterm
     * @return VendorSearchRowBasic
     */
    public function setIncoterm(SearchColumnSelectField $incoterm): VendorSearchRowBasic
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
     * @param SearchColumnSelectField[] $internalId
     * @return VendorSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): VendorSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isDefaultBilling
     * @return VendorSearchRowBasic
     */
    public function setIsDefaultBilling(SearchColumnBooleanField $isDefaultBilling): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setIsDefaultShipping(SearchColumnBooleanField $isDefaultShipping): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): VendorSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isJobResourceVend
     * @return VendorSearchRowBasic
     */
    public function setIsJobResourceVend(SearchColumnBooleanField $isJobResourceVend): VendorSearchRowBasic
    {
        $this->isJobResourceVend[] = $isJobResourceVend;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsJobResourceVend(): array
    {
        return $this->isJobResourceVend;
    }

    /**
     * @param SearchColumnBooleanField[] $isPerson
     * @return VendorSearchRowBasic
     */
    public function setIsPerson(SearchColumnBooleanField $isPerson): VendorSearchRowBasic
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
     * @param SearchColumnDoubleField[] $laborCost
     * @return VendorSearchRowBasic
     */
    public function setLaborCost(SearchColumnDoubleField $laborCost): VendorSearchRowBasic
    {
        $this->laborCost[] = $laborCost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLaborCost(): array
    {
        return $this->laborCost;
    }

    /**
     * @param SearchColumnEnumSelectField[] $language
     * @return VendorSearchRowBasic
     */
    public function setLanguage(SearchColumnEnumSelectField $language): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setLastName(SearchColumnStringField $lastName): VendorSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $level
     * @return VendorSearchRowBasic
     */
    public function setLevel(SearchColumnEnumSelectField $level): VendorSearchRowBasic
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
     * @param SearchColumnStringField[] $middleName
     * @return VendorSearchRowBasic
     */
    public function setMiddleName(SearchColumnStringField $middleName): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setMobilePhone(SearchColumnStringField $mobilePhone): VendorSearchRowBasic
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
     * @param SearchColumnSelectField[] $payablesAccount
     * @return VendorSearchRowBasic
     */
    public function setPayablesAccount(SearchColumnSelectField $payablesAccount): VendorSearchRowBasic
    {
        $this->payablesAccount[] = $payablesAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPayablesAccount(): array
    {
        return $this->payablesAccount;
    }

    /**
     * @param SearchColumnStringField[] $pec
     * @return VendorSearchRowBasic
     */
    public function setPec(SearchColumnStringField $pec): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setPermission(SearchColumnEnumSelectField $permission): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setPhone(SearchColumnStringField $phone): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setPhoneticName(SearchColumnStringField $phoneticName): VendorSearchRowBasic
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
     * @param SearchColumnDoubleField[] $predConfidence
     * @return VendorSearchRowBasic
     */
    public function setPredConfidence(SearchColumnDoubleField $predConfidence): VendorSearchRowBasic
    {
        $this->predConfidence[] = $predConfidence;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPredConfidence(): array
    {
        return $this->predConfidence;
    }

    /**
     * @param SearchColumnDoubleField[] $predictedDays
     * @return VendorSearchRowBasic
     */
    public function setPredictedDays(SearchColumnDoubleField $predictedDays): VendorSearchRowBasic
    {
        $this->predictedDays[] = $predictedDays;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPredictedDays(): array
    {
        return $this->predictedDays;
    }

    /**
     * @param SearchColumnStringField[] $printOnCheckAs
     * @return VendorSearchRowBasic
     */
    public function setPrintOnCheckAs(SearchColumnStringField $printOnCheckAs): VendorSearchRowBasic
    {
        $this->printOnCheckAs[] = $printOnCheckAs;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPrintOnCheckAs(): array
    {
        return $this->printOnCheckAs;
    }

    /**
     * @param SearchColumnBooleanField[] $printTransactions
     * @return VendorSearchRowBasic
     */
    public function setPrintTransactions(SearchColumnBooleanField $printTransactions): VendorSearchRowBasic
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
     * @param SearchColumnDoubleField[] $purchaseOrderAmount
     * @return VendorSearchRowBasic
     */
    public function setPurchaseOrderAmount(SearchColumnDoubleField $purchaseOrderAmount): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setPurchaseOrderQuantity(SearchColumnDoubleField $purchaseOrderQuantity): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setPurchaseOrderQuantityDiff(SearchColumnDoubleField $purchaseOrderQuantityDiff): VendorSearchRowBasic
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
     * @param SearchColumnDoubleField[] $receiptAmount
     * @return VendorSearchRowBasic
     */
    public function setReceiptAmount(SearchColumnDoubleField $receiptAmount): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setReceiptQuantity(SearchColumnDoubleField $receiptQuantity): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setReceiptQuantityDiff(SearchColumnDoubleField $receiptQuantityDiff): VendorSearchRowBasic
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
     * @param SearchColumnStringField[] $salutation
     * @return VendorSearchRowBasic
     */
    public function setSalutation(SearchColumnStringField $salutation): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setShipAddress(SearchColumnStringField $shipAddress): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setShipAddressee(SearchColumnStringField $shipAddressee): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setShipAttention(SearchColumnStringField $shipAttention): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setShipCity(SearchColumnStringField $shipCity): VendorSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $shipCountry
     * @return VendorSearchRowBasic
     */
    public function setShipCountry(SearchColumnEnumSelectField $shipCountry): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setShipCountryCode(SearchColumnStringField $shipCountryCode): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setShipPhone(SearchColumnStringField $shipPhone): VendorSearchRowBasic
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
     * @param SearchColumnStringField[] $shipState
     * @return VendorSearchRowBasic
     */
    public function setShipState(SearchColumnStringField $shipState): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setShipZip(SearchColumnStringField $shipZip): VendorSearchRowBasic
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
     * @param SearchColumnStringField[] $state
     * @return VendorSearchRowBasic
     */
    public function setState(SearchColumnStringField $state): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setSubscription(SearchColumnSelectField $subscription): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setSubscriptionDate(SearchColumnDateField $subscriptionDate): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setSubscriptionStatus(SearchColumnBooleanField $subscriptionStatus): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): VendorSearchRowBasic
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
     * @param SearchColumnStringField[] $taxIdNum
     * @return VendorSearchRowBasic
     */
    public function setTaxIdNum(SearchColumnStringField $taxIdNum): VendorSearchRowBasic
    {
        $this->taxIdNum[] = $taxIdNum;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTaxIdNum(): array
    {
        return $this->taxIdNum;
    }

    /**
     * @param SearchColumnSelectField[] $terms
     * @return VendorSearchRowBasic
     */
    public function setTerms(SearchColumnSelectField $terms): VendorSearchRowBasic
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
     * @param SearchColumnSelectField[] $timeApprover
     * @return VendorSearchRowBasic
     */
    public function setTimeApprover(SearchColumnSelectField $timeApprover): VendorSearchRowBasic
    {
        $this->timeApprover[] = $timeApprover;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTimeApprover(): array
    {
        return $this->timeApprover;
    }

    /**
     * @param SearchColumnStringField[] $title
     * @return VendorSearchRowBasic
     */
    public function setTitle(SearchColumnStringField $title): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setUnbilledOrders(SearchColumnDoubleField $unbilledOrders): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setUrl(SearchColumnStringField $url): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setVatRegNumber(SearchColumnStringField $vatRegNumber): VendorSearchRowBasic
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
     * @param SearchColumnSelectField[] $workCalendar
     * @return VendorSearchRowBasic
     */
    public function setWorkCalendar(SearchColumnSelectField $workCalendar): VendorSearchRowBasic
    {
        $this->workCalendar[] = $workCalendar;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getWorkCalendar(): array
    {
        return $this->workCalendar;
    }

    /**
     * @param SearchColumnStringField[] $zipCode
     * @return VendorSearchRowBasic
     */
    public function setZipCode(SearchColumnStringField $zipCode): VendorSearchRowBasic
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
     * @return VendorSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): VendorSearchRowBasic
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
