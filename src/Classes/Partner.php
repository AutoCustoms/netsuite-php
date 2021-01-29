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

class Partner extends Record {
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
     * @var string
     */
    protected string $partnerCode;

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
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var string
     */
    protected string $dateCreated;

    /**
     * @var PartnerTaxRegistrationList
     */
    protected PartnerTaxRegistrationList $taxRegistrationList;

    /**
     * @var GlobalSubscriptionStatus
     */
    protected GlobalSubscriptionStatus $globalSubscriptionStatus;

    /**
     * @var string
     */
    protected string $referringUrl;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $roleList;

    /**
     * @var CategoryList
     */
    protected CategoryList $categoryList;

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
    protected string $taxIdNum;

    /**
     * @var string
     */
    protected string $vatRegNumber;

    /**
     * @var string
     */
    protected string $comments;

    /**
     * @var string
     */
    protected string $bcn;

    /**
     * @var RecordRef
     */
    protected RecordRef $image;

    /**
     * @var TaxFractionUnit
     */
    protected TaxFractionUnit $taxFractionUnit;

    /**
     * @var EmailPreference
     */
    protected EmailPreference $emailPreference;

    /**
     * @var RecordRef
     */
    protected RecordRef $defaultTaxReg;

    /**
     * @var TaxRounding
     */
    protected TaxRounding $taxRounding;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

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
     * @var bool
     */
    protected bool $giveAccess;

    /**
     * @var RecordRef
     */
    protected RecordRef $accessRole;

    /**
     * @var bool
     */
    protected bool $sendEmail;

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
    protected bool $subPartnerLogin;

    /**
     * @var string
     */
    protected string $loginAs;

    /**
     * @var bool
     */
    protected bool $eligibleForCommission;

    /**
     * @var ContactAccessRolesList
     */
    protected ContactAccessRolesList $contactRolesList;

    /**
     * @var PartnerPromoCodeList
     */
    protected PartnerPromoCodeList $promoCodeList;

    /**
     * @var PartnerAddressbookList
     */
    protected PartnerAddressbookList $addressbookList;

