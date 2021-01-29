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

class AssemblyItemBomSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $assembly;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $billOfMaterials;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $default;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $locations;

    static $paramtypesmap = array(
        "assembly" => "SearchMultiSelectField",
        "billOfMaterials" => "SearchMultiSelectField",
        "default" => "SearchBooleanField",
        "locations" => "SearchMultiSelectField",
    );

    /**
     * @param SearchMultiSelectField $assembly
     * @return AssemblyItemBomSearchBasic
     */
    public function setAssembly(SearchMultiSelectField $assembly): AssemblyItemBomSearchBasic
    {
        $this->assembly = $assembly;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAssembly(): SearchMultiSelectField
    {
        return $this->assembly;
    }

    /**
     * @param SearchMultiSelectField $billOfMaterials
     * @return AssemblyItemBomSearchBasic
     */
    public function setBillOfMaterials(SearchMultiSelectField $billOfMaterials): AssemblyItemBomSearchBasic
    {
        $this->billOfMaterials = $billOfMaterials;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillOfMaterials(): SearchMultiSelectField
    {
        return $this->billOfMaterials;
    }

    /**
     * @param SearchBooleanField $default
     * @return AssemblyItemBomSearchBasic
     */
    public function setDefault(SearchBooleanField $default): AssemblyItemBomSearchBasic
    {
        $this->default = $default;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getDefault(): SearchBooleanField
    {
        return $this->default;
    }

    /**
     * @param SearchMultiSelectField $locations
     * @return AssemblyItemBomSearchBasic
     */
    public function setLocations(SearchMultiSelectField $locations): AssemblyItemBomSearchBasic
    {
        $this->locations = $locations;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocations(): SearchMultiSelectField
    {
        return $this->locations;
    }

}
