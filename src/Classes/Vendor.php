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

class Vendor extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $entityId;

    /**
     * @var string
     */
    protected string $altName;

    /**
     * @var bool
     */
    protected bool $isPerson;

    /**
     * @var string
     */
    protected string $phoneticName;

    /**
     * @var string
     */
    protected string $salutation;

    /**
     * @var string
     */
    protected string $firstName;

    /**
     * @var string
     */
    protected string $middleName;

    /**
     * @var string
     */
    protected string $lastName;

    /**
     * @var string
     */
    protected string $companyName;

    /**
     * @var string
     */
    protected string $phone;

    /**
     * @var string
     */
    protected string $fax;

    /**
     * @var string
     */
    protected string $email;

    /**
     * @var string
     */
    protected string $url;

    /**
     * @var string
     */
    protected string $defaultAddress;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var string
     */
    protected string $dateCreated;

    /**
     * @var RecordRef
     */
    protected RecordRef $category;

    /**
     * @var string
     */
    protected string $title;

    /**
     * @var string
     */
    protected string $printOnCheckAs;

    /**
     * @var string
     */
    protected string $altPhone;

    /**
     * @var string
     */
    protected string $homePhone;

    /**
     * @var string
     */
    protected string $mobilePhone;

    /**
     * @var string
     */
    protected string $altEmail;

    /**
     * @var string
     */
    protected string $comments;

    /**
     * @var GlobalSubscriptionStatus
     */
    protected GlobalSubscriptionStatus $globalSubscriptionStatus;

    /**
     * @var RecordRef
     */
    protected RecordRef $image;

    /**
     * @var EmailPreference
     */
    protected EmailPreference $emailPreference;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $representingSubsidiary;

    /**
     * @var string
     */
    protected string $accountNumber;

    /**
     * @var string
     */
    protected string $legalName;

    /**
     * @var string
     */
    protected string $vatRegNumber;

    /**
     * @var RecordRef
     */
    protected RecordRef $expenseAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $payablesAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $terms;

    /**
     * @var RecordRef
     */
    protected RecordRef $incoterm;

    /**
     * @var float
     */
    protected float $creditLimit;

    /**
     * @var float
     */
    protected float $balancePrimary;

    /**
     * @var float
     */
    protected float $openingBalance;

    /**
     * @var string
     */
    protected string $openingBalanceDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $openingBalanceAccount;

    /**
     * @var float
     */
    protected float $balance;

    /**
     * @var float
     */
    protected float $unbilledOrdersPrimary;

    /**
     * @var string
     */
    protected string $bcn;

    /**
     * @var float
     */
    protected float $unbilledOrders;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    protected $is1099Eligible;
    /**
     * @var bool
     */
    protected bool $isJobResourceVend;

    /**
     * @var float
     */
    protected float $laborCost;

    /**
     * @var float
     */
    protected float $purchaseOrderQuantity;

    /**
     * @var float
     */
    protected float $purchaseOrderAmount;

    /**
     * @var float
     */
    protected float $purchaseOrderQuantityDiff;

    /**
     * @var float
     */
    protected float $receiptQuantity;

    /**
     * @var float
     */
    protected float $receiptAmount;

    /**
     * @var float
     */
    protected float $receiptQuantityDiff;

    /**
     * @var RecordRef
     */
    protected RecordRef $workCalendar;

    /**
     * @var string
     */
    protected string $taxIdNum;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxItem;

    /**
     * @var bool
     */
    protected bool $giveAccess;

    /**
     * @var bool
     */
    protected bool $sendEmail;

    /**
     * @var bool
     */
    protected bool $billPay;

    /**
     * @var bool
     */
    protected bool $isAccountant;

    /**
     * @var string
     */
    protected string $password;

    protected $password2;
    /**
     * @var bool
     */
    protected bool $requirePwdChange;

    /**
     * @var bool
     */
    protected bool $eligibleForCommission;

    /**
     * @var bool
     */
    protected bool $emailTransactions;

    /**
     * @var bool
     */
    protected bool $printTransactions;

    /**
     * @var bool
     */
    protected bool $faxTransactions;

    /**
     * @var RecordRef
     */
    protected RecordRef $defaultTaxReg;

    /**
     * @var VendorPricingScheduleList
     */
    protected VendorPricingScheduleList $pricingScheduleList;

    /**
     * @var SubscriptionsList
     */
    protected SubscriptionsList $subscriptionsList;

    /**
     * @var VendorAddressbookList
     */
    protected VendorAddressbookList $addressbookList;

    /**
     * @var VendorCurrencyList
     */
    protected VendorCurrencyList $currencyList;

    /**
     * @var VendorRolesList
     */
    protected VendorRolesList $rolesList;

    /**
     * @var VendorTaxRegistrationList
     */
    protected VendorTaxRegistrationList $taxRegistrationList;

    /**
     * @var int
     */
    protected int $predictedDays;

    /**
     * @var float
     */
    protected float $predConfidence;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "customForm" => "RecordRef",
        "entityId" => "string",
        "altName" => "string",
        "isPerson" => "boolean",
        "phoneticName" => "string",
        "salutation" => "string",
        "firstName" => "string",
        "middleName" => "string",
        "lastName" => "string",
        "companyName" => "string",
        "phone" => "string",
        "fax" => "string",
        "email" => "string",
        "url" => "string",
        "defaultAddress" => "string",
        "isInactive" => "boolean",
        "lastModifiedDate" => "dateTime",
        "dateCreated" => "dateTime",
        "category" => "RecordRef",
        "title" => "string",
        "printOnCheckAs" => "string",
        "altPhone" => "string",
        "homePhone" => "string",
        "mobilePhone" => "string",
        "altEmail" => "string",
        "comments" => "string",
        "globalSubscriptionStatus" => "GlobalSubscriptionStatus",
        "image" => "RecordRef",
        "emailPreference" => "EmailPreference",
        "subsidiary" => "RecordRef",
        "representingSubsidiary" => "RecordRef",
        "accountNumber" => "string",
        "legalName" => "string",
        "vatRegNumber" => "string",
        "expenseAccount" => "RecordRef",
        "payablesAccount" => "RecordRef",
        "terms" => "RecordRef",
        "incoterm" => "RecordRef",
        "creditLimit" => "float",
        "balancePrimary" => "float",
        "openingBalance" => "float",
        "openingBalanceDate" => "dateTime",
        "openingBalanceAccount" => "RecordRef",
        "balance" => "float",
        "unbilledOrdersPrimary" => "float",
        "bcn" => "string",
        "unbilledOrders" => "float",
        "currency" => "RecordRef",
        "is1099Eligible" => "boolean",
        "isJobResourceVend" => "boolean",
        "laborCost" => "float",
        "purchaseOrderQuantity" => "float",
        "purchaseOrderAmount" => "float",
        "purchaseOrderQuantityDiff" => "float",
        "receiptQuantity" => "float",
        "receiptAmount" => "float",
        "receiptQuantityDiff" => "float",
        "workCalendar" => "RecordRef",
        "taxIdNum" => "string",
        "taxItem" => "RecordRef",
        "giveAccess" => "boolean",
        "sendEmail" => "boolean",
        "billPay" => "boolean",
        "isAccountant" => "boolean",
        "password" => "string",
        "password2" => "string",
        "requirePwdChange" => "boolean",
        "eligibleForCommission" => "boolean",
        "emailTransactions" => "boolean",
        "printTransactions" => "boolean",
        "faxTransactions" => "boolean",
        "defaultTaxReg" => "RecordRef",
        "pricingScheduleList" => "VendorPricingScheduleList",
        "subscriptionsList" => "SubscriptionsList",
        "addressbookList" => "VendorAddressbookList",
        "currencyList" => "VendorCurrencyList",
        "rolesList" => "VendorRolesList",
        "taxRegistrationList" => "VendorTaxRegistrationList",
        "predictedDays" => "integer",
        "predConfidence" => "float",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return Vendor
     */
    public function setCustomForm(RecordRef $customForm): Vendor
    {
        $this->customForm = $customForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm(): RecordRef
    {
        return $this->customForm;
    }

    /**
     * @param string $entityId
     * @return Vendor
     */
    public function setEntityId(string $entityId): Vendor
    {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntityId(): string
    {
        return $this->entityId;
    }

    /**
     * @param string $altName
     * @return Vendor
     */
    public function setAltName(string $altName): Vendor
    {
        $this->altName = $altName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAltName(): string
    {
        return $this->altName;
    }

    /**
     * @param bool $isPerson
     * @return Vendor
     */
    public function setIsPerson(bool $isPerson): Vendor
    {
        $this->isPerson = $isPerson;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPerson(): bool
    {
        return $this->isPerson;
    }

    /**
     * @param string $phoneticName
     * @return Vendor
     */
    public function setPhoneticName(string $phoneticName): Vendor
    {
        $this->phoneticName = $phoneticName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneticName(): string
    {
        return $this->phoneticName;
    }

    /**
     * @param string $salutation
     * @return Vendor
     */
    public function setSalutation(string $salutation): Vendor
    {
        $this->salutation = $salutation;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalutation(): string
    {
        return $this->salutation;
    }

    /**
     * @param string $firstName
     * @return Vendor
     */
    public function setFirstName(string $firstName): Vendor
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $middleName
     * @return Vendor
     */
    public function setMiddleName(string $middleName): Vendor
    {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    /**
     * @param string $lastName
     * @return Vendor
     */
    public function setLastName(string $lastName): Vendor
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $companyName
     * @return Vendor
     */
    public function setCompanyName(string $companyName): Vendor
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @param string $phone
     * @return Vendor
     */
    public function setPhone(string $phone): Vendor
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $fax
     * @return Vendor
     */
    public function setFax(string $fax): Vendor
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return string
     */
    public function getFax(): string
    {
        return $this->fax;
    }

    /**
     * @param string $email
     * @return Vendor
     */
    public function setEmail(string $email): Vendor
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $url
     * @return Vendor
     */
    public function setUrl(string $url): Vendor
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $defaultAddress
     * @return Vendor
     */
    public function setDefaultAddress(string $defaultAddress): Vendor
    {
        $this->defaultAddress = $defaultAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultAddress(): string
    {
        return $this->defaultAddress;
    }

    /**
     * @param bool $isInactive
     * @return Vendor
     */
    public function setIsInactive(bool $isInactive): Vendor
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive(): bool
    {
        return $this->isInactive;
    }

    /**
     * @param string $lastModifiedDate
     * @return Vendor
     */
    public function setLastModifiedDate(string $lastModifiedDate): Vendor
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedDate(): string
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param string $dateCreated
     * @return Vendor
     */
    public function setDateCreated(string $dateCreated): Vendor
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateCreated(): string
    {
        return $this->dateCreated;
    }

    /**
     * @param RecordRef $category
     * @return Vendor
     */
    public function setCategory(RecordRef $category): Vendor
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCategory(): RecordRef
    {
        return $this->category;
    }

    /**
     * @param string $title
     * @return Vendor
     */
    public function setTitle(string $title): Vendor
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $printOnCheckAs
     * @return Vendor
     */
    public function setPrintOnCheckAs(string $printOnCheckAs): Vendor
    {
        $this->printOnCheckAs = $printOnCheckAs;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrintOnCheckAs(): string
    {
        return $this->printOnCheckAs;
    }

    /**
     * @param string $altPhone
     * @return Vendor
     */
    public function setAltPhone(string $altPhone): Vendor
    {
        $this->altPhone = $altPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getAltPhone(): string
    {
        return $this->altPhone;
    }

    /**
     * @param string $homePhone
     * @return Vendor
     */
    public function setHomePhone(string $homePhone): Vendor
    {
        $this->homePhone = $homePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomePhone(): string
    {
        return $this->homePhone;
    }

    /**
     * @param string $mobilePhone
     * @return Vendor
     */
    public function setMobilePhone(string $mobilePhone): Vendor
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone(): string
    {
        return $this->mobilePhone;
    }

    /**
     * @param string $altEmail
     * @return Vendor
     */
    public function setAltEmail(string $altEmail): Vendor
    {
        $this->altEmail = $altEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getAltEmail(): string
    {
        return $this->altEmail;
    }

    /**
     * @param string $comments
     * @return Vendor
     */
    public function setComments(string $comments): Vendor
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return string
     */
    public function getComments(): string
    {
        return $this->comments;
    }

    /**
     * @param GlobalSubscriptionStatus $globalSubscriptionStatus
     * @return Vendor
     */
    public function setGlobalSubscriptionStatus(GlobalSubscriptionStatus $globalSubscriptionStatus): Vendor
    {
        $this->globalSubscriptionStatus = $globalSubscriptionStatus;
        return $this;
    }

    /**
     * @return GlobalSubscriptionStatus
     */
    public function getGlobalSubscriptionStatus(): GlobalSubscriptionStatus
    {
        return $this->globalSubscriptionStatus;
    }

    /**
     * @param RecordRef $image
     * @return Vendor
     */
    public function setImage(RecordRef $image): Vendor
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getImage(): RecordRef
    {
        return $this->image;
    }

    /**
     * @param EmailPreference $emailPreference
     * @return Vendor
     */
    public function setEmailPreference(EmailPreference $emailPreference): Vendor
    {
        $this->emailPreference = $emailPreference;
        return $this;
    }

    /**
     * @return EmailPreference
     */
    public function getEmailPreference(): EmailPreference
    {
        return $this->emailPreference;
    }

    /**
     * @param RecordRef $subsidiary
     * @return Vendor
     */
    public function setSubsidiary(RecordRef $subsidiary): Vendor
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary(): RecordRef
    {
        return $this->subsidiary;
    }

    /**
     * @param RecordRef $representingSubsidiary
     * @return Vendor
     */
    public function setRepresentingSubsidiary(RecordRef $representingSubsidiary): Vendor
    {
        $this->representingSubsidiary = $representingSubsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRepresentingSubsidiary(): RecordRef
    {
        return $this->representingSubsidiary;
    }

    /**
     * @param string $accountNumber
     * @return Vendor
     */
    public function setAccountNumber(string $accountNumber): Vendor
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    /**
     * @param string $legalName
     * @return Vendor
     */
    public function setLegalName(string $legalName): Vendor
    {
        $this->legalName = $legalName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLegalName(): string
    {
        return $this->legalName;
    }

    /**
     * @param string $vatRegNumber
     * @return Vendor
     */
    public function setVatRegNumber(string $vatRegNumber): Vendor
    {
        $this->vatRegNumber = $vatRegNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getVatRegNumber(): string
    {
        return $this->vatRegNumber;
    }

    /**
     * @param RecordRef $expenseAccount
     * @return Vendor
     */
    public function setExpenseAccount(RecordRef $expenseAccount): Vendor
    {
        $this->expenseAccount = $expenseAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getExpenseAccount(): RecordRef
    {
        return $this->expenseAccount;
    }

    /**
     * @param RecordRef $payablesAccount
     * @return Vendor
     */
    public function setPayablesAccount(RecordRef $payablesAccount): Vendor
    {
        $this->payablesAccount = $payablesAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPayablesAccount(): RecordRef
    {
        return $this->payablesAccount;
    }

    /**
     * @param RecordRef $terms
     * @return Vendor
     */
    public function setTerms(RecordRef $terms): Vendor
    {
        $this->terms = $terms;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTerms(): RecordRef
    {
        return $this->terms;
    }

    /**
     * @param RecordRef $incoterm
     * @return Vendor
     */
    public function setIncoterm(RecordRef $incoterm): Vendor
    {
        $this->incoterm = $incoterm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIncoterm(): RecordRef
    {
        return $this->incoterm;
    }

    /**
     * @param float $creditLimit
     * @return Vendor
     */
    public function setCreditLimit(float $creditLimit): Vendor
    {
        $this->creditLimit = $creditLimit;
        return $this;
    }

    /**
     * @return float
     */
    public function getCreditLimit(): float
    {
        return $this->creditLimit;
    }

    /**
     * @param float $balancePrimary
     * @return Vendor
     */
    public function setBalancePrimary(float $balancePrimary): Vendor
    {
        $this->balancePrimary = $balancePrimary;
        return $this;
    }

    /**
     * @return float
     */
    public function getBalancePrimary(): float
    {
        return $this->balancePrimary;
    }

    /**
     * @param float $openingBalance
     * @return Vendor
     */
    public function setOpeningBalance(float $openingBalance): Vendor
    {
        $this->openingBalance = $openingBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getOpeningBalance(): float
    {
        return $this->openingBalance;
    }

    /**
     * @param string $openingBalanceDate
     * @return Vendor
     */
    public function setOpeningBalanceDate(string $openingBalanceDate): Vendor
    {
        $this->openingBalanceDate = $openingBalanceDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpeningBalanceDate(): string
    {
        return $this->openingBalanceDate;
    }

    /**
     * @param RecordRef $openingBalanceAccount
     * @return Vendor
     */
    public function setOpeningBalanceAccount(RecordRef $openingBalanceAccount): Vendor
    {
        $this->openingBalanceAccount = $openingBalanceAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOpeningBalanceAccount(): RecordRef
    {
        return $this->openingBalanceAccount;
    }

    /**
     * @param float $balance
     * @return Vendor
     */
    public function setBalance(float $balance): Vendor
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param float $unbilledOrdersPrimary
     * @return Vendor
     */
    public function setUnbilledOrdersPrimary(float $unbilledOrdersPrimary): Vendor
    {
        $this->unbilledOrdersPrimary = $unbilledOrdersPrimary;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnbilledOrdersPrimary(): float
    {
        return $this->unbilledOrdersPrimary;
    }

    /**
     * @param string $bcn
     * @return Vendor
     */
    public function setBcn(string $bcn): Vendor
    {
        $this->bcn = $bcn;
        return $this;
    }

    /**
     * @return string
     */
    public function getBcn(): string
    {
        return $this->bcn;
    }

    /**
     * @param float $unbilledOrders
     * @return Vendor
     */
    public function setUnbilledOrders(float $unbilledOrders): Vendor
    {
        $this->unbilledOrders = $unbilledOrders;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnbilledOrders(): float
    {
        return $this->unbilledOrders;
    }

    /**
     * @param RecordRef $currency
     * @return Vendor
     */
    public function setCurrency(RecordRef $currency): Vendor
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCurrency(): RecordRef
    {
        return $this->currency;
    }

    /**
     * @param bool $isJobResourceVend
     * @return Vendor
     */
    public function setIsJobResourceVend(bool $isJobResourceVend): Vendor
    {
        $this->isJobResourceVend = $isJobResourceVend;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsJobResourceVend(): bool
    {
        return $this->isJobResourceVend;
    }

    /**
     * @param float $laborCost
     * @return Vendor
     */
    public function setLaborCost(float $laborCost): Vendor
    {
        $this->laborCost = $laborCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getLaborCost(): float
    {
        return $this->laborCost;
    }

    /**
     * @param float $purchaseOrderQuantity
     * @return Vendor
     */
    public function setPurchaseOrderQuantity(float $purchaseOrderQuantity): Vendor
    {
        $this->purchaseOrderQuantity = $purchaseOrderQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderQuantity(): float
    {
        return $this->purchaseOrderQuantity;
    }

    /**
     * @param float $purchaseOrderAmount
     * @return Vendor
     */
    public function setPurchaseOrderAmount(float $purchaseOrderAmount): Vendor
    {
        $this->purchaseOrderAmount = $purchaseOrderAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderAmount(): float
    {
        return $this->purchaseOrderAmount;
    }

    /**
     * @param float $purchaseOrderQuantityDiff
     * @return Vendor
     */
    public function setPurchaseOrderQuantityDiff(float $purchaseOrderQuantityDiff): Vendor
    {
        $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
        return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderQuantityDiff(): float
    {
        return $this->purchaseOrderQuantityDiff;
    }

    /**
     * @param float $receiptQuantity
     * @return Vendor
     */
    public function setReceiptQuantity(float $receiptQuantity): Vendor
    {
        $this->receiptQuantity = $receiptQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getReceiptQuantity(): float
    {
        return $this->receiptQuantity;
    }

    /**
     * @param float $receiptAmount
     * @return Vendor
     */
    public function setReceiptAmount(float $receiptAmount): Vendor
    {
        $this->receiptAmount = $receiptAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getReceiptAmount(): float
    {
        return $this->receiptAmount;
    }

    /**
     * @param float $receiptQuantityDiff
     * @return Vendor
     */
    public function setReceiptQuantityDiff(float $receiptQuantityDiff): Vendor
    {
        $this->receiptQuantityDiff = $receiptQuantityDiff;
        return $this;
    }

    /**
     * @return float
     */
    public function getReceiptQuantityDiff(): float
    {
        return $this->receiptQuantityDiff;
    }

    /**
     * @param RecordRef $workCalendar
     * @return Vendor
     */
    public function setWorkCalendar(RecordRef $workCalendar): Vendor
    {
        $this->workCalendar = $workCalendar;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWorkCalendar(): RecordRef
    {
        return $this->workCalendar;
    }

    /**
     * @param string $taxIdNum
     * @return Vendor
     */
    public function setTaxIdNum(string $taxIdNum): Vendor
    {
        $this->taxIdNum = $taxIdNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxIdNum(): string
    {
        return $this->taxIdNum;
    }

    /**
     * @param RecordRef $taxItem
     * @return Vendor
     */
    public function setTaxItem(RecordRef $taxItem): Vendor
    {
        $this->taxItem = $taxItem;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxItem(): RecordRef
    {
        return $this->taxItem;
    }

    /**
     * @param bool $giveAccess
     * @return Vendor
     */
    public function setGiveAccess(bool $giveAccess): Vendor
    {
        $this->giveAccess = $giveAccess;
        return $this;
    }

    /**
     * @return bool
     */
    public function getGiveAccess(): bool
    {
        return $this->giveAccess;
    }

    /**
     * @param bool $sendEmail
     * @return Vendor
     */
    public function setSendEmail(bool $sendEmail): Vendor
    {
        $this->sendEmail = $sendEmail;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSendEmail(): bool
    {
        return $this->sendEmail;
    }

    /**
     * @param bool $billPay
     * @return Vendor
     */
    public function setBillPay(bool $billPay): Vendor
    {
        $this->billPay = $billPay;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBillPay(): bool
    {
        return $this->billPay;
    }

    /**
     * @param bool $isAccountant
     * @return Vendor
     */
    public function setIsAccountant(bool $isAccountant): Vendor
    {
        $this->isAccountant = $isAccountant;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAccountant(): bool
    {
        return $this->isAccountant;
    }

    /**
     * @param string $password
     * @return Vendor
     */
    public function setPassword(string $password): Vendor
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param bool $requirePwdChange
     * @return Vendor
     */
    public function setRequirePwdChange(bool $requirePwdChange): Vendor
    {
        $this->requirePwdChange = $requirePwdChange;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRequirePwdChange(): bool
    {
        return $this->requirePwdChange;
    }

    /**
     * @param bool $eligibleForCommission
     * @return Vendor
     */
    public function setEligibleForCommission(bool $eligibleForCommission): Vendor
    {
        $this->eligibleForCommission = $eligibleForCommission;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEligibleForCommission(): bool
    {
        return $this->eligibleForCommission;
    }

    /**
     * @param bool $emailTransactions
     * @return Vendor
     */
    public function setEmailTransactions(bool $emailTransactions): Vendor
    {
        $this->emailTransactions = $emailTransactions;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEmailTransactions(): bool
    {
        return $this->emailTransactions;
    }

    /**
     * @param bool $printTransactions
     * @return Vendor
     */
    public function setPrintTransactions(bool $printTransactions): Vendor
    {
        $this->printTransactions = $printTransactions;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPrintTransactions(): bool
    {
        return $this->printTransactions;
    }

    /**
     * @param bool $faxTransactions
     * @return Vendor
     */
    public function setFaxTransactions(bool $faxTransactions): Vendor
    {
        $this->faxTransactions = $faxTransactions;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFaxTransactions(): bool
    {
        return $this->faxTransactions;
    }

    /**
     * @param RecordRef $defaultTaxReg
     * @return Vendor
     */
    public function setDefaultTaxReg(RecordRef $defaultTaxReg): Vendor
    {
        $this->defaultTaxReg = $defaultTaxReg;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDefaultTaxReg(): RecordRef
    {
        return $this->defaultTaxReg;
    }

    /**
     * @param VendorPricingScheduleList $pricingScheduleList
     * @return Vendor
     */
    public function setPricingScheduleList(VendorPricingScheduleList $pricingScheduleList): Vendor
    {
        $this->pricingScheduleList = $pricingScheduleList;
        return $this;
    }

    /**
     * @return VendorPricingScheduleList
     */
    public function getPricingScheduleList(): VendorPricingScheduleList
    {
        return $this->pricingScheduleList;
    }

    /**
     * @param SubscriptionsList $subscriptionsList
     * @return Vendor
     */
    public function setSubscriptionsList(SubscriptionsList $subscriptionsList): Vendor
    {
        $this->subscriptionsList = $subscriptionsList;
        return $this;
    }

    /**
     * @return SubscriptionsList
     */
    public function getSubscriptionsList(): SubscriptionsList
    {
        return $this->subscriptionsList;
    }

    /**
     * @param VendorAddressbookList $addressbookList
     * @return Vendor
     */
    public function setAddressbookList(VendorAddressbookList $addressbookList): Vendor
    {
        $this->addressbookList = $addressbookList;
        return $this;
    }

    /**
     * @return VendorAddressbookList
     */
    public function getAddressbookList(): VendorAddressbookList
    {
        return $this->addressbookList;
    }

    /**
     * @param VendorCurrencyList $currencyList
     * @return Vendor
     */
    public function setCurrencyList(VendorCurrencyList $currencyList): Vendor
    {
        $this->currencyList = $currencyList;
        return $this;
    }

    /**
     * @return VendorCurrencyList
     */
    public function getCurrencyList(): VendorCurrencyList
    {
        return $this->currencyList;
    }

    /**
     * @param VendorRolesList $rolesList
     * @return Vendor
     */
    public function setRolesList(VendorRolesList $rolesList): Vendor
    {
        $this->rolesList = $rolesList;
        return $this;
    }

    /**
     * @return VendorRolesList
     */
    public function getRolesList(): VendorRolesList
    {
        return $this->rolesList;
    }

    /**
     * @param VendorTaxRegistrationList $taxRegistrationList
     * @return Vendor
     */
    public function setTaxRegistrationList(VendorTaxRegistrationList $taxRegistrationList): Vendor
    {
        $this->taxRegistrationList = $taxRegistrationList;
        return $this;
    }

    /**
     * @return VendorTaxRegistrationList
     */
    public function getTaxRegistrationList(): VendorTaxRegistrationList
    {
        return $this->taxRegistrationList;
    }

    /**
     * @param int $predictedDays
     * @return Vendor
     */
    public function setPredictedDays(int $predictedDays): Vendor
    {
        $this->predictedDays = $predictedDays;
        return $this;
    }

    /**
     * @return int
     */
    public function getPredictedDays(): int
    {
        return $this->predictedDays;
    }

    /**
     * @param float $predConfidence
     * @return Vendor
     */
    public function setPredConfidence(float $predConfidence): Vendor
    {
        $this->predConfidence = $predConfidence;
        return $this;
    }

    /**
     * @return float
     */
    public function getPredConfidence(): float
    {
        return $this->predConfidence;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return Vendor
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Vendor
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList(): CustomFieldList
    {
        return $this->customFieldList;
    }

    /**
     * @param string $internalId
     * @return Vendor
     */
    public function setInternalId(string $internalId): Vendor
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

    /**
     * @param string $externalId
     * @return Vendor
     */
    public function setExternalId(string $externalId): Vendor
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

}
