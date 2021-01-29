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

class MerchandiseHierarchyNode extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var MerchandiseHierarchyNodeHierarchyVersionsList
     */
    protected MerchandiseHierarchyNodeHierarchyVersionsList $hierarchyVersionsList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "name" => "string",
        "description" => "string",
        "hierarchyVersionsList" => "MerchandiseHierarchyNodeHierarchyVersionsList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return MerchandiseHierarchyNode
     */
    public function setName(string $name): MerchandiseHierarchyNode
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
     * @param string $description
     * @return MerchandiseHierarchyNode
     */
    public function setDescription(string $description): MerchandiseHierarchyNode
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param MerchandiseHierarchyNodeHierarchyVersionsList $hierarchyVersionsList
     * @return MerchandiseHierarchyNode
     */
    public function setHierarchyVersionsList(MerchandiseHierarchyNodeHierarchyVersionsList $hierarchyVersionsList): MerchandiseHierarchyNode
    {
        $this->hierarchyVersionsList = $hierarchyVersionsList;
        return $this;
    }

    /**
     * @return MerchandiseHierarchyNodeHierarchyVersionsList
     */
    public function getHierarchyVersionsList(): MerchandiseHierarchyNodeHierarchyVersionsList
    {
        return $this->hierarchyVersionsList;
    }

    /**
     * @param string $internalId
     * @return MerchandiseHierarchyNode
     */
    public function setInternalId(string $internalId): MerchandiseHierarchyNode
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
     * @return MerchandiseHierarchyNode
     */
    public function setExternalId(string $externalId): MerchandiseHierarchyNode
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
