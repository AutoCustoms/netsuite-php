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

class NexusSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $country;

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
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $parentNexus;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $state;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $taxAgency;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $taxDateFromFulfillment;

    static $paramtypesmap = array(
        "country" => "SearchEnumMultiSelectField",
        "description" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "parentNexus" => "SearchMultiSelectField",
        "state" => "SearchMultiSelectField",
        "taxAgency" => "SearchMultiSelectField",
        "taxDateFromFulfillment" => "SearchBooleanField",
    );

    /**
     * @param SearchEnumMultiSelectField $country
     * @return NexusSearchBasic
     */
    public function setCountry(SearchEnumMultiSelectField $country): NexusSearchBasic
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
     * @param SearchStringField $description
     * @return NexusSearchBasic
     */
    public function setDescription(SearchStringField $description): NexusSearchBasic
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
     * @return NexusSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): NexusSearchBasic
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
     * @return NexusSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): NexusSearchBasic
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
     * @return NexusSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): NexusSearchBasic
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
     * @return NexusSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): NexusSearchBasic
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
     * @param SearchBooleanField $isInactive
     * @return NexusSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): NexusSearchBasic
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
     * @param SearchMultiSelectField $parentNexus
     * @return NexusSearchBasic
     */
    public function setParentNexus(SearchMultiSelectField $parentNexus): NexusSearchBasic
    {
        $this->parentNexus = $parentNexus;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getParentNexus(): SearchMultiSelectField
    {
        return $this->parentNexus;
    }

    /**
     * @param SearchMultiSelectField $state
     * @return NexusSearchBasic
     */
    public function setState(SearchMultiSelectField $state): NexusSearchBasic
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
     * @param SearchMultiSelectField $taxAgency
     * @return NexusSearchBasic
     */
    public function setTaxAgency(SearchMultiSelectField $taxAgency): NexusSearchBasic
    {
        $this->taxAgency = $taxAgency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTaxAgency(): SearchMultiSelectField
    {
        return $this->taxAgency;
    }

    /**
     * @param SearchBooleanField $taxDateFromFulfillment
     * @return NexusSearchBasic
     */
    public function setTaxDateFromFulfillment(SearchBooleanField $taxDateFromFulfillment): NexusSearchBasic
    {
        $this->taxDateFromFulfillment = $taxDateFromFulfillment;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getTaxDateFromFulfillment(): SearchBooleanField
    {
        return $this->taxDateFromFulfillment;
    }

}
