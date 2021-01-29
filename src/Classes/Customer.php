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

class Customer extends Record {
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
     * @var RecordRef
     */
    protected RecordRef $entityStatus;

    /**
     * @var RecordRef
     */
    protected RecordRef $parent;

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
     * @var Language
     */
    protected Language $language;

    /**
     * @var string
     */
    protected string $comments;

    /**
     * @var CustomerNumberFormat
     */
    protected CustomerNumberFormat $numberFormat;

    /**
     * @var CustomerNegativeNumberFormat
     */
    protected CustomerNegativeNumberFormat $negativeNumberFormat;

    /**
     * @var string
     */
    protected string $dateCreated;

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
     * @var RecordRef
     */
    protected RecordRef $salesRep;

    /**
     * @var RecordRef
     */
    protected RecordRef $territory;

    /**
     * @var string
     */
    protected string $contribPct;

    /**
     * @var RecordRef
     */
    protected RecordRef $partner;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesGroup;

    /**
     * @var string
     */
    protected string $vatRegNumber;

    /**
     * @var string
     */
    protected string $accountNumber;

    /**
     * @var bool
     */
    protected bool $taxExempt;

    /**
     * @var RecordRef
     */
    protected RecordRef $terms;

    /**
     * @var float
     */
    protected float $creditLimit;

    /**
     * @var CustomerCreditHoldOverride
     */
    protected CustomerCreditHoldOverride $creditHoldOverride;

    /**
     * @var CustomerMonthlyClosing
     */
    protected CustomerMonthlyClosing $monthlyClosing;

    /**
     * @var bool
     */
    protected bool $overrideCurrencyFormat;

    /**
     * @var string
     */
    protected string $displaySymbol;

    /**
     * @var CurrencySymbolPlacement
     */
    protected CurrencySymbolPlacement $symbolPlacement;

    /**
     * @var float
     */
    protected float $balance;

    /**
     * @var float
     */
    protected float $overdueBalance;

    /**
     * @var int
     */
    protected int $daysOverdue;

    /**
     * @var float
     */
    protected float $unbilledOrders;

    /**
     * @var float
     */
    protected float $consolUnbilledOrders;

    /**
     * @var float
     */
    protected float $consolOverdueBalance;

    /**
     * @var float
     */
    protected float $consolDepositBalance;

    /**
     * @var float
     */
    protected float $consolBalance;

    /**
     * @var float
     */
    protected float $consolAging;

    protected $consolAging1;
    protected $consolAging2;
    protected $consolAging3;
    protected $consolAging4;
    /**
     * @var int
     */
    protected int $consolDaysOverdue;

    /**
     * @var RecordRef
     */
    protected RecordRef $priceLevel;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var RecordRef
     */
    protected RecordRef $prefCCProcessor;

    /**
     * @var float
     */
    protected float $depositBalance;

    /**
     * @var bool
     */
    protected bool $shipComplete;

    /**
     * @var bool
     */
    protected bool $taxable;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxItem;

    /**
     * @var string
     */
    protected string $resaleNumber;

    /**
     * @var float
     */
    protected float $aging;

    protected $aging1;
    protected $aging2;
    protected $aging3;
    protected $aging4;
    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var AlcoholRecipientType
     */
    protected AlcoholRecipientType $alcoholRecipientType;

    /**
     * @var string
     */
    protected string $endDate;

    /**
     * @var int
     */
    protected int $reminderDays;

    /**
     * @var RecordRef
     */
    protected RecordRef $shippingItem;

    /**
     * @var string
     */
    protected string $thirdPartyAcct;

    /**
     * @var string
     */
    protected string $thirdPartyZipcode;

    /**
     * @var Country
     */
    protected Country $thirdPartyCountry;

    /**
     * @var bool
     */
    protected bool $giveAccess;

    /**
     * @var float
     */
    protected float $estimatedBudget;

    /**
     * @var RecordRef
     */
    protected RecordRef $accessRole;

    /**
     * @var bool
     */
    protected bool $sendEmail;

    /**
     * @var RecordRef
     */
    protected RecordRef $assignedWebSite;

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
     * @var RecordRef
     */
    protected RecordRef $campaignCategory;

    /**
     * @var RecordRef
     */
    protected RecordRef $sourceWebSite;

    /**
     * @var RecordRef
     */
    protected RecordRef $leadSource;

    /**
     * @var RecordRef
     */
    protected RecordRef $receivablesAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $drAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $fxAccount;

    /**
     * @var float
     */
    protected float $defaultOrderPriority;

    /**
     * @var string
     */
    protected string $webLead;

    /**
     * @var string
     */
    protected string $referrer;

    /**
     * @var string
     */
    protected string $keywords;

    /**
     * @var string
     */
    protected string $clickStream;

    /**
     * @var string
     */
    protected string $lastPageVisited;

    /**
     * @var int
     */
    protected int $visits;

    /**
     * @var string
     */
    protected string $firstVisit;

    /**
     * @var string
     */
    protected string $lastVisit;

