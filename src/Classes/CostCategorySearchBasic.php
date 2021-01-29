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

class CostCategorySearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $account;

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
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $itemCostType;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    static $paramtypesmap = array(
        "account" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "itemCostType" => "SearchEnumMultiSelectField",
        "name" => "SearchStringField",
    );

    /**
     * @param SearchMultiSelectField $account
     * @return CostCategorySearchBasic
     */
    public function setAccount(SearchMultiSelectField $account): CostCategorySearchBasic
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccount(): SearchMultiSelectField
    {
        return $this->account;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return CostCategorySearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): CostCategorySearchBasic
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
     * @return CostCategorySearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): CostCategorySearchBasic
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
     * @return CostCategorySearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): CostCategorySearchBasic
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
     * @return CostCategorySearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): CostCategorySearchBasic
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
     * @param SearchBooleanField $isInactive
     * @return CostCategorySearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): CostCategorySearchBasic
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive(): SearchBooleanField
    {
        return $this->isInactive;
    }

    /**
     * @param SearchEnumMultiSelectField $itemCostType
     * @return CostCategorySearchBasic
     */
    public function setItemCostType(SearchEnumMultiSelectField $itemCostType): CostCategorySearchBasic
    {
        $this->itemCostType = $itemCostType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getItemCostType(): SearchEnumMultiSelectField
    {
        return $this->itemCostType;
    }

    /**
     * @param SearchStringField $name
     * @return CostCategorySearchBasic
     */
    public function setName(SearchStringField $name): CostCategorySearchBasic
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

}
