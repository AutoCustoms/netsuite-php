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

class ContactSearchBasic extends SearchRecordBasic {
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
     * @var SearchBooleanField
     */
    protected SearchBooleanField $availableOffline;

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
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $company;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $contactRole;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $contactSource;

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
     * @var SearchStringField
     */
    protected SearchStringField $email;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $employer;

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
    protected SearchBooleanField $isPrivate;

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
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $owner;

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
     * @var SearchStringField
     */
    protected SearchStringField $salutation;

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
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $type;

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
        "attention" => "SearchStringField",
        "availableOffline" => "SearchBooleanField",
        "category" => "SearchMultiSelectField",
        "city" => "SearchStringField",
        "comments" => "SearchStringField",
        "company" => "SearchMultiSelectField",
        "contactRole" => "SearchMultiSelectField",
        "contactSource" => "SearchMultiSelectField",
        "country" => "SearchEnumMultiSelectField",
        "county" => "SearchStringField",
        "dateCreated" => "SearchDateField",
        "defaultTaxReg" => "SearchMultiSelectField",
        "defaultTaxRegText" => "SearchStringField",
        "email" => "SearchStringField",
        "employer" => "SearchStringField",
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
        "isPrivate" => "SearchBooleanField",
        "language" => "SearchEnumMultiSelectField",
        "lastModifiedDate" => "SearchDateField",
        "lastName" => "SearchStringField",
        "level" => "SearchEnumMultiSelectField",
        "middleName" => "SearchStringField",
        "owner" => "SearchMultiSelectField",
        "permission" => "SearchEnumMultiSelectField",
        "phone" => "SearchStringField",
        "phoneticName" => "SearchStringField",
        "salutation" => "SearchStringField",
        "state" => "SearchStringField",
        "subsidiary" => "SearchMultiSelectField",
        "title" => "SearchStringField",
        "type" => "SearchEnumMultiSelectField",
        "zipCode" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchStringField $address
     * @return ContactSearchBasic
     */
    public function setAddress(SearchStringField $address): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setAddressee(SearchStringField $addressee): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setAddressLabel(SearchStringField $addressLabel): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setAddressPhone(SearchStringField $addressPhone): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setAttention(SearchStringField $attention): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setAvailableOffline(SearchBooleanField $availableOffline): ContactSearchBasic
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
     * @param SearchMultiSelectField $category
     * @return ContactSearchBasic
     */
    public function setCategory(SearchMultiSelectField $category): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setCity(SearchStringField $city): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setComments(SearchStringField $comments): ContactSearchBasic
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
     * @param SearchMultiSelectField $company
     * @return ContactSearchBasic
     */
    public function setCompany(SearchMultiSelectField $company): ContactSearchBasic
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCompany(): SearchMultiSelectField
    {
        return $this->company;
    }

    /**
     * @param SearchMultiSelectField $contactRole
     * @return ContactSearchBasic
     */
    public function setContactRole(SearchMultiSelectField $contactRole): ContactSearchBasic
    {
        $this->contactRole = $contactRole;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getContactRole(): SearchMultiSelectField
    {
        return $this->contactRole;
    }

    /**
     * @param SearchMultiSelectField $contactSource
     * @return ContactSearchBasic
     */
    public function setContactSource(SearchMultiSelectField $contactSource): ContactSearchBasic
    {
        $this->contactSource = $contactSource;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getContactSource(): SearchMultiSelectField
    {
        return $this->contactSource;
    }

    /**
     * @param SearchEnumMultiSelectField $country
     * @return ContactSearchBasic
     */
    public function setCountry(SearchEnumMultiSelectField $country): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setCounty(SearchStringField $county): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setDateCreated(SearchDateField $dateCreated): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setDefaultTaxReg(SearchMultiSelectField $defaultTaxReg): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setDefaultTaxRegText(SearchStringField $defaultTaxRegText): ContactSearchBasic
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
     * @param SearchStringField $email
     * @return ContactSearchBasic
     */
    public function setEmail(SearchStringField $email): ContactSearchBasic
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
     * @param SearchStringField $employer
     * @return ContactSearchBasic
     */
    public function setEmployer(SearchStringField $employer): ContactSearchBasic
    {
        $this->employer = $employer;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEmployer(): SearchStringField
    {
        return $this->employer;
    }

    /**
     * @param SearchStringField $entityId
     * @return ContactSearchBasic
     */
    public function setEntityId(SearchStringField $entityId): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setFax(SearchStringField $fax): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setFirstName(SearchStringField $firstName): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setGiveAccess(SearchBooleanField $giveAccess): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setGlobalSubscriptionStatus(SearchEnumMultiSelectField $globalSubscriptionStatus): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setGroup(SearchMultiSelectField $group): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setHasDuplicates(SearchBooleanField $hasDuplicates): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setImage(SearchStringField $image): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setIsDefaultBilling(SearchBooleanField $isDefaultBilling): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setIsDefaultShipping(SearchBooleanField $isDefaultShipping): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): ContactSearchBasic
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
     * @param SearchBooleanField $isPrivate
     * @return ContactSearchBasic
     */
    public function setIsPrivate(SearchBooleanField $isPrivate): ContactSearchBasic
    {
        $this->isPrivate = $isPrivate;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsPrivate(): SearchBooleanField
    {
        return $this->isPrivate;
    }

    /**
     * @param SearchEnumMultiSelectField $language
     * @return ContactSearchBasic
     */
    public function setLanguage(SearchEnumMultiSelectField $language): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setLastName(SearchStringField $lastName): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setLevel(SearchEnumMultiSelectField $level): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setMiddleName(SearchStringField $middleName): ContactSearchBasic
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
     * @param SearchMultiSelectField $owner
     * @return ContactSearchBasic
     */
    public function setOwner(SearchMultiSelectField $owner): ContactSearchBasic
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOwner(): SearchMultiSelectField
    {
        return $this->owner;
    }

    /**
     * @param SearchEnumMultiSelectField $permission
     * @return ContactSearchBasic
     */
    public function setPermission(SearchEnumMultiSelectField $permission): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setPhone(SearchStringField $phone): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setPhoneticName(SearchStringField $phoneticName): ContactSearchBasic
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
     * @param SearchStringField $salutation
     * @return ContactSearchBasic
     */
    public function setSalutation(SearchStringField $salutation): ContactSearchBasic
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
     * @param SearchStringField $state
     * @return ContactSearchBasic
     */
    public function setState(SearchStringField $state): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setTitle(SearchStringField $title): ContactSearchBasic
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
     * @param SearchEnumMultiSelectField $type
     * @return ContactSearchBasic
     */
    public function setType(SearchEnumMultiSelectField $type): ContactSearchBasic
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getType(): SearchEnumMultiSelectField
    {
        return $this->type;
    }

    /**
     * @param SearchStringField $zipCode
     * @return ContactSearchBasic
     */
    public function setZipCode(SearchStringField $zipCode): ContactSearchBasic
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
     * @return ContactSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): ContactSearchBasic
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
