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

class ExpenseCategory extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var RecordRef
     */
    protected RecordRef $expenseAcct;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var bool
     */
    protected bool $rateRequired;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $subsidiaryList;

    /**
     * @var float
     */
    protected float $defaultRate;

    /**
     * @var ExpenseCategoryRatesList
     */
    protected ExpenseCategoryRatesList $ratesList;

    /**
     * @var TranslationList
     */
    protected TranslationList $translationsList;

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
        "customForm" => "RecordRef",
        "name" => "string",
        "description" => "string",
        "expenseAcct" => "RecordRef",
        "isInactive" => "boolean",
        "rateRequired" => "boolean",
        "subsidiaryList" => "RecordRefList",
        "defaultRate" => "float",
        "ratesList" => "ExpenseCategoryRatesList",
        "translationsList" => "TranslationList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return ExpenseCategory
     */
    public function setCustomForm(RecordRef $customForm): ExpenseCategory
    {
        $this->customForm = $customForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm(): RecordRef
    {
        return $this->customForm;
    }

    /**
     * @param string $name
     * @return ExpenseCategory
     */
    public function setName(string $name): ExpenseCategory
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $description
     * @return ExpenseCategory
     */
    public function setDescription(string $description): ExpenseCategory
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
     * @param RecordRef $expenseAcct
     * @return ExpenseCategory
     */
    public function setExpenseAcct(RecordRef $expenseAcct): ExpenseCategory
    {
        $this->expenseAcct = $expenseAcct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getExpenseAcct(): RecordRef
    {
        return $this->expenseAcct;
    }

    /**
     * @param bool $isInactive
     * @return ExpenseCategory
     */
    public function setIsInactive(bool $isInactive): ExpenseCategory
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
     * @param bool $rateRequired
     * @return ExpenseCategory
     */
    public function setRateRequired(bool $rateRequired): ExpenseCategory
    {
        $this->rateRequired = $rateRequired;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRateRequired(): bool
    {
        return $this->rateRequired;
    }

    /**
     * @param RecordRefList $subsidiaryList
     * @return ExpenseCategory
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): ExpenseCategory
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
     * @param float $defaultRate
     * @return ExpenseCategory
     */
    public function setDefaultRate(float $defaultRate): ExpenseCategory
    {
        $this->defaultRate = $defaultRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getDefaultRate(): float
    {
        return $this->defaultRate;
    }

    /**
     * @param ExpenseCategoryRatesList $ratesList
     * @return ExpenseCategory
     */
    public function setRatesList(ExpenseCategoryRatesList $ratesList): ExpenseCategory
    {
        $this->ratesList = $ratesList;
        return $this;
    }

    /**
     * @return ExpenseCategoryRatesList
     */
    public function getRatesList(): ExpenseCategoryRatesList
    {
        return $this->ratesList;
    }

    /**
     * @param TranslationList $translationsList
     * @return ExpenseCategory
     */
    public function setTranslationsList(TranslationList $translationsList): ExpenseCategory
    {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * @return TranslationList
     */
    public function getTranslationsList(): TranslationList
    {
        return $this->translationsList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return ExpenseCategory
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): ExpenseCategory
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
     * @return ExpenseCategory
     */
    public function setInternalId(string $internalId): ExpenseCategory
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
     * @return ExpenseCategory
     */
    public function setExternalId(string $externalId): ExpenseCategory
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
