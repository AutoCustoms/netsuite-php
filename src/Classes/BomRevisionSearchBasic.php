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

class BomRevisionSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $billOfMaterials;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $createdDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $effectiveEndDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $effectiveStartDate;

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
    protected SearchStringField $memo;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    static $paramtypesmap = array(
        "billOfMaterials" => "SearchMultiSelectField",
        "createdDate" => "SearchDateField",
        "effectiveEndDate" => "SearchDateField",
        "effectiveStartDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "memo" => "SearchStringField",
        "name" => "SearchStringField",
    );

    /**
     * @param SearchMultiSelectField $billOfMaterials
     * @return BomRevisionSearchBasic
     */
    public function setBillOfMaterials(SearchMultiSelectField $billOfMaterials): BomRevisionSearchBasic
    {
        $this->billOfMaterials = $billOfMaterials;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillOfMaterials(): SearchMultiSelectField
    {
        return $this->billOfMaterials;
    }

    /**
     * @param SearchDateField $createdDate
     * @return BomRevisionSearchBasic
     */
    public function setCreatedDate(SearchDateField $createdDate): BomRevisionSearchBasic
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
     * @param SearchDateField $effectiveEndDate
     * @return BomRevisionSearchBasic
     */
    public function setEffectiveEndDate(SearchDateField $effectiveEndDate): BomRevisionSearchBasic
    {
        $this->effectiveEndDate = $effectiveEndDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEffectiveEndDate(): SearchDateField
    {
        return $this->effectiveEndDate;
    }

    /**
     * @param SearchDateField $effectiveStartDate
     * @return BomRevisionSearchBasic
     */
    public function setEffectiveStartDate(SearchDateField $effectiveStartDate): BomRevisionSearchBasic
    {
        $this->effectiveStartDate = $effectiveStartDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEffectiveStartDate(): SearchDateField
    {
        return $this->effectiveStartDate;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return BomRevisionSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): BomRevisionSearchBasic
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
     * @return BomRevisionSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): BomRevisionSearchBasic
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
     * @return BomRevisionSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): BomRevisionSearchBasic
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
     * @return BomRevisionSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): BomRevisionSearchBasic
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
     * @return BomRevisionSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): BomRevisionSearchBasic
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
     * @param SearchStringField $memo
     * @return BomRevisionSearchBasic
     */
    public function setMemo(SearchStringField $memo): BomRevisionSearchBasic
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMemo(): SearchStringField
    {
        return $this->memo;
    }

    /**
     * @param SearchStringField $name
     * @return BomRevisionSearchBasic
     */
    public function setName(SearchStringField $name): BomRevisionSearchBasic
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
