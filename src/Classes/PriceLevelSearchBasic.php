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

class PriceLevelSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $discountPct;

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
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isOnline;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    static $paramtypesmap = array(
        "discountPct" => "SearchDoubleField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "isOnline" => "SearchBooleanField",
        "name" => "SearchStringField",
    );

    /**
     * @param SearchDoubleField $discountPct
     * @return PriceLevelSearchBasic
     */
    public function setDiscountPct(SearchDoubleField $discountPct): PriceLevelSearchBasic
    {
        $this->discountPct = $discountPct;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDiscountPct(): SearchDoubleField
    {
        return $this->discountPct;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return PriceLevelSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): PriceLevelSearchBasic
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
     * @return PriceLevelSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): PriceLevelSearchBasic
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
     * @return PriceLevelSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): PriceLevelSearchBasic
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
     * @return PriceLevelSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): PriceLevelSearchBasic
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
     * @return PriceLevelSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): PriceLevelSearchBasic
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
     * @param SearchBooleanField $isOnline
     * @return PriceLevelSearchBasic
     */
    public function setIsOnline(SearchBooleanField $isOnline): PriceLevelSearchBasic
    {
        $this->isOnline = $isOnline;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsOnline(): SearchBooleanField
    {
        return $this->isOnline;
    }

    /**
     * @param SearchStringField $name
     * @return PriceLevelSearchBasic
     */
    public function setName(SearchStringField $name): PriceLevelSearchBasic
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName(): SearchStringField
    {
        return $this->name;
    }

}
