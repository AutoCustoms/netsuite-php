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

class Bom extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var bool
     */
    protected bool $usedOnAssembly;

    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var bool
     */
    protected bool $useComponentYield;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $legacyBomForAssembly;

    /**
     * @var bool
     */
    protected bool $availableForAllAssemblies;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $restrictToAssembliesList;

    /**
     * @var bool
     */
    protected bool $availableForAllLocations;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $restrictToLocationsList;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $subsidiaryList;

    /**
     * @var bool
     */
    protected bool $includeChildren;

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
        "usedOnAssembly" => "boolean",
        "createdDate" => "dateTime",
        "isInactive" => "boolean",
        "useComponentYield" => "boolean",
        "memo" => "string",
        "legacyBomForAssembly" => "RecordRef",
        "availableForAllAssemblies" => "boolean",
        "restrictToAssembliesList" => "RecordRefList",
        "availableForAllLocations" => "boolean",
        "restrictToLocationsList" => "RecordRefList",
        "subsidiaryList" => "RecordRefList",
        "includeChildren" => "boolean",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return Bom
     */
    public function setCustomForm(RecordRef $customForm): Bom
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
     * @return Bom
     */
    public function setName(string $name): Bom
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
     * @param bool $usedOnAssembly
     * @return Bom
     */
    public function setUsedOnAssembly(bool $usedOnAssembly): Bom
    {
        $this->usedOnAssembly = $usedOnAssembly;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUsedOnAssembly(): bool
    {
        return $this->usedOnAssembly;
    }

    /**
     * @param string $createdDate
     * @return Bom
     */
    public function setCreatedDate(string $createdDate): Bom
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->createdDate;
    }

    /**
     * @param bool $isInactive
     * @return Bom
     */
    public function setIsInactive(bool $isInactive): Bom
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
     * @param bool $useComponentYield
     * @return Bom
     */
    public function setUseComponentYield(bool $useComponentYield): Bom
    {
        $this->useComponentYield = $useComponentYield;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUseComponentYield(): bool
    {
        return $this->useComponentYield;
    }

    /**
     * @param string $memo
     * @return Bom
     */
    public function setMemo(string $memo): Bom
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * @param RecordRef $legacyBomForAssembly
     * @return Bom
     */
    public function setLegacyBomForAssembly(RecordRef $legacyBomForAssembly): Bom
    {
        $this->legacyBomForAssembly = $legacyBomForAssembly;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLegacyBomForAssembly(): RecordRef
    {
        return $this->legacyBomForAssembly;
    }

    /**
     * @param bool $availableForAllAssemblies
     * @return Bom
     */
    public function setAvailableForAllAssemblies(bool $availableForAllAssemblies): Bom
    {
        $this->availableForAllAssemblies = $availableForAllAssemblies;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAvailableForAllAssemblies(): bool
    {
        return $this->availableForAllAssemblies;
    }

    /**
     * @param RecordRefList $restrictToAssembliesList
     * @return Bom
     */
    public function setRestrictToAssembliesList(RecordRefList $restrictToAssembliesList): Bom
    {
        $this->restrictToAssembliesList = $restrictToAssembliesList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getRestrictToAssembliesList(): RecordRefList
    {
        return $this->restrictToAssembliesList;
    }

    /**
     * @param bool $availableForAllLocations
     * @return Bom
     */
    public function setAvailableForAllLocations(bool $availableForAllLocations): Bom
    {
        $this->availableForAllLocations = $availableForAllLocations;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAvailableForAllLocations(): bool
    {
        return $this->availableForAllLocations;
    }

    /**
     * @param RecordRefList $restrictToLocationsList
     * @return Bom
     */
    public function setRestrictToLocationsList(RecordRefList $restrictToLocationsList): Bom
    {
        $this->restrictToLocationsList = $restrictToLocationsList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getRestrictToLocationsList(): RecordRefList
    {
        return $this->restrictToLocationsList;
    }

    /**
     * @param RecordRefList $subsidiaryList
     * @return Bom
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): Bom
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
     * @param bool $includeChildren
     * @return Bom
     */
    public function setIncludeChildren(bool $includeChildren): Bom
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
     * @param CustomFieldList $customFieldList
     * @return Bom
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Bom
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
     * @return Bom
     */
    public function setInternalId(string $internalId): Bom
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
     * @return Bom
     */
    public function setExternalId(string $externalId): Bom
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
