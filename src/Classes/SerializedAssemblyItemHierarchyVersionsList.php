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

class SerializedAssemblyItemHierarchyVersionsList {
    /**
     * @var SerializedAssemblyItemHierarchyVersions[]
     */
    protected array $serializedAssemblyItemHierarchyVersions;

    /**
     * @var bool
     */
    protected bool $replaceAll;

    static $paramtypesmap = array(
        "serializedAssemblyItemHierarchyVersions" => "SerializedAssemblyItemHierarchyVersions[]",
        "replaceAll" => "boolean",
    );

    /**
     * @param SerializedAssemblyItemHierarchyVersions[] $serializedAssemblyItemHierarchyVersions
     * @return SerializedAssemblyItemHierarchyVersionsList
     */
    public function setSerializedAssemblyItemHierarchyVersions(SerializedAssemblyItemHierarchyVersions $serializedAssemblyItemHierarchyVersions): SerializedAssemblyItemHierarchyVersionsList
    {
        $this->serializedAssemblyItemHierarchyVersions[] = $serializedAssemblyItemHierarchyVersions;
        return $this;
    }

    /**
     * @return SerializedAssemblyItemHierarchyVersions[]
     */
    public function getSerializedAssemblyItemHierarchyVersions(): array
    {
        return $this->serializedAssemblyItemHierarchyVersions;
    }

    /**
     * @param bool $replaceAll
     * @return SerializedAssemblyItemHierarchyVersionsList
     */
    public function setReplaceAll(bool $replaceAll): SerializedAssemblyItemHierarchyVersionsList
    {
        $this->replaceAll = $replaceAll;
        return $this;
    }

    /**
     * @return bool
     */
    public function getReplaceAll(): bool
    {
        return $this->replaceAll;
    }

}