    /**
     * @var SubscriptionsList
     */
    protected SubscriptionsList $subscriptionsList;

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
        "partnerCode" => "string",
        "isPerson" => "boolean",
        "phoneticName" => "string",
        "salutation" => "string",
        "firstName" => "string",
        "middleName" => "string",
        "lastName" => "string",
        "companyName" => "string",
        "parent" => "RecordRef",
        "phone" => "string",
        "fax" => "string",
        "email" => "string",
        "url" => "string",
        "defaultAddress" => "string",
        "isInactive" => "boolean",
        "lastModifiedDate" => "dateTime",
        "dateCreated" => "dateTime",
        "taxRegistrationList" => "PartnerTaxRegistrationList",
        "globalSubscriptionStatus" => "GlobalSubscriptionStatus",
        "referringUrl" => "string",
        "roleList" => "RecordRefList",
        "categoryList" => "CategoryList",
        "title" => "string",
        "printOnCheckAs" => "string",
        "taxIdNum" => "string",
        "vatRegNumber" => "string",
        "comments" => "string",
        "bcn" => "string",
        "image" => "RecordRef",
        "taxFractionUnit" => "TaxFractionUnit",
        "emailPreference" => "EmailPreference",
        "defaultTaxReg" => "RecordRef",
        "taxRounding" => "TaxRounding",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "class" => "RecordRef",
        "subsidiary" => "RecordRef",
        "homePhone" => "string",
        "mobilePhone" => "string",
        "altEmail" => "string",
        "giveAccess" => "boolean",
        "accessRole" => "RecordRef",
        "sendEmail" => "boolean",
        "password" => "string",
        "password2" => "string",
        "requirePwdChange" => "boolean",
        "subPartnerLogin" => "boolean",
        "loginAs" => "string",
        "eligibleForCommission" => "boolean",
        "contactRolesList" => "ContactAccessRolesList",
        "promoCodeList" => "PartnerPromoCodeList",
        "addressbookList" => "PartnerAddressbookList",
        "subscriptionsList" => "SubscriptionsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return Partner
     */
    public function setCustomForm(RecordRef $customForm): Partner
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
     * @return Partner
     */
    public function setEntityId(string $entityId): Partner
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
     * @return Partner
     */
    public function setAltName(string $altName): Partner
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
     * @param string $partnerCode
     * @return Partner
     */
    public function setPartnerCode(string $partnerCode): Partner
    {
        $this->partnerCode = $partnerCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPartnerCode(): string
    {
        return $this->partnerCode;
    }

    /**
     * @param bool $isPerson
     * @return Partner
     */
    public function setIsPerson(bool $isPerson): Partner
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
     * @return Partner
     */
    public function setPhoneticName(string $phoneticName): Partner
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
     * @return Partner
     */
    public function setSalutation(string $salutation): Partner
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
     * @return Partner
     */
    public function setFirstName(string $firstName): Partner
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
     * @return Partner
     */
    public function setMiddleName(string $middleName): Partner
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
     * @return Partner
     */
    public function setLastName(string $lastName): Partner
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
     * @return Partner
     */
    public function setCompanyName(string $companyName): Partner
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
     * @param RecordRef $parent
     * @return Partner
     */
    public function setParent(RecordRef $parent): Partner
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
     * @return Partner
     */
    public function setPhone(string $phone): Partner
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
     * @return Partner
     */
    public function setFax(string $fax): Partner
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
     * @return Partner
     */
    public function setEmail(string $email): Partner
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
     * @return Partner
     */
    public function setUrl(string $url): Partner
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
     * @return Partner
     */
    public function setDefaultAddress(string $defaultAddress): Partner
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
     * @return Partner
     */
    public function setIsInactive(bool $isInactive): Partner
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
     * @return Partner
     */
    public function setLastModifiedDate(string $lastModifiedDate): Partner
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
     * @return Partner
     */
    public function setDateCreated(string $dateCreated): Partner
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
     * @param PartnerTaxRegistrationList $taxRegistrationList
     * @return Partner
     */
    public function setTaxRegistrationList(PartnerTaxRegistrationList $taxRegistrationList): Partner
    {
        $this->taxRegistrationList = $taxRegistrationList;
        return $this;
    }

    /**
     * @return PartnerTaxRegistrationList
     */
    public function getTaxRegistrationList(): PartnerTaxRegistrationList
    {
        return $this->taxRegistrationList;
    }

    /**
     * @param GlobalSubscriptionStatus $globalSubscriptionStatus
     * @return Partner
     */
    public function setGlobalSubscriptionStatus(GlobalSubscriptionStatus $globalSubscriptionStatus): Partner
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
     * @param string $referringUrl
     * @return Partner
     */
    public function setReferringUrl(string $referringUrl): Partner
    {
        $this->referringUrl = $referringUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferringUrl(): string
    {
        return $this->referringUrl;
    }

    /**
     * @param RecordRefList $roleList
     * @return Partner
     */
    public function setRoleList(RecordRefList $roleList): Partner
    {
        $this->roleList = $roleList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getRoleList(): RecordRefList
    {
        return $this->roleList;
    }

    /**
     * @param CategoryList $categoryList
     * @return Partner
     */
    public function setCategoryList(CategoryList $categoryList): Partner
    {
        $this->categoryList = $categoryList;
        return $this;
    }

    /**
     * @return CategoryList
     */
    public function getCategoryList(): CategoryList
    {
        return $this->categoryList;
    }

    /**
     * @param string $title
     * @return Partner
     */
    public function setTitle(string $title): Partner
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
     * @return Partner
     */
    public function setPrintOnCheckAs(string $printOnCheckAs): Partner
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
     * @param string $taxIdNum
     * @return Partner
     */
    public function setTaxIdNum(string $taxIdNum): Partner
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
     * @param string $vatRegNumber
     * @return Partner
     */
    public function setVatRegNumber(string $vatRegNumber): Partner
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
     * @param string $comments
     * @return Partner
     */
    public function setComments(string $comments): Partner
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
     * @param string $bcn
     * @return Partner
     */
    public function setBcn(string $bcn): Partner
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
     * @param RecordRef $image
     * @return Partner
     */
    public function setImage(RecordRef $image): Partner
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
     * @param TaxFractionUnit $taxFractionUnit
     * @return Partner
     */
    public function setTaxFractionUnit(TaxFractionUnit $taxFractionUnit): Partner
    {
        $this->taxFractionUnit = $taxFractionUnit;
        return $this;
    }

    /**
     * @return TaxFractionUnit
     */
    public function getTaxFractionUnit(): TaxFractionUnit
    {
        return $this->taxFractionUnit;
    }

    /**
     * @param EmailPreference $emailPreference
     * @return Partner
     */
    public function setEmailPreference(EmailPreference $emailPreference): Partner
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
     * @param RecordRef $defaultTaxReg
     * @return Partner
     */
    public function setDefaultTaxReg(RecordRef $defaultTaxReg): Partner
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
     * @param TaxRounding $taxRounding
     * @return Partner
     */
    public function setTaxRounding(TaxRounding $taxRounding): Partner
    {
        $this->taxRounding = $taxRounding;
        return $this;
    }

    /**
     * @return TaxRounding
     */
    public function getTaxRounding(): TaxRounding
    {
        return $this->taxRounding;
    }

    /**
     * @param RecordRef $department
     * @return Partner
     */
    public function setDepartment(RecordRef $department): Partner
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment(): RecordRef
    {
        return $this->department;
    }

    /**
     * @param RecordRef $location
     * @return Partner
     */
    public function setLocation(RecordRef $location): Partner
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation(): RecordRef
    {
        return $this->location;
    }

    /**
     * @param RecordRef $class
     * @return Partner
     */
    public function setClass(RecordRef $class): Partner
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass(): RecordRef
    {
        return $this->class;
    }

    /**
     * @param RecordRef $subsidiary
     * @return Partner
     */
    public function setSubsidiary(RecordRef $subsidiary): Partner
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
     * @param string $homePhone
     * @return Partner
     */
    public function setHomePhone(string $homePhone): Partner
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
     * @return Partner
     */
    public function setMobilePhone(string $mobilePhone): Partner
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
     * @return Partner
     */
    public function setAltEmail(string $altEmail): Partner
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
     * @param bool $giveAccess
     * @return Partner
     */
    public function setGiveAccess(bool $giveAccess): Partner
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
     * @param RecordRef $accessRole
     * @return Partner
     */
    public function setAccessRole(RecordRef $accessRole): Partner
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
     * @return Partner
     */
    public function setSendEmail(bool $sendEmail): Partner
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
     * @param string $password
     * @return Partner
     */
    public function setPassword(string $password): Partner
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
     * @return Partner
     */
    public function setRequirePwdChange(bool $requirePwdChange): Partner
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
     * @param bool $subPartnerLogin
     * @return Partner
     */
    public function setSubPartnerLogin(bool $subPartnerLogin): Partner
    {
        $this->subPartnerLogin = $subPartnerLogin;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSubPartnerLogin(): bool
    {
        return $this->subPartnerLogin;
    }

    /**
     * @param string $loginAs
     * @return Partner
     */
    public function setLoginAs(string $loginAs): Partner
    {
        $this->loginAs = $loginAs;
        return $this;
    }

    /**
     * @return string
     */
    public function getLoginAs(): string
    {
        return $this->loginAs;
    }

    /**
     * @param bool $eligibleForCommission
     * @return Partner
     */
    public function setEligibleForCommission(bool $eligibleForCommission): Partner
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
     * @param ContactAccessRolesList $contactRolesList
     * @return Partner
     */
    public function setContactRolesList(ContactAccessRolesList $contactRolesList): Partner
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
     * @param PartnerPromoCodeList $promoCodeList
     * @return Partner
     */
    public function setPromoCodeList(PartnerPromoCodeList $promoCodeList): Partner
    {
        $this->promoCodeList = $promoCodeList;
        return $this;
    }

    /**
     * @return PartnerPromoCodeList
     */
    public function getPromoCodeList(): PartnerPromoCodeList
    {
        return $this->promoCodeList;
    }

    /**
     * @param PartnerAddressbookList $addressbookList
     * @return Partner
     */
    public function setAddressbookList(PartnerAddressbookList $addressbookList): Partner
    {
        $this->addressbookList = $addressbookList;
        return $this;
    }

    /**
     * @return PartnerAddressbookList
     */
    public function getAddressbookList(): PartnerAddressbookList
    {
        return $this->addressbookList;
    }

    /**
     * @param SubscriptionsList $subscriptionsList
     * @return Partner
     */
    public function setSubscriptionsList(SubscriptionsList $subscriptionsList): Partner
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
     * @param CustomFieldList $customFieldList
     * @return Partner
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Partner
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
     * @return Partner
     */
    public function setInternalId(string $internalId): Partner
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
     * @return Partner
     */
    public function setExternalId(string $externalId): Partner
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
