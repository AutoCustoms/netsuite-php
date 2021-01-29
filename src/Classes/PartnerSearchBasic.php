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

class PartnerSearchBasic extends SearchRecordBasic {
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
     * @var SearchBooleanField
     */
    protected SearchBooleanField $assignTasks;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $attention;

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
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $class;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $comments;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $commissionPlan;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $country;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $county;

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
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $department;

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
     * @var SearchStringField
     */
    protected SearchStringField $entityId;

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
     * @var SearchStringField
     */
    protected SearchStringField $firstName;

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
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

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
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $location;

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
    protected SearchMultiSelectField $parent;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $partnerCode;

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
    protected SearchMultiSelectField $promoCode;

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
    protected SearchStringField $title;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $URL;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $zipCode;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "address" => "SearchStringField",
        "addressee" => "SearchStringField",
        "addressLabel" => "SearchStringField",
        "addressPhone" => "SearchStringField",
        "assignTasks" => "SearchBooleanField",
        "attention" => "SearchStringField",
        "billAddress" => "SearchStringField",
        "category" => "SearchMultiSelectField",
        "city" => "SearchStringField",
        "class" => "SearchMultiSelectField",
        "comments" => "SearchStringField",
        "commissionPlan" => "SearchMultiSelectField",
        "country" => "SearchEnumMultiSelectField",
        "county" => "SearchStringField",
        "dateCreated" => "SearchDateField",
        "defaultTaxReg" => "SearchMultiSelectField",
        "defaultTaxRegText" => "SearchStringField",
        "department" => "SearchMultiSelectField",
        "eligibleForCommission" => "SearchBooleanField",
        "email" => "SearchStringField",
        "emailPreference" => "SearchEnumMultiSelectField",
        "entityId" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "fax" => "SearchStringField",
        "firstName" => "SearchStringField",
        "giveAccess" => "SearchBooleanField",
        "globalSubscriptionStatus" => "SearchEnumMultiSelectField",
        "group" => "SearchMultiSelectField",
        "hasDuplicates" => "SearchBooleanField",
        "image" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isDefaultBilling" => "SearchBooleanField",
        "isDefaultShipping" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "isPerson" => "SearchBooleanField",
        "language" => "SearchEnumMultiSelectField",
        "lastModifiedDate" => "SearchDateField",
        "lastName" => "SearchStringField",
        "level" => "SearchEnumMultiSelectField",
        "location" => "SearchMultiSelectField",
        "middleName" => "SearchStringField",
        "otherRelationships" => "SearchEnumMultiSelectField",
        "parent" => "SearchMultiSelectField",
        "partnerCode" => "SearchStringField",
        "permission" => "SearchEnumMultiSelectField",
        "phone" => "SearchStringField",
        "phoneticName" => "SearchStringField",
        "promoCode" => "SearchMultiSelectField",
        "salutation" => "SearchStringField",
        "shipAddress" => "SearchStringField",
        "state" => "SearchStringField",
        "subsidiary" => "SearchMultiSelectField",
        "title" => "SearchStringField",
        "URL" => "SearchStringField",
        "zipCode" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchStringField $address
     * @return PartnerSearchBasic
     */
    public function setAddress(SearchStringField $address): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setAddressee(SearchStringField $addressee): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setAddressLabel(SearchStringField $addressLabel): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setAddressPhone(SearchStringField $addressPhone): PartnerSearchBasic
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
     * @param SearchBooleanField $assignTasks
     * @return PartnerSearchBasic
     */
    public function setAssignTasks(SearchBooleanField $assignTasks): PartnerSearchBasic
    {
        $this->assignTasks = $assignTasks;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAssignTasks(): SearchBooleanField
    {
        return $this->assignTasks;
    }

    /**
     * @param SearchStringField $attention
     * @return PartnerSearchBasic
     */
    public function setAttention(SearchStringField $attention): PartnerSearchBasic
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
     * @param SearchStringField $billAddress
     * @return PartnerSearchBasic
     */
    public function setBillAddress(SearchStringField $billAddress): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setCategory(SearchMultiSelectField $category): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setCity(SearchStringField $city): PartnerSearchBasic
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
     * @param SearchMultiSelectField $class
     * @return PartnerSearchBasic
     */
    public function setClass(SearchMultiSelectField $class): PartnerSearchBasic
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getClass(): SearchMultiSelectField
    {
        return $this->class;
    }

    /**
     * @param SearchStringField $comments
     * @return PartnerSearchBasic
     */
    public function setComments(SearchStringField $comments): PartnerSearchBasic
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
     * @param SearchMultiSelectField $commissionPlan
     * @return PartnerSearchBasic
     */
    public function setCommissionPlan(SearchMultiSelectField $commissionPlan): PartnerSearchBasic
    {
        $this->commissionPlan = $commissionPlan;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCommissionPlan(): SearchMultiSelectField
    {
        return $this->commissionPlan;
    }

    /**
     * @param SearchEnumMultiSelectField $country
     * @return PartnerSearchBasic
     */
    public function setCountry(SearchEnumMultiSelectField $country): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setCounty(SearchStringField $county): PartnerSearchBasic
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
     * @param SearchDateField $dateCreated
     * @return PartnerSearchBasic
     */
    public function setDateCreated(SearchDateField $dateCreated): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setDefaultTaxReg(SearchMultiSelectField $defaultTaxReg): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setDefaultTaxRegText(SearchStringField $defaultTaxRegText): PartnerSearchBasic
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
     * @param SearchMultiSelectField $department
     * @return PartnerSearchBasic
     */
    public function setDepartment(SearchMultiSelectField $department): PartnerSearchBasic
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDepartment(): SearchMultiSelectField
    {
        return $this->department;
    }

    /**
     * @param SearchBooleanField $eligibleForCommission
     * @return PartnerSearchBasic
     */
    public function setEligibleForCommission(SearchBooleanField $eligibleForCommission): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setEmail(SearchStringField $email): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setEmailPreference(SearchEnumMultiSelectField $emailPreference): PartnerSearchBasic
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
     * @param SearchStringField $entityId
     * @return PartnerSearchBasic
     */
    public function setEntityId(SearchStringField $entityId): PartnerSearchBasic
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
     * @param SearchMultiSelectField $externalId
     * @return PartnerSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setFax(SearchStringField $fax): PartnerSearchBasic
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
     * @param SearchStringField $firstName
     * @return PartnerSearchBasic
     */
    public function setFirstName(SearchStringField $firstName): PartnerSearchBasic
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
     * @param SearchBooleanField $giveAccess
     * @return PartnerSearchBasic
     */
    public function setGiveAccess(SearchBooleanField $giveAccess): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setGlobalSubscriptionStatus(SearchEnumMultiSelectField $globalSubscriptionStatus): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setGroup(SearchMultiSelectField $group): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setHasDuplicates(SearchBooleanField $hasDuplicates): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setImage(SearchStringField $image): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setIsDefaultBilling(SearchBooleanField $isDefaultBilling): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setIsDefaultShipping(SearchBooleanField $isDefaultShipping): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setIsPerson(SearchBooleanField $isPerson): PartnerSearchBasic
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
     * @param SearchEnumMultiSelectField $language
     * @return PartnerSearchBasic
     */
    public function setLanguage(SearchEnumMultiSelectField $language): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setLastName(SearchStringField $lastName): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setLevel(SearchEnumMultiSelectField $level): PartnerSearchBasic
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
     * @param SearchMultiSelectField $location
     * @return PartnerSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): PartnerSearchBasic
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation(): SearchMultiSelectField
    {
        return $this->location;
    }

    /**
     * @param SearchStringField $middleName
     * @return PartnerSearchBasic
     */
    public function setMiddleName(SearchStringField $middleName): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setOtherRelationships(SearchEnumMultiSelectField $otherRelationships): PartnerSearchBasic
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
     * @param SearchMultiSelectField $parent
     * @return PartnerSearchBasic
     */
    public function setParent(SearchMultiSelectField $parent): PartnerSearchBasic
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
     * @param SearchStringField $partnerCode
     * @return PartnerSearchBasic
     */
    public function setPartnerCode(SearchStringField $partnerCode): PartnerSearchBasic
    {
        $this->partnerCode = $partnerCode;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPartnerCode(): SearchStringField
    {
        return $this->partnerCode;
    }

    /**
     * @param SearchEnumMultiSelectField $permission
     * @return PartnerSearchBasic
     */
    public function setPermission(SearchEnumMultiSelectField $permission): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setPhone(SearchStringField $phone): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setPhoneticName(SearchStringField $phoneticName): PartnerSearchBasic
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
     * @param SearchMultiSelectField $promoCode
     * @return PartnerSearchBasic
     */
    public function setPromoCode(SearchMultiSelectField $promoCode): PartnerSearchBasic
    {
        $this->promoCode = $promoCode;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPromoCode(): SearchMultiSelectField
    {
        return $this->promoCode;
    }

    /**
     * @param SearchStringField $salutation
     * @return PartnerSearchBasic
     */
    public function setSalutation(SearchStringField $salutation): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setShipAddress(SearchStringField $shipAddress): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setState(SearchStringField $state): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): PartnerSearchBasic
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
     * @param SearchStringField $title
     * @return PartnerSearchBasic
     */
    public function setTitle(SearchStringField $title): PartnerSearchBasic
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
     * @param SearchStringField $URL
     * @return PartnerSearchBasic
     */
    public function setURL(SearchStringField $URL): PartnerSearchBasic
    {
        $this->URL = $URL;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getURL(): SearchStringField
    {
        return $this->URL;
    }

    /**
     * @param SearchStringField $zipCode
     * @return PartnerSearchBasic
     */
    public function setZipCode(SearchStringField $zipCode): PartnerSearchBasic
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
     * @return PartnerSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): PartnerSearchBasic
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
