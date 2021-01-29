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

class SalesTaxItemSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchStringField
     */
    protected SearchStringField $description;

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
     * @var SearchStringField
     */
    protected SearchStringField $itemId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $taxType;

    static $paramtypesmap = array(
        "description" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "itemId" => "SearchStringField",
        "name" => "SearchStringField",
        "taxType" => "SearchMultiSelectField",
    );

    /**
     * @param SearchStringField $description
     * @return SalesTaxItemSearchBasic
     */
    public function setDescription(SearchStringField $description): SalesTaxItemSearchBasic
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDescription(): SearchStringField
    {
        return $this->description;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return SalesTaxItemSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): SalesTaxItemSearchBasic
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
     * @return SalesTaxItemSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): SalesTaxItemSearchBasic
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
     * @return SalesTaxItemSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): SalesTaxItemSearchBasic
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
     * @return SalesTaxItemSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): SalesTaxItemSearchBasic
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
     * @return SalesTaxItemSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): SalesTaxItemSearchBasic
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
     * @param SearchStringField $itemId
     * @return SalesTaxItemSearchBasic
     */
    public function setItemId(SearchStringField $itemId): SalesTaxItemSearchBasic
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getItemId(): SearchStringField
    {
        return $this->itemId;
    }

    /**
     * @param SearchStringField $name
     * @return SalesTaxItemSearchBasic
     */
    public function setName(SearchStringField $name): SalesTaxItemSearchBasic
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

    /**
     * @param SearchMultiSelectField $taxType
     * @return SalesTaxItemSearchBasic
     */
    public function setTaxType(SearchMultiSelectField $taxType): SalesTaxItemSearchBasic
    {
        $this->taxType = $taxType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTaxType(): SearchMultiSelectField
    {
        return $this->taxType;
    }

}
