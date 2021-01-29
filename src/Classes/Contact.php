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

class Contact extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $entityId;

    /**
     * @var RecordRef
     */
    protected RecordRef $contactSource;

    /**
     * @var RecordRef
     */
    protected RecordRef $company;

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
    protected string $title;

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
    protected string $defaultAddress;

    /**
     * @var bool
     */
    protected bool $isPrivate;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var string
     */
    protected string $phoneticName;

    /**
     * @var CategoryList
     */
    protected CategoryList $categoryList;

    /**
     * @var string
     */
    protected string $altEmail;

    /**
     * @var string
     */
    protected string $officePhone;

    /**
     * @var string
     */
    protected string $homePhone;

    /**
     * @var string
     */
    protected string $mobilePhone;

    /**
     * @var RecordRef
     */
    protected RecordRef $supervisor;

    /**
     * @var string
     */
    protected string $supervisorPhone;

    /**
     * @var RecordRef
     */
    protected RecordRef $assistant;

    /**
     * @var string
     */
    protected string $assistantPhone;

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
     * @var bool
     */
    protected bool $billPay;

    /**
     * @var string
     */
    protected string $dateCreated;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var ContactAddressbookList
     */
    protected ContactAddressbookList $addressbookList;

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
        "contactSource" => "RecordRef",
        "company" => "RecordRef",
        "salutation" => "string",
        "firstName" => "string",
        "middleName" => "string",
        "lastName" => "string",
        "title" => "string",
        "phone" => "string",
        "fax" => "string",
        "email" => "string",
        "defaultAddress" => "string",
        "isPrivate" => "boolean",
        "isInactive" => "boolean",
        "subsidiary" => "RecordRef",
        "phoneticName" => "string",
        "categoryList" => "CategoryList",
        "altEmail" => "string",
        "officePhone" => "string",
        "homePhone" => "string",
        "mobilePhone" => "string",
        "supervisor" => "RecordRef",
        "supervisorPhone" => "string",
        "assistant" => "RecordRef",
        "assistantPhone" => "string",
        "comments" => "string",
        "globalSubscriptionStatus" => "GlobalSubscriptionStatus",
        "image" => "RecordRef",
        "billPay" => "boolean",
        "dateCreated" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "addressbookList" => "ContactAddressbookList",
        "subscriptionsList" => "SubscriptionsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return Contact
     */
    public function setCustomForm(RecordRef $customForm): Contact
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
     * @return Contact
     */
    public function setEntityId(string $entityId): Contact
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
     * @param RecordRef $contactSource
     * @return Contact
     */
    public function setContactSource(RecordRef $contactSource): Contact
    {
        $this->contactSource = $contactSource;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getContactSource(): RecordRef
    {
        return $this->contactSource;
    }

    /**
     * @param RecordRef $company
     * @return Contact
     */
    public function setCompany(RecordRef $company): Contact
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCompany(): RecordRef
    {
        return $this->company;
    }

    /**
     * @param string $salutation
     * @return Contact
     */
    public function setSalutation(string $salutation): Contact
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
     * @return Contact
     */
    public function setFirstName(string $firstName): Contact
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
     * @return Contact
     */
    public function setMiddleName(string $middleName): Contact
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
     * @return Contact
     */
    public function setLastName(string $lastName): Contact
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
     * @param string $title
     * @return Contact
     */
    public function setTitle(string $title): Contact
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
     * @param string $phone
     * @return Contact
     */
    public function setPhone(string $phone): Contact
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
     * @return Contact
     */
    public function setFax(string $fax): Contact
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
     * @return Contact
     */
    public function setEmail(string $email): Contact
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
     * @param string $defaultAddress
     * @return Contact
     */
    public function setDefaultAddress(string $defaultAddress): Contact
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
     * @param bool $isPrivate
     * @return Contact
     */
    public function setIsPrivate(bool $isPrivate): Contact
    {
        $this->isPrivate = $isPrivate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPrivate(): bool
    {
        return $this->isPrivate;
    }

    /**
     * @param bool $isInactive
     * @return Contact
     */
    public function setIsInactive(bool $isInactive): Contact
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
     * @param RecordRef $subsidiary
     * @return Contact
     */
    public function setSubsidiary(RecordRef $subsidiary): Contact
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
     * @param string $phoneticName
     * @return Contact
     */
    public function setPhoneticName(string $phoneticName): Contact
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
     * @param CategoryList $categoryList
     * @return Contact
     */
    public function setCategoryList(CategoryList $categoryList): Contact
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
     * @param string $altEmail
     * @return Contact
     */
    public function setAltEmail(string $altEmail): Contact
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
     * @param string $officePhone
     * @return Contact
     */
    public function setOfficePhone(string $officePhone): Contact
    {
        $this->officePhone = $officePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getOfficePhone(): string
    {
        return $this->officePhone;
    }

    /**
     * @param string $homePhone
     * @return Contact
     */
    public function setHomePhone(string $homePhone): Contact
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
     * @return Contact
     */
    public function setMobilePhone(string $mobilePhone): Contact
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
     * @param RecordRef $supervisor
     * @return Contact
     */
    public function setSupervisor(RecordRef $supervisor): Contact
    {
        $this->supervisor = $supervisor;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSupervisor(): RecordRef
    {
        return $this->supervisor;
    }

    /**
     * @param string $supervisorPhone
     * @return Contact
     */
    public function setSupervisorPhone(string $supervisorPhone): Contact
    {
        $this->supervisorPhone = $supervisorPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getSupervisorPhone(): string
    {
        return $this->supervisorPhone;
    }

    /**
     * @param RecordRef $assistant
     * @return Contact
     */
    public function setAssistant(RecordRef $assistant): Contact
    {
        $this->assistant = $assistant;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAssistant(): RecordRef
    {
        return $this->assistant;
    }

    /**
     * @param string $assistantPhone
     * @return Contact
     */
    public function setAssistantPhone(string $assistantPhone): Contact
    {
        $this->assistantPhone = $assistantPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssistantPhone(): string
    {
        return $this->assistantPhone;
    }

    /**
     * @param string $comments
     * @return Contact
     */
    public function setComments(string $comments): Contact
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
     * @return Contact
     */
    public function setGlobalSubscriptionStatus(GlobalSubscriptionStatus $globalSubscriptionStatus): Contact
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
     * @return Contact
     */
    public function setImage(RecordRef $image): Contact
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
     * @param bool $billPay
     * @return Contact
     */
    public function setBillPay(bool $billPay): Contact
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
     * @param string $dateCreated
     * @return Contact
     */
    public function setDateCreated(string $dateCreated): Contact
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
     * @param string $lastModifiedDate
     * @return Contact
     */
    public function setLastModifiedDate(string $lastModifiedDate): Contact
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
     * @param ContactAddressbookList $addressbookList
     * @return Contact
     */
    public function setAddressbookList(ContactAddressbookList $addressbookList): Contact
    {
        $this->addressbookList = $addressbookList;
        return $this;
    }

    /**
     * @return ContactAddressbookList
     */
    public function getAddressbookList(): ContactAddressbookList
    {
        return $this->addressbookList;
    }

    /**
     * @param SubscriptionsList $subscriptionsList
     * @return Contact
     */
    public function setSubscriptionsList(SubscriptionsList $subscriptionsList): Contact
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
     * @return Contact
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Contact
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
     * @return Contact
     */
    public function setInternalId(string $internalId): Contact
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
     * @return Contact
     */
    public function setExternalId(string $externalId): Contact
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