    /**
     * @var bool
     */
    protected bool $billPay;

    /**
     * @var float
     */
    protected float $openingBalance;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var string
     */
    protected string $openingBalanceDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $openingBalanceAccount;

    /**
     * @var CustomerStage
     */
    protected CustomerStage $stage;

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
     * @var bool
     */
    protected bool $syncPartnerTeams;

    /**
     * @var bool
     */
    protected bool $isBudgetApproved;

    /**
     * @var GlobalSubscriptionStatus
     */
    protected GlobalSubscriptionStatus $globalSubscriptionStatus;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesReadiness;

    /**
     * @var CustomerSalesTeamList
     */
    protected CustomerSalesTeamList $salesTeamList;

    /**
     * @var RecordRef
     */
    protected RecordRef $buyingReason;

    /**
     * @var CustomerDownloadList
     */
    protected CustomerDownloadList $downloadList;

    /**
     * @var RecordRef
     */
    protected RecordRef $buyingTimeFrame;

    /**
     * @var CustomerAddressbookList
     */
    protected CustomerAddressbookList $addressbookList;

    /**
     * @var SubscriptionsList
     */
    protected SubscriptionsList $subscriptionsList;

    /**
     * @var ContactAccessRolesList
     */
    protected ContactAccessRolesList $contactRolesList;

    /**
     * @var CustomerCurrencyList
     */
    protected CustomerCurrencyList $currencyList;

    /**
     * @var CustomerCreditCardsList
     */
    protected CustomerCreditCardsList $creditCardsList;

    /**
     * @var CustomerPartnersList
     */
    protected CustomerPartnersList $partnersList;

    /**
     * @var CustomerGroupPricingList
     */
    protected CustomerGroupPricingList $groupPricingList;

    /**
     * @var CustomerItemPricingList
     */
    protected CustomerItemPricingList $itemPricingList;

