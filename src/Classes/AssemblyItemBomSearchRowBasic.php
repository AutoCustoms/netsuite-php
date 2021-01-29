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

class AssemblyItemBomSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $assembly;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $billOfMaterials;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $default;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $locations;

    static $paramtypesmap = array(
        "assembly" => "SearchColumnSelectField[]",
        "billOfMaterials" => "SearchColumnSelectField[]",
        "default" => "SearchColumnBooleanField[]",
        "locations" => "SearchColumnSelectField[]",
    );

    /**
     * @param SearchColumnSelectField[] $assembly
     * @return AssemblyItemBomSearchRowBasic
     */
    public function setAssembly(SearchColumnSelectField $assembly): AssemblyItemBomSearchRowBasic
    {
        $this->assembly[] = $assembly;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAssembly(): array
    {
        return $this->assembly;
    }

    /**
     * @param SearchColumnSelectField[] $billOfMaterials
     * @return AssemblyItemBomSearchRowBasic
     */
    public function setBillOfMaterials(SearchColumnSelectField $billOfMaterials): AssemblyItemBomSearchRowBasic
    {
        $this->billOfMaterials[] = $billOfMaterials;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillOfMaterials(): array
    {
        return $this->billOfMaterials;
    }

    /**
     * @param SearchColumnBooleanField[] $default
     * @return AssemblyItemBomSearchRowBasic
     */
    public function setDefault(SearchColumnBooleanField $default): AssemblyItemBomSearchRowBasic
    {
        $this->default[] = $default;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getDefault(): array
    {
        return $this->default;
    }

    /**
     * @param SearchColumnSelectField[] $locations
     * @return AssemblyItemBomSearchRowBasic
     */
    public function setLocations(SearchColumnSelectField $locations): AssemblyItemBomSearchRowBasic
    {
        $this->locations[] = $locations;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocations(): array
    {
        return $this->locations;
    }

}
