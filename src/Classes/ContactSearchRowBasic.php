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

class ContactSearchRowBasic extends SearchRowBasic {
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
     * @var SearchColumnBooleanField[]
     */
    protected array $availableOffline;

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
     * @var SearchColumnSelectField[]
     */
    protected array $company;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $contactRole;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $contactSource;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $country;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $countryCode;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $dateCreated;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $defaultTaxReg;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $email;

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
    protected array $externalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $fax;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $firstName;

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
    protected array $internalId;

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
    protected array $owner;

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
     * @var SearchColumnStringField[]
     */
    protected array $salutation;

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
    protected array $title;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $zipCode;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "address" => "SearchColumnStringField[]",
        "address1" => "SearchColumnStringField[]",
        "address2" => "SearchColumnStringField[]",
        "address3" => "SearchColumnStringField[]",
        "addressee" => "SearchColumnStringField[]",
        "addressInternalId" => "SearchColumnStringField[]",
        "addressLabel" => "SearchColumnStringField[]",
        "addressPhone" => "SearchColumnStringField[]",
        "altEmail" => "SearchColumnStringField[]",
        "altName" => "SearchColumnStringField[]",
        "altPhone" => "SearchColumnStringField[]",
        "attention" => "SearchColumnStringField[]",
        "availableOffline" => "SearchColumnBooleanField[]",
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
        "company" => "SearchColumnSelectField[]",
        "contactRole" => "SearchColumnSelectField[]",
        "contactSource" => "SearchColumnStringField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "countryCode" => "SearchColumnStringField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "defaultTaxReg" => "SearchColumnStringField[]",
        "email" => "SearchColumnStringField[]",
        "entityId" => "SearchColumnStringField[]",
        "entityNumber" => "SearchColumnLongField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fax" => "SearchColumnStringField[]",
        "firstName" => "SearchColumnStringField[]",
        "giveAccess" => "SearchColumnBooleanField[]",
        "globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
        "hasDuplicates" => "SearchColumnBooleanField[]",
        "homePhone" => "SearchColumnStringField[]",
        "image" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isDefaultBilling" => "SearchColumnBooleanField[]",
        "isDefaultShipping" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "language" => "SearchColumnEnumSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "lastName" => "SearchColumnStringField[]",
        "level" => "SearchColumnEnumSelectField[]",
        "middleName" => "SearchColumnStringField[]",
        "mobilePhone" => "SearchColumnStringField[]",
        "owner" => "SearchColumnSelectField[]",
        "permission" => "SearchColumnEnumSelectField[]",
        "phone" => "SearchColumnStringField[]",
        "phoneticName" => "SearchColumnStringField[]",
        "salutation" => "SearchColumnStringField[]",
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
        "title" => "SearchColumnStringField[]",
        "zipCode" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnStringField[] $address
     * @return ContactSearchRowBasic
     */
    public function setAddress(SearchColumnStringField $address): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setAddressee(SearchColumnStringField $addressee): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setAddressInternalId(SearchColumnStringField $addressInternalId): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setAddressLabel(SearchColumnStringField $addressLabel): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setAddressPhone(SearchColumnStringField $addressPhone): ContactSearchRowBasic
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
     * @param SearchColumnStringField[] $altEmail
     * @return ContactSearchRowBasic
     */
    public function setAltEmail(SearchColumnStringField $altEmail): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setAltName(SearchColumnStringField $altName): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setAltPhone(SearchColumnStringField $altPhone): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setAttention(SearchColumnStringField $attention): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setAvailableOffline(SearchColumnBooleanField $availableOffline): ContactSearchRowBasic
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
     * @param SearchColumnStringField[] $billAddressee
     * @return ContactSearchRowBasic
     */
    public function setBillAddressee(SearchColumnStringField $billAddressee): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setBillAttention(SearchColumnStringField $billAttention): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setBillCity(SearchColumnStringField $billCity): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setBillCountry(SearchColumnEnumSelectField $billCountry): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setBillCountryCode(SearchColumnStringField $billCountryCode): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setBillPhone(SearchColumnStringField $billPhone): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setBillState(SearchColumnStringField $billState): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setBillZipCode(SearchColumnStringField $billZipCode): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setCategory(SearchColumnSelectField $category): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setCity(SearchColumnStringField $city): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setComments(SearchColumnStringField $comments): ContactSearchRowBasic
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
     * @param SearchColumnSelectField[] $company
     * @return ContactSearchRowBasic
     */
    public function setCompany(SearchColumnSelectField $company): ContactSearchRowBasic
    {
        $this->company[] = $company;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCompany(): array
    {
        return $this->company;
    }

    /**
     * @param SearchColumnSelectField[] $contactRole
     * @return ContactSearchRowBasic
     */
    public function setContactRole(SearchColumnSelectField $contactRole): ContactSearchRowBasic
    {
        $this->contactRole[] = $contactRole;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getContactRole(): array
    {
        return $this->contactRole;
    }

    /**
     * @param SearchColumnStringField[] $contactSource
     * @return ContactSearchRowBasic
     */
    public function setContactSource(SearchColumnStringField $contactSource): ContactSearchRowBasic
    {
        $this->contactSource[] = $contactSource;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getContactSource(): array
    {
        return $this->contactSource;
    }

    /**
     * @param SearchColumnEnumSelectField[] $country
     * @return ContactSearchRowBasic
     */
    public function setCountry(SearchColumnEnumSelectField $country): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setCountryCode(SearchColumnStringField $countryCode): ContactSearchRowBasic
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
     * @param SearchColumnDateField[] $dateCreated
     * @return ContactSearchRowBasic
     */
    public function setDateCreated(SearchColumnDateField $dateCreated): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setDefaultTaxReg(SearchColumnStringField $defaultTaxReg): ContactSearchRowBasic
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
     * @param SearchColumnStringField[] $email
     * @return ContactSearchRowBasic
     */
    public function setEmail(SearchColumnStringField $email): ContactSearchRowBasic
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
     * @param SearchColumnStringField[] $entityId
     * @return ContactSearchRowBasic
     */
    public function setEntityId(SearchColumnStringField $entityId): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setEntityNumber(SearchColumnLongField $entityNumber): ContactSearchRowBasic
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
     * @param SearchColumnSelectField[] $externalId
     * @return ContactSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setFax(SearchColumnStringField $fax): ContactSearchRowBasic
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
     * @param SearchColumnStringField[] $firstName
     * @return ContactSearchRowBasic
     */
    public function setFirstName(SearchColumnStringField $firstName): ContactSearchRowBasic
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
     * @param SearchColumnBooleanField[] $giveAccess
     * @return ContactSearchRowBasic
     */
    public function setGiveAccess(SearchColumnBooleanField $giveAccess): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setGlobalSubscriptionStatus(SearchColumnEnumSelectField $globalSubscriptionStatus): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setHasDuplicates(SearchColumnBooleanField $hasDuplicates): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setHomePhone(SearchColumnStringField $homePhone): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setImage(SearchColumnSelectField $image): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setIsDefaultBilling(SearchColumnBooleanField $isDefaultBilling): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setIsDefaultShipping(SearchColumnBooleanField $isDefaultShipping): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): ContactSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $language
     * @return ContactSearchRowBasic
     */
    public function setLanguage(SearchColumnEnumSelectField $language): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setLastName(SearchColumnStringField $lastName): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setLevel(SearchColumnEnumSelectField $level): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setMiddleName(SearchColumnStringField $middleName): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setMobilePhone(SearchColumnStringField $mobilePhone): ContactSearchRowBasic
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
     * @param SearchColumnSelectField[] $owner
     * @return ContactSearchRowBasic
     */
    public function setOwner(SearchColumnSelectField $owner): ContactSearchRowBasic
    {
        $this->owner[] = $owner;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOwner(): array
    {
        return $this->owner;
    }

    /**
     * @param SearchColumnEnumSelectField[] $permission
     * @return ContactSearchRowBasic
     */
    public function setPermission(SearchColumnEnumSelectField $permission): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setPhone(SearchColumnStringField $phone): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setPhoneticName(SearchColumnStringField $phoneticName): ContactSearchRowBasic
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
     * @param SearchColumnStringField[] $salutation
     * @return ContactSearchRowBasic
     */
    public function setSalutation(SearchColumnStringField $salutation): ContactSearchRowBasic
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
     * @param SearchColumnStringField[] $shipAddressee
     * @return ContactSearchRowBasic
     */
    public function setShipAddressee(SearchColumnStringField $shipAddressee): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setShipAttention(SearchColumnStringField $shipAttention): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setShipCity(SearchColumnStringField $shipCity): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setShipCountry(SearchColumnEnumSelectField $shipCountry): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setShipCountryCode(SearchColumnStringField $shipCountryCode): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setShipPhone(SearchColumnStringField $shipPhone): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setShipState(SearchColumnStringField $shipState): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setShipZip(SearchColumnStringField $shipZip): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setState(SearchColumnStringField $state): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setSubscription(SearchColumnSelectField $subscription): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setSubscriptionDate(SearchColumnDateField $subscriptionDate): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setSubscriptionStatus(SearchColumnBooleanField $subscriptionStatus): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): ContactSearchRowBasic
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
     * @param SearchColumnStringField[] $title
     * @return ContactSearchRowBasic
     */
    public function setTitle(SearchColumnStringField $title): ContactSearchRowBasic
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
     * @param SearchColumnStringField[] $zipCode
     * @return ContactSearchRowBasic
     */
    public function setZipCode(SearchColumnStringField $zipCode): ContactSearchRowBasic
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
     * @return ContactSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): ContactSearchRowBasic
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
