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

class PayrollItem extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $itemType;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var RecordRef
     */
    protected RecordRef $vendor;

    /**
     * @var RecordRef
     */
    protected RecordRef $expenseAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $liabilityAccount;

    /**
     * @var bool
     */
    protected bool $employeePaid;

    /**
     * @var PayrollItemAccountCategory
     */
    protected PayrollItemAccountCategory $accountCategory;

    /**
     * @var bool
     */
    protected bool $inactive;

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
        "subsidiary" => "RecordRef",
        "itemType" => "RecordRef",
        "name" => "string",
        "vendor" => "RecordRef",
        "expenseAccount" => "RecordRef",
        "liabilityAccount" => "RecordRef",
        "employeePaid" => "boolean",
        "accountCategory" => "PayrollItemAccountCategory",
        "inactive" => "boolean",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $subsidiary
     * @return PayrollItem
     */
    public function setSubsidiary(RecordRef $subsidiary): PayrollItem
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
     * @param RecordRef $itemType
     * @return PayrollItem
     */
    public function setItemType(RecordRef $itemType): PayrollItem
    {
        $this->itemType = $itemType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItemType(): RecordRef
    {
        return $this->itemType;
    }

    /**
     * @param string $name
     * @return PayrollItem
     */
    public function setName(string $name): PayrollItem
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
     * @param RecordRef $vendor
     * @return PayrollItem
     */
    public function setVendor(RecordRef $vendor): PayrollItem
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getVendor(): RecordRef
    {
        return $this->vendor;
    }

    /**
     * @param RecordRef $expenseAccount
     * @return PayrollItem
     */
    public function setExpenseAccount(RecordRef $expenseAccount): PayrollItem
    {
        $this->expenseAccount = $expenseAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getExpenseAccount(): RecordRef
    {
        return $this->expenseAccount;
    }

    /**
     * @param RecordRef $liabilityAccount
     * @return PayrollItem
     */
    public function setLiabilityAccount(RecordRef $liabilityAccount): PayrollItem
    {
        $this->liabilityAccount = $liabilityAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLiabilityAccount(): RecordRef
    {
        return $this->liabilityAccount;
    }

    /**
     * @param bool $employeePaid
     * @return PayrollItem
     */
    public function setEmployeePaid(bool $employeePaid): PayrollItem
    {
        $this->employeePaid = $employeePaid;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEmployeePaid(): bool
    {
        return $this->employeePaid;
    }

    /**
     * @param PayrollItemAccountCategory $accountCategory
     * @return PayrollItem
     */
    public function setAccountCategory(PayrollItemAccountCategory $accountCategory): PayrollItem
    {
        $this->accountCategory = $accountCategory;
        return $this;
    }

    /**
     * @return PayrollItemAccountCategory
     */
    public function getAccountCategory(): PayrollItemAccountCategory
    {
        return $this->accountCategory;
    }

    /**
     * @param bool $inactive
     * @return PayrollItem
     */
    public function setInactive(bool $inactive): PayrollItem
    {
        $this->inactive = $inactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getInactive(): bool
    {
        return $this->inactive;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return PayrollItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): PayrollItem
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
     * @return PayrollItem
     */
    public function setInternalId(string $internalId): PayrollItem
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
     * @return PayrollItem
     */
    public function setExternalId(string $externalId): PayrollItem
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
