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

class MerchandiseHierarchyNodeSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $description;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $hierarchyLevel;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $hierarchyVersion;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $parentNode;

    static $paramtypesmap = array(
        "description" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "hierarchyLevel" => "SearchColumnSelectField[]",
        "hierarchyVersion" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "name" => "SearchColumnStringField[]",
        "parentNode" => "SearchColumnSelectField[]",
    );

    /**
     * @param SearchColumnStringField[] $description
     * @return MerchandiseHierarchyNodeSearchRowBasic
     */
    public function setDescription(SearchColumnStringField $description): MerchandiseHierarchyNodeSearchRowBasic
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDescription(): array
    {
        return $this->description;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return MerchandiseHierarchyNodeSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): MerchandiseHierarchyNodeSearchRowBasic
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
     * @param SearchColumnSelectField[] $hierarchyLevel
     * @return MerchandiseHierarchyNodeSearchRowBasic
     */
    public function setHierarchyLevel(SearchColumnSelectField $hierarchyLevel): MerchandiseHierarchyNodeSearchRowBasic
    {
        $this->hierarchyLevel[] = $hierarchyLevel;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getHierarchyLevel(): array
    {
        return $this->hierarchyLevel;
    }

    /**
     * @param SearchColumnSelectField[] $hierarchyVersion
     * @return MerchandiseHierarchyNodeSearchRowBasic
     */
    public function setHierarchyVersion(SearchColumnSelectField $hierarchyVersion): MerchandiseHierarchyNodeSearchRowBasic
    {
        $this->hierarchyVersion[] = $hierarchyVersion;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getHierarchyVersion(): array
    {
        return $this->hierarchyVersion;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return MerchandiseHierarchyNodeSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): MerchandiseHierarchyNodeSearchRowBasic
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
     * @param SearchColumnStringField[] $name
     * @return MerchandiseHierarchyNodeSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): MerchandiseHierarchyNodeSearchRowBasic
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
     * @param SearchColumnSelectField[] $parentNode
     * @return MerchandiseHierarchyNodeSearchRowBasic
     */
    public function setParentNode(SearchColumnSelectField $parentNode): MerchandiseHierarchyNodeSearchRowBasic
    {
        $this->parentNode[] = $parentNode;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getParentNode(): array
    {
        return $this->parentNode;
    }

}
