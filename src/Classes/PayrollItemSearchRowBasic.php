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

class PayrollItemSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $expenseAccount;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $itemTypeNoHierarchy;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $liabilityAccount;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $vendor;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "expenseAccount" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "itemTypeNoHierarchy" => "SearchColumnStringField[]",
        "liabilityAccount" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "subsidiary" => "SearchColumnStringField[]",
        "vendor" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnStringField[] $expenseAccount
     * @return PayrollItemSearchRowBasic
     */
    public function setExpenseAccount(SearchColumnStringField $expenseAccount): PayrollItemSearchRowBasic
    {
        $this->expenseAccount[] = $expenseAccount;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getExpenseAccount(): array
    {
        return $this->expenseAccount;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return PayrollItemSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): PayrollItemSearchRowBasic
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
     * @return PayrollItemSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): PayrollItemSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isInactive
     * @return PayrollItemSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): PayrollItemSearchRowBasic
    {
        $this->isInactive[] = $isInactive;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive(): array
    {
        return $this->isInactive;
    }

    /**
     * @param SearchColumnStringField[] $itemTypeNoHierarchy
     * @return PayrollItemSearchRowBasic
     */
    public function setItemTypeNoHierarchy(SearchColumnStringField $itemTypeNoHierarchy): PayrollItemSearchRowBasic
    {
        $this->itemTypeNoHierarchy[] = $itemTypeNoHierarchy;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getItemTypeNoHierarchy(): array
    {
        return $this->itemTypeNoHierarchy;
    }

    /**
     * @param SearchColumnStringField[] $liabilityAccount
     * @return PayrollItemSearchRowBasic
     */
    public function setLiabilityAccount(SearchColumnStringField $liabilityAccount): PayrollItemSearchRowBasic
    {
        $this->liabilityAccount[] = $liabilityAccount;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLiabilityAccount(): array
    {
        return $this->liabilityAccount;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return PayrollItemSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): PayrollItemSearchRowBasic
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName(): array
    {
        return $this->name;
    }

    /**
     * @param SearchColumnStringField[] $subsidiary
     * @return PayrollItemSearchRowBasic
     */
    public function setSubsidiary(SearchColumnStringField $subsidiary): PayrollItemSearchRowBasic
    {
        $this->subsidiary[] = $subsidiary;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSubsidiary(): array
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchColumnStringField[] $vendor
     * @return PayrollItemSearchRowBasic
     */
    public function setVendor(SearchColumnStringField $vendor): PayrollItemSearchRowBasic
    {
        $this->vendor[] = $vendor;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getVendor(): array
    {
        return $this->vendor;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return PayrollItemSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): PayrollItemSearchRowBasic
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
