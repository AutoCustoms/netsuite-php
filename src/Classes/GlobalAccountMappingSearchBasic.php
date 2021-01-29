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

class GlobalAccountMappingSearchBasic extends SearchRecordBasic {
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
        "location" => "SearchMultiSelectField",
        "sourceAccount" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchMultiSelectField $accountingBook
     * @return GlobalAccountMappingSearchBasic
     */
    public function setAccountingBook(SearchMultiSelectField $accountingBook): GlobalAccountMappingSearchBasic
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
     * @return GlobalAccountMappingSearchBasic
     */
    public function setClass(SearchMultiSelectField $class): GlobalAccountMappingSearchBasic
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
     * @return GlobalAccountMappingSearchBasic
     */
    public function setCustomDimension(SearchMultiSelectCustomField $customDimension): GlobalAccountMappingSearchBasic
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
     * @return GlobalAccountMappingSearchBasic
     */
    public function setDepartment(SearchMultiSelectField $department): GlobalAccountMappingSearchBasic
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
     * @return GlobalAccountMappingSearchBasic
     */
    public function setDestinationAccount(SearchMultiSelectField $destinationAccount): GlobalAccountMappingSearchBasic
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
     * @return GlobalAccountMappingSearchBasic
     */
    public function setEffectiveDate(SearchDateField $effectiveDate): GlobalAccountMappingSearchBasic
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
     * @return GlobalAccountMappingSearchBasic
     */
    public function setEndDate(SearchDateField $endDate): GlobalAccountMappingSearchBasic
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
     * @return GlobalAccountMappingSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): GlobalAccountMappingSearchBasic
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
     * @return GlobalAccountMappingSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): GlobalAccountMappingSearchBasic
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
     * @return GlobalAccountMappingSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): GlobalAccountMappingSearchBasic
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
     * @return GlobalAccountMappingSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): GlobalAccountMappingSearchBasic
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
     * @return GlobalAccountMappingSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): GlobalAccountMappingSearchBasic
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
     * @return GlobalAccountMappingSearchBasic
     */
    public function setSourceAccount(SearchMultiSelectField $sourceAccount): GlobalAccountMappingSearchBasic
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
     * @return GlobalAccountMappingSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): GlobalAccountMappingSearchBasic
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
     * @return GlobalAccountMappingSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): GlobalAccountMappingSearchBasic
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
