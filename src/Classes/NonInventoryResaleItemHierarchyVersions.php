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

class NonInventoryResaleItemHierarchyVersions {
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
    protected RecordRef $hierarchyNode;

    static $paramtypesmap = array(
        "isIncluded" => "boolean",
        "hierarchyVersion" => "RecordRef",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "hierarchyNode" => "RecordRef",
    );

    /**
     * @param bool $isIncluded
     * @return NonInventoryResaleItemHierarchyVersions
     */
    public function setIsIncluded(bool $isIncluded): NonInventoryResaleItemHierarchyVersions
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
     * @return NonInventoryResaleItemHierarchyVersions
     */
    public function setHierarchyVersion(RecordRef $hierarchyVersion): NonInventoryResaleItemHierarchyVersions
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
     * @return NonInventoryResaleItemHierarchyVersions
     */
    public function setStartDate(string $startDate): NonInventoryResaleItemHierarchyVersions
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
     * @return NonInventoryResaleItemHierarchyVersions
     */
    public function setEndDate(string $endDate): NonInventoryResaleItemHierarchyVersions
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
     * @param RecordRef $hierarchyNode
     * @return NonInventoryResaleItemHierarchyVersions
     */
    public function setHierarchyNode(RecordRef $hierarchyNode): NonInventoryResaleItemHierarchyVersions
    {
        $this->hierarchyNode = $hierarchyNode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getHierarchyNode(): RecordRef
    {
        return $this->hierarchyNode;
    }

}
