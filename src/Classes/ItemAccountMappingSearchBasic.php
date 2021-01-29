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

class ItemAccountMappingSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $accountingBook;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $class;

    /**
     * @var SearchMultiSelectCustomField
     */
    protected SearchMultiSelectCustomField $customDimension;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $department;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $destinationAccount;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $effectiveDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $endDate;

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
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $itemAccount;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $location;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $sourceAccount;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "accountingBook" => "SearchMultiSelectField",
        "class" => "SearchMultiSelectField",
        "customDimension" => "SearchMultiSelectCustomField",
        "department" => "SearchMultiSelectField",
        "destinationAccount" => "SearchMultiSelectField",
        "effectiveDate" => "SearchDateField",
        "endDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "itemAccount" => "SearchEnumMultiSelectField",
        "location" => "SearchMultiSelectField",
        "sourceAccount" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchMultiSelectField $accountingBook
     * @return ItemAccountMappingSearchBasic
     */
    public function setAccountingBook(SearchMultiSelectField $accountingBook): ItemAccountMappingSearchBasic
    {
        $this->accountingBook = $accountingBook;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingBook(): SearchMultiSelectField
    {
        return $this->accountingBook;
    }

    /**
     * @param SearchMultiSelectField $class
     * @return ItemAccountMappingSearchBasic
     */
    public function setClass(SearchMultiSelectField $class): ItemAccountMappingSearchBasic
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
     * @param SearchMultiSelectCustomField $customDimension
     * @return ItemAccountMappingSearchBasic
     */
    public function setCustomDimension(SearchMultiSelectCustomField $customDimension): ItemAccountMappingSearchBasic
    {
        $this->customDimension = $customDimension;
        return $this;
    }

    /**
     * @return SearchMultiSelectCustomField
     */
    public function getCustomDimension(): SearchMultiSelectCustomField
    {
        return $this->customDimension;
    }

    /**
     * @param SearchMultiSelectField $department
     * @return ItemAccountMappingSearchBasic
     */
    public function setDepartment(SearchMultiSelectField $department): ItemAccountMappingSearchBasic
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
     * @param SearchMultiSelectField $destinationAccount
     * @return ItemAccountMappingSearchBasic
     */
    public function setDestinationAccount(SearchMultiSelectField $destinationAccount): ItemAccountMappingSearchBasic
    {
        $this->destinationAccount = $destinationAccount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDestinationAccount(): SearchMultiSelectField
    {
        return $this->destinationAccount;
    }

    /**
     * @param SearchDateField $effectiveDate
     * @return ItemAccountMappingSearchBasic
     */
    public function setEffectiveDate(SearchDateField $effectiveDate): ItemAccountMappingSearchBasic
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
     * @param SearchDateField $endDate
     * @return ItemAccountMappingSearchBasic
     */
    public function setEndDate(SearchDateField $endDate): ItemAccountMappingSearchBasic
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEndDate(): SearchDateField
    {
        return $this->endDate;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return ItemAccountMappingSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): ItemAccountMappingSearchBasic
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
     * @return ItemAccountMappingSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): ItemAccountMappingSearchBasic
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
     * @return ItemAccountMappingSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): ItemAccountMappingSearchBasic
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
     * @return ItemAccountMappingSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): ItemAccountMappingSearchBasic
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
     * @param SearchEnumMultiSelectField $itemAccount
     * @return ItemAccountMappingSearchBasic
     */
    public function setItemAccount(SearchEnumMultiSelectField $itemAccount): ItemAccountMappingSearchBasic
    {
        $this->itemAccount = $itemAccount;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getItemAccount(): SearchEnumMultiSelectField
    {
        return $this->itemAccount;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return ItemAccountMappingSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): ItemAccountMappingSearchBasic
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
     * @param SearchMultiSelectField $sourceAccount
     * @return ItemAccountMappingSearchBasic
     */
    public function setSourceAccount(SearchMultiSelectField $sourceAccount): ItemAccountMappingSearchBasic
    {
        $this->sourceAccount = $sourceAccount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSourceAccount(): SearchMultiSelectField
    {
        return $this->sourceAccount;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return ItemAccountMappingSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): ItemAccountMappingSearchBasic
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
     * @param SearchCustomFieldList $customFieldList
     * @return ItemAccountMappingSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): ItemAccountMappingSearchBasic
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
