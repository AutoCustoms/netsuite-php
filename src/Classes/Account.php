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

class Account extends Record {
    /**
     * @var AccountType
     */
    protected AccountType $acctType;

    /**
     * @var RecordRef
     */
    protected RecordRef $unitsType;

    /**
     * @var RecordRef
     */
    protected RecordRef $unit;

    /**
     * @var string
     */
    protected string $acctNumber;

    /**
     * @var string
     */
    protected string $acctName;

    /**
     * @var string
     */
    protected string $legalName;

    /**
     * @var bool
     */
    protected bool $includeChildren;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var string
     */
    protected string $exchangeRate;

    /**
     * @var ConsolidatedRate
     */
    protected ConsolidatedRate $generalRate;

    /**
     * @var RecordRef
     */
    protected RecordRef $parent;

    /**
     * @var ConsolidatedRate
     */
    protected ConsolidatedRate $cashFlowRate;

    /**
     * @var RecordRef
     */
    protected RecordRef $billableExpensesAcct;

    /**
     * @var RecordRef
     */
    protected RecordRef $deferralAcct;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var int
     */
    protected int $curDocNum;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $restrictToAccountingBookList;

    /**
     * @var bool
     */
    protected bool $inventory;

    /**
     * @var bool
     */
    protected bool $eliminate;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $subsidiaryList;

    protected $category1099misc;
    /**
     * @var AccountLocalizationsList
     */
    protected AccountLocalizationsList $localizationsList;

    /**
     * @var float
     */
    protected float $openingBalance;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var bool
     */
    protected bool $revalue;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "acctType" => "AccountType",
        "unitsType" => "RecordRef",
        "unit" => "RecordRef",
        "acctNumber" => "string",
        "acctName" => "string",
        "legalName" => "string",
        "includeChildren" => "boolean",
        "currency" => "RecordRef",
        "exchangeRate" => "string",
        "generalRate" => "ConsolidatedRate",
        "parent" => "RecordRef",
        "cashFlowRate" => "ConsolidatedRate",
        "billableExpensesAcct" => "RecordRef",
        "deferralAcct" => "RecordRef",
        "description" => "string",
        "curDocNum" => "integer",
        "isInactive" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "restrictToAccountingBookList" => "RecordRefList",
        "inventory" => "boolean",
        "eliminate" => "boolean",
        "subsidiaryList" => "RecordRefList",
        "category1099misc" => "RecordRef",
        "localizationsList" => "AccountLocalizationsList",
        "openingBalance" => "float",
        "tranDate" => "dateTime",
        "revalue" => "boolean",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param AccountType $acctType
     * @return Account
     */
    public function setAcctType(AccountType $acctType): Account
    {
        $this->acctType = $acctType;
        return $this;
    }

    /**
     * @return AccountType
     */
    public function getAcctType(): AccountType
    {
        return $this->acctType;
    }

