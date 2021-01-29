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

class ConsolidatedExchangeRateSearchAdvanced extends SearchRecord {
    /**
     * @var ConsolidatedExchangeRateSearch
     */
    protected ConsolidatedExchangeRateSearch $criteria;

    /**
     * @var ConsolidatedExchangeRateSearchRow
     */
    protected ConsolidatedExchangeRateSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "ConsolidatedExchangeRateSearch",
        "columns" => "ConsolidatedExchangeRateSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param ConsolidatedExchangeRateSearch $criteria
     * @return ConsolidatedExchangeRateSearchAdvanced
     */
    public function setCriteria(ConsolidatedExchangeRateSearch $criteria): ConsolidatedExchangeRateSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return ConsolidatedExchangeRateSearch
     */
    public function getCriteria(): ConsolidatedExchangeRateSearch
    {
        return $this->criteria;
    }

    /**
     * @param ConsolidatedExchangeRateSearchRow $columns
     * @return ConsolidatedExchangeRateSearchAdvanced
     */
    public function setColumns(ConsolidatedExchangeRateSearchRow $columns): ConsolidatedExchangeRateSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return ConsolidatedExchangeRateSearchRow
     */
    public function getColumns(): ConsolidatedExchangeRateSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return ConsolidatedExchangeRateSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): ConsolidatedExchangeRateSearchAdvanced
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
     * @return ConsolidatedExchangeRateSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): ConsolidatedExchangeRateSearchAdvanced
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
