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

class CurrencyRateSearchAdvanced extends SearchRecord {
    /**
     * @var CurrencyRateSearch
     */
    protected CurrencyRateSearch $criteria;

    /**
     * @var CurrencyRateSearchRow
     */
    protected CurrencyRateSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "CurrencyRateSearch",
        "columns" => "CurrencyRateSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param CurrencyRateSearch $criteria
     * @return CurrencyRateSearchAdvanced
     */
    public function setCriteria(CurrencyRateSearch $criteria): CurrencyRateSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return CurrencyRateSearch
     */
    public function getCriteria(): CurrencyRateSearch
    {
        return $this->criteria;
    }

    /**
     * @param CurrencyRateSearchRow $columns
     * @return CurrencyRateSearchAdvanced
     */
    public function setColumns(CurrencyRateSearchRow $columns): CurrencyRateSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return CurrencyRateSearchRow
     */
    public function getColumns(): CurrencyRateSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return CurrencyRateSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): CurrencyRateSearchAdvanced
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
     * @return CurrencyRateSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): CurrencyRateSearchAdvanced
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
