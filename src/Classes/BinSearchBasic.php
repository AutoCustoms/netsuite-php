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

class BinSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchStringField
     */
    protected SearchStringField $binNumber;

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
    protected SearchBooleanField $inactive;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $location;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $memo;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "binNumber" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "inactive" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "location" => "SearchMultiSelectField",
        "memo" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchStringField $binNumber
     * @return BinSearchBasic
     */
    public function setBinNumber(SearchStringField $binNumber): BinSearchBasic
    {
        $this->binNumber = $binNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBinNumber(): SearchStringField
    {
        return $this->binNumber;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return BinSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): BinSearchBasic
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
     * @return BinSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): BinSearchBasic
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
     * @param SearchBooleanField $inactive
     * @return BinSearchBasic
     */
    public function setInactive(SearchBooleanField $inactive): BinSearchBasic
    {
        $this->inactive = $inactive;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getInactive(): SearchBooleanField
    {
        return $this->inactive;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return BinSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): BinSearchBasic
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
     * @return BinSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): BinSearchBasic
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
     * @param SearchMultiSelectField $location
     * @return BinSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): BinSearchBasic
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
     * @param SearchStringField $memo
     * @return BinSearchBasic
     */
    public function setMemo(SearchStringField $memo): BinSearchBasic
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMemo(): SearchStringField
    {
        return $this->memo;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return BinSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): BinSearchBasic
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
