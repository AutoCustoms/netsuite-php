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

class ManufacturingCostTemplateSearchAdvanced extends SearchRecord {
    /**
     * @var ManufacturingCostTemplateSearch
     */
    protected ManufacturingCostTemplateSearch $criteria;

    /**
     * @var ManufacturingCostTemplateSearchRow
     */
    protected ManufacturingCostTemplateSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "ManufacturingCostTemplateSearch",
        "columns" => "ManufacturingCostTemplateSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param ManufacturingCostTemplateSearch $criteria
     * @return ManufacturingCostTemplateSearchAdvanced
     */
    public function setCriteria(ManufacturingCostTemplateSearch $criteria): ManufacturingCostTemplateSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return ManufacturingCostTemplateSearch
     */
    public function getCriteria(): ManufacturingCostTemplateSearch
    {
        return $this->criteria;
    }

    /**
     * @param ManufacturingCostTemplateSearchRow $columns
     * @return ManufacturingCostTemplateSearchAdvanced
     */
    public function setColumns(ManufacturingCostTemplateSearchRow $columns): ManufacturingCostTemplateSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return ManufacturingCostTemplateSearchRow
     */
    public function getColumns(): ManufacturingCostTemplateSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return ManufacturingCostTemplateSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): ManufacturingCostTemplateSearchAdvanced
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
     * @return ManufacturingCostTemplateSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): ManufacturingCostTemplateSearchAdvanced
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
