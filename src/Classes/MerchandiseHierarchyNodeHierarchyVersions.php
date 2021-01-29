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

class MerchandiseHierarchyNodeHierarchyVersions {
    /**
     * @var bool
     */
    protected bool $isIncluded;

    /**
     * @var RecordRef
     */
    protected RecordRef $hierarchyVersion;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $endDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $hierarchyLevel;

    /**
     * @var RecordRef
     */
    protected RecordRef $parentNode;

    static $paramtypesmap = array(
        "isIncluded" => "boolean",
        "hierarchyVersion" => "RecordRef",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "hierarchyLevel" => "RecordRef",
        "parentNode" => "RecordRef",
    );

    /**
     * @param bool $isIncluded
     * @return MerchandiseHierarchyNodeHierarchyVersions
     */
    public function setIsIncluded(bool $isIncluded): MerchandiseHierarchyNodeHierarchyVersions
    {
        $this->isIncluded = $isIncluded;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsIncluded(): bool
    {
        return $this->isIncluded;
    }

    /**
     * @param RecordRef $hierarchyVersion
     * @return MerchandiseHierarchyNodeHierarchyVersions
     */
    public function setHierarchyVersion(RecordRef $hierarchyVersion): MerchandiseHierarchyNodeHierarchyVersions
    {
        $this->hierarchyVersion = $hierarchyVersion;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getHierarchyVersion(): RecordRef
    {
        return $this->hierarchyVersion;
    }

    /**
     * @param string $startDate
     * @return MerchandiseHierarchyNodeHierarchyVersions
     */
    public function setStartDate(string $startDate): MerchandiseHierarchyNodeHierarchyVersions
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $endDate
     * @return MerchandiseHierarchyNodeHierarchyVersions
     */
    public function setEndDate(string $endDate): MerchandiseHierarchyNodeHierarchyVersions
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param RecordRef $hierarchyLevel
     * @return MerchandiseHierarchyNodeHierarchyVersions
     */
    public function setHierarchyLevel(RecordRef $hierarchyLevel): MerchandiseHierarchyNodeHierarchyVersions
    {
        $this->hierarchyLevel = $hierarchyLevel;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getHierarchyLevel(): RecordRef
    {
        return $this->hierarchyLevel;
    }

    /**
     * @param RecordRef $parentNode
     * @return MerchandiseHierarchyNodeHierarchyVersions
     */
    public function setParentNode(RecordRef $parentNode): MerchandiseHierarchyNodeHierarchyVersions
    {
        $this->parentNode = $parentNode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParentNode(): RecordRef
    {
        return $this->parentNode;
    }

}
