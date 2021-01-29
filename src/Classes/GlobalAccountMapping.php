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

class GlobalAccountMapping extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $effectiveDate;

    /**
     * @var string
     */
    protected string $endDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $accountingBook;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $sourceAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var RecordRef
     */
    protected RecordRef $destinationAccount;

    /**
     * @var BaseRef
     */
    protected BaseRef $customDimension;

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
        "effectiveDate" => "dateTime",
        "endDate" => "dateTime",
        "accountingBook" => "RecordRef",
        "subsidiary" => "RecordRef",
        "sourceAccount" => "RecordRef",
        "class" => "RecordRef",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "destinationAccount" => "RecordRef",
        "customDimension" => "BaseRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return GlobalAccountMapping
     */
    public function setCustomForm(RecordRef $customForm): GlobalAccountMapping
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
     * @param string $effectiveDate
     * @return GlobalAccountMapping
     */
    public function setEffectiveDate(string $effectiveDate): GlobalAccountMapping
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEffectiveDate(): string
    {
        return $this->effectiveDate;
    }

    /**
     * @param string $endDate
     * @return GlobalAccountMapping
     */
    public function setEndDate(string $endDate): GlobalAccountMapping
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param RecordRef $accountingBook
     * @return GlobalAccountMapping
     */
    public function setAccountingBook(RecordRef $accountingBook): GlobalAccountMapping
    {
        $this->accountingBook = $accountingBook;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAccountingBook(): RecordRef
    {
        return $this->accountingBook;
    }

    /**
     * @param RecordRef $subsidiary
     * @return GlobalAccountMapping
     */
    public function setSubsidiary(RecordRef $subsidiary): GlobalAccountMapping
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary(): RecordRef
    {
        return $this->subsidiary;
    }

    /**
     * @param RecordRef $sourceAccount
     * @return GlobalAccountMapping
     */
    public function setSourceAccount(RecordRef $sourceAccount): GlobalAccountMapping
    {
        $this->sourceAccount = $sourceAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSourceAccount(): RecordRef
    {
        return $this->sourceAccount;
    }

    /**
     * @param RecordRef $class
     * @return GlobalAccountMapping
     */
    public function setClass(RecordRef $class): GlobalAccountMapping
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
     * @param RecordRef $department
     * @return GlobalAccountMapping
     */
    public function setDepartment(RecordRef $department): GlobalAccountMapping
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
     * @param RecordRef $location
     * @return GlobalAccountMapping
     */
    public function setLocation(RecordRef $location): GlobalAccountMapping
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
     * @param RecordRef $destinationAccount
     * @return GlobalAccountMapping
     */
    public function setDestinationAccount(RecordRef $destinationAccount): GlobalAccountMapping
    {
        $this->destinationAccount = $destinationAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDestinationAccount(): RecordRef
    {
        return $this->destinationAccount;
    }

    /**
     * @param BaseRef $customDimension
     * @return GlobalAccountMapping
     */
    public function setCustomDimension(BaseRef $customDimension): GlobalAccountMapping
    {
        $this->customDimension = $customDimension;
        return $this;
    }

    /**
     * @return BaseRef
     */
    public function getCustomDimension(): BaseRef
    {
        return $this->customDimension;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return GlobalAccountMapping
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): GlobalAccountMapping
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
     * @return GlobalAccountMapping
     */
    public function setInternalId(string $internalId): GlobalAccountMapping
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
     * @return GlobalAccountMapping
     */
    public function setExternalId(string $externalId): GlobalAccountMapping
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
