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

class TaxGroupSearchBasic extends SearchRecordBasic {
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
    protected SearchStringField $county;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $description;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $includeChildren;

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
    protected SearchBooleanField $isDefault;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $itemId;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $piggyBack;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $rate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $state;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    protected $taxItem1;
    protected $taxItem2;
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $taxType;

    protected $unitPrice1;
    protected $unitPrice2;
    /**
     * @var SearchStringField
     */
    protected SearchStringField $zip;

    static $paramtypesmap = array(
        "city" => "SearchStringField",
        "country" => "SearchEnumMultiSelectField",
        "county" => "SearchStringField",
        "description" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "includeChildren" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isDefault" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "itemId" => "SearchStringField",
        "piggyBack" => "SearchBooleanField",
        "rate" => "SearchDoubleField",
        "state" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "taxItem1" => "SearchMultiSelectField",
        "taxItem2" => "SearchMultiSelectField",
        "taxType" => "SearchMultiSelectField",
        "unitPrice1" => "SearchDoubleField",
        "unitPrice2" => "SearchDoubleField",
        "zip" => "SearchStringField",
    );

    /**
     * @param SearchStringField $city
     * @return TaxGroupSearchBasic
     */
    public function setCity(SearchStringField $city): TaxGroupSearchBasic
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
     * @return TaxGroupSearchBasic
     */
    public function setCountry(SearchEnumMultiSelectField $country): TaxGroupSearchBasic
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
     * @return TaxGroupSearchBasic
     */
    public function setCounty(SearchStringField $county): TaxGroupSearchBasic
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
     * @param SearchStringField $description
     * @return TaxGroupSearchBasic
     */
    public function setDescription(SearchStringField $description): TaxGroupSearchBasic
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDescription(): SearchStringField
    {
        return $this->description;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return TaxGroupSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): TaxGroupSearchBasic
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
     * @return TaxGroupSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): TaxGroupSearchBasic
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
     * @param SearchBooleanField $includeChildren
     * @return TaxGroupSearchBasic
     */
    public function setIncludeChildren(SearchBooleanField $includeChildren): TaxGroupSearchBasic
    {
        $this->includeChildren = $includeChildren;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIncludeChildren(): SearchBooleanField
    {
        return $this->includeChildren;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return TaxGroupSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): TaxGroupSearchBasic
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
     * @return TaxGroupSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): TaxGroupSearchBasic
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
     * @param SearchBooleanField $isDefault
     * @return TaxGroupSearchBasic
     */
    public function setIsDefault(SearchBooleanField $isDefault): TaxGroupSearchBasic
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsDefault(): SearchBooleanField
    {
        return $this->isDefault;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return TaxGroupSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): TaxGroupSearchBasic
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
     * @param SearchStringField $itemId
     * @return TaxGroupSearchBasic
     */
    public function setItemId(SearchStringField $itemId): TaxGroupSearchBasic
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getItemId(): SearchStringField
    {
        return $this->itemId;
    }

    /**
     * @param SearchBooleanField $piggyBack
     * @return TaxGroupSearchBasic
     */
    public function setPiggyBack(SearchBooleanField $piggyBack): TaxGroupSearchBasic
    {
        $this->piggyBack = $piggyBack;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPiggyBack(): SearchBooleanField
    {
        return $this->piggyBack;
    }

    /**
     * @param SearchDoubleField $rate
     * @return TaxGroupSearchBasic
     */
    public function setRate(SearchDoubleField $rate): TaxGroupSearchBasic
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRate(): SearchDoubleField
    {
        return $this->rate;
    }

    /**
     * @param SearchMultiSelectField $state
     * @return TaxGroupSearchBasic
     */
    public function setState(SearchMultiSelectField $state): TaxGroupSearchBasic
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getState(): SearchMultiSelectField
    {
        return $this->state;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return TaxGroupSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): TaxGroupSearchBasic
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
     * @param SearchMultiSelectField $taxType
     * @return TaxGroupSearchBasic
     */
    public function setTaxType(SearchMultiSelectField $taxType): TaxGroupSearchBasic
    {
        $this->taxType = $taxType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTaxType(): SearchMultiSelectField
    {
        return $this->taxType;
    }

    /**
     * @param SearchStringField $zip
     * @return TaxGroupSearchBasic
     */
    public function setZip(SearchStringField $zip): TaxGroupSearchBasic
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

}
