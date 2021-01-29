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

class ManufacturingRoutingSearchAdvanced extends SearchRecord {
    /**
     * @var ManufacturingRoutingSearch
     */
    protected ManufacturingRoutingSearch $criteria;

    /**
     * @var ManufacturingRoutingSearchRow
     */
    protected ManufacturingRoutingSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "ManufacturingRoutingSearch",
        "columns" => "ManufacturingRoutingSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param ManufacturingRoutingSearch $criteria
     * @return ManufacturingRoutingSearchAdvanced
     */
    public function setCriteria(ManufacturingRoutingSearch $criteria): ManufacturingRoutingSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return ManufacturingRoutingSearch
     */
    public function getCriteria(): ManufacturingRoutingSearch
    {
        return $this->criteria;
    }

    /**
     * @param ManufacturingRoutingSearchRow $columns
     * @return ManufacturingRoutingSearchAdvanced
     */
    public function setColumns(ManufacturingRoutingSearchRow $columns): ManufacturingRoutingSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return ManufacturingRoutingSearchRow
     */
    public function getColumns(): ManufacturingRoutingSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return ManufacturingRoutingSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): ManufacturingRoutingSearchAdvanced
    {
        $this->savedSearchId = $savedSearchId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSavedSearchId(): string
    {
        return $this->savedSearchId;
    }

    /**
     * @param string $savedSearchScriptId
     * @return ManufacturingRoutingSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): ManufacturingRoutingSearchAdvanced
    {
        $this->savedSearchScriptId = $savedSearchScriptId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSavedSearchScriptId(): string
    {
        return $this->savedSearchScriptId;
    }

}