    /**
     * @param RecordRef $unitsType
     * @return Account
     */
    public function setUnitsType(RecordRef $unitsType): Account
    {
        $this->unitsType = $unitsType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnitsType(): RecordRef
    {
        return $this->unitsType;
    }

    /**
     * @param RecordRef $unit
     * @return Account
     */
    public function setUnit(RecordRef $unit): Account
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnit(): RecordRef
    {
        return $this->unit;
    }

    /**
     * @param string $acctNumber
     * @return Account
     */
    public function setAcctNumber(string $acctNumber): Account
    {
        $this->acctNumber = $acctNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAcctNumber(): string
    {
        return $this->acctNumber;
    }

    /**
     * @param string $acctName
     * @return Account
     */
    public function setAcctName(string $acctName): Account
    {
        $this->acctName = $acctName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAcctName(): string
    {
        return $this->acctName;
    }

    /**
     * @param string $legalName
     * @return Account
     */
    public function setLegalName(string $legalName): Account
    {
        $this->legalName = $legalName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLegalName(): string
    {
        return $this->legalName;
    }

    /**
     * @param bool $includeChildren
     * @return Account
     */
    public function setIncludeChildren(bool $includeChildren): Account
    {
        $this->includeChildren = $includeChildren;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeChildren(): bool
    {
        return $this->includeChildren;
    }

    /**
     * @param RecordRef $currency
     * @return Account
     */
    public function setCurrency(RecordRef $currency): Account
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCurrency(): RecordRef
    {
        return $this->currency;
    }

    /**
     * @param string $exchangeRate
     * @return Account
     */
    public function setExchangeRate(string $exchangeRate): Account
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExchangeRate(): string
    {
        return $this->exchangeRate;
    }

    /**
     * @param ConsolidatedRate $generalRate
     * @return Account
     */
    public function setGeneralRate(ConsolidatedRate $generalRate): Account
    {
        $this->generalRate = $generalRate;
        return $this;
    }

    /**
     * @return ConsolidatedRate
     */
    public function getGeneralRate(): ConsolidatedRate
    {
        return $this->generalRate;
    }

    /**
     * @param RecordRef $parent
     * @return Account
     */
    public function setParent(RecordRef $parent): Account
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent(): RecordRef
    {
        return $this->parent;
    }

    /**
     * @param ConsolidatedRate $cashFlowRate
     * @return Account
     */
    public function setCashFlowRate(ConsolidatedRate $cashFlowRate): Account
    {
        $this->cashFlowRate = $cashFlowRate;
        return $this;
    }

    /**
     * @return ConsolidatedRate
     */
    public function getCashFlowRate(): ConsolidatedRate
    {
        return $this->cashFlowRate;
    }

    /**
     * @param RecordRef $billableExpensesAcct
     * @return Account
     */
    public function setBillableExpensesAcct(RecordRef $billableExpensesAcct): Account
    {
        $this->billableExpensesAcct = $billableExpensesAcct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillableExpensesAcct(): RecordRef
    {
        return $this->billableExpensesAcct;
    }

    /**
     * @param RecordRef $deferralAcct
     * @return Account
     */
    public function setDeferralAcct(RecordRef $deferralAcct): Account
    {
        $this->deferralAcct = $deferralAcct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDeferralAcct(): RecordRef
    {
        return $this->deferralAcct;
    }

    /**
     * @param string $description
     * @return Account
     */
    public function setDescription(string $description): Account
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param int $curDocNum
     * @return Account
     */
    public function setCurDocNum(int $curDocNum): Account
    {
        $this->curDocNum = $curDocNum;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurDocNum(): int
    {
        return $this->curDocNum;
    }

    /**
     * @param bool $isInactive
     * @return Account
     */
    public function setIsInactive(bool $isInactive): Account
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive(): bool
    {
        return $this->isInactive;
    }

    /**
     * @param RecordRef $department
     * @return Account
     */
    public function setDepartment(RecordRef $department): Account
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment(): RecordRef
    {
        return $this->department;
    }

    /**
     * @param RecordRef $class
     * @return Account
     */
    public function setClass(RecordRef $class): Account
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass(): RecordRef
    {
        return $this->class;
    }

    /**
     * @param RecordRef $location
     * @return Account
     */
    public function setLocation(RecordRef $location): Account
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation(): RecordRef
    {
        return $this->location;
    }

    /**
     * @param RecordRefList $restrictToAccountingBookList
     * @return Account
     */
    public function setRestrictToAccountingBookList(RecordRefList $restrictToAccountingBookList): Account
    {
        $this->restrictToAccountingBookList = $restrictToAccountingBookList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getRestrictToAccountingBookList(): RecordRefList
    {
        return $this->restrictToAccountingBookList;
    }

    /**
     * @param bool $inventory
     * @return Account
     */
    public function setInventory(bool $inventory): Account
    {
        $this->inventory = $inventory;
        return $this;
    }

    /**
     * @return bool
     */
    public function getInventory(): bool
    {
        return $this->inventory;
    }

    /**
     * @param bool $eliminate
     * @return Account
     */
    public function setEliminate(bool $eliminate): Account
    {
        $this->eliminate = $eliminate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEliminate(): bool
    {
        return $this->eliminate;
    }

    /**
     * @param RecordRefList $subsidiaryList
     * @return Account
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): Account
    {
        $this->subsidiaryList = $subsidiaryList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getSubsidiaryList(): RecordRefList
    {
        return $this->subsidiaryList;
    }

    /**
     * @param AccountLocalizationsList $localizationsList
     * @return Account
     */
    public function setLocalizationsList(AccountLocalizationsList $localizationsList): Account
    {
        $this->localizationsList = $localizationsList;
        return $this;
    }

    /**
     * @return AccountLocalizationsList
     */
    public function getLocalizationsList(): AccountLocalizationsList
    {
        return $this->localizationsList;
    }

    /**
     * @param float $openingBalance
     * @return Account
     */
    public function setOpeningBalance(float $openingBalance): Account
    {
        $this->openingBalance = $openingBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getOpeningBalance(): float
    {
        return $this->openingBalance;
    }

    /**
     * @param string $tranDate
     * @return Account
     */
    public function setTranDate(string $tranDate): Account
    {
        $this->tranDate = $tranDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranDate(): string
    {
        return $this->tranDate;
    }

    /**
     * @param bool $revalue
     * @return Account
     */
    public function setRevalue(bool $revalue): Account
    {
        $this->revalue = $revalue;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRevalue(): bool
    {
        return $this->revalue;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return Account
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Account
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList(): CustomFieldList
    {
        return $this->customFieldList;
    }

    /**
     * @param string $internalId
     * @return Account
     */
    public function setInternalId(string $internalId): Account
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

    /**
     * @param string $externalId
     * @return Account
     */
    public function setExternalId(string $externalId): Account
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

}
