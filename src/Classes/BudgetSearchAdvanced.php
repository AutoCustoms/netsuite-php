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

class BudgetSearchAdvanced extends SearchRecord {
    /**
     * @var BudgetSearch
     */
    protected BudgetSearch $criteria;

    /**
     * @var BudgetSearchRow
     */
    protected BudgetSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "BudgetSearch",
        "columns" => "BudgetSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param BudgetSearch $criteria
     * @return BudgetSearchAdvanced
     */
    public function setCriteria(BudgetSearch $criteria): BudgetSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return BudgetSearch
     */
    public function getCriteria(): BudgetSearch
    {
        return $this->criteria;
    }

    /**
     * @param BudgetSearchRow $columns
     * @return BudgetSearchAdvanced
     */
    public function setColumns(BudgetSearchRow $columns): BudgetSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return BudgetSearchRow
     */
    public function getColumns(): BudgetSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return BudgetSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): BudgetSearchAdvanced
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
     * @return BudgetSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): BudgetSearchAdvanced
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
