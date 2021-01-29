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

class AccountingPeriodSearchAdvanced extends SearchRecord {
    /**
     * @var AccountingPeriodSearch
     */
    protected AccountingPeriodSearch $criteria;

    /**
     * @var AccountingPeriodSearchRow
     */
    protected AccountingPeriodSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "AccountingPeriodSearch",
        "columns" => "AccountingPeriodSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param AccountingPeriodSearch $criteria
     * @return AccountingPeriodSearchAdvanced
     */
    public function setCriteria(AccountingPeriodSearch $criteria): AccountingPeriodSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return AccountingPeriodSearch
     */
    public function getCriteria(): AccountingPeriodSearch
    {
        return $this->criteria;
    }

    /**
     * @param AccountingPeriodSearchRow $columns
     * @return AccountingPeriodSearchAdvanced
     */
    public function setColumns(AccountingPeriodSearchRow $columns): AccountingPeriodSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return AccountingPeriodSearchRow
     */
    public function getColumns(): AccountingPeriodSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return AccountingPeriodSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): AccountingPeriodSearchAdvanced
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
     * @return AccountingPeriodSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): AccountingPeriodSearchAdvanced
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
