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

class BomSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $availableForAllAssemblies;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $availableForAllLocations;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $createdDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $includeChildren;

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
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $legacyBomForAssembly;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $memo;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $restrictToAssemblies;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $restrictToLocations;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $useComponentYield;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $usedOnAssembly;

    static $paramtypesmap = array(
        "availableForAllAssemblies" => "SearchBooleanField",
        "availableForAllLocations" => "SearchBooleanField",
        "createdDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "includeChildren" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "legacyBomForAssembly" => "SearchMultiSelectField",
        "memo" => "SearchStringField",
        "name" => "SearchStringField",
        "restrictToAssemblies" => "SearchMultiSelectField",
        "restrictToLocations" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "useComponentYield" => "SearchBooleanField",
        "usedOnAssembly" => "SearchBooleanField",
    );

    /**
     * @param SearchBooleanField $availableForAllAssemblies
     * @return BomSearchBasic
     */
    public function setAvailableForAllAssemblies(SearchBooleanField $availableForAllAssemblies): BomSearchBasic
    {
        $this->availableForAllAssemblies = $availableForAllAssemblies;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAvailableForAllAssemblies(): SearchBooleanField
    {
        return $this->availableForAllAssemblies;
    }

    /**
     * @param SearchBooleanField $availableForAllLocations
     * @return BomSearchBasic
     */
    public function setAvailableForAllLocations(SearchBooleanField $availableForAllLocations): BomSearchBasic
    {
        $this->availableForAllLocations = $availableForAllLocations;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAvailableForAllLocations(): SearchBooleanField
    {
        return $this->availableForAllLocations;
    }

    /**
     * @param SearchDateField $createdDate
     * @return BomSearchBasic
     */
    public function setCreatedDate(SearchDateField $createdDate): BomSearchBasic
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
     * @param SearchMultiSelectField $externalId
     * @return BomSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): BomSearchBasic
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
     * @return BomSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): BomSearchBasic
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
     * @param SearchBooleanField $includeChildren
     * @return BomSearchBasic
     */
    public function setIncludeChildren(SearchBooleanField $includeChildren): BomSearchBasic
    {
        $this->includeChildren = $includeChildren;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIncludeChildren(): SearchBooleanField
    {
        return $this->includeChildren;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return BomSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): BomSearchBasic
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
     * @return BomSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): BomSearchBasic
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
     * @return BomSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): BomSearchBasic
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
     * @param SearchMultiSelectField $legacyBomForAssembly
     * @return BomSearchBasic
     */
    public function setLegacyBomForAssembly(SearchMultiSelectField $legacyBomForAssembly): BomSearchBasic
    {
        $this->legacyBomForAssembly = $legacyBomForAssembly;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLegacyBomForAssembly(): SearchMultiSelectField
    {
        return $this->legacyBomForAssembly;
    }

    /**
     * @param SearchStringField $memo
     * @return BomSearchBasic
     */
    public function setMemo(SearchStringField $memo): BomSearchBasic
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
     * @return BomSearchBasic
     */
    public function setName(SearchStringField $name): BomSearchBasic
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
     * @param SearchMultiSelectField $restrictToAssemblies
     * @return BomSearchBasic
     */
    public function setRestrictToAssemblies(SearchMultiSelectField $restrictToAssemblies): BomSearchBasic
    {
        $this->restrictToAssemblies = $restrictToAssemblies;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRestrictToAssemblies(): SearchMultiSelectField
    {
        return $this->restrictToAssemblies;
    }

    /**
     * @param SearchMultiSelectField $restrictToLocations
     * @return BomSearchBasic
     */
    public function setRestrictToLocations(SearchMultiSelectField $restrictToLocations): BomSearchBasic
    {
        $this->restrictToLocations = $restrictToLocations;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRestrictToLocations(): SearchMultiSelectField
    {
        return $this->restrictToLocations;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return BomSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): BomSearchBasic
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary(): SearchMultiSelectField
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchBooleanField $useComponentYield
     * @return BomSearchBasic
     */
    public function setUseComponentYield(SearchBooleanField $useComponentYield): BomSearchBasic
    {
        $this->useComponentYield = $useComponentYield;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUseComponentYield(): SearchBooleanField
    {
        return $this->useComponentYield;
    }

    /**
     * @param SearchBooleanField $usedOnAssembly
     * @return BomSearchBasic
     */
    public function setUsedOnAssembly(SearchBooleanField $usedOnAssembly): BomSearchBasic
    {
        $this->usedOnAssembly = $usedOnAssembly;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUsedOnAssembly(): SearchBooleanField
    {
        return $this->usedOnAssembly;
    }

}
