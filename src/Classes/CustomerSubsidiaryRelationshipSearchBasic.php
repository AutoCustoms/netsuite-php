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

class CustomerSubsidiaryRelationshipSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $balance;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $depositBalance;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $entity;

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
    protected SearchBooleanField $isPrimarySub;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $primaryCurrency;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $unbilledOrders;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "balance" => "SearchDoubleField",
        "depositBalance" => "SearchDoubleField",
        "entity" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isPrimarySub" => "SearchBooleanField",
        "primaryCurrency" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "unbilledOrders" => "SearchDoubleField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchDoubleField $balance
     * @return CustomerSubsidiaryRelationshipSearchBasic
     */
    public function setBalance(SearchDoubleField $balance): CustomerSubsidiaryRelationshipSearchBasic
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBalance(): SearchDoubleField
    {
        return $this->balance;
    }

    /**
     * @param SearchDoubleField $depositBalance
     * @return CustomerSubsidiaryRelationshipSearchBasic
     */
    public function setDepositBalance(SearchDoubleField $depositBalance): CustomerSubsidiaryRelationshipSearchBasic
    {
        $this->depositBalance = $depositBalance;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDepositBalance(): SearchDoubleField
    {
        return $this->depositBalance;
    }

    /**
     * @param SearchMultiSelectField $entity
     * @return CustomerSubsidiaryRelationshipSearchBasic
     */
    public function setEntity(SearchMultiSelectField $entity): CustomerSubsidiaryRelationshipSearchBasic
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEntity(): SearchMultiSelectField
    {
        return $this->entity;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return CustomerSubsidiaryRelationshipSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): CustomerSubsidiaryRelationshipSearchBasic
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
     * @return CustomerSubsidiaryRelationshipSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): CustomerSubsidiaryRelationshipSearchBasic
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
     * @return CustomerSubsidiaryRelationshipSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): CustomerSubsidiaryRelationshipSearchBasic
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
     * @return CustomerSubsidiaryRelationshipSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): CustomerSubsidiaryRelationshipSearchBasic
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
     * @param SearchBooleanField $isPrimarySub
     * @return CustomerSubsidiaryRelationshipSearchBasic
     */
    public function setIsPrimarySub(SearchBooleanField $isPrimarySub): CustomerSubsidiaryRelationshipSearchBasic
    {
        $this->isPrimarySub = $isPrimarySub;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsPrimarySub(): SearchBooleanField
    {
        return $this->isPrimarySub;
    }

    /**
     * @param SearchMultiSelectField $primaryCurrency
     * @return CustomerSubsidiaryRelationshipSearchBasic
     */
    public function setPrimaryCurrency(SearchMultiSelectField $primaryCurrency): CustomerSubsidiaryRelationshipSearchBasic
    {
        $this->primaryCurrency = $primaryCurrency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPrimaryCurrency(): SearchMultiSelectField
    {
        return $this->primaryCurrency;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return CustomerSubsidiaryRelationshipSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): CustomerSubsidiaryRelationshipSearchBasic
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
     * @param SearchDoubleField $unbilledOrders
     * @return CustomerSubsidiaryRelationshipSearchBasic
     */
    public function setUnbilledOrders(SearchDoubleField $unbilledOrders): CustomerSubsidiaryRelationshipSearchBasic
    {
        $this->unbilledOrders = $unbilledOrders;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUnbilledOrders(): SearchDoubleField
    {
        return $this->unbilledOrders;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return CustomerSubsidiaryRelationshipSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): CustomerSubsidiaryRelationshipSearchBasic
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
