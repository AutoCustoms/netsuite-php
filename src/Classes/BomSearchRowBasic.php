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

class BomSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $availableForAllAssemblies;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $availableForAllLocations;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $createdDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $includeChildren;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $legacyBomForAssembly;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $memo;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $restrictToAssemblies;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $restrictToLocations;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $revisionName;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiaryNoHierarchy;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $useComponentYield;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $usedOnAssembly;

    static $paramtypesmap = array(
        "availableForAllAssemblies" => "SearchColumnBooleanField[]",
        "availableForAllLocations" => "SearchColumnBooleanField[]",
        "createdDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "includeChildren" => "SearchColumnBooleanField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "legacyBomForAssembly" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "restrictToAssemblies" => "SearchColumnSelectField[]",
        "restrictToLocations" => "SearchColumnSelectField[]",
        "revisionName" => "SearchColumnStringField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "subsidiaryNoHierarchy" => "SearchColumnSelectField[]",
        "useComponentYield" => "SearchColumnBooleanField[]",
        "usedOnAssembly" => "SearchColumnBooleanField[]",
    );

    /**
     * @param SearchColumnBooleanField[] $availableForAllAssemblies
     * @return BomSearchRowBasic
     */
    public function setAvailableForAllAssemblies(SearchColumnBooleanField $availableForAllAssemblies): BomSearchRowBasic
    {
        $this->availableForAllAssemblies[] = $availableForAllAssemblies;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAvailableForAllAssemblies(): array
    {
        return $this->availableForAllAssemblies;
    }

    /**
     * @param SearchColumnBooleanField[] $availableForAllLocations
     * @return BomSearchRowBasic
     */
    public function setAvailableForAllLocations(SearchColumnBooleanField $availableForAllLocations): BomSearchRowBasic
    {
        $this->availableForAllLocations[] = $availableForAllLocations;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAvailableForAllLocations(): array
    {
        return $this->availableForAllLocations;
    }

    /**
     * @param SearchColumnDateField[] $createdDate
     * @return BomSearchRowBasic
     */
    public function setCreatedDate(SearchColumnDateField $createdDate): BomSearchRowBasic
    {
        $this->createdDate[] = $createdDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCreatedDate(): array
    {
        return $this->createdDate;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return BomSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): BomSearchRowBasic
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
     * @param SearchColumnBooleanField[] $includeChildren
     * @return BomSearchRowBasic
     */
    public function setIncludeChildren(SearchColumnBooleanField $includeChildren): BomSearchRowBasic
    {
        $this->includeChildren[] = $includeChildren;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIncludeChildren(): array
    {
        return $this->includeChildren;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return BomSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): BomSearchRowBasic
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
     * @return BomSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): BomSearchRowBasic
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
     * @param SearchColumnSelectField[] $legacyBomForAssembly
     * @return BomSearchRowBasic
     */
    public function setLegacyBomForAssembly(SearchColumnSelectField $legacyBomForAssembly): BomSearchRowBasic
    {
        $this->legacyBomForAssembly[] = $legacyBomForAssembly;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLegacyBomForAssembly(): array
    {
        return $this->legacyBomForAssembly;
    }

    /**
     * @param SearchColumnStringField[] $memo
     * @return BomSearchRowBasic
     */
    public function setMemo(SearchColumnStringField $memo): BomSearchRowBasic
    {
        $this->memo[] = $memo;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMemo(): array
    {
        return $this->memo;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return BomSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): BomSearchRowBasic
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
     * @param SearchColumnSelectField[] $restrictToAssemblies
     * @return BomSearchRowBasic
     */
    public function setRestrictToAssemblies(SearchColumnSelectField $restrictToAssemblies): BomSearchRowBasic
    {
        $this->restrictToAssemblies[] = $restrictToAssemblies;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRestrictToAssemblies(): array
    {
        return $this->restrictToAssemblies;
    }

    /**
     * @param SearchColumnSelectField[] $restrictToLocations
     * @return BomSearchRowBasic
     */
    public function setRestrictToLocations(SearchColumnSelectField $restrictToLocations): BomSearchRowBasic
    {
        $this->restrictToLocations[] = $restrictToLocations;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRestrictToLocations(): array
    {
        return $this->restrictToLocations;
    }

    /**
     * @param SearchColumnStringField[] $revisionName
     * @return BomSearchRowBasic
     */
    public function setRevisionName(SearchColumnStringField $revisionName): BomSearchRowBasic
    {
        $this->revisionName[] = $revisionName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRevisionName(): array
    {
        return $this->revisionName;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return BomSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): BomSearchRowBasic
    {
        $this->subsidiary[] = $subsidiary;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary(): array
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiaryNoHierarchy
     * @return BomSearchRowBasic
     */
    public function setSubsidiaryNoHierarchy(SearchColumnSelectField $subsidiaryNoHierarchy): BomSearchRowBasic
    {
        $this->subsidiaryNoHierarchy[] = $subsidiaryNoHierarchy;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiaryNoHierarchy(): array
    {
        return $this->subsidiaryNoHierarchy;
    }

    /**
     * @param SearchColumnBooleanField[] $useComponentYield
     * @return BomSearchRowBasic
     */
    public function setUseComponentYield(SearchColumnBooleanField $useComponentYield): BomSearchRowBasic
    {
        $this->useComponentYield[] = $useComponentYield;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUseComponentYield(): array
    {
        return $this->useComponentYield;
    }

    /**
     * @param SearchColumnBooleanField[] $usedOnAssembly
     * @return BomSearchRowBasic
     */
    public function setUsedOnAssembly(SearchColumnBooleanField $usedOnAssembly): BomSearchRowBasic
    {
        $this->usedOnAssembly[] = $usedOnAssembly;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUsedOnAssembly(): array
    {
        return $this->usedOnAssembly;
    }

}