    /**
     * @var CustomerTaxRegistrationList
     */
    protected CustomerTaxRegistrationList $taxRegistrationList;

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
        "entityStatus" => "RecordRef",
        "parent" => "RecordRef",
        "phone" => "string",
        "fax" => "string",
        "email" => "string",
        "url" => "string",
        "defaultAddress" => "string",
        "isInactive" => "boolean",
        "category" => "RecordRef",
        "title" => "string",
        "printOnCheckAs" => "string",
        "altPhone" => "string",
        "homePhone" => "string",
        "mobilePhone" => "string",
        "altEmail" => "string",
        "language" => "Language",
        "comments" => "string",
        "numberFormat" => "CustomerNumberFormat",
        "negativeNumberFormat" => "CustomerNegativeNumberFormat",
        "dateCreated" => "dateTime",
        "image" => "RecordRef",
        "emailPreference" => "EmailPreference",
        "subsidiary" => "RecordRef",
        "representingSubsidiary" => "RecordRef",
        "salesRep" => "RecordRef",
        "territory" => "RecordRef",
        "contribPct" => "string",
        "partner" => "RecordRef",
        "salesGroup" => "RecordRef",
        "vatRegNumber" => "string",
        "accountNumber" => "string",
        "taxExempt" => "boolean",
        "terms" => "RecordRef",
        "creditLimit" => "float",
        "creditHoldOverride" => "CustomerCreditHoldOverride",
        "monthlyClosing" => "CustomerMonthlyClosing",
        "overrideCurrencyFormat" => "boolean",
        "displaySymbol" => "string",
        "symbolPlacement" => "CurrencySymbolPlacement",
        "balance" => "float",
        "overdueBalance" => "float",
        "daysOverdue" => "integer",
        "unbilledOrders" => "float",
        "consolUnbilledOrders" => "float",
        "consolOverdueBalance" => "float",
        "consolDepositBalance" => "float",
        "consolBalance" => "float",
        "consolAging" => "float",
        "consolAging1" => "float",
        "consolAging2" => "float",
        "consolAging3" => "float",
        "consolAging4" => "float",
        "consolDaysOverdue" => "integer",
        "priceLevel" => "RecordRef",
        "currency" => "RecordRef",
        "prefCCProcessor" => "RecordRef",
        "depositBalance" => "float",
        "shipComplete" => "boolean",
        "taxable" => "boolean",
        "taxItem" => "RecordRef",
        "resaleNumber" => "string",
        "aging" => "float",
        "aging1" => "float",
        "aging2" => "float",
        "aging3" => "float",
        "aging4" => "float",
        "startDate" => "dateTime",
        "alcoholRecipientType" => "AlcoholRecipientType",
        "endDate" => "dateTime",
        "reminderDays" => "integer",
        "shippingItem" => "RecordRef",
        "thirdPartyAcct" => "string",
        "thirdPartyZipcode" => "string",
        "thirdPartyCountry" => "Country",
        "giveAccess" => "boolean",
        "estimatedBudget" => "float",
        "accessRole" => "RecordRef",
        "sendEmail" => "boolean",
        "assignedWebSite" => "RecordRef",
        "password" => "string",
        "password2" => "string",
        "requirePwdChange" => "boolean",
        "campaignCategory" => "RecordRef",
        "sourceWebSite" => "RecordRef",
        "leadSource" => "RecordRef",
        "receivablesAccount" => "RecordRef",
        "drAccount" => "RecordRef",
        "fxAccount" => "RecordRef",
        "defaultOrderPriority" => "float",
        "webLead" => "string",
        "referrer" => "string",
        "keywords" => "string",
        "clickStream" => "string",
        "lastPageVisited" => "string",
        "visits" => "integer",
        "firstVisit" => "dateTime",
        "lastVisit" => "dateTime",
        "billPay" => "boolean",
        "openingBalance" => "float",
        "lastModifiedDate" => "dateTime",
        "openingBalanceDate" => "dateTime",
        "openingBalanceAccount" => "RecordRef",
        "stage" => "CustomerStage",
        "emailTransactions" => "boolean",
        "printTransactions" => "boolean",
        "faxTransactions" => "boolean",
        "defaultTaxReg" => "RecordRef",
        "syncPartnerTeams" => "boolean",
        "isBudgetApproved" => "boolean",
        "globalSubscriptionStatus" => "GlobalSubscriptionStatus",
        "salesReadiness" => "RecordRef",
        "salesTeamList" => "CustomerSalesTeamList",
        "buyingReason" => "RecordRef",
        "downloadList" => "CustomerDownloadList",
        "buyingTimeFrame" => "RecordRef",
        "addressbookList" => "CustomerAddressbookList",
        "subscriptionsList" => "SubscriptionsList",
        "contactRolesList" => "ContactAccessRolesList",
        "currencyList" => "CustomerCurrencyList",
        "creditCardsList" => "CustomerCreditCardsList",
        "partnersList" => "CustomerPartnersList",
        "groupPricingList" => "CustomerGroupPricingList",
        "itemPricingList" => "CustomerItemPricingList",
        "taxRegistrationList" => "CustomerTaxRegistrationList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return Customer
     */
    public function setCustomForm(RecordRef $customForm): Customer
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
     * @return Customer
     */
    public function setEntityId(string $entityId): Customer
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
     * @return Customer
     */
    public function setAltName(string $altName): Customer
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
     * @return Customer
     */
    public function setIsPerson(bool $isPerson): Customer
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
     * @return Customer
     */
    public function setPhoneticName(string $phoneticName): Customer
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
     * @return Customer
     */
    public function setSalutation(string $salutation): Customer
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
     * @return Customer
     */
    public function setFirstName(string $firstName): Customer
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
     * @return Customer
     */
    public function setMiddleName(string $middleName): Customer
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
     * @return Customer
     */
    public function setLastName(string $lastName): Customer
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
     * @return Customer
     */
    public function setCompanyName(string $companyName): Customer
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
     * @param RecordRef $entityStatus
     * @return Customer
     */
    public function setEntityStatus(RecordRef $entityStatus): Customer
    {
        $this->entityStatus = $entityStatus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntityStatus(): RecordRef
    {
        return $this->entityStatus;
    }

    /**
     * @param RecordRef $parent
     * @return Customer
     */
    public function setParent(RecordRef $parent): Customer
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent(): RecordRef
    {
        return $this->parent;
    }

    /**
     * @param string $phone
     * @return Customer
     */
    public function setPhone(string $phone): Customer
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
     * @return Customer
     */
    public function setFax(string $fax): Customer
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
     * @return Customer
     */
    public function setEmail(string $email): Customer
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
     * @return Customer
     */
    public function setUrl(string $url): Customer
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
     * @return Customer
     */
    public function setDefaultAddress(string $defaultAddress): Customer
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
     * @return Customer
     */
    public function setIsInactive(bool $isInactive): Customer
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
     * @param RecordRef $category
     * @return Customer
     */
    public function setCategory(RecordRef $category): Customer
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
     * @return Customer
     */
    public function setTitle(string $title): Customer
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
     * @return Customer
     */
    public function setPrintOnCheckAs(string $printOnCheckAs): Customer
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
     * @return Customer
     */
    public function setAltPhone(string $altPhone): Customer
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
     * @return Customer
     */
    public function setHomePhone(string $homePhone): Customer
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
     * @return Customer
     */
    public function setMobilePhone(string $mobilePhone): Customer
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
     * @return Customer
     */
    public function setAltEmail(string $altEmail): Customer
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
     * @param Language $language
     * @return Customer
     */
    public function setLanguage(Language $language): Customer
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return Language
     */
    public function getLanguage(): Language
    {
        return $this->language;
    }

    /**
     * @param string $comments
     * @return Customer
     */
    public function setComments(string $comments): Customer
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
     * @param CustomerNumberFormat $numberFormat
     * @return Customer
     */
    public function setNumberFormat(CustomerNumberFormat $numberFormat): Customer
    {
        $this->numberFormat = $numberFormat;
        return $this;
    }

    /**
     * @return CustomerNumberFormat
     */
    public function getNumberFormat(): CustomerNumberFormat
    {
        return $this->numberFormat;
    }

    /**
     * @param CustomerNegativeNumberFormat $negativeNumberFormat
     * @return Customer
     */
    public function setNegativeNumberFormat(CustomerNegativeNumberFormat $negativeNumberFormat): Customer
    {
        $this->negativeNumberFormat = $negativeNumberFormat;
        return $this;
    }

    /**
     * @return CustomerNegativeNumberFormat
     */
    public function getNegativeNumberFormat(): CustomerNegativeNumberFormat
    {
        return $this->negativeNumberFormat;
    }

    /**
     * @param string $dateCreated
     * @return Customer
     */
    public function setDateCreated(string $dateCreated): Customer
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
     * @param RecordRef $image
     * @return Customer
     */
    public function setImage(RecordRef $image): Customer
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
     * @return Customer
     */
    public function setEmailPreference(EmailPreference $emailPreference): Customer
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
     * @return Customer
     */
    public function setSubsidiary(RecordRef $subsidiary): Customer
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
     * @return Customer
     */
    public function setRepresentingSubsidiary(RecordRef $representingSubsidiary): Customer
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
     * @param RecordRef $salesRep
     * @return Customer
     */
    public function setSalesRep(RecordRef $salesRep): Customer
    {
        $this->salesRep = $salesRep;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesRep(): RecordRef
    {
        return $this->salesRep;
    }

    /**
     * @param RecordRef $territory
     * @return Customer
     */
    public function setTerritory(RecordRef $territory): Customer
    {
        $this->territory = $territory;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTerritory(): RecordRef
    {
        return $this->territory;
    }

    /**
     * @param string $contribPct
     * @return Customer
     */
    public function setContribPct(string $contribPct): Customer
    {
        $this->contribPct = $contribPct;
        return $this;
    }

    /**
     * @return string
     */
    public function getContribPct(): string
    {
        return $this->contribPct;
    }

    /**
     * @param RecordRef $partner
     * @return Customer
     */
    public function setPartner(RecordRef $partner): Customer
    {
        $this->partner = $partner;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPartner(): RecordRef
    {
        return $this->partner;
    }

    /**
     * @param RecordRef $salesGroup
     * @return Customer
     */
    public function setSalesGroup(RecordRef $salesGroup): Customer
    {
        $this->salesGroup = $salesGroup;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesGroup(): RecordRef
    {
        return $this->salesGroup;
    }

    /**
     * @param string $vatRegNumber
     * @return Customer
     */
    public function setVatRegNumber(string $vatRegNumber): Customer
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
     * @param string $accountNumber
     * @return Customer
     */
    public function setAccountNumber(string $accountNumber): Customer
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
     * @param bool $taxExempt
     * @return Customer
     */
    public function setTaxExempt(bool $taxExempt): Customer
    {
        $this->taxExempt = $taxExempt;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTaxExempt(): bool
    {
        return $this->taxExempt;
    }

    /**
     * @param RecordRef $terms
     * @return Customer
     */
    public function setTerms(RecordRef $terms): Customer
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
     * @param float $creditLimit
     * @return Customer
     */
    public function setCreditLimit(float $creditLimit): Customer
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
     * @param CustomerCreditHoldOverride $creditHoldOverride
     * @return Customer
     */
    public function setCreditHoldOverride(CustomerCreditHoldOverride $creditHoldOverride): Customer
    {
        $this->creditHoldOverride = $creditHoldOverride;
        return $this;
    }

    /**
     * @return CustomerCreditHoldOverride
     */
    public function getCreditHoldOverride(): CustomerCreditHoldOverride
    {
        return $this->creditHoldOverride;
    }

    /**
     * @param CustomerMonthlyClosing $monthlyClosing
     * @return Customer
     */
    public function setMonthlyClosing(CustomerMonthlyClosing $monthlyClosing): Customer
    {
        $this->monthlyClosing = $monthlyClosing;
        return $this;
    }

    /**
     * @return CustomerMonthlyClosing
     */
    public function getMonthlyClosing(): CustomerMonthlyClosing
    {
        return $this->monthlyClosing;
    }

    /**
     * @param bool $overrideCurrencyFormat
     * @return Customer
     */
    public function setOverrideCurrencyFormat(bool $overrideCurrencyFormat): Customer
    {
        $this->overrideCurrencyFormat = $overrideCurrencyFormat;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOverrideCurrencyFormat(): bool
    {
        return $this->overrideCurrencyFormat;
    }

    /**
     * @param string $displaySymbol
     * @return Customer
     */
    public function setDisplaySymbol(string $displaySymbol): Customer
    {
        $this->displaySymbol = $displaySymbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplaySymbol(): string
    {
        return $this->displaySymbol;
    }

    /**
     * @param CurrencySymbolPlacement $symbolPlacement
     * @return Customer
     */
    public function setSymbolPlacement(CurrencySymbolPlacement $symbolPlacement): Customer
    {
        $this->symbolPlacement = $symbolPlacement;
        return $this;
    }

    /**
     * @return CurrencySymbolPlacement
     */
    public function getSymbolPlacement(): CurrencySymbolPlacement
    {
        return $this->symbolPlacement;
    }

    /**
     * @param float $balance
     * @return Customer
     */
    public function setBalance(float $balance): Customer
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
     * @param float $overdueBalance
     * @return Customer
     */
    public function setOverdueBalance(float $overdueBalance): Customer
    {
        $this->overdueBalance = $overdueBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getOverdueBalance(): float
    {
        return $this->overdueBalance;
    }

    /**
     * @param int $daysOverdue
     * @return Customer
     */
    public function setDaysOverdue(int $daysOverdue): Customer
    {
        $this->daysOverdue = $daysOverdue;
        return $this;
    }

    /**
     * @return int
     */
    public function getDaysOverdue(): int
    {
        return $this->daysOverdue;
    }

    /**
     * @param float $unbilledOrders
     * @return Customer
     */
    public function setUnbilledOrders(float $unbilledOrders): Customer
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
     * @param float $consolUnbilledOrders
     * @return Customer
     */
    public function setConsolUnbilledOrders(float $consolUnbilledOrders): Customer
    {
        $this->consolUnbilledOrders = $consolUnbilledOrders;
        return $this;
    }

    /**
     * @return float
     */
    public function getConsolUnbilledOrders(): float
    {
        return $this->consolUnbilledOrders;
    }

    /**
     * @param float $consolOverdueBalance
     * @return Customer
     */
    public function setConsolOverdueBalance(float $consolOverdueBalance): Customer
    {
        $this->consolOverdueBalance = $consolOverdueBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getConsolOverdueBalance(): float
    {
        return $this->consolOverdueBalance;
    }

    /**
     * @param float $consolDepositBalance
     * @return Customer
     */
    public function setConsolDepositBalance(float $consolDepositBalance): Customer
    {
        $this->consolDepositBalance = $consolDepositBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getConsolDepositBalance(): float
    {
        return $this->consolDepositBalance;
    }

    /**
     * @param float $consolBalance
     * @return Customer
     */
    public function setConsolBalance(float $consolBalance): Customer
    {
        $this->consolBalance = $consolBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getConsolBalance(): float
    {
        return $this->consolBalance;
    }

    /**
     * @param float $consolAging
     * @return Customer
     */
    public function setConsolAging(float $consolAging): Customer
    {
        $this->consolAging = $consolAging;
        return $this;
    }

    /**
     * @return float
     */
    public function getConsolAging(): float
    {
        return $this->consolAging;
    }

    /**
     * @param int $consolDaysOverdue
     * @return Customer
     */
    public function setConsolDaysOverdue(int $consolDaysOverdue): Customer
    {
        $this->consolDaysOverdue = $consolDaysOverdue;
        return $this;
    }

    /**
     * @return int
     */
    public function getConsolDaysOverdue(): int
    {
        return $this->consolDaysOverdue;
    }

    /**
     * @param RecordRef $priceLevel
     * @return Customer
     */
    public function setPriceLevel(RecordRef $priceLevel): Customer
    {
        $this->priceLevel = $priceLevel;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPriceLevel(): RecordRef
    {
        return $this->priceLevel;
    }

    /**
     * @param RecordRef $currency
     * @return Customer
     */
    public function setCurrency(RecordRef $currency): Customer
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
     * @param RecordRef $prefCCProcessor
     * @return Customer
     */
    public function setPrefCCProcessor(RecordRef $prefCCProcessor): Customer
    {
        $this->prefCCProcessor = $prefCCProcessor;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPrefCCProcessor(): RecordRef
    {
        return $this->prefCCProcessor;
    }

    /**
     * @param float $depositBalance
     * @return Customer
     */
    public function setDepositBalance(float $depositBalance): Customer
    {
        $this->depositBalance = $depositBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getDepositBalance(): float
    {
        return $this->depositBalance;
    }

    /**
     * @param bool $shipComplete
     * @return Customer
     */
    public function setShipComplete(bool $shipComplete): Customer
    {
        $this->shipComplete = $shipComplete;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShipComplete(): bool
    {
        return $this->shipComplete;
    }

    /**
     * @param bool $taxable
     * @return Customer
     */
    public function setTaxable(bool $taxable): Customer
    {
        $this->taxable = $taxable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTaxable(): bool
    {
        return $this->taxable;
    }

    /**
     * @param RecordRef $taxItem
     * @return Customer
     */
    public function setTaxItem(RecordRef $taxItem): Customer
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
     * @param string $resaleNumber
     * @return Customer
     */
    public function setResaleNumber(string $resaleNumber): Customer
    {
        $this->resaleNumber = $resaleNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getResaleNumber(): string
    {
        return $this->resaleNumber;
    }

    /**
     * @param float $aging
     * @return Customer
     */
    public function setAging(float $aging): Customer
    {
        $this->aging = $aging;
        return $this;
    }

    /**
     * @return float
     */
    public function getAging(): float
    {
        return $this->aging;
    }

    /**
     * @param string $startDate
     * @return Customer
     */
    public function setStartDate(string $startDate): Customer
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param AlcoholRecipientType $alcoholRecipientType
     * @return Customer
     */
    public function setAlcoholRecipientType(AlcoholRecipientType $alcoholRecipientType): Customer
    {
        $this->alcoholRecipientType = $alcoholRecipientType;
        return $this;
    }

    /**
     * @return AlcoholRecipientType
     */
    public function getAlcoholRecipientType(): AlcoholRecipientType
    {
        return $this->alcoholRecipientType;
    }

    /**
     * @param string $endDate
     * @return Customer
     */
    public function setEndDate(string $endDate): Customer
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param int $reminderDays
     * @return Customer
     */
    public function setReminderDays(int $reminderDays): Customer
    {
        $this->reminderDays = $reminderDays;
        return $this;
    }

    /**
     * @return int
     */
    public function getReminderDays(): int
    {
        return $this->reminderDays;
    }

    /**
     * @param RecordRef $shippingItem
     * @return Customer
     */
    public function setShippingItem(RecordRef $shippingItem): Customer
    {
        $this->shippingItem = $shippingItem;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShippingItem(): RecordRef
    {
        return $this->shippingItem;
    }

    /**
     * @param string $thirdPartyAcct
     * @return Customer
     */
    public function setThirdPartyAcct(string $thirdPartyAcct): Customer
    {
        $this->thirdPartyAcct = $thirdPartyAcct;
        return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyAcct(): string
    {
        return $this->thirdPartyAcct;
    }

    /**
     * @param string $thirdPartyZipcode
     * @return Customer
     */
    public function setThirdPartyZipcode(string $thirdPartyZipcode): Customer
    {
        $this->thirdPartyZipcode = $thirdPartyZipcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyZipcode(): string
    {
        return $this->thirdPartyZipcode;
    }

    /**
     * @param Country $thirdPartyCountry
     * @return Customer
     */
    public function setThirdPartyCountry(Country $thirdPartyCountry): Customer
    {
        $this->thirdPartyCountry = $thirdPartyCountry;
        return $this;
    }

    /**
     * @return Country
     */
    public function getThirdPartyCountry(): Country
    {
        return $this->thirdPartyCountry;
    }

    /**
     * @param bool $giveAccess
     * @return Customer
     */
    public function setGiveAccess(bool $giveAccess): Customer
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
     * @param float $estimatedBudget
     * @return Customer
     */
    public function setEstimatedBudget(float $estimatedBudget): Customer
    {
        $this->estimatedBudget = $estimatedBudget;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedBudget(): float
    {
        return $this->estimatedBudget;
    }

    /**
     * @param RecordRef $accessRole
     * @return Customer
     */
    public function setAccessRole(RecordRef $accessRole): Customer
    {
        $this->accessRole = $accessRole;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAccessRole(): RecordRef
    {
        return $this->accessRole;
    }

    /**
     * @param bool $sendEmail
     * @return Customer
     */
    public function setSendEmail(bool $sendEmail): Customer
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
     * @param RecordRef $assignedWebSite
     * @return Customer
     */
    public function setAssignedWebSite(RecordRef $assignedWebSite): Customer
    {
        $this->assignedWebSite = $assignedWebSite;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAssignedWebSite(): RecordRef
    {
        return $this->assignedWebSite;
    }

    /**
     * @param string $password
     * @return Customer
     */
    public function setPassword(string $password): Customer
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
     * @return Customer
     */
    public function setRequirePwdChange(bool $requirePwdChange): Customer
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
     * @param RecordRef $campaignCategory
     * @return Customer
     */
    public function setCampaignCategory(RecordRef $campaignCategory): Customer
    {
        $this->campaignCategory = $campaignCategory;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCampaignCategory(): RecordRef
    {
        return $this->campaignCategory;
    }

    /**
     * @param RecordRef $sourceWebSite
     * @return Customer
     */
    public function setSourceWebSite(RecordRef $sourceWebSite): Customer
    {
        $this->sourceWebSite = $sourceWebSite;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSourceWebSite(): RecordRef
    {
        return $this->sourceWebSite;
    }

    /**
     * @param RecordRef $leadSource
     * @return Customer
     */
    public function setLeadSource(RecordRef $leadSource): Customer
    {
        $this->leadSource = $leadSource;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLeadSource(): RecordRef
    {
        return $this->leadSource;
    }

    /**
     * @param RecordRef $receivablesAccount
     * @return Customer
     */
    public function setReceivablesAccount(RecordRef $receivablesAccount): Customer
    {
        $this->receivablesAccount = $receivablesAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getReceivablesAccount(): RecordRef
    {
        return $this->receivablesAccount;
    }

    /**
     * @param RecordRef $drAccount
     * @return Customer
     */
    public function setDrAccount(RecordRef $drAccount): Customer
    {
        $this->drAccount = $drAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDrAccount(): RecordRef
    {
        return $this->drAccount;
    }

    /**
     * @param RecordRef $fxAccount
     * @return Customer
     */
    public function setFxAccount(RecordRef $fxAccount): Customer
    {
        $this->fxAccount = $fxAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFxAccount(): RecordRef
    {
        return $this->fxAccount;
    }

    /**
     * @param float $defaultOrderPriority
     * @return Customer
     */
    public function setDefaultOrderPriority(float $defaultOrderPriority): Customer
    {
        $this->defaultOrderPriority = $defaultOrderPriority;
        return $this;
    }

    /**
     * @return float
     */
    public function getDefaultOrderPriority(): float
    {
        return $this->defaultOrderPriority;
    }

    /**
     * @param string $webLead
     * @return Customer
     */
    public function setWebLead(string $webLead): Customer
    {
        $this->webLead = $webLead;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebLead(): string
    {
        return $this->webLead;
    }

    /**
     * @param string $referrer
     * @return Customer
     */
    public function setReferrer(string $referrer): Customer
    {
        $this->referrer = $referrer;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferrer(): string
    {
        return $this->referrer;
    }

    /**
     * @param string $keywords
     * @return Customer
     */
    public function setKeywords(string $keywords): Customer
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * @return string
     */
    public function getKeywords(): string
    {
        return $this->keywords;
    }

    /**
     * @param string $clickStream
     * @return Customer
     */
    public function setClickStream(string $clickStream): Customer
    {
        $this->clickStream = $clickStream;
        return $this;
    }

    /**
     * @return string
     */
    public function getClickStream(): string
    {
        return $this->clickStream;
    }

    /**
     * @param string $lastPageVisited
     * @return Customer
     */
    public function setLastPageVisited(string $lastPageVisited): Customer
    {
        $this->lastPageVisited = $lastPageVisited;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastPageVisited(): string
    {
        return $this->lastPageVisited;
    }

    /**
     * @param int $visits
     * @return Customer
     */
    public function setVisits(int $visits): Customer
    {
        $this->visits = $visits;
        return $this;
    }

    /**
     * @return int
     */
    public function getVisits(): int
    {
        return $this->visits;
    }

    /**
     * @param string $firstVisit
     * @return Customer
     */
    public function setFirstVisit(string $firstVisit): Customer
    {
        $this->firstVisit = $firstVisit;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstVisit(): string
    {
        return $this->firstVisit;
    }

    /**
     * @param string $lastVisit
     * @return Customer
     */
    public function setLastVisit(string $lastVisit): Customer
    {
        $this->lastVisit = $lastVisit;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastVisit(): string
    {
        return $this->lastVisit;
    }

    /**
     * @param bool $billPay
     * @return Customer
     */
    public function setBillPay(bool $billPay): Customer
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
     * @param float $openingBalance
     * @return Customer
     */
    public function setOpeningBalance(float $openingBalance): Customer
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
     * @param string $lastModifiedDate
     * @return Customer
     */
    public function setLastModifiedDate(string $lastModifiedDate): Customer
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
     * @param string $openingBalanceDate
     * @return Customer
     */
    public function setOpeningBalanceDate(string $openingBalanceDate): Customer
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
     * @return Customer
     */
    public function setOpeningBalanceAccount(RecordRef $openingBalanceAccount): Customer
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
     * @param CustomerStage $stage
     * @return Customer
     */
    public function setStage(CustomerStage $stage): Customer
    {
        $this->stage = $stage;
        return $this;
    }

    /**
     * @return CustomerStage
     */
    public function getStage(): CustomerStage
    {
        return $this->stage;
    }

    /**
     * @param bool $emailTransactions
     * @return Customer
     */
    public function setEmailTransactions(bool $emailTransactions): Customer
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
     * @return Customer
     */
    public function setPrintTransactions(bool $printTransactions): Customer
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
     * @return Customer
     */
    public function setFaxTransactions(bool $faxTransactions): Customer
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
     * @return Customer
     */
    public function setDefaultTaxReg(RecordRef $defaultTaxReg): Customer
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
     * @param bool $syncPartnerTeams
     * @return Customer
     */
    public function setSyncPartnerTeams(bool $syncPartnerTeams): Customer
    {
        $this->syncPartnerTeams = $syncPartnerTeams;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSyncPartnerTeams(): bool
    {
        return $this->syncPartnerTeams;
    }

    /**
     * @param bool $isBudgetApproved
     * @return Customer
     */
    public function setIsBudgetApproved(bool $isBudgetApproved): Customer
    {
        $this->isBudgetApproved = $isBudgetApproved;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsBudgetApproved(): bool
    {
        return $this->isBudgetApproved;
    }

    /**
     * @param GlobalSubscriptionStatus $globalSubscriptionStatus
     * @return Customer
     */
    public function setGlobalSubscriptionStatus(GlobalSubscriptionStatus $globalSubscriptionStatus): Customer
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
     * @param RecordRef $salesReadiness
     * @return Customer
     */
    public function setSalesReadiness(RecordRef $salesReadiness): Customer
    {
        $this->salesReadiness = $salesReadiness;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesReadiness(): RecordRef
    {
        return $this->salesReadiness;
    }

    /**
     * @param CustomerSalesTeamList $salesTeamList
     * @return Customer
     */
    public function setSalesTeamList(CustomerSalesTeamList $salesTeamList): Customer
    {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * @return CustomerSalesTeamList
     */
    public function getSalesTeamList(): CustomerSalesTeamList
    {
        return $this->salesTeamList;
    }

    /**
     * @param RecordRef $buyingReason
     * @return Customer
     */
    public function setBuyingReason(RecordRef $buyingReason): Customer
    {
        $this->buyingReason = $buyingReason;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBuyingReason(): RecordRef
    {
        return $this->buyingReason;
    }

    /**
     * @param CustomerDownloadList $downloadList
     * @return Customer
     */
    public function setDownloadList(CustomerDownloadList $downloadList): Customer
    {
        $this->downloadList = $downloadList;
        return $this;
    }

    /**
     * @return CustomerDownloadList
     */
    public function getDownloadList(): CustomerDownloadList
    {
        return $this->downloadList;
    }

    /**
     * @param RecordRef $buyingTimeFrame
     * @return Customer
     */
    public function setBuyingTimeFrame(RecordRef $buyingTimeFrame): Customer
    {
        $this->buyingTimeFrame = $buyingTimeFrame;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBuyingTimeFrame(): RecordRef
    {
        return $this->buyingTimeFrame;
    }

    /**
     * @param CustomerAddressbookList $addressbookList
     * @return Customer
     */
    public function setAddressbookList(CustomerAddressbookList $addressbookList): Customer
    {
        $this->addressbookList = $addressbookList;
        return $this;
    }

    /**
     * @return CustomerAddressbookList
     */
    public function getAddressbookList(): CustomerAddressbookList
    {
        return $this->addressbookList;
    }

    /**
     * @param SubscriptionsList $subscriptionsList
     * @return Customer
     */
    public function setSubscriptionsList(SubscriptionsList $subscriptionsList): Customer
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
     * @param ContactAccessRolesList $contactRolesList
     * @return Customer
     */
    public function setContactRolesList(ContactAccessRolesList $contactRolesList): Customer
    {
        $this->contactRolesList = $contactRolesList;
        return $this;
    }

    /**
     * @return ContactAccessRolesList
     */
    public function getContactRolesList(): ContactAccessRolesList
    {
        return $this->contactRolesList;
    }

    /**
     * @param CustomerCurrencyList $currencyList
     * @return Customer
     */
    public function setCurrencyList(CustomerCurrencyList $currencyList): Customer
    {
        $this->currencyList = $currencyList;
        return $this;
    }

    /**
     * @return CustomerCurrencyList
     */
    public function getCurrencyList(): CustomerCurrencyList
    {
        return $this->currencyList;
    }

    /**
     * @param CustomerCreditCardsList $creditCardsList
     * @return Customer
     */
    public function setCreditCardsList(CustomerCreditCardsList $creditCardsList): Customer
    {
        $this->creditCardsList = $creditCardsList;
        return $this;
    }

    /**
     * @return CustomerCreditCardsList
     */
    public function getCreditCardsList(): CustomerCreditCardsList
    {
        return $this->creditCardsList;
    }

    /**
     * @param CustomerPartnersList $partnersList
     * @return Customer
     */
    public function setPartnersList(CustomerPartnersList $partnersList): Customer
    {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * @return CustomerPartnersList
     */
    public function getPartnersList(): CustomerPartnersList
    {
        return $this->partnersList;
    }

    /**
     * @param CustomerGroupPricingList $groupPricingList
     * @return Customer
     */
    public function setGroupPricingList(CustomerGroupPricingList $groupPricingList): Customer
    {
        $this->groupPricingList = $groupPricingList;
        return $this;
    }

    /**
     * @return CustomerGroupPricingList
     */
    public function getGroupPricingList(): CustomerGroupPricingList
    {
        return $this->groupPricingList;
    }

    /**
     * @param CustomerItemPricingList $itemPricingList
     * @return Customer
     */
    public function setItemPricingList(CustomerItemPricingList $itemPricingList): Customer
    {
        $this->itemPricingList = $itemPricingList;
        return $this;
    }

    /**
     * @return CustomerItemPricingList
     */
    public function getItemPricingList(): CustomerItemPricingList
    {
        return $this->itemPricingList;
    }

    /**
     * @param CustomerTaxRegistrationList $taxRegistrationList
     * @return Customer
     */
    public function setTaxRegistrationList(CustomerTaxRegistrationList $taxRegistrationList): Customer
    {
        $this->taxRegistrationList = $taxRegistrationList;
        return $this;
    }

    /**
     * @return CustomerTaxRegistrationList
     */
    public function getTaxRegistrationList(): CustomerTaxRegistrationList
    {
        return $this->taxRegistrationList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return Customer
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Customer
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
     * @return Customer
     */
    public function setInternalId(string $internalId): Customer
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
     * @return Customer
     */
    public function setExternalId(string $externalId): Customer
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
