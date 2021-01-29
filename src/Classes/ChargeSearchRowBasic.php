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

class ChargeSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $amount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $billingAccount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $billingItem;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $billTo;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $chargeDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $chargeType;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $class;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $createdDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $currency;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $department;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $description;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $location;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $modifiedDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $postingPeriod;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $quantity;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $rate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $rule;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $runId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $salesOrder;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $stage;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subscriptionLine;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $use;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "amount" => "SearchColumnDoubleField[]",
        "billingAccount" => "SearchColumnSelectField[]",
        "billingItem" => "SearchColumnSelectField[]",
        "billTo" => "SearchColumnSelectField[]",
        "chargeDate" => "SearchColumnDateField[]",
        "chargeType" => "SearchColumnSelectField[]",
        "class" => "SearchColumnSelectField[]",
        "createdDate" => "SearchColumnDateField[]",
        "currency" => "SearchColumnSelectField[]",
        "department" => "SearchColumnSelectField[]",
        "description" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "location" => "SearchColumnSelectField[]",
        "modifiedDate" => "SearchColumnDateField[]",
        "postingPeriod" => "SearchColumnStringField[]",
        "quantity" => "SearchColumnStringField[]",
        "rate" => "SearchColumnStringField[]",
        "rule" => "SearchColumnSelectField[]",
        "runId" => "SearchColumnStringField[]",
        "salesOrder" => "SearchColumnStringField[]",
        "stage" => "SearchColumnEnumSelectField[]",
        "subscriptionLine" => "SearchColumnSelectField[]",
        "use" => "SearchColumnEnumSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnDoubleField[] $amount
     * @return ChargeSearchRowBasic
     */
    public function setAmount(SearchColumnDoubleField $amount): ChargeSearchRowBasic
    {
        $this->amount[] = $amount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmount(): array
    {
        return $this->amount;
    }

    /**
     * @param SearchColumnSelectField[] $billingAccount
     * @return ChargeSearchRowBasic
     */
    public function setBillingAccount(SearchColumnSelectField $billingAccount): ChargeSearchRowBasic
    {
        $this->billingAccount[] = $billingAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillingAccount(): array
    {
        return $this->billingAccount;
    }

    /**
     * @param SearchColumnSelectField[] $billingItem
     * @return ChargeSearchRowBasic
     */
    public function setBillingItem(SearchColumnSelectField $billingItem): ChargeSearchRowBasic
    {
        $this->billingItem[] = $billingItem;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillingItem(): array
    {
        return $this->billingItem;
    }

    /**
     * @param SearchColumnSelectField[] $billTo
     * @return ChargeSearchRowBasic
     */
    public function setBillTo(SearchColumnSelectField $billTo): ChargeSearchRowBasic
    {
        $this->billTo[] = $billTo;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillTo(): array
    {
        return $this->billTo;
    }

    /**
     * @param SearchColumnDateField[] $chargeDate
     * @return ChargeSearchRowBasic
     */
    public function setChargeDate(SearchColumnDateField $chargeDate): ChargeSearchRowBasic
    {
        $this->chargeDate[] = $chargeDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getChargeDate(): array
    {
        return $this->chargeDate;
    }

    /**
     * @param SearchColumnSelectField[] $chargeType
     * @return ChargeSearchRowBasic
     */
    public function setChargeType(SearchColumnSelectField $chargeType): ChargeSearchRowBasic
    {
        $this->chargeType[] = $chargeType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getChargeType(): array
    {
        return $this->chargeType;
    }

    /**
     * @param SearchColumnSelectField[] $class
     * @return ChargeSearchRowBasic
     */
    public function setClass(SearchColumnSelectField $class): ChargeSearchRowBasic
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
     * @param SearchColumnDateField[] $createdDate
     * @return ChargeSearchRowBasic
     */
    public function setCreatedDate(SearchColumnDateField $createdDate): ChargeSearchRowBasic
    {
        $this->createdDate[] = $createdDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCreatedDate(): array
    {
        return $this->createdDate;
    }

    /**
     * @param SearchColumnSelectField[] $currency
     * @return ChargeSearchRowBasic
     */
    public function setCurrency(SearchColumnSelectField $currency): ChargeSearchRowBasic
    {
        $this->currency[] = $currency;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCurrency(): array
    {
        return $this->currency;
    }

    /**
     * @param SearchColumnSelectField[] $department
     * @return ChargeSearchRowBasic
     */
    public function setDepartment(SearchColumnSelectField $department): ChargeSearchRowBasic
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
     * @param SearchColumnStringField[] $description
     * @return ChargeSearchRowBasic
     */
    public function setDescription(SearchColumnStringField $description): ChargeSearchRowBasic
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDescription(): array
    {
        return $this->description;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return ChargeSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): ChargeSearchRowBasic
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
     * @return ChargeSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): ChargeSearchRowBasic
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
     * @param SearchColumnSelectField[] $location
     * @return ChargeSearchRowBasic
     */
    public function setLocation(SearchColumnSelectField $location): ChargeSearchRowBasic
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
     * @param SearchColumnDateField[] $modifiedDate
     * @return ChargeSearchRowBasic
     */
    public function setModifiedDate(SearchColumnDateField $modifiedDate): ChargeSearchRowBasic
    {
        $this->modifiedDate[] = $modifiedDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getModifiedDate(): array
    {
        return $this->modifiedDate;
    }

    /**
     * @param SearchColumnStringField[] $postingPeriod
     * @return ChargeSearchRowBasic
     */
    public function setPostingPeriod(SearchColumnStringField $postingPeriod): ChargeSearchRowBasic
    {
        $this->postingPeriod[] = $postingPeriod;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPostingPeriod(): array
    {
        return $this->postingPeriod;
    }

    /**
     * @param SearchColumnStringField[] $quantity
     * @return ChargeSearchRowBasic
     */
    public function setQuantity(SearchColumnStringField $quantity): ChargeSearchRowBasic
    {
        $this->quantity[] = $quantity;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getQuantity(): array
    {
        return $this->quantity;
    }

    /**
     * @param SearchColumnStringField[] $rate
     * @return ChargeSearchRowBasic
     */
    public function setRate(SearchColumnStringField $rate): ChargeSearchRowBasic
    {
        $this->rate[] = $rate;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRate(): array
    {
        return $this->rate;
    }

    /**
     * @param SearchColumnSelectField[] $rule
     * @return ChargeSearchRowBasic
     */
    public function setRule(SearchColumnSelectField $rule): ChargeSearchRowBasic
    {
        $this->rule[] = $rule;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRule(): array
    {
        return $this->rule;
    }

    /**
     * @param SearchColumnStringField[] $runId
     * @return ChargeSearchRowBasic
     */
    public function setRunId(SearchColumnStringField $runId): ChargeSearchRowBasic
    {
        $this->runId[] = $runId;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRunId(): array
    {
        return $this->runId;
    }

    /**
     * @param SearchColumnStringField[] $salesOrder
     * @return ChargeSearchRowBasic
     */
    public function setSalesOrder(SearchColumnStringField $salesOrder): ChargeSearchRowBasic
    {
        $this->salesOrder[] = $salesOrder;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSalesOrder(): array
    {
        return $this->salesOrder;
    }

    /**
     * @param SearchColumnEnumSelectField[] $stage
     * @return ChargeSearchRowBasic
     */
    public function setStage(SearchColumnEnumSelectField $stage): ChargeSearchRowBasic
    {
        $this->stage[] = $stage;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getStage(): array
    {
        return $this->stage;
    }

    /**
     * @param SearchColumnSelectField[] $subscriptionLine
     * @return ChargeSearchRowBasic
     */
    public function setSubscriptionLine(SearchColumnSelectField $subscriptionLine): ChargeSearchRowBasic
    {
        $this->subscriptionLine[] = $subscriptionLine;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubscriptionLine(): array
    {
        return $this->subscriptionLine;
    }

    /**
     * @param SearchColumnEnumSelectField[] $use
     * @return ChargeSearchRowBasic
     */
    public function setUse(SearchColumnEnumSelectField $use): ChargeSearchRowBasic
    {
        $this->use[] = $use;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getUse(): array
    {
        return $this->use;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return ChargeSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): ChargeSearchRowBasic
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
