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

class VendorSubsidiaryRelationshipSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $balance;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $balanceBase;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $baseCurrency;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $creditLimit;

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
     * @var SearchDoubleField
     */
    protected SearchDoubleField $inTransitBalance;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $inTransitBalanceBase;

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
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $taxItem;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $unbilledOrders;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $unbilledOrdersBase;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "balance" => "SearchDoubleField",
        "balanceBase" => "SearchDoubleField",
        "baseCurrency" => "SearchMultiSelectField",
        "creditLimit" => "SearchDoubleField",
        "entity" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "inTransitBalance" => "SearchDoubleField",
        "inTransitBalanceBase" => "SearchDoubleField",
        "isPrimarySub" => "SearchBooleanField",
        "primaryCurrency" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "taxItem" => "SearchMultiSelectField",
        "unbilledOrders" => "SearchDoubleField",
        "unbilledOrdersBase" => "SearchDoubleField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchDoubleField $balance
     * @return VendorSubsidiaryRelationshipSearchBasic
     */
    public function setBalance(SearchDoubleField $balance): VendorSubsidiaryRelationshipSearchBasic
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
     * @param SearchDoubleField $balanceBase
     * @return VendorSubsidiaryRelationshipSearchBasic
     */
    public function setBalanceBase(SearchDoubleField $balanceBase): VendorSubsidiaryRelationshipSearchBasic
    {
        $this->balanceBase = $balanceBase;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBalanceBase(): SearchDoubleField
    {
        return $this->balanceBase;
    }

    /**
     * @param SearchMultiSelectField $baseCurrency
     * @return VendorSubsidiaryRelationshipSearchBasic
     */
    public function setBaseCurrency(SearchMultiSelectField $baseCurrency): VendorSubsidiaryRelationshipSearchBasic
    {
        $this->baseCurrency = $baseCurrency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBaseCurrency(): SearchMultiSelectField
    {
        return $this->baseCurrency;
    }

    /**
     * @param SearchDoubleField $creditLimit
     * @return VendorSubsidiaryRelationshipSearchBasic
     */
    public function setCreditLimit(SearchDoubleField $creditLimit): VendorSubsidiaryRelationshipSearchBasic
    {
        $this->creditLimit = $creditLimit;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCreditLimit(): SearchDoubleField
    {
        return $this->creditLimit;
    }

    /**
     * @param SearchMultiSelectField $entity
     * @return VendorSubsidiaryRelationshipSearchBasic
     */
    public function setEntity(SearchMultiSelectField $entity): VendorSubsidiaryRelationshipSearchBasic
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
     * @return VendorSubsidiaryRelationshipSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): VendorSubsidiaryRelationshipSearchBasic
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
     * @return VendorSubsidiaryRelationshipSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): VendorSubsidiaryRelationshipSearchBasic
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
     * @return VendorSubsidiaryRelationshipSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): VendorSubsidiaryRelationshipSearchBasic
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
     * @return VendorSubsidiaryRelationshipSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): VendorSubsidiaryRelationshipSearchBasic
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
     * @param SearchDoubleField $inTransitBalance
     * @return VendorSubsidiaryRelationshipSearchBasic
     */
    public function setInTransitBalance(SearchDoubleField $inTransitBalance): VendorSubsidiaryRelationshipSearchBasic
    {
        $this->inTransitBalance = $inTransitBalance;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getInTransitBalance(): SearchDoubleField
    {
        return $this->inTransitBalance;
    }

    /**
     * @param SearchDoubleField $inTransitBalanceBase
     * @return VendorSubsidiaryRelationshipSearchBasic
     */
    public function setInTransitBalanceBase(SearchDoubleField $inTransitBalanceBase): VendorSubsidiaryRelationshipSearchBasic
    {
        $this->inTransitBalanceBase = $inTransitBalanceBase;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getInTransitBalanceBase(): SearchDoubleField
    {
        return $this->inTransitBalanceBase;
    }

    /**
     * @param SearchBooleanField $isPrimarySub
     * @return VendorSubsidiaryRelationshipSearchBasic
     */
    public function setIsPrimarySub(SearchBooleanField $isPrimarySub): VendorSubsidiaryRelationshipSearchBasic
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
     * @return VendorSubsidiaryRelationshipSearchBasic
     */
    public function setPrimaryCurrency(SearchMultiSelectField $primaryCurrency): VendorSubsidiaryRelationshipSearchBasic
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
     * @return VendorSubsidiaryRelationshipSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): VendorSubsidiaryRelationshipSearchBasic
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
     * @param SearchMultiSelectField $taxItem
     * @return VendorSubsidiaryRelationshipSearchBasic
     */
    public function setTaxItem(SearchMultiSelectField $taxItem): VendorSubsidiaryRelationshipSearchBasic
    {
        $this->taxItem = $taxItem;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTaxItem(): SearchMultiSelectField
    {
        return $this->taxItem;
    }

    /**
     * @param SearchDoubleField $unbilledOrders
     * @return VendorSubsidiaryRelationshipSearchBasic
     */
    public function setUnbilledOrders(SearchDoubleField $unbilledOrders): VendorSubsidiaryRelationshipSearchBasic
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
     * @param SearchDoubleField $unbilledOrdersBase
     * @return VendorSubsidiaryRelationshipSearchBasic
     */
    public function setUnbilledOrdersBase(SearchDoubleField $unbilledOrdersBase): VendorSubsidiaryRelationshipSearchBasic
    {
        $this->unbilledOrdersBase = $unbilledOrdersBase;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUnbilledOrdersBase(): SearchDoubleField
    {
        return $this->unbilledOrdersBase;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return VendorSubsidiaryRelationshipSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): VendorSubsidiaryRelationshipSearchBasic
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
