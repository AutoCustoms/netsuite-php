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

class ItemRevisionSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchDateField
     */
    protected SearchDateField $effectiveDate;

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
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $item;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $obsoleteDate;

    static $paramtypesmap = array(
        "effectiveDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "item" => "SearchMultiSelectField",
        "name" => "SearchStringField",
        "obsoleteDate" => "SearchDateField",
    );

    /**
     * @param SearchDateField $effectiveDate
     * @return ItemRevisionSearchBasic
     */
    public function setEffectiveDate(SearchDateField $effectiveDate): ItemRevisionSearchBasic
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEffectiveDate(): SearchDateField
    {
        return $this->effectiveDate;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return ItemRevisionSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): ItemRevisionSearchBasic
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
     * @return ItemRevisionSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): ItemRevisionSearchBasic
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
     * @return ItemRevisionSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): ItemRevisionSearchBasic
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
     * @return ItemRevisionSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): ItemRevisionSearchBasic
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
     * @param SearchMultiSelectField $item
     * @return ItemRevisionSearchBasic
     */
    public function setItem(SearchMultiSelectField $item): ItemRevisionSearchBasic
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem(): SearchMultiSelectField
    {
        return $this->item;
    }

    /**
     * @param SearchStringField $name
     * @return ItemRevisionSearchBasic
     */
    public function setName(SearchStringField $name): ItemRevisionSearchBasic
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

    /**
     * @param SearchDateField $obsoleteDate
     * @return ItemRevisionSearchBasic
     */
    public function setObsoleteDate(SearchDateField $obsoleteDate): ItemRevisionSearchBasic
    {
        $this->obsoleteDate = $obsoleteDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getObsoleteDate(): SearchDateField
    {
        return $this->obsoleteDate;
    }

}
