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

class FairValuePriceSearchAdvanced extends SearchRecord {
    /**
     * @var FairValuePriceSearch
     */
    protected FairValuePriceSearch $criteria;

    /**
     * @var FairValuePriceSearchRow
     */
    protected FairValuePriceSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "FairValuePriceSearch",
        "columns" => "FairValuePriceSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param FairValuePriceSearch $criteria
     * @return FairValuePriceSearchAdvanced
     */
    public function setCriteria(FairValuePriceSearch $criteria): FairValuePriceSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return FairValuePriceSearch
     */
    public function getCriteria(): FairValuePriceSearch
    {
        return $this->criteria;
    }

    /**
     * @param FairValuePriceSearchRow $columns
     * @return FairValuePriceSearchAdvanced
     */
    public function setColumns(FairValuePriceSearchRow $columns): FairValuePriceSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return FairValuePriceSearchRow
     */
    public function getColumns(): FairValuePriceSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return FairValuePriceSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): FairValuePriceSearchAdvanced
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
     * @return FairValuePriceSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): FairValuePriceSearchAdvanced
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
