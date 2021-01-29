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

class PartnerSearchRowBasic extends SearchRowBasic {
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
     * @var SearchColumnBooleanField[]
     */
    protected array $assignTasks;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $attention;

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
    protected array $category;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $city;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $class;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $comments;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $companyName;

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
     * @var SearchColumnSelectField[]
     */
    protected array $department;

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
     * @var SearchColumnBooleanField[]
     */
    protected array $isPerson;

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
     * @var SearchColumnSelectField[]
     */
    protected array $location;

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
    protected array $parent;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $partnerCode;

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
    protected array $promoCode;

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
    protected array $title;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $url;

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
        "assignTasks" => "SearchColumnBooleanField[]",
        "attention" => "SearchColumnStringField[]",
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
        "category" => "SearchColumnStringField[]",
        "city" => "SearchColumnStringField[]",
        "class" => "SearchColumnSelectField[]",
        "comments" => "SearchColumnStringField[]",
        "companyName" => "SearchColumnStringField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "countryCode" => "SearchColumnStringField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "defaultTaxReg" => "SearchColumnStringField[]",
        "department" => "SearchColumnSelectField[]",
        "eligibleForCommission" => "SearchColumnBooleanField[]",
        "email" => "SearchColumnStringField[]",
        "emailPreference" => "SearchColumnEnumSelectField[]",
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
        "isPerson" => "SearchColumnBooleanField[]",
        "language" => "SearchColumnEnumSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "lastName" => "SearchColumnStringField[]",
        "level" => "SearchColumnEnumSelectField[]",
        "location" => "SearchColumnSelectField[]",
        "middleName" => "SearchColumnStringField[]",
        "mobilePhone" => "SearchColumnStringField[]",
        "parent" => "SearchColumnSelectField[]",
        "partnerCode" => "SearchColumnStringField[]",
        "permission" => "SearchColumnEnumSelectField[]",
        "phone" => "SearchColumnStringField[]",
        "phoneticName" => "SearchColumnStringField[]",
        "promoCode" => "SearchColumnStringField[]",
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
        "title" => "SearchColumnStringField[]",
        "url" => "SearchColumnStringField[]",
        "zipCode" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnStringField[] $address
     * @return PartnerSearchRowBasic
     */
    public function setAddress(SearchColumnStringField $address): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setAddressee(SearchColumnStringField $addressee): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setAddressInternalId(SearchColumnStringField $addressInternalId): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setAddressLabel(SearchColumnStringField $addressLabel): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setAddressPhone(SearchColumnStringField $addressPhone): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setAltEmail(SearchColumnStringField $altEmail): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setAltName(SearchColumnStringField $altName): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setAltPhone(SearchColumnStringField $altPhone): PartnerSearchRowBasic
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
     * @param SearchColumnBooleanField[] $assignTasks
     * @return PartnerSearchRowBasic
     */
    public function setAssignTasks(SearchColumnBooleanField $assignTasks): PartnerSearchRowBasic
    {
        $this->assignTasks[] = $assignTasks;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAssignTasks(): array
    {
        return $this->assignTasks;
    }

    /**
     * @param SearchColumnStringField[] $attention
     * @return PartnerSearchRowBasic
     */
    public function setAttention(SearchColumnStringField $attention): PartnerSearchRowBasic
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
     * @param SearchColumnStringField[] $billAddress
     * @return PartnerSearchRowBasic
     */
    public function setBillAddress(SearchColumnStringField $billAddress): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setBillAddressee(SearchColumnStringField $billAddressee): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setBillAttention(SearchColumnStringField $billAttention): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setBillCity(SearchColumnStringField $billCity): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setBillCountry(SearchColumnEnumSelectField $billCountry): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setBillCountryCode(SearchColumnStringField $billCountryCode): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setBillPhone(SearchColumnStringField $billPhone): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setBillState(SearchColumnStringField $billState): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setBillZipCode(SearchColumnStringField $billZipCode): PartnerSearchRowBasic
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
     * @param SearchColumnStringField[] $category
     * @return PartnerSearchRowBasic
     */
    public function setCategory(SearchColumnStringField $category): PartnerSearchRowBasic
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCategory(): array
    {
        return $this->category;
    }

    /**
     * @param SearchColumnStringField[] $city
     * @return PartnerSearchRowBasic
     */
    public function setCity(SearchColumnStringField $city): PartnerSearchRowBasic
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
     * @param SearchColumnSelectField[] $class
     * @return PartnerSearchRowBasic
     */
    public function setClass(SearchColumnSelectField $class): PartnerSearchRowBasic
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getClass(): array
    {
        return $this->class;
    }

    /**
     * @param SearchColumnStringField[] $comments
     * @return PartnerSearchRowBasic
     */
    public function setComments(SearchColumnStringField $comments): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setCompanyName(SearchColumnStringField $companyName): PartnerSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $country
     * @return PartnerSearchRowBasic
     */
    public function setCountry(SearchColumnEnumSelectField $country): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setCountryCode(SearchColumnStringField $countryCode): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setDateCreated(SearchColumnDateField $dateCreated): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setDefaultTaxReg(SearchColumnStringField $defaultTaxReg): PartnerSearchRowBasic
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
     * @param SearchColumnSelectField[] $department
     * @return PartnerSearchRowBasic
     */
    public function setDepartment(SearchColumnSelectField $department): PartnerSearchRowBasic
    {
        $this->department[] = $department;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDepartment(): array
    {
        return $this->department;
    }

    /**
     * @param SearchColumnBooleanField[] $eligibleForCommission
     * @return PartnerSearchRowBasic
     */
    public function setEligibleForCommission(SearchColumnBooleanField $eligibleForCommission): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setEmail(SearchColumnStringField $email): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setEmailPreference(SearchColumnEnumSelectField $emailPreference): PartnerSearchRowBasic
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
     * @param SearchColumnStringField[] $entityId
     * @return PartnerSearchRowBasic
     */
    public function setEntityId(SearchColumnStringField $entityId): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setEntityNumber(SearchColumnLongField $entityNumber): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setFax(SearchColumnStringField $fax): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setFirstName(SearchColumnStringField $firstName): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setGiveAccess(SearchColumnBooleanField $giveAccess): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setGlobalSubscriptionStatus(SearchColumnEnumSelectField $globalSubscriptionStatus): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setHasDuplicates(SearchColumnBooleanField $hasDuplicates): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setHomePhone(SearchColumnStringField $homePhone): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setImage(SearchColumnSelectField $image): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setIsDefaultBilling(SearchColumnBooleanField $isDefaultBilling): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setIsDefaultShipping(SearchColumnBooleanField $isDefaultShipping): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setIsPerson(SearchColumnBooleanField $isPerson): PartnerSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $language
     * @return PartnerSearchRowBasic
     */
    public function setLanguage(SearchColumnEnumSelectField $language): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setLastName(SearchColumnStringField $lastName): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setLevel(SearchColumnEnumSelectField $level): PartnerSearchRowBasic
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
     * @param SearchColumnSelectField[] $location
     * @return PartnerSearchRowBasic
     */
    public function setLocation(SearchColumnSelectField $location): PartnerSearchRowBasic
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation(): array
    {
        return $this->location;
    }

    /**
     * @param SearchColumnStringField[] $middleName
     * @return PartnerSearchRowBasic
     */
    public function setMiddleName(SearchColumnStringField $middleName): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setMobilePhone(SearchColumnStringField $mobilePhone): PartnerSearchRowBasic
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
     * @param SearchColumnSelectField[] $parent
     * @return PartnerSearchRowBasic
     */
    public function setParent(SearchColumnSelectField $parent): PartnerSearchRowBasic
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
     * @param SearchColumnStringField[] $partnerCode
     * @return PartnerSearchRowBasic
     */
    public function setPartnerCode(SearchColumnStringField $partnerCode): PartnerSearchRowBasic
    {
        $this->partnerCode[] = $partnerCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPartnerCode(): array
    {
        return $this->partnerCode;
    }

    /**
     * @param SearchColumnEnumSelectField[] $permission
     * @return PartnerSearchRowBasic
     */
    public function setPermission(SearchColumnEnumSelectField $permission): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setPhone(SearchColumnStringField $phone): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setPhoneticName(SearchColumnStringField $phoneticName): PartnerSearchRowBasic
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
     * @param SearchColumnStringField[] $promoCode
     * @return PartnerSearchRowBasic
     */
    public function setPromoCode(SearchColumnStringField $promoCode): PartnerSearchRowBasic
    {
        $this->promoCode[] = $promoCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPromoCode(): array
    {
        return $this->promoCode;
    }

    /**
     * @param SearchColumnStringField[] $salutation
     * @return PartnerSearchRowBasic
     */
    public function setSalutation(SearchColumnStringField $salutation): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setShipAddress(SearchColumnStringField $shipAddress): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setShipAddressee(SearchColumnStringField $shipAddressee): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setShipAttention(SearchColumnStringField $shipAttention): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setShipCity(SearchColumnStringField $shipCity): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setShipCountry(SearchColumnEnumSelectField $shipCountry): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setShipCountryCode(SearchColumnStringField $shipCountryCode): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setShipPhone(SearchColumnStringField $shipPhone): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setShipState(SearchColumnStringField $shipState): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setShipZip(SearchColumnStringField $shipZip): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setState(SearchColumnStringField $state): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setSubscription(SearchColumnSelectField $subscription): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setSubscriptionDate(SearchColumnDateField $subscriptionDate): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setSubscriptionStatus(SearchColumnBooleanField $subscriptionStatus): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setTitle(SearchColumnStringField $title): PartnerSearchRowBasic
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
     * @param SearchColumnStringField[] $url
     * @return PartnerSearchRowBasic
     */
    public function setUrl(SearchColumnStringField $url): PartnerSearchRowBasic
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
     * @param SearchColumnStringField[] $zipCode
     * @return PartnerSearchRowBasic
     */
    public function setZipCode(SearchColumnStringField $zipCode): PartnerSearchRowBasic
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
     * @return PartnerSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): PartnerSearchRowBasic
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
