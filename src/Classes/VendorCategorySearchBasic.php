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

class VendorCategorySearchBasic extends SearchRecordBasic {
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
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isTaxAgency;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    static $paramtypesmap = array(
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "isTaxAgency" => "SearchBooleanField",
        "name" => "SearchStringField",
    );

    /**
     * @param SearchMultiSelectField $externalId
     * @return VendorCategorySearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): VendorCategorySearchBasic
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
     * @return VendorCategorySearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): VendorCategorySearchBasic
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
     * @return VendorCategorySearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): VendorCategorySearchBasic
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
     * @return VendorCategorySearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): VendorCategorySearchBasic
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
     * @return VendorCategorySearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): VendorCategorySearchBasic
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
     * @param SearchBooleanField $isTaxAgency
     * @return VendorCategorySearchBasic
     */
    public function setIsTaxAgency(SearchBooleanField $isTaxAgency): VendorCategorySearchBasic
    {
        $this->isTaxAgency = $isTaxAgency;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsTaxAgency(): SearchBooleanField
    {
        return $this->isTaxAgency;
    }

    /**
     * @param SearchStringField $name
     * @return VendorCategorySearchBasic
     */
    public function setName(SearchStringField $name): VendorCategorySearchBasic
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
