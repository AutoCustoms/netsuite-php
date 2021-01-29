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

class AddressSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchStringField
     */
    protected SearchStringField $address;

    protected $address1;
    protected $address2;
    protected $address3;
    /**
     * @var SearchStringField
     */
    protected SearchStringField $addressee;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $attention;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $city;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $country;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $countryCode;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

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
    protected SearchBooleanField $override;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $phone;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $state;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $zip;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "address" => "SearchStringField",
        "address1" => "SearchStringField",
        "address2" => "SearchStringField",
        "address3" => "SearchStringField",
        "addressee" => "SearchStringField",
        "attention" => "SearchStringField",
        "city" => "SearchStringField",
        "country" => "SearchEnumMultiSelectField",
        "countryCode" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "override" => "SearchBooleanField",
        "phone" => "SearchStringField",
        "state" => "SearchStringField",
        "zip" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchStringField $address
     * @return AddressSearchBasic
     */
    public function setAddress(SearchStringField $address): AddressSearchBasic
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
     * @return AddressSearchBasic
     */
    public function setAddressee(SearchStringField $addressee): AddressSearchBasic
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
     * @param SearchStringField $attention
     * @return AddressSearchBasic
     */
    public function setAttention(SearchStringField $attention): AddressSearchBasic
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
     * @param SearchStringField $city
     * @return AddressSearchBasic
     */
    public function setCity(SearchStringField $city): AddressSearchBasic
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
     * @param SearchEnumMultiSelectField $country
     * @return AddressSearchBasic
     */
    public function setCountry(SearchEnumMultiSelectField $country): AddressSearchBasic
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
     * @param SearchStringField $countryCode
     * @return AddressSearchBasic
     */
    public function setCountryCode(SearchStringField $countryCode): AddressSearchBasic
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCountryCode(): SearchStringField
    {
        return $this->countryCode;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return AddressSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): AddressSearchBasic
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
     * @return AddressSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): AddressSearchBasic
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
     * @param SearchMultiSelectField $internalId
     * @return AddressSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): AddressSearchBasic
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
     * @return AddressSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): AddressSearchBasic
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
     * @param SearchBooleanField $override
     * @return AddressSearchBasic
     */
    public function setOverride(SearchBooleanField $override): AddressSearchBasic
    {
        $this->override = $override;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getOverride(): SearchBooleanField
    {
        return $this->override;
    }

    /**
     * @param SearchStringField $phone
     * @return AddressSearchBasic
     */
    public function setPhone(SearchStringField $phone): AddressSearchBasic
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
     * @param SearchStringField $state
     * @return AddressSearchBasic
     */
    public function setState(SearchStringField $state): AddressSearchBasic
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
     * @param SearchStringField $zip
     * @return AddressSearchBasic
     */
    public function setZip(SearchStringField $zip): AddressSearchBasic
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getZip(): SearchStringField
    {
        return $this->zip;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return AddressSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): AddressSearchBasic
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
