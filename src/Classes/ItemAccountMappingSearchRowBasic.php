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

class ItemAccountMappingSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $accountingBook;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $class;

    /**
     * @var SearchColumnSelectCustomField[]
     */
    protected array $customDimension;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $department;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $destinationAccount;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $effectiveDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $endDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $itemAccount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $location;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $sourceAccount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "accountingBook" => "SearchColumnSelectField[]",
        "class" => "SearchColumnSelectField[]",
        "customDimension" => "SearchColumnSelectCustomField[]",
        "department" => "SearchColumnSelectField[]",
        "destinationAccount" => "SearchColumnSelectField[]",
        "effectiveDate" => "SearchColumnDateField[]",
        "endDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "itemAccount" => "SearchColumnEnumSelectField[]",
        "location" => "SearchColumnSelectField[]",
        "sourceAccount" => "SearchColumnSelectField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnSelectField[] $accountingBook
     * @return ItemAccountMappingSearchRowBasic
     */
    public function setAccountingBook(SearchColumnSelectField $accountingBook): ItemAccountMappingSearchRowBasic
    {
        $this->accountingBook[] = $accountingBook;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccountingBook(): array
    {
        return $this->accountingBook;
    }

    /**
     * @param SearchColumnSelectField[] $class
     * @return ItemAccountMappingSearchRowBasic
     */
    public function setClass(SearchColumnSelectField $class): ItemAccountMappingSearchRowBasic
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
     * @param SearchColumnSelectCustomField[] $customDimension
     * @return ItemAccountMappingSearchRowBasic
     */
    public function setCustomDimension(SearchColumnSelectCustomField $customDimension): ItemAccountMappingSearchRowBasic
    {
        $this->customDimension[] = $customDimension;
        return $this;
    }

    /**
     * @return SearchColumnSelectCustomField[]
     */
    public function getCustomDimension(): array
    {
        return $this->customDimension;
    }

    /**
     * @param SearchColumnSelectField[] $department
     * @return ItemAccountMappingSearchRowBasic
     */
    public function setDepartment(SearchColumnSelectField $department): ItemAccountMappingSearchRowBasic
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
     * @param SearchColumnSelectField[] $destinationAccount
     * @return ItemAccountMappingSearchRowBasic
     */
    public function setDestinationAccount(SearchColumnSelectField $destinationAccount): ItemAccountMappingSearchRowBasic
    {
        $this->destinationAccount[] = $destinationAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDestinationAccount(): array
    {
        return $this->destinationAccount;
    }

    /**
     * @param SearchColumnDateField[] $effectiveDate
     * @return ItemAccountMappingSearchRowBasic
     */
    public function setEffectiveDate(SearchColumnDateField $effectiveDate): ItemAccountMappingSearchRowBasic
    {
        $this->effectiveDate[] = $effectiveDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEffectiveDate(): array
    {
        return $this->effectiveDate;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return ItemAccountMappingSearchRowBasic
     */
    public function setEndDate(SearchColumnDateField $endDate): ItemAccountMappingSearchRowBasic
    {
        $this->endDate[] = $endDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDate(): array
    {
        return $this->endDate;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return ItemAccountMappingSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): ItemAccountMappingSearchRowBasic
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
     * @param SearchColumnSelectField[] $internalId
     * @return ItemAccountMappingSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): ItemAccountMappingSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $itemAccount
     * @return ItemAccountMappingSearchRowBasic
     */
    public function setItemAccount(SearchColumnEnumSelectField $itemAccount): ItemAccountMappingSearchRowBasic
    {
        $this->itemAccount[] = $itemAccount;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getItemAccount(): array
    {
        return $this->itemAccount;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return ItemAccountMappingSearchRowBasic
     */
    public function setLocation(SearchColumnSelectField $location): ItemAccountMappingSearchRowBasic
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
     * @param SearchColumnSelectField[] $sourceAccount
     * @return ItemAccountMappingSearchRowBasic
     */
    public function setSourceAccount(SearchColumnSelectField $sourceAccount): ItemAccountMappingSearchRowBasic
    {
        $this->sourceAccount[] = $sourceAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSourceAccount(): array
    {
        return $this->sourceAccount;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return ItemAccountMappingSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): ItemAccountMappingSearchRowBasic
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
     * @param SearchColumnCustomFieldList $customFieldList
     * @return ItemAccountMappingSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): ItemAccountMappingSearchRowBasic
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
