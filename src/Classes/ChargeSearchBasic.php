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

class ChargeSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $amount;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $billingAccount;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $billingItem;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $billTo;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $chargeDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $chargeType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $class;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $createdDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $currency;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $department;

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
     * @var SearchDateField
     */
    protected SearchDateField $modifiedDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

    /**
     * @var PostingPeriodDate
     */
    protected PostingPeriodDate $postingPeriodRelative;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantity;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $rate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $rule;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $runId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $salesOrder;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $stage;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subscriptionLine;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $use;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "amount" => "SearchDoubleField",
        "billingAccount" => "SearchMultiSelectField",
        "billingItem" => "SearchMultiSelectField",
        "billTo" => "SearchMultiSelectField",
        "chargeDate" => "SearchDateField",
        "chargeType" => "SearchMultiSelectField",
        "class" => "SearchMultiSelectField",
        "createdDate" => "SearchDateField",
        "currency" => "SearchMultiSelectField",
        "department" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "location" => "SearchMultiSelectField",
        "modifiedDate" => "SearchDateField",
        "postingPeriod" => "RecordRef",
        "postingPeriodRelative" => "PostingPeriodDate",
        "quantity" => "SearchDoubleField",
        "rate" => "SearchDoubleField",
        "rule" => "SearchMultiSelectField",
        "runId" => "SearchStringField",
        "salesOrder" => "SearchLongField",
        "stage" => "SearchEnumMultiSelectField",
        "subscriptionLine" => "SearchMultiSelectField",
        "use" => "SearchEnumMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchDoubleField $amount
     * @return ChargeSearchBasic
     */
    public function setAmount(SearchDoubleField $amount): ChargeSearchBasic
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmount(): SearchDoubleField
    {
        return $this->amount;
    }

    /**
     * @param SearchMultiSelectField $billingAccount
     * @return ChargeSearchBasic
     */
    public function setBillingAccount(SearchMultiSelectField $billingAccount): ChargeSearchBasic
    {
        $this->billingAccount = $billingAccount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillingAccount(): SearchMultiSelectField
    {
        return $this->billingAccount;
    }

    /**
     * @param SearchMultiSelectField $billingItem
     * @return ChargeSearchBasic
     */
    public function setBillingItem(SearchMultiSelectField $billingItem): ChargeSearchBasic
    {
        $this->billingItem = $billingItem;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillingItem(): SearchMultiSelectField
    {
        return $this->billingItem;
    }

    /**
     * @param SearchMultiSelectField $billTo
     * @return ChargeSearchBasic
     */
    public function setBillTo(SearchMultiSelectField $billTo): ChargeSearchBasic
    {
        $this->billTo = $billTo;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillTo(): SearchMultiSelectField
    {
        return $this->billTo;
    }

    /**
     * @param SearchDateField $chargeDate
     * @return ChargeSearchBasic
     */
    public function setChargeDate(SearchDateField $chargeDate): ChargeSearchBasic
    {
        $this->chargeDate = $chargeDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getChargeDate(): SearchDateField
    {
        return $this->chargeDate;
    }

    /**
     * @param SearchMultiSelectField $chargeType
     * @return ChargeSearchBasic
     */
    public function setChargeType(SearchMultiSelectField $chargeType): ChargeSearchBasic
    {
        $this->chargeType = $chargeType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getChargeType(): SearchMultiSelectField
    {
        return $this->chargeType;
    }

    /**
     * @param SearchMultiSelectField $class
     * @return ChargeSearchBasic
     */
    public function setClass(SearchMultiSelectField $class): ChargeSearchBasic
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
     * @param SearchDateField $createdDate
     * @return ChargeSearchBasic
     */
    public function setCreatedDate(SearchDateField $createdDate): ChargeSearchBasic
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCreatedDate(): SearchDateField
    {
        return $this->createdDate;
    }

    /**
     * @param SearchMultiSelectField $currency
     * @return ChargeSearchBasic
     */
    public function setCurrency(SearchMultiSelectField $currency): ChargeSearchBasic
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCurrency(): SearchMultiSelectField
    {
        return $this->currency;
    }

    /**
     * @param SearchMultiSelectField $department
     * @return ChargeSearchBasic
     */
    public function setDepartment(SearchMultiSelectField $department): ChargeSearchBasic
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
     * @param SearchMultiSelectField $externalId
     * @return ChargeSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): ChargeSearchBasic
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
     * @return ChargeSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): ChargeSearchBasic
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
     * @return ChargeSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): ChargeSearchBasic
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
     * @return ChargeSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): ChargeSearchBasic
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
     * @return ChargeSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): ChargeSearchBasic
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
     * @param SearchDateField $modifiedDate
     * @return ChargeSearchBasic
     */
    public function setModifiedDate(SearchDateField $modifiedDate): ChargeSearchBasic
    {
        $this->modifiedDate = $modifiedDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getModifiedDate(): SearchDateField
    {
        return $this->modifiedDate;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return ChargeSearchBasic
     */
    public function setPostingPeriod(RecordRef $postingPeriod): ChargeSearchBasic
    {
        $this->postingPeriod = $postingPeriod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPostingPeriod(): RecordRef
    {
        return $this->postingPeriod;
    }

    /**
     * @param PostingPeriodDate $postingPeriodRelative
     * @return ChargeSearchBasic
     */
    public function setPostingPeriodRelative(PostingPeriodDate $postingPeriodRelative): ChargeSearchBasic
    {
        $this->postingPeriodRelative = $postingPeriodRelative;
        return $this;
    }

    /**
     * @return PostingPeriodDate
     */
    public function getPostingPeriodRelative(): PostingPeriodDate
    {
        return $this->postingPeriodRelative;
    }

    /**
     * @param SearchDoubleField $quantity
     * @return ChargeSearchBasic
     */
    public function setQuantity(SearchDoubleField $quantity): ChargeSearchBasic
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantity(): SearchDoubleField
    {
        return $this->quantity;
    }

    /**
     * @param SearchDoubleField $rate
     * @return ChargeSearchBasic
     */
    public function setRate(SearchDoubleField $rate): ChargeSearchBasic
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRate(): SearchDoubleField
    {
        return $this->rate;
    }

    /**
     * @param SearchMultiSelectField $rule
     * @return ChargeSearchBasic
     */
    public function setRule(SearchMultiSelectField $rule): ChargeSearchBasic
    {
        $this->rule = $rule;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRule(): SearchMultiSelectField
    {
        return $this->rule;
    }

    /**
     * @param SearchStringField $runId
     * @return ChargeSearchBasic
     */
    public function setRunId(SearchStringField $runId): ChargeSearchBasic
    {
        $this->runId = $runId;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getRunId(): SearchStringField
    {
        return $this->runId;
    }

    /**
     * @param SearchLongField $salesOrder
     * @return ChargeSearchBasic
     */
    public function setSalesOrder(SearchLongField $salesOrder): ChargeSearchBasic
    {
        $this->salesOrder = $salesOrder;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getSalesOrder(): SearchLongField
    {
        return $this->salesOrder;
    }

    /**
     * @param SearchEnumMultiSelectField $stage
     * @return ChargeSearchBasic
     */
    public function setStage(SearchEnumMultiSelectField $stage): ChargeSearchBasic
    {
        $this->stage = $stage;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getStage(): SearchEnumMultiSelectField
    {
        return $this->stage;
    }

    /**
     * @param SearchMultiSelectField $subscriptionLine
     * @return ChargeSearchBasic
     */
    public function setSubscriptionLine(SearchMultiSelectField $subscriptionLine): ChargeSearchBasic
    {
        $this->subscriptionLine = $subscriptionLine;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubscriptionLine(): SearchMultiSelectField
    {
        return $this->subscriptionLine;
    }

    /**
     * @param SearchEnumMultiSelectField $use
     * @return ChargeSearchBasic
     */
    public function setUse(SearchEnumMultiSelectField $use): ChargeSearchBasic
    {
        $this->use = $use;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getUse(): SearchEnumMultiSelectField
    {
        return $this->use;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return ChargeSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): ChargeSearchBasic
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
