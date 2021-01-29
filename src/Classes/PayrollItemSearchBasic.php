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

class PayrollItemSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $expenseAccount;

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
    protected SearchEnumMultiSelectField $itemTypeNoHierarchy;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $liabilityAccount;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $vendor;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "expenseAccount" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "itemTypeNoHierarchy" => "SearchEnumMultiSelectField",
        "liabilityAccount" => "SearchMultiSelectField",
        "name" => "SearchStringField",
        "subsidiary" => "SearchMultiSelectField",
        "vendor" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchMultiSelectField $expenseAccount
     * @return PayrollItemSearchBasic
     */
    public function setExpenseAccount(SearchMultiSelectField $expenseAccount): PayrollItemSearchBasic
    {
        $this->expenseAccount = $expenseAccount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExpenseAccount(): SearchMultiSelectField
    {
        return $this->expenseAccount;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return PayrollItemSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): PayrollItemSearchBasic
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
     * @return PayrollItemSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): PayrollItemSearchBasic
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
     * @return PayrollItemSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): PayrollItemSearchBasic
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
     * @return PayrollItemSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): PayrollItemSearchBasic
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
     * @param SearchEnumMultiSelectField $itemTypeNoHierarchy
     * @return PayrollItemSearchBasic
     */
    public function setItemTypeNoHierarchy(SearchEnumMultiSelectField $itemTypeNoHierarchy): PayrollItemSearchBasic
    {
        $this->itemTypeNoHierarchy = $itemTypeNoHierarchy;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getItemTypeNoHierarchy(): SearchEnumMultiSelectField
    {
        return $this->itemTypeNoHierarchy;
    }

    /**
     * @param SearchMultiSelectField $liabilityAccount
     * @return PayrollItemSearchBasic
     */
    public function setLiabilityAccount(SearchMultiSelectField $liabilityAccount): PayrollItemSearchBasic
    {
        $this->liabilityAccount = $liabilityAccount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLiabilityAccount(): SearchMultiSelectField
    {
        return $this->liabilityAccount;
    }

    /**
     * @param SearchStringField $name
     * @return PayrollItemSearchBasic
     */
    public function setName(SearchStringField $name): PayrollItemSearchBasic
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
     * @param SearchMultiSelectField $subsidiary
     * @return PayrollItemSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): PayrollItemSearchBasic
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
     * @param SearchMultiSelectField $vendor
     * @return PayrollItemSearchBasic
     */
    public function setVendor(SearchMultiSelectField $vendor): PayrollItemSearchBasic
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVendor(): SearchMultiSelectField
    {
        return $this->vendor;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return PayrollItemSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): PayrollItemSearchBasic
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
